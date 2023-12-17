<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title_ar = [
            'حلول تمويلية متكاملة',
            'شركة الحل الأول للوساطة',
            'امتلك وحدة أحلامك الآن!',
        ];

        $title_en = [
            'Integrated financing solutions',
            'First Solution Brokerage EST',
            'Own your dream unit now!',
        ];

        $description_ar = [
            '<p>كل الحلول الممكنة لتحصل على تمويلك كامل و من جهات معتمدة من مؤسسة النقد السعودية</p>',

            '<p>شركة الحل الأول للوساطة دائما في خدمتكم</p>',

            '<p>يمكن لشركة الحل الأول للوساطة تمويل وحدتك التي تحلم بها في وقت قصير</p>',
        ];

        $description_en = [
            '<p>All possible solutions to obtain your full financing from entities approved by the Saudi Monetary Agency</p>',

            '<p>First Solution Brokerage Company is always at your service</p>',

            '<p>First Solution Brokerage Company can finance your dream unit in a short time</p>',

        ];

        $image = [
            '01.jpg',
            '02.jpg',
            '03.jpg',
        ];

        for ($i = 0; $i < count($title_ar); $i++) {
            $slider = Slider::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar[$i],

                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i],

                ],
                'status' => 1,

            ]);
            $slider->file()->create([
                'path' => 'seeders/sliders/' . $image[$i],
                'type' => 'image'
            ]);
        }
    }
}
