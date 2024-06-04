<?php

namespace App\Imports;

use App\Models\Branch;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BranchImport implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            Branch::updateOrCreate(
                [
                    'city' => $row['kota']
                ],
                [
                    'zone' => $row['provinsi'],
                    'coordinate' => $row['koordinat']
                ]
            );
        }
    }
}
