@extends("Layout.layout")

@section('title', 'Istiqbaal e Ramadan · Seerat Club')

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
   ISTIQBAAL E RAMADAN
   STATIC PREMIUM EVENT PAGE
   ================================================================ */

.istiqbaal-premium-page {

    --ir-green: #173b31;
    --ir-dark: #102b24;
    --ir-gold: #c99d45;
    --ir-gold-light: #efdca6;
    --ir-cream: #f8f5ed;
    --ir-soft: #fbfaf6;
    --ir-muted: #5d6b66;

    --ir-border:
        rgba(23,59,49,.10);

    --ir-shadow:
        0 18px 55px
        rgba(20,52,43,.10);

    --ir-shadow-lg:
        0 30px 90px
        rgba(13,44,36,.17);

    background: #ffffff;
    color: #172923;
}


/* ================================================================
   TYPOGRAPHY
   ================================================================ */

.istiqbaal-premium-page h1,
.istiqbaal-premium-page h2,
.istiqbaal-premium-page h3,
.istiqbaal-premium-page h4,
.istiqbaal-premium-page h5,
.istiqbaal-premium-page h6,
.istiqbaal-premium-page .ac-btn,
.istiqbaal-premium-page .ac-eyebrow,
.istiqbaal-premium-page .sc-chapter-links strong {

    font-family:
        "Baloo 2",
        "SC Arabic",
        sans-serif !important;
}


.istiqbaal-premium-page p,
.istiqbaal-premium-page li,
.istiqbaal-premium-page .ir-meta,
.istiqbaal-premium-page .ac-breadcrumb,
.istiqbaal-premium-page .sc-chapter-links small {

    font-family:
        "DM Sans",
        "SC Arabic",
        sans-serif !important;
}


/* ================================================================
   HERO
   ================================================================ */

