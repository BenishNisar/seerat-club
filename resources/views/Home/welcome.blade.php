@extends("Layout.layout")
@section('title', 'Seerat Club for Kids — Involving Kids, Building Communities')
@section("Content")

<style>
/* =====================================
   SEERAT CLUB ENDING VIDEO
===================================== */
/* =====================================
   SEERAT CLUB ENDING VIDEO SECTION
===================================== */

.sc-ending-video {
    width: 100%;
    margin: 0 !important;
    padding: 20px 0 50px !important;
    background: #fff8eb;
    overflow: hidden;
}


/* =====================================
   CONTAINER
===================================== */

.sc-ending-video .container {
    width: 100%;
    max-width: 1380px;
    margin: 0 auto !important;
    padding-left: 30px;
    padding-right: 30px;
    padding-top: 0 !important;
}


/* =====================================
   VIDEO WRAPPER
===================================== */

.sc-ending-video-wrap {
    position: relative;
    width: 100%;
    height: 560px;

    margin: 0 !important;
    padding: 0 !important;

    overflow: hidden;

    border-radius: 28px;

    background: #172824;

    box-shadow:
        0 18px 45px rgba(20, 40, 34, 0.12);
}


/* =====================================
   VIDEO
===================================== */

.sc-ending-video-player {
    width: 100%;
    height: 100%;

    display: block;

    object-fit: cover;

    object-position: center 56%;

    margin: 0 !important;
    padding: 0 !important;

    border: 0;
    outline: none;
}


/* =====================================
   REMOVE EXTRA SPACE FROM PREVIOUS AREA
===================================== */

.sc-ending-video {
    margin-top: 0 !important;
}

.sc-ending-video > *:first-child {
    margin-top: 0 !important;
}

.sc-ending-video-wrap:first-child {
    margin-top: 0 !important;
}


/* =====================================
   IF PREVIOUS SECTION HAS GAP CLASS
===================================== */

.sc-ending-video .gap,
.sc-ending-video .no-gap {
    margin: 0 !important;
    padding: 0 !important;
}


/* =====================================
   TABLET
===================================== */

@media (max-width: 991px) {

    .sc-ending-video {
        padding: 18px 0 40px !important;
    }

    .sc-ending-video .container {
        padding-left: 22px;
        padding-right: 22px;
    }

    .sc-ending-video-wrap {
        height: 470px;
        border-radius: 22px;
    }

    .sc-ending-video-player {
        object-position: center 55%;
    }

}


/* =====================================
   MOBILE
===================================== */

@media (max-width: 767px) {

    .sc-ending-video {
        padding: 15px 0 32px !important;
    }

    .sc-ending-video .container {
        padding-left: 15px;
        padding-right: 15px;
    }

    .sc-ending-video-wrap {
        height: 330px;
        border-radius: 18px;
    }

    .sc-ending-video-player {
        object-position: center center;
    }

}


/* =====================================
   SMALL MOBILE
===================================== */

@media (max-width: 480px) {

    .sc-ending-video {
        padding: 12px 0 25px !important;
    }

    .sc-ending-video-wrap {
        height: 270px;
        border-radius: 14px;
    }

}

</style>
@php
    $heroPrimary = $homeContent->get('hero_primary');
    $heroSecondary = $homeContent->get('hero_secondary');
    $introBlock = $homeContent->get('intro');
    $featuredBlock = $homeContent->get('featured_events');
    $eventImage = function ($path, $fallback = 'assets/images/seerat-pdf/page-17-img-1.jpeg') {
        if (!$path) return asset($fallback);
        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) return $path;
        if (str_starts_with($path, 'assets/') || str_starts_with($path, 'storage/')) return asset($path);
        return asset('storage/'.$path);
    };
    $contentImage = function ($path, $fallback) {
        $path = $path ?: $fallback;
        return str_starts_with($path, 'http://') || str_starts_with($path, 'https://')
            ? $path
            : (str_starts_with($path, 'storage/') ? asset($path) : asset($path));
    };
