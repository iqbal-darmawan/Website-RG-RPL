@extends('layouts.app')

@section('optional-css')
<link rel="stylesheet" href="{{ asset('css/judulpa/judulpa.css') }}">
<link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/">
@endsection

@section('content')
<div class="jumbotron">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="title-jumbotron">Tawaran Judul PA</h1>
        </div>
    </div>
</div>

{{-- konten judul PA-1 --}}
<div class="header-judul">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="d-flex align-items-center h-100">
                    <div class="header-title">
                        <h2>Tawaran Judul PA</h2>
                        <p>Pada halaman Tawaran Judul PA yang menampilkan berbagai macam Judul PA yang dapat diajukan
                            dan
                            bila nanti sudah mendapat acc pada judul PA tersebut</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="d-flex card-wrapper">
                    <div class="card-karya-wrapper1 card m-4">
                        <div class="card-karya-header card-body text-center p-4">
                            <h4 class="mb-4 text-white">Rekayasa Perangkat Lunak</h4>
                            <div class="text-center mb-4">
                                <img src="{{ asset('img/karya/icon/fa-solid_atom.jpg') }}" alt=""
                                    class="text-center w-30" style="border-radius : 20px;">
                            </div>
                            <p class="mb-3 text-white">Pengubahan perangkat lunak itu sendiri guna mengembangkan,
                                memelihara, dan membangun kembali dengan menggunakan prinsip rekayasa untuk menghasilkan
                                perangkat lunak yang dapat bekerja lebih efisien dan efektif untuk pengguna</p>
                            {{-- <div class="button-see-more mb-4">
                                <a href="" class="btn">See more..</a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="card-karya-wrapper2 card m-4">
                        <div class="card-body text-center p-4">
                            <h4 class="mb-4">Workshop Produksi Perangkat Lunak</h4>
                            <div class="text-center mb-4">
                                <img src="{{ asset('img/karya/icon/fa-solid_atom.png') }}" alt=""
                                    class="text-center w-40">
                            </div>
                            <p>Workshop Produksi perangkat lunak merupakan mata kuliah yang mana membahas mengenai
                                materi rekayasa perangkat lunak dengan mempelajari bagaimana cara memproduksi, serta
                                membuat output karya rekayasa perangkat lunak tertentu yang dapat bermanfaat</p>
                            {{-- <div class="button-see-more-2 mb-4">
                                <a href="" class="btn">See more..</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



{{-- konten judul PA-2 --}}
<div class="container">
    <div class="tawaran-pa-wrapper">
        @foreach ($judul as $item)
        <div class="card tawaran-pa-card">
            <div class="card-body p-4 d-flex justify-content-between align-items-center">
                <div class="logo me-3">
                    <img src="{{ asset('img/karya/icon/fa-solid_atom.jpg') }}" alt="" class="w-100">
                </div>
                <div class="text-tawaran-pa w-50">
                    <h4>{{$item->nama_judul}}</h4>
                    <p>{{ Str::limit($item->deskripsi_judul, 100, '...') }}</p>
                    <a href="{{route('judul-pa-details', $item->id)}}">Check them out...</a>
                </div>
                <div class="deskripsi-tawaran-pa d-flex justify-content-center align-items-center w-25">
                    <div class="date-wrapper">
                        <p class="date m-0">{{$item->tahun_penawaran}}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{$judul->links()}}

    </div>
</div>
@endsection
