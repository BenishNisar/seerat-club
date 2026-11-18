<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>

    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>

    <meta content="<?php echo e($pageSeo?->description ?? ($siteSettings['default_seo_description'] ?? 'Interactive Seerah learning experiences for children in Karachi.')); ?>" name="description"/>
    <meta content="<?php echo e($pageSeo?->keywords ?? ($siteSettings['default_seo_keywords'] ?? 'Seerat Club, Seerah, children, Karachi')); ?>" name="keywords"/>

    <title><?php echo $__env->yieldContent('title', $pageSeo?->title ?? ($siteSettings['default_seo_title'] ?? 'Seerat Club for Kids — Involving Kids, Building Communities')); ?></title>
    <meta name="robots" content="<?php echo e($pageSeo?->robots ?? 'index,follow'); ?>">
    <link rel="canonical" href="<?php echo e($pageSeo?->canonical_url ?: url()->current()); ?>">
    <meta property="og:title" content="<?php echo $__env->yieldContent('og_title', $pageSeo?->title ?? ($siteSettings['default_seo_title'] ?? 'Seerat Club for Kids')); ?>">
    <meta property="og:description" content="<?php echo e($pageSeo?->description ?? ($siteSettings['default_seo_description'] ?? 'Interactive Seerah learning experiences for children in Karachi.')); ?>">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:type" content="website">
    <?php ($socialImage = $pageSeo?->og_image_path ?: ($siteSettings['default_social_image'] ?? null)); ?>
    <?php if($socialImage): ?><meta property="og:image" content="<?php echo e(str_starts_with($socialImage, 'http') ? $socialImage : asset($socialImage)); ?>"><?php endif; ?>

    <link href="<?php echo e(asset($siteSettings['favicon'] ?? 'assets/images/seerat-favicon.ico')); ?>" rel="shortcut icon"/>

    <link href="<?php echo e(asset('assets/css/icons.min.css')); ?>" rel="stylesheet"/>

    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet"/>

    <link href="<?php echo e(asset('assets/css/plugins.min.css')); ?>" rel="stylesheet"/>

    <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet"/>

    <link href="<?php echo e(asset('assets/css/responsive.css')); ?>" rel="stylesheet"/>

    <link href="<?php echo e(asset('assets/css/seerat-home.css')); ?>" rel="stylesheet"/>

    <!-- Color Scheme -->

    <link href="<?php echo e(asset('assets/css/colors/color.css')); ?>" rel="stylesheet" title="color"/>

    <!-- Color -->

    <link href="<?php echo e(asset('assets/css/colors/color2.css')); ?>" rel="alternate stylesheet" title="color2"/>

    <!-- Color2 -->

    <link href="<?php echo e(asset('assets/css/colors/color3.css')); ?>" rel="alternate stylesheet" title="color3"/>

    <!-- Color3 -->

    <link href="<?php echo e(asset('assets/css/colors/color4.css')); ?>" rel="alternate stylesheet" title="color4"/>

    <!-- Color4 -->

    <link href="<?php echo e(asset('assets/css/experience.css')); ?>" rel="stylesheet"/>

    <link href="<?php echo e(asset('assets/css/seerat-refresh.css')); ?>" rel="stylesheet"/>

    <link href="<?php echo e(asset('assets/css/home-components.css')); ?>" rel="stylesheet"/>

    <link href="<?php echo e(asset('assets/css/seerat-finishing.css')); ?>" rel="stylesheet"/>

    <link href="<?php echo e(asset('assets/css/seerat-polish.css')); ?>" rel="stylesheet"/>

    <link href="<?php echo e(asset('assets/css/podcast.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('assets/css/academy.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('assets/css/past-events-premium.css')); ?>" rel="stylesheet"/>

