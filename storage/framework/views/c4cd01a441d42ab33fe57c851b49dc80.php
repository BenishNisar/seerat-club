<?php $__env->startSection('title', 'The First Responders · Seerat Club'); ?>

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
        'assets/images/the-first-responders';

    $galleryFolder =
        $eventImageFolder . '/gallery';

    $galleryPath =
        public_path($galleryFolder);


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
    | DYNAMIC EVENT GALLERY
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
   THE FIRST RESPONDERS
   ================================================================ */

.first-responders-page {

    --fr-green:
        #173b31;

    --fr-dark:
        #102b24;

    --fr-gold:
        #c99d45;

    --fr-gold-light:
        #efdca6;

    --fr-cream:
        #f8f5ed;

    --fr-soft:
        #fbfaf6;

    --fr-muted:
        #5d6b66;

    --fr-border:
        rgba(23,59,49,.10);

    --fr-shadow:
        0 18px 55px
        rgba(20,52,43,.10);

    --fr-shadow-lg:
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

.first-responders-page h1,
.first-responders-page h2,
.first-responders-page h3,
.first-responders-page h4,
.first-responders-page h5,
.first-responders-page h6,
.first-responders-page .ac-btn,
.first-responders-page .ac-eyebrow,
.first-responders-page .sc-chapter-links strong {

    font-family:
        "Baloo 2",
        "SC Arabic",
        sans-serif !important;
}


.first-responders-page p,
.first-responders-page li,
.first-responders-page .c1-meta,
.first-responders-page .ac-breadcrumb,
.first-responders-page .fr-resource-meta,
.first-responders-page .sc-chapter-links small {

    font-family:
        "DM Sans",
        "SC Arabic",
        sans-serif !important;
}


/* ================================================================
   HERO
   ================================================================ */

.first-responders-page
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


/* No pale .92 overlay */

.first-responders-page
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
            rgba(10,39,32,.78) 0%,
            rgba(10,39,32,.49) 42%,
            rgba(10,39,32,.17) 72%,
            rgba(10,39,32,.05) 100%
        );
}


.first-responders-page
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


.first-responders-page
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

.first-responders-page
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


.first-responders-page
.ac-breadcrumb a {

    color:
        #ffffff !important;

    text-decoration:
        none;
}


.first-responders-page
.ac-breadcrumb a:hover {

    color:
        var(--fr-gold-light) !important;
}


/* ================================================================
   HERO GRID
   ================================================================ */

.first-responders-page
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

.first-responders-page
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
        var(--fr-shadow-lg) !important;

    backdrop-filter:
        none !important;

    -webkit-backdrop-filter:
        none !important;
}


.first-responders-page
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
            var(--fr-gold),
            #efd593
        );
}


.first-responders-page
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


.first-responders-page
.c1-hero-copy h1 {

    max-width:
        700px;

    margin:
        23px 0 22px !important;

    color:
        var(--fr-dark) !important;

    font-size:
        clamp(
            48px,
            5.5vw,
            78px
        ) !important;

    font-weight:
        700 !important;

    line-height:
        1.01 !important;

    letter-spacing:
        -.03em !important;
}


.first-responders-page
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

.first-responders-page
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


.first-responders-page
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


.first-responders-page
.c1-meta i {

    color:
        #aa8438;
}


/* ================================================================
   BUTTONS
   ================================================================ */

.first-responders-page
.ac-actions {

    display:
        flex;

    flex-wrap:
        wrap;

    gap:
        13px;
}


.first-responders-page
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
        var(--fr-gold) !important;

    border-radius:
        999px !important;

    background:
        var(--fr-gold) !important;

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


.first-responders-page
.ac-btn:hover {

    transform:
        translateY(-2px);

    background:
        #d5aa51 !important;
}


.first-responders-page
.ac-btn-secondary {

    border-color:
        rgba(23,59,49,.13) !important;

    background:
        #ffffff !important;

    color:
        var(--fr-dark) !important;

    box-shadow:
        0 10px 25px
        rgba(16,43,36,.07);
}


/* ================================================================
   POSTER
   ================================================================ */

.first-responders-page
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
        var(--fr-shadow-lg) !important;

    transform:
        rotate(1deg);

    transition:
        .3s ease;
}


.first-responders-page
.c1-visual:hover {

    transform:
        rotate(0)
        translateY(-5px);
}


