@extends('layouts.app')

@section('optional-css')
<link rel="stylesheet" href="{{ asset('css/judulPA/judulPA.css') }}">
<link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/">
@endsection

@section('content')
<div class="jumbotron">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="title-jumbotron">Tawaran Judul PA</h1>
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

{{-- konten judul PA-1 --}}
<div class="container card-content-wrapper">
    <div class="row justify-content-between">
        <div class="col-md-4 d-flex flex-column justify-content">
            <div class="section-headline">  
                <h2 style="font-size:36px; font-weight:bold;">Tawaran Judul PA</h2>
                <p style="font-size:18px; font-weight:bold;">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Incidunt cumque commodi amet esse cupiditate quae vel porro, voluptas eius modi.</p>
            </div>
        </div>
        <div class="col-md-8">
        @foreach ($judul as $perjudul)
            <div class="d-flex card-height">
                <div class="card card-content-first bg-card1 mx-4 my-6 align-self-start">
                    <div class="card-body px-2 py-6">
                        <h5 class="text-center mb-3 px-4" style="color: #ffff">Rekayasa Perangkat Lunak</h5>
                        <div class="text-center mb-4 mt-3">
                            <img src="{{ asset('img/judulPA/judulPA-2.png') }}" alt="" width ="80px" height="80px" class="text-center w-20">
                            <p style="font-size:10px; color: #fff;">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Incidunt cumque commodi amet esse cupiditate quae vel porro, voluptas eius modi quaerat, adipisci
                            est. Eligendi aspernatur et, quam autem nam rerum?</p>
                            <button type="button" class="btn btn-primary btn-sm">See more ..</button>
                        </div>
                    </div>
                </div>
                <div class="card card-content-first bg-card2 mx-4 my-6 align-self-end">
                    <div class="card-body px-2 py-6">
                        <h5 class="text-center mb-3 px-4">Workshop Produksi Perangkat Lunak</h5>
                        <div class="text-center mb-4 mt-3">
                            <img src="{{ asset('img/judulPA/judulPA-1.png') }}" alt="" class="text-center w-20">
                            <p style="font-size:10px; color: #000;">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Incidunt cumque commodi amet esse cupiditate quae vel porro, voluptas eius modi quaerat, adipisci
                            est. Eligendi aspernatur et, quam autem nam rerum?</p>
                            <button type="button" class="btn btn-primary btn-sm">See more ..</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>


{{-- konten judul PA-2 --}}
<section>
<div class="container card-content-wrapper-list-materi">
    <div class="card w-75" style="align:center">
        <div class="card-body">
            <!-- <div class="col-md-4 justify-content">
                <img src="{{ asset('img/judulPA/judulPA-2.png') }}" alt="" class="text-center w-20">
                <h5 class="text-center mb-3 px-4">Lorem ipsum dolor</h5>
                <div class="text-center mb-4 mt-3">
                    <p style="font-size:10px; color: #000;">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                       Incidunt cumque commodi</p>
                </div>
            <h5 class="card-title">Card title</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Button</a> -->
            <!-- </div> --> 
            <div class="container">
            <div class="row" >
                <div class="col-md-4">
                    <img src="{{ asset('img/judulPA/judulPA-1.png') }}" alt="" class="text-center w-20">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/judulPA/judulPA-1.png') }}" alt="" class="text-center w-20">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/judulPA/judulPA-1.png') }}" alt="" class="text-center w-20">
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection