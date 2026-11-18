<?php $__env->startSection('title', 'Young Hearts of Mecca · Seerat Club'); ?>

<?php $__env->startSection("Content"); ?>


<link
    rel="stylesheet"
    href="<?php echo e(asset('assets/css/past-events-premium.css')); ?>"
>


<style>

/* ================================================================
   YOUNG HEARTS OF MECCA
   STATIC PREMIUM EVENT PAGE
   ================================================================ */

.young-hearts-page {

    --yh-green: #173b31;
    --yh-dark: #102b24;
    --yh-gold: #c99d45;
    --yh-gold-light: #efdca6;
    --yh-cream: #f8f5ed;
    --yh-soft: #fbfaf6;
    --yh-muted: #5d6b66;

    --yh-border:
        rgba(23,59,49,.10);

    --yh-shadow:
        0 18px 55px
        rgba(20,52,43,.10);

    --yh-shadow-lg:
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

.young-hearts-page h1,
.young-hearts-page h2,
.young-hearts-page h3,
.young-hearts-page h4,
.young-hearts-page h5,
.young-hearts-page h6,
.young-hearts-page .ac-btn,
.young-hearts-page .ac-eyebrow,
.young-hearts-page .sc-chapter-links strong {

    font-family:
        "Baloo 2",
        "SC Arabic",
        sans-serif !important;
}


.young-hearts-page p,
.young-hearts-page li,
.young-hearts-page .c1-meta,
.young-hearts-page .ac-breadcrumb,
.young-hearts-page .yh-resource-meta,
.young-hearts-page .sc-chapter-links small {

    font-family:
        "DM Sans",
        "SC Arabic",
        sans-serif !important;
}


/* ================================================================
   HERO
   ================================================================ */

.young-hearts-page
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


/* OLD .92 CREAM OVERLAY REMOVED */

.young-hearts-page
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


.young-hearts-page
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


.young-hearts-page
.c1-hero
.ac-container {

    position: relative;

    z-index: 3;
}


/* ================================================================
   BREADCRUMB
   ================================================================ */

.young-hearts-page
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


.young-hearts-page
.ac-breadcrumb a {

    color:
        #ffffff !important;

    text-decoration: none;
}


.young-hearts-page
.ac-breadcrumb a:hover {

    color:
        var(--yh-gold-light) !important;
}


/* ================================================================
   HERO GRID
   ================================================================ */

.young-hearts-page
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

.young-hearts-page
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
        var(--yh-shadow-lg) !important;

    backdrop-filter:
        none !important;

    -webkit-backdrop-filter:
        none !important;
}


.young-hearts-page
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
            var(--yh-gold),
            #efd593
        );
}


.young-hearts-page
.c1-hero-copy
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


.young-hearts-page
.c1-hero-copy h1 {

    max-width: 720px;

    margin:
        23px 0 22px !important;

    color:
        var(--yh-dark) !important;

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


.young-hearts-page
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
   HERO META
   ================================================================ */

.young-hearts-page
.c1-meta {

    display: flex;

    flex-wrap: wrap;

    gap: 11px;

    margin:
        26px 0 30px;
}


.young-hearts-page
.c1-meta > span {

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


.young-hearts-page
.c1-meta i {

    color:
        #aa8438;
}


/* ================================================================
   BUTTONS
   ================================================================ */

.young-hearts-page
.ac-actions {

    display: flex;

    flex-wrap: wrap;

    gap: 13px;
}


.young-hearts-page
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
        var(--yh-gold) !important;

    border-radius:
        999px !important;

    background:
        var(--yh-gold) !important;

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


.young-hearts-page
.ac-btn:hover {

    transform:
        translateY(-2px);

    background:
        #d5aa51 !important;
}


.young-hearts-page
.ac-btn-secondary {

    border-color:
        rgba(23,59,49,.13) !important;

    background:
        #ffffff !important;

    color:
        var(--yh-dark) !important;

    box-shadow:
        0 10px 25px
        rgba(16,43,36,.07);
}


/* ================================================================
   POSTER
   ================================================================ */

.young-hearts-page
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
        var(--yh-shadow-lg) !important;

    transform:
        rotate(1deg);

    transition:
        .3s ease;
}


.young-hearts-page
.c1-visual:hover {

    transform:
        rotate(0)
        translateY(-5px);
}


.young-hearts-page
.c1-visual a {

    display: block;

    overflow: hidden;

    border-radius: 21px;
}


.young-hearts-page
.c1-visual img {

    display: block;

    width: 100%;

    aspect-ratio:
        4 / 5;

    object-fit: cover;

    transition:
        transform .45s ease;
}


.young-hearts-page
.c1-visual:hover img {

    transform:
        scale(1.025);
}


.young-hearts-page
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

    text-align: center;
}


