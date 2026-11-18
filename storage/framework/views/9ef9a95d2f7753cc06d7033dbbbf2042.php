<?php $__env->startSection('title', 'The Pursuit of Submission · Seerat Club'); ?>

<?php $__env->startSection("Content"); ?>


<link
    rel="stylesheet"
    href="<?php echo e(asset('assets/css/past-events-premium.css')); ?>"
>


<?php

    /*
    |--------------------------------------------------------------------------
    | EVENT IMAGE FOLDER
    |--------------------------------------------------------------------------
    */

    $eventImageFolder =
        'assets/images/the-pursuit-of-submission';

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
    | 3. hero.png
    | 4. g1.jpg
    | 5. poster.png
    |
    */

    $heroImage =
        $eventImageFolder . '/poster.png';


    $heroCandidates = [

        'official-hero.jpg',

        'hero.jpg',

        'hero.png',

        'g1.jpg',

        'poster.png',

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
        '/poster.png';


    /*
    |--------------------------------------------------------------------------
    | GALLERY
    |--------------------------------------------------------------------------
    |
    | Automatically loads:
    |
    | g1.jpg
    | g2.jpg
    | g3.png
    | etc.
    |
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


            if (
                preg_match(
                    '/^g\d+\.(jpg|jpeg|png|webp)$/i',
                    $fileName
                )
            ) {

                $galleryImages[] =
                    $eventImageFolder .
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

?>



<style>

/* ================================================================
   THE PURSUIT OF SUBMISSION
   PREMIUM EVENT PAGE
   ================================================================ */

.pursuit-page {

    --ps-green:
        #173b31;

    --ps-green-dark:
        #102b24;

    --ps-green-soft:
        #e7ede8;

    --ps-gold:
        #c99d45;

    --ps-gold-light:
        #efdca6;

    --ps-cream:
        #f8f5ed;

    --ps-cream-soft:
        #fbfaf6;

    --ps-text:
        #172923;

    --ps-muted:
        #5c6964;

    --ps-border:
        rgba(23,59,49,.10);

    --ps-shadow:
        0 18px 55px
        rgba(20,52,43,.10);

    --ps-shadow-lg:
        0 30px 90px
        rgba(13,44,36,.17);

    background:
        #ffffff;

    color:
        var(--ps-text);
}


/* ================================================================
   TYPOGRAPHY
   ================================================================ */

.pursuit-page h1,
.pursuit-page h2,
.pursuit-page h3,
.pursuit-page h4,
.pursuit-page h5,
.pursuit-page h6,
.pursuit-page .ac-btn,
.pursuit-page .ac-eyebrow,
.pursuit-page .ps-label,
.pursuit-page .sc-chapter-links strong {

    font-family:
        "Baloo 2",
        "SC Arabic",
        sans-serif !important;

}


.pursuit-page p,
.pursuit-page li,
.pursuit-page .c1-meta,
.pursuit-page .ac-breadcrumb,
.pursuit-page .ps-resource-meta,
.pursuit-page .sc-chapter-links small {

    font-family:
        "DM Sans",
        "SC Arabic",
        sans-serif !important;

}


/* ================================================================
   HERO
   ================================================================ */

.pursuit-page
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
   IMPORTANT:
   No .92 pale overlay.
   Hero image remains clearly visible.
*/

.pursuit-page
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


.pursuit-page
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


.pursuit-page
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

.pursuit-page
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


.pursuit-page
.ac-breadcrumb a {

    color:
        #ffffff !important;

    text-decoration:
        none;
}


.pursuit-page
.ac-breadcrumb a:hover {

    color:
        var(--ps-gold-light) !important;
}


/* ================================================================
   HERO GRID
   ================================================================ */

.pursuit-page
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
   HERO CONTENT PANEL
   ================================================================ */

.pursuit-page
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
        var(--ps-shadow-lg) !important;

    backdrop-filter:
        none !important;

    -webkit-backdrop-filter:
        none !important;
}


.pursuit-page
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
            var(--ps-gold),
            #efd593
        );
}


