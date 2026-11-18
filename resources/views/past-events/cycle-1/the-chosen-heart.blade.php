@extends("Layout.layout")

@section('title', 'The Chosen Heart · Seerat Club')

@section("Content")


<link
    rel="stylesheet"
    href="{{ asset('assets/css/past-events-premium.css') }}"
>


@php

    /*
    |--------------------------------------------------------------------------
    | EVENT IMAGE FOLDERS
    |--------------------------------------------------------------------------
    */

    $eventImageFolder =
        'assets/images/the-chosen-heart';

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
    | 2. hero.png
    | 3. hero.jpg
    | 4. gallery/g1.jpg
    | 5. poster.png
    |
    */

    $heroImage =
        $eventImageFolder . '/poster.png';


    $heroCandidates = [

        $eventImageFolder . '/official-hero.jpg',

        $eventImageFolder . '/hero.png',

        $eventImageFolder . '/hero.jpg',

        $galleryFolder . '/g1.jpg',

        $eventImageFolder . '/poster.png',

    ];


    foreach ($heroCandidates as $candidate) {

        if (
            file_exists(
                public_path($candidate)
            )
        ) {

            $heroImage =
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
        '/poster.png';


    /*
    |--------------------------------------------------------------------------
    | GALLERY
    |--------------------------------------------------------------------------
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
   THE CHOSEN HEART · PREMIUM EVENT PAGE
   ================================================================ */

.chosen-heart-page {

    --ch-green:
        #173b31;

    --ch-green-dark:
        #102b24;

    --ch-green-soft:
        #e7eee8;

    --ch-gold:
        #c99d45;

    --ch-gold-light:
        #efdca6;

    --ch-cream:
        #f8f5ed;

    --ch-cream-soft:
        #fbfaf6;

    --ch-text:
        #172923;

    --ch-muted:
        #5c6964;

    --ch-border:
        rgba(23,59,49,.10);

    --ch-shadow:
        0 18px 55px
        rgba(20,52,43,.10);

    --ch-shadow-lg:
        0 30px 90px
        rgba(13,44,36,.17);

    background:
        #ffffff;

    color:
        var(--ch-text);
}


/* ================================================================
   TYPOGRAPHY
   ================================================================ */

.chosen-heart-page h1,
.chosen-heart-page h2,
.chosen-heart-page h3,
.chosen-heart-page h4,
.chosen-heart-page h5,
.chosen-heart-page h6,
.chosen-heart-page .ac-btn,
.chosen-heart-page .ac-eyebrow,
.chosen-heart-page .sc-chapter-links strong {

    font-family:
        "Baloo 2",
        "SC Arabic",
        sans-serif !important;
}


.chosen-heart-page p,
.chosen-heart-page li,
.chosen-heart-page .c1-meta,
.chosen-heart-page .ac-breadcrumb,
.chosen-heart-page .ch-resource-meta,
.chosen-heart-page .sc-chapter-links small {

    font-family:
        "DM Sans",
        "SC Arabic",
        sans-serif !important;
}


/* ================================================================
   HERO
   ================================================================ */

.chosen-heart-page
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


/*
   Clean overlay.
   No .92 pale colour.
*/

.chosen-heart-page
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
            rgba(10,39,32,.47) 42%,
            rgba(10,39,32,.16) 72%,
            rgba(10,39,32,.05) 100%
        );
}


.chosen-heart-page
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


.chosen-heart-page
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

.chosen-heart-page
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


.chosen-heart-page
.ac-breadcrumb a {

    color:
        #ffffff !important;

    text-decoration:
        none;
}


.chosen-heart-page
.ac-breadcrumb a:hover {

    color:
        var(--ch-gold-light) !important;
}


/* ================================================================
   HERO GRID
   ================================================================ */

.chosen-heart-page
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

.chosen-heart-page
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
        var(--ch-shadow-lg) !important;

    backdrop-filter:
        none !important;

    -webkit-backdrop-filter:
        none !important;
}


