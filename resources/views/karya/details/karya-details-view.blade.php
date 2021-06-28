@extends('layouts.app')

@section('optional-css')
<link rel="stylesheet" href="{{ asset('css/karya/karya-details.css') }}">
<link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/">
@endsection

@section('content')
<div class="jumbotron">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="title-jumbotron">Daftar Karya</h1>
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
    <div class="card">
        <div class="card-body">
            <div class="content-header-wrapper mb-5">
                <div class="karya-img mb-3">
                    <div class="inner">
                        <img src="{{$foto[0]->foto_produk}}" alt="#">
                    </div>
                    {{-- {{dd($karya, $foto)}} --}}
                </div>
                <div class="content-header">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="option-image d-flex">
                                @foreach ($foto as $item)
                                <div class="image">
                                    <img src="{{$item->foto_produk}}" alt="#" class="">
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="team-desc">
                                <h3>Nama Team</h3>
                                {{-- TODO : Konek ke backend--}}
                                <p>{{$karya->nama_tim}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-content">
                <h1 class="nama-karya">{{$karya->nama_produk}}</h1>
                <p class="karya-desc">{{$karya->deskripsi_produk}}</p>
            </div>
        </div>
    </div>
    
</div>
@endsection

@section('onclick-script')

@endsection