/* ================================================================
   HERO EYEBROW
   ================================================================ */

.pursuit-page
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

.pursuit-page
.c1-hero-copy h1 {

    max-width:
        680px;

    margin:
        23px 0
        22px !important;

    color:
        var(--ps-green-dark) !important;

    font-size:
        clamp(
            48px,
            5.5vw,
            76px
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

.pursuit-page
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
   META PILLS
   ================================================================ */

.pursuit-page
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


.pursuit-page
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


.pursuit-page
.c1-meta i {

    color:
        #aa8438;
}


/* ================================================================
   BUTTONS
   ================================================================ */

.pursuit-page
.ac-actions {

    display:
        flex;

    flex-wrap:
        wrap;

    gap:
        13px;
}


.pursuit-page
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
        var(--ps-gold) !important;

    border-radius:
        999px !important;

    background:
        var(--ps-gold) !important;

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


.pursuit-page
.ac-btn:hover {

    transform:
        translateY(-2px);

    background:
        #d5aa51 !important;
}


.pursuit-page
.ac-btn-secondary {

    border-color:
        rgba(23,59,49,.13) !important;

    background:
        #ffffff !important;

    color:
        var(--ps-green-dark) !important;

    box-shadow:
        0 10px 25px
        rgba(16,43,36,.07);
}


/* ================================================================
   HERO POSTER
   ================================================================ */

.pursuit-page
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
        var(--ps-shadow-lg) !important;

    transform:
        rotate(1deg);

    transition:
        .3s ease;
}


.pursuit-page
.c1-visual:hover {

    transform:
        rotate(0)
        translateY(-5px);
}


.pursuit-page
.c1-visual a {

    display:
        block;

    overflow:
        hidden;

    border-radius:
        21px;
}


.pursuit-page
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


.pursuit-page
.c1-visual:hover img {

    transform:
        scale(1.025);
}


.pursuit-page
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

.pursuit-page
.c1-story {

    background:
        radial-gradient(
            circle at 8% 8%,
            rgba(201,157,69,.09),
            transparent 25%
        ),
        #f9f7f0 !important;
}


.pursuit-page
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


.pursuit-page
.c1-story-copy {

    max-width:
        770px;
}


.pursuit-page
.c1-story-copy h2 {

    margin:
        15px 0
        22px;

    color:
        var(--ps-green-dark) !important;

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


.pursuit-page
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


.pursuit-page
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

.pursuit-page
.c1-aside {

    position:
        sticky;

    top:
        120px;
}


.pursuit-page
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
        var(--ps-shadow) !important;
}


.pursuit-page
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


.pursuit-page
.c1-lessons
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.pursuit-page
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


.pursuit-page
.c1-points {

    display:
        grid;

    gap:
        10px;
}


.pursuit-page
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


.pursuit-page
.c1-points i {

    color:
        #e6c878;
}


/* ================================================================
   FEATURE STRIP
   ================================================================ */

.pursuit-page
.ps-feature-section {

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


.pursuit-page
.ps-feature-grid {

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


.pursuit-page
.ps-feature-copy
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.pursuit-page
.ps-feature-copy h2 {

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


.pursuit-page
.ps-feature-copy p {

    color:
        rgba(255,255,255,.73) !important;

    font-size:
        16px;

    line-height:
        1.85;
}


.pursuit-page
.ps-feature-cards {

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


.pursuit-page
.ps-feature-card {

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


.pursuit-page
.ps-feature-card i {

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


.pursuit-page
.ps-feature-card h3 {

    margin:
        0 0
        8px;

    color:
        #ffffff !important;

    font-size:
        21px;
}


.pursuit-page
.ps-feature-card p {

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
   SECTION HEADING
   ================================================================ */

.pursuit-page
.ps-section-heading {

    max-width:
        760px;

    margin-bottom:
        42px;
}


.pursuit-page
.ps-section-heading h2 {

    margin:
        13px 0;

    color:
        var(--ps-green-dark);

    font-size:
        clamp(
            38px,
            4vw,
            52px
        );

    line-height:
        1.08;
}


.pursuit-page
.ps-section-heading p {

    color:
        #64716c;

    font-size:
        16px;
}


/* ================================================================
   VIDEO SECTION
   ================================================================ */

.pursuit-page
.ps-video-section {

    background:
        #edf1ec !important;
}


.pursuit-page
.ps-video-card {

    display:
        grid;

    grid-template-columns:
        minmax(0,1.45fr)
        minmax(300px,.55fr);

    overflow:
        hidden;

    border:
        1px solid
        var(--ps-border);

    border-radius:
        30px;

    background:
        #ffffff;

    box-shadow:
        var(--ps-shadow);
}


.pursuit-page
.ps-video-frame {

    position:
        relative;

    min-height:
        460px;

    overflow:
        hidden;

    background:
        #111b18;
}


.pursuit-page
.ps-video-frame iframe {

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


.pursuit-page
.ps-video-copy {

    display:
        flex;

    flex-direction:
        column;

    justify-content:
        center;

    padding:
        42px 35px;
}


.pursuit-page
.ps-video-copy h3 {

    margin:
        12px 0
        14px;

    color:
        var(--ps-green-dark);

    font-size:
        30px;
}


.pursuit-page
.ps-video-copy p {

    margin:
        0 0
        25px;

    color:
        #5f6c67;

    line-height:
        1.8;
}


/* ================================================================
   MATERIALS
   ================================================================ */

.pursuit-page
.ps-material-section {

    background:
        #fbfaf6 !important;
}


.pursuit-page
.ps-resource-stack {

    display:
        grid;

    gap:
        34px;
}


.pursuit-page
.ps-resource-card {

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
        var(--ps-border) !important;

    border-radius:
        30px !important;

    background:
        #ffffff !important;

    box-shadow:
        var(--ps-shadow) !important;
}


.pursuit-page
.ps-resource-preview {

    min-height:
        520px;

    background:
        #e9ece6;
}


.pursuit-page
.ps-resource-preview iframe {

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


.pursuit-page
.ps-resource-copy {

    display:
        flex;

    flex-direction:
        column;

    justify-content:
        center;

    padding:
        44px 38px;
}


.pursuit-page
.ps-resource-copy h3 {

    margin:
        13px 0
        15px;

    color:
        var(--ps-green-dark);

    font-size:
        clamp(
            28px,
            2.5vw,
            35px
        );

    line-height:
        1.13;
}


.pursuit-page
.ps-resource-copy p {

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


.pursuit-page
.ps-resource-meta {

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


.pursuit-page
.ps-resource-meta span {

    display:
        flex;

    align-items:
        center;

    gap:
        11px;
}


.pursuit-page
.ps-resource-meta i {

    width:
        18px;

    color:
        #b68d3d;

    text-align:
        center;
}


.pursuit-page
.ps-resource-copy
.ac-btn {

    width:
        fit-content;
}


/* ================================================================
   GALLERY
   ================================================================ */

.pursuit-page
.ps-gallery-section {

    background:
        linear-gradient(
            180deg,
            #e8eee6,
            #f3f0e7
        ) !important;
}


.pursuit-page
.ps-gallery-grid {

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


.pursuit-page
.ps-gallery-item {

    margin:
        0;

    padding:
        6px;

    overflow:
        hidden;

    border:
        1px solid
        var(--ps-border);

    border-radius:
        23px;

    background:
        #ffffff;

    box-shadow:
        var(--ps-shadow);

    transition:
        .3s ease;
}


.pursuit-page
.ps-gallery-item:hover {

    transform:
        translateY(-5px);

    box-shadow:
        0 22px 55px
        rgba(20,52,43,.13);
}


.pursuit-page
.ps-gallery-item a {

    display:
        block;

    aspect-ratio:
        4 / 3;

    overflow:
        hidden;

    border-radius:
        17px;
}


.pursuit-page
.ps-gallery-item img {

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


.pursuit-page
.ps-gallery-item:hover img {

    transform:
        scale(1.045);
}


/* ================================================================
   CYCLE NAVIGATION
   ================================================================ */

.pursuit-page
.c1-cycle-nav {

    background:
        #e7ece4 !important;
}


.pursuit-page
.c1-cycle-nav
.ac-heading {

    margin-bottom:
        30px;
}


.pursuit-page
.c1-cycle-nav h2 {

    margin:
        12px 0;

    color:
        var(--ps-green-dark);

    font-size:
        clamp(
            34px,
            4vw,
            50px
        );
}


.pursuit-page
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


.pursuit-page
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
        var(--ps-border);

    border-radius:
        20px;

    background:
        rgba(255,255,255,.82);

    color:
        var(--ps-green-dark);

    text-decoration:
        none;

    box-shadow:
        0 10px 30px
        rgba(20,52,43,.05);

    transition:
        .25s ease;
}


.pursuit-page
.sc-chapter-links > a:hover {

    transform:
        translateY(-4px);

    background:
        #ffffff;

    box-shadow:
        var(--ps-shadow);
}


.pursuit-page
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


.pursuit-page
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

    .pursuit-page
    .c1-hero-grid {

        grid-template-columns:
            1fr
            330px;
    }


    .pursuit-page
    .c1-story-grid {

        grid-template-columns:
            1fr
            290px;
    }


    .pursuit-page
    .ps-gallery-grid {

        grid-template-columns:
            repeat(
                2,
                minmax(0,1fr)
            );
    }


    .pursuit-page
    .ps-resource-card {

        grid-template-columns:
            1fr;
    }


    .pursuit-page
    .ps-resource-preview,
    .pursuit-page
    .ps-resource-preview iframe {

        min-height:
            480px;
    }

}


@media (
    max-width: 850px
) {

    .pursuit-page
    .c1-hero {

        min-height:
            auto;

        padding-bottom:
            65px !important;
    }


    .pursuit-page
    .c1-hero-grid {

        grid-template-columns:
            1fr;
    }


    .pursuit-page
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


    .pursuit-page
    .c1-story-grid {

        grid-template-columns:
            1fr;
    }


    .pursuit-page
    .c1-aside {

        position:
            static;
    }


    .pursuit-page
    .ps-feature-grid {

        grid-template-columns:
            1fr;

        gap:
            38px;
    }


    .pursuit-page
    .ps-video-card {

        grid-template-columns:
            1fr;
    }


    .pursuit-page
    .ps-video-frame {

        min-height:
            auto;

        aspect-ratio:
            16 / 9;
    }

}


@media (
    max-width: 650px
) {

    .pursuit-page
    .c1-hero {

        border-radius:
            0 0
            28px 28px;
    }


    .pursuit-page
    .c1-hero-copy {

        padding:
            30px 23px !important;

        border-radius:
            25px !important;
    }


    .pursuit-page
    .c1-hero-copy h1 {

        font-size:
            clamp(
                42px,
                12vw,
                60px
            ) !important;
    }


    .pursuit-page
    .c1-meta {

        flex-direction:
            column;

        align-items:
            flex-start;
    }


    .pursuit-page
    .ac-actions {

        flex-direction:
            column;
    }


    .pursuit-page
    .ac-btn {

        width:
            100%;
    }


    .pursuit-page
    .ps-feature-cards,
    .pursuit-page
    .ps-gallery-grid {

        grid-template-columns:
            1fr;
    }


    .pursuit-page
    .ps-resource-preview,
    .pursuit-page
    .ps-resource-preview iframe {

        min-height:
            410px;
    }


    .pursuit-page
    .ps-resource-copy {

        padding:
            30px 23px;
    }


    .pursuit-page
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
        pursuit-page
    "
>


    

    <section
        class="ac-masthead c1-hero"
        style="
            background-image:
                url('<?php echo e(asset($heroImage)); ?>');
        "
    >


        <div class="ac-container">


            <nav
                aria-label="Breadcrumb"
                class="ac-breadcrumb"
            >

                <a href="<?php echo e(route('Home.welcome')); ?>">
                    Home
                </a>

                <span>/</span>

                <a href="<?php echo e(route('past-events.index')); ?>">
                    Past Events
                </a>

                <span>/</span>

                <a href="<?php echo e(route('past-events.cycle-1.index')); ?>">
                    Cycle 1
                </a>

                <span>/</span>

                <span aria-current="page">

                    The Pursuit of Submission

                </span>

            </nav>



            <div class="c1-hero-grid">


                <div class="c1-hero-copy">


                    <span class="ac-eyebrow">

                        CYCLE 1 · SESSION 03

                    </span>


                    <h1>

                        The Pursuit
                        of Submission

                    </h1>


                    <p class="c1-hero-lead">

                        Qurbani, the Kaaba and
                        complete submission to Allah.

                    </p>



                    <div class="c1-meta">


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            <b>
                                21 December 2024
                            </b>

                        </span>


                        <span>

                            <i class="fas fa-book-open"></i>

                            <b>
                                Cycle 1 · Session 03
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
                        data-fancybox="pursuit-poster"
                        href="<?php echo e(asset($posterImage)); ?>"
                    >

                        <img
                            src="<?php echo e(asset($posterImage)); ?>"
                            alt="The Pursuit of Submission event flyer"
                        >

                    </a>


                    <figcaption>

                        The Pursuit of Submission ·
                        Seerat Club Cycle 1

                    </figcaption>


                </figure>


            </div>


        </div>


    </section>



    

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

                        Submission to Allah,
                        practical learning and
                        reviving the Sunnah.

                    </h2>


                    <p class="c1-lead">

                        Cycle 1 · Session 03

                    </p>


                    <p>

                        The session explored the life
                        of Hazrat Ibrahim (AS),
                        focusing on his complete
                        submission to Allah.

                        Children reflected on his
                        obedience when leaving his
                        family in Makkah, his willingness
                        to sacrifice his son for Allah,
                        and his role in building the Kaaba.

                    </p>


                    <p>

                        The central lesson was that
                        sincere submission brings
                        contentment and true fulfilment.

                    </p>


                    <p>

                        The learning then moved into
                        a practical leather crafting
                        workshop by
                        <strong>Leather Dudes</strong>.

                        Children discussed helping
                        with household work, learning
                        useful skills and the example
                        of Prophets who worked
                        with their hands.

                    </p>


                    <p>

                        They were introduced to
                        different types of leather,
                        including goat, cow and
                        sheep leather, before creating
                        their own wallets and connecting
                        practical creativity with
                        the Sunnah.

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

                                Submission to Allah

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Qurbani and sacrifice

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Building the Kaaba

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Practical skills and Sunnah

                            </span>


                        </div>


                    </div>


                </aside>


            </div>


        </div>


    </section>



    

    <section
        class="ac-section sc-svg-section ps-feature-section"
    >


        <div class="ac-container">


            <div class="ps-feature-grid">


                <div class="ps-feature-copy">


                    <span class="ac-eyebrow">

                        LEARNING THROUGH ACTION

                    </span>


                    <h2>

                        Submission became
                        something children
                        could experience.

                    </h2>


                    <p>

                        The session brought together
                        Seerah, reflection and
                        hands-on learning so that
                        children could connect
                        meaningful Islamic lessons
                        with everyday actions.

                    </p>


                </div>



                <div class="ps-feature-cards">


                    <article class="ps-feature-card">

                        <i class="fas fa-kaaba"></i>

                        <h3>
                            The Kaaba
                        </h3>

                        <p>
                            Learning about
                            Hazrat Ibrahim (AS)
                            and the building
                            of the Kaaba.
                        </p>

                    </article>


                    <article class="ps-feature-card">

                        <i class="fas fa-heart"></i>

                        <h3>
                            Submission
                        </h3>

                        <p>
                            Understanding obedience,
                            sacrifice and trust
                            in Allah.
                        </p>

                    </article>


                    <article class="ps-feature-card">

                        <i class="fas fa-hands"></i>

                        <h3>
                            Working by Hand
                        </h3>

                        <p>
                            Connecting useful
                            practical skills
                            with the Sunnah.
                        </p>

                    </article>


                    <article class="ps-feature-card">

                        <i class="fas fa-wallet"></i>

                        <h3>
                            Leather Craft
                        </h3>

                        <p>
                            Creating a personal
                            wallet through
                            hands-on learning.
                        </p>

                    </article>


                </div>


            </div>


        </div>


    </section>



    

    <section
        class="ac-section sc-svg-section ps-video-section"
    >


        <div class="ac-container">


            <div class="ps-section-heading">


                <span class="ac-eyebrow">

                    SESSION VIDEO

                </span>


                <h2>

                    Watch The Pursuit
                    of Submission.

                </h2>


                <p>

                    Revisit the official
                    Seerat Club session video.

                </p>


            </div>



            <article class="ps-video-card">


                <div class="ps-video-frame">


                    <iframe
                        src="https://www.youtube.com/embed/ENHqU7XF0A0?rel=0"
                        title="The Pursuit of Submission · Seerat Club"
                        loading="lazy"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen
                    ></iframe>


                </div>



                <div class="ps-video-copy">


                    <span class="ac-eyebrow">

                        OFFICIAL VIDEO

                    </span>


                    <h3>

                        The Pursuit
                        of Submission

                    </h3>


                    <p>

                        Watch highlights and
                        learning moments from
                        Cycle 1 · Session 03.

                    </p>


                    <a
                        class="ac-btn ac-btn-secondary"
                        href="https://www.youtube.com/watch?v=ENHqU7XF0A0"
                        target="_blank"
                        rel="noopener noreferrer"
                    >

                        <i class="fab fa-youtube"></i>

                        Watch on YouTube

                    </a>


                </div>


            </article>


        </div>


    </section>



    

    <section
        class="ac-section sc-svg-section ps-material-section"
    >


        <div class="ac-container">


            <div class="ps-section-heading">


                <span class="ac-eyebrow">

                    PRESENTATION & MATERIALS

                </span>


                <h2>

                    Continue learning
                    beyond the session.

                </h2>


                <p>

                    Explore the original
                    session resources directly
                    on the page.

                </p>


            </div>



            <div class="ps-resource-stack">


                

                <article class="ac-card ps-resource-card">


                    <div class="ps-resource-preview">


                        <iframe
                            src="https://drive.google.com/file/d/1kCkZH1fqlG6GGpoFPQvsY6a1EuWalIGA/preview"
                            title="The Pursuit of Submission Session Presentation"
                            loading="lazy"
                            allow="autoplay"
                        ></iframe>


                    </div>



                    <div class="ps-resource-copy">


                        <span class="ac-eyebrow">

                            RESOURCE 01

                        </span>


                        <h3>

                            Session Presentation

                        </h3>


                        <p>

                            Explore the original
                            presentation used during
                            The Pursuit of Submission.

                        </p>



                        <div class="ps-resource-meta">


                            <span>

                                <i class="far fa-file-alt"></i>

                                Original Session Resource

                            </span>


                            <span>

                                <i class="fas fa-book-open"></i>

                                Cycle 1 · Session 03

                            </span>


                            <span>

                                <i class="far fa-calendar-alt"></i>

                                21 December 2024

                            </span>


                        </div>



                        <a
                            class="ac-btn ac-btn-secondary"
                            href="https://drive.google.com/file/d/1kCkZH1fqlG6GGpoFPQvsY6a1EuWalIGA/view"
                            target="_blank"
                            rel="noopener noreferrer"
                        >

                            Open full material

                            <i class="fas fa-arrow-right"></i>

                        </a>


                    </div>


                </article>



                

                <article class="ac-card ps-resource-card">


                    <div class="ps-resource-preview">


                        <iframe
                            src="https://drive.google.com/file/d/1rmCDJCohPPcfO94OCk7wzzeEKM77Xu6d/preview"
                            title="The Pursuit of Submission Activity Material"
                            loading="lazy"
                            allow="autoplay"
                        ></iframe>


                    </div>



                    <div class="ps-resource-copy">


                        <span class="ac-eyebrow">

                            RESOURCE 02

                        </span>


                        <h3>

                            Activity Material

                        </h3>


                        <p>

                            Continue exploring
                            the practical learning
                            connected with this
                            Seerat Club session.

                        </p>



                        <div class="ps-resource-meta">


                            <span>

                                <i class="far fa-file-alt"></i>

                                Activity Resource

                            </span>


                            <span>

                                <i class="fas fa-book-open"></i>

                                Cycle 1 · Session 03

                            </span>


                        </div>



                        <a
                            class="ac-btn ac-btn-secondary"
                            href="https://drive.google.com/file/d/1rmCDJCohPPcfO94OCk7wzzeEKM77Xu6d/view"
                            target="_blank"
                            rel="noopener noreferrer"
                        >

                            Open full material

                            <i class="fas fa-arrow-right"></i>

                        </a>


                    </div>


                </article>



                

                <article class="ac-card ps-resource-card">


                    <div class="ps-resource-preview">


                        <iframe
                            src="https://drive.google.com/file/d/1D2638JuSVvSYOPl_Sgo2gKLbQNOOuspo/preview"
                            title="The Pursuit of Submission Additional Material"
                            loading="lazy"
                            allow="autoplay"
                        ></iframe>


                    </div>



                    <div class="ps-resource-copy">


                        <span class="ac-eyebrow">

                            RESOURCE 03

                        </span>


                        <h3>

                            Additional Material

                        </h3>


                        <p>

                            Explore the additional
                            learning resource connected
                            with this session.

                        </p>



                        <div class="ps-resource-meta">


                            <span>

                                <i class="far fa-file-alt"></i>

                                Additional Resource

                            </span>


                            <span>

                                <i class="fas fa-book-open"></i>

                                Cycle 1 · Session 03

                            </span>


                        </div>



                        <a
                            class="ac-btn ac-btn-secondary"
                            href="https://drive.google.com/file/d/1D2638JuSVvSYOPl_Sgo2gKLbQNOOuspo/view"
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



    

    <?php if(count($galleryImages)): ?>


        <section
            class="ac-section sc-svg-section ps-gallery-section"
            id="event-gallery"
        >


            <div class="ac-container">


                <div class="ps-section-heading">


                    <span class="ac-eyebrow">

                        EVENT PICTURES

                    </span>


                    <h2>

                        Moments from
                        The Pursuit of Submission.

                    </h2>


                    <p>

                        Group discussions, storytelling
                        and Reviving Sunnah through
                        leather crafting.

                    </p>


                </div>



                <div class="ps-gallery-grid">


                    <?php $__currentLoopData = $galleryImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                        <figure class="ps-gallery-item">


                            <a
                                data-fancybox="pursuit-gallery"
                                href="<?php echo e(asset($image)); ?>"
                            >

                                <img
                                    src="<?php echo e(asset($image)); ?>"
                                    alt="The Pursuit of Submission event photograph <?php echo e($index + 1); ?>"
                                    loading="lazy"
                                    decoding="async"
                                >

                            </a>


                        </figure>


                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>


            </div>


        </section>


    <?php endif; ?>



    

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
                    href="<?php echo e(route(
                        'past-events.cycle-1.the-friendly-fire'
                    )); ?>"
                >


                    <small>

                        Previous chapter

                    </small>


                    <strong>

                        The Friendly Fire

                        <span aria-hidden="true">

                            ↗

                        </span>

                    </strong>


                </a>



                <a
                    href="<?php echo e(route(
                        'past-events.cycle-1.the-year-of-the-elephant'
                    )); ?>"
                >


                    <small>

                        Next chapter

                    </small>


                    <strong>

                        The Year of the Elephant

                        <span aria-hidden="true">

                            ↗

                        </span>

                    </strong>


                </a>


            </nav>


        </div>


    </section>


</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("Layout.layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Seerat-Club\resources\views/past-events/cycle-1/the-pursuit-of-submission.blade.php ENDPATH**/ ?>