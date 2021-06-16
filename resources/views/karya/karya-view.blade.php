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

<div class="header-karya">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="header-title">
                    <h2>Rekayasa Perangkat Lunak</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem enim veritatis, dicta
                        quis, facilis repellendus suscipit, beatae obcaecati doloremque reprehenderit repellat est! Quae
                        maxime saepe asperiores nisi, voluptates labore similique.</p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="d-flex">
                    <div class="card-karya-wrapper1 card m-4">
                        <div class="card-karya-header card-body text-center p-4">
                            <h4 class="mb-4 text-white">Rekayasa Perangkat Lunak</h4>
                            <div class="text-center mb-4">
                                <img src="{{ asset('img/karya/icon/fa-solid_atom.jpg') }}" alt=""
                                    class="text-center w-30" style="border-radius : 20px;">
                            </div>
                            <p class="mb-3 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod
                                accusantium recusandae dolorum quae, tenetur consequuntur? Est dolorum, eligendi cumque
                                id asperiores, debitis hic esse accusamus magni recusandae maxime, reiciendis nihil.</p>
                            <div class="button-see-more mb-4">
                                <a href="" class="btn">See more..</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-karya-wrapper2 card m-4">
                        <div class="card-body text-center p-4">
                            <h4 class="mb-4">Rekayasa Perangkat Lunak</h4>
                            <div class="text-center mb-4">
                                <img src="{{ asset('img/karya/icon/fa-solid_atom.png') }}" alt=""
                                    class="text-center w-40">
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod accusantium recusandae
                                dolorum quae, tenetur consequuntur? Est dolorum, eligendi cumque id asperiores, debitis
                                hic esse accusamus magni recusandae maxime, reiciendis nihil.</p>
                            <div class="button-see-more-2 mb-4">
                                <a href="" class="btn">See more..</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card-download">
    <div class="container">
        <div class="carousel-wrap">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card card-download-karya">
                        <div class="card-body">
                            <h4>Lorem Ipsum Dolor</h4>
                            <div class="d-flex align-items-center mb-4">
                                <div class="icon-tanggal me-2 d-flex align-items-center">
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.796631 11.7812C0.796631 12.4541 1.37818 13 2.09497 13H11.6161C12.3329 13 12.9144 12.4541 12.9144 11.7812V4.875H0.796631V11.7812ZM9.45221 6.80469C9.45221 6.63711 9.59827 6.5 9.7768 6.5H10.8587C11.0373 6.5 11.1833 6.63711 11.1833 6.80469V7.82031C11.1833 7.98789 11.0373 8.125 10.8587 8.125H9.7768C9.59827 8.125 9.45221 7.98789 9.45221 7.82031V6.80469ZM9.45221 10.0547C9.45221 9.88711 9.59827 9.75 9.7768 9.75H10.8587C11.0373 9.75 11.1833 9.88711 11.1833 10.0547V11.0703C11.1833 11.2379 11.0373 11.375 10.8587 11.375H9.7768C9.59827 11.375 9.45221 11.2379 9.45221 11.0703V10.0547ZM5.98998 6.80469C5.98998 6.63711 6.13604 6.5 6.31456 6.5H7.39651C7.57503 6.5 7.7211 6.63711 7.7211 6.80469V7.82031C7.7211 7.98789 7.57503 8.125 7.39651 8.125H6.31456C6.13604 8.125 5.98998 7.98789 5.98998 7.82031V6.80469ZM5.98998 10.0547C5.98998 9.88711 6.13604 9.75 6.31456 9.75H7.39651C7.57503 9.75 7.7211 9.88711 7.7211 10.0547V11.0703C7.7211 11.2379 7.57503 11.375 7.39651 11.375H6.31456C6.13604 11.375 5.98998 11.2379 5.98998 11.0703V10.0547ZM2.52775 6.80469C2.52775 6.63711 2.67381 6.5 2.85233 6.5H3.93428C4.1128 6.5 4.25886 6.63711 4.25886 6.80469V7.82031C4.25886 7.98789 4.1128 8.125 3.93428 8.125H2.85233C2.67381 8.125 2.52775 7.98789 2.52775 7.82031V6.80469ZM2.52775 10.0547C2.52775 9.88711 2.67381 9.75 2.85233 9.75H3.93428C4.1128 9.75 4.25886 9.88711 4.25886 10.0547V11.0703C4.25886 11.2379 4.1128 11.375 3.93428 11.375H2.85233C2.67381 11.375 2.52775 11.2379 2.52775 11.0703V10.0547ZM11.6161 1.625H10.3178V0.40625C10.3178 0.182812 10.123 0 9.88499 0H9.01943C8.7814 0 8.58665 0.182812 8.58665 0.40625V1.625H5.12442V0.40625C5.12442 0.182812 4.92967 0 4.69164 0H3.82608C3.58806 0 3.39331 0.182812 3.39331 0.40625V1.625H2.09497C1.37818 1.625 0.796631 2.1709 0.796631 2.84375V4.0625H12.9144V2.84375C12.9144 2.1709 12.3329 1.625 11.6161 1.625Z"
                                            fill="black" fill-opacity="0.5" />
                                    </svg>
                                </div>
                                <div class="text-tanggal">
                                    <span>DEC 31/2016</span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quisquam quas amet magni
                                vero in cumque doloribus maxime adipisci illum quae reprehenderit eligendi, mollitia cum
                                ducimus consequuntur perferendis. Quam, exercitationem?</p>
                            <div class="button-download-karya mt-4 mb-3">
                                <a href="">Download</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card card-download-karya">
                        <div class="card-body">
                            <h4>Lorem Ipsum Dolor</h4>
                            <div class="d-flex align-items-center mb-4">
                                <div class="icon-tanggal me-2 d-flex align-items-center">
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.796631 11.7812C0.796631 12.4541 1.37818 13 2.09497 13H11.6161C12.3329 13 12.9144 12.4541 12.9144 11.7812V4.875H0.796631V11.7812ZM9.45221 6.80469C9.45221 6.63711 9.59827 6.5 9.7768 6.5H10.8587C11.0373 6.5 11.1833 6.63711 11.1833 6.80469V7.82031C11.1833 7.98789 11.0373 8.125 10.8587 8.125H9.7768C9.59827 8.125 9.45221 7.98789 9.45221 7.82031V6.80469ZM9.45221 10.0547C9.45221 9.88711 9.59827 9.75 9.7768 9.75H10.8587C11.0373 9.75 11.1833 9.88711 11.1833 10.0547V11.0703C11.1833 11.2379 11.0373 11.375 10.8587 11.375H9.7768C9.59827 11.375 9.45221 11.2379 9.45221 11.0703V10.0547ZM5.98998 6.80469C5.98998 6.63711 6.13604 6.5 6.31456 6.5H7.39651C7.57503 6.5 7.7211 6.63711 7.7211 6.80469V7.82031C7.7211 7.98789 7.57503 8.125 7.39651 8.125H6.31456C6.13604 8.125 5.98998 7.98789 5.98998 7.82031V6.80469ZM5.98998 10.0547C5.98998 9.88711 6.13604 9.75 6.31456 9.75H7.39651C7.57503 9.75 7.7211 9.88711 7.7211 10.0547V11.0703C7.7211 11.2379 7.57503 11.375 7.39651 11.375H6.31456C6.13604 11.375 5.98998 11.2379 5.98998 11.0703V10.0547ZM2.52775 6.80469C2.52775 6.63711 2.67381 6.5 2.85233 6.5H3.93428C4.1128 6.5 4.25886 6.63711 4.25886 6.80469V7.82031C4.25886 7.98789 4.1128 8.125 3.93428 8.125H2.85233C2.67381 8.125 2.52775 7.98789 2.52775 7.82031V6.80469ZM2.52775 10.0547C2.52775 9.88711 2.67381 9.75 2.85233 9.75H3.93428C4.1128 9.75 4.25886 9.88711 4.25886 10.0547V11.0703C4.25886 11.2379 4.1128 11.375 3.93428 11.375H2.85233C2.67381 11.375 2.52775 11.2379 2.52775 11.0703V10.0547ZM11.6161 1.625H10.3178V0.40625C10.3178 0.182812 10.123 0 9.88499 0H9.01943C8.7814 0 8.58665 0.182812 8.58665 0.40625V1.625H5.12442V0.40625C5.12442 0.182812 4.92967 0 4.69164 0H3.82608C3.58806 0 3.39331 0.182812 3.39331 0.40625V1.625H2.09497C1.37818 1.625 0.796631 2.1709 0.796631 2.84375V4.0625H12.9144V2.84375C12.9144 2.1709 12.3329 1.625 11.6161 1.625Z"
                                            fill="black" fill-opacity="0.5" />
                                    </svg>
                                </div>
                                <div class="text-tanggal">
                                    <span>DEC 31/2016</span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quisquam quas amet magni
                                vero in cumque doloribus maxime adipisci illum quae reprehenderit eligendi, mollitia cum
                                ducimus consequuntur perferendis. Quam, exercitationem?</p>
                            <div class="button-download-karya mt-4 mb-3">
                                <a href="">Download</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card card-download-karya">
                        <div class="card-body">
                            <h4>Lorem Ipsum Dolor</h4>
                            <div class="d-flex align-items-center mb-4">
                                <div class="icon-tanggal me-2 d-flex align-items-center">
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.796631 11.7812C0.796631 12.4541 1.37818 13 2.09497 13H11.6161C12.3329 13 12.9144 12.4541 12.9144 11.7812V4.875H0.796631V11.7812ZM9.45221 6.80469C9.45221 6.63711 9.59827 6.5 9.7768 6.5H10.8587C11.0373 6.5 11.1833 6.63711 11.1833 6.80469V7.82031C11.1833 7.98789 11.0373 8.125 10.8587 8.125H9.7768C9.59827 8.125 9.45221 7.98789 9.45221 7.82031V6.80469ZM9.45221 10.0547C9.45221 9.88711 9.59827 9.75 9.7768 9.75H10.8587C11.0373 9.75 11.1833 9.88711 11.1833 10.0547V11.0703C11.1833 11.2379 11.0373 11.375 10.8587 11.375H9.7768C9.59827 11.375 9.45221 11.2379 9.45221 11.0703V10.0547ZM5.98998 6.80469C5.98998 6.63711 6.13604 6.5 6.31456 6.5H7.39651C7.57503 6.5 7.7211 6.63711 7.7211 6.80469V7.82031C7.7211 7.98789 7.57503 8.125 7.39651 8.125H6.31456C6.13604 8.125 5.98998 7.98789 5.98998 7.82031V6.80469ZM5.98998 10.0547C5.98998 9.88711 6.13604 9.75 6.31456 9.75H7.39651C7.57503 9.75 7.7211 9.88711 7.7211 10.0547V11.0703C7.7211 11.2379 7.57503 11.375 7.39651 11.375H6.31456C6.13604 11.375 5.98998 11.2379 5.98998 11.0703V10.0547ZM2.52775 6.80469C2.52775 6.63711 2.67381 6.5 2.85233 6.5H3.93428C4.1128 6.5 4.25886 6.63711 4.25886 6.80469V7.82031C4.25886 7.98789 4.1128 8.125 3.93428 8.125H2.85233C2.67381 8.125 2.52775 7.98789 2.52775 7.82031V6.80469ZM2.52775 10.0547C2.52775 9.88711 2.67381 9.75 2.85233 9.75H3.93428C4.1128 9.75 4.25886 9.88711 4.25886 10.0547V11.0703C4.25886 11.2379 4.1128 11.375 3.93428 11.375H2.85233C2.67381 11.375 2.52775 11.2379 2.52775 11.0703V10.0547ZM11.6161 1.625H10.3178V0.40625C10.3178 0.182812 10.123 0 9.88499 0H9.01943C8.7814 0 8.58665 0.182812 8.58665 0.40625V1.625H5.12442V0.40625C5.12442 0.182812 4.92967 0 4.69164 0H3.82608C3.58806 0 3.39331 0.182812 3.39331 0.40625V1.625H2.09497C1.37818 1.625 0.796631 2.1709 0.796631 2.84375V4.0625H12.9144V2.84375C12.9144 2.1709 12.3329 1.625 11.6161 1.625Z"
                                            fill="black" fill-opacity="0.5" />
                                    </svg>
                                </div>
                                <div class="text-tanggal">
                                    <span>DEC 31/2016</span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quisquam quas amet magni
                                vero in cumque doloribus maxime adipisci illum quae reprehenderit eligendi, mollitia cum
                                ducimus consequuntur perferendis. Quam, exercitationem?</p>
                            <div class="button-download-karya mt-4 mb-3">
                                <a href="">Download</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card card-download-karya">
                        <div class="card-body">
                            <h4>Lorem Ipsum Dolor</h4>
                            <div class="d-flex align-items-center mb-4">
                                <div class="icon-tanggal me-2 d-flex align-items-center">
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.796631 11.7812C0.796631 12.4541 1.37818 13 2.09497 13H11.6161C12.3329 13 12.9144 12.4541 12.9144 11.7812V4.875H0.796631V11.7812ZM9.45221 6.80469C9.45221 6.63711 9.59827 6.5 9.7768 6.5H10.8587C11.0373 6.5 11.1833 6.63711 11.1833 6.80469V7.82031C11.1833 7.98789 11.0373 8.125 10.8587 8.125H9.7768C9.59827 8.125 9.45221 7.98789 9.45221 7.82031V6.80469ZM9.45221 10.0547C9.45221 9.88711 9.59827 9.75 9.7768 9.75H10.8587C11.0373 9.75 11.1833 9.88711 11.1833 10.0547V11.0703C11.1833 11.2379 11.0373 11.375 10.8587 11.375H9.7768C9.59827 11.375 9.45221 11.2379 9.45221 11.0703V10.0547ZM5.98998 6.80469C5.98998 6.63711 6.13604 6.5 6.31456 6.5H7.39651C7.57503 6.5 7.7211 6.63711 7.7211 6.80469V7.82031C7.7211 7.98789 7.57503 8.125 7.39651 8.125H6.31456C6.13604 8.125 5.98998 7.98789 5.98998 7.82031V6.80469ZM5.98998 10.0547C5.98998 9.88711 6.13604 9.75 6.31456 9.75H7.39651C7.57503 9.75 7.7211 9.88711 7.7211 10.0547V11.0703C7.7211 11.2379 7.57503 11.375 7.39651 11.375H6.31456C6.13604 11.375 5.98998 11.2379 5.98998 11.0703V10.0547ZM2.52775 6.80469C2.52775 6.63711 2.67381 6.5 2.85233 6.5H3.93428C4.1128 6.5 4.25886 6.63711 4.25886 6.80469V7.82031C4.25886 7.98789 4.1128 8.125 3.93428 8.125H2.85233C2.67381 8.125 2.52775 7.98789 2.52775 7.82031V6.80469ZM2.52775 10.0547C2.52775 9.88711 2.67381 9.75 2.85233 9.75H3.93428C4.1128 9.75 4.25886 9.88711 4.25886 10.0547V11.0703C4.25886 11.2379 4.1128 11.375 3.93428 11.375H2.85233C2.67381 11.375 2.52775 11.2379 2.52775 11.0703V10.0547ZM11.6161 1.625H10.3178V0.40625C10.3178 0.182812 10.123 0 9.88499 0H9.01943C8.7814 0 8.58665 0.182812 8.58665 0.40625V1.625H5.12442V0.40625C5.12442 0.182812 4.92967 0 4.69164 0H3.82608C3.58806 0 3.39331 0.182812 3.39331 0.40625V1.625H2.09497C1.37818 1.625 0.796631 2.1709 0.796631 2.84375V4.0625H12.9144V2.84375C12.9144 2.1709 12.3329 1.625 11.6161 1.625Z"
                                            fill="black" fill-opacity="0.5" />
                                    </svg>
                                </div>
                                <div class="text-tanggal">
                                    <span>DEC 31/2016</span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quisquam quas amet magni
                                vero in cumque doloribus maxime adipisci illum quae reprehenderit eligendi, mollitia cum
                                ducimus consequuntur perferendis. Quam, exercitationem?</p>
                            <div class="button-download-karya mt-4 mb-3">
                                <a href="">Download</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="karya-produk">
    <div class="container">
        <div class="karya-produk-wrapper">
            <div class="karya-produk-title">
                <h2>Karya Produk RPL</h2>
            </div>
            <div class="karya-data-wrapper my-5 d-flex flex-wrap">
                <div class="card card-karya mx-4 my-3 ">
                    <div class="card-header card-header-padding">
                        <div class="text-center">
                            <img src="{{ asset('img/karya/karya-1.jpg') }}" alt="" class="text-center w-100">
                        </div>
                    </div>
                    <div class="card-body px-3 mt-3">
                        <h4>Lorem Ipsum</h4>
                        <p>Lorem ipsum dolor, sit amet....</p>
                        <div class="see-more-karya mb-4">
                            <a href="{{url('/karya/details/karya-1')}}" class="d-block">See more...</a>
                        </div>
                    </div>
                </div>
                <div class="card card-karya mx-4 my-3 ">
                    <div class="card-header card-header-padding">
                        <div class="text-center">
                            <img src="{{ asset('img/karya/karya-1.jpg') }}" alt="" class="text-center w-100">
                        </div>
                    </div>
                    <div class="card-body px-3 mt-3">
                        <h4>Lorem Ipsum</h4>
                        <p>Lorem ipsum dolor, sit amet....</p>
                        <div class="see-more-karya mb-4">
                            <a href="#" class="d-block">See more...</a>
                        </div>
                    </div>
                </div>
                <div class="card card-karya mx-4 my-3 ">
                    <div class="card-header card-header-padding">
                        <div class="text-center">
                            <img src="{{ asset('img/karya/karya-1.jpg') }}" alt="" class="text-center w-100">
                        </div>
                    </div>
                    <div class="card-body px-3 mt-3">
                        <h4>Lorem Ipsum</h4>
                        <p>Lorem ipsum dolor, sit amet....</p>
                        <div class="see-more-karya mb-4">
                            <a href="#" class="d-block">See more...</a>
                        </div>
                    </div>
                </div>
                <div class="card card-karya mx-4 my-3 ">
                    <div class="card-header card-header-padding">
                        <div class="text-center">
                            <img src="{{ asset('img/karya/karya-1.jpg') }}" alt="" class="text-center w-100">
                        </div>
                    </div>
                    <div class="card-body px-3 mt-3">
                        <h4>Lorem Ipsum</h4>
                        <p>Lorem ipsum dolor, sit amet....</p>
                        <div class="see-more-karya mb-4">
                            <a href="#" class="d-block">See more...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $('.owl-carousel').owlCarousel({
    dots: false,
    margin:10,
    nav:true,
    navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
</script>

@endsection
