<?php

use App\Http\Controllers\Admin\ActivityLogController as AdminActivityLogController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\ContactSubmissionController as AdminContactController;
use App\Http\Controllers\Admin\ContentController as AdminContentController;
use App\Http\Controllers\Admin\VolunteerSubmissionController as AdminVolunteerController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\FeedbackSubmissionController as AdminFeedbackController;
use App\Http\Controllers\Admin\EventCycleController as AdminEventCycleController;
use App\Http\Controllers\Admin\GirlsRegistrationController as AdminGirlsRegistrationController;
use App\Http\Controllers\Admin\MediaController as AdminMediaController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\Admin\RegistrationController as AdminRegistrationController;
use App\Http\Controllers\Admin\RoleController as AdminRoleController;
use App\Http\Controllers\Admin\SettingController as AdminSettingController;
use App\Http\Controllers\Admin\SeoController as AdminSeoController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\AsSaadiqAlAmeenController;
use App\Http\Controllers\AtTaahirahController;
use App\Http\Controllers\BattleOfBadarController;
use App\Http\Controllers\ChosenHeartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Cycle1Controller;
use App\Http\Controllers\Cycle2Controller;
use App\Http\Controllers\FirstCallInMadinahController;
use App\Http\Controllers\FirstRespondersController;
use App\Http\Controllers\FatahEMeccaController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FriendlyFireController;
use App\Http\Controllers\GhazwaEKhandaqController;
use App\Http\Controllers\GhazwaEKhyberController;
use App\Http\Controllers\GhazwaEUhudController;
use App\Http\Controllers\GirlController;
use App\Http\Controllers\HijratToMedinaController;
use App\Http\Controllers\IsraMirajController;
use App\Http\Controllers\IstiqbaalERamadanController;
use App\Http\Controllers\LettersToKingsController;
use App\Http\Controllers\LegacyPageController;
use App\Http\Controllers\OnceUponATimeInJannatController;
use App\Http\Controllers\PastEventsController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\ProphetInMakingController;
use App\Http\Controllers\PublicEventController;
use App\Http\Controllers\PursuitOfSubmissionController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\TreatyOfHudaybiaController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\YearOfTheElephantController;
use App\Http\Controllers\YoungHeartsOfMeccaController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\BlogCategoryController as AdminBlogCategoryController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('Home.welcome');

Route::get('/sitemap.xml', SitemapController::class)->name('sitemap');
Route::get('/robots.txt', fn () => response("User-agent: *\nAllow: /\nDisallow: /admin\nSitemap: ".url('/sitemap.xml')."\n", 200, ['Content-Type' => 'text/plain']))->name('robots');


Route::get('/contact', [ContactController::class, 'index'])->name('Home.contact');
Route::post('/contact', [ContactController::class, 'store'])
    ->middleware('throttle:8,1')
    ->name('contact.store');

Route::get('/feedback', [FeedbackController::class, 'index'])->name('Home.feedback');
Route::post('/feedback', [FeedbackController::class, 'store'])
    ->middleware('throttle:8,1')
    ->name('feedback.store');

Route::get('/registration', [RegistrationController::class, 'index'])->name('Home.registration');
Route::post('/registration', [RegistrationController::class, 'store'])
    ->middleware('throttle:6,1')
    ->name('registration.store');

Route::get('/girls', [GirlController::class, 'index'])->name('Home.girls');
Route::post('/girls', [GirlController::class, 'store'])
    ->middleware('throttle:6,1')
    ->name('girls.store');

Route::get('/podcast', [PodcastController::class, 'index'])->name('Home.podcast');
Route::get('/volunteer', [VolunteerController::class, 'index'])->name('Home.volunteer');
Route::post('/volunteer', [VolunteerController::class, 'store'])->middleware('throttle:6,1')->name('volunteer.store');

Route::get('/events', [PublicEventController::class, 'index'])->name('events.index');
Route::get('/events/{event:slug}', [PublicEventController::class, 'show'])->name('events.show');
Route::get(
    '/blog',
    [BlogController::class, 'index']
)->name('blog.index');

Route::get(
    '/blog/{blog}',
    [BlogController::class, 'show']
)->name('blog.show');

// Backward-compatible redirects for legacy URLs that no longer have standalone HTML files.
Route::redirect('/about', '/#about', 301)->name('legacy.about');
Route::redirect('/gallery', '/past-events', 301)->name('legacy.gallery');
Route::redirect('/search', '/blog', 301)->name('legacy.search');
Route::redirect('/search-found', '/blog', 301)->name('legacy.search-found');
Route::redirect('/search-not-found', '/blog', 301)->name('legacy.search-not-found');