</head>
 <body itemscope="">
  <!-- <div class="preloader">
        <div class="loader-inner ball-scale-multiple">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>Preloader -->
  <main>
   <!-- Header -->
   <header class="style2">
    <div class="topbar">
     <div class="container">
      <ul class="float-left tp-lnks">
       <li>
        <i aria-hidden="true" class="far fa-map theme-clr">
        </i>
        <?php echo e($siteSettings['address'] ?? 'Shafqat Masjid, Karachi'); ?>

       </li>
       <li>
        <i aria-hidden="true" class="far fa-clock theme-clr">
        </i>
        Monthly activity sessions
       </li>
      </ul>
      <div class="scl1 float-right">
       <span>
        Follow us:
       </span>
       <a aria-label="Seerat Club on YouTube" href="<?php echo e($siteSettings['youtube_url'] ?? 'https://www.youtube.com/@SeeratClubForKids'); ?>" rel="noopener noreferrer" target="_blank" title="YouTube">
        <i aria-hidden="true" class="fab fa-youtube">
        </i>
       </a>
       <a aria-label="Seerat Club on Instagram" href="<?php echo e($siteSettings['instagram_url'] ?? 'https://www.instagram.com/seeratclub/'); ?>" rel="noopener noreferrer" target="_blank" title="Instagram">
        <i aria-hidden="true" class="fab fa-instagram">
        </i>
       </a>
       <a aria-label="Seerat Club on Facebook" href="<?php echo e($siteSettings['facebook_url'] ?? 'https://www.facebook.com/profile.php?id=61567792571640'); ?>" rel="noopener noreferrer" target="_blank" title="Facebook">
        <i aria-hidden="true" class="fab fa-facebook-f">
        </i>
       </a>
      </div>
     </div>
    </div>
    <!-- Topbar -->
    <div class="logo-inf-sec">
     <div class="container">
      <div class="logo">
       <a aria-label="Seerat Club for Kids home" class="sc-brand" href="<?php echo e(route('Home.welcome')); ?>" itemprop="url" title="Logo">
        <img alt="" height="62" src="<?php echo e(asset($siteSettings['site_logo'] ?? 'assets/images/academy/page-01-img-1.webp')); ?>" width="62"/>
        <span>
         Seerat Club
         <small>
          FOR KIDS · KARACHI
         </small>
        </span>
       </a>
      </div>
      <!-- Logo -->
      <div class="float-right cnt-inf-btn">
       <ul class="inf-lst">
        <li>
         <a href="tel:<?php echo e(preg_replace('/\s+/', '', $siteSettings['phone'] ?? '03343541413')); ?>">
          Call us: <?php echo e($siteSettings['phone'] ?? '0334 3541413'); ?>

         </a>
        </li>
        <li>
         <a href="<?php echo e(route('Home.contact')); ?>">
          Shafqat Masjid · Karachi
         </a>
        </li>
       </ul>
       <a class="theme-btn theme-bg brd-rd5" href="<?php echo e(route('Home.registration')); ?>" itemprop="url" title="">
        REGISTER YOUR CHILD
       </a>
      </div>
     </div>
    </div>
    <!-- Logo Menu Sec -->
    <div class="menu-sec theme-bg">
     <div class="container">
      <nav aria-label="Main navigation">
       <div>
        <ul>
         <li>
          <a aria-current="page" href="<?php echo e(route("Home.welcome")); ?>">
           Home
          </a>
         </li>
         <li>
          <a href="<?php echo e(route("Home.registration")); ?>">
           Registration
          </a>
         </li>
         <li>
          <a href="<?php echo e(route("Home.girls")); ?>">
           Girls
          </a>
         </li>



         <li class="menu-item-has-children">
    <a href="<?php echo e(url('/past-events')); ?>">
        Past Events
    </a>

    <i class="fas fa-angle-down"></i>

    <ul>

        <li>
            <a href="<?php echo e(url('/past-events')); ?>">
                All Events
            </a>
        </li>

        <li class="menu-item-has-children sc-side-menu">
            <a href="<?php echo e(url('/past-events/cycle-1')); ?>">
                Cycle 1
            </a>

            <i class="fas fa-angle-right"></i>

            
<ul class="sc-cycle-events-menu">
    <li><a href="<?php echo e(route('past-events.cycle-1.once-upon-a-time-in-jannat')); ?>">Once Upon a Time in Jannat</a></li>
    <li><a href="<?php echo e(route('past-events.cycle-1.the-friendly-fire')); ?>">The Friendly Fire</a></li>
    <li><a href="<?php echo e(route('past-events.cycle-1.the-pursuit-of-submission')); ?>">The Pursuit of Submission</a></li>
    <li><a href="<?php echo e(route('past-events.cycle-1.the-year-of-the-elephant')); ?>">The Year of the Elephant</a></li>
    <li><a href="<?php echo e(route('past-events.cycle-1.the-chosen-heart')); ?>">The Chosen Heart</a></li>
    <li><a href="<?php echo e(route('past-events.cycle-1.the-prophet-in-making')); ?>">The Prophet in Making</a></li>
    <li><a href="<?php echo e(route('past-events.cycle-1.as-saadiq-al-ameen')); ?>">As Saadiq Al Ameen</a></li>
    <li><a href="<?php echo e(route('past-events.cycle-1.at-taahirah')); ?>">At Taahirah</a></li>
    <li><a href="<?php echo e(route('past-events.cycle-1.the-first-responders')); ?>">The First Responders</a></li>
    <li><a href="<?php echo e(route('past-events.cycle-1.isra-miraj')); ?>">Isra &amp; Mi’raj</a></li>
    <li><a href="<?php echo e(route('past-events.cycle-1.hijrat-to-medina')); ?>">Hijrat to Medina</a></li>
    <li><a href="<?php echo e(route('past-events.cycle-1.young-hearts-of-mecca')); ?>">Young Hearts of Mecca</a></li>
