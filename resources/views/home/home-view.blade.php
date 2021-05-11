@extends('layouts.app')

@section('optional-css')
<link rel="stylesheet" href="{{ asset('css/home/home.css') }}">
@endsection

@section('content')

{{-- jumbotron-konten --}}
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
            class="active caraousel-button-indicators" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"
            class="caraousel-button-indicators"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"
            class="caraousel-button-indicators"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/bg1.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="carousel-caption-title">Rekayasa Perangkat Lunak</h2>
                <p>Pengubahan perangkat lunak itu sendiri guna mengembangkan, memelihara, dan membangun kembali dengan menggunakan prinsip rekayasa untuk menghasilkan perangkat lunak yang dapat bekerja lebih efisien dan efektif untuk pengguna.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/bg1.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="carousel-caption-title">Workshop Produksi Perangkat Lunak</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque reiciendis repellendus odit cupiditate
                    excepturi error omnis voluptate, nobis repudiandae sed non minus libero necessitatibus explicabo,
                    nam, rerum inventore debitis. Molestias.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/bg1.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="carousel-caption-title">RG RPL</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et veritatis quo perferendis libero,
                    eveniet expedita architecto sit provident. Autem praesentium ea aut ullam aspernatur neque?
                    Consequatur ipsum in quod eum.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

{{-- konten landing page-1 --}}
<div class="container card-content-wrapper">
    <div class="row justify-content-between">
        <div class="col-md-4 d-flex flex-column justify-content-center">
            <div class="">
                <h5 style="font-size:24px; font-weight:bold;">Apa itu</h5>
                <h2 style="font-size:36px; font-weight:bold;">Web RG RPL ?</h2>
                <p style="font-size:18px; color: #978787;">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Incidunt cumque commodi amet esse cupiditate quae vel porro, voluptas eius modi quaerat, adipisci
                    est. Eligendi aspernatur et, quam autem nam rerum?</p>
            </div>
        </div>
        <div class="col-md-8">
            <div class="d-flex card-height">
                <div class="card card-content-first bg-card1 mx-2 align-self-start">
                    <div class="card-body px-2 py-4">
                        <div class="text-center mb-5 mt-5">
                            <img src="{{ asset('img/item1.jpg') }}" alt="" class="text-center w-100">
                        </div>
                        <h5 class="card-title mb-3 px-4">Memberikan informasi karya</h5>
                    </div>
                </div>
                <div class="card card-content-first bg-card2 mx-2 align-self-end">
                    <div class="card-body px-2 py-4">
                        <div class="text-center mb-4 mt-3">
                            <img src="{{ asset('img/item2.png') }}" alt="" class="text-center w-100">
                        </div>
                        <h5 class="card-title mb-3 px-4">Memberikan referensi judul PA</h5>
                    </div>
                </div>
                <div class="card card-content-first bg-card3 mx-2 align-self-start">
                    <div class="card-body px-2 py-4">
                        <div class="text-center mb-4 mt-3">
                            <img src="{{ asset('img/item3.png') }}" alt="" class="text-center w-100">
                        </div>
                        <h5 class="card-title mb-3 px-4">Memberikan informasi dosen</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- konten landing page-2-paralax --}}
<div class="parallax">
    <div class="skill-bg area-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="progress-circular">
                        <h5 class="progress-h4">TIM RG RPL</h5>
                        <h2>100</h2>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="progress-circular">
                        <h5 class="progress-h4">Karya</h5>
                        <h2>100</h2>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="progress-circular">
                        <h5 class="progress-h4">Kerja Sama</h5>
                        <h2>100</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- konten landing page-3-karya --}}
