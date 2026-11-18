@extends("Layout.layout")

@section('title', 'Letters to Kings · Seerat Club')

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
   LETTERS TO KINGS
   STATIC PREMIUM EVENT PAGE
   ================================================================ */

.letters-premium-page {

    --lk-green: #173b31;
    --lk-dark: #102b24;
    --lk-gold: #c99d45;
    --lk-gold-light: #efdca6;
    --lk-cream: #f8f5ed;
    --lk-soft: #fbfaf6;
    --lk-muted: #5d6b66;

    --lk-border:
        rgba(23,59,49,.10);

    --lk-shadow:
        0 18px 55px rgba(20,52,43,.10);

    --lk-shadow-lg:
        0 30px 90px rgba(13,44,36,.17);

    background:
        #ffffff;

    color:
        #172923;
}


/* ================================================================
   TYPOGRAPHY
   ================================================================ */

.letters-premium-page h1,
.letters-premium-page h2,
.letters-premium-page h3,
.letters-premium-page h4,
.letters-premium-page h5,
.letters-premium-page h6,
.letters-premium-page .ac-btn,
.letters-premium-page .ac-eyebrow,
.letters-premium-page .sc-chapter-links strong {

    font-family:
        "Baloo 2",
        "SC Arabic",
        sans-serif !important;
}


.letters-premium-page p,
.letters-premium-page li,
.letters-premium-page .lk-meta,
.letters-premium-page .ac-breadcrumb,
.letters-premium-page .lk-video-meta,
.letters-premium-page .lk-resource-meta,
.letters-premium-page .sc-chapter-links small {

    font-family:
        "DM Sans",
        "SC Arabic",
        sans-serif !important;
}


/* ================================================================
   HERO
   ================================================================ */

