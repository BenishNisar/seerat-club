@extends("Layout.layout")

@section('title', 'Once Upon a Time in Jannat · Seerat Club')

@section("Content")


<link
    rel="stylesheet"
    href="{{ asset('assets/css/past-events-premium.css') }}"
>


@php

    /*
    |--------------------------------------------------------------------------
    | EVENT IMAGE FOLDER
    |--------------------------------------------------------------------------
    */

    $eventImageFolder =
        'assets/images/once-upon-a-time-in-jannat';

    $eventImagePath =
        public_path($eventImageFolder);


    /*
    |--------------------------------------------------------------------------
    | HERO IMAGE
    |--------------------------------------------------------------------------
    |
    | Automatic fallback:
    |
    | 1. official-hero.jpg
    | 2. hero.jpg
    | 3. poster.jpg
    |
    */

    $heroImage =
        $eventImageFolder . '/poster.jpg';


    $heroCandidates = [

        'official-hero.jpg',

        'hero.jpg',

        'poster.jpg',

    ];


    foreach ($heroCandidates as $candidate) {

        if (
            file_exists(
                public_path(
                    $eventImageFolder .
                    '/' .
                    $candidate
                )
            )
        ) {

            $heroImage =
                $eventImageFolder .
                '/' .
                $candidate;

            break;

        }

    }


    /*
    |--------------------------------------------------------------------------
    | POSTER IMAGE
    |--------------------------------------------------------------------------
    */

    $posterImage =
        $eventImageFolder .
        '/poster.jpg';


    /*
    |--------------------------------------------------------------------------
    | GALLERY IMAGES
    |--------------------------------------------------------------------------
    */

    $galleryImages = [];


    if (is_dir($eventImagePath)) {

        foreach (
            glob($eventImagePath . '/*')
            as $file
        ) {

            if (! is_file($file)) {
                continue;
            }


            $fileName =
                basename($file);


            /*
             * Only numbered gallery images:
             *
             * 1.jpg
             * 2.jpg
             * 3.png
             * 4.webp
             */

            if (
                preg_match(
                    '/^\d+\.(jpg|jpeg|png|webp)$/i',
                    $fileName
                )
            ) {

                $galleryImages[] =
                    $eventImageFolder .
                    '/' .
                    $fileName;

            }

        }


        /*
         * Natural ordering:
         *
         * 1
         * 2
         * 3
         * 10
         */

        usort(
            $galleryImages,
            function ($a, $b) {

                return strnatcasecmp(
                    basename($a),
                    basename($b)
                );

            }
        );

    }

@endphp



<style>

/* ================================================================
   ONCE UPON A TIME IN JANNAT
   PREMIUM EVENT PAGE
   ================================================================ */


/* ================================================================
   PAGE
   ================================================================ */

.jannat-page {

    --jp-green:
        #173b31;

    --jp-green-dark:
        #102b24;

    --jp-green-soft:
        #e8eee8;

    --jp-gold:
        #c99d45;

    --jp-gold-light:
        #efdca8;

    --jp-cream:
        #f8f5ed;

    --jp-cream-2:
        #f1eee5;

    --jp-text:
        #172923;

    --jp-muted:
        #5b6863;

    --jp-border:
        rgba(23,59,49,.10);

    --jp-shadow:
        0 18px 55px
        rgba(20,52,43,.10);

    --jp-shadow-lg:
        0 30px 90px
        rgba(13,44,36,.17);

    background:
        #ffffff;

    color:
        var(--jp-text);
}


/* ================================================================
   TYPOGRAPHY
   ================================================================ */

.jannat-page h1,
.jannat-page h2,
.jannat-page h3,
.jannat-page h4,
.jannat-page h5,
.jannat-page h6,
.jannat-page .ac-btn,
.jannat-page .ac-eyebrow,
.jannat-page .jp-label,
.jannat-page .sc-chapter-links strong {

    font-family:
        "Baloo 2",
        "SC Arabic",
        sans-serif !important;

}


.jannat-page p,
.jannat-page li,
.jannat-page .c1-meta,
.jannat-page .ac-breadcrumb,
.jannat-page .jp-resource-meta,
.jannat-page .sc-chapter-links small {

    font-family:
        "DM Sans",
        "SC Arabic",
        sans-serif !important;

}


