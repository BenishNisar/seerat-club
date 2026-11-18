@extends('admin.layout')

@section('title', $event->exists ? 'Edit Event Media' : 'Add Event')
@section('section', 'Events')

@section('content')

<div class="event-media-admin">

    {{-- =========================================================
        PAGE HEADER
    ========================================================== --}}
    <div class="page-head event-head">

        <div>
            <div class="event-breadcrumb">
                <a href="{{ route('admin.events.index') }}">Events</a>
                <span>/</span>
                <span>{{ $event->exists ? 'Edit Event' : 'New Event' }}</span>
            </div>

            <h1>
                {{ $event->exists ? 'Manage event media' : 'Create event' }}
            </h1>

            <p>
                Connect the existing event page with its hero, poster,
                gallery and resource links.
            </p>
        </div>

        <a
            href="{{ route('admin.events.index') }}"
            class="btn btn-secondary"
        >
            <i class="fas fa-arrow-left"></i>
            Back
        </a>

    </div>


    {{-- =========================================================
        SUCCESS
    ========================================================== --}}
    @if(session('success'))
        <div class="event-alert success">
            <i class="fas fa-check-circle"></i>

            <div>
                <strong>Saved successfully</strong>
                <p>{{ session('success') }}</p>
            </div>
        </div>
    @endif


    {{-- =========================================================
        ERRORS
    ========================================================== --}}
    @if($errors->any())
        <div class="event-alert error">
            <i class="fas fa-exclamation-triangle"></i>

            <div>
                <strong>Please check the form.</strong>

                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif


    {{-- =========================================================
        FORM
    ========================================================== --}}
    <form
        id="eventForm"
        method="POST"
        enctype="multipart/form-data"
        action="{{ $event->exists
            ? route('admin.events.update', $event)
            : route('admin.events.store') }}"
    >

        @csrf

        @if($event->exists)
            @method('PUT')
        @endif


        {{-- =====================================================
            EVENT CONNECTION
        ====================================================== --}}
        <section class="event-card">

            <div class="event-card-head">

                <div class="event-card-icon">
                    <i class="fas fa-link"></i>
                </div>

                <div>
                    <h2>Event connection</h2>
                    <p>
                        Select which existing frontend event page these
                        images belong to.
                    </p>
                </div>

            </div>


            <div class="event-fields">

                {{-- TITLE --}}
                <div class="event-field">

                    <label>
                        Event Title
                        <span>*</span>
                    </label>

                    <input
                        class="input"
                        type="text"
                        name="title"
                        required
                        value="{{ old('title', $event->title) }}"
                        placeholder="Once Upon a Time in Jannat"
                    >

                </div>


                {{-- SLUG --}}
                <div class="event-field">

                    <label>
                        Event Slug
                        <span>*</span>
                    </label>

                    <input
                        class="input"
                        type="text"
                        name="slug"
                        required
                        value="{{ old('slug', $event->slug) }}"
                        placeholder="once-upon-a-time-in-jannat"
                    >

                    <small>
                        This must match the existing event page slug.
                    </small>

                </div>


                {{-- CYCLE --}}
                <div class="event-field">

                    <label>Event Cycle</label>

                    <select
                        class="select"
                        name="event_cycle_id"
                    >

                        <option value="">
                            Select cycle
                        </option>

                        @foreach($cycles as $cycle)

                            <option
                                value="{{ $cycle->id }}"
                                @selected(
                                    (string) old(
                                        'event_cycle_id',
                                        $event->event_cycle_id
                                    )
                                    ===
                                    (string) $cycle->id
                                )
                            >
                                {{ $cycle->name }}
                            </option>

                        @endforeach

                    </select>

                </div>


                {{-- REGISTRATION URL --}}
                <div class="event-field">

                    <label>
                        Registration URL
                    </label>

                    <input
                        class="input"
                        type="url"
                        name="registration_url"
                        value="{{ old(
                            'registration_url',
                            $event->registration_url
                        ) }}"
                        placeholder="https://..."
                    >

                    <small>
                        Optional event registration link.
                    </small>

                </div>


                {{-- HIDDEN VALUES --}}
                <input
                    type="hidden"
                    name="status"
                    value="published"
                >

                <input
                    type="hidden"
                    name="is_past"
                    value="1"
                >

                <input
                    type="hidden"
                    name="sort_order"
                    value="{{ old(
                        'sort_order',
                        $event->sort_order ?? 0
                    ) }}"
                >

            </div>

        </section>



        {{-- =====================================================
            MAIN EVENT IMAGES
        ====================================================== --}}
        <section class="event-card">

            <div class="event-card-head">

                <div class="event-card-icon">
                    <i class="fas fa-image"></i>
                </div>

                <div>
                    <h2>Main event images</h2>
                    <p>
                        Hero and poster are separate from the event gallery.
                    </p>
                </div>

            </div>


            <div class="main-images-grid">


                {{-- =================================================
                    HERO IMAGE
                ================================================== --}}
                <div class="image-upload-box">

                    <div class="image-upload-heading">

                        <div>
                            <strong>Hero Image</strong>

                            <span>
                                Main large banner shown on the event page.
                            </span>
                        </div>

                        <span class="media-type-badge">
                            HERO
                        </span>

                    </div>


                    <label
                        for="hero_image"
                        class="image-preview-box"
                    >

                        <div id="heroPreview">

                            @if($event->hero_image_path)

                                <img
                                    src="{{ asset(
                                        'storage/' .
                                        $event->hero_image_path
                                    ) }}"
                                    alt="{{ $event->title }} hero image"
                                >

                            @else

                                <div class="image-placeholder">

                                    <i class="fas fa-panorama"></i>

                                    <strong>
                                        Hero Image
                                    </strong>

                                    <span>
                                        Click to select main banner
                                    </span>

                                </div>

                            @endif

                        </div>

                    </label>


                    <input
                        id="hero_image"
                        type="file"
                        name="hero_image"
                        accept="image/jpeg,image/png,image/webp"
                        class="hidden-file-input"
                        data-preview="heroPreview"
                    >


                    <label
                        for="hero_image"
                        class="choose-image-button"
                    >
                        <i class="fas fa-upload"></i>

                        {{ $event->hero_image_path
                            ? 'Replace Hero Image'
                            : 'Choose Hero Image'
                        }}
                    </label>

                </div>



                {{-- =================================================
                    POSTER IMAGE
                ================================================== --}}
                <div class="image-upload-box">

                    <div class="image-upload-heading">

                        <div>
                            <strong>Poster Image</strong>

                            <span>
                                Original event poster / promotional artwork.
                            </span>
                        </div>

                        <span class="media-type-badge poster">
                            POSTER
                        </span>

                    </div>


                    <label
                        for="poster_image"
                        class="image-preview-box poster-preview"
                    >

                        <div id="posterPreview">

                            @if($event->poster_image_path)

                                <img
                                    src="{{ asset(
                                        'storage/' .
                                        $event->poster_image_path
                                    ) }}"
                                    alt="{{ $event->title }} poster"
                                >

                            @else

                                <div class="image-placeholder">

                                    <i class="fas fa-file-image"></i>

                                    <strong>
                                        Poster Image
                                    </strong>

                                    <span>
                                        Click to select event poster
                                    </span>

                                </div>

                            @endif

                        </div>

                    </label>


                    <input
                        id="poster_image"
                        type="file"
                        name="poster_image"
                        accept="image/jpeg,image/png,image/webp"
                        class="hidden-file-input"
                        data-preview="posterPreview"
                    >


                    <label
                        for="poster_image"
                        class="choose-image-button"
                    >
                        <i class="fas fa-upload"></i>

                        {{ $event->poster_image_path
                            ? 'Replace Poster'
                            : 'Choose Poster'
                        }}
                    </label>

                </div>

            </div>

        </section>



        {{-- =====================================================
            GALLERY
        ====================================================== --}}
        <section class="event-card gallery-card">

            <div class="event-card-head">

                <div class="event-card-icon gallery">
                    <i class="fas fa-images"></i>
                </div>

                <div>

                    <h2>Event Gallery Images</h2>

                    <p>
                        All photographs uploaded here will appear inside
                        the gallery section of this specific event page.
                    </p>

                </div>


                @if($event->exists)

                    <span class="gallery-count-badge">

                        {{ $event->media->count() }}

                        {{ Str::plural(
                            'Photo',
                            $event->media->count()
                        ) }}

                    </span>

                @endif

            </div>


            <div class="gallery-content">


                {{-- VERY CLEAR GALLERY LABEL --}}
                <div class="gallery-info-box">

                    <div>
                        <i class="fas fa-circle-info"></i>
                    </div>

                    <div>

                        <strong>
                            Gallery Photos Go Here
                        </strong>

                        <p>
                            For example, Once Upon a Time in Jannat ke
                            1.jpg, 2.jpg, 3.jpg aur baqi saari event
                            photographs yahan upload hongi.
                        </p>

                    </div>

                </div>



                {{-- GALLERY DROPZONE --}}
                <label
                    for="gallery"
                    class="gallery-upload-zone"
                >

                    <div class="gallery-upload-icon">
                        <i class="fas fa-cloud-arrow-up"></i>
                    </div>


                    <strong>
                        Upload Event Gallery
                    </strong>


                    <p>
                        Multiple images ek saath select karein.
                    </p>


                    <span class="gallery-select-button">

                        <i class="fas fa-images"></i>

                        Choose Gallery Images

                    </span>

                </label>


                <input
                    id="gallery"
                    type="file"
                    name="gallery[]"
                    accept="image/jpeg,image/png,image/webp"
                    multiple
                    class="hidden-file-input"
                >



                {{-- =================================================
                    NEW SELECTED IMAGES
                ================================================== --}}
                <div
                    id="newGalleryArea"
                    class="new-gallery-area"
                    style="display:none;"
                >

                    <div class="gallery-subheading">

                        <div>

                            <strong>
                                New Images Ready to Upload
                            </strong>

                            <span id="gallerySelectedCount">
                                0 images selected
                            </span>

                        </div>

                    </div>


                    <div
                        id="galleryPreview"
                        class="gallery-grid"
                    ></div>

                </div>



                {{-- =================================================
                    EXISTING GALLERY
                ================================================== --}}
                @if(
                    $event->exists &&
                    $event->media->isNotEmpty()
                )

                    <div class="existing-gallery">


                        <div class="gallery-subheading">

                            <div>

                                <strong>
                                    Current Event Gallery
                                </strong>

                                <span>
                                    These images are already showing
                                    for this event.
                                </span>

                            </div>

                        </div>


                        <div class="gallery-grid">


                            @foreach(
                                $event->media->sortBy(
                                    'sort_order'
                                )
                                as $index => $media
                            )

                                <article class="gallery-image-card">


                                    <div class="gallery-image">


                                        <img
                                            src="{{ asset(
                                                'storage/' .
                                                $media->file_path
                                            ) }}"
                                            alt="{{ $media->alt_text
                                                ?: $event->title
                                            }}"
                                            loading="lazy"
                                        >


                                        <span class="gallery-number">

                                            {{ str_pad(
                                                $index + 1,
                                                2,
                                                '0',
                                                STR_PAD_LEFT
                                            ) }}

                                        </span>


                                        <button
                                            type="submit"
                                            form="delete-media-{{ $media->id }}"
                                            class="gallery-delete-button"
                                            data-confirm="Remove this image?"
                                            title="Remove image"
                                        >

                                            <i class="fas fa-trash"></i>

                                        </button>


                                    </div>


                                    <div class="gallery-image-footer">

                                        <span>
                                            Gallery Image
                                        </span>

                                        @if($media->size_bytes)

                                            <small>

                                                {{ number_format(
                                                    $media->size_bytes / 1024
                                                ) }}
                                                KB

                                            </small>

                                        @endif

                                    </div>


                                </article>

                            @endforeach


                        </div>


                    </div>

                @elseif($event->exists)

                    <div class="empty-gallery">

                        <i class="far fa-images"></i>

                        <strong>
                            No gallery images yet
                        </strong>

                        <span>
                            Upload gallery images above.
                        </span>

                    </div>

                @endif


            </div>

        </section>



        {{-- =====================================================
            RESOURCE URLS
        ====================================================== --}}
        <section class="event-card">

            <div class="event-card-head">

                <div class="event-card-icon">
                    <i class="fas fa-link"></i>
                </div>

                <div>
                    <h2>Resources & URLs</h2>
                    <p>
                        Optional presentation and video links for this event.
                    </p>
                </div>

            </div>


            <div class="event-fields">


                {{-- PRESENTATION --}}
                <div class="event-field">

                    <label>
                        Presentation URL
                    </label>

                    <input
                        class="input"
                        type="url"
                        name="presentation_url"
                        value="{{ old(
                            'presentation_url',
                            $event->presentation_url
                        ) }}"
                        placeholder="https://drive.google.com/..."
                    >

                    <small>
                        Google Drive, PDF or presentation link.
                    </small>

                </div>


                {{-- VIDEO --}}
                <div class="event-field">

                    <label>
                        Video URL
                    </label>

                    <input
                        class="input"
                        type="url"
                        name="video_url"
                        value="{{ old(
                            'video_url',
                            $event->video_url
                        ) }}"
                        placeholder="https://youtube.com/..."
                    >

                    <small>
                        Optional YouTube or event video URL.
                    </small>

                </div>


            </div>

        </section>



        {{-- =====================================================
            SAVE BAR
        ====================================================== --}}
        <div class="event-save-bar">


            <div class="event-save-info">

                <span></span>

                @if($event->exists)

                    Editing

                    <strong>
                        {{ $event->title }}
                    </strong>

                @else

                    Creating event media connection

                @endif

            </div>


            <div class="event-save-actions">

                <a
                    href="{{ route('admin.events.index') }}"
                    class="btn btn-secondary"
                >
                    Cancel
                </a>


                <button
                    id="saveEventButton"
                    class="btn btn-primary"
                    type="submit"
                >

                    <i class="fas fa-check"></i>

                    {{ $event->exists
                        ? 'Save Changes'
                        : 'Create Event'
                    }}

                </button>

            </div>


        </div>


    </form>



    {{-- =========================================================
        MEDIA DELETE FORMS
    ========================================================== --}}
    @if($event->exists)

        @foreach($event->media as $media)

            <form
                id="delete-media-{{ $media->id }}"
                method="POST"
                action="{{ route(
                    'admin.event-media.destroy',
                    $media
                ) }}"
                style="display:none;"
            >

                @csrf
                @method('DELETE')

            </form>

        @endforeach

    @endif


