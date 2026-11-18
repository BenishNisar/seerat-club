<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EventRequest;
use App\Models\Event;
use App\Models\EventCycle;
use App\Models\EventMedia;
use App\Services\ActivityLogger;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class EventController extends Controller
{
    /**
     * Display all events.
     */
    public function index(Request $request): View
    {
        $events = Event::query()
            ->with('cycle')
            ->withCount('media')

            // Search
            ->when($request->filled('q'), function ($query) use ($request) {
                $term = trim($request->q);

                $query->where(function ($q) use ($term) {
                    $q->where('title', 'like', "%{$term}%")
                        ->orWhere('slug', 'like', "%{$term}%")
                        ->orWhere('location', 'like', "%{$term}%");
                });
            })

            // Status filter
            ->when(
                $request->filled('status'),
                fn ($query) =>
                    $query->where('status', $request->status)
            )

            // Cycle filter
            ->when(
                $request->filled('cycle'),
                fn ($query) =>
                    $query->where(
                        'event_cycle_id',
                        $request->cycle
                    )
            )

            ->orderBy('sort_order')
            ->orderByDesc('event_date')
            ->orderByDesc('id')

            ->paginate(20)
            ->withQueryString();

        return view('admin.events.index', [
            'events' => $events,

            'cycles' => EventCycle::query()
                ->orderBy('sort_order')
                ->orderBy('name')
                ->get(),
        ]);
    }


    /**
     * Show create event form.
     */
    public function create(): View
    {
        return view('admin.events.form', [
            'event' => new Event(),

            'cycles' => EventCycle::query()
                ->orderBy('sort_order')
                ->orderBy('name')
                ->get(),
        ]);
    }


    /**
     * Store new event.
     */
    public function store(EventRequest $request): RedirectResponse
    {
        $event = $this->persist(
            new Event(),
            $request
        );

        ActivityLogger::record(
            'event.create',
            $event,
            'Event created'
        );

        return redirect()
            ->route('admin.events.edit', $event)
            ->with(
                'success',
                'Event created successfully.'
            );
    }


    /**
     * Show edit event form.
     */
    public function edit(Event $event): View
    {
        $event->load([
            'media' => function ($query) {
                $query
                    ->orderBy('sort_order')
                    ->orderBy('id');
            },
            'cycle',
        ]);

        return view('admin.events.form', [
            'event' => $event,

            'cycles' => EventCycle::query()
                ->orderBy('sort_order')
                ->orderBy('name')
                ->get(),
        ]);
    }


    /**
     * Update event.
     */
    public function update(
        EventRequest $request,
        Event $event
    ): RedirectResponse {
        $event = $this->persist(
            $event,
            $request
        );

        ActivityLogger::record(
            'event.update',
            $event,
            'Event updated'
        );

        return redirect()
            ->route('admin.events.edit', $event)
            ->with(
                'success',
                'Event updated successfully.'
            );
    }


    /**
     * Delete event.
     */
    public function destroy(
        Event $event
    ): RedirectResponse {

        /*
        |--------------------------------------------------------------------------
        | Log before deletion
        |--------------------------------------------------------------------------
        */

        ActivityLogger::record(
            'event.delete',
            $event,
            'Event deleted'
        );


        /*
        |--------------------------------------------------------------------------
        | Delete hero image
        |--------------------------------------------------------------------------
        */

        if ($event->hero_image_path) {
            Storage::disk('public')
                ->delete($event->hero_image_path);
        }


        /*
        |--------------------------------------------------------------------------
        | Delete poster image
        |--------------------------------------------------------------------------
        */

        if ($event->poster_image_path) {
            Storage::disk('public')
                ->delete($event->poster_image_path);
        }


        /*
        |--------------------------------------------------------------------------
        | Delete gallery files
        |--------------------------------------------------------------------------
        */

        $event->load('media');

        foreach ($event->media as $media) {

            if ($media->file_path) {
                Storage::disk('public')
                    ->delete($media->file_path);
            }

        }


        /*
        |--------------------------------------------------------------------------
        | Delete event
        |--------------------------------------------------------------------------
        */

        $event->delete();


        return redirect()
            ->route('admin.events.index')
            ->with(
                'success',
                'Event deleted successfully.'
            );
    }


    /**
     * Remove a single gallery image.
     */
    public function destroyMedia(
        EventMedia $media
    ): RedirectResponse {

        $event = $media->event;

        if ($media->file_path) {
            Storage::disk('public')
                ->delete($media->file_path);
        }

        $media->delete();


        if ($event) {

            ActivityLogger::record(
                'event.media.delete',
                $event,
                'Event gallery image removed'
            );

        }


        return back()->with(
            'success',
            'Gallery image removed successfully.'
        );
    }


    /**
     * Create / update event and media.
     */
    private function persist(
        Event $event,
        EventRequest $request
    ): Event {

        /*
        |--------------------------------------------------------------------------
        | Validated data
        |--------------------------------------------------------------------------
        */

        $data = $request
            ->safe()
            ->except([
                'hero_image',
                'poster_image',
                'gallery',
            ]);


        $data['is_past'] =
            $request->boolean('is_past');

        $data['updated_by'] =
            auth()->id();


        if (! $event->exists) {
            $data['created_by'] =
                auth()->id();
        }


        /*
        |--------------------------------------------------------------------------
        | Publish timestamp
        |--------------------------------------------------------------------------
        */

        if (
            ($data['status'] ?? null)
            === 'published'
        ) {

            if (! $event->published_at) {
                $data['published_at'] = now();
            }

        } else {

            /*
             * Event moved back to draft/archive.
             */
            $data['published_at'] = null;

        }


        /*
        |--------------------------------------------------------------------------
        | Hero + poster uploads
        |--------------------------------------------------------------------------
        */

        $imageInputs = [
            'hero_image' =>
                'hero_image_path',

            'poster_image' =>
                'poster_image_path',
        ];


        foreach (
            $imageInputs as $input => $column
        ) {

            if (! $request->hasFile($input)) {
                continue;
            }


            /*
             * Remove previous image.
             */

            if ($event->{$column}) {

                Storage::disk('public')
                    ->delete(
                        $event->{$column}
                    );

            }


            /*
             * Store new image.
             */

            $data[$column] =
                $request
                    ->file($input)
                    ->store(
                        "events/{$input}",
                        'public'
                    );
        }


        /*
        |--------------------------------------------------------------------------
        | Save event first
        |--------------------------------------------------------------------------
        */

        $event->fill($data);

        $event->save();


        /*
        |--------------------------------------------------------------------------
        | Gallery images
        |--------------------------------------------------------------------------
        */

        $galleryFiles =
            $request->file(
                'gallery',
                []
            );


        if (! empty($galleryFiles)) {

            /*
             * Get max sort order only ONCE.
             *
             * Important:
             * Calling max() inside every loop iteration
             * creates gaps such as 1,3,6...
             */

            $currentSortOrder =
                (int) (
                    $event
                        ->media()
                        ->max('sort_order')
                    ?? 0
                );


            foreach (
                $galleryFiles as $index => $file
            ) {

                $path =
                    $file->store(
                        "events/{$event->id}/gallery",
                        'public'
                    );


                $event
                    ->media()
                    ->create([

                        'type' => 'image',

                        'file_path' => $path,

                        'alt_text' =>
                            $event->title
                            .' gallery image '
                            .($currentSortOrder + $index + 1),

                        'mime_type' =>
                            $file->getMimeType(),

                        'size_bytes' =>
                            $file->getSize(),

                        'sort_order' =>
                            $currentSortOrder
                            + $index
                            + 1,

                    ]);

            }

        }


        /*
        |--------------------------------------------------------------------------
        | Return refreshed event
        |--------------------------------------------------------------------------
        */

        return $event->fresh([
            'cycle',
            'media',
        ]);
    }
}
