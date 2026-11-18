<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContentBlock;
use App\Services\ActivityLogger;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ContentController extends Controller
{
    public function index(Request $request): View
    {
        $page = $request->string('page')->toString() ?: 'home';
        $blocks = ContentBlock::query()->where('page', $page)->orderBy('sort_order')->get();
        $pages = ContentBlock::query()->distinct()->orderBy('page')->pluck('page');

        return view('admin.content.index', compact('blocks', 'pages', 'page'));
    }

    public function edit(ContentBlock $contentBlock): View
    {
        return view('admin.content.edit', compact('contentBlock'));
    }

    public function update(Request $request, ContentBlock $contentBlock): RedirectResponse
    {
        $data = $request->validate([
            'label' => ['nullable', 'string', 'max:150'],
            'title' => ['nullable', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string', 'max:1000'],
            'body' => ['nullable', 'string', 'max:12000'],
            'link_text' => ['nullable', 'string', 'max:120'],
            'link_url' => ['nullable', 'string', 'max:500'],
            'sort_order' => ['nullable', 'integer', 'min:0', 'max:65535'],
            'is_active' => ['nullable', 'boolean'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
        ]);

        $data['is_active'] = $request->boolean('is_active');
        $data['sort_order'] = (int) ($data['sort_order'] ?? 0);

        if ($request->hasFile('image')) {
            if ($contentBlock->image_path && str_starts_with($contentBlock->image_path, 'content/')) {
                Storage::disk('public')->delete($contentBlock->image_path);
            }
            $data['image_path'] = $request->file('image')->store('content', 'public');
        }

        $contentBlock->update($data);
        ContentBlock::clearPageCache($contentBlock->page);
        ActivityLogger::record('content.update', $contentBlock, "Updated {$contentBlock->page}.{$contentBlock->block_key}");

        return back()->with('success', 'Content block updated.');
    }
}