</div>



<script>
document.addEventListener('DOMContentLoaded', function () {

    /*
    |--------------------------------------------------------------------------
    | HERO / POSTER PREVIEW
    |--------------------------------------------------------------------------
    */

    document
        .querySelectorAll('[data-preview]')
        .forEach(function (input) {

            input.addEventListener(
                'change',
                function () {

                    if (
                        !this.files ||
                        !this.files[0]
                    ) {
                        return;
                    }

                    const preview =
                        document.getElementById(
                            this.dataset.preview
                        );

                    if (!preview) {
                        return;
                    }

                    const reader =
                        new FileReader();

                    reader.onload =
                        function (event) {

                            preview.innerHTML = `

                                <img
                                    src="${event.target.result}"
                                    alt="Selected image preview"
                                >

                            `;

                        };

                    reader.readAsDataURL(
                        this.files[0]
                    );

                }
            );

        });



    /*
    |--------------------------------------------------------------------------
    | GALLERY PREVIEW
    |--------------------------------------------------------------------------
    */

    const gallery =
        document.getElementById('gallery');

    const galleryArea =
        document.getElementById(
            'newGalleryArea'
        );

    const galleryPreview =
        document.getElementById(
            'galleryPreview'
        );

    const galleryCount =
        document.getElementById(
            'gallerySelectedCount'
        );


    if (
        gallery &&
        galleryArea &&
        galleryPreview
    ) {

        gallery.addEventListener(
            'change',
            function () {

                const files =
                    Array.from(
                        this.files || []
                    );

                galleryPreview.innerHTML = '';


                if (!files.length) {

                    galleryArea.style.display =
                        'none';

                    return;
                }


                galleryArea.style.display =
                    'block';


                galleryCount.textContent =
                    files.length +
                    (
                        files.length === 1
                            ? ' image selected'
                            : ' images selected'
                    );


                files.forEach(
                    function (file, index) {

                        if (
                            !file.type.startsWith(
                                'image/'
                            )
                        ) {
                            return;
                        }


                        const reader =
                            new FileReader();


                        reader.onload =
                            function (event) {

                                const item =
                                    document.createElement(
                                        'article'
                                    );


                                item.className =
                                    'gallery-image-card';


                                item.innerHTML = `

                                    <div class="gallery-image">

                                        <img
                                            src="${event.target.result}"
                                            alt="Gallery preview"
                                        >

                                        <span class="gallery-number">

                                            ${String(
                                                index + 1
                                            ).padStart(
                                                2,
                                                '0'
                                            )}

                                        </span>

                                    </div>


                                    <div class="gallery-image-footer">

                                        <span>
                                            ${escapeHtml(
                                                file.name
                                            )}
                                        </span>

                                        <small>
                                            ${formatBytes(
                                                file.size
                                            )}
                                        </small>

                                    </div>

                                `;


                                galleryPreview.appendChild(
                                    item
                                );

                            };


                        reader.readAsDataURL(
                            file
                        );

                    }
                );

            }
        );

    }



    /*
    |--------------------------------------------------------------------------
    | SAVE LOADING STATE
    |--------------------------------------------------------------------------
    */

    const eventForm =
        document.getElementById(
            'eventForm'
        );

    const saveButton =
        document.getElementById(
            'saveEventButton'
        );


    if (
        eventForm &&
        saveButton
    ) {

        eventForm.addEventListener(
            'submit',
            function () {

                saveButton.disabled =
                    true;

                saveButton.innerHTML = `

                    <i class="fas fa-spinner fa-spin"></i>

                    Saving...

                `;

            }
        );

    }



    function formatBytes(bytes) {

        if (bytes < 1024 * 1024) {

            return Math.round(
                bytes / 1024
            ) + ' KB';

        }

        return (
            bytes /
            (1024 * 1024)
        ).toFixed(1) + ' MB';

    }


    function escapeHtml(value) {

        return String(value)
            .replaceAll('&', '&amp;')
            .replaceAll('<', '&lt;')
            .replaceAll('>', '&gt;')
            .replaceAll('"', '&quot;')
            .replaceAll("'", '&#039;');

    }

});
</script>



