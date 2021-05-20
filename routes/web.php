<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JudulpaController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;

// ======================LANDING=======================
Route::view('/', 'welcome'); // ganti welcome dengan landing page

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


// ======================MAHASISWA=======================
Route::get('/mahasiswa',[MahasiswaController::class,'index'])->name('mahasiswa');
Route::get('/mahasiswa/create',[MahasiswaController::class,'create']);
Route::post('/mahasiswa/store',[MahasiswaController::class,'store']);
Route::get('/mahasiswa/show/{id}',[MahasiswaController::class,'show']);
Route::get('/mahasiswa/edit/{id}',[MahasiswaController::class,'edit']);
Route::post('/mahasiswa/update/{id}',[MahasiswaController::class,'update']);
Route::get('/mahasiswa/destroy/{id}',[MahasiswaController::class,'destroy']);

// ======================JUDUL PA=======================
Route::get('/judulpa',[JudulpaController::class,'index'])->name('judulpa');
Route::get('/judulpa/create',[JudulpaController::class,'create']);
Route::post('/judulpa/store',[JudulpaController::class,'store']);
Route::get('/judulpa/show/{id}',[JudulpaController::class,'show']);
Route::get('/judulpa/edit/{id}',[JudulpaController::class,'edit']);
Route::post('/judulpa/update/{id}',[JudulpaController::class,'update']);
Route::get('/judulpa/destroy/{id}',[JudulpaController::class,'destroy']);

// ======================USER=======================
Route::view('/user', 'Admin/user/v_user');

// ======================INDUSTRI=======================
Route::get('/industri',[IndustriController::class,'index'])->name('industri');
Route::post('/industri/store',[IndustriController::class,'store']);
Route::post('/industri/update/{id}',[IndustriController::class,'update']);
Route::get('/industri/destroy/{id}',[IndustriController::class,'destroy']);
