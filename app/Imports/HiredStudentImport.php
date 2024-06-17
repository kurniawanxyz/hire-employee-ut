<?php

namespace App\Imports;

use App\Models\Behavior;
use App\Models\Branch;
use App\Models\HiredStudent;
use App\Models\OjtExperienceStudents;
use App\Models\PresentationScores;
use App\Models\StudentScores;
use App\Models\UnitSpecialization;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
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
        $unit = config('app.unit');
        foreach ($rows as $row) {
            if (empty($row['nama'])) {
                continue;
            }
            $student = HiredStudent::updateOrCreate([
                'nis' => $row['nis']
            ], [
                'name' => $row['nama'],
                'photo' => Storage::exists("students_photo/{$row['photo']}") ? config('app.url') . '/storage/students_photo/' . $row['photo'] : asset('assets/admin/img/default_photo.png'),
                'place_birth' => $row['tempat_lahir'],
                'date_birth' => $row['tempat_tanggal_lahir'],
                'email' => $row['e_mail'],
                'school_origin' => $row['asal_sekolah'],
                'major' => $row['jurusan'],
                'age' => $row['usia'] ?? null,
                'height' => $row['tinggi_badan'] ?? null,
                'weight' => $row['berat_badan'] ?? null,
                'batch' => $row['batch'],
                'role' => $row['role'],
                'ojt_location' => $row['lokasi_ojt'],
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

            OjtExperienceStudents::updateOrCreate([
                'hired_student_id' => $student->id,
            ], [
                'preventive_maintenance' => $row['experience_total_ojt_ps'],
                'remove_and_install' => $row['experience_total_ojt_ri'],
                'machine_troubleshooting' => $row['experience_total_ojt_ts'],
            ]);

            foreach ($unit as $item) {
                if (intval($row[$item[4]]) > 0) {
                    UnitSpecialization::updateOrCreate([
                        'hired_student_id' => $student->id,
                        'name' => $item[0],
                    ], [
                        'preventive_maintenance' => $row[$item[1]],
                        'remove_and_install' => $row[$item[2]],
                        'machine_troubleshooting' => $row[$item[3]],
                        'total' => $row[$item[4]],
                    ]);
                }
            }

            Behavior::updateOrCreate([
                'hired_student_id' => $student->id
            ], [
                'integritas' => $row['nilai_bhv_integritas'],
                'santun' => $row['nilai_bhv_santun'],
                'ahli' => $row['nilai_bhv_ahli'],
                'berani' => $row['nilai_bhv_berani']
            ]);

            PresentationScores::updateOrCreate([
                'hired_student_id' => $student->id
            ], [
                'presentation_title_ps' => $row['judul_presentasi_ps'],
                'presentation_title_ts' => $row['judul_presentasi_ts'],
                'ps_score' => $row['nilai_ps'],
                'ts_score' => $row['nilai_ps'],
            ]);
        }
    }
}