<style>

/* =========================================================
   PAGE
========================================================= */

.event-media-admin {
    max-width: 1280px;
    margin: 0 auto;
    padding-bottom: 40px;
}

.event-head {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 25px;
    margin-bottom: 23px;
}

.event-head h1 {
    margin: 6px 0 7px;
    color: #123f35;
    font-size: 34px;
    line-height: 1.1;
}

.event-head p {
    max-width: 720px;
    margin: 0;
    color: #74827d;
    font-size: 13px;
    line-height: 1.6;
}

.event-breadcrumb {
    display: flex;
    gap: 7px;
    align-items: center;
    color: #8b9792;
    font-size: 10px;
}

.event-breadcrumb a {
    color: #17483d;
    font-weight: 800;
    text-decoration: none;
}


/* =========================================================
   ALERT
========================================================= */

.event-alert {
    display: flex;
    align-items: flex-start;
    gap: 13px;
    margin-bottom: 18px;
    padding: 15px 17px;
    border-radius: 14px;
}

.event-alert.success {
    border: 1px solid #c9e2ce;
    background: #eef8f0;
    color: #347348;
}

.event-alert.error {
    border: 1px solid #eccbc6;
    background: #fff1ef;
    color: #9d463e;
}

.event-alert > i {
    margin-top: 3px;
}