</ul>




        </li>

        <li class="menu-item-has-children sc-side-menu">
        <a href="<?php echo e(url('/past-events/cycle-2-2026-onwards')); ?>">
    Cycle 2
</a>

            <i class="fas fa-angle-right"></i>

            <ul  class="sc-cycle-events-menu">
                <li>
                    <a href="<?php echo e(route('past-events.cycle-2-2026-onwards.the-first-call-in-madinah')); ?>">
                        The First Call in Madinah
                    </a>
                </li>

                  <li>
        <a href="<?php echo e(route('past-events.cycle-2-2026-onwards.istiqbaal-e-ramadan')); ?>">
            Istiqbaal e Ramadan
        </a>
    </li>



            <li>
        <a href="<?php echo e(route('past-events.cycle-2-2026-onwards.battle-of-badar')); ?>">
            Battle Of Badar
        </a>
    </li>


          <li>
        <a href="<?php echo e(route('past-events.cycle-2-2026-onwards.ghazwa-e-uhud')); ?>">
Ghazwa e Uhud        </a>
    </li>

<li>
    <a href="<?php echo e(route('past-events.cycle-2-2026-onwards.ghazwa-e-khandaq')); ?>">
        Ghazwa e Khandaq
    </a>
</li>

<li>
    <a href="<?php echo e(route('past-events.cycle-2-2026-onwards.treaty-of-hudaybia')); ?>">
        Treaty of Hudaybia
    </a>
</li>

<li>
    <a href="<?php echo e(route('past-events.cycle-2-2026-onwards.ghazwa-e-khyber')); ?>">
        Ghazwa e Khyber
    </a>
</li>

<li>
    <a href="<?php echo e(route('past-events.cycle-2-2026-onwards.letters-to-kings')); ?>">
        Letters to Kings
    </a>
</li>

<li>
    <a href="<?php echo e(route('past-events.cycle-2-2026-onwards.fatah-e-mecca')); ?>">
        Fatah-e-Mecca
    </a>
</li>
            </ul>
        </li>

    </ul>
</li>
         <li>
          <a href="<?php echo e(route("Home.volunteer")); ?>">
           Volunteer
          </a>
         </li>



       <li class="menu-item-has-children">

    <a href="<?php echo e(route('blog.index')); ?>">
        Blog
    </a>

    <i
        aria-hidden="true"
        class="fas fa-angle-down"
    ></i>

    <ul>

        <li>
            <a href="<?php echo e(route('blog.index')); ?>">
                All Stories
            </a>
        </li>

        <?php $__currentLoopData = $blogMenuCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <li>

                <a
                    href="<?php echo e(route('blog.index', [
                        'category' => $category->slug
                    ])); ?>"
                >
                    <?php echo e($category->name); ?>

                </a>

            </li>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>

