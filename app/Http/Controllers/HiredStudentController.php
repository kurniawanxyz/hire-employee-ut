<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\HiredStudent;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class HiredStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct(
        private HiredStudent $hiredStudent,
        private Branch $branch,
     ) {
     }
    public function index(Request $req)
    {
        $role = $req->role;
        $branch = $req->branch;
        $students = $this->hiredStudent->query();
        if(isset($req->role)){
            $students->where("role",$role);
        }
        if(isset($req->branch)){
            $students->where("branch_id",$branch);
        }
        $students = $students->paginate(6);
        // dd($students);
        $branchs = $this->branch->query()->get();
        return view("hire-student",compact("students","branchs","branch","role"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HiredStudent $hiredStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HiredStudent $hiredStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HiredStudent $hiredStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HiredStudent $hiredStudent)
    {
        //
    }
}
