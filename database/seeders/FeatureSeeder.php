<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title_ar = [
            'عرض تمويلي سريع',
            'جداول سداد مرنة',
            'تمويل نقدي',
        ];

        $title_en = [
            'Cash financing',
            'Flexible payment schedules',
            'Quick financing offer',
        ];

        $image = [
            'money.png',
            'long-term-debt.png',
            'quick.png',
        ];

        for ($i = 0; $i < count($title_ar); $i++) {
            $slider = Feature::create([
                'ar' => [
                    'title' => $title_ar[$i],
                ],

                'en' => [
                    'title' => $title_en[$i],
                ],
                'status' => 1,

            ]);
            $slider->file()->create([
                'path' => 'seeders/features/' . $image[$i],
                'type' => 'image'
            ]);
        }
    }
}
