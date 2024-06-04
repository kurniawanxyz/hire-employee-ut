<?php

namespace App\Imports;

use App\Models\Branch;
use App\Models\HiredStudent;
use App\Models\OjtExperienceStudents;
use App\Models\StudentScores;
use App\Models\UnitSpecialization;
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
        foreach ($rows as $row) {
            $student = HiredStudent::updateOrCreate([
                'nis' => $row['nis']
            ], [
                'name' => $row['nama'],
                'place_birth' => $row['tempat_lahir'],
                'date_birth' => $row['tempat_tanggal_lahir'],
                'email' => $row['e_mail'],
                'school_origin' => $row['asal_sekolah'],
                'major' => $row['jurusan'],
                'age' => $row['age'] ?? null,
                'height' => $row['height'] ?? null,
                'weight' => $row['weight'] ?? null,
                // TODO
                'experience' => fake()->paragraph(10),
                'batch' => $row['batch'],
                'role' => $row['role'],
                'branch_id' => Branch::firstOrCreate(
                    ['city' => $row['area_uts']],
                    [
                        'zone' => '(Not yet registered)',
                        'coordinate' => '(Not yet registered)'
                    ]
                )->id
            ]);

            StudentScores::updateOrCreate([
                'hired_student_id' => $student->id,
            ], [
                'avg_theory' => $row['nilai_rata_rata_teori'],
                'avg_practice' => $row['nilai_rata_rata_praktik']
            ]);

            UnitSpecialization::updateOrCreate([
                'hired_student_id' => $student->id,
            ], [
                'ojt_location' => $row['lokasi_ojt'],
                'rank_1' => $row['spesialisasi_unit_rank_1'],
                'rank_2' => $row['spesialisasi_unit_rank_2'],
                'rank_3' => $row['spesialisasi_unit_rank_3'],
                'rank_4' => $row['spesialisasi_unit_rank_4'],
            ]);

            OjtExperienceStudents::updateOrCreate([
                'hired_student_id' => $student->id,
            ], [
                'preventive_maintenance' => $row['experience_ojt_ps'],
                'remove_and_install' => $row['experience_ojt_ri'],
                'machine_troubleshooting' => $row['experience_ojt_ts'],
            ]);
        }
    }
}