.event-alert strong {
    font-size: 12px;
}

.event-alert p {
    margin: 3px 0 0;
    font-size: 10px;
}

.event-alert ul {
    margin: 6px 0 0;
    padding-left: 17px;
    font-size: 10px;
}


/* =========================================================
   CARD
========================================================= */

.event-card {
    overflow: hidden;
    margin-bottom: 18px;
    border: 1px solid #dce5e0;
    border-radius: 22px;
    background: #fffdfa;
    box-shadow:
        0 8px 28px
        rgba(20, 61, 51, .04);
}

.event-card-head {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 22px 24px;
    border-bottom: 1px solid #e6ebe8;
}

.event-card-head h2 {
    margin: 0 0 3px;
    color: #153f35;
    font-size: 17px;
}

.event-card-head p {
    margin: 0;
    color: #84908c;
    font-size: 10px;
}

.event-card-icon {
    width: 42px;
    height: 42px;
    flex: 0 0 42px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
    background: #e8f1ec;
    color: #17483d;
}

.event-card-icon.gallery {
    background: #f4ecd9;
    color: #9b7733;
}


/* =========================================================
   FIELDS
========================================================= */

.event-fields {
    display: grid;
    grid-template-columns:
        repeat(2, minmax(0, 1fr));
    gap: 19px;
    padding: 24px;
}

