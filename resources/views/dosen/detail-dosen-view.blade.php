@extends('layouts.app')

@section('optional-css')
<link rel="stylesheet" href="{{ asset('css/dosen/detail-view.css') }}">
@endsection

@section('content')

<div class="jumbotron">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="title-jumbotron">Profile Dosen</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="card wrapper-content-profile">
        <div class="card-body d-flex align-items-center profile-wrapper mx-5">
            <div class="card-image-profile me-5">
                {{-- {{dd($dosen)}} --}}
                <img src="{{ asset('img/dosen/profil/'. $dosen->foto_dosen) }}" alt="" class="text-center detail-dosen-image">
            </div>
            <div class="card-detail-mobile">
                <h3>Nama</h3>
                <p class="text-secondary">{{$dosen->nama_lengkap}}</p>
                <h3>NIP</h3>
                <p class="text-secondary">{{$dosen->nip}}</p>
                <h3>Tahun Bergabung</h3>
                <p class="text-secondary">{{date("Y", strtotime($dosen->thn_bergabung))}}</p>
                <h3>No. Telepon</h3>
                <p class="text-secondary">{{$dosen->telefon}}</p>
            </div>
        </div>
    </div>

</div>

<div class="container">
    <div class="card-wrapper-content-profile">
        <div class="card content-profile-card">
            <div class="card-body">
                <h3 class="fw-bold">Penelitian</h3>
                <hr class="w-100 text-secondary">
                <ul>
                    @foreach ($penelitian as $item)
                        <li class="fs-5">{{$item->nama_penelitian}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="card content-profile-card">
            <div class="card-body">
                <h3 class="fw-bold">Prestasi</h3>
                <hr class="w- text-secondary">
                <ul>
                    @foreach ($prestasi as $item)
                        <li class="fs-5">{{$item->nama_prestasi}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="card content-profile-card">
            <div class="card-body">
                <h3 class="fw-bold">Pengabdian</h3>
                <hr class="w-100 text-secondary">
                <ul>
                    @foreach ($pengabdian as $item)
                        <li class="fs-5">{{$item->nama_pengabdian}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
