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
{{-- {{dd($judul)}} --}}

<div class="container">
    <div class="card-wrapper-content-detail">
        <div class="card content-detail-card">
            <div class="card-body">
                <h3>Judul Project Akhir</h3>
                <hr class="w-100 text-secondary">
                <h4>{{$judul->nama_judul}}</h4>
                <br>
                <br>
                <h3>Deskripsi Project Akhir</h3>
                <hr class="w- text-secondary">
                <p>{{$judul->deskripsi_judul}}</p>
                <br>
                <br>
                <h3>Kualifikasi Judul</h3>
                <hr class="w-100 text-secondary">
                <h4>{{$judul->kualifikasi_judul}}</h4>
            </div>
        </div>
    </div>
</div>

@endsection
