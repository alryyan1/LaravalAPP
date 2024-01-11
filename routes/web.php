<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpecialistController;
use App\Models\Specialist;
use Illuminate\Support\Collection;
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


Route::view('/','home');
//DOCTOR

//1- SHOW
Route::get('/new/doctor',[DoctorController::class,'index'])->name('new.doctor');
Route::post('/new/doctor',[DoctorController::class,'store'])->name('save.doctor');
Route::get('/doctor/list',[DoctorController::class,'show'])->name('doctor.list');

//PATIENT

Route::get('/new/patient',[PatientController::class,'index'])->name('new.patient');
Route::get('/patient/list',[PatientController::class,'show'])->name('patient.list');
Route::post('/new/patient',[PatientController::class,'store'])->name('save.patient');


//SPECIALIST

Route::get('/new/specialist',[SpecialistController::class,'index'])->name('new.specialist');
Route::post('/new/specialist',[SpecialistController::class,'store'])->name('save.specialist');
Route::get('/specialist/list',[SpecialistController::class,'show'])->name('specialist.list');
require __DIR__.'/auth.php';
