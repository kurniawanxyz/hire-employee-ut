<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\HiredStudentController as AdminHiredStudentController;
use App\Http\Controllers\Admin\BranchController as AdminHiredBranchController;
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


Route::get("/hire-student",[HiredStudentController::class,"index"])->name("hiredStudent.index");
Route::post("/send-whatsapp",[HiredStudentController::class,"handleSendWhatsApp"])->name("hiredstudent.sendWhatsApp");

Route::get('/login', [Authentication::class, 'showLoginForm']);
Route::post('/login', [Authentication::class, 'login'])->name('login');
Route::post('/logout', [Authentication::class, 'logout'])->name('logout');
Route::middleware('auth.admin')->prefix('admin')->group(function(){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('/hired-students', AdminHiredStudentController::class)->names('admin.hired-students');
    Route::post('/hired-students/import', [AdminHiredStudentController::class, 'import'])->name('admin.hired-students.import');
    Route::get('/students/upload-photo', [AdminHiredStudentController::class, 'uploadPhotoView'])->name('admin.hired-students.upload-photo.view');
    Route::post('/students/upload-photo', [AdminHiredStudentController::class, 'uploadPhoto'])->name('admin.hired-students.upload-photo.post');

    Route::resource('/branches', AdminHiredBranchController::class)->names('admin.branches');
});
