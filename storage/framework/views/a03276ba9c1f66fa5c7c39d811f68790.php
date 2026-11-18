<?php $__env->startSection('title', 'Isra & Mi’raj · Seerat Club'); ?>

<?php $__env->startSection("Content"); ?>


<link
    rel="stylesheet"
    href="<?php echo e(asset('assets/css/past-events-premium.css')); ?>"
>


<style>

/* ================================================================
   ISRA & MI'RAJ
   STATIC PREMIUM EVENT PAGE
   ================================================================ */

.isra-page {

    --im-green:
        #173b31;

    --im-dark:
        #102b24;

    --im-gold:
        #c99d45;

    --im-gold-light:
        #efdca6;

    --im-cream:
        #f8f5ed;

    --im-soft:
        #fbfaf6;

    --im-muted:
        #5d6b66;

    --im-border:
        rgba(23,59,49,.10);

    --im-shadow:
        0 18px 55px
        rgba(20,52,43,.10);

    --im-shadow-lg:
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

.isra-page h1,
.isra-page h2,
.isra-page h3,
.isra-page h4,
.isra-page h5,
.isra-page h6,
.isra-page .ac-btn,
.isra-page .ac-eyebrow,
.isra-page .sc-chapter-links strong {

    font-family:
        "Baloo 2",
        "SC Arabic",
        sans-serif !important;
}


.isra-page p,
.isra-page li,
.isra-page .c1-meta,
.isra-page .ac-breadcrumb,
.isra-page .im-video-meta,
.isra-page .im-resource-meta,
.isra-page .sc-chapter-links small {

    font-family:
        "DM Sans",
        "SC Arabic",
        sans-serif !important;
}


/* ================================================================
   HERO
   ================================================================ */

.isra-page
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


/* DARK DIRECTIONAL OVERLAY */

.isra-page
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


.isra-page
.c1-hero::after {

    content: "";

    position:
        absolute;

    width:
        500px;

    height:
        500px;

    right:
        -170px;

    top:
        -180px;

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


.isra-page
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

.isra-page
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


.isra-page
.ac-breadcrumb a {

    color:
        #ffffff !important;

    text-decoration:
        none;
}


.isra-page
.ac-breadcrumb a:hover {

    color:
        var(--im-gold-light) !important;
}


/* ================================================================
   HERO GRID
   ================================================================ */

.isra-page
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

.isra-page
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
        var(--im-shadow-lg) !important;

    backdrop-filter:
        none !important;

    -webkit-backdrop-filter:
        none !important;
}


.isra-page
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
            var(--im-gold),
            #efd593
        );
}


.isra-page
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


