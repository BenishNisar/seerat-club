@extends("Layout.layout")

@section('title', 'As Saadiq Al Ameen · Seerat Club')

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
        'assets/images/as-saadiq-al-ameen';

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
    | 3. hero.png
    | 4. gallery/g1.jpg
    | 5. poster.jpg
    |
    */

    $heroImage =
        $eventImageFolder . '/poster.jpg';


    $heroCandidates = [

        $eventImageFolder . '/official-hero.jpg',

        $eventImageFolder . '/hero.jpg',

        $eventImageFolder . '/hero.png',

        $galleryFolder . '/g1.jpg',

        $eventImageFolder . '/poster.jpg',

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
        '/poster.jpg';


    /*
    |--------------------------------------------------------------------------
    | EVENT GALLERY
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
   AS SAADIQ AL AMEEN
   PREMIUM EVENT PAGE
   ================================================================ */

.saadiq-page {

    --sa-green:
        #173b31;

    --sa-green-dark:
        #102b24;

    --sa-green-soft:
        #e7eee8;

    --sa-gold:
        #c99d45;

    --sa-gold-light:
        #efdca6;

    --sa-cream:
        #f8f5ed;

    --sa-cream-soft:
        #fbfaf6;

    --sa-text:
        #172923;

    --sa-muted:
        #5c6964;

    --sa-border:
        rgba(23,59,49,.10);

    --sa-shadow:
        0 18px 55px
        rgba(20,52,43,.10);

    --sa-shadow-lg:
        0 30px 90px
        rgba(13,44,36,.17);

    background:
        #ffffff;

    color:
        var(--sa-text);
}


/* ================================================================
   TYPOGRAPHY
   ================================================================ */

.saadiq-page h1,
.saadiq-page h2,
.saadiq-page h3,
.saadiq-page h4,
.saadiq-page h5,
.saadiq-page h6,
.saadiq-page .ac-btn,
.saadiq-page .ac-eyebrow,
.saadiq-page .sc-chapter-links strong {

    font-family:
        "Baloo 2",
        "SC Arabic",
        sans-serif !important;
}


.saadiq-page p,
.saadiq-page li,
.saadiq-page .c1-meta,
.saadiq-page .ac-breadcrumb,
.saadiq-page .sa-resource-meta,
.saadiq-page .sc-chapter-links small {

    font-family:
        "DM Sans",
        "SC Arabic",
        sans-serif !important;
}


/* ================================================================
   HERO
   ================================================================ */

.saadiq-page
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
        0 0 85px !important;

    border-radius:
        0 0 46px 46px;

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
   No .92 pale overlay.
*/

.saadiq-page
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
            rgba(10,39,32,.77) 0%,
            rgba(10,39,32,.48) 42%,
            rgba(10,39,32,.17) 72%,
            rgba(10,39,32,.05) 100%
        );
}


.saadiq-page
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


.saadiq-page
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

.saadiq-page
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


.saadiq-page
.ac-breadcrumb a {

    color:
        #ffffff !important;

    text-decoration:
        none;
}


.saadiq-page
.ac-breadcrumb a:hover {

    color:
        var(--sa-gold-light) !important;
}


/* ================================================================
   HERO GRID
   ================================================================ */

.saadiq-page
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

.saadiq-page
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
        var(--sa-shadow-lg) !important;

    backdrop-filter:
        none !important;

    -webkit-backdrop-filter:
        none !important;
}


.saadiq-page
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
        0 0 8px 8px;

    background:
        linear-gradient(
            90deg,
            var(--sa-gold),
            #efd593
        );
}


.saadiq-page
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


