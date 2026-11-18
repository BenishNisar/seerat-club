@extends("Layout.layout")

@section('title', 'Past Events · Seerat Club for Kids')

@section("Content")

<style>
.sc-events-page { --sce-ink:#173e35; --sce-green:#245c49; --sce-gold:#bc9153; --sce-muted:#63736b; --sce-paper:#fbfaf6; background:var(--sce-paper); color:var(--sce-ink); font-family:Arial, sans-serif; line-height:1.65; width:100%; overflow:hidden; }
.sc-events-page *, .sc-events-page *::before, .sc-events-page *::after { box-sizing:border-box; }
.sc-events-page h1, .sc-events-page h2, .sc-events-page h3, .sc-events-page p { margin:0; }
.sc-events-page a { text-decoration:none; }
.sc-events-page img { display:block; max-width:100%; }
.sc-events-page .sc-container { width:min(1200px, calc(100% - 64px)); margin-inline:auto; }
.sc-events-page .sc-eyebrow { display:block; color:var(--sce-green); font-size:12px; font-weight:700; letter-spacing:2px; text-transform:uppercase; margin-bottom:18px; }
.sc-events-page .sc-title { font-family:Georgia, serif; font-size:clamp(28px,3.2vw,43px); font-weight:500; line-height:1.23; letter-spacing:-.6px; color:var(--sce-ink); margin-bottom:22px; }
.sc-events-page .sc-copy { color:var(--sce-muted); font-size:16px; line-height:1.85; }
.sc-events-page .sc-btn { display:inline-flex; align-items:center; justify-content:center; gap:12px; min-height:50px; padding:13px 25px; border:1px solid transparent; border-radius:6px; font-size:14px; font-weight:700; line-height:1.5; transition:background .2s, transform .2s; }
.sc-events-page .sc-btn-primary { background:var(--sce-green); color:#fff; border-color:var(--sce-green); }
.sc-events-page .sc-btn-primary:hover { background:#173e35; transform:translateY(-2px); }
.sc-events-page .sc-btn-outline { border-color:var(--sce-green); color:var(--sce-green); background:transparent; }
.sc-events-page .sc-btn-outline:hover { background:#e8eee8; }
.sc-events-page .sc-textlink { display:inline-flex; align-items:center; gap:10px; color:var(--sce-green); font-size:13px; font-weight:700; line-height:1.5; }
.sc-events-page .sc-textlink:hover { text-decoration:underline; text-underline-offset:5px; }
.sc-events-page a:focus-visible { outline:3px solid var(--sce-gold); outline-offset:5px; }
.sc-events-page .sce-hero { position:relative; isolation:isolate; min-height:520px; display:flex; align-items:center; padding:100px 0; background:#173e35; }
.sc-events-page .sce-hero-bg, .sc-events-page .sce-hero-overlay { position:absolute; inset:0; z-index:-1; }
.sc-events-page .sce-hero-bg img { width:100%; height:100%; object-fit:cover; object-position:center 40%; }
.sc-events-page .sce-hero-overlay { background:linear-gradient(90deg,rgba(10,35,28,.93) 0%,rgba(10,35,28,.75) 50%,rgba(10,35,28,.30) 100%); }
.sc-events-page .sce-hero-content { position:relative; }
.sc-events-page .sce-hero .sc-eyebrow { color:#e9c990; }
.sc-events-page .sce-hero-title { max-width:860px; color:white; font-family:Georgia,serif; font-size:clamp(38px,5.3vw,70px); font-weight:400; line-height:1.12; letter-spacing:-1.6px; margin-bottom:26px; }
.sc-events-page .sce-hero-title em { color:#edd5a8; font-weight:400; }
.sc-events-page .sce-hero-desc { max-width:560px; color:#e8eee9; font-size:17px; line-height:1.85; }
.sc-events-page .sce-camp-section { padding:100px 0; }
.sc-events-page .sce-camp-grid { display:grid; grid-template-columns:1fr 1fr; gap:70px; align-items:center; }
.sc-events-page .sce-camp-copy { min-width:0; }
.sc-events-page .sce-camp-collage { position:relative; min-height:420px; padding:0 48px 60px 0; }
.sc-events-page .sce-camp-img-1 { width:100%; height:320px; object-fit:cover; border-radius:14px; box-shadow:0 18px 40px #173e351a; }
.sc-events-page .sce-camp-img-2 { position:absolute; right:0; bottom:0; width:63%; height:235px; object-fit:cover; border:8px solid var(--sce-paper); border-radius:14px; box-shadow:0 18px 40px #173e3524; }
.sc-events-page .sce-events-section { padding:85px 0 100px; background:#f0f3ed; border-top:1px solid #e0e6dc; }
.sc-events-page .sce-section-header { max-width:670px; margin:0 auto 65px; text-align:center; }
.sc-events-page .sce-section-header .sc-title { font-size:clamp(34px,4vw,51px); margin-bottom:16px; }
.sc-events-page .sce-cycle-label { display:flex; align-items:center; justify-content:space-between; gap:24px; padding-bottom:23px; margin-bottom:32px; border-bottom:1px solid #ccd6c8; }
.sc-events-page .sce-cycle-label .sc-eyebrow { margin-bottom:6px; color:#76603c; }
.sc-events-page .sce-cycle-label h3 { font-family:Georgia,serif; font-size:clamp(24px,2.4vw,32px); font-weight:500; line-height:1.3; color:var(--sce-ink); }
.sc-events-page .sce-cycle-label > .sc-textlink { flex-shrink:0; }
.sc-events-page .sce-editorial-grid { display:grid; grid-template-columns:repeat(3,minmax(0,1fr)); gap:30px; }
.sc-events-page .sce-editorial-grid + .sce-cycle-label { margin-top:80px; }
.sc-events-page .sce-event-poster { display:flex; flex-direction:column; min-width:0; background:#fff; border:1px solid #dfe6da; border-radius:12px; overflow:hidden; box-shadow:0 7px 22px rgba(23,62,53,.035); transition:transform .2s, box-shadow .2s; }
.sc-events-page .sce-event-poster:hover { transform:translateY(-4px); box-shadow:0 14px 30px rgba(23,62,53,.10); }
.sc-events-page .sce-poster-frame { display:flex; align-items:center; justify-content:center; width:100%; aspect-ratio:4/5; padding:14px; background:#e8ede2; border-bottom:1px solid #e1e7dc; overflow:hidden; }
.sc-events-page .sce-poster-frame img { width:100%; height:100%; object-fit:contain; }
.sc-events-page .sce-poster-info { display:flex; flex:1; flex-direction:column; align-items:flex-start; padding:26px; }
.sc-events-page .sce-session-num { display:block; color:#8a6a35; font-size:11px; font-weight:700; letter-spacing:1.6px; text-transform:uppercase; margin-bottom:10px; }
.sc-events-page .sce-poster-info h3 { font-family:Georgia,serif; color:var(--sce-ink); font-size:25px; font-weight:500; line-height:1.23; margin-bottom:14px; }
.sc-events-page .sce-poster-info p { color:var(--sce-muted); font-size:14px; line-height:1.8; margin-bottom:23px; }
.sc-events-page .sce-poster-info .sc-textlink { margin-top:auto; }
.sc-events-page .sc-join { padding:80px 0; }
.sc-events-page .sc-join-card { display:grid; grid-template-columns:minmax(0,1fr) auto; gap:45px; align-items:center; padding:55px; border-radius:16px; background:#173e35; color:white; }
.sc-events-page .sc-join-card .sc-eyebrow { color:#e9c990; }
.sc-events-page .sc-join-card h2 { font-family:Georgia,serif; color:#fff; font-size:clamp(29px,3vw,40px); font-weight:400; line-height:1.25; max-width:650px; margin-bottom:18px; }
.sc-events-page .sc-join-card p { color:#d9e5de; font-size:15px; max-width:630px; line-height:1.85; }
.sc-events-page .sc-join-actions { display:flex; flex-direction:column; gap:12px; min-width:180px; }
.sc-events-page .sc-join .sc-btn-primary { background:#e9c990; color:#173e35; border-color:#e9c990; }
.sc-events-page .sc-join .sc-btn-primary:hover { background:#f3dbb2; }
.sc-events-page .sc-join .sc-btn-outline { color:white; border-color:#91a89a; }
.sc-events-page .sc-join .sc-btn-outline:hover { background:#ffffff12; }
@media (max-width:1024px) {
 .sc-events-page .sce-editorial-grid { grid-template-columns:repeat(2,minmax(0,1fr)); gap:24px; }
 .sc-events-page .sce-camp-grid { gap:35px; }
 .sc-events-page .sce-camp-collage { min-height:360px; padding-right:25px; }
 .sc-events-page .sce-camp-img-1 { height:270px; }
 .sc-events-page .sce-camp-img-2 { height:205px; width:72%; }
 .sc-events-page .sc-join-card { padding:38px; gap:30px; }
}
@media (max-width:767px) {
 .sc-events-page .sc-container { width:calc(100% - 36px); }
 .sc-events-page .sce-hero { min-height:440px; padding:70px 0; }
 .sc-events-page .sce-hero-title { letter-spacing:-.8px; }
 .sc-events-page .sce-hero-desc { font-size:15px; }
 .sc-events-page .sce-hero-overlay { background:rgba(10,35,28,.78); }
 .sc-events-page .sce-camp-section, .sc-events-page .sce-events-section { padding:60px 0; }
 .sc-events-page .sce-camp-grid { grid-template-columns:1fr; gap:35px; }
 .sc-events-page .sce-camp-collage { width:100%; max-width:520px; margin:auto; }
 .sc-events-page .sce-section-header { margin-bottom:40px; }
 .sc-events-page .sce-cycle-label { align-items:flex-start; flex-direction:column; gap:15px; }
 .sc-events-page .sce-poster-info { padding:20px; }
 .sc-events-page .sce-poster-info h3 { font-size:22px; }
 .sc-events-page .sce-editorial-grid + .sce-cycle-label { margin-top:55px; }
 .sc-events-page .sc-join { padding:50px 0; }
 .sc-events-page .sc-join-card { grid-template-columns:1fr; padding:30px 24px; }
 .sc-events-page .sc-join-actions { flex-direction:row; flex-wrap:wrap; }
}
@media (max-width:540px) {
 .sc-events-page .sce-editorial-grid { grid-template-columns:1fr; gap:26px; }
 .sc-events-page .sce-poster-info { padding:24px; }
 .sc-events-page .sce-poster-frame { padding:12px; }
 .sc-events-page .sce-camp-collage { min-height:320px; }
 .sc-events-page .sce-camp-img-1 { height:240px; }
 .sc-events-page .sce-camp-img-2 { height:180px; border-width:6px; }
 .sc-events-page .sc-join-actions .sc-btn { width:100%; }
}
@media (prefers-reduced-motion:reduce) {
 .sc-events-page *, .sc-events-page *::before, .sc-events-page *::after { transition:none !important; }
}
</style>

<!-- ==========================================
     PAST EVENTS
=========================================== -->

<div class="sc-events-page">

    <!-- ==========================================
         1. HERO
    =========================================== -->

    <section class="sce-hero">

        <div class="sce-hero-bg">

            <img
                src="{{ asset('assets/images/past-events.jpg') }}"
                alt="Seerat Club children and activities"
            >

        </div>

        <div class="sce-hero-overlay"></div>

        <div class="sc-container sce-hero-content">

            <span class="sc-eyebrow">
                My Prophet ﷺ, My Hero
            </span>

            <h1 class="sce-hero-title">

                A Journey Told

                <br>

                <em>
                    One Experience at a Time.
                </em>

            </h1>

            <p class="sce-hero-desc">
                Explore the sessions, stories, activities and
                memorable experiences that have shaped the
                Seerat Club journey.
            </p>

        </div>

    </section>

    <!-- ==========================================
         2. SEERAT CAMP
    =========================================== -->

    <section class="sce-camp-section">

        <div class="sc-container">

            <div class="sce-camp-grid">

                <div class="sce-camp-copy">

                    <span class="sc-eyebrow">
                        1st Initiative · Seerat Camp
                    </span>

                    <h2 class="sc-title">

                        Our two camps titled
                        “My Prophet ﷺ, My Hero”
                        brought together over
                        100 boys and girls.

                    </h2>

                    <p class="sc-copy">

                        Children from ages 4 to 18 embarked on an
                        inspiring journey through the life and
                        teachings of Prophet Muhammad ﷺ.

                        Over three days, participants explored the
                        lives of the Prophets, the blessed family
                        of Prophet Muhammad ﷺ, the miraculous
                        Night of Ascension and the sacredness of
                        Palestine.

                    </p>

                    <a
                        href="{{ route('blog.index', [
                            'category' => 'seerat-camp'
                        ]) }}"
                        class="sc-btn sc-btn-primary text-light"
                        style="margin-top:20px;color:white !important;"
                    >

                        Read Camp Stories

                        <i class="fas fa-arrow-right"></i>

                    </a>

                </div>

                <div class="sce-camp-collage">

                    <img
                        src="{{ asset('assets/images/academy/page-01-img-1.webp') }}"
                        alt="Boys Seerat Camp"
                        class="sce-camp-img-1"
                    >

                    <img
                        src="{{ asset('assets/images/academy/page-01-img-2.webp') }}"
                        alt="Girls Seerat Camp"
                        class="sce-camp-img-2"
                    >

                </div>

            </div>

        </div>

    </section>

    <!-- ==========================================
         3. SEERAT CLUB EVENTS
    =========================================== -->

    <section class="sce-events-section">

        <div class="sc-container">

            <div class="sce-section-header">

                <span class="sc-eyebrow">
                    Seerat Club Sessions
                </span>

                <h2 class="sc-title">
                    The Seerah Journey
                </h2>

                <p class="sc-copy">
                    Follow the journey session by session,
                    from our earliest gatherings to our most
                    recent chapters.
                </p>

            </div>

            <!-- ======================================
                 CYCLE 1
            ======================================= -->

            <div class="sce-cycle-label">

                <div>

                    <span class="sc-eyebrow">
                        2024 – 2025
                    </span>

                    <h3>
                        Cycle 1 · The Beginning
                    </h3>

                </div>

                <a
                    href="{{ route('past-events.cycle-1.index') }}"
                    class="sc-textlink"
                >

                    Explore Cycle 1

                    <i class="fas fa-arrow-right"></i>

                </a>

            </div>

            <div class="sce-editorial-grid">

                <!-- ==================================
                     01 ONCE UPON A TIME IN JANNAT
                =================================== -->

                <article class="sce-event-poster">

                    <a
                        href="{{ route(
                            'past-events.cycle-1.once-upon-a-time-in-jannat'
                        ) }}"
                        class="sce-poster-frame"
                    >

                        <img
                            src="{{ asset(
                                'assets/images/once-upon-a-time-in-jannat/poster.jpg'
                            ) }}"
                            alt="Once Upon a Time in Jannat"
                        >

                    </a>

                    <div class="sce-poster-info">

                        <span class="sce-session-num">
                            Session 01
                        </span>

                        <h3>
                            Once Upon a Time in Jannat
                        </h3>

                        <p>
                            Our inaugural session explored the
                            story of Hazrat Adam AS, the origins
                            of humanity and the eternal struggle
                            between mankind and Shaytaan.
                        </p>

                        <a
                            href="{{ route(
                                'past-events.cycle-1.once-upon-a-time-in-jannat'
                            ) }}"
                            class="sc-textlink"
                        >
                            View Session Details
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </article>

                <!-- ==================================
                     02 THE FRIENDLY FIRE
                =================================== -->

                <article class="sce-event-poster">

                    <a
                        href="{{ route(
                            'past-events.cycle-1.the-friendly-fire'
                        ) }}"
                        class="sce-poster-frame"
                    >

                        <img
                            src="{{ asset(
                                'assets/images/the-friendly-fire/posters.png'
                            ) }}"
                            alt="The Friendly Fire"
                        >

                    </a>

                    <div class="sce-poster-info">

                        <span class="sce-session-num">
                            Session 02
                        </span>

                        <h3>
                            The Friendly Fire
                        </h3>

                        <p>
                            The session followed Hazrat Ibrahim
                            AS on his journey of reflection,
                            discovery and recognition of the
                            greatness of Allah.
                        </p>

                        <a
                            href="{{ route(
                                'past-events.cycle-1.the-friendly-fire'
                            ) }}"
                            class="sc-textlink"
                        >
                            View Session Details
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </article>

                <!-- ==================================
                     03 THE PURSUIT OF SUBMISSION
                =================================== -->

                <article class="sce-event-poster">

                    <a
                        href="{{ route(
                            'past-events.cycle-1.the-pursuit-of-submission'
                        ) }}"
                        class="sce-poster-frame"
                    >

                        <img
                            src="{{ asset(
                                'assets/images/the-pursuit-of-submission/poster.png'
                            ) }}"
                            alt="The Pursuit of Submission"
                        >

                    </a>

                    <div class="sce-poster-info">

                        <span class="sce-session-num">
                            Session 03
                        </span>

                        <h3>
                            The Pursuit of Submission
                        </h3>

                        <p>
                            Children explored the unwavering
                            submission of Hazrat Ibrahim AS and
                            his role in the construction of the
                            Kaaba.
                        </p>

                        <a
                            href="{{ route(
                                'past-events.cycle-1.the-pursuit-of-submission'
                            ) }}"
                            class="sc-textlink"
                        >
                            View Session Details
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </article>

                <!-- ==================================
                     04 YEAR OF THE ELEPHANT
                =================================== -->

                <article class="sce-event-poster">

                    <a
                        href="{{ route(
                            'past-events.cycle-1.the-year-of-the-elephant'
                        ) }}"
                        class="sce-poster-frame"
                    >

                        <img
                            src="{{ asset(
                                'assets/images/the-year-of-the-elephant/poster.jpg'
                            ) }}"
                            alt="The Year of the Elephant"
                        >

                    </a>

                    <div class="sce-poster-info">

                        <span class="sce-session-num">
                            Session 04
                        </span>

                        <h3>
                            The Year of the Elephant
                        </h3>

                        <p>
                            An enriching experience centred on
                            Islamic history, Surah Al Fil,
                            reflection and the extraordinary
                            events surrounding the Year of the
                            Elephant.
                        </p>

                        <a
                            href="{{ route(
                                'past-events.cycle-1.the-year-of-the-elephant'
                            ) }}"
                            class="sc-textlink"
                        >
                            View Session Details
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </article>

                <!-- ==================================
                     05 THE CHOSEN HEART
                =================================== -->

                <article class="sce-event-poster">

                    <a
                        href="{{ route(
                            'past-events.cycle-1.the-chosen-heart'
                        ) }}"
                        class="sce-poster-frame"
                    >

                        <img
                            src="{{ asset(
                                'assets/images/the-chosen-heart/poster.png'
                            ) }}"
                            alt="The Chosen Heart"
                        >

                    </a>

                    <div class="sce-poster-info">

                        <span class="sce-session-num">
                            Session 05
                        </span>

                        <h3>
                            The Chosen Heart
                        </h3>

                        <p>
                            A journey through Arabia, the early
                            childhood of Prophet Muhammad ﷺ and
                            the remarkable event of the opening
                            of his blessed chest.
                        </p>

                        <a
                            href="{{ route(
                                'past-events.cycle-1.the-chosen-heart'
                            ) }}"
                            class="sc-textlink"
                        >
                            View Session Details
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </article>

                <!-- ==================================
                     06 THE PROPHET IN MAKING
                =================================== -->

                <article class="sce-event-poster">

                    <a
                        href="{{ route(
                            'past-events.cycle-1.the-prophet-in-making'
                        ) }}"
                        class="sce-poster-frame"
                    >

                        <img
                            src="{{ asset(
                                'assets/images/the-prophet-in-making/poster.jpg'
                            ) }}"
                            alt="The Prophet in Making"
                        >

                    </a>

                    <div class="sce-poster-info">

                        <span class="sce-session-num">
                            Session 06
                        </span>

                        <h3>
                            The Prophet in Making
                        </h3>

                        <p>
                            Exploring the early experiences that
                            nurtured the remarkable character,
                            leadership and compassion of
                            Prophet Muhammad ﷺ.
                        </p>

                        <a
                            href="{{ route(
                                'past-events.cycle-1.the-prophet-in-making'
                            ) }}"
                            class="sc-textlink"
                        >
                            View Session Details
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </article>

                <!-- ==================================
                     07 AS SAADIQ AL AMEEN
                =================================== -->

                <article class="sce-event-poster">

                    <a
                        href="{{ route(
                            'past-events.cycle-1.as-saadiq-al-ameen'
                        ) }}"
                        class="sce-poster-frame"
                    >

                        <img
                            src="{{ asset(
                                'assets/images/as-saadiq-al-ameen/poster.jpg'
                            ) }}"
                            alt="As Saadiq Al Ameen"
                        >

                    </a>

                    <div class="sce-poster-info">

                        <span class="sce-session-num">
                            Session 07
                        </span>

                        <h3>
                            As Saadiq Al Ameen
                        </h3>

                        <p>
                            Children learned about honesty,
                            trustworthiness, Hilf ul Fudool and
                            how noble character can become a
                            lifelong identity.
                        </p>

                        <a
                            href="{{ route(
                                'past-events.cycle-1.as-saadiq-al-ameen'
                            ) }}"
                            class="sc-textlink"
                        >
                            View Session Details
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </article>

                <!-- ==================================
                     08 AT TAAHIRAH
                =================================== -->

                <article class="sce-event-poster">

                    <a
                        href="{{ route(
                            'past-events.cycle-1.at-taahirah'
                        ) }}"
                        class="sce-poster-frame"
                    >

                        <img
                            src="{{ asset(
                                'assets/images/at-taahirah/poster.png'
                            ) }}"
                            alt="At Taahirah"
                        >

                    </a>

                    <div class="sce-poster-info">

                        <span class="sce-session-num">
                            Session 08
                        </span>

                        <h3>
                            At Taahirah
                        </h3>

                        <p>
                            A session combining Seerah learning
                            with entrepreneurial activities such
                            as the Lemonade Stand and Mini CEO
                            challenges.
                        </p>

                        <a
                            href="{{ route(
                                'past-events.cycle-1.at-taahirah'
                            ) }}"
                            class="sc-textlink"
                        >
                            View Session Details
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </article>

                <!-- ==================================
                     09 THE FIRST RESPONDERS
                =================================== -->

                <article class="sce-event-poster">

                    <a
                        href="{{ route(
                            'past-events.cycle-1.the-first-responders'
                        ) }}"
                        class="sce-poster-frame"
                    >

                        <img
                            src="{{ asset(
                                'assets/images/the-first-responders/poster.jpg'
                            ) }}"
                            alt="The First Responders"
                        >

                    </a>

                    <div class="sce-poster-info">

                        <span class="sce-session-num">
                            Session 09
                        </span>

                        <h3>
                            The First Responders
                        </h3>

                        <p>
                            Exploring the courage, faith and
                            devotion of those who were among the
                            earliest to respond to the message
                            of Islam.
                        </p>

                        <a
                            href="{{ route(
                                'past-events.cycle-1.the-first-responders'
                            ) }}"
                            class="sc-textlink"
                        >
                            View Session Details
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </article>

                <!-- ==================================
                     10 ISRA & MI'RAJ
                =================================== -->

                <article class="sce-event-poster">

                    <a
                        href="{{ route(
                            'past-events.cycle-1.isra-miraj'
                        ) }}"
                        class="sce-poster-frame"
                    >

                        <img
                            src="{{ asset(
                                'assets/images/isra-miraj/poster.png'
                            ) }}"
                            alt="Isra and Mi'raj"
                        >

                    </a>

                    <div class="sce-poster-info">

                        <span class="sce-session-num">
                            Session 10
                        </span>

                        <h3>
                            Isra & Mi’raj
                        </h3>

                        <p>
                            A memorable exploration of the
                            miraculous night journey, the gift
                            of Salah and the profound lessons
                            of faith and trust in Allah.
                        </p>

                        <a
                            href="{{ route(
                                'past-events.cycle-1.isra-miraj'
                            ) }}"
                            class="sc-textlink"
                        >
                            View Session Details
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </article>

                <!-- ==================================
                     11 HIJRAT TO MEDINA
                =================================== -->

                <article class="sce-event-poster">

                    <a
                        href="{{ route(
                            'past-events.cycle-1.hijrat-to-medina'
                        ) }}"
                        class="sce-poster-frame"
                    >

                        <img
                            src="{{ asset(
                                'assets/images/hijrat-to-medina/poster.jpg'
                            ) }}"
                            alt="Hijrat to Medina"
                        >

                    </a>

                    <div class="sce-poster-info">

                        <span class="sce-session-num">
                            Session 11
                        </span>

                        <h3>
                            Hijrat to Medina
                        </h3>

                        <p>
                            The journey of Hijrah brought lessons
                            of sacrifice, planning, courage,
                            companionship and complete reliance
                            upon Allah.
                        </p>

                        <a
                            href="{{ route(
                                'past-events.cycle-1.hijrat-to-medina'
                            ) }}"
                            class="sc-textlink"
                        >
                            View Session Details
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </article>

                <!-- ==================================
                     12 YOUNG HEARTS OF MECCA
                =================================== -->

                <article class="sce-event-poster">

                    <a
                        href="{{ route(
                            'past-events.cycle-1.young-hearts-of-mecca'
                        ) }}"
                        class="sce-poster-frame"
                    >

                        <img
                            src="{{ asset(
                                'assets/images/young-hearts-of-mecca/poster.jpg'
                            ) }}"
                            alt="Young Hearts of Mecca"
                        >

                    </a>

                    <div class="sce-poster-info">

                        <span class="sce-session-num">
                            Session 12
                        </span>

                        <h3>
                            Young Hearts of Mecca
                        </h3>

                        <p>
                            Reflecting on young believers whose
                            courage, conviction and love for
                            Islam made them part of an
                            extraordinary generation.
                        </p>

                        <a
                            href="{{ route(
                                'past-events.cycle-1.young-hearts-of-mecca'
                            ) }}"
                            class="sc-textlink"
                        >
                            View Session Details
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </article>

            </div>

            <!-- ======================================
                 CYCLE 2
            ======================================= -->

            <div
                class="sce-cycle-label"
                style="margin-top:90px;"
            >

                <div>

                    <span class="sc-eyebrow">
                        2026 Onwards
                    </span>

                    <h3>
                        Cycle 2 · The Journey Continues
                    </h3>

                </div>

                <a
                    href="{{ route(
                        'past-events.cycle-2-2026-onwards.index'
                    ) }}"
                    class="sc-textlink"
                >

                    Explore Cycle 2

                    <i class="fas fa-arrow-right"></i>

                </a>

            </div>

            <div class="sce-editorial-grid">

                <!-- ==================================
                     01 FIRST CALL IN MADINAH
                =================================== -->

                <article class="sce-event-poster">

                    <a
                        href="{{ route(
                            'past-events.cycle-2-2026-onwards.the-first-call-in-madinah'
                        ) }}"
                        class="sce-poster-frame"
                    >

                        <img
                            src="{{ asset(
                                'assets/images/first-call-in-madina/first-call-in-madinah.png'
                            ) }}"
                            alt="The First Call in Madinah"
                        >

                    </a>

                    <div class="sce-poster-info">

                        <span class="sce-session-num">
                            Session 01
                        </span>

                        <h3>
                            The First Call in Madinah
                        </h3>

                        <p>
                            Exploring the early days after Hijrah
                            and the establishment of the Adhan
                            in the growing Muslim community.
                        </p>

                        <a
                            href="{{ route(
                                'past-events.cycle-2-2026-onwards.the-first-call-in-madinah'
                            ) }}"
                            class="sc-textlink"
                        >
                            View Session Details
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </article>

                <!-- ==================================
                     02 ISTIQBAAL E RAMADAN
                =================================== -->

                <article class="sce-event-poster">

                    <a
                        href="{{ route(
                            'past-events.cycle-2-2026-onwards.istiqbaal-e-ramadan'
                        ) }}"
                        class="sce-poster-frame"
                    >

                        <img
                            src="{{ asset(
                                'assets/images/istiqbaal/10.jpg'
                            ) }}"
                            alt="Istiqbaal e Ramadan"
                        >

                    </a>

                    <div class="sce-poster-info">

                        <span class="sce-session-num">
                            Session 02
                        </span>

                        <h3>
                            Istiqbaal e Ramadan
                        </h3>

                        <p>
                            A session reflecting on preparation,
                            brotherhood and welcoming the
                            blessed month of Ramadan with
                            intention and purpose.
                        </p>

                        <a
                            href="{{ route(
                                'past-events.cycle-2-2026-onwards.istiqbaal-e-ramadan'
                            ) }}"
                            class="sc-textlink"
                        >
                            View Session Details
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </article>

                <!-- ==================================
                     03 BATTLE OF BADAR
                =================================== -->

                <article class="sce-event-poster">

                    <a
                        href="{{ route(
                            'past-events.cycle-2-2026-onwards.battle-of-badar'
                        ) }}"
                        class="sce-poster-frame"
                    >

                        <img
                            src="{{ asset(
                                'assets/images/battle-of-badar/hero.png'
                            ) }}"
                            alt="Battle of Badar"
                        >

                    </a>

                    <div class="sce-poster-info">

                        <span class="sce-session-num">
                            Session 03
                        </span>

                        <h3>
                            Battle of Badar
                        </h3>

                        <p>
                            Lessons of courage, preparation,
                            faith and reliance upon Allah from
                            one of the defining moments of the
                            Seerah.
                        </p>

                        <a
                            href="{{ route(
                                'past-events.cycle-2-2026-onwards.battle-of-badar'
                            ) }}"
                            class="sc-textlink"
                        >
                            View Session Details
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </article>

                <!-- ==================================
                     04 GHAZWA E UHUD
                =================================== -->

                <article class="sce-event-poster">

                    <a
                        href="{{ route(
                            'past-events.cycle-2-2026-onwards.ghazwa-e-uhud'
                        ) }}"
                        class="sce-poster-frame"
                    >

                        <img
                            src="{{ asset(
                                'assets/images/ghazwa-e-uhud/1.jpg'
                            ) }}"
                            alt="Ghazwa e Uhud"
                        >

                    </a>

                    <div class="sce-poster-info">

                        <span class="sce-session-num">
                            Session 04
                        </span>

                        <h3>
                            Ghazwa e Uhud
                        </h3>

                        <p>
                            An important Seerah chapter filled
                            with lessons about obedience,
                            resilience, leadership and learning
                            from difficult moments.
                        </p>

                        <a
                            href="{{ route(
                                'past-events.cycle-2-2026-onwards.ghazwa-e-uhud'
                            ) }}"
                            class="sc-textlink"
                        >
                            View Session Details
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </article>

                <!-- ==================================
                     05 GHAZWA E KHANDAQ
                =================================== -->

                <article class="sce-event-poster">

                    <a
                        href="{{ route(
                            'past-events.cycle-2-2026-onwards.ghazwa-e-khandaq'
                        ) }}"
                        class="sce-poster-frame"
                    >

                        <img
                            src="{{ asset(
                                'assets/images/ghazwa-e-khandaq/poster.jpg'
                            ) }}"
                            alt="Ghazwa e Khandaq"
                        >

                    </a>

                    <div class="sce-poster-info">

                        <span class="sce-session-num">
                            Session 05
                        </span>

                        <h3>
                            Ghazwa e Khandaq
                        </h3>

                        <p>
                            Strategy, teamwork, perseverance and
                            trust in Allah came together in one
                            of the most remarkable defensive
                            moments in the Seerah.
                        </p>

                        <a
                            href="{{ route(
                                'past-events.cycle-2-2026-onwards.ghazwa-e-khandaq'
                            ) }}"
                            class="sc-textlink"
                        >
                            View Session Details
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </article>

                <!-- ==================================
                     06 TREATY OF HUDAYBIA
                =================================== -->

                <article class="sce-event-poster">

                    <a
                        href="{{ route(
                            'past-events.cycle-2-2026-onwards.treaty-of-hudaybia'
                        ) }}"
                        class="sce-poster-frame"
                    >

                        <img
                            src="{{ asset(
                                'assets/images/treaty-of-hudaybia/poster.jpg'
                            ) }}"
                            alt="Treaty of Hudaybia"
                        >

                    </a>

                    <div class="sce-poster-info">

                        <span class="sce-session-num">
                            Session 06
                        </span>

                        <h3>
                            Treaty of Hudaybia
                        </h3>

                        <p>
                            Tawakkul, patience, keeping promises
                            and seeing wisdom beyond an apparent
                            setback through the Treaty of
                            Hudaybia.
                        </p>

                        <a
                            href="{{ route(
                                'past-events.cycle-2-2026-onwards.treaty-of-hudaybia'
                            ) }}"
                            class="sc-textlink"
                        >
                            View Session Details
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </article>

                <!-- ==================================
                     07 GHAZWA E KHYBER
                =================================== -->

                <article class="sce-event-poster">

                    <a
                        href="{{ route(
                            'past-events.cycle-2-2026-onwards.ghazwa-e-khyber'
                        ) }}"
                        class="sce-poster-frame"
                    >

                        <img
                            src="{{ asset(
                                'assets/images/ghazwa-e-khyber/poster.jpg'
                            ) }}"
                            alt="Ghazwa e Khyber"
                        >

                    </a>

                    <div class="sce-poster-info">

                        <span class="sce-session-num">
                            Session 07
                        </span>

                        <h3>
                            Ghazwa e Khyber
                        </h3>

                        <p>
                            A chapter of courage, determination,
                            leadership and the continuing growth
                            of the Muslim community.
                        </p>

                        <a
                            href="{{ route(
                                'past-events.cycle-2-2026-onwards.ghazwa-e-khyber'
                            ) }}"
                            class="sc-textlink"
                        >
                            View Session Details
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </article>

                <!-- ==================================
                     08 LETTERS TO KINGS
                =================================== -->

                <article class="sce-event-poster">

                    <a
                        href="{{ route(
                            'past-events.cycle-2-2026-onwards.letters-to-kings'
                        ) }}"
                        class="sce-poster-frame"
                    >

                        <img
                            src="{{ asset(
                                'assets/images/letter-king/poster.jpg'
                            ) }}"
                            alt="Letters to Kings"
                        >

                    </a>

                    <div class="sce-poster-info">

                        <span class="sce-session-num">
                            Session 08
                        </span>

                        <h3>
                            Letters to Kings
                        </h3>

                        <p>
                            Children explored how the message of
                            Islam travelled beyond Arabia through
                            letters, messengers and meaningful
                            communication.
                        </p>

                        <a
                            href="{{ route(
                                'past-events.cycle-2-2026-onwards.letters-to-kings'
                            ) }}"
                            class="sc-textlink"
                        >
                            View Session Details
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </article>

                <!-- ==================================
                     09 FATAH E MECCA
                =================================== -->

                <article class="sce-event-poster">

                    <a
                        href="{{ route(
                            'past-events.cycle-2-2026-onwards.fatah-e-mecca'
                        ) }}"
                        class="sce-poster-frame"
                    >

                        <img
                            src="{{ asset(
                                'assets/images/past-events.jpg'
                            ) }}"
                            alt="Fatah e Mecca"
                        >

                    </a>

                    <div class="sce-poster-info">

                        <span class="sce-session-num">
                            Session 09
                        </span>

                        <h3>
                            Fatah e Mecca
                        </h3>

                        <p>
                            A powerful chapter of victory,
                            humility, forgiveness and mercy as
                            Prophet Muhammad ﷺ returned to
                            Makkah.
                        </p>

                        <a
                            href="{{ route(
                                'past-events.cycle-2-2026-onwards.fatah-e-mecca'
                            ) }}"
                            class="sc-textlink"
                        >
                            View Session Details
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </article>

            </div>

        </div>

    </section>



</div>

@endsection