.isra-page
.c1-hero-copy h1 {

    max-width:
        680px;

    margin:
        23px 0 22px !important;

    color:
        var(--im-dark) !important;

    font-size:
        clamp(
            52px,
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


.isra-page
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

.isra-page
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


.isra-page
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


.isra-page
.c1-meta i {

    color:
        #aa8438;
}


/* ================================================================
   BUTTONS
   ================================================================ */

.isra-page
.ac-actions {

    display:
        flex;

    flex-wrap:
        wrap;

    gap:
        13px;
}


.isra-page
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
        var(--im-gold) !important;

    border-radius:
        999px !important;

    background:
        var(--im-gold) !important;

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


.isra-page
.ac-btn:hover {

    transform:
        translateY(-2px);

    background:
        #d5aa51 !important;
}


.isra-page
.ac-btn-secondary {

    border-color:
        rgba(23,59,49,.13) !important;

    background:
        #ffffff !important;

    color:
        var(--im-dark) !important;

    box-shadow:
        0 10px 25px
        rgba(16,43,36,.07);
}


/* ================================================================
   POSTER
   ================================================================ */

.isra-page
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
        var(--im-shadow-lg) !important;

    transform:
        rotate(1deg);

    transition:
        .3s ease;
}


.isra-page
.c1-visual:hover {

    transform:
        rotate(0)
        translateY(-5px);
}


.isra-page
.c1-visual a {

    display:
        block;

    overflow:
        hidden;

    border-radius:
        21px;
}


.isra-page
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


.isra-page
.c1-visual:hover img {

    transform:
        scale(1.025);
}


.isra-page
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

.isra-page
.c1-story {

    background:
        radial-gradient(
            circle at 8% 8%,
            rgba(201,157,69,.09),
            transparent 25%
        ),
        #f9f7f0 !important;
}


.isra-page
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


.isra-page
.c1-story-copy {

    max-width:
        800px;
}


.isra-page
.c1-story-copy h2 {

    margin:
        15px 0 22px;

    color:
        var(--im-dark) !important;

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


.isra-page
.c1-story-copy h3 {

    margin:
        35px 0 12px;

    color:
        var(--im-dark) !important;

    font-size:
        29px !important;

    font-weight:
        700 !important;

    line-height:
        1.15;
}


.isra-page
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


.isra-page
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

.isra-page
.c1-aside {

    position:
        sticky;

    top:
        120px;
}


.isra-page
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
        var(--im-shadow) !important;
}


.isra-page
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


.isra-page
.c1-lessons
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.isra-page
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


.isra-page
.c1-points {

    display:
        grid;

    gap:
        10px;
}


.isra-page
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


.isra-page
.c1-points i {

    color:
        #e6c878;
}


/* ================================================================
   HOPE / SALAH / AQSA
   ================================================================ */

.isra-page
.im-meaning-section {

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


.isra-page
.im-meaning-section::after {

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


.isra-page
.im-meaning-grid {

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


.isra-page
.im-meaning-copy
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.isra-page
.im-meaning-copy h2 {

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


.isra-page
.im-meaning-copy p {

    color:
        rgba(255,255,255,.73) !important;

    font-size:
        16px;

    line-height:
        1.85;
}


.isra-page
.im-meaning-cards {

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


.isra-page
.im-meaning-card {

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


.isra-page
.im-meaning-card i {

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


.isra-page
.im-meaning-card h3 {

    margin:
        0 0 8px;

    color:
        #ffffff !important;

    font-size:
        21px;

    line-height:
        1.2;
}


.isra-page
.im-meaning-card p {

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

.isra-page
.im-section-heading {

    max-width:
        760px;

    margin-bottom:
        42px;
}


.isra-page
.im-section-heading h2 {

    margin:
        13px 0;

    color:
        var(--im-dark);

    font-size:
        clamp(
            38px,
            4vw,
            52px
        );

    line-height:
        1.08;
}


.isra-page
.im-section-heading p {

    color:
        #64716c;

    font-size:
        16px;

    line-height:
        1.8;
}


/* ================================================================
   VIDEOS
   ================================================================ */

.isra-page
.im-video-section {

    background:
        #edf1ec !important;
}


.isra-page
.im-video-grid {

    display:
        grid;

    grid-template-columns:
        repeat(
            2,
            minmax(0,1fr)
        );

    gap:
        26px;
}


.isra-page
.im-video-card {

    overflow:
        hidden;

    padding:
        0 !important;

    border:
        1px solid
        var(--im-border) !important;

    border-radius:
        28px !important;

    background:
        #ffffff !important;

    box-shadow:
        var(--im-shadow) !important;

    transition:
        .3s ease;
}


.isra-page
.im-video-card:hover {

    transform:
        translateY(-4px);
}


.isra-page
.im-video-frame {

    position:
        relative;

    width:
        100%;

    aspect-ratio:
        16 / 9;

    overflow:
        hidden;

    background:
        #111b18;
}


.isra-page
.im-video-frame iframe {

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


.isra-page
.im-video-copy {

    padding:
        29px;
}


.isra-page
.im-video-copy h3 {

    margin:
        10px 0 11px;

    color:
        var(--im-dark);

    font-size:
        28px;

    line-height:
        1.15;
}


.isra-page
.im-video-copy p {

    margin:
        0 0 22px;

    color:
        #61706a;

    font-size:
        15px;

    line-height:
        1.75;
}


.isra-page
.im-video-meta {

    display:
        flex;

    flex-wrap:
        wrap;

    gap:
        9px;
}


.isra-page
.im-video-meta span {

    display:
        inline-flex;

    align-items:
        center;

    gap:
        7px;

    padding:
        8px 11px;

    border-radius:
        999px;

    background:
        #f3f0e6;

    color:
        #596762;

    font-size:
        12px;
}


.isra-page
.im-video-meta i {

    color:
        #b28a3a;
}


/* ================================================================
   RESOURCE
   ================================================================ */

.isra-page
.im-resource-section {

    background:
        #fbfaf6 !important;
}


.isra-page
.im-resource-card {

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
        var(--im-border) !important;

    border-radius:
        30px !important;

    background:
        #ffffff !important;

    box-shadow:
        var(--im-shadow) !important;
}


.isra-page
.im-resource-preview {

    min-height:
        540px;

    background:
        #e9ece6;
}


.isra-page
.im-resource-preview iframe {

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


.isra-page
.im-resource-copy {

    display:
        flex;

    flex-direction:
        column;

    justify-content:
        center;

    padding:
        44px 38px;
}


.isra-page
.im-resource-copy h3 {

    margin:
        13px 0 15px;

    color:
        var(--im-dark);

    font-size:
        clamp(
            28px,
            2.5vw,
            35px
        );

    line-height:
        1.13;
}


.isra-page
.im-resource-copy p {

    margin:
        0 0 24px;

    color:
        #5f6b67;

    font-size:
        16px;

    line-height:
        1.8;
}


.isra-page
.im-resource-meta {

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


.isra-page
.im-resource-meta span {

    display:
        flex;

    align-items:
        center;

    gap:
        11px;
}


.isra-page
.im-resource-meta i {

    width:
        18px;

    color:
        #b68d3d;

    text-align:
        center;
}


.isra-page
.im-resource-copy
.ac-btn {

    width:
        fit-content;
}


/* ================================================================
   GALLERY
   ================================================================ */

.isra-page
.im-gallery-section {

    background:
        linear-gradient(
            180deg,
            #e8eee6,
            #f3f0e7
        ) !important;
}


.isra-page
.im-gallery-grid {

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


.isra-page
.im-gallery-item {

    margin:
        0;

    padding:
        6px;

    overflow:
        hidden;

    border:
        1px solid
        var(--im-border);

    border-radius:
        23px;

    background:
        #ffffff;

    box-shadow:
        var(--im-shadow);

    transition:
        transform .3s ease,
        box-shadow .3s ease;
}


.isra-page
.im-gallery-item:hover {

    transform:
        translateY(-5px);

    box-shadow:
        0 22px 55px
        rgba(20,52,43,.13);
}


.isra-page
.im-gallery-item a {

    display:
        block;

    aspect-ratio:
        4 / 3;

    overflow:
        hidden;

    border-radius:
        17px;
}


.isra-page
.im-gallery-item img {

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


.isra-page
.im-gallery-item:hover img {

    transform:
        scale(1.045);
}


/* ================================================================
   CYCLE NAVIGATION
   ================================================================ */

.isra-page
.c1-cycle-nav {

    background:
        #e7ece4 !important;
}


.isra-page
.c1-cycle-nav
.ac-heading {

    margin-bottom:
        30px;
}


.isra-page
.c1-cycle-nav h2 {

    margin:
        12px 0;

    color:
        var(--im-dark);

    font-size:
        clamp(
            34px,
            4vw,
            50px
        );
}


.isra-page
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


.isra-page
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
        var(--im-border);

    border-radius:
        20px;

    background:
        rgba(255,255,255,.82);

    color:
        var(--im-dark);

    text-decoration:
        none;

    box-shadow:
        0 10px 30px
        rgba(20,52,43,.05);

    transition:
        .25s ease;
}


.isra-page
.sc-chapter-links > a:hover {

    transform:
        translateY(-4px);

    background:
        #ffffff;

    box-shadow:
        var(--im-shadow);
}


.isra-page
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


.isra-page
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

    .isra-page
    .c1-hero-grid {

        grid-template-columns:
            1fr 330px;
    }


    .isra-page
    .c1-story-grid {

        grid-template-columns:
            1fr 290px;
    }


    .isra-page
    .im-resource-card {

        grid-template-columns:
            1fr;
    }


    .isra-page
    .im-resource-preview,
    .isra-page
    .im-resource-preview iframe {

        min-height:
            480px;
    }

}


@media (max-width:850px) {

    .isra-page
    .c1-hero {

        min-height:
            auto;

        padding-bottom:
            65px !important;
    }


    .isra-page
    .c1-hero-grid {

        grid-template-columns:
            1fr;
    }


    .isra-page
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


    .isra-page
    .c1-story-grid {

        grid-template-columns:
            1fr;
    }


    .isra-page
    .c1-aside {

        position:
            static;
    }


    .isra-page
    .im-meaning-grid {

        grid-template-columns:
            1fr;

        gap:
            38px;
    }


    .isra-page
    .im-video-grid {

        grid-template-columns:
            1fr;
    }


    .isra-page
    .im-gallery-grid {

        grid-template-columns:
            repeat(
                2,
                minmax(0,1fr)
            );
    }

}


@media (max-width:650px) {

    .isra-page
    .c1-hero {

        border-radius:
            0 0 28px 28px;
    }


    .isra-page
    .c1-hero-copy {

        padding:
            30px 23px !important;

        border-radius:
            25px !important;
    }


    .isra-page
    .c1-hero-copy h1 {

        font-size:
            clamp(
                44px,
                13vw,
                62px
            ) !important;
    }


    .isra-page
    .c1-meta {

        flex-direction:
            column;

        align-items:
            flex-start;
    }


    .isra-page
    .ac-actions {

        flex-direction:
            column;
    }


    .isra-page
    .ac-btn {

        width:
            100%;
    }


    .isra-page
    .im-meaning-cards,
    .isra-page
    .im-gallery-grid {

        grid-template-columns:
            1fr;
    }


    .isra-page
    .im-resource-preview,
    .isra-page
    .im-resource-preview iframe {

        min-height:
            410px;
    }


    .isra-page
    .im-resource-copy {

        padding:
            30px 23px;
    }


    .isra-page
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
        isra-page
    "
>


    

    <section
        class="ac-masthead c1-hero"
        style="
            background-image:
                url('<?php echo e(asset('assets/images/isra-miraj/hero.jpg')); ?>');
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

                    Isra &amp; Mi’raj

                </span>

            </nav>



            <div class="c1-hero-grid">


                <div class="c1-hero-copy">


                    <span class="ac-eyebrow">

                        CYCLE 1 · SESSION 10

                    </span>


                    <h1>

                        Isra &amp;
                        Mi’raj

                    </h1>


                    <p class="c1-hero-lead">

                        Hope through hardship,
                        the gift of Salah
                        and our connection
                        with Masjid al Aqsa.

                    </p>



                    <div class="c1-meta">


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            <b>
                                6 September 2025
                            </b>

                        </span>


                        <span>

                            <i class="fas fa-book-open"></i>

                            <b>
                                Cycle 1 · Session 10
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
                        data-fancybox="isra-poster"
                        href="<?php echo e(asset('assets/images/isra-miraj/poster.png')); ?>"
                    >

                        <img
                            src="<?php echo e(asset('assets/images/isra-miraj/poster.png')); ?>"
                            alt="Isra and Mi’raj event poster"
                        >

                    </a>


                    <figcaption>

                        Isra &amp; Mi’raj ·
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

                        Hope through hardship,
                        Salah and
                        Masjid al Aqsa.

                    </h2>


                    <p class="c1-lead">

                        Cycle 1 · Session 10

                    </p>


                    <p>

                        The tenth Seerat Club session,
                        Isra &amp; Mi’raj,
                        was held on
                        6 September 2025
                        at Shafqat Masjid,
                        from Asr to Isha.

                    </p>


                    <p>

                        Our Seerat journey continued
                        with a focus on the
                        difficulties faced by
                        Prophet Muhammad ﷺ
                        in Makkah during
                        the early years
                        of Prophethood.

                    </p>


                    <h3>

                        Trials in Makkah

                    </h3>


                    <p>

                        Children learned about
                        the struggles of
                        early Muslim converts
                        such as Hazrat Bilal (RA),
                        the first migration
                        of Muslims to Habsha,
                        and the social boycott
                        in Sha‘ib Abi Talib.

                    </p>


                    <p>

                        They also reflected
                        on the passing away
                        of Hazrat Khadija (RA)
                        and Abu Talib,
                        marking the Year of Sorrow,
                        Aam ul Huzn,
                        followed by the
                        painful rejection experienced
                        by Prophet Muhammad ﷺ
                        at Taif.

                    </p>


                    <p>

                        Through these events,
                        children were reminded
                        that it is natural
                        to feel sadness.

                        Even Prophet Muhammad ﷺ
                        went through deep trials,
                        yet he continued
                        to place his hope
                        and trust in Allah.

                    </p>


                    <h3>

                        The Journey of
                        Isra &amp; Mi’raj

                    </h3>


                    <p>

                        The session then explored
                        the miraculous journey
                        of Isra &amp; Mi’raj,
                        where Masjid al Aqsa
                        played a central role.

                    </p>


                    <p>

                        Children learned about
                        the gift of Salah
                        and how prayer creates
                        a direct connection
                        with Allah,
                        especially during
                        moments of hardship.

                    </p>


                    <p>

                        The importance of
                        Masjid al Aqsa
                        and Muslim brotherhood
                        was also emphasized,
                        helping children understand
                        their connection
                        with the wider Ummah.

                    </p>


                    <h3>

                        Masjid al Aqsa
                        Leather Craft

                    </h3>


                    <p>

                        Younger children participated
                        in an interactive
                        leather craft activity
                        based on Masjid al Aqsa.

                    </p>


                    <p>

                        Children received
                        DIY kits,
                        blending education
                        with play while introducing
                        creativity,
                        problem solving
                        and the use
                        of natural materials
                        through a STEAM-based approach.

                    </p>


                    <h3>

                        Model United Nations

                    </h3>


                    <p>

                        Older children aged
                        eight and above
                        participated in a
                        Model United Nations
                        activity focused on Palestine.

                    </p>


                    <p>

                        Children first received
                        a briefing on
                        the history of Palestine
                        and the situation
                        discussed during
                        the original session.

                    </p>


                    <p>

                        Teams were assigned
                        different countries
                        and,
                        with guidance from mentors,
                        prepared speeches
                        and proposed solutions
                        aligned with their
                        assigned country's position.

                    </p>


                    <p>

                        Through role play,
                        children acted
                        as country delegates,
                        presented their positions
                        and debated possible solutions.

                        The activity developed
                        teamwork,
                        confidence,
                        critical thinking
                        and communication skills.

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

                                Hope through hardship

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Isra &amp; Mi’raj

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                The gift of Salah

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Masjid al Aqsa

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Palestine and the Ummah

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Confidence and teamwork

                            </span>


                        </div>


                    </div>


                </aside>


            </div>


        </div>


    </section>



    

    <section
        class="ac-section sc-svg-section im-meaning-section"
    >


        <div class="ac-container">


            <div class="im-meaning-grid">


                <div class="im-meaning-copy">


                    <span class="ac-eyebrow">

                        HOPE · SALAH · UMMAH

                    </span>


                    <h2>

                        Hardship does not
                        mean the journey
                        has ended.

                    </h2>


                    <p>

                        Isra &amp; Mi’raj helped
                        children connect difficult
                        moments in the Seerah
                        with hope,
                        worship,
                        resilience
                        and responsibility
                        towards the wider Ummah.

                    </p>


                </div>



                <div class="im-meaning-cards">


                    <article class="im-meaning-card">


                        <i class="fas fa-heart"></i>


                        <h3>
                            Hope
                        </h3>


                        <p>

                            Learning to keep
                            trust in Allah
                            through difficult moments.

                        </p>


                    </article>



                    <article class="im-meaning-card">


                        <i class="fas fa-star"></i>


                        <h3>
                            Salah
                        </h3>


                        <p>

                            Understanding prayer
                            as a direct connection
                            with Allah.

                        </p>


                    </article>



                    <article class="im-meaning-card">


                        <i class="fas fa-mosque"></i>


                        <h3>
                            Masjid al Aqsa
                        </h3>


                        <p>

                            Learning about
                            its importance
                            within the
                            Seerah journey.

                        </p>


                    </article>



                    <article class="im-meaning-card">


                        <i class="fas fa-users"></i>


                        <h3>
                            The Ummah
                        </h3>


                        <p>

                            Building awareness
                            of responsibility,
                            brotherhood
                            and connection.

                        </p>


                    </article>


                </div>


            </div>


        </div>


    </section>



    

    <section
        class="ac-section sc-svg-section im-video-section"
    >


        <div class="ac-container">


            <div class="im-section-heading">


                <span class="ac-eyebrow">

                    SESSION VIDEOS

                </span>


                <h2>

                    Watch Isra &amp; Mi’raj.

                </h2>


                <p>

                    Revisit videos connected
                    with this Seerat Club session.

                </p>


            </div>



            <div class="im-video-grid">


                

                <article class="ac-card im-video-card">


                    <div class="im-video-frame">


                        <iframe
                            src="https://www.youtube.com/embed/TvYgazAjfYE?rel=0"
                            title="Isra and Mi’raj Session Video 1"
                            loading="lazy"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>


                    </div>



                    <div class="im-video-copy">


                        <span class="ac-eyebrow">

                            SESSION VIDEO 01

                        </span>


                        <h3>

                            Isra &amp; Mi’raj

                        </h3>


                        <p>

                            Moments and learning
                            from the original
                            Seerat Club session.

                        </p>


                        <div class="im-video-meta">


                            <span>

                                <i class="fas fa-book-open"></i>

                                Session 10

                            </span>


                            <span>

                                <i class="far fa-calendar-alt"></i>

                                6 Sep 2025

                            </span>


                        </div>


                    </div>


                </article>



                

                <article class="ac-card im-video-card">


                    <div class="im-video-frame">


                        <iframe
                            src="https://www.youtube.com/embed/mntspCRY1BI?rel=0"
                            title="Isra and Mi’raj Session Video 2"
                            loading="lazy"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>


                    </div>



                    <div class="im-video-copy">


                        <span class="ac-eyebrow">

                            SESSION VIDEO 02

                        </span>


                        <h3>

                            Isra &amp; Mi’raj

                        </h3>


                        <p>

                            Continue exploring
                            moments and activities
                            from this session.

                        </p>


                        <div class="im-video-meta">


                            <span>

                                <i class="fas fa-play-circle"></i>

                                Original session video

                            </span>


                            <span>

                                <i class="fas fa-book-open"></i>

                                Cycle 1

                            </span>


                        </div>


                    </div>


                </article>


            </div>


        </div>


    </section>



    

    <section
        class="ac-section sc-svg-section im-resource-section"
    >


        <div class="ac-container">


            <div class="im-section-heading">


                <span class="ac-eyebrow">

                    PRESENTATION & MATERIALS

                </span>


                <h2>

                    Continue learning
                    beyond the session.

                </h2>


                <p>

                    Explore the original
                    Isra &amp; Mi’raj
                    presentation directly
                    on the page.

                </p>


            </div>



            <article class="ac-card im-resource-card">


                <div class="im-resource-preview">


                    <iframe
                        src="https://drive.google.com/file/d/1fhjzruxSEHOi2OL6Pg0jKLVZM_CIVlIQ/preview"
                        title="Isra and Mi’raj PDF"
                        loading="lazy"
                        allow="autoplay"
                    ></iframe>


                </div>



                <div class="im-resource-copy">


                    <span class="ac-eyebrow">

                        PRESENTATION SLIDE PACK

                    </span>


                    <h3>

                        Isra &amp; Mi’raj

                    </h3>


                    <p>

                        Revisit the original
                        presentation from
                        Cycle 1 · Session 10
                        or open the complete
                        material in Google Drive.

                    </p>



                    <div class="im-resource-meta">


                        <span>

                            <i class="far fa-file-pdf"></i>

                            Isra &amp; Mi’raj PDF

                        </span>


                        <span>

                            <i class="fas fa-book-open"></i>

                            Cycle 1 · Session 10

                        </span>


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            6 September 2025

                        </span>


                    </div>



                    <a
                        class="ac-btn ac-btn-secondary"
                        href="https://drive.google.com/file/d/1fhjzruxSEHOi2OL6Pg0jKLVZM_CIVlIQ/view"
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



    

    <section
        class="ac-section sc-svg-section im-gallery-section"
        id="event-gallery"
    >


        <div class="ac-container">


            <div class="im-section-heading">


                <span class="ac-eyebrow">

                    EVENT PICTURES

                </span>


                <h2>

                    Moments from
                    Isra &amp; Mi’raj.

                </h2>


                <p>

                    Storytelling,
                    reflection
                    and activities
                    from this
                    Seerat Club session.

                </p>


            </div>



            <div class="im-gallery-grid">


                

                <figure class="im-gallery-item">


                    <a
                        data-fancybox="isra-miraj-gallery"
                        href="<?php echo e(asset('assets/images/isra-miraj/gallery/g1.jpg')); ?>"
                    >

                        <img
                            src="<?php echo e(asset('assets/images/isra-miraj/gallery/g1.jpg')); ?>"
                            alt="Isra and Mi’raj event photograph 1"
                            loading="lazy"
                            decoding="async"
                        >

                    </a>


                </figure>



                

                <figure class="im-gallery-item">


                    <a
                        data-fancybox="isra-miraj-gallery"
                        href="<?php echo e(asset('assets/images/isra-miraj/gallery/g2.jpg')); ?>"
                    >

                        <img
                            src="<?php echo e(asset('assets/images/isra-miraj/gallery/g2.jpg')); ?>"
                            alt="Isra and Mi’raj event photograph 2"
                            loading="lazy"
                            decoding="async"
                        >

                    </a>


                </figure>



                

                <figure class="im-gallery-item">


                    <a
                        data-fancybox="isra-miraj-gallery"
                        href="<?php echo e(asset('assets/images/isra-miraj/gallery/g3.jpg')); ?>"
                    >

                        <img
                            src="<?php echo e(asset('assets/images/isra-miraj/gallery/g3.jpg')); ?>"
                            alt="Isra and Mi’raj event photograph 3"
                            loading="lazy"
                            decoding="async"
                        >

                    </a>


                </figure>


            </div>


        </div>


    </section>



    

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
                        'past-events.cycle-1.the-first-responders'
                    )); ?>"
                >


                    <small>

                        Previous chapter

                    </small>


                    <strong>

                        The First Responders

                        <span aria-hidden="true">
                            ↗
                        </span>

                    </strong>


                </a>



                <a
                    href="<?php echo e(route(
                        'past-events.cycle-1.hijrat-to-medina'
                    )); ?>"
                >


                    <small>

                        Next chapter

                    </small>


                    <strong>

                        Hijrat to Medina

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

<?php echo $__env->make("Layout.layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Seerat-Club\resources\views/past-events/cycle-1/isra-miraj.blade.php ENDPATH**/ ?>