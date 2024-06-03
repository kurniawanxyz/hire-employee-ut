<?php

namespace Database\Seeders;

use App\Models\HiredStudent;
use App\Models\StudentScores;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentScoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach(HiredStudent::all() as $student){
            StudentScores::create([
                'hired_student_id' => $student->id,
                'avg_theory' => fake()->numberBetween(80, 100),
                'avg_practice' => fake()->numberBetween(80, 100)
            ]);
        }
    }
}
