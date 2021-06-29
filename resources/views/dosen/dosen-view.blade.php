@extends('layouts.app') @section('optional-css')
<link rel="stylesheet" href="{{ asset('css/dosen/dosen-view.css') }}" />
@endsection @section('content')

<div class="jumbotron">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <h1 class="title-jumbotron">Daftar Dosen</h1>
      <form id="search-form" class="form-inline" role="form" method="post" action="//www.google.com/search"
        target="_blank">
        <div class="input-group bg-input-group">
          <input type="text" class="search-form form-control" placeholder="Search" />
          <span class="input-group-btn">
            <button type="submit" class="btn btn-primary search-btn" data-target="#search-form" name="q">
              <svg width="20" height="20" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
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

<div class="header-dosen-view w-100">
  <div class="row m-0">
    <div class="col-md-6  d-flex justify-content-center flex-column">
      <div class="header-left">
        <h2>Apa itu RG RPL ?</h2>
        <p>
        Research Group RPL adalah sebuah grup penelitian dari program studi teknik informatika, 
        berspesialisasi pada subjek rekayasa perangkat lunak dan bekerja bersama dalam masalah atau 
        topik seputar RPL
        </p>
      </div>
    </div>
    <div class="col-md-6 header-right p-0">
      <img src="{{ asset('img/dosen/header/bg1.png') }}" alt="" class="w-100" />
    </div>
  </div>
</div>

<div class="container">
  <div class="profil-dosen-wrapper">
    <div class="profile-dosen-title">
      <h2 class="text-center">Profil Dosen</h2>
    </div>
    <div class="d-flex my-5 profile-dosen-card-wrapper justify-content-center">
      <div class="card card-profile">
        <div class="card-body text-center p-5">
          <img src="{{ asset('img/dosen/profil/icon.png') }}" alt="" class="mb-3" />
          <p>Identitas</p>
          <span>Hehe</span>
        </div>
      </div>
      <div class="card card-profile">
        <div class="card-body text-center p-5">
          <img src="{{ asset('img/dosen/profil/icon-1.png') }}" alt="" class="mb-3" />
          <p>Produk</p>
          <span>Hehe</span>
        </div>
      </div>
      <div class="card card-profile">
        <div class="card-body text-center p-5">
          <img src="{{ asset('img/dosen/profil/icon-2.png') }}" alt="" class="mb-3" />
          <p>Kegiatan</p>
          <span>Hehe</span>
        </div>
      </div>
      <div class="card card-profile">
        <div class="card-body text-center p-5">
          <img src="{{ asset('img/dosen/profil/icon-3.png') }}" alt="" class="mb-3" />
          <p>Penelitian</p>
          <span>Hehe</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="dosen-tim-wrapper ">
    <div class="dosen-tim-title">
      <h2 class="text-center">Dosen Tim RG RPL</h2>
    </div>
    <div class="dosen-tim-card-wrapper d-flex flex-wrap justify-content-center">
      @foreach ($dosen as $item)
      <div class="card dosen-tim-card shadow m-3" style="width: 330px; heigth:362">
        <div class="card-header p-0">
          <img src="{{asset('img/dosen/profil/' .$item->foto_dosen)}}" alt=""
            class="text-center w-100 " />
        </div>
        <div class="card-body px-3 ">
          <h4>{{$item->nama_lengkap}}</h4>
          <p class="my-3">NIP: {{$item->nip}}</p>
          <div class="see-more-karya mb-3 mt-5 d-block text-end">
            <a href="{{route('daftar-dosen-details', $item->id)}}">See profile</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <div class="pagination justify-content-center">
    {{$dosen->links()}}
  </div>
</div>
@endsection