.event-field label {
    display: block;
    margin-bottom: 7px;
    color: #2c4d44;
    font-size: 10px;
    font-weight: 800;
}

.event-field label span {
    color: #bb524a;
}

.event-field small {
    display: block;
    margin-top: 6px;
    color: #929c98;
    font-size: 9px;
}


/* =========================================================
   HERO / POSTER
========================================================= */

.main-images-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 22px;
    padding: 24px;
}

.image-upload-heading {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 15px;
    margin-bottom: 11px;
}

.image-upload-heading strong {
    display: block;
    color: #24473e;
    font-size: 11px;
}

.image-upload-heading span:not(.media-type-badge) {
    display: block;
    margin-top: 3px;
    color: #8d9894;
    font-size: 9px;
}

.media-type-badge {
    padding: 5px 8px;
    border-radius: 7px;
    background: #e8f1ec;
    color: #43665c;
    font-size: 8px;
    font-weight: 900;
}

.media-type-badge.poster {
    background: #f3ead7;
    color: #906e2d;
}

.image-preview-box {
    display: block;
    overflow: hidden;
    height: 280px;
    border: 1px dashed #c4d2cc;
    border-radius: 16px;
    background: #f7faf8;
    cursor: pointer;
}

.image-preview-box > div {
    width: 100%;
    height: 100%;
}

