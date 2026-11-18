<?php

namespace Database\Seeders;

use App\Models\EventCycle;
use App\Models\WebsiteSetting;
use Illuminate\Database\Seeder;

class WebsiteSettingsSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            ['general', 'site_name', 'Seerat Club for Kids', 'text'],
            ['general', 'phone', '0334 3541413', 'text'],
            ['general', 'secondary_phone', '0333 2225425', 'text'],
            ['general', 'whatsapp', '0334 3541413', 'text'],
            ['general', 'main_email', 'info@seeratclub.pk', 'email'],
            ['general', 'contact_email', 'info@seeratclub.pk', 'email'],
            ['general', 'address', 'Shafqat Masjid, 9th Gizri Lane, Phase 4, DHA, Karachi', 'textarea'],
            ['social', 'facebook_url', 'https://www.facebook.com/profile.php?id=61567792571640', 'url'],
            ['social', 'instagram_url', 'https://www.instagram.com/seeratclub/', 'url'],
            ['social', 'youtube_url', 'https://www.youtube.com/@SeeratClubForKids', 'url'],
            ['social', 'linkedin_url', '', 'url'],
            ['footer', 'footer_text', 'Involving Kids, Building Communities', 'text'],
            ['footer', 'copyright_text', 'Seerat Club for Kids. All rights reserved.', 'text'],
            ['seo', 'default_seo_title', 'Seerat Club for Kids — Involving Kids, Building Communities', 'text'],
            ['seo', 'default_seo_description', 'Interactive Seerah learning experiences for children in Karachi.', 'textarea'],
            ['seo', 'default_seo_keywords', 'Seerat Club, Seerah, children, Karachi, Islamic education', 'textarea'],
            ['branding', 'site_logo', 'assets/images/academy/page-01-img-1.webp', 'image'],
            ['branding', 'favicon', 'assets/images/seerat-favicon.ico', 'image'],
            ['branding', 'default_social_image', '', 'image'],
        ];

        foreach ($settings as [$group, $key, $value, $type]) {
            WebsiteSetting::updateOrCreate(
                ['key' => $key],
                compact('group', 'value', 'type') + ['is_public' => true]
            );
        }

        EventCycle::updateOrCreate(
            ['slug' => 'cycle-1'],
            ['name' => 'Cycle 1', 'sort_order' => 1, 'is_active' => true]
        );

        EventCycle::updateOrCreate(
            ['slug' => 'cycle-2-2026-onwards'],
            ['name' => 'Cycle 2 · 2026 onwards', 'sort_order' => 2, 'is_active' => true]
        );
    }
}
