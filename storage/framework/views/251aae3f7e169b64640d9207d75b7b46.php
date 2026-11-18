<?php $__env->startSection('title', 'The Year of the Elephant · Seerat Club'); ?>

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
        'assets/images/the-year-of-the-elephant';

    $eventImagePath =
        public_path($eventImageFolder);


    /*
    |--------------------------------------------------------------------------
    | HERO IMAGE
    |--------------------------------------------------------------------------
    |
    | Automatic fallback order:
    |
    | 1. official-hero.jpg
    | 2. hero.jpg
    | 3. hero.png
    | 4. g1.jpg
    | 5. poster.jpg
    |
    */

    $heroImage =
        $eventImageFolder . '/poster.jpg';


    $heroCandidates = [

        'official-hero.jpg',

        'hero.jpg',

        'hero.png',

        'g1.jpg',

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
    | EVENT GALLERY
    |--------------------------------------------------------------------------
    |
    | Automatically loads:
    |
    | g1.jpg
    | g2.jpg
    | g3.png
    | g4.webp
    | ...
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
   THE YEAR OF THE ELEPHANT
   PREMIUM EVENT PAGE
   ================================================================ */

.year-elephant-page {

    --ye-green:
        #173b31;

    --ye-green-dark:
        #102b24;

    --ye-green-soft:
        #e7eee8;

    --ye-gold:
        #c99d45;

    --ye-gold-light:
        #efdca6;

    --ye-cream:
        #f8f5ed;

    --ye-cream-soft:
        #fbfaf6;

    --ye-text:
        #172923;

    --ye-muted:
        #5c6964;

    --ye-border:
        rgba(23,59,49,.10);

    --ye-shadow:
        0 18px 55px
        rgba(20,52,43,.10);

    --ye-shadow-lg:
        0 30px 90px
        rgba(13,44,36,.17);

    background:
        #ffffff;

    color:
        var(--ye-text);
}


/* ================================================================
   TYPOGRAPHY
   ================================================================ */

.year-elephant-page h1,
.year-elephant-page h2,
.year-elephant-page h3,
.year-elephant-page h4,
.year-elephant-page h5,
.year-elephant-page h6,
.year-elephant-page .ac-btn,
.year-elephant-page .ac-eyebrow,
.year-elephant-page .ye-label,
.year-elephant-page .sc-chapter-links strong {

    font-family:
        "Baloo 2",
        "SC Arabic",
        sans-serif !important;

}


.year-elephant-page p,
.year-elephant-page li,
.year-elephant-page .c1-meta,
.year-elephant-page .ac-breadcrumb,
.year-elephant-page .ye-resource-meta,
.year-elephant-page .ye-video-meta,
.year-elephant-page .sc-chapter-links small {

    font-family:
        "DM Sans",
        "SC Arabic",
        sans-serif !important;

}


/* ================================================================
   HERO
   ================================================================ */

.year-elephant-page
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
   No pale .92 overlay.
   Hero background stays clearly visible.
*/

.year-elephant-page
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
            rgba(10,39,32,.05) 100%
        );
}


.year-elephant-page
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


.year-elephant-page
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

.year-elephant-page
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


.year-elephant-page
.ac-breadcrumb a {

    color:
        #ffffff !important;

    text-decoration:
        none;
}


.year-elephant-page
.ac-breadcrumb a:hover {

    color:
        var(--ye-gold-light) !important;
}


/* ================================================================
   HERO GRID
   ================================================================ */

.year-elephant-page
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
   HERO COPY PANEL
   ================================================================ */

.year-elephant-page
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
        var(--ye-shadow-lg) !important;

    backdrop-filter:
        none !important;

    -webkit-backdrop-filter:
        none !important;
}


.year-elephant-page
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
            var(--ye-gold),
            #efd593
        );
}


/* ================================================================
   HERO EYEBROW
   ================================================================ */

.year-elephant-page
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

