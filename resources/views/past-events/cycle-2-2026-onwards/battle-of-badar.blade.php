@extends("Layout.layout")

@section('title', 'Battle of Badar · Seerat Club')

@section("Content")


<link
    rel="stylesheet"
    href="{{ asset('assets/css/past-events-premium.css') }}"
>


<style>

/* ================================================================
   BATTLE OF BADAR
   STATIC PREMIUM EVENT PAGE
   ================================================================ */

.badar-premium-page {

    --bd-green: #173b31;
    --bd-dark: #102b24;
    --bd-gold: #c99d45;
    --bd-gold-light: #efdca6;
    --bd-cream: #f8f5ed;
    --bd-soft: #fbfaf6;
    --bd-muted: #5d6b66;

    --bd-border:
        rgba(23,59,49,.10);

    --bd-shadow:
        0 18px 55px
        rgba(20,52,43,.10);

    --bd-shadow-lg:
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

.badar-premium-page h1,
.badar-premium-page h2,
.badar-premium-page h3,
.badar-premium-page h4,
.badar-premium-page h5,
.badar-premium-page h6,
.badar-premium-page .ac-btn,
.badar-premium-page .ac-eyebrow,
.badar-premium-page .sc-chapter-links strong {

    font-family:
        "Baloo 2",
        "SC Arabic",
        sans-serif !important;
}


.badar-premium-page p,
.badar-premium-page li,
.badar-premium-page .bd-meta,
.badar-premium-page .ac-breadcrumb,
.badar-premium-page .bd-resource-meta,
.badar-premium-page .sc-chapter-links small {

    font-family:
        "DM Sans",
        "SC Arabic",
        sans-serif !important;
}


/* ================================================================
   HERO
   ================================================================ */

.badar-premium-page
.bd-hero {

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


/* old .93 pale overlay removed */

.badar-premium-page
.bd-hero::before {

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


.badar-premium-page
.bd-hero::after {

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


.badar-premium-page
.bd-hero
.ac-container {

    position:
        relative;

    z-index:
        3;
}


/* ================================================================
   BREADCRUMB
   ================================================================ */

.badar-premium-page
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


.badar-premium-page
.ac-breadcrumb a {

    color:
        #ffffff !important;

    text-decoration:
        none;
}


.badar-premium-page
.ac-breadcrumb a:hover {

    color:
        var(--bd-gold-light) !important;
}


/* ================================================================
   HERO GRID
   ================================================================ */

.badar-premium-page
.bd-hero-grid {

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

.badar-premium-page
.bd-hero-copy {

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
        var(--bd-shadow-lg) !important;

    backdrop-filter:
        none !important;

    -webkit-backdrop-filter:
        none !important;
}


.badar-premium-page
.bd-hero-copy::before {

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
            var(--bd-gold),
            #efd593
        );
}


.badar-premium-page
.bd-hero-copy
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


.badar-premium-page
.bd-hero-copy h1 {

    max-width:
        700px;

    margin:
        23px 0 22px !important;

    color:
        var(--bd-dark) !important;

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


.badar-premium-page
.bd-hero-lead {

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

.badar-premium-page
.bd-meta {

    display:
        flex;

    flex-wrap:
        wrap;

    gap:
        11px;

    margin:
        26px 0 30px;
}


.badar-premium-page
.bd-meta > span {

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


.badar-premium-page
.bd-meta i {

    color:
        #aa8438;
}


/* ================================================================
   BUTTONS
   ================================================================ */

.badar-premium-page
.ac-actions {

    display:
        flex;

    flex-wrap:
        wrap;

    gap:
        13px;
}


.badar-premium-page
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
        var(--bd-gold) !important;

    border-radius:
        999px !important;

    background:
        var(--bd-gold) !important;

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


.badar-premium-page
.ac-btn:hover {

    transform:
        translateY(-2px);

    background:
        #d5aa51 !important;
}


.badar-premium-page
.ac-btn-secondary {

    border-color:
        rgba(23,59,49,.13) !important;

    background:
        #ffffff !important;

    color:
        var(--bd-dark) !important;

    box-shadow:
        0 10px 25px
        rgba(16,43,36,.07);
}


/* ================================================================
   POSTER
   ================================================================ */

.badar-premium-page
.bd-poster {

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
        var(--bd-shadow-lg) !important;

    transform:
        rotate(1deg);

    transition:
        .3s ease;
}


.badar-premium-page
.bd-poster:hover {

    transform:
        rotate(0)
        translateY(-5px);
}


.badar-premium-page
.bd-poster a {

    display:
        block;

    overflow:
        hidden;

    border-radius:
        21px;
}


.badar-premium-page
.bd-poster img {

    display:
        block;

    width:
        100%;

    aspect-ratio:
        4 / 5;

    object-fit:
        contain;

    background:
        #f4f2ea;

    transition:
        transform .45s ease;
}


.badar-premium-page
.bd-poster:hover img {

    transform:
        scale(1.02);
}


.badar-premium-page
.bd-poster figcaption {

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

.badar-premium-page
.bd-story-section {

    background:
        radial-gradient(
            circle at 8% 8%,
            rgba(201,157,69,.09),
            transparent 25%
        ),
        #f9f7f0 !important;
}


.badar-premium-page
.bd-story-grid {

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


.badar-premium-page
.bd-story-copy {

    max-width:
        800px;
}


.badar-premium-page
.bd-story-copy h2 {

    margin:
        15px 0 22px;

    color:
        var(--bd-dark) !important;

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


.badar-premium-page
.bd-story-copy h3 {

    margin:
        35px 0 12px;

    color:
        var(--bd-dark) !important;

    font-size:
        29px !important;

    font-weight:
        700 !important;

    line-height:
        1.15;
}


.badar-premium-page
.bd-lead {

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


.badar-premium-page
.bd-story-copy p {

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

.badar-premium-page
.bd-story-aside {

    position:
        sticky;

    top:
        120px;
}


.badar-premium-page
.bd-takeaway {

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
        var(--bd-shadow) !important;
}


.badar-premium-page
.bd-takeaway::after {

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


.badar-premium-page
.bd-takeaway
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.badar-premium-page
.bd-takeaway h3 {

    margin:
        14px 0 18px;

    color:
        #ffffff !important;

    font-size:
        27px !important;

    line-height:
        1.18;
}


.badar-premium-page
.bd-takeaway > p {

    color:
        rgba(255,255,255,.70) !important;

    font-size:
        14px !important;

    line-height:
        1.72 !important;
}


.badar-premium-page
.bd-points {

    display:
        grid;

    gap:
        10px;

    margin-top:
        24px;
}


.badar-premium-page
.bd-points span {

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


.badar-premium-page
.bd-points i {

    width:
        19px;

    color:
        #e6c878;

    text-align:
        center;
}


/* ================================================================
   DUA TAWAKKUL STRATEGY
   ================================================================ */

.badar-premium-page
.bd-values-section {

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


.badar-premium-page
.bd-values-section::after {

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


.badar-premium-page
.bd-values-grid {

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


.badar-premium-page
.bd-values-copy
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.badar-premium-page
.bd-values-copy h2 {

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


.badar-premium-page
.bd-values-copy p {

    color:
        rgba(255,255,255,.73) !important;

    font-size:
        16px;

    line-height:
        1.85;
}


.badar-premium-page
.bd-values-cards {

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


.badar-premium-page
.bd-values-card {

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


.badar-premium-page
.bd-values-card i {

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


.badar-premium-page
.bd-values-card h3 {

    margin:
        0 0 8px;

    color:
        #ffffff !important;

    font-size:
        21px;

    line-height:
        1.2;
}


.badar-premium-page
.bd-values-card p {

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

.badar-premium-page
.bd-section-heading {

    max-width:
        760px;

    margin-bottom:
        42px;
}


.badar-premium-page
.bd-section-heading h2 {

    margin:
        13px 0;

    color:
        var(--bd-dark);

    font-size:
        clamp(
            38px,
            4vw,
            52px
        );

    line-height:
        1.08;
}


.badar-premium-page
.bd-section-heading p {

    color:
        #64716c;

    font-size:
        16px;

    line-height:
        1.8;
}


/* ================================================================
   DOCUMENT
   ================================================================ */

.badar-premium-page
.bd-resource-section {

    background:
        #fbfaf6 !important;
}


.badar-premium-page
.bd-resource-card {

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
        var(--bd-border) !important;

    border-radius:
        30px !important;

    background:
        #ffffff !important;

    box-shadow:
        var(--bd-shadow) !important;
}


.badar-premium-page
.bd-resource-preview {

    min-height:
        540px;

    background:
        #e9ece6;
}


.badar-premium-page
.bd-resource-preview iframe {

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


.badar-premium-page
.bd-resource-copy {

    display:
        flex;

    flex-direction:
        column;

    justify-content:
        center;

    padding:
        44px 38px;
}


.badar-premium-page
.bd-resource-copy h3 {

    margin:
        13px 0 15px;

    color:
        var(--bd-dark);

    font-size:
        clamp(
            28px,
            2.5vw,
            35px
        );

    line-height:
        1.13;
}


.badar-premium-page
.bd-resource-copy p {

    margin:
        0 0 24px;

    color:
        #5f6b67;

    font-size:
        16px;

    line-height:
        1.8;
}


.badar-premium-page
.bd-resource-meta {

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


.badar-premium-page
.bd-resource-meta span {

    display:
        flex;

    align-items:
        center;

    gap:
        11px;
}


.badar-premium-page
.bd-resource-meta i {

    width:
        18px;

    color:
        #b68d3d;

    text-align:
        center;
}


.badar-premium-page
.bd-resource-copy
.ac-btn {

    width:
        fit-content;
}


/* ================================================================
   GALLERY
   ================================================================ */

.badar-premium-page
.bd-gallery-section {

    background:
        linear-gradient(
            180deg,
            #e8eee6,
            #f3f0e7
        ) !important;
}


.badar-premium-page
.bd-gallery-count {

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


.badar-premium-page
.bd-gallery {

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


.badar-premium-page
.bd-gallery-item {

    margin:
        0;

    padding:
        6px;

    overflow:
        hidden;

    border:
        1px solid
        var(--bd-border);

    border-radius:
        23px;

    background:
        #ffffff;

    box-shadow:
        var(--bd-shadow);

    transition:
        transform .3s ease,
        box-shadow .3s ease;
}


.badar-premium-page
.bd-gallery-item:hover {

    transform:
        translateY(-5px);

    box-shadow:
        0 22px 55px
        rgba(20,52,43,.13);
}


.badar-premium-page
.bd-gallery-item a {

    display:
        block;

    aspect-ratio:
        4 / 3;

    overflow:
        hidden;

    border-radius:
        17px;
}


.badar-premium-page
.bd-gallery-item img {

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


.badar-premium-page
.bd-gallery-item:hover img {

    transform:
        scale(1.045);
}


/* ================================================================
   CYCLE NAVIGATION
   ================================================================ */

.badar-premium-page
.bd-cycle-section {

    background:
        #e7ece4 !important;
}


.badar-premium-page
.bd-cycle-section
.ac-heading {

    margin-bottom:
        30px;
}


.badar-premium-page
.bd-cycle-section h2 {

    margin:
        12px 0;

    color:
        var(--bd-dark);

    font-size:
        clamp(
            34px,
            4vw,
            50px
        );
}


.badar-premium-page
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


.badar-premium-page
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
        var(--bd-border);

    border-radius:
        20px;

    background:
        rgba(255,255,255,.82);

    color:
        var(--bd-dark);

    text-decoration:
        none;

    box-shadow:
        0 10px 30px
        rgba(20,52,43,.05);

    transition:
        .25s ease;
}


.badar-premium-page
.sc-chapter-links > a:hover {

    transform:
        translateY(-4px);

    background:
        #ffffff;

    box-shadow:
        var(--bd-shadow);
}


.badar-premium-page
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


.badar-premium-page
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

    .badar-premium-page
    .bd-hero-grid {

        grid-template-columns:
            1fr 330px;
    }


    .badar-premium-page
    .bd-story-grid {

        grid-template-columns:
            1fr 290px;
    }


    .badar-premium-page
    .bd-resource-card {

        grid-template-columns:
            1fr;
    }


    .badar-premium-page
    .bd-resource-preview,
    .badar-premium-page
    .bd-resource-preview iframe {

        min-height:
            480px;
    }

}


@media (max-width:850px) {

    .badar-premium-page
    .bd-hero {

        min-height:
            auto;

        padding-bottom:
            65px !important;
    }


    .badar-premium-page
    .bd-hero-grid {

        grid-template-columns:
            1fr;
    }


    .badar-premium-page
    .bd-poster {

        width:
            min(520px,100%);

        margin-inline:
            auto;

        transform:
            none;
    }


    .badar-premium-page
    .bd-story-grid {

        grid-template-columns:
            1fr;
    }


    .badar-premium-page
    .bd-story-aside {

        position:
            static;
    }


    .badar-premium-page
    .bd-values-grid {

        grid-template-columns:
            1fr;

        gap:
            38px;
    }


    .badar-premium-page
    .bd-gallery {

        grid-template-columns:
            repeat(
                2,
                minmax(0,1fr)
            );
    }

}


@media (max-width:650px) {

    .badar-premium-page
    .bd-hero {

        border-radius:
            0 0 28px 28px;
    }


    .badar-premium-page
    .bd-hero-copy {

        padding:
            30px 23px !important;

        border-radius:
            25px !important;
    }


    .badar-premium-page
    .bd-hero-copy h1 {

        font-size:
            clamp(
                44px,
                13vw,
                62px
            ) !important;
    }


    .badar-premium-page
    .bd-meta {

        flex-direction:
            column;

        align-items:
            flex-start;
    }


    .badar-premium-page
    .ac-actions {

        flex-direction:
            column;
    }


    .badar-premium-page
    .ac-btn {

        width:
            100%;
    }


    .badar-premium-page
    .bd-values-cards,
    .badar-premium-page
    .bd-gallery {

        grid-template-columns:
            1fr;
    }


    .badar-premium-page
    .bd-resource-preview,
    .badar-premium-page
    .bd-resource-preview iframe {

        min-height:
            410px;
    }


    .badar-premium-page
    .bd-resource-copy {

        padding:
            30px 23px;
    }


    .badar-premium-page
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
        badar-premium-page
    "
>


    {{-- =========================================================
        HERO
        STATIC HERO.PNG
    ========================================================== --}}

    <section
        class="ac-masthead bd-hero"
        style="
            background-image:
                url('{{ asset('assets/images/battle-of-badar/hero.png') }}');
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

                <a href="{{ route('past-events.cycle-2-2026-onwards.index') }}">
                    Cycle 2
                </a>

                <span>/</span>

                <span aria-current="page">
                    Battle of Badar
                </span>

            </nav>



            <div class="bd-hero-grid">


                <div class="bd-hero-copy">


                    <span class="ac-eyebrow">

                        CYCLE 2 · SESSION 03

                    </span>


                    <h1>

                        Battle of Badar

                    </h1>


                    <p class="bd-hero-lead">

                        Exploring the lessons
                        of Dua,
                        Tawakkul
                        and thoughtful strategy
                        through one of
                        the defining moments
                        of the Seerah.

                    </p>



                    <div class="bd-meta">


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            <b>
                                11 April 2026
                            </b>

                        </span>


                        <span>

                            <i class="fas fa-book-open"></i>

                            <b>
                                Cycle 2 · Session 03
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



                <figure class="bd-poster">


                    <a
                        data-fancybox="badar-poster"
                        href="{{ asset('assets/images/battle-of-badar/hero.png') }}"
                    >

                        <img
                            src="{{ asset('assets/images/battle-of-badar/hero.png') }}"
                            alt="Battle of Badar event poster"
                        >

                    </a>


                    <figcaption>

                        Battle of Badar ·
                        Seerat Club Cycle 2

                    </figcaption>


                </figure>


            </div>


        </div>


    </section>



    {{-- =========================================================
        EVENT STORY
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section bd-story-section"
        id="event-story"
    >


        <div class="ac-container">


            <div class="bd-story-grid">


                <article class="ac-prose bd-story-copy">


                    <span class="ac-eyebrow">

                        THE SESSION

                    </span>


                    <h2>

                        Dua,
                        Tawakkul
                        and thoughtful strategy.

                    </h2>


                    <p class="bd-lead">

                        Cycle 2 · Session 03

                    </p>


                    <p>

                        The third session
                        of Seerat Club Cycle 2
                        was held on
                        11 April 2026
                        and focused on
                        lessons from
                        the Battle of Badr.

                    </p>


                    <p>

                        Children explored
                        how victory is connected
                        with sincere Dua,
                        complete trust in Allah
                        and careful strategy.

                    </p>


                    <p>

                        The session introduced
                        Dua as one
                        of the most powerful
                        resources available
                        to a believer
                        and reflected
                        on the role
                        of sincere supplication
                        during the Battle of Badr.

                    </p>


                    <h3>

                        Celebrating
                        their first fast

                    </h3>


                    <p>

                        The gathering also
                        celebrated children
                        who had completed
                        their first fast
                        during Ramadan.

                    </p>


                    <p>

                        A cake cutting ceremony
                        made the occasion
                        especially memorable
                        for the young participants.

                    </p>


                    <h3>

                        Building
                        strong believers

                    </h3>


                    <p>

                        After the discussion,
                        children participated
                        in fitness based activities
                        that reinforced
                        the importance
                        of physical strength
                        and discipline.

                    </p>


                    <p>

                        Activities for
                        the younger group
                        were led by
                        Anas Paracha,
                        founder of TAP Institute,
                        whose programs focus
                        on gymnastics,
                        calisthenics
                        and kickboxing
                        for children.

                    </p>


                    <p>

                        The older group
                        was guided
                        by Mr. Mazhar,
                        who has represented
                        Pakistan
                        at international
                        gymnastics events.

                    </p>


                </article>



                <aside class="bd-story-aside">


                    <div class="bd-takeaway ac-card">


                        <span class="ac-eyebrow">

                            KEY LESSONS

                        </span>


                        <h3>

                            Faith supported
                            by preparation.

                        </h3>


                        <p>

                            The session helped
                            children understand
                            that Tawakkul
                            does not mean
                            leaving preparation
                            behind.

                        </p>



                        <div class="bd-points">


                            <span>

                                <i class="fas fa-hands"></i>

                                Dua

                            </span>


                            <span>

                                <i class="fas fa-heart"></i>

                                Tawakkul

                            </span>


                            <span>

                                <i class="fas fa-chess"></i>

                                Strategy

                            </span>


                            <span>

                                <i class="fas fa-running"></i>

                                Strength

                            </span>


                        </div>


                    </div>


                </aside>


            </div>


        </div>


    </section>



    {{-- =========================================================
        DUA · TAWAKKUL · STRATEGY
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section bd-values-section"
    >


        <div class="ac-container">


            <div class="bd-values-grid">


                <div class="bd-values-copy">


                    <span class="ac-eyebrow">

                        DUA · TAWAKKUL · STRATEGY

                    </span>


                    <h2>

                        Trust in Allah
                        and prepare well.

                    </h2>


                    <p>

                        The session connected
                        spiritual strength
                        with thoughtful action.

                        Children learned
                        that sincere Dua,
                        Tawakkul,
                        planning
                        and physical discipline
                        can work together
                        rather than separately.

                    </p>


                </div>



                <div class="bd-values-cards">


                    <article class="bd-values-card">


                        <i class="fas fa-hands"></i>


                        <h3>
                            Dua
                        </h3>


                        <p>

                            Turning sincerely
                            towards Allah
                            in moments
                            of challenge.

                        </p>


                    </article>



                    <article class="bd-values-card">


                        <i class="fas fa-heart"></i>


                        <h3>
                            Tawakkul
                        </h3>


                        <p>

                            Placing trust
                            in Allah
                            while still
                            taking responsible action.

                        </p>


                    </article>



                    <article class="bd-values-card">


                        <i class="fas fa-chess"></i>


                        <h3>
                            Strategy
                        </h3>


                        <p>

                            Thinking carefully
                            and preparing
                            before taking action.

                        </p>


                    </article>



                    <article class="bd-values-card">


                        <i class="fas fa-running"></i>


                        <h3>
                            Strength
                        </h3>


                        <p>

                            Building discipline,
                            fitness
                            and resilience
                            through practice.

                        </p>


                    </article>


                </div>


            </div>


        </div>


    </section>



    {{-- =========================================================
        SESSION DOCUMENT
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section bd-resource-section"
    >


        <div class="ac-container">


            <div class="bd-section-heading">


                <span class="ac-eyebrow">

                    SESSION DOCUMENT

                </span>


                <h2>

                    Battle of Badar
                    presentation.

                </h2>


                <p>

                    Read the original
                    Battle of Badar
                    session document
                    directly below.

                </p>


            </div>



            <article class="ac-card bd-resource-card">


                <div class="bd-resource-preview">


                    <iframe
                        src="https://drive.google.com/file/d/1WkJIkO4Psw094oJiT_lzQ9fcENCcO4Z3/preview"
                        title="Battle of Badar session document"
                        loading="lazy"
                        allow="autoplay"
                    ></iframe>


                </div>



                <div class="bd-resource-copy">


                    <span class="ac-eyebrow">

                        PRESENTATION SLIDE PACK

                    </span>


                    <h3>

                        Battle of Badar

                    </h3>


                    <p>

                        Revisit the original
                        Cycle 2 Session 03
                        document directly
                        on this page
                        or open the complete
                        material in Google Drive.

                    </p>



                    <div class="bd-resource-meta">


                        <span>

                            <i class="far fa-file-pdf"></i>

                            Battle of Badar document

                        </span>


                        <span>

                            <i class="fas fa-book-open"></i>

                            Cycle 2 · Session 03

                        </span>


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            11 April 2026

                        </span>


                    </div>



                    <a
                        class="ac-btn ac-btn-secondary"
                        href="https://drive.google.com/file/d/1WkJIkO4Psw094oJiT_lzQ9fcENCcO4Z3/view"
                        target="_blank"
                        rel="noopener noreferrer"
                    >

                        Open full document

                        <i class="fas fa-arrow-right"></i>

                    </a>


                </div>


            </article>


        </div>


    </section>



    {{-- =========================================================
        STATIC EVENT GALLERY
        1.JPG TO 64.JPG
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section bd-gallery-section"
        id="event-gallery"
    >


        <div class="ac-container">


            <div class="bd-section-heading">


                <span class="ac-eyebrow">

                    EVENT PICTURES

                </span>


                <h2>

                    Moments from
                    Battle of Badar.

                </h2>


                <p>

                    Original event photographs
                    from the
                    Battle of Badar session.

                </p>


                <span class="bd-gallery-count">

                    64 PHOTOGRAPHS

                </span>


            </div>



            <div class="bd-gallery">


                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/1.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/1.jpg') }}" alt="Battle of Badar event photograph 1" loading="eager" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/2.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/2.jpg') }}" alt="Battle of Badar event photograph 2" loading="eager" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/3.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/3.jpg') }}" alt="Battle of Badar event photograph 3" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/4.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/4.jpg') }}" alt="Battle of Badar event photograph 4" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/5.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/5.jpg') }}" alt="Battle of Badar event photograph 5" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/6.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/6.jpg') }}" alt="Battle of Badar event photograph 6" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/7.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/7.jpg') }}" alt="Battle of Badar event photograph 7" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/8.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/8.jpg') }}" alt="Battle of Badar event photograph 8" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/9.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/9.jpg') }}" alt="Battle of Badar event photograph 9" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/10.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/10.jpg') }}" alt="Battle of Badar event photograph 10" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/11.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/11.jpg') }}" alt="Battle of Badar event photograph 11" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/12.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/12.jpg') }}" alt="Battle of Badar event photograph 12" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/13.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/13.jpg') }}" alt="Battle of Badar event photograph 13" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/14.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/14.jpg') }}" alt="Battle of Badar event photograph 14" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/15.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/15.jpg') }}" alt="Battle of Badar event photograph 15" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/16.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/16.jpg') }}" alt="Battle of Badar event photograph 16" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/17.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/17.jpg') }}" alt="Battle of Badar event photograph 17" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/18.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/18.jpg') }}" alt="Battle of Badar event photograph 18" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/19.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/19.jpg') }}" alt="Battle of Badar event photograph 19" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/20.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/20.jpg') }}" alt="Battle of Badar event photograph 20" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/21.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/21.jpg') }}" alt="Battle of Badar event photograph 21" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/22.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/22.jpg') }}" alt="Battle of Badar event photograph 22" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/23.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/23.jpg') }}" alt="Battle of Badar event photograph 23" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/24.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/24.jpg') }}" alt="Battle of Badar event photograph 24" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/25.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/25.jpg') }}" alt="Battle of Badar event photograph 25" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/26.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/26.jpg') }}" alt="Battle of Badar event photograph 26" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/27.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/27.jpg') }}" alt="Battle of Badar event photograph 27" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/28.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/28.jpg') }}" alt="Battle of Badar event photograph 28" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/29.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/29.jpg') }}" alt="Battle of Badar event photograph 29" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/30.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/30.jpg') }}" alt="Battle of Badar event photograph 30" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/31.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/31.jpg') }}" alt="Battle of Badar event photograph 31" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/32.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/32.jpg') }}" alt="Battle of Badar event photograph 32" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/33.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/33.jpg') }}" alt="Battle of Badar event photograph 33" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/34.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/34.jpg') }}" alt="Battle of Badar event photograph 34" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/35.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/35.jpg') }}" alt="Battle of Badar event photograph 35" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/36.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/36.jpg') }}" alt="Battle of Badar event photograph 36" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/37.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/37.jpg') }}" alt="Battle of Badar event photograph 37" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/38.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/38.jpg') }}" alt="Battle of Badar event photograph 38" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/39.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/39.jpg') }}" alt="Battle of Badar event photograph 39" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/40.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/40.jpg') }}" alt="Battle of Badar event photograph 40" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/41.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/41.jpg') }}" alt="Battle of Badar event photograph 41" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/42.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/42.jpg') }}" alt="Battle of Badar event photograph 42" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/43.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/43.jpg') }}" alt="Battle of Badar event photograph 43" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/44.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/44.jpg') }}" alt="Battle of Badar event photograph 44" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/45.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/45.jpg') }}" alt="Battle of Badar event photograph 45" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/46.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/46.jpg') }}" alt="Battle of Badar event photograph 46" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/47.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/47.jpg') }}" alt="Battle of Badar event photograph 47" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/48.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/48.jpg') }}" alt="Battle of Badar event photograph 48" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/49.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/49.jpg') }}" alt="Battle of Badar event photograph 49" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/50.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/50.jpg') }}" alt="Battle of Badar event photograph 50" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/51.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/51.jpg') }}" alt="Battle of Badar event photograph 51" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/52.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/52.jpg') }}" alt="Battle of Badar event photograph 52" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/53.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/53.jpg') }}" alt="Battle of Badar event photograph 53" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/54.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/54.jpg') }}" alt="Battle of Badar event photograph 54" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/55.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/55.jpg') }}" alt="Battle of Badar event photograph 55" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/56.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/56.jpg') }}" alt="Battle of Badar event photograph 56" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/57.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/57.jpg') }}" alt="Battle of Badar event photograph 57" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/58.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/58.jpg') }}" alt="Battle of Badar event photograph 58" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/59.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/59.jpg') }}" alt="Battle of Badar event photograph 59" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/60.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/60.jpg') }}" alt="Battle of Badar event photograph 60" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/61.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/61.jpg') }}" alt="Battle of Badar event photograph 61" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/62.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/62.jpg') }}" alt="Battle of Badar event photograph 62" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/63.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/63.jpg') }}" alt="Battle of Badar event photograph 63" loading="lazy" decoding="async">
                    </a>
                </figure>

                <figure class="bd-gallery-item">
                    <a data-fancybox="badar-gallery" href="{{ asset('assets/images/battle-of-badar/64.jpg') }}">
                        <img src="{{ asset('assets/images/battle-of-badar/64.jpg') }}" alt="Battle of Badar event photograph 64" loading="lazy" decoding="async">
                    </a>
                </figure>


            </div>


        </div>


    </section>



    {{-- =========================================================
        CYCLE 2 NAVIGATION
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section bd-cycle-section"
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
                aria-label="Event navigation"
                class="sc-chapter-links"
            >


                <a
                    href="{{ route(
                        'past-events.cycle-2-2026-onwards.istiqbaal-e-ramadan'
                    ) }}"
                >


                    <small>

                        Previous chapter

                    </small>


                    <strong>

                        Istiqbaal e Ramadan

                        <span aria-hidden="true">
                            ↗
                        </span>

                    </strong>


                </a>



                <a
                    href="{{ route(
                        'past-events.cycle-2-2026-onwards.ghazwa-e-uhud'
                    ) }}"
                >


                    <small>

                        Next chapter

                    </small>


                    <strong>

                        Ghazwa e Uhud

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
