@extends("Layout.layout")

@section('title', 'Ghazwa e Khandaq · Seerat Club')

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
   GHAZWA E KHANDAQ
   STATIC PREMIUM EVENT PAGE
   ================================================================ */

.khandaq-premium-page {

    --kh-green: #173b31;
    --kh-dark: #102b24;
    --kh-gold: #c99d45;
    --kh-gold-light: #efdca6;
    --kh-cream: #f8f5ed;
    --kh-soft: #fbfaf6;
    --kh-muted: #5d6b66;

    --kh-border:
        rgba(23,59,49,.10);

    --kh-shadow:
        0 18px 55px
        rgba(20,52,43,.10);

    --kh-shadow-lg:
        0 30px 90px
        rgba(13,44,36,.17);

    background: #ffffff;

    color: #172923;
}


/* ================================================================
   TYPOGRAPHY
   ================================================================ */

.khandaq-premium-page h1,
.khandaq-premium-page h2,
.khandaq-premium-page h3,
.khandaq-premium-page h4,
.khandaq-premium-page h5,
.khandaq-premium-page h6,
.khandaq-premium-page .ac-btn,
.khandaq-premium-page .ac-eyebrow,
.khandaq-premium-page .sc-chapter-links strong {

    font-family:
        "Baloo 2",
        "SC Arabic",
        sans-serif !important;
}


.khandaq-premium-page p,
.khandaq-premium-page li,
.khandaq-premium-page .kh-meta,
.khandaq-premium-page .ac-breadcrumb,
.khandaq-premium-page .kh-video-meta,
.khandaq-premium-page .kh-resource-meta,
.khandaq-premium-page .sc-chapter-links small {

    font-family:
        "DM Sans",
        "SC Arabic",
        sans-serif !important;
}


/* ================================================================
   HERO
   ================================================================ */