<div class="container card-content-wrapper">
    <div class="row">
        <div class="col-md-3 d-flex flex-column justify-content-center">
            <div>
                <h2 style="font-size:36px; font-weight:bold;">Karya Mahasiswa</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt cumque commodi amet esse
                    cupiditate quae vel porro, voluptas eius modi quaerat, adipisci est.</p>
                <a href="#">
                    <svg width="36" height="34" viewBox="0 0 36 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.5 17C0.5 20.2881 1.52636 23.5024 3.44928 26.2364C5.37221 28.9703 8.10533 31.1012 11.303 32.3595C14.5007 33.6178 18.0194 33.947 21.4141 33.3056C24.8087 32.6641 27.9269 31.0807 30.3744 28.7556C32.8218 26.4306 34.4885 23.4683 35.1637 20.2434C35.839 17.0184 35.4924 13.6757 34.1679 10.6379C32.8434 7.60007 30.6003 5.0036 27.7225 3.17682C24.8446 1.35004 21.4612 0.375 18 0.375C13.3587 0.375 8.90752 2.12656 5.62563 5.24435C2.34374 8.36214 0.5 12.5908 0.5 17ZM8 15.8125H23.1875L16.2125 9.15419L18 7.5L28 17L18 26.5L16.2125 24.8054L23.1875 18.1875H8V15.8125Z"
                            fill="#F6A122" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="d-flex card-height">
                <div class="card card-karya mx-4 align-self-end">
                    <div class="card-header card-header-padding">
                        <div class="text-center">
                            <img src="{{ asset('img/karya/karya-1.jpg') }}" alt="" class="text-center w-100">
                        </div>
                    </div>
                    <div class="card-body px-3 mt-3">
                        <h4>Lorem Ipsum</h4>
                        <p>Lorem ipsum dolor, sit amet....</p>
                        <a href="#" class="d-block text-end read-more-text">Read more..</a>
                    </div>
                </div>
                <div class="card card-karya mx-4 align-self-start">
                    <div class="card-header card-header-padding">
                        <div class="text-center">
                            <img src="{{ asset('img/karya/karya-2.jpg') }}" alt="" class="text-center w-100">
                        </div>
                    </div>
                    <div class="card-body px-3 mt-3">
                        <h4>Lorem Ipsum</h4>
                        <p>Lorem ipsum dolor, sit amet....</p>
                        <a href="#" class="d-block text-end read-more-text">Read more..</a>
                    </div>
                </div>
                <div class="card card-karya mx-4 align-self-end">
                    <div class="card-header card-header-padding">
                        <div class="text-center">
                            <img src="{{ asset('img/karya/karya-3.jpg') }}" alt="" class="text-center w-100">
                        </div>
                    </div>
                    <div class="card-body px-3 mt-3">
                        <h4>Lorem Ipsum</h4>
                        <p>Lorem ipsum dolor, sit amet....</p>
                        <a href="#" class="d-block text-end read-more-text">Read more..</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- konten landing page-4-dosen --}}
<div class="container card-content-wrapper-dosen">
    <div class="row">
        <div class="col-md-9">
            <div class="d-flex card-height">
                <div class="card card-karya mx-4 align-self-start">
                    <div class="card-header card-header-padding">
                        <div class="text-center">
                            <img src="{{ asset('img/dosen/dosen-1.jpg') }}" alt="" class="text-center w-100">
                        </div>
                    </div>
                    <div class="card-body px-3 mt-3">
                        <h4>Lorem Ipsum</h4>
                        <p>Lorem ipsum dolor, sit amet....</p>
                        <a href="#" class="d-block text-end read-more-text">Read more..</a>
                    </div>
                </div>
                <div class="card card-karya mx-4 align-self-end">
                    <div class="card-header card-header-padding">
                        <div class="text-center">
                            <img src="{{ asset('img/dosen/dosen-2.jpg') }}" alt="" class="text-center w-100">
                        </div>
                    </div>
                    <div class="card-body px-3 mt-3">
                        <h4>Lorem Ipsum</h4>
                        <p>Lorem ipsum dolor, sit amet....</p>
                        <a href="#" class="d-block text-end read-more-text">Read more..</a>
                    </div>
                </div>
                <div class="card card-karya mx-4 align-self-start">
                    <div class="card-header card-header-padding">
                        <div class="text-center">
                            <img src="{{ asset('img/dosen/dosen-3.jpg') }}" alt="" class="text-center w-100">
                        </div>
                    </div>
                    <div class="card-body px-3 mt-3">
                        <h4>Lorem Ipsum</h4>
                        <p>Lorem ipsum dolor, sit amet....</p>
                        <a href="#" class="d-block text-end read-more-text">Read more..</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 d-flex flex-column justify-content-center">
            <div>
                <h5 style="font-size:24px; font-weight:bold;">Dosen</h5>
                <h2 style="font-size:36px; font-weight:bold;">Tim RG RPL</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt cumque commodi amet esse
                    cupiditate quae vel porro, voluptas eius modi quaerat, adipisci est.</p>
                <a href="#">
                    <svg width="36" height="34" viewBox="0 0 36 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.5 17C0.5 20.2881 1.52636 23.5024 3.44928 26.2364C5.37221 28.9703 8.10533 31.1012 11.303 32.3595C14.5007 33.6178 18.0194 33.947 21.4141 33.3056C24.8087 32.6641 27.9269 31.0807 30.3744 28.7556C32.8218 26.4306 34.4885 23.4683 35.1637 20.2434C35.839 17.0184 35.4924 13.6757 34.1679 10.6379C32.8434 7.60007 30.6003 5.0036 27.7225 3.17682C24.8446 1.35004 21.4612 0.375 18 0.375C13.3587 0.375 8.90752 2.12656 5.62563 5.24435C2.34374 8.36214 0.5 12.5908 0.5 17ZM8 15.8125H23.1875L16.2125 9.15419L18 7.5L28 17L18 26.5L16.2125 24.8054L23.1875 18.1875H8V15.8125Z"
                            fill="#F6A122" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