/* ================================================================
   HERO
   ================================================================ */

.jannat-page .c1-hero {

    position:
        relative;

    isolation:
        isolate;

    min-height:
        690px;

    overflow:
        hidden;

    padding:
        0 0
        85px !important;

    border-radius:
        0 0
        46px 46px;

    background-position:
        center !important;

    background-size:
        cover !important;

    background-repeat:
        no-repeat !important;

    background-blend-mode:
        normal !important;
}


/*
   Soft overlay only.
   Background image stays visible.
*/

.jannat-page .c1-hero::before {

    content: "";

    position:
        absolute;

    inset:
        0;

    z-index:
        -1;

    background:

        linear-gradient(
            90deg,
            rgba(12,43,35,.74) 0%,
            rgba(12,43,35,.46) 43%,
            rgba(12,43,35,.16) 72%,
            rgba(12,43,35,.06) 100%
        );

}


/*
   Gold decorative glow
*/

.jannat-page .c1-hero::after {

    content: "";

    position:
        absolute;

    width:
        460px;

    height:
        460px;

    right:
        -150px;

    top:
        -150px;

    border-radius:
        50%;

    background:
        radial-gradient(
            circle,
            rgba(233,203,128,.20),
            transparent 68%
        );

    pointer-events:
        none;
}


/* ================================================================
   HERO CONTAINER
   ================================================================ */

.jannat-page
.c1-hero
.ac-container {

    position:
        relative;

    z-index:
        3;
}


/* ================================================================
   BREADCRUMB
   ================================================================ */

.jannat-page
.ac-breadcrumb {

    display:
        flex;

    flex-wrap:
        wrap;

    align-items:
        center;

    gap:
        9px;

    padding-top:
        34px;

    margin-bottom:
        36px;

    color:
        rgba(255,255,255,.72) !important;

    font-size:
        13px;
}


.jannat-page
.ac-breadcrumb a {

    color:
        #ffffff !important;

    text-decoration:
        none;
}


.jannat-page
.ac-breadcrumb a:hover {

    color:
        var(--jp-gold-light) !important;

}


/* ================================================================
   HERO GRID
   ================================================================ */

.jannat-page
.c1-hero-grid {

    display:
        grid;

    grid-template-columns:
        minmax(0,1.15fr)
        minmax(330px,.72fr);

    align-items:
        center;

    gap:
        clamp(45px,6vw,82px);
}


/* ================================================================
   HERO CONTENT PANEL
   ================================================================ */

.jannat-page
.c1-hero-copy {

    position:
        relative;

    padding:
        clamp(34px,4vw,52px) !important;

    border:
        1px solid
        rgba(255,255,255,.70) !important;

    border-radius:
        34px !important;

    background:
        #f8f5ed !important;

    box-shadow:
        var(--jp-shadow-lg) !important;

    backdrop-filter:
        none !important;

    -webkit-backdrop-filter:
        none !important;
}


/* gold top accent */

.jannat-page
.c1-hero-copy::before {

    content: "";

    position:
        absolute;

    top:
        0;

    left:
        42px;

    width:
        95px;

    height:
        4px;

    border-radius:
        0 0
        8px 8px;

    background:
        linear-gradient(
            90deg,
            var(--jp-gold),
            #efd593
        );
}


/* ================================================================
   HERO EYEBROW
   ================================================================ */

.jannat-page
.c1-hero-copy
.ac-eyebrow {

    display:
        inline-flex;

    align-items:
        center;

    padding:
        9px 14px;

    border:
        1px solid
        rgba(201,157,69,.38);

    border-radius:
        999px;

    background:
        #f0ead8;

    color:
        #a2782a !important;

    font-size:
        12px;

    font-weight:
        700;

    letter-spacing:
        .12em;
}


/* ================================================================
   HERO TITLE
   ================================================================ */

.jannat-page
.c1-hero-copy h1 {

    max-width:
        680px;

    margin:
        23px 0
        22px !important;

    color:
        var(--jp-green-dark) !important;

    font-size:
        clamp(
            48px,
            5.7vw,
            78px
        ) !important;

    font-weight:
        700 !important;

    line-height:
        1.01 !important;

    letter-spacing:
        -.03em !important;
}


/* ================================================================
   HERO DESCRIPTION
   ================================================================ */