.chosen-heart-page
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
            var(--ch-gold),
            #efd593
        );
}


/* ================================================================
   HERO EYEBROW
   ================================================================ */

.chosen-heart-page
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

.chosen-heart-page
.c1-hero-copy h1 {

    max-width:
        680px;

    margin:
        23px 0
        22px !important;

    color:
        var(--ch-green-dark) !important;

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

.chosen-heart-page
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
   HERO META
   ================================================================ */

.chosen-heart-page
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


.chosen-heart-page
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


.chosen-heart-page
.c1-meta i {

    color:
        #aa8438;
}


/* ================================================================
   BUTTONS
   ================================================================ */

.chosen-heart-page
.ac-actions {

    display:
        flex;

    flex-wrap:
        wrap;

    gap:
        13px;
}


.chosen-heart-page
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
        var(--ch-gold) !important;

    border-radius:
        999px !important;

    background:
        var(--ch-gold) !important;

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


.chosen-heart-page
.ac-btn:hover {

    transform:
        translateY(-2px);

    background:
        #d5aa51 !important;
}


.chosen-heart-page
.ac-btn-secondary {

    border-color:
        rgba(23,59,49,.13) !important;

    background:
        #ffffff !important;

    color:
        var(--ch-green-dark) !important;

    box-shadow:
        0 10px 25px
        rgba(16,43,36,.07);
}


/* ================================================================
   POSTER
   ================================================================ */

.chosen-heart-page
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
        var(--ch-shadow-lg) !important;

    transform:
        rotate(1deg);

    transition:
        .3s ease;
}


.chosen-heart-page
.c1-visual:hover {

    transform:
        rotate(0)
        translateY(-5px);
}


.chosen-heart-page
.c1-visual a {

    display:
        block;

    overflow:
        hidden;

    border-radius:
        21px;
}


.chosen-heart-page
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


.chosen-heart-page
.c1-visual:hover img {

    transform:
        scale(1.025);
}


.chosen-heart-page
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

.chosen-heart-page
.c1-story {

    background:
        radial-gradient(
            circle at 8% 8%,
            rgba(201,157,69,.09),
            transparent 25%
        ),
        #f9f7f0 !important;
}


.chosen-heart-page
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


.chosen-heart-page
.c1-story-copy {

    max-width:
        780px;
}


