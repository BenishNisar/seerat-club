<?php $__env->startSection('title', 'At Taahirah · Seerat Club'); ?>

<?php $__env->startSection("Content"); ?>


<link
    rel="stylesheet"
    href="<?php echo e(asset('assets/css/past-events-premium.css')); ?>"
>


<?php

    /*
    |--------------------------------------------------------------------------
    | IMAGE FOLDERS
    |--------------------------------------------------------------------------
    */

    $eventImageFolder =
        'assets/images/at-taahirah';

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
        $eventImageFolder . '/poster.png';


    $heroCandidates = [

        $eventImageFolder . '/official-hero.jpg',

        $eventImageFolder . '/hero.jpg',

        $eventImageFolder . '/hero.png',

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
    | DYNAMIC GALLERY
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
   AT TAAHIRAH
   ================================================================ */

.taahirah-page {

    --tt-green:
        #173b31;

    --tt-dark:
        #102b24;

    --tt-gold:
        #c99d45;

    --tt-gold-light:
        #efdca6;

    --tt-cream:
        #f8f5ed;

    --tt-soft:
        #fbfaf6;

    --tt-muted:
        #5d6b66;

    --tt-border:
        rgba(23,59,49,.10);

    --tt-shadow:
        0 18px 55px
        rgba(20,52,43,.10);

    --tt-shadow-lg:
        0 30px 90px
        rgba(13,44,36,.17);

    background:
        #ffffff;

    color:
        #172923;
}


/* ================================================================
   TYPOGRAPHY
   ================================================================ */

.taahirah-page h1,
.taahirah-page h2,
.taahirah-page h3,
.taahirah-page h4,
.taahirah-page h5,
.taahirah-page h6,
.taahirah-page .ac-btn,
.taahirah-page .ac-eyebrow,
.taahirah-page .sc-chapter-links strong {

    font-family:
        "Baloo 2",
        "SC Arabic",
        sans-serif !important;
}


.taahirah-page p,
.taahirah-page li,
.taahirah-page .c1-meta,
.taahirah-page .ac-breadcrumb,
.taahirah-page .tt-video-meta,
.taahirah-page .tt-resource-meta,
.taahirah-page .sc-chapter-links small {

    font-family:
        "DM Sans",
        "SC Arabic",
        sans-serif !important;
}


/* ================================================================
   HERO
   ================================================================ */

.taahirah-page
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


/* actual hero stays visible */

.taahirah-page
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
            rgba(10,39,32,.47) 42%,
            rgba(10,39,32,.15) 72%,
            rgba(10,39,32,.04) 100%
        );
}


.taahirah-page
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
            rgba(239,214,145,.21),
            transparent 68%
        );

    pointer-events:
        none;
}


.taahirah-page
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

.taahirah-page
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


.taahirah-page
.ac-breadcrumb a {

    color:
        #ffffff !important;

    text-decoration:
        none;
}


.taahirah-page
.ac-breadcrumb a:hover {

    color:
        var(--tt-gold-light) !important;
}


/* ================================================================
   HERO GRID
   ================================================================ */

.taahirah-page
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
   HERO CARD
   ================================================================ */

.taahirah-page
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
        var(--tt-shadow-lg) !important;

    backdrop-filter:
        none !important;

    -webkit-backdrop-filter:
        none !important;
}


.taahirah-page
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
            var(--tt-gold),
            #efd593
        );
}


.taahirah-page
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


.taahirah-page
.c1-hero-copy h1 {

    margin:
        23px 0 22px !important;

    color:
        var(--tt-dark) !important;

    font-size:
        clamp(
            54px,
            5.8vw,
            82px
        ) !important;

    font-weight:
        700 !important;

    line-height:
        1 !important;

    letter-spacing:
        -.03em !important;
}


.taahirah-page
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

.taahirah-page
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


.taahirah-page
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


.taahirah-page
.c1-meta i {

    color:
        #aa8438;
}


/* ================================================================
   BUTTONS
   ================================================================ */

.taahirah-page
.ac-actions {

    display:
        flex;

    flex-wrap:
        wrap;

    gap:
        13px;
}


.taahirah-page
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
        var(--tt-gold) !important;

    border-radius:
        999px !important;

    background:
        var(--tt-gold) !important;

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


.taahirah-page
.ac-btn:hover {

    transform:
        translateY(-2px);

    background:
        #d5aa51 !important;
}


