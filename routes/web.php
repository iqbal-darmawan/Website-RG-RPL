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

Route::get('/', function () {
    return view('home.home-view');
});

Route::get('/karya', function () {
    return view('karya.karya-view');
});

Route::get('/dosen', function () {
    return view('dosen.dosen-view');
});

Route::get('/dosen/detail', function () {
    return view('dosen.detail-dosen-view');
});

Route::get('/judulpa', function () {
    return view('judulpa.judulpa-view');
});

Route::get('/tentangkami', function () {
    return view('tentangkami.tentangkami-view');
});