.saadiq-page
.c1-hero-copy h1 {

    max-width:
        680px;

    margin:
        23px 0 22px !important;

    color:
        var(--sa-green-dark) !important;

    font-size:
        clamp(
            50px,
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


.saadiq-page
.c1-hero-lead {

    max-width:
        620px;

    margin:
        0 0 28px;

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

.saadiq-page
.c1-meta {

    display:
        flex;

    flex-wrap:
        wrap;

    gap:
        11px;

    margin:
        26px 0 30px;
}


.saadiq-page
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


.saadiq-page
.c1-meta i {

    color:
        #aa8438;
}


/* ================================================================
   BUTTONS
   ================================================================ */

.saadiq-page
.ac-actions {

    display:
        flex;

    flex-wrap:
        wrap;

    gap:
        13px;
}


.saadiq-page
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
        var(--sa-gold) !important;

    border-radius:
        999px !important;

    background:
        var(--sa-gold) !important;

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


.saadiq-page
.ac-btn:hover {

    transform:
        translateY(-2px);

    background:
        #d5aa51 !important;
}


.saadiq-page
.ac-btn-secondary {

    border-color:
        rgba(23,59,49,.13) !important;

    background:
        #ffffff !important;

    color:
        var(--sa-green-dark) !important;

    box-shadow:
        0 10px 25px
        rgba(16,43,36,.07);
}


/* ================================================================
   POSTER
   ================================================================ */

.saadiq-page
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
        var(--sa-shadow-lg) !important;

    transform:
        rotate(1deg);

    transition:
        .3s ease;
}


.saadiq-page
.c1-visual:hover {

    transform:
        rotate(0)
        translateY(-5px);
}


.saadiq-page
.c1-visual a {

    display:
        block;

    overflow:
        hidden;

    border-radius:
        21px;
}


.saadiq-page
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


.saadiq-page
.c1-visual:hover img {

    transform:
        scale(1.025);
}


.saadiq-page
.c1-visual figcaption {

    padding:
        14px 8px 5px;

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

.saadiq-page
.c1-story {

    background:
        radial-gradient(
            circle at 8% 8%,
            rgba(201,157,69,.09),
            transparent 25%
        ),
        #f9f7f0 !important;
}


.saadiq-page
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


.saadiq-page
.c1-story-copy {

    max-width:
        790px;
}


.saadiq-page
.c1-story-copy h2 {

    margin:
        15px 0 22px;

    color:
        var(--sa-green-dark) !important;

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


.saadiq-page
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


.saadiq-page
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

.saadiq-page
.c1-aside {

    position:
        sticky;

    top:
        120px;
}


.saadiq-page
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
        var(--sa-shadow) !important;
}


.saadiq-page
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


.saadiq-page
.c1-lessons
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.saadiq-page
.c1-lessons h3 {

    margin:
        14px 0 25px;

    color:
        #ffffff !important;

    font-size:
        27px !important;

    line-height:
        1.18;
}


.saadiq-page
.c1-points {

    display:
        grid;

    gap:
        10px;
}


.saadiq-page
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


.saadiq-page
.c1-points i {

    color:
        #e6c878;
}


/* ================================================================
   JUSTICE / UPSTANDER SECTION
   ================================================================ */

.saadiq-page
.sa-justice-section {

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


.saadiq-page
.sa-justice-section::after {

    content: "";

    position:
        absolute;

    width:
        520px;

    height:
        520px;

    right:
        -220px;

    bottom:
        -270px;

    border:
        1px solid
        rgba(239,219,162,.12);

    border-radius:
        50%;
}


.saadiq-page
.sa-justice-grid {

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


.saadiq-page
.sa-justice-copy
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.saadiq-page
.sa-justice-copy h2 {

    margin:
        14px 0 18px;

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


.saadiq-page
.sa-justice-copy p {

    color:
        rgba(255,255,255,.73) !important;

    font-size:
        16px;

    line-height:
        1.85;
}


.saadiq-page
.sa-justice-cards {

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


.saadiq-page
.sa-justice-card {

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


.saadiq-page
.sa-justice-card i {

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


.saadiq-page
.sa-justice-card h3 {

    margin:
        0 0 8px;

    color:
        #ffffff !important;

    font-size:
        21px;

    font-weight:
        700;
}


.saadiq-page
.sa-justice-card p {

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
   COMMON HEADING
   ================================================================ */

.saadiq-page
.sa-section-heading {

    max-width:
        760px;

    margin-bottom:
        42px;
}


.saadiq-page
.sa-section-heading h2 {

    margin:
        13px 0;

    color:
        var(--sa-green-dark);

    font-size:
        clamp(
            38px,
            4vw,
            52px
        );

    line-height:
        1.08;
}


.saadiq-page
.sa-section-heading p {

    color:
        #64716c;

    font-size:
        16px;

    line-height:
        1.8;
}


/* ================================================================
   RESOURCE
   ================================================================ */

.saadiq-page
.sa-resource-section {

    background:
        #fbfaf6 !important;
}


.saadiq-page
.sa-resource-card {

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
        var(--sa-border) !important;

    border-radius:
        30px !important;

    background:
        #ffffff !important;

    box-shadow:
        var(--sa-shadow) !important;
}


.saadiq-page
.sa-resource-preview {

    min-height:
        540px;

    background:
        #e9ece6;
}


.saadiq-page
.sa-resource-preview iframe {

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


.saadiq-page
.sa-resource-copy {

    display:
        flex;

    flex-direction:
        column;

    justify-content:
        center;

    padding:
        44px 38px;
}


.saadiq-page
.sa-resource-copy h3 {

    margin:
        13px 0 15px;

    color:
        var(--sa-green-dark);

    font-size:
        clamp(
            28px,
            2.5vw,
            35px
        );

    line-height:
        1.13;
}


.saadiq-page
.sa-resource-copy p {

    margin:
        0 0 24px;

    color:
        #5f6b67;

    font-size:
        16px;

    line-height:
        1.8;
}


.saadiq-page
.sa-resource-meta {

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


.saadiq-page
.sa-resource-meta span {

    display:
        flex;

    align-items:
        center;

    gap:
        11px;
}


.saadiq-page
.sa-resource-meta i {

    width:
        18px;

    color:
        #b68d3d;

    text-align:
        center;
}


.saadiq-page
.sa-resource-copy
.ac-btn {

    width:
        fit-content;
}


/* ================================================================
   GALLERY
   ================================================================ */

.saadiq-page
.sa-gallery-section {

    background:
        linear-gradient(
            180deg,
            #e8eee6,
            #f3f0e7
        ) !important;
}


.saadiq-page
.sa-gallery-grid {

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


.saadiq-page
.sa-gallery-item {

    margin:
        0;

    padding:
        6px;

    overflow:
        hidden;

    border:
        1px solid
        var(--sa-border);

    border-radius:
        23px;

    background:
        #ffffff;

    box-shadow:
        var(--sa-shadow);

    transition:
        transform .3s ease,
        box-shadow .3s ease;
}


.saadiq-page
.sa-gallery-item:hover {

    transform:
        translateY(-5px);

    box-shadow:
        0 22px 55px
        rgba(20,52,43,.13);
}


.saadiq-page
.sa-gallery-item a {

    display:
        block;

    aspect-ratio:
        4 / 3;

    overflow:
        hidden;

    border-radius:
        17px;
}


.saadiq-page
.sa-gallery-item img {

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


.saadiq-page
.sa-gallery-item:hover img {

    transform:
        scale(1.045);
}


/* ================================================================
   CYCLE NAVIGATION
   ================================================================ */

.saadiq-page
.c1-cycle-nav {

    background:
        #e7ece4 !important;
}


.saadiq-page
.c1-cycle-nav
.ac-heading {

    margin-bottom:
        30px;
}


.saadiq-page
.c1-cycle-nav h2 {

    margin:
        12px 0;

    color:
        var(--sa-green-dark);

    font-size:
        clamp(
            34px,
            4vw,
            50px
        );
}


.saadiq-page
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


.saadiq-page
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
        var(--sa-border);

    border-radius:
        20px;

    background:
        rgba(255,255,255,.82);

    color:
        var(--sa-green-dark);

    text-decoration:
        none;

    box-shadow:
        0 10px 30px
        rgba(20,52,43,.05);

    transition:
        .25s ease;
}


.saadiq-page
.sc-chapter-links > a:hover {

    transform:
        translateY(-4px);

    background:
        #ffffff;

    box-shadow:
        var(--sa-shadow);
}


.saadiq-page
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


.saadiq-page
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

    .saadiq-page
    .c1-hero-grid {

        grid-template-columns:
            1fr 330px;
    }


    .saadiq-page
    .c1-story-grid {

        grid-template-columns:
            1fr 290px;
    }


    .saadiq-page
    .sa-gallery-grid {

        grid-template-columns:
            repeat(
                2,
                minmax(0,1fr)
            );
    }


    .saadiq-page
    .sa-resource-card {

        grid-template-columns:
            1fr;
    }


    .saadiq-page
    .sa-resource-preview,
    .saadiq-page
    .sa-resource-preview iframe {

        min-height:
            480px;
    }

}


@media (
    max-width: 850px
) {

    .saadiq-page
    .c1-hero {

        min-height:
            auto;

        padding-bottom:
            65px !important;
    }


    .saadiq-page
    .c1-hero-grid {

        grid-template-columns:
            1fr;
    }


    .saadiq-page
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


    .saadiq-page
    .c1-story-grid {

        grid-template-columns:
            1fr;
    }


    .saadiq-page
    .c1-aside {

        position:
            static;
    }


    .saadiq-page
    .sa-justice-grid {

        grid-template-columns:
            1fr;

        gap:
            38px;
    }

}


@media (
    max-width: 650px
) {

    .saadiq-page
    .c1-hero {

        border-radius:
            0 0 28px 28px;
    }


    .saadiq-page
    .c1-hero-copy {

        padding:
            30px 23px !important;

        border-radius:
            25px !important;
    }


    .saadiq-page
    .c1-hero-copy h1 {

        font-size:
            clamp(
                42px,
                12vw,
                60px
            ) !important;
    }


    .saadiq-page
    .c1-meta {

        flex-direction:
            column;

        align-items:
            flex-start;
    }


    .saadiq-page
    .ac-actions {

        flex-direction:
            column;
    }


    .saadiq-page
    .ac-btn {

        width:
            100%;
    }


    .saadiq-page
    .sa-justice-cards,
    .saadiq-page
    .sa-gallery-grid {

        grid-template-columns:
            1fr;
    }


    .saadiq-page
    .sa-resource-preview,
    .saadiq-page
    .sa-resource-preview iframe {

        min-height:
            410px;
    }


    .saadiq-page
    .sa-resource-copy {

        padding:
            30px 23px;
    }


    .saadiq-page
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
        saadiq-page
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

                    As Saadiq Al Ameen

                </span>

            </nav>



            <div class="c1-hero-grid">


                <div class="c1-hero-copy">


                    <span class="ac-eyebrow">

                        CYCLE 1 · SESSION 07

                    </span>


                    <h1>

                        As Saadiq
                        Al Ameen

                    </h1>


                    <p class="c1-hero-lead">

                        Truthfulness,
                        trustworthiness
                        and standing up
                        against injustice.

                    </p>



                    <div class="c1-meta">


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            <b>
                                17 May 2025
                            </b>

                        </span>


                        <span>

                            <i class="fas fa-book-open"></i>

                            <b>
                                Cycle 1 · Session 07
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
                        data-fancybox="saadiq-poster"
                        href="{{ asset($posterImage) }}"
                    >

                        <img
                            src="{{ asset($posterImage) }}"
                            alt="As Saadiq Al Ameen event poster"
                        >

                    </a>


                    <figcaption>

                        As Saadiq Al Ameen ·
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

                        Standing up
                        for others and
                        responding to injustice.

                    </h2>


                    <p class="c1-lead">

                        Cycle 1 · Session 07

                    </p>


                    <p>

                        The seventh session
                        of Seerat Club took place
                        on 17 May 2025
                        at Shafqat Masjid.

                        The program began
                        by appreciating children
                        who had submitted
                        their Qur’anic recitations
                        and reflection journal
                        activities.

                    </p>


                    <p>

                        As encouragement,
                        children received
                        calligraphy pens,
                        bookmarks and candies.

                    </p>


                    <p>

                        A recap was then given
                        of the Seerah covered
                        in previous sessions,
                        focusing on how the
                        early experiences of
                        Prophet Muhammad ﷺ
                        helped shape his character.

                    </p>


                    <p>

                        His helpful nature,
                        integrity and conduct
                        earned him the titles
                        associated with being
                        truthful and trustworthy.

                    </p>


                    <p>

                        Children then learned
                        about the story of
                        a Yemeni merchant
                        who was denied his
                        rightful payment after
                        selling his goods.

                    </p>


                    <p>

                        Although this happened
                        in pre-Islamic Makkah,
                        a group of people stood
                        together against the injustice.

                        Prophet Muhammad ﷺ
                        was among those connected
                        with the alliance known as
                        <strong>Hilf ul Fudool</strong>.

                    </p>


                    <p>

                        The pact represented
                        standing with the oppressed
                        regardless of tribal identity,
                        and helped children understand
                        that fairness requires action.

                    </p>


                    <p>

                        To make the lesson
                        relevant to children,
                        a skit showed a
                        bullying situation.

                        Children discussed
                        what they should do
                        when they witness
                        someone being treated unfairly.

                    </p>


                    <p>

                        They were introduced
                        to the difference between
                        a <strong>bystander</strong>
                        and an
                        <strong>upstander</strong>,
                        encouraging them not
                        to silently ignore wrongdoing.

                    </p>


                    <p>

                        The session also discussed
                        a contemporary example
                        included in the original
                        program to explore
                        speaking against injustice.

                    </p>


                    <p>

                        The gathering ended
                        with refreshments
                        and a practical
                        calligraphy activity
                        supported by artists.

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

                                Truthfulness

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Trustworthiness

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Hilf ul Fudool

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Being an upstander

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Courage with fairness

                            </span>


                        </div>


                    </div>


                </aside>


            </div>


        </div>


    </section>



    {{-- =========================================================
        JUSTICE / CHARACTER SECTION
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section sa-justice-section"
    >


        <div class="ac-container">


            <div class="sa-justice-grid">


                <div class="sa-justice-copy">


                    <span class="ac-eyebrow">

                        CHARACTER IN ACTION

                    </span>


                    <h2>

                        Truthfulness means
                        more than speaking
                        the truth.

                    </h2>


                    <p>

                        Children explored how
                        honesty, trustworthiness
                        and justice become meaningful
                        when they shape the way
                        we respond to other people,
                        especially when someone
                        needs support.

                    </p>


                </div>



                <div class="sa-justice-cards">


                    <article class="sa-justice-card">


                        <i class="fas fa-check"></i>


                        <h3>
                            Truthfulness
                        </h3>


                        <p>

                            Developing honesty
                            in words,
                            choices and actions.

                        </p>


                    </article>



                    <article class="sa-justice-card">


                        <i class="fas fa-shield-alt"></i>


                        <h3>
                            Trust
                        </h3>


                        <p>

                            Becoming someone
                            others can depend
                            upon and trust.

                        </p>


                    </article>



                    <article class="sa-justice-card">


                        <i class="fas fa-balance-scale"></i>


                        <h3>
                            Justice
                        </h3>


                        <p>

                            Understanding the
                            importance of fairness
                            and helping the oppressed.

                        </p>


                    </article>



                    <article class="sa-justice-card">


                        <i class="fas fa-bullhorn"></i>


                        <h3>
                            Upstander
                        </h3>


                        <p>

                            Learning to respond
                            positively instead of
                            silently watching wrongdoing.

                        </p>


                    </article>


                </div>


            </div>


        </div>


    </section>



    {{-- =========================================================
        PRESENTATION & MATERIAL
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section sa-resource-section"
    >


        <div class="ac-container">


            <div class="sa-section-heading">


                <span class="ac-eyebrow">

                    PRESENTATION & MATERIALS

                </span>


                <h2>

                    Continue learning
                    beyond the session.

                </h2>


                <p>

                    Explore the original
                    As Saadiq Al Ameen
                    session presentation.

                </p>


            </div>



            <article class="ac-card sa-resource-card">


                <div class="sa-resource-preview">


                    <iframe
                        src="https://drive.google.com/file/d/1kvQFnYEMNBtmhWp3_7zvRhsq6ydMacBA/preview"
                        title="As Saadiq Al Ameen PDF"
                        loading="lazy"
                        allow="autoplay"
                    ></iframe>


                </div>



                <div class="sa-resource-copy">


                    <span class="ac-eyebrow">

                        PRESENTATION SLIDE PACK

                    </span>


                    <h3>

                        As Saadiq Al Ameen

                    </h3>


                    <p>

                        Revisit the original
                        presentation used during
                        Cycle 1 · Session 07.

                    </p>



                    <div class="sa-resource-meta">


                        <span>

                            <i class="far fa-file-pdf"></i>

                            As Saadiq Al Ameen PDF

                        </span>


                        <span>

                            <i class="fas fa-book-open"></i>

                            Cycle 1 · Session 07

                        </span>


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            17 May 2025

                        </span>


                    </div>



                    <a
                        class="ac-btn ac-btn-secondary"
                        href="https://drive.google.com/file/d/1kvQFnYEMNBtmhWp3_7zvRhsq6ydMacBA/view"
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
            class="ac-section sc-svg-section sa-gallery-section"
            id="event-gallery"
        >


            <div class="ac-container">


                <div class="sa-section-heading">


                    <span class="ac-eyebrow">

                        FROM THE ORIGINAL SESSION

                    </span>


                    <h2>

                        Moments from
                        As Saadiq Al Ameen.

                    </h2>


                    <p>

                        Storytelling,
                        group discussions,
                        reflection and
                        calligraphy moments
                        from the session.

                    </p>


                </div>



                <div class="sa-gallery-grid">


                    @foreach(
                        $galleryImages
                        as $index => $image
                    )


                        <figure class="sa-gallery-item">


                            <a
                                data-fancybox="saadiq-gallery"
                                href="{{ asset($image) }}"
                            >

                                <img
                                    src="{{ asset($image) }}"
                                    alt="As Saadiq Al Ameen event photograph {{ $index + 1 }}"
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
                        'past-events.cycle-1.the-prophet-in-making'
                    ) }}"
                >


                    <small>

                        Previous chapter

                    </small>


                    <strong>

                        The Prophet in Making

                        <span aria-hidden="true">

                            ↗

                        </span>

                    </strong>


                </a>



                <a
                    href="{{ route(
                        'past-events.cycle-1.at-taahirah'
                    ) }}"
                >


                    <small>

                        Next chapter

                    </small>


                    <strong>

                        At Taahirah

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