.istiqbaal-premium-page
.ir-hero {

    position: relative;

    isolation: isolate;

    min-height: 690px;

    overflow: hidden;

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


.istiqbaal-premium-page
.ir-hero::before {

    content: "";

    position: absolute;

    inset: 0;

    z-index: -1;

    background:
        linear-gradient(
            90deg,
            rgba(10,39,32,.80) 0%,
            rgba(10,39,32,.52) 42%,
            rgba(10,39,32,.18) 72%,
            rgba(10,39,32,.05) 100%
        );
}


.istiqbaal-premium-page
.ir-hero::after {

    content: "";

    position: absolute;

    width: 520px;
    height: 520px;

    right: -190px;
    top: -190px;

    border-radius: 50%;

    background:
        radial-gradient(
            circle,
            rgba(238,213,145,.24),
            transparent 68%
        );

    pointer-events: none;
}


.istiqbaal-premium-page
.ir-hero
.ac-container {

    position: relative;
    z-index: 3;
}


/* ================================================================
   BREADCRUMB
   ================================================================ */

.istiqbaal-premium-page
.ac-breadcrumb {

    display: flex;

    flex-wrap: wrap;

    align-items: center;

    gap: 9px;

    padding-top: 34px;

    margin-bottom: 36px;

    color:
        rgba(255,255,255,.72) !important;

    font-size: 13px;
}


.istiqbaal-premium-page
.ac-breadcrumb a {

    color:
        #ffffff !important;

    text-decoration: none;
}


.istiqbaal-premium-page
.ac-breadcrumb a:hover {

    color:
        var(--ir-gold-light) !important;
}


/* ================================================================
   HERO GRID
   ================================================================ */

.istiqbaal-premium-page
.ir-hero-grid {

    display: grid;

    grid-template-columns:
        minmax(0,1.12fr)
        minmax(330px,.74fr);

    align-items: center;

    gap:
        clamp(45px,6vw,82px);
}


/* ================================================================
   HERO COPY
   ================================================================ */

.istiqbaal-premium-page
.ir-hero-copy {

    position: relative;

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
        var(--ir-shadow-lg) !important;

    backdrop-filter:
        none !important;

    -webkit-backdrop-filter:
        none !important;
}


.istiqbaal-premium-page
.ir-hero-copy::before {

    content: "";

    position: absolute;

    top: 0;
    left: 42px;

    width: 95px;
    height: 4px;

    border-radius:
        0 0 8px 8px;

    background:
        linear-gradient(
            90deg,
            var(--ir-gold),
            #efd593
        );
}


.istiqbaal-premium-page
.ir-hero-copy
.ac-eyebrow {

    display: inline-flex;

    align-items: center;

    padding:
        9px 14px;

    border:
        1px solid
        rgba(201,157,69,.38);

    border-radius: 999px;

    background:
        #f0ead8;

    color:
        #a2782a !important;

    font-size: 12px;

    font-weight: 700;

    letter-spacing: .12em;
}


.istiqbaal-premium-page
.ir-hero-copy h1 {

    max-width: 730px;

    margin:
        23px 0 22px !important;

    color:
        var(--ir-dark) !important;

    font-size:
        clamp(
            47px,
            5.3vw,
            76px
        ) !important;

    font-weight:
        700 !important;

    line-height:
        1 !important;

    letter-spacing:
        -.03em !important;
}


.istiqbaal-premium-page
.ir-hero-lead {

    max-width: 630px;

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

.istiqbaal-premium-page
.ir-meta {

    display: flex;

    flex-wrap: wrap;

    gap: 11px;

    margin:
        26px 0 30px;
}


.istiqbaal-premium-page
.ir-meta > span {

    display: inline-flex;

    align-items: center;

    gap: 9px;

    padding:
        11px 14px;

    border:
        1px solid
        rgba(23,59,49,.11);

    border-radius: 999px;

    background:
        rgba(255,255,255,.74);

    color:
        #53635d;

    font-size: 13px;
}


.istiqbaal-premium-page
.ir-meta i {

    color:
        #aa8438;
}


/* ================================================================
   BUTTONS
   ================================================================ */

.istiqbaal-premium-page
.ac-actions {

    display: flex;

    flex-wrap: wrap;

    gap: 13px;
}


.istiqbaal-premium-page
.ac-btn {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 11px;

    min-height: 52px;

    padding:
        13px 24px !important;

    border:
        1px solid
        var(--ir-gold) !important;

    border-radius:
        999px !important;

    background:
        var(--ir-gold) !important;

    color:
        #102b24 !important;

    font-weight:
        700 !important;

    text-decoration: none;

    box-shadow:
        0 12px 30px
        rgba(201,157,69,.22);

    transition:
        .25s ease !important;
}


.istiqbaal-premium-page
.ac-btn:hover {

    transform:
        translateY(-2px);

    background:
        #d5aa51 !important;
}


.istiqbaal-premium-page
.ac-btn-secondary {

    border-color:
        rgba(23,59,49,.13) !important;

    background:
        #ffffff !important;

    color:
        var(--ir-dark) !important;

    box-shadow:
        0 10px 25px
        rgba(16,43,36,.07);
}


/* ================================================================
   POSTER
   ================================================================ */

.istiqbaal-premium-page
.ir-poster {

    margin: 0;

    padding:
        12px !important;

    overflow: hidden;

    border:
        1px solid
        rgba(255,255,255,.70) !important;

    border-radius:
        30px !important;

    background:
        rgba(255,255,255,.94) !important;

    box-shadow:
        var(--ir-shadow-lg) !important;

    transform:
        rotate(1deg);

    transition:
        .3s ease;
}


.istiqbaal-premium-page
.ir-poster:hover {

    transform:
        rotate(0)
        translateY(-5px);
}


.istiqbaal-premium-page
.ir-poster a {

    display: block;

    overflow: hidden;

    border-radius: 21px;
}


.istiqbaal-premium-page
.ir-poster img {

    display: block;

    width: 100%;

    aspect-ratio:
        4 / 5;

    object-fit: cover;

    object-position: center;

    transition:
        transform .45s ease;
}


.istiqbaal-premium-page
.ir-poster:hover img {

    transform:
        scale(1.025);
}


.istiqbaal-premium-page
.ir-poster figcaption {

    padding:
        14px 8px 5px;

    color:
        #52615c;

    font-family:
        "DM Sans",
        sans-serif !important;

    font-size: 12px;

    text-align: center;
}


/* ================================================================
   STORY
   ================================================================ */

.istiqbaal-premium-page
.ir-story-section {

    background:
        radial-gradient(
            circle at 8% 8%,
            rgba(201,157,69,.09),
            transparent 25%
        ),
        #f9f7f0 !important;
}


.istiqbaal-premium-page
.ir-story-grid {

    display: grid;

    grid-template-columns:
        minmax(0,1fr)
        330px;

    align-items: start;

    gap:
        clamp(45px,7vw,85px);
}


.istiqbaal-premium-page
.ir-story-copy {

    max-width: 800px;
}


.istiqbaal-premium-page
.ir-story-copy h2 {

    margin:
        15px 0 22px;

    color:
        var(--ir-dark) !important;

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


.istiqbaal-premium-page
.ir-story-copy h3 {

    margin:
        35px 0 12px;

    color:
        var(--ir-dark) !important;

    font-size:
        29px !important;

    line-height:
        1.15;
}


.istiqbaal-premium-page
.ir-story-lead {

    display: inline-flex;

    padding:
        7px 12px;

    margin-bottom:
        25px !important;

    border-radius: 999px;

    background:
        #eee8d9;

    color:
        #99732f !important;

    font-size:
        13px !important;

    font-weight:
        600 !important;
}


.istiqbaal-premium-page
.ir-story-copy p {

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
   KEY THEMES
   ================================================================ */

.istiqbaal-premium-page
.ir-story-aside {

    position: sticky;

    top: 120px;
}


.istiqbaal-premium-page
.ir-lessons {

    position: relative;

    overflow: hidden;

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
        var(--ir-shadow) !important;
}


.istiqbaal-premium-page
.ir-lessons::after {

    content: "";

    position: absolute;

    width: 190px;
    height: 190px;

    right: -75px;
    top: -75px;

    border:
        1px solid
        rgba(239,220,168,.13);

    border-radius: 50%;
}


.istiqbaal-premium-page
.ir-lessons
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.istiqbaal-premium-page
.ir-lessons h3 {

    margin:
        14px 0 18px;

    color:
        #ffffff !important;

    font-size:
        27px !important;

    line-height:
        1.18;
}


.istiqbaal-premium-page
.ir-lessons > p {

    color:
        rgba(255,255,255,.70) !important;

    font-size:
        14px !important;

    line-height:
        1.72 !important;
}


.istiqbaal-premium-page
.ir-points {

    display: grid;

    gap: 10px;

    margin-top: 24px;
}


.istiqbaal-premium-page
.ir-points span {

    display: flex;

    align-items: center;

    gap: 11px;

    padding:
        12px 13px;

    border:
        1px solid
        rgba(255,255,255,.08);

    border-radius: 13px;

    background:
        rgba(255,255,255,.055);

    color:
        rgba(255,255,255,.90);

    font-family:
        "DM Sans",
        sans-serif !important;

    font-size: 14px;
}


.istiqbaal-premium-page
.ir-points i {

    width: 19px;

    color:
        #e6c878;

    text-align: center;
}


/* ================================================================
   RAMADAN VALUES
   ================================================================ */

.istiqbaal-premium-page
.ir-values-section {

    position: relative;

    overflow: hidden;

    background:
        linear-gradient(
            135deg,
            #173b31,
            #102b24
        ) !important;
}


.istiqbaal-premium-page
.ir-values-section::after {

    content: "";

    position: absolute;

    width: 530px;
    height: 530px;

    right: -230px;
    bottom: -280px;

    border:
        1px solid
        rgba(239,219,162,.12);

    border-radius: 50%;
}


.istiqbaal-premium-page
.ir-values-grid {

    position: relative;

    z-index: 2;

    display: grid;

    grid-template-columns:
        .82fr
        1.18fr;

    gap: 70px;

    align-items: center;
}


.istiqbaal-premium-page
.ir-values-copy
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.istiqbaal-premium-page
.ir-values-copy h2 {

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


.istiqbaal-premium-page
.ir-values-copy p {

    color:
        rgba(255,255,255,.73) !important;

    font-size:
        16px;

    line-height:
        1.85;
}


.istiqbaal-premium-page
.ir-values-cards {

    display: grid;

    grid-template-columns:
        repeat(
            2,
            minmax(0,1fr)
        );

    gap: 15px;
}


.istiqbaal-premium-page
.ir-value-card {

    padding: 23px;

    border:
        1px solid
        rgba(255,255,255,.10);

    border-radius: 20px;

    background:
        rgba(255,255,255,.065);
}


.istiqbaal-premium-page
.ir-value-card i {

    display: flex;

    align-items: center;

    justify-content: center;

    width: 42px;
    height: 42px;

    margin-bottom: 16px;

    border-radius: 50%;

    background:
        rgba(230,200,120,.14);

    color:
        #e7ca7c;

    font-size: 18px;
}


.istiqbaal-premium-page
.ir-value-card h3 {

    margin:
        0 0 8px;

    color:
        #ffffff !important;

    font-size: 21px;

    line-height:
        1.2;
}


.istiqbaal-premium-page
.ir-value-card p {

    margin: 0;

    color:
        rgba(255,255,255,.67) !important;

    font-size: 14px;

    line-height:
        1.65;
}


/* ================================================================
   SECTION HEADING
   ================================================================ */

.istiqbaal-premium-page
.ir-section-heading {

    max-width: 760px;

    margin-bottom: 42px;
}


.istiqbaal-premium-page
.ir-section-heading h2 {

    margin:
        13px 0;

    color:
        var(--ir-dark);

    font-size:
        clamp(
            38px,
            4vw,
            52px
        );

    line-height:
        1.08;
}


.istiqbaal-premium-page
.ir-section-heading p {

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

.istiqbaal-premium-page
.ir-gallery-section {

    background:
        linear-gradient(
            180deg,
            #e8eee6,
            #f3f0e7
        ) !important;
}


.istiqbaal-premium-page
.ir-gallery-count {

    display: inline-flex;

    margin-top: 8px;

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


.istiqbaal-premium-page
.ir-gallery {

    display: grid;

    grid-template-columns:
        repeat(
            3,
            minmax(0,1fr)
        );

    gap: 20px;
}


.istiqbaal-premium-page
.ir-gallery-item {

    margin: 0;

    padding: 6px;

    overflow: hidden;

    border:
        1px solid
        var(--ir-border);

    border-radius: 23px;

    background:
        #ffffff;

    box-shadow:
        var(--ir-shadow);

    transition:
        transform .3s ease,
        box-shadow .3s ease;
}


.istiqbaal-premium-page
.ir-gallery-item:hover {

    transform:
        translateY(-5px);

    box-shadow:
        0 22px 55px
        rgba(20,52,43,.13);
}


.istiqbaal-premium-page
.ir-gallery-item a {

    display: block;

    aspect-ratio:
        4 / 3;

    overflow: hidden;

    border-radius: 17px;
}


.istiqbaal-premium-page
.ir-gallery-item img {

    display: block;

    width: 100%;
    height: 100%;

    object-fit: cover;

    object-position: center;

    transition:
        transform .45s ease;
}


.istiqbaal-premium-page
.ir-gallery-item:hover img {

    transform:
        scale(1.045);
}


/* ================================================================
   MATERIAL STATUS
   ================================================================ */

.istiqbaal-premium-page
.ir-material-section {

    background:
        #fbfaf6 !important;
}


.istiqbaal-premium-page
.ir-material-card {

    display: grid;

    grid-template-columns:
        290px minmax(0,1fr);

    gap: 40px;

    align-items: center;

    padding:
        40px !important;

    border:
        1px solid
        var(--ir-border) !important;

    border-radius:
        30px !important;

    background:
        #ffffff !important;

    box-shadow:
        var(--ir-shadow) !important;
}


.istiqbaal-premium-page
.ir-material-icon {

    display: flex;

    align-items: center;

    justify-content: center;

    min-height: 250px;

    border-radius: 22px;

    background:
        linear-gradient(
            145deg,
            #173b31,
            #102b24
        );
}


.istiqbaal-premium-page
.ir-material-icon i {

    color:
        #e7ca7c;

    font-size: 80px;
}


.istiqbaal-premium-page
.ir-material-copy h3 {

    margin:
        12px 0 14px;

    color:
        var(--ir-dark);

    font-size: 34px;

    line-height:
        1.15;
}


.istiqbaal-premium-page
.ir-material-copy p {

    max-width: 700px;

    margin:
        0 0 15px;

    color:
        #5f6b67;

    font-size:
        16px;

    line-height:
        1.8;
}


.istiqbaal-premium-page
.ir-material-note {

    display: inline-flex;

    align-items: center;

    gap: 9px;

    margin-top: 8px;

    padding:
        10px 13px;

    border-radius: 999px;

    background:
        #f1eee4;

    color:
        #766239;

    font-family:
        "DM Sans",
        sans-serif;

    font-size: 13px;
}


/* ================================================================
   NAVIGATION
   ================================================================ */

.istiqbaal-premium-page
.ir-cycle-section {

    background:
        #e7ece4 !important;
}


.istiqbaal-premium-page
.ir-cycle-section
.ac-heading {

    margin-bottom: 30px;
}


.istiqbaal-premium-page
.ir-cycle-section h2 {

    margin:
        12px 0;

    color:
        var(--ir-dark);

    font-size:
        clamp(
            34px,
            4vw,
            50px
        );
}


.istiqbaal-premium-page
.sc-chapter-links {

    display: grid;

    grid-template-columns:
        repeat(
            2,
            minmax(0,1fr)
        );

    gap: 16px;
}


.istiqbaal-premium-page
.sc-chapter-links > a {

    display: flex;

    flex-direction: column;

    gap: 8px;

    min-height: 125px;

    padding:
        25px 27px;

    border:
        1px solid
        var(--ir-border);

    border-radius: 20px;

    background:
        rgba(255,255,255,.82);

    color:
        var(--ir-dark);

    text-decoration: none;

    box-shadow:
        0 10px 30px
        rgba(20,52,43,.05);

    transition:
        .25s ease;
}


.istiqbaal-premium-page
.sc-chapter-links > a:hover {

    transform:
        translateY(-4px);

    background:
        #ffffff;

    box-shadow:
        var(--ir-shadow);
}


.istiqbaal-premium-page
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


.istiqbaal-premium-page
.sc-chapter-links strong {

    display: flex;

    justify-content:
        space-between;

    gap: 14px;

    font-size: 23px;
}


/* ================================================================
   RESPONSIVE
   ================================================================ */

@media (max-width:1050px) {

    .istiqbaal-premium-page
    .ir-hero-grid {

        grid-template-columns:
            1fr 330px;
    }


    .istiqbaal-premium-page
    .ir-story-grid {

        grid-template-columns:
            1fr 290px;
    }

}


@media (max-width:850px) {

    .istiqbaal-premium-page
    .ir-hero {

        min-height: auto;

        padding-bottom:
            65px !important;
    }


    .istiqbaal-premium-page
    .ir-hero-grid,
    .istiqbaal-premium-page
    .ir-story-grid,
    .istiqbaal-premium-page
    .ir-values-grid,
    .istiqbaal-premium-page
    .ir-material-card {

        grid-template-columns:
            1fr;
    }


    .istiqbaal-premium-page
    .ir-poster {

        width:
            min(520px,100%);

        margin-inline:
            auto;

        transform: none;
    }


    .istiqbaal-premium-page
    .ir-story-aside {

        position: static;
    }


    .istiqbaal-premium-page
    .ir-values-grid {

        gap: 38px;
    }


    .istiqbaal-premium-page
    .ir-gallery {

        grid-template-columns:
            repeat(
                2,
                minmax(0,1fr)
            );
    }


    .istiqbaal-premium-page
    .ir-material-icon {

        min-height: 210px;
    }

}


@media (max-width:650px) {

    .istiqbaal-premium-page
    .ir-hero {

        border-radius:
            0 0 28px 28px;
    }


    .istiqbaal-premium-page
    .ir-hero-copy {

        padding:
            30px 23px !important;

        border-radius:
            25px !important;
    }


    .istiqbaal-premium-page
    .ir-hero-copy h1 {

        font-size:
            clamp(
                40px,
                11vw,
                56px
            ) !important;
    }


    .istiqbaal-premium-page
    .ir-meta {

        flex-direction: column;

        align-items: flex-start;
    }


    .istiqbaal-premium-page
    .ac-actions {

        flex-direction: column;
    }


    .istiqbaal-premium-page
    .ac-btn {

        width: 100%;
    }


    .istiqbaal-premium-page
    .ir-values-cards,
    .istiqbaal-premium-page
    .ir-gallery {

        grid-template-columns:
            1fr;
    }


    .istiqbaal-premium-page
    .ir-material-card {

        padding:
            26px !important;
    }


    .istiqbaal-premium-page
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
        istiqbaal-premium-page
    "
>


    {{-- =========================================================
        HERO
        STATIC IMAGE: istiqbaal/1.jpg
    ========================================================== --}}

    <section
        class="ac-masthead ir-hero"
        style="
            background-image:
                url('{{ asset('assets/images/istiqbaal/1.jpg') }}');
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

                    Istiqbaal e Ramadan

                </span>


            </nav>



            <div class="ir-hero-grid">


                <div class="ir-hero-copy">


                    <span class="ac-eyebrow">

                        CYCLE 2 · SESSION 02

                    </span>


                    <h1>

                        Istiqbaal e Ramadan

                    </h1>


                    <p class="ir-hero-lead">

                        A meaningful session
                        focused on brotherhood,
                        Ramadan,
                        gratitude,
                        self restraint
                        and taqwa.

                    </p>



                    <div
                        class="ir-meta"
                        aria-label="Event details"
                    >


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            <b>
                                14 February 2026
                            </b>

                        </span>


                        <span>

                            <i class="far fa-clock"></i>

                            <b>
                                Asar to Maghrib
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



                <figure class="ir-poster">


                    <a
                        data-fancybox="istiqbaal-poster"
                        href="{{ asset('assets/images/istiqbaal/1.jpg') }}"
                    >


                        <img
                            src="{{ asset('assets/images/istiqbaal/1.jpg') }}"
                            alt="Istiqbaal e Ramadan"
                            decoding="async"
                        >


                    </a>


                    <figcaption>

                        Istiqbaal e Ramadan ·
                        Seerat Club Cycle 2

                    </figcaption>


                </figure>


            </div>


        </div>


    </section>



    {{-- =========================================================
        SESSION
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section ir-story-section"
        id="event-story"
    >


        <div class="ac-container">


            <div class="ir-story-grid">


                <article class="ac-prose ir-story-copy">


                    <span class="ac-eyebrow">

                        THE SESSION

                    </span>


                    <h2>

                        Preparing hearts
                        for Ramadan.

                    </h2>


                    <p class="ir-story-lead">

                        Cycle 2 · Session 02

                    </p>


                    <p>

                        The supplied event source
                        identifies Istiqbaal e Ramadan
                        as a meaningful session
                        centred around
                        brotherhood,
                        Ramadan,
                        gratitude,
                        self restraint
                        and taqwa.

                    </p>


                    <p>

                        The session took place
                        on 14 February 2026
                        from Asar to Maghrib
                        at Shafqat Masjid,
                        Karachi.

                    </p>


                    <h3>

                        Preparing for Ramadan

                    </h3>


                    <p>

                        The central theme
                        of the session
                        was preparation
                        for Ramadan
                        through values
                        that children could
                        understand and practise.

                    </p>


                    <p>

                        Gratitude,
                        self restraint
                        and taqwa
                        formed the key
                        learning themes
                        highlighted
                        in the supplied source.

                    </p>


                    <h3>

                        Brotherhood

                    </h3>


                    <p>

                        Brotherhood was also
                        identified as
                        an important part
                        of the session,
                        connecting Ramadan
                        with care,
                        connection
                        and responsibility
                        towards others.

                    </p>


                </article>



                <aside class="ir-story-aside">


                    <div class="ir-lessons ac-card">


                        <span class="ac-eyebrow">

                            KEY THEMES

                        </span>


                        <h3>

                            Preparing for
                            a meaningful Ramadan.

                        </h3>


                        <p>

                            The source highlights
                            five central themes
                            for this session.

                        </p>



                        <div class="ir-points">


                            <span>

                                <i class="fas fa-users"></i>

                                Brotherhood

                            </span>


                            <span>

                                <i class="fas fa-moon"></i>

                                Ramadan

                            </span>


                            <span>

                                <i class="fas fa-heart"></i>

                                Gratitude

                            </span>


                            <span>

                                <i class="fas fa-shield-alt"></i>

                                Self restraint

                            </span>


                            <span>

                                <i class="fas fa-star"></i>

                                Taqwa

                            </span>


                        </div>


                    </div>


                </aside>


            </div>


        </div>


    </section>



    {{-- =========================================================
        RAMADAN VALUES
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section ir-values-section"
    >


        <div class="ac-container">


            <div class="ir-values-grid">


                <div class="ir-values-copy">


                    <span class="ac-eyebrow">

                        GRATITUDE · RESTRAINT · TAQWA

                    </span>


                    <h2>

                        Ramadan begins
                        with preparing
                        the heart.

                    </h2>


                    <p>

                        The session themes
                        encouraged children
                        to think beyond
                        simply waiting
                        for Ramadan
                        and instead prepare
                        through gratitude,
                        discipline,
                        brotherhood
                        and awareness of Allah.

                    </p>


                </div>



                <div class="ir-values-cards">


                    <article class="ir-value-card">


                        <i class="fas fa-heart"></i>


                        <h3>
                            Gratitude
                        </h3>


                        <p>

                            Recognising
                            and appreciating
                            the blessings
                            Allah has given us.

                        </p>


                    </article>



                    <article class="ir-value-card">


                        <i class="fas fa-shield-alt"></i>


                        <h3>
                            Self Restraint
                        </h3>


                        <p>

                            Learning discipline
                            and control
                            over our choices.

                        </p>


                    </article>



                    <article class="ir-value-card">


                        <i class="fas fa-star"></i>


                        <h3>
                            Taqwa
                        </h3>


                        <p>

                            Developing greater
                            awareness of Allah
                            in everyday life.

                        </p>


                    </article>



                    <article class="ir-value-card">


                        <i class="fas fa-users"></i>


                        <h3>
                            Brotherhood
                        </h3>


                        <p>

                            Remembering
                            our connection
                            and responsibility
                            towards others.

                        </p>


                    </article>


                </div>


            </div>


        </div>


    </section>



    {{-- =========================================================
        STATIC GALLERY
        24 VERIFIED MEDIA FILES
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section ir-gallery-section"
        id="event-gallery"
    >


        <div class="ac-container">


            <div class="ir-section-heading">


                <span class="ac-eyebrow">

                    FROM THE ORIGINAL SESSION

                </span>


                <h2>

                    Moments from
                    Istiqbaal e Ramadan.

                </h2>


                <p>

                    Original photographs
                    and visual material
                    listed in the supplied
                    event source.

                </p>


                <span class="ir-gallery-count">

                    24 MEDIA ITEMS

                </span>


            </div>



            <div
                class="ir-gallery"
                aria-label="Istiqbaal e Ramadan event gallery"
            >


                <figure class="ir-gallery-item">
                    <a data-fancybox="istiqbaal-gallery" href="{{ asset('assets/images/istiqbaal/1.jpg') }}">
                        <img src="{{ asset('assets/images/istiqbaal/1.jpg') }}" alt="Istiqbaal e Ramadan event image 1" loading="eager" decoding="async">
                    </a>
                </figure>


                <figure class="ir-gallery-item">
                    <a data-fancybox="istiqbaal-gallery" href="{{ asset('assets/images/istiqbaal/2.jpg') }}">
                        <img src="{{ asset('assets/images/istiqbaal/2.jpg') }}" alt="Istiqbaal e Ramadan event image 2" loading="eager" decoding="async">
                    </a>
                </figure>


                <figure class="ir-gallery-item">
                    <a data-fancybox="istiqbaal-gallery" href="{{ asset('assets/images/istiqbaal/3.jpg') }}">
                        <img src="{{ asset('assets/images/istiqbaal/3.jpg') }}" alt="Istiqbaal e Ramadan event image 3" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="ir-gallery-item">
                    <a data-fancybox="istiqbaal-gallery" href="{{ asset('assets/images/istiqbaal/4.jpg') }}">
                        <img src="{{ asset('assets/images/istiqbaal/4.jpg') }}" alt="Istiqbaal e Ramadan event image 4" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="ir-gallery-item">
                    <a data-fancybox="istiqbaal-gallery" href="{{ asset('assets/images/istiqbaal/4.png') }}">
                        <img src="{{ asset('assets/images/istiqbaal/4.png') }}" alt="Istiqbaal e Ramadan event visual" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="ir-gallery-item">
                    <a data-fancybox="istiqbaal-gallery" href="{{ asset('assets/images/istiqbaal/5.png') }}">
                        <img src="{{ asset('assets/images/istiqbaal/5.png') }}" alt="Istiqbaal e Ramadan event visual" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="ir-gallery-item">
                    <a data-fancybox="istiqbaal-gallery" href="{{ asset('assets/images/istiqbaal/6.jpg') }}">
                        <img src="{{ asset('assets/images/istiqbaal/6.jpg') }}" alt="Istiqbaal e Ramadan event image 6" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="ir-gallery-item">
                    <a data-fancybox="istiqbaal-gallery" href="{{ asset('assets/images/istiqbaal/6.png') }}">
                        <img src="{{ asset('assets/images/istiqbaal/6.png') }}" alt="Istiqbaal e Ramadan event visual" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="ir-gallery-item">
                    <a data-fancybox="istiqbaal-gallery" href="{{ asset('assets/images/istiqbaal/7.jpg') }}">
                        <img src="{{ asset('assets/images/istiqbaal/7.jpg') }}" alt="Istiqbaal e Ramadan event image 7" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="ir-gallery-item">
                    <a data-fancybox="istiqbaal-gallery" href="{{ asset('assets/images/istiqbaal/8.jpg') }}">
                        <img src="{{ asset('assets/images/istiqbaal/8.jpg') }}" alt="Istiqbaal e Ramadan event image 8" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="ir-gallery-item">
                    <a data-fancybox="istiqbaal-gallery" href="{{ asset('assets/images/istiqbaal/8.png') }}">
                        <img src="{{ asset('assets/images/istiqbaal/8.png') }}" alt="Istiqbaal e Ramadan event visual" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="ir-gallery-item">
                    <a data-fancybox="istiqbaal-gallery" href="{{ asset('assets/images/istiqbaal/9.png') }}">
                        <img src="{{ asset('assets/images/istiqbaal/9.png') }}" alt="Istiqbaal e Ramadan event visual" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="ir-gallery-item">
                    <a data-fancybox="istiqbaal-gallery" href="{{ asset('assets/images/istiqbaal/10.jpg') }}">
                        <img src="{{ asset('assets/images/istiqbaal/10.jpg') }}" alt="Istiqbaal e Ramadan event image 10" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="ir-gallery-item">
                    <a data-fancybox="istiqbaal-gallery" href="{{ asset('assets/images/istiqbaal/11.jpg') }}">
                        <img src="{{ asset('assets/images/istiqbaal/11.jpg') }}" alt="Istiqbaal e Ramadan event image 11" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="ir-gallery-item">
                    <a data-fancybox="istiqbaal-gallery" href="{{ asset('assets/images/istiqbaal/12.jpg') }}">
                        <img src="{{ asset('assets/images/istiqbaal/12.jpg') }}" alt="Istiqbaal e Ramadan event image 12" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="ir-gallery-item">
                    <a data-fancybox="istiqbaal-gallery" href="{{ asset('assets/images/istiqbaal/13.jpg') }}">
                        <img src="{{ asset('assets/images/istiqbaal/13.jpg') }}" alt="Istiqbaal e Ramadan event image 13" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="ir-gallery-item">
                    <a data-fancybox="istiqbaal-gallery" href="{{ asset('assets/images/istiqbaal/14.jpg') }}">
                        <img src="{{ asset('assets/images/istiqbaal/14.jpg') }}" alt="Istiqbaal e Ramadan event image 14" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="ir-gallery-item">
                    <a data-fancybox="istiqbaal-gallery" href="{{ asset('assets/images/istiqbaal/15.jpg') }}">
                        <img src="{{ asset('assets/images/istiqbaal/15.jpg') }}" alt="Istiqbaal e Ramadan event image 15" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="ir-gallery-item">
                    <a data-fancybox="istiqbaal-gallery" href="{{ asset('assets/images/istiqbaal/16.jpg') }}">
                        <img src="{{ asset('assets/images/istiqbaal/16.jpg') }}" alt="Istiqbaal e Ramadan event image 16" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="ir-gallery-item">
                    <a data-fancybox="istiqbaal-gallery" href="{{ asset('assets/images/istiqbaal/17.jpg') }}">
                        <img src="{{ asset('assets/images/istiqbaal/17.jpg') }}" alt="Istiqbaal e Ramadan event image 17" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="ir-gallery-item">
                    <a data-fancybox="istiqbaal-gallery" href="{{ asset('assets/images/istiqbaal/18.jpg') }}">
                        <img src="{{ asset('assets/images/istiqbaal/18.jpg') }}" alt="Istiqbaal e Ramadan event image 18" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="ir-gallery-item">
                    <a data-fancybox="istiqbaal-gallery" href="{{ asset('assets/images/istiqbaal/19.jpg') }}">
                        <img src="{{ asset('assets/images/istiqbaal/19.jpg') }}" alt="Istiqbaal e Ramadan event image 19" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="ir-gallery-item">
                    <a data-fancybox="istiqbaal-gallery" href="{{ asset('assets/images/istiqbaal/20.jpg') }}">
                        <img src="{{ asset('assets/images/istiqbaal/20.jpg') }}" alt="Istiqbaal e Ramadan event image 20" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="ir-gallery-item">
                    <a data-fancybox="istiqbaal-gallery" href="{{ asset('assets/images/istiqbaal/21.jpg') }}">
                        <img src="{{ asset('assets/images/istiqbaal/21.jpg') }}" alt="Istiqbaal e Ramadan event image 21" loading="lazy" decoding="async">
                    </a>
                </figure>


            </div>


        </div>


    </section>



    {{-- =========================================================
        PRESENTATION STATUS

        The supplied file contains a First Call in Madinah
        presentation link here, therefore it is intentionally
        not reused for Istiqbaal e Ramadan.
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section ir-material-section"
    >


        <div class="ac-container">


            <div class="ir-section-heading">


                <span class="ac-eyebrow">

                    PRESENTATION & MATERIALS

                </span>


                <h2>

                    Istiqbaal e Ramadan
                    session material.

                </h2>


                <p>

                    The current file
                    does not contain
                    a verified presentation link
                    belonging to this event.

                </p>


            </div>



            <article class="ac-card ir-material-card">


                <div class="ir-material-icon">

                    <i class="far fa-file-pdf"></i>

                </div>



                <div class="ir-material-copy">


                    <span class="ac-eyebrow">

                        MATERIAL STATUS

                    </span>


                    <h3>

                        Original link required.

                    </h3>


                    <p>

                        The presentation URL
                        previously placed
                        in this Blade file
                        belongs to
                        The First Call in Madinah,
                        not Istiqbaal e Ramadan.

                    </p>


                    <p>

                        It has therefore
                        been removed
                        rather than displaying
                        material from
                        the wrong event.

                    </p>


                    <span class="ir-material-note">

                        <i class="fas fa-check-circle"></i>

                        Wrong event material removed

                    </span>


                </div>


            </article>


        </div>


    </section>



    {{-- =========================================================
        NAVIGATION
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section ir-cycle-section"
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



                <a
                    href="{{ route(
                        'past-events.cycle-2-2026-onwards.battle-of-badar'
                    ) }}"
                >


                    <small>

                        Next chapter

                    </small>


                    <strong>

                        Battle of Badar

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