.image-preview-box img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
}

.poster-preview img {
    object-fit: contain;
    padding: 12px;
}

.image-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: #7c8e88;
}

.image-placeholder i {
    margin-bottom: 10px;
    color: #52766b;
    font-size: 26px;
}

.image-placeholder strong {
    color: #31574c;
    font-size: 11px;
}

.image-placeholder span {
    margin-top: 5px;
    font-size: 9px;
}

.hidden-file-input {
    position: absolute;
    width: 1px;
    height: 1px;
    opacity: 0;
    pointer-events: none;
}

.choose-image-button {
    display: inline-flex !important;
    align-items: center;
    gap: 7px;
    margin-top: 10px;
    padding: 9px 13px;
    border: 1px solid #d5e0da;
    border-radius: 9px;
    background: #fff;
    color: #17483d;
    font-size: 9px !important;
    font-weight: 800 !important;
    cursor: pointer;
}


/* =========================================================
   GALLERY
========================================================= */

.gallery-count-badge {
    margin-left: auto;
    padding: 6px 10px;
    border-radius: 100px;
    background: #eef3ef;
    color: #46675e;
    font-size: 8px;
    font-weight: 900;
}

.gallery-content {
    padding: 24px;
}

.gallery-info-box {
    display: flex;
    gap: 12px;
    margin-bottom: 17px;
    padding: 13px 15px;
    border: 1px solid #ead9b3;
    border-radius: 12px;
    background: #fff9ea;
}

.gallery-info-box > div:first-child {
    color: #ae8536;
}

.gallery-info-box strong {
    display: block;
    color: #755b29;
    font-size: 10px;
}

.gallery-info-box p {
    margin: 3px 0 0;
    color: #8d7a53;
    font-size: 9px;
    line-height: 1.5;
}

.gallery-upload-zone {
    min-height: 180px;
    display: flex !important;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 25px;
    border: 2px dashed #bfd0c7;
    border-radius: 17px;
    background: #f7faf8;
    text-align: center;
    cursor: pointer;
}

.gallery-upload-zone:hover {
    border-color: #17483d;
}

.gallery-upload-icon {
    width: 53px;
    height: 53px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 11px;
    border-radius: 15px;
    background: #e6efe9;
    color: #17483d;
    font-size: 19px;
}

