@extends("Layout.layout")

@section('title', 'Ghazwa e Khyber · Seerat Club')

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
   GHAZWA E KHYBER
   STATIC PREMIUM EVENT PAGE
   ================================================================ */

.khyber-premium-page {

    --ky-green: #173b31;
    --ky-dark: #102b24;
    --ky-gold: #c99d45;
    --ky-gold-light: #efdca6;
    --ky-cream: #f8f5ed;
    --ky-soft: #fbfaf6;
    --ky-muted: #5d6b66;

    --ky-border:
        rgba(23,59,49,.10);

    --ky-shadow:
        0 18px 55px rgba(20,52,43,.10);

    --ky-shadow-lg:
        0 30px 90px rgba(13,44,36,.17);

    background: #ffffff;

    color: #172923;
}


/* ================================================================
   TYPOGRAPHY
   ================================================================ */

.khyber-premium-page h1,
.khyber-premium-page h2,
.khyber-premium-page h3,
.khyber-premium-page h4,
.khyber-premium-page h5,
.khyber-premium-page h6,
.khyber-premium-page .ac-btn,
.khyber-premium-page .ac-eyebrow,
.khyber-premium-page .sc-chapter-links strong {

    font-family:
        "Baloo 2",
        "SC Arabic",
        sans-serif !important;
}


.khyber-premium-page p,
.khyber-premium-page li,
.khyber-premium-page .ky-meta,
.khyber-premium-page .ac-breadcrumb,
.khyber-premium-page .ky-video-meta,
.khyber-premium-page .sc-chapter-links small {

    font-family:
        "DM Sans",
        "SC Arabic",
        sans-serif !important;
}


/* ================================================================
   HERO
   ================================================================ */

