@extends('Layout.layout')
@section('title', 'Events · Seerat Club for Kids')

@section('Content')
<div class="ac-site ac-page">
    <section class="ac-masthead">
        <div class="ac-container">
            <nav class="ac-breadcrumb" aria-label="Breadcrumb">
                <a href="{{ route('Home.welcome') }}">Home</a><span>/</span><span>Events</span>
            </nav>
            <div class="ac-heading">
                <span class="ac-eyebrow">SEERAT CLUB</span>
                <h1>Events</h1>
                <p>Published Seerat Club events and sessions.</p>
            </div>
        </div>
    </section>

    <section class="ac-section">
        <div class="ac-container">
            <div class="ac-events-grid">
                @forelse($events as $event)
                    <article class="ac-event-card ac-card">
                        @if($event->hero_image_path)
                            <a class="ac-event-cover" href="{{ route('events.show', $event) }}">
                                <img src="{{ asset('storage/'.$event->hero_image_path) }}" alt="{{ $event->title }}" loading="lazy">
                                @if($event->cycle)<span>{{ $event->cycle->name }}</span>@endif
                            </a>
                        @endif
                        <div class="ac-event-body">
                            @if($event->event_date)<span class="ac-eyebrow">{{ $event->event_date->format('d F Y') }}</span>@endif
                            <h3><a href="{{ route('events.show', $event) }}">{{ $event->title }}</a></h3>
                            @if($event->short_description)<p>{{ $event->short_description }}</p>@endif
                            <a class="ac-textlink" href="{{ route('events.show', $event) }}">Explore event</a>
                        </div>
                    </article>
                @empty
                    <div class="ac-card" style="padding:32px">
                        <h3>No published events yet.</h3>
                    </div>
                @endforelse
            </div>
            <div style="margin-top:32px">{{ $events->links() }}</div>
        </div>
    </section>
</div>
@endsection