.first-responders-page
.c1-visual a {

    display:
        block;

    overflow:
        hidden;

    border-radius:
        21px;
}


.first-responders-page
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


.first-responders-page
.c1-visual:hover img {

    transform:
        scale(1.025);
}


.first-responders-page
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

.first-responders-page
.c1-story {

    background:
        radial-gradient(
            circle at 8% 8%,
            rgba(201,157,69,.09),
            transparent 25%
        ),
        #f9f7f0 !important;
}


.first-responders-page
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


.first-responders-page
.c1-story-copy {

    max-width:
        800px;
}


.first-responders-page
.c1-story-copy h2 {

    margin:
        15px 0 22px;

    color:
        var(--fr-dark) !important;

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


.first-responders-page
.c1-story-copy h3 {

    margin:
        35px 0 12px;

    color:
        var(--fr-dark) !important;

    font-size:
        29px !important;

    line-height:
        1.15;
}


.first-responders-page
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


.first-responders-page
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

.first-responders-page
.c1-aside {

    position:
        sticky;

    top:
        120px;
}


.first-responders-page
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
        var(--fr-shadow) !important;
}


.first-responders-page
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


.first-responders-page
.c1-lessons
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.first-responders-page
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


.first-responders-page
.c1-points {

    display:
        grid;

    gap:
        10px;
}


.first-responders-page
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


.first-responders-page
.c1-points i {

    color:
        #e6c878;
}


/* ================================================================
   COURAGE / FIRST RESPONSE SECTION
   ================================================================ */

