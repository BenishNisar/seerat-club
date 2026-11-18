<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\View\View;

class PublicEventController extends Controller
{
    public function index(): View
    {
        $events = Event::with('cycle')
            ->where('status', 'published')
            ->where(fn ($query) => $query->whereNull('published_at')->orWhere('published_at', '<=', now()))
            ->orderByDesc('event_date')
            ->paginate(12);

        return view('events.index', compact('events'));
    }

    public function show(Event $event): View
    {
        abort_unless(
            $event->status === 'published'
            && (! $event->published_at || $event->published_at->lte(now())),
            404
        );

        $event->load('cycle', 'media');

        return view('events.show', compact('event'));
    }
}