.chosen-heart-page
.c1-story-copy h2 {

    margin:
        15px 0
        22px;

    color:
        var(--ch-green-dark) !important;

    font-size:
        clamp(
            38px,
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


.chosen-heart-page
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


.chosen-heart-page
.c1-story-copy p {

    color:
        #5a6762 !important;

    font-size:
        16px !important;

    line-height:
        1.92 !important;
}


/* ================================================================
   KEY CONNECTIONS
   ================================================================ */

.chosen-heart-page
.c1-aside {

    position:
        sticky;

    top:
        120px;
}


.chosen-heart-page
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
        var(--ch-shadow) !important;
}


.chosen-heart-page
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


.chosen-heart-page
.c1-lessons
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.chosen-heart-page
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


.chosen-heart-page
.c1-points {

    display:
        grid;

    gap:
        10px;
}


.chosen-heart-page
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


.chosen-heart-page
.c1-points i {

    color:
        #e6c878;
}


/* ================================================================
   COMPASSION SECTION
   ================================================================ */

.chosen-heart-page
.ch-heart-section {

    position:
        relative;

    overflow:
        hidden;

    background:
        linear-gradient(
            135deg,
            #173b31,
            #102b24
        ) !important;
}


.chosen-heart-page
.ch-heart-section::after {

    content: "";

    position:
        absolute;

    width:
        520px;

    height:
        520px;

    right:
        -230px;

    bottom:
        -270px;

    border:
        1px solid
        rgba(239,219,162,.12);

    border-radius:
        50%;
}


.chosen-heart-page
.ch-heart-grid {

    position:
        relative;

    z-index:
        2;

    display:
        grid;

    grid-template-columns:
        .82fr
        1.18fr;

    gap:
        70px;

    align-items:
        center;
}


.chosen-heart-page
.ch-heart-copy
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.chosen-heart-page
.ch-heart-copy h2 {

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


.chosen-heart-page
.ch-heart-copy p {

    color:
        rgba(255,255,255,.73) !important;

    font-size:
        16px;

    line-height:
        1.85;
}


.chosen-heart-page
.ch-heart-cards {

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


.chosen-heart-page
.ch-heart-card {

    padding:
        23px;

    border:
        1px solid
        rgba(255,255,255,.10);

    border-radius:
        20px;

    background:
        rgba(255,255,255,.065);
}


.chosen-heart-page
.ch-heart-card i {

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


.chosen-heart-page
.ch-heart-card h3 {

    margin:
        0 0
        8px;

    color:
        #ffffff !important;

    font-size:
        21px;
}


.chosen-heart-page
.ch-heart-card p {

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
   COMMON SECTION HEADING
   ================================================================ */

.chosen-heart-page
.ch-section-heading {

    max-width:
        760px;

    margin-bottom:
        42px;
}


.chosen-heart-page
.ch-section-heading h2 {

    margin:
        13px 0;

    color:
        var(--ch-green-dark);

    font-size:
        clamp(
            38px,
            4vw,
            52px
        );

    line-height:
        1.08;
}


.chosen-heart-page
.ch-section-heading p {

    color:
        #64716c;

    font-size:
        16px;

    line-height:
        1.8;
}


/* ================================================================
   PRESENTATION / RESOURCE
   ================================================================ */

.chosen-heart-page
.ch-resource-section {

    background:
        #fbfaf6 !important;
}


.chosen-heart-page
.ch-resource-card {

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
        var(--ch-border) !important;

    border-radius:
        30px !important;

    background:
        #ffffff !important;

    box-shadow:
        var(--ch-shadow) !important;
}


.chosen-heart-page
.ch-resource-preview {

    min-height:
        540px;

    background:
        #e9ece6;
}


.chosen-heart-page
.ch-resource-preview iframe {

    display:
        block;

    width:
        100%;

    height:
        100%;

    min-height:
        540px;

    border:
        0;
}


.chosen-heart-page
.ch-resource-copy {

    display:
        flex;

    flex-direction:
        column;

    justify-content:
        center;

    padding:
        44px 38px;
}


.chosen-heart-page
.ch-resource-copy h3 {

    margin:
        13px 0
        15px;

    color:
        var(--ch-green-dark);

    font-size:
        clamp(
            28px,
            2.5vw,
            35px
        );

    line-height:
        1.13;
}


.chosen-heart-page
.ch-resource-copy p {

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


.chosen-heart-page
.ch-resource-meta {

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


.chosen-heart-page
.ch-resource-meta span {

    display:
        flex;

    align-items:
        center;

    gap:
        11px;
}


.chosen-heart-page
.ch-resource-meta i {

    width:
        18px;

    color:
        #b68d3d;

    text-align:
        center;
}


.chosen-heart-page
.ch-resource-copy
.ac-btn {

    width:
        fit-content;
}


/* ================================================================
   GALLERY
   ================================================================ */

.chosen-heart-page
.ch-gallery-section {

    background:
        linear-gradient(
            180deg,
            #e8eee6,
            #f3f0e7
        ) !important;
}


.chosen-heart-page
.ch-gallery-grid {

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


.chosen-heart-page
.ch-gallery-item {

    margin:
        0;

    padding:
        6px;

    overflow:
        hidden;

    border:
        1px solid
        var(--ch-border);

    border-radius:
        23px;

    background:
        #ffffff;

    box-shadow:
        var(--ch-shadow);

    transition:
        transform .3s ease,
        box-shadow .3s ease;
}


.chosen-heart-page
.ch-gallery-item:hover {

    transform:
        translateY(-5px);

    box-shadow:
        0 22px 55px
        rgba(20,52,43,.13);
}


.chosen-heart-page
.ch-gallery-item a {

    display:
        block;

    aspect-ratio:
        4 / 3;

    overflow:
        hidden;

    border-radius:
        17px;
}


.chosen-heart-page
.ch-gallery-item img {

    display:
        block;

    width:
        100%;

    height:
        100%;

    object-fit:
        cover;

    object-position:
        center;

    transition:
        transform .45s ease;
}


.chosen-heart-page
.ch-gallery-item:hover img {

    transform:
        scale(1.045);
}


/* ================================================================
   CYCLE NAVIGATION
   ================================================================ */

.chosen-heart-page
.c1-cycle-nav {

    background:
        #e7ece4 !important;
}


.chosen-heart-page
.c1-cycle-nav
.ac-heading {

    margin-bottom:
        30px;
}


.chosen-heart-page
.c1-cycle-nav h2 {

    margin:
        12px 0;

    color:
        var(--ch-green-dark);

    font-size:
        clamp(
            34px,
            4vw,
            50px
        );
}


.chosen-heart-page
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


.chosen-heart-page
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
        var(--ch-border);

    border-radius:
        20px;

    background:
        rgba(255,255,255,.82);

    color:
        var(--ch-green-dark);

    text-decoration:
        none;

    box-shadow:
        0 10px 30px
        rgba(20,52,43,.05);

    transition:
        .25s ease;
}


.chosen-heart-page
.sc-chapter-links > a:hover {

    transform:
        translateY(-4px);

    background:
        #ffffff;

    box-shadow:
        var(--ch-shadow);
}


.chosen-heart-page
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


.chosen-heart-page
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

    .chosen-heart-page
    .c1-hero-grid {

        grid-template-columns:
            1fr
            330px;
    }


    .chosen-heart-page
    .c1-story-grid {

        grid-template-columns:
            1fr
            290px;
    }


    .chosen-heart-page
    .ch-gallery-grid {

        grid-template-columns:
            repeat(
                2,
                minmax(0,1fr)
            );
    }


    .chosen-heart-page
    .ch-resource-card {

        grid-template-columns:
            1fr;
    }


    .chosen-heart-page
    .ch-resource-preview,
    .chosen-heart-page
    .ch-resource-preview iframe {

        min-height:
            480px;
    }

}


@media (
    max-width: 850px
) {

    .chosen-heart-page
    .c1-hero {

        min-height:
            auto;

        padding-bottom:
            65px !important;
    }


    .chosen-heart-page
    .c1-hero-grid {

        grid-template-columns:
            1fr;
    }


    .chosen-heart-page
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


    .chosen-heart-page
    .c1-story-grid {

        grid-template-columns:
            1fr;
    }


    .chosen-heart-page
    .c1-aside {

        position:
            static;
    }


    .chosen-heart-page
    .ch-heart-grid {

        grid-template-columns:
            1fr;

        gap:
            38px;
    }

}


@media (
    max-width: 650px
) {

    .chosen-heart-page
    .c1-hero {

        border-radius:
            0 0
            28px 28px;
    }


    .chosen-heart-page
    .c1-hero-copy {

        padding:
            30px 23px !important;

        border-radius:
            25px !important;
    }


    .chosen-heart-page
    .c1-hero-copy h1 {

        font-size:
            clamp(
                44px,
                13vw,
                62px
            ) !important;
    }


    .chosen-heart-page
    .c1-meta {

        flex-direction:
            column;

        align-items:
            flex-start;
    }


    .chosen-heart-page
    .ac-actions {

        flex-direction:
            column;
    }


    .chosen-heart-page
    .ac-btn {

        width:
            100%;
    }


    .chosen-heart-page
    .ch-heart-cards,
    .chosen-heart-page
    .ch-gallery-grid {

        grid-template-columns:
            1fr;
    }


    .chosen-heart-page
    .ch-resource-preview,
    .chosen-heart-page
    .ch-resource-preview iframe {

        min-height:
            410px;
    }


    .chosen-heart-page
    .ch-resource-copy {

        padding:
            30px 23px;
    }


    .chosen-heart-page
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
        chosen-heart-page
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
                    The Chosen Heart
                </span>

            </nav>



            <div class="c1-hero-grid">


                <div class="c1-hero-copy">


                    <span class="ac-eyebrow">

                        CYCLE 1 · SESSION 05

                    </span>


                    <h1>

                        The Chosen
                        Heart

                    </h1>


                    <p class="c1-hero-lead">

                        The Prophet’s ﷺ
                        early childhood,
                        Allah’s care,
                        gratitude and compassion.

                    </p>



                    <div class="c1-meta">


                        <span>

                            <i class="fas fa-book-open"></i>

                            <b>
                                Cycle 1 · Session 05
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
                        data-fancybox="chosen-heart-poster"
                        href="{{ asset($posterImage) }}"
                    >

                        <img
                            src="{{ asset($posterImage) }}"
                            alt="The Chosen Heart event poster"
                        >

                    </a>


                    <figcaption>

                        The Chosen Heart ·
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

                        Early childhood,
                        gratitude, compassion
                        and Allah’s care.

                    </h2>


                    <p class="c1-lead">

                        Cycle 1 · Session 05

                    </p>


                    <p>

                        The session began with an
                        overview of the geography
                        of Arabia and the conditions
                        of the region before Islam.

                        Children were then introduced
                        to important personalities
                        connected with the early
                        childhood of
                        Prophet Muhammad ﷺ.

                    </p>


                    <p>

                        The learning led into
                        the significant event
                        of the splitting of
                        his blessed heart,
                        helping children reflect
                        on Allah’s special care
                        and preparation.

                    </p>


                    <p>

                        Children then took part
                        in an engaging Jenga activity
                        where they shared some
                        of their most cherished
                        moments with their parents.

                        The activity encouraged
                        reflection on family,
                        love and gratitude.

                    </p>


                    <p>

                        An inspiring conversation
                        followed with Mr. Uzair,
                        who shared his journey
                        from growing up in an orphanage
                        in Mardan to continuing
                        his education on scholarship
                        while building his professional
                        career in Karachi.

                    </p>


                    <p>

                        The discussion highlighted
                        the importance of caring
                        for orphans in Islam.

                        Children were encouraged
                        to participate in Sadaqah
                        during Ramadan, and ghullaks
                        were distributed to support
                        the fundraising initiative.

                    </p>


                    <p>

                        The gathering concluded
                        with children writing
                        heartfelt appreciation
                        letters to their parents,
                        bringing the session back
                        to its central themes
                        of gratitude,
                        compassion and care.

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

                                Early childhood of the Prophet ﷺ

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Gratitude for parents

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Care for orphans

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Sadaqah and empathy

                            </span>


                        </div>


                    </div>


                </aside>


            </div>


        </div>


    </section>



    {{-- =========================================================
        COMPASSION / CHARACTER SECTION
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section ch-heart-section"
    >


        <div class="ac-container">


            <div class="ch-heart-grid">


                <div class="ch-heart-copy">


                    <span class="ac-eyebrow">

                        A HEART THAT CARES

                    </span>


                    <h2>

                        Learning to notice,
                        appreciate and care.

                    </h2>


                    <p>

                        The Chosen Heart connected
                        Seerah with everyday character:
                        gratitude towards parents,
                        compassion for children
                        without parents,
                        giving through Sadaqah
                        and expressing love
                        through thoughtful actions.

                    </p>


                </div>



                <div class="ch-heart-cards">


                    <article class="ch-heart-card">


                        <i class="fas fa-heart"></i>


                        <h3>
                            Gratitude
                        </h3>


                        <p>
                            Recognising the love,
                            care and sacrifices
                            of parents.
                        </p>


                    </article>



                    <article class="ch-heart-card">


                        <i class="fas fa-child"></i>


                        <h3>
                            Care for Orphans
                        </h3>


                        <p>
                            Understanding the Islamic
                            responsibility of caring
                            for vulnerable children.
                        </p>


                    </article>



                    <article class="ch-heart-card">


                        <i class="fas fa-gift"></i>


                        <h3>
                            Sadaqah
                        </h3>


                        <p>
                            Learning that small
                            acts of giving can
                            make a meaningful difference.
                        </p>


                    </article>



                    <article class="ch-heart-card">


                        <i class="fas fa-envelope"></i>


                        <h3>
                            Appreciation
                        </h3>


                        <p>
                            Expressing gratitude
                            through heartfelt
                            letters to parents.
                        </p>


                    </article>


                </div>


            </div>


        </div>


    </section>



    {{-- =========================================================
        PRESENTATION MATERIAL
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section ch-resource-section"
    >


        <div class="ac-container">


            <div class="ch-section-heading">


                <span class="ac-eyebrow">

                    PRESENTATION & MATERIALS

                </span>


                <h2>

                    Continue learning
                    beyond the session.

                </h2>


                <p>

                    Explore the original
                    presentation from
                    The Chosen Heart.

                </p>


            </div>



            <article class="ac-card ch-resource-card">


                <div class="ch-resource-preview">


                    <iframe
                        src="https://drive.google.com/file/d/1nygS5bCP8z7CsnoLtkJPoDQClgXGtit1/preview"
                        title="The Chosen Heart PDF"
                        loading="lazy"
                        allow="autoplay"
                    ></iframe>


                </div>



                <div class="ch-resource-copy">


                    <span class="ac-eyebrow">

                        PRESENTATION SLIDEPACK

                    </span>


                    <h3>

                        The Chosen Heart

                    </h3>


                    <p>

                        Revisit the original
                        presentation prepared
                        for this Seerat Club session.

                    </p>



                    <div class="ch-resource-meta">


                        <span>

                            <i class="far fa-file-pdf"></i>

                            The Chosen Heart PDF

                        </span>


                        <span>

                            <i class="fas fa-book-open"></i>

                            Cycle 1 · Session 05

                        </span>


                        <span>

                            <i class="fas fa-heart"></i>

                            Gratitude & Compassion

                        </span>


                    </div>



                    <a
                        class="ac-btn ac-btn-secondary"
                        href="https://drive.google.com/file/d/1nygS5bCP8z7CsnoLtkJPoDQClgXGtit1/view"
                        target="_blank"
                        rel="noopener noreferrer"
                    >

                        Open full material

                        <i class="fas fa-arrow-right"></i>

                    </a>


                </div>


            </article>


        </div>


    </section>



    {{-- =========================================================
        EVENT GALLERY
    ========================================================== --}}

    @if(count($galleryImages))


        <section
            class="ac-section sc-svg-section ch-gallery-section"
            id="event-gallery"
        >


            <div class="ac-container">


                <div class="ch-section-heading">


                    <span class="ac-eyebrow">

                        EVENT PICTURES

                    </span>


                    <h2>

                        Moments from
                        The Chosen Heart.

                    </h2>


                    <p>

                        Storytelling,
                        activities, reflection
                        and memorable moments
                        from the original session.

                    </p>


                </div>



                <div class="ch-gallery-grid">


                    @foreach(
                        $galleryImages
                        as $index => $image
                    )


                        <figure class="ch-gallery-item">


                            <a
                                data-fancybox="chosen-heart-gallery"
                                href="{{ asset($image) }}"
                            >

                                <img
                                    src="{{ asset($image) }}"
                                    alt="The Chosen Heart event photograph {{ $index + 1 }}"
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
                        'past-events.cycle-1.the-year-of-the-elephant'
                    ) }}"
                >


                    <small>

                        Previous chapter

                    </small>


                    <strong>

                        The Year of the Elephant

                        <span aria-hidden="true">

                            ↗

                        </span>

                    </strong>


                </a>



                <a
                    href="{{ route(
                        'past-events.cycle-1.the-prophet-in-making'
                    ) }}"
                >


                    <small>

                        Next chapter

                    </small>


                    <strong>

                        The Prophet in Making

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
