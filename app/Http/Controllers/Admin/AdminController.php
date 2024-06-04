<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\HiredStudent;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $hiredStudent = HiredStudent::count();
        $branch = Branch::count();
        return view('admin.dashboard', compact('hiredStudent', 'branch'));
    }
}
