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
        $loc = $locations = [
            "SGT KPCT",
            "JYP",
            "SKL",
            "TJR LTI",
            "BTL",
            "JBY",
            "PKB",
            "JKT",
            "TJE",
            "BTG",
            "BLP",
            "PDG",
            "DMI",
            "BLG",
            "THP",
            "KSN",
            "MDO",
            "BGL",
            "RTU",
            "THE",
            "TJG BUSERT",
            "JKT ON ROAD",
            "TJG SIS ADMO",
            "PLB",
            "TRK",
            "LJS",
            "TJE MTBU",
            "SRG",
            "SPT",
            "UPG",
            "BIN",
            "STI",
            "MLW",
            "SMD",
            "MDN",
            "BKJ OTHERS",
            "PLU",
            "FRP",
            "BDL",
            "PTK",
            "TBG",
            "LRH"
        ];
        $faker = fake();
        foreach (HiredStudent::all() as $student) {
            UnitSpecialization::create([
                'hired_student_id' => $student->id,
                'ojt_location' => fake()->randomElement($loc),
                'rank_1' => $this->generateUppercaseString($faker),
                'rank_2' => $this->generateUppercaseString($faker),
                'rank_3'=> $this->generateUppercaseString($faker),
                'rank_4' => $this->generateUppercaseString($faker)
            ]);
        }
    }

    private function generateUppercaseString($faker, $minLength = 2, $maxLength = 3) {
    $length = rand($minLength, $maxLength);
    return strtoupper($faker->lexify(str_repeat('?', $length)));
}
}
