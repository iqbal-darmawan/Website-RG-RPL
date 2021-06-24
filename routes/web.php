<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JudulpaController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;

// ======================LANDING=======================
Route::view('/', 'home.home-view');

// ======================AUTH=======================
Auth::routes();

// ======================ADMIN=======================
Route::get('/home', [HomeController::class, 'index'])->name('home');

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

// ======================Gallery=======================
Route::get('/gallery',[GalleryController::class,'index'])->name('gallery');
Route::get('/gallery/edit/{id}',[GalleryController::class,'edit']);
Route::get('/gallery/create',[GalleryController::class,'create']);
Route::post('/gallery/store',[GalleryController::class,'store']);
Route::post('/gallery/update/{id}',[GalleryController::class,'update']);
Route::get('/gallery/destroy/{id}',[GalleryController::class,'destroy']);
Route::get('/gallery/destroyById/{id}',[GalleryController::class,'destroyById']);
Route::post('/gallery/addFotoById/{id}',[GalleryController::class,'addFotoById']);


//=======================MATERI========================
Route::get('/materi',[MateriController::class,'index'])->name('materi');
Route::get('/materi/edit/{id}',[MateriController::class,'edit']);
Route::get('/materi/create',[MateriController::class,'create']);
Route::post('/materi/store',[MateriController::class,'store']);
Route::post('/materi/update/{id}',[MateriController::class,'update']);
Route::get('/materi/destroy/{id}',[MateriController::class,'destroy']);
Route::get('/materi/destroyById/{id}',[MateriController::class,'destroyById']);
Route::post('/materi/addFileById/{id}',[MateriController::class,'addFileById']);

Route::get('/karya', function () {
    return view('karya.karya-view');
});