.first-responders-page
.fr-response-section {

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


.first-responders-page
.fr-response-section::after {

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


.first-responders-page
.fr-response-grid {

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


.first-responders-page
.fr-response-copy
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.first-responders-page
.fr-response-copy h2 {

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


.first-responders-page
.fr-response-copy p {

    color:
        rgba(255,255,255,.73) !important;

    font-size:
        16px;

    line-height:
        1.85;
}


.first-responders-page
.fr-response-cards {

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


.first-responders-page
.fr-response-card {

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


.first-responders-page
.fr-response-card i {

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


.first-responders-page
.fr-response-card h3 {

    margin:
        0 0 8px;

    color:
        #ffffff !important;

    font-size:
        21px;

    line-height:
        1.2;
}


.first-responders-page
.fr-response-card p {

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

.first-responders-page
.fr-section-heading {

    max-width:
        760px;

    margin-bottom:
        42px;
}


.first-responders-page
.fr-section-heading h2 {

    margin:
        13px 0;

    color:
        var(--fr-dark);

    font-size:
        clamp(
            38px,
            4vw,
            52px
        );

    line-height:
        1.08;
}


.first-responders-page
.fr-section-heading p {

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

.first-responders-page
.fr-resource-section {

    background:
        #fbfaf6 !important;
}


.first-responders-page
.fr-resource-card {

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
        var(--fr-border) !important;

    border-radius:
        30px !important;

    background:
        #ffffff !important;

    box-shadow:
        var(--fr-shadow) !important;
}


.first-responders-page
.fr-resource-preview {

    min-height:
        540px;

    background:
        #e9ece6;
}


.first-responders-page
.fr-resource-preview iframe {

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


.first-responders-page
.fr-resource-copy {

    display:
        flex;

    flex-direction:
        column;

    justify-content:
        center;

    padding:
        44px 38px;
}


.first-responders-page
.fr-resource-copy h3 {

    margin:
        13px 0 15px;

    color:
        var(--fr-dark);

    font-size:
        clamp(
            28px,
            2.5vw,
            35px
        );

    line-height:
        1.13;
}


.first-responders-page
.fr-resource-copy p {

    margin:
        0 0 24px;

    color:
        #5f6b67;

    font-size:
        16px;

    line-height:
        1.8;
}


.first-responders-page
.fr-resource-meta {

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


.first-responders-page
.fr-resource-meta span {

    display:
        flex;

    align-items:
        center;

    gap:
        11px;
}


.first-responders-page
.fr-resource-meta i {

    width:
        18px;

    color:
        #b68d3d;

    text-align:
        center;
}


.first-responders-page
.fr-resource-copy
.ac-btn {

    width:
        fit-content;
}


/* ================================================================
   GALLERY
   ================================================================ */

.first-responders-page
.fr-gallery-section {

    background:
        linear-gradient(
            180deg,
            #e8eee6,
            #f3f0e7
        ) !important;
}


.first-responders-page
.fr-gallery-grid {

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


.first-responders-page
.fr-gallery-item {

    margin:
        0;

    padding:
        6px;

    overflow:
        hidden;

    border:
        1px solid
        var(--fr-border);

    border-radius:
        23px;

    background:
        #ffffff;

    box-shadow:
        var(--fr-shadow);

    transition:
        transform .3s ease,
        box-shadow .3s ease;
}


.first-responders-page
.fr-gallery-item:hover {

    transform:
        translateY(-5px);

    box-shadow:
        0 22px 55px
        rgba(20,52,43,.13);
}


.first-responders-page
.fr-gallery-item a {

    display:
        block;

    aspect-ratio:
        4 / 3;

    overflow:
        hidden;

    border-radius:
        17px;
}


.first-responders-page
.fr-gallery-item img {

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


.first-responders-page
.fr-gallery-item:hover img {

    transform:
        scale(1.045);
}


/* ================================================================
   CYCLE NAVIGATION
   ================================================================ */

.first-responders-page
.c1-cycle-nav {

    background:
        #e7ece4 !important;
}


.first-responders-page
.c1-cycle-nav
.ac-heading {

    margin-bottom:
        30px;
}


.first-responders-page
.c1-cycle-nav h2 {

    margin:
        12px 0;

    color:
        var(--fr-dark);

    font-size:
        clamp(
            34px,
            4vw,
            50px
        );
}


.first-responders-page
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


.first-responders-page
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
        var(--fr-border);

    border-radius:
        20px;

    background:
        rgba(255,255,255,.82);

    color:
        var(--fr-dark);

    text-decoration:
        none;

    box-shadow:
        0 10px 30px
        rgba(20,52,43,.05);

    transition:
        .25s ease;
}


.first-responders-page
.sc-chapter-links > a:hover {

    transform:
        translateY(-4px);

    background:
        #ffffff;

    box-shadow:
        var(--fr-shadow);
}


.first-responders-page
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


.first-responders-page
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

    .first-responders-page
    .c1-hero-grid {

        grid-template-columns:
            1fr 330px;
    }


    .first-responders-page
    .c1-story-grid {

        grid-template-columns:
            1fr 290px;
    }


    .first-responders-page
    .fr-gallery-grid {

        grid-template-columns:
            repeat(
                2,
                minmax(0,1fr)
            );
    }


    .first-responders-page
    .fr-resource-card {

        grid-template-columns:
            1fr;
    }


    .first-responders-page
    .fr-resource-preview,
    .first-responders-page
    .fr-resource-preview iframe {

        min-height:
            480px;
    }

}


@media (max-width:850px) {

    .first-responders-page
    .c1-hero {

        min-height:
            auto;

        padding-bottom:
            65px !important;
    }


    .first-responders-page
    .c1-hero-grid {

        grid-template-columns:
            1fr;
    }


    .first-responders-page
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


    .first-responders-page
    .c1-story-grid {

        grid-template-columns:
            1fr;
    }


    .first-responders-page
    .c1-aside {

        position:
            static;
    }


    .first-responders-page
    .fr-response-grid {

        grid-template-columns:
            1fr;

        gap:
            38px;
    }

}


@media (max-width:650px) {

    .first-responders-page
    .c1-hero {

        border-radius:
            0 0 28px 28px;
    }


    .first-responders-page
    .c1-hero-copy {

        padding:
            30px 23px !important;

        border-radius:
            25px !important;
    }


    .first-responders-page
    .c1-hero-copy h1 {

        font-size:
            clamp(
                42px,
                12vw,
                60px
            ) !important;
    }


    .first-responders-page
    .c1-meta {

        flex-direction:
            column;

        align-items:
            flex-start;
    }


    .first-responders-page
    .ac-actions {

        flex-direction:
            column;
    }


    .first-responders-page
    .ac-btn {

        width:
            100%;
    }


    .first-responders-page
    .fr-response-cards,
    .first-responders-page
    .fr-gallery-grid {

        grid-template-columns:
            1fr;
    }


    .first-responders-page
    .fr-resource-preview,
    .first-responders-page
    .fr-resource-preview iframe {

        min-height:
            410px;
    }


    .first-responders-page
    .fr-resource-copy {

        padding:
            30px 23px;
    }


    .first-responders-page
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
        first-responders-page
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

                    The First Responders

                </span>

            </nav>



            <div class="c1-hero-grid">


                <div class="c1-hero-copy">


                    <span class="ac-eyebrow">

                        CYCLE 1 · SESSION 09

                    </span>


                    <h1>

                        The First
                        Responders

                    </h1>


                    <p class="c1-hero-lead">

                        Hearts that believed
                        when the world denied —
                        courage, faith
                        and readiness to help.

                    </p>



                    <div class="c1-meta">


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            <b>
                                2 August 2025
                            </b>

                        </span>


                        <span>

                            <i class="fas fa-book-open"></i>

                            <b>
                                Cycle 1 · Session 09
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
                        data-fancybox="first-responders-poster"
                        href="<?php echo e(asset($posterImage)); ?>"
                    >

                        <img
                            src="<?php echo e(asset($posterImage)); ?>"
                            alt="The First Responders event poster"
                        >

                    </a>


                    <figcaption>

                        The First Responders ·
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

                        Real heroes,
                        courageous faith
                        and readiness to help.

                    </h2>


                    <p class="c1-lead">

                        Cycle 1 · Session 09

                    </p>


                    <p>

                        The ninth Seerat Club session,
                        held on 2 August 2025
                        at Shafqat Masjid,
                        focused on
                        <strong>The First Responders</strong> —
                        the earliest believers
                        who accepted the call
                        of Prophet Muhammad ﷺ
                        with courage and conviction.

                    </p>


                    <p>

                        The session began
                        with a creative warm-up.

                        Children were asked
                        to imagine their
                        ideal superheroes,
                        including their powers,
                        gear and abilities.

                    </p>


                    <p>

                        This opened a discussion
                        about the difference
                        between fictional heroes
                        and people who show
                        real courage,
                        sacrifice and responsibility.

                    </p>


                    <p>

                        Children were shown
                        an example of an animal
                        stepping forward to protect
                        another during danger.

                        This became an analogy
                        for the
                        <strong>As Sābiqūn al Awwalūn</strong>,
                        the earliest companions
                        who stood with
                        Prophet Muhammad ﷺ
                        during times of uncertainty.

                    </p>


                    <h3>

                        The earliest believers

                    </h3>


                    <p>

                        Children learned about
                        noble companions whose
                        faith, loyalty and courage
                        made them remarkable examples.

                    </p>


                    <p>

                        <strong>Hazrat Ali (RA)</strong>
                        was discussed as one
                        of the earliest believers,
                        having grown up close
                        to Prophet Muhammad ﷺ.

                    </p>


                    <p>

                        <strong>Hazrat Abu Bakr (RA)</strong>
                        was explored as a
                        close companion whose
                        faith, loyalty and support
                        played an important role
                        in the earliest days of Islam.

                    </p>


                    <p>

                        <strong>Hazrat Zaid ibn Haritha (RA)</strong>
                        was also discussed
                        as one of the earliest
                        people to accept Islam
                        and as an example
                        of loyalty and devotion.

                    </p>


                    <p>

                        Children reflected
                        on qualities that
                        distinguished these
                        real heroes:
                        belief in Allah,
                        love for the Prophet ﷺ,
                        courage and willingness
                        to lead in goodness.

                    </p>


                    <h3>

                        Courage translated into action

                    </h3>


                    <p>

                        After Maghrib prayers,
                        the session moved
                        from Seerah-based inspiration
                        into practical life skills
                        through an interactive
                        first-response workshop.

                    </p>


                    <p>

                        Children were introduced
                        to basic first aid
                        and emergency-response concepts,
                        including how to respond
                        to fractures,
                        choking,
                        road-safety incidents
                        and electrical injuries.

                    </p>


                    <p>

                        The activity reinforced
                        an important lesson:
                        staying calm,
                        thinking clearly
                        and taking timely action
                        during an emergency
                        can make a meaningful difference.

                    </p>


                    <p>

                        By bringing together
                        the courage of the
                        earliest believers
                        and practical emergency
                        response skills,
                        children learned that
                        being a first responder
                        means being willing
                        to step forward
                        when someone needs help.

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

                                The earliest believers

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Courage and faith

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Leading in goodness

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Practical first aid

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Readiness to help others

                            </span>


                        </div>


                    </div>


                </aside>


            </div>


        </div>


    </section>



    

    <section
        class="ac-section sc-svg-section fr-response-section"
    >


        <div class="ac-container">


            <div class="fr-response-grid">


                <div class="fr-response-copy">


                    <span class="ac-eyebrow">

                        COURAGE IN ACTION

                    </span>


                    <h2>

                        A first responder
                        is someone who
                        steps forward.

                    </h2>


                    <p>

                        The session connected
                        the courage of the
                        earliest believers
                        with the responsibility
                        to remain calm,
                        act wisely
                        and help people
                        when they are in need.

                    </p>


                </div>



                <div class="fr-response-cards">


                    <article class="fr-response-card">


                        <i class="fas fa-heart"></i>


                        <h3>
                            Faith
                        </h3>


                        <p>

                            Standing firm
                            in belief even
                            when doing so
                            requires courage.

                        </p>


                    </article>



                    <article class="fr-response-card">


                        <i class="fas fa-shield-alt"></i>


                        <h3>
                            Courage
                        </h3>


                        <p>

                            Learning to step
                            forward instead
                            of remaining passive.

                        </p>


                    </article>



                    <article class="fr-response-card">


                        <i class="fas fa-first-aid"></i>


                        <h3>
                            First Aid
                        </h3>


                        <p>

                            Developing basic
                            emergency awareness
                            and practical skills.

                        </p>


                    </article>



                    <article class="fr-response-card">


                        <i class="fas fa-hands-helping"></i>


                        <h3>
                            Service
                        </h3>


                        <p>

                            Understanding that
                            helping others is
                            part of strong character.

                        </p>


                    </article>


                </div>


            </div>


        </div>


    </section>



    

    <section
        class="ac-section sc-svg-section fr-resource-section"
    >


        <div class="ac-container">


            <div class="fr-section-heading">


                <span class="ac-eyebrow">

                    PRESENTATION & MATERIALS

                </span>


                <h2>

                    Continue learning
                    beyond the session.

                </h2>


                <p>

                    Explore the original
                    learning material associated
                    with The First Responders.

                </p>


            </div>



            <article class="ac-card fr-resource-card">


                <div class="fr-resource-preview">


                    <iframe
                        src="https://drive.google.com/file/d/1IVxAE_gjxv4vmOeVjJQl_Ue5KKbGqyrV/preview"
                        title="The First Responders PDF"
                        loading="lazy"
                        allow="autoplay"
                    ></iframe>


                </div>



                <div class="fr-resource-copy">


                    <span class="ac-eyebrow">

                        PRESENTATION SLIDE PACK

                    </span>


                    <h3>

                        The First Responders

                    </h3>


                    <p>

                        View the original
                        presentation directly
                        on the page
                        or continue to
                        the complete material
                        in Google Drive.

                    </p>



                    <div class="fr-resource-meta">


                        <span>

                            <i class="far fa-file-pdf"></i>

                            The First Responders PDF

                        </span>


                        <span>

                            <i class="fas fa-book-open"></i>

                            Cycle 1 · Session 09

                        </span>


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            2 August 2025

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
            class="ac-section sc-svg-section fr-gallery-section"
            id="event-gallery"
        >


            <div class="ac-container">


                <div class="fr-section-heading">


                    <span class="ac-eyebrow">

                        EVENT PICTURES

                    </span>


                    <h2>

                        Moments from
                        The First Responders.

                    </h2>


                    <p>

                        Storytelling,
                        reflection
                        and practical first-aid
                        activities from
                        the original session.

                    </p>


                </div>



                <div class="fr-gallery-grid">


                    <?php $__currentLoopData = $galleryImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                        <figure class="fr-gallery-item">


                            <a
                                data-fancybox="first-responders-gallery"
                                href="<?php echo e(asset($image)); ?>"
                            >

                                <img
                                    src="<?php echo e(asset($image)); ?>"
                                    alt="The First Responders event photograph <?php echo e($index + 1); ?>"
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
                        'past-events.cycle-1.at-taahirah'
                    )); ?>"
                >


                    <small>

                        Previous chapter

                    </small>


                    <strong>

                        At Taahirah

                        <span aria-hidden="true">
                            ↗
                        </span>

                    </strong>


                </a>



                <a
                    href="<?php echo e(route(
                        'past-events.cycle-1.isra-miraj'
                    )); ?>"
                >


                    <small>

                        Next chapter

                    </small>


                    <strong>

                        Isra &amp; Mi’raj

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

<?php echo $__env->make("Layout.layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Seerat-Club\resources\views/past-events/cycle-1/the-first-responders.blade.php ENDPATH**/ ?>