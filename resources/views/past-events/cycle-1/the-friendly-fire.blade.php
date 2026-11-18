@extends("Layout.layout")

@section('title', 'The Friendly Fire · Seerat Club')

@section("Content")


<link
    rel="stylesheet"
    href="{{ asset('assets/css/past-events-premium.css') }}"
>


@php

    /*
    |--------------------------------------------------------------------------
    | IMAGE FOLDERS
    |--------------------------------------------------------------------------
    */

    $eventImageFolder =
        'assets/images/the-friendly-fire';

    $eventImagePath =
        public_path($eventImageFolder);


    $galleryFolder =
        $eventImageFolder . '/gallery';

    $galleryPath =
        public_path($galleryFolder);


    /*
    |--------------------------------------------------------------------------
    | HERO IMAGE
    |--------------------------------------------------------------------------
    |
    | Automatic fallback:
    |
    | 1. official-hero.jpg
    | 2. hero.jpg
    | 3. 1.jpg
    | 4. posters.png
    |
    */

    $heroImage =
        $eventImageFolder . '/posters.png';


    $heroCandidates = [

        'official-hero.jpg',

        'hero.jpg',

        '1.jpg',

        'posters.png',

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
    | POSTER
    |--------------------------------------------------------------------------
    */

    $posterImage =
        $eventImageFolder .
        '/posters.png';


    /*
    |--------------------------------------------------------------------------
    | ACTIVITY / SUBMITTED SHEETS
    |--------------------------------------------------------------------------
    |
    | Loads:
    |
    | 1.jpg
    | 2.jpg
    | 3.jpg
    | etc
    |
    | from the main Friendly Fire folder.
    |
    */

    $activityImages = [];


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


            if (
                preg_match(
                    '/^\d+\.(jpg|jpeg|png|webp)$/i',
                    $fileName
                )
            ) {

                $activityImages[] =
                    $eventImageFolder .
                    '/' .
                    $fileName;

            }

        }


        usort(
            $activityImages,
            function ($a, $b) {

                return strnatcasecmp(
                    basename($a),
                    basename($b)
                );

            }
        );

    }


    /*
    |--------------------------------------------------------------------------
    | EVENT GALLERY
    |--------------------------------------------------------------------------
    |
    | Loads:
    |
    | gallery/g1.jpg
    | gallery/g2.jpg
    | ...
    |
    */

    $galleryImages = [];


    if (is_dir($galleryPath)) {

        foreach (
            glob($galleryPath . '/*')
            as $file
        ) {

            if (! is_file($file)) {
                continue;
            }


            $fileName =
                basename($file);


            if (
                preg_match(
                    '/^g\d+\.(jpg|jpeg|png|webp)$/i',
                    $fileName
                )
            ) {

                $galleryImages[] =
                    $galleryFolder .
                    '/' .
                    $fileName;

            }

        }


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
   THE FRIENDLY FIRE · PREMIUM EVENT PAGE
   ================================================================ */

.friendly-fire-page {

    --ff-green:
        #173b31;

    --ff-green-dark:
        #102b24;

    --ff-green-soft:
        #e7eee9;

    --ff-gold:
        #c99d45;

    --ff-gold-light:
        #efdba2;

    --ff-cream:
        #f8f5ed;

    --ff-cream-soft:
        #fbfaf6;

    --ff-blue:
        #dce9ed;

    --ff-text:
        #172923;

    --ff-muted:
        #5c6964;

    --ff-border:
        rgba(23,59,49,.10);

    --ff-shadow:
        0 18px 55px
        rgba(20,52,43,.10);

    --ff-shadow-lg:
        0 30px 90px
        rgba(13,44,36,.17);

    background:
        #ffffff;

    color:
        var(--ff-text);
}


/* ================================================================
   TYPOGRAPHY
   ================================================================ */

.friendly-fire-page h1,
.friendly-fire-page h2,
.friendly-fire-page h3,
.friendly-fire-page h4,
.friendly-fire-page h5,
.friendly-fire-page h6,
.friendly-fire-page .ac-btn,
.friendly-fire-page .ac-eyebrow,
.friendly-fire-page .ff-label,
.friendly-fire-page .sc-chapter-links strong {

    font-family:
        "Baloo 2",
        "SC Arabic",
        sans-serif !important;

}


.friendly-fire-page p,
.friendly-fire-page li,
.friendly-fire-page .c1-meta,
.friendly-fire-page .ac-breadcrumb,
.friendly-fire-page .ff-resource-meta,
.friendly-fire-page .ff-video-meta,
.friendly-fire-page .sc-chapter-links small {

    font-family:
        "DM Sans",
        "SC Arabic",
        sans-serif !important;

}


/* ================================================================
   HERO
   ================================================================ */

.friendly-fire-page
.c1-hero {

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


/* image remains visible */

.friendly-fire-page
.c1-hero::before {

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
            rgba(10,39,32,.76) 0%,
            rgba(10,39,32,.48) 42%,
            rgba(10,39,32,.17) 72%,
            rgba(10,39,32,.06) 100%
        );
}


.friendly-fire-page
.c1-hero::after {

    content: "";

    position:
        absolute;

    width:
        470px;

    height:
        470px;

    right:
        -160px;

    top:
        -170px;

    border-radius:
        50%;

    background:
        radial-gradient(
            circle,
            rgba(238,213,145,.22),
            transparent 68%
        );

    pointer-events:
        none;
}


.friendly-fire-page
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

.friendly-fire-page
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


.friendly-fire-page
.ac-breadcrumb a {

    color:
        #ffffff !important;

    text-decoration:
        none;
}


.friendly-fire-page
.ac-breadcrumb a:hover {

    color:
        var(--ff-gold-light) !important;
}


/* ================================================================
   HERO GRID
   ================================================================ */

.friendly-fire-page
.c1-hero-grid {

    display:
        grid;

    grid-template-columns:
        minmax(0,1.12fr)
        minmax(330px,.74fr);

    align-items:
        center;

    gap:
        clamp(45px,6vw,82px);
}


/* ================================================================
   HERO COPY
   ================================================================ */

.friendly-fire-page
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
        var(--ff-shadow-lg) !important;

    backdrop-filter:
        none !important;

    -webkit-backdrop-filter:
        none !important;
}