@endphp



 <!-- Responsive Header -->
   <div class="sc-home">
    <section>
     <div class="gap no-gap">
      <!--<img class="botm-shp shp-img" src="{{ asset('assets/images/shp1g.png') }}" alt="shp1.png">-->
      <div class="featured-area-wrap text-center">
       <div class="featured-area owl-carousel">
       <div class="featured-item" style="background-image: url('{{ $contentImage($heroPrimary?->image_path, 'assets/images/seerat-pdf/page-17-img-1.jpeg') }}');">
        <div class="featured-cap">
         <span class="sc-hero-kicker">{{ $heroPrimary?->metadata['kicker'] ?? 'SEERAT CLUB FOR KIDS · KARACHI' }}</span>
         <h1 class="sc-hero-title">{{ $heroPrimary?->title ?? 'My Prophet ﷺ, My Hero.' }}</h1>
         <p>{{ $heroPrimary?->subtitle ?? 'Monthly Seerah experiences for children aged 6 to 16, bringing stories, activities and reflection together at the Masjid.' }}</p>
         <div class="sc-hero-actions">
          <a class="sc-btn sc-btn-primary" href="{{ $heroPrimary?->link_url ?: route('Home.registration') }}">{{ $heroPrimary?->link_text ?? 'Register your child ↗' }}</a>
          <a class="sc-btn sc-btn-outline" href="{{ $heroPrimary?->metadata['secondary_link_url'] ?? '#sc-learning-journey' }}">{{ $heroPrimary?->metadata['secondary_link_text'] ?? 'Explore the journey' }}</a>
         </div>
        </div>
       </div>
       <div class="featured-item" style="background-image: url('{{ $contentImage($heroSecondary?->image_path, 'assets/images/seerat-pdf/page-12-img-1.jpeg') }}');">
        <div class="featured-cap">
         <span class="sc-hero-kicker">{{ $heroSecondary?->metadata['kicker'] ?? 'INTERACTIVE STORIES · ACTIVITIES · REFLECTION' }}</span>
         <h2 class="sc-hero-title">{{ $heroSecondary?->title ?? 'Stories to discover. Lessons to live.' }}</h2>
         <p>{{ $heroSecondary?->subtitle ?? 'Monthly Seerah experiences for children aged 6 to 16, bringing stories, activities and reflection together at the Masjid.' }}</p>
         <div class="sc-hero-actions">
          <a class="sc-btn sc-btn-primary" href="{{ $heroSecondary?->link_url ?: route('Home.registration') }}">{{ $heroSecondary?->link_text ?? 'Register your child ↗' }}</a>
          <a class="sc-btn sc-btn-outline" href="{{ $heroSecondary?->metadata['secondary_link_url'] ?? '#sc-learning-journey' }}">{{ $heroSecondary?->metadata['secondary_link_text'] ?? 'Explore the journey' }}</a>
         </div>
        </div>
       </div>
      </div>
     </div>
      <!-- Featured Area Wrap -->
     </div>
    </section>
    <!-- Slider Area -->
    <section class="sc-intro sc-svg-section" id="about">
     <div class="sc-container sc-intro-grid">
      <div class="sc-intro-photo">
       <img alt="A Seerat Club mentor guiding children during an activity" loading="lazy" src="{{ $contentImage($introBlock?->image_path, 'assets/images/seerat-pdf/page-12-img-1.jpeg') }}"/>
       <div class="sc-intro-note">
        <strong>
         My Prophet <span class="sc-salawat" lang="ar">ﷺ</span> , My Hero
        </strong>
        <span>
         Seerah made meaningful, memorable and relevant to everyday life.
        </span>
       </div>
      </div>
      <div>
       <span class="sc-eyebrow">
        <svg aria-hidden="true" class="sc-label-svg" fill="none" focusable="false" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewbox="0 0 24 24">
         <path d="M4 6c3-1 6-1 8 1 2-2 5-2 8-1v13c-3-1-6-1-8 1-2-2-5-2-8-1Z">
         </path>
         <path d="M12 7v13M7 10h2m-2 4h2m6-4h2m-2 4h2">
         </path>
        </svg>
        {{ $introBlock?->metadata['eyebrow'] ?? 'Why Seerat Club' }}
       </span>
       <h2 class="sc-title">
        {{ $introBlock?->title ?? 'Not another lesson. A place where faith becomes part of childhood.' }}
       </h2>
       <p class="sc-copy">
        {{ $introBlock?->body ?? 'A community based initiative for children aged 6 to 16, Seerat Club focuses on learning about the life of Prophet Muhammad ﷺ. Through monthly interactive stories, activities and reflection, children understand the Seerah and apply its lessons in daily life.' }}
       </p>
       <div class="sc-points">
        <div class="sc-point">
         <b>
          Authentic guidance
         </b>
         <span>
          Conducted under the guidance and supervision of Maulana Muhammad Owais.
         </span>
        </div>
        <div class="sc-point">
         <b>
          Monthly activity sessions
         </b>
         <span>
          Storytelling, hands-on activities and group discussions designed for meaningful learning.
         </span>
        </div>
        <div class="sc-point">
         <b>
          Masjid-centered community
         </b>
         <span>
          A supportive environment where children learn, grow and strengthen their relationship with the Masjid.
         </span>
        </div>
        <div class="sc-point">
         <b>
          Lessons for real life
         </b>
         <span>
          Children reflect on Seerah and connect Islamic values to situations they understand today.
         </span>
        </div>
       </div>
      </div>
     </div>
     <div aria-hidden="true" class="sc-section-seal">
      <svg aria-hidden="true" class="sc-section-icon" fill="none" focusable="false" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewbox="0 0 24 24">
       <path d="M4 6c3-1 6-1 8 1 2-2 5-2 8-1v13c-3-1-6-1-8 1-2-2-5-2-8-1Z">
       </path>
       <path d="M12 7v13M7 10h2m-2 4h2m6-4h2m-2 4h2">
       </path>
      </svg>
     </div>
    </section>
    <!-- about -->
    <!-- Seerat Club banner: immediately after About -->
    <section aria-label="The Seerat Club experience" class="sc-purpose-banner">
     <div class="sc-purpose-banner-container">
      <img alt="Seerat Club for children aged 6 to 16: discover Seerah through monthly stories, activities and reflection, connecting children with their faith and the Masjid." decoding="async" height="809" loading="lazy" src="{{ asset('assets/images/banner.png') }}" width="1942"/>
     </div>
    </section>
    <!-- Seerat Club activities -->
    <!-- What Children Experience -->
    <section aria-labelledby="sc-experience-title" class="sc-experience" id="sc-programs">
     <div class="sc-experience-container">
      <header class="sc-experience-heading">
       <span class="sc-experience-eyebrow">
        THE SEERAT CLUB EXPERIENCE
       </span>
       <h2 id="sc-experience-title">
        Welcome to Seerat Club
       </h2>
       <p>
        Stories to discover. Activities to explore.
        Seerah lessons to carry into everyday life.
       </p>
      </header>
      <div class="sc-experience-grid">
       <button class="sc-experience-card" data-sc-activity="scholar" type="button">
        <span class="sc-experience-icon">
         <svg aria-hidden="true" class="sc-service-svg" fill="none" focusable="false" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewbox="0 0 24 24">
          <path d="M4 6c3-1 6-1 8 1 2-2 5-2 8-1v13c-3-1-6-1-8 1-2-2-5-2-8-1Z">
          </path>
          <path d="M12 7v13M7 10h2m-2 4h2m6-4h2m-2 4h2">
          </path>
         </svg>
        </span>
        <span class="sc-experience-name">
         Scholar Guidance
        </span>
        <span class="sc-experience-hint">
         Discover more
         <span aria-hidden="true">
          ↗
         </span>
        </span>
       </button>
       <button class="sc-experience-card" data-sc-activity="stories" type="button">
        <span class="sc-experience-icon">
         <svg aria-hidden="true" class="sc-service-svg" fill="none" focusable="false" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewbox="0 0 24 24">
          <path d="M5 3h12a2 2 0 0 1 2 2v16H7a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3Z">
          </path>
          <path d="M7 17h12M8 7h7M8 11h5">
          </path>
         </svg>
        </span>
        <span class="sc-experience-name">
         Seerah Stories
        </span>
        <span class="sc-experience-hint">
         Discover more
         <span aria-hidden="true">
          ↗
         </span>
        </span>
       </button>
       <button class="sc-experience-card" data-sc-activity="practical" type="button">
        <span class="sc-experience-icon">
         <svg aria-hidden="true" class="sc-service-svg" fill="none" focusable="false" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewbox="0 0 24 24">
          <path d="m4 7 4-2 4 2-4 2Zm0 0v5l4 2 4-2V7M8 9v5m4 1 4-2 4 2-4 2Zm0 0v5l4 2 4-2v-5m-4 2v5">
          </path>
         </svg>
        </span>
        <span class="sc-experience-name">
         Practical Activities
        </span>
        <span class="sc-experience-hint">
         Discover more
         <span aria-hidden="true">
          ↗
         </span>
        </span>
       </button>
       <button class="sc-experience-card" data-sc-activity="reflection" type="button">
        <span class="sc-experience-icon">
         <svg aria-hidden="true" class="sc-service-svg" fill="none" focusable="false" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewbox="0 0 24 24">
          <path d="M20 5c-2-2-5-1-8 2-3-3-6-4-8-2-4 4 2 10 8 15 6-5 12-11 8-15Z">
          </path>
          <path d="m8 11 3 3 5-5">
          </path>
         </svg>
        </span>
        <span class="sc-experience-name">
         Reflection &amp; Character
        </span>
        <span class="sc-experience-hint">
         Discover more
         <span aria-hidden="true">
          ↗
         </span>
        </span>
       </button>
       <button class="sc-experience-card" data-sc-activity="monthly" type="button">
        <span class="sc-experience-icon">
         <svg aria-hidden="true" class="sc-service-svg" fill="none" focusable="false" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewbox="0 0 24 24">
          <rect height="16" rx="3" width="16" x="4" y="5">
          </rect>
          <path d="M8 3v5m8-5v5M4 11h16m-12 4h2m4 0h2m-8 3h2">
          </path>
         </svg>
        </span>
        <span class="sc-experience-name">
         Monthly Sessions
        </span>
        <span class="sc-experience-hint">
         Discover more
         <span aria-hidden="true">
          ↗
         </span>
        </span>
       </button>
       <button class="sc-experience-card" data-sc-activity="masjid" type="button">
        <span class="sc-experience-icon">
         <svg aria-hidden="true" class="sc-service-svg" fill="none" focusable="false" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewbox="0 0 24 24">
          <path d="M5 21V11m14 10V11M8 21v-8c0-3 4-5 4-5s4 2 4 5v8M3 21h18M4 8h2M18 8h2M10 21v-4a2 2 0 0 1 4 0v4">
          </path>
          <path d="M13 3a3 3 0 0 0 3 3 3 3 0 1 1-3-3Z">
          </path>
         </svg>
        </span>
        <span class="sc-experience-name">
         Masjid &amp; Community
        </span>
        <span class="sc-experience-hint">
         Discover more
         <span aria-hidden="true">
          ↗
         </span>
        </span>
       </button>
       <button class="sc-experience-card" data-sc-activity="discussions" type="button">
        <span class="sc-experience-icon">
         <svg aria-hidden="true" class="sc-service-svg" fill="none" focusable="false" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewbox="0 0 24 24">
          <path d="M20 11a7 7 0 0 1-7 7H8l-4 3v-6a7 7 0 0 1 1-12h8a7 7 0 0 1 7 8Z">
          </path>
          <path d="M8 8h8m-8 4h5">
          </path>
         </svg>
        </span>
        <span class="sc-experience-name">
         Group Discussions
        </span>
        <span class="sc-experience-hint">
         Discover more
         <span aria-hidden="true">
          ↗
         </span>
        </span>
       </button>
       <button class="sc-experience-card" data-sc-activity="map" type="button">
        <span class="sc-experience-icon">
         <svg aria-hidden="true" class="sc-service-svg" fill="none" focusable="false" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewbox="0 0 24 24">
          <circle cx="12" cy="12" r="9">
          </circle>
          <ellipse cx="12" cy="12" rx="4" ry="9">
          </ellipse>
          <path d="M3 12h18M5 6h14M5 18h14">
          </path>
         </svg>
        </span>
        <span class="sc-experience-name">
         World Map Activities
        </span>
        <span class="sc-experience-hint">
         Discover more
         <span aria-hidden="true">
          ↗
         </span>
        </span>
       </button>
       <button class="sc-experience-card" data-sc-activity="crafts" type="button">
        <span class="sc-experience-icon">
         <svg aria-hidden="true" class="sc-service-svg" fill="none" focusable="false" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewbox="0 0 24 24">
          <path d="m5 16 11-11 3 3L8 19l-5 2Zm9-9 3 3M4 17l3 3M17 3l4 4">
          </path>
         </svg>
        </span>
        <span class="sc-experience-name">
         Creative Crafts
        </span>
        <span class="sc-experience-hint">
         Discover more
         <span aria-hidden="true">
          ↗
         </span>
        </span>
       </button>
       <button class="sc-experience-card" data-sc-activity="mail" type="button">
        <span class="sc-experience-icon">
         <svg aria-hidden="true" class="sc-service-svg" fill="none" focusable="false" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewbox="0 0 24 24">
          <rect height="14" rx="3" width="18" x="3" y="5">
          </rect>
          <path d="m4 6 8 7 8-7M4 18l5-5m11 5-5-5">
          </path>
         </svg>
        </span>
        <span class="sc-experience-name">
         Friendship Mail
        </span>
        <span class="sc-experience-hint">
         Discover more
         <span aria-hidden="true">
          ↗
         </span>
        </span>
       </button>
       <button class="sc-experience-card" data-sc-activity="together" type="button">
        <span class="sc-experience-icon">
         <svg aria-hidden="true" class="sc-service-svg" fill="none" focusable="false" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewbox="0 0 24 24">
          <circle cx="9" cy="7" r="3">
          </circle>
          <path d="M3 21v-3a6 6 0 0 1 12 0v3m0-17a3 3 0 0 1 0 6m3 3a6 6 0 0 1 3 5v3">
          </path>
         </svg>
        </span>
        <span class="sc-experience-name">
         Learning Together
        </span>
        <span class="sc-experience-hint">
         Discover more
         <span aria-hidden="true">
          ↗
         </span>
        </span>
       </button>
       <a class="sc-experience-card sc-experience-more" href="#gallery">
        <span class="sc-experience-icon">
         <svg aria-hidden="true" class="sc-service-svg" fill="none" focusable="false" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewbox="0 0 24 24">
          <path d="M4 12h16m-6-6 6 6-6 6">
          </path>
         </svg>
        </span>
        <span class="sc-experience-name">
         See More Activities
        </span>
        <span class="sc-experience-hint">
         Explore the gallery
        </span>
       </a>
      </div>
     </div>
    </section>
    <dialog aria-describedby="sc-experience-dialog-intro" aria-labelledby="sc-experience-dialog-title" class="sc-experience-dialog" id="sc-experience-dialog">
     <div class="sc-experience-dialog-shell">
      <header class="sc-experience-dialog-header">
       <span class="sc-experience-dialog-eyebrow">
        MY PROPHET <span class="sc-salawat" lang="ar">ﷺ</span> , MY HERO
       </span>
       <button aria-label="Close activity details" autofocus="" class="sc-experience-close" type="button">
        <span aria-hidden="true">
         ×
        </span>
       </button>
      </header>
      <div class="sc-experience-dialog-body">
       <h2 id="sc-experience-dialog-title">
       </h2>
       <p id="sc-experience-dialog-intro">
        Meaningful experiences. Lessons for everyday life.
       </p>
       <div class="sc-experience-detail">
        <span aria-hidden="true" class="sc-experience-step">
         01
        </span>
        <div>
         <h3>
          What children experience
         </h3>
         <p id="sc-experience-activity-copy">
         </p>
        </div>
       </div>
       <div class="sc-experience-detail">
        <span aria-hidden="true" class="sc-experience-step">
         02
        </span>
        <div>
         <h3>
          The Islamic purpose
         </h3>
         <p id="sc-experience-purpose-copy">
         </p>
        </div>
       </div>
      </div>
      <footer class="sc-experience-dialog-footer">
       <a class="sc-experience-primary" href="{{ route('Home.registration') }}">
        Register Your Child
        <span aria-hidden="true">
         ↗
        </span>
       </a>
       <button class="sc-experience-secondary" type="button">
        Explore Other Activities
       </button>
      </footer>
     </div>
    </dialog>
    <!-- hear -->
    <!-- Interactive Activity Showcase -->
    <section aria-labelledby="scd-title" aria-roledescription="carousel" class="sc-svg-section" id="sc-discovery" role="region">
     <!-- Heading -->
     <div class="scd-heading">
      <span class="scd-eyebrow">
       <svg aria-hidden="true" class="sc-label-svg" fill="none" focusable="false" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewbox="0 0 24 24">
        <circle cx="12" cy="12" r="9">
        </circle>
        <ellipse cx="12" cy="12" rx="4" ry="9">
        </ellipse>
        <path d="M3 12h18M5 6h14M5 18h14">
        </path>
       </svg>
       SEERAH THROUGH EXPERIENCES
      </span>
      <h2 id="scd-title">
       Little hands.
       <br/>
       <span>
        Meaningful discoveries.
       </span>
      </h2>
      <p>
       Stories to understand. Activities to explore.
      Lessons for everyday life.
      </p>
     </div>
     <!-- Photograph carousel -->
     <div class="scd-stage">
      <span aria-hidden="true" class="scd-ghost">
       DISCOVER
      </span>
      <div aria-hidden="true" class="scd-orbit">
      </div>
      <figure aria-label="1 of 4: Discover the Seerah" aria-roledescription="slide" class="scd-photo" data-position="center" role="group">
       <img alt="A Seerat Club mentor guiding children during an activity" draggable="false" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-12-img-1.jpeg') }}"/>
       <figcaption>
        <span>
         THE STORY
        </span>
        <strong>
         Discover the Seerah
        </strong>
        <p>
         Meet the stories. Understand the lessons.
        </p>
       </figcaption>
      </figure>
      <figure aria-hidden="true" aria-label="2 of 4: Explore through activities" aria-roledescription="slide" class="scd-photo" data-position="right" role="group">
       <img alt="Children exploring the giant world map together" draggable="false" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-17-img-1.jpeg') }}"/>
       <figcaption>
        <span>
         THE DISCOVERY
        </span>
        <strong>
         Explore through activities
        </strong>
        <p>
         Create, explore and learn together.
        </p>
       </figcaption>
      </figure>
      <figure aria-hidden="true" aria-label="3 of 4: Put kindness into practice" aria-roledescription="slide" class="scd-photo" data-position="back" role="group">
       <img alt="Children preparing letters at the Friendship Mail station" draggable="false" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-23-img-1.jpeg') }}"/>
       <figcaption>
        <span>
         THE CONNECTION
        </span>
        <strong>
         Put kindness into practice
        </strong>
        <p>
         Turn a lesson into a caring action.
        </p>
       </figcaption>
      </figure>
      <figure aria-hidden="true" aria-label="4 of 4: Learn and belong" aria-roledescription="slide" class="scd-photo" data-position="left" role="group">
       <img alt="Children and volunteers learning together at Seerat Club" draggable="false" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-25-img-1.jpeg') }}"/>
       <figcaption>
        <span>
         THE COMMUNITY
        </span>
        <strong>
         Learn and belong
        </strong>
        <p>
         Friendship and learning, rooted in the Masjid.
        </p>
       </figcaption>
      </figure>
      <div aria-hidden="true" class="scd-badge">
       <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 32 32">
        <path d="M4 7c5-2 9-1 12 2 3-3 7-4 12-2v19c-5-2-9-1-12 2-3-3-7-4-12-2Z">
        </path>
        <path d="M16 9v19M8 13h4m-4 5h4m8-5h4m-4 5h4">
        </path>
       </svg>
       <span>
        My Prophet <span class="sc-salawat" lang="ar">ﷺ</span> <br/>
        My Hero
       </span>
      </div>
     </div>
     <!-- Changing message and navigation -->
     <div class="scd-message-area">
      <div aria-label="Carousel controls" class="scd-controls" role="group">
       <button aria-label="Previous activity" data-scd-direction="prev" type="button">
        <svg aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.7" viewbox="0 0 24 24">
         <path d="M19 12H5m6-6-6 6 6 6">
         </path>
        </svg>
       </button>
       <span class="scd-counter">
        <b data-scd-count="">
         01
        </b>
        / 04
       </span>
       <button aria-label="Next activity" data-scd-direction="next" type="button">
        <svg aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.7" viewbox="0 0 24 24">
         <path d="M5 12h14m-6-6 6 6-6 6">
         </path>
        </svg>
       </button>
      </div>
      <div class="scd-message">
       <span class="scd-message-label">
        THE EXPERIENCE &amp; ITS PURPOSE
       </span>
       <h3 data-scd-message-title="">
        Get to know their real hero.
       </h3>
       <p data-scd-message-copy="">
        Children discover the life and character of Prophet Muhammad <span class="sc-salawat" lang="ar">ﷺ</span> through interactive stories, helping them understand kindness,
        patience and choices in everyday life.
       </p>
      </div>
      <a class="scd-link" data-scd-link="" href="{{ route('past-events.cycle-2-2026-onwards.letters-to-kings') }}">
       <span>
        Explore the session
       </span>
       <svg aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.7" viewbox="0 0 24 24">
        <path d="M5 12h14m-6-6 6 6-6 6">
        </path>
       </svg>
      </a>
     </div>
     <span aria-atomic="true" aria-live="polite" class="scd-status" role="status">
     </span>
     <div aria-hidden="true" class="sc-section-seal">
      <svg aria-hidden="true" class="sc-section-icon" fill="none" focusable="false" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewbox="0 0 24 24">
       <circle cx="12" cy="12" r="9">
       </circle>
       <ellipse cx="12" cy="12" rx="4" ry="9">
       </ellipse>
       <path d="M3 12h18M5 6h14M5 18h14">
       </path>
      </svg>
     </div>
    </section>
    <!-- jpourney -->
    <!-- Step-by-Step Learning Path -->
    <section aria-labelledby="sc-learning-heading" class="sc-learning-section" id="sc-learning-journey">
     <!-- Reusable line icons -->
     <svg aria-hidden="true" class="sc-learning-symbols" xmlns="http://www.w3.org/2000/svg">
      <defs>
       <symbol id="sc-learning-book" viewbox="0 0 32 32">
        <path d="M16 8C12 4 6 4 2 6v21c5-2 10-1 14 2 4-3 9-4 14-2V6c-4-2-10-2-14 2Z">
        </path>
        <path d="M16 8v21M6 11h5M6 16h5m10-5h5m-5 5h5">
        </path>
       </symbol>
       <symbol id="sc-learning-compass" viewbox="0 0 32 32">
        <circle cx="16" cy="16" r="13">
        </circle>
        <path d="m22 9-4 10-9 4 4-10 9-4Z">
        </path>
        <path d="m13 13 5 6">
        </path>
       </symbol>
       <symbol id="sc-learning-thought" viewbox="0 0 32 32">
        <path d="M10 23c-5 0-8-3-8-8 0-3 2-6 5-7 1-4 7-6 11-3 5-1 10 3 10 8 3 6-2 12-8 11-3 3-7 3-10-1Z">
        </path>
        <circle cx="7" cy="27" r="2">
        </circle>
        <path d="m2 31 1-1">
        </path>
       </symbol>
       <symbol id="sc-learning-pencil" viewbox="0 0 32 32">
        <path d="m5 21 17-17a3 3 0 0 1 4 0l2 2a3 3 0 0 1 0 4L11 27l-8 2 2-8Z">
        </path>
        <path d="m19 7 6 6M5 21l6 6M4 25l3 3">
        </path>
       </symbol>
       <symbol id="sc-learning-people" viewbox="0 0 32 32">
        <circle cx="16" cy="9" r="5">
        </circle>
        <path d="M7 29v-5a9 9 0 0 1 18 0v5H7Z">
        </path>
        <path d="M6 7a4 4 0 0 0 0 8M26 7a4 4 0 0 1 0 8">
        </path>
        <path d="M5 18a7 7 0 0 0-4 7v3h3m23 0h4v-3a7 7 0 0 0-4-7">
        </path>
       </symbol>
       <symbol id="sc-learning-target" viewbox="0 0 32 32">
        <path d="M27 16a11 11 0 1 1-11-11">
        </path>
        <path d="M21 17a6 6 0 1 1-6-6">
        </path>
        <path d="m16 16 12-12m-7 0h7v7">
        </path>
       </symbol>
       <symbol id="sc-learning-arrow" viewbox="0 0 24 24">
        <path d="M4 12h16m-6-6 6 6-6 6">
        </path>
       </symbol>
       <symbol id="sc-learning-leaf" viewbox="0 0 100 160">
        <path d="M9 151C32 115 55 68 83 12">
        </path>
        <path d="M25 123C4 115 1 99 3 86c20 10 26 22 22 37Z">
        </path>
        <path d="M39 96c21 0 37-9 43-24-24 0-37 9-43 24Z">
        </path>
        <path d="M53 67C34 58 30 42 33 30c17 10 23 22 20 37Z">
        </path>
        <path d="M67 39c21-3 29-18 29-32-19 7-28 19-29 32Z">
        </path>
       </symbol>
      </defs>
     </svg>
     <!-- Background decoration -->
     <svg aria-hidden="true" class="sc-learning-arch" fill="none" viewbox="0 0 260 380">
      <path d="M20 370V190C20 99 81 53 130 15c49 38 110 84 110 175v180">
      </path>
      <path d="M40 370V193C40 112 89 73 130 40c41 33 90 72 90 153v177">
      </path>
      <path d="M130 17v84m-16 12 16-12 16 12v38h-32v-38Zm-4 39h40">
      </path>
     </svg>
     <svg aria-hidden="true" class="sc-learning-botanical sc-learning-botanical-start">
      <use href="#sc-learning-leaf">
      </use>
     </svg>
     <svg aria-hidden="true" class="sc-learning-botanical sc-learning-botanical-end">
      <use href="#sc-learning-leaf">
      </use>
     </svg>
     <div class="sc-learning-container">
      <header class="sc-learning-header">
       <p class="sc-learning-eyebrow">
        THE SEERAT CLUB LEARNING JOURNEY
       </p>
       <h2 id="sc-learning-heading">
        A learning chain that moves
        <br/>
        from
        <span>
         STORY to CHARACTER.
        </span>
       </h2>
       <p class="sc-learning-introduction">
        Children discover Seerah through stories, exploration,
        reflection and meaningful activities that help bring
        its lessons into everyday life.
       </p>
      </header>
      <div class="sc-learning-journey">
       <!-- Curved learning trail -->
       <svg aria-hidden="true" class="sc-learning-path" preserveaspectratio="none" viewbox="0 0 1200 280">
        <path d="M20 54
             C135 5 168 190 264 117
             S370 40 427 144
             S545 211 598 136
             S732 41 789 128
             S911 188 973 104
             S1118 40 1180 119">
        </path>
        <g>
         <circle cx="20" cy="54" r="5">
         </circle>
         <circle cx="264" cy="117" r="5">
         </circle>
         <circle cx="598" cy="136" r="5">
         </circle>
         <circle cx="973" cy="104" r="5">
         </circle>
         <circle cx="1180" cy="119" r="5">
         </circle>
        </g>
       </svg>
       <!-- Small map and stars -->
       <svg aria-hidden="true" class="sc-learning-doodles" preserveaspectratio="xMidYMid meet" viewbox="0 0 1200 300">
        <g>
         <path d="m465 35 20-8 18 8 20-8v35l-20 8-18-8-20 8V35Z">
         </path>
         <path d="M485 27v35m18-27v35m-28-23 5 5 7-9">
         </path>
         <path d="m242 22 3 7 8 1-6 5 2 8-7-4-7 4 2-8-6-5 8-1Z">
         </path>
         <path d="m1015 24 3 7 8 1-6 5 2 8-7-4-7 4 2-8-6-5 8-1Z">
         </path>
         <path d="m691 242 3 7 8 1-6 5 2 8-7-4-7 4 2-8-6-5 8-1Z">
         </path>
         <path d="m45 12-5-10m18 8-1-10m-24 19-9-5">
         </path>
        </g>
       </svg>
       <div aria-label="Choose a learning stage" class="sc-learning-cards" role="group">
        <button aria-controls="sc-learning-detail" aria-pressed="true" class="sc-learning-card is-active" data-sc-learning-step="discover" tabindex="0" type="button">
         <span class="sc-learning-number">
          01
         </span>
         <span class="sc-learning-card-image">
          <img alt="Children listening to a story with their teacher" decoding="async" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-12-img-1.jpeg') }}"/>
         </span>
         <span class="sc-learning-card-label">
          <svg aria-hidden="true" class="sc-learning-icon">
           <use href="#sc-learning-book">
           </use>
          </svg>
          <span>
           Discover
          </span>
         </span>
        </button>
        <button aria-controls="sc-learning-detail" aria-pressed="false" class="sc-learning-card" data-sc-learning-step="explore" tabindex="-1" type="button">
         <span class="sc-learning-number">
          02
         </span>
         <span class="sc-learning-card-image">
          <img alt="Children exploring a map together" decoding="async" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-17-img-1.jpeg') }}"/>
         </span>
         <span class="sc-learning-card-label">
          <svg aria-hidden="true" class="sc-learning-icon">
           <use href="#sc-learning-compass">
           </use>
          </svg>
          <span>
           Explore
          </span>
         </span>
        </button>
        <button aria-controls="sc-learning-detail" aria-pressed="false" class="sc-learning-card" data-sc-learning-step="reflect" tabindex="-1" type="button">
         <span class="sc-learning-number">
          03
         </span>
         <span class="sc-learning-card-image">
          <img alt="Children reflecting during a guided activity" decoding="async" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-11-img-1.jpeg') }}"/>
         </span>
         <span class="sc-learning-card-label">
          <svg aria-hidden="true" class="sc-learning-icon">
           <use href="#sc-learning-thought">
           </use>
          </svg>
          <span>
           Reflect
          </span>
         </span>
        </button>
        <button aria-controls="sc-learning-detail" aria-pressed="false" class="sc-learning-card" data-sc-learning-step="practice" tabindex="-1" type="button">
         <span class="sc-learning-number">
          04
         </span>
         <span class="sc-learning-card-image">
          <img alt="Children putting their learning into practice" decoding="async" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-23-img-1.jpeg') }}"/>
         </span>
         <span class="sc-learning-card-label">
          <svg aria-hidden="true" class="sc-learning-icon">
           <use href="#sc-learning-pencil">
           </use>
          </svg>
          <span>
           Practice
          </span>
         </span>
        </button>
        <button aria-controls="sc-learning-detail" aria-pressed="false" class="sc-learning-card" data-sc-learning-step="belong" tabindex="-1" type="button">
         <span class="sc-learning-number">
          05
         </span>
         <span class="sc-learning-card-image">
          <img alt="Children and volunteers learning together at the Masjid" decoding="async" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-25-img-1.jpeg') }}"/>
         </span>
         <span class="sc-learning-card-label">
          <svg aria-hidden="true" class="sc-learning-icon">
           <use href="#sc-learning-people">
           </use>
          </svg>
          <span>
           Belong
          </span>
         </span>
        </button>
       </div>
      </div>
      <article aria-labelledby="sc-learning-detail-heading" class="sc-learning-detail" id="sc-learning-detail" tabindex="0">
       <div class="sc-learning-detail-image">
        <img alt="Children listening to a story with their teacher" decoding="async" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-12-img-1.jpeg') }}"/>
        <span aria-hidden="true" class="sc-learning-image-fallback">
         <svg class="sc-learning-icon">
          <use href="#sc-learning-book">
          </use>
         </svg>
        </span>
       </div>
       <div class="sc-learning-detail-content">
        <p class="sc-learning-step-label">
         STEP 01 · DISCOVER
        </p>
        <h3 id="sc-learning-detail-heading">
         Meet the story.
         <br/>
         Discover its meaning.
        </h3>
        <p class="sc-learning-description">
         Children explore moments from the lives of the Prophets
          through engaging stories and guided discussion.
        </p>
        <div class="sc-learning-purpose">
          <span class="sc-purpose-fa-icon sc-learning-purpose-fa" aria-hidden="true"><i class="fas fa-compass"></i></span>
         <div>
          <h4>
           THE PURPOSE
          </h4>
          <p class="sc-learning-purpose-text">
           Begin understanding faith through the lives
              and examples of our Prophets.
          </p>
         </div>
        </div>
       </div>
      </article>
      <p aria-atomic="true" aria-live="polite" class="sc-learning-sr-only" role="status">
      </p>
      <footer class="sc-learning-footer">
       <div aria-hidden="true" class="sc-learning-divider">
        <span>
        </span>
        <svg viewbox="0 0 24 24">
         <path d="m12 2 3 7 7 3-7 3-3 7-3-7-7-3 7-3Z">
         </path>
        </svg>
        <span>
        </span>
       </div>
       <p class="sc-learning-statement">
        Every story becomes a lesson.
        <br/>
        Every lesson
        <span>
         shapes character.
        </span>
       </p>
       <a class="sc-learning-link" href="{{ route('past-events.index') }}">
        Explore the Seerah Journey
        <svg aria-hidden="true" class="sc-learning-icon">
         <use href="#sc-learning-arrow">
         </use>
        </svg>
       </a>
      </footer>
     </div>
    </section>
    <!-- Cycle 1 Story Trail -->
    <div aria-labelledby="trail-title" id="sc-story-trail">
     <!-- Shared decorative SVG family -->
     <svg aria-hidden="true" class="trail-symbols" xmlns="http://www.w3.org/2000/svg">
      <defs>
       <symbol id="trail-star" viewbox="0 0 24 24">
        <path d="M12 2 15 9 22 12 15 15 12 22 9 15 2 12 9 9Z">
        </path>
       </symbol>
       <symbol id="trail-arrow" viewbox="0 0 24 24">
        <path d="M5 12h14m-6-6 6 6-6 6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6">
        </path>
       </symbol>
       <symbol id="trail-book" viewbox="0 0 48 48">
        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
         <path d="M24 12C18 7 10 7 5 10v28c7-3 13-2 19 3 6-5 12-6 19-3V10c-5-3-13-3-19 2Z">
         </path>
         <path d="M24 12v29M11 16h7m-7 6h7m12-6h7m-7 6h7">
         </path>
         <path d="m24 2 2 4 4 1-4 2-2 4-2-4-4-2 4-1Z">
         </path>
        </g>
       </symbol>
       <symbol id="trail-botanical" viewbox="0 0 150 220">
        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.2">
         <path d="M20 210C30 160 80 100 111 10">
         </path>
         <path d="M47 153C14 151 9 125 12 111c28 7 41 20 35 42Z" fill="currentColor" fill-opacity=".24">
         </path>
         <path d="M65 124c29 4 52-8 58-29-29-2-49 7-58 29Z" fill="currentColor" fill-opacity=".28">
         </path>
         <path d="M83 83C55 79 46 56 49 43c25 7 38 20 34 40Z" fill="currentColor" fill-opacity=".25">
         </path>
         <path d="M98 52c23 2 40-12 43-29-23 1-38 11-43 29Z" fill="currentColor" fill-opacity=".3">
         </path>
         <path d="M32 179c21 2 35-4 47-20M74 105 41 88">
         </path>
        </g>
        <g fill="#e4cc97" stroke="#b79b62" stroke-width=".7">
         <circle cx="41" cy="88" r="4">
         </circle>
         <circle cx="41" cy="81" fill="#ffffff" r="4">
         </circle>
         <circle cx="47" cy="86" fill="#ffffff" r="4">
         </circle>
         <circle cx="45" cy="93" fill="#ffffff" r="4">
         </circle>
         <circle cx="37" cy="93" fill="#ffffff" r="4">
         </circle>
         <circle cx="35" cy="86" fill="#ffffff" r="4">
         </circle>
         <circle cx="41" cy="88" r="2.5">
         </circle>
        </g>
       </symbol>
      </defs>
     </svg>
     <svg aria-hidden="true" class="trail-botanical trail-botanical-start">
      <use href="#trail-botanical">
      </use>
     </svg>
     <svg aria-hidden="true" class="trail-botanical trail-botanical-end">
      <use href="#trail-botanical">
      </use>
     </svg>
     <div class="trail-heading">
      <span class="trail-eyebrow">
       THE SEERAH JOURNEY
      </span>
      <h2 id="trail-title">
       12 Sessions.
       <br/>
       One Meaningful Journey.
      </h2>
      <p>
       A chronological journey helping children discover Seerah
      through stories, reflection and meaningful activities.
      </p>
      <span class="trail-frequency">
       <svg aria-hidden="true">
        <use href="#trail-star">
        </use>
       </svg>
       Once a month, every month.
       <svg aria-hidden="true">
        <use href="#trail-star">
        </use>
       </svg>
      </span>
     </div>
     <div aria-label="Explore the twelve chapters of Cycle 1" class="trail-window" role="region" tabindex="0">
      <div class="trail-track">
       <svg aria-hidden="true" class="trail-path" preserveaspectratio="none" viewbox="0 0 1500 110">
        <path class="trail-path-shadow" d="M0 40 C60 40 70 45 125 45
             S205 85 250 65
             S320 35 375 45
             S455 85 500 65
             S570 35 625 45
             S705 85 750 65
             S820 35 875 45
             S955 85 1000 65
             S1070 35 1125 45
             S1205 85 1250 65
             S1320 35 1375 45
             S1450 80 1500 65">
        </path>
        <path class="trail-path-gold" d="M0 40 C60 40 70 45 125 45
             S205 85 250 65
             S320 35 375 45
             S455 85 500 65
             S570 35 625 45
             S705 85 750 65
             S820 35 875 45
             S955 85 1000 65
             S1070 35 1125 45
             S1205 85 1250 65
             S1320 35 1375 45
             S1450 80 1500 65">
        </path>
       </svg>
       <ol class="trail-list">
       </ol>
      </div>
     </div>
     <div class="trail-footer">
      <div aria-label="Journey controls" class="trail-controls">
       <button aria-label="Previous chapters" data-trail-prev="" type="button">
        <svg aria-hidden="true" style="transform: rotate(180deg)">
         <use href="#trail-arrow">
         </use>
        </svg>
       </button>
       <button aria-label="Next chapters" data-trail-next="" type="button">
        <svg aria-hidden="true">
         <use href="#trail-arrow">
         </use>
        </svg>
       </button>
      </div>
      <p>
       Follow the path. Discover each chapter.
      </p>
      <a class="trail-all" href="{{ route('past-events.cycle-1.index') }}">
       Explore Cycle 1 ↗
      </a>
     </div>
     <noscript>
      <p style="text-align: center; padding: 20px">
       <a href="{{ route('past-events.cycle-1.index') }}">
        Explore all twelve Seerah sessions
       </a>
      </p>
     </noscript>
    </div>
    <!-- END SEERAT CLUB LEARNING JOURNEY -->
    <!-- Featured Seerah Sessions -->
    <!-- Events -->
    {{-- <section aria-labelledby="sc-featured-heading" class="sc-featured-sessions sc-svg-section" id="sc-featured-sessions">
     <div class="sc-container">
      <div class="sc-featured-top">
       <div class="sc-featured-intro">
        <span class="sc-eyebrow">
         <svg aria-hidden="true" class="sc-label-svg" fill="none" focusable="false" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" viewbox="0 0 24 24">
          <path d="M4 6.5C4 5.4 4.9 4.5 6 4.5c2.4 0 4.5.8 6 2.2 1.5-1.4 3.6-2.2 6-2.2 1.1 0 2 .9 2 2v11c0 .8-.7 1.4-1.5 1.3-2.3-.3-4.5.4-6.5 1.9-2-1.5-4.2-2.2-6.5-1.9-.8.1-1.5-.5-1.5-1.3v-11Z">
          </path>
          <path d="M12 6.7v12.8">
          </path>
         </svg>
         Real Sessions · Real Learning
        </span>
        <h2 class="sc-title" id="sc-featured-heading">
         Seerah brought to life through
         <em>
          memorable
         </em>
         sessions.
        </h2>
       </div>
       <aside aria-label="Curriculum note" class="sc-featured-note">
        <span class="sc-featured-note-badge">
         Curriculum Note
        </span>
        <p>
         The journey follows key moments chronologically, while each monthly gathering at Shafqat Masjid is designed to instill a clear Islamic value and practical Sunnah.
        </p>
       </aside>
      </div>
      <div class="sc-featured-toolbar">
       <div class="sc-featured-kicker">
        <span aria-hidden="true" class="sc-featured-dot">
        </span>
        <span>
         Interactive Chapter Journal · Cycle 2 Highlights
        </span>
       </div>
       <div aria-label="Featured sessions navigation" class="sc-featured-controls">
        <button aria-label="Previous session card" class="sc-featured-arrow" id="prevBtn" type="button">
         <svg aria-hidden="true" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24">
          <path d="M15 18l-6-6 6-6">
          </path>
         </svg>
        </button>
        <button aria-label="Next session card" class="sc-featured-arrow" id="nextBtn" type="button">
         <svg aria-hidden="true" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24">
          <path d="M9 18l6-6-6-6">
          </path>
         </svg>
        </button>
       </div>
      </div>
      <div aria-label="Featured Seerat Club sessions" class="sc-featured-track" id="carouselTrack" role="region">
       @if($featuredEvents->isNotEmpty())
        @foreach($featuredEvents as $event)
         <article class="sc-featured-card {{ $loop->first ? 'sc-featured-card-dark' : '' }}">
          <div class="sc-featured-media">
           <img alt="{{ $event->title }} at Seerat Club" loading="lazy" src="{{ $eventImage($event->hero_image_path) }}"/>
           <span class="sc-featured-pill">{{ $event->cycle?->name ?? 'Seerat Club Event' }}</span>
          </div>
          <div class="sc-featured-body">
           <div>
            <span class="sc-featured-meta">{{ $event->event_date?->format('F Y') ?? 'Seerat Club' }}{{ $event->location ? ' · '.$event->location : '' }}</span>
            <h3><a href="{{ route('events.show',$event) }}">{{ $event->title }}</a></h3>
            <p>{{ $event->short_description ?: Illuminate\Support\Str::limit(strip_tags((string)$event->description), 180) }}</p>
           </div>
           <div class="sc-featured-footer"><a class="sc-featured-link" href="{{ route('events.show',$event) }}"><span>Explore the story</span><span aria-hidden="true">→</span></a></div>
          </div>
         </article>
        @endforeach
       @else
       <!-- Card 1: Fatah-e-Mecca -->
       <article class="sc-featured-card sc-featured-card-dark">
        <div class="sc-featured-media">
         <img alt="Fatah-e-Mecca session at Seerat Club" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-06-img-1.png') }}"/>
         <span class="sc-featured-pill">
          Latest Event · Cycle 2
         </span>
        </div>
        <div class="sc-featured-body">
         <div>
          <span class="sc-featured-meta">
           Forgiveness &amp; Humility · February 2026
          </span>
          <h3>
           <a href="{{ route('past-events.cycle-2-2026-onwards.fatah-e-mecca') }}">
            Fatah-e-Mecca
           </a>
          </h3>
          <p>
           An immersive session built around interactive storytelling, hands-on stations, and reflection on how the Prophet <span class="sc-salawat" lang="ar">ﷺ</span> entered Mecca with humility and mercy.
          </p>
         </div>
         <div class="sc-featured-footer">
          <a class="sc-featured-link" href="{{ route('past-events.cycle-2-2026-onwards.fatah-e-mecca') }}">
           <span>
            Explore the story
           </span>
           <span aria-hidden="true">
            →
           </span>
          </a>
         </div>
        </div>
       </article>
       <!-- Card 2: Letters to Kings -->
       <article class="sc-featured-card">
        <div class="sc-featured-media">
         <img alt="Letters to Kings world map activity at Seerat Club" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-14-img-1.jpeg') }}"/>
         <span class="sc-featured-pill">
          Session 8 · Cycle 2
         </span>
        </div>
        <div class="sc-featured-body">
         <div>
          <span class="sc-featured-meta">
           Wisdom &amp; Outreach · January 2026
          </span>
          <h3>
           <a href="{{ route('past-events.cycle-2-2026-onwards.letters-to-kings') }}">
            Letters to Kings
           </a>
          </h3>
          <p>
           Children reconstructed a life-size world map and explored the lands, rulers, and civilizations connected to the historic letters of Prophet Muhammad <span class="sc-salawat" lang="ar">ﷺ</span> .
          </p>
         </div>
         <div class="sc-featured-footer">
          <a class="sc-featured-link" href="{{ route('past-events.cycle-2-2026-onwards.letters-to-kings') }}">
           <span>
            Explore the story
           </span>
           <span aria-hidden="true">
            →
           </span>
          </a>
         </div>
        </div>
       </article>
       <!-- Card 3: Friendship Mail -->
       <article class="sc-featured-card">
        <div class="sc-featured-media">
         <img alt="Children writing Friendship Mail letters at Seerat Club" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-23-img-1.jpeg') }}"/>
         <span class="sc-featured-pill">
          Faith Into Action
         </span>
        </div>
        <div class="sc-featured-body">
         <div>
          <span class="sc-featured-meta">
           Empathy &amp; Brotherhood · Penpals Station
          </span>
          <h3>
           <a href="{{ route('past-events.cycle-2-2026-onwards.letters-to-kings') }}">
            Friendship Mail
           </a>
          </h3>
          <p>
           Children connected the historic message of the Seerah with heartfelt letters written and decorated for children in Palestine, turning empathy into action.
          </p>
         </div>
         <div class="sc-featured-footer">
          <a class="sc-featured-link" href="{{ route('past-events.cycle-2-2026-onwards.letters-to-kings') }}">
           <span>
            Explore the story
           </span>
           <span aria-hidden="true">
            →
           </span>
          </a>
         </div>
        </div>
       </article>
       <!-- Card 4: Ghazwa-e-Khyber -->
       <article class="sc-featured-card">
        <div class="sc-featured-media">
         <img alt="Teamwork challenge during Ghazwa-e-Khyber session" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-20-img-1.jpeg') }}"/>
         <span class="sc-featured-pill">
          Cycle 2 Chapter
         </span>
        </div>
        <div class="sc-featured-body">
         <div>
          <span class="sc-featured-meta">
           Courage &amp; Strategy · January 2026
          </span>
          <h3>
           <a href="{{ route('past-events.cycle-2-2026-onwards.ghazwa-e-khyber') }}">
            Ghazwa-e-Khyber
           </a>
          </h3>
          <p>
           Through cooperative building challenges and guided reflection, children learned how faith, preparation, and unity overcome seemingly impossible obstacles.
          </p>
         </div>
         <div class="sc-featured-footer">
          <a class="sc-featured-link" href="{{ route('past-events.cycle-2-2026-onwards.ghazwa-e-khyber') }}">
           <span>
            Explore the story
           </span>
           <span aria-hidden="true">
            →
           </span>
          </a>
         </div>
        </div>
       </article>
       <!-- Card 5: Treaty of Hudaybia -->
       <article class="sc-featured-card">
        <div class="sc-featured-media">
         <img alt="Treaty of Hudaybia reflection circle at Shafqat Masjid" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-15-img-1.jpeg') }}"/>
         <span class="sc-featured-pill">
          Cycle 2 Chapter
         </span>
        </div>
        <div class="sc-featured-body">
         <div>
          <span class="sc-featured-meta">
           Patience &amp; Vision · December 2025
          </span>
          <h3>
           <a href="{{ route('past-events.cycle-2-2026-onwards.treaty-of-hudaybia') }}">
            Treaty of Hudaybia
           </a>
          </h3>
          <p>
           Discovering why calm wisdom, keeping promises, and patience in difficult moments opened the door to lasting peace and the Clear Victory.
          </p>
         </div>
         <div class="sc-featured-footer">
          <a class="sc-featured-link" href="{{ route('past-events.cycle-2-2026-onwards.treaty-of-hudaybia') }}">
           <span>
            Explore the story
           </span>
           <span aria-hidden="true">
            →
           </span>
          </a>
         </div>
        </div>
       </article>
       @endif
      </div>
      <div class="sc-featured-bottom">
       <p>
        Each monthly gathering opens another chapter of the Seerah journey at Shafqat Masjid.
       </p>
       <a class="sc-featured-all" href="{{ route('events.index') }}">
        <span>
         Explore all events
        </span>
        <span aria-hidden="true">
         →
        </span>
       </a>
      </div>
     </div>
    </section> --}}


