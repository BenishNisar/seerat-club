<?php $__env->startSection('title', 'Cycle 2 · Seerat Club Past Events'); ?>

<?php $__env->startSection("Content"); ?>

<link href="<?php echo e(asset('assets/css/cycle2-event-pages.css')); ?>" rel="stylesheet">

<style>
    .c2-index-page .c2-hero {
        position: relative;
        overflow: hidden;
        padding: 72px 0 86px;
        background:
            linear-gradient(90deg, rgba(22,50,42,.94), rgba(22,50,42,.73) 56%, rgba(22,50,42,.32)),
            url('<?php echo e(asset('assets/images/ghazwa-e-khyber/hero.jpg')); ?>') center / cover no-repeat;
    }
    .c2-index-page .c2-hero .ac-container { position: relative; z-index: 2; }
    .c2-index-page .c2-hero .ac-breadcrumb,
    .c2-index-page .c2-hero .ac-breadcrumb a { color: rgba(255,255,255,.78); }
    .c2-index-page .c2-hero .ac-eyebrow { color: #e8cb82; }
    .c2-index-page .c2-hero h1 {
        max-width: 820px;
        margin: 18px 0 20px;
        color: #fff;
        font-size: clamp(52px, 7vw, 86px);
        line-height: .98;
    }
    .c2-index-page .c2-hero h1 em { color: #f2d99a; font-weight: 400; }
    .c2-index-page .c2-hero p {
        max-width: 690px;
        margin: 0;
        color: rgba(255,255,255,.82);
        font-size: 18px;
        line-height: 1.8;
    }
    .c2-index-page .c2-intro { background: #f5f7f3; }
    .c2-index-page .c2-intro-grid {
        display: grid;
        grid-template-columns: .9fr 1.1fr;
        gap: clamp(34px, 6vw, 78px);
        align-items: center;
    }
    .c2-index-page .c2-intro-copy h2 { margin-bottom: 18px; }
    .c2-index-page .c2-intro-copy p { color: #53615c; line-height: 1.8; }
    .c2-index-page .c2-intro-photo {
        overflow: hidden;
        min-height: 390px;
        border-radius: 28px;
        box-shadow: 0 24px 60px rgba(31,43,44,.12);
    }
    .c2-index-page .c2-intro-photo img { width: 100%; height: 100%; min-height: 390px; object-fit: cover; }
    .c2-index-page .ac-event-card { overflow: hidden; }
    .c2-index-page .ac-event-cover { min-height: 260px; background: #dfe5db; }
    .c2-index-page .ac-event-cover img { width: 100%; height: 100%; min-height: 260px; object-fit: cover; }
    .c2-index-page .c2-current { background: #ebe9df; }
    .c2-index-page .c2-current-card {
        display: grid;
        grid-template-columns: minmax(0,1fr) minmax(300px,.65fr);
        gap: 36px;
        align-items: center;
        padding: 34px;
        border-radius: 28px;
        background: #16322a;
        color: #fff;
    }
    .c2-index-page .c2-current-card h2 { color: #f6dda4; margin: 10px 0 14px; }
    .c2-index-page .c2-current-card p { color: rgba(255,255,255,.78); }
    .c2-index-page .c2-current-card img { width: 100%; border-radius: 20px; }
    @media(max-width: 850px) {
        .c2-index-page .c2-intro-grid,
        .c2-index-page .c2-current-card { grid-template-columns: 1fr; }
    }
</style>

<?php
    $cycleTwoEvents = [
        [
            'session' => 'Session 01',
            'date' => '31 January 2026',
            'title' => 'The First Call in Madinah',
            'description' => 'The early Madinan community, the call to prayer and building a life around faith.',
            'image' => 'assets/images/first-call-in-madina/first-call-in-madinah.png',
            'route' => 'past-events.cycle-2-2026-onwards.the-first-call-in-madinah',
        ],
        [
            'session' => 'Session 02',
            'date' => '14 February 2026',
            'title' => 'Istiqbaal e Ramadan',
            'description' => 'Brotherhood, gratitude and preparing young hearts for Ramadan.',
            'image' => 'assets/images/istiqbaal/10.jpg',
            'route' => 'past-events.cycle-2-2026-onwards.istiqbaal-e-ramadan',
        ],
        [
            'session' => 'Session 03',
            'date' => '11 April 2026',
            'title' => 'Battle of Badar',
            'description' => 'Dua, trust in Allah, preparation and thoughtful strategy.',
            'image' => 'assets/images/battle-of-badar/hero.png',
            'route' => 'past-events.cycle-2-2026-onwards.battle-of-badar',
        ],
        [
            'session' => 'Session 04',
            'date' => '23 May 2026',
            'title' => 'Ghazwa e Uhud',
            'description' => 'Consultation, steadfastness and supporting one another through difficulty.',
            'image' => 'assets/images/ghazwa-e-uhud/1.jpg',
            'route' => 'past-events.cycle-2-2026-onwards.ghazwa-e-uhud',
        ],
        [
            'session' => 'Session 05',
            'date' => '2026',
            'title' => 'Ghazwa e Khandaq',
            'description' => 'Teamwork, strategy and perseverance during the Battle of the Trench.',
            'image' => 'assets/images/ghazwa-e-khandaq/poster.jpg',
            'route' => 'past-events.cycle-2-2026-onwards.ghazwa-e-khandaq',
        ],
        [
            'session' => 'Session 06',
            'date' => '2026',
            'title' => 'Treaty of Hudaybia',
            'description' => 'Patience, promises and recognising Allah’s wisdom beyond an apparent setback.',
            'image' => 'assets/images/treaty-of-hudaybia/poster.jpg',
            'route' => 'past-events.cycle-2-2026-onwards.treaty-of-hudaybia',
        ],
        [
            'session' => 'Session 07',
            'date' => '16 August 2026',
            'title' => 'Ghazwa e Khyber',
            'description' => 'Fort-building, careful planning, perseverance and trust in Allah.',
            'image' => 'assets/images/ghazwa-e-khyber/poster.jpg',
            'route' => 'past-events.cycle-2-2026-onwards.ghazwa-e-khyber',
        ],
        [
            'session' => 'Session 08',
            'date' => '26 September 2026',
            'title' => 'Letters to Kings',
            'description' => 'Geography, communication, responsibility and empathy across borders.',
            'image' => 'assets/images/letter-king/poster.jpg',
            'route' => 'past-events.cycle-2-2026-onwards.letters-to-kings',
        ],
        [
            'session' => 'Session 09',
            'date' => '18 October 2026',
            'title' => 'Fatah-e-Mecca',
            'description' => 'Victory with humility, mercy and forgiveness at the return to Makkah.',
            'image' => 'assets/images/past-events.jpg',
            'route' => 'past-events.cycle-2-2026-onwards.fatah-e-mecca',
        ],
    ];
?>

<div class="ac-site ac-page c2-index-page">
    <section class="c2-hero">
        <div class="ac-container">
            <nav class="ac-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo e(route('Home.welcome')); ?>">Home</a>
                <span>/</span>
                <a href="<?php echo e(route('past-events.index')); ?>">Past Events</a>
                <span>/</span>
                <span aria-current="page">Cycle 2</span>
            </nav>
            <span class="ac-eyebrow">SEERAT CLUB · 2026 ONWARDS</span>
            <h1>Cycle 2.<br><em>The journey continues.</em></h1>
            <p>Follow the next chapter of Seerat Club as children move through the Madinan years of the Seerah with stories, hands-on activities, reflection and community learning.</p>
        </div>
    </section>

    <section class="ac-section sc-svg-section c2-intro">
        <div class="ac-container">
            <nav class="ac-tabs" aria-label="Event cycles">
                <a href="<?php echo e(route('past-events.index')); ?>">All sessions</a>
                <a href="<?php echo e(route('past-events.cycle-1.index')); ?>">Cycle 1</a>
                <a aria-current="page" href="<?php echo e(route('past-events.cycle-2-2026-onwards.index')); ?>">Cycle 2 · 2026 onwards</a>
            </nav>
            <div class="c2-intro-grid">
                <div class="c2-intro-copy">
                    <span class="ac-eyebrow">A NEW CHAPTER</span>
                    <h2>Seerah learning that children can experience.</h2>
                    <p>Cycle 2 carries the journey into Madinah and beyond. Each session combines authentic storytelling with age-appropriate activities so children can understand the event, reflect on its lessons and connect those lessons with daily life.</p>
                    <a class="ac-btn" href="<?php echo e(route('Home.registration')); ?>">Join Seerat Club <i class="fas fa-arrow-right"></i></a>
                </div>
                <figure class="c2-intro-photo">
                    <img src="<?php echo e(asset('assets/images/ghazwa-e-khyber/hero.jpg')); ?>" alt="Children taking part in a Seerat Club Cycle 2 activity" loading="lazy">
                </figure>
            </div>
        </div>
    </section>

    <section class="ac-section sc-svg-section">
        <div class="ac-container">
            <div class="ac-heading">
                <span class="ac-eyebrow">CYCLE 2</span>
                <h2>Every session in order.</h2>
                <p>Explore the complete Cycle 2 journey through the event pages below.</p>
            </div>

            <div class="ac-events-grid">
                <?php $__currentLoopData = $cycleTwoEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="ac-event-card ac-card">
                        <a class="ac-event-cover" href="<?php echo e(route($event['route'])); ?>">
                            <img src="<?php echo e(asset($event['image'])); ?>" alt="<?php echo e($event['title']); ?>" loading="lazy">
                            <span>Cycle 2 · <?php echo e($event['session']); ?></span>
                        </a>
                        <div class="ac-event-body">
                            <span class="ac-eyebrow"><?php echo e($event['date']); ?></span>
                            <h3><a href="<?php echo e(route($event['route'])); ?>"><?php echo e($event['title']); ?></a></h3>
                            <p><?php echo e($event['description']); ?></p>
                            <a class="ac-textlink" href="<?php echo e(route($event['route'])); ?>">Explore session <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <section class="ac-section sc-svg-section c2-current">
        <div class="ac-container">
            <div class="c2-current-card">
                <div>
                    <span class="ac-eyebrow">LATEST CHAPTER · 18 OCTOBER 2026</span>
                    <h2>Fatah-e-Mecca</h2>
                    <p>Continue the chronological Seerah journey with a powerful lesson in victory, humility, forgiveness and mercy.</p>
                    <a class="ac-btn" href="<?php echo e(route('past-events.cycle-2-2026-onwards.fatah-e-mecca')); ?>">Explore latest session <i class="fas fa-arrow-right"></i></a>
                </div>
                <img src="<?php echo e(asset('assets/images/ghazwa-e-khyber/hero.jpg')); ?>" alt="Seerat Club Cycle 2" loading="lazy">
            </div>
        </div>
    </section>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("Layout.layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Seerat-Club\resources\views/past-events/cycle-2-2026-onwards/index.blade.php ENDPATH**/ ?>