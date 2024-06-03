<?php

namespace App\Imports;

use App\Models\Branch;
use App\Models\HiredStudent;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class HiredStudentImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach($rows as $row){
            HiredStudent::create([
                'name' => $row['name'],
                'age' => $row['age'],
                'height' => $row['height'],
                'weight' => $row['weight'],
                // TODO
                'experience' => fake()->paragraph(10),
                'role' => $row['role'],
                'branch_id' => Branch::where("city", "LIKE", '%' . $row['branch'] . '%')->first()->id
            ]);
        }
    }
}