.gallery-upload-zone strong {
    color: #17483d;
    font-size: 13px;
}

.gallery-upload-zone p {
    margin: 5px 0 0;
    color: #8b9792;
    font-size: 9px;
}

.gallery-select-button {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    margin-top: 13px;
    padding: 9px 14px;
    border-radius: 9px;
    background: #17483d;
    color: #fff;
    font-size: 9px;
    font-weight: 800;
}

.new-gallery-area,
.existing-gallery {
    margin-top: 25px;
}

.gallery-subheading {
    margin-bottom: 12px;
}

.gallery-subheading strong {
    display: block;
    color: #22473d;
    font-size: 11px;
}

.gallery-subheading span {
    display: block;
    margin-top: 3px;
    color: #8c9793;
    font-size: 8px;
}

.gallery-grid {
    display: grid;
    grid-template-columns:
        repeat(5, minmax(0, 1fr));
    gap: 12px;
}

.gallery-image-card {
    overflow: hidden;
    border: 1px solid #dbe5df;
    border-radius: 12px;
    background: #fff;
}

.gallery-image {
    position: relative;
    height: 140px;
    overflow: hidden;
    background: #edf3ef;
}

.gallery-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.gallery-number {
    position: absolute;
    top: 7px;
    left: 7px;
    padding: 4px 7px;
    border-radius: 6px;
    background: rgba(12, 48, 40, .84);
    color: #fff;
    font-size: 7px;
    font-weight: 900;
}

.gallery-delete-button {
    position: absolute;
    top: 7px;
    right: 7px;
    width: 28px;
    height: 28px;
    border: 0;
    border-radius: 8px;
    background: rgba(255,255,255,.94);
    color: #b04e46;
    cursor: pointer;
}

.gallery-image-footer {
    display: flex;
    justify-content: space-between;
    gap: 8px;
    padding: 8px 9px;
}

.gallery-image-footer span {
    overflow: hidden;
    color: #697872;
    font-size: 8px;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.gallery-image-footer small {
    flex: 0 0 auto;
    color: #99a39f;
    font-size: 7px;
}

.empty-gallery {
    margin-top: 23px;
    padding: 35px;
    border-radius: 14px;
    background: #f8faf8;
    color: #84928c;
    text-align: center;
}

.empty-gallery i {
    display: block;
    margin-bottom: 9px;
    font-size: 24px;
}

.empty-gallery strong {
    display: block;
    color: #45645b;
    font-size: 10px;
}

.empty-gallery span {
    display: block;
    margin-top: 4px;
    font-size: 8px;
}


/* =========================================================
   SAVE BAR
========================================================= */

.event-save-bar {
    position: sticky;
    z-index: 30;
    bottom: 14px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    margin-top: 18px;
    padding: 12px 14px 12px 18px;
    border: 1px solid #cedbd5;
    border-radius: 15px;
    background: rgba(255,255,255,.96);
    box-shadow:
        0 10px 35px
        rgba(20,59,50,.13);
    backdrop-filter: blur(12px);
}

.event-save-info {
    color: #7d8985;
    font-size: 9px;
}

.event-save-info > span {
    width: 7px;
    height: 7px;
    display: inline-block;
    margin-right: 6px;
    border-radius: 50%;
    background: #cba348;
}

.event-save-info strong {
    color: #294b42;
}

.event-save-actions {
    display: flex;
    gap: 8px;
}

#saveEventButton {
    min-width: 140px;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:1000px) {

    .gallery-grid {
        grid-template-columns:
            repeat(4,1fr);
    }

}

@media(max-width:800px) {

    .main-images-grid,
    .event-fields {
        grid-template-columns:1fr;
    }

    .gallery-grid {
        grid-template-columns:
            repeat(3,1fr);
    }

}

@media(max-width:600px) {

    .event-head {
        align-items:flex-start;
        flex-direction:column;
    }

    .gallery-grid {
        grid-template-columns:
            repeat(2,1fr);
    }

    .event-save-bar {
        align-items:stretch;
        flex-direction:column;
    }

    .event-save-actions .btn {
        flex:1;
    }

}

</style>

@endsection