.letters-premium-page
.lk-hero {

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


.letters-premium-page
.lk-hero::before {

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


.letters-premium-page
.lk-hero::after {

    content: "";

    position:
        absolute;

    width:
        520px;

    height:
        520px;

    right:
        -190px;

    top:
        -190px;

    border-radius:
        50%;

    background:
        radial-gradient(
            circle,
            rgba(238,213,145,.24),
            transparent 68%
        );

    pointer-events:
        none;
}


.letters-premium-page
.lk-hero
.ac-container {

    position:
        relative;

    z-index:
        3;
}


/* ================================================================
   BREADCRUMB
   ================================================================ */

.letters-premium-page
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


.letters-premium-page
.ac-breadcrumb a {

    color:
        #ffffff !important;

    text-decoration:
        none;
}


.letters-premium-page
.ac-breadcrumb a:hover {

    color:
        var(--lk-gold-light) !important;
}


/* ================================================================
   HERO GRID
   ================================================================ */

.letters-premium-page
.lk-hero-grid {

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

.letters-premium-page
.lk-hero-copy {

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
        var(--lk-shadow-lg) !important;

    backdrop-filter:
        none !important;

    -webkit-backdrop-filter:
        none !important;
}


.letters-premium-page
.lk-hero-copy::before {

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
            var(--lk-gold),
            #efd593
        );
}


.letters-premium-page
.lk-hero-copy
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


.letters-premium-page
.lk-hero-copy h1 {

    max-width:
        720px;

    margin:
        23px 0 22px !important;

    color:
        var(--lk-dark) !important;

    font-size:
        clamp(
            48px,
            5.5vw,
            78px
        ) !important;

    font-weight:
        700 !important;

    line-height:
        1 !important;

    letter-spacing:
        -.03em !important;
}


.letters-premium-page
.lk-hero-lead {

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

.letters-premium-page
.lk-meta {

    display:
        flex;

    flex-wrap:
        wrap;

    gap:
        11px;

    margin:
        26px 0 30px;
}


.letters-premium-page
.lk-meta > span {

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


.letters-premium-page
.lk-meta i {

    color:
        #aa8438;
}


/* ================================================================
   BUTTONS
   ================================================================ */

.letters-premium-page
.ac-actions {

    display:
        flex;

    flex-wrap:
        wrap;

    gap:
        13px;
}


.letters-premium-page
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
        var(--lk-gold) !important;

    border-radius:
        999px !important;

    background:
        var(--lk-gold) !important;

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


.letters-premium-page
.ac-btn:hover {

    transform:
        translateY(-2px);

    background:
        #d5aa51 !important;
}


.letters-premium-page
.ac-btn-secondary {

    border-color:
        rgba(23,59,49,.13) !important;

    background:
        #ffffff !important;

    color:
        var(--lk-dark) !important;

    box-shadow:
        0 10px 25px
        rgba(16,43,36,.07);
}


/* ================================================================
   POSTER
   ================================================================ */

.letters-premium-page
.lk-poster {

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
        var(--lk-shadow-lg) !important;

    transform:
        rotate(1deg);

    transition:
        .3s ease;
}


.letters-premium-page
.lk-poster:hover {

    transform:
        rotate(0)
        translateY(-5px);
}


.letters-premium-page
.lk-poster a {

    display:
        block;

    overflow:
        hidden;

    border-radius:
        21px;
}


.letters-premium-page
.lk-poster img {

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


.letters-premium-page
.lk-poster:hover img {

    transform:
        scale(1.025);
}


.letters-premium-page
.lk-poster figcaption {

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

.letters-premium-page
.lk-story-section {

    background:
        radial-gradient(
            circle at 8% 8%,
            rgba(201,157,69,.09),
            transparent 25%
        ),
        #f9f7f0 !important;
}


.letters-premium-page
.lk-story-grid {

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


.letters-premium-page
.lk-story-copy {

    max-width:
        800px;
}


.letters-premium-page
.lk-story-copy h2 {

    margin:
        15px 0 22px;

    color:
        var(--lk-dark) !important;

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


.letters-premium-page
.lk-story-copy h3 {

    margin:
        35px 0 12px;

    color:
        var(--lk-dark) !important;

    font-size:
        29px !important;

    font-weight:
        700 !important;

    line-height:
        1.15;
}


.letters-premium-page
.lk-story-lead {

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


.letters-premium-page
.lk-story-copy p {

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

.letters-premium-page
.lk-story-aside {

    position:
        sticky;

    top:
        120px;
}


.letters-premium-page
.lk-lessons {

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
        var(--lk-shadow) !important;
}


.letters-premium-page
.lk-lessons::after {

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


.letters-premium-page
.lk-lessons
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.letters-premium-page
.lk-lessons h3 {

    margin:
        14px 0 18px;

    color:
        #ffffff !important;

    font-size:
        27px !important;

    line-height:
        1.18;
}


.letters-premium-page
.lk-lessons > p {

    color:
        rgba(255,255,255,.70) !important;

    font-size:
        14px !important;

    line-height:
        1.72 !important;
}


.letters-premium-page
.lk-points {

    display:
        grid;

    gap:
        10px;

    margin-top:
        24px;
}


.letters-premium-page
.lk-points span {

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


.letters-premium-page
.lk-points i {

    width:
        19px;

    color:
        #e6c878;

    text-align:
        center;
}


/* ================================================================
   VALUES
   ================================================================ */

.letters-premium-page
.lk-values-section {

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


.letters-premium-page
.lk-values-section::after {

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


.letters-premium-page
.lk-values-grid {

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


.letters-premium-page
.lk-values-copy
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.letters-premium-page
.lk-values-copy h2 {

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


.letters-premium-page
.lk-values-copy p {

    color:
        rgba(255,255,255,.73) !important;

    font-size:
        16px;

    line-height:
        1.85;
}


.letters-premium-page
.lk-values-cards {

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


.letters-premium-page
.lk-value-card {

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


.letters-premium-page
.lk-value-card i {

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


.letters-premium-page
.lk-value-card h3 {

    margin:
        0 0 8px;

    color:
        #ffffff !important;

    font-size:
        21px;

    line-height:
        1.2;
}


.letters-premium-page
.lk-value-card p {

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
   SECTION HEADINGS
   ================================================================ */

.letters-premium-page
.lk-section-heading {

    max-width:
        760px;

    margin-bottom:
        42px;
}


.letters-premium-page
.lk-section-heading h2 {

    margin:
        13px 0;

    color:
        var(--lk-dark);

    font-size:
        clamp(
            38px,
            4vw,
            52px
        );

    line-height:
        1.08;
}


.letters-premium-page
.lk-section-heading p {

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

.letters-premium-page
.lk-video-section {

    background:
        #edf1ec !important;
}


.letters-premium-page
.lk-video-grid {

    display:
        grid;

    grid-template-columns:
        repeat(
            2,
            minmax(0,1fr)
        );

    gap:
        24px;
}


.letters-premium-page
.lk-video-card {

    overflow:
        hidden;

    padding:
        0 !important;

    border:
        1px solid
        var(--lk-border) !important;

    border-radius:
        28px !important;

    background:
        #ffffff !important;

    box-shadow:
        var(--lk-shadow) !important;
}


.letters-premium-page
.lk-video-frame {

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


.letters-premium-page
.lk-video-frame iframe {

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


.letters-premium-page
.lk-video-copy {

    padding:
        28px;
}


.letters-premium-page
.lk-video-copy h3 {

    margin:
        11px 0 10px;

    color:
        var(--lk-dark);

    font-size:
        28px;

    line-height:
        1.15;
}


.letters-premium-page
.lk-video-copy p {

    margin:
        0;

    color:
        #5f6b67;

    font-size:
        15px;

    line-height:
        1.75;
}


/* ================================================================
   RESOURCE
   ================================================================ */

.letters-premium-page
.lk-resource-section {

    background:
        #fbfaf6 !important;
}


.letters-premium-page
.lk-resource-card {

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
        var(--lk-border) !important;

    border-radius:
        30px !important;

    background:
        #ffffff !important;

    box-shadow:
        var(--lk-shadow) !important;
}


.letters-premium-page
.lk-resource-preview {

    min-height:
        540px;

    background:
        #e9ece6;
}


.letters-premium-page
.lk-resource-preview iframe {

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


.letters-premium-page
.lk-resource-copy {

    display:
        flex;

    flex-direction:
        column;

    justify-content:
        center;

    padding:
        44px 38px;
}


.letters-premium-page
.lk-resource-copy h3 {

    margin:
        13px 0 15px;

    color:
        var(--lk-dark);

    font-size:
        clamp(
            28px,
            2.5vw,
            35px
        );

    line-height:
        1.13;
}


.letters-premium-page
.lk-resource-copy p {

    margin:
        0 0 24px;

    color:
        #5f6b67;

    font-size:
        16px;

    line-height:
        1.8;
}


.letters-premium-page
.lk-resource-meta {

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


.letters-premium-page
.lk-resource-meta span {

    display:
        flex;

    align-items:
        center;

    gap:
        11px;
}


.letters-premium-page
.lk-resource-meta i {

    width:
        18px;

    color:
        #b68d3d;

    text-align:
        center;
}


.letters-premium-page
.lk-resource-copy
.ac-btn {

    width:
        fit-content;
}


/* ================================================================
   GALLERY
   ================================================================ */

.letters-premium-page
.lk-gallery-section {

    background:
        linear-gradient(
            180deg,
            #e8eee6,
            #f3f0e7
        ) !important;
}


.letters-premium-page
.lk-gallery-count {

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


.letters-premium-page
.lk-gallery {

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


.letters-premium-page
.lk-gallery-item {

    margin:
        0;

    padding:
        6px;

    overflow:
        hidden;

    border:
        1px solid
        var(--lk-border);

    border-radius:
        23px;

    background:
        #ffffff;

    box-shadow:
        var(--lk-shadow);

    transition:
        transform .3s ease,
        box-shadow .3s ease;
}


.letters-premium-page
.lk-gallery-item:hover {

    transform:
        translateY(-5px);

    box-shadow:
        0 22px 55px
        rgba(20,52,43,.13);
}


.letters-premium-page
.lk-gallery-item a {

    display:
        block;

    aspect-ratio:
        4 / 3;

    overflow:
        hidden;

    border-radius:
        17px;
}


.letters-premium-page
.lk-gallery-item img {

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


.letters-premium-page
.lk-gallery-item:hover img {

    transform:
        scale(1.045);
}


/* ================================================================
   NAVIGATION
   ================================================================ */

.letters-premium-page
.lk-cycle-section {

    background:
        #e7ece4 !important;
}


.letters-premium-page
.lk-cycle-section
.ac-heading {

    margin-bottom:
        30px;
}


.letters-premium-page
.lk-cycle-section h2 {

    margin:
        12px 0;

    color:
        var(--lk-dark);

    font-size:
        clamp(
            34px,
            4vw,
            50px
        );
}


.letters-premium-page
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


.letters-premium-page
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
        var(--lk-border);

    border-radius:
        20px;

    background:
        rgba(255,255,255,.82);

    color:
        var(--lk-dark);

    text-decoration:
        none;

    box-shadow:
        0 10px 30px
        rgba(20,52,43,.05);

    transition:
        .25s ease;
}


.letters-premium-page
.sc-chapter-links > a:hover {

    transform:
        translateY(-4px);

    background:
        #ffffff;

    box-shadow:
        var(--lk-shadow);
}


.letters-premium-page
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


.letters-premium-page
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

    .letters-premium-page
    .lk-hero-grid {

        grid-template-columns:
            1fr 330px;
    }


    .letters-premium-page
    .lk-story-grid {

        grid-template-columns:
            1fr 290px;
    }


    .letters-premium-page
    .lk-resource-card {

        grid-template-columns:
            1fr;
    }


    .letters-premium-page
    .lk-resource-preview,
    .letters-premium-page
    .lk-resource-preview iframe {

        min-height:
            480px;
    }

}


@media (max-width:850px) {

    .letters-premium-page
    .lk-hero {

        min-height:
            auto;

        padding-bottom:
            65px !important;
    }


    .letters-premium-page
    .lk-hero-grid,
    .letters-premium-page
    .lk-story-grid,
    .letters-premium-page
    .lk-values-grid {

        grid-template-columns:
            1fr;
    }


    .letters-premium-page
    .lk-poster {

        width:
            min(520px,100%);

        margin-inline:
            auto;

        transform:
            none;
    }


    .letters-premium-page
    .lk-story-aside {

        position:
            static;
    }


    .letters-premium-page
    .lk-values-grid {

        gap:
            38px;
    }


    .letters-premium-page
    .lk-video-grid {

        grid-template-columns:
            1fr;
    }


    .letters-premium-page
    .lk-gallery {

        grid-template-columns:
            repeat(
                2,
                minmax(0,1fr)
            );
    }

}


@media (max-width:650px) {

    .letters-premium-page
    .lk-hero {

        border-radius:
            0 0 28px 28px;
    }


    .letters-premium-page
    .lk-hero-copy {

        padding:
            30px 23px !important;

        border-radius:
            25px !important;
    }


    .letters-premium-page
    .lk-hero-copy h1 {

        font-size:
            clamp(
                40px,
                11vw,
                58px
            ) !important;
    }


    .letters-premium-page
    .lk-meta {

        flex-direction:
            column;

        align-items:
            flex-start;
    }


    .letters-premium-page
    .ac-actions {

        flex-direction:
            column;
    }


    .letters-premium-page
    .ac-btn {

        width:
            100%;
    }


    .letters-premium-page
    .lk-values-cards,
    .letters-premium-page
    .lk-gallery {

        grid-template-columns:
            1fr;
    }


    .letters-premium-page
    .lk-resource-preview,
    .letters-premium-page
    .lk-resource-preview iframe {

        min-height:
            410px;
    }


    .letters-premium-page
    .lk-resource-copy {

        padding:
            30px 23px;
    }


    .letters-premium-page
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
        letters-premium-page
    "
>


    {{-- =========================================================
        HERO
    ========================================================== --}}

    <section
        class="ac-masthead lk-hero"
        style="
            background-image:
                url('{{ asset('assets/images/letter-king/hero.jpg') }}');
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
                    Letters to Kings
                </span>

            </nav>



            <div class="lk-hero-grid">


                <div class="lk-hero-copy">


                    <span class="ac-eyebrow">

                        CYCLE 2 · SESSION 08

                    </span>


                    <h1>

                        Letters to Kings

                    </h1>


                    <p class="lk-hero-lead">

                        A world map,
                        historic messages
                        and heartfelt letters
                        helped children experience
                        how a message
                        can travel far beyond
                        its sender.

                    </p>



                    <div class="lk-meta">


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            <b>
                                26 September 2026
                            </b>

                        </span>


                        <span>

                            <i class="fas fa-book-open"></i>

                            <b>
                                Cycle 2 · Session 08
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



                <figure class="lk-poster">


                    <a
                        data-fancybox="letter-king-poster"
                        href="{{ asset('assets/images/letter-king/poster.jpg') }}"
                    >

                        <img
                            src="{{ asset('assets/images/letter-king/poster.jpg') }}"
                            alt="Letters to Kings event poster"
                            decoding="async"
                        >

                    </a>


                    <figcaption>

                        Letters to Kings ·
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
        class="ac-section sc-svg-section lk-story-section"
        id="event-story"
    >


        <div class="ac-container">


            <div class="lk-story-grid">


                <article class="ac-prose lk-story-copy">


                    <span class="ac-eyebrow">

                        THE SESSION

                    </span>


                    <h2>

                        Geography,
                        responsibility
                        and empathy.

                    </h2>


                    <p class="lk-story-lead">

                        Cycle 2 · Session 08

                    </p>


                    <p>

                        On 26 September 2026,
                        Seerat Club held
                        its eighth Cycle 2 session
                        at Masjid e Shafqat,
                        Karachi,
                        taking children
                        on an interactive journey
                        through the world
                        beyond Arabia
                        at the time
                        of Prophet Muhammad ﷺ.

                    </p>


                    <h3>

                        Rebuilding the World
                        Around Arabia

                    </h3>


                    <p>

                        The session began
                        outdoors
                        in the Masjid verandah,
                        where children
                        worked together
                        on a life size
                        world map puzzle.

                    </p>


                    <p>

                        Their task
                        was to recreate
                        the world surrounding Arabia
                        as it existed
                        approximately 1,400 years ago,
                        allowing them
                        to experience
                        the geography
                        of the Seerah
                        in a practical
                        and memorable way.

                    </p>


                    <p>

                        Children pieced together
                        different parts
                        of the map
                        while volunteers
                        guided them
                        through the countries,
                        regions
                        and civilizations
                        represented around Arabia.

                    </p>


                    <h3>

                        Civilizations
                        and Landmarks

                    </h3>


                    <p>

                        As the map came together,
                        children recreated landmarks
                        representing several
                        major civilizations
                        connected with the session.

                    </p>


                    <p>

                        These included
                        the Pyramids of Egypt,
                        the Colosseum
                        representing the Roman Empire,
                        Takht i Bahi
                        representing the Persian world
                        and a castle
                        representing Abyssinia.

                    </p>


                    <p>

                        The activity
                        helped turn geography
                        into something
                        children could physically explore,
                        while giving them
                        a clearer picture
                        of the world
                        in which
                        the message of Islam
                        began to spread.

                    </p>


                    <h3>

                        Letters Sent
                        by Prophet Muhammad ﷺ

                    </h3>


                    <p>

                        The map activity
                        was followed
                        by a briefing
                        from Maulana Owais,
                        who introduced
                        the children
                        to the letters
                        sent by Prophet Muhammad ﷺ
                        to different rulers
                        inviting them
                        towards Islam.

                    </p>


                    <p>

                        Geography
                        was woven naturally
                        into the Seerah
                        as children identified
                        the lands,
                        civilizations
                        and rulers
                        connected with these letters.

                    </p>


                    <p>

                        This helped them visualize
                        how the message
                        of Islam travelled
                        beyond the Arabian Peninsula
                        to distant regions
                        of the world.

                    </p>


                    <h3>

                        Choosing
                        the Right Messenger

                    </h3>


                    <p>

                        An important part
                        of the discussion
                        focused on responsibility.

                    </p>


                    <p>

                        Children reflected
                        on why
                        an important message
                        needs the right person
                        to carry it,
                        and how
                        the qualities,
                        character
                        and abilities
                        of a messenger
                        can influence
                        how that message
                        is received.

                    </p>


                    <p>

                        The lesson
                        helped them understand
                        the importance
                        of choosing
                        the right person
                        for the right responsibility.

                    </p>


                    <h3>

                        From Historic Letters
                        to Pen Pals

                    </h3>


                    <p>

                        The session
                        then moved
                        from the historical letters
                        of Prophet Muhammad ﷺ
                        to the modern idea
                        of a pen pal.

                    </p>


                    <p>

                        Children learned
                        that letters
                        can create connections,
                        friendships
                        and understanding
                        even between people
                        who live
                        thousands of kilometres apart.

                    </p>


                    <h3>

                        Letters to Children
                        in Palestine

                    </h3>


                    <p>

                        The children
                        then put this idea
                        into practice
                        by writing heartfelt letters
                        to children
                        in Palestine.

                    </p>


                    <p>

                        Each child
                        personalized their letter
                        using drawings,
                        stickers,
                        colours
                        and decorations,
                        creating messages
                        filled with warmth
                        and care.

                    </p>


                    <p>

                        After completing
                        their letters,
                        the children
                        placed them carefully
                        into envelopes
                        and finished them
                        with wax seals.

                    </p>


                    <p>

                        The completed envelopes
                        were then dropped
                        into the Seerat Club
                        post box,
                        ready to begin
                        their journey.

                    </p>


                    <h3>

                        Sharing Their Prizes

                    </h3>


                    <p>

                        In a beautiful gesture
                        of friendship,
                        the children decided
                        that the prizes
                        from the letter writing
                        competition
                        should also be sent
                        as gifts
                        to the children
                        who receive their letters
                        in Palestine.

                    </p>


                    <p>

                        Their own celebration
                        was therefore transformed
                        into an opportunity
                        to share happiness
                        with another child.

                    </p>


                    <p>

                        InshaAllah,
                        the letters
                        will make their way
                        to children in Gaza.

                    </p>


                    <h3>

                        A Message
                        Can Travel Far

                    </h3>


                    <p>

                        From rebuilding
                        a map of the world
                        to writing a letter
                        for a child
                        thousands of kilometres away,
                        the session
                        helped children experience
                        one simple
                        but powerful idea.

                    </p>


                    <p>

                        A sincere message
                        can travel far beyond
                        the person who sends it,
                        carrying faith,
                        friendship,
                        compassion
                        and hope
                        across borders.

                    </p>


                </article>



                <aside class="lk-story-aside">


                    <div class="lk-lessons ac-card">


                        <span class="ac-eyebrow">

                            KEY LESSONS

                        </span>


                        <h3>

                            Seerah made practical.

                        </h3>


                        <p>

                            The session connected
                            the historical letters
                            of the Prophet ﷺ
                            with communication,
                            responsibility
                            and empathy today.

                        </p>



                        <div class="lk-points">


                            <span>

                                <i class="fas fa-compass"></i>

                                Geography

                            </span>


                            <span>

                                <i class="fas fa-users"></i>

                                Responsibility

                            </span>


                            <span>

                                <i class="fas fa-envelope"></i>

                                Communication

                            </span>


                            <span>

                                <i class="fas fa-heart"></i>

                                Empathy

                            </span>


                            <span>

                                <i class="fas fa-gift"></i>

                                Sharing

                            </span>


                        </div>


                    </div>


                </aside>


            </div>


        </div>


    </section>



    {{-- =========================================================
        VALUES
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section lk-values-section"
    >


        <div class="ac-container">


            <div class="lk-values-grid">


                <div class="lk-values-copy">


                    <span class="ac-eyebrow">

                        MESSAGE · RESPONSIBILITY · EMPATHY

                    </span>


                    <h2>

                        A sincere message
                        can travel
                        far beyond
                        its sender.

                    </h2>


                    <p>

                        Children connected
                        the historic letters
                        of the Seerah
                        with geography,
                        communication,
                        responsibility,
                        empathy
                        and the power
                        of thoughtful words.

                    </p>


                </div>



                <div class="lk-values-cards">


                    <article class="lk-value-card">


                        <i class="fas fa-globe"></i>


                        <h3>
                            Geography
                        </h3>


                        <p>

                            Understanding
                            the wider world
                            surrounding Arabia
                            at the time
                            of the Seerah.

                        </p>


                    </article>



                    <article class="lk-value-card">


                        <i class="fas fa-user-check"></i>


                        <h3>
                            Responsibility
                        </h3>


                        <p>

                            Choosing
                            the right person
                            for an important task.

                        </p>


                    </article>



                    <article class="lk-value-card">


                        <i class="fas fa-envelope"></i>


                        <h3>
                            Communication
                        </h3>


                        <p>

                            Words and messages
                            can build connections
                            across great distances.

                        </p>


                    </article>



                    <article class="lk-value-card">


                        <i class="fas fa-heart"></i>


                        <h3>
                            Empathy
                        </h3>


                        <p>

                            Turning learning
                            into care,
                            friendship
                            and generosity
                            towards others.

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
        class="ac-section sc-svg-section lk-video-section"
        id="event-videos"
    >


        <div class="ac-container">


            <div class="lk-section-heading">


                <span class="ac-eyebrow">

                    SESSION VIDEOS

                </span>


                <h2>

                    Watch Letters to Kings.

                </h2>


                <p>

                    Revisit moments
                    from this
                    Cycle 2 session.

                </p>


            </div>



            <div class="lk-video-grid">


                <article class="ac-card lk-video-card">


                    <div class="lk-video-frame">


                        <iframe
                            src="https://www.youtube.com/embed/XQ-JtsOfX9s?rel=0"
                            title="Letters to Kings Session Video 1"
                            loading="lazy"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>


                    </div>



                    <div class="lk-video-copy">


                        <span class="ac-eyebrow">

                            SESSION VIDEO 01

                        </span>


                        <h3>

                            Letters to Kings

                        </h3>


                        <p>

                            Revisit moments
                            from the original event.

                        </p>


                    </div>


                </article>



                <article class="ac-card lk-video-card">


                    <div class="lk-video-frame">


                        <iframe
                            src="https://www.youtube.com/embed/htx0206TjJ4?rel=0"
                            title="Letters to Kings Session Video 2"
                            loading="lazy"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>


                    </div>



                    <div class="lk-video-copy">


                        <span class="ac-eyebrow">

                            SESSION VIDEO 02

                        </span>


                        <h3>

                            Letters to Kings

                        </h3>


                        <p>

                            Continue exploring
                            activities
                            from the session.

                        </p>


                    </div>


                </article>


            </div>


        </div>


    </section>



    {{-- =========================================================
        PRESENTATION
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section lk-resource-section"
        id="event-material"
    >


        <div class="ac-container">


            <div class="lk-section-heading">


                <span class="ac-eyebrow">

                    PRESENTATION & MATERIALS

                </span>


                <h2>

                    Continue with
                    the session material.

                </h2>


                <p>

                    View the presentation
                    and learning resource
                    connected with
                    Letters to Kings.

                </p>


            </div>



            <article class="ac-card lk-resource-card">


                <div class="lk-resource-preview">


                    <iframe
                        src="https://drive.google.com/file/d/18NSMcqn4oOCwx_8pB3tmbBu0VcfoO2Xv/preview"
                        title="Letters to Kings Presentation"
                        loading="lazy"
                        allow="autoplay"
                    ></iframe>


                </div>



                <div class="lk-resource-copy">


                    <span class="ac-eyebrow">

                        PRESENTATION SLIDE PACK

                    </span>


                    <h3>

                        Letters to Kings

                    </h3>


                    <p>

                        Open the complete
                        session document
                        and presentation material
                        for this
                        Seerat Club session.

                    </p>



                    <div class="lk-resource-meta">


                        <span>

                            <i class="far fa-file-pdf"></i>

                            Session presentation

                        </span>


                        <span>

                            <i class="fas fa-book-open"></i>

                            Cycle 2 · Session 08

                        </span>


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            26 September 2026

                        </span>


                    </div>



                    <a
                        class="ac-btn ac-btn-secondary"
                        href="https://drive.google.com/file/d/18NSMcqn4oOCwx_8pB3tmbBu0VcfoO2Xv/view"
                        target="_blank"
                        rel="noopener noreferrer"
                    >

                        Open session material

                        <i class="fas fa-arrow-right"></i>

                    </a>


                </div>


            </article>


        </div>


    </section>



    {{-- =========================================================
        STATIC EVENT GALLERY
        g1.jpg TO g41.jpg
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section lk-gallery-section"
        id="event-gallery"
    >


        <div class="ac-container">


            <div class="lk-section-heading">


                <span class="ac-eyebrow">

                    EVENT PICTURES

                </span>


                <h2>

                    Moments from
                    Letters to Kings.

                </h2>


                <p>

                    Geography,
                    activities,
                    letter writing,
                    learning
                    and memorable moments
                    from this Cycle 2 session.

                </p>


                <span class="lk-gallery-count">

                    41 PHOTOGRAPHS

                </span>


            </div>



            <div
                class="lk-gallery"
                aria-label="Letters to Kings event gallery"
            >


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g1.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g1.jpg') }}" alt="Letters to Kings event photograph 1" loading="eager" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g2.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g2.jpg') }}" alt="Letters to Kings event photograph 2" loading="eager" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g3.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g3.jpg') }}" alt="Letters to Kings event photograph 3" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g4.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g4.jpg') }}" alt="Letters to Kings event photograph 4" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g5.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g5.jpg') }}" alt="Letters to Kings event photograph 5" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g6.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g6.jpg') }}" alt="Letters to Kings event photograph 6" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g7.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g7.jpg') }}" alt="Letters to Kings event photograph 7" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g8.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g8.jpg') }}" alt="Letters to Kings event photograph 8" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g9.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g9.jpg') }}" alt="Letters to Kings event photograph 9" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g10.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g10.jpg') }}" alt="Letters to Kings event photograph 10" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g11.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g11.jpg') }}" alt="Letters to Kings event photograph 11" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g12.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g12.jpg') }}" alt="Letters to Kings event photograph 12" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g13.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g13.jpg') }}" alt="Letters to Kings event photograph 13" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g14.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g14.jpg') }}" alt="Letters to Kings event photograph 14" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g15.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g15.jpg') }}" alt="Letters to Kings event photograph 15" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g16.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g16.jpg') }}" alt="Letters to Kings event photograph 16" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g17.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g17.jpg') }}" alt="Letters to Kings event photograph 17" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g18.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g18.jpg') }}" alt="Letters to Kings event photograph 18" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g19.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g19.jpg') }}" alt="Letters to Kings event photograph 19" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g20.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g20.jpg') }}" alt="Letters to Kings event photograph 20" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g21.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g21.jpg') }}" alt="Letters to Kings event photograph 21" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g22.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g22.jpg') }}" alt="Letters to Kings event photograph 22" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g23.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g23.jpg') }}" alt="Letters to Kings event photograph 23" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g24.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g24.jpg') }}" alt="Letters to Kings event photograph 24" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g25.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g25.jpg') }}" alt="Letters to Kings event photograph 25" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g26.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g26.jpg') }}" alt="Letters to Kings event photograph 26" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g27.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g27.jpg') }}" alt="Letters to Kings event photograph 27" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g28.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g28.jpg') }}" alt="Letters to Kings event photograph 28" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g29.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g29.jpg') }}" alt="Letters to Kings event photograph 29" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g30.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g30.jpg') }}" alt="Letters to Kings event photograph 30" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g31.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g31.jpg') }}" alt="Letters to Kings event photograph 31" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g32.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g32.jpg') }}" alt="Letters to Kings event photograph 32" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g33.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g33.jpg') }}" alt="Letters to Kings event photograph 33" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g34.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g34.jpg') }}" alt="Letters to Kings event photograph 34" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g35.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g35.jpg') }}" alt="Letters to Kings event photograph 35" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g36.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g36.jpg') }}" alt="Letters to Kings event photograph 36" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g37.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g37.jpg') }}" alt="Letters to Kings event photograph 37" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g38.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g38.jpg') }}" alt="Letters to Kings event photograph 38" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g39.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g39.jpg') }}" alt="Letters to Kings event photograph 39" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g40.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g40.jpg') }}" alt="Letters to Kings event photograph 40" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="lk-gallery-item">
                    <a data-fancybox="letter-king-gallery" href="{{ asset('assets/images/letter-king/gallery/g41.jpg') }}">
                        <img src="{{ asset('assets/images/letter-king/gallery/g41.jpg') }}" alt="Letters to Kings event photograph 41" loading="lazy" decoding="async">
                    </a>
                </figure>


            </div>


        </div>


    </section>



    {{-- =========================================================
        NAVIGATION
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section lk-cycle-section"
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
                        'past-events.cycle-2-2026-onwards.ghazwa-e-khyber'
                    ) }}"
                >


                    <small>

                        Previous chapter

                    </small>


                    <strong>

                        Ghazwa e Khyber

                        <span aria-hidden="true">
                            ↗
                        </span>

                    </strong>


                </a>



                <a
                    href="{{ route(
                        'past-events.cycle-2-2026-onwards.index'
                    ) }}"
                >


                    <small>

                        Back to

                    </small>


                    <strong>

                        Cycle 2

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
