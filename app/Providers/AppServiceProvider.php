<?php

namespace App\Providers;

use App\Models\BlogCategory;
use App\Models\WebsiteSetting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer('*', function ($view) {
            $blogMenuCategories = collect();
            $siteSettings = [];

            try {
                if (Schema::hasTable('blog_categories')) {
                    $blogMenuCategories = BlogCategory::query()
                        ->where('is_active', true)
                        ->orderBy('sort_order')
                        ->orderBy('name')
                        ->get();
                }

                $siteSettings = WebsiteSetting::cached();
            } catch (\Throwable) {
                // Keep public pages available while the database is unavailable
                // or while migrations are still being run.
            }

            $view->with('blogMenuCategories', $blogMenuCategories);
            $view->with('siteSettings', $siteSettings);
        });
    }
}