.jannat-page
.c1-hero-lead {

    max-width:
        620px;

    margin:
        0 0
        28px;

    color:
        #62716b !important;

    font-size:
        17px !important;

    font-weight:
        400 !important;

    line-height:
        1.8 !important;
}


/* ================================================================
   META PILLS
   ================================================================ */

.jannat-page
.c1-meta {

    display:
        flex;

    flex-wrap:
        wrap;

    gap:
        11px;

    margin:
        26px 0
        30px;
}


.jannat-page
.c1-meta > span {

    display:
        inline-flex;

    align-items:
        center;

    gap:
        9px;

    padding:
        11px 14px;

    border:
        1px solid
        rgba(23,59,49,.11);

    border-radius:
        999px;

    background:
        rgba(255,255,255,.75);

    color:
        #53635d;

    font-size:
        13px;
}


.jannat-page
.c1-meta i {

    color:
        #aa8438;
}


/* ================================================================
   BUTTONS
   ================================================================ */

.jannat-page
.ac-actions {

    display:
        flex;

    flex-wrap:
        wrap;

    gap:
        13px;
}


.jannat-page
.ac-btn {

    display:
        inline-flex;

    align-items:
        center;

    justify-content:
        center;

    gap:
        12px;

    min-height:
        52px;

    padding:
        13px 24px !important;

    border:
        1px solid
        var(--jp-gold) !important;

    border-radius:
        999px !important;

    background:
        var(--jp-gold) !important;

    color:
        #102b24 !important;

    font-weight:
        700 !important;

    text-decoration:
        none;

    box-shadow:
        0 12px 30px
        rgba(201,157,69,.22);

    transition:
        .25s ease !important;
}


.jannat-page
.ac-btn:hover {

    transform:
        translateY(-2px);

    background:
        #d5aa51 !important;
}


.jannat-page
.ac-btn-secondary {

    border-color:
        rgba(23,59,49,.13) !important;

    background:
        #ffffff !important;

    color:
        var(--jp-green-dark) !important;

    box-shadow:
        0 10px 25px
        rgba(16,43,36,.07);
}


/* ================================================================
   HERO POSTER
   ================================================================ */

.jannat-page
.c1-visual {

    margin:
        0;

    padding:
        12px !important;

    overflow:
        hidden;

    border:
        1px solid
        rgba(255,255,255,.70) !important;

    border-radius:
        30px !important;

    background:
        rgba(255,255,255,.92) !important;

    box-shadow:
        var(--jp-shadow-lg) !important;

    transform:
        rotate(1deg);

    transition:
        .3s ease;
}


.jannat-page
.c1-visual:hover {

    transform:
        rotate(0)
        translateY(-5px);

}


.jannat-page
.c1-visual a {

    display:
        block;

    overflow:
        hidden;

    border-radius:
        21px;
}


.jannat-page
.c1-visual img {

    display:
        block;

    width:
        100%;

    aspect-ratio:
        4 / 5;

    object-fit:
        cover;

    transition:
        transform .45s ease;
}


.jannat-page
.c1-visual:hover img {

    transform:
        scale(1.025);

}


.jannat-page
.c1-visual figcaption {

    padding:
        14px 8px
        5px;

    color:
        #52615c;

    font-family:
        "DM Sans",
        sans-serif !important;

    font-size:
        12px;

    text-align:
        center;
}


/* ================================================================
   STORY SECTION
   ================================================================ */

.jannat-page
.c1-story {

    background:

        radial-gradient(
            circle at 8% 8%,
            rgba(201,157,69,.09),
            transparent 25%
        ),

        #f9f7f0 !important;
}


.jannat-page
.c1-story-grid {

    display:
        grid;

    grid-template-columns:
        minmax(0,1fr)
        330px;

    align-items:
        start;

    gap:
        clamp(45px,7vw,85px);
}


/* ================================================================
   STORY COPY
   ================================================================ */

.jannat-page
.c1-story-copy {

    max-width:
        760px;
}


.jannat-page
.c1-story-copy h2 {

    margin:
        15px 0
        22px;

    color:
        var(--jp-green-dark) !important;

    font-size:
        clamp(
            37px,
            4vw,
            54px
        ) !important;

    font-weight:
        700 !important;

    line-height:
        1.08 !important;

    letter-spacing:
        -.02em;
}


