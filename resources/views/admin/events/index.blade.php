@extends('admin.layout')

@section('title', 'Events')
@section('section', 'Events')

@section('content')

<div class="events-admin-page">

    {{-- =====================================================
        PAGE HEADER
    ====================================================== --}}
    <div class="page-head events-page-head">

        <div>
            <div class="events-eyebrow">
                <i class="fas fa-calendar-alt"></i>
                Content Management
            </div>

            <h1>Events</h1>

            <p>
                Create, publish and manage Seerat Club events,
                event media and public visibility.
            </p>
        </div>

        <a
            class="btn btn-primary events-create-btn"
            href="{{ route('admin.events.create') }}"
        >
            <i class="fas fa-plus"></i>
            New Event
        </a>

    </div>


    {{-- =====================================================
        FILTERS
    ====================================================== --}}
    <section class="events-filter-card">

        <form
            class="events-toolbar"
            method="GET"
            action="{{ route('admin.events.index') }}"
        >

            {{-- SEARCH --}}
            <div class="events-search">

                <i class="fas fa-search"></i>

                <input
                    type="text"
                    name="q"
                    value="{{ request('q') }}"
                    placeholder="Search by event title or slug..."
                >

            </div>


            {{-- STATUS --}}
            <div class="events-filter-field">

                <label>Status</label>

                <select
                    class="select"
                    name="status"
                >
                    <option value="">All statuses</option>

                    @foreach(['draft', 'published', 'archived'] as $s)

                        <option
                            value="{{ $s }}"
                            @selected(request('status') === $s)
                        >
                            {{ ucfirst($s) }}
                        </option>

                    @endforeach
                </select>

            </div>


            {{-- CYCLE --}}
            <div class="events-filter-field">

                <label>Cycle</label>

                <select
                    class="select"
                    name="cycle"
                >
                    <option value="">All cycles</option>

                    @foreach($cycles as $cycle)

                        <option
                            value="{{ $cycle->id }}"
                            @selected(
                                (string) request('cycle')
                                ===
                                (string) $cycle->id
                            )
                        >
                            {{ $cycle->name }}
                        </option>

                    @endforeach

                </select>

            </div>


            <div class="events-filter-actions">

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    <i class="fas fa-filter"></i>
                    Filter
                </button>

                @if(
                    request('q') ||
                    request('status') ||
                    request('cycle')
                )

                    <a
                        href="{{ route('admin.events.index') }}"
                        class="btn btn-secondary"
                    >
                        Reset
                    </a>

                @endif

            </div>

        </form>

    </section>


    {{-- =====================================================
        EVENTS LIST
    ====================================================== --}}
    <section class="events-list-card">

        <div class="events-list-heading">

            <div>
                <h2>All Events</h2>

                <p>
                    {{ $events->total() }}
                    {{ Str::plural('event', $events->total()) }}
                    found
                </p>
            </div>

        </div>


        @if($events->count())

            <div class="events-table-wrap">

                <table class="events-table">

                    <thead>

                        <tr>
                            <th>Event</th>
                            <th>Cycle</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th class="events-actions-heading">
                                Actions
                            </th>
                        </tr>

                    </thead>


                    <tbody>

                        @foreach($events as $event)

                            <tr>

                                {{-- EVENT --}}
                                <td>

                                    <div class="event-list-item">

                                        {{-- THUMBNAIL --}}
                                        <div class="event-list-thumb">

                                            @if($event->hero_image_path)

                                                <img
                                                    src="{{ asset('storage/'.$event->hero_image_path) }}"
                                                    alt="{{ $event->title }}"
                                                    loading="lazy"
                                                >

                                            @elseif($event->poster_image_path)

                                                <img
                                                    src="{{ asset('storage/'.$event->poster_image_path) }}"
                                                    alt="{{ $event->title }}"
                                                    loading="lazy"
                                                >

                                            @else

                                                <div class="event-list-placeholder">

                                                    <i class="fas fa-image"></i>

                                                </div>

                                            @endif

                                        </div>


                                        {{-- INFORMATION --}}
                                        <div class="event-list-copy">

                                            <strong class="event-list-title">
                                                {{ $event->title }}
                                            </strong>

                                            <div class="event-list-slug">

                                                <i class="fas fa-link"></i>

                                                /{{ $event->slug }}

                                            </div>


                                            @if(isset($event->media_count) && $event->media_count > 0)

                                                <div class="event-photo-count">

                                                    <i class="fas fa-images"></i>

                                                    {{ $event->media_count }}
                                                    {{ Str::plural('photo', $event->media_count) }}

                                                </div>

                                            @endif

                                        </div>

                                    </div>

                                </td>


                                {{-- CYCLE --}}
                                <td>

                                    @if($event->cycle)

                                        <span class="event-cycle-badge">

                                            <i class="fas fa-layer-group"></i>

                                            {{ $event->cycle->name }}

                                        </span>

                                    @else

                                        <span class="event-unassigned">
                                            Unassigned
                                        </span>

                                    @endif

                                </td>


                                {{-- DATE --}}
                                <td>

                                    @if($event->event_date)

                                        <div class="event-date">

                                            <div class="event-date-day">
                                                {{ $event->event_date->format('d') }}
                                            </div>

                                            <div>
                                                <strong>
                                                    {{ $event->event_date->format('M Y') }}
                                                </strong>

                                                <span>
                                                    {{ $event->event_date->format('l') }}
                                                </span>
                                            </div>

                                        </div>

                                    @else

                                        <span class="event-unassigned">
                                            No date
                                        </span>

                                    @endif

                                </td>


                                {{-- STATUS --}}
                                <td>

                                    @php
                                        $statusClass = match($event->status) {
                                            'published' => 'status-published',
                                            'archived' => 'status-archived',
                                            default => 'status-draft',
                                        };
                                    @endphp

                                    <span class="event-status {{ $statusClass }}">

                                        <span class="event-status-dot"></span>

                                        {{ ucfirst($event->status) }}

                                    </span>


                                    @if($event->is_past)

                                        <div class="event-past-label">
                                            Past Event
                                        </div>

                                    @endif

                                </td>


                                {{-- ACTIONS --}}
                                <td>

                                    <div class="event-row-actions">

                                        {{-- EDIT --}}
                                        <a
                                            class="event-icon-btn edit"
                                            href="{{ route('admin.events.edit', $event) }}"
                                            title="Edit Event"
                                        >
                                            <i class="fas fa-pen"></i>
                                        </a>


                                        {{-- VIEW --}}
                                        @if($event->status === 'published')

                                            <a
                                                class="event-icon-btn view"
                                                href="{{ route('events.show', $event) }}"
                                                target="_blank"
                                                title="View Event"
                                            >
                                                <i class="fas fa-external-link-alt"></i>
                                            </a>

                                        @endif


                                        {{-- DELETE --}}
                                        <form
                                            class="inline"
                                            method="POST"
                                            action="{{ route('admin.events.destroy', $event) }}"
                                        >
                                            @csrf
                                            @method('DELETE')

                                            <button
                                                class="event-icon-btn delete"
                                                data-confirm="Delete this event permanently?"
                                                type="submit"
                                                title="Delete Event"
                                            >
                                                <i class="fas fa-trash"></i>
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>


            {{-- PAGINATION --}}
            <div class="events-pagination">

                <div class="events-pagination-info">

                    Showing

                    <strong>
                        {{ $events->firstItem() }}
                    </strong>

                    –

                    <strong>
                        {{ $events->lastItem() }}
                    </strong>

                    of

                    <strong>
                        {{ $events->total() }}
                    </strong>

                </div>

                <div>
                    {{ $events->withQueryString()->links() }}
                </div>

            </div>

        @else

            {{-- EMPTY STATE --}}
            <div class="events-empty-state">

                <div class="events-empty-icon">
                    <i class="fas fa-calendar-plus"></i>
                </div>

                <h3>No events found</h3>

                <p>
                    @if(request('q') || request('status') || request('cycle'))

                        No events match the filters you selected.

                    @else

                        Create your first Seerat Club event
                        and start managing it from the dashboard.

                    @endif
                </p>


                @if(
                    request('q') ||
                    request('status') ||
                    request('cycle')
                )

                    <a
                        href="{{ route('admin.events.index') }}"
                        class="btn btn-secondary"
                    >
                        Clear Filters
                    </a>

                @else

                    <a
                        href="{{ route('admin.events.create') }}"
                        class="btn btn-primary"
                    >
                        <i class="fas fa-plus"></i>
                        Create First Event
                    </a>

                @endif

            </div>

        @endif

    </section>

