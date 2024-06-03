<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            "Jawa"=>[
                "Semarang",
                "Jakarta",
                "Surabaya"
            ],
            "Sumatra" => [
                "Medan",
                "Pekanbaru",
                "Tanjung Enim",
                "Bandar Lampung",
                "Palembang"
            ],
            "Kalimantan" => [
                "Berau",
                "Damai",
                "Sangatta",
                "Samarinda",
                "Balikpapan",
                "Batukajang",
                "Tanjung",
                "Banjarmasin"
            ],
            "Papua" =>[
                "Sorong",
                "Timika",
                "Jayapura"
            ],
            "Sulawesi"=>[
                "Ujungpadang",
                "Manado"
            ]
            ];

            foreach ($data as $i=> $zone) {
               foreach ($zone as $city) {
                    Branch::create([
                       "city" => $city,
                       "zone" => $i,
                       "coordinate" => "-6.186016542501749, 106.93241969897582"
                    ]);
               }
            }
    }
}