.jannat-page
.c1-lead {

    display:
        inline-flex;

    padding:
        7px 12px;

    margin-bottom:
        25px !important;

    border-radius:
        999px;

    background:
        #eee8d9;

    color:
        #99732f !important;

    font-size:
        13px !important;

    font-weight:
        600 !important;
}


.jannat-page
.c1-story-copy p {

    color:
        #5a6762 !important;

    font-size:
        16px !important;

    line-height:
        1.92 !important;
}


/* ================================================================
   LESSON CARD
   ================================================================ */

.jannat-page
.c1-aside {

    position:
        sticky;

    top:
        120px;
}


.jannat-page
.c1-lessons {

    position:
        relative;

    overflow:
        hidden;

    padding:
        34px !important;

    border:
        1px solid
        rgba(232,203,130,.18) !important;

    border-radius:
        28px !important;

    background:

        linear-gradient(
            145deg,
            #173b31,
            #102b24
        ) !important;

    box-shadow:
        var(--jp-shadow) !important;
}


.jannat-page
.c1-lessons::after {

    content: "";

    position:
        absolute;

    width:
        190px;

    height:
        190px;

    right:
        -75px;

    top:
        -75px;

    border:
        1px solid
        rgba(239,220,168,.13);

    border-radius:
        50%;
}


.jannat-page
.c1-lessons
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.jannat-page
.c1-lessons h3 {

    margin:
        14px 0
        25px;

    color:
        #ffffff !important;

    font-size:
        27px !important;

    line-height:
        1.18;
}


/* ================================================================
   LESSON POINTS
   ================================================================ */

.jannat-page
.c1-points {

    display:
        grid;

    gap:
        10px;
}


.jannat-page
.c1-points span {

    display:
        flex;

    align-items:
        center;

    gap:
        11px;

    padding:
        12px 13px;

    border:
        1px solid
        rgba(255,255,255,.08);

    border-radius:
        13px;

    background:
        rgba(255,255,255,.055);

    color:
        rgba(255,255,255,.90);

    font-family:
        "DM Sans",
        sans-serif !important;

    font-size:
        14px;
}


.jannat-page
.c1-points i {

    color:
        #e6c878;
}


/* ================================================================
   GALLERY
   ================================================================ */

.jannat-page
.c1-gallery-section {

    background:

        linear-gradient(
            180deg,
            #e9eee6,
            #f4f1e8
        ) !important;
}


.jannat-page
.c1-section-heading {

    max-width:
        760px;

    margin-bottom:
        42px;
}


.jannat-page
.c1-section-heading h2 {

    margin:
        13px 0;

    color:
        var(--jp-green-dark) !important;

    font-size:
        clamp(
            38px,
            4vw,
            52px
        ) !important;

    line-height:
        1.08;
}


.jannat-page
.c1-section-heading p {

    color:
        #65716d;

    font-size:
        16px;
}


.jannat-page
.c1-gallery {

    display:
        grid;

    grid-template-columns:
        repeat(
            2,
            minmax(0,1fr)
        );

    gap:
        24px;
}


.jannat-page
.c1-gallery-item {

    margin:
        0;

    padding:
        7px;

    overflow:
        hidden;

    border:
        1px solid
        rgba(23,59,49,.09);

    border-radius:
        25px;

    background:
        #ffffff;

    box-shadow:
        var(--jp-shadow);

    transition:
        transform .3s ease,
        box-shadow .3s ease;
}


.jannat-page
.c1-gallery-item:hover {

    transform:
        translateY(-6px);

    box-shadow:
        0 25px 60px
        rgba(20,52,43,.14);
}


.jannat-page
.c1-gallery-item a {

    display:
        block;

    aspect-ratio:
        4 / 3;

    overflow:
        hidden;

    border-radius:
        18px;
}


.jannat-page
.c1-gallery-item img {

    display:
        block;

    width:
        100%;

    height:
        100%;

    object-fit:
        cover;

    transition:
        transform .45s ease;
}


.jannat-page
.c1-gallery-item:hover img {

    transform:
        scale(1.045);

}


/* ================================================================
   MATERIALS
   ================================================================ */

.jannat-page
.jp-materials {

    background:
        #fbfaf6 !important;
}