{{-- konten landing page-5-kerjasama --}}
<div class="container card-content-wrapper-kerjasama-industri">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
                <h2>Kerjasama Industri</h2>
                <div class="logo-kerjasama-industri-wrapper d-flex justify-content-center align-items-center">
                    <div class="logo-kerjasama">
                        <img src="{{ asset('img/logo-kerja-sama/rasyid-institute.png') }}" alt="">
                    </div>
                    <div class="logo-kerjasama">
                        <img src="{{ asset('img/logo-kerja-sama/maulidan-games.png') }}" alt="">
                    </div>
                    <div class="logo-kerjasama">
                        <img src="{{ asset('img/logo-kerja-sama/maulidan-games.png') }}" alt="">
                    </div>
                    <div class="logo-kerjasama">
                        <img src="{{ asset('img/logo-kerja-sama/maulidan-games.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- konten landing page-6-testimoni --}}

<div class="bg-testimoni">
    <div class="container p-5">
        <div class="d-block">
            <div class="d-flex justify-content-between">
                <div>
                    <h2 style="font-size:36px; font-weight:bold;">Apa Kata Mereka?</h2>
                    <p style="color:#888888;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia quos id
                        nostrum nihil assumenda voluptas cum repellat delectus cumque magni qui tenetur est amet
                        distinctio voluptatum, dolorem animi hic quo!</p>
                </div>
            </div>
            <div class="carousel-testimoni-wrapper">
                <div class="owl-carousel owl-theme mt-5 ">
                    <div class="item">
                        <div class="card card-testimoni">
                            <div class="card-body card-body-testimoni">
                                <h5 class="mb-4">Lorem ipsum dolor sit amet</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus soluta dolores assumenda
                                    corrupti accusantium ratione! Velit cumque impedit atque? Officiis suscipit dolore
                                    voluptate
                                    porro consequuntur iusto pariatur reprehenderit debitis. Ipsum.</p>
                                <div class="d-flex mt-5">
                                    <div class="testimoni-img">
                                        <img src="{{ asset("img/testimoni/profil resize.png") }}" alt="Avatar" style="width:50px">
                                    </div>
                                    <div class="testimoni-name ms-3">
                                        <h4 class="m-0">Iqbal Darmawan</h4>
                                        <p>mahasiswa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card card-testimoni">
                            <div class="card-body card-body-testimoni">
                                <h5 class="mb-4">Lorem ipsum dolor sit amet</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus soluta dolores assumenda
                                    corrupti accusantium ratione! Velit cumque impedit atque? Officiis suscipit dolore
                                    voluptate
                                    porro consequuntur iusto pariatur reprehenderit debitis. Ipsum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card card-testimoni">
                            <div class="card-body card-body-testimoni">
                                <h5 class="mb-4">Lorem ipsum dolor sit amet</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus soluta dolores assumenda
                                    corrupti accusantium ratione! Velit cumque impedit atque? Officiis suscipit dolore
                                    voluptate
                                    porro consequuntur iusto pariatur reprehenderit debitis. Ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    jQuery(document).ready(function($){
          $('.owl-carousel').owlCarousel({
            dots:false,
            loop:true,
            margin:10,
            nav:false,
            responsive:{
              0:{
                items:1
              },
              600:{
                items:1
              },
              1000:{
                items:3
              }
            }
          })
        })
</script>

@endsection
