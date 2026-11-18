<?php $__env->startSection('title', 'The Prophet in Making · Seerat Club'); ?>

<?php $__env->startSection("Content"); ?>


<link
    rel="stylesheet"
    href="<?php echo e(asset('assets/css/past-events-premium.css')); ?>"
>


<?php

    /*
    |--------------------------------------------------------------------------
    | EVENT IMAGE FOLDERS
    |--------------------------------------------------------------------------
    */

    $eventImageFolder =
        'assets/images/the-prophet-in-making';

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

?>



<style>

/* ================================================================
   THE PROPHET IN MAKING
   PREMIUM EVENT PAGE
   ================================================================ */

.prophet-making-page {

    --pm-green:
        #173b31;

    --pm-green-dark:
        #102b24;

    --pm-green-soft:
        #e7eee8;

    --pm-gold:
        #c99d45;

    --pm-gold-light:
        #efdca6;

    --pm-cream:
        #f8f5ed;

    --pm-cream-soft:
        #fbfaf6;

    --pm-text:
        #172923;

    --pm-muted:
        #5c6964;

    --pm-border:
        rgba(23,59,49,.10);

    --pm-shadow:
        0 18px 55px
        rgba(20,52,43,.10);

    --pm-shadow-lg:
        0 30px 90px
        rgba(13,44,36,.17);

    background:
        #ffffff;

    color:
        var(--pm-text);
}


/* ================================================================
   TYPOGRAPHY
   ================================================================ */

.prophet-making-page h1,
.prophet-making-page h2,
.prophet-making-page h3,
.prophet-making-page h4,
.prophet-making-page h5,
.prophet-making-page h6,
.prophet-making-page .ac-btn,
.prophet-making-page .ac-eyebrow,
.prophet-making-page .sc-chapter-links strong {

    font-family:
        "Baloo 2",
        "SC Arabic",
        sans-serif !important;
}


.prophet-making-page p,
.prophet-making-page li,
.prophet-making-page .c1-meta,
.prophet-making-page .ac-breadcrumb,
.prophet-making-page .pm-resource-meta,
.prophet-making-page .pm-video-meta,
.prophet-making-page .sc-chapter-links small {

    font-family:
        "DM Sans",
        "SC Arabic",
        sans-serif !important;
}


/* ================================================================
   HERO
   ================================================================ */

.prophet-making-page
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


.prophet-making-page
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


.prophet-making-page
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


.prophet-making-page
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

.prophet-making-page
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


.prophet-making-page
.ac-breadcrumb a {

    color:
        #ffffff !important;

    text-decoration:
        none;
}


.prophet-making-page
.ac-breadcrumb a:hover {

    color:
        var(--pm-gold-light) !important;
}


/* ================================================================
   HERO GRID
   ================================================================ */

.prophet-making-page
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

.prophet-making-page
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
        var(--pm-shadow-lg) !important;

    backdrop-filter:
        none !important;

    -webkit-backdrop-filter:
        none !important;
}


.prophet-making-page
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
            var(--pm-gold),
            #efd593
        );
}


.prophet-making-page
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


.prophet-making-page
.c1-hero-copy h1 {

    max-width:
        720px;

    margin:
        23px 0
        22px !important;

    color:
        var(--pm-green-dark) !important;

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


.prophet-making-page
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
   HERO META
   ================================================================ */

.prophet-making-page
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


.prophet-making-page
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


.prophet-making-page
.c1-meta i {

    color:
        #aa8438;
}


/* ================================================================
   BUTTONS
   ================================================================ */

.prophet-making-page
.ac-actions {

    display:
        flex;

    flex-wrap:
        wrap;

    gap:
        13px;
}


.prophet-making-page
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
        var(--pm-gold) !important;

    border-radius:
        999px !important;

    background:
        var(--pm-gold) !important;

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


.prophet-making-page
.ac-btn:hover {

    transform:
        translateY(-2px);

    background:
        #d5aa51 !important;
}


.prophet-making-page
.ac-btn-secondary {

    border-color:
        rgba(23,59,49,.13) !important;

    background:
        #ffffff !important;

    color:
        var(--pm-green-dark) !important;

    box-shadow:
        0 10px 25px
        rgba(16,43,36,.07);
}


/* ================================================================
   POSTER
   ================================================================ */

.prophet-making-page
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
        var(--pm-shadow-lg) !important;

    transform:
        rotate(1deg);

    transition:
        .3s ease;
}