<section class="sc-ending-video">

    <div class="container">

        <div class="sc-ending-video-wrap">

            <video
                class="sc-ending-video-player"
                autoplay
                muted
                loop
                playsinline
                preload="metadata"
            >
                <source
                    src="{{ asset('assets/videos/seerat-club.mp4') }}"
                    type="video/mp4"
                >
            </video>

        </div>

    </div>

</section>



    <!-- blogs section -->
    <!-- Gallery -->
    <section class="sc-activity sc-svg-section" id="gallery">
     <div class="sc-container">
      <span class="sc-eyebrow">
       <svg aria-hidden="true" class="sc-label-svg" fill="none" focusable="false" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewbox="0 0 24 24">
        <path d="m5 16 11-11 3 3L8 19l-5 2Zm9-9 3 3M4 17l3 3M17 3l4 4">
        </path>
       </svg>
       Inside Seerat Club
      </span>
      <h2 class="sc-title" style="max-width:850px">
       Learning looks different when children are part of the story.
      </h2>
      <p class="sc-copy" style="max-width:760px">
       A glimpse into real Seerat Club moments — conversations, teamwork, creative activities, geography, reflection and community connection.
      </p>
      <div class="sc-activity-grid">
       <figure>
        <img alt="Children gathered around an interactive map" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-17-img-1.jpeg') }}"/>
        <figcaption>
         Learning together
        </figcaption>
       </figure>
       <figure>
        <img alt="Children in a group activity" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-11-img-1.jpeg') }}"/>
        <figcaption>
         Friendship &amp; discussion
        </figcaption>
       </figure>
       <figure>
        <img alt="Children participating in a hands-on station" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-13-img-1.jpeg') }}"/>
        <figcaption>
         Hands-on learning
        </figcaption>
       </figure>
       <figure>
        <img alt="Children building with cups during an activity" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-20-img-1.jpeg') }}"/>
        <figcaption>
         Creative challenges
        </figcaption>
       </figure>
       <figure>
        <img alt="Children at the Seerat Club penpals station" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-23-img-1.jpeg') }}"/>
        <figcaption>
         Small letters, big impact
        </figcaption>
       </figure>
       <figure>
        <img alt="Mentors and children in a learning circle" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-25-img-1.jpeg') }}"/>
        <figcaption>
         Mentorship
        </figcaption>
       </figure>
      </div>
     </div>
     <div aria-hidden="true" class="sc-section-seal">
      <svg aria-hidden="true" class="sc-section-icon" fill="none" focusable="false" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewbox="0 0 24 24">
       <path d="m5 16 11-11 3 3L8 19l-5 2Zm9-9 3 3M4 17l3 3M17 3l4 4">
       </path>
      </svg>
     </div>
    </section>
