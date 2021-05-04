<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/', 'Admin/v_home');
//dosen
Route::view('/dosen', 'Admin/dosen/v_dosen');
Route::view('/dosen/detail', 'Admin/dosen/v_detail_dosen');
Route::view('/dosen/edit', 'Admin/dosen/v_edit_dosen');
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