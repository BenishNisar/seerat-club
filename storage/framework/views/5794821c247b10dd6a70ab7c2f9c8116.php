<?php $__env->startSection('title', 'Cycle 1 · Seerat Club Past Events'); ?>
<?php $__env->startSection("Content"); ?>

<?php
$events = [
 ['session'=>'Session 01','date'=>'5 October 2024','title'=>'Once Upon a Time in Jannat','description'=>'The story of Hazrat Adam (AS), the origins of humanity and the purpose of life.','image'=>'assets/images/once-upon-a-time-in-jannat/poster.jpg','route'=>'past-events.cycle-1.once-upon-a-time-in-jannat'],
 ['session'=>'Session 02','date'=>'Cycle 1','title'=>'The Friendly Fire','description'=>'A journey of discovery with Hazrat Ibrahim (AS), courage and standing for truth.','image'=>'assets/images/the-friendly-fire/posters.png','route'=>'past-events.cycle-1.the-friendly-fire'],
 ['session'=>'Session 03','date'=>'Cycle 1','title'=>'The Pursuit of Submission','description'=>'Qurbani, the Kaaba and what complete submission to Allah looks like in everyday life.','image'=>'assets/images/the-pursuit-of-submission/poster.png','route'=>'past-events.cycle-1.the-pursuit-of-submission'],
 ['session'=>'Session 04','date'=>'25 January 2025','title'=>'The Year of the Elephant','description'=>'Discovering the events of Aam ul Feel and the protection of the Sacred House.','image'=>'assets/images/the-year-of-the-elephant/poster.jpg','route'=>'past-events.cycle-1.the-year-of-the-elephant'],
 ['session'=>'Session 05','date'=>'Cycle 1','title'=>'The Chosen Heart','description'=>'The Prophet’s ﷺ early childhood, resilience and Allah’s care through every stage.','image'=>'assets/images/the-chosen-heart/poster.png','route'=>'past-events.cycle-1.the-chosen-heart'],
 ['session'=>'Session 06','date'=>'5 April 2025','title'=>'The Prophet in Making','description'=>'Everyday experiences that nurtured the remarkable character of Prophet Muhammad ﷺ.','image'=>'assets/images/the-prophet-in-making/poster.jpg','route'=>'past-events.cycle-1.the-prophet-in-making'],
 ['session'=>'Session 07','date'=>'17 May 2025','title'=>'As Saadiq Al Ameen','description'=>'Truthfulness, trust, justice and standing up for people whose rights are denied.','image'=>'assets/images/as-saadiq-al-ameen/poster.jpg','route'=>'past-events.cycle-1.as-saadiq-al-ameen'],
 ['session'=>'Session 08','date'=>'4 July 2025','title'=>'At Taahirah','description'=>'Hazrat Khadija (RA), enterprise, dignity and bringing Sunnah into daily life.','image'=>'assets/images/at-taahirah/poster.png','route'=>'past-events.cycle-1.at-taahirah'],
 ['session'=>'Session 09','date'=>'2 August 2025','title'=>'The First Responders','description'=>'The faith, sacrifice and character of the earliest believers who answered the call.','image'=>'assets/images/the-first-responders/poster.jpg','route'=>'past-events.cycle-1.the-first-responders'],
 ['session'=>'Session 10','date'=>'6 September 2025','title'=>'Isra & Mi’raj','description'=>'Hope through hardship, the gift of Salah and the significance of Masjid al Aqsa.','image'=>'assets/images/isra-miraj/poster.png','route'=>'past-events.cycle-1.isra-miraj'],
 ['session'=>'Session 11','date'=>'4 October 2025','title'=>'Hijrat to Medina','description'=>'Planning, courage and trust in Allah through the journey from Makkah to Madinah.','image'=>'assets/images/hijrat-to-medina/poster.jpg','route'=>'past-events.cycle-1.hijrat-to-medina'],
 ['session'=>'Session 12','date'=>'11 November 2025','title'=>'Young Hearts of Mecca','description'=>'Children around Prophet Muhammad ﷺ and a joyful close to the first Seerah cycle.','image'=>'assets/images/young-hearts-of-mecca/poster.jpg','route'=>'past-events.cycle-1.young-hearts-of-mecca'],
];
?>

<div class="ac-site ac-page c1-index-page">
    <section class="pe-index-hero" style="background-image:url('<?php echo e(asset('assets/images/once-upon-a-time-in-jannat/hero.jpg')); ?>');">
        <div class="ac-container">
            <nav class="ac-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo e(route('Home.welcome')); ?>">Home</a><span>/</span>
                <a href="<?php echo e(route('past-events.index')); ?>">Past Events</a><span>/</span>
                <span aria-current="page">Cycle 1</span>
            </nav>
            <span class="ac-eyebrow">SEERAT CLUB · 2024–2025</span>
            <h1>Cycle 1.<br><em>Where the journey began.</em></h1>
            <p>Twelve immersive chapters that introduced children to the Seerah through stories, reflection, creative activities and meaningful community experiences.</p>
        </div>
    </section>

    <section class="ac-section sc-svg-section pe-index-intro">
        <div class="ac-container">
            <nav class="ac-tabs" aria-label="Event cycles">
                <a href="<?php echo e(route('past-events.index')); ?>">All sessions</a>
                <a aria-current="page" href="<?php echo e(route('past-events.cycle-1.index')); ?>">Cycle 1</a>
                <a href="<?php echo e(route('past-events.cycle-2-2026-onwards.index')); ?>">Cycle 2 · 2026 onwards</a>
            </nav>
            <div class="pe-index-intro-grid">
                <div class="pe-index-intro-copy">
                    <span class="ac-eyebrow">THE FIRST TWELVE CHAPTERS</span>
                    <h2>A Seerah journey children could see, feel and remember.</h2>
                    <p>Cycle 1 moved chronologically through foundational stories and the early life of Prophet Muhammad ﷺ. Each gathering combined age-appropriate storytelling with practical activities so the lesson stayed with children beyond the session itself.</p>
                    <a class="ac-btn" href="#cycle-one-sessions">Explore all 12 sessions <i class="fas fa-arrow-down"></i></a>
                </div>
                <figure class="pe-index-intro-photo">
                    <img src="<?php echo e(asset('assets/images/young-hearts-of-mecca/hero.jpg')); ?>" alt="Children taking part in Seerat Club Cycle 1" loading="lazy">
                </figure>
            </div>
        </div>
    </section>

    <section class="ac-section sc-svg-section" id="cycle-one-sessions">
        <div class="ac-container">
            <div class="ac-heading">
                <span class="ac-eyebrow">CYCLE 1 · 12 SESSIONS</span>
                <h2>Explore every chapter.</h2>
                <p>Open any session to revisit its story, activities, photographs and learning highlights.</p>
            </div>
            <div class="ac-events-grid">
                <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="ac-event-card ac-card">
                        <a class="ac-event-cover" href="<?php echo e(route($event['route'])); ?>">
                            <img src="<?php echo e(asset($event['image'])); ?>" alt="<?php echo e($event['title']); ?>" loading="lazy">
                            <span>Cycle 1 · <?php echo e($event['session']); ?></span>
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




</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("Layout.layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Seerat-Club\resources\views/past-events/cycle-1/index.blade.php ENDPATH**/ ?>