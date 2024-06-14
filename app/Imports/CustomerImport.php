<?php

namespace App\Imports;

use App\Models\Partner;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CustomerImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            Partner::updateOrCreate(
                [
                    'name' => $row['name']
                ],
                [
                    'name' => $row['name'],
                    'coordinate' => $row['coordinate']
                ]
            );
        }
    }
}
