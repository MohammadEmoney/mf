<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $navigations = [
            'id' => 1,
            'name' => 'navigations',
            'data' => json_encode([
                'خانه' => route('front.home'),
                'محصولات' => route('front.products'),
                'درباره ما' => route('front.about'),
                'تماس با ما' => route('front.contact')
            ])
        ];
        DB::table('settings')->insert($navigations);
    }
}
