<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'Admin/v_home');
//dosen
Route::view('/dosen', 'Admin/dosen/v_dosen');
Route::view('/dosen/detail', 'Admin/dosen/v_detail_dosen');
Route::view('/dosen/edit', 'Admin/dosen/v_edit_dosen');
Route::view('/dosen/add', 'Admin/dosen/v_add_dosen');
//mahasiswa
Route::view('/mahasiswa', 'Admin/mahasiswa/v_mahasiswa');
//judulpa
Route::view('/judulpa', 'Admin/judulpa/v_judulpa');
Route::view('/judulpa/edit', 'Admin/judulpa/v_edit_judulpa');
Route::view('/judulpa/add', 'Admin/judulpa/v_add_judulpa');
Route::view('/judulpa/detail', 'Admin/judulpa/v_detail_judulpa');

//user
Route::view('/user', 'Admin/user/v_user');

//industri
Route::view('/industri', 'Admin/v_industri');