.taahirah-page
.ac-btn-secondary {

    border-color:
        rgba(23,59,49,.13) !important;

    background:
        #ffffff !important;

    color:
        var(--tt-dark) !important;

    box-shadow:
        0 10px 25px
        rgba(16,43,36,.07);
}


/* ================================================================
   POSTER
   ================================================================ */

.taahirah-page
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
        rgba(255,255,255,.94) !important;

    box-shadow:
        var(--tt-shadow-lg) !important;

    transform:
        rotate(1deg);

    transition:
        .3s ease;
}


.taahirah-page
.c1-visual:hover {

    transform:
        rotate(0)
        translateY(-5px);
}


.taahirah-page
.c1-visual a {

    display:
        block;

    overflow:
        hidden;

    border-radius:
        21px;
}


.taahirah-page
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


.taahirah-page
.c1-visual:hover img {

    transform:
        scale(1.025);
}


.taahirah-page
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

.taahirah-page
.c1-story {

    background:
        radial-gradient(
            circle at 8% 8%,
            rgba(201,157,69,.09),
            transparent 25%
        ),
        #f9f7f0 !important;
}


.taahirah-page
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


.taahirah-page
.c1-story-copy {

    max-width:
        800px;
}


.taahirah-page
.c1-story-copy h2 {

    margin:
        15px 0 22px;

    color:
        var(--tt-dark) !important;

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


.taahirah-page
.c1-story-copy h3 {

    margin:
        35px 0 12px;

    color:
        var(--tt-dark) !important;

    font-size:
        29px !important;

    line-height:
        1.15;
}


.taahirah-page
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


.taahirah-page
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

.taahirah-page
.c1-aside {

    position:
        sticky;

    top:
        120px;
}


.taahirah-page
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
        var(--tt-shadow) !important;
}


.taahirah-page
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


.taahirah-page
.c1-lessons
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.taahirah-page
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


.taahirah-page
.c1-points {

    display:
        grid;

    gap:
        10px;
}


.taahirah-page
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


.taahirah-page
.c1-points i {

    color:
        #e6c878;
}


/* ================================================================
   ENTREPRENEURSHIP SECTION
   ================================================================ */