<!-- gallery -->


    <!-- Our Purpose -->
    <section class="sc-community sc-svg-section" id="community">
     <div class="sc-container sc-community-grid">
      <div>
       <span class="sc-eyebrow">
        <svg aria-hidden="true" class="sc-label-svg" fill="none" focusable="false" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewbox="0 0 24 24">
         <path d="M5 21V11m14 10V11M8 21v-8c0-3 4-5 4-5s4 2 4 5v8M3 21h18M4 8h2M18 8h2M10 21v-4a2 2 0 0 1 4 0v4">
         </path>
         <path d="M13 3a3 3 0 0 0 3 3 3 3 0 1 1-3-3Z">
         </path>
        </svg>
        Involving Kids · Building Communities
       </span>
       <h2 class="sc-title">
        The Masjid becomes a place children associate with learning, friendship and belonging.
       </h2>
       <p class="sc-copy">
        Seerat Club is designed around community. Children meet regularly in a supportive Masjid environment, learn with mentors, work with peers and build a relationship with faith that feels active rather than distant.
       </p>
       <div class="sc-community-cards">
        <div class="sc-community-card">
         <span class="sc-purpose-fa-icon" aria-hidden="true">
          <i class="fas fa-mosque"></i>
         </span>
         <div class="sc-community-card-body">
          <b>
           Faith
          </b>
          <span>Understand the Seerah and deepen connection with Allah.</span>
         </div>
        </div>
        <div class="sc-community-card">
         <span class="sc-purpose-fa-icon" aria-hidden="true">
          <i class="fas fa-heart"></i>
         </span>
         <div class="sc-community-card-body">
          <b>
           Character
          </b>
          <span>Translate lessons into courage, kindness and responsibility.</span>
         </div>
        </div>
        <div class="sc-community-card">
         <span class="sc-purpose-fa-icon" aria-hidden="true">
          <i class="fas fa-hands-helping"></i>
         </span>
         <div class="sc-community-card-body">
          <b>
           Friendship
          </b>
          <span>Learn beside other children in purposeful group experiences.</span>
         </div>
        </div>
        <div class="sc-community-card">
         <span class="sc-purpose-fa-icon" aria-hidden="true">
          <i class="fas fa-users"></i>
         </span>
         <div class="sc-community-card-body">
          <b>
           Community
          </b>
          <span>Strengthen the child’s connection with the Masjid and wider Ummah.</span>
         </div>
        </div>
       </div>
      </div>
      <div class="sc-community-visual">
       <img alt="Children gathered in the Masjid courtyard for a Seerat Club activity" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-20-img-1.jpeg') }}"/>
       <img alt="Shafqat Masjid venue" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-26-img-2.jpeg') }}"/>
      </div>
     </div>
     <div aria-hidden="true" class="sc-section-seal">
      <svg aria-hidden="true" class="sc-section-icon" fill="none" focusable="false" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewbox="0 0 24 24">
       <path d="M5 21V11m14 10V11M8 21v-8c0-3 4-5 4-5s4 2 4 5v8M3 21h18M4 8h2M18 8h2M10 21v-4a2 2 0 0 1 4 0v4">
       </path>
       <path d="M13 3a3 3 0 0 0 3 3 3 3 0 1 1-3-3Z">
       </path>
      </svg>
     </div>
    </section>



    <!-- Video & Social Showcase -->
 <section aria-labelledby="ss-heading-title" class="sc-svg-section" id="sc-social-showcase">
     <div class="ss-container">
      <div class="ss-heading">
       <span class="ss-eyebrow">
        <svg aria-hidden="true" class="sc-label-svg" fill="none" focusable="false" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewbox="0 0 24 24">
         <rect height="14" rx="4" width="18" x="3" y="5">
         </rect>
         <path d="m10 9 5 3-5 3Z">
         </path>
        </svg>
        Watch · Discover · Stay connected
       </span>
       <h2 id="ss-heading-title">
        Little moments.
        <br/>
        <span>
         Meaningful connections.
        </span>
       </h2>
       <p>
        Interactive stories, activities and reflection.
        Discover how Seerat Club helps children understand the
        Seerah and apply its lessons in daily life.
       </p>
      </div>
      <div class="ss-phones">
       <!-- PHONE 01 -->
       <article class="ss-phone">
        <div aria-hidden="true" class="ss-island">
        </div>
        <div class="ss-screen">
         <div class="ss-phone-brand">
          <span>
           SEERAT CLUB
          </span>
          <small>
           01 / DISCOVER
          </small>
         </div>
         <button aria-label="Play the Why Join Seerat Club video" class="ss-video" data-ss-title="Why Join Seerat Club?" data-ss-video="lU0z3_vfXTg" type="button">
          <img alt="Video featured in the Seerat Club Why Join section" decoding="async" height="360" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-14-img-1.jpeg') }}" width="480"/>
          <span aria-hidden="true" class="ss-play">
          </span>
         </button>
         <span class="ss-label">
          Why join?
         </span>
         <h3>
          My Prophet <span class="sc-salawat" lang="ar">ﷺ</span> ,
          <br/>
          My Hero.
         </h3>
         <p>
          A community-based initiative for children aged 6–16,
            focused on learning about the life of
            Prophet Muhammad <span class="sc-salawat" lang="ar">ﷺ</span> .
         </p>
         <ul class="ss-points">
          <li>
           Supervision by scholars
          </li>
          <li>
           Monthly activity sessions
          </li>
          <li>
           Masjid as a centre of community building
          </li>
         </ul>
         <div class="ss-actions">
          <button class="ss-action ss-action-secondary" data-ss-title="Seerat Club: First Podcast of the Season" data-ss-video="n4cmPgryveU" type="button">
           Our first podcast
           <span aria-hidden="true">
            ↗
           </span>
          </button>
         </div>
        </div>
        <div aria-hidden="true" class="ss-home-indicator">
        </div>
       </article>
       <!-- PHONE 02 -->
       <article class="ss-phone">
        <div aria-hidden="true" class="ss-island">
        </div>
        <div class="ss-screen">
         <div class="ss-phone-brand">
          <span>
           SEERAT CLUB
          </span>
          <small>
           02 / LISTEN
          </small>
         </div>
         <button aria-label="Play Deriving Leadership Skills from Seerat" class="ss-video" data-ss-title="Deriving Leadership Skills from Seerat" data-ss-video="UWEw7uQhOcA" type="button">
          <img alt="Preview of the podcast Deriving Leadership Skills from Seerat" decoding="async" height="360" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-11-img-1.jpeg') }}" width="480"/>
          <span aria-hidden="true" class="ss-play">
          </span>
         </button>
         <span class="ss-label">
          Seerat Club podcast
         </span>
         <h3>
          Deriving Leadership Skills from Seerat
         </h3>
         <p>
          Our goal is to educate, inspire and unite kids in
            understanding the Seerah while applying its
            lessons in daily life.
         </p>
         <div class="ss-actions">
          <button class="ss-action" data-ss-title="Deriving Leadership Skills from Seerat" data-ss-video="UWEw7uQhOcA" type="button">
           Watch the podcast
           <span aria-hidden="true">
            ↗
           </span>
          </button>
          <a class="ss-action ss-action-secondary" href="https://www.youtube.com/@SeeratClubForKids" rel="noopener noreferrer" target="_blank">
           Explore our YouTube
           <span aria-hidden="true">
            ↗
           </span>
          </a>
         </div>
        </div>
        <div aria-hidden="true" class="ss-home-indicator">
        </div>
       </article>
       <!-- PHONE 03 -->
       <article class="ss-phone">
        <div aria-hidden="true" class="ss-island">
        </div>
        <div class="ss-screen">
         <div class="ss-phone-brand">
          <span>
           SEERAT CLUB
          </span>
          <small>
           03 / EXPERIENCE
          </small>
         </div>
         <span class="ss-label">
          Stories into action
         </span>
         <h3>
          Letters to Kings.
         </h3>
         <p>
          From a life-size world map puzzle to heartfelt
            letters for children in Palestine, children explored
            how messages connect people across distances.
         </p>
         <button aria-label="Play the first video featured with Letters to Kings" class="ss-video" data-ss-title="Letters to Kings: Featured Video 1" data-ss-video="XQ-JtsOfX9s" type="button">
          <img alt="First video featured with the Letters to Kings session" decoding="async" height="360" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-19-img-1.jpeg') }}" width="480"/>
          <span aria-hidden="true" class="ss-play">
          </span>
         </button>
         <div class="ss-video-list">
          <button class="ss-mini-video" data-ss-title="Letters to Kings: Featured Video 2" data-ss-video="htx0206TjJ4" type="button">
           <img alt="" decoding="async" height="90" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-14-img-1.jpeg') }}" width="120"/>
           <span>
            Letters to Kings
            <small>
             Watch featured video 02 ↗
            </small>
           </span>
          </button>
          <button class="ss-mini-video" data-ss-title="Letters to Kings: Featured Video 3" data-ss-video="RE0TdycsdlI" type="button">
           <img alt="" decoding="async" height="90" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-23-img-1.jpeg') }}" width="120"/>
           <span>
            Letters to Kings
            <small>
             Watch featured video 03 ↗
            </small>
           </span>
          </button>
         </div>
        </div>
        <div aria-hidden="true" class="ss-home-indicator">
        </div>
       </article>
      </div>
      <!-- SOCIAL MEDIA LINKS -->
      <div class="ss-follow">
       <p>
        Stay connected with the Seerat Club community.
       </p>
       <div aria-label="Seerat Club social media" class="ss-social-links" role="group">
        <a aria-label="Seerat Club on YouTube, opens in a new tab" href="https://www.youtube.com/@SeeratClubForKids" rel="noopener noreferrer" target="_blank">
         YouTube
         <span aria-hidden="true">
          ↗
         </span>
        </a>
        <a aria-label="Seerat Club on Instagram, opens in a new tab" href="https://www.instagram.com/seeratclub/" rel="noopener noreferrer" target="_blank">
         Instagram
         <span aria-hidden="true">
          ↗
         </span>
        </a>
        <a aria-label="Seerat Club on Facebook, opens in a new tab" href="https://www.facebook.com/profile.php?id=61567792571640" rel="noopener noreferrer" target="_blank">
         Facebook
         <span aria-hidden="true">
          ↗
         </span>
        </a>
       </div>
      </div>
     </div>
     <div aria-hidden="true" class="sc-section-seal">
      <svg aria-hidden="true" class="sc-section-icon" fill="none" focusable="false" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewbox="0 0 24 24">
       <rect height="14" rx="4" width="18" x="3" y="5">
       </rect>
       <path d="m10 9 5 3-5 3Z">
       </path>
      </svg>
     </div>
    </section>
    <!-- VIDEO MODAL -->
    <dialog aria-labelledby="ss-player-title" id="sc-social-player">
     <div class="ss-player-top">
      <h3 id="ss-player-title">
       Seerat Club
      </h3>
      <button aria-label="Close video" class="ss-close" type="button">
       ×
      </button>
     </div>
     <div class="ss-player-frame">
     </div>
     <a class="ss-youtube-fallback" href="https://www.youtube.com/@SeeratClubForKids" rel="noopener noreferrer" target="_blank">
      Watch directly on YouTube ↗
     </a>
    </dialog>
    <!-- END SEERAT CLUB SOCIAL & VIDEO SECTION -->
    <!-- Session Chapter Highlights -->
    <!-- <section aria-labelledby="ec-title" class="sc-svg-section" id="sc-event-chapters">
     <div aria-hidden="true" class="ec-background">
      <img alt="" decoding="async" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-17-img-1.jpeg') }}"/>
     </div>
     <div class="ec-container">
      <div class="ec-intro">
       <span class="ec-eyebrow">
        <svg aria-hidden="true" viewbox="0 0 24 24">
         <path d="M3 5c3-1 6-1 9 1 3-2 6-2 9-1v14c-3-1-6-1-9 1-3-2-6-2-9-1Z">
         </path>
         <path d="M12 6v14">
         </path>
        </svg>
        Seerat Club experiences
       </span>
       <h2 id="ec-title">
        Every session opens
        <br/>
        <span>
         a new chapter.
        </span>
       </h2>
       <p>
        Stories to listen to. Activities to take part in.
        Lessons to reflect on. Explore moments from
        Seerat Club’s journey through Seerah.
       </p>
       <div class="ec-intro-actions">
        <a class="ec-link" href="https://www.seeratclub.pk/past-events" rel="noopener noreferrer" target="_blank">
         Explore past events
         <span aria-hidden="true">
          ↗
         </span>
        </a>
        <a class="ec-link ec-link-secondary" href="https://www.youtube.com/@SeeratClubForKids" rel="noopener noreferrer" target="_blank">
         Watch our videos
         <span aria-hidden="true">
          ↗
         </span>
        </a>
       </div>
      </div>
      <div class="ec-feature">
       <div class="ec-feature-copy">
        <span class="ec-label">
         Last event · 18 October 2026
        </span>
        <h3>
         Fatah-e-Mecca
         <span>
          Mission Accomplished · The Journey Home
         </span>
        </h3>
        <p>
         Explore the official event artwork, then browse
          photographs from the Letters to Kings session below.
        </p>
        <a class="ec-link ec-link-secondary" href="https://www.seeratclub.pk/past-events" rel="noopener noreferrer" target="_blank">
         Discover our sessions
         <span aria-hidden="true">
          ↗
         </span>
        </a>
       </div>
       <button aria-label="Open the complete Fatah-e-Mecca event poster" class="ec-poster" data-ec-image="assets/images/seerat-pdf/page-06-img-1.png" data-ec-title="Fatah-e-Mecca: official event poster" type="button">
        <img alt="Official Fatah-e-Mecca event poster" decoding="async" loading="lazy" src="{{ asset('assets/images/seerat-pdf/page-06-img-1.png') }}"/>
        <span aria-hidden="true" class="ec-expand">
         View full poster ↗
        </span>
       </button>
      </div>
      <div class="ec-gallery-top">
       <div>
        <span class="ec-label">
         Letters to Kings · Session gallery
        </span>
        <h3>
         See the learning unfold.
        </h3>
        <p>
         Children explored a life-size world map and wrote
          letters to children in Palestine, connecting
          Seerah with geography, friendship and sharing.
        </p>
       </div>
       <div aria-label="Gallery navigation" class="ec-controls" role="group">
        <button aria-controls="ec-photo-track" aria-label="Previous photographs" class="ec-arrow" data-ec-direction="-1" type="button">
         <svg aria-hidden="true" viewbox="0 0 24 24">
          <path d="M19 12H5m6-6-6 6 6 6">
          </path>
         </svg>
        </button>
        <button aria-controls="ec-photo-track" aria-label="Next photographs" class="ec-arrow" data-ec-direction="1" type="button">
         <svg aria-hidden="true" viewbox="0 0 24 24">
          <path d="M5 12h14m-6-6 6 6-6 6">
          </path>
         </svg>
        </button>
       </div>
      </div>
      <div aria-label="Letters to Kings photographs. Scroll horizontally to browse." class="ec-track" id="ec-photo-track" role="region" tabindex="0">
      </div>
      <p class="ec-gallery-note">
       Choose a photograph to see the complete image.
      Swipe sideways to explore more.
      </p>
      <noscript>
       <p>
        <a class="ec-link" href="https://www.seeratclub.pk/">
         View the photographs on Seerat Club’s website ↗
        </a>
       </p>
      </noscript>
     </div>
     <div aria-hidden="true" class="sc-section-seal">
      <svg aria-hidden="true" class="sc-section-icon" fill="none" focusable="false" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewbox="0 0 24 24">
       <rect height="14" rx="3" width="18" x="3" y="5">
       </rect>
       <path d="m4 6 8 7 8-7M4 18l5-5m11 5-5-5">
       </path>
      </svg>
     </div>
    </section>
    <dialog aria-labelledby="ec-viewer-title" id="sc-event-viewer">
     <div class="ec-viewer-top">
      <h3 id="ec-viewer-title">
       Seerat Club photograph
      </h3>
      <button aria-label="Close photograph" data-ec-close="" type="button">
       ×
      </button>
     </div>
     <img alt="" class="ec-full-image"/>
    </dialog> -->