.friendly-fire-page
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
            var(--ff-gold),
            #efd593
        );
}


/* ================================================================
   HERO EYEBROW
   ================================================================ */

.friendly-fire-page
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

.friendly-fire-page
.c1-hero-copy h1 {

    margin:
        23px 0
        22px !important;

    color:
        var(--ff-green-dark) !important;

    font-size:
        clamp(
            52px,
            5.7vw,
            80px
        ) !important;

    font-weight:
        700 !important;

    line-height:
        1.01 !important;

    letter-spacing:
        -.03em !important;
}


/* ================================================================
   HERO LEAD
   ================================================================ */

.friendly-fire-page
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

    line-height:
        1.8 !important;
}


/* ================================================================
   META
   ================================================================ */

.friendly-fire-page
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


.friendly-fire-page
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
        rgba(255,255,255,.74);

    color:
        #53635d;

    font-size:
        13px;
}


.friendly-fire-page
.c1-meta i {

    color:
        #aa8438;
}


/* ================================================================
   BUTTONS
   ================================================================ */

.friendly-fire-page
.ac-actions {

    display:
        flex;

    flex-wrap:
        wrap;

    gap:
        13px;
}


.friendly-fire-page
.ac-btn {

    display:
        inline-flex;

    align-items:
        center;

    justify-content:
        center;

    gap:
        11px;

    min-height:
        52px;

    padding:
        13px 24px !important;

    border:
        1px solid
        var(--ff-gold) !important;

    border-radius:
        999px !important;

    background:
        var(--ff-gold) !important;

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


.friendly-fire-page
.ac-btn:hover {

    transform:
        translateY(-2px);

    background:
        #d6ad55 !important;
}


.friendly-fire-page
.ac-btn-secondary {

    border-color:
        rgba(23,59,49,.13) !important;

    background:
        #ffffff !important;

    color:
        var(--ff-green-dark) !important;

    box-shadow:
        0 10px 25px
        rgba(16,43,36,.07);
}


/* ================================================================
   HERO POSTER
   ================================================================ */

.friendly-fire-page
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
        rgba(255,255,255,.93) !important;

    box-shadow:
        var(--ff-shadow-lg) !important;

    transform:
        rotate(1deg);

    transition:
        .3s ease;
}


.friendly-fire-page
.c1-visual:hover {

    transform:
        rotate(0)
        translateY(-5px);
}


.friendly-fire-page
.c1-visual a {

    display:
        block;

    overflow:
        hidden;

    border-radius:
        21px;
}


.friendly-fire-page
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


.friendly-fire-page
.c1-visual:hover img {

    transform:
        scale(1.025);
}


.friendly-fire-page
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
   STORY
   ================================================================ */

.friendly-fire-page
.c1-story {

    background:

        radial-gradient(
            circle at 8% 8%,
            rgba(201,157,69,.09),
            transparent 25%
        ),

        #f9f7f0 !important;
}


.friendly-fire-page
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


.friendly-fire-page
.c1-story-copy {

    max-width:
        770px;
}


