<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\BinaryFileResponse;

class LegacyPageController extends Controller
{
    public function show(string $page): BinaryFileResponse
    {
        $allowed = [
            'about', 'blog', 'blog-camp', 'blog-club', 'blog-miscellaneous',
            'blog-detail', 'gallery1', 'search', 'search-found', 'search-not-found',
            'story-true-origins-of-christmas',
            'story-the-friendly-fire',
            'story-the-7-habits-of-historys-most-influential-leader',
            'story-raised-by-the-sands-chosen-by-destiny',
            'story-the-year-of-the-elephant',
            'story-seerat-quest-2024',
            'story-from-the-ashes-of-gaza-to-the-victory-of-makkah',
            'story-once-upon-a-time-in-jannat',
            'event-fatah-e-mecca',
        ];

        abort_unless(in_array($page, $allowed, true), 404);

        $path = base_path($page.'.html');
        abort_unless(is_file($path), 404);

        return response()->file($path, ['Content-Type' => 'text/html; charset=UTF-8']);
    }
}
