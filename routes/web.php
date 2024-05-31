<?php

use App\Http\Controllers\Admin\Auth\Authentication;
use App\Http\Controllers\HiredStudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/",function(){
    return view("welcome");
})->name("get.landingpage");

Route::get("/choose-hired-student-type",function(){
    return view("choose-hired-student-type");
})->name("get.choose-hired-student-type");

Route::get("/hire-student/{role?}/{branchId?}",[HiredStudentController::class,"index"])->name("hiredStudent.index");

Route::get('admin/login', [Authentication::class, 'showLoginForm']);
Route::post('admin/login', [Authentication::class, 'login'])->name('login');
Route::middleware('auth.admin')->group(function(){

});