</li>




         <li>
          <a href="<?php echo e(route('Home.podcast')); ?>">
           Podcast
          </a>
         </li>
         <li>
          <a href="<?php echo e(route('Home.contact')); ?>">
           Contact Us
          </a>
         </li>
         <li>
          <a href="<?php echo e(route('Home.feedback')); ?>">
           Feedback
          </a>
         </li>
        </ul>
        <div class="hdr-srch">
         <form action="<?php echo e(route('blog.index')); ?>" method="get">
          <input aria-label="Search Seerat Club" name="search" placeholder="Search Seerat Club" required="" type="search"/>
          <button aria-label="Search" type="submit">
           <svg aria-hidden="true" class="sc-hdr-search-svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" viewBox="0 0 24 24">
            <circle cx="11" cy="11" r="7"></circle>
            <path d="m20 20-3.5-3.5"></path>
           </svg>
          </button>
         </form>
        </div>
       </div>
      </nav>
     </div>
     <div class="mnu-btm-shp">
      <i class="theme-bg crl1">
      </i>
      <i class="theme-bg crl2">
      </i>
      <i class="theme-bg crl3">
      </i>
      <i class="theme-bg crl4">
      </i>
      <i class="theme-bg crl5">
      </i>
      <i class="theme-bg crl6">
      </i>
      <i class="theme-bg crl7">
      </i>
      <i class="theme-bg crl8">
      </i>
      <i class="theme-bg crl9">
      </i>
      <i class="theme-bg crl10">
      </i>
      <i class="theme-bg crl11">
      </i>
      <i class="theme-bg crl12">
      </i>
      <i class="theme-bg crl13">
      </i>
      <i class="theme-bg crl14">
      </i>
      <i class="theme-bg crl15">
      </i>
      <i class="theme-bg crl16">
      </i>
      <i class="theme-bg crl17">
      </i>
      <i class="theme-bg crl18">
      </i>
      <i class="theme-bg crl19">
      </i>
      <i class="theme-bg crl20">
      </i>
      <i class="theme-bg crl21">
      </i>
      <i class="theme-bg crl22">
      </i>
      <i class="theme-bg crl23">
      </i>
      <i class="theme-bg crl24">
      </i>
      <i class="theme-bg crl25">
      </i>
      <i class="theme-bg crl26">
      </i>
      <i class="theme-bg crl27">
      </i>
      <i class="theme-bg crl28">
      </i>
      <i class="theme-bg crl29">
      </i>
      <i class="theme-bg crl30">
      </i>
      <i class="theme-bg crl31">
      </i>
      <i class="theme-bg crl32">
      </i>
      <i class="theme-bg crl33">
      </i>
      <i class="theme-bg crl34">
      </i>
      <i class="theme-bg crl35">
      </i>
      <i class="theme-bg crl36">
      </i>
      <i class="theme-bg crl37">
      </i>
      <i class="theme-bg crl38">
      </i>
      <i class="theme-bg crl39">
      </i>
      <i class="theme-bg crl40">
      </i>
      <i class="theme-bg crl41">
      </i>
      <i class="theme-bg crl42">
      </i>
      <i class="theme-bg crl43">
      </i>
      <i class="theme-bg crl44">
      </i>
      <i class="theme-bg crl45">
      </i>
      <i class="theme-bg crl46">
      </i>
      <i class="theme-bg crl47">
      </i>
      <i class="theme-bg crl48">
      </i>
      <i class="theme-bg crl49">
      </i>
      <i class="theme-bg crl50">
      </i>
     </div>
    </div>
   </header>
   <!-- Header -->
   <div class="header-search">
    <span class="srch-cls-btn brd-rd5">
     <i class="fas fa-times">
     </i>
    </span>
    <form>
     <input placeholder="Search here..." type="text"/>
     <button type="submit">
      <i class="fas fa-search">
      </i>
     </button>
    </form>
   </div>
   <!-- Header Search -->
   <div class="rspn-hdr">
    <div class="rspn-mdbr">
     <ul class="rspn-scil">
      <li>
       <a aria-label="Seerat Club on YouTube" href="<?php echo e($siteSettings['youtube_url'] ?? 'https://www.youtube.com/@SeeratClubForKids'); ?>" rel="noopener noreferrer" target="_blank" title="YouTube">
        <i aria-hidden="true" class="fab fa-youtube">
        </i>
       </a>
      </li>
      <li>
       <a aria-label="Seerat Club on Instagram" href="<?php echo e($siteSettings['instagram_url'] ?? 'https://www.instagram.com/seeratclub/'); ?>" rel="noopener noreferrer" target="_blank" title="Instagram">
        <i aria-hidden="true" class="fab fa-instagram">
        </i>
       </a>
      </li>
      <li>
       <a aria-label="Seerat Club on Facebook" href="<?php echo e($siteSettings['facebook_url'] ?? 'https://www.facebook.com/profile.php?id=61567792571640'); ?>" rel="noopener noreferrer" target="_blank" title="Facebook">
        <i aria-hidden="true" class="fab fa-facebook-f">
        </i>
       </a>
      </li>
     </ul>
     <form action="<?php echo e(route('blog.index')); ?>" class="rspn-srch" method="get">
      <input aria-label="Search Seerat Club" name="q" placeholder="Enter Your Keyword" required="" type="text"/>
      <button type="submit">
       <i class="fa fa-search">
       </i>
      </button>
     </form>
    </div>
    <div class="lg-mn">
     <div class="logo">
      <a aria-label="Seerat Club for Kids home" class="sc-brand" href="<?php echo e(route('Home.welcome')); ?>" itemprop="url" title="Logo">
       <img alt="" height="62" src="<?php echo e(asset($siteSettings['site_logo'] ?? 'assets/images/academy/page-01-img-1.webp')); ?>" width="62"/>
       <span>
        Seerat Club
        <small>
         FOR KIDS · KARACHI
        </small>
       </span>
      </a>
     </div>
     <div class="rspn-cnt">
      <span>
       <a href="tel:<?php echo e(preg_replace('/\s+/', '', $siteSettings['phone'] ?? '03343541413')); ?>">
        <?php echo e($siteSettings['phone'] ?? '0334 3541413'); ?>

       </a>
      </span>
      <span>
       <a href="<?php echo e(route('Home.contact')); ?>">
        <?php echo e($siteSettings['address'] ?? 'Shafqat Masjid, Karachi'); ?>

       </a>
      </span>
     </div>
     <span class="rspn-mnu-btn">
      <i class="fa fa-list-ul">
      </i>
     </span>
    </div>
    <div class="rsnp-mnu">
     <span class="rspn-mnu-cls">
      <i class="fa fa-times">
      </i>
     </span>
     <ul>
      <li>
       <a aria-current="page" href="<?php echo e(route('Home.welcome')); ?>">
        Home
       </a>
      </li>
      <li>
       <a href="<?php echo e(route('Home.registration')); ?>">
        Registration
       </a>
      </li>
      <li>
       <a href="<?php echo e(route('Home.girls')); ?>">
        Girls
       </a>
      </li>
      

      <li class="menu-item-has-children">
    <a href="<?php echo e(url('/past-events')); ?>">
        Past Events
    </a>

    <i aria-hidden="true" class="fas fa-angle-down"></i>

    <ul>

        <li>
            <a href="<?php echo e(url('/past-events')); ?>">
                All Events
            </a>
        </li>

        
        <li class="menu-item-has-children sc-side-menu">
            <a href="<?php echo e(url('/past-events/cycle-1')); ?>">
                Cycle 1
            </a>

            <i class="fas fa-angle-right"></i>

            <ul>
                <li>
                    <a href="<?php echo e(url('/past-events/cycle-1/once-upon-a-time-in-jannat')); ?>">
                        Once Upon a Time in Jannat
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(url('/past-events/cycle-1/the-friendly-fire')); ?>">
                        The Friendly Fire
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(url('/past-events/cycle-1/the-pursuit-of-submission')); ?>">
                        The Pursuit of Submission
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(url('/past-events/cycle-1/the-year-of-the-elephant')); ?>">
                        The Year of the Elephant
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(url('/past-events/cycle-1/the-chosen-heart')); ?>">
                        The Chosen Heart
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(url('/past-events/cycle-1/the-prophet-in-making')); ?>">
                        The Prophet in Making
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(url('/past-events/cycle-1/as-saadiq-al-ameen')); ?>">
                        As Saadiq Al Ameen
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(url('/past-events/cycle-1/at-taahirah')); ?>">
                        At Taahirah
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(url('/past-events/cycle-1/the-first-responders')); ?>">
                        The First Responders
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(url('/past-events/cycle-1/isra-miraj')); ?>">
                        Isra Miraj
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(url('/past-events/cycle-1/hijrat-to-medina')); ?>">
                        Hijrat to Medina
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(url('/past-events/cycle-1/young-hearts-of-mecca')); ?>">
                        Young Hearts of Mecca
                    </a>
                </li>
            </ul>
        </li>


        
        <li class="menu-item-has-children sc-side-menu">
            <a href="<?php echo e(url('/past-events/cycle-2-2026-onwards')); ?>">
                Cycle 2
            </a>

            <i class="fas fa-angle-right"></i>

            <ul class="sc-cycle-events-menu">
                <li><a href="<?php echo e(route('past-events.cycle-2-2026-onwards.the-first-call-in-madinah')); ?>">The First Call in Madinah</a></li>
                <li><a href="<?php echo e(route('past-events.cycle-2-2026-onwards.istiqbaal-e-ramadan')); ?>">Istiqbaal e Ramadan</a></li>
                <li><a href="<?php echo e(route('past-events.cycle-2-2026-onwards.battle-of-badar')); ?>">Battle of Badar</a></li>
                <li><a href="<?php echo e(route('past-events.cycle-2-2026-onwards.ghazwa-e-uhud')); ?>">Ghazwa e Uhud</a></li>
                <li><a href="<?php echo e(route('past-events.cycle-2-2026-onwards.ghazwa-e-khandaq')); ?>">Ghazwa e Khandaq</a></li>
                <li><a href="<?php echo e(route('past-events.cycle-2-2026-onwards.treaty-of-hudaybia')); ?>">Treaty of Hudaybia</a></li>
                <li><a href="<?php echo e(route('past-events.cycle-2-2026-onwards.ghazwa-e-khyber')); ?>">Ghazwa e Khyber</a></li>
                <li><a href="<?php echo e(route('past-events.cycle-2-2026-onwards.letters-to-kings')); ?>">Letters to Kings</a></li>
                <li><a href="<?php echo e(route('past-events.cycle-2-2026-onwards.fatah-e-mecca')); ?>">Fatah-e-Mecca</a></li>
            </ul>
        </li>

    </ul>