.khandaq-premium-page
.kh-hero {

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


/* old pale overlay removed */

.khandaq-premium-page
.kh-hero::before {

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


.khandaq-premium-page
.kh-hero::after {

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


.khandaq-premium-page
.kh-hero
.ac-container {

    position: relative;

    z-index: 3;
}


/* ================================================================
   BREADCRUMB
   ================================================================ */

.khandaq-premium-page
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


.khandaq-premium-page
.ac-breadcrumb a {

    color:
        #ffffff !important;

    text-decoration: none;
}


.khandaq-premium-page
.ac-breadcrumb a:hover {

    color:
        var(--kh-gold-light) !important;
}


/* ================================================================
   HERO GRID
   ================================================================ */

.khandaq-premium-page
.kh-hero-grid {

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

.khandaq-premium-page
.kh-hero-copy {

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
        var(--kh-shadow-lg) !important;

    backdrop-filter:
        none !important;

    -webkit-backdrop-filter:
        none !important;
}


.khandaq-premium-page
.kh-hero-copy::before {

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
            var(--kh-gold),
            #efd593
        );
}


.khandaq-premium-page
.kh-hero-copy
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


.khandaq-premium-page
.kh-hero-copy h1 {

    max-width: 720px;

    margin:
        23px 0 22px !important;

    color:
        var(--kh-dark) !important;

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


.khandaq-premium-page
.kh-hero-lead {

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

.khandaq-premium-page
.kh-meta {

    display: flex;

    flex-wrap: wrap;

    gap: 11px;

    margin:
        26px 0 30px;
}


.khandaq-premium-page
.kh-meta > span {

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


.khandaq-premium-page
.kh-meta i {

    color:
        #aa8438;
}


/* ================================================================
   BUTTONS
   ================================================================ */

.khandaq-premium-page
.ac-actions {

    display: flex;

    flex-wrap: wrap;

    gap: 13px;
}


.khandaq-premium-page
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
        var(--kh-gold) !important;

    border-radius:
        999px !important;

    background:
        var(--kh-gold) !important;

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


.khandaq-premium-page
.ac-btn:hover {

    transform:
        translateY(-2px);

    background:
        #d5aa51 !important;
}


.khandaq-premium-page
.ac-btn-secondary {

    border-color:
        rgba(23,59,49,.13) !important;

    background:
        #ffffff !important;

    color:
        var(--kh-dark) !important;

    box-shadow:
        0 10px 25px
        rgba(16,43,36,.07);
}


/* ================================================================
   POSTER
   ================================================================ */

.khandaq-premium-page
.kh-poster {

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
        var(--kh-shadow-lg) !important;

    transform:
        rotate(1deg);

    transition:
        .3s ease;
}


.khandaq-premium-page
.kh-poster:hover {

    transform:
        rotate(0)
        translateY(-5px);
}


.khandaq-premium-page
.kh-poster a {

    display: block;

    overflow: hidden;

    border-radius:
        21px;
}


.khandaq-premium-page
.kh-poster img {

    display: block;

    width: 100%;

    aspect-ratio:
        4 / 5;

    object-fit: cover;

    transition:
        transform .45s ease;
}


.khandaq-premium-page
.kh-poster:hover img {

    transform:
        scale(1.025);
}


.khandaq-premium-page
.kh-poster figcaption {

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

.khandaq-premium-page
.kh-story-section {

    background:
        radial-gradient(
            circle at 8% 8%,
            rgba(201,157,69,.09),
            transparent 25%
        ),
        #f9f7f0 !important;
}


.khandaq-premium-page
.kh-story-grid {

    display: grid;

    grid-template-columns:
        minmax(0,1fr)
        330px;

    align-items: start;

    gap:
        clamp(45px,7vw,85px);
}


.khandaq-premium-page
.kh-story-copy {

    max-width: 800px;
}


.khandaq-premium-page
.kh-story-copy h2 {

    margin:
        15px 0 22px;

    color:
        var(--kh-dark) !important;

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


.khandaq-premium-page
.kh-story-copy h3 {

    margin:
        35px 0 12px;

    color:
        var(--kh-dark) !important;

    font-size:
        29px !important;

    font-weight:
        700 !important;

    line-height:
        1.15;
}


.khandaq-premium-page
.kh-story-lead {

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


.khandaq-premium-page
.kh-story-copy p {

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

.khandaq-premium-page
.kh-story-aside {

    position: sticky;

    top: 120px;
}


.khandaq-premium-page
.kh-lessons {

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
        var(--kh-shadow) !important;
}


.khandaq-premium-page
.kh-lessons::after {

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


.khandaq-premium-page
.kh-lessons
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.khandaq-premium-page
.kh-lessons h3 {

    margin:
        14px 0 18px;

    color:
        #ffffff !important;

    font-size:
        27px !important;

    line-height:
        1.18;
}


.khandaq-premium-page
.kh-lessons > p {

    color:
        rgba(255,255,255,.70) !important;

    font-size:
        14px !important;

    line-height:
        1.72 !important;
}


.khandaq-premium-page
.kh-points {

    display: grid;

    gap: 10px;

    margin-top:
        24px;
}


.khandaq-premium-page
.kh-points span {

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

    font-size: 14px;
}


.khandaq-premium-page
.kh-points i {

    width: 19px;

    color:
        #e6c878;

    text-align: center;
}


/* ================================================================
   LEADERSHIP VALUES SECTION
   ================================================================ */

.khandaq-premium-page
.kh-values-section {

    position: relative;

    overflow: hidden;

    background:
        linear-gradient(
            135deg,
            #173b31,
            #102b24
        ) !important;
}


.khandaq-premium-page
.kh-values-section::after {

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


.khandaq-premium-page
.kh-values-grid {

    position: relative;

    z-index: 2;

    display: grid;

    grid-template-columns:
        .82fr
        1.18fr;

    gap: 70px;

    align-items: center;
}


.khandaq-premium-page
.kh-values-copy
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.khandaq-premium-page
.kh-values-copy h2 {

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


.khandaq-premium-page
.kh-values-copy p {

    color:
        rgba(255,255,255,.73) !important;

    font-size: 16px;

    line-height: 1.85;
}


.khandaq-premium-page
.kh-values-cards {

    display: grid;

    grid-template-columns:
        repeat(
            2,
            minmax(0,1fr)
        );

    gap: 15px;
}


.khandaq-premium-page
.kh-value-card {

    padding: 23px;

    border:
        1px solid
        rgba(255,255,255,.10);

    border-radius: 20px;

    background:
        rgba(255,255,255,.065);
}


.khandaq-premium-page
.kh-value-card i {

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


.khandaq-premium-page
.kh-value-card h3 {

    margin:
        0 0 8px;

    color:
        #ffffff !important;

    font-size:
        21px;

    line-height:
        1.2;
}


.khandaq-premium-page
.kh-value-card p {

    margin: 0;

    color:
        rgba(255,255,255,.67) !important;

    font-size: 14px;

    line-height:
        1.65;
}


/* ================================================================
   SECTION HEADINGS
   ================================================================ */

.khandaq-premium-page
.kh-section-heading {

    max-width: 760px;

    margin-bottom: 42px;
}


.khandaq-premium-page
.kh-section-heading h2 {

    margin:
        13px 0;

    color:
        var(--kh-dark);

    font-size:
        clamp(
            38px,
            4vw,
            52px
        );

    line-height:
        1.08;
}


.khandaq-premium-page
.kh-section-heading p {

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

.khandaq-premium-page
.kh-video-section {

    background:
        #edf1ec !important;
}


.khandaq-premium-page
.kh-video-card {

    display: grid;

    grid-template-columns:
        minmax(0,1.45fr)
        minmax(300px,.58fr);

    overflow: hidden;

    padding:
        0 !important;

    border:
        1px solid
        var(--kh-border) !important;

    border-radius:
        30px !important;

    background:
        #ffffff !important;

    box-shadow:
        var(--kh-shadow) !important;
}


.khandaq-premium-page
.kh-video-frame {

    position: relative;

    min-height:
        460px;

    overflow: hidden;

    background:
        #111b18;
}


.khandaq-premium-page
.kh-video-frame iframe {

    position: absolute;

    inset: 0;

    width: 100%;

    height: 100%;

    border: 0;
}


.khandaq-premium-page
.kh-video-copy {

    display: flex;

    flex-direction: column;

    justify-content: center;

    padding:
        42px 35px;
}


.khandaq-premium-page
.kh-video-copy h3 {

    margin:
        12px 0 14px;

    color:
        var(--kh-dark);

    font-size:
        30px;

    line-height:
        1.15;
}


.khandaq-premium-page
.kh-video-copy p {

    margin:
        0 0 24px;

    color:
        #5f6c67;

    line-height:
        1.8;
}


.khandaq-premium-page
.kh-video-meta {

    display: grid;

    gap: 11px;

    color:
        #586661;

    font-size:
        14px;
}


.khandaq-premium-page
.kh-video-meta span {

    display: flex;

    align-items: center;

    gap: 10px;
}


.khandaq-premium-page
.kh-video-meta i {

    width: 18px;

    color:
        #b68d3d;

    text-align: center;
}


/* ================================================================
   RESOURCE
   ================================================================ */

.khandaq-premium-page
.kh-resource-section {

    background:
        #fbfaf6 !important;
}


.khandaq-premium-page
.kh-resource-card {

    display: grid;

    grid-template-columns:
        minmax(0,1.35fr)
        minmax(320px,.72fr);

    overflow: hidden;

    padding:
        0 !important;

    border:
        1px solid
        var(--kh-border) !important;

    border-radius:
        30px !important;

    background:
        #ffffff !important;

    box-shadow:
        var(--kh-shadow) !important;
}


.khandaq-premium-page
.kh-resource-preview {

    min-height:
        540px;

    background:
        #e9ece6;
}


.khandaq-premium-page
.kh-resource-preview iframe {

    display: block;

    width: 100%;

    height: 100%;

    min-height:
        540px;

    border: 0;
}


.khandaq-premium-page
.kh-resource-copy {

    display: flex;

    flex-direction: column;

    justify-content: center;

    padding:
        44px 38px;
}


.khandaq-premium-page
.kh-resource-copy h3 {

    margin:
        13px 0 15px;

    color:
        var(--kh-dark);

    font-size:
        clamp(
            28px,
            2.5vw,
            35px
        );

    line-height:
        1.13;
}


.khandaq-premium-page
.kh-resource-copy p {

    margin:
        0 0 24px;

    color:
        #5f6b67;

    font-size:
        16px;

    line-height:
        1.8;
}


.khandaq-premium-page
.kh-resource-meta {

    display: grid;

    gap: 11px;

    margin-bottom:
        28px;

    color:
        #586661;

    font-size:
        14px;
}


.khandaq-premium-page
.kh-resource-meta span {

    display: flex;

    align-items: center;

    gap: 11px;
}


.khandaq-premium-page
.kh-resource-meta i {

    width: 18px;

    color:
        #b68d3d;

    text-align: center;
}


.khandaq-premium-page
.kh-resource-copy
.ac-btn {

    width:
        fit-content;
}


/* ================================================================
   MEDIA STATUS
   ================================================================ */

.khandaq-premium-page
.kh-media-section {

    background:
        linear-gradient(
            180deg,
            #e8eee6,
            #f3f0e7
        ) !important;
}


.khandaq-premium-page
.kh-media-card {

    display: grid;

    grid-template-columns:
        280px
        minmax(0,1fr);

    gap: 38px;

    align-items: center;

    padding:
        38px !important;

    border:
        1px solid
        var(--kh-border) !important;

    border-radius:
        28px !important;

    background:
        rgba(255,255,255,.88) !important;

    box-shadow:
        var(--kh-shadow) !important;
}


.khandaq-premium-page
.kh-media-icon {

    display: flex;

    align-items: center;

    justify-content: center;

    min-height: 230px;

    border-radius:
        22px;

    background:
        linear-gradient(
            145deg,
            #173b31,
            #102b24
        );
}


.khandaq-premium-page
.kh-media-icon i {

    color:
        #e7ca7c;

    font-size:
        78px;
}


.khandaq-premium-page
.kh-media-copy h3 {

    margin:
        12px 0 13px;

    color:
        var(--kh-dark);

    font-size:
        32px;

    line-height:
        1.15;
}


.khandaq-premium-page
.kh-media-copy p {

    max-width:
        720px;

    margin:
        0;

    color:
        #5f6b67;

    font-size:
        16px;

    line-height:
        1.8;
}


/* ================================================================
   NAVIGATION
   ================================================================ */

.khandaq-premium-page
.kh-cycle-section {

    background:
        #e7ece4 !important;
}


.khandaq-premium-page
.kh-cycle-section
.ac-heading {

    margin-bottom:
        30px;
}


.khandaq-premium-page
.kh-cycle-section h2 {

    margin:
        12px 0;

    color:
        var(--kh-dark);

    font-size:
        clamp(
            34px,
            4vw,
            50px
        );
}


.khandaq-premium-page
.sc-chapter-links {

    display: grid;

    grid-template-columns:
        repeat(
            2,
            minmax(0,1fr)
        );

    gap: 16px;
}


.khandaq-premium-page
.sc-chapter-links > a {

    display: flex;

    flex-direction: column;

    gap: 8px;

    min-height: 125px;

    padding:
        25px 27px;

    border:
        1px solid
        var(--kh-border);

    border-radius: 20px;

    background:
        rgba(255,255,255,.82);

    color:
        var(--kh-dark);

    text-decoration: none;

    box-shadow:
        0 10px 30px
        rgba(20,52,43,.05);

    transition:
        .25s ease;
}


.khandaq-premium-page
.sc-chapter-links > a:hover {

    transform:
        translateY(-4px);

    background:
        #ffffff;

    box-shadow:
        var(--kh-shadow);
}


.khandaq-premium-page
.sc-chapter-links small {

    color:
        #9d7831;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: .13em;

    text-transform: uppercase;
}


.khandaq-premium-page
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

    .khandaq-premium-page
    .kh-hero-grid {

        grid-template-columns:
            1fr 330px;
    }


    .khandaq-premium-page
    .kh-story-grid {

        grid-template-columns:
            1fr 290px;
    }


    .khandaq-premium-page
    .kh-resource-card {

        grid-template-columns:
            1fr;
    }


    .khandaq-premium-page
    .kh-resource-preview,
    .khandaq-premium-page
    .kh-resource-preview iframe {

        min-height:
            480px;
    }

}


@media (max-width:850px) {

    .khandaq-premium-page
    .kh-hero {

        min-height: auto;

        padding-bottom:
            65px !important;
    }


    .khandaq-premium-page
    .kh-hero-grid,
    .khandaq-premium-page
    .kh-story-grid,
    .khandaq-premium-page
    .kh-values-grid,
    .khandaq-premium-page
    .kh-video-card,
    .khandaq-premium-page
    .kh-media-card {

        grid-template-columns:
            1fr;
    }


    .khandaq-premium-page
    .kh-poster {

        width:
            min(520px,100%);

        margin-inline:
            auto;

        transform: none;
    }


    .khandaq-premium-page
    .kh-story-aside {

        position: static;
    }


    .khandaq-premium-page
    .kh-values-grid {

        gap: 38px;
    }


    .khandaq-premium-page
    .kh-video-frame {

        min-height: auto;

        aspect-ratio:
            16 / 9;
    }


    .khandaq-premium-page
    .kh-media-icon {

        min-height:
            200px;
    }

}


@media (max-width:650px) {

    .khandaq-premium-page
    .kh-hero {

        border-radius:
            0 0 28px 28px;
    }


    .khandaq-premium-page
    .kh-hero-copy {

        padding:
            30px 23px !important;

        border-radius:
            25px !important;
    }


    .khandaq-premium-page
    .kh-hero-copy h1 {

        font-size:
            clamp(
                40px,
                11.5vw,
                58px
            ) !important;
    }


    .khandaq-premium-page
    .kh-meta {

        flex-direction: column;

        align-items: flex-start;
    }


    .khandaq-premium-page
    .ac-actions {

        flex-direction: column;
    }


    .khandaq-premium-page
    .ac-btn {

        width: 100%;
    }


    .khandaq-premium-page
    .kh-values-cards {

        grid-template-columns:
            1fr;
    }


    .khandaq-premium-page
    .kh-resource-preview,
    .khandaq-premium-page
    .kh-resource-preview iframe {

        min-height:
            410px;
    }


    .khandaq-premium-page
    .kh-resource-copy {

        padding:
            30px 23px;
    }


    .khandaq-premium-page
    .kh-media-card {

        padding:
            26px !important;
    }


    .khandaq-premium-page
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
        khandaq-premium-page
    "
>


    {{-- =========================================================
        HERO
        STATIC HERO.JPG
    ========================================================== --}}

    <section
        class="ac-masthead kh-hero"
        style="
            background-image:
                url('{{ asset('assets/images/ghazwa-e-khandaq/hero.jpg') }}');
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

                    Ghazwa e Khandaq

                </span>


            </nav>



            <div class="kh-hero-grid">


                <div class="kh-hero-copy">


                    <span class="ac-eyebrow">

                        CYCLE 2 · SESSION 05

                    </span>


                    <h1>

                        Ghazwa e Khandaq

                    </h1>


                    <p class="kh-hero-lead">

                        Leadership,
                        consultation,
                        teamwork,
                        patience,
                        innovation
                        and Tawakkul.

                    </p>



                    <div class="kh-meta">


                        <span>

                            <i class="fas fa-book-open"></i>

                            <b>
                                Cycle 2 · Session 05
                            </b>

                        </span>


                        <span>

                            <i class="fas fa-shield-alt"></i>

                            <b>
                                Battle of Khandaq
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
                            href="#session-video"
                        >

                            Watch session video

                        </a>


                    </div>


                </div>



                {{-- =================================================
                    STATIC POSTER
                ================================================== --}}

                <figure class="kh-poster">


                    <a
                        data-fancybox="ghazwa-e-khandaq-poster"
                        href="{{ asset('assets/images/ghazwa-e-khandaq/poster.jpg') }}"
                    >


                        <img
                            src="{{ asset('assets/images/ghazwa-e-khandaq/poster.jpg') }}"
                            alt="Ghazwa e Khandaq event poster"
                            decoding="async"
                        >


                    </a>


                    <figcaption>

                        Ghazwa e Khandaq ·
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
        class="ac-section sc-svg-section kh-story-section"
        id="event-story"
    >


        <div class="ac-container">


            <div class="kh-story-grid">


                <article class="ac-prose kh-story-copy">


                    <span class="ac-eyebrow">

                        THE SESSION

                    </span>


                    <h2>

                        Leadership,
                        teamwork
                        and Tawakkul.

                    </h2>


                    <p class="kh-story-lead">

                        Cycle 2 · Session 05

                    </p>


                    <h3>

                        What makes
                        a great leader?

                    </h3>


                    <p>

                        The session began
                        with an engaging discussion
                        around the FIFA World Cup
                        and the qualities
                        children associate
                        with a good team captain.

                    </p>


                    <p>

                        This familiar example
                        was then connected
                        with the leadership
                        of Prophet Muhammad ﷺ
                        during the Battle
                        of Khandaq.

                    </p>


                    <p>

                        Children discovered
                        that true leadership
                        is not simply
                        about giving instructions.

                        Prophet Muhammad ﷺ
                        listened to others,
                        consulted his companions,
                        worked alongside them
                        and remained patient
                        during an extremely
                        difficult situation.

                    </p>


                    <h3>

                        Understanding
                        the trench

                    </h3>


                    <p>

                        The children were introduced
                        to the remarkable scale
                        of the trench
                        that was dug
                        around Madinah.

                    </p>


                    <p>

                        Fun visual comparisons
                        involving animals
                        and cars helped them
                        imagine its size
                        and understand
                        how challenging
                        the task would have been.

                    </p>


                    <p>

                        The activity brought
                        the historical event
                        to life while helping
                        children appreciate
                        the planning,
                        effort
                        and teamwork involved
                        in protecting Madinah.

                    </p>


                    <h3>

                        Hazrat Salman
                        Al Farsi (RA)

                    </h3>


                    <p>

                        The session then explored
                        the extraordinary journey
                        of Hazrat Salman
                        Al Farsi (RA),
                        whose long search
                        for truth eventually
                        brought him to Islam.

                    </p>


                    <p>

                        During the crisis
                        facing Madinah,
                        his experience
                        and perspective
                        led him to suggest
                        the idea
                        of digging a trench,
                        a strategy unfamiliar
                        in Arabia
                        at that time.

                    </p>


                    <p>

                        His story showed
                        the children
                        that one useful idea
                        can have
                        an enormous impact
                        when someone has
                        the courage
                        to share it
                        at the right moment.

                    </p>


                    <h3>

                        Resilience
                        in the present day

                    </h3>


                    <p>

                        To connect
                        the lessons of Seerah
                        with the modern world,
                        children were introduced
                        to <strong>Bioniks</strong>,
                        a Pakistani startup
                        developing advanced
                        prosthetic limbs.

                    </p>


                    <p>

                        The work of Bioniks
                        demonstrated how technology
                        and innovation
                        can be used
                        to improve lives,
                        including the lives
                        of children affected
                        by war in Palestine.

                    </p>


                    <p>

                        Children were also inspired
                        by the story
                        of <strong>Noman Siddiqui</strong>,
                        a differently abled cricketer
                        who shared
                        his personal journey
                        of resilience
                        and gratitude.

                    </p>


                    <p>

                        His experience reinforced
                        the importance
                        of appreciating
                        Allah's blessings,
                        remaining strong
                        through challenges
                        and refusing
                        to allow difficulty
                        to end the pursuit
                        of meaningful goals.

                    </p>


                    <h3>

                        Ummah Innovation
                        Challenge

                    </h3>


                    <p>

                        The session concluded
                        with the
                        <strong>
                            Ummah Innovation Challenge
                        </strong>,
                        built around the theme
                        <strong>
                            I Have an Idea
                            That Can Change the World!
                        </strong>

                    </p>


                    <p>

                        Children worked
                        in teams
                        to develop thoughtful ideas
                        that could benefit people
                        and contribute positively
                        to society.

                    </p>


                    <p>

                        Before presenting
                        their ideas,
                        they were introduced
                        to simple presentation skills
                        focusing on
                        <strong>
                            Body Language,
                            Eyes and Voice
                        </strong>.

                    </p>


                    <p>

                        The teams then presented
                        their ideas confidently
                        before a panel of judges,
                        combining creativity,
                        teamwork
                        and communication.

                    </p>


                    <p>

                        Winners received
                        customized jerseys
                        of their favourite
                        football teams,
                        while every participant
                        left with
                        a larger lesson:
                        meaningful ideas,
                        cooperation
                        and trust in Allah
                        can help change
                        the world.

                    </p>


                </article>



                <aside class="kh-story-aside">


                    <div class="kh-lessons ac-card">


                        <span class="ac-eyebrow">

                            KEY LESSONS

                        </span>


                        <h3>

                            Seerah made
                            practical.

                        </h3>


                        <p>

                            The Battle of Khandaq
                            connected timeless lessons
                            with decisions
                            children can understand
                            and practise today.

                        </p>



                        <div class="kh-points">


                            <span>

                                <i class="fas fa-compass"></i>

                                Consultation

                            </span>


                            <span>

                                <i class="fas fa-users"></i>

                                Teamwork

                            </span>


                            <span>

                                <i class="fas fa-hourglass-half"></i>

                                Patience

                            </span>


                            <span>

                                <i class="fas fa-heart"></i>

                                Tawakkul

                            </span>


                            <span>

                                <i class="fas fa-lightbulb"></i>

                                Innovation

                            </span>


                            <span>

                                <i class="fas fa-microphone"></i>

                                Confident communication

                            </span>


                        </div>


                    </div>


                </aside>


            </div>


        </div>


    </section>



    {{-- =========================================================
        LEADERSHIP VALUES
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section kh-values-section"
    >


        <div class="ac-container">


            <div class="kh-values-grid">


                <div class="kh-values-copy">


                    <span class="ac-eyebrow">

                        LEADERSHIP · TEAMWORK · INNOVATION

                    </span>


                    <h2>

                        Great leadership
                        listens,
                        learns
                        and acts.

                    </h2>


                    <p>

                        Ghazwa e Khandaq
                        gave children
                        a powerful example
                        of leadership
                        that combined consultation,
                        teamwork,
                        patience,
                        creativity
                        and complete trust
                        in Allah.

                    </p>


                </div>



                <div class="kh-values-cards">


                    <article class="kh-value-card">


                        <i class="fas fa-comments"></i>


                        <h3>
                            Consultation
                        </h3>


                        <p>

                            Good leaders
                            listen to useful ideas
                            and value
                            the experience
                            of others.

                        </p>


                    </article>



                    <article class="kh-value-card">


                        <i class="fas fa-users"></i>


                        <h3>
                            Teamwork
                        </h3>


                        <p>

                            Difficult challenges
                            become more manageable
                            when people
                            work together.

                        </p>


                    </article>



                    <article class="kh-value-card">


                        <i class="fas fa-lightbulb"></i>


                        <h3>
                            Innovation
                        </h3>


                        <p>

                            A new idea
                            can create
                            meaningful change
                            when used wisely.

                        </p>


                    </article>



                    <article class="kh-value-card">


                        <i class="fas fa-heart"></i>


                        <h3>
                            Tawakkul
                        </h3>


                        <p>

                            Plan,
                            work
                            and remain patient
                            while placing
                            trust in Allah.

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
        class="ac-section sc-svg-section kh-video-section"
        id="session-video"
    >


        <div class="ac-container">


            <div class="kh-section-heading">


                <span class="ac-eyebrow">

                    SESSION VIDEO

                </span>


                <h2>

                    Watch Ghazwa
                    e Khandaq.

                </h2>


                <p>

                    Revisit moments
                    and learning
                    from this
                    Seerat Club session.

                </p>


            </div>



            <article class="ac-card kh-video-card">


                <div class="kh-video-frame">


                    <iframe
                        src="https://www.youtube.com/embed/LfxejWaUr_M?rel=0"
                        title="Ghazwa e Khandaq Session Video"
                        loading="lazy"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen
                    ></iframe>


                </div>



                <div class="kh-video-copy">


                    <span class="ac-eyebrow">

                        EVENT VIDEO

                    </span>


                    <h3>

                        Ghazwa e Khandaq

                    </h3>


                    <p>

                        Watch moments connected
                        with the Battle of Khandaq,
                        teamwork,
                        innovation
                        and the activities
                        from this Cycle 2 session.

                    </p>



                    <div class="kh-video-meta">


                        <span>

                            <i class="fas fa-book-open"></i>

                            Cycle 2 · Session 05

                        </span>


                        <span>

                            <i class="fas fa-users"></i>

                            Leadership and teamwork

                        </span>


                        <span>

                            <i class="fas fa-lightbulb"></i>

                            Ummah Innovation Challenge

                        </span>


                    </div>


                </div>


            </article>


        </div>


    </section>



    {{-- =========================================================
        PRESENTATION
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section kh-resource-section"
    >


        <div class="ac-container">


            <div class="kh-section-heading">


                <span class="ac-eyebrow">

                    PRESENTATION & MATERIALS

                </span>


                <h2>

                    Ghazwa e Khandaq
                    presentation.

                </h2>


                <p>

                    Explore the original
                    session presentation
                    directly on this page.

                </p>


            </div>



            <article class="ac-card kh-resource-card">


                <div class="kh-resource-preview">


                    <iframe
                        src="https://drive.google.com/file/d/1kJR4LB-p7QD5hJB9h3Xwx1e9JmUbBVnA/preview"
                        allow="autoplay"
                        loading="lazy"
                        title="Ghazwa e Khandaq PDF"
                    ></iframe>


                </div>



                <div class="kh-resource-copy">


                    <span class="ac-eyebrow">

                        PRESENTATION SLIDE PACK

                    </span>


                    <h3>

                        Ghazwa e Khandaq

                    </h3>


                    <p>

                        View the original
                        presentation directly
                        on this page
                        or open
                        the complete session material
                        in Google Drive.

                    </p>



                    <div class="kh-resource-meta">


                        <span>

                            <i class="far fa-file-pdf"></i>

                            Ghazwa e Khandaq PDF

                        </span>


                        <span>

                            <i class="fas fa-book-open"></i>

                            Cycle 2 · Session 05

                        </span>


                    </div>



                    <a
                        class="ac-btn ac-btn-secondary"
                        href="https://drive.google.com/file/u/0/d/1kJR4LB-p7QD5hJB9h3Xwx1e9JmUbBVnA/view"
                        target="_blank"
                        rel="noopener noreferrer"
                    >

                        Open in Drive

                        <i class="fas fa-arrow-right"></i>

                    </a>


                </div>


            </article>


        </div>


    </section>



    {{-- =========================================================
        GALLERY STATUS

        Original source contains no actual gallery image paths,
        therefore no fake event images are added.
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section kh-media-section"
    >


        <div class="ac-container">


            <div class="kh-section-heading">


                <span class="ac-eyebrow">

                    EVENT PICTURES

                </span>


                <h2>

                    Gallery ready
                    for original photographs.

                </h2>


                <p>

                    The current source
                    does not contain
                    verified Ghazwa e Khandaq
                    event photograph paths.

                </p>


            </div>



            <article class="ac-card kh-media-card">


                <div class="kh-media-icon">


                    <i class="fas fa-images"></i>


                </div>



                <div class="kh-media-copy">


                    <span class="ac-eyebrow">

                        MEDIA STATUS

                    </span>


                    <h3>

                        No unverified gallery
                        added.

                    </h3>


                    <p>

                        The original Blade source
                        contains the gallery section,
                        but no actual image entries.

                        This area can be replaced
                        with the real photographs
                        when their exact filenames
                        are available.

                    </p>


                </div>


            </article>


        </div>


    </section>



    {{-- =========================================================
        PREVIOUS / NEXT
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section kh-cycle-section"
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
                        'past-events.cycle-2-2026-onwards.ghazwa-e-uhud'
                    ) }}"
                >


                    <small>

                        Previous chapter

                    </small>


                    <strong>

                        Ghazwa e Uhud

                        <span aria-hidden="true">
                            ↗
                        </span>

                    </strong>


                </a>



                <a
                    href="{{ route(
                        'past-events.cycle-2-2026-onwards.treaty-of-hudaybia'
                    ) }}"
                >


                    <small>

                        Next chapter

                    </small>


                    <strong>

                        Treaty of Hudaybia

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
