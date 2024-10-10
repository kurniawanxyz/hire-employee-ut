<?php

namespace Database\Seeders;

use App\Models\HiredStudent;
use App\Models\UnitSpecialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            UnitSpecialization::create([
                'hired_student_id' => HiredStudent::inRandomOrder()->first()->id,
                'name' => $faker->jobTitle,
                'preventive_maintenance' => $faker->randomElement([null, 'Basic Maintenance', 'Advanced Maintenance']),
                'remove_and_install' => $faker->randomElement([null, 'Remove Parts', 'Install New Parts']),
                'machine_troubleshooting' => $faker->randomElement([null, 'Mechanical Issue', 'Electrical Issue']),
                'total' => $faker->numberBetween(1, 100),
            ]);
        }
    }
}