</li>
      <li>
       <a href="<?php echo e(route('Home.volunteer')); ?>">
        Volunteer
       </a>
      </li>
  <li class="menu-item-has-children">

    <a href="<?php echo e(route('blog.index')); ?>">
        Blog
    </a>

    <i
        aria-hidden="true"
        class="fas fa-angle-down"
    ></i>

    <ul>

        <li>
            <a href="<?php echo e(route('blog.index')); ?>">
                All Stories
            </a>
        </li>

        <li>
            <a href="<?php echo e(route('blog.index', [
                'category' => 'seerat-camp'
            ])); ?>">
                Seerat Camp
            </a>
        </li>

        <li>
            <a href="<?php echo e(route('blog.index', [
                'category' => 'seerat-club'
            ])); ?>">
                Seerat Club
            </a>
        </li>

        <li>
            <a href="<?php echo e(route('blog.index', [
                'category' => 'miscellaneous'
            ])); ?>">
                Miscellaneous
            </a>
        </li>

    </ul>

</li>
      <li>
       <a href="<?php echo e(route('Home.podcast')); ?>">
        Podcast
       </a>
      </li>
      <li>
       <a href="<?php echo e(route('Home.contact')); ?>">
        Contact Us
       </a>
      </li>
      <li>
       <a href="<?php echo e(route('Home.feedback')); ?>">
        Feedback
       </a>
      </li>
     </ul>
    </div>
    <!-- Responsive Menu -->
   </div>

   <div class="sc-home">