.year-elephant-page
.c1-hero-copy h1 {

    max-width:
        680px;

    margin:
        23px 0
        22px !important;

    color:
        var(--ye-green-dark) !important;

    font-size:
        clamp(
            48px,
            5.4vw,
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

.year-elephant-page
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
   META
   ================================================================ */

.year-elephant-page
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


.year-elephant-page
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


.year-elephant-page
.c1-meta i {

    color:
        #aa8438;
}


/* ================================================================
   BUTTONS
   ================================================================ */

.year-elephant-page
.ac-actions {

    display:
        flex;

    flex-wrap:
        wrap;

    gap:
        13px;
}


.year-elephant-page
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
        var(--ye-gold) !important;

    border-radius:
        999px !important;

    background:
        var(--ye-gold) !important;

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


.year-elephant-page
.ac-btn:hover {

    transform:
        translateY(-2px);

    background:
        #d5aa51 !important;
}


.year-elephant-page
.ac-btn-secondary {

    border-color:
        rgba(23,59,49,.13) !important;

    background:
        #ffffff !important;

    color:
        var(--ye-green-dark) !important;

    box-shadow:
        0 10px 25px
        rgba(16,43,36,.07);
}


/* ================================================================
   HERO POSTER
   ================================================================ */

.year-elephant-page
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
        var(--ye-shadow-lg) !important;

    transform:
        rotate(1deg);

    transition:
        .3s ease;
}


.year-elephant-page
.c1-visual:hover {

    transform:
        rotate(0)
        translateY(-5px);
}


.year-elephant-page
.c1-visual a {

    display:
        block;

    overflow:
        hidden;

    border-radius:
        21px;
}


.year-elephant-page
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


.year-elephant-page
.c1-visual:hover img {

    transform:
        scale(1.025);
}


.year-elephant-page
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

.year-elephant-page
.c1-story {

    background:
        radial-gradient(
            circle at 8% 8%,
            rgba(201,157,69,.09),
            transparent 25%
        ),
        #f9f7f0 !important;
}


.year-elephant-page
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


.year-elephant-page
.c1-story-copy {

    max-width:
        780px;
}


.year-elephant-page
.c1-story-copy h2 {

    margin:
        15px 0
        22px;

    color:
        var(--ye-green-dark) !important;

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


.year-elephant-page
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


.year-elephant-page
.c1-story-copy p {

    color:
        #5a6762 !important;

    font-size:
        16px !important;

    font-weight:
        400 !important;

    line-height:
        1.92 !important;
}


/* ================================================================
   KEY CONNECTIONS
   ================================================================ */

.year-elephant-page
.c1-aside {

    position:
        sticky;

    top:
        120px;
}


.year-elephant-page
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
        var(--ye-shadow) !important;
}


.year-elephant-page
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


.year-elephant-page
.c1-lessons
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.year-elephant-page
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


.year-elephant-page
.c1-points {

    display:
        grid;

    gap:
        10px;
}


.year-elephant-page
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


.year-elephant-page
.c1-points i {

    color:
        #e6c878;
}


/* ================================================================
   FAITH + SCIENCE FEATURE SECTION
   ================================================================ */

.year-elephant-page
.ye-feature-section {

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


.year-elephant-page
.ye-feature-section::after {

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
        -280px;

    border:
        1px solid
        rgba(239,219,162,.12);

    border-radius:
        50%;
}


.year-elephant-page
.ye-feature-grid {

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


.year-elephant-page
.ye-feature-copy
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.year-elephant-page
.ye-feature-copy h2 {

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


.year-elephant-page
.ye-feature-copy p {

    color:
        rgba(255,255,255,.73) !important;

    font-size:
        16px;

    line-height:
        1.85;
}


.year-elephant-page
.ye-feature-cards {

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


.year-elephant-page
.ye-feature-card {

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


.year-elephant-page
.ye-feature-card i {

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


.year-elephant-page
.ye-feature-card h3 {

    margin:
        0 0
        8px;

    color:
        #ffffff !important;

    font-size:
        21px;
}


.year-elephant-page
.ye-feature-card p {

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

.year-elephant-page
.ye-section-heading {

    max-width:
        760px;

    margin-bottom:
        42px;
}


.year-elephant-page
.ye-section-heading h2 {

    margin:
        13px 0;

    color:
        var(--ye-green-dark);

    font-size:
        clamp(
            38px,
            4vw,
            52px
        );

    line-height:
        1.08;
}


.year-elephant-page
.ye-section-heading p {

    color:
        #64716c;

    font-size:
        16px;

    line-height:
        1.8;
}


/* ================================================================
   VIDEO
   ================================================================ */

.year-elephant-page
.ye-video-section {

    background:
        #edf1ec !important;
}


.year-elephant-page
.ye-video-card {

    display:
        grid;

    grid-template-columns:
        minmax(0,1.45fr)
        minmax(300px,.58fr);

    overflow:
        hidden;

    padding:
        0 !important;

    border:
        1px solid
        var(--ye-border) !important;

    border-radius:
        30px !important;

    background:
        #ffffff !important;

    box-shadow:
        var(--ye-shadow) !important;
}


.year-elephant-page
.ye-video-frame {

    position:
        relative;

    min-height:
        460px;

    overflow:
        hidden;

    background:
        #111b18;
}


.year-elephant-page
.ye-video-frame iframe {

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


.year-elephant-page
.ye-video-copy {

    display:
        flex;

    flex-direction:
        column;

    justify-content:
        center;

    padding:
        42px 35px;
}


.year-elephant-page
.ye-video-copy h3 {

    margin:
        12px 0
        14px;

    color:
        var(--ye-green-dark);

    font-size:
        30px;

    line-height:
        1.15;
}


.year-elephant-page
.ye-video-copy p {

    margin:
        0 0
        24px;

    color:
        #5f6c67;

    line-height:
        1.8;
}


.year-elephant-page
.ye-video-meta {

    display:
        grid;

    gap:
        11px;

    margin-bottom:
        27px;

    color:
        #586661;

    font-size:
        14px;
}


.year-elephant-page
.ye-video-meta span {

    display:
        flex;

    align-items:
        center;

    gap:
        10px;
}


.year-elephant-page
.ye-video-meta i {

    width:
        18px;

    color:
        #b68d3d;

    text-align:
        center;
}


/* ================================================================
   MATERIALS
   ================================================================ */

.year-elephant-page
.ye-material-section {

    background:
        #fbfaf6 !important;
}


.year-elephant-page
.ye-resource-stack {

    display:
        grid;

    gap:
        34px;
}


.year-elephant-page
.ye-resource-card {

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
        var(--ye-border) !important;

    border-radius:
        30px !important;

    background:
        #ffffff !important;

    box-shadow:
        var(--ye-shadow) !important;
}


/* drive preview */

.year-elephant-page
.ye-resource-preview {

    min-height:
        520px;

    background:
        #e9ece6;
}


.year-elephant-page
.ye-resource-preview iframe {

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


.year-elephant-page
.ye-resource-copy {

    display:
        flex;

    flex-direction:
        column;

    justify-content:
        center;

    padding:
        44px 38px;
}


.year-elephant-page
.ye-resource-copy h3 {

    margin:
        13px 0
        15px;

    color:
        var(--ye-green-dark);

    font-size:
        clamp(
            28px,
            2.5vw,
            35px
        );

    line-height:
        1.13;
}


.year-elephant-page
.ye-resource-copy p {

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


.year-elephant-page
.ye-resource-meta {

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


.year-elephant-page
.ye-resource-meta span {

    display:
        flex;

    align-items:
        center;

    gap:
        11px;
}


.year-elephant-page
.ye-resource-meta i {

    width:
        18px;

    color:
        #b68d3d;

    text-align:
        center;
}


.year-elephant-page
.ye-resource-copy
.ac-btn {

    width:
        fit-content;
}


/* ================================================================
   GALLERY
   ================================================================ */

.year-elephant-page
.ye-gallery-section {

    background:
        linear-gradient(
            180deg,
            #e8eee6,
            #f3f0e7
        ) !important;
}


.year-elephant-page
.ye-gallery-grid {

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


.year-elephant-page
.ye-gallery-item {

    margin:
        0;

    padding:
        6px;

    overflow:
        hidden;

    border:
        1px solid
        var(--ye-border);

    border-radius:
        23px;

    background:
        #ffffff;

    box-shadow:
        var(--ye-shadow);

    transition:
        transform .3s ease,
        box-shadow .3s ease;
}


.year-elephant-page
.ye-gallery-item:hover {

    transform:
        translateY(-5px);

    box-shadow:
        0 22px 55px
        rgba(20,52,43,.13);
}


.year-elephant-page
.ye-gallery-item a {

    display:
        block;

    aspect-ratio:
        4 / 3;

    overflow:
        hidden;

    border-radius:
        17px;
}


.year-elephant-page
.ye-gallery-item img {

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


.year-elephant-page
.ye-gallery-item:hover img {

    transform:
        scale(1.045);
}


/* ================================================================
   CYCLE NAV
   ================================================================ */

.year-elephant-page
.c1-cycle-nav {

    background:
        #e7ece4 !important;
}


.year-elephant-page
.c1-cycle-nav
.ac-heading {

    margin-bottom:
        30px;
}


.year-elephant-page
.c1-cycle-nav h2 {

    margin:
        12px 0;

    color:
        var(--ye-green-dark);

    font-size:
        clamp(
            34px,
            4vw,
            50px
        );
}


.year-elephant-page
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


.year-elephant-page
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
        var(--ye-border);

    border-radius:
        20px;

    background:
        rgba(255,255,255,.82);

    color:
        var(--ye-green-dark);

    text-decoration:
        none;

    box-shadow:
        0 10px 30px
        rgba(20,52,43,.05);

    transition:
        .25s ease;
}


.year-elephant-page
.sc-chapter-links > a:hover {

    transform:
        translateY(-4px);

    background:
        #ffffff;

    box-shadow:
        var(--ye-shadow);
}


.year-elephant-page
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


.year-elephant-page
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

    .year-elephant-page
    .c1-hero-grid {

        grid-template-columns:
            1fr
            330px;
    }


    .year-elephant-page
    .c1-story-grid {

        grid-template-columns:
            1fr
            290px;
    }


    .year-elephant-page
    .ye-gallery-grid {

        grid-template-columns:
            repeat(
                2,
                minmax(0,1fr)
            );
    }


    .year-elephant-page
    .ye-resource-card {

        grid-template-columns:
            1fr;
    }


    .year-elephant-page
    .ye-resource-preview,
    .year-elephant-page
    .ye-resource-preview iframe {

        min-height:
            480px;
    }

}


@media (
    max-width: 850px
) {

    .year-elephant-page
    .c1-hero {

        min-height:
            auto;

        padding-bottom:
            65px !important;
    }


    .year-elephant-page
    .c1-hero-grid {

        grid-template-columns:
            1fr;
    }


    .year-elephant-page
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


    .year-elephant-page
    .c1-story-grid {

        grid-template-columns:
            1fr;
    }


    .year-elephant-page
    .c1-aside {

        position:
            static;
    }


    .year-elephant-page
    .ye-feature-grid {

        grid-template-columns:
            1fr;

        gap:
            38px;
    }


    .year-elephant-page
    .ye-video-card {

        grid-template-columns:
            1fr;
    }


    .year-elephant-page
    .ye-video-frame {

        min-height:
            auto;

        aspect-ratio:
            16 / 9;
    }

}


@media (
    max-width: 650px
) {

    .year-elephant-page
    .c1-hero {

        border-radius:
            0 0
            28px 28px;
    }


    .year-elephant-page
    .c1-hero-copy {

        padding:
            30px 23px !important;

        border-radius:
            25px !important;
    }


    .year-elephant-page
    .c1-hero-copy h1 {

        font-size:
            clamp(
                42px,
                12vw,
                60px
            ) !important;
    }


    .year-elephant-page
    .c1-meta {

        flex-direction:
            column;

        align-items:
            flex-start;
    }


    .year-elephant-page
    .ac-actions {

        flex-direction:
            column;
    }


    .year-elephant-page
    .ac-btn {

        width:
            100%;
    }


    .year-elephant-page
    .ye-feature-cards,
    .year-elephant-page
    .ye-gallery-grid {

        grid-template-columns:
            1fr;
    }


    .year-elephant-page
    .ye-resource-preview,
    .year-elephant-page
    .ye-resource-preview iframe {

        min-height:
            410px;
    }


    .year-elephant-page
    .ye-resource-copy {

        padding:
            30px 23px;
    }


    .year-elephant-page
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
        year-elephant-page
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

                    The Year of the Elephant

                </span>

            </nav>



            <div class="c1-hero-grid">


                <div class="c1-hero-copy">


                    <span class="ac-eyebrow">

                        CYCLE 1 · SESSION 04

                    </span>


                    <h1>

                        The Year of
                        the Elephant

                    </h1>


                    <p class="c1-hero-lead">

                        Aam ul Feel,
                        trust in Allah
                        and learning through science.

                    </p>



                    <div class="c1-meta">


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            <b>
                                25 January 2025
                            </b>

                        </span>


                        <span>

                            <i class="fas fa-book-open"></i>

                            <b>
                                Cycle 1 · Session 04
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
                        data-fancybox="year-elephant-poster"
                        href="<?php echo e(asset($posterImage)); ?>"
                    >

                        <img
                            src="<?php echo e(asset($posterImage)); ?>"
                            alt="The Year of the Elephant event poster"
                        >

                    </a>


                    <figcaption>

                        The Year of the Elephant ·
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

                        Aam ul Feel,
                        trust in Allah
                        and purposeful action.

                    </h2>


                    <p class="c1-lead">

                        Cycle 1 · Session 04

                    </p>


                    <p>

                        On 25 January 2025,
                        The Year of the Elephant
                        offered children an enriching
                        experience centred on
                        Islamic history, values
                        and scientific reflection.

                        The program began with
                        lively group discussions
                        among children in their
                        respective colour groups.

                    </p>


                    <p>

                        A heartfelt tilawat of
                        Surah Al-Fil by Yahya Faran
                        introduced the event’s theme
                        and laid the foundation
                        for the historical learning
                        that followed.

                    </p>


                    <p>

                        Maulana Owais shared the
                        history of the Kaaba,
                        from its construction by
                        Hazrat Ibrahim (AS)
                        and Hazrat Ismail (AS)
                        to the settlement of
                        Makkah around it.

                    </p>


                    <p>

                        Children then learned about
                        King Abraha’s attempt
                        to destroy the Kaaba
                        and how Allah foiled
                        his plans through the
                        miraculous flock of birds.

                        The story highlighted
                        Allah’s supreme power
                        and the importance of dua
                        in facing challenges.

                    </p>


                    <p>

                        After Maghrib,
                        children enjoyed the
                        Prophetic Series
                        jigsaw puzzle and
                        shared snacks together.

                    </p>


                    <p>

                        The second part of the
                        session explored how
                        science reflects the
                        greatness of Allah.

                        While miracles such as
                        the birds defeating
                        Abraha’s army are beyond
                        human comprehension,
                        children also reflected
                        on natural forces such
                        as gravity and buoyancy
                        as signs of Allah’s control
                        over the universe.

                    </p>


                    <p>

                        Children were encouraged
                        to recognise their own
                        potential and were reminded
                        that even seemingly small
                        efforts can create
                        meaningful results
                        with determination,
                        faith and Allah’s support.

                    </p>


                    <p>

                        The session concluded
                        with a STEM activity
                        where children designed
                        and built boats capable
                        of carrying aid
                        to Palestine.

                        The challenge combined
                        creativity, teamwork
                        and problem-solving,
                        ending the event on
                        a message of trust,
                        aspiration and purposeful action.

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

                                Trust in Allah

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Aam ul Feel

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Power of Dua

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                STEM teamwork

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Purposeful action

                            </span>


                        </div>


                    </div>


                </aside>


            </div>


        </div>


    </section>



    

    <section
        class="ac-section sc-svg-section ye-feature-section"
    >


        <div class="ac-container">


            <div class="ye-feature-grid">


                <div class="ye-feature-copy">


                    <span class="ac-eyebrow">

                        FAITH · SCIENCE · ACTION

                    </span>


                    <h2>

                        Small efforts can
                        carry a powerful purpose.

                    </h2>


                    <p>

                        From the story of Aam ul Feel
                        to scientific ideas such as
                        gravity and buoyancy,
                        children explored how faith,
                        observation and purposeful
                        action can come together.

                    </p>


                </div>



                <div class="ye-feature-cards">


                    <article class="ye-feature-card">


                        <i class="fas fa-kaaba"></i>


                        <h3>
                            Aam ul Feel
                        </h3>


                        <p>
                            Understanding the story
                            of Abraha and Allah’s
                            protection of the Kaaba.
                        </p>


                    </article>


<article class="ye-feature-card">

    <i class="fas fa-praying-hands"></i>

    <h3>
        Trust & Dua
    </h3>

    <p>
        Learning to rely
        on Allah and turn
        to Him in difficulty.
    </p>

</article>



                    <article class="ye-feature-card">


                        <i class="fas fa-flask"></i>


                        <h3>
                            Science
                        </h3>


                        <p>
                            Exploring gravity,
                            buoyancy and signs
                            within Allah’s creation.
                        </p>


                    </article>



                    <article class="ye-feature-card">


                        <i class="fas fa-ship"></i>


                        <h3>
                            STEM Challenge
                        </h3>


                        <p>
                            Designing boats through
                            teamwork, creativity
                            and problem-solving.
                        </p>


                    </article>


                </div>


            </div>


        </div>


    </section>



    

    <section
        class="ac-section sc-svg-section ye-video-section"
    >


        <div class="ac-container">


            <div class="ye-section-heading">


                <span class="ac-eyebrow">

                    EVENT VIDEO

                </span>


                <h2>

                    Watch The Year
                    of the Elephant.

                </h2>


                <p>

                    Revisit the original
                    Seerat Club session video.

                </p>


            </div>



            <article class="ac-card ye-video-card">


                <div class="ye-video-frame">


                    <iframe
                        src="https://www.youtube.com/embed/aVlknDVa13w?rel=0"
                        title="The Year of the Elephant event video"
                        loading="lazy"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen
                    ></iframe>


                </div>



                <div class="ye-video-copy">


                    <span class="ac-eyebrow">

                        SESSION VIDEO

                    </span>


                    <h3>

                        The Year of
                        the Elephant

                    </h3>


                    <p>

                        Revisit the storytelling,
                        activities and learning
                        moments from
                        Cycle 1 · Session 04.

                    </p>



                    <div class="ye-video-meta">


                        <span>

                            <i class="fas fa-book-open"></i>

                            Cycle 1 · Session 04

                        </span>


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            25 January 2025

                        </span>


                        <span>

                            <i class="fas fa-play-circle"></i>

                            Original event video

                        </span>


                    </div>



                    <a
                        class="ac-btn ac-btn-secondary"
                        href="https://youtu.be/aVlknDVa13w"
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
        class="ac-section sc-svg-section ye-material-section"
    >


        <div class="ac-container">


            <div class="ye-section-heading">


                <span class="ac-eyebrow">

                    PRESENTATION & MATERIALS

                </span>


                <h2>

                    Continue learning
                    beyond the session.

                </h2>


                <p>

                    Explore the original
                    activity sheets and
                    presentation materials.

                </p>


            </div>



            <div class="ye-resource-stack">


                

                <article class="ac-card ye-resource-card">


                    <div class="ye-resource-preview">


                        <iframe
                            src="https://drive.google.com/file/d/1kCkZH1fqlG6GGpoFPQvsY6a1EuWalIGA/preview"
                            title="Activity Sheet Green Blue Red and Orange Group"
                            loading="lazy"
                            allow="autoplay"
                        ></iframe>


                    </div>



                    <div class="ye-resource-copy">


                        <span class="ac-eyebrow">

                            ACTIVITY SHEET

                        </span>


                        <h3>

                            Green, Blue,
                            Red & Orange Groups

                        </h3>


                        <p>

                            Explore the original
                            activity sheet prepared
                            for the colour-group
                            learning activity.

                        </p>



                        <div class="ye-resource-meta">


                            <span>

                                <i class="far fa-file-alt"></i>

                                Group Activity Sheet

                            </span>


                            <span>

                                <i class="fas fa-book-open"></i>

                                Cycle 1 · Session 04

                            </span>


                            <span>

                                <i class="far fa-calendar-alt"></i>

                                25 January 2025

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



                

                <article class="ac-card ye-resource-card">


                    <div class="ye-resource-preview">


                        <iframe
                            src="https://drive.google.com/file/d/1rmCDJCohPPcfO94OCk7wzzeEKM77Xu6d/preview"
                            title="Activity Sheet Yellow Group"
                            loading="lazy"
                            allow="autoplay"
                        ></iframe>


                    </div>



                    <div class="ye-resource-copy">


                        <span class="ac-eyebrow">

                            ACTIVITY SHEET

                        </span>


                        <h3>

                            Yellow Group

                        </h3>


                        <p>

                            View the original
                            Yellow Group activity
                            sheet used during
                            this Seerat Club session.

                        </p>



                        <div class="ye-resource-meta">


                            <span>

                                <i class="far fa-file-alt"></i>

                                Group Activity Sheet

                            </span>


                            <span>

                                <i class="fas fa-book-open"></i>

                                Cycle 1 · Session 04

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



                

                <article class="ac-card ye-resource-card">


                    <div class="ye-resource-preview">


                        <iframe
                            src="https://drive.google.com/file/d/1345-REpVg4gQuqIKmqr6y3XUTFHJySG3/preview"
                            title="The Year of the Elephant Presentation Slidepack"
                            loading="lazy"
                            allow="autoplay"
                        ></iframe>


                    </div>



                    <div class="ye-resource-copy">


                        <span class="ac-eyebrow">

                            PRESENTATION SLIDEPACK

                        </span>


                        <h3>

                            The Year of
                            the Elephant

                        </h3>


                        <p>

                            Revisit the original
                            presentation material
                            prepared for this
                            Seerat Club session.

                        </p>



                        <div class="ye-resource-meta">


                            <span>

                                <i class="far fa-file-powerpoint"></i>

                                Original Presentation

                            </span>


                            <span>

                                <i class="fas fa-book-open"></i>

                                Cycle 1 · Session 04

                            </span>


                        </div>



                        <a
                            class="ac-btn ac-btn-secondary"
                            href="https://drive.google.com/file/d/1345-REpVg4gQuqIKmqr6y3XUTFHJySG3/view"
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
            class="ac-section sc-svg-section ye-gallery-section"
            id="event-gallery"
        >


            <div class="ac-container">


                <div class="ye-section-heading">


                    <span class="ac-eyebrow">

                        EVENT PICTURES

                    </span>


                    <h2>

                        Moments from
                        The Year of the Elephant.

                    </h2>


                    <p>

                        Storytelling,
                        group discussions
                        and the STEM activity
                        from the original session.

                    </p>


                </div>



                <div class="ye-gallery-grid">


                    <?php $__currentLoopData = $galleryImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                        <figure class="ye-gallery-item">


                            <a
                                data-fancybox="year-elephant-gallery"
                                href="<?php echo e(asset($image)); ?>"
                            >

                                <img
                                    src="<?php echo e(asset($image)); ?>"
                                    alt="The Year of the Elephant event photograph <?php echo e($index + 1); ?>"
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
                        'past-events.cycle-1.the-pursuit-of-submission'
                    )); ?>"
                >


                    <small>

                        Previous chapter

                    </small>


                    <strong>

                        The Pursuit of Submission

                        <span aria-hidden="true">

                            ↗

                        </span>

                    </strong>


                </a>



                <a
                    href="<?php echo e(route(
                        'past-events.cycle-1.the-chosen-heart'
                    )); ?>"
                >


                    <small>

                        Next chapter

                    </small>


                    <strong>

                        The Chosen Heart

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

<?php echo $__env->make("Layout.layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Seerat-Club\resources\views/past-events/cycle-1/the-year-of-the-elephant.blade.php ENDPATH**/ ?>