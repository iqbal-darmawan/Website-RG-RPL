@extends('layouts.app')

@section('optional-css')
<link rel="stylesheet" href="{{ asset('css/dosen/detail-view.css') }}">
@endsection

@section('content')

<div class="jumbotron">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="title-jumbotron">Profile Dosen</h1>
            <form id="search-form" class="form-inline" role="form" method="post" action="//www.google.com/search"
                target="_blank">
                <div class="input-group bg-input-group">
                    <input type="text" class="search-form form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary search-btn" data-target="#search-form" name="q">
                            <svg width="20" height="20" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.9227 25.3727C15.5999 25.3721 18.1999 24.4328 20.3088 22.7045L26.9392 29.6532L29.0719 27.4181L22.4415 20.4694C24.0915 18.259 24.9883 15.5335 24.989 12.7271C24.989 5.75463 19.5757 0.0815048 12.9227 0.0815048C6.26967 0.0815048 0.856445 5.75463 0.856445 12.7271C0.856445 19.6996 6.26967 25.3727 12.9227 25.3727ZM12.9227 3.2429C17.9136 3.2429 21.9724 7.49656 21.9724 12.7271C21.9724 17.9576 17.9136 22.2113 12.9227 22.2113C7.9318 22.2113 3.87301 17.9576 3.87301 12.7271C3.87301 7.49656 7.9318 3.2429 12.9227 3.2429Z"
                                    fill="black" />
                            </svg>
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="wrapper-content-profile">
        <div class="d-flex align-items-center profile-wrapper mx-5">
            <div class="card-image-profile me-5">
                {{-- {{dd($dosen)}} --}}
                <img src="{{ asset('img/dosen/profil/'. $dosen->foto_dosen) }}" alt="" class="text-center ">
            </div>
            <div class="">
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
                <h3>Penelitian</h3>
                <hr class="w-100 text-secondary">
                <ul>
                    @foreach ($penelitian as $item)
                        <li>{{$item->nama_penelitian}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="card content-profile-card">
            <div class="card-body">
                <h3>Prestasi</h3>
                <hr class="w- text-secondary">
                <ul>
                    @foreach ($prestasi as $item)
                        <li>{{$item->nama_prestasi}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="card content-profile-card">
            <div class="card-body">
                <h3>Pengabdian</h3>
                <hr class="w-100 text-secondary">
                <ul>
                    @foreach ($pengabdian as $item)
                        <li>{{$item->nama_pengabdian}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
