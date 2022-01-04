@extends('layouts.app')

@section('optional-css')
<link rel="stylesheet" href="{{ asset('css/judulpa/judulpa-details.css') }}">
@endsection

@section('content')

<div class="jumbotron">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="title-jumbotron">Judul Proyek Akhir</h1>
        </div>
    </div>
</div>
{{--{{dd($judul)}}--}}

<div class="container">
    <div class="card-wrapper-content-detail">
        <div class="card content-detail-card">
            <div class="card-body">
                <h3 class="fw-bold">Judul Project Akhir</h3>
                <hr class="w-100 text-secondary">
                <p class="fs-5">{{$judul->nama_judul}}</p>
                <br>
                <br>
              	<h3 class="fw-bold">Dosen Pembimbing</h3>
                <hr class="w-100 text-secondary">
                <p class="fs-5">{{$judul->nama_pembimbing}}</p>
                <br>
                <br>
                <h3 class="fw-bold">Deskripsi Project Akhir</h3>
                <hr class="w- text-secondary">
                <p class="fs-5">{{$judul->deskripsi_judul}}</p>
                <br>
                <br>
                <h3 class="fw-bold">Kualifikasi Judul</h3>
                <hr class="w-100 text-secondary">
                <p class="fs-5">{{$judul->kualifikasi_judul}}</p>
            </div>
        </div>
    </div>
</div>

@endsection
