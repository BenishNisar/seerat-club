<?php $__env->startSection('title', 'Ghazwa e Khyber · Seerat Club'); ?>

<?php $__env->startSection("Content"); ?>

<link
    href="<?php echo e(asset('assets/css/cycle2-event-pages.css')); ?>"
    rel="stylesheet"
>


<style>

    /* =========================================================
       VIDEO
    ========================================================= */

    .khyber-video-heading {
        max-width: 760px;
        margin-bottom: 34px;
    }

    .khyber-video-card {
        display: grid;
        grid-template-columns: 1.45fr .85fr;
        overflow: hidden;
        padding: 0;
        background: #ffffff;
    }

    .khyber-video-frame {
        position: relative;
        width: 100%;
        min-height: 440px;
        overflow: hidden;
        background: #111111;
    }

    .khyber-video-frame iframe {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }

    .khyber-video-copy {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 42px 36px;
    }

    .khyber-video-copy h3 {
        margin: 10px 0 14px;
        font-size: 30px;
        line-height: 1.2;
    }

    .khyber-video-copy p {
        margin: 0 0 24px;
    }

    .khyber-video-meta {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .khyber-video-meta span {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .khyber-video-meta i {
        color: #c9a24d;
    }


    /* =========================================================
       GALLERY
    ========================================================= */

    .ev-gallery-section .ev-section-heading {
        margin-bottom: 32px;
    }

    .ev-gallery {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 22px;
        width: 100%;
    }

    .ev-gallery-item {
        margin: 0;
        overflow: hidden;

        border:
            1px solid
            rgba(201,162,77,.18);

        border-radius: 22px;

        background: #ffffff;

        box-shadow:
            0 16px 40px
            rgba(35,45,28,.10);
    }

    .ev-gallery-item a {
        display: block;
        width: 100%;
        aspect-ratio: 4 / 3;
        overflow: hidden;
    }

    .ev-gallery-item img {
        display: block;
        width: 100%;
        height: 100%;

        object-fit: cover;
        object-position: center;

        transition: transform .45s ease;
    }

    .ev-gallery-item:hover img {
        transform: scale(1.035);
    }


    /* =========================================================
       RESPONSIVE
    ========================================================= */

    @media (max-width: 991px) {

        .ev-gallery {
            grid-template-columns:
                repeat(2, minmax(0, 1fr));
        }

    }


    @media (max-width: 900px) {

        .khyber-video-card {
            grid-template-columns: 1fr;
        }

        .khyber-video-frame {
            min-height: auto;
            aspect-ratio: 16 / 9;
        }

        .khyber-video-copy {
            padding: 28px 24px;
        }

    }


    @media (max-width: 650px) {

        .ev-gallery {
            grid-template-columns: 1fr;
            gap: 18px;
        }

    }

</style>



<div class="ac-site ac-page sc-cycle-event ghazwa-e-khyber-page">


    

    <section
        class="ac-masthead ev-hero"
        style="
            background:
                linear-gradient(
                    rgba(230,233,223,.90),
                    rgba(230,233,223,.90)
                ),
                url('<?php echo e(asset(
                    'assets/images/ghazwa-e-khyber/hero.jpg'
                )); ?>')
                center / cover no-repeat;
        "
    >


        <div
            aria-hidden="true"
            class="sc-hero-svg-decor"
        >

            <svg
                class="sc-hero-arch-svg"
                fill="none"
                viewBox="0 0 520 520"
                xmlns="http://www.w3.org/2000/svg"
            >

                <circle
                    cx="260"
                    cy="260"
                    r="220"
                    opacity=".18"
                    stroke="#c9a24d"
                    stroke-dasharray="6 8"
                    stroke-width="1.5"
                ></circle>


                <circle
                    cx="260"
                    cy="260"
                    r="175"
                    opacity=".12"
                    stroke="#e8cb82"
                    stroke-width="1.2"
                ></circle>


                <path
                    d="M90 460V230C90 128 166 56 260 24C354 56 430 128 430 230V460"
                    opacity=".22"
                    stroke="#c9a24d"
                    stroke-width="2"
                ></path>

            </svg>

        </div>



        <div class="ac-container">


            <nav
                class="ac-breadcrumb"
                aria-label="Breadcrumb"
            >

                <a href="<?php echo e(route('Home.welcome')); ?>">
                    Home
                </a>

                <span>/</span>

                <a href="<?php echo e(route('past-events.index')); ?>">
                    Past Events
                </a>

                <span>/</span>

                <a
                    href="<?php echo e(route(
                        'past-events.cycle-2-2026-onwards.index'
                    )); ?>"
                >
                    Cycle 2
                </a>

                <span>/</span>

                <span aria-current="page">
                    Ghazwa e Khyber
                </span>

            </nav>



            <div class="ev-hero-grid">


                <div class="ev-hero-copy">


                    <span class="ac-eyebrow">
                        CYCLE 2 · SESSION 07
                    </span>


                    <h1>
                        Ghazwa e Khyber
                    </h1>


                    <p class="ev-lead">

                        An engaging session exploring the events
                        of Khaybar through storytelling,
                        fort-building, reflection and practical
                        learning.

                    </p>



                    <div class="ev-meta">


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



                <figure class="ev-poster">


                    <a
                        data-fancybox="ghazwa-e-khyber-poster"
                        href="<?php echo e(asset(
                            'assets/images/ghazwa-e-khyber/poster.jpg'
                        )); ?>"
                    >

                        <img
                            src="<?php echo e(asset(
                                'assets/images/ghazwa-e-khyber/poster.jpg'
                            )); ?>"
                            alt="Ghazwa e Khyber event poster"
                            decoding="async"
                        >

                    </a>


                    <figcaption>

                        Ghazwa e Khyber · Seerat Club Cycle 2

                    </figcaption>


                </figure>


            </div>


        </div>


    </section>



    

    <section class="ac-section sc-svg-section ev-story" id="event-story">
        <div class="ac-container">
            <div class="ev-story-grid">
                <article class="ac-prose ev-copy">
                    <span class="ac-eyebrow">THE SESSION</span>
                    <h2>Patience · Planning · Tawakkul · Perseverance</h2>

                    <p class="ev-story-lead">On <strong>16th August ’26</strong>, Seerat Club held an engaging session, beginning with a group fort-building challenge where children used Jenga blocks and cups to construct forts inspired by the story of Khaybar.</p>

                    <h3>Why Do Believers Face Struggle?</h3>
                    <p>The discussion began with a thought-provoking question: <strong>Why did the Prophet Muhammad ﷺ and the early Muslims face so much struggle despite being beloved by Allah?</strong></p>
                    <p>To explain this, the children met <strong>Xing the Panda</strong>, who loved eating bamboo. They learnt how bamboo can spend a long time developing its roots before showing rapid growth. Similarly, <strong>Allah prepares believers through hardship before granting victory.</strong></p>

                    <h3>The Events Leading to Ghazwa-e-Khaybar</h3>
                    <p>The children were then taken through the events leading to <strong>Ghazwa-e-Khaybar</strong>, learning about Khyber’s fertile land, its strong fortresses, the strategy of taking the forts <strong>one by one</strong>, and the importance of patience and careful planning.</p>
                    <p><strong>Maulana Owais</strong> brought these events to life and highlighted the blessings that followed Khaybar, including the Muslims becoming financially self-sufficient.</p>

                    <h3>Four Key Lessons</h3>
                    <ul>
                        <li>🎯 <strong>Choose the right person</strong></li>
                        <li>🤲 <strong>Trust in Allah</strong></li>
                        <li>❤️ <strong>Treat others with kindness</strong></li>
                        <li>💪 <strong>Never give up trying</strong></li>
                    </ul>

                    <h3>Sword-Wielding Orientation</h3>
                    <p>The session concluded with an exciting <strong>sword-wielding orientation</strong>, where the children were introduced to basic sword-handling movements and skills in a supervised session led by <strong>Master Shahbaz and Master Umar Ali Shah</strong>.</p>
                </article>

                <aside class="ev-aside">
                    <div class="ev-lessons ac-card">
                        <span class="ac-eyebrow">KEY LESSONS</span>
                        <h3>Seerah made practical.</h3>
                        <p>Children connected the events of Khaybar with practical choices and challenges they can understand today.</p>
                        <div class="ev-points">
                            <span><i class="fas fa-bullseye"></i> Choose the right person</span>
                            <span><i class="fas fa-hands"></i> Trust in Allah</span>
                            <span><i class="fas fa-heart"></i> Treat others with kindness</span>
                            <span><i class="fas fa-hourglass-half"></i> Never give up trying</span>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>


    

    <section
        class="ac-section sc-svg-section ac-soft khyber-video-section"
    >


        <div class="ac-container">


            <div class="khyber-video-heading">


                <div class="ac-heading">


                    <span class="ac-eyebrow">
                        SESSION VIDEO
                    </span>


                    <h2>
                        Watch Ghazwa e Khyber.
                    </h2>


                    <p>

                        Revisit moments and learning from
                        Cycle 2 · Session 07.

                    </p>


                </div>


            </div>



            <article class="ac-card khyber-video-card">


                <div class="khyber-video-frame">


                    <iframe
                        src="https://www.youtube.com/embed/e2VxdmNsDC4?rel=0"
                        title="Ghazwa e Khyber Session Video"
                        loading="lazy"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen
                    ></iframe>


                </div>



                <div class="khyber-video-copy">


                    <span class="ac-eyebrow">
                        EVENT VIDEO
                    </span>


                    <h3>
                        Ghazwa e Khyber
                    </h3>


                    <p>

                        Watch highlights and memorable moments
                        from this Seerat Club session.

                    </p>



                    <div class="khyber-video-meta">


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

                            Patience & perseverance

                        </span>


                    </div>


                </div>


            </article>


        </div>


    </section>



    

    <section
        class="ac-section sc-svg-section ac-soft ev-gallery-section"
        id="event-gallery"
    >


        <div class="ac-container">


            <div class="ev-section-heading">


                <div class="ac-heading">


                    <span class="ac-eyebrow">
                        EVENT PICTURES
                    </span>


                    <h2>
                        Moments from Ghazwa e Khyber.
                    </h2>


                    <p>

                        Fort-building, storytelling, activities
                        and memorable moments from
                        Cycle 2 · Session 07.

                    </p>


                </div>


            </div>



            <div
                class="ev-gallery"
                aria-label="Ghazwa e Khyber event gallery"
            >


                <?php for($i = 1; $i <= 17; $i++): ?>


                    <figure class="ev-gallery-item">


                        <a
                            data-fancybox="khyber-gallery"
                            href="<?php echo e(asset(
                                'assets/images/ghazwa-e-khyber/gallery/g'
                                . $i .
                                '.jpg'
                            )); ?>"
                        >


                            <img
                                src="<?php echo e(asset(
                                    'assets/images/ghazwa-e-khyber/gallery/g'
                                    . $i .
                                    '.jpg'
                                )); ?>"
                                alt="Ghazwa e Khyber event photograph <?php echo e($i); ?>"
                                loading="lazy"
                                decoding="async"
                            >


                        </a>


                    </figure>


                <?php endfor; ?>


            </div>


        </div>


    </section>



    

    <section class="ac-section sc-svg-section ev-cycle">


        <div class="ac-container">


            <div class="ac-heading">


                <span class="ac-eyebrow">
                    CONTINUE CYCLE 2
                </span>


                <h2>
                    Continue the Seerah journey.
                </h2>


            </div>



            <nav
                class="sc-chapter-links"
                aria-label="Event navigation"
            >


                <a
                    href="<?php echo e(route(
                        'past-events.cycle-2-2026-onwards.treaty-of-hudaybia'
                    )); ?>"
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
                    href="<?php echo e(route(
                        'past-events.cycle-2-2026-onwards.letters-to-kings'
                    )); ?>"
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make("Layout.layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Seerat-Club\resources\views/past-events/cycle-2-2026-onwards/ghazwa-e-khyber.blade.php ENDPATH**/ ?>