.jannat-page
.jp-material-heading {

    max-width:
        760px;

    margin-bottom:
        45px;
}


.jannat-page
.jp-material-heading h2 {

    margin:
        14px 0;

    color:
        var(--jp-green-dark);

    font-size:
        clamp(
            38px,
            4vw,
            54px
        );

    line-height:
        1.08;
}


.jannat-page
.jp-material-heading p {

    max-width:
        640px;

    color:
        #606e68;

    font-size:
        16px;

    line-height:
        1.8;
}


/* ================================================================
   RESOURCE STACK
   ================================================================ */

.jannat-page
.jp-resource-stack {

    display:
        grid;

    gap:
        34px;
}


/* ================================================================
   RESOURCE CARD
   ================================================================ */

.jannat-page
.jp-resource-card {

    display:
        grid;

    grid-template-columns:
        minmax(0,1.35fr)
        minmax(320px,.72fr);

    overflow:
        hidden;

    padding:
        0 !important;

    border:
        1px solid
        var(--jp-border) !important;

    border-radius:
        30px !important;

    background:
        #ffffff !important;

    box-shadow:
        var(--jp-shadow) !important;
}


/* ================================================================
   GOOGLE DRIVE PREVIEW
   ================================================================ */

.jannat-page
.jp-resource-preview {

    min-height:
        520px;

    background:
        #e9ece6;
}


.jannat-page
.jp-resource-preview iframe {

    display:
        block;

    width:
        100%;

    height:
        100%;

    min-height:
        520px;

    border:
        0;
}


/* ================================================================
   RESOURCE TEXT
   ================================================================ */

.jannat-page
.jp-resource-copy {

    display:
        flex;

    flex-direction:
        column;

    justify-content:
        center;

    padding:
        44px 38px;
}


.jannat-page
.jp-resource-copy h3 {

    margin:
        13px 0
        15px;

    color:
        var(--jp-green-dark);

    font-size:
        clamp(
            28px,
            2.5vw,
            35px
        );

    line-height:
        1.13;
}


.jannat-page
.jp-resource-copy p {

    margin:
        0 0
        24px;

    color:
        #5f6b67;

    font-size:
        16px;

    line-height:
        1.8;
}


/* ================================================================
   RESOURCE META
   ================================================================ */

.jannat-page
.jp-resource-meta {

    display:
        grid;

    gap:
        11px;

    margin-bottom:
        28px;

    color:
        #586661;

    font-size:
        14px;
}


.jannat-page
.jp-resource-meta span {

    display:
        flex;

    align-items:
        center;

    gap:
        11px;
}


.jannat-page
.jp-resource-meta i {

    width:
        18px;

    color:
        #b68d3d;

    text-align:
        center;
}


.jannat-page
.jp-resource-copy
.ac-btn {

    width:
        fit-content;
}


/* ================================================================
   CYCLE NAVIGATION
   ================================================================ */

.jannat-page
.c1-cycle-nav {

    background:
        #e7ece4 !important;
}


.jannat-page
.c1-cycle-nav
.ac-heading {

    margin-bottom:
        30px;
}


.jannat-page
.c1-cycle-nav h2 {

    margin:
        12px 0;

    color:
        var(--jp-green-dark);

    font-size:
        clamp(
            34px,
            4vw,
            50px
        );
}


/* ================================================================
   CHAPTER LINKS
   ================================================================ */

.jannat-page
.sc-chapter-links {

    display:
        grid;

    grid-template-columns:
        repeat(
            2,
            minmax(0,1fr)
        );

    gap:
        16px;
}


.jannat-page
.sc-chapter-links > a {

    display:
        flex;

    flex-direction:
        column;

    gap:
        8px;

    min-height:
        125px;

    padding:
        25px 27px;

    border:
        1px solid
        rgba(23,59,49,.09);

    border-radius:
        20px;

    background:
        rgba(255,255,255,.82);

    color:
        var(--jp-green-dark);

    text-decoration:
        none;

    box-shadow:
        0 10px 30px
        rgba(20,52,43,.05);

    transition:
        .25s ease;
}


.jannat-page
.sc-chapter-links > a:hover {

    transform:
        translateY(-4px);

    background:
        #ffffff;

    box-shadow:
        var(--jp-shadow);
}