.friendly-fire-page
.c1-story-copy h2 {

    margin:
        15px 0
        22px;

    color:
        var(--ff-green-dark) !important;

    font-size:
        clamp(
            38px,
            4vw,
            54px
        ) !important;

    line-height:
        1.08 !important;

    letter-spacing:
        -.02em;
}


.friendly-fire-page
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


.friendly-fire-page
.c1-story-copy p {

    color:
        #5a6762 !important;

    font-size:
        16px !important;

    line-height:
        1.92 !important;
}


/* ================================================================
   LESSONS
   ================================================================ */

.friendly-fire-page
.c1-aside {

    position:
        sticky;

    top:
        120px;
}


.friendly-fire-page
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
        var(--ff-shadow) !important;
}


.friendly-fire-page
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


.friendly-fire-page
.c1-lessons
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.friendly-fire-page
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


.friendly-fire-page
.c1-points {

    display:
        grid;

    gap:
        10px;
}


.friendly-fire-page
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


.friendly-fire-page
.c1-points i {

    color:
        #e6c878;
}


/* ================================================================
   DISCOVERY SECTION
   ================================================================ */

.friendly-fire-page
.ff-discovery {

    position:
        relative;

    overflow:
        hidden;

    background:
        linear-gradient(
            135deg,
            #173b31,
            #0f2c24
        ) !important;
}


.friendly-fire-page
.ff-discovery::after {

    content: "";

    position:
        absolute;

    width:
        520px;

    height:
        520px;

    right:
        -210px;

    bottom:
        -250px;

    border:
        1px solid
        rgba(239,219,162,.12);

    border-radius:
        50%;
}


.friendly-fire-page
.ff-discovery-grid {

    position:
        relative;

    z-index:
        2;

    display:
        grid;

    grid-template-columns:
        .85fr
        1.15fr;

    gap:
        70px;

    align-items:
        center;
}


.friendly-fire-page
.ff-discovery-copy
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.friendly-fire-page
.ff-discovery-copy h2 {

    margin:
        14px 0
        18px;

    color:
        #ffffff !important;

    font-size:
        clamp(
            38px,
            4vw,
            54px
        );

    line-height:
        1.06;
}


.friendly-fire-page
.ff-discovery-copy p {

    color:
        rgba(255,255,255,.73) !important;

    font-size:
        16px;

    line-height:
        1.85;
}


.friendly-fire-page
.ff-discovery-cards {

    display:
        grid;

    grid-template-columns:
        repeat(
            2,
            minmax(0,1fr)
        );

    gap:
        15px;
}


.friendly-fire-page
.ff-discovery-card {

    padding:
        23px;

    border:
        1px solid
        rgba(255,255,255,.10);

    border-radius:
        20px;

    background:
        rgba(255,255,255,.065);

    backdrop-filter:
        blur(8px);
}


.friendly-fire-page
.ff-discovery-card i {

    display:
        flex;

    align-items:
        center;

    justify-content:
        center;

    width:
        42px;

    height:
        42px;

    margin-bottom:
        16px;

    border-radius:
        50%;

    background:
        rgba(230,200,120,.14);

    color:
        #e7ca7c;

    font-size:
        18px;
}


.friendly-fire-page
.ff-discovery-card h3 {

    margin:
        0 0
        8px;

    color:
        #ffffff !important;

    font-size:
        21px;
}


.friendly-fire-page
.ff-discovery-card p {

    margin:
        0;

    color:
        rgba(255,255,255,.67) !important;

    font-size:
        14px;

    line-height:
        1.65;
}


/* ================================================================
   VIDEOS
   ================================================================ */

.friendly-fire-page
.ff-video-section {

    background:
        #edf1ec !important;
}


.friendly-fire-page
.ff-section-heading {

    max-width:
        760px;

    margin-bottom:
        42px;
}


.friendly-fire-page
.ff-section-heading h2 {

    margin:
        13px 0;

    color:
        var(--ff-green-dark);

    font-size:
        clamp(
            38px,
            4vw,
            52px
        );

    line-height:
        1.08;
}


.friendly-fire-page
.ff-section-heading p {

    color:
        #64716c;

    font-size:
        16px;
}


/* video grid */

.friendly-fire-page
.ff-video-grid {

    display:
        grid;

    grid-template-columns:
        repeat(
            3,
            minmax(0,1fr)
        );

    gap:
        24px;
}


.friendly-fire-page
.ff-video-card {

    overflow:
        hidden;

    border:
        1px solid
        var(--ff-border);

    border-radius:
        25px;

    background:
        #ffffff;

    box-shadow:
        var(--ff-shadow);

    transition:
        transform .3s ease,
        box-shadow .3s ease;
}


.friendly-fire-page
.ff-video-card:hover {

    transform:
        translateY(-6px);

    box-shadow:
        0 25px 60px
        rgba(20,52,43,.14);
}


