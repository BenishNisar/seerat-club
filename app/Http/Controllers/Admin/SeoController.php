<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageSeo;
use App\Services\ActivityLogger;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SeoController extends Controller
{
    public function index(): View
    {
        $pages = [
            'Home.welcome' => 'Homepage',
            'Home.contact' => 'Contact',
            'Home.registration' => 'Registration',
            'Home.girls' => 'Girls',
            'Home.podcast' => 'Podcast',
            'Home.volunteer' => 'Volunteer',
            'past-events.index' => 'Past Events',
            'past-events.cycle-1.index' => 'Cycle 1',
            'past-events.cycle-2-2026-onwards.index' => 'Cycle 2',
            'events.index' => 'Dynamic Events',
        ];

        $records = PageSeo::whereIn('page_key', array_keys($pages))->get()->keyBy('page_key');

        return view('admin.seo.index', compact('pages', 'records'));
    }

    public function update(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'page_key' => ['required', 'string', 'max:120'],
            'title' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:1000'],
            'keywords' => ['nullable', 'string', 'max:1000'],
            'canonical_url' => ['nullable', 'url', 'max:500'],
            'og_image_path' => ['nullable', 'string', 'max:500'],
            'robots' => ['nullable', 'string', 'max:80'],
        ]);

        $seo = PageSeo::updateOrCreate(
            ['page_key' => $data['page_key']],
            $data
        );

        ActivityLogger::record('seo.update', $seo, 'Page SEO updated');

        return back()->with('success', 'SEO settings saved.');
    }
}
