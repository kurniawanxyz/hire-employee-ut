<?php


namespace App\Http\Controllers\Admin;

    use App\Models\Behavior;
    use App\Http\Controllers\Controller;
    use App\Http\Requests\StoreHiredStudentRequest;
    use App\Http\Requests\StoreStudentPhotoRequest;
    use App\Imports\HiredStudentImport;
    use App\Models\AllScoresSpecializationUnits;
    use App\Models\Branch;
    use App\Models\HiredStudent;
    use App\Models\OjtExperienceStudents;
    use App\Models\PresentationScores;
    use App\Models\StudentScores;
    use App\Models\UnitSpecialization;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Storage;
    use Illuminate\Support\Facades\Validator;
    use Maatwebsite\Excel\Facades\Excel;
    use ZipArchive;

    class HiredStudentController extends Controller
    {
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $students = HiredStudent::with('branch');
        if ($request->has('query') && !empty($request->input('query'))) {
            $students->where('name', 'LIKE', '%' . $request->input('query') . '%');
        }

        if ($request->has('role') && !empty($request->input('role'))) {
            $students->where('role', $request->input('role'));
        }

        if ($request->has('hired') && !empty($request->input('hired'))) {
            $students->where('hasRecruit', $request->input('hired') == 'true' ? 1 : 0);
        }

        $students = $students->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.hired_student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $branch = Branch::all();
        return view('admin.hired_student.create', compact('branch'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHiredStudentRequest $request)
    {
        try {
            DB::beginTransaction();

            $hs = new HiredStudent;

            if ($request->hasFile('photo')) {
                $fileName = $request->file('photo')->hashName();
                $path = $request->file('photo')->storeAs('students_photo', $fileName);
                $hs->photo = config('app.url') . '/storage/' . $path;
            }

            $branch = Branch::where('id', $request->branch)->first();
            if (!$branch) {
                toastr()->error("Branch ID not found!");
                return back()->withInput();
            }

            $hs->branch_id = $branch->id;
            $hs->name = $request->name;
            $hs->nis = $request->nis;
            $hs->email = $request->email;
            $hs->school_origin = $request->school_origin;
            $hs->major = $request->major;
            $hs->batch = $request->batch;
            $hs->place_birth = $request->place_birth;
            $hs->date_birth = $request->date_birth;
            $hs->age = $request->age;
            $hs->height = $request->height;
            $hs->weight = $request->weight;
            $hs->role = $request->role;
            $hs->hasRecruit = ($request->recruit == 'yes') ? true : (($request->recruit == 'no') ? false : null);
            $hs->save();

            $score = new StudentScores;
            $score->hired_student_id = $hs->id;
            $score->avg_theory = $request->avg_theory;
            $score->avg_practice = $request->avg_practice;
            $score->save();

            $ojt = new OjtExperienceStudents;
            $ojt->hired_student_id = $hs->id;
            $ojt->preventive_maintenance = $request->exp_ojt_ps;
            $ojt->remove_and_install = $request->exp_ojt_ri;
            $ojt->machine_troubleshooting = $request->exp_ojt_ts;
            $ojt->save();

            $us = new UnitSpecialization;
            $us->hired_student_id = $hs->id;
            $us->ojt_location = $request->ojt_location;
            $us->rank_1 = $request->us_rank_1;
            $us->rank_2 = $request->us_rank_2;
            $us->rank_3 = $request->us_rank_3;
            $us->rank_4 = $request->us_rank_4;
            $us->save();

            $allScoreUnit = new AllScoresSpecializationUnits;
            $allScoreUnit->unit_specialization_id = $us->id;
            $allScoreUnit->ps_scania = $request->ps_scania;
            $allScoreUnit->ri_scania = $request->ri_scania;
            $allScoreUnit->ts_scania = $request->ts_scania;
            $allScoreUnit->unit_scania = $request->unit_scania;
            $allScoreUnit->ps_ud = $request->ps_ud;
            $allScoreUnit->ri_ud = $request->ri_ud;
            $allScoreUnit->ts_ud = $request->ts_ud;
            $allScoreUnit->unit_ud = $request->unit_ud;
            $allScoreUnit->ps_hd = $request->ps_hd;
            $allScoreUnit->ri_hd = $request->ri_hd;
            $allScoreUnit->ts_hd = $request->ts_hd;
            $allScoreUnit->unit_hd = $request->unit_hd;
            $allScoreUnit->ps_pc_small = $request->ps_pc_small;
            $allScoreUnit->ri_pc_small = $request->ri_pc_small;
            $allScoreUnit->ts_pc_small = $request->ts_pc_small;
            $allScoreUnit->unit_pc_small = $request->unit_pc_small;
            $allScoreUnit->ps_pc_big = $request->ps_pc_big;
            $allScoreUnit->ri_pc_big = $request->ri_pc_big;
            $allScoreUnit->ts_pc_big = $request->ts_pc_big;
            $allScoreUnit->unit_pc_big = $request->unit_pc_big;
            $allScoreUnit->ps_sbd = $request->ps_sbd;
            $allScoreUnit->ri_sbd = $request->ri_sbd;
            $allScoreUnit->ts_sbd = $request->ts_sbd;
            $allScoreUnit->unit_sbd = $request->unit_sbd;
            $allScoreUnit->ps_grader = $request->ps_grader;
            $allScoreUnit->ri_grader = $request->ri_grader;
            $allScoreUnit->ts_grader = $request->ts_grader;
            $allScoreUnit->unit_grader = $request->unit_grader;
            $allScoreUnit->ps_bulldozer_small = $request->ps_bulldozer_small;
            $allScoreUnit->ri_bulldozer_small = $request->ri_bulldozer_small;
            $allScoreUnit->ts_bulldozer_small = $request->ts_bulldozer_small;
            $allScoreUnit->unit_bulldozer_small = $request->unit_bulldozer_small;
            $allScoreUnit->ps_bulldozer_big = $request->ps_bulldozer_big;
            $allScoreUnit->ri_bulldozer_big = $request->ri_bulldozer_big;
            $allScoreUnit->ts_bulldozer_big = $request->ts_bulldozer_big;
            $allScoreUnit->unit_bulldozer_big = $request->unit_bulldozer_big;
            $allScoreUnit->ps_bomag = $request->ps_bomag;
            $allScoreUnit->ri_bomag = $request->ri_bomag;
            $allScoreUnit->ts_bomag = $request->ts_bomag;
            $allScoreUnit->unit_bomag = $request->unit_bomag;
            $allScoreUnit->ps_tadano = $request->ps_tadano;
            $allScoreUnit->ri_tadano = $request->ri_tadano;
            $allScoreUnit->ts_tadano = $request->ts_tadano;
            $allScoreUnit->unit_tadano = $request->unit_tadano;
            $allScoreUnit->ps_wheel_loader = $request->ps_wheel_loader;
            $allScoreUnit->ri_wheel_loader = $request->ri_wheel_loader;
            $allScoreUnit->ts_wheel_loader = $request->ts_wheel_loader;
            $allScoreUnit->unit_wheel_loader = $request->unit_wheel_loader;
            $allScoreUnit->save();

            $insani = new Behavior;
            $insani->hired_student_id = $hs->id;
            $insani->integritas = $request->integritas;
            $insani->santun = $request->santun;
            $insani->ahli = $request->ahli;
            $insani->berani = $request->berani;
            $insani->save();

            $presentation = new PresentationScores;
            $presentation->hired_student_id = $hs->id;
            $presentation->presentation_title_ps = $request->presentation_title_ps;
            $presentation->presentation_title_ts = $request->presentation_title_ts;
            $presentation->ps_score = $request->presentation_ps_score;
            $presentation->ts_score = $request->presentation_ts_score;
            $presentation->save();

            DB::commit();

            toastr()->success("Successfully create student!");
            return to_route('admin.hired-students.index');
        } catch (\Exception $e) {
            DB::rollBack();
            toastr()->error($e->getMessage());
            return back()->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = HiredStudent::with(['branch', 'ojt', 'score', 'specialization', 'specialization.scores', 'behavior', 'presentation_score'])->where('id', $id)->first();
        if (!$student) {
            toastr()->error("Student ID not found!");
            return back();
        }
        $branch = Branch::all();
        return view('admin.hired_student.edit', compact('student', 'branch'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreHiredStudentRequest $request, string $id)
    {
        try {
            DB::beginTransaction();

            $hs = HiredStudent::where('id', $id)->first();
            if (!$hs) {
                toastr()->error("Student ID not found!");
                return back()->withInput();
            }

            if ($request->hasFile('photo')) {
                if (strpos($hs->photo, 'storage/') !== false && Storage::exists(explode('storage/', $hs->photo)[1])) {
                    Storage::delete(explode('storage/', $hs->photo)[1]);
                }
                $fileName = $request->file('photo')->hashName();
                $path = $request->file('photo')->storeAs('students_photo', $fileName);

                $hs->photo = config('app.url') . '/storage/' . $path;
            }

            $branch = Branch::where('id', $request->branch)->first();
            if (!$branch) {
                toastr()->error("Branch ID not found!");
                return back()->withInput();
            }

            $hs->branch_id = $branch->id;
            $hs->name = $request->name;
            $hs->nis = $request->nis;
            $hs->email = $request->email;
            $hs->school_origin = $request->school_origin;
            $hs->major = $request->major;
            $hs->batch = $request->batch;
            $hs->place_birth = $request->place_birth;
            $hs->date_birth = $request->date_birth;
            $hs->age = $request->age;
            $hs->height = $request->height;
            $hs->weight = $request->weight;
            $hs->role = $request->role;
            $hs->hasRecruit = ($request->recruit == 'yes') ? true : (($request->recruit == 'no') ? false : null);
            $hs->save();

            $score = StudentScores::where('hired_student_id', $hs->id)->first();
            $score->avg_theory = $request->avg_theory;
            $score->avg_practice = $request->avg_practice;
            $score->save();

            $ojt = OjtExperienceStudents::where('hired_student_id', $hs->id)->first();
            $ojt->preventive_maintenance = $request->exp_ojt_ps;
            $ojt->remove_and_install = $request->exp_ojt_ri;
            $ojt->machine_troubleshooting = $request->exp_ojt_ts;
            $ojt->save();

            $us = UnitSpecialization::where('hired_student_id', $hs->id)->first();
            $us->ojt_location = $request->ojt_location;
            $us->rank_1 = $request->us_rank_1;
            $us->rank_2 = $request->us_rank_2;
            $us->rank_3 = $request->us_rank_3;
            $us->rank_4 = $request->us_rank_4;
            $us->save();

            $allScoreUnit = AllScoresSpecializationUnits::where('unit_specialization_id', $us->id)->first();
            $allScoreUnit->unit_specialization_id = $us->id;
            $allScoreUnit->ps_scania = $request->ps_scania;
            $allScoreUnit->ri_scania = $request->ri_scania;
            $allScoreUnit->ts_scania = $request->ts_scania;
            $allScoreUnit->unit_scania = $request->unit_scania;
            $allScoreUnit->ps_ud = $request->ps_ud;
            $allScoreUnit->ri_ud = $request->ri_ud;
            $allScoreUnit->ts_ud = $request->ts_ud;
            $allScoreUnit->unit_ud = $request->unit_ud;
            $allScoreUnit->ps_hd = $request->ps_hd;
            $allScoreUnit->ri_hd = $request->ri_hd;
            $allScoreUnit->ts_hd = $request->ts_hd;
            $allScoreUnit->unit_hd = $request->unit_hd;
            $allScoreUnit->ps_pc_small = $request->ps_pc_small;
            $allScoreUnit->ri_pc_small = $request->ri_pc_small;
            $allScoreUnit->ts_pc_small = $request->ts_pc_small;
            $allScoreUnit->unit_pc_small = $request->unit_pc_small;
            $allScoreUnit->ps_pc_big = $request->ps_pc_big;
            $allScoreUnit->ri_pc_big = $request->ri_pc_big;
            $allScoreUnit->ts_pc_big = $request->ts_pc_big;
            $allScoreUnit->unit_pc_big = $request->unit_pc_big;
            $allScoreUnit->ps_sbd = $request->ps_sbd;
            $allScoreUnit->ri_sbd = $request->ri_sbd;
            $allScoreUnit->ts_sbd = $request->ts_sbd;
            $allScoreUnit->unit_sbd = $request->unit_sbd;
            $allScoreUnit->ps_grader = $request->ps_grader;
            $allScoreUnit->ri_grader = $request->ri_grader;
            $allScoreUnit->ts_grader = $request->ts_grader;
            $allScoreUnit->unit_grader = $request->unit_grader;
            $allScoreUnit->ps_bulldozer_small = $request->ps_bulldozer_small;
            $allScoreUnit->ri_bulldozer_small = $request->ri_bulldozer_small;
            $allScoreUnit->ts_bulldozer_small = $request->ts_bulldozer_small;
            $allScoreUnit->unit_bulldozer_small = $request->unit_bulldozer_small;
            $allScoreUnit->ps_bulldozer_big = $request->ps_bulldozer_big;
            $allScoreUnit->ri_bulldozer_big = $request->ri_bulldozer_big;
            $allScoreUnit->ts_bulldozer_big = $request->ts_bulldozer_big;
            $allScoreUnit->unit_bulldozer_big = $request->unit_bulldozer_big;
            $allScoreUnit->ps_bomag = $request->ps_bomag;
            $allScoreUnit->ri_bomag = $request->ri_bomag;
            $allScoreUnit->ts_bomag = $request->ts_bomag;
            $allScoreUnit->unit_bomag = $request->unit_bomag;
            $allScoreUnit->ps_tadano = $request->ps_tadano;
            $allScoreUnit->ri_tadano = $request->ri_tadano;
            $allScoreUnit->ts_tadano = $request->ts_tadano;
            $allScoreUnit->unit_tadano = $request->unit_tadano;
            $allScoreUnit->ps_wheel_loader = $request->ps_wheel_loader;
            $allScoreUnit->ri_wheel_loader = $request->ri_wheel_loader;
            $allScoreUnit->ts_wheel_loader = $request->ts_wheel_loader;
            $allScoreUnit->unit_wheel_loader = $request->unit_wheel_loader;
            $allScoreUnit->save();

            $insani = Behavior::where('hired_student_id', $hs->id)->first();
            $insani->hired_student_id = $hs->id;
            $insani->integritas = $request->integritas;
            $insani->santun = $request->santun;
            $insani->ahli = $request->ahli;
            $insani->berani = $request->berani;
            $insani->save();

            $presentation = PresentationScores::where('hired_student_id', $hs->id)->first();
            $presentation->presentation_title_ps = $request->presentation_title_ps;
            $presentation->presentation_title_ts = $request->presentation_title_ts;
            $presentation->ps_score = $request->presentation_ps_score;
            $presentation->ts_score = $request->presentation_ts_score;
            $presentation->save();

            DB::commit();

            toastr()->success("Successfully update student!");
            return to_route('admin.hired-students.index');
        } catch (\Exception $e) {
            DB::rollBack();
            toastr()->error($e->getMessage());
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            DB::beginTransaction();

            $hs = HiredStudent::where('id', $id)->first();
            if (!$hs) {
                toastr()->error("Student ID not found!");
                return back();
            }


            if ((strpos($hs->photo, 'storage/') !== false) && (Storage::exists(explode('storage/', $hs->photo)[1]))) {
                Storage::delete(explode('storage/', $hs->photo)[1]);
            }

            $name = $hs->name;
            $hs->delete();
            DB::commit();

            toastr()->success("Successfully deleted student: $name");
            return back();
        } catch (\Exception $e) {
            DB::rollBack();
            toastr()->error($e->getMessage());
            return back();
        }
    }

    public function importView()
    {
        return view('admin.hired_student.upload.data');
    }
    public function import(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file_excel' => [
                'required',
                'file',
                'mimetypes:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'mimes:xlsx',
            ],
        ]);

        if ($validator->fails()) {
            toastr()->error("Please enter valid .xlsx file!", "Error validation");
            return back();
        }

        try {
            $file = $request->file('file_excel');

            Excel::import(new HiredStudentImport, $file);

            toastr()->success("Successfully add data!");
            return to_route('admin.hired-students.index');
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return back();
        }
    }

    public function uploadPhotoView()
    {
        return view('admin.hired_student.upload.photo');
    }
    public function uploadPhoto(StoreStudentPhotoRequest $request)
    {
        try {
            $file = $request->file('archive');
            $extractPath = storage_path('app/public/students_photo');

            $zip = new ZipArchive;

            $zip->open($file);
            $zip->extractTo($extractPath);

            $zip->close();

            toastr()->success("Successfully extract zib");
            return back();
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return back();
        }
    }
}