.friendly-fire-page
.ff-video-frame {

    position:
        relative;

    aspect-ratio:
        16 / 9;

    overflow:
        hidden;

    background:
        #101f1b;
}


.friendly-fire-page
.ff-video-frame iframe {

    position:
        absolute;

    inset:
        0;

    width:
        100%;

    height:
        100%;

    border:
        0;
}


.friendly-fire-page
.ff-video-copy {

    padding:
        24px;
}


.friendly-fire-page
.ff-video-copy h3 {

    margin:
        10px 0
        17px;

    color:
        var(--ff-green-dark);

    font-size:
        24px;
}


.friendly-fire-page
.ff-video-copy
.ac-btn {

    width:
        100%;
}


/* ================================================================
   ACTIVITY SHEETS
   ================================================================ */

.friendly-fire-page
.ff-activity-section {

    background:
        #fbfaf6 !important;
}


.friendly-fire-page
.ff-activity-grid {

    display:
        grid;

    grid-template-columns:
        repeat(
            3,
            minmax(0,1fr)
        );

    gap:
        20px;
}


.friendly-fire-page
.ff-activity-item {

    margin:
        0;

    padding:
        7px;

    overflow:
        hidden;

    border:
        1px solid
        var(--ff-border);

    border-radius:
        24px;

    background:
        #ffffff;

    box-shadow:
        var(--ff-shadow);

    transition:
        transform .3s ease;
}


.friendly-fire-page
.ff-activity-item:hover {

    transform:
        translateY(-5px);
}


.friendly-fire-page
.ff-activity-item a {

    display:
        block;

    aspect-ratio:
        4 / 3;

    overflow:
        hidden;

    border-radius:
        17px;
}