.jannat-page
.sc-chapter-links small {

    color:
        #9d7831;

    font-size:
        11px;

    font-weight:
        700;

    letter-spacing:
        .13em;

    text-transform:
        uppercase;
}


.jannat-page
.sc-chapter-links strong {

    display:
        flex;

    justify-content:
        space-between;

    gap:
        14px;

    font-size:
        24px;
}


/* ================================================================
   RESPONSIVE
   ================================================================ */

@media (
    max-width: 1000px
) {

    .jannat-page
    .c1-hero-grid {

        grid-template-columns:
            1fr
            330px;

    }


    .jannat-page
    .c1-story-grid {

        grid-template-columns:
            1fr
            290px;

    }


    .jannat-page
    .jp-resource-card {

        grid-template-columns:
            1fr;

    }


    .jannat-page
    .jp-resource-preview,
    .jannat-page
    .jp-resource-preview iframe {

        min-height:
            480px;

    }

}


@media (
    max-width: 800px
) {

    .jannat-page
    .c1-hero {

        min-height:
            auto;

        padding-bottom:
            65px !important;

    }


    .jannat-page
    .c1-hero-grid {

        grid-template-columns:
            1fr;

    }


    .jannat-page
    .c1-visual {

        width:
            min(
                520px,
                100%
            );

        margin-inline:
            auto;

        transform:
            none;

    }


    .jannat-page
    .c1-story-grid {

        grid-template-columns:
            1fr;

    }


    .jannat-page
    .c1-aside {

        position:
            static;

    }

}


@media (
    max-width: 650px
) {

    .jannat-page
    .c1-hero {

        border-radius:
            0 0
            28px 28px;

    }


    .jannat-page
    .c1-hero-copy {

        padding:
            30px 23px !important;

        border-radius:
            25px !important;

    }


    .jannat-page
    .c1-hero-copy h1 {

        font-size:
            clamp(
                42px,
                13vw,
                60px
            ) !important;

    }


    .jannat-page
    .c1-meta {

        flex-direction:
            column;

        align-items:
            flex-start;

    }


    .jannat-page
    .ac-actions {

        flex-direction:
            column;

    }


    .jannat-page
    .ac-btn {

        width:
            100%;

    }


    .jannat-page
    .c1-gallery {

        grid-template-columns:
            1fr;

    }


    .jannat-page
    .jp-resource-preview,
    .jannat-page
    .jp-resource-preview iframe {

        min-height:
            410px;

    }


    .jannat-page
    .jp-resource-copy {

        padding:
            30px 23px;

    }


    .jannat-page
    .sc-chapter-links {

        grid-template-columns:
            1fr;

    }

}

</style>



