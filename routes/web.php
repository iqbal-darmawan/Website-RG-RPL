<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JudulpaController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

// ======================LANDING=======================
Route::view('/', 'home.home-view')->name('home');

// ======================AUTH=======================
Auth::routes();

// =================== Karya Home =================
Route::get('/karya', [ProductController::class, 'index'])->name('karya');
Route::get('/karya/details/karya-{id}', [ProductController::class, 'show'])->name('karya-details');

// =================== Daftar Dosen ==================
Route::get('/daftar-dosen', [DosenController::class, 'indexFront'])->name('daftar-dosen');
Route::get('/daftar-dosen/details/dosen-{id}', [DosenController::class, 'showFront'])->name('daftar-dosen-details');

Route::view('/judul-pa', 'judulpa.judulpa-view')->name('judul-pa');

Route::view('/tentang-kami', 'tentangkami.tentangkami-view')->name('tentang-kami');

Route::view('/gallery-editor', 'Admin.gallery.v_gallery')->name('gallery');

// ======================ADMIN PAGE=======================
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

// ======================DOSEN=======================
Route::group(['prefix' => '/dosen', 'middleware' => 'auth'], function () {
    Route::get('/', [DosenController::class, 'index'])->name('dosen');
    Route::get('/create', [DosenController::class, 'create']);
    Route::post('/store', [DosenController::class, 'store']);
    Route::get('/show/{id}', [DosenController::class, 'show']);
    Route::get('/edit/{id}', [DosenController::class, 'edit'])->name('dosen-edit');
    Route::post('/update/{id}', [DosenController::class, 'update']);
    Route::get('/destroy/{id}', [DosenController::class, 'destroy']);
    Route::get('/deletePrestasiById/{id}', [DosenController::class, 'deletePrestasiById']);
    Route::get('/deletePenelitianById/{id}', [DosenController::class, 'deletePenelitianById']);
    Route::get('/deletePengabdianById/{id}', [DosenController::class, 'deletePengabdianById']);
    Route::post('/addArrayPrestasi/{id}', [DosenController::class, 'addArrayPrestasi']);
    Route::post('/addArrayPenelitian/{id}', [DosenController::class, 'addArrayPenelitian']);
    Route::post('/addArrayPengabdian/{id}', [DosenController::class, 'addArrayPengabdian']);
});

// ======================MAHASISWA=======================
Route::group(['prefix' => '/karya-mahasiswa', 'middleware' => 'auth'], function () {
    Route::get('/', [MahasiswaController::class, 'index'])->name('mahasiswa');
    Route::get('/create', [MahasiswaController::class, 'create']);
    Route::post('/store', [MahasiswaController::class, 'store']);
    Route::get('/show/{id}', [MahasiswaController::class, 'show']);
    Route::get('/edit/{id}', [MahasiswaController::class, 'edit']);
    Route::post('/update/{id}', [MahasiswaController::class, 'update']);
    Route::get('/destroy/{id}', [MahasiswaController::class, 'destroy']);
    Route::get('/hapusFoto/{id}', [MahasiswaController::class, 'deleteFotoById']);
    Route::get('/hapusMahasiswa/{id}', [MahasiswaController::class, 'deleteMahasiswaById']);
    Route::post('/addFotoProduk/{id}', [MahasiswaController::class, 'addFotoProduk']);
    Route::post('/tambahMahasiswa/{id}', [MahasiswaController::class, 'addMahasiswabyId']);
});

// ======================JUDUL PA=======================
Route::group(['prefix' => '/judulpa', 'middleware' => 'auth'], function () {
    Route::get('/', [JudulpaController::class, 'index'])->name('judulpa');
    Route::get('/create', [JudulpaController::class, 'create']);
    Route::post('/store', [JudulpaController::class, 'store']);
    Route::get('/show/{id}', [JudulpaController::class, 'show']);
    Route::get('/edit/{id}', [JudulpaController::class, 'edit']);
    Route::post('/update/{id}', [JudulpaController::class, 'update']);
    Route::get('/destroy/{id}', [JudulpaController::class, 'destroy']);
});

// ======================Gallery=======================
Route::get('/gallery',[GalleryController::class,'index'])->name('gallery');
Route::get('/gallery/edit/{id}',[GalleryController::class,'edit']);
Route::get('/gallery/create',[GalleryController::class,'create']);
Route::post('/gallery/store',[GalleryController::class,'store']);
Route::post('/gallery/update/{id}',[GalleryController::class,'update']);
Route::get('/gallery/destroy/{id}',[GalleryController::class,'destroy']);
Route::get('/gallery/destroyById/{id}',[GalleryController::class,'destroyById']);
Route::post('/gallery/addFotoById/{id}',[GalleryController::class,'addFotoById']);

// ======================USER=======================
Route::group(['prefix' => '/users', 'middleware' => 'auth'], function () {
    Route::get('/', [UserController::class, 'index'])->name('user');
});

// ======================INDUSTRI=======================
Route::group(['prefix' => '/industri', 'middleware' => 'auth'], function () {
    Route::get('/', [IndustriController::class, 'index'])->name('industri');
    Route::post('/store', [IndustriController::class, 'store']);
    Route::post('/update/{id}', [IndustriController::class, 'update']);
    Route::get('/destroy/{id}', [IndustriController::class, 'destroy']);
});

// =======================MATERI========================
Route::group(['prefix' => '/materi', 'middleware' => 'auth'], function () {
    Route::get('/',[MateriController::class,'index'])->name('materi');
    Route::get('/edit/{id}',[MateriController::class,'edit']);
    Route::get('/create',[MateriController::class,'create']);
    Route::post('/store',[MateriController::class,'store']);
    Route::post('/update/{id}',[MateriController::class,'update']);
    Route::get('/destroy/{id}',[MateriController::class,'destroy']);
    Route::get('/destroyById/{id}',[MateriController::class,'destroyById']);
    Route::post('/addFileById/{id}',[MateriController::class,'addFileById']);
});

Route::get('/karya', function () {
    return view('karya.karya-view');
});
