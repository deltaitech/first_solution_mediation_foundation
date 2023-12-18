<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $image = ['01.png', '02.png', '03.png', '04.png', '05.png', '06.png', '07.png', '08.png'];

        for ($i = 0; $i < count($image); $i++) {
            $partner = Partner::create([
                'status' => 1,
            ]);
            $partner->file()->create([
                'path' => 'seeders/partners/' . $image[$i],
                'type' => 'image'
            ]);
        }
    }
}
