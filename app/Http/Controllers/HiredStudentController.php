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
}
