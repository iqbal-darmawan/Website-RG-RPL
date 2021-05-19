<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JudulpaController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\MahasiswaController;


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// custom route
// Route::view('/main', 'main');
Route::view('/main', 'Admin/v_home');

//dosen
Route::view('/dosen', 'Admin/dosen/v_dosen');
Route::view('/dosen/detail', 'Admin/dosen/v_detail_dosen');
Route::view('/dosen/edit', 'Admin/dosen/v_edit_dosen');
Route::view('/dosen/add', 'Admin/dosen/v_add_dosen');

//mahasiswa
Route::get('/mahasiswa',[MahasiswaController::class,'index'])->name('mahasiswa');
Route::get('/mahasiswa/create',[MahasiswaController::class,'create']);
Route::post('/mahasiswa/store',[MahasiswaController::class,'store']);
Route::get('/mahasiswa/show/{id}',[MahasiswaController::class,'show']);
Route::get('/mahasiswa/edit/{id}',[MahasiswaController::class,'edit']);
Route::post('/mahasiswa/update/{id}',[MahasiswaController::class,'update']);
Route::get('/mahasiswa/destroy/{id}',[MahasiswaController::class,'destroy']);

// JudulPA
Route::get('/judulpa',[JudulpaController::class,'index'])->name('judulpa');
Route::get('/judulpa/create',[JudulpaController::class,'create']);
Route::post('/judulpa/store',[JudulpaController::class,'store']);
Route::get('/judulpa/show/{id}',[JudulpaController::class,'show']);
Route::get('/judulpa/edit/{id}',[JudulpaController::class,'edit']);
Route::post('/judulpa/update/{id}',[JudulpaController::class,'update']);
Route::get('/judulpa/destroy/{id}',[JudulpaController::class,'destroy']);

//user
Route::view('/user', 'Admin/user/v_user');

//industri
Route::get('/industri',[IndustriController::class,'index'])->name('industri');
Route::post('/industri/store',[IndustriController::class,'store']);
Route::post('/industri/update/{id}',[IndustriController::class,'update']);
Route::get('/industri/destroy/{id}',[IndustriController::class,'destroy']);
