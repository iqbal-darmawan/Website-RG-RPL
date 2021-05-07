<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// custom route
Route::view('/main', 'main');
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
Route::view('/judulpa', 'Admin/judulpa/v_judulpa');
Route::view('/judulpa/edit', 'Admin/judulpa/v_edit_judulpa');
Route::view('/judulpa/add', 'Admin/judulpa/v_add_judulpa');
Route::view('/judulpa/detail', 'Admin/judulpa/v_detail_judulpa');

//user
Route::view('/user', 'Admin/user/v_user');

//industri
Route::view('/industri', 'Admin/v_industri');