</div>


{{-- ============================================================
    TEMPORARY PAGE CSS
    Baad mein admin.css mein move kar sakte ho.
============================================================ --}}
<style>

/* =========================================================
   EVENTS ADMIN PAGE
========================================================= */

.events-admin-page {
    max-width: 1400px;
    margin: 0 auto;
    padding-bottom: 35px;
}


/* =========================================================
   PAGE HEADER
========================================================= */

.events-page-head {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 25px;
    margin-bottom: 23px;
}

.events-page-head h1 {
    margin: 4px 0 7px;
    color: #113d33;
    font-size: 34px;
    line-height: 1.1;
}

.events-page-head p {
    max-width: 620px;
    margin: 0;
    color: #74827d;
    font-size: 13px;
    line-height: 1.6;
}

.events-eyebrow {
    display: flex;
    align-items: center;
    gap: 7px;
    color: #aa8640;
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 1.1px;
    text-transform: uppercase;
}

.events-create-btn {
    min-height: 43px;
    padding-inline: 17px !important;
}


/* =========================================================
   FILTER CARD
========================================================= */

.events-filter-card {
    margin-bottom: 18px;
    padding: 17px;
    border: 1px solid #dce5e0;
    border-radius: 18px;
    background: #fffdfa;
    box-shadow:
        0 6px 24px rgba(18, 61, 51, 0.035);
}

