<?php

namespace Database\Seeders;

use App\Models\HiredStudent;
use App\Models\OjtExperienceStudents;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OjtExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (HiredStudent::all() as $student) {
            OjtExperienceStudents::create([
                'hired_student_id' => $student->id,
                'preventive_maintenance' => fake()->numberBetween(1, 100),
                'remove_and_install' => fake()->numberBetween(1, 100),
                'machine_troubleshooting' => fake()->numberBetween(1, 100),
            ]);
        }
    }
}
