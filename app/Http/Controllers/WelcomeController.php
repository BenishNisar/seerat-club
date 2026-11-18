<?php

namespace App\Http\Controllers;

use App\Models\ContentBlock;
use App\Models\Event;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;

class WelcomeController extends Controller
{
    public function index(): View
    {
        $homeContent = collect();
        $featuredEvents = collect();

        try {
            if (Schema::hasTable('content_blocks')) {
                $homeContent = ContentBlock::forPage('home');
            }
            if (Schema::hasTable('events')) {
                $featuredEvents = Event::query()
                    ->with('cycle')
                    ->where('status', 'published')
                    ->where(fn ($query) => $query->whereNull('published_at')->orWhere('published_at', '<=', now()))
                    ->orderByDesc('event_date')
                    ->limit(5)
                    ->get();
            }
        } catch (\Throwable) {
            // Keep the public homepage available during first-time installation/migrations.
        }

        return view('Home.welcome', compact('homeContent', 'featuredEvents'));
    }
}
