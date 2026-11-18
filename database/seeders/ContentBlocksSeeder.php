<?php

namespace Database\Seeders;

use App\Models\ContentBlock;
use Illuminate\Database\Seeder;

class ContentBlocksSeeder extends Seeder
{
    public function run(): void
    {
        $blocks = [
            [
                'page' => 'home', 'block_key' => 'hero_primary', 'label' => 'Homepage Hero · Primary',
                'title' => 'My Prophet ﷺ, My Hero.',
                'subtitle' => 'Monthly Seerah experiences for children aged 6 to 16, bringing stories, activities and reflection together at the Masjid.',
                'image_path' => 'assets/images/seerat-pdf/page-17-img-1.jpeg',
                'link_text' => 'Register your child ↗', 'link_url' => '/registration', 'sort_order' => 10,
                'metadata' => ['kicker' => 'SEERAT CLUB FOR KIDS · KARACHI', 'secondary_link_text' => 'Explore the journey', 'secondary_link_url' => '#sc-learning-journey'],
            ],
            [
                'page' => 'home', 'block_key' => 'hero_secondary', 'label' => 'Homepage Hero · Secondary',
                'title' => 'Stories to discover. Lessons to live.',
                'subtitle' => 'Monthly Seerah experiences for children aged 6 to 16, bringing stories, activities and reflection together at the Masjid.',
                'image_path' => 'assets/images/seerat-pdf/page-12-img-1.jpeg',
                'link_text' => 'Register your child ↗', 'link_url' => '/registration', 'sort_order' => 20,
                'metadata' => ['kicker' => 'INTERACTIVE STORIES · ACTIVITIES · REFLECTION', 'secondary_link_text' => 'Explore the journey', 'secondary_link_url' => '#sc-learning-journey'],
            ],
            [
                'page' => 'home', 'block_key' => 'intro', 'label' => 'Homepage · Why Seerat Club',
                'title' => 'Not another lesson. A place where faith becomes part of childhood.',
                'body' => 'A community based initiative for children aged 6 to 16, Seerat Club focuses on learning about the life of Prophet Muhammad ﷺ. Through monthly interactive stories, activities and reflection, children understand the Seerah and apply its lessons in daily life.',
                'image_path' => 'assets/images/seerat-pdf/page-12-img-1.jpeg',
                'sort_order' => 30,
                'metadata' => ['eyebrow' => 'Why Seerat Club'],
            ],
            [
                'page' => 'home', 'block_key' => 'featured_events', 'label' => 'Homepage · Events Heading',
                'title' => 'Featured Seerat Club sessions',
                'subtitle' => 'Explore recent chapters, activities and reflections from the Seerah journey.',
                'sort_order' => 40,
            ],
            [
                'page' => 'contact', 'block_key' => 'hero', 'label' => 'Contact · Hero',
                'title' => 'We would love to hear from you.',
                'subtitle' => 'Questions about Seerat Club, registrations, volunteering or upcoming sessions? Send us a message and the team will respond as soon as possible.',
                'sort_order' => 10,
                'metadata' => ['eyebrow' => 'GET IN TOUCH'],
            ],
            [
                'page' => 'registration', 'block_key' => 'hero', 'label' => 'Registration · Hero',
                'title' => 'Begin Your Child’s Seerat Journey.',
                'subtitle' => 'Register your child for meaningful Seerah learning, engaging activities, reflection and community inside the Masjid.',
                'sort_order' => 10,
                'metadata' => ['eyebrow' => 'Seerat Club Membership', 'age_text' => 'For children aged 6 to 16', 'title_prefix' => 'Begin Your Child’s', 'title_emphasis' => 'Seerat Journey.'],
            ],
            [
                'page' => 'girls', 'block_key' => 'hero', 'label' => 'Girls Registration · Hero',
                'title' => 'Begin Her Seerat Journey.',
                'subtitle' => 'Join Seerat Club for a full year of engaging Islamic learning and activities.',
                'image_path' => 'assets/images/seerat-pdf/page-26-img-2.jpeg',
                'sort_order' => 10,
                'metadata' => ['eyebrow' => 'SEERAT CLUB · KARACHI', 'title_prefix' => 'Begin Her', 'title_emphasis' => 'Seerat Journey.'],
            ],
            [
                'page' => 'volunteer', 'block_key' => 'hero', 'label' => 'Volunteer · Hero',
                'title' => 'Help children learn, create and belong.',
                'subtitle' => 'Sponsor a child, contribute ideas or volunteer with Seerat Club.',
                'image_path' => 'assets/images/seerat-pdf/page-25-img-1.jpeg',
                'sort_order' => 10,
                'metadata' => ['eyebrow' => 'SEERAT CLUB · KARACHI', 'title_prefix' => 'Help children learn,', 'title_emphasis' => 'create and belong.'],
            ],
        ];

        foreach ($blocks as $block) {
            ContentBlock::updateOrCreate(
                ['page' => $block['page'], 'block_key' => $block['block_key']],
                $block + ['is_active' => true]
            );
        }
    }
}
