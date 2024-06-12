<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\Authentication;
use App\Http\Controllers\Admin\BranchController as AdminHiredBranchController;
use App\Http\Controllers\Admin\CustomerController as AdminCustomerController;
use App\Http\Controllers\Admin\HiredStudentController as AdminHiredStudentController;
use App\Http\Controllers\HiredStudentController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\PartnerController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/optimize', function () {
    // if (app()->environment('local', 'staging')) {
        Artisan::call('optimize:clear');
        Artisan::call('storage:link');
        return 'optimized';
    // }
    // return 'Not allowed';
});
Route::get('/key', function () {
    // if (app()->environment('local', 'staging')) {
        Artisan::call('key:generate');
        // Artisan::call('storage:clear');
        return 'optimized';
    // }
    // return 'Not allowed';
});



Route::get("/get-customerOrPatners",[PartnerController::class,"getData"])->name("customer.getData");

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
    Route::resource('/hired-students', AdminHiredStudentController::class)->except(['show'])->names('admin.hired-students');
    Route::prefix('/hired-students/upload')->group(function(){
        Route::get('/photo', [AdminHiredStudentController::class, 'uploadPhotoView'])->name('admin.hired-students.upload-photo.view');
        Route::post('/photo', [AdminHiredStudentController::class, 'uploadPhoto'])->name('admin.hired-students.upload-photo.post');
        Route::get('/data', [AdminHiredStudentController::class, 'importView'])->name('admin.hired-students.import.view');
        Route::post('/data', [AdminHiredStudentController::class, 'import'])->name('admin.hired-students.import.post');
    });

    Route::resource('/customer', AdminCustomerController::class)->except(['show'])->names('admin.customer');

    Route::get("/landingPage",[LandingPageController::class,"edit"])->name("admin.landingPages.index");
    Route::put("/update-landingpage",[LandingPageController::class,"update"])->name("admin.landingPages.update");
    Route::resource('/branches', AdminHiredBranchController::class)->names('admin.branches');
    Route::get('/branches/upload/data', [AdminHiredBranchController::class, 'importView'])->name('admin.branches.import.view');
    Route::post('/branches/upload/data', [AdminHiredBranchController::class, 'import'])->name('admin.branches.import.post');

    Route::get("/customer-and-patners",[PartnerController::class,"index"])->name("admin.partner.index");
    Route::get("/create/customer-and-patners/",[PartnerController::class,"create"])->name("admin.partner.create");
    Route::get("/create/import-customer-and-patners",[PartnerController::class,"createWithImport"])->name("admin.partner.import_page");
    Route::get("/edit/customer-and-patners/{customer}",[PartnerController::class,"edit"])->name("admin.partner.edit");
    Route::post("/create-customer-and-patners",[PartnerController::class,"store"])->name("admin.partner.store");
    Route::put("/update-customer-and-patners/{customer}",[PartnerController::class,"update"])->name("admin.partner.update");
    Route::post("/import-customer-and-patners",[PartnerController::class,"importData"])->name("admin.partner.import");
    Route::delete("/delete-customer/{customer}",[PartnerController::class,"destroy"])->name("admin.partner.destroy");
});
