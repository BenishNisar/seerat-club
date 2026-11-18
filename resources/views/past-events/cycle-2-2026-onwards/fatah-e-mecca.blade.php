@extends("Layout.layout")

@section('title', 'Fatah-e-Mecca · Seerat Club')

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
   FATAH E MECCA
   STATIC PREMIUM EVENT PAGE
   ================================================================ */

.fatah-premium-page {

    --fm-green: #173b31;
    --fm-dark: #102b24;
    --fm-gold: #c99d45;
    --fm-gold-light: #efdca6;
    --fm-cream: #f8f5ed;
    --fm-soft: #fbfaf6;
    --fm-muted: #5d6b66;

    --fm-border:
        rgba(23,59,49,.10);

    --fm-shadow:
        0 18px 55px
        rgba(20,52,43,.10);

    --fm-shadow-lg:
        0 30px 90px
        rgba(13,44,36,.17);

    background: #ffffff;

    color: #172923;
}


/* ================================================================
   TYPOGRAPHY
   ================================================================ */

.fatah-premium-page h1,
.fatah-premium-page h2,
.fatah-premium-page h3,
.fatah-premium-page h4,
.fatah-premium-page h5,
.fatah-premium-page h6,
.fatah-premium-page .ac-btn,
.fatah-premium-page .ac-eyebrow,
.fatah-premium-page .sc-chapter-links strong {

    font-family:
        "Baloo 2",
        "SC Arabic",
        sans-serif !important;
}


.fatah-premium-page p,
.fatah-premium-page li,
.fatah-premium-page .fm-meta,
.fatah-premium-page .ac-breadcrumb,
.fatah-premium-page .sc-chapter-links small {

    font-family:
        "DM Sans",
        "SC Arabic",
        sans-serif !important;
}


/* ================================================================
   HERO
   ================================================================ */