<?php echo $__env->yieldContent("Content"); ?>

    <?php if (! (request()->routeIs('Home.welcome'))): ?>
    <section class="sc-join" id="join">
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
         Register your child as a member, join as a volunteer, or support a child’s registration. Seerat Club currently gathers at <?php echo e($siteSettings['address'] ?? 'Shafqat Masjid, 9th Gizri Lane, Phase 4, DHA, Karachi'); ?>.
        </p>
       </div>
       <div class="sc-join-actions">
        <a class="sc-btn sc-btn-primary" href="<?php echo e(route('Home.contact')); ?>">
         Get in Touch
         <i class="fas fa-arrow-right">
         </i>
        </a>
        <a class="sc-btn sc-btn-outline" href="<?php echo e(route('past-events.index')); ?>">
         View Gallery
        </a>
       </div>
      </div>
     </div>
    </section>
    <?php endif; ?>


     </div>




    <footer aria-label="Seerat Club footer" class="sc-footer">
    <div class="sc-footer-banner">
     <img alt="Shafqat Masjid, the venue for Seerat Club" height="600" loading="lazy" src="<?php echo e(asset('assets/images/seerat-pdf/page-26-img-2.jpeg')); ?>" width="1000"/>
     <div class="sc-footer-banner-copy">
      <span>
       INVOLVING KIDS · BUILDING COMMUNITIES
      </span>
      <h2>
       My Prophet <span class="sc-salawat" lang="ar">ﷺ</span> ,
       <br/>
       My Hero.
      </h2>
      <p>
       Interactive stories, activities and reflection.
       <br/>
       A connection with faith that grows through childhood.
      </p>
      <a href="<?php echo e(route('Home.registration')); ?>">
       Join the journey
       <span aria-hidden="true">
        ↗
       </span>
      </a>
     </div>
     <span class="sc-footer-venue">
      OUR VENUE
      <br/>
      <strong>
       <?php echo e($siteSettings['address'] ?? 'Shafqat Masjid, Karachi'); ?>

      </strong>
     </span>
    </div>
    <div class="sc-footer-main">
     <div class="sc-footer-brand">
      <a class="sc-footer-name" href="<?php echo e(route('Home.welcome')); ?>">
       Seerat Club
       <span>
        FOR KIDS
       </span>
      </a>
      <p>
       A community based initiative for children aged 6 to 16, focused on learning about the life of Prophet Muhammad <span class="sc-salawat" lang="ar">ﷺ</span> .
      </p>
      <div class="sc-footer-socials">
       <a href="<?php echo e($siteSettings['youtube_url'] ?? 'https://www.youtube.com/@SeeratClubForKids'); ?>" rel="noopener noreferrer" target="_blank">
        YouTube ↗
       </a>
       <a href="<?php echo e($siteSettings['instagram_url'] ?? 'https://www.instagram.com/seeratclub/'); ?>" rel="noopener noreferrer" target="_blank">
        Instagram ↗
       </a>
       <a href="<?php echo e($siteSettings['facebook_url'] ?? 'https://www.facebook.com/profile.php?id=61567792571640'); ?>" rel="noopener noreferrer" target="_blank">
        Facebook ↗
       </a>
      </div>
     </div>
     <div>
      <h3>
       Explore the club
      </h3>
      <ul>
       <li>
        <a href="<?php echo e(route('Home.registration')); ?>">
         Registration
        </a>
       </li>
       <li>
        <a href="<?php echo e(route('Home.girls')); ?>">
         Girls
        </a>
       </li>
       <li>
        <a href="<?php echo e(route('past-events.index')); ?>">
         Past Events
        </a>
       </li>
       <li>
        <a href="<?php echo e(route('Home.volunteer')); ?>">
         Volunteer
        </a>
       </li>
  <li>
    <a href="<?php echo e(route('blog.index')); ?>">
        Blog
    </a>
