<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

class SitemapController extends Controller
{
    public function __invoke(): Response
    {
        $namedRoutes = [
            'Home.welcome', 'Home.contact', 'Home.feedback', 'Home.registration',
            'Home.girls', 'Home.podcast', 'Home.volunteer', 'blog.index',
            'past-events.index', 'past-events.cycle-1.index',
            'past-events.cycle-2-2026-onwards.index', 'events.index',
        ];

        $urls = collect($namedRoutes)
            ->filter(fn ($name) => Route::has($name))
            ->map(fn ($name) => ['loc' => route($name), 'lastmod' => null]);

        try {
            if (Schema::hasTable('events')) {
                Event::query()
                    ->where('status', 'published')
                    ->orderBy('id')
                    ->chunk(250, function ($events) use (&$urls) {
                        foreach ($events as $event) {
                            $urls->push([
                                'loc' => route('events.show', $event),
                                'lastmod' => $event->updated_at?->toAtomString(),
                            ]);
                        }
                    });
            }
        } catch (\Throwable) {
            // Keep the sitemap available during maintenance or first-time setup.
        }

        $xml = view('sitemap', ['urls' => $urls])->render();
        return response($xml, 200, ['Content-Type' => 'application/xml; charset=UTF-8']);
    }
}
