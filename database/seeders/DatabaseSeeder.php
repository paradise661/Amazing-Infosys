<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['site_main_logo', Null],
            ['site_footer_logo', Null],
            ['site_fav_icon', Null],
            ['site_icon_image', Null],
            ['site_information', 'Amazing Infosys'],
            ['site_phone', '9800000000'],
            ['site_email', 'admin@amazing.com'],
            ['site_phone_two', Null],
            ['site_email_two', Null],
            ['site_location', 'Shukra Bhawan, Thamel Marg, Kathmandu'],
            ['site_location_url', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1766.1922293957005!2d85.32724375277473!3d27.705413560014424!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19d5bea5028b%3A0x420e7a2abeb6d084!2sAmazing%20Infosys!5e0!3m2!1sen!2snp!4v1696924507339!5m2!1sen!2snp'],
            ['site_experiance', 'Amazing Infosys'],
            ['site_copyright', 'Amazing Infosys'],

            ['homepage_title', 'Amazing Infosys'],
            ['homepage_image', Null],
            ['homepage_description', 'Amazing Infosys'],
            ['homepage_seo_title', 'Amazing Infosys'],
            ['homepage_seo_description', 'Amazing Infosys'],
            ['homepage_seo_keywords', 'Amazing Infosys'],
            ['homepage_seo_schema', Null],

            ['home_contact_image', Null],
            ['about_contact_image', Null],

            ['servicetitle', 'Our Services'],
            ['serviceinfo', Null],
            ['services', Null],

            ['reviewtitle', 'REVIEW & TESTIMONIALS'],
            ['reviewinfo', Null],
            ['reviews', Null],

            ['faqtitle', 'FAQs'],
            ['faqinfo', Null],
            ['faqs', Null],

            ['team_title', 'Amazing Infosys'],
            ['team_description', 'Amazing Infosys'],

            ['blog_title', 'Our Blogs'],
            ['blog_description', 'Amazing Infosys'],
        ];

        if (count($items)) {
            foreach ($items as $item) {
                Setting::create([
                    'key' => $item[0],
                    'value' => $item[1],
                ]);
            }
        }

        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@amazing.com',
            'password' => Hash::make('Nepal@123'),
        ]);
    }
}