.events-toolbar {
    display: grid;
    grid-template-columns:
        minmax(250px, 1fr)
        190px
        200px
        auto;
    gap: 12px;
    align-items: end;
}

.events-search {
    position: relative;
}

.events-search i {
    position: absolute;
    z-index: 1;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #8b9792;
    font-size: 12px;
}

.events-search input {
    width: 100%;
    min-height: 44px;
    padding: 10px 15px 10px 40px;
    border: 1px solid #d6dfda;
    border-radius: 12px;
    outline: none;
    background: #fff;
    color: #183e35;
    font-size: 12px;
    transition: .2s ease;
}

.events-search input:focus {
    border-color: #1b5647;
    box-shadow:
        0 0 0 3px rgba(27, 86, 71, .08);
}

.events-filter-field label {
    display: block;
    margin: 0 0 6px;
    color: #53665f;
    font-size: 10px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: .55px;
}

.events-filter-field .select {
    min-height: 44px;
    border-radius: 12px;
}

.events-filter-actions {
    display: flex;
    align-items: center;
    gap: 8px;
}

.events-filter-actions .btn {
    min-height: 44px;
}


/* =========================================================
   EVENTS LIST CARD
========================================================= */

.events-list-card {
    overflow: hidden;
    border: 1px solid #dce4df;
    border-radius: 20px;
    background: #fffdfa;
    box-shadow:
        0 8px 30px rgba(18, 61, 51, .04);
}

.events-list-heading {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 21px 23px;
    border-bottom: 1px solid #e6ebe8;
}

.events-list-heading h2 {
    margin: 0 0 3px;
    color: #143f35;
    font-size: 17px;
}

.events-list-heading p {
    margin: 0;
    color: #86928e;
    font-size: 10px;
}


/* =========================================================
   TABLE
========================================================= */

.events-table-wrap {
    width: 100%;
    overflow-x: auto;
}

.events-table {
    width: 100%;
    border-collapse: collapse;
}

.events-table th {
    padding: 12px 18px;
    border-bottom: 1px solid #e5ebe7;
    background: #f8faf8;
    color: #7a8984;
    text-align: left;
    font-size: 9px;
    font-weight: 800;
    letter-spacing: .75px;
    text-transform: uppercase;
    white-space: nowrap;
}

.events-table td {
    padding: 15px 18px;
    border-bottom: 1px solid #edf0ee;
    vertical-align: middle;
}

.events-table tbody tr {
    transition: background .18s ease;
}

.events-table tbody tr:hover {
    background: #fbfcfa;
}

.events-table tbody tr:last-child td {
    border-bottom: 0;
}


/* =========================================================
   EVENT THUMBNAIL / TITLE
========================================================= */

.event-list-item {
    display: flex;
    align-items: center;
    gap: 13px;
    min-width: 280px;
}

.event-list-thumb {
    width: 68px;
    height: 58px;
    flex: 0 0 68px;
    overflow: hidden;
    border: 1px solid #dce5e0;
    border-radius: 11px;
    background: #edf3ef;
}

.event-list-thumb img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
}

.event-list-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background:
        linear-gradient(
            135deg,
            #edf3ef,
            #f7f8f4
        );
    color: #719087;
    font-size: 16px;
}

.event-list-copy {
    min-width: 0;
}

