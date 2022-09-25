<?php

use App\Http\Controllers\DinamisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\Absep21Controller;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PerbulanController;
use App\Http\Controllers\BulanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

////FROM LOGIN & REGISTER
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/postregister',[AuthController::class,'postregister']);

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/postlogin',[AuthController::class,'postlogin']);

////KERJAPRAKTEK
Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');

//Pembentukan Tabel Mahasiswa
Route::get('/mahasiswa',[MahasiswaController::class,'index']);
Route::get('/mahasiswa/create',[MahasiswaController::class,'create']);
Route::post('/mahasiswa/store',[MahasiswaController::class,'store']);
Route::get('/mahasiswa/{id}/edit',[MahasiswaController::class,'edit']);
Route::post('/mahasiswa/{id}/update',[MahasiswaController::class,'update']);
Route::get('/mahasiswa/{id}/delete',[MahasiswaController::class,'destroy']);
Route::get('/mahasiswa/search',[MahasiswaController::class,'search']);

//Pembentukan Tabel Karyawan
Route::get('/karyawan',[KaryawanController::class,'index']);
Route::get('/karyawan/create',[KaryawanController::class,'create']);
Route::post('/karyawan/store',[KaryawanController::class,'store']);
Route::get('/karyawan/{id}/edit',[KaryawanController::class,'edit']);
Route::post('/karyawan/{id}/update',[KaryawanController::class,'update']);
Route::get('/karyawan/{id}/delete',[KaryawanController::class,'destroy']);
Route::get('/karyawan/search',[KaryawanController::class,'search']);

//Pembentukan Tabel ABBY
//September
Route::get('/absep21',[Absep21Controller::class,'index']);
Route::get('/absep21/create',[Absep21Controller::class,'create']);
Route::post('/absep21/store',[Absep21Controller::class,'store']);
Route::get('/absep21/{id}/edit',[Absep21Controller::class,'edit']);
Route::post('/absep21/{id}/update',[Absep21Controller::class,'update']);
Route::get('/absep21/{id}/delete',[Absep21Controller::class,'destroy']);

////Report PDF
Route::get('/downloadpdf',[MahasiswaController::class,'downloadpdf']);
Route::get('/unduhpdf',[KaryawanController::class,'unduhpdf']);
Route::get('/absep21pdf',[Absep21Controller::class,'absep21pdf']);

////Profil
Route::get('/profil',[ProfilController::class,'index']);

////Perbulan
Route::get('/perbulan',[PerbulanController::class,'index']);
Route::get('/bulan',[BulanController::class,'index']);