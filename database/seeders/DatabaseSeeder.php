<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        // $this->call(BranchSeeder::class);
        // $this->call(StudentSeeder::class);
        // $this->call(StudentScoresSeeder::class);
        // $this->call(UnitSpecializationSeeder::class);
        // $this->call(OjtExperienceSeeder::class);
        $this->call(LandingPageSeeder::class);
    }
}
