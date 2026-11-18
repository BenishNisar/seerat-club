@extends("Layout.layout")

@section('title', 'The First Call in Madinah · Seerat Club')

@section("Content")


<link
    rel="stylesheet"
    href="{{ asset('assets/css/past-events-premium.css') }}"
>


<style>

/* ================================================================
   THE FIRST CALL IN MADINAH
   CYCLE 2 · STATIC PREMIUM PAGE
   ================================================================ */

.first-call-premium-page {

    --fc-green: #173b31;
    --fc-dark: #102b24;
    --fc-gold: #c99d45;
    --fc-gold-light: #efdca6;
    --fc-cream: #f8f5ed;
    --fc-soft: #fbfaf6;
    --fc-muted: #5d6b66;

    --fc-border:
        rgba(23,59,49,.10);

    --fc-shadow:
        0 18px 55px
        rgba(20,52,43,.10);

    --fc-shadow-lg:
        0 30px 90px
        rgba(13,44,36,.17);

    background: #ffffff;
    color: #172923;
}


/* ================================================================
   TYPOGRAPHY
   ================================================================ */

.first-call-premium-page h1,
.first-call-premium-page h2,
.first-call-premium-page h3,
.first-call-premium-page h4,
.first-call-premium-page h5,
.first-call-premium-page h6,
.first-call-premium-page .ac-btn,
.first-call-premium-page .ac-eyebrow,
.first-call-premium-page .sc-chapter-links strong {

    font-family:
        "Baloo 2",
        "SC Arabic",
        sans-serif !important;
}


.first-call-premium-page p,
.first-call-premium-page li,
.first-call-premium-page .fc-meta,
.first-call-premium-page .ac-breadcrumb,
.first-call-premium-page .fc-resource-meta,
.first-call-premium-page .sc-chapter-links small {

    font-family:
        "DM Sans",
        "SC Arabic",
        sans-serif !important;
}


/* ================================================================
   HERO
   ================================================================ */