<!-- =========================================================
     SEERAT CLUB
     LAST SESSION: LETTERS TO KINGS
========================================================= -->

<section
  aria-labelledby="ltk_title"
  class="ltk_section"
  id="sc-event-chapters"
>

  <!-- Background -->
  <div class="ltk_background" aria-hidden="true">
    <img
      src="{{ asset('assets/images/seerat-pdf/page-17-img-1.jpeg') }}"
      alt=""
      loading="lazy"
      decoding="async"
    />
  </div>

  <!-- Decorative Islamic Pattern -->
  <div class="ltk_pattern" aria-hidden="true"></div>


  <div class="ltk_container">

    <!-- =========================
         INTRO
    ========================== -->

    <header class="ltk_intro">

      <div class="ltk_intro_icon" aria-hidden="true">
        <svg viewBox="0 0 48 48">
          <path d="M7 11.5c6.6-2.5 12.3-1.6 17 2.3 4.7-3.9 10.4-4.8 17-2.3v25c-6.6-2.5-12.3-1.7-17 2.2-4.7-3.9-10.4-4.7-17-2.2z"></path>
          <path d="M24 14v24"></path>
        </svg>
      </div>

      <h2 id="ltk_title">
        Last Session:
        <span>Letters to Kings</span>
      </h2>

    </header>


    <!-- =========================
         BOOK STAGE
    ========================== -->

    <div class="ltk_book_stage">

      <div
        class="ltk_orbit ltk_orbit_one"
        aria-hidden="true"
      ></div>

      <div
        class="ltk_orbit ltk_orbit_two"
        aria-hidden="true"
      ></div>


      <!-- Floating Map Icon -->

      <div
        class="ltk_floating_icon ltk_icon_map"
        aria-hidden="true"
      >
        <svg viewBox="0 0 24 24">
          <path d="m3 6 5-2 8 3 5-2v13l-5 2-8-3-5 2z"></path>
          <path d="M8 4v13M16 7v13"></path>
        </svg>
      </div>


      <!-- Floating Letter Icon -->

      <div
        class="ltk_floating_icon ltk_icon_letter"
        aria-hidden="true"
      >
        <svg viewBox="0 0 24 24">
          <rect
            x="3"
            y="5"
            width="18"
            height="14"
            rx="2"
          ></rect>

          <path d="m4 7 8 6 8-6"></path>
        </svg>
      </div>


      <!-- =========================
           OPEN BOOK
      ========================== -->

      <article class="ltk_book">

        <div
          class="ltk_book_shadow"
          aria-hidden="true"
        ></div>


        <!-- =========================
             LEFT PAGE
        ========================== -->

        <div class="ltk_page ltk_page_left">

          <div class="ltk_page_inner">

            <div
              class="ltk_page_mark"
              aria-hidden="true"
            >
              <svg viewBox="0 0 32 32">
                <circle cx="16" cy="16" r="12"></circle>
                <path d="M16 8v16M8 16h16"></path>
              </svg>
            </div>


            <p>
              On 26th September 2026, Seerat Club held its 8th session at Masjid-e-Shafqat, Karachi, taking children on an interactive journey through the world beyond Arabia at the time of the Prophet Muhammad ﷺ.
            </p>

            <p>
              The session began outdoors in the Masjid verandah, where children worked together on a life-size world map puzzle, recreating the world around Arabia as it was approximately 1,400 years ago.
            </p>

            <p>
              Children pieced together the map and recreated landmarks representing the different kingdoms &amp; civilizations connected to the event theme— including the Pyramids of Egypt, the Colosseum of the Roman Empire, Takht-i-Bahi representing the Persian world, and a castle representing Abyssinia. Volunteers guided the children throughout the activity, helping them understand the geography while bringing the map and its landmarks to life.
            </p>

            <p>
              The map activity was followed by a briefing from Maulana Owais, who introduced the children to the letters sent by the Prophet Muhammad ﷺ to different rulers, inviting them towards Islam. The discussion highlighted how important it was to understand who should carry an important message, and how selecting the right person for the right responsibility can make a difference.
            </p>

            <p>
              Geography was woven into the Seerah as children identified the lands, civilizations and rulers connected to these letters, helping them visualize how the message of Islam travelled beyond the Arabian Peninsula.
            </p>

          </div>


          <span
            class="ltk_page_number"
            aria-hidden="true"
          >
            01
          </span>

        </div>


        <!-- =========================
             BOOK SPINE
        ========================== -->

        <div
          class="ltk_spine"
          aria-hidden="true"
        >
          <span></span>
        </div>


        <!-- =========================
             RIGHT PAGE
        ========================== -->

        <div class="ltk_page ltk_page_right">

          <div class="ltk_page_inner">

            <div
              class="ltk_page_mark"
              aria-hidden="true"
            >
              <svg viewBox="0 0 32 32">
                <path d="M6 9h20v14H6z"></path>
                <path d="m7 10 9 7 9-7"></path>
                <path d="M12 23v3h8v-3"></path>
              </svg>
            </div>


            <p>
              The session then moved from the historical letters of the Prophet ﷺ to the modern idea of a pen pal. Children learnt how letters can create friendships and connect people even when they live far apart.
            </p>

            <p>
              They then put the idea into practice by writing heartfelt letters to children in Palestine. Each child personalized their letter with drawings, stickers, colours and other decorations, before carefully placing it in an envelope and finishing it with a wax seal. The completed letters were then dropped into the Seerat Club post box to begin their journey.
            </p>

            <p>
              In a beautiful gesture, the children also decided to send the prizes from the letter-writing competition as gifts to the children who receive their letters in Palestine, turning their celebration into an act of sharing and friendship.
            </p>

            <p>
              InshaAllah, the letters will soon make their way to children in Gaza.
            </p>

            <p class="ltk_closing_text">
              From rebuilding a map of the world to writing a letter to a child thousands of kilometres away, the session helped children experience a simple but powerful idea: a message can travel far beyond the person who sends it.
            </p>

          </div>


          <span
            class="ltk_page_number"
            aria-hidden="true"
          >
            02
          </span>

        </div>

      </article>


      <!-- =========================
           GOLD LETTER SEAL
      ========================== -->

      <div
        class="ltk_seal"
        aria-hidden="true"
      >

        <svg viewBox="0 0 50 50">
          <path d="M11 16h28v20H11z"></path>
          <path d="m12 18 13 10 13-10"></path>
        </svg>

      </div>

    </div>


    <!-- =========================
         SESSION GALLERY
    ========================== -->

    <div class="ltk_gallery_header">

      <div class="ltk_gallery_heading">

        <span class="ltk_small_label">
          Letters to Kings · Session gallery
        </span>

        <h3>
          See the learning
          <span>unfold.</span>
        </h3>

      </div>


      <div
        class="ltk_gallery_controls"
        aria-label="Gallery navigation"
        role="group"
      >

        <button
          type="button"
          class="ec-arrow ltk_gallery_arrow"
          data-ec-direction="-1"
          aria-label="Previous photographs"
          aria-controls="ec-photo-track"
        >
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M19 12H5m6-6-6 6 6 6"></path>
          </svg>
        </button>


        <button
          type="button"
          class="ec-arrow ltk_gallery_arrow"
          data-ec-direction="1"
          aria-label="Next photographs"
          aria-controls="ec-photo-track"
        >
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M5 12h14m-6-6 6 6-6 6"></path>
          </svg>
        </button>

      </div>

    </div>


    <!-- Existing JS can populate this same track -->

    <div
      aria-label="Letters to Kings photographs. Scroll horizontally to browse."
      class="ec-track ltk_gallery_track"
      id="ec-photo-track"
      role="region"
      tabindex="0"
    >
    </div>


    <p class="ltk_gallery_note">
      Choose a photograph to see the complete image.
      Swipe sideways to explore more.
    </p>


    <!-- =========================
         ACTION BUTTONS
    ========================== -->

    <div class="ltk_actions">

      <a
        href="https://www.seeratclub.pk/past-events"
        target="_blank"
        rel="noopener noreferrer"
        class="ltk_action ltk_action_primary"
      >
        Explore past events

        <svg viewBox="0 0 24 24" aria-hidden="true">
          <path d="M7 17 17 7M8 7h9v9"></path>
        </svg>
      </a>


      <a
        href="https://www.youtube.com/@SeeratClubForKids"
        target="_blank"
        rel="noopener noreferrer"
        class="ltk_action ltk_action_secondary"
      >
        Watch our videos

        <svg viewBox="0 0 24 24" aria-hidden="true">
          <path d="M7 17 17 7M8 7h9v9"></path>
        </svg>
      </a>

    </div>

  </div>


  <!-- Bottom Decoration -->

  <div
    class="ltk_bottom_seal"
    aria-hidden="true"
  >

    <svg viewBox="0 0 40 40">
      <path d="M5 9c5-2 10-1 15 3 5-4 10-5 15-3v22c-5-2-10-1-15 3-5-4-10-5-15-3z"></path>
      <path d="M20 12v22"></path>
    </svg>

  </div>

