<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JudulpaController;
use App\Http\Controllers\IndustriController;


Route::view('/', 'Admin/v_home');
//dosen
Route::view('/dosen', 'Admin/dosen/v_dosen');
Route::view('/dosen/detail', 'Admin/dosen/v_detail_dosen');
Route::view('/dosen/edit', 'Admin/dosen/v_edit_dosen');
Route::view('/dosen/add', 'Admin/dosen/v_add_dosen');
//mahasiswa
Route::view('/mahasiswa', 'Admin/mahasiswa/v_mahasiswa');
Route::view('/mahasiswa/add', 'Admin/mahasiswa/v_add_mahasiswa');
Route::view('/mahasiswa/edit', 'Admin/mahasiswa/v_edit_mahasiswa');
Route::view('/mahasiswa/detail', 'Admin/mahasiswa/v_detail_mahasiswa');
//judulpa
Route::get('/judulpa',[JudulpaController::class,'index'])->name('judulpa');
Route::get('/judulpa/create',[JudulpaController::class,'create']);
Route::get('/judulpa/edit',[JudulpaController::class,'edit']);
Route::get('/judulpa/destroy',[JudulpaController::class,'destroy']);

//user
Route::view('/user', 'Admin/user/v_user');

//industri
Route::get('/industri',[IndustriController::class,'index'])->name('industri');
Route::post('/industri/store',[IndustriController::class,'store']);
Route::post('/industri/update/{id}',[IndustriController::class,'update']);
Route::get('/industri/destroy/{id}',[IndustriController::class,'destroy']);