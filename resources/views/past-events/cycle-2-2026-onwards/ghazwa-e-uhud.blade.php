@extends("Layout.layout")

@section('title', 'Ghazwa e Uhud · Seerat Club')

@section("Content")


<link
    rel="stylesheet"
    href="{{ asset('assets/css/cycle2-event-pages.css') }}"
>

<link
    rel="stylesheet"
    href="{{ asset('assets/css/past-events-premium.css') }}"
>


<style>

/* ================================================================
   GHAZWA E UHUD
   STATIC PREMIUM EVENT PAGE
   ================================================================ */

.uhud-premium-page {

    --uh-green: #173b31;
    --uh-dark: #102b24;
    --uh-gold: #c99d45;
    --uh-gold-light: #efdca6;
    --uh-cream: #f8f5ed;
    --uh-soft: #fbfaf6;
    --uh-muted: #5d6b66;

    --uh-border:
        rgba(23,59,49,.10);

    --uh-shadow:
        0 18px 55px rgba(20,52,43,.10);

    --uh-shadow-lg:
        0 30px 90px rgba(13,44,36,.17);

    background:
        #ffffff;

    color:
        #172923;
}


/* ================================================================
   TYPOGRAPHY
   ================================================================ */

.uhud-premium-page h1,
.uhud-premium-page h2,
.uhud-premium-page h3,
.uhud-premium-page h4,
.uhud-premium-page h5,
.uhud-premium-page h6,
.uhud-premium-page .ac-btn,
.uhud-premium-page .ac-eyebrow,
.uhud-premium-page .sc-chapter-links strong {

    font-family:
        "Baloo 2",
        "SC Arabic",
        sans-serif !important;
}


.uhud-premium-page p,
.uhud-premium-page li,
.uhud-premium-page .uh-meta,
.uhud-premium-page .ac-breadcrumb,
.uhud-premium-page .sc-chapter-links small {

    font-family:
        "DM Sans",
        "SC Arabic",
        sans-serif !important;
}


/* ================================================================
   HERO
   ================================================================ */

.uhud-premium-page
.uh-hero {

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


/* OLD .91 PALE OVERLAY REMOVED */

.uhud-premium-page
.uh-hero::before {

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
            rgba(10,39,32,.80) 0%,
            rgba(10,39,32,.52) 42%,
            rgba(10,39,32,.18) 72%,
            rgba(10,39,32,.05) 100%
        );
}


