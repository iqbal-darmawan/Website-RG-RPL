<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JudulpaController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

// ======================AUTH=======================
Auth::routes();

// ======================ADMIN=======================
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ======================DOSEN=======================
Route::group(['prefix' => '/dosen', 'middleware' => 'auth'], function () {
    Route::get('/',[DosenController::class,'index'])->name('dosen');
    Route::get('/create',[DosenController::class,'create']);
    Route::post('/store',[DosenController::class,'store']);
    Route::get('/show/{id}',[DosenController::class,'show']);
    Route::get('/edit/{id}',[DosenController::class,'edit']);
    Route::post('/update/{id}',[DosenController::class,'update']);
    Route::get('/destroy/{id}',[DosenController::class,'destroy']);
});


// ======================MAHASISWA=======================
Route::group(['prefix' => '/mahasiswa', 'middleware' => 'auth'], function () {
    Route::get('/',[MahasiswaController::class,'index'])->name('mahasiswa');
    Route::get('/create',[MahasiswaController::class,'create']);
    Route::post('/store',[MahasiswaController::class,'store']);
    Route::get('/show/{id}',[MahasiswaController::class,'show']);
    Route::get('/edit/{id}',[MahasiswaController::class,'edit']);
    Route::post('/update/{id}',[MahasiswaController::class,'update']);
    Route::get('/destroy/{id}',[MahasiswaController::class,'destroy']);
});

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


Route::get('/', function () {
    return view('home.home-view');
});

// =================== Karya =================
Route::get('/karya', function () {
    return view('karya.karya-view');
});
Route::get('/karya/details/karya-{id}', function ($id){
    return view('karya.details.karya-details-view');
});