.first-call-premium-page
.fc-hero {

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


.first-call-premium-page
.fc-hero::before {

    content: "";

    position: absolute;

    inset: 0;

    z-index: -1;

    background:
        linear-gradient(
            90deg,
            rgba(10,39,32,.80) 0%,
            rgba(10,39,32,.52) 42%,
            rgba(10,39,32,.19) 72%,
            rgba(10,39,32,.06) 100%
        );
}


.first-call-premium-page
.fc-hero::after {

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


.first-call-premium-page
.fc-hero
.ac-container {

    position: relative;

    z-index: 3;
}


/* ================================================================
   BREADCRUMB
   ================================================================ */

.first-call-premium-page
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


.first-call-premium-page
.ac-breadcrumb a {

    color: #ffffff !important;

    text-decoration: none;
}


.first-call-premium-page
.ac-breadcrumb a:hover {

    color:
        var(--fc-gold-light) !important;
}


/* ================================================================
   HERO GRID
   ================================================================ */

.first-call-premium-page
.fc-hero-grid {

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

.first-call-premium-page
.fc-hero-copy {

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
        var(--fc-shadow-lg) !important;

    backdrop-filter:
        none !important;

    -webkit-backdrop-filter:
        none !important;
}


.first-call-premium-page
.fc-hero-copy::before {

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
            var(--fc-gold),
            #efd593
        );
}


.first-call-premium-page
.fc-hero-copy
.ac-eyebrow {

    display: inline-flex;

    align-items: center;

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

    font-size: 12px;

    font-weight: 700;

    letter-spacing: .12em;
}


.first-call-premium-page
.fc-hero-copy h1 {

    max-width: 720px;

    margin:
        23px 0 22px !important;

    color:
        var(--fc-dark) !important;

    font-size:
        clamp(
            46px,
            5.2vw,
            74px
        ) !important;

    font-weight:
        700 !important;

    line-height:
        1.01 !important;

    letter-spacing:
        -.03em !important;
}


.first-call-premium-page
.fc-hero-lead {

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
   EVENT META
   ================================================================ */

.first-call-premium-page
.fc-meta {

    display: flex;

    flex-wrap: wrap;

    gap: 11px;

    margin:
        26px 0 30px;
}


.first-call-premium-page
.fc-meta > span {

    display: inline-flex;

    align-items: center;

    gap: 9px;

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

    font-size: 13px;
}


.first-call-premium-page
.fc-meta i {

    color:
        #aa8438;
}


/* ================================================================
   BUTTONS
   ================================================================ */

.first-call-premium-page
.ac-actions {

    display: flex;

    flex-wrap: wrap;

    gap: 13px;
}


.first-call-premium-page
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
        var(--fc-gold) !important;

    border-radius:
        999px !important;

    background:
        var(--fc-gold) !important;

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


.first-call-premium-page
.ac-btn:hover {

    transform:
        translateY(-2px);

    background:
        #d5aa51 !important;
}


.first-call-premium-page
.ac-btn-secondary {

    border-color:
        rgba(23,59,49,.13) !important;

    background:
        #ffffff !important;

    color:
        var(--fc-dark) !important;

    box-shadow:
        0 10px 25px
        rgba(16,43,36,.07);
}


/* ================================================================
   POSTER
   ================================================================ */

.first-call-premium-page
.fc-poster {

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
        var(--fc-shadow-lg) !important;

    transform:
        rotate(1deg);

    transition:
        .3s ease;
}


.first-call-premium-page
.fc-poster:hover {

    transform:
        rotate(0)
        translateY(-5px);
}


.first-call-premium-page
.fc-poster a {

    display: block;

    overflow: hidden;

    border-radius:
        21px;
}


.first-call-premium-page
.fc-poster img {

    display: block;

    width: 100%;

    aspect-ratio:
        4 / 5;

    object-fit: contain;

    background:
        #f6f4ed;

    transition:
        transform .45s ease;
}


.first-call-premium-page
.fc-poster:hover img {

    transform:
        scale(1.02);
}


.first-call-premium-page
.fc-poster figcaption {

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

.first-call-premium-page
.fc-story-section {

    background:
        radial-gradient(
            circle at 8% 8%,
            rgba(201,157,69,.09),
            transparent 25%
        ),
        #f9f7f0 !important;
}


.first-call-premium-page
.fc-story-grid {

    display: grid;

    grid-template-columns:
        minmax(0,1fr)
        330px;

    align-items: start;

    gap:
        clamp(45px,7vw,85px);
}


.first-call-premium-page
.fc-story-copy {

    max-width:
        800px;
}


.first-call-premium-page
.fc-story-copy h2 {

    margin:
        15px 0 22px;

    color:
        var(--fc-dark) !important;

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


.first-call-premium-page
.fc-story-copy h3 {

    margin:
        35px 0 12px;

    color:
        var(--fc-dark) !important;

    font-size:
        29px !important;

    font-weight:
        700 !important;

    line-height:
        1.15;
}


.first-call-premium-page
.fc-lead {

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


.first-call-premium-page
.fc-story-copy p {

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
   KEY CONNECTION
   ================================================================ */

.first-call-premium-page
.fc-story-aside {

    position: sticky;

    top: 120px;
}


.first-call-premium-page
.fc-takeaway {

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
        var(--fc-shadow) !important;
}


.first-call-premium-page
.fc-takeaway::after {

    content: "";

    position: absolute;

    width: 190px;
    height: 190px;

    right: -75px;
    top: -75px;

    border:
        1px solid
        rgba(239,220,168,.13);

    border-radius:
        50%;
}


.first-call-premium-page
.fc-takeaway
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.first-call-premium-page
.fc-takeaway h3 {

    margin:
        14px 0 18px;

    color:
        #ffffff !important;

    font-size:
        27px !important;

    line-height:
        1.18;
}


.first-call-premium-page
.fc-takeaway > p {

    color:
        rgba(255,255,255,.70) !important;

    font-size:
        14px !important;

    line-height:
        1.72 !important;
}


.first-call-premium-page
.fc-points {

    display: grid;

    gap: 10px;

    margin-top:
        24px;
}


.first-call-premium-page
.fc-points span {

    display: flex;

    align-items: center;

    gap: 11px;

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


.first-call-premium-page
.fc-points i {

    width: 19px;

    color:
        #e6c878;

    text-align: center;
}


/* ================================================================
   AZAAN MEANING SECTION
   ================================================================ */

.first-call-premium-page
.fc-meaning-section {

    position: relative;

    overflow: hidden;

    background:
        linear-gradient(
            135deg,
            #173b31,
            #102b24
        ) !important;
}


.first-call-premium-page
.fc-meaning-section::after {

    content: "";

    position: absolute;

    width: 530px;
    height: 530px;

    right: -230px;
    bottom: -280px;

    border:
        1px solid
        rgba(239,219,162,.12);

    border-radius:
        50%;
}


.first-call-premium-page
.fc-meaning-grid {

    position: relative;

    z-index: 2;

    display: grid;

    grid-template-columns:
        .82fr
        1.18fr;

    gap:
        70px;

    align-items: center;
}


.first-call-premium-page
.fc-meaning-copy
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.first-call-premium-page
.fc-meaning-copy h2 {

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


.first-call-premium-page
.fc-meaning-copy p {

    color:
        rgba(255,255,255,.73) !important;

    font-size:
        16px;

    line-height:
        1.85;
}


.first-call-premium-page
.fc-meaning-cards {

    display: grid;

    grid-template-columns:
        repeat(
            2,
            minmax(0,1fr)
        );

    gap:
        15px;
}


.first-call-premium-page
.fc-meaning-card {

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


.first-call-premium-page
.fc-meaning-card i {

    display: flex;

    align-items: center;

    justify-content: center;

    width: 42px;
    height: 42px;

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


.first-call-premium-page
.fc-meaning-card h3 {

    margin:
        0 0 8px;

    color:
        #ffffff !important;

    font-size:
        21px;

    line-height:
        1.2;
}


.first-call-premium-page
.fc-meaning-card p {

    margin: 0;

    color:
        rgba(255,255,255,.67) !important;

    font-size:
        14px;

    line-height:
        1.65;
}


/* ================================================================
   SECTION HEADING
   ================================================================ */

.first-call-premium-page
.fc-section-heading {

    max-width:
        760px;

    margin-bottom:
        42px;
}


.first-call-premium-page
.fc-section-heading h2 {

    margin:
        13px 0;

    color:
        var(--fc-dark);

    font-size:
        clamp(
            38px,
            4vw,
            52px
        );

    line-height:
        1.08;
}


.first-call-premium-page
.fc-section-heading p {

    color:
        #64716c;

    font-size:
        16px;

    line-height:
        1.8;
}


/* ================================================================
   PRESENTATION
   ================================================================ */

.first-call-premium-page
.fc-resource-section {

    background:
        #fbfaf6 !important;
}


.first-call-premium-page
.fc-resource-card {

    display: grid;

    grid-template-columns:
        minmax(0,1.35fr)
        minmax(320px,.72fr);

    overflow: hidden;

    padding:
        0 !important;

    border:
        1px solid
        var(--fc-border) !important;

    border-radius:
        30px !important;

    background:
        #ffffff !important;

    box-shadow:
        var(--fc-shadow) !important;
}


.first-call-premium-page
.fc-resource-preview {

    min-height:
        540px;

    background:
        #e9ece6;
}


.first-call-premium-page
.fc-resource-preview iframe {

    display: block;

    width: 100%;
    height: 100%;

    min-height:
        540px;

    border: 0;
}


.first-call-premium-page
.fc-resource-copy {

    display: flex;

    flex-direction: column;

    justify-content: center;

    padding:
        44px 38px;
}


.first-call-premium-page
.fc-resource-copy h3 {

    margin:
        13px 0 15px;

    color:
        var(--fc-dark);

    font-size:
        clamp(
            28px,
            2.5vw,
            35px
        );

    line-height:
        1.13;
}


.first-call-premium-page
.fc-resource-copy p {

    margin:
        0 0 24px;

    color:
        #5f6b67;

    font-size:
        16px;

    line-height:
        1.8;
}


.first-call-premium-page
.fc-resource-meta {

    display: grid;

    gap: 11px;

    margin-bottom:
        28px;

    color:
        #586661;

    font-size:
        14px;
}


.first-call-premium-page
.fc-resource-meta span {

    display: flex;

    align-items: center;

    gap: 11px;
}


.first-call-premium-page
.fc-resource-meta i {

    width: 18px;

    color:
        #b68d3d;

    text-align: center;
}


.first-call-premium-page
.fc-resource-copy
.ac-btn {

    width:
        fit-content;
}


/* ================================================================
   GALLERY
   ================================================================ */

.first-call-premium-page
.fc-gallery-section {

    background:
        linear-gradient(
            180deg,
            #e8eee6,
            #f3f0e7
        ) !important;
}


.first-call-premium-page
.fc-gallery {

    display: grid;

    grid-template-columns:
        repeat(
            3,
            minmax(0,1fr)
        );

    gap:
        20px;
}


.first-call-premium-page
.fc-gallery-item {

    margin: 0;

    padding: 6px;

    overflow: hidden;

    border:
        1px solid
        var(--fc-border);

    border-radius:
        23px;

    background:
        #ffffff;

    box-shadow:
        var(--fc-shadow);

    transition:
        transform .3s ease,
        box-shadow .3s ease;
}


.first-call-premium-page
.fc-gallery-item:hover {

    transform:
        translateY(-5px);

    box-shadow:
        0 22px 55px
        rgba(20,52,43,.13);
}


.first-call-premium-page
.fc-gallery-item a {

    display: block;

    aspect-ratio:
        4 / 3;

    overflow: hidden;

    border-radius:
        17px;
}


.first-call-premium-page
.fc-gallery-item img {

    display: block;

    width: 100%;
    height: 100%;

    object-fit: cover;

    object-position: center;

    transition:
        transform .45s ease;
}


.first-call-premium-page
.fc-gallery-item:hover img {

    transform:
        scale(1.045);
}


/* ================================================================
   CYCLE NAVIGATION
   ================================================================ */

.first-call-premium-page
.fc-cycle-section {

    background:
        #e7ece4 !important;
}


.first-call-premium-page
.fc-cycle-section
.ac-heading {

    margin-bottom:
        30px;
}


.first-call-premium-page
.fc-cycle-section h2 {

    margin:
        12px 0;

    color:
        var(--fc-dark);

    font-size:
        clamp(
            34px,
            4vw,
            50px
        );
}


.first-call-premium-page
.sc-chapter-links {

    display: grid;

    grid-template-columns:
        repeat(
            2,
            minmax(0,1fr)
        );

    gap:
        16px;
}


.first-call-premium-page
.sc-chapter-links > a {

    display: flex;

    flex-direction: column;

    gap: 8px;

    min-height:
        125px;

    padding:
        25px 27px;

    border:
        1px solid
        var(--fc-border);

    border-radius:
        20px;

    background:
        rgba(255,255,255,.82);

    color:
        var(--fc-dark);

    text-decoration: none;

    box-shadow:
        0 10px 30px
        rgba(20,52,43,.05);

    transition:
        .25s ease;
}


.first-call-premium-page
.sc-chapter-links > a:hover {

    transform:
        translateY(-4px);

    background:
        #ffffff;

    box-shadow:
        var(--fc-shadow);
}


.first-call-premium-page
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


.first-call-premium-page
.sc-chapter-links strong {

    display: flex;

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

    .first-call-premium-page
    .fc-hero-grid {

        grid-template-columns:
            1fr 330px;
    }


    .first-call-premium-page
    .fc-story-grid {

        grid-template-columns:
            1fr 290px;
    }


    .first-call-premium-page
    .fc-resource-card {

        grid-template-columns:
            1fr;
    }


    .first-call-premium-page
    .fc-resource-preview,
    .first-call-premium-page
    .fc-resource-preview iframe {

        min-height:
            480px;
    }

}


@media (max-width:850px) {

    .first-call-premium-page
    .fc-hero {

        min-height:
            auto;

        padding-bottom:
            65px !important;
    }


    .first-call-premium-page
    .fc-hero-grid {

        grid-template-columns:
            1fr;
    }


    .first-call-premium-page
    .fc-poster {

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


    .first-call-premium-page
    .fc-story-grid {

        grid-template-columns:
            1fr;
    }


    .first-call-premium-page
    .fc-story-aside {

        position:
            static;
    }


    .first-call-premium-page
    .fc-meaning-grid {

        grid-template-columns:
            1fr;

        gap:
            38px;
    }


    .first-call-premium-page
    .fc-gallery {

        grid-template-columns:
            repeat(
                2,
                minmax(0,1fr)
            );
    }

}


@media (max-width:650px) {

    .first-call-premium-page
    .fc-hero {

        border-radius:
            0 0 28px 28px;
    }


    .first-call-premium-page
    .fc-hero-copy {

        padding:
            30px 23px !important;

        border-radius:
            25px !important;
    }


    .first-call-premium-page
    .fc-hero-copy h1 {

        font-size:
            clamp(
                40px,
                11.5vw,
                58px
            ) !important;
    }


    .first-call-premium-page
    .fc-meta {

        flex-direction:
            column;

        align-items:
            flex-start;
    }


    .first-call-premium-page
    .ac-actions {

        flex-direction:
            column;
    }


    .first-call-premium-page
    .ac-btn {

        width:
            100%;
    }


    .first-call-premium-page
    .fc-meaning-cards,
    .first-call-premium-page
    .fc-gallery {

        grid-template-columns:
            1fr;
    }


    .first-call-premium-page
    .fc-resource-preview,
    .first-call-premium-page
    .fc-resource-preview iframe {

        min-height:
            410px;
    }


    .first-call-premium-page
    .fc-resource-copy {

        padding:
            30px 23px;
    }


    .first-call-premium-page
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
        first-call-premium-page
    "
>


    {{-- =========================================================
        HERO
        STATIC EVENT PHOTO
    ========================================================== --}}

    <section
        class="ac-masthead fc-hero"
        style="
            background-image:
                url('{{ asset('assets/images/first-call-in-madina/1.jpg') }}');
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
                    The First Call in Madinah
                </span>

            </nav>



            <div class="fc-hero-grid">


                <div class="fc-hero-copy">


                    <span class="ac-eyebrow">

                        CYCLE 2 · SESSION 01

                    </span>


                    <h1>

                        The First Call
                        in Madinah

                    </h1>


                    <p class="fc-hero-lead">

                        A Seerah session
                        on the early days
                        after Hijrah,
                        Masjid e Nabwi
                        and the establishment
                        of the Azaan.

                    </p>



                    <div
                        class="fc-meta"
                        aria-label="Event details"
                    >


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            <b>
                                31 January 2026
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



                {{-- STATIC POSTER --}}

                <figure class="fc-poster">


                    <a
                        data-fancybox="first-call-poster"
                        href="{{ asset('assets/images/first-call-in-madina/first-call-in-madinah.png') }}"
                    >

                        <img
                            src="{{ asset('assets/images/first-call-in-madina/first-call-in-madinah.png') }}"
                            alt="The First Call in Madinah event poster"
                        >

                    </a>


                    <figcaption>

                        Original event poster ·
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
        class="ac-section sc-svg-section fc-story-section"
        id="event-story"
    >


        <div class="ac-container">


            <div class="fc-story-grid">


                <article class="ac-prose fc-story-copy">


                    <span class="ac-eyebrow">

                        THE SESSION

                    </span>


                    <h2>

                        From Hijrah
                        to the call
                        that gathers
                        a community.

                    </h2>


                    <p class="fc-lead">

                        Cycle 2 · Session 01

                    </p>


                    <p>

                        Seerat Club opened Cycle 2
                        on 31 January 2026
                        at Shafqat Masjid.

                        The gathering introduced
                        children to the monthly
                        learning format
                        and reinforced a central
                        idea of the club:
                        Seerah is not simply history,
                        but guidance that connects
                        with everyday choices.

                    </p>


                    <p>

                        The discussion began
                        with something familiar
                        to children:
                        how eagerly people respond
                        to invitations such as
                        a sports day
                        or a wedding.

                    </p>


                    <p>

                        From there,
                        the facilitators connected
                        that excitement
                        to the invitation
                        of Salah,
                        highlighting the Azaan
                        as the call
                        that invites a believer
                        to meet Allah
                        five times every day.

                    </p>


                    <h3>

                        The Early Days
                        in Madinah

                    </h3>


                    <p>

                        The session then moved
                        into the early Madinan period
                        after Hijrah.

                    </p>


                    <p>

                        Children explored
                        the first steps taken
                        by Prophet Muhammad ﷺ,
                        including the building
                        of Masjid e Nabwi
                        and the question
                        of how the growing
                        Muslim community
                        would be called together
                        for prayer.

                    </p>


                    <p>

                        Different possibilities
                        for signalling prayer
                        were discussed,
                        including methods
                        used by other communities.

                    </p>


                    <p>

                        This helped explain
                        why the Azaan
                        became a distinctive
                        call for Muslims.

                    </p>


                    <p>

                        Children also learned
                        basic etiquettes
                        for listening
                        to the Azaan,
                        responding to it
                        and what to do afterwards.

                    </p>


                    <h3>

                        Azaan Recitation Competition

                    </h3>


                    <p>

                        The session concluded
                        with an Azaan
                        recitation competition.

                    </p>


                    <p>

                        Children participated
                        across three age categories,
                        with prizes awarded
                        to the top three participants
                        in each category.

                    </p>


                    <p>

                        The judging panel included
                        Qari Saeed
                        from Shafqat Masjid,
                        Maulana Obaidullah
                        from Masjid e Ibrahim
                        in Phase 4 DHA,
                        and Qari Shoaib,
                        General Secretary Sindh,
                        Jamiat ul Qura.

                    </p>


                </article>



                <aside class="fc-story-aside">


                    <div class="fc-takeaway ac-card">


                        <span class="ac-eyebrow">

                            KEY CONNECTION

                        </span>


                        <h3>

                            An invitation
                            children already
                            understand.

                        </h3>


                        <p>

                            The event used
                            the familiar idea
                            of receiving
                            an invitation
                            to help children
                            understand the meaning
                            and importance
                            of responding
                            to the Azaan.

                        </p>



                        <div class="fc-points">


                            <span>

                                <i class="fas fa-mosque"></i>

                                Masjid e Nabwi

                            </span>


                            <span>

                                <i class="fas fa-volume-up"></i>

                                The Azaan

                            </span>


                            <span>

                                <i class="fas fa-pray"></i>

                                Salah etiquette

                            </span>


                            <span>

                                <i class="fas fa-users"></i>

                                Community

                            </span>


                        </div>


                    </div>


                </aside>


            </div>


        </div>


    </section>



    {{-- =========================================================
        AZAAN AND COMMUNITY
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section fc-meaning-section"
    >


        <div class="ac-container">


            <div class="fc-meaning-grid">


                <div class="fc-meaning-copy">


                    <span class="ac-eyebrow">

                        CALL · SALAH · COMMUNITY

                    </span>


                    <h2>

                        The Azaan
                        is more than
                        a sound.

                    </h2>


                    <p>

                        The session helped children
                        understand the Azaan
                        as an invitation
                        to worship,
                        a reminder of Allah,
                        and a call
                        that brings the Muslim
                        community together.

                    </p>


                </div>



                <div class="fc-meaning-cards">


                    <article class="fc-meaning-card">


                        <i class="fas fa-mosque"></i>


                        <h3>
                            Masjid
                        </h3>


                        <p>

                            Understanding the role
                            of Masjid e Nabwi
                            in the growing
                            Muslim community.

                        </p>


                    </article>



                    <article class="fc-meaning-card">


                        <i class="fas fa-volume-up"></i>


                        <h3>
                            Azaan
                        </h3>


                        <p>

                            Learning why Muslims
                            have a distinctive
                            call to prayer.

                        </p>


                    </article>



                    <article class="fc-meaning-card">


                        <i class="fas fa-pray"></i>


                        <h3>
                            Salah
                        </h3>


                        <p>

                            Connecting the call
                            of the Azaan
                            with responding
                            to Allah.

                        </p>


                    </article>



                    <article class="fc-meaning-card">


                        <i class="fas fa-users"></i>


                        <h3>
                            Community
                        </h3>


                        <p>

                            Seeing how worship
                            can gather people
                            around shared faith
                            and purpose.

                        </p>


                    </article>


                </div>


            </div>


        </div>


    </section>



    {{-- =========================================================
        PRESENTATION
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section fc-resource-section"
    >


        <div class="ac-container">


            <div class="fc-section-heading">


                <span class="ac-eyebrow">

                    PRESENTATION & MATERIALS

                </span>


                <h2>

                    Continue learning
                    beyond the session.

                </h2>


                <p>

                    Explore the original
                    presentation used
                    for The First Call
                    in Madinah.

                </p>


            </div>



            <article class="ac-card fc-resource-card">


                <div class="fc-resource-preview">


                    <iframe
                        src="https://drive.google.com/file/d/1iQAxd9Th5u_a4pRYfG5KeZSMCY6dLsBL/preview"
                        title="The First Call in Madinah presentation"
                        loading="lazy"
                        allow="autoplay"
                    ></iframe>


                </div>



                <div class="fc-resource-copy">


                    <span class="ac-eyebrow">

                        PRESENTATION SLIDE PACK

                    </span>


                    <h3>

                        The First Call
                        in Madinah

                    </h3>


                    <p>

                        Revisit the original
                        Cycle 2 Session 01
                        presentation directly
                        on this page
                        or open the full material
                        in Google Drive.

                    </p>



                    <div class="fc-resource-meta">


                        <span>

                            <i class="far fa-file-pdf"></i>

                            Session presentation

                        </span>


                        <span>

                            <i class="fas fa-book-open"></i>

                            Cycle 2 · Session 01

                        </span>


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            31 January 2026

                        </span>


                    </div>



                    <a
                        class="ac-btn ac-btn-secondary"
                        href="https://drive.google.com/file/d/1iQAxd9Th5u_a4pRYfG5KeZSMCY6dLsBL/view"
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



    {{-- =========================================================
        STATIC EVENT GALLERY
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section fc-gallery-section"
        id="event-gallery"
    >


        <div class="ac-container">


            <div class="fc-section-heading">


                <span class="ac-eyebrow">

                    EVENT PICTURES

                </span>


                <h2>

                    Moments from
                    The First Call
                    in Madinah.

                </h2>


                <p>

                    Storytelling,
                    Azaan learning
                    and memorable moments
                    from the opening
                    session of Cycle 2.

                </p>


            </div>



            <div class="fc-gallery">


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/1.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/1.jpg') }}" alt="The First Call in Madinah event photograph 1" loading="eager" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/2.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/2.jpg') }}" alt="The First Call in Madinah event photograph 2" loading="eager" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/3.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/3.jpg') }}" alt="The First Call in Madinah event photograph 3" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/4.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/4.jpg') }}" alt="The First Call in Madinah event photograph 4" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/5.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/5.jpg') }}" alt="The First Call in Madinah event photograph 5" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/6.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/6.jpg') }}" alt="The First Call in Madinah event photograph 6" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/7.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/7.jpg') }}" alt="The First Call in Madinah event photograph 7" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/8.png') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/8.png') }}" alt="The First Call in Madinah event photograph 8" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/9.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/9.jpg') }}" alt="The First Call in Madinah event photograph 9" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/10.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/10.jpg') }}" alt="The First Call in Madinah event photograph 10" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/11.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/11.jpg') }}" alt="The First Call in Madinah event photograph 11" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/12.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/12.jpg') }}" alt="The First Call in Madinah event photograph 12" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/13.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/13.jpg') }}" alt="The First Call in Madinah event photograph 13" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/14.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/14.jpg') }}" alt="The First Call in Madinah event photograph 14" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/15.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/15.jpg') }}" alt="The First Call in Madinah event photograph 15" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/16.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/16.jpg') }}" alt="The First Call in Madinah event photograph 16" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/17.png') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/17.png') }}" alt="The First Call in Madinah event photograph 17" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/18.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/18.jpg') }}" alt="The First Call in Madinah event photograph 18" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/19.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/19.jpg') }}" alt="The First Call in Madinah event photograph 19" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/20.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/20.jpg') }}" alt="The First Call in Madinah event photograph 20" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/21.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/21.jpg') }}" alt="The First Call in Madinah event photograph 21" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/22.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/22.jpg') }}" alt="The First Call in Madinah event photograph 22" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/23.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/23.jpg') }}" alt="The First Call in Madinah event photograph 23" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/24.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/24.jpg') }}" alt="The First Call in Madinah event photograph 24" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/25.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/25.jpg') }}" alt="The First Call in Madinah event photograph 25" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/26.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/26.jpg') }}" alt="The First Call in Madinah event photograph 26" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/27.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/27.jpg') }}" alt="The First Call in Madinah event photograph 27" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/28.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/28.jpg') }}" alt="The First Call in Madinah event photograph 28" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/29.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/29.jpg') }}" alt="The First Call in Madinah event photograph 29" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/30.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/30.jpg') }}" alt="The First Call in Madinah event photograph 30" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/31.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/31.jpg') }}" alt="The First Call in Madinah event photograph 31" loading="lazy" decoding="async">
                    </a>
                </figure>


                {{-- 32 IS NOT PRESENT IN ORIGINAL SOURCE --}}


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/33.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/33.jpg') }}" alt="The First Call in Madinah event photograph 33" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/34.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/34.jpg') }}" alt="The First Call in Madinah event photograph 34" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/35.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/35.jpg') }}" alt="The First Call in Madinah event photograph 35" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/36.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/36.jpg') }}" alt="The First Call in Madinah event photograph 36" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/37.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/37.jpg') }}" alt="The First Call in Madinah event photograph 37" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/38.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/38.jpg') }}" alt="The First Call in Madinah event photograph 38" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/39.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/39.jpg') }}" alt="The First Call in Madinah event photograph 39" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/40.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/40.jpg') }}" alt="The First Call in Madinah event photograph 40" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/41.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/41.jpg') }}" alt="The First Call in Madinah event photograph 41" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/42.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/42.jpg') }}" alt="The First Call in Madinah event photograph 42" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/43.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/43.jpg') }}" alt="The First Call in Madinah event photograph 43" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/44.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/44.jpg') }}" alt="The First Call in Madinah event photograph 44" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/45.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/45.jpg') }}" alt="The First Call in Madinah event photograph 45" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/46.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/46.jpg') }}" alt="The First Call in Madinah event photograph 46" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/47.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/47.jpg') }}" alt="The First Call in Madinah event photograph 47" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/48.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/48.jpg') }}" alt="The First Call in Madinah event photograph 48" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/49.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/49.jpg') }}" alt="The First Call in Madinah event photograph 49" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/50.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/50.jpg') }}" alt="The First Call in Madinah event photograph 50" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/51.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/51.jpg') }}" alt="The First Call in Madinah event photograph 51" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/52.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/52.jpg') }}" alt="The First Call in Madinah event photograph 52" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/53.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/53.jpg') }}" alt="The First Call in Madinah event photograph 53" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/54.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/54.jpg') }}" alt="The First Call in Madinah event photograph 54" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/55.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/55.jpg') }}" alt="The First Call in Madinah event photograph 55" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/56.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/56.jpg') }}" alt="The First Call in Madinah event photograph 56" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/57.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/57.jpg') }}" alt="The First Call in Madinah event photograph 57" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="fc-gallery-item">
                    <a data-fancybox="first-call-gallery" href="{{ asset('assets/images/first-call-in-madina/58.jpg') }}">
                        <img src="{{ asset('assets/images/first-call-in-madina/58.jpg') }}" alt="The First Call in Madinah event photograph 58" loading="lazy" decoding="async">
                    </a>
                </figure>


            </div>


        </div>


    </section>



    {{-- =========================================================
        CYCLE 2 NAVIGATION
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section fc-cycle-section"
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
                        'past-events.cycle-2-2026-onwards.istiqbaal-e-ramadan'
                    ) }}"
                >


                    <small>

                        Next chapter

                    </small>


                    <strong>

                        Istiqbaal e Ramadan

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