.event-list-title {
    display: block;
    max-width: 300px;
    overflow: hidden;
    color: #183f35;
    font-size: 12px;
    line-height: 1.35;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.event-list-slug {
    max-width: 290px;
    overflow: hidden;
    margin-top: 4px;
    color: #899590;
    font-size: 9px;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.event-list-slug i {
    margin-right: 3px;
    font-size: 8px;
}

.event-photo-count {
    display: flex;
    align-items: center;
    gap: 5px;
    margin-top: 6px;
    color: #987b3b;
    font-size: 9px;
    font-weight: 700;
}


/* =========================================================
   CYCLE
========================================================= */

.event-cycle-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    max-width: 180px;
    padding: 6px 9px;
    border-radius: 8px;
    background: #edf3ef;
    color: #3b6459;
    font-size: 9px;
    font-weight: 800;
}

.event-cycle-badge i {
    font-size: 8px;
}

.event-unassigned {
    color: #9aa49f;
    font-size: 10px;
}


/* =========================================================
   DATE
========================================================= */

.event-date {
    display: flex;
    align-items: center;
    gap: 9px;
    min-width: 125px;
}

.event-date-day {
    width: 35px;
    height: 35px;
    flex: 0 0 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 9px;
    background: #f1ead9;
    color: #8d6d2f;
    font-size: 13px;
    font-weight: 900;
}

.event-date strong {
    display: block;
    color: #334e46;
    font-size: 10px;
}

.event-date span {
    display: block;
    margin-top: 2px;
    color: #8c9994;
    font-size: 8px;
}


/* =========================================================
   STATUS
========================================================= */

.event-status {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 9px;
    border-radius: 100px;
    font-size: 9px;
    font-weight: 800;
}

.event-status-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
}

.status-published {
    background: #e8f5eb;
    color: #357547;
}

.status-published .event-status-dot {
    background: #48a361;
}

.status-draft {
    background: #fff5de;
    color: #966d22;
}

.status-draft .event-status-dot {
    background: #d9a43c;
}

.status-archived {
    background: #edf0ef;
    color: #68766f;
}

.status-archived .event-status-dot {
    background: #8a9791;
}

.event-past-label {
    margin-top: 6px;
    color: #9b8175;
    font-size: 8px;
    font-weight: 700;
}


/* =========================================================
   ACTION BUTTONS
========================================================= */

.events-actions-heading {
    text-align: right !important;
}

.event-row-actions {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 6px;
    min-width: 110px;
}

.event-icon-btn {
    width: 32px;
    height: 32px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #dce4df;
    border-radius: 9px;
    background: #fff;
    color: #47635a;
    text-decoration: none;
    cursor: pointer;
    transition: .18s ease;
}

.event-icon-btn i {
    font-size: 10px;
}

.event-icon-btn.edit:hover {
    border-color: #1c5648;
    background: #17483d;
    color: #fff;
}

.event-icon-btn.view:hover {
    border-color: #b6954c;
    background: #f7edda;
    color: #8e6b2d;
}

.event-icon-btn.delete {
    color: #b25b52;
}

.event-icon-btn.delete:hover {
    border-color: #b9564d;
    background: #b9564d;
    color: #fff;
}


/* =========================================================
   PAGINATION
========================================================= */

.events-pagination {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    padding: 16px 20px;
    border-top: 1px solid #e8edea;
    background: #fcfdfa;
}

.events-pagination-info {
    color: #83908b;
    font-size: 9px;
}

.events-pagination-info strong {
    color: #3d554e;
}


/* =========================================================
   EMPTY STATE
========================================================= */

.events-empty-state {
    padding: 75px 25px;
    text-align: center;
}

.events-empty-icon {
    width: 65px;
    height: 65px;
    margin: 0 auto 17px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 19px;
    background: #edf3ef;
    color: #17483d;
    font-size: 23px;
}

.events-empty-state h3 {
    margin: 0 0 7px;
    color: #173f35;
    font-size: 18px;
}

.events-empty-state p {
    max-width: 430px;
    margin: 0 auto 18px;
    color: #82908a;
    font-size: 11px;
    line-height: 1.65;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 1050px) {

    .events-toolbar {
        grid-template-columns:
            1fr 1fr;
    }

    .events-search {
        grid-column: 1 / -1;
    }
}

@media (max-width: 700px) {

    .events-page-head {
        align-items: flex-start;
        flex-direction: column;
    }

    .events-create-btn {
        width: 100%;
        justify-content: center;
    }

    .events-toolbar {
        grid-template-columns: 1fr;
    }

    .events-search {
        grid-column: auto;
    }

    .events-filter-actions {
        width: 100%;
    }

    .events-filter-actions .btn {
        flex: 1;
        justify-content: center;
    }

    .events-list-heading {
        padding: 17px;
    }

    .events-table th,
    .events-table td {
        padding-left: 13px;
        padding-right: 13px;
    }

    .events-pagination {
        flex-direction: column;
        align-items: flex-start;
    }
}

</style>

@endsection
