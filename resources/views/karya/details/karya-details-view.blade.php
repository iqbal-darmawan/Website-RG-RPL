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
        </div>
    </div>
</div>

<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="content-header-wrapper ">
                <div class="karya-img mb-3">
                    <div class="inner">
                        <img src="{{asset($foto[0]->foto_produk)}}" alt="#">
                    </div>
                </div>
                <div class="content-header pt-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="option-image d-flex">
                                @foreach ($foto as $item)
                                <div class="image">
                                    <img src="{{asset($item->foto_produk)}}" alt="#" class="">
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="team-desc">
                                <h3 class="fw-bold">Nama Team</h3>
                                <p class="fs-5">{{$karya->nama_tim}}</p>
                              	<a href="http://{{$karya->link}}" class="fs-6">Website Karya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          	<br>
            <hr>
            <br>
            <div class="main-content">
                <h1 class="fw-bold nama-karya">{{$karya->nama_produk}}</h1>
                <p class="fs-5 karya-desc">{{$karya->deskripsi_produk}}</p>
            </div>
        </div>
    </div>
    
</div>
@endsection

@section('onclick-script')

@endsection