.fatah-premium-page
.fm-hero {

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


/*
   Old pale .90 overlay removed.
*/

.fatah-premium-page
.fm-hero::before {

    content: "";

    position: absolute;

    inset: 0;

    z-index: -1;

    background:
        linear-gradient(
            90deg,
            rgba(10,39,32,.81) 0%,
            rgba(10,39,32,.54) 42%,
            rgba(10,39,32,.21) 72%,
            rgba(10,39,32,.08) 100%
        );
}


.fatah-premium-page
.fm-hero::after {

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


.fatah-premium-page
.fm-hero
.ac-container {

    position: relative;

    z-index: 3;
}


/* ================================================================
   BREADCRUMB
   ================================================================ */

.fatah-premium-page
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


.fatah-premium-page
.ac-breadcrumb a {

    color:
        #ffffff !important;

    text-decoration: none;
}


.fatah-premium-page
.ac-breadcrumb a:hover {

    color:
        var(--fm-gold-light) !important;
}


/* ================================================================
   HERO GRID
   ================================================================ */

.fatah-premium-page
.fm-hero-grid {

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

.fatah-premium-page
.fm-hero-copy {

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
        var(--fm-shadow-lg) !important;

    backdrop-filter:
        none !important;

    -webkit-backdrop-filter:
        none !important;
}


.fatah-premium-page
.fm-hero-copy::before {

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
            var(--fm-gold),
            #efd593
        );
}


.fatah-premium-page
.fm-hero-copy
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


.fatah-premium-page
.fm-hero-copy h1 {

    max-width: 720px;

    margin:
        23px 0 22px !important;

    color:
        var(--fm-dark) !important;

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


.fatah-premium-page
.fm-hero-lead {

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

.fatah-premium-page
.fm-meta {

    display: flex;

    flex-wrap: wrap;

    gap: 11px;

    margin:
        26px 0 30px;
}


.fatah-premium-page
.fm-meta > span {

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


.fatah-premium-page
.fm-meta i {

    color:
        #aa8438;
}


/* ================================================================
   BUTTONS
   ================================================================ */

.fatah-premium-page
.ac-actions {

    display: flex;

    flex-wrap: wrap;

    gap: 13px;
}


.fatah-premium-page
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
        var(--fm-gold) !important;

    border-radius:
        999px !important;

    background:
        var(--fm-gold) !important;

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


.fatah-premium-page
.ac-btn:hover {

    transform:
        translateY(-2px);

    background:
        #d5aa51 !important;
}


.fatah-premium-page
.ac-btn-secondary {

    border-color:
        rgba(23,59,49,.13) !important;

    background:
        #ffffff !important;

    color:
        var(--fm-dark) !important;

    box-shadow:
        0 10px 25px
        rgba(16,43,36,.07);
}


/* ================================================================
   HERO VISUAL
   ================================================================ */

.fatah-premium-page
.fm-poster {

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
        rgba(255,255,255,.95) !important;

    box-shadow:
        var(--fm-shadow-lg) !important;

    transform:
        rotate(1deg);

    transition:
        .3s ease;
}


.fatah-premium-page
.fm-poster:hover {

    transform:
        rotate(0)
        translateY(-5px);
}


.fatah-premium-page
.fm-poster-inner {

    display: flex;

    align-items: center;

    justify-content: center;

    min-height: 510px;

    overflow: hidden;

    border-radius: 21px;

    background:
        linear-gradient(
            145deg,
            #f0ecdf,
            #e2e7df
        );
}


.fatah-premium-page
.fm-poster img {

    display: block;

    width:
        min(82%,360px);

    max-height: 460px;

    object-fit: contain;

    transition:
        transform .4s ease;
}


.fatah-premium-page
.fm-poster:hover img {

    transform:
        scale(1.03);
}


.fatah-premium-page
.fm-poster figcaption {

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
   STORY SECTION
   ================================================================ */

.fatah-premium-page
.fm-story-section {

    background:
        radial-gradient(
            circle at 8% 8%,
            rgba(201,157,69,.09),
            transparent 25%
        ),
        #f9f7f0 !important;
}


.fatah-premium-page
.fm-story-grid {

    display: grid;

    grid-template-columns:
        minmax(0,1fr)
        330px;

    align-items: start;

    gap:
        clamp(45px,7vw,85px);
}


.fatah-premium-page
.fm-story-copy {

    max-width: 800px;
}


.fatah-premium-page
.fm-story-copy h2 {

    margin:
        15px 0 22px;

    color:
        var(--fm-dark) !important;

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


.fatah-premium-page
.fm-story-copy h3 {

    margin:
        35px 0 12px;

    color:
        var(--fm-dark) !important;

    font-size:
        29px !important;

    line-height:
        1.15;
}


.fatah-premium-page
.fm-lead {

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


.fatah-premium-page
.fm-story-copy p {

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
   STATUS CARD
   ================================================================ */

.fatah-premium-page
.fm-story-aside {

    position: sticky;

    top: 120px;
}


.fatah-premium-page
.fm-status-card {

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
        var(--fm-shadow) !important;
}


.fatah-premium-page
.fm-status-card::after {

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


.fatah-premium-page
.fm-status-card
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.fatah-premium-page
.fm-status-card h3 {

    margin:
        14px 0 18px;

    color:
        #ffffff !important;

    font-size:
        27px !important;

    line-height:
        1.18;
}


.fatah-premium-page
.fm-status-card > p {

    color:
        rgba(255,255,255,.70) !important;

    font-size:
        14px !important;

    line-height:
        1.72 !important;
}


.fatah-premium-page
.fm-status-points {

    display: grid;

    gap: 10px;

    margin-top: 24px;
}


.fatah-premium-page
.fm-status-points span {

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


.fatah-premium-page
.fm-status-points i {

    width: 19px;

    color:
        #e6c878;

    text-align: center;
}


/* ================================================================
   CHAPTER STATUS SECTION
   ================================================================ */

.fatah-premium-page
.fm-latest-section {

    position: relative;

    overflow: hidden;

    background:
        linear-gradient(
            135deg,
            #173b31,
            #102b24
        ) !important;
}


.fatah-premium-page
.fm-latest-section::after {

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


.fatah-premium-page
.fm-latest-grid {

    position: relative;

    z-index: 2;

    display: grid;

    grid-template-columns:
        .82fr
        1.18fr;

    gap: 70px;

    align-items: center;
}


.fatah-premium-page
.fm-latest-copy
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.fatah-premium-page
.fm-latest-copy h2 {

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


.fatah-premium-page
.fm-latest-copy p {

    color:
        rgba(255,255,255,.73) !important;

    font-size: 16px;

    line-height: 1.85;
}


.fatah-premium-page
.fm-latest-cards {

    display: grid;

    grid-template-columns:
        repeat(
            2,
            minmax(0,1fr)
        );

    gap: 15px;
}


.fatah-premium-page
.fm-latest-card {

    padding: 23px;

    border:
        1px solid
        rgba(255,255,255,.10);

    border-radius: 20px;

    background:
        rgba(255,255,255,.065);
}


.fatah-premium-page
.fm-latest-card i {

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


.fatah-premium-page
.fm-latest-card h3 {

    margin:
        0 0 8px;

    color:
        #ffffff !important;

    font-size: 21px;

    line-height: 1.2;
}


.fatah-premium-page
.fm-latest-card p {

    margin: 0;

    color:
        rgba(255,255,255,.67) !important;

    font-size: 14px;

    line-height: 1.65;
}


/* ================================================================
   MATERIAL STATUS
   ================================================================ */

.fatah-premium-page
.fm-material-section {

    background:
        #fbfaf6 !important;
}


.fatah-premium-page
.fm-section-heading {

    max-width: 760px;

    margin-bottom: 42px;
}


.fatah-premium-page
.fm-section-heading h2 {

    margin:
        13px 0;

    color:
        var(--fm-dark);

    font-size:
        clamp(
            38px,
            4vw,
            52px
        );

    line-height: 1.08;
}


.fatah-premium-page
.fm-section-heading p {

    color:
        #64716c;

    font-size: 16px;

    line-height: 1.8;
}


.fatah-premium-page
.fm-material-card {

    display: grid;

    grid-template-columns:
        minmax(280px,.55fr)
        minmax(0,1fr);

    align-items: center;

    gap: 38px;

    padding:
        clamp(28px,4vw,48px) !important;

    border:
        1px solid
        var(--fm-border) !important;

    border-radius:
        30px !important;

    background:
        #ffffff !important;

    box-shadow:
        var(--fm-shadow) !important;
}


.fatah-premium-page
.fm-material-icon {

    display: flex;

    align-items: center;

    justify-content: center;

    min-height: 280px;

    border-radius: 24px;

    background:
        linear-gradient(
            145deg,
            #e7ece5,
            #f2eee2
        );
}


.fatah-premium-page
.fm-material-icon i {

    color:
        var(--fm-green);

    font-size:
        clamp(
            70px,
            8vw,
            115px
        );

    opacity:
        .82;
}


.fatah-premium-page
.fm-material-copy h3 {

    margin:
        14px 0 15px;

    color:
        var(--fm-dark);

    font-size:
        clamp(
            30px,
            3vw,
            40px
        );

    line-height:
        1.12;
}


.fatah-premium-page
.fm-material-copy p {

    max-width:
        670px;

    margin:
        0 0 16px;

    color:
        #5f6b67;

    font-size:
        16px;

    line-height:
        1.8;
}


.fatah-premium-page
.fm-material-note {

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
        #766239 !important;

    font-size:
        13px !important;
}


/* ================================================================
   CYCLE NAVIGATION
   ================================================================ */

.fatah-premium-page
.fm-cycle-section {

    background:
        #e7ece4 !important;
}


.fatah-premium-page
.fm-cycle-section
.ac-heading {

    margin-bottom:
        30px;
}


.fatah-premium-page
.fm-cycle-section h2 {

    margin:
        12px 0;

    color:
        var(--fm-dark);

    font-size:
        clamp(
            34px,
            4vw,
            50px
        );
}


.fatah-premium-page
.sc-chapter-links {

    display: grid;

    grid-template-columns:
        repeat(
            2,
            minmax(0,1fr)
        );

    gap: 16px;
}


.fatah-premium-page
.sc-chapter-links > a {

    display: flex;

    flex-direction: column;

    gap: 8px;

    min-height: 125px;

    padding:
        25px 27px;

    border:
        1px solid
        var(--fm-border);

    border-radius: 20px;

    background:
        rgba(255,255,255,.82);

    color:
        var(--fm-dark);

    text-decoration: none;

    box-shadow:
        0 10px 30px
        rgba(20,52,43,.05);

    transition:
        .25s ease;
}


.fatah-premium-page
.sc-chapter-links > a:hover {

    transform:
        translateY(-4px);

    background:
        #ffffff;

    box-shadow:
        var(--fm-shadow);
}


.fatah-premium-page
.sc-chapter-links small {

    color:
        #9d7831;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: .13em;

    text-transform: uppercase;
}


.fatah-premium-page
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

    .fatah-premium-page
    .fm-hero-grid {

        grid-template-columns:
            1fr 330px;
    }


    .fatah-premium-page
    .fm-story-grid {

        grid-template-columns:
            1fr 290px;
    }

}


@media (max-width:850px) {

    .fatah-premium-page
    .fm-hero {

        min-height: auto;

        padding-bottom:
            65px !important;
    }


    .fatah-premium-page
    .fm-hero-grid,
    .fatah-premium-page
    .fm-story-grid,
    .fatah-premium-page
    .fm-latest-grid,
    .fatah-premium-page
    .fm-material-card {

        grid-template-columns:
            1fr;
    }


    .fatah-premium-page
    .fm-poster {

        width:
            min(520px,100%);

        margin-inline:
            auto;

        transform: none;
    }


    .fatah-premium-page
    .fm-story-aside {

        position: static;
    }


    .fatah-premium-page
    .fm-latest-grid {

        gap: 38px;
    }


    .fatah-premium-page
    .fm-material-icon {

        min-height: 230px;
    }

}


@media (max-width:650px) {

    .fatah-premium-page
    .fm-hero {

        border-radius:
            0 0 28px 28px;
    }


    .fatah-premium-page
    .fm-hero-copy {

        padding:
            30px 23px !important;

        border-radius:
            25px !important;
    }


    .fatah-premium-page
    .fm-hero-copy h1 {

        font-size:
            clamp(
                42px,
                12vw,
                60px
            ) !important;
    }


    .fatah-premium-page
    .fm-meta {

        flex-direction: column;

        align-items: flex-start;
    }


    .fatah-premium-page
    .ac-actions {

        flex-direction: column;
    }


    .fatah-premium-page
    .ac-btn {

        width: 100%;
    }


    .fatah-premium-page
    .fm-latest-cards {

        grid-template-columns:
            1fr;
    }


    .fatah-premium-page
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
        fatah-premium-page
    "
>


    {{-- =========================================================
        HERO

        Static image currently available in source:
        assets/images/past-events.jpg
    ========================================================== --}}

    <section
        class="ac-masthead fm-hero"
        style="
            background-image:
                url('{{ asset('assets/images/past-events.jpg') }}');
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
                    Fatah e Mecca
                </span>

            </nav>



            <div class="fm-hero-grid">


                <div class="fm-hero-copy">


                    <span class="ac-eyebrow">

                        CYCLE 2 · SESSION 09

                    </span>


                    <h1>

                        Fatah e Mecca

                    </h1>


                    <p class="fm-hero-lead">

                        The latest Cycle 2 chapter,
                        dated 18 October 2026,
                        continuing Seerat Club’s
                        chronological journey
                        through the Seerah.

                    </p>



                    <div class="fm-meta">


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            <b>
                                18 October 2026
                            </b>

                        </span>


                        <span>

                            <i class="fas fa-book-open"></i>

                            <b>
                                Cycle 2 · Session 09
                            </b>

                        </span>


                    </div>



                    <div class="ac-actions">


                        <a
                            class="ac-btn"
                            href="#event-story"
                        >

                            Explore the chapter

                            <i class="fas fa-arrow-right"></i>

                        </a>


                        <a
                            class="ac-btn ac-btn-secondary"
                            href="{{ route('past-events.cycle-2-2026-onwards.index') }}"
                        >

                            Back to Cycle 2

                        </a>


                    </div>


                </div>



                {{-- =================================================
                    STATIC MAKKAH VISUAL

                    This is the existing visual from
                    the current source.

                    Replace only this path later
                    when the real event poster is available.
                ================================================== --}}

                <figure class="fm-poster">


                    <div class="fm-poster-inner">


                        <img
                            src="{{ asset('assets/images/academy/young-hearts-of-mecca-theme.svg') }}"
                            alt="Makkah themed Seerat Club visual"
                            decoding="async"
                        >


                    </div>


                    <figcaption>

                        Fatah e Mecca ·
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
        class="ac-section sc-svg-section fm-story-section"
        id="event-story"
    >


        <div class="ac-container">


            <div class="fm-story-grid">


                <article class="ac-prose fm-story-copy">


                    <span class="ac-eyebrow">

                        LATEST CHAPTER

                    </span>


                    <h2>

                        Fatah e Mecca

                    </h2>


                    <p class="fm-lead">

                        Cycle 2 · Session 09

                    </p>


                    <p>

                        Seerat Club’s current
                        Cycle 2 reference identifies
                        Fatah e Mecca
                        as the latest session,
                        dated 18 October 2026.

                    </p>


                    <p>

                        This page is now connected
                        correctly within
                        the Laravel Cycle 2 journey
                        instead of leading
                        to a missing
                        legacy HTML page.

                    </p>


                    <h3>

                        Session material

                    </h3>


                    <p>

                        The detailed session
                        write up,
                        event photographs,
                        video
                        and presentation
                        are not included
                        in the current source
                        provided for this page.

                    </p>


                    <p>

                        The layout has therefore
                        been prepared
                        in the same premium
                        Cycle 2 design system
                        without inventing
                        any event photographs,
                        videos
                        or presentation links.

                    </p>


                    <p>

                        Once the original
                        session material
                        becomes available,
                        it can be added
                        directly into this page
                        without changing
                        its overall visual system.

                    </p>


                </article>



                <aside class="fm-story-aside">


                    <div class="fm-status-card ac-card">


                        <span class="ac-eyebrow">

                            SESSION STATUS

                        </span>


                        <h3>

                            Latest Cycle 2
                            chapter.

                        </h3>


                        <p>

                            The current source
                            contains the event title,
                            date
                            and Cycle 2 position,
                            but not the complete
                            supporting media.

                        </p>



                        <div class="fm-status-points">


                            <span>

                                <i class="far fa-calendar-alt"></i>

                                18 October 2026

                            </span>


                            <span>

                                <i class="fas fa-book-open"></i>

                                Cycle 2 · Session 09

                            </span>


                            <span>

                                <i class="fas fa-history"></i>

                                Seerah journey

                            </span>


                        </div>


                    </div>


                </aside>


            </div>


        </div>


    </section>



    {{-- =========================================================
        CURRENT CHAPTER STATUS
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section fm-latest-section"
    >


        <div class="ac-container">


            <div class="fm-latest-grid">


                <div class="fm-latest-copy">


                    <span class="ac-eyebrow">

                        CYCLE 2 · SESSION 09

                    </span>


                    <h2>

                        A chapter ready
                        for its original
                        session material.

                    </h2>


                    <p>

                        The page structure
                        is complete
                        and connected correctly.

                        Original photographs,
                        video
                        and presentation
                        can be added
                        when the event material
                        is available.

                    </p>


                </div>



                <div class="fm-latest-cards">


                    <article class="fm-latest-card">


                        <i class="fas fa-book-open"></i>


                        <h3>
                            Seerah
                        </h3>


                        <p>

                            Positioned correctly
                            within the chronological
                            Cycle 2 journey.

                        </p>


                    </article>



                    <article class="fm-latest-card">


                        <i class="far fa-calendar-alt"></i>


                        <h3>
                            Session 09
                        </h3>


                        <p>

                            Event date preserved
                            as 18 October 2026.

                        </p>


                    </article>



                    <article class="fm-latest-card">


                        <i class="fas fa-images"></i>


                        <h3>
                            Photographs
                        </h3>


                        <p>

                            No original event gallery
                            was supplied
                            in the current source.

                        </p>


                    </article>



                    <article class="fm-latest-card">


                        <i class="fas fa-file-alt"></i>


                        <h3>
                            Materials
                        </h3>


                        <p>

                            No verified presentation
                            or video link
                            is currently available
                            in this file.

                        </p>


                    </article>


                </div>


            </div>


        </div>


    </section>



    {{-- =========================================================
        MATERIAL STATUS
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section fm-material-section"
    >


        <div class="ac-container">


            <div class="fm-section-heading">


                <span class="ac-eyebrow">

                    EVENT MATERIAL

                </span>


                <h2>

                    Original media
                    can be added here.

                </h2>


                <p>

                    This section is intentionally
                    kept clean until
                    the actual Fatah e Mecca
                    photographs,
                    video
                    or presentation
                    are available.

                </p>


            </div>



            <article class="ac-card fm-material-card">


                <div class="fm-material-icon">


                    <i class="fas fa-folder-open"></i>


                </div>



                <div class="fm-material-copy">


                    <span class="ac-eyebrow">

                        SOURCE MATERIAL

                    </span>


                    <h3>

                        No unverified media added.

                    </h3>


                    <p>

                        The current Blade source
                        does not contain
                        an original Fatah e Mecca
                        event gallery,
                        YouTube video
                        or Google Drive
                        presentation.

                    </p>


                    <p>

                        Keeping this area empty
                        is safer than connecting
                        material from another
                        event by mistake.

                    </p>


                    <span class="fm-material-note">

                        <i class="fas fa-check-circle"></i>

                        Page structure ready

                    </span>


                </div>


            </article>


        </div>


    </section>



    {{-- =========================================================
        CYCLE 2 NAVIGATION
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section fm-cycle-section"
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
                        'past-events.cycle-2-2026-onwards.letters-to-kings'
                    ) }}"
                >


                    <small>

                        Previous chapter

                    </small>


                    <strong>

                        Letters to Kings

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
