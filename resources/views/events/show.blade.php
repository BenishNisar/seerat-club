@extends('Layout.layout')

@section('Content')
<div class="ac-site ac-page">
    <section class="ac-masthead">
        <div class="ac-container">
            <nav class="ac-breadcrumb" aria-label="Breadcrumb">
                <a href="{{ route('Home.welcome') }}">Home</a><span>/</span>
                <a href="{{ route('events.index') }}">Events</a><span>/</span>
                <span>{{ $event->title }}</span>
            </nav>
            <div class="ac-masthead-grid">
                <div>
                    @if($event->cycle)<span class="ac-eyebrow">{{ $event->cycle->name }}</span>@endif
                    <h1>{{ $event->title }}</h1>
                    @if($event->short_description)<p>{{ $event->short_description }}</p>@endif
                    <div class="ac-actions">
                        @if($event->registration_url)
                            <a class="ac-btn" href="{{ $event->registration_url }}" target="_blank" rel="noopener">Register</a>
                        @else
                            <a class="ac-btn" href="{{ route('Home.registration',['event'=>$event->slug]) }}">Register</a>
                        @endif
                    </div>
                </div>
                @if($event->hero_image_path)
                    <figure class="sc-page-photo">
                        <img src="{{ asset('storage/'.$event->hero_image_path) }}" alt="{{ $event->title }}">
                    </figure>
                @endif
            </div>
        </div>
    </section>

    <section class="ac-section sc-svg-section">
        <div class="ac-container">
            <div class="ac-prose">
                @if($event->event_date)<p><strong>Date:</strong> {{ $event->event_date->format('d F Y') }}</p>@endif
                @if($event->location)<p><strong>Location:</strong> {{ $event->location }}</p>@endif
                {!! nl2br(e($event->description)) !!}
            </div>
        </div>
    </section>

    @if($event->media->isNotEmpty())
        <section class="ac-section ac-soft">
            <div class="ac-container">
                <div class="ac-heading"><span class="ac-eyebrow">GALLERY</span><h2>Event moments.</h2></div>
                <div class="c1-gallery">
                    @foreach($event->media as $media)
                        <figure class="c1-gallery-item">
                            <a data-fancybox="event-gallery" href="{{ asset('storage/'.$media->file_path) }}">
                                <img src="{{ asset('storage/'.$media->file_path) }}" alt="{{ $media->alt_text ?: $event->title }}" loading="lazy">
                            </a>
                        </figure>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
</div>
@endsection