.taahirah-page
.tt-enterprise-section {

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


.taahirah-page
.tt-enterprise-section::after {

    content: "";

    position:
        absolute;

    width:
        530px;

    height:
        530px;

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


.taahirah-page
.tt-enterprise-grid {

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


.taahirah-page
.tt-enterprise-copy
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.taahirah-page
.tt-enterprise-copy h2 {

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


.taahirah-page
.tt-enterprise-copy p {

    color:
        rgba(255,255,255,.73) !important;

    font-size:
        16px;

    line-height:
        1.85;
}


.taahirah-page
.tt-enterprise-cards {

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


.taahirah-page
.tt-enterprise-card {

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


.taahirah-page
.tt-enterprise-card i {

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


.taahirah-page
.tt-enterprise-card h3 {

    margin:
        0 0 8px;

    color:
        #ffffff !important;

    font-size:
        21px;
}


.taahirah-page
.tt-enterprise-card p {

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

.taahirah-page
.tt-section-heading {

    max-width:
        760px;

    margin-bottom:
        42px;
}


.taahirah-page
.tt-section-heading h2 {

    margin:
        13px 0;

    color:
        var(--tt-dark);

    font-size:
        clamp(
            38px,
            4vw,
            52px
        );

    line-height:
        1.08;
}


.taahirah-page
.tt-section-heading p {

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

.taahirah-page
.tt-video-section {

    background:
        #edf1ec !important;
}


.taahirah-page
.tt-video-card {

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
        var(--tt-border) !important;

    border-radius:
        30px !important;

    background:
        #ffffff !important;

    box-shadow:
        var(--tt-shadow) !important;
}


.taahirah-page
.tt-video-frame {

    position:
        relative;

    min-height:
        460px;

    overflow:
        hidden;

    background:
        #111b18;
}


.taahirah-page
.tt-video-frame iframe {

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


.taahirah-page
.tt-video-copy {

    display:
        flex;

    flex-direction:
        column;

    justify-content:
        center;

    padding:
        42px 35px;
}


.taahirah-page
.tt-video-copy h3 {

    margin:
        12px 0 14px;

    color:
        var(--tt-dark);

    font-size:
        30px;

    line-height:
        1.15;
}


.taahirah-page
.tt-video-copy p {

    margin:
        0 0 24px;

    color:
        #5f6c67;

    line-height:
        1.8;
}


.taahirah-page
.tt-video-meta {

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


.taahirah-page
.tt-video-meta span {

    display:
        flex;

    align-items:
        center;

    gap:
        10px;
}


.taahirah-page
.tt-video-meta i {

    width:
        18px;

    color:
        #b68d3d;

    text-align:
        center;
}


/* ================================================================
   RESOURCE
   ================================================================ */

.taahirah-page
.tt-resource-section {

    background:
        #fbfaf6 !important;
}


.taahirah-page
.tt-resource-card {

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
        var(--tt-border) !important;

    border-radius:
        30px !important;

    background:
        #ffffff !important;

    box-shadow:
        var(--tt-shadow) !important;
}


.taahirah-page
.tt-resource-preview {

    min-height:
        540px;

    background:
        #e9ece6;
}


.taahirah-page
.tt-resource-preview iframe {

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


.taahirah-page
.tt-resource-copy {

    display:
        flex;

    flex-direction:
        column;

    justify-content:
        center;

    padding:
        44px 38px;
}


.taahirah-page
.tt-resource-copy h3 {

    margin:
        13px 0 15px;

    color:
        var(--tt-dark);

    font-size:
        clamp(
            28px,
            2.5vw,
            35px
        );

    line-height:
        1.13;
}


.taahirah-page
.tt-resource-copy p {

    margin:
        0 0 24px;

    color:
        #5f6b67;

    font-size:
        16px;

    line-height:
        1.8;
}


.taahirah-page
.tt-resource-meta {

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


.taahirah-page
.tt-resource-meta span {

    display:
        flex;

    align-items:
        center;

    gap:
        11px;
}


.taahirah-page
.tt-resource-meta i {

    width:
        18px;

    color:
        #b68d3d;

    text-align:
        center;
}


.taahirah-page
.tt-resource-copy
.ac-btn {

    width:
        fit-content;
}


/* ================================================================
   GALLERY
   ================================================================ */

.taahirah-page
.tt-gallery-section {

    background:
        linear-gradient(
            180deg,
            #e8eee6,
            #f3f0e7
        ) !important;
}


.taahirah-page
.tt-gallery-grid {

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


.taahirah-page
.tt-gallery-item {

    margin:
        0;

    padding:
        6px;

    overflow:
        hidden;

    border:
        1px solid
        var(--tt-border);

    border-radius:
        23px;

    background:
        #ffffff;

    box-shadow:
        var(--tt-shadow);

    transition:
        transform .3s ease,
        box-shadow .3s ease;
}


.taahirah-page
.tt-gallery-item:hover {

    transform:
        translateY(-5px);

    box-shadow:
        0 22px 55px
        rgba(20,52,43,.13);
}


.taahirah-page
.tt-gallery-item a {

    display:
        block;

    aspect-ratio:
        4 / 3;

    overflow:
        hidden;

    border-radius:
        17px;
}


.taahirah-page
.tt-gallery-item img {

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


.taahirah-page
.tt-gallery-item:hover img {

    transform:
        scale(1.045);
}


/* ================================================================
   NAV
   ================================================================ */

.taahirah-page
.c1-cycle-nav {

    background:
        #e7ece4 !important;
}


.taahirah-page
.c1-cycle-nav
.ac-heading {

    margin-bottom:
        30px;
}


.taahirah-page
.c1-cycle-nav h2 {

    margin:
        12px 0;

    color:
        var(--tt-dark);

    font-size:
        clamp(
            34px,
            4vw,
            50px
        );
}


.taahirah-page
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


.taahirah-page
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
        var(--tt-border);

    border-radius:
        20px;

    background:
        rgba(255,255,255,.82);

    color:
        var(--tt-dark);

    text-decoration:
        none;

    box-shadow:
        0 10px 30px
        rgba(20,52,43,.05);

    transition:
        .25s ease;
}


.taahirah-page
.sc-chapter-links > a:hover {

    transform:
        translateY(-4px);

    background:
        #ffffff;

    box-shadow:
        var(--tt-shadow);
}


.taahirah-page
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


.taahirah-page
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

@media (max-width:1050px) {

    .taahirah-page
    .c1-hero-grid {

        grid-template-columns:
            1fr 330px;
    }


    .taahirah-page
    .c1-story-grid {

        grid-template-columns:
            1fr 290px;
    }


    .taahirah-page
    .tt-gallery-grid {

        grid-template-columns:
            repeat(2,minmax(0,1fr));
    }


    .taahirah-page
    .tt-resource-card {

        grid-template-columns:
            1fr;
    }


    .taahirah-page
    .tt-resource-preview,
    .taahirah-page
    .tt-resource-preview iframe {

        min-height:
            480px;
    }

}


@media (max-width:850px) {

    .taahirah-page
    .c1-hero {

        min-height:
            auto;

        padding-bottom:
            65px !important;
    }


    .taahirah-page
    .c1-hero-grid {

        grid-template-columns:
            1fr;
    }


    .taahirah-page
    .c1-visual {

        width:
            min(520px,100%);

        margin-inline:
            auto;

        transform:
            none;
    }


    .taahirah-page
    .c1-story-grid {

        grid-template-columns:
            1fr;
    }


    .taahirah-page
    .c1-aside {

        position:
            static;
    }


    .taahirah-page
    .tt-enterprise-grid {

        grid-template-columns:
            1fr;

        gap:
            38px;
    }


    .taahirah-page
    .tt-video-card {

        grid-template-columns:
            1fr;
    }


    .taahirah-page
    .tt-video-frame {

        min-height:
            auto;

        aspect-ratio:
            16 / 9;
    }

}


@media (max-width:650px) {

    .taahirah-page
    .c1-hero {

        border-radius:
            0 0 28px 28px;
    }


    .taahirah-page
    .c1-hero-copy {

        padding:
            30px 23px !important;

        border-radius:
            25px !important;
    }


    .taahirah-page
    .c1-hero-copy h1 {

        font-size:
            clamp(
                46px,
                13vw,
                64px
            ) !important;
    }


    .taahirah-page
    .c1-meta {

        flex-direction:
            column;

        align-items:
            flex-start;
    }


    .taahirah-page
    .ac-actions {

        flex-direction:
            column;
    }


    .taahirah-page
    .ac-btn {

        width:
            100%;
    }


    .taahirah-page
    .tt-enterprise-cards,
    .taahirah-page
    .tt-gallery-grid {

        grid-template-columns:
            1fr;
    }


    .taahirah-page
    .tt-resource-preview,
    .taahirah-page
    .tt-resource-preview iframe {

        min-height:
            410px;
    }


    .taahirah-page
    .tt-resource-copy {

        padding:
            30px 23px;
    }


    .taahirah-page
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
        taahirah-page
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
                    At Taahirah
                </span>

            </nav>



            <div class="c1-hero-grid">


                <div class="c1-hero-copy">


                    <span class="ac-eyebrow">

                        CYCLE 1 · SESSION 08

                    </span>


                    <h1>

                        At Taahirah

                    </h1>


                    <p class="c1-hero-lead">

                        Hazrat Khadija (RA),
                        enterprise,
                        ethical business
                        and the Sunnah
                        in everyday life.

                    </p>



                    <div class="c1-meta">


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            <b>
                                4 July 2025
                            </b>

                        </span>


                        <span>

                            <i class="fas fa-book-open"></i>

                            <b>
                                Cycle 1 · Session 08
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
                        data-fancybox="taahirah-poster"
                        href="<?php echo e(asset($posterImage)); ?>"
                    >

                        <img
                            src="<?php echo e(asset($posterImage)); ?>"
                            alt="At Taahirah event poster"
                        >

                    </a>


                    <figcaption>

                        At Taahirah ·
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

                        Hazrat Khadija (RA),
                        enterprise and
                        Sunnah in daily life.

                    </h2>


                    <p class="c1-lead">

                        Cycle 1 · Session 08

                    </p>


                    <p>

                        The eighth Seerat Club session,
                        held on 4 July 2025
                        at Shafqat Masjid,
                        began with a recap
                        of the early life
                        of Prophet Muhammad ﷺ.

                    </p>


                    <p>

                        Children were then introduced
                        to the life of
                        Hazrat Khadija (RA),
                        including her family
                        and professional background,
                        her first interaction with
                        Prophet Muhammad ﷺ
                        and her important role
                        in the early history of Islam.

                    </p>


                    <p>

                        The session highlighted
                        her generosity and support,
                        helping children understand
                        how wealth and enterprise
                        can be used responsibly
                        and purposefully.

                    </p>


                    <p>

                        Children were then introduced
                        to the concept of
                        an entrepreneur:
                        someone who identifies
                        a problem,
                        develops a creative solution
                        and builds something
                        useful around that idea.

                    </p>


                    <p>

                        The discussion connected
                        business with Islamic values,
                        showing children that
                        honesty, fairness,
                        responsibility and Sunnah
                        can be part of
                        everyday professional life.

                    </p>


                    <p>

                        The session also explored
                        the reconstruction
                        of the Kaaba
                        and how a disagreement
                        among the Quraysh
                        was peacefully resolved
                        through the wisdom
                        of Prophet Muhammad ﷺ.

                    </p>


                    <p>

                        The incident demonstrated
                        leadership, teamwork
                        and the ability to turn
                        a potentially difficult
                        situation into one
                        of cooperation.

                    </p>


                    <h3>

                        Lemonade Stand Challenge

                    </h3>


                    <p>

                        Younger children created
                        posters,
                        squeezed lemons
                        for fresh juice
                        and developed creative
                        marketing pitches.

                    </p>


                    <p>

                        The activity encouraged
                        teamwork,
                        confidence,
                        creativity
                        and basic business skills
                        in a practical
                        and enjoyable format.

                    </p>


                    <h3>

                        Mini CEO Challenge

                    </h3>


                    <p>

                        Older children were
                        divided into teams.

                        Each team brainstormed
                        a business idea,
                        completed a planning template,
                        designed a poster
                        and presented its idea
                        to a panel.

                    </p>


                    <p>

                        Community mentors
                        from different professional
                        backgrounds guided
                        the children through
                        the process and encouraged
                        them to think critically
                        and creatively.

                    </p>


                    <p>

                        Despite limited time,
                        the children presented
                        their ideas with enthusiasm.

                        Prizes recognised
                        different areas including
                        the lemonade stand,
                        business idea,
                        pitch and poster.

                    </p>


                    <p>

                        The session concluded
                        with children taking home
                        new experiences,
                        greater confidence
                        and practical lessons
                        in teamwork and enterprise.

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

                                Hazrat Khadija (RA)

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Ethical enterprise

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Wisdom and teamwork

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Confidence and creativity

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Sunnah in daily life

                            </span>


                        </div>


                    </div>


                </aside>


            </div>


        </div>


    </section>



    

    <section
        class="ac-section sc-svg-section tt-enterprise-section"
    >


        <div class="ac-container">


            <div class="tt-enterprise-grid">


                <div class="tt-enterprise-copy">


                    <span class="ac-eyebrow">

                        VALUES INTO ACTION

                    </span>


                    <h2>

                        Faith,
                        creativity
                        and enterprise.

                    </h2>


                    <p>

                        At Taahirah helped children
                        connect Islamic character
                        with real-world problem solving,
                        leadership and entrepreneurship.

                    </p>


                </div>



                <div class="tt-enterprise-cards">


                    <article class="tt-enterprise-card">


                        <i class="fas fa-heart"></i>


                        <h3>
                            Generosity
                        </h3>


                        <p>
                            Learning from
                            the support and generosity
                            of Hazrat Khadija (RA).
                        </p>


                    </article>



                    <article class="tt-enterprise-card">


                        <i class="fas fa-lightbulb"></i>


                        <h3>
                            Ideas
                        </h3>


                        <p>
                            Identifying problems
                            and thinking creatively
                            about solutions.
                        </p>


                    </article>



                    <article class="tt-enterprise-card">


                        <i class="fas fa-users"></i>


                        <h3>
                            Teamwork
                        </h3>


                        <p>
                            Developing ideas
                            together and learning
                            through collaboration.
                        </p>


                    </article>



                    <article class="tt-enterprise-card">


                        <i class="fas fa-handshake"></i>


                        <h3>
                            Ethical Business
                        </h3>


                        <p>
                            Connecting honesty,
                            fairness and Sunnah
                            with business dealings.
                        </p>


                    </article>


                </div>


            </div>


        </div>


    </section>



    

    <section
        class="ac-section sc-svg-section tt-video-section"
    >


        <div class="ac-container">


            <div class="tt-section-heading">


                <span class="ac-eyebrow">

                    EVENT VIDEO

                </span>


                <h2>

                    Watch At Taahirah.

                </h2>


                <p>

                    Revisit the original
                    Seerat Club session.

                </p>


            </div>



            <article class="ac-card tt-video-card">


                <div class="tt-video-frame">


                    <iframe
                        src="https://www.youtube.com/embed/5qEwdT1EEX0?rel=0"
                        title="At Taahirah event video"
                        loading="lazy"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen
                    ></iframe>


                </div>



                <div class="tt-video-copy">


                    <span class="ac-eyebrow">

                        SESSION VIDEO

                    </span>


                    <h3>

                        At Taahirah

                    </h3>


                    <p>

                        Revisit the learning,
                        business challenges
                        and teamwork moments
                        from Cycle 1 · Session 08.

                    </p>



                    <div class="tt-video-meta">


                        <span>

                            <i class="fas fa-book-open"></i>

                            Cycle 1 · Session 08

                        </span>


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            4 July 2025

                        </span>


                        <span>

                            <i class="fas fa-play-circle"></i>

                            Original event video

                        </span>


                    </div>



                    <a
                        class="ac-btn ac-btn-secondary"
                        href="https://youtu.be/5qEwdT1EEX0"
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
        class="ac-section sc-svg-section tt-resource-section"
    >


        <div class="ac-container">


            <div class="tt-section-heading">


                <span class="ac-eyebrow">

                    PRESENTATION & MATERIALS

                </span>


                <h2>

                    Continue learning
                    beyond the session.

                </h2>


                <p>

                    Explore the original
                    At Taahirah presentation
                    directly on the page.

                </p>


            </div>



            <article class="ac-card tt-resource-card">


                <div class="tt-resource-preview">


                    <iframe
                        src="https://drive.google.com/file/d/1IVxAE_gjxv4vmOeVjJQl_Ue5KKbGqyrV/preview"
                        title="At Taahirah PDF"
                        loading="lazy"
                        allow="autoplay"
                    ></iframe>


                </div>



                <div class="tt-resource-copy">


                    <span class="ac-eyebrow">

                        PRESENTATION SLIDE PACK

                    </span>


                    <h3>

                        At Taahirah

                    </h3>


                    <p>

                        Revisit the original
                        learning material
                        used during
                        this Seerat Club session.

                    </p>



                    <div class="tt-resource-meta">


                        <span>

                            <i class="far fa-file-pdf"></i>

                            At Taahirah PDF

                        </span>


                        <span>

                            <i class="fas fa-book-open"></i>

                            Cycle 1 · Session 08

                        </span>


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            4 July 2025

                        </span>


                    </div>



                    <a
                        class="ac-btn ac-btn-secondary"
                        href="https://drive.google.com/file/d/1IVxAE_gjxv4vmOeVjJQl_Ue5KKbGqyrV/view"
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
            class="ac-section sc-svg-section tt-gallery-section"
            id="event-gallery"
        >


            <div class="ac-container">


                <div class="tt-section-heading">


                    <span class="ac-eyebrow">

                        EVENT PICTURES

                    </span>


                    <h2>

                        Moments from
                        At Taahirah.

                    </h2>


                    <p>

                        Business challenges,
                        teamwork,
                        mentoring and memorable
                        moments from the session.

                    </p>


                </div>



                <div class="tt-gallery-grid">


                    <?php $__currentLoopData = $galleryImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                        <figure class="tt-gallery-item">


                            <a
                                data-fancybox="taahirah-gallery"
                                href="<?php echo e(asset($image)); ?>"
                            >

                                <img
                                    src="<?php echo e(asset($image)); ?>"
                                    alt="At Taahirah event photograph <?php echo e($index + 1); ?>"
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
                        'past-events.cycle-1.as-saadiq-al-ameen'
                    )); ?>"
                >


                    <small>

                        Previous chapter

                    </small>


                    <strong>

                        As Saadiq Al Ameen

                        <span aria-hidden="true">
                            ↗
                        </span>

                    </strong>


                </a>



                <a
                    href="<?php echo e(route(
                        'past-events.cycle-1.the-first-responders'
                    )); ?>"
                >


                    <small>

                        Next chapter

                    </small>


                    <strong>

                        The First Responders

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

<?php echo $__env->make("Layout.layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Seerat-Club\resources\views/past-events/cycle-1/at-taahirah.blade.php ENDPATH**/ ?>