.khyber-premium-page
.ky-hero {

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


.khyber-premium-page
.ky-hero::before {

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


.khyber-premium-page
.ky-hero::after {

    content: "";

    position: absolute;

    width: 500px;
    height: 500px;

    right: -170px;
    top: -180px;

    border-radius: 50%;

    background:
        radial-gradient(
            circle,
            rgba(238,213,145,.22),
            transparent 68%
        );

    pointer-events: none;
}


.khyber-premium-page
.ky-hero
.ac-container {

    position: relative;

    z-index: 3;
}


/* ================================================================
   BREADCRUMB
   ================================================================ */

.khyber-premium-page
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


.khyber-premium-page
.ac-breadcrumb a {

    color:
        #ffffff !important;

    text-decoration: none;
}


.khyber-premium-page
.ac-breadcrumb a:hover {

    color:
        var(--ky-gold-light) !important;
}


/* ================================================================
   HERO GRID
   ================================================================ */

.khyber-premium-page
.ky-hero-grid {

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

.khyber-premium-page
.ky-hero-copy {

    position: relative;

    padding:
        clamp(34px,4vw,52px) !important;

    border:
        1px solid rgba(255,255,255,.70) !important;

    border-radius:
        34px !important;

    background:
        #f8f5ed !important;

    box-shadow:
        var(--ky-shadow-lg) !important;

    backdrop-filter:
        none !important;

    -webkit-backdrop-filter:
        none !important;
}


.khyber-premium-page
.ky-hero-copy::before {

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
            var(--ky-gold),
            #efd593
        );
}


.khyber-premium-page
.ky-hero-copy
.ac-eyebrow {

    display: inline-flex;

    align-items: center;

    padding:
        9px 14px;

    border:
        1px solid rgba(201,157,69,.38);

    border-radius:
        999px;

    background:
        #f0ead8;

    color:
        #a2782a !important;

    font-size: 12px;

    font-weight: 700;

    letter-spacing: .12em;
}


.khyber-premium-page
.ky-hero-copy h1 {

    max-width: 720px;

    margin:
        23px 0 22px !important;

    color:
        var(--ky-dark) !important;

    font-size:
        clamp(
            48px,
            5.4vw,
            78px
        ) !important;

    font-weight:
        700 !important;

    line-height:
        1 !important;

    letter-spacing:
        -.03em !important;
}


.khyber-premium-page
.ky-hero-lead {

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

.khyber-premium-page
.ky-meta {

    display: flex;

    flex-wrap: wrap;

    gap: 11px;

    margin:
        26px 0 30px;
}


.khyber-premium-page
.ky-meta > span {

    display: inline-flex;

    align-items: center;

    gap: 9px;

    padding:
        11px 14px;

    border:
        1px solid rgba(23,59,49,.11);

    border-radius:
        999px;

    background:
        rgba(255,255,255,.74);

    color:
        #53635d;

    font-size: 13px;
}


.khyber-premium-page
.ky-meta i {

    color:
        #aa8438;
}


/* ================================================================
   BUTTONS
   ================================================================ */

.khyber-premium-page
.ac-actions {

    display: flex;

    flex-wrap: wrap;

    gap: 13px;
}


.khyber-premium-page
.ac-btn {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 11px;

    min-height: 52px;

    padding:
        13px 24px !important;

    border:
        1px solid var(--ky-gold) !important;

    border-radius:
        999px !important;

    background:
        var(--ky-gold) !important;

    color:
        #102b24 !important;

    font-weight:
        700 !important;

    text-decoration: none;

    box-shadow:
        0 12px 30px rgba(201,157,69,.22);

    transition:
        .25s ease !important;
}


.khyber-premium-page
.ac-btn:hover {

    transform:
        translateY(-2px);

    background:
        #d5aa51 !important;
}


.khyber-premium-page
.ac-btn-secondary {

    border-color:
        rgba(23,59,49,.13) !important;

    background:
        #ffffff !important;

    color:
        var(--ky-dark) !important;

    box-shadow:
        0 10px 25px rgba(16,43,36,.07);
}


/* ================================================================
   POSTER
   ================================================================ */

.khyber-premium-page
.ky-poster {

    margin: 0;

    padding:
        12px !important;

    overflow: hidden;

    border:
        1px solid rgba(255,255,255,.70) !important;

    border-radius:
        30px !important;

    background:
        rgba(255,255,255,.94) !important;

    box-shadow:
        var(--ky-shadow-lg) !important;

    transform:
        rotate(1deg);

    transition:
        .3s ease;
}


.khyber-premium-page
.ky-poster:hover {

    transform:
        rotate(0)
        translateY(-5px);
}


.khyber-premium-page
.ky-poster a {

    display: block;

    overflow: hidden;

    border-radius:
        21px;
}


.khyber-premium-page
.ky-poster img {

    display: block;

    width: 100%;

    aspect-ratio:
        4 / 5;

    object-fit: cover;

    transition:
        transform .45s ease;
}


.khyber-premium-page
.ky-poster:hover img {

    transform:
        scale(1.025);
}


.khyber-premium-page
.ky-poster figcaption {

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

.khyber-premium-page
.ky-story-section {

    background:
        radial-gradient(
            circle at 8% 8%,
            rgba(201,157,69,.09),
            transparent 25%
        ),
        #f9f7f0 !important;
}


.khyber-premium-page
.ky-story-grid {

    display: grid;

    grid-template-columns:
        minmax(0,1fr)
        330px;

    align-items: start;

    gap:
        clamp(45px,7vw,85px);
}


.khyber-premium-page
.ky-story-copy {

    max-width: 800px;
}


.khyber-premium-page
.ky-story-copy h2 {

    margin:
        15px 0 22px;

    color:
        var(--ky-dark) !important;

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


.khyber-premium-page
.ky-story-copy h3 {

    margin:
        35px 0 12px;

    color:
        var(--ky-dark) !important;

    font-size:
        29px !important;

    font-weight:
        700 !important;

    line-height:
        1.15;
}


.khyber-premium-page
.ky-story-lead {

    display: inline-flex;

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


.khyber-premium-page
.ky-story-copy p {

    color:
        #5a6762 !important;

    font-size:
        16px !important;

    font-weight:
        400 !important;

    line-height:
        1.92 !important;
}


.khyber-premium-page
.ky-story-copy ul {

    margin:
        20px 0 28px;

    padding:
        0;

    list-style:
        none;

    display:
        grid;

    gap:
        11px;
}


.khyber-premium-page
.ky-story-copy li {

    padding:
        13px 16px;

    border:
        1px solid rgba(23,59,49,.10);

    border-radius:
        14px;

    background:
        rgba(255,255,255,.72);

    color:
        #50615b;

    font-size:
        15px;
}


/* ================================================================
   KEY LESSONS
   ================================================================ */

.khyber-premium-page
.ky-story-aside {

    position: sticky;

    top: 120px;
}


.khyber-premium-page
.ky-lessons {

    position: relative;

    overflow: hidden;

    padding:
        34px !important;

    border:
        1px solid rgba(232,203,130,.18) !important;

    border-radius:
        28px !important;

    background:
        linear-gradient(
            145deg,
            #173b31,
            #102b24
        ) !important;

    box-shadow:
        var(--ky-shadow) !important;
}


.khyber-premium-page
.ky-lessons::after {

    content: "";

    position: absolute;

    width: 190px;
    height: 190px;

    right: -75px;
    top: -75px;

    border:
        1px solid rgba(239,220,168,.13);

    border-radius: 50%;
}


.khyber-premium-page
.ky-lessons
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.khyber-premium-page
.ky-lessons h3 {

    margin:
        14px 0 18px;

    color:
        #ffffff !important;

    font-size:
        27px !important;

    line-height:
        1.18;
}


.khyber-premium-page
.ky-lessons > p {

    color:
        rgba(255,255,255,.70) !important;

    font-size:
        14px !important;

    line-height:
        1.72 !important;
}


.khyber-premium-page
.ky-points {

    display: grid;

    gap: 10px;

    margin-top:
        24px;
}


.khyber-premium-page
.ky-points span {

    display: flex;

    align-items: center;

    gap: 11px;

    padding:
        12px 13px;

    border:
        1px solid rgba(255,255,255,.08);

    border-radius:
        13px;

    background:
        rgba(255,255,255,.055);

    color:
        rgba(255,255,255,.90);

    font-family:
        "DM Sans",
        sans-serif !important;

    font-size: 14px;
}


.khyber-premium-page
.ky-points i {

    width: 19px;

    color:
        #e6c878;

    text-align: center;
}


/* ================================================================
   VALUES
   ================================================================ */

.khyber-premium-page
.ky-values-section {

    position: relative;

    overflow: hidden;

    background:
        linear-gradient(
            135deg,
            #173b31,
            #102b24
        ) !important;
}


.khyber-premium-page
.ky-values-section::after {

    content: "";

    position: absolute;

    width: 530px;
    height: 530px;

    right: -230px;
    bottom: -280px;

    border:
        1px solid rgba(239,219,162,.12);

    border-radius: 50%;
}


.khyber-premium-page
.ky-values-grid {

    position: relative;

    z-index: 2;

    display: grid;

    grid-template-columns:
        .82fr
        1.18fr;

    gap: 70px;

    align-items: center;
}


.khyber-premium-page
.ky-values-copy
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.khyber-premium-page
.ky-values-copy h2 {

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


.khyber-premium-page
.ky-values-copy p {

    color:
        rgba(255,255,255,.73) !important;

    font-size: 16px;

    line-height:
        1.85;
}


.khyber-premium-page
.ky-values-cards {

    display: grid;

    grid-template-columns:
        repeat(2,minmax(0,1fr));

    gap: 15px;
}


.khyber-premium-page
.ky-value-card {

    padding: 23px;

    border:
        1px solid rgba(255,255,255,.10);

    border-radius:
        20px;

    background:
        rgba(255,255,255,.065);
}


.khyber-premium-page
.ky-value-card i {

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

    font-size:
        18px;
}


.khyber-premium-page
.ky-value-card h3 {

    margin:
        0 0 8px;

    color:
        #ffffff !important;

    font-size:
        21px;

    line-height:
        1.2;
}


.khyber-premium-page
.ky-value-card p {

    margin: 0;

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

.khyber-premium-page
.ky-section-heading {

    max-width: 760px;

    margin-bottom: 42px;
}


.khyber-premium-page
.ky-section-heading h2 {

    margin:
        13px 0;

    color:
        var(--ky-dark);

    font-size:
        clamp(
            38px,
            4vw,
            52px
        );

    line-height:
        1.08;
}


.khyber-premium-page
.ky-section-heading p {

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

.khyber-premium-page
.ky-video-section {

    background:
        #edf1ec !important;
}


.khyber-premium-page
.ky-video-card {

    display: grid;

    grid-template-columns:
        minmax(0,1.45fr)
        minmax(300px,.58fr);

    overflow: hidden;

    padding:
        0 !important;

    border:
        1px solid var(--ky-border) !important;

    border-radius:
        30px !important;

    background:
        #ffffff !important;

    box-shadow:
        var(--ky-shadow) !important;
}


.khyber-premium-page
.ky-video-frame {

    position: relative;

    min-height: 460px;

    overflow: hidden;

    background:
        #111b18;
}


.khyber-premium-page
.ky-video-frame iframe {

    position: absolute;

    inset: 0;

    width: 100%;
    height: 100%;

    border: 0;
}


.khyber-premium-page
.ky-video-copy {

    display: flex;

    flex-direction: column;

    justify-content: center;

    padding:
        42px 35px;
}


.khyber-premium-page
.ky-video-copy h3 {

    margin:
        12px 0 14px;

    color:
        var(--ky-dark);

    font-size:
        30px;

    line-height:
        1.15;
}


.khyber-premium-page
.ky-video-copy p {

    margin:
        0 0 24px;

    color:
        #5f6c67;

    line-height:
        1.8;
}


.khyber-premium-page
.ky-video-meta {

    display: grid;

    gap: 11px;

    color:
        #586661;

    font-size:
        14px;
}


.khyber-premium-page
.ky-video-meta span {

    display: flex;

    align-items: center;

    gap: 10px;
}


.khyber-premium-page
.ky-video-meta i {

    width: 18px;

    color:
        #b68d3d;

    text-align: center;
}


/* ================================================================
   GALLERY
   ================================================================ */

.khyber-premium-page
.ky-gallery-section {

    background:
        linear-gradient(
            180deg,
            #e8eee6,
            #f3f0e7
        ) !important;
}


.khyber-premium-page
.ky-gallery {

    display: grid;

    grid-template-columns:
        repeat(3,minmax(0,1fr));

    gap: 20px;
}


.khyber-premium-page
.ky-gallery-item {

    margin: 0;

    padding: 6px;

    overflow: hidden;

    border:
        1px solid var(--ky-border);

    border-radius:
        23px;

    background:
        #ffffff;

    box-shadow:
        var(--ky-shadow);

    transition:
        transform .3s ease,
        box-shadow .3s ease;
}


.khyber-premium-page
.ky-gallery-item:hover {

    transform:
        translateY(-5px);

    box-shadow:
        0 22px 55px rgba(20,52,43,.13);
}


.khyber-premium-page
.ky-gallery-item a {

    display: block;

    aspect-ratio:
        4 / 3;

    overflow: hidden;

    border-radius:
        17px;
}


.khyber-premium-page
.ky-gallery-item img {

    display: block;

    width: 100%;
    height: 100%;

    object-fit: cover;

    object-position: center;

    transition:
        transform .45s ease;
}


.khyber-premium-page
.ky-gallery-item:hover img {

    transform:
        scale(1.045);
}


/* ================================================================
   NAVIGATION
   ================================================================ */

.khyber-premium-page
.ky-cycle-section {

    background:
        #e7ece4 !important;
}


.khyber-premium-page
.ky-cycle-section
.ac-heading {

    margin-bottom: 30px;
}


.khyber-premium-page
.ky-cycle-section h2 {

    margin:
        12px 0;

    color:
        var(--ky-dark);

    font-size:
        clamp(
            34px,
            4vw,
            50px
        );
}


.khyber-premium-page
.sc-chapter-links {

    display: grid;

    grid-template-columns:
        repeat(2,minmax(0,1fr));

    gap: 16px;
}


.khyber-premium-page
.sc-chapter-links > a {

    display: flex;

    flex-direction: column;

    gap: 8px;

    min-height: 125px;

    padding:
        25px 27px;

    border:
        1px solid var(--ky-border);

    border-radius:
        20px;

    background:
        rgba(255,255,255,.82);

    color:
        var(--ky-dark);

    text-decoration:
        none;

    box-shadow:
        0 10px 30px rgba(20,52,43,.05);

    transition:
        .25s ease;
}


.khyber-premium-page
.sc-chapter-links > a:hover {

    transform:
        translateY(-4px);

    background:
        #ffffff;

    box-shadow:
        var(--ky-shadow);
}


.khyber-premium-page
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


.khyber-premium-page
.sc-chapter-links strong {

    display: flex;

    justify-content:
        space-between;

    gap: 14px;

    font-size:
        23px;
}


/* ================================================================
   RESPONSIVE
   ================================================================ */

@media (max-width:1050px) {

    .khyber-premium-page
    .ky-hero-grid {

        grid-template-columns:
            1fr 330px;
    }


    .khyber-premium-page
    .ky-story-grid {

        grid-template-columns:
            1fr 290px;
    }

}


@media (max-width:850px) {

    .khyber-premium-page
    .ky-hero {

        min-height: auto;

        padding-bottom:
            65px !important;
    }


    .khyber-premium-page
    .ky-hero-grid,
    .khyber-premium-page
    .ky-story-grid,
    .khyber-premium-page
    .ky-values-grid,
    .khyber-premium-page
    .ky-video-card {

        grid-template-columns:
            1fr;
    }


    .khyber-premium-page
    .ky-poster {

        width:
            min(520px,100%);

        margin-inline:
            auto;

        transform:
            none;
    }


    .khyber-premium-page
    .ky-story-aside {

        position:
            static;
    }


    .khyber-premium-page
    .ky-values-grid {

        gap: 38px;
    }


    .khyber-premium-page
    .ky-video-frame {

        min-height: auto;

        aspect-ratio:
            16 / 9;
    }


    .khyber-premium-page
    .ky-gallery {

        grid-template-columns:
            repeat(2,minmax(0,1fr));
    }

}


@media (max-width:650px) {

    .khyber-premium-page
    .ky-hero {

        border-radius:
            0 0 28px 28px;
    }


    .khyber-premium-page
    .ky-hero-copy {

        padding:
            30px 23px !important;

        border-radius:
            25px !important;
    }


    .khyber-premium-page
    .ky-hero-copy h1 {

        font-size:
            clamp(
                40px,
                11.5vw,
                58px
            ) !important;
    }


    .khyber-premium-page
    .ky-meta {

        flex-direction:
            column;

        align-items:
            flex-start;
    }


    .khyber-premium-page
    .ac-actions {

        flex-direction:
            column;
    }


    .khyber-premium-page
    .ac-btn {

        width:
            100%;
    }


    .khyber-premium-page
    .ky-values-cards,
    .khyber-premium-page
    .ky-gallery {

        grid-template-columns:
            1fr;
    }


    .khyber-premium-page
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
        khyber-premium-page
    "
>


    {{-- =========================================================
        HERO
    ========================================================== --}}

    <section
        class="ac-masthead ky-hero"
        style="
            background-image:
                url('{{ asset('assets/images/ghazwa-e-khyber/hero.jpg') }}');
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
                    Ghazwa e Khyber
                </span>


            </nav>



            <div class="ky-hero-grid">


                <div class="ky-hero-copy">


                    <span class="ac-eyebrow">

                        CYCLE 2 · SESSION 07

                    </span>


                    <h1>

                        Ghazwa e Khyber

                    </h1>


                    <p class="ky-hero-lead">

                        An engaging session exploring
                        the events of Khaybar
                        through storytelling,
                        fort building,
                        reflection
                        and practical learning.

                    </p>



                    <div class="ky-meta">


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            <b>
                                16 August 2026
                            </b>

                        </span>


                        <span>

                            <i class="fas fa-book-open"></i>

                            <b>
                                Cycle 2 · Session 07
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



                <figure class="ky-poster">


                    <a
                        data-fancybox="ghazwa-e-khyber-poster"
                        href="{{ asset('assets/images/ghazwa-e-khyber/poster.jpg') }}"
                    >


                        <img
                            src="{{ asset('assets/images/ghazwa-e-khyber/poster.jpg') }}"
                            alt="Ghazwa e Khyber event poster"
                            decoding="async"
                        >


                    </a>


                    <figcaption>

                        Ghazwa e Khyber ·
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
        class="ac-section sc-svg-section ky-story-section"
        id="event-story"
    >


        <div class="ac-container">


            <div class="ky-story-grid">


                <article class="ac-prose ky-story-copy">


                    <span class="ac-eyebrow">

                        THE SESSION

                    </span>


                    <h2>

                        Patience,
                        planning,
                        Tawakkul
                        and perseverance.

                    </h2>


                    <p class="ky-story-lead">

                        Cycle 2 · Session 07

                    </p>


                    <p>

                        On 16 August 2026,
                        Seerat Club held
                        an engaging session
                        beginning with
                        a group fort building challenge
                        where children used
                        Jenga blocks and cups
                        to construct forts
                        inspired by
                        the story of Khaybar.

                    </p>


                    <h3>

                        Why do believers
                        face struggle?

                    </h3>


                    <p>

                        The discussion began
                        with a thought provoking question:
                        <strong>
                            Why did Prophet Muhammad ﷺ
                            and the early Muslims
                            face so much struggle
                            despite being beloved
                            by Allah?
                        </strong>

                    </p>


                    <p>

                        To explain this,
                        the children met
                        <strong>Xing the Panda</strong>,
                        who loved eating bamboo.

                        They learnt how bamboo
                        can spend a long time
                        developing its roots
                        before showing
                        rapid growth.

                    </p>


                    <p>

                        Similarly,
                        children learnt that
                        Allah prepares believers
                        through hardship
                        before granting victory.

                    </p>


                    <h3>

                        The events leading
                        to Ghazwa e Khyber

                    </h3>


                    <p>

                        The children were then
                        taken through the events
                        leading to
                        <strong>Ghazwa e Khyber</strong>,
                        learning about
                        Khyber's fertile land,
                        its strong fortresses
                        and the strategy
                        of taking the forts
                        one by one.

                    </p>


                    <p>

                        The discussion highlighted
                        the importance
                        of patience,
                        thoughtful planning
                        and perseverance.

                    </p>


                    <p>

                        <strong>Maulana Owais</strong>
                        brought these events
                        to life
                        and highlighted
                        the blessings
                        that followed Khyber,
                        including the Muslims
                        becoming financially
                        self sufficient.

                    </p>


                    <h3>

                        Four key lessons

                    </h3>


                    <ul>

                        <li>
                            🎯 <strong>Choose the right person</strong>
                        </li>

                        <li>
                            🤲 <strong>Trust in Allah</strong>
                        </li>

                        <li>
                            ❤️ <strong>Treat others with kindness</strong>
                        </li>

                        <li>
                            💪 <strong>Never give up trying</strong>
                        </li>

                    </ul>


                    <h3>

                        Sword wielding orientation

                    </h3>


                    <p>

                        The session concluded
                        with an exciting
                        sword wielding orientation
                        where children were introduced
                        to basic sword handling
                        movements and skills.

                    </p>


                    <p>

                        The supervised activity
                        was led by
                        <strong>Master Shahbaz</strong>
                        and
                        <strong>Master Umar Ali Shah</strong>.

                    </p>


                </article>



                <aside class="ky-story-aside">


                    <div class="ky-lessons ac-card">


                        <span class="ac-eyebrow">

                            KEY LESSONS

                        </span>


                        <h3>

                            Seerah made practical.

                        </h3>


                        <p>

                            Children connected
                            the events of Khaybar
                            with practical choices
                            and challenges
                            they can understand today.

                        </p>



                        <div class="ky-points">


                            <span>

                                <i class="fas fa-bullseye"></i>

                                Choose the right person

                            </span>


                            <span>

                                <i class="fas fa-hands"></i>

                                Trust in Allah

                            </span>


                            <span>

                                <i class="fas fa-heart"></i>

                                Treat others with kindness

                            </span>


                            <span>

                                <i class="fas fa-hourglass-half"></i>

                                Never give up trying

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
        class="ac-section sc-svg-section ky-values-section"
    >


        <div class="ac-container">


            <div class="ky-values-grid">


                <div class="ky-values-copy">


                    <span class="ac-eyebrow">

                        PATIENCE · PLANNING · TAWAKKUL

                    </span>


                    <h2>

                        Strong roots
                        come before
                        visible growth.

                    </h2>


                    <p>

                        The session helped children
                        understand that difficulty
                        is not always
                        a sign of failure.

                        Patience,
                        preparation,
                        kindness
                        and trust in Allah
                        can prepare a person
                        for meaningful progress.

                    </p>


                </div>



                <div class="ky-values-cards">


                    <article class="ky-value-card">


                        <i class="fas fa-hourglass-half"></i>


                        <h3>
                            Patience
                        </h3>


                        <p>

                            Growth can take time
                            before its results
                            become visible.

                        </p>


                    </article>



                    <article class="ky-value-card">


                        <i class="fas fa-chess"></i>


                        <h3>
                            Planning
                        </h3>


                        <p>

                            Challenges can be approached
                            carefully
                            one step at a time.

                        </p>


                    </article>



                    <article class="ky-value-card">


                        <i class="fas fa-heart"></i>


                        <h3>
                            Tawakkul
                        </h3>


                        <p>

                            Work responsibly
                            while keeping
                            complete trust
                            in Allah.

                        </p>


                    </article>



                    <article class="ky-value-card">


                        <i class="fas fa-mountain"></i>


                        <h3>
                            Perseverance
                        </h3>


                        <p>

                            Keep trying
                            even when progress
                            feels difficult.

                        </p>


                    </article>


                </div>


            </div>


        </div>


    </section>



    {{-- =========================================================
        SESSION VIDEO
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section ky-video-section"
    >


        <div class="ac-container">


            <div class="ky-section-heading">


                <span class="ac-eyebrow">

                    SESSION VIDEO

                </span>


                <h2>

                    Watch Ghazwa e Khyber.

                </h2>


                <p>

                    Revisit moments
                    and learning from
                    Cycle 2 · Session 07.

                </p>


            </div>



            <article class="ac-card ky-video-card">


                <div class="ky-video-frame">


                    <iframe
                        src="https://www.youtube.com/embed/e2VxdmNsDC4?rel=0"
                        title="Ghazwa e Khyber Session Video"
                        loading="lazy"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen
                    ></iframe>


                </div>



                <div class="ky-video-copy">


                    <span class="ac-eyebrow">

                        EVENT VIDEO

                    </span>


                    <h3>

                        Ghazwa e Khyber

                    </h3>


                    <p>

                        Watch highlights
                        and memorable moments
                        from this
                        Seerat Club session.

                    </p>



                    <div class="ky-video-meta">


                        <span>

                            <i class="fas fa-book-open"></i>

                            Cycle 2 · Session 07

                        </span>


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            16 August 2026

                        </span>


                        <span>

                            <i class="fas fa-hourglass-half"></i>

                            Patience and perseverance

                        </span>


                    </div>


                </div>


            </article>


        </div>


    </section>



    {{-- =========================================================
        STATIC EVENT GALLERY
        g1.jpg TO g17.jpg
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section ky-gallery-section"
        id="event-gallery"
    >


        <div class="ac-container">


            <div class="ky-section-heading">


                <span class="ac-eyebrow">

                    EVENT PICTURES

                </span>


                <h2>

                    Moments from
                    Ghazwa e Khyber.

                </h2>


                <p>

                    Fort building,
                    storytelling,
                    activities
                    and memorable moments
                    from Cycle 2 · Session 07.

                </p>


            </div>



            <div
                class="ky-gallery"
                aria-label="Ghazwa e Khyber event gallery"
            >


                <figure class="ky-gallery-item">
                    <a
                        data-fancybox="khyber-gallery"
                        href="{{ asset('assets/images/ghazwa-e-khyber/gallery/g1.jpg') }}"
                    >
                        <img
                            src="{{ asset('assets/images/ghazwa-e-khyber/gallery/g1.jpg') }}"
                            alt="Ghazwa e Khyber event photograph 1"
                            loading="lazy"
                            decoding="async"
                        >
                    </a>
                </figure>


                <figure class="ky-gallery-item">
                    <a
                        data-fancybox="khyber-gallery"
                        href="{{ asset('assets/images/ghazwa-e-khyber/gallery/g2.jpg') }}"
                    >
                        <img
                            src="{{ asset('assets/images/ghazwa-e-khyber/gallery/g2.jpg') }}"
                            alt="Ghazwa e Khyber event photograph 2"
                            loading="lazy"
                            decoding="async"
                        >
                    </a>
                </figure>


                <figure class="ky-gallery-item">
                    <a
                        data-fancybox="khyber-gallery"
                        href="{{ asset('assets/images/ghazwa-e-khyber/gallery/g3.jpg') }}"
                    >
                        <img
                            src="{{ asset('assets/images/ghazwa-e-khyber/gallery/g3.jpg') }}"
                            alt="Ghazwa e Khyber event photograph 3"
                            loading="lazy"
                            decoding="async"
                        >
                    </a>
                </figure>


                <figure class="ky-gallery-item">
                    <a
                        data-fancybox="khyber-gallery"
                        href="{{ asset('assets/images/ghazwa-e-khyber/gallery/g4.jpg') }}"
                    >
                        <img
                            src="{{ asset('assets/images/ghazwa-e-khyber/gallery/g4.jpg') }}"
                            alt="Ghazwa e Khyber event photograph 4"
                            loading="lazy"
                            decoding="async"
                        >
                    </a>
                </figure>


                <figure class="ky-gallery-item">
                    <a
                        data-fancybox="khyber-gallery"
                        href="{{ asset('assets/images/ghazwa-e-khyber/gallery/g5.jpg') }}"
                    >
                        <img
                            src="{{ asset('assets/images/ghazwa-e-khyber/gallery/g5.jpg') }}"
                            alt="Ghazwa e Khyber event photograph 5"
                            loading="lazy"
                            decoding="async"
                        >
                    </a>
                </figure>


                <figure class="ky-gallery-item">
                    <a
                        data-fancybox="khyber-gallery"
                        href="{{ asset('assets/images/ghazwa-e-khyber/gallery/g6.jpg') }}"
                    >
                        <img
                            src="{{ asset('assets/images/ghazwa-e-khyber/gallery/g6.jpg') }}"
                            alt="Ghazwa e Khyber event photograph 6"
                            loading="lazy"
                            decoding="async"
                        >
                    </a>
                </figure>


                <figure class="ky-gallery-item">
                    <a
                        data-fancybox="khyber-gallery"
                        href="{{ asset('assets/images/ghazwa-e-khyber/gallery/g7.jpg') }}"
                    >
                        <img
                            src="{{ asset('assets/images/ghazwa-e-khyber/gallery/g7.jpg') }}"
                            alt="Ghazwa e Khyber event photograph 7"
                            loading="lazy"
                            decoding="async"
                        >
                    </a>
                </figure>


                <figure class="ky-gallery-item">
                    <a
                        data-fancybox="khyber-gallery"
                        href="{{ asset('assets/images/ghazwa-e-khyber/gallery/g8.jpg') }}"
                    >
                        <img
                            src="{{ asset('assets/images/ghazwa-e-khyber/gallery/g8.jpg') }}"
                            alt="Ghazwa e Khyber event photograph 8"
                            loading="lazy"
                            decoding="async"
                        >
                    </a>
                </figure>


                <figure class="ky-gallery-item">
                    <a
                        data-fancybox="khyber-gallery"
                        href="{{ asset('assets/images/ghazwa-e-khyber/gallery/g9.jpg') }}"
                    >
                        <img
                            src="{{ asset('assets/images/ghazwa-e-khyber/gallery/g9.jpg') }}"
                            alt="Ghazwa e Khyber event photograph 9"
                            loading="lazy"
                            decoding="async"
                        >
                    </a>
                </figure>


                <figure class="ky-gallery-item">
                    <a
                        data-fancybox="khyber-gallery"
                        href="{{ asset('assets/images/ghazwa-e-khyber/gallery/g10.jpg') }}"
                    >
                        <img
                            src="{{ asset('assets/images/ghazwa-e-khyber/gallery/g10.jpg') }}"
                            alt="Ghazwa e Khyber event photograph 10"
                            loading="lazy"
                            decoding="async"
                        >
                    </a>
                </figure>


                <figure class="ky-gallery-item">
                    <a
                        data-fancybox="khyber-gallery"
                        href="{{ asset('assets/images/ghazwa-e-khyber/gallery/g11.jpg') }}"
                    >
                        <img
                            src="{{ asset('assets/images/ghazwa-e-khyber/gallery/g11.jpg') }}"
                            alt="Ghazwa e Khyber event photograph 11"
                            loading="lazy"
                            decoding="async"
                        >
                    </a>
                </figure>


                <figure class="ky-gallery-item">
                    <a
                        data-fancybox="khyber-gallery"
                        href="{{ asset('assets/images/ghazwa-e-khyber/gallery/g12.jpg') }}"
                    >
                        <img
                            src="{{ asset('assets/images/ghazwa-e-khyber/gallery/g12.jpg') }}"
                            alt="Ghazwa e Khyber event photograph 12"
                            loading="lazy"
                            decoding="async"
                        >
                    </a>
                </figure>


                <figure class="ky-gallery-item">
                    <a
                        data-fancybox="khyber-gallery"
                        href="{{ asset('assets/images/ghazwa-e-khyber/gallery/g13.jpg') }}"
                    >
                        <img
                            src="{{ asset('assets/images/ghazwa-e-khyber/gallery/g13.jpg') }}"
                            alt="Ghazwa e Khyber event photograph 13"
                            loading="lazy"
                            decoding="async"
                        >
                    </a>
                </figure>


                <figure class="ky-gallery-item">
                    <a
                        data-fancybox="khyber-gallery"
                        href="{{ asset('assets/images/ghazwa-e-khyber/gallery/g14.jpg') }}"
                    >
                        <img
                            src="{{ asset('assets/images/ghazwa-e-khyber/gallery/g14.jpg') }}"
                            alt="Ghazwa e Khyber event photograph 14"
                            loading="lazy"
                            decoding="async"
                        >
                    </a>
                </figure>


                <figure class="ky-gallery-item">
                    <a
                        data-fancybox="khyber-gallery"
                        href="{{ asset('assets/images/ghazwa-e-khyber/gallery/g15.jpg') }}"
                    >
                        <img
                            src="{{ asset('assets/images/ghazwa-e-khyber/gallery/g15.jpg') }}"
                            alt="Ghazwa e Khyber event photograph 15"
                            loading="lazy"
                            decoding="async"
                        >
                    </a>
                </figure>


                <figure class="ky-gallery-item">
                    <a
                        data-fancybox="khyber-gallery"
                        href="{{ asset('assets/images/ghazwa-e-khyber/gallery/g16.jpg') }}"
                    >
                        <img
                            src="{{ asset('assets/images/ghazwa-e-khyber/gallery/g16.jpg') }}"
                            alt="Ghazwa e Khyber event photograph 16"
                            loading="lazy"
                            decoding="async"
                        >
                    </a>
                </figure>


                <figure class="ky-gallery-item">
                    <a
                        data-fancybox="khyber-gallery"
                        href="{{ asset('assets/images/ghazwa-e-khyber/gallery/g17.jpg') }}"
                    >
                        <img
                            src="{{ asset('assets/images/ghazwa-e-khyber/gallery/g17.jpg') }}"
                            alt="Ghazwa e Khyber event photograph 17"
                            loading="lazy"
                            decoding="async"
                        >
                    </a>
                </figure>


            </div>


        </div>


    </section>



    {{-- =========================================================
        PREVIOUS / NEXT
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section ky-cycle-section"
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
                        'past-events.cycle-2-2026-onwards.treaty-of-hudaybia'
                    ) }}"
                >


                    <small>

                        Previous chapter

                    </small>


                    <strong>

                        Treaty of Hudaybia

                        <span aria-hidden="true">
                            ↗
                        </span>

                    </strong>


                </a>



                <a
                    href="{{ route(
                        'past-events.cycle-2-2026-onwards.letters-to-kings'
                    ) }}"
                >


                    <small>

                        Next chapter

                    </small>


                    <strong>

                        Letters to Kings

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