</section>


<!-- =========================================================
     FULL IMAGE VIEWER
========================================================= -->

<dialog
  aria-labelledby="ec-viewer-title"
  id="sc-event-viewer"
  class="ltk_viewer"
>

  <div class="ec-viewer-top">

    <h3 id="ec-viewer-title">
      Seerat Club photograph
    </h3>

    <button
      aria-label="Close photograph"
      data-ec-close
      type="button"
    >
      ×
    </button>

  </div>

  <img
    alt=""
    class="ec-full-image"
  />

</dialog>


<style>

/* =========================================================
   LETTERS TO KINGS
========================================================= */

#sc-event-chapters {
  --ltk_dark: #212d2e;
  --ltk_dark_deep: #172323;
  --ltk_green: #243b32;
  --ltk_gold: #c9a24d;
  --ltk_gold_light: #e7c975;
  --ltk_gold_soft: #ead59c;
  --ltk_cream: #f6f2e8;
  --ltk_paper: #fffdf7;
  --ltk_text: #34423c;
  --ltk_muted: #66726c;

  position: relative;
  isolation: isolate;

  display: block;

  width: 100%;
  margin: 0;
  padding: 0;

  overflow: hidden;

  background: var(--ltk_dark);
  color: #ffffff;

  font-family: "DM Sans", Arial, sans-serif;

  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}


#sc-event-chapters *,
#sc-event-chapters *::before,
#sc-event-chapters *::after {
  box-sizing: border-box;
}


/* =========================================================
   BACKGROUND
========================================================= */

#sc-event-chapters .ltk_background {
  position: absolute;
  z-index: -4;

  inset: 0;

  overflow: hidden;

  pointer-events: none;
}


#sc-event-chapters .ltk_background img {
  display: block;

  width: 100%;
  height: 100%;

  object-fit: cover;
  object-position: center;

  opacity: 0.15;
}


#sc-event-chapters::before {
  content: "";

  position: absolute;
  z-index: -3;

  inset: 0;

  background:
    linear-gradient(
      180deg,
      rgba(23, 35, 35, 0.96) 0%,
      rgba(33, 45, 46, 0.985) 42%,
      #212d2e 100%
    );

  pointer-events: none;
}


#sc-event-chapters .ltk_pattern {
  position: absolute;
  z-index: -2;

  inset: 0;

  opacity: 0.11;

  pointer-events: none;

  background-image:
    url("data:image/svg+xml,%3Csvg width='110' height='110' viewBox='0 0 110 110' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23c9a24d' stroke-width='1'%3E%3Cpath d='M55 8 69 41 102 55 69 69 55 102 41 69 8 55 41 41Z'/%3E%3Ccircle cx='55' cy='55' r='27'/%3E%3C/g%3E%3C/svg%3E");
}


/* =========================================================
   CONTAINER
========================================================= */

#sc-event-chapters .ltk_container {
  position: relative;
  z-index: 2;

  width: min(1280px, 92%);

  margin: 0 auto;

  padding:
    clamp(70px, 8vw, 115px)
    0
    clamp(70px, 7vw, 100px);
}


/* =========================================================
   INTRO
========================================================= */

#sc-event-chapters .ltk_intro {
  max-width: 870px;

  margin: 0 auto 55px;

  text-align: center;
}


#sc-event-chapters .ltk_intro_icon {
  display: grid;

  place-items: center;

  width: 58px;
  height: 58px;

  margin: 0 auto 20px;

  border: 1px solid rgba(201, 162, 77, 0.55);
  border-radius: 18px;

  background: rgba(201, 162, 77, 0.09);

  color: var(--ltk_gold_light);
}


#sc-event-chapters .ltk_intro_icon svg {
  width: 31px;
  height: 31px;

  fill: none;

  stroke: currentColor;
  stroke-width: 1.4;
  stroke-linecap: round;
  stroke-linejoin: round;
}


#sc-event-chapters .ltk_intro h2 {
  margin: 0;

  color: #ffffff;

  font-family: "Baloo 2", Arial, sans-serif;

  font-size: clamp(45px, 6vw, 78px);

  font-weight: 800;

  line-height: 0.98;

  letter-spacing: -0.035em;

  text-wrap: balance;

  text-rendering: optimizeLegibility;
}


#sc-event-chapters .ltk_intro h2 span {
  display: block;

  color: var(--ltk_gold_light);
}


/* =========================================================
   BOOK STAGE
========================================================= */

#sc-event-chapters .ltk_book_stage {
  position: relative;

  width: min(1160px, 100%);

  margin: 0 auto 90px;

  padding: 45px 20px 60px;
}


/* =========================================================
   ORBITS
========================================================= */

#sc-event-chapters .ltk_orbit {
  position: absolute;

  pointer-events: none;

  border: 1px dashed rgba(201, 162, 77, 0.25);

  border-radius: 50%;
}


#sc-event-chapters .ltk_orbit_one {
  top: 1%;
  left: 5%;

  width: 90%;
  height: 92%;

  transform: rotate(-3deg);
}


