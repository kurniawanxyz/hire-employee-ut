<?php

namespace App\Imports;

use App\Models\AllScoresSpecializationUnits;
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
        dd($rows);
        foreach ($rows as $row) {
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
                'preventive_maintenance' => $row['experience_ojt_ps'],
                'remove_and_install' => $row['experience_ojt_ri'],
                'machine_troubleshooting' => $row['experience_ojt_ts'],
            ]);

            $us = UnitSpecialization::updateOrCreate([
                'hired_student_id' => $student->id,
            ], [
                'ojt_location' => $row['lokasi_ojt'],
                'rank_1' => $row['spesialisasi_unit_rank_1'],
                'rank_2' => $row['spesialisasi_unit_rank_2'],
                'rank_3' => $row['spesialisasi_unit_rank_3'],
                'rank_4' => $row['spesialisasi_unit_rank_4'],
            ]);

            AllScoresSpecializationUnits::updateOrCreate([
                'unit_specialization_id' => $us->id
            ], [
                'ps_scania' => $row['ps_scania'],
                'ri_scania' => $row['ri_scania'],
                'ts_scania' => $row['ts_scania'],
                'unit_scania' => $row['unit_scania'],
                'ps_ud' => $row['ps_ud'],
                'ri_ud' => $row['ri_ud'],
                'ts_ud' => $row['ts_ud'],
                'unit_ud' => $row['unit_ud'],
                'ps_hd' => $row['ps_hd'],
                'ri_hd' => $row['ri_hd'],
                'ts_hd' => $row['ts_hd'],
                'unit_hd' => $row['unit_hd'],
                'ps_pc_small' => $row['ps_pc_small'],
                'ri_pc_small' => $row['ri_pc_small'],
                'ts_pc_small' => $row['ts_pc_small'],
                'unit_pc_small' => $row['unit_pc_small'],
                'ps_pc_big' => $row['ps_pc_big'],
                'ri_pc_big' => $row['ri_pc_big'],
                'ts_pc_big' => $row['ts_pc_big'],
                'unit_pc_big' => $row['unit_pc_big'],
                'ps_sbd' => $row['ps_sbd'],
                'ri_sbd' => $row['ri_sbd'],
                'ts_sbd' => $row['ts_sbd'],
                'unit_sbd' => $row['unit_sbd'],
                'ps_grader' => $row['ps_grader'],
                'ri_grader' => $row['ri_grader'],
                'ts_grader' => $row['ts_grader'],
                'unit_grader' => $row['unit_grader'],
                'ps_bulldozer_small' => $row['ps_bulldozer_small'],
                'ri_bulldozer_small' => $row['ri_bulldozer_small'],
                'ts_bulldozer_small' => $row['ts_bulldozer_small'],
                'unit_bulldozer_small' => $row['unit_bulldozer_small'],
                'ps_bulldozer_big' => $row['ps_bulldozer_big'],
                'ri_bulldozer_big' => $row['ri_bulldozer_big'],
                'ts_bulldozer_big' => $row['ts_bulldozer_big'],
                'unit_bulldozer_big' => $row['unit_bulldozer_big'],
                'ps_bomag' => $row['ps_bomag'],
                'ri_bomag' => $row['ri_bomag'],
                'ts_bomag' => $row['ts_bomag'],
                'unit_bomag' => $row['unit_bomag'],
                'ps_tadano' => $row['ps_tadano'],
                'ri_tadano' => $row['ri_tadano'],
                'ts_tadano' => $row['ts_tadano'],
                'unit_tadano' => $row['unit_tadano'],
                'ps_wheel_loader' => $row['ps_wheel_loader'],
                'ri_wheel_loader' => $row['ri_wheel_loader'],
                'ts_wheel_loader' => $row['ts_wheel_loader'],
                'unit_wheel_loader' => $row['unit_wheel_loader']
            ]);

            Behavior::updateOrCreate([
                'hired_student_id' => $student->id
            ], [
                'integritas' => $row['integritas'],
                'santun' => $row['santun'],
                'ahli' => $row['ahli'],
                'berani' => $row['berani']
            ]);

            PresentationScores::updateOrCreate([
                'hired_student_id' => $student->id
            ], [
                'presentation_title_ps' => $row['judul_presentasi_ps'],
                'presentation_title_ts' => $row['judul_presentasi_ts'],
                'presentation_ps_score' => $row['nilai_presentasi_ps'],
                'presentation_ts_score' => $row['nilai_presentasi_ps'],
            ]);
        }
    }
}
