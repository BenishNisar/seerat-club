@extends("Layout.layout")

@section('title', 'Hijrat to Medina · Seerat Club')

@section("Content")


<link
    rel="stylesheet"
    href="{{ asset('assets/css/past-events-premium.css') }}"
>


<style>

/* ================================================================
   HIJRAT TO MEDINA
   STATIC PREMIUM EVENT PAGE
   ================================================================ */

.hijrat-page {

    --hj-green: #173b31;
    --hj-dark: #102b24;
    --hj-gold: #c99d45;
    --hj-gold-light: #efdca6;
    --hj-cream: #f8f5ed;
    --hj-soft: #fbfaf6;
    --hj-muted: #5d6b66;

    --hj-border:
        rgba(23,59,49,.10);

    --hj-shadow:
        0 18px 55px
        rgba(20,52,43,.10);

    --hj-shadow-lg:
        0 30px 90px
        rgba(13,44,36,.17);

    background: #ffffff;
    color: #172923;
}


/* ================================================================
   TYPOGRAPHY
   ================================================================ */

.hijrat-page h1,
.hijrat-page h2,
.hijrat-page h3,
.hijrat-page h4,
.hijrat-page h5,
.hijrat-page h6,
.hijrat-page .ac-btn,
.hijrat-page .ac-eyebrow,
.hijrat-page .sc-chapter-links strong {

    font-family:
        "Baloo 2",
        "SC Arabic",
        sans-serif !important;
}


.hijrat-page p,
.hijrat-page li,
.hijrat-page .c1-meta,
.hijrat-page .ac-breadcrumb,
.hijrat-page .hj-video-meta,
.hijrat-page .hj-resource-meta,
.hijrat-page .sc-chapter-links small {

    font-family:
        "DM Sans",
        "SC Arabic",
        sans-serif !important;
}


/* ================================================================
   HERO
   ================================================================ */