#sc-event-chapters .ltk_orbit_two {
  top: 8%;
  left: 12%;

  width: 76%;
  height: 82%;

  border-color: rgba(255, 255, 255, 0.08);

  transform: rotate(4deg);
}


/* =========================================================
   FLOATING SVG ICONS
========================================================= */

#sc-event-chapters .ltk_floating_icon {
  position: absolute;
  z-index: 7;

  display: grid;

  place-items: center;

  width: 63px;
  height: 63px;

  border: 1px solid rgba(201, 162, 77, 0.4);

  border-radius: 20px;

  background: #263536;

  color: var(--ltk_gold_light);

  box-shadow:
    0 18px 38px rgba(0, 0, 0, 0.18);
}


#sc-event-chapters .ltk_floating_icon svg {
  width: 29px;
  height: 29px;

  fill: none;

  stroke: currentColor;
  stroke-width: 1.5;
  stroke-linecap: round;
  stroke-linejoin: round;
}


#sc-event-chapters .ltk_icon_map {
  top: 3%;
  left: 1%;

  transform: rotate(-8deg);
}


#sc-event-chapters .ltk_icon_letter {
  top: 10%;
  right: 0;

  transform: rotate(8deg);
}


/* =========================================================
   OPEN BOOK

   IMPORTANT

   No perspective
   No rotateY
   No filter on parent

   This keeps all text crisp.
========================================================= */

#sc-event-chapters .ltk_book {
  position: relative;
  z-index: 4;

  display: grid;

  grid-template-columns:
    minmax(0, 1fr)
    22px
    minmax(0, 1fr);

  width: 100%;

  margin: 0 auto;
}


/* Book shadow separated from book content */

#sc-event-chapters .ltk_book_shadow {
  position: absolute;
  z-index: -1;

  right: 5%;
  bottom: -34px;
  left: 5%;

  height: 65px;

  border-radius: 50%;

  background: rgba(0, 0, 0, 0.24);

  filter: blur(24px);

  pointer-events: none;
}


/* =========================================================
   BOOK PAGES
========================================================= */

#sc-event-chapters .ltk_page {
  position: relative;

  min-width: 0;

  min-height: 720px;

  color: var(--ltk_text);

  background:
    linear-gradient(
      90deg,
      #faf6ec 0%,
      #fffdf7 15%,
      #fffdf7 85%,
      #f5efdf 100%
    );

  border:
    1px solid
    rgba(201, 162, 77, 0.35);

  box-shadow:
    0 20px 45px rgba(0, 0, 0, 0.15);

  transform: none;

  filter: none;

  opacity: 1;

  text-rendering: optimizeLegibility;

  -webkit-font-smoothing: antialiased;

  backface-visibility: visible;
}


#sc-event-chapters .ltk_page_left {
  border-radius:
    30px
    6px
    6px
    30px;
}


#sc-event-chapters .ltk_page_right {
  border-radius:
    6px
    30px
    30px
    6px;
}


#sc-event-chapters .ltk_page::before {
  content: "";

  position: absolute;

  inset: 10px;

  pointer-events: none;

  border:
    1px solid
    rgba(201, 162, 77, 0.18);

  border-radius: inherit;
}


#sc-event-chapters .ltk_page_inner {
  position: relative;
  z-index: 2;

  padding:
    clamp(48px, 5vw, 72px)
    clamp(32px, 4vw, 54px)
    55px;

  transform: none;

  filter: none;

  opacity: 1;
}


/* =========================================================
   PAGE ICON
========================================================= */

#sc-event-chapters .ltk_page_mark {
  display: grid;

  place-items: center;

  width: 45px;
  height: 45px;

  margin-bottom: 25px;

  border:
    1px solid
    rgba(201, 162, 77, 0.46);

  border-radius: 14px;

  background: #f7f1df;

  color: #9b7426;
}


#sc-event-chapters .ltk_page_mark svg {
  width: 22px;
  height: 22px;

  fill: none;

  stroke: currentColor;
  stroke-width: 1.4;
  stroke-linecap: round;
  stroke-linejoin: round;
}


/* =========================================================
   BOOK TYPOGRAPHY
========================================================= */

#sc-event-chapters .ltk_page p {
  position: relative;

  margin: 0 0 21px;

  color: #45524c;

  font-family:
    "DM Sans",
    Arial,
    sans-serif;

  font-size:
    clamp(
      13px,
      1.05vw,
      15px
    );

  font-weight: 400;

  line-height: 1.88;

  letter-spacing: 0;

  opacity: 1;

  filter: none;

  transform: none;

  text-rendering: optimizeLegibility;

  -webkit-font-smoothing: antialiased;

  -moz-osx-font-smoothing: grayscale;
}


#sc-event-chapters .ltk_page p:last-child {
  margin-bottom: 0;
}


/* First Letter */

#sc-event-chapters
.ltk_page
p:first-of-type::first-letter {
  float: left;

  margin:
    7px
    8px
    0
    0;

  color: #9d7423;

  font-family:
    "Baloo 2",
    Arial,
    sans-serif;

  font-size: 51px;

  font-weight: 800;

  line-height: 0.7;
}


/* Closing Message */

#sc-event-chapters .ltk_closing_text {
  margin-top: 28px !important;

  padding: 23px 24px;

  border:
    1px solid
    rgba(201, 162, 77, 0.3);

  border-radius: 18px;

  background: #f7f1df;

  color:
    #35453d !important;

  font-weight:
    600 !important;
}


/* =========================================================
   PAGE NUMBERS
========================================================= */

#sc-event-chapters .ltk_page_number {
  position: absolute;

  bottom: 24px;

  color: #9f8c61;

  font-family:
    "DM Sans",
    Arial,
    sans-serif;

  font-size: 10px;

  font-weight: 700;

  letter-spacing: 0.18em;
}


#sc-event-chapters
.ltk_page_left
.ltk_page_number {
  left: 34px;
}


#sc-event-chapters
.ltk_page_right
.ltk_page_number {
  right: 34px;
}


/* =========================================================
   BOOK SPINE
========================================================= */

#sc-event-chapters .ltk_spine {
  position: relative;
  z-index: 5;

  background:
    linear-gradient(
      90deg,
      #967025 0%,
      #e7c975 45%,
      #9b7426 100%
    );

  box-shadow:
    0 0 18px
    rgba(0, 0, 0, 0.22),
    inset 0 0 10px
    rgba(255, 255, 255, 0.28);
}


#sc-event-chapters .ltk_spine span {
  position: absolute;

  top: 3%;
  bottom: 3%;
  left: 50%;

  width: 1px;

  background:
    rgba(
      255,
      255,
      255,
      0.45
    );

  transform:
    translateX(-50%);
}


/* =========================================================
   LETTER SEAL
========================================================= */

#sc-event-chapters .ltk_seal {
  position: absolute;
  z-index: 9;

  right: 8%;
  bottom: 17px;

  display: grid;

  place-items: center;

  width: 92px;
  height: 92px;

  border:
    1px solid
    #8c6927;

  border-radius: 50%;

  background:
    radial-gradient(
      circle at 35% 30%,
      #f1d997,
      #c9a24d 60%,
      #9d7628
    );

  color: #263534;

  box-shadow:
    0 16px 35px
    rgba(0, 0, 0, 0.22),
    inset 0 0 0 5px
    rgba(255, 255, 255, 0.12);

  transform: rotate(8deg);
}


#sc-event-chapters .ltk_seal svg {
  width: 38px;
  height: 38px;

  fill: none;

  stroke: currentColor;

  stroke-width: 1.4;

  stroke-linecap: round;

  stroke-linejoin: round;
}


/* =========================================================
   GALLERY HEADING
========================================================= */

#sc-event-chapters .ltk_gallery_header {
  display: flex;

  align-items: flex-end;

  justify-content:
    space-between;

  flex-wrap: wrap;

  gap: 25px;

  width: 100%;

  margin:
    0
    0
    30px;
}


#sc-event-chapters .ltk_small_label {
  display: block;

  margin-bottom: 11px;

  color:
    var(--ltk_gold_light);

  font-family:
    "DM Sans",
    Arial,
    sans-serif;

  font-size: 10px;

  font-weight: 700;

  line-height: 1.5;

  letter-spacing: 0.16em;

  text-transform: uppercase;
}


#sc-event-chapters
.ltk_gallery_heading
h3 {
  margin: 0;

  color: #ffffff;

  font-family:
    "Baloo 2",
    Arial,
    sans-serif;

  font-size:
    clamp(
      37px,
      4vw,
      55px
    );

  font-weight: 800;

  line-height: 1.02;

  letter-spacing: -0.025em;
}


#sc-event-chapters
.ltk_gallery_heading
h3 span {
  color:
    var(--ltk_gold_light);
}


/* =========================================================
   GALLERY BUTTONS
========================================================= */

#sc-event-chapters
.ltk_gallery_controls {
  display: flex;

  align-items: center;

  gap: 10px;
}


#sc-event-chapters
.ltk_gallery_arrow {
  display: grid;

  place-items: center;

  width: 50px;
  height: 50px;

  padding: 0;

  border:
    1px solid
    rgba(
      231,
      201,
      117,
      0.45
    );

  border-radius: 50%;

  background:
    rgba(
      255,
      255,
      255,
      0.035
    );

  color:
    var(--ltk_gold_light);

  cursor: pointer;

  transition:
    transform 220ms ease,
    background-color 220ms ease,
    color 220ms ease;
}


#sc-event-chapters
.ltk_gallery_arrow:hover {
  background:
    var(--ltk_gold);

  color:
    var(--ltk_dark);

  transform:
    translateY(-2px);
}


#sc-event-chapters
.ltk_gallery_arrow
svg {
  width: 22px;
  height: 22px;

  fill: none;

  stroke: currentColor;

  stroke-width: 1.8;

  stroke-linecap: round;

  stroke-linejoin: round;
}


/* =========================================================
   PHOTO TRACK
========================================================= */

#sc-event-chapters
.ltk_gallery_track {
  display: flex;

  gap: 20px;

  width: 100%;

  margin: 0;

  padding:
    5px
    2px
    24px;

  overflow-x: auto;

  scroll-behavior: smooth;

  scroll-snap-type:
    x mandatory;

  overscroll-behavior-x:
    contain;

  scrollbar-width: thin;

  scrollbar-color:
    var(--ltk_gold)
    #35413e;
}


/* Gallery Cards */

#sc-event-chapters
.ltk_gallery_track
.ec-card {
  flex:
    0
    0
    calc(
      (100% - 40px) / 3
    );

  min-width: 0;

  overflow: hidden;

  border:
    1px solid
    rgba(
      231,
      201,
      117,
      0.18
    );

  border-radius: 23px;

  background: #f7f7f3;

  box-shadow:
    0 20px 35px
    rgba(0, 0, 0, 0.14);

  scroll-snap-align: start;

  transition:
    transform 260ms ease,
    border-color 260ms ease;
}


#sc-event-chapters
.ltk_gallery_track
.ec-card:hover {
  border-color:
    rgba(
      231,
      201,
      117,
      0.6
    );

  transform:
    translateY(-5px);
}


#sc-event-chapters
.ltk_gallery_track
.ec-card-button {
  display: block;

  width: 100%;

  margin: 0;

  padding: 0;

  overflow: hidden;

  border: 0;

  background: #172323;

  cursor: zoom-in;
}


#sc-event-chapters
.ltk_gallery_track
.ec-card img {
  display: block;

  width: 100%;

  height: 255px;

  object-fit: cover;

  transition:
    transform 450ms ease;
}


#sc-event-chapters
.ltk_gallery_track
.ec-card:hover img {
  transform: scale(1.035);
}


#sc-event-chapters
.ltk_gallery_track
.ec-card-copy {
  padding:
    18px
    20px
    20px;
}


#sc-event-chapters
.ltk_gallery_track
.ec-card-copy small {
  display: block;

  margin-bottom: 7px;

  color: #806322;

  font-size: 10px;

  font-weight: 700;

  letter-spacing: 0.1em;

  text-transform: uppercase;
}


#sc-event-chapters
.ltk_gallery_track
.ec-card-copy h4 {
  margin: 0;

  color:
    var(--ltk_dark);

  font-family:
    "Baloo 2",
    Arial,
    sans-serif;

  font-size: 23px;

  font-weight: 700;

  line-height: 1.15;
}


#sc-event-chapters
.ltk_gallery_note {
  margin: 9px 0 0;

  color: #c8d0ca;

  font-size: 12px;

  line-height: 1.75;

  text-align: center;
}


/* =========================================================
   ACTIONS
========================================================= */

#sc-event-chapters .ltk_actions {
  display: flex;

  justify-content: center;

  flex-wrap: wrap;

  gap: 12px;

  margin-top: 38px;
}


#sc-event-chapters .ltk_action {
  display: inline-flex;

  align-items: center;

  justify-content: center;

  gap: 10px;

  min-height: 49px;

  padding:
    13px
    20px;

  border-radius: 13px;

  font-family:
    "DM Sans",
    Arial,
    sans-serif;

  font-size: 13px;

  font-weight: 700;

  text-decoration: none;

  transition:
    transform 220ms ease,
    background-color 220ms ease,
    border-color 220ms ease;
}


#sc-event-chapters
.ltk_action svg {
  width: 18px;
  height: 18px;

  fill: none;

  stroke: currentColor;

  stroke-width: 1.8;

  stroke-linecap: round;

  stroke-linejoin: round;
}


#sc-event-chapters
.ltk_action_primary {
  border:
    1px solid
    var(--ltk_gold);

  background:
    var(--ltk_gold);

  color:
    var(--ltk_dark);
}


#sc-event-chapters
.ltk_action_secondary {
  border:
    1px solid
    rgba(
      255,
      255,
      255,
      0.27
    );

  background:
    rgba(
      255,
      255,
      255,
      0.04
    );

  color: #ffffff;
}


#sc-event-chapters
.ltk_action:hover {
  transform:
    translateY(-2px);
}


#sc-event-chapters
.ltk_action_primary:hover {
  background: #dfbd72;
}


#sc-event-chapters
.ltk_action_secondary:hover {
  border-color:
    var(--ltk_gold);

  color:
    var(--ltk_gold_light);
}


/* =========================================================
   BOTTOM BOOK ICON
========================================================= */

