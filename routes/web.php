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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Models\JudulPA;

// ======================LANDING=======================
Route::get('/', [GalleryController::class, 'indexFront'])->name('home');

// ======================AUTH=======================
Auth::routes();

// =================== Karya Home =================
Route::group(['prefix'=>'/karya'], function () {
    Route::get('/', [ProductController::class, 'index'])->name('karya');
    Route::get('/details/karya-{id}', [ProductController::class, 'show'])->name('karya-details');
    Route::get('/download/materi-{id}', [MateriController::class, 'download'])->name('download');
});

// =================== Daftar Dosen ==================
Route::get('/daftar-dosen', [DosenController::class, 'indexFront'])->name('daftar-dosen');
Route::get('/daftar-dosen/details/dosen-{id}', [DosenController::class, 'showFront'])->name('daftar-dosen-details');

// =================== JUDUL PA =======================
Route::get('/judul-pa', [JudulpaController::class, 'indexFront'])->name('judul-pa');
Route::get('/judul-pa/details/judul-pa-{id}', [JudulpaController::class, 'showFront'])->name('judul-pa-details');

// ==================== TENTANG KAMI ====================
Route::view('/tentang-kami', 'tentangkami.tentangkami-view')->name('tentang-kami');

// ======================ADMIN PAGE=======================
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

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
    Route::post('/tambahMahasiswa/{id}', [MahasiswaController::class, 'addMahasiswa']);
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
Route::group(['prefix' => '/gallery', 'middleware' => 'auth'], function () {
    Route::get('/',[GalleryController::class,'index'])->name('gallery');
    Route::get('/edit/{id}',[GalleryController::class,'edit']);
    Route::get('/create',[GalleryController::class,'create']);
    Route::post('/store',[GalleryController::class,'store']);
    Route::post('/update/{id}',[GalleryController::class,'update']);
    Route::get('/destroy/{id}',[GalleryController::class,'destroy']);
    Route::get('/destroyById/{id}',[GalleryController::class,'destroyById']);
    Route::post('/addFotoById/{id}',[GalleryController::class,'addFotoById']);
});

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
