<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JudulpaController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


// ======================LANDING=======================
Route::view('/', 'home.home-view')->name('home');

// ======================AUTH=======================
Auth::routes();

// =================== Karya Home =================
Route::get('/karya', [ProductController::class, 'index'])->name('karya');

Route::get('/karya/details', function (){
    return view('karya.details.karya-details-view');
});

Route::get('/daftardosen', function () {
    return view('dosen.dosen-view');
});

Route::get('/daftardosen/detail', function () {
    return view('dosen.detail-dosen-view');
});

Route::get('/judulpa', function () {
    return view('judulpa.judulpa-view');
});

Route::get('/tentangkami', function () {
    return view('tentangkami.tentangkami-view');
});

// ======================ADMIN PAGE=======================
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

// ======================DOSEN=======================
Route::group(['prefix' => '/dosen', 'middleware' => 'auth'], function () {
    Route::get('/', [DosenController::class, 'index'])->name('dosen');
    Route::get('/create', [DosenController::class, 'create']);
    Route::post('/store', [DosenController::class, 'store']);
    Route::get('/show/{id}', [DosenController::class, 'show']);
    Route::get('/edit/{id}', [DosenController::class, 'edit']);
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
Route::group(['prefix' => '/mahasiswa', 'middleware' => 'auth'], function () {
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

// ======================USER=======================
Route::group(['prefix' => '/user', 'middleware' => 'auth'], function () {
    Route::get('/', [UserController::class, 'index']);
});

// ======================INDUSTRI=======================
Route::group(['prefix' => '/industri', 'middleware' => 'auth'], function () {
    Route::get('/', [IndustriController::class, 'index'])->name('industri');
    Route::post('/store', [IndustriController::class, 'store']);
    Route::post('/update/{id}', [IndustriController::class, 'update']);
    Route::get('/destroy/{id}', [IndustriController::class, 'destroy']);
});
