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
            $province = $row['provinsi'];
            $city = $row['kota'];

            $existingBranch = Branch::where('city', 'LIKE', "%$city%")->first();

            if ($existingBranch) {
                $existingBranch->update([
                    'zone' => $province,
                    'city' => $city,
                    'coordinate' => $row['koordinat']
                ]);
            } else {
                Branch::create([
                    'zone' => $province,
                    'city' => $city,
                    'coordinate' => $row['koordinat']
                ]);
            }
        }
    }
}