.hijrat-page
.c1-hero {

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


.hijrat-page
.c1-hero::before {

    content: "";

    position: absolute;

    inset: 0;

    z-index: -1;

    background:
        linear-gradient(
            90deg,
            rgba(10,39,32,.78) 0%,
            rgba(10,39,32,.49) 42%,
            rgba(10,39,32,.17) 72%,
            rgba(10,39,32,.05) 100%
        );
}


.hijrat-page
.c1-hero::after {

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


.hijrat-page
.c1-hero
.ac-container {

    position: relative;
    z-index: 3;
}


/* ================================================================
   BREADCRUMB
   ================================================================ */

.hijrat-page
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


.hijrat-page
.ac-breadcrumb a {

    color:
        #ffffff !important;

    text-decoration: none;
}


.hijrat-page
.ac-breadcrumb a:hover {

    color:
        var(--hj-gold-light) !important;
}


/* ================================================================
   HERO GRID
   ================================================================ */

.hijrat-page
.c1-hero-grid {

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

.hijrat-page
.c1-hero-copy {

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
        var(--hj-shadow-lg) !important;

    backdrop-filter:
        none !important;

    -webkit-backdrop-filter:
        none !important;
}


.hijrat-page
.c1-hero-copy::before {

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
            var(--hj-gold),
            #efd593
        );
}


.hijrat-page
.c1-hero-copy
.ac-eyebrow {

    display: inline-flex;

    align-items: center;

    padding:
        9px 14px;

    border:
        1px solid
        rgba(201,157,69,.38);

    border-radius: 999px;

    background: #f0ead8;

    color:
        #a2782a !important;

    font-size: 12px;

    font-weight: 700;

    letter-spacing: .12em;
}


.hijrat-page
.c1-hero-copy h1 {

    max-width: 700px;

    margin:
        23px 0 22px !important;

    color:
        var(--hj-dark) !important;

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


.hijrat-page
.c1-hero-lead {

    max-width: 620px;

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

.hijrat-page
.c1-meta {

    display: flex;

    flex-wrap: wrap;

    gap: 11px;

    margin:
        26px 0 30px;
}


.hijrat-page
.c1-meta > span {

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

    color: #53635d;

    font-size: 13px;
}


.hijrat-page
.c1-meta i {

    color: #aa8438;
}


/* ================================================================
   BUTTONS
   ================================================================ */

.hijrat-page
.ac-actions {

    display: flex;

    flex-wrap: wrap;

    gap: 13px;
}


.hijrat-page
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
        var(--hj-gold) !important;

    border-radius:
        999px !important;

    background:
        var(--hj-gold) !important;

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


.hijrat-page
.ac-btn:hover {

    transform:
        translateY(-2px);

    background:
        #d5aa51 !important;
}


.hijrat-page
.ac-btn-secondary {

    border-color:
        rgba(23,59,49,.13) !important;

    background:
        #ffffff !important;

    color:
        var(--hj-dark) !important;

    box-shadow:
        0 10px 25px
        rgba(16,43,36,.07);
}


/* ================================================================
   POSTER
   ================================================================ */

.hijrat-page
.c1-visual {

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
        var(--hj-shadow-lg) !important;

    transform:
        rotate(1deg);

    transition:
        .3s ease;
}


.hijrat-page
.c1-visual:hover {

    transform:
        rotate(0)
        translateY(-5px);
}


.hijrat-page
.c1-visual a {

    display: block;

    overflow: hidden;

    border-radius: 21px;
}


.hijrat-page
.c1-visual img {

    display: block;

    width: 100%;

    aspect-ratio:
        4 / 5;

    object-fit: cover;

    transition:
        transform .45s ease;
}


.hijrat-page
.c1-visual:hover img {

    transform:
        scale(1.025);
}


.hijrat-page
.c1-visual figcaption {

    padding:
        14px 8px 5px;

    color: #52615c;

    font-family:
        "DM Sans",
        sans-serif !important;

    font-size: 12px;

    text-align: center;
}


/* ================================================================
   STORY
   ================================================================ */

.hijrat-page
.c1-story {

    background:
        radial-gradient(
            circle at 8% 8%,
            rgba(201,157,69,.09),
            transparent 25%
        ),
        #f9f7f0 !important;
}


.hijrat-page
.c1-story-grid {

    display: grid;

    grid-template-columns:
        minmax(0,1fr)
        330px;

    align-items: start;

    gap:
        clamp(45px,7vw,85px);
}


.hijrat-page
.c1-story-copy {

    max-width: 800px;
}


.hijrat-page
.c1-story-copy h2 {

    margin:
        15px 0 22px;

    color:
        var(--hj-dark) !important;

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

    letter-spacing: -.02em;
}


.hijrat-page
.c1-story-copy h3 {

    margin:
        35px 0 12px;

    color:
        var(--hj-dark) !important;

    font-size:
        29px !important;

    font-weight:
        700 !important;

    line-height:
        1.15;
}


.hijrat-page
.c1-lead {

    display: inline-flex;

    padding:
        7px 12px;

    margin-bottom:
        25px !important;

    border-radius: 999px;

    background: #eee8d9;

    color:
        #99732f !important;

    font-size:
        13px !important;

    font-weight:
        600 !important;
}


.hijrat-page
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

.hijrat-page
.c1-aside {

    position: sticky;

    top: 120px;
}


.hijrat-page
.c1-lessons {

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
        var(--hj-shadow) !important;
}


.hijrat-page
.c1-lessons::after {

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


.hijrat-page
.c1-lessons
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.hijrat-page
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


.hijrat-page
.c1-points {

    display: grid;

    gap: 10px;
}


.hijrat-page
.c1-points span {

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


.hijrat-page
.c1-points i {

    color: #e6c878;
}


/* ================================================================
   PLANNING / TAWAKKUL / AMANAH SECTION
   ================================================================ */

.hijrat-page
.hj-values-section {

    position: relative;

    overflow: hidden;

    background:
        linear-gradient(
            135deg,
            #173b31,
            #102b24
        ) !important;
}


.hijrat-page
.hj-values-section::after {

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


.hijrat-page
.hj-values-grid {

    position: relative;

    z-index: 2;

    display: grid;

    grid-template-columns:
        .82fr
        1.18fr;

    gap: 70px;

    align-items: center;
}


.hijrat-page
.hj-values-copy
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.hijrat-page
.hj-values-copy h2 {

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

    line-height: 1.06;
}


.hijrat-page
.hj-values-copy p {

    color:
        rgba(255,255,255,.73) !important;

    font-size: 16px;

    line-height: 1.85;
}


.hijrat-page
.hj-values-cards {

    display: grid;

    grid-template-columns:
        repeat(
            2,
            minmax(0,1fr)
        );

    gap: 15px;
}


.hijrat-page
.hj-values-card {

    padding: 23px;

    border:
        1px solid
        rgba(255,255,255,.10);

    border-radius: 20px;

    background:
        rgba(255,255,255,.065);
}


.hijrat-page
.hj-values-card i {

    display: flex;

    align-items: center;

    justify-content: center;

    width: 42px;
    height: 42px;

    margin-bottom: 16px;

    border-radius: 50%;

    background:
        rgba(230,200,120,.14);

    color: #e7ca7c;

    font-size: 18px;
}


.hijrat-page
.hj-values-card h3 {

    margin:
        0 0 8px;

    color:
        #ffffff !important;

    font-size: 21px;

    line-height: 1.2;
}


.hijrat-page
.hj-values-card p {

    margin: 0;

    color:
        rgba(255,255,255,.67) !important;

    font-size: 14px;

    line-height: 1.65;
}


/* ================================================================
   COMMON SECTION HEADING
   ================================================================ */

.hijrat-page
.hj-section-heading {

    max-width: 760px;

    margin-bottom: 42px;
}


.hijrat-page
.hj-section-heading h2 {

    margin:
        13px 0;

    color:
        var(--hj-dark);

    font-size:
        clamp(
            38px,
            4vw,
            52px
        );

    line-height: 1.08;
}


.hijrat-page
.hj-section-heading p {

    color: #64716c;

    font-size: 16px;

    line-height: 1.8;
}


/* ================================================================
   VIDEOS
   ================================================================ */

.hijrat-page
.hj-video-section {

    background:
        #edf1ec !important;
}


.hijrat-page
.hj-video-grid {

    display: grid;

    grid-template-columns:
        repeat(
            2,
            minmax(0,1fr)
        );

    gap: 26px;
}


.hijrat-page
.hj-video-card {

    overflow: hidden;

    padding:
        0 !important;

    border:
        1px solid
        var(--hj-border) !important;

    border-radius:
        28px !important;

    background:
        #ffffff !important;

    box-shadow:
        var(--hj-shadow) !important;

    transition:
        .3s ease;
}


.hijrat-page
.hj-video-card:hover {

    transform:
        translateY(-4px);
}


.hijrat-page
.hj-video-frame {

    position: relative;

    width: 100%;

    aspect-ratio:
        16 / 9;

    overflow: hidden;

    background: #111b18;
}


.hijrat-page
.hj-video-frame iframe {

    position: absolute;

    inset: 0;

    width: 100%;
    height: 100%;

    border: 0;
}


.hijrat-page
.hj-video-link a {

    position: absolute;

    inset: 0;

    display: block;
}


.hijrat-page
.hj-video-link img {

    display: block;

    width: 100%;
    height: 100%;

    object-fit: cover;
}


.hijrat-page
.hj-video-link::after {

    content: "";

    position: absolute;

    inset: 0;

    background:
        rgba(10,39,32,.18);

    pointer-events: none;
}


.hijrat-page
.hj-play-btn {

    position: absolute;

    left: 50%;
    top: 50%;

    z-index: 3;

    display: flex;

    align-items: center;

    justify-content: center;

    width: 68px;
    height: 68px;

    border:
        2px solid
        rgba(255,255,255,.9);

    border-radius: 50%;

    background:
        rgba(16,43,36,.86);

    color: #ffffff;

    transform:
        translate(-50%,-50%);

    transition:
        .25s ease;
}


.hijrat-page
.hj-video-link:hover
.hj-play-btn {

    transform:
        translate(-50%,-50%)
        scale(1.08);

    background:
        var(--hj-gold);

    color:
        var(--hj-dark);
}


.hijrat-page
.hj-video-copy {

    padding: 29px;
}


.hijrat-page
.hj-video-copy h3 {

    margin:
        10px 0 11px;

    color:
        var(--hj-dark);

    font-size: 28px;

    line-height: 1.15;
}


.hijrat-page
.hj-video-copy p {

    margin:
        0 0 22px;

    color: #61706a;

    font-size: 15px;

    line-height: 1.75;
}


.hijrat-page
.hj-video-meta {

    display: flex;

    flex-wrap: wrap;

    gap: 9px;
}


.hijrat-page
.hj-video-meta span {

    display: inline-flex;

    align-items: center;

    gap: 7px;

    padding:
        8px 11px;

    border-radius: 999px;

    background: #f3f0e6;

    color: #596762;

    font-size: 12px;
}


.hijrat-page
.hj-video-meta i {

    color: #b28a3a;
}


/* ================================================================
   RESOURCE
   ================================================================ */

.hijrat-page
.hj-resource-section {

    background:
        #fbfaf6 !important;
}


.hijrat-page
.hj-resource-card {

    display: grid;

    grid-template-columns:
        minmax(0,1.35fr)
        minmax(320px,.72fr);

    overflow: hidden;

    padding:
        0 !important;

    border:
        1px solid
        var(--hj-border) !important;

    border-radius:
        30px !important;

    background:
        #ffffff !important;

    box-shadow:
        var(--hj-shadow) !important;
}


.hijrat-page
.hj-resource-preview {

    min-height: 540px;

    background: #e9ece6;
}


.hijrat-page
.hj-resource-preview iframe {

    display: block;

    width: 100%;
    height: 100%;

    min-height: 540px;

    border: 0;
}


.hijrat-page
.hj-resource-copy {

    display: flex;

    flex-direction: column;

    justify-content: center;

    padding:
        44px 38px;
}


.hijrat-page
.hj-resource-copy h3 {

    margin:
        13px 0 15px;

    color:
        var(--hj-dark);

    font-size:
        clamp(
            28px,
            2.5vw,
            35px
        );

    line-height: 1.13;
}


.hijrat-page
.hj-resource-copy p {

    margin:
        0 0 24px;

    color: #5f6b67;

    font-size: 16px;

    line-height: 1.8;
}


.hijrat-page
.hj-resource-meta {

    display: grid;

    gap: 11px;

    margin-bottom: 28px;

    color: #586661;

    font-size: 14px;
}


.hijrat-page
.hj-resource-meta span {

    display: flex;

    align-items: center;

    gap: 11px;
}


.hijrat-page
.hj-resource-meta i {

    width: 18px;

    color: #b68d3d;

    text-align: center;
}


.hijrat-page
.hj-resource-copy
.ac-btn {

    width: fit-content;
}


/* ================================================================
   GALLERY
   ================================================================ */

.hijrat-page
.hj-gallery-section {

    background:
        linear-gradient(
            180deg,
            #e8eee6,
            #f3f0e7
        ) !important;
}


.hijrat-page
.hj-gallery-grid {

    display: grid;

    grid-template-columns:
        repeat(
            3,
            minmax(0,1fr)
        );

    gap: 20px;
}


.hijrat-page
.hj-gallery-item {

    margin: 0;

    padding: 6px;

    overflow: hidden;

    border:
        1px solid
        var(--hj-border);

    border-radius: 23px;

    background: #ffffff;

    box-shadow:
        var(--hj-shadow);

    transition:
        transform .3s ease,
        box-shadow .3s ease;
}


.hijrat-page
.hj-gallery-item:hover {

    transform:
        translateY(-5px);

    box-shadow:
        0 22px 55px
        rgba(20,52,43,.13);
}


.hijrat-page
.hj-gallery-item a {

    display: block;

    aspect-ratio:
        4 / 3;

    overflow: hidden;

    border-radius: 17px;
}


.hijrat-page
.hj-gallery-item img {

    display: block;

    width: 100%;
    height: 100%;

    object-fit: cover;

    object-position: center;

    transition:
        transform .45s ease;
}


.hijrat-page
.hj-gallery-item:hover img {

    transform:
        scale(1.045);
}


/* ================================================================
   CYCLE NAV
   ================================================================ */

.hijrat-page
.c1-cycle-nav {

    background:
        #e7ece4 !important;
}


.hijrat-page
.c1-cycle-nav
.ac-heading {

    margin-bottom: 30px;
}


.hijrat-page
.c1-cycle-nav h2 {

    margin:
        12px 0;

    color:
        var(--hj-dark);

    font-size:
        clamp(
            34px,
            4vw,
            50px
        );
}


.hijrat-page
.sc-chapter-links {

    display: grid;

    grid-template-columns:
        repeat(
            2,
            minmax(0,1fr)
        );

    gap: 16px;
}


.hijrat-page
.sc-chapter-links > a {

    display: flex;

    flex-direction: column;

    gap: 8px;

    min-height: 125px;

    padding:
        25px 27px;

    border:
        1px solid
        var(--hj-border);

    border-radius: 20px;

    background:
        rgba(255,255,255,.82);

    color:
        var(--hj-dark);

    text-decoration: none;

    box-shadow:
        0 10px 30px
        rgba(20,52,43,.05);

    transition:
        .25s ease;
}


.hijrat-page
.sc-chapter-links > a:hover {

    transform:
        translateY(-4px);

    background:
        #ffffff;

    box-shadow:
        var(--hj-shadow);
}


.hijrat-page
.sc-chapter-links small {

    color: #9d7831;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: .13em;

    text-transform: uppercase;
}


.hijrat-page
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

    .hijrat-page
    .c1-hero-grid {

        grid-template-columns:
            1fr 330px;
    }


    .hijrat-page
    .c1-story-grid {

        grid-template-columns:
            1fr 290px;
    }


    .hijrat-page
    .hj-resource-card {

        grid-template-columns:
            1fr;
    }


    .hijrat-page
    .hj-resource-preview,
    .hijrat-page
    .hj-resource-preview iframe {

        min-height: 480px;
    }

}


@media (max-width:850px) {

    .hijrat-page
    .c1-hero {

        min-height: auto;

        padding-bottom:
            65px !important;
    }


    .hijrat-page
    .c1-hero-grid {

        grid-template-columns:
            1fr;
    }


    .hijrat-page
    .c1-visual {

        width:
            min(
                520px,
                100%
            );

        margin-inline:
            auto;

        transform: none;
    }


    .hijrat-page
    .c1-story-grid {

        grid-template-columns:
            1fr;
    }


    .hijrat-page
    .c1-aside {

        position: static;
    }


    .hijrat-page
    .hj-values-grid {

        grid-template-columns:
            1fr;

        gap: 38px;
    }


    .hijrat-page
    .hj-video-grid {

        grid-template-columns:
            1fr;
    }


    .hijrat-page
    .hj-gallery-grid {

        grid-template-columns:
            repeat(
                2,
                minmax(0,1fr)
            );
    }

}


@media (max-width:650px) {

    .hijrat-page
    .c1-hero {

        border-radius:
            0 0 28px 28px;
    }


    .hijrat-page
    .c1-hero-copy {

        padding:
            30px 23px !important;

        border-radius:
            25px !important;
    }


    .hijrat-page
    .c1-hero-copy h1 {

        font-size:
            clamp(
                42px,
                12vw,
                60px
            ) !important;
    }


    .hijrat-page
    .c1-meta {

        flex-direction:
            column;

        align-items:
            flex-start;
    }


    .hijrat-page
    .ac-actions {

        flex-direction:
            column;
    }


    .hijrat-page
    .ac-btn {

        width: 100%;
    }


    .hijrat-page
    .hj-values-cards,
    .hijrat-page
    .hj-gallery-grid {

        grid-template-columns:
            1fr;
    }


    .hijrat-page
    .hj-resource-preview,
    .hijrat-page
    .hj-resource-preview iframe {

        min-height: 410px;
    }


    .hijrat-page
    .hj-resource-copy {

        padding:
            30px 23px;
    }


    .hijrat-page
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
        hijrat-page
    "
>


    {{-- =========================================================
        HERO
        STATIC: hero.jpg
    ========================================================== --}}

    <section
        class="ac-masthead c1-hero"
        style="
            background-image:
                url('{{ asset('assets/images/hijrat-to-medina/hero.jpg') }}');
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

                <a href="{{ route('past-events.cycle-1.index') }}">
                    Cycle 1
                </a>

                <span>/</span>

                <span aria-current="page">
                    Hijrat to Medina
                </span>

            </nav>



            <div class="c1-hero-grid">


                <div class="c1-hero-copy">


                    <span class="ac-eyebrow">

                        CYCLE 1 · SESSION 11

                    </span>


                    <h1>

                        Hijrat to
                        Medina

                    </h1>


                    <p class="c1-hero-lead">

                        Planning,
                        Tawakkul,
                        trust in Allah
                        and the journey
                        to Madinah.

                    </p>



                    <div class="c1-meta">


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            <b>
                                4 October 2025
                            </b>

                        </span>


                        <span>

                            <i class="fas fa-book-open"></i>

                            <b>
                                Cycle 1 · Session 11
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

                <figure class="c1-visual">


                    <a
                        data-fancybox="hijrat-poster"
                        href="{{ asset('assets/images/hijrat-to-medina/poster.jpg') }}"
                    >

                        <img
                            src="{{ asset('assets/images/hijrat-to-medina/poster.jpg') }}"
                            alt="Hijrat to Medina event poster"
                        >

                    </a>


                    <figcaption>

                        Hijrat to Medina ·
                        Seerat Club Cycle 1

                    </figcaption>


                </figure>


            </div>


        </div>


    </section>



    {{-- =========================================================
        STORY
    ========================================================== --}}

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

                        Planning,
                        Tawakkul and
                        the journey
                        to Madinah.

                    </h2>


                    <p class="c1-lead">

                        Cycle 1 · Session 11

                    </p>


                    <p>

                        The eleventh Seerat Club
                        session was held on
                        4 October 2025
                        at Shafqat Masjid
                        and focused on the
                        historic and deeply
                        meaningful event of
                        Hijrat to Medina.

                    </p>


                    <p>

                        The session began
                        with an interactive quiz
                        about the Islamic calendar.

                        Through this discussion,
                        children discovered
                        the significance of Hijrah
                        as a major turning point
                        in Islamic history.

                    </p>


                    <h3>
                        The Journey from Makkah
                    </h3>


                    <p>

                        Children revisited
                        the challenges faced
                        by Prophet Muhammad ﷺ
                        in Makkah during
                        the early years
                        of preaching Islam.

                    </p>


                    <p>

                        As the difficulties increased,
                        the Prophet ﷺ
                        prepared to migrate
                        to Madinah.

                    </p>


                    <p>

                        Children learned how
                        carefully the journey
                        was planned.

                        A trustworthy companion
                        was selected,
                        a less travelled route
                        was considered
                        and a reliable guide
                        was arranged.

                    </p>


                    <p>

                        This helped children
                        understand that
                        careful preparation
                        does not conflict
                        with Tawakkul.

                        A believer plans
                        responsibly while
                        placing complete trust
                        in Allah.

                    </p>


                    <h3>
                        Seerah Lessons
                        in Everyday Life
                    </h3>


                    <p>

                        These lessons were
                        connected with challenges
                        children experience
                        in everyday life,
                        including exam stress,
                        preparing for
                        an important match
                        and making small sacrifices
                        for Salah.

                    </p>


                    <p>

                        The discussion helped
                        children see how
                        lessons from the Seerah
                        can guide decisions,
                        priorities and responses
                        to everyday difficulties.

                    </p>


                    <p>

                        The storytelling portion
                        concluded with
                        <strong>
                            Tala‘al Badru ‘Alayna
                        </strong>,
                        helping children imagine
                        the joy with which
                        the people of Madinah
                        welcomed Prophet Muhammad ﷺ.

                    </p>


                    <h3>
                        Pakistan as
                        a Blessing and Amanah
                    </h3>


                    <p>

                        In the second half
                        of the session,
                        the learning shifted
                        towards connecting
                        the lessons of Hijrah
                        with responsibility
                        towards Pakistan.

                    </p>


                    <p>

                        Children reflected
                        on how Madinah
                        became a place
                        of safety and opportunity
                        for the early Muslims.

                    </p>


                    <p>

                        Pakistan was discussed
                        as a blessing
                        and an Amanah
                        that requires responsibility,
                        care and positive action.

                    </p>


                    <h3>
                        Climate Responsibility
                    </h3>


                    <p>

                        The discussion then
                        moved towards
                        environmental responsibility
                        and climate-related challenges
                        affecting communities.

                    </p>


                    <p>

                        Through
                        <strong>
                            Driver Sahib aur Dariya Sutlej
                        </strong>,
                        children explored
                        the effects of flooding
                        and environmental change.

                    </p>


                    <p>

                        This was followed by
                        <strong>
                            The Frozen Giants
                            of Karakoram
                        </strong>,
                        presented in collaboration
                        with TDF MagnifiScience.

                    </p>


                    <p>

                        Children learned how
                        melting glaciers
                        can contribute
                        to rising river levels
                        and flooding downstream.

                    </p>


                    <p>

                        Local climate heroes
                        were also highlighted,
                        helping children see
                        that meaningful action
                        can begin within
                        their own communities.

                    </p>


                    <p>

                        Children were encouraged
                        to develop practical habits
                        such as reducing
                        unnecessary plastic use
                        and becoming more thoughtful
                        about their impact
                        on the environment.

                    </p>


                    <h3>
                        Design for
                        a Greener Pakistan
                    </h3>


                    <p>

                        The event concluded
                        with a tote bag
                        painting activity titled
                        <strong>
                            Design for a Greener Pakistan
                        </strong>.

                    </p>


                    <p>

                        The creative activity
                        gave children
                        an enjoyable way
                        to express what
                        they had learned
                        about responsibility,
                        environmental awareness
                        and caring
                        for their homeland.

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

                                Hijrah

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Planning and Tawakkul

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Trust in Allah

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Pakistan as an Amanah

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Climate responsibility

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Positive action

                            </span>


                        </div>


                    </div>


                </aside>


            </div>


        </div>


    </section>



    {{-- =========================================================
        VALUES SECTION
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section hj-values-section"
    >


        <div class="ac-container">


            <div class="hj-values-grid">


                <div class="hj-values-copy">


                    <span class="ac-eyebrow">

                        PLAN · TRUST · ACT

                    </span>


                    <h2>

                        Tawakkul begins
                        with responsible
                        preparation.

                    </h2>


                    <p>

                        The Hijrah helped children
                        see that trust in Allah
                        does not mean
                        avoiding preparation.

                        We plan carefully,
                        act responsibly
                        and place our trust
                        in Allah.

                    </p>


                </div>



                <div class="hj-values-cards">


                    <article class="hj-values-card">


                        <i class="fas fa-route"></i>


                        <h3>
                            Planning
                        </h3>


                        <p>

                            Thinking ahead,
                            preparing carefully
                            and making
                            responsible decisions.

                        </p>


                    </article>



                    <article class="hj-values-card">


                        <i class="fas fa-shield-alt"></i>


                        <h3>
                            Tawakkul
                        </h3>


                        <p>

                            Doing our part
                            while placing
                            complete trust
                            in Allah.

                        </p>


                    </article>



                    <article class="hj-values-card">


                        <i class="fas fa-hand-holding-heart"></i>


                        <h3>
                            Amanah
                        </h3>


                        <p>

                            Understanding
                            that blessings
                            also bring
                            responsibility.

                        </p>


                    </article>



                    <article class="hj-values-card">


                        <i class="fas fa-leaf"></i>


                        <h3>
                            Positive Action
                        </h3>


                        <p>

                            Turning learning
                            into practical habits
                            that benefit
                            people and planet.

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
        class="ac-section sc-svg-section hj-video-section"
    >


        <div class="ac-container">


            <div class="hj-section-heading">


                <span class="ac-eyebrow">

                    SESSION VIDEOS

                </span>


                <h2>

                    Watch Hijrat
                    to Medina.

                </h2>


                <p>

                    Revisit videos connected
                    with this
                    Seerat Club session.

                </p>


            </div>



            <div class="hj-video-grid">


                {{-- =================================================
                    VIDEO 01
                ================================================== --}}

                <article class="ac-card hj-video-card">


                    <div class="hj-video-frame">


                        <iframe
                            src="https://www.youtube.com/embed/Fji7rWgE07c?rel=0"
                            title="Hijrat to Medina Session Video 1"
                            loading="lazy"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>


                    </div>



                    <div class="hj-video-copy">


                        <span class="ac-eyebrow">

                            SESSION VIDEO 01

                        </span>


                        <h3>
                            Hijrat to Medina
                        </h3>


                        <p>

                            Moments and learning
                            from the original session.

                        </p>


                        <div class="hj-video-meta">


                            <span>

                                <i class="fas fa-book-open"></i>

                                Session 11

                            </span>


                            <span>

                                <i class="far fa-calendar-alt"></i>

                                4 Oct 2025

                            </span>


                        </div>


                    </div>


                </article>



                {{-- =================================================
                    VIDEO 02 / YOUTUBE LINK
                ================================================== --}}

                <article class="ac-card hj-video-card">


                    <div
                        class="
                            hj-video-frame
                            hj-video-link
                        "
                    >


                        <a
                            href="https://youtu.be/Fji7rWgE07c"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Watch Hijrat to Medina on YouTube"
                        >


                            <img
                                src="https://img.youtube.com/vi/Fji7rWgE07c/maxresdefault.jpg"
                                alt="Hijrat to Medina session video"
                                loading="lazy"
                            >


                            <span class="hj-play-btn">

                                <i class="fas fa-play"></i>

                            </span>


                        </a>


                    </div>



                    <div class="hj-video-copy">


                        <span class="ac-eyebrow">

                            WATCH ON YOUTUBE

                        </span>


                        <h3>
                            Hijrat to Medina
                        </h3>


                        <p>

                            Open the original
                            session video directly
                            on YouTube.

                        </p>


                        <div class="hj-video-meta">


                            <span>

                                <i class="fab fa-youtube"></i>

                                YouTube

                            </span>


                            <span>

                                <i class="fas fa-play-circle"></i>

                                Original event video

                            </span>


                        </div>


                    </div>


                </article>


            </div>


        </div>


    </section>



    {{-- =========================================================
        PRESENTATION
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section hj-resource-section"
    >


        <div class="ac-container">


            <div class="hj-section-heading">


                <span class="ac-eyebrow">

                    PRESENTATION & MATERIALS

                </span>


                <h2>

                    Continue learning
                    beyond the session.

                </h2>


                <p>

                    Explore the original
                    Hijrat to Medina
                    presentation directly
                    on the page.

                </p>


            </div>



            <article class="ac-card hj-resource-card">


                <div class="hj-resource-preview">


                    <iframe
                        src="https://drive.google.com/file/d/1l2LC6rXMaoIdlgPRgotA8VQUKK0f1ncU/preview"
                        title="Hijrat to Medina PDF"
                        loading="lazy"
                        allow="autoplay"
                    ></iframe>


                </div>



                <div class="hj-resource-copy">


                    <span class="ac-eyebrow">

                        PRESENTATION SLIDE PACK

                    </span>


                    <h3>
                        Hijrat to Medina
                    </h3>


                    <p>

                        Revisit the original
                        presentation from
                        Cycle 1 · Session 11
                        or open the complete
                        material in Google Drive.

                    </p>



                    <div class="hj-resource-meta">


                        <span>

                            <i class="far fa-file-pdf"></i>

                            Hijrat to Medina PDF

                        </span>


                        <span>

                            <i class="fas fa-book-open"></i>

                            Cycle 1 · Session 11

                        </span>


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            4 October 2025

                        </span>


                    </div>



                    <a
                        class="ac-btn ac-btn-secondary"
                        href="https://drive.google.com/file/d/1l2LC6rXMaoIdlgPRgotA8VQUKK0f1ncU/view"
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
        STATIC GALLERY
        g1.jpg - g46.jpg
    ========================================================== --}}

    <section
        class="ac-section sc-svg-section hj-gallery-section"
        id="event-gallery"
    >


        <div class="ac-container">


            <div class="hj-section-heading">


                <span class="ac-eyebrow">

                    EVENT PICTURES

                </span>


                <h2>

                    Moments from
                    Hijrat to Medina.

                </h2>


                <p>

                    Storytelling,
                    environmental learning
                    and creative activities
                    from this
                    Seerat Club session.

                </p>


            </div>



            <div class="hj-gallery-grid">


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g1.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g1.jpg') }}" alt="Hijrat to Medina event photograph 1" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g2.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g2.jpg') }}" alt="Hijrat to Medina event photograph 2" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g3.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g3.jpg') }}" alt="Hijrat to Medina event photograph 3" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g4.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g4.jpg') }}" alt="Hijrat to Medina event photograph 4" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g5.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g5.jpg') }}" alt="Hijrat to Medina event photograph 5" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g6.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g6.jpg') }}" alt="Hijrat to Medina event photograph 6" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g7.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g7.jpg') }}" alt="Hijrat to Medina event photograph 7" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g8.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g8.jpg') }}" alt="Hijrat to Medina event photograph 8" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g9.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g9.jpg') }}" alt="Hijrat to Medina event photograph 9" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g10.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g10.jpg') }}" alt="Hijrat to Medina event photograph 10" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g11.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g11.jpg') }}" alt="Hijrat to Medina event photograph 11" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g12.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g12.jpg') }}" alt="Hijrat to Medina event photograph 12" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g13.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g13.jpg') }}" alt="Hijrat to Medina event photograph 13" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g14.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g14.jpg') }}" alt="Hijrat to Medina event photograph 14" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g15.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g15.jpg') }}" alt="Hijrat to Medina event photograph 15" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g16.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g16.jpg') }}" alt="Hijrat to Medina event photograph 16" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g17.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g17.jpg') }}" alt="Hijrat to Medina event photograph 17" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g18.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g18.jpg') }}" alt="Hijrat to Medina event photograph 18" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g19.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g19.jpg') }}" alt="Hijrat to Medina event photograph 19" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g20.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g20.jpg') }}" alt="Hijrat to Medina event photograph 20" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g21.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g21.jpg') }}" alt="Hijrat to Medina event photograph 21" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g22.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g22.jpg') }}" alt="Hijrat to Medina event photograph 22" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g23.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g23.jpg') }}" alt="Hijrat to Medina event photograph 23" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g24.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g24.jpg') }}" alt="Hijrat to Medina event photograph 24" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g25.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g25.jpg') }}" alt="Hijrat to Medina event photograph 25" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g26.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g26.jpg') }}" alt="Hijrat to Medina event photograph 26" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g27.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g27.jpg') }}" alt="Hijrat to Medina event photograph 27" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g28.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g28.jpg') }}" alt="Hijrat to Medina event photograph 28" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g29.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g29.jpg') }}" alt="Hijrat to Medina event photograph 29" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g30.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g30.jpg') }}" alt="Hijrat to Medina event photograph 30" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g31.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g31.jpg') }}" alt="Hijrat to Medina event photograph 31" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g32.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g32.jpg') }}" alt="Hijrat to Medina event photograph 32" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g33.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g33.jpg') }}" alt="Hijrat to Medina event photograph 33" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g34.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g34.jpg') }}" alt="Hijrat to Medina event photograph 34" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g35.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g35.jpg') }}" alt="Hijrat to Medina event photograph 35" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g36.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g36.jpg') }}" alt="Hijrat to Medina event photograph 36" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g37.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g37.jpg') }}" alt="Hijrat to Medina event photograph 37" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g38.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g38.jpg') }}" alt="Hijrat to Medina event photograph 38" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g39.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g39.jpg') }}" alt="Hijrat to Medina event photograph 39" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g40.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g40.jpg') }}" alt="Hijrat to Medina event photograph 40" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g41.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g41.jpg') }}" alt="Hijrat to Medina event photograph 41" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g42.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g42.jpg') }}" alt="Hijrat to Medina event photograph 42" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g43.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g43.jpg') }}" alt="Hijrat to Medina event photograph 43" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g44.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g44.jpg') }}" alt="Hijrat to Medina event photograph 44" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g45.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g45.jpg') }}" alt="Hijrat to Medina event photograph 45" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="hj-gallery-item">
                    <a data-fancybox="hijrat-gallery" href="{{ asset('assets/images/hijrat-to-medina/gallery/g46.jpg') }}">
                        <img src="{{ asset('assets/images/hijrat-to-medina/gallery/g46.jpg') }}" alt="Hijrat to Medina event photograph 46" loading="lazy" decoding="async">
                    </a>
                </figure>


            </div>


        </div>


    </section>



    {{-- =========================================================
        PREVIOUS / NEXT
    ========================================================== --}}

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
                    href="{{ route(
                        'past-events.cycle-1.isra-miraj'
                    ) }}"
                >


                    <small>
                        Previous chapter
                    </small>


                    <strong>

                        Isra &amp; Mi’raj

                        <span aria-hidden="true">
                            ↗
                        </span>

                    </strong>


                </a>



                <a
                    href="{{ route(
                        'past-events.cycle-1.young-hearts-of-mecca'
                    ) }}"
                >


                    <small>
                        Next chapter
                    </small>


                    <strong>

                        Young Hearts of Mecca

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