Route::redirect('/story/true-origins-of-christmas', '/blog', 301)->name('legacy.story.true-origins-of-christmas');
Route::redirect('/story/the-friendly-fire', '/past-events/cycle-1/the-friendly-fire', 301)->name('legacy.story.the-friendly-fire');
Route::redirect('/story/the-7-habits-of-historys-most-influential-leader', '/blog', 301)->name('legacy.story.the-7-habits-of-historys-most-influential-leader');
Route::redirect('/story/raised-by-the-sands-chosen-by-destiny', '/blog', 301)->name('legacy.story.raised-by-the-sands-chosen-by-destiny');
Route::redirect('/story/the-year-of-the-elephant', '/past-events/cycle-1/the-year-of-the-elephant', 301)->name('legacy.story.the-year-of-the-elephant');
Route::redirect('/story/seerat-quest-2024', '/blog', 301)->name('legacy.story.seerat-quest-2024');
Route::redirect('/story/from-the-ashes-of-gaza-to-the-victory-of-makkah', '/blog', 301)->name('legacy.story.from-the-ashes-of-gaza-to-the-victory-of-makkah');
Route::redirect('/story/once-upon-a-time-in-jannat', '/past-events/cycle-1/once-upon-a-time-in-jannat', 301)->name('legacy.story.once-upon-a-time-in-jannat');

// Preserve old indexed .html URLs with permanent redirects.
$legacyRedirects = [
    '/about.html' => '/#about',
    '/blog.html' => '/blog',
    '/blog-camp.html' => '/blog?category=seerat-camp',
    '/blog-club.html' => '/blog?category=seerat-club',
    '/blog-miscellaneous.html' => '/blog?category=miscellaneous',
    '/gallery1.html' => '/past-events',
    '/events.html' => '/past-events',
    '/cycle-1.html' => '/past-events/cycle-1',
    '/cycle-2.html' => '/past-events/cycle-2-2026-onwards',
    '/event-once-upon-a-time-in-jannat.html' => '/past-events/cycle-1/once-upon-a-time-in-jannat',
    '/event-the-friendly-fire.html' => '/past-events/cycle-1/the-friendly-fire',
    '/event-the-pursuit-of-submission.html' => '/past-events/cycle-1/the-pursuit-of-submission',
    '/event-the-year-of-the-elephant.html' => '/past-events/cycle-1/the-year-of-the-elephant',
    '/event-the-chosen-heart.html' => '/past-events/cycle-1/the-chosen-heart',
    '/event-the-prophet-in-making.html' => '/past-events/cycle-1/the-prophet-in-making',
    '/event-as-saadiq-al-ameen.html' => '/past-events/cycle-1/as-saadiq-al-ameen',
    '/event-at-taahirah.html' => '/past-events/cycle-1/at-taahirah',
    '/event-the-first-responders.html' => '/past-events/cycle-1/the-first-responders',
    '/event-isra-miraj.html' => '/past-events/cycle-1/isra-miraj',
    '/event-hijrat-to-medina.html' => '/past-events/cycle-1/hijrat-to-medina',
    '/event-young-hearts-of-mecca.html' => '/past-events/cycle-1/young-hearts-of-mecca',
    '/event-the-first-call-in-madinah.html' => '/past-events/cycle-2-2026-onwards/the-first-call-in-madinah',
    '/event-istiqbaal-e-ramadan.html' => '/past-events/cycle-2-2026-onwards/istiqbaal-e-ramadan',
    '/event-battle-of-badar.html' => '/past-events/cycle-2-2026-onwards/battle-of-badar',
    '/event-ghazwa-e-uhud.html' => '/past-events/cycle-2-2026-onwards/ghazwa-e-uhud',
    '/event-ghazwa-e-khandaq.html' => '/past-events/cycle-2-2026-onwards/ghazwa-e-khandaq',
    '/event-treaty-of-hudaybia.html' => '/past-events/cycle-2-2026-onwards/treaty-of-hudaybia',
    '/event-ghazwa-e-khyber.html' => '/past-events/cycle-2-2026-onwards/ghazwa-e-khyber',
    '/event-letters-to-kings.html' => '/past-events/cycle-2-2026-onwards/letters-to-kings',
    '/event-fatah-e-mecca.html' => '/past-events/cycle-2-2026-onwards/fatah-e-mecca',
];

foreach ($legacyRedirects as $from => $to) {
    Route::redirect($from, $to, 301);
}

