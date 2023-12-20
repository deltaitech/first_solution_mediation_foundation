<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run()
    {
        $setting = Setting::create([
            'ar' => [
                'website_title' => 'شركة الحل الأول للوساطة',
                'footer_description' => '<p>شركة الحل الأول للوساطة توفر كافة حلول التمويل العقاري ، وتقدم لعملائها مجموعة متكاملة من الخدمات والقروض العقارية</p>',
                'address' => 'الرياض، المملكة العربية السعودية',
                'copyrights' => 'حقوق النشر © 2023 - شركة الحل الأول للوساطة .',
                'meta_keywords' => 'شركة الحل الأول للوساطة',
                'meta_title' => 'شركة الحل الأول للوساطة',
                'meta_description' => 'شركة الحل الأول للوساطة',
            ],
            'en' => [
                'website_title' => 'First Solution Brokerage Company',
                'footer_description' => '<p>First Solution Brokerage Company provides all real estate financing solutions, and offers its clients a full range of services and real estate loans</p>',
                'address' => 'Riyadh, Kingdom of Saudi Arabia',
                'copyrights' => 'Copyright © 2023 - First Solution Brokerage Company',
                'meta_keywords' => 'First Solution Brokerage Company',
                'meta_title' => 'First Solution Brokerage Company',
                'meta_description' => 'First Solution Brokerage Company',
            ],
            'contact_email' => 'booking@demoyoursite.xyz',
            // 'newsletter_email' => 'mohame d@app.com',
            'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d464030.3150545121!2d46.702759!3d24.684384!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03f25336a507%3A0x8efb4c0747c02a81!2sMakkah%20Al%20Mukarramah%20Br%20Rd%2C%20As%20Sulimaniyah%2C%20Riyadh%20Saudi%20Arabia!5e0!3m2!1sen!2sus!4v1699202090296!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ]);
        $setting->file()->create([
            'path' => 'seeders/settings/logo.png',
            'type' => 'logo'
        ]);

        $setting->file()->create([
            'path' => 'seeders/settings/white_logo.png',
            'type' => 'white_logo'
        ]);

        $setting->file()->create([
            'path' => 'seeders/settings/favicon.png',
            'type' => 'favicon'
        ]);

        $setting->file()->create([
            'path' => 'seeders/settings/breadcrumb.jpg',
            'type' => 'breadcrumb'
        ]);

        $setting->file()->create([
            'path' => 'seeders/settings/footer_img.jpg',
            'type' => 'footer_img'
        ]);

        // $setting->file()->create([
        //     'path' => 'favicon.ico',
        //     'type' => 'contact_img'
        // ]);
    }
}