.prophet-making-page
.c1-visual:hover {

    transform:
        rotate(0)
        translateY(-5px);
}


.prophet-making-page
.c1-visual a {

    display:
        block;

    overflow:
        hidden;

    border-radius:
        21px;
}


.prophet-making-page
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


.prophet-making-page
.c1-visual:hover img {

    transform:
        scale(1.025);
}


.prophet-making-page
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

.prophet-making-page
.c1-story {

    background:
        radial-gradient(
            circle at 8% 8%,
            rgba(201,157,69,.09),
            transparent 25%
        ),
        #f9f7f0 !important;
}


.prophet-making-page
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


.prophet-making-page
.c1-story-copy {

    max-width:
        780px;
}


.prophet-making-page
.c1-story-copy h2 {

    margin:
        15px 0
        22px;

    color:
        var(--pm-green-dark) !important;

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


.prophet-making-page
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


.prophet-making-page
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

.prophet-making-page
.c1-aside {

    position:
        sticky;

    top:
        120px;
}


.prophet-making-page
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
        var(--pm-shadow) !important;
}


.prophet-making-page
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


.prophet-making-page
.c1-lessons
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.prophet-making-page
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


.prophet-making-page
.c1-points {

    display:
        grid;

    gap:
        10px;
}


.prophet-making-page
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


.prophet-making-page
.c1-points i {

    color:
        #e6c878;
}


/* ================================================================
   CHARACTER SECTION
   ================================================================ */

