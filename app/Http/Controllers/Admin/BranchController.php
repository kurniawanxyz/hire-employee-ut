<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBranchRequest;
use App\Imports\BranchImport;
use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $branches = Branch::latest();

        if ($request->has('query') && !empty($request->input('query'))) {
            $query = $request->input('query');
            $branches->orWhere('zone', 'LIKE', '%' . $query . '%')
                ->orWhere('city', 'LIKE', '%' . $query . '%');
        }

        $branches = $branches->paginate(10);

        return view('admin.branch.index', compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $zones = Branch::distinct()->pluck('zone')->toArray();
        $zone = implode(', ', $zones);
        return view('admin.branch.create', compact('zone'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBranchRequest $request)
    {
        try {
            DB::beginTransaction();

            $br = new Branch;
            $br->zone = $request->province;
            $br->city = $request->city;
            $br->coordinate = $request->coordinate;
            $br->save();

            DB::commit();
            toastr()->success("Successfully add branch: {$br->city}");
            return to_route('admin.branches.index');
        } catch (\Exception $e) {
            DB::rollBack();
            toastr()->error($e->getMessage());
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $branch = Branch::where('id', $id)->first();
        if (!$branch) {
            toastr()->error("Branch ID not found!");
            return back();
        }

        $zones = Branch::distinct()->pluck('zone')->toArray();
        $zone = implode(', ', $zones);
        return view('admin.branch.edit', compact('branch', 'zone'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreBranchRequest $request, string $id)
    {
        try {
            DB::beginTransaction();

            $br = Branch::where('id', $id)->first();

            if (!$br) {
                toastr()->error("Branch ID not found!");
                return back();
            }

            $br->zone = $request->province;
            $br->city = $request->city;
            $br->coordinate = $request->coordinate;
            $br->save();

            DB::commit();
            toastr()->success("Successfully edit branch!");
            return to_route('admin.branches.index');
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

            $br = Branch::where('id', $id)->first();
            if (!$br) {
                toastr()->error("Branch ID not found!");
                return back();
            }

            $name = $br->city;
            $br->delete();
            DB::commit();

            toastr()->success("Successfully deleted branch: $name");
            return back();
        } catch (\Exception $e) {
            DB::rollBack();
            toastr()->error($e->getMessage());
            return back();
        }
    }

    public function importView()
    {
        return view('admin.branch.upload.data');
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

            Excel::import(new BranchImport, $file);

            toastr()->success("Successfully add data!");
            return to_route('admin.branches.index');
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return back();
        }
    }
}
