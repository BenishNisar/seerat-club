<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MediaItem;
use App\Services\ActivityLogger;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class MediaController extends Controller
{
    public function index(Request $request): View
    {
        $media = MediaItem::query()
            ->when($request->q, fn ($q, $term) => $q->where('original_name', 'like', "%{$term}%"))
            ->when($request->collection, fn ($q, $collection) => $q->where('collection', $collection))
            ->latest()
            ->paginate(24)
            ->withQueryString();

        return view('admin.media.index', compact('media'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'file' => ['required', 'file', 'mimes:jpg,jpeg,png,webp,pdf', 'max:10240'],
            'collection' => ['required', 'string', 'max:80'],
            'alt_text' => ['nullable', 'string', 'max:255'],
        ]);

        $file = $request->file('file');
        $path = $file->store('media/library', 'public');
        $width = $height = null;

        if (str_starts_with((string) $file->getMimeType(), 'image/')) {
            $size = @getimagesize($file->getRealPath());
            if ($size) {
                [$width, $height] = $size;
            }
        }

        $item = MediaItem::create([
            'uploaded_by' => auth()->id(),
            'collection' => $data['collection'],
            'disk' => 'public',
            'path' => $path,
            'original_name' => $file->getClientOriginalName(),
            'mime_type' => $file->getMimeType(),
            'size_bytes' => $file->getSize(),
            'width' => $width,
            'height' => $height,
            'alt_text' => $data['alt_text'] ?? null,
        ]);

        ActivityLogger::record('media.upload', $item, 'Media uploaded');

        return back()->with('success', 'Media uploaded.');
    }

    public function destroy(MediaItem $media): RedirectResponse
    {
        Storage::disk($media->disk)->delete($media->path);
        ActivityLogger::record('media.delete', $media, 'Media deleted');
        $media->delete();

        return back()->with('success', 'Media deleted.');
    }
}
