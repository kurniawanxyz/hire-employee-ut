<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\HiredStudentController as AdminHiredStudentController;
use App\Http\Controllers\Admin\BranchController as AdminHiredBranchController;
use App\Http\Controllers\Admin\Auth\Authentication;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HiredStudentController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LangController;
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

Route::get("/",[LandingPageController::class,"index"])->name("get.landingpage");



Route::get("/get-customerOrPatners",[CustomerController::class,"getData"])->name("customer.getData");

Route::prefix("customer")->middleware(["auth.customer"])->group(function(){
    Route::get("/hire-student",[HiredStudentController::class,"index"])->name("hiredStudent.index");
    Route::get("/hire-student/detail/{id}",[HiredStudentController::class,"show"])->name("hriedStudent.show");
});

Route::post("/send-whatsapp",[HiredStudentController::class,"handleSendWhatsApp"])->name("hiredstudent.sendWhatsApp");
Route::post("/send-email",[HiredStudentController::class,"handleSendEmail"])->name("hiredstudent.sendEmail");

Route::get('/login', [Authentication::class, 'showLoginForm']);
Route::post('/login', [Authentication::class, 'login'])->name('login');
Route::post('/logout', [Authentication::class, 'logout'])->name('logout');

Route::get('/lang/{locale}',[LangController::class,"changeLanguage"])->name("get.changeLanguage");

Route::middleware('auth.admin')->prefix('admin')->group(function(){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('/hired-students', AdminHiredStudentController::class)->names('admin.hired-students');
    Route::prefix('/hired-students/upload')->group(function(){
        Route::get('/photo', [AdminHiredStudentController::class, 'uploadPhotoView'])->name('admin.hired-students.upload-photo.view');
        Route::post('/photo', [AdminHiredStudentController::class, 'uploadPhoto'])->name('admin.hired-students.upload-photo.post');
        Route::get('/data', [AdminHiredStudentController::class, 'importView'])->name('admin.hired-students.import.view');
        Route::post('/data', [AdminHiredStudentController::class, 'import'])->name('admin.hired-students.import.post');
    });

    Route::get("/landingPage",[LandingPageController::class,"edit"])->name("admin.landingPages.index");
    Route::put("/update-landingpage",[LandingPageController::class,"update"])->name("admin.landingPages.update");
    Route::resource('/branches', AdminHiredBranchController::class)->names('admin.branches');
    Route::get('/branches/upload/data', [AdminHiredBranchController::class, 'importView'])->name('admin.branches.import.view');
    Route::post('/branches/upload/data', [AdminHiredBranchController::class, 'import'])->name('admin.branches.import.post');

    Route::get("/customerOrPatners/{names?}",[CustomerController::class,"index"])->name("admin.customer.index");
    Route::get("/create/customerOrPatners/",[CustomerController::class,"create"])->name("admin.customer.create");
    Route::get("/create/import-customerOrPatners",[CustomerController::class,"createWithImport"])->name("admin.customer.import_page");
    Route::get("/edit/customerOrPatners/{customer}",[CustomerController::class,"edit"])->name("admin.customer.edit");
    Route::post("/create-customerOrPatners",[CustomerController::class,"store"])->name("admin.customer.store");
    Route::put("/update-customerOrPatners/{customer}",[CustomerController::class,"update"])->name("admin.customer.update");
    Route::post("/import-customerOrPatners",[CustomerController::class,"importData"])->name("admin.customer.import");
    Route::delete("/delete-customer/{customer}",[CustomerController::class,"destroy"])->name("admin.customer.destroy");
});