.friendly-fire-page
.ff-activity-item img {

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


.friendly-fire-page
.ff-activity-item:hover img {

    transform:
        scale(1.04);
}


/* ================================================================
   EVENT GALLERY
   ================================================================ */

.friendly-fire-page
.ff-gallery-section {

    background:
        linear-gradient(
            180deg,
            #e8eee6,
            #f3f0e7
        ) !important;
}


.friendly-fire-page
.ff-gallery-grid {

    display:
        grid;

    grid-template-columns:
        repeat(
            3,
            minmax(0,1fr)
        );

    gap:
        20px;
}


.friendly-fire-page
.ff-gallery-item {

    margin:
        0;

    padding:
        6px;

    overflow:
        hidden;

    border:
        1px solid
        var(--ff-border);

    border-radius:
        23px;

    background:
        #ffffff;

    box-shadow:
        var(--ff-shadow);

    transition:
        .3s ease;
}


.friendly-fire-page
.ff-gallery-item:hover {

    transform:
        translateY(-5px);

    box-shadow:
        0 22px 55px
        rgba(20,52,43,.13);
}


.friendly-fire-page
.ff-gallery-item a {

    display:
        block;

    aspect-ratio:
        4 / 3;

    overflow:
        hidden;

    border-radius:
        17px;
}


.friendly-fire-page
.ff-gallery-item img {

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


.friendly-fire-page
.ff-gallery-item:hover img {

    transform:
        scale(1.045);
}


/* ================================================================
   MATERIALS
   ================================================================ */

.friendly-fire-page
.ff-material-section {

    background:
        #fbfaf6 !important;
}


.friendly-fire-page
.ff-resource-stack {

    display:
        grid;

    gap:
        34px;
}


.friendly-fire-page
.ff-resource-card {

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
        var(--ff-border) !important;

    border-radius:
        30px !important;

    background:
        #ffffff !important;

    box-shadow:
        var(--ff-shadow) !important;
}


/* Drive Preview */

.friendly-fire-page
.ff-resource-preview {

    min-height:
        520px;

    background:
        #e9ece6;
}


.friendly-fire-page
.ff-resource-preview iframe {

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


.friendly-fire-page
.ff-resource-copy {

    display:
        flex;

    flex-direction:
        column;

    justify-content:
        center;

    padding:
        44px 38px;
}


.friendly-fire-page
.ff-resource-copy h3 {

    margin:
        13px 0
        15px;

    color:
        var(--ff-green-dark);

    font-size:
        clamp(
            28px,
            2.5vw,
            35px
        );

    line-height:
        1.13;
}


.friendly-fire-page
.ff-resource-copy p {

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


.friendly-fire-page
.ff-resource-meta {

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


.friendly-fire-page
.ff-resource-meta span {

    display:
        flex;

    align-items:
        center;

    gap:
        11px;
}


.friendly-fire-page
.ff-resource-meta i {

    width:
        18px;

    color:
        #b68d3d;

    text-align:
        center;
}


.friendly-fire-page
.ff-resource-copy
.ac-btn {

    width:
        fit-content;
}


/* ================================================================
   CYCLE NAV
   ================================================================ */

.friendly-fire-page
.c1-cycle-nav {

    background:
        #e7ece4 !important;
}


.friendly-fire-page
.c1-cycle-nav
.ac-heading {

    margin-bottom:
        30px;
}


.friendly-fire-page
.c1-cycle-nav h2 {

    margin:
        12px 0;

    color:
        var(--ff-green-dark);

    font-size:
        clamp(
            34px,
            4vw,
            50px
        );
}


.friendly-fire-page
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


.friendly-fire-page
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
        var(--ff-border);

    border-radius:
        20px;

    background:
        rgba(255,255,255,.82);

    color:
        var(--ff-green-dark);

    text-decoration:
        none;

    box-shadow:
        0 10px 30px
        rgba(20,52,43,.05);

    transition:
        .25s ease;
}


.friendly-fire-page
.sc-chapter-links > a:hover {

    transform:
        translateY(-4px);

    background:
        #ffffff;

    box-shadow:
        var(--ff-shadow);
}


.friendly-fire-page
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


.friendly-fire-page
.sc-chapter-links strong {

    display:
        flex;

    justify-content:
        space-between;

    gap:
        14px;

    font-size:
        23px;
}


/* ================================================================
   RESPONSIVE
   ================================================================ */

@media (
    max-width: 1050px
) {

    .friendly-fire-page
    .c1-hero-grid {

        grid-template-columns:
            1fr
            330px;
    }


    .friendly-fire-page
    .c1-story-grid {

        grid-template-columns:
            1fr
            290px;
    }


    .friendly-fire-page
    .ff-video-grid {

        grid-template-columns:
            repeat(
                2,
                minmax(0,1fr)
            );
    }


    .friendly-fire-page
    .ff-gallery-grid,
    .friendly-fire-page
    .ff-activity-grid {

        grid-template-columns:
            repeat(
                2,
                minmax(0,1fr)
            );
    }


    .friendly-fire-page
    .ff-resource-card {

        grid-template-columns:
            1fr;
    }


    .friendly-fire-page
    .ff-resource-preview,
    .friendly-fire-page
    .ff-resource-preview iframe {

        min-height:
            480px;
    }

}


@media (
    max-width: 800px
) {

    .friendly-fire-page
    .c1-hero {

        min-height:
            auto;

        padding-bottom:
            65px !important;
    }


    .friendly-fire-page
    .c1-hero-grid {

        grid-template-columns:
            1fr;
    }


    .friendly-fire-page
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


    .friendly-fire-page
    .c1-story-grid {

        grid-template-columns:
            1fr;
    }


    .friendly-fire-page
    .c1-aside {

        position:
            static;
    }


    .friendly-fire-page
    .ff-discovery-grid {

        grid-template-columns:
            1fr;

        gap:
            38px;
    }

}


@media (
    max-width: 650px
) {

    .friendly-fire-page
    .c1-hero {

        border-radius:
            0 0
            28px 28px;
    }


    .friendly-fire-page
    .c1-hero-copy {

        padding:
            30px 23px !important;

        border-radius:
            25px !important;
    }


    .friendly-fire-page
    .c1-hero-copy h1 {

        font-size:
            clamp(
                44px,
                13vw,
                62px
            ) !important;
    }


    .friendly-fire-page
    .c1-meta {

        flex-direction:
            column;

        align-items:
            flex-start;
    }


    .friendly-fire-page
    .ac-actions {

        flex-direction:
            column;
    }


    .friendly-fire-page
    .ac-btn {

        width:
            100%;
    }


    .friendly-fire-page
    .ff-video-grid,
    .friendly-fire-page
    .ff-gallery-grid,
    .friendly-fire-page
    .ff-activity-grid,
    .friendly-fire-page
    .ff-discovery-cards {

        grid-template-columns:
            1fr;
    }


    .friendly-fire-page
    .ff-resource-preview,
    .friendly-fire-page
    .ff-resource-preview iframe {

        min-height:
            410px;
    }


    .friendly-fire-page
    .ff-resource-copy {

        padding:
            30px 23px;
    }


    .friendly-fire-page
    .sc-chapter-links {

        grid-template-columns:
            1fr;
    }

}

</style>



<div
    class="
        ac-site
        ac-page
        c1-event-page
        friendly-fire-page
    "
>


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
                    The Friendly Fire
                </span>

            </nav>



            <div class="c1-hero-grid">


                <div class="c1-hero-copy">


                    <span class="ac-eyebrow">

                        CYCLE 1 · SESSION 02

                    </span>


                    <h1>

                        The Friendly
                        Fire

                    </h1>


                    <p class="c1-hero-lead">

                        A journey of discovery
                        with Hazrat Ibrahim (AS),
                        faith, astronomy and
                        scientific curiosity.

                    </p>



                    <div class="c1-meta">


                        <span>

                            <i class="fas fa-book-open"></i>

                            <b>
                                Cycle 1 · Session 02
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
                        data-fancybox="friendly-fire-poster"
                        href="{{ asset($posterImage) }}"
                    >

                        <img
                            src="{{ asset($posterImage) }}"
                            alt="The Friendly Fire"
                        >

                    </a>


                    <figcaption>

                        The Friendly Fire ·
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

                        A journey of discovery
                        with Hazrat Ibrahim (AS).

                    </h2>


                    <p class="c1-lead">

                        Cycle 1 · Session 02

                    </p>


                    <p>

                        The session began with a recap of
                        Hazrat Adam (AS)’s story from the
                        previous event,
                        Once Upon a Time in Jannat,
                        focusing on his superhero qualities.

                        This was followed by a storytelling
                        session about Hazrat Ibrahim (AS),
                        highlighting how Allah protected him
                        when he was thrown into the fire.

                    </p>


                    <p>

                        Children also explored how
                        Hazrat Ibrahim (AS) reflected on
                        the moon, stars and sun before
                        concluding that Allah is the
                        ultimate controller of everything.

                    </p>


                    <p>

                        After a snack break and Isha prayers,
                        the session
                        <strong>Sitaron aur Sayaron ki Sair</strong>
                        introduced the story of
                        Ibn-Al-Haytham, the first scientist,
                        who challenged societal norms and
                        laid the foundation of modern optics.

                    </p>


                    <p>

                        His discoveries about how light
                        travels helped pave the way for
                        inventions such as cameras
                        and telescopes.

                    </p>


                    <p>

                        The Karachi Astronomical Society
                        then conducted an interactive
                        session on the moon, discussing
                        its surface, orbit and role in
                        the Islamic calendar.

                    </p>


                    <p>

                        The event concluded with children
                        enjoying a glimpse of the moon
                        and Jupiter through telescopes
                        provided by KAS.

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

                                Knowing Allah

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Courage of Hazrat Ibrahim (AS)

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Scientific curiosity

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Islamic calendar & astronomy

                            </span>


                        </div>


                    </div>


                </aside>


            </div>


        </div>


    </section>



    {{-- =========================================================
        DISCOVERY HIGHLIGHTS
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section ff-discovery"
    >


        <div class="ac-container">


            <div class="ff-discovery-grid">


                <div class="ff-discovery-copy">


                    <span class="ac-eyebrow">

                        FAITH MEETS DISCOVERY

                    </span>


                    <h2>

                        Looking at the universe
                        with wonder.

                    </h2>


                    <p>

                        The session connected Seerah,
                        scientific thinking and observation,
                        helping children see how curiosity
                        and faith can deepen their
                        understanding of Allah’s creation.

                    </p>


                </div>



                <div class="ff-discovery-cards">


                    <article class="ff-discovery-card">

                        <i class="fas fa-fire"></i>

                        <h3>
                            Courage
                        </h3>

                        <p>
                            The courage and trust of
                            Hazrat Ibrahim (AS).
                        </p>

                    </article>


                    <article class="ff-discovery-card">

                        <i class="fas fa-moon"></i>

                        <h3>
                            Astronomy
                        </h3>

                        <p>
                            Learning about the moon,
                            stars and Islamic calendar.
                        </p>

                    </article>


                    <article class="ff-discovery-card">

                        <i class="fas fa-lightbulb"></i>

                        <h3>
                            Ibn-Al-Haytham
                        </h3>

                        <p>
                            Discovering the foundations
                            of modern optics.
                        </p>

                    </article>


                    <article class="ff-discovery-card">

                        <i class="fas fa-binoculars"></i>

                        <h3>
                            Observation
                        </h3>

                        <p>
                            Seeing the moon and Jupiter
                            through telescopes.
                        </p>

                    </article>


                </div>


            </div>


        </div>


    </section>



    {{-- =========================================================
        SESSION VIDEOS
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section ff-video-section"
    >


        <div class="ac-container">


            <div class="ff-section-heading">


                <span class="ac-eyebrow">

                    SESSION VIDEOS

                </span>


                <h2>

                    Watch moments from
                    The Friendly Fire.

                </h2>


                <p>

                    Revisit the session and continue
                    watching the original videos
                    directly on YouTube.

                </p>


            </div>



            <div class="ff-video-grid">


                {{-- VIDEO 01 --}}

                <article class="ff-video-card">


                    <div class="ff-video-frame">


                        <iframe
                            src="https://www.youtube.com/embed/pIuwwS_4qNI?rel=0"
                            title="The Friendly Fire Session Video 1"
                            loading="lazy"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>


                    </div>



                    <div class="ff-video-copy">


                        <span class="ac-eyebrow">

                            VIDEO 01

                        </span>


                        <h3>

                            The Friendly Fire

                        </h3>


                        <a
                            class="ac-btn ac-btn-secondary"
                            href="https://youtu.be/pIuwwS_4qNI"
                            target="_blank"
                            rel="noopener noreferrer"
                        >

                            <i class="fab fa-youtube"></i>

                            Watch on YouTube

                        </a>


                    </div>


                </article>



                {{-- VIDEO 02 --}}

                <article class="ff-video-card">


                    <div class="ff-video-frame">


                        <iframe
                            src="https://www.youtube.com/embed/CYZxwG5Cu5M?rel=0"
                            title="The Friendly Fire Session Video 2"
                            loading="lazy"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>


                    </div>



                    <div class="ff-video-copy">


                        <span class="ac-eyebrow">

                            VIDEO 02

                        </span>


                        <h3>

                            The Friendly Fire

                        </h3>


                        <a
                            class="ac-btn ac-btn-secondary"
                            href="https://youtu.be/CYZxwG5Cu5M"
                            target="_blank"
                            rel="noopener noreferrer"
                        >

                            <i class="fab fa-youtube"></i>

                            Watch on YouTube

                        </a>


                    </div>


                </article>



                {{-- VIDEO 03 --}}

                <article class="ff-video-card">


                    <div class="ff-video-frame">


                        <iframe
                            src="https://www.youtube.com/embed/mkKRQOkR3a0?rel=0"
                            title="The Friendly Fire Event Promo Video"
                            loading="lazy"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>


                    </div>



                    <div class="ff-video-copy">


                        <span class="ac-eyebrow">

                            VIDEO 03

                        </span>


                        <h3>

                            Event Promo Video

                        </h3>


                        <a
                            class="ac-btn ac-btn-secondary"
                            href="https://youtu.be/mkKRQOkR3a0"
                            target="_blank"
                            rel="noopener noreferrer"
                        >

                            <i class="fab fa-youtube"></i>

                            Watch on YouTube

                        </a>


                    </div>


                </article>


            </div>


        </div>


    </section>



    {{-- =========================================================
        SUBMITTED ACTIVITY SHEETS
    ========================================================== --}}

    @if(count($activityImages))


        <section
            class="ac-section sc-svg-section ff-activity-section"
        >


            <div class="ac-container">


                <div class="ff-section-heading">


                    <span class="ac-eyebrow">

                        HANDS-ON LEARNING

                    </span>


                    <h2>

                        Submitted activity
                        sheets and moments.

                    </h2>


                    <p>

                        A glimpse into the creative,
                        reflective and hands-on learning
                        from The Friendly Fire session.

                    </p>


                </div>



                <div class="ff-activity-grid">


                    @foreach(
                        $activityImages
                        as $index => $image
                    )


                        <figure class="ff-activity-item">


                            <a
                                data-fancybox="friendly-fire-activities"
                                href="{{ asset($image) }}"
                            >

                                <img
                                    src="{{ asset($image) }}"
                                    alt="The Friendly Fire activity {{ $index + 1 }}"
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
        EVENT GALLERY
    ========================================================== --}}

    @if(count($galleryImages))


        <section
            class="ac-section sc-svg-section ff-gallery-section"
            id="event-gallery"
        >


            <div class="ac-container">


                <div class="ff-section-heading">


                    <span class="ac-eyebrow">

                        EVENT PICTURES

                    </span>


                    <h2>

                        Moments from
                        The Friendly Fire.

                    </h2>


                    <p>

                        Photographs from the original
                        Seerat Club Cycle 1 session.

                    </p>


                </div>



                <div class="ff-gallery-grid">


                    @foreach(
                        $galleryImages
                        as $index => $image
                    )


                        <figure class="ff-gallery-item">


                            <a
                                data-fancybox="friendly-fire-gallery"
                                href="{{ asset($image) }}"
                            >

                                <img
                                    src="{{ asset($image) }}"
                                    alt="The Friendly Fire event photograph {{ $index + 1 }}"
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
        class="ac-section sc-svg-section ff-material-section"
    >


        <div class="ac-container">


            <div class="ff-section-heading">


                <span class="ac-eyebrow">

                    PRESENTATION & MATERIALS

                </span>


                <h2>

                    Continue the learning
                    beyond the session.

                </h2>


                <p>

                    Explore the original learning
                    resources connected with
                    The Friendly Fire.

                </p>


            </div>



            <div class="ff-resource-stack">


                {{-- =================================================
                    MATERIAL 01
                ================================================== --}}

                <article class="ac-card ff-resource-card">


                    <div class="ff-resource-preview">


                        <iframe
                            src="https://drive.google.com/file/d/1Xwip3Bp-oFaxbvxbESeVwCjwVdoaY5t-/preview"
                            title="The Friendly Fire Session Material 01"
                            loading="lazy"
                            allow="autoplay"
                        ></iframe>


                    </div>



                    <div class="ff-resource-copy">


                        <span class="ac-eyebrow">

                            SESSION MATERIAL 01

                        </span>


                        <h3>

                            The Friendly Fire

                        </h3>


                        <p>

                            Continue exploring the
                            original learning material
                            prepared for this
                            Seerat Club session.

                        </p>



                        <div class="ff-resource-meta">


                            <span>

                                <i class="far fa-file-alt"></i>

                                Original Session Resource

                            </span>


                            <span>

                                <i class="fas fa-book-open"></i>

                                Cycle 1 · Session 02

                            </span>


                        </div>



                        <a
                            class="ac-btn ac-btn-secondary"
                            href="https://drive.google.com/file/d/1Xwip3Bp-oFaxbvxbESeVwCjwVdoaY5t-/view"
                            target="_blank"
                            rel="noopener noreferrer"
                        >

                            Open full material

                            <i class="fas fa-arrow-right"></i>

                        </a>


                    </div>


                </article>



                {{-- =================================================
                    MATERIAL 02
                ================================================== --}}

                <article class="ac-card ff-resource-card">


                    <div class="ff-resource-preview">


                        <iframe
                            src="https://drive.google.com/file/d/1g8mLO2nXaaTt66xNdE5fv0qXVji3bQLA/preview"
                            title="The Friendly Fire Session Material 02"
                            loading="lazy"
                            allow="autoplay"
                        ></iframe>


                    </div>



                    <div class="ff-resource-copy">


                        <span class="ac-eyebrow">

                            SESSION MATERIAL 02

                        </span>


                        <h3>

                            The Friendly Fire

                        </h3>


                        <p>

                            Revisit another original
                            resource from Cycle 1,
                            Session 02.

                        </p>



                        <div class="ff-resource-meta">


                            <span>

                                <i class="far fa-file-alt"></i>

                                Original Session Resource

                            </span>


                            <span>

                                <i class="fas fa-book-open"></i>

                                Cycle 1 · Session 02

                            </span>


                        </div>



                        <a
                            class="ac-btn ac-btn-secondary"
                            href="https://drive.google.com/file/d/1g8mLO2nXaaTt66xNdE5fv0qXVji3bQLA/view"
                            target="_blank"
                            rel="noopener noreferrer"
                        >

                            Open full material

                            <i class="fas fa-arrow-right"></i>

                        </a>


                    </div>


                </article>



                {{-- =================================================
                    MATERIAL 03
                ================================================== --}}

                <article class="ac-card ff-resource-card">


                    <div class="ff-resource-preview">


                        <iframe
                            src="https://drive.google.com/file/d/16mYKd6_rUKLP5R-p4UhmGoQjwSs5qkWk/preview"
                            title="The Friendly Fire Session Material 03"
                            loading="lazy"
                            allow="autoplay"
                        ></iframe>


                    </div>



                    <div class="ff-resource-copy">


                        <span class="ac-eyebrow">

                            SESSION MATERIAL 03

                        </span>


                        <h3>

                            The Friendly Fire

                        </h3>


                        <p>

                            Explore the third original
                            learning resource connected
                            with this session.

                        </p>



                        <div class="ff-resource-meta">


                            <span>

                                <i class="far fa-file-alt"></i>

                                Original Session Resource

                            </span>


                            <span>

                                <i class="fas fa-book-open"></i>

                                Cycle 1 · Session 02

                            </span>


                        </div>



                        <a
                            class="ac-btn ac-btn-secondary"
                            href="https://drive.google.com/file/d/16mYKd6_rUKLP5R-p4UhmGoQjwSs5qkWk/view"
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
        NEXT / PREVIOUS
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
                        'past-events.cycle-1.once-upon-a-time-in-jannat'
                    ) }}"
                >


                    <small>

                        Previous chapter

                    </small>


                    <strong>

                        Once Upon a Time in Jannat

                        <span aria-hidden="true">

                            ↗

                        </span>

                    </strong>


                </a>



                <a
                    href="{{ route(
                        'past-events.cycle-1.the-pursuit-of-submission'
                    ) }}"
                >


                    <small>

                        Next chapter

                    </small>


                    <strong>

                        The Pursuit of Submission

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
