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
            <div class="content-header-wrapper mb-5">
                <div class="karya-img mb-3">
                    <div class="owl-carousel owl-theme mt-5 ">
                        @foreach ($foto as $item)
                        <div class="item">
                            <div class="image">
                                <img src="{{$item->foto_produk}}" alt="#" class="">
                            </div>
                        </div>
                        @endforeach
                    </div>
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

@section('optional-js')
<script>
    $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                dots:true,
                loop:true,
                margin:0,
                nav:false,
                responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:2
                }
                }
            })
            })
</script>
@endsection