</li>


       <li>
        <a href="<?php echo e(route('Home.podcast')); ?>">
         Podcast
        </a>
       </li>
      </ul>
     </div>
     <div>
      <h3>
       Discover Seerah
      </h3>
      <ul>
       <li>
        <a href="#sc-programs">
         What children experience
        </a>
       </li>
       <li>
        <a href="#sc-learning-journey">
         Our learning journey
        </a>
       </li>
       <li>
        <a href="<?php echo e(route('past-events.cycle-2-2026-onwards.fatah-e-mecca')); ?>">
         Fatah-e-Mecca
        </a>
       </li>
       <li>
        <a href="<?php echo e(route('past-events.cycle-2-2026-onwards.letters-to-kings')); ?>">
         Letters to Kings
        </a>
       </li>
       <li>
        <a href="<?php echo e(route('past-events.index')); ?>">
         Activity gallery
        </a>
       </li>
       <li>
        <a href="#sc-social-showcase">
         Watch &amp; listen
        </a>
       </li>
      </ul>
     </div>
     <div>
      <h3>
       Come and connect
      </h3>
      <address>
       <?php echo nl2br(e($siteSettings['address'] ?? 'Shafqat Masjid, 9th Gizri Lane, Phase 4, DHA, Karachi')); ?>

      </address>
      <a class="sc-footer-phone" href="tel:<?php echo e(preg_replace('/\s+/', '', $siteSettings['phone'] ?? '03343541413')); ?>">
       <?php echo e($siteSettings['phone'] ?? '0334 3541413'); ?>

      </a>
      <a class="sc-footer-phone" href="tel:<?php echo e(preg_replace('/\s+/', '', $siteSettings['secondary_phone'] ?? '03332225425')); ?>">
       <?php echo e($siteSettings['secondary_phone'] ?? '0333 2225425'); ?>

      </a>
      <a class="sc-footer-contact" href="<?php echo e(route('Home.contact')); ?>">
       Contact us
       <span aria-hidden="true">
        ↗
       </span>
      </a>
     </div>
    </div>
    <div class="sc-footer-bottom">
     <span>
      <?php echo e($siteSettings['site_name'] ?? 'Seerat Club for Kids'); ?>

     </span>
     <span>
      <?php echo e($siteSettings['footer_text'] ?? 'Involving Kids · Building Communities'); ?>

     </span>
     <a href="#about">
      Back to our story ↑
     </a>
    </div>
   </footer>
  </main>
  <!-- Main Wrapper -->
  <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/plugins.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/google-map-int.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/custom-scripts.js')); ?>"></script>
  <!-- END SEERAT CLUB ACTIVITY CAROUSEL -->
  <script src="<?php echo e(asset('assets/js/seerat-refresh.js')); ?>"></script>
  <button aria-controls="sc-purpose-modal" aria-haspopup="dialog" class="sc-purpose-button" type="button">
   <span class="sc-purpose-btn-icon" aria-hidden="true">
    <i class="fas fa-book-open"></i>
   </span>
   <span>
    Our purpose
   </span>
  </button>
  <dialog aria-labelledby="sc-purpose-title" id="sc-purpose-modal">
   <button aria-label="Close Seerat Club purpose" class="sc-purpose-close" type="button">
    ×
   </button>
   <span class="sc-purpose-kicker">
    <i aria-hidden="true" class="fas fa-mosque"></i>
    SEERAT CLUB FOR KIDS
   </span>
   <h2 id="sc-purpose-title">
    My Prophet <span class="sc-salawat" lang="ar">ﷺ</span> , My Hero.
   </h2>
   <div aria-label="About Seerat Club" class="sc-purpose-tabs" role="tablist">
    <button aria-controls="sc-purpose-panel-0" aria-selected="true" id="sc-purpose-tab-0" role="tab" tabindex="0" type="button">
     <i aria-hidden="true" class="fas fa-heart"></i>
     Our purpose
    </button>
    <button aria-controls="sc-purpose-panel-1" aria-selected="false" id="sc-purpose-tab-1" role="tab" tabindex="-1" type="button">
     <i aria-hidden="true" class="fas fa-compass"></i>
     Experiences
    </button>
    <button aria-controls="sc-purpose-panel-2" aria-selected="false" id="sc-purpose-tab-2" role="tab" tabindex="-1" type="button">
     <i aria-hidden="true" class="fas fa-user-plus"></i>
     Join us
    </button>
   </div>
   <div aria-labelledby="sc-purpose-tab-0" class="sc-purpose-panel" id="sc-purpose-panel-0" role="tabpanel" tabindex="0">
    <div class="sc-purpose-panel-feature">
     <span class="sc-purpose-fa-icon" aria-hidden="true"><i class="fas fa-mosque"></i></span>
     <div>
      <p>
       A community-based initiative for children aged <strong>6 to 16</strong>, focused on learning about the blessed life of Prophet Muhammad <span class="sc-salawat" lang="ar">ﷺ</span> .
      </p>
      <p>
       Our goal is to educate, inspire and unite kids in understanding the Seerah while applying its noble character lessons in daily life.
      </p>
     </div>
    </div>
   </div>
   <div aria-labelledby="sc-purpose-tab-1" class="sc-purpose-panel" hidden="" id="sc-purpose-panel-1" role="tabpanel" tabindex="0">
    <div class="sc-purpose-panel-feature">
     <span class="sc-purpose-fa-icon" aria-hidden="true"><i class="fas fa-hands-helping"></i></span>
     <div>
      <p>
       <strong>Interactive stories, activities and reflection.</strong> A session is planned once a month under the guidance and supervision of Maulana Muhammad Owais.
      </p>
      <p>
       The Masjid provides a joyful, supportive environment where children learn, grow and strengthen their bond with faith and friendship.
      </p>
     </div>
    </div>
   </div>
   <div aria-labelledby="sc-purpose-tab-2" class="sc-purpose-panel" hidden="" id="sc-purpose-panel-2" role="tabpanel" tabindex="0">
    <div class="sc-purpose-panel-feature">
     <span class="sc-purpose-fa-icon" aria-hidden="true"><i class="fas fa-seedling"></i></span>
     <div>
      <p>
       <strong>Join the journey.</strong> Register your child as a member, enroll yourself as a mentor/volunteer or sponsor a child’s registration.
      </p>
      <p>
       Use the registration page below to access the official membership information and enrollment form.
      </p>
     </div>
    </div>
   </div>
   <a class="sc-purpose-register" href="<?php echo e(route('Home.registration')); ?>">
    <span><i aria-hidden="true" class="fas fa-clipboard-check"></i> Registration &amp; official form</span>
    <span aria-hidden="true">↗</span>
   </a>
  </dialog>
  <script src="<?php echo e(asset('assets/js/seerat-finishing.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/home-components.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/seerat-polish.js')); ?>"></script>





<script src="<?php echo e(asset('assets/js/search-data.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/academy.js')); ?>"></script>




<script>
document.addEventListener('submit', function (event) {
    const form = event.target;
    if (!(form instanceof HTMLFormElement) || form.dataset.scSubmitting === '1') return;
    const submit = form.querySelector('button[type="submit"], input[type="submit"]');
    if (!submit) return;
    form.dataset.scSubmitting = '1';
    submit.disabled = true;
    submit.setAttribute('aria-busy', 'true');
    if (submit.tagName === 'BUTTON') {
        submit.dataset.originalText = submit.innerHTML;
        submit.innerHTML = 'Submitting…';
    }
});
</script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Seerat-Club\resources\views/Layout/layout.blade.php ENDPATH**/ ?>