.prophet-making-page
.pm-character-section {

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


.prophet-making-page
.pm-character-section::after {

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


.prophet-making-page
.pm-character-grid {

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


.prophet-making-page
.pm-character-copy
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.prophet-making-page
.pm-character-copy h2 {

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


.prophet-making-page
.pm-character-copy p {

    color:
        rgba(255,255,255,.73) !important;

    font-size:
        16px;

    line-height:
        1.85;
}


.prophet-making-page
.pm-character-cards {

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


.prophet-making-page
.pm-character-card {

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


.prophet-making-page
.pm-character-card i {

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


.prophet-making-page
.pm-character-card h3 {

    margin:
        0 0
        8px;

    color:
        #ffffff !important;

    font-size:
        21px;
}


.prophet-making-page
.pm-character-card p {

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

.prophet-making-page
.pm-section-heading {

    max-width:
        760px;

    margin-bottom:
        42px;
}


.prophet-making-page
.pm-section-heading h2 {

    margin:
        13px 0;

    color:
        var(--pm-green-dark);

    font-size:
        clamp(
            38px,
            4vw,
            52px
        );

    line-height:
        1.08;
}


.prophet-making-page
.pm-section-heading p {

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

.prophet-making-page
.pm-video-section {

    background:
        #edf1ec !important;
}


.prophet-making-page
.pm-video-card {

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
        var(--pm-border) !important;

    border-radius:
        30px !important;

    background:
        #ffffff !important;

    box-shadow:
        var(--pm-shadow) !important;
}


.prophet-making-page
.pm-video-frame {

    position:
        relative;

    min-height:
        460px;

    overflow:
        hidden;

    background:
        #111b18;
}


.prophet-making-page
.pm-video-frame iframe {

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


.prophet-making-page
.pm-video-copy {

    display:
        flex;

    flex-direction:
        column;

    justify-content:
        center;

    padding:
        42px 35px;
}


.prophet-making-page
.pm-video-copy h3 {

    margin:
        12px 0
        14px;

    color:
        var(--pm-green-dark);

    font-size:
        30px;

    line-height:
        1.15;
}


.prophet-making-page
.pm-video-copy p {

    margin:
        0 0
        24px;

    color:
        #5f6c67;

    line-height:
        1.8;
}


.prophet-making-page
.pm-video-meta {

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


.prophet-making-page
.pm-video-meta span {

    display:
        flex;

    align-items:
        center;

    gap:
        10px;
}


.prophet-making-page
.pm-video-meta i {

    width:
        18px;

    color:
        #b68d3d;

    text-align:
        center;
}


/* ================================================================
   PRESENTATION
   ================================================================ */

.prophet-making-page
.pm-resource-section {

    background:
        #fbfaf6 !important;
}


.prophet-making-page
.pm-resource-card {

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
        var(--pm-border) !important;

    border-radius:
        30px !important;

    background:
        #ffffff !important;

    box-shadow:
        var(--pm-shadow) !important;
}


.prophet-making-page
.pm-resource-preview {

    min-height:
        540px;

    background:
        #e9ece6;
}


.prophet-making-page
.pm-resource-preview iframe {

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


.prophet-making-page
.pm-resource-copy {

    display:
        flex;

    flex-direction:
        column;

    justify-content:
        center;

    padding:
        44px 38px;
}


.prophet-making-page
.pm-resource-copy h3 {

    margin:
        13px 0
        15px;

    color:
        var(--pm-green-dark);

    font-size:
        clamp(
            28px,
            2.5vw,
            35px
        );

    line-height:
        1.13;
}


.prophet-making-page
.pm-resource-copy p {

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


.prophet-making-page
.pm-resource-meta {

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


.prophet-making-page
.pm-resource-meta span {

    display:
        flex;

    align-items:
        center;

    gap:
        11px;
}


.prophet-making-page
.pm-resource-meta i {

    width:
        18px;

    color:
        #b68d3d;

    text-align:
        center;
}


.prophet-making-page
.pm-resource-copy
.ac-btn {

    width:
        fit-content;
}


/* ================================================================
   GALLERY
   ================================================================ */

.prophet-making-page
.pm-gallery-section {

    background:
        linear-gradient(
            180deg,
            #e8eee6,
            #f3f0e7
        ) !important;
}


.prophet-making-page
.pm-gallery-grid {

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


.prophet-making-page
.pm-gallery-item {

    margin:
        0;

    padding:
        6px;

    overflow:
        hidden;

    border:
        1px solid
        var(--pm-border);

    border-radius:
        23px;

    background:
        #ffffff;

    box-shadow:
        var(--pm-shadow);

    transition:
        transform .3s ease,
        box-shadow .3s ease;
}


.prophet-making-page
.pm-gallery-item:hover {

    transform:
        translateY(-5px);

    box-shadow:
        0 22px 55px
        rgba(20,52,43,.13);
}


.prophet-making-page
.pm-gallery-item a {

    display:
        block;

    aspect-ratio:
        4 / 3;

    overflow:
        hidden;

    border-radius:
        17px;
}


.prophet-making-page
.pm-gallery-item img {

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


.prophet-making-page
.pm-gallery-item:hover img {

    transform:
        scale(1.045);
}


/* ================================================================
   CYCLE NAVIGATION
   ================================================================ */

.prophet-making-page
.c1-cycle-nav {

    background:
        #e7ece4 !important;
}


.prophet-making-page
.c1-cycle-nav
.ac-heading {

    margin-bottom:
        30px;
}


.prophet-making-page
.c1-cycle-nav h2 {

    margin:
        12px 0;

    color:
        var(--pm-green-dark);

    font-size:
        clamp(
            34px,
            4vw,
            50px
        );
}


.prophet-making-page
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


.prophet-making-page
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
        var(--pm-border);

    border-radius:
        20px;

    background:
        rgba(255,255,255,.82);

    color:
        var(--pm-green-dark);

    text-decoration:
        none;

    box-shadow:
        0 10px 30px
        rgba(20,52,43,.05);

    transition:
        .25s ease;
}


.prophet-making-page
.sc-chapter-links > a:hover {

    transform:
        translateY(-4px);

    background:
        #ffffff;

    box-shadow:
        var(--pm-shadow);
}


.prophet-making-page
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


.prophet-making-page
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

    .prophet-making-page
    .c1-hero-grid {

        grid-template-columns:
            1fr
            330px;
    }


    .prophet-making-page
    .c1-story-grid {

        grid-template-columns:
            1fr
            290px;
    }


    .prophet-making-page
    .pm-gallery-grid {

        grid-template-columns:
            repeat(
                2,
                minmax(0,1fr)
            );
    }


    .prophet-making-page
    .pm-resource-card {

        grid-template-columns:
            1fr;
    }


    .prophet-making-page
    .pm-resource-preview,
    .prophet-making-page
    .pm-resource-preview iframe {

        min-height:
            480px;
    }

}


@media (
    max-width: 850px
) {

    .prophet-making-page
    .c1-hero {

        min-height:
            auto;

        padding-bottom:
            65px !important;
    }


    .prophet-making-page
    .c1-hero-grid {

        grid-template-columns:
            1fr;
    }


    .prophet-making-page
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


    .prophet-making-page
    .c1-story-grid {

        grid-template-columns:
            1fr;
    }


    .prophet-making-page
    .c1-aside {

        position:
            static;
    }


    .prophet-making-page
    .pm-character-grid {

        grid-template-columns:
            1fr;

        gap:
            38px;
    }


    .prophet-making-page
    .pm-video-card {

        grid-template-columns:
            1fr;
    }


    .prophet-making-page
    .pm-video-frame {

        min-height:
            auto;

        aspect-ratio:
            16 / 9;
    }

}


@media (
    max-width: 650px
) {

    .prophet-making-page
    .c1-hero {

        border-radius:
            0 0
            28px 28px;
    }


    .prophet-making-page
    .c1-hero-copy {

        padding:
            30px 23px !important;

        border-radius:
            25px !important;
    }


    .prophet-making-page
    .c1-hero-copy h1 {

        font-size:
            clamp(
                42px,
                12vw,
                60px
            ) !important;
    }


    .prophet-making-page
    .c1-meta {

        flex-direction:
            column;

        align-items:
            flex-start;
    }


    .prophet-making-page
    .ac-actions {

        flex-direction:
            column;
    }


    .prophet-making-page
    .ac-btn {

        width:
            100%;
    }


    .prophet-making-page
    .pm-character-cards,
    .prophet-making-page
    .pm-gallery-grid {

        grid-template-columns:
            1fr;
    }


    .prophet-making-page
    .pm-resource-preview,
    .prophet-making-page
    .pm-resource-preview iframe {

        min-height:
            410px;
    }


    .prophet-making-page
    .pm-resource-copy {

        padding:
            30px 23px;
    }


    .prophet-making-page
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
        prophet-making-page
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

                    The Prophet in Making

                </span>

            </nav>



            <div class="c1-hero-grid">


                <div class="c1-hero-copy">


                    <span class="ac-eyebrow">

                        CYCLE 1 · SESSION 06

                    </span>


                    <h1>

                        The Prophet
                        in Making

                    </h1>


                    <p class="c1-hero-lead">

                        Everyday experiences
                        that nurtured remarkable
                        character, wisdom
                        and responsibility.

                    </p>



                    <div class="c1-meta">


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            <b>
                                5 April 2025
                            </b>

                        </span>


                        <span>

                            <i class="fas fa-book-open"></i>

                            <b>
                                Cycle 1 · Session 06
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
                        data-fancybox="prophet-making-poster"
                        href="<?php echo e(asset($posterImage)); ?>"
                    >

                        <img
                            src="<?php echo e(asset($posterImage)); ?>"
                            alt="The Prophet in Making event poster"
                        >

                    </a>


                    <figcaption>

                        The Prophet in Making ·
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

                        Everyday experiences
                        that nurtured
                        remarkable character.

                    </h2>


                    <p class="c1-lead">

                        Cycle 1 · Session 06

                    </p>


                    <p>

                        The sixth event in
                        Seerat Club’s ongoing series
                        took place on
                        5 April 2025
                        at Shafqat Masjid,
                        from Asar to Isha prayers.

                        The storytelling session
                        was conducted by Maulvi Owais
                        and focused on the youth
                        phase of Prophet Muhammad ﷺ.

                    </p>


                    <p>

                        Children learned how
                        Prophet Muhammad ﷺ,
                        like many other Prophets,
                        worked as a shepherd
                        during his early years.

                        This experience helped
                        nurture qualities such as
                        patience, humility
                        and courage.

                    </p>


                    <p>

                        One story explored how
                        Allah protected him
                        from the negative influences
                        present within society.

                        The lesson helped children
                        reflect on the importance
                        of choosing environments
                        and actions that support
                        good character.

                    </p>


                    <p>

                        Another important part
                        of the session explored
                        his travel experiences
                        with his uncle Abu Talib.

                        Trade journeys to Syria
                        gave him exposure to
                        different people,
                        environments and experiences.

                    </p>


                    <p>

                        These journeys helped
                        children understand how
                        wisdom can grow through
                        observation, responsibility
                        and the company of
                        experienced people.

                    </p>


                    <p>

                        Children were encouraged
                        to draw practical lessons
                        from these stories:
                        helping others,
                        gaining wisdom through
                        shared experiences
                        and contributing positively
                        to society.

                    </p>


                    <p>

                        These qualities were among
                        those that earned
                        Prophet Muhammad ﷺ
                        the title
                        <strong>Al Amin</strong>
                        even before Prophethood.

                    </p>


                    <p>

                        The storytelling was followed
                        by an engaging scouting session.

                        Children were introduced
                        to basic rescue training,
                        fire safety and navigation
                        using a compass.

                    </p>


                    <p>

                        These practical activities
                        were designed to build
                        confidence, responsibility,
                        awareness and useful
                        life skills.

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

                                Patience and humility

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Learning through experience

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Allah’s protection

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Scouting and responsibility

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Building trust and character

                            </span>


                        </div>


                    </div>


                </aside>


            </div>


        </div>


    </section>



    

    <section
        class="ac-section sc-svg-section pm-character-section"
    >


        <div class="ac-container">


            <div class="pm-character-grid">


                <div class="pm-character-copy">


                    <span class="ac-eyebrow">

                        CHARACTER IN ACTION

                    </span>


                    <h2>

                        Good character
                        grows through
                        real experience.

                    </h2>


                    <p>

                        The session connected
                        Seerah with practical life skills,
                        showing children that patience,
                        courage, responsibility
                        and service are qualities
                        developed through action.

                    </p>


                </div>



                <div class="pm-character-cards">


                    <article class="pm-character-card">


                        <i class="fas fa-users"></i>


                        <h3>
                            Responsibility
                        </h3>


                        <p>

                            Learning to contribute,
                            help others and become
                            dependable.

                        </p>


                    </article>



                    <article class="pm-character-card">


                        <i class="fas fa-shield-alt"></i>


                        <h3>
                            Protection
                        </h3>


                        <p>

                            Reflecting on Allah’s
                            protection and the importance
                            of wise choices.

                        </p>


                    </article>



                    <article class="pm-character-card">


                        <i class="fas fa-compass"></i>


                        <h3>
                            Navigation
                        </h3>


                        <p>

                            Building confidence
                            through practical
                            compass skills.

                        </p>


                    </article>



                    <article class="pm-character-card">


                        <i class="fas fa-first-aid"></i>


                        <h3>
                            Rescue Skills
                        </h3>


                        <p>

                            Developing awareness,
                            confidence and practical
                            readiness.

                        </p>


                    </article>


                </div>


            </div>


        </div>


    </section>



    

    <section
        class="ac-section sc-svg-section pm-video-section"
    >


        <div class="ac-container">


            <div class="pm-section-heading">


                <span class="ac-eyebrow">

                    EVENT VIDEO

                </span>


                <h2>

                    Watch The Prophet
                    in Making.

                </h2>


                <p>

                    Revisit the original
                    Seerat Club session video.

                </p>


            </div>



            <article class="ac-card pm-video-card">


                <div class="pm-video-frame">


                    <iframe
                        src="https://www.youtube.com/embed/Cok8DfFrYHo?rel=0"
                        title="The Prophet in Making event video"
                        loading="lazy"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen
                    ></iframe>


                </div>



                <div class="pm-video-copy">


                    <span class="ac-eyebrow">

                        SESSION VIDEO

                    </span>


                    <h3>

                        The Prophet
                        in Making

                    </h3>


                    <p>

                        Watch the original session
                        and revisit the storytelling,
                        scouting and learning moments.

                    </p>



                    <div class="pm-video-meta">


                        <span>

                            <i class="fas fa-book-open"></i>

                            Cycle 1 · Session 06

                        </span>


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            5 April 2025

                        </span>


                        <span>

                            <i class="fas fa-play-circle"></i>

                            Original event video

                        </span>


                    </div>



                    <a
                        class="ac-btn ac-btn-secondary"
                        href="https://youtu.be/Cok8DfFrYHo"
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
        class="ac-section sc-svg-section pm-resource-section"
    >


        <div class="ac-container">


            <div class="pm-section-heading">


                <span class="ac-eyebrow">

                    PRESENTATION & MATERIALS

                </span>


                <h2>

                    Continue learning
                    beyond the session.

                </h2>


                <p>

                    Explore the original
                    presentation used during
                    The Prophet in Making.

                </p>


            </div>



            <article class="ac-card pm-resource-card">


                <div class="pm-resource-preview">


                    <iframe
                        src="https://drive.google.com/file/d/12GfthjxEXddtq_UvxOOX6quHLJtwAdov/preview"
                        title="The Prophet in Making PDF"
                        loading="lazy"
                        allow="autoplay"
                    ></iframe>


                </div>



                <div class="pm-resource-copy">


                    <span class="ac-eyebrow">

                        PRESENTATION SLIDE PACK

                    </span>


                    <h3>

                        The Prophet in Making

                    </h3>


                    <p>

                        Revisit the original
                        presentation from this
                        Seerat Club session
                        directly on the page.

                    </p>



                    <div class="pm-resource-meta">


                        <span>

                            <i class="far fa-file-pdf"></i>

                            The Prophet in Making PDF

                        </span>


                        <span>

                            <i class="fas fa-book-open"></i>

                            Cycle 1 · Session 06

                        </span>


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            5 April 2025

                        </span>


                    </div>



                    <a
                        class="ac-btn ac-btn-secondary"
                        href="https://drive.google.com/file/d/12GfthjxEXddtq_UvxOOX6quHLJtwAdov/view"
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



    

    <?php if(count($galleryImages)): ?>


        <section
            class="ac-section sc-svg-section pm-gallery-section"
            id="event-gallery"
        >


            <div class="ac-container">


                <div class="pm-section-heading">


                    <span class="ac-eyebrow">

                        EVENT PICTURES

                    </span>


                    <h2>

                        Moments from
                        The Prophet in Making.

                    </h2>


                    <p>

                        Storytelling,
                        scouting activities
                        and practical learning
                        from the original session.

                    </p>


                </div>



                <div class="pm-gallery-grid">


                    <?php $__currentLoopData = $galleryImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                        <figure class="pm-gallery-item">


                            <a
                                data-fancybox="prophet-making-gallery"
                                href="<?php echo e(asset($image)); ?>"
                            >

                                <img
                                    src="<?php echo e(asset($image)); ?>"
                                    alt="The Prophet in Making event photograph <?php echo e($index + 1); ?>"
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
                        'past-events.cycle-1.the-chosen-heart'
                    )); ?>"
                >


                    <small>

                        Previous chapter

                    </small>


                    <strong>

                        The Chosen Heart

                        <span aria-hidden="true">

                            ↗

                        </span>

                    </strong>


                </a>



                <a
                    href="<?php echo e(route(
                        'past-events.cycle-1.as-saadiq-al-ameen'
                    )); ?>"
                >


                    <small>

                        Next chapter

                    </small>


                    <strong>

                        As Saadiq Al Ameen

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

<?php echo $__env->make("Layout.layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Seerat-Club\resources\views/past-events/cycle-1/the-prophet-in-making.blade.php ENDPATH**/ ?>