/* ================================================================
   STORY
   ================================================================ */

.young-hearts-page
.c1-story {

    background:
        radial-gradient(
            circle at 8% 8%,
            rgba(201,157,69,.09),
            transparent 25%
        ),
        #f9f7f0 !important;
}


.young-hearts-page
.c1-story-grid {

    display: grid;

    grid-template-columns:
        minmax(0,1fr)
        330px;

    align-items: start;

    gap:
        clamp(45px,7vw,85px);
}


.young-hearts-page
.c1-story-copy {

    max-width: 800px;
}


.young-hearts-page
.c1-story-copy h2 {

    margin:
        15px 0 22px;

    color:
        var(--yh-dark) !important;

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


.young-hearts-page
.c1-story-copy h3 {

    margin:
        35px 0 12px;

    color:
        var(--yh-dark) !important;

    font-size:
        29px !important;

    font-weight:
        700 !important;

    line-height:
        1.15;
}


.young-hearts-page
.c1-lead {

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


.young-hearts-page
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

.young-hearts-page
.c1-aside {

    position: sticky;

    top: 120px;
}


.young-hearts-page
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
        var(--yh-shadow) !important;
}


.young-hearts-page
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

    border-radius:
        50%;
}


.young-hearts-page
.c1-lessons
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.young-hearts-page
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


.young-hearts-page
.c1-points {

    display: grid;

    gap: 10px;
}


