@extends('layouts.app') @section('optional-css')
<link rel="stylesheet" href="{{ asset('css/dosen/dosen-view.css') }}" />
@endsection @section('content')

<div class="jumbotron">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <h1 class="title-jumbotron">Daftar Dosen</h1>
    </div>
  </div>
</div>

<div class="header-dosen-view w-100">
  <div class="row m-0 header-dosen-wrapper">
    <div class="col-md-6 d-flex align-items-center">
      <div class="header-left">
        <h2>Apa itu RG RPL ?</h2>
        <p>
          Research Group RPL adalah sebuah grup penelitian dari program studi teknik informatika, berspesialisasi pada subjek rekayasa perangkat lunak dan bekerja bersama dalam masalah atau topik seputar RPL.
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
          <p class="fs-5 card-profile-text">Identitas</p>
        </div>
      </div>
      <div class="card card-profile">
        <div class="card-body text-center p-5">
          <img src="{{ asset('img/dosen/profil/icon-1.png') }}" alt="" class="mb-3" />
          <p class="fs-5 card-profile-text">Penelitian</p>
        </div>
      </div>
      <div class="card card-profile">
        <div class="card-body text-center p-5">
          <img src="{{ asset('img/dosen/profil/icon-2.png') }}" alt="" class="mb-3" />
          <p class="fs-5 card-profile-text">Prestasi</p>
        </div>
      </div>
      <div class="card card-profile">
        <div class="card-body text-center p-5">
          <img src="{{ asset('img/dosen/profil/icon-3.png') }}" alt="" class="mb-3" />
          <p class="fs-5 card-profile-text">Pengabdian</p>
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
      <div class="card dosen-tim-card shadow m-3" >
        <div class="card-header p-0">
          <img src="{{asset('img/dosen/profil/' .$item->foto_dosen)}}" alt=""
            class="text-center w-100 " />
        </div>
        <div class="card-body px-3 ">
          <h4>{{$item->nama_lengkap}}</h4>
          <p class="my-3">NIP: {{$item->nip}}</p>
        </div>
        <div class="card-footer bg-white border-0">
          <div class="see-more-karya d-block text-end mb-2">
            <a href="{{route('daftar-dosen-details', $item->id)}}">See profile</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  {{$dosen->links()}}
</div>
@endsection
