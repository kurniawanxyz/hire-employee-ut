<?php

namespace Database\Seeders;

use App\Models\LandingPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LandingPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LandingPage::create([
            'hero_section_image_1' => 'assets/img/slider/9.jpg',
            'hero_section_image_2' => 'assets/img/slider/8.jpg',
            'hero_section_image_3' => 'assets/img/slider/1.jpg',
            'manpower_channelled' => 22000,
            'client' => 10000,
            'youtube' => 'https://www.youtube.com/@UTSchoolinsani',
            'instagram' => 'https://www.instagram.com/utschoolinsani/',
            'facebook' => 'https://www.facebook.com/utschoolinsani',
            'tiktok' => 'https://www.tiktok.com/@utschool.unitedtractors',
            'twitter' => 'https://x.com/utschoolinsani',
            'operational_start_day' => 'monday',
            'operational_end_day' => 'friday',
            'operational_start_time' => '07:30:00',
            'operational_end_time' => '16:30:00'
        ]);
    }
}