.uhud-premium-page
.uh-hero::after {

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


.uhud-premium-page
.uh-hero
.ac-container {

    position:
        relative;

    z-index:
        3;
}


/* ================================================================
   BREADCRUMB
   ================================================================ */

.uhud-premium-page
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


.uhud-premium-page
.ac-breadcrumb a {

    color:
        #ffffff !important;

    text-decoration:
        none;
}


.uhud-premium-page
.ac-breadcrumb a:hover {

    color:
        var(--uh-gold-light) !important;
}


/* ================================================================
   HERO GRID
   ================================================================ */

.uhud-premium-page
.uh-hero-grid {

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

.uhud-premium-page
.uh-hero-copy {

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
        var(--uh-shadow-lg) !important;

    backdrop-filter:
        none !important;

    -webkit-backdrop-filter:
        none !important;
}


.uhud-premium-page
.uh-hero-copy::before {

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
            var(--uh-gold),
            #efd593
        );
}


.uhud-premium-page
.uh-hero-copy
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


.uhud-premium-page
.uh-hero-copy h1 {

    max-width:
        720px;

    margin:
        23px 0 22px !important;

    color:
        var(--uh-dark) !important;

    font-size:
        clamp(
            50px,
            5.7vw,
            80px
        ) !important;

    font-weight:
        700 !important;

    line-height:
        1 !important;

    letter-spacing:
        -.03em !important;
}


.uhud-premium-page
.uh-hero-lead {

    max-width:
        640px;

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

.uhud-premium-page
.uh-meta {

    display:
        flex;

    flex-wrap:
        wrap;

    gap:
        11px;

    margin:
        26px 0 30px;
}


.uhud-premium-page
.uh-meta > span {

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


.uhud-premium-page
.uh-meta i {

    color:
        #aa8438;
}


/* ================================================================
   BUTTONS
   ================================================================ */

.uhud-premium-page
.ac-actions {

    display:
        flex;

    flex-wrap:
        wrap;

    gap:
        13px;
}


.uhud-premium-page
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
        var(--uh-gold) !important;

    border-radius:
        999px !important;

    background:
        var(--uh-gold) !important;

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


.uhud-premium-page
.ac-btn:hover {

    transform:
        translateY(-2px);

    background:
        #d5aa51 !important;
}


.uhud-premium-page
.ac-btn-secondary {

    border-color:
        rgba(23,59,49,.13) !important;

    background:
        #ffffff !important;

    color:
        var(--uh-dark) !important;

    box-shadow:
        0 10px 25px
        rgba(16,43,36,.07);
}


/* ================================================================
   POSTER
   ================================================================ */

.uhud-premium-page
.uh-poster {

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
        var(--uh-shadow-lg) !important;

    transform:
        rotate(1deg);

    transition:
        .3s ease;
}


.uhud-premium-page
.uh-poster:hover {

    transform:
        rotate(0)
        translateY(-5px);
}


.uhud-premium-page
.uh-poster a {

    display:
        block;

    overflow:
        hidden;

    border-radius:
        21px;
}


.uhud-premium-page
.uh-poster img {

    display:
        block;

    width:
        100%;

    aspect-ratio:
        4 / 5;

    object-fit:
        cover;

    object-position:
        center;

    transition:
        transform .45s ease;
}


.uhud-premium-page
.uh-poster:hover img {

    transform:
        scale(1.025);
}


.uhud-premium-page
.uh-poster figcaption {

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

.uhud-premium-page
.uh-story-section {

    background:
        radial-gradient(
            circle at 8% 8%,
            rgba(201,157,69,.09),
            transparent 25%
        ),
        #f9f7f0 !important;
}


.uhud-premium-page
.uh-story-grid {

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


.uhud-premium-page
.uh-story-copy {

    max-width:
        800px;
}


.uhud-premium-page
.uh-story-copy h2 {

    margin:
        15px 0 22px;

    color:
        var(--uh-dark) !important;

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


.uhud-premium-page
.uh-story-copy h3 {

    margin:
        35px 0 12px;

    color:
        var(--uh-dark) !important;

    font-size:
        29px !important;

    font-weight:
        700 !important;

    line-height:
        1.15;
}


.uhud-premium-page
.uh-story-lead {

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


.uhud-premium-page
.uh-story-copy p {

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
   KEY LESSONS
   ================================================================ */

.uhud-premium-page
.uh-story-aside {

    position:
        sticky;

    top:
        120px;
}


.uhud-premium-page
.uh-lessons {

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
        var(--uh-shadow) !important;
}


.uhud-premium-page
.uh-lessons::after {

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


.uhud-premium-page
.uh-lessons
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.uhud-premium-page
.uh-lessons h3 {

    margin:
        14px 0 18px;

    color:
        #ffffff !important;

    font-size:
        27px !important;

    line-height:
        1.18;
}


.uhud-premium-page
.uh-lessons > p {

    color:
        rgba(255,255,255,.70) !important;

    font-size:
        14px !important;

    line-height:
        1.72 !important;
}


.uhud-premium-page
.uh-points {

    display:
        grid;

    gap:
        10px;

    margin-top:
        24px;
}


.uhud-premium-page
.uh-points span {

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


.uhud-premium-page
.uh-points i {

    width:
        19px;

    color:
        #e6c878;

    text-align:
        center;
}


/* ================================================================
   CHARACTER SECTION
   ================================================================ */

.uhud-premium-page
.uh-values-section {

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


.uhud-premium-page
.uh-values-section::after {

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


.uhud-premium-page
.uh-values-grid {

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


.uhud-premium-page
.uh-values-copy
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.uhud-premium-page
.uh-values-copy h2 {

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


.uhud-premium-page
.uh-values-copy p {

    color:
        rgba(255,255,255,.73) !important;

    font-size:
        16px;

    line-height:
        1.85;
}


.uhud-premium-page
.uh-values-cards {

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


.uhud-premium-page
.uh-value-card {

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


.uhud-premium-page
.uh-value-card i {

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


.uhud-premium-page
.uh-value-card h3 {

    margin:
        0 0 8px;

    color:
        #ffffff !important;

    font-size:
        21px;

    line-height:
        1.2;
}


.uhud-premium-page
.uh-value-card p {

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

.uhud-premium-page
.uh-section-heading {

    max-width:
        760px;

    margin-bottom:
        42px;
}


.uhud-premium-page
.uh-section-heading h2 {

    margin:
        13px 0;

    color:
        var(--uh-dark);

    font-size:
        clamp(
            38px,
            4vw,
            52px
        );

    line-height:
        1.08;
}


.uhud-premium-page
.uh-section-heading p {

    color:
        #64716c;

    font-size:
        16px;

    line-height:
        1.8;
}


/* ================================================================
   GALLERY
   ================================================================ */

.uhud-premium-page
.uh-gallery-section {

    background:
        linear-gradient(
            180deg,
            #e8eee6,
            #f3f0e7
        ) !important;
}


.uhud-premium-page
.uh-gallery-count {

    display:
        inline-flex;

    margin-top:
        8px;

    padding:
        8px 13px;

    border:
        1px solid
        rgba(23,59,49,.12);

    border-radius:
        999px;

    background:
        rgba(255,255,255,.72);

    color:
        #69746f;

    font-family:
        "DM Sans",
        sans-serif;

    font-size:
        11px;

    font-weight:
        700;

    letter-spacing:
        .09em;
}


.uhud-premium-page
.uh-gallery {

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


.uhud-premium-page
.uh-gallery-item {

    margin:
        0;

    padding:
        6px;

    overflow:
        hidden;

    border:
        1px solid
        var(--uh-border);

    border-radius:
        23px;

    background:
        #ffffff;

    box-shadow:
        var(--uh-shadow);

    transition:
        transform .3s ease,
        box-shadow .3s ease;
}


.uhud-premium-page
.uh-gallery-item:hover {

    transform:
        translateY(-5px);

    box-shadow:
        0 22px 55px
        rgba(20,52,43,.13);
}


.uhud-premium-page
.uh-gallery-item a {

    display:
        block;

    aspect-ratio:
        4 / 3;

    overflow:
        hidden;

    border-radius:
        17px;
}


.uhud-premium-page
.uh-gallery-item img {

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


.uhud-premium-page
.uh-gallery-item:hover img {

    transform:
        scale(1.045);
}


/* ================================================================
   MATERIAL SECTION
   ================================================================ */

.uhud-premium-page
.uh-material-section {

    background:
        #fbfaf6 !important;
}


.uhud-premium-page
.uh-material-card {

    display:
        grid;

    grid-template-columns:
        290px minmax(0,1fr);

    gap:
        40px;

    align-items:
        center;

    padding:
        40px !important;

    border:
        1px solid
        var(--uh-border) !important;

    border-radius:
        30px !important;

    background:
        #ffffff !important;

    box-shadow:
        var(--uh-shadow) !important;
}


.uhud-premium-page
.uh-material-icon {

    display:
        flex;

    align-items:
        center;

    justify-content:
        center;

    min-height:
        250px;

    border-radius:
        22px;

    background:
        linear-gradient(
            145deg,
            #173b31,
            #102b24
        );
}


.uhud-premium-page
.uh-material-icon i {

    color:
        #e7ca7c;

    font-size:
        80px;
}


.uhud-premium-page
.uh-material-copy h3 {

    margin:
        12px 0 14px;

    color:
        var(--uh-dark);

    font-size:
        34px;

    line-height:
        1.15;
}


.uhud-premium-page
.uh-material-copy p {

    max-width:
        700px;

    margin:
        0 0 15px;

    color:
        #5f6b67;

    font-size:
        16px;

    line-height:
        1.8;
}


.uhud-premium-page
.uh-material-note {

    display:
        inline-flex;

    align-items:
        center;

    gap:
        9px;

    margin-top:
        8px;

    padding:
        10px 13px;

    border-radius:
        999px;

    background:
        #f1eee4;

    color:
        #766239;

    font-family:
        "DM Sans",
        sans-serif;

    font-size:
        13px;
}


/* ================================================================
   CYCLE NAVIGATION
   ================================================================ */

.uhud-premium-page
.uh-cycle-section {

    background:
        #e7ece4 !important;
}


.uhud-premium-page
.uh-cycle-section
.ac-heading {

    margin-bottom:
        30px;
}


.uhud-premium-page
.uh-cycle-section h2 {

    margin:
        12px 0;

    color:
        var(--uh-dark);

    font-size:
        clamp(
            34px,
            4vw,
            50px
        );
}


.uhud-premium-page
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


.uhud-premium-page
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
        var(--uh-border);

    border-radius:
        20px;

    background:
        rgba(255,255,255,.82);

    color:
        var(--uh-dark);

    text-decoration:
        none;

    box-shadow:
        0 10px 30px
        rgba(20,52,43,.05);

    transition:
        .25s ease;
}


.uhud-premium-page
.sc-chapter-links > a:hover {

    transform:
        translateY(-4px);

    background:
        #ffffff;

    box-shadow:
        var(--uh-shadow);
}


.uhud-premium-page
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


.uhud-premium-page
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

    .uhud-premium-page
    .uh-hero-grid {

        grid-template-columns:
            1fr 330px;
    }


    .uhud-premium-page
    .uh-story-grid {

        grid-template-columns:
            1fr 290px;
    }

}


@media (max-width:850px) {

    .uhud-premium-page
    .uh-hero {

        min-height:
            auto;

        padding-bottom:
            65px !important;
    }


    .uhud-premium-page
    .uh-hero-grid,
    .uhud-premium-page
    .uh-story-grid,
    .uhud-premium-page
    .uh-values-grid,
    .uhud-premium-page
    .uh-material-card {

        grid-template-columns:
            1fr;
    }


    .uhud-premium-page
    .uh-poster {

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


    .uhud-premium-page
    .uh-story-aside {

        position:
            static;
    }


    .uhud-premium-page
    .uh-values-grid {

        gap:
            38px;
    }


    .uhud-premium-page
    .uh-gallery {

        grid-template-columns:
            repeat(
                2,
                minmax(0,1fr)
            );
    }


    .uhud-premium-page
    .uh-material-icon {

        min-height:
            210px;
    }

}


@media (max-width:650px) {

    .uhud-premium-page
    .uh-hero {

        border-radius:
            0 0 28px 28px;
    }


    .uhud-premium-page
    .uh-hero-copy {

        padding:
            30px 23px !important;

        border-radius:
            25px !important;
    }


    .uhud-premium-page
    .uh-hero-copy h1 {

        font-size:
            clamp(
                42px,
                12vw,
                60px
            ) !important;
    }


    .uhud-premium-page
    .uh-meta {

        flex-direction:
            column;

        align-items:
            flex-start;
    }


    .uhud-premium-page
    .ac-actions {

        flex-direction:
            column;
    }


    .uhud-premium-page
    .ac-btn {

        width:
            100%;
    }


    .uhud-premium-page
    .uh-values-cards,
    .uhud-premium-page
    .uh-gallery {

        grid-template-columns:
            1fr;
    }


    .uhud-premium-page
    .uh-material-card {

        padding:
            26px !important;
    }


    .uhud-premium-page
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
        c2-event-page
        uhud-premium-page
    "
>


    {{-- =========================================================
        HERO

        STATIC IMAGE:
        assets/images/ghazwa-e-uhud/14.png
    ========================================================== --}}

    <section
        class="ac-masthead uh-hero"
        style="
            background-image:
                url('{{ asset('assets/images/ghazwa-e-uhud/14.png') }}');
        "
    >


        <div class="ac-container">


            <nav
                class="ac-breadcrumb"
                aria-label="Breadcrumb"
            >


                <a href="{{ route('Home.welcome') }}">
                    Home
                </a>


                <span>/</span>


                <a href="{{ route('past-events.index') }}">
                    Past Events
                </a>


                <span>/</span>


                <a href="{{ route('past-events.cycle-2-2026-onwards.index') }}">
                    Cycle 2
                </a>


                <span>/</span>


                <span aria-current="page">

                    Ghazwa e Uhud

                </span>


            </nav>



            <div class="uh-hero-grid">


                <div class="uh-hero-copy">


                    <span class="ac-eyebrow">

                        CYCLE 2 · SESSION 04

                    </span>


                    <h1>

                        Ghazwa e Uhud

                    </h1>


                    <p class="uh-hero-lead">

                        Learning the importance
                        of consultation,
                        steadfastness
                        and supporting others
                        even when mistakes
                        have been made.

                    </p>



                    <div class="uh-meta">


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            <b>
                                23 May 2026
                            </b>

                        </span>


                        <span>

                            <i class="far fa-clock"></i>

                            <b>
                                Asar to Isha
                            </b>

                        </span>


                        <span>

                            <i class="fas fa-map-marker-alt"></i>

                            <b>
                                Masjid e Shafqat
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



                {{-- =================================================
                    STATIC POSTER
                ================================================== --}}

                <figure class="uh-poster">


                    <a
                        data-fancybox="uhud-poster"
                        href="{{ asset('assets/images/ghazwa-e-uhud/14.png') }}"
                    >


                        <img
                            src="{{ asset('assets/images/ghazwa-e-uhud/14.png') }}"
                            alt="Ghazwa e Uhud Seerat Club event"
                            decoding="async"
                        >


                    </a>


                    <figcaption>

                        Ghazwa e Uhud ·
                        Seerat Club Cycle 2

                    </figcaption>


                </figure>


            </div>


        </div>


    </section>



    {{-- =========================================================
        STORY
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section uh-story-section"
        id="event-story"
    >


        <div class="ac-container">


            <div class="uh-story-grid">


                <article class="ac-prose uh-story-copy">


                    <span class="ac-eyebrow">

                        THE SESSION

                    </span>


                    <h2>

                        Lessons from
                        Ghazwa e Uhud.

                    </h2>


                    <p class="uh-story-lead">

                        Cycle 2 · Session 04

                    </p>


                    <p>

                        Seerat Club's fourth session
                        of Cycle 2
                        was held on
                        23 May 2026,
                        from Asar to Isha,
                        at Masjid e Shafqat.

                    </p>


                    <p>

                        The session focused
                        on the lessons derived
                        from Ghazwa e Uhud,
                        including the importance
                        of consulting others
                        before making decisions,
                        remaining steadfast
                        during challenges
                        and helping others
                        even when they
                        have made mistakes.

                    </p>


                    <h3>

                        Bringing the battlefield
                        to life

                    </h3>


                    <p>

                        Children were able
                        to visualize
                        the events of Uhud
                        through a life size
                        battlefield map display.

                    </p>


                    <p>

                        This helped them
                        better understand
                        the important locations
                        and sequence
                        of events.

                    </p>


                    <p>

                        The discussion
                        was followed
                        by an interactive quiz
                        that tested
                        their understanding
                        and encouraged
                        active participation.

                    </p>


                    <h3>

                        Archery activity

                    </h3>


                    <p>

                        The activity session
                        featured an exciting
                        archery experience
                        where children
                        had the opportunity
                        to learn
                        and practise
                        basic targeting skills.

                    </p>


                    <p>

                        The activity
                        was conducted
                        under the guidance
                        of a dedicated team
                        of coaches,
                        including national level
                        archery champions.

                    </p>


                </article>



                <aside class="uh-story-aside">


                    <div class="uh-lessons ac-card">


                        <span class="ac-eyebrow">

                            KEY LESSONS

                        </span>


                        <h3>

                            Strength through
                            consultation
                            and steadfastness.

                        </h3>


                        <p>

                            Ghazwa e Uhud
                            offered children
                            practical lessons
                            about making decisions
                            together
                            and standing firm
                            when circumstances
                            become difficult.

                        </p>



                        <div class="uh-points">


                            <span>

                                <i class="fas fa-users"></i>

                                Consultation

                            </span>


                            <span>

                                <i class="fas fa-shield-alt"></i>

                                Steadfastness

                            </span>


                            <span>

                                <i class="fas fa-hands-helping"></i>

                                Helping others

                            </span>


                            <span>

                                <i class="fas fa-bullseye"></i>

                                Archery

                            </span>


                        </div>


                    </div>


                </aside>


            </div>


        </div>


    </section>



    {{-- =========================================================
        CHARACTER IN ACTION
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section uh-values-section"
    >


        <div class="ac-container">


            <div class="uh-values-grid">


                <div class="uh-values-copy">


                    <span class="ac-eyebrow">

                        CONSULT · STAND FIRM · SUPPORT

                    </span>


                    <h2>

                        Mistakes do not
                        remove our responsibility
                        to support others.

                    </h2>


                    <p>

                        The lessons of Uhud
                        helped children understand
                        consultation,
                        discipline
                        and steadfastness,
                        while also showing
                        the importance
                        of helping people
                        recover from mistakes.

                    </p>


                </div>



                <div class="uh-values-cards">


                    <article class="uh-value-card">


                        <i class="fas fa-users"></i>


                        <h3>
                            Consultation
                        </h3>


                        <p>

                            Listen to others
                            and consider
                            their perspective
                            before making decisions.

                        </p>


                    </article>



                    <article class="uh-value-card">


                        <i class="fas fa-shield-alt"></i>


                        <h3>
                            Steadfastness
                        </h3>


                        <p>

                            Remain firm
                            and responsible
                            when circumstances
                            become difficult.

                        </p>


                    </article>



                    <article class="uh-value-card">


                        <i class="fas fa-hands-helping"></i>


                        <h3>
                            Support
                        </h3>


                        <p>

                            Help others
                            even after
                            they have made
                            a mistake.

                        </p>


                    </article>



                    <article class="uh-value-card">


                        <i class="fas fa-bullseye"></i>


                        <h3>
                            Focus
                        </h3>


                        <p>

                            Archery connected
                            concentration,
                            discipline
                            and practical skill.

                        </p>


                    </article>


                </div>


            </div>


        </div>


    </section>



    {{-- =========================================================
        STATIC EVENT GALLERY
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section uh-gallery-section"
        id="event-gallery"
    >


        <div class="ac-container">


            <div class="uh-section-heading">


                <span class="ac-eyebrow">

                    FROM THE ORIGINAL SESSION

                </span>


                <h2>

                    Moments from
                    Ghazwa e Uhud.

                </h2>


                <p>

                    Original photographs
                    and visual material
                    from the Seerat Club session.

                </p>


                <span class="uh-gallery-count">

                    EVENT GALLERY

                </span>


            </div>



            <div
                class="uh-gallery"
                aria-label="Ghazwa e Uhud event gallery"
            >


                {{-- IMAGE 01 --}}

                <figure class="uh-gallery-item">

                    <a
                        data-fancybox="uhud-gallery"
                        href="{{ asset('assets/images/ghazwa-e-uhud/1.jpg') }}"
                    >

                        <img
                            src="{{ asset('assets/images/ghazwa-e-uhud/1.jpg') }}"
                            alt="Ghazwa e Uhud event photograph 1"
                            loading="eager"
                            decoding="async"
                        >

                    </a>

                </figure>



                {{-- IMAGE 02 --}}

                <figure class="uh-gallery-item">

                    <a
                        data-fancybox="uhud-gallery"
                        href="{{ asset('assets/images/ghazwa-e-uhud/2.jpg') }}"
                    >

                        <img
                            src="{{ asset('assets/images/ghazwa-e-uhud/2.jpg') }}"
                            alt="Ghazwa e Uhud archery activity"
                            loading="lazy"
                            decoding="async"
                        >

                    </a>

                </figure>



                {{-- IMAGE 03 --}}

                <figure class="uh-gallery-item">

                    <a
                        data-fancybox="uhud-gallery"
                        href="{{ asset('assets/images/ghazwa-e-uhud/3.jpg') }}"
                    >

                        <img
                            src="{{ asset('assets/images/ghazwa-e-uhud/3.jpg') }}"
                            alt="Ghazwa e Uhud battlefield map"
                            loading="lazy"
                            decoding="async"
                        >

                    </a>

                </figure>



                {{-- IMAGE 04 --}}

                <figure class="uh-gallery-item">

                    <a
                        data-fancybox="uhud-gallery"
                        href="{{ asset('assets/images/ghazwa-e-uhud/4.jpg') }}"
                    >

                        <img
                            src="{{ asset('assets/images/ghazwa-e-uhud/4.jpg') }}"
                            alt="Lessons from Ghazwa e Uhud"
                            loading="lazy"
                            decoding="async"
                        >

                    </a>

                </figure>



                {{-- IMAGE 05 --}}

                <figure class="uh-gallery-item">

                    <a
                        data-fancybox="uhud-gallery"
                        href="{{ asset('assets/images/ghazwa-e-uhud/5.jpg') }}"
                    >

                        <img
                            src="{{ asset('assets/images/ghazwa-e-uhud/5.jpg') }}"
                            alt="Ghazwa e Uhud session"
                            loading="lazy"
                            decoding="async"
                        >

                    </a>

                </figure>



                {{-- IMAGE 06 --}}

                <figure class="uh-gallery-item">

                    <a
                        data-fancybox="uhud-gallery"
                        href="{{ asset('assets/images/ghazwa-e-uhud/6.jpg') }}"
                    >

                        <img
                            src="{{ asset('assets/images/ghazwa-e-uhud/6.jpg') }}"
                            alt="Ghazwa e Uhud archery training"
                            loading="lazy"
                            decoding="async"
                        >

                    </a>

                </figure>



                {{-- IMAGE 07 --}}

                <figure class="uh-gallery-item">

                    <a
                        data-fancybox="uhud-gallery"
                        href="{{ asset('assets/images/ghazwa-e-uhud/7.jpg') }}"
                    >

                        <img
                            src="{{ asset('assets/images/ghazwa-e-uhud/7.jpg') }}"
                            alt="Ghazwa e Uhud children group"
                            loading="lazy"
                            decoding="async"
                        >

                    </a>

                </figure>



                {{-- IMAGE 08 --}}

                <figure class="uh-gallery-item">

                    <a
                        data-fancybox="uhud-gallery"
                        href="{{ asset('assets/images/ghazwa-e-uhud/8.jpg') }}"
                    >

                        <img
                            src="{{ asset('assets/images/ghazwa-e-uhud/8.jpg') }}"
                            alt="Archery at Ghazwa e Uhud event"
                            loading="lazy"
                            decoding="async"
                        >

                    </a>

                </figure>



                {{-- IMAGE 09 --}}

                <figure class="uh-gallery-item">

                    <a
                        data-fancybox="uhud-gallery"
                        href="{{ asset('assets/images/ghazwa-e-uhud/9.jpg') }}"
                    >

                        <img
                            src="{{ asset('assets/images/ghazwa-e-uhud/9.jpg') }}"
                            alt="Ghazwa e Uhud battlefield display"
                            loading="lazy"
                            decoding="async"
                        >

                    </a>

                </figure>



                {{-- IMAGE 10 / ORIGINAL VISUAL --}}

                <figure class="uh-gallery-item">

                    <a
                        data-fancybox="uhud-gallery"
                        href="{{ asset('assets/images/ghazwa-e-uhud/14.png') }}"
                    >

                        <img
                            src="{{ asset('assets/images/ghazwa-e-uhud/14.png') }}"
                            alt="Ghazwa e Uhud Seerat Club visual"
                            loading="lazy"
                            decoding="async"
                        >

                    </a>

                </figure>


            </div>


        </div>


    </section>



    {{-- =========================================================
        PRESENTATION MATERIAL

        Source mentions presentation but gives no verified URL.
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section uh-material-section"
    >


        <div class="ac-container">


            <div class="uh-section-heading">


                <span class="ac-eyebrow">

                    PRESENTATION SLIDEPACK

                </span>


                <h2>

                    Ghazwa e Uhud
                    session material.

                </h2>


                <p>

                    The original source
                    identifies a presentation
                    titled Battle of Uhud Final.

                </p>


            </div>



            <article class="ac-card uh-material-card">


                <div class="uh-material-icon">

                    <i class="far fa-file-pdf"></i>

                </div>



                <div class="uh-material-copy">


                    <span class="ac-eyebrow">

                        SESSION DOCUMENT

                    </span>


                    <h3>

                        Battle of Uhud Final

                    </h3>


                    <p>

                        Presentation slidepack
                        used for
                        the Ghazwa e Uhud session.

                    </p>


                    <p>

                        The current source
                        does not contain
                        a verified Google Drive
                        or PDF URL,
                        so no external link
                        has been added.

                    </p>


                    <span class="uh-material-note">

                        <i class="fas fa-check-circle"></i>

                        Original title preserved

                    </span>


                </div>


            </article>


        </div>


    </section>



    {{-- =========================================================
        NAVIGATION
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section uh-cycle-section"
    >


        <div class="ac-container">


            <div class="ac-heading">


                <span class="ac-eyebrow">

                    CONTINUE CYCLE 2

                </span>


                <h2>

                    Continue the
                    Seerah journey.

                </h2>


            </div>



            <nav
                class="sc-chapter-links"
                aria-label="Event navigation"
            >


                <a
                    href="{{ route(
                        'past-events.cycle-2-2026-onwards.battle-of-badar'
                    ) }}"
                >


                    <small>

                        Previous chapter

                    </small>


                    <strong>

                        Battle of Badar

                        <span aria-hidden="true">
                            ↗
                        </span>

                    </strong>


                </a>



                <a
                    href="{{ route(
                        'past-events.cycle-2-2026-onwards.ghazwa-e-khyber'
                    ) }}"
                >


                    <small>

                        Next chapter

                    </small>


                    <strong>

                        Ghazwa e Khyber

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
