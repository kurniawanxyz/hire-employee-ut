<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestSendEmail;
use App\Http\Requests\RequestSendWhatsApp;
use App\Mail\HireStudentEmail;
use App\Models\Branch;
use App\Models\HiredStudent;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PSpell\Config;

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
        $students = $this->hiredStudent->query()->with("branch");
        if(isset($req->role)){
            $students->where("role",$role);
        }
        if(isset($req->branch)){
            $students->where("branch_id",$branch);
        }
        $students = $students->paginate(6);
        $branchs = $this->branch->query()->get();

        return view("hire-student",compact("students","branchs","branch","role"));
    }

    public function handleSendWhatsApp(RequestSendWhatsApp $req)
    {
        $hiredStudentId= $req->validated();
        $hiredStudentId = $hiredStudentId["students"];
        $hiredStudent = $this->hiredStudent->query()->with("branch")->whereIn("id",$hiredStudentId)->get();
        $message="";
        $telp = Config("admin_nohp");
        $message.="Halo, Saya ingin merekrut mekanik atau pekerja berikut ini"."%0A";
        foreach ($hiredStudent as $key => $value) {
            $message .= $key+1 . ". " . $value->name . " " . $value->role . " dari " . $value->branch->city . "%0A";
        }
        $url = "https://wa.me/". $telp . "?text=" . strval($message);

        return response()->json(["url"=>$url]);
    }

    public function handleSendEmail(RequestSendEmail $req)
    {
        try {
            $hiredStudentId= $req->validated();
            $hiredStudentId = $hiredStudentId["students"];
            $hiredStudent = $this->hiredStudent->query()->with("branch")->whereIn("id",$hiredStudentId)->get();
            $email = Config("app.opt_email");
            Mail::to($email)->send(new HireStudentEmail($hiredStudent));
            return response()->json(["success"=>"Successfully send email"]);
        } catch (Exception $e) {
            return response()->json(["error"=>$e->getMessage()], 500);
        }
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