<div class="ac-site ac-page c1-event-page jannat-page">


    {{-- =========================================================
        HERO
    ========================================================== --}}

    <section
        class="ac-masthead c1-hero"
        style="
            background-image:
                url('{{ asset($heroImage) }}');
        "
    >


        <div class="ac-container">


            <nav
                aria-label="Breadcrumb"
                class="ac-breadcrumb"
            >

                <a href="{{ route('Home.welcome') }}">
                    Home
                </a>

                <span>/</span>

                <a href="{{ route('past-events.index') }}">
                    Past Events
                </a>

                <span>/</span>

                <a href="{{ route('past-events.cycle-1.index') }}">
                    Cycle 1
                </a>

                <span>/</span>

                <span aria-current="page">
                    Once Upon a Time in Jannat
                </span>

            </nav>



            <div class="c1-hero-grid">


                <div class="c1-hero-copy">


                    <span class="ac-eyebrow">

                        CYCLE 1 · SESSION 01

                    </span>


                    <h1>

                        Once Upon a
                        Time in Jannat

                    </h1>


                    <p class="c1-hero-lead">

                        The story of Hazrat Adam (AS),
                        the origins of humanity and
                        the purpose of life.

                    </p>



                    <div class="c1-meta">


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            <b>
                                5 October 2024
                            </b>

                        </span>


                        <span>

                            <i class="fas fa-book-open"></i>

                            <b>
                                Cycle 1 · Session 01
                            </b>

                        </span>


                        <span>

                            <i class="fas fa-map-marker-alt"></i>

                            <b>
                                Shafqat Masjid, Karachi
                            </b>

                        </span>


                    </div>



                    <div class="ac-actions">


                        <a
                            class="ac-btn"
                            href="#event-story"
                        >

                            Explore the session

                            <i class="fas fa-arrow-right"></i>

                        </a>


                        <a
                            class="ac-btn ac-btn-secondary"
                            href="#event-gallery"
                        >

                            View photographs

                        </a>


                    </div>


                </div>



                <figure class="c1-visual">


                    <a
                        data-fancybox="event-poster"
                        href="{{ asset($posterImage) }}"
                    >

                        <img
                            src="{{ asset($posterImage) }}"
                            alt="Once Upon a Time in Jannat"
                        >

                    </a>


                    <figcaption>

                        Once Upon a Time in Jannat ·
                        Seerat Club Cycle 1

                    </figcaption>


                </figure>


            </div>


        </div>


    </section>



    {{-- =========================================================
        STORY
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section c1-story"
        id="event-story"
    >


        <div class="ac-container">


            <div class="c1-story-grid">


                <article class="ac-prose c1-story-copy">


                    <span class="ac-eyebrow">

                        THE SESSION

                    </span>


                    <h2>

                        The story of Hazrat Adam (AS),
                        the origins of humanity and
                        the purpose of life.

                    </h2>


                    <p class="c1-lead">

                        Cycle 1 · Session 01

                    </p>


                    <p>

                        After registration & receiving membership cards, participants took part in ice-breaking activities, followed by a briefing on Seerat Club’s objectives. Maulana Owais then gave an insightful talk on creation of Hazrat Adam (AS), sparking reflective discussions.


                    </p>


                    <p>

                        Post-Maghrib, snacks & fun activities were enjoyed by children. The session concluded with a clay activity led by The Clay Studio (Port Grand) & Nabeel Majeed (NCA graduate), where children crafted models symbolizing humans' humble creation from clay. Bags with reflective journals and activity sheets were distributed for parents to reinforce the story’s lessons at home.
Details regarding the event can be read in our blog <a style="text-decoration:none;color:black;" href="{{ route('blog.index') }}">here</a>  .
                    </p>


                </article>



                <aside class="c1-aside">


                    <div class="c1-lessons ac-card">


                        <span class="ac-eyebrow">

                            KEY CONNECTIONS

                        </span>


                        <h3>

                            Lessons children
                            could carry home.

                        </h3>



                        <div class="c1-points">


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Purpose of life

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Creation of Hazrat Adam (AS)

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Resisting Shaytaan

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Reflection and creativity

                            </span>


                        </div>


                    </div>


                </aside>


            </div>


        </div>


    </section>



    {{-- =========================================================
        EVENT GALLERY
    ========================================================== --}}

    @if(count($galleryImages))


        <section
            class="ac-section sc-svg-section c1-gallery-section"
            id="event-gallery"
        >


            <div class="ac-container">


                <div class="c1-section-heading">


                    <span class="ac-eyebrow">

                        FROM THE ORIGINAL SESSION

                    </span>


                    <h2>

                        Moments from
                        Once Upon a Time in Jannat.

                    </h2>


                    <p>

                        Photographs from this
                        Seerat Club session.

                    </p>


                </div>



                <div class="c1-gallery">


                    @foreach($galleryImages as $index => $image)


                        <figure class="c1-gallery-item">


                            <a
                                data-fancybox="cycle1-jannat-gallery"
                                href="{{ asset($image) }}"
                            >

                                <img
                                    src="{{ asset($image) }}"
                                    alt="Once Upon a Time in Jannat event photograph {{ $index + 1 }}"
                                    loading="lazy"
                                    decoding="async"
                                >

                            </a>


                        </figure>


                    @endforeach


                </div>


            </div>


        </section>


    @endif



    {{-- =========================================================
        PRESENTATION & MATERIALS
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section jp-materials"
    >


        <div class="ac-container">


            <div class="jp-material-heading">


                <span class="ac-eyebrow">

                    PRESENTATION & MATERIALS

                </span>


                <h2>

                    Continue the learning
                    beyond the session.

                </h2>


                <p>

                    Explore the original learning
                    resources from
                    Once Upon a Time in Jannat.

                </p>


            </div>



            <div class="jp-resource-stack">


                {{-- =================================================
                    RESOURCE 01
                ================================================== --}}

                <article class="ac-card jp-resource-card">


                    <div class="jp-resource-preview">


                        <iframe
                            src="https://drive.google.com/file/d/1yaS6yAioQeeKtBFKEe0Wc8iFnMYs0GSf/preview"
                            title="Once Upon a Time in Jannat Session Material 01"
                            loading="lazy"
                            allow="autoplay"
                        ></iframe>


                    </div>



                    <div class="jp-resource-copy">


                        <span class="ac-eyebrow">

                            SESSION MATERIAL 01

                        </span>


                        <h3>

                            Once Upon a Time
                            in Jannat

                        </h3>


                        <p>

                            Revisit the original session
                            material and continue the
                            learning and discussion
                            together at home.

                        </p>



                        <div class="jp-resource-meta">


                            <span>

                                <i class="far fa-file-alt"></i>

                                Original Session Resource

                            </span>


                            <span>

                                <i class="fas fa-book-open"></i>

                                Cycle 1 · Session 01

                            </span>


                            <span>

                                <i class="far fa-calendar-alt"></i>

                                5 October 2024

                            </span>


                        </div>



                        <a
                            class="ac-btn ac-btn-secondary"
                            href="https://drive.google.com/file/d/1yaS6yAioQeeKtBFKEe0Wc8iFnMYs0GSf/view"
                            target="_blank"
                            rel="noopener noreferrer"
                        >

                            Open full material

                            <i class="fas fa-arrow-right"></i>

                        </a>


                    </div>


                </article>



                {{-- =================================================
                    RESOURCE 02
                ================================================== --}}

                <article class="ac-card jp-resource-card">


                    <div class="jp-resource-preview">


                        <iframe
                            src="https://drive.google.com/file/d/13MfIN3czW_Kqo4EWpYPQIFWEmFqJj3oK/preview"
                            title="Once Upon a Time in Jannat Session Material 02"
                            loading="lazy"
                            allow="autoplay"
                        ></iframe>


                    </div>



                    <div class="jp-resource-copy">


                        <span class="ac-eyebrow">

                            SESSION MATERIAL 02

                        </span>


                        <h3>

                            Once Upon a Time
                            in Jannat

                        </h3>


                        <p>

                            Explore the second original
                            learning resource prepared
                            for this Seerat Club session.

                        </p>



                        <div class="jp-resource-meta">


                            <span>

                                <i class="far fa-file-alt"></i>

                                Original Session Resource

                            </span>


                            <span>

                                <i class="fas fa-book-open"></i>

                                Cycle 1 · Session 01

                            </span>


                            <span>

                                <i class="far fa-calendar-alt"></i>

                                5 October 2024

                            </span>


                        </div>



                        <a
                            class="ac-btn ac-btn-secondary"
                            href="https://drive.google.com/file/d/13MfIN3czW_Kqo4EWpYPQIFWEmFqJj3oK/view"
                            target="_blank"
                            rel="noopener noreferrer"
                        >

                            Open full material

                            <i class="fas fa-arrow-right"></i>

                        </a>


                    </div>


                </article>


            </div>


        </div>


    </section>



    {{-- =========================================================
        CYCLE NAVIGATION
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section c1-cycle-nav"
    >


        <div class="ac-container">


            <div class="ac-heading">


                <span class="ac-eyebrow">

                    CONTINUE CYCLE 1

                </span>


                <h2>

                    Continue the
                    Seerah journey.

                </h2>


            </div>



            <nav
                aria-label="Event navigation"
                class="sc-chapter-links"
            >


                <a
                    href="{{ route(
                        'past-events.cycle-1.index'
                    ) }}"
                >


                    <small>

                        Back to

                    </small>


                    <strong>

                        Cycle 1

                        <span aria-hidden="true">

                            ↗

                        </span>

                    </strong>


                </a>



                <a
                    href="{{ route(
                        'past-events.cycle-1.the-friendly-fire'
                    ) }}"
                >


                    <small>

                        Next chapter

                    </small>


                    <strong>

                        The Friendly Fire

                        <span aria-hidden="true">

                            ↗

                        </span>

                    </strong>


                </a>


            </nav>


        </div>


    </section>


</div>

@endsection
