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
        $students = $this->hiredStudent->query();
        if(isset($req->role)){
            $students->where("role",$req->role);
        }
        if(isset($req->branch)){
            $students->where("branch_id",$req->branch);
        }
        $students->get();
        $branchs = $this->branch->query()->get();
        return view("hire-student",compact("students","branchs"));
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
