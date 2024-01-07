<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;


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

Route::middleware(['auth'])->group(function () {
    Route::get('/admin',[AdminController::class,'index'])->name('admin');
    Route::get('/add_doctors',[AdminController::class,'addDoctor'])->name('add_doctors');
    Route::get('/showfeedback',[AdminController::class,'showfeedback'])->name('feedback');
    Route::get('/showMessage',[AdminController::class,'showMessage'])->name('message');
    Route::get('/showRequests',[AdminController::class,'showRequests'])->name('request');
    Route::get('/editDoctors/{id}',[AdminController::class,'editUser'])->name('edit');

    Route::get('/doctor',[DoctorController::class,'index'])->name('doctor_index');
    Route::get('/appointment',[DoctorController::class,'appointment'])->name('view_app');
    Route::get('/history',[DoctorController::class,'viewhistory'])->name('view_history');


    Route::get('/change-status/{id}/{status}',[AdminController::class,'changeStatus'])->name('changeStatus');

});

Route::get('/', function () { return view('guest.index'); })->name('index');

Route::get('/Contact_Us', function () { return view('guest.contactUs'); })->name('contactUs');
Route::get('/About_Us', function () { return view('guest.aboutUs'); })->name('aboutUs');


Route::get('/home', function(){ return view('guest.index'); });
Route::get('/dr_appointment',[UserController::class,'takeApp'])->name('dr_appointment');
Route::get('/lab_appointment',function(){ return view('user.lab');})->name('lab_appointment');

Route::get('/user',[UserController::class,'index'])->name('user_index');
Route::get('/viewDoctor',[UserController::class,'viewDoctor'])->name('view_doctors');
Route::get('/takeLab',[UserController::class,'takeLab'])->name('take_Lab');
Route::get('/takeapp',[UserController::class,'takeApp'])->name('take_app');
Route::get('/selectDoctor',[UserController::class,'selectDoctor'])->name('selectDoctor');
Route::post('/contact',[ContactController::class,'add'])->name('contact_post');

//Route::get('/users', 'App\Http\Controllers\UserController@index');


Route::post('/doctor',[AdminController::class,'store'])->name('doctors.store');
Route::post('/sign-in',[AdminController::class,'login'])->name('sign-in');
Route::post('/sign-up',[AdminController::class,'register'])->name('sign-up');

Route::get('/form', [UserController::class, 'showForm']);

Route::get('/messages',  [ContactController::class,'showMessages'])->name('messages');
Route::get('/choosetime',  [UserController::class,'chooseDoc'])->name('chooseDoc');


Route::get('/form', 'UserController@showForm');
Route::post('/form', 'UserController@processForm');