.young-hearts-page
.c1-points span {

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


.young-hearts-page
.c1-points i {

    color:
        #e6c878;
}


/* ================================================================
   CYCLE 1 FINALE SECTION
   ================================================================ */

.young-hearts-page
.yh-finale-section {

    position: relative;

    overflow: hidden;

    background:
        linear-gradient(
            135deg,
            #173b31,
            #102b24
        ) !important;
}


.young-hearts-page
.yh-finale-section::after {

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


.young-hearts-page
.yh-finale-grid {

    position: relative;

    z-index: 2;

    display: grid;

    grid-template-columns:
        .82fr
        1.18fr;

    gap: 70px;

    align-items: center;
}


.young-hearts-page
.yh-finale-copy
.ac-eyebrow {

    color:
        #e9cf91 !important;
}


.young-hearts-page
.yh-finale-copy h2 {

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


.young-hearts-page
.yh-finale-copy p {

    color:
        rgba(255,255,255,.73) !important;

    font-size:
        16px;

    line-height:
        1.85;
}


.young-hearts-page
.yh-finale-cards {

    display: grid;

    grid-template-columns:
        repeat(
            2,
            minmax(0,1fr)
        );

    gap:
        15px;
}


.young-hearts-page
.yh-finale-card {

    padding: 23px;

    border:
        1px solid
        rgba(255,255,255,.10);

    border-radius:
        20px;

    background:
        rgba(255,255,255,.065);
}


.young-hearts-page
.yh-finale-card i {

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


.young-hearts-page
.yh-finale-card h3 {

    margin:
        0 0 8px;

    color:
        #ffffff !important;

    font-size:
        21px;

    line-height:
        1.2;
}


.young-hearts-page
.yh-finale-card p {

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

.young-hearts-page
.yh-section-heading {

    max-width: 760px;

    margin-bottom: 42px;
}


.young-hearts-page
.yh-section-heading h2 {

    margin:
        13px 0;

    color:
        var(--yh-dark);

    font-size:
        clamp(
            38px,
            4vw,
            52px
        );

    line-height:
        1.08;
}


.young-hearts-page
.yh-section-heading p {

    color:
        #64716c;

    font-size:
        16px;

    line-height:
        1.8;
}


/* ================================================================
   RESOURCE
   ================================================================ */

.young-hearts-page
.yh-resource-section {

    background:
        #fbfaf6 !important;
}


.young-hearts-page
.yh-resource-card {

    display: grid;

    grid-template-columns:
        minmax(0,1.35fr)
        minmax(320px,.72fr);

    overflow: hidden;

    padding:
        0 !important;

    border:
        1px solid
        var(--yh-border) !important;

    border-radius:
        30px !important;

    background:
        #ffffff !important;

    box-shadow:
        var(--yh-shadow) !important;
}


.young-hearts-page
.yh-resource-preview {

    min-height: 540px;

    background:
        #e9ece6;
}


.young-hearts-page
.yh-resource-preview iframe {

    display: block;

    width: 100%;
    height: 100%;

    min-height: 540px;

    border: 0;
}


.young-hearts-page
.yh-resource-copy {

    display: flex;

    flex-direction: column;

    justify-content: center;

    padding:
        44px 38px;
}


.young-hearts-page
.yh-resource-copy h3 {

    margin:
        13px 0 15px;

    color:
        var(--yh-dark);

    font-size:
        clamp(
            28px,
            2.5vw,
            35px
        );

    line-height:
        1.13;
}


.young-hearts-page
.yh-resource-copy p {

    margin:
        0 0 24px;

    color:
        #5f6b67;

    font-size:
        16px;

    line-height:
        1.8;
}


.young-hearts-page
.yh-resource-meta {

    display: grid;

    gap: 11px;

    margin-bottom:
        28px;

    color:
        #586661;

    font-size:
        14px;
}


.young-hearts-page
.yh-resource-meta span {

    display: flex;

    align-items: center;

    gap: 11px;
}


.young-hearts-page
.yh-resource-meta i {

    width: 18px;

    color:
        #b68d3d;

    text-align: center;
}


.young-hearts-page
.yh-resource-copy
.ac-btn {

    width:
        fit-content;
}


/* ================================================================
   GALLERY
   ================================================================ */

.young-hearts-page
.yh-gallery-section {

    background:
        linear-gradient(
            180deg,
            #e8eee6,
            #f3f0e7
        ) !important;
}


.young-hearts-page
.yh-gallery-grid {

    display: grid;

    grid-template-columns:
        repeat(
            3,
            minmax(0,1fr)
        );

    gap: 20px;
}


.young-hearts-page
.yh-gallery-item {

    margin: 0;

    padding: 6px;

    overflow: hidden;

    border:
        1px solid
        var(--yh-border);

    border-radius:
        23px;

    background:
        #ffffff;

    box-shadow:
        var(--yh-shadow);

    transition:
        transform .3s ease,
        box-shadow .3s ease;
}


.young-hearts-page
.yh-gallery-item:hover {

    transform:
        translateY(-5px);

    box-shadow:
        0 22px 55px
        rgba(20,52,43,.13);
}


.young-hearts-page
.yh-gallery-item a {

    display: block;

    aspect-ratio:
        4 / 3;

    overflow: hidden;

    border-radius:
        17px;
}


.young-hearts-page
.yh-gallery-item img {

    display: block;

    width: 100%;
    height: 100%;

    object-fit: cover;

    object-position: center;

    transition:
        transform .45s ease;
}


.young-hearts-page
.yh-gallery-item:hover img {

    transform:
        scale(1.045);
}


/* ================================================================
   CYCLE COMPLETE
   ================================================================ */

.young-hearts-page
.c1-cycle-nav {

    background:
        #e7ece4 !important;
}


.young-hearts-page
.c1-cycle-nav
.ac-heading {

    margin-bottom:
        30px;
}


.young-hearts-page
.c1-cycle-nav h2 {

    margin:
        12px 0;

    color:
        var(--yh-dark);

    font-size:
        clamp(
            34px,
            4vw,
            50px
        );
}


.young-hearts-page
.sc-chapter-links {

    display: grid;

    grid-template-columns:
        repeat(
            2,
            minmax(0,1fr)
        );

    gap: 16px;
}


.young-hearts-page
.sc-chapter-links > a {

    display: flex;

    flex-direction: column;

    gap: 8px;

    min-height: 125px;

    padding:
        25px 27px;

    border:
        1px solid
        var(--yh-border);

    border-radius:
        20px;

    background:
        rgba(255,255,255,.82);

    color:
        var(--yh-dark);

    text-decoration:
        none;

    box-shadow:
        0 10px 30px
        rgba(20,52,43,.05);

    transition:
        .25s ease;
}


.young-hearts-page
.sc-chapter-links > a:hover {

    transform:
        translateY(-4px);

    background:
        #ffffff;

    box-shadow:
        var(--yh-shadow);
}


.young-hearts-page
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


.young-hearts-page
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

    .young-hearts-page
    .c1-hero-grid {

        grid-template-columns:
            1fr 330px;
    }


    .young-hearts-page
    .c1-story-grid {

        grid-template-columns:
            1fr 290px;
    }


    .young-hearts-page
    .yh-resource-card {

        grid-template-columns:
            1fr;
    }


    .young-hearts-page
    .yh-resource-preview,
    .young-hearts-page
    .yh-resource-preview iframe {

        min-height:
            480px;
    }

}


@media (max-width:850px) {

    .young-hearts-page
    .c1-hero {

        min-height:
            auto;

        padding-bottom:
            65px !important;
    }


    .young-hearts-page
    .c1-hero-grid {

        grid-template-columns:
            1fr;
    }


    .young-hearts-page
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


    .young-hearts-page
    .c1-story-grid {

        grid-template-columns:
            1fr;
    }


    .young-hearts-page
    .c1-aside {

        position:
            static;
    }


    .young-hearts-page
    .yh-finale-grid {

        grid-template-columns:
            1fr;

        gap:
            38px;
    }


    .young-hearts-page
    .yh-gallery-grid {

        grid-template-columns:
            repeat(
                2,
                minmax(0,1fr)
            );
    }

}


@media (max-width:650px) {

    .young-hearts-page
    .c1-hero {

        border-radius:
            0 0 28px 28px;
    }


    .young-hearts-page
    .c1-hero-copy {

        padding:
            30px 23px !important;

        border-radius:
            25px !important;
    }


    .young-hearts-page
    .c1-hero-copy h1 {

        font-size:
            clamp(
                40px,
                11.5vw,
                58px
            ) !important;
    }


    .young-hearts-page
    .c1-meta {

        flex-direction:
            column;

        align-items:
            flex-start;
    }


    .young-hearts-page
    .ac-actions {

        flex-direction:
            column;
    }


    .young-hearts-page
    .ac-btn {

        width:
            100%;
    }


    .young-hearts-page
    .yh-finale-cards,
    .young-hearts-page
    .yh-gallery-grid {

        grid-template-columns:
            1fr;
    }


    .young-hearts-page
    .yh-resource-preview,
    .young-hearts-page
    .yh-resource-preview iframe {

        min-height:
            410px;
    }


    .young-hearts-page
    .yh-resource-copy {

        padding:
            30px 23px;
    }


    .young-hearts-page
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
        young-hearts-page
    "
>


    

    <section
        class="ac-masthead c1-hero"
        style="
            background-image:
                url('<?php echo e(asset('assets/images/young-hearts-of-mecca/hero.jpg')); ?>');
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
                    Young Hearts of Mecca
                </span>

            </nav>



            <div class="c1-hero-grid">


                <div class="c1-hero-copy">


                    <span class="ac-eyebrow">

                        CYCLE 1 · SESSION 12

                    </span>


                    <h1>

                        Young Hearts
                        of Mecca

                    </h1>


                    <p class="c1-hero-lead">

                        Children around
                        Prophet Muhammad ﷺ
                        and a joyful
                        Cycle 1 finale.

                    </p>



                    <div class="c1-meta">


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            <b>
                                11 November 2025
                            </b>

                        </span>


                        <span>

                            <i class="fas fa-book-open"></i>

                            <b>
                                Cycle 1 · Session 12
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
                        data-fancybox="young-hearts-poster"
                        href="<?php echo e(asset('assets/images/young-hearts-of-mecca/poster.jpg')); ?>"
                    >

                        <img
                            src="<?php echo e(asset('assets/images/young-hearts-of-mecca/poster.jpg')); ?>"
                            alt="Young Hearts of Mecca event poster"
                        >

                    </a>


                    <figcaption>

                        Young Hearts of Mecca ·
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

                        Children around
                        Prophet Muhammad ﷺ
                        and a joyful
                        Cycle 1 finale.

                    </h2>


                    <p class="c1-lead">

                        Cycle 1 · Session 12

                    </p>


                    <p>

                        The final session
                        of Seerat Club’s
                        first cycle was held
                        on 11 November 2025
                        at Shafqat Masjid.

                    </p>


                    <p>

                        The evening began
                        with a soulful recitation
                        of
                        <strong>
                            Tala Al Badru Alayna
                        </strong>,
                        creating a serene
                        and spiritual atmosphere.

                    </p>


                    <p>

                        Children were then engaged
                        in an interactive discussion
                        introducing them to
                        the personality
                        and appearance
                        of our beloved
                        Prophet Muhammad ﷺ,
                        including how he walked
                        and spoke with gentleness
                        and grace.

                    </p>


                    <h3>

                        Young Hearts Around
                        the Prophet ﷺ

                    </h3>


                    <p>

                        The discussion turned
                        towards the compassionate
                        nature of
                        Prophet Muhammad ﷺ
                        and how his kindness
                        inspired the young companions
                        who grew up around him.

                    </p>


                    <p>

                        Through stories of
                        <strong>Hazrat Arqam (RA)</strong>,
                        <strong>Hazrat Fatima (RA)</strong>
                        and
                        <strong>Hazrat Ali (RA)</strong>,
                        children learned how
                        remarkable young people
                        stood beside
                        Prophet Muhammad ﷺ.

                    </p>


                    <p>

                        Their examples showed
                        that age does not
                        prevent someone
                        from contributing to Islam,
                        supporting others
                        and developing
                        strong character.

                    </p>


                    <h3>

                        Qur’an and Tarbiyah

                    </h3>


                    <p>

                        After Maghrib,
                        a heartfelt bayan
                        emphasized the importance
                        of integrating
                        the Qur’an
                        into everyday life.

                    </p>


                    <p>

                        The session also highlighted
                        the vital role
                        of
                        <strong>Tarbiyah</strong>,
                        or character building,
                        in raising children
                        with strong Islamic values,
                        good manners
                        and a meaningful
                        connection with Allah.

                    </p>


                    <h3>

                        Awards and Celebrations

                    </h3>


                    <p>

                        The evening also became
                        a celebration
                        of the dedication
                        shown by children
                        throughout the entire
                        first cycle
                        of Seerat Club.

                    </p>


                    <p>

                        Cycles were presented
                        to children
                        who maintained
                        perfect attendance
                        throughout all twelve sessions.

                    </p>


                    <p>

                        Special gifts were also
                        given to children
                        who consistently completed
                        their Reflection Journals,
                        recognising their dedication
                        and love for learning
                        from the Seerah
                        of Prophet Muhammad ﷺ.

                    </p>


                    <p>

                        The gathering also celebrated
                        a special milestone
                        within the
                        Seerat Club community.

                    </p>


                    <p>

                        Babar Bhai,
                        an active member
                        of the team,
                        completed his
                        Hifz e Qur’an
                        after more than
                        a decade of perseverance.

                    </p>


                    <p>

                        The community congratulated
                        him warmly,
                        reflecting on the value
                        of patience,
                        consistency,
                        faith
                        and commitment
                        to the Qur’an.

                    </p>


                    <h3>

                        Bhakkar ki Poonchakki
                        ka Imtehaan

                    </h3>


                    <p>

                        The STEM portion
                        of the session
                        began with the story
                        of Haseeb
                        and his friend Ali.

                    </p>


                    <p>

                        Ali had to leave
                        his village
                        and work in the city
                        after his family’s crops failed.

                    </p>


                    <p>

                        Although his employers
                        treated him kindly,
                        he missed his school,
                        his friends
                        and the joy
                        of celebrating Eid
                        at home.

                    </p>


                    <p>

                        His simple wish
                        to be treated
                        like other children
                        encouraged participants
                        to reflect on dignity,
                        compassion
                        and the rights
                        of every child.

                    </p>


                    <p>

                        The story reminded children
                        that compassion
                        should extend
                        to every child,
                        just as
                        Prophet Muhammad ﷺ
                        showed kindness
                        and dignity
                        to those around him.

                    </p>


                    <h3>

                        Building a Better Village

                    </h3>


                    <p>

                        Inspired by the
                        young Sahaba
                        who served Islam selflessly,
                        Haseeb imagined
                        helping his village
                        by finding solutions
                        to its water
                        and power problems.

                    </p>


                    <p>

                        Remembering lessons
                        about wind energy
                        and geometric stability,
                        he imagined building
                        a windmill
                        that could help
                        power tube wells
                        for farms.

                    </p>


                    <h3>

                        STEM Windmill Challenge

                    </h3>


                    <p>

                        Inspired by this story,
                        children participated
                        in a practical
                        STEM challenge
                        where they built
                        strong and stable
                        windmill towers
                        using spaghetti,
                        tape
                        and marshmallows.

                    </p>


                    <p>

                        During the challenge,
                        children learned
                        why triangles create
                        some of the strongest
                        and most stable
                        structures in engineering.

                    </p>


                    <p>

                        They connected
                        this principle
                        with real structures
                        such as bridges,
                        towers
                        and famous landmarks.

                    </p>


                    <p>

                        The final session
                        brought together
                        Seerah,
                        compassion,
                        Qur’an,
                        character building
                        and practical STEM learning,
                        creating a memorable
                        conclusion to Cycle 1.

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

                                Compassion of the Prophet ﷺ

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Young companions

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Tarbiyah and Qur’an

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Dignity and compassion

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                Perseverance

                            </span>


                            <span>

                                <i class="fas fa-check-circle"></i>

                                STEM and service

                            </span>


                        </div>


                    </div>


                </aside>


            </div>


        </div>


    </section>



    

    <section
        class="ac-section sc-svg-section yh-finale-section"
    >


        <div class="ac-container">


            <div class="yh-finale-grid">


                <div class="yh-finale-copy">


                    <span class="ac-eyebrow">

                        CYCLE 1 FINALE

                    </span>


                    <h2>

                        Young hearts
                        can make
                        a meaningful difference.

                    </h2>


                    <p>

                        The final session
                        brought together
                        faith,
                        compassion,
                        Qur’an,
                        perseverance
                        and practical learning —
                        reflecting the wider journey
                        children experienced
                        throughout Cycle 1.

                    </p>


                </div>



                <div class="yh-finale-cards">


                    <article class="yh-finale-card">


                        <i class="fas fa-heart"></i>


                        <h3>
                            Compassion
                        </h3>


                        <p>

                            Learning to treat
                            others with kindness,
                            dignity and care.

                        </p>


                    </article>



                    <article class="yh-finale-card">


                        <i class="fas fa-users"></i>


                        <h3>
                            Young Sahaba
                        </h3>


                        <p>

                            Seeing that
                            young people can
                            contribute meaningfully
                            to their community.

                        </p>


                    </article>



                    <article class="yh-finale-card">


                        <i class="fas fa-book-open"></i>


                        <h3>
                            Qur’an & Tarbiyah
                        </h3>


                        <p>

                            Connecting knowledge
                            with character,
                            manners
                            and daily life.

                        </p>


                    </article>



                    <article class="yh-finale-card">


                        <i class="fas fa-cog"></i>


                        <h3>
                            STEM & Service
                        </h3>


                        <p>

                            Using creativity
                            and problem solving
                            to benefit others.

                        </p>


                    </article>


                </div>


            </div>


        </div>


    </section>



    

    <section
        class="ac-section sc-svg-section yh-resource-section"
    >


        <div class="ac-container">


            <div class="yh-section-heading">


                <span class="ac-eyebrow">

                    PRESENTATION & MATERIALS

                </span>


                <h2>

                    Continue learning
                    beyond the finale.

                </h2>


                <p>

                    Explore the original
                    Young Hearts of Mecca
                    presentation directly
                    on the page.

                </p>


            </div>



            <article class="ac-card yh-resource-card">


                <div class="yh-resource-preview">


                    <iframe
                        src="https://drive.google.com/file/d/1J5N-e22RwFS90aa4Ip-oBHM3Q65SbYZL/preview"
                        title="Young Hearts of Mecca PDF"
                        loading="lazy"
                        allow="autoplay"
                    ></iframe>


                </div>



                <div class="yh-resource-copy">


                    <span class="ac-eyebrow">

                        PRESENTATION SLIDE PACK

                    </span>


                    <h3>

                        Young Hearts of Mecca

                    </h3>


                    <p>

                        Revisit the original
                        presentation from
                        the final Cycle 1 session
                        or open the full material
                        in Google Drive.

                    </p>



                    <div class="yh-resource-meta">


                        <span>

                            <i class="far fa-file-pdf"></i>

                            Young Hearts of Mecca PDF

                        </span>


                        <span>

                            <i class="fas fa-book-open"></i>

                            Cycle 1 · Session 12

                        </span>


                        <span>

                            <i class="far fa-calendar-alt"></i>

                            11 November 2025

                        </span>


                    </div>



                    <a
                        class="ac-btn ac-btn-secondary"
                        href="https://drive.google.com/file/d/1J5N-e22RwFS90aa4Ip-oBHM3Q65SbYZL/view"
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
        class="ac-section sc-svg-section yh-gallery-section"
        id="event-gallery"
    >


        <div class="ac-container">


            <div class="yh-section-heading">


                <span class="ac-eyebrow">

                    EVENT PICTURES

                </span>


                <h2>

                    Moments from
                    Young Hearts of Mecca.

                </h2>


                <p>

                    Storytelling,
                    celebrations
                    and STEM activities
                    from the final
                    Cycle 1 session.

                </p>


            </div>



            <div class="yh-gallery-grid">


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g1.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g1.jpg')); ?>" alt="Young Hearts of Mecca event photograph 1" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g2.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g2.jpg')); ?>" alt="Young Hearts of Mecca event photograph 2" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g3.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g3.jpg')); ?>" alt="Young Hearts of Mecca event photograph 3" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g4.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g4.jpg')); ?>" alt="Young Hearts of Mecca event photograph 4" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g5.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g5.jpg')); ?>" alt="Young Hearts of Mecca event photograph 5" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g6.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g6.jpg')); ?>" alt="Young Hearts of Mecca event photograph 6" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g7.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g7.jpg')); ?>" alt="Young Hearts of Mecca event photograph 7" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g8.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g8.jpg')); ?>" alt="Young Hearts of Mecca event photograph 8" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g9.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g9.jpg')); ?>" alt="Young Hearts of Mecca event photograph 9" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g10.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g10.jpg')); ?>" alt="Young Hearts of Mecca event photograph 10" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g11.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g11.jpg')); ?>" alt="Young Hearts of Mecca event photograph 11" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g12.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g12.jpg')); ?>" alt="Young Hearts of Mecca event photograph 12" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g13.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g13.jpg')); ?>" alt="Young Hearts of Mecca event photograph 13" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g14.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g14.jpg')); ?>" alt="Young Hearts of Mecca event photograph 14" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g15.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g15.jpg')); ?>" alt="Young Hearts of Mecca event photograph 15" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g16.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g16.jpg')); ?>" alt="Young Hearts of Mecca event photograph 16" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g17.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g17.jpg')); ?>" alt="Young Hearts of Mecca event photograph 17" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g18.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g18.jpg')); ?>" alt="Young Hearts of Mecca event photograph 18" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g19.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g19.jpg')); ?>" alt="Young Hearts of Mecca event photograph 19" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g20.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g20.jpg')); ?>" alt="Young Hearts of Mecca event photograph 20" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g21.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g21.jpg')); ?>" alt="Young Hearts of Mecca event photograph 21" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g22.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g22.jpg')); ?>" alt="Young Hearts of Mecca event photograph 22" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g23.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g23.jpg')); ?>" alt="Young Hearts of Mecca event photograph 23" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g24.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g24.jpg')); ?>" alt="Young Hearts of Mecca event photograph 24" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g25.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g25.jpg')); ?>" alt="Young Hearts of Mecca event photograph 25" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g26.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g26.jpg')); ?>" alt="Young Hearts of Mecca event photograph 26" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g27.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g27.jpg')); ?>" alt="Young Hearts of Mecca event photograph 27" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g28.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g28.jpg')); ?>" alt="Young Hearts of Mecca event photograph 28" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g29.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g29.jpg')); ?>" alt="Young Hearts of Mecca event photograph 29" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g30.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g30.jpg')); ?>" alt="Young Hearts of Mecca event photograph 30" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g31.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g31.jpg')); ?>" alt="Young Hearts of Mecca event photograph 31" loading="lazy" decoding="async">
                    </a>
                </figure>


                <figure class="yh-gallery-item">
                    <a data-fancybox="young-hearts-gallery" href="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g32.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/gallery/g32.jpg')); ?>" alt="Young Hearts of Mecca event photograph 32" loading="lazy" decoding="async">
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

                    CYCLE 1 COMPLETE

                </span>


                <h2>

                    A complete
                    Seerah journey.

                </h2>


            </div>



            <nav
                aria-label="Event navigation"
                class="sc-chapter-links"
            >


                <a
                    href="<?php echo e(route(
                        'past-events.cycle-1.hijrat-to-medina'
                    )); ?>"
                >


                    <small>

                        Previous chapter

                    </small>


                    <strong>

                        Hijrat to Medina

                        <span aria-hidden="true">
                            ↗
                        </span>

                    </strong>


                </a>



                <a
                    href="<?php echo e(route(
                        'past-events.cycle-1.index'
                    )); ?>"
                >


                    <small>

                        Completed

                    </small>


                    <strong>

                        Cycle 1 index

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

<?php echo $__env->make("Layout.layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Seerat-Club\resources\views/past-events/cycle-1/young-hearts-of-mecca.blade.php ENDPATH**/ ?>