#sc-event-chapters
.ltk_bottom_seal {
  position: absolute;

  right: 32px;
  bottom: 27px;

  display: grid;

  place-items: center;

  width: 56px;
  height: 56px;

  border:
    1px solid
    rgba(
      201,
      162,
      77,
      0.4
    );

  border-radius: 50%;

  color:
    var(--ltk_gold_light);

  opacity: 0.8;
}


#sc-event-chapters
.ltk_bottom_seal svg {
  width: 27px;
  height: 27px;

  fill: none;

  stroke: currentColor;

  stroke-width: 1.4;

  stroke-linecap: round;

  stroke-linejoin: round;
}


/* =========================================================
   FOCUS
========================================================= */

#sc-event-chapters
:is(
  a,
  button,
  [tabindex]
):focus-visible {
  outline:
    3px solid
    var(--ltk_gold_light);

  outline-offset: 5px;
}


/* =========================================================
   IMAGE VIEWER
========================================================= */

#sc-event-viewer.ltk_viewer {
  position: fixed;

  inset: 0;

  width:
    min(
      1100px,
      calc(100% - 28px)
    );

  max-width: none;

  max-height:
    calc(100dvh - 28px);

  margin: auto;

  padding: 18px;

  overflow: auto;

  border:
    1px solid
    rgba(
      231,
      201,
      117,
      0.4
    );

  border-radius: 24px;

  background: #212d2e;

  color: #ffffff;

  font-family:
    "DM Sans",
    Arial,
    sans-serif;
}


#sc-event-viewer.ltk_viewer:not([open]) {
  display: none;
}


#sc-event-viewer.ltk_viewer::backdrop {
  background:
    rgba(
      10,
      18,
      18,
      0.92
    );
}


#sc-event-viewer
.ec-viewer-top {
  display: flex;

  align-items: center;

  justify-content:
    space-between;

  gap: 18px;

  margin-bottom: 14px;
}


#sc-event-viewer h3 {
  margin: 0;

  color: #ffffff;

  font-family:
    "Baloo 2",
    Arial,
    sans-serif;

  font-size: 25px;

  font-weight: 700;
}


#sc-event-viewer button {
  display: grid;

  place-items: center;

  flex: 0 0 46px;

  width: 46px;
  height: 46px;

  padding: 0;

  border:
    1px solid
    rgba(
      231,
      201,
      117,
      0.4
    );

  border-radius: 12px;

  background: transparent;

  color: #ffffff;

  font-size: 26px;

  cursor: pointer;
}


#sc-event-viewer
.ec-full-image {
  display: block;

  width: 100%;

  height: auto;

  max-height: 75dvh;

  margin: 0;

  border-radius: 14px;

  object-fit: contain;
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1000px) {

  #sc-event-chapters
  .ltk_book_stage {
    padding-inline: 0;
  }


  #sc-event-chapters
  .ltk_page_inner {
    padding:
      42px
      30px
      50px;
  }


  #sc-event-chapters
  .ltk_page p {
    font-size: 13px;

    line-height: 1.78;
  }


  #sc-event-chapters
  .ltk_seal {
    right: 3%;
  }


  #sc-event-chapters
  .ltk_gallery_track
  .ec-card {
    flex-basis: 68%;
  }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 760px) {

  #sc-event-chapters
  .ltk_container {
    width:
      min(
        100% - 30px,
        1280px
      );

    padding-top: 65px;

    padding-bottom: 70px;
  }


  #sc-event-chapters
  .ltk_intro {
    margin-bottom: 30px;
  }


  #sc-event-chapters
  .ltk_intro_icon {
    width: 50px;

    height: 50px;

    margin-bottom: 16px;

    border-radius: 15px;
  }


  #sc-event-chapters
  .ltk_intro h2 {
    font-size:
      clamp(
        39px,
        12vw,
        57px
      );
  }


  /* Book becomes stacked readable pages */

  #sc-event-chapters
  .ltk_book_stage {
    margin-bottom: 65px;

    padding:
      24px
      0
      42px;
  }


  #sc-event-chapters
  .ltk_book {
    display: block;
  }


  #sc-event-chapters
  .ltk_page {
    min-height: 0;

    transform: none;

    filter: none;
  }


  #sc-event-chapters
  .ltk_page_left {
    margin-bottom: 14px;

    border-radius: 23px;
  }


  #sc-event-chapters
  .ltk_page_right {
    border-radius: 23px;
  }


  #sc-event-chapters
  .ltk_page_inner {
    padding:
      38px
      24px
      50px;
  }


  #sc-event-chapters
  .ltk_page p {
    margin-bottom: 19px;

    font-size: 13px;

    line-height: 1.78;
  }


  #sc-event-chapters
  .ltk_spine {
    display: none;
  }


  #sc-event-chapters
  .ltk_orbit,
  #sc-event-chapters
  .ltk_floating_icon {
    display: none;
  }


  #sc-event-chapters
  .ltk_seal {
    right: -5px;

    bottom: 8px;

    width: 72px;

    height: 72px;
  }


  #sc-event-chapters
  .ltk_seal svg {
    width: 30px;

    height: 30px;
  }


  #sc-event-chapters
  .ltk_gallery_header {
    align-items: center;
  }


  #sc-event-chapters
  .ltk_gallery_heading h3 {
    font-size: 38px;
  }


  #sc-event-chapters
  .ltk_gallery_track
  .ec-card {
    flex-basis: 83%;
  }


  #sc-event-chapters
  .ltk_gallery_track
  .ec-card img {
    height: 230px;
  }


  #sc-event-chapters
  .ltk_bottom_seal {
    display: none;
  }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 480px) {

  #sc-event-chapters
  .ltk_container {
    width:
      calc(100% - 24px);
  }


  #sc-event-chapters
  .ltk_intro h2 {
    font-size: 42px;
  }


  #sc-event-chapters
  .ltk_page_inner {
    padding:
      34px
      20px
      48px;
  }


  #sc-event-chapters
  .ltk_page p {
    font-size: 12.8px;
  }


  #sc-event-chapters
  .ltk_closing_text {
    padding: 18px;
  }


  #sc-event-chapters
  .ltk_gallery_track
  .ec-card {
    flex-basis: 88%;
  }


  #sc-event-chapters
  .ltk_gallery_track
  .ec-card img {
    height: 215px;
  }


  #sc-event-chapters
  .ltk_action {
    width: 100%;
  }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media
(prefers-reduced-motion: reduce) {

  #sc-event-chapters *,
  #sc-event-chapters *::before,
  #sc-event-chapters *::after {
    scroll-behavior:
      auto !important;

    animation:
      none !important;

    transition:
      none !important;
  }

}

</style>


<script>

document.addEventListener(
  "DOMContentLoaded",
  function () {

    const section =
      document.getElementById(
        "sc-event-chapters"
      );

    const track =
      document.getElementById(
        "ec-photo-track"
      );


    if (!section) {
      return;
    }


    /* ==========================================
       GALLERY NAVIGATION
    ========================================== */

    section
      .querySelectorAll(
        "[data-ec-direction]"
      )
      .forEach(
        function (button) {

          button.addEventListener(
            "click",
            function () {

              if (!track) {
                return;
              }


              const direction =
                Number(
                  button.getAttribute(
                    "data-ec-direction"
                  )
                ) || 1;


              const firstCard =
                track.querySelector(
                  ".ec-card"
                );


              const scrollAmount =
                firstCard
                  ? firstCard
                      .getBoundingClientRect()
                      .width + 20
                  : track.clientWidth * 0.8;


              track.scrollBy({
                left:
                  direction *
                  scrollAmount,

                behavior: "smooth"
              });

            }
          );

        }
      );


    /* ==========================================
       IMAGE VIEWER
    ========================================== */

    const viewer =
      document.getElementById(
        "sc-event-viewer"
      );


    const viewerImage =
      viewer
        ? viewer.querySelector(
            ".ec-full-image"
          )
        : null;


    const viewerTitle =
      viewer
        ? viewer.querySelector(
            "#ec-viewer-title"
          )
        : null;


    function openViewer(
      imageSource,
      imageTitle
    ) {

      if (
        !viewer ||
        !viewerImage ||
        !imageSource
      ) {
        return;
      }


      viewerImage.src =
        imageSource;


      viewerImage.alt =
        imageTitle ||
        "Seerat Club photograph";


      if (viewerTitle) {

        viewerTitle.textContent =
          imageTitle ||
          "Seerat Club photograph";

      }


      if (
        typeof viewer.showModal
        ===
        "function"
      ) {

        viewer.showModal();

      }

    }


    /* ==========================================
       DYNAMIC GALLERY IMAGE CLICK
    ========================================== */

    section.addEventListener(
      "click",
      function (event) {

        const imageButton =
          event.target.closest(
            "[data-ec-image]"
          );


        if (!imageButton) {
          return;
        }


        openViewer(
          imageButton.getAttribute(
            "data-ec-image"
          ),

          imageButton.getAttribute(
            "data-ec-title"
          )
        );

      }
    );


    /* ==========================================
       CLOSE VIEWER
    ========================================== */

    if (viewer) {

      const closeButton =
        viewer.querySelector(
          "[data-ec-close]"
        );


      if (closeButton) {

        closeButton.addEventListener(
          "click",
          function () {

            viewer.close();

          }
        );

      }


      viewer.addEventListener(
        "click",
        function (event) {

          if (
            event.target === viewer
          ) {

            viewer.close();

          }

        }
      );

    }

  }
);

</script>

    <!-- ======================================
     SEERAT CLUB EVENT CAROUSEL
     White background · Original image URLs
======================================= -->
    <!-- Session Photo Carousel -->
    <section aria-labelledby="sce-heading" aria-roledescription="carousel" id="sc-event-showcase">
     <div class="sce-container">
      <!-- Section introduction -->
      <div class="sce-copy">
       <span class="sce-eyebrow">
        <svg aria-hidden="true" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewbox="0 0 24 24">
         <path d="M4 6c3-1 6-1 8 1 2-2 5-2 8-1v13c-3-1-6-1-8 1-2-2-5-2-8-1Z">
         </path>
         <path d="M12 7v13">
         </path>
        </svg>
        REAL SEERAH · SHARED EXPERIENCES
       </span>
       <h2 class="sce-title" id="sce-heading">
        Every session opens
        <span>
         a new chapter.
        </span>
       </h2>
       <p class="sce-description">
        Interactive stories, activities and reflection.
        Discover the Seerat Club experiences that connect
        children with the lessons of Seerah.
       </p>
       <div aria-label="Seerat Club experiences" class="sce-points">
        <span>
         Discover stories
        </span>
        <span>
         Explore activities
        </span>
        <span>
         Reflect together
        </span>
       </div>
       <a class="sce-button" href="{{ route('past-events.index') }}">
        Explore past events
        <svg aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.7" viewbox="0 0 24 24">
         <path d="M5 12h14m-6-6 6 6-6 6">
         </path>
        </svg>
       </a>
       <svg aria-hidden="true" class="sce-decoration" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" viewbox="0 0 180 65">
        <path d="M5 20c14-6 26-4 38 4 12-8 24-10 38-4v34c-14-6-26-4-38 4-12-8-24-10-38-4Z">
        </path>
        <path d="M43 24v34M14 29l17 2m-17 8 17 2m25-10 16-2m-16 12 16-2">
        </path>
        <path d="M91 43c12 0 10-26 23-26s10 31 26 25 13-23 28-20" stroke-dasharray="3 5">
        </path>
        <path d="m155 10 14 11-15 5">
        </path>
        <path d="m124 8 2 5 5 2-5 2-2 5-2-5-5-2 5-2Z">
        </path>
       </svg>
      </div>
      <!-- Carousel -->
      <div class="sce-carousel">
       <svg aria-hidden="true" class="sc-arch-decor" fill="none" viewbox="0 0 420 590">
        <path d="M48 568V253C48 150 128 90 210 30C292 90 372 150 372 253V568M68 568V256C68 163 137 111 210 54C283 111 352 163 352 256V568M35 568H385" stroke="currentColor" stroke-width="2">
        </path>
        <path d="m210 88 7 13-7 13-7-13Z" fill="currentColor">
        </path>
       </svg>
       <div aria-label="Seerat Club event images. Use arrow keys or drag up and down to browse." class="sce-stage" tabindex="0">
       </div>
       <div aria-label="Event carousel controls" class="sce-controls" role="group">
        <button aria-label="Previous event image" class="sce-arrow" data-sce-previous="" type="button">
         <svg aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.7" viewbox="0 0 24 24">
          <path d="M19 12H5m6-6-6 6 6 6">
          </path>
         </svg>
        </button>
        <span aria-hidden="true" class="sce-progress">
         <span class="sce-progress-fill">
         </span>
        </span>
        <button aria-label="Next event image" class="sce-arrow" data-sce-next="" type="button">
         <svg aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.7" viewbox="0 0 24 24">
          <path d="M5 12h14m-6-6 6 6-6 6">
          </path>
         </svg>
        </button>
        <button aria-label="Start automatic carousel" class="sce-play" type="button">
         Play
        </button>
       </div>
       <p class="sce-help">
        Drag up or down to explore the event images.
       </p>
       <p aria-atomic="true" aria-live="polite" class="sce-sr-only" role="status">
       </p>
      </div>
     </div>
     <noscript>
      <p>
       <a href="{{ route('past-events.index') }}">
        Explore Seerat Club past events
       </a>
      </p>
     </noscript>
    </section>
    <!-- END SEERAT CLUB EVENT CHAPTERS -->
    <!-- Closing CTA -->
    {{-- <section class="sc-join" id="join">
     <div class="sc-container">
      <div class="sc-join-card">
       <div>
        <span class="sc-eyebrow">
         Join the Journey
        </span>
        <h2>
         Give your child a place to learn, grow and belong.
        </h2>
        <p>
         Register your child as a member, join as a volunteer, or support a child’s registration. Seerat Club currently gathers at Shafqat Masjid, 9th Gizri Lane, Phase 4, DHA, Karachi.
        </p>
       </div>
       <div class="sc-join-actions">
        <a class="sc-btn sc-btn-primary" href="{{ route('Home.contact') }}">
         Get in Touch
         <i class="fas fa-arrow-right">
         </i>
        </a>
        <a class="sc-btn sc-btn-outline" href="{{ route('past-events.index') }}">
         View Gallery
        </a>
       </div>
      </div>
     </div>
    </section>
   --}}

@endsection