Route::prefix('past-events')->name('past-events.')->group(function () {
    Route::get('/', [PastEventsController::class, 'index'])->name('index');

    Route::prefix('cycle-1')->name('cycle-1.')->group(function () {
        Route::get('/', [Cycle1Controller::class, 'index'])->name('index');
        Route::get('/once-upon-a-time-in-jannat', [OnceUponATimeInJannatController::class, 'index'])->name('once-upon-a-time-in-jannat');
        Route::get('/the-friendly-fire', [FriendlyFireController::class, 'index'])->name('the-friendly-fire');
        Route::get('/the-pursuit-of-submission', [PursuitOfSubmissionController::class, 'index'])->name('the-pursuit-of-submission');
        Route::get('/the-year-of-the-elephant', [YearOfTheElephantController::class, 'index'])->name('the-year-of-the-elephant');
        Route::get('/the-chosen-heart', [ChosenHeartController::class, 'index'])->name('the-chosen-heart');
        Route::get('/the-prophet-in-making', [ProphetInMakingController::class, 'index'])->name('the-prophet-in-making');
        Route::get('/as-saadiq-al-ameen', [AsSaadiqAlAmeenController::class, 'index'])->name('as-saadiq-al-ameen');
        Route::get('/at-taahirah', [AtTaahirahController::class, 'index'])->name('at-taahirah');
        Route::get('/the-first-responders', [FirstRespondersController::class, 'index'])->name('the-first-responders');
        Route::get('/isra-miraj', [IsraMirajController::class, 'index'])->name('isra-miraj');
        Route::get('/hijrat-to-medina', [HijratToMedinaController::class, 'index'])->name('hijrat-to-medina');
        Route::get('/young-hearts-of-mecca', [YoungHeartsOfMeccaController::class, 'index'])->name('young-hearts-of-mecca');
    });

    Route::prefix('cycle-2-2026-onwards')->name('cycle-2-2026-onwards.')->group(function () {
        Route::get('/', [Cycle2Controller::class, 'index'])->name('index');
        Route::get('/the-first-call-in-madinah', [FirstCallInMadinahController::class, 'index'])->name('the-first-call-in-madinah');
        Route::get('/istiqbaal-e-ramadan', [IstiqbaalERamadanController::class, 'index'])->name('istiqbaal-e-ramadan');
        Route::get('/battle-of-badar', [BattleOfBadarController::class, 'index'])->name('battle-of-badar');
        Route::get('/ghazwa-e-uhud', [GhazwaEUhudController::class, 'index'])->name('ghazwa-e-uhud');
        Route::get('/ghazwa-e-khandaq', [GhazwaEKhandaqController::class, 'index'])->name('ghazwa-e-khandaq');
        Route::get('/treaty-of-hudaybia', [TreatyOfHudaybiaController::class, 'index'])->name('treaty-of-hudaybia');
        Route::get('/ghazwa-e-khyber', [GhazwaEKhyberController::class, 'index'])->name('ghazwa-e-khyber');
        Route::get('/letters-to-kings', [LettersToKingsController::class, 'index'])->name('letters-to-kings');
        Route::get('/fatah-e-mecca', [FatahEMeccaController::class, 'index'])->name('fatah-e-mecca');
    });
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AdminAuthController::class, 'create'])->name('login');
        Route::post('/login', [AdminAuthController::class, 'store'])
            ->middleware('throttle:5,1')
            ->name('login.store');
    });

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::post('/logout', [AdminAuthController::class, 'destroy'])->name('logout');
        Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');

        Route::get('/profile', [AdminProfileController::class, 'edit'])->name('profile.edit');
        Route::put('/profile', [AdminProfileController::class, 'update'])->name('profile.update');

        Route::middleware('permission:users.manage')->group(function () {
            Route::resource('users', AdminUserController::class)->except(['show']);
            Route::get('/roles', [AdminRoleController::class, 'index'])->name('roles.index');
            Route::get('/roles/create', [AdminRoleController::class, 'create'])->name('roles.create');
            Route::post('/roles', [AdminRoleController::class, 'store'])->name('roles.store');
            Route::get('/roles/{role}/edit', [AdminRoleController::class, 'edit'])->name('roles.edit');
            Route::put('/roles/{role}', [AdminRoleController::class, 'update'])->name('roles.update');
            Route::delete('/roles/{role}', [AdminRoleController::class, 'destroy'])->name('roles.destroy');
        });

        Route::middleware('permission:seo.manage')->group(function () {
            Route::get('/seo', [AdminSeoController::class, 'index'])->name('seo.index');
            Route::put('/seo', [AdminSeoController::class, 'update'])->name('seo.update');
        });

        Route::middleware('permission:settings.manage')->group(function () {
            Route::get('/settings', [AdminSettingController::class, 'edit'])->name('settings.edit');
            Route::put('/settings', [AdminSettingController::class, 'update'])->name('settings.update');
        });

        Route::middleware('permission:content.manage')->group(function () {
            Route::get('/content', [AdminContentController::class, 'index'])->name('content.index');
            Route::get('/content/{contentBlock}/edit', [AdminContentController::class, 'edit'])->name('content.edit');
            Route::put('/content/{contentBlock}', [AdminContentController::class, 'update'])->name('content.update');

            Route::post('/blogs/upload-image', [AdminBlogController::class, 'uploadSummernoteImage'])->name('blogs.upload-image');
            Route::resource('blog-categories', AdminBlogCategoryController::class)->except(['show']);
            Route::resource('blogs', AdminBlogController::class);
        });

        Route::middleware('permission:media.manage')->group(function () {
            Route::get('/media', [AdminMediaController::class, 'index'])->name('media.index');
            Route::post('/media', [AdminMediaController::class, 'store'])->name('media.store');
            Route::delete('/media/{media}', [AdminMediaController::class, 'destroy'])->name('media.destroy');
        });

        Route::middleware('permission:events.manage')->group(function () {
            Route::resource('events', AdminEventController::class)->except(['show']);
            Route::resource('cycles', AdminEventCycleController::class)->except(['show']);
            Route::delete('/event-media/{media}', [AdminEventController::class, 'destroyMedia'])->name('event-media.destroy');
        });

        Route::middleware('permission:registrations.manage')->group(function () {
            Route::get('/registrations/export', [AdminRegistrationController::class, 'export'])->name('registrations.export');
            Route::get('/registrations', [AdminRegistrationController::class, 'index'])->name('registrations.index');
            Route::get('/registrations/{registration}', [AdminRegistrationController::class, 'show'])->name('registrations.show');
            Route::put('/registrations/{registration}', [AdminRegistrationController::class, 'update'])->name('registrations.update');
            Route::delete('/registrations/{registration}', [AdminRegistrationController::class, 'destroy'])->name('registrations.destroy');

            Route::get('/girls-registrations', [AdminGirlsRegistrationController::class, 'index'])->name('girls.index');
            Route::get('/girls-registrations/{girlsRegistration}', [AdminGirlsRegistrationController::class, 'show'])->name('girls.show');
            Route::put('/girls-registrations/{girlsRegistration}', [AdminGirlsRegistrationController::class, 'update'])->name('girls.update');
            Route::delete('/girls-registrations/{girlsRegistration}', [AdminGirlsRegistrationController::class, 'destroy'])->name('girls.destroy');
        });

        Route::middleware('permission:contacts.manage')->group(function () {
            Route::get('/contacts', [AdminContactController::class, 'index'])->name('contacts.index');
            Route::get('/contacts/{contact}', [AdminContactController::class, 'show'])->name('contacts.show');
            Route::put('/contacts/{contact}', [AdminContactController::class, 'update'])->name('contacts.update');
            Route::delete('/contacts/{contact}', [AdminContactController::class, 'destroy'])->name('contacts.destroy');

            Route::get('/feedback', [AdminFeedbackController::class, 'index'])->name('feedback.index');
            Route::get('/feedback/{feedback}', [AdminFeedbackController::class, 'show'])->name('feedback.show');
            Route::put('/feedback/{feedback}', [AdminFeedbackController::class, 'update'])->name('feedback.update');
            Route::delete('/feedback/{feedback}', [AdminFeedbackController::class, 'destroy'])->name('feedback.destroy');
        });

        Route::middleware('permission:volunteers.manage')->group(function () {
            Route::get('/volunteers', [AdminVolunteerController::class, 'index'])->name('volunteers.index');
            Route::get('/volunteers/{volunteer}', [AdminVolunteerController::class, 'show'])->name('volunteers.show');
            Route::put('/volunteers/{volunteer}', [AdminVolunteerController::class, 'update'])->name('volunteers.update');
            Route::delete('/volunteers/{volunteer}', [AdminVolunteerController::class, 'destroy'])->name('volunteers.destroy');
        });

        Route::get('/activity', [AdminActivityLogController::class, 'index'])
            ->middleware('permission:activity.view')
            ->name('activity.index');
    });
});
