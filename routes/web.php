<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JudulpaController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


// ======================LANDING=======================
Route::view('/', 'home.home-view');

// ======================AUTH=======================
Auth::routes();

// ======================ADMIN=======================
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ======================DOSEN=======================
Route::get('/dosen',[DosenController::class,'index'])->name('dosen');
Route::get('/dosen/create',[DosenController::class,'create']);
Route::post('/dosen/store',[DosenController::class,'store']);
Route::get('/dosen/show/{id}',[DosenController::class,'show']);
Route::get('/dosen/edit/{id}',[DosenController::class,'edit']);
Route::post('/dosen/update/{id}',[DosenController::class,'update']);
Route::get('/dosen/destroy/{id}',[DosenController::class,'destroy']);
Route::get('/dosen/deletePrestasiById/{id}',[DosenController::class,'deletePrestasiById']);
Route::get('/dosen/deletePenelitianById/{id}',[DosenController::class,'deletePenelitianById']);
Route::get('/dosen/deletePengabdianById/{id}',[DosenController::class,'deletePengabdianById']);
Route::post('/dosen/addArrayPrestasi/{id}',[DosenController::class,'addArrayPrestasi']);
Route::post('/dosen/addArrayPenelitian/{id}',[DosenController::class,'addArrayPenelitian']);
Route::post('/dosen/addArrayPengabdian/{id}',[DosenController::class,'addArrayPengabdian']);


// ======================MAHASISWA=======================
Route::get('/mahasiswa',[MahasiswaController::class,'index'])->name('mahasiswa');
Route::get('/mahasiswa/create',[MahasiswaController::class,'create']);
Route::post('/mahasiswa/store',[MahasiswaController::class,'store']);
Route::get('/mahasiswa/show/{id}',[MahasiswaController::class,'show']);
Route::get('/mahasiswa/edit/{id}',[MahasiswaController::class,'edit']);
Route::post('/mahasiswa/update/{id}',[MahasiswaController::class,'update']);
Route::get('/mahasiswa/destroy/{id}',[MahasiswaController::class,'destroy']);
Route::get('/mahasiswa/hapusFoto/{id}',[MahasiswaController::class,'deleteFotoById']);
Route::get('/mahasiswa/hapusMahasiswa/{id}',[MahasiswaController::class,'deleteMahasiswaById']);
Route::post('/mahasiswa/addFotoProduk/{id}',[MahasiswaController::class,'addFotoProduk']);
Route::post('/mahasiswa/tambahMahasiswa/{id}',[MahasiswaController::class,'addMahasiswabyId']);


// ======================JUDUL PA=======================
Route::group(['prefix' => '/judulpa', 'middleware' => 'auth'], function () {
    Route::get('/',[JudulpaController::class,'index'])->name('judulpa');
    Route::get('/create',[JudulpaController::class,'create']);
    Route::post('/store',[JudulpaController::class,'store']);
    Route::get('/show/{id}',[JudulpaController::class,'show']);
    Route::get('/edit/{id}',[JudulpaController::class,'edit']);
    Route::post('/update/{id}',[JudulpaController::class,'update']);
    Route::get('/destroy/{id}',[JudulpaController::class,'destroy']);
});

// ======================USER=======================
Route::group(['prefix' => '/user', 'middleware' => 'auth'], function () {
    Route::get('/', [UserController::class, 'index']);
});

// ======================INDUSTRI=======================
Route::group(['prefix' => '/industri', 'middleware' => 'auth'], function () {
    Route::get('/',[IndustriController::class,'index'])->name('industri');
    Route::post('/store',[IndustriController::class,'store']);
    Route::post('/update/{id}',[IndustriController::class,'update']);
    Route::get('/destroy/{id}',[IndustriController::class,'destroy']);
});


// =================== Karya =================
Route::get('/karya', [ProductController::class, 'index'])->name('karya');

Route::get('/karya/details', function (){
    return view('karya.details.karya-details-view');
});

Route::get('/dosen', function () {
    return view('dosen.dosen-view');
});

Route::get('/dosen/detail', function () {
    return view('dosen.detail-dosen-view');
});

Route::get('/judulpa', function () {
    return view('judulpa.judulpa-view');
});

Route::get('/tentangkami', function () {
    return view('tentangkami.tentangkami-view');
});