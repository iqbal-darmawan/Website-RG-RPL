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
      <form id="search-form" class="form-inline" role="form" method="post" action="//www.google.com/search"
        target="_blank">
        <div class="input-group bg-input-group">
          <input type="text" class="search-form form-control" placeholder="Search">
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

{{-- konten judul PA-1 --}}
<div class="header-judul">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="header-title">
          <h2>Tawaran Judul PA</h2>
          <p>Pada halaman Tawaran Judul PA yang menampilkan berbagai macam Judul PA yang dapat diajukan dan
            bila nanti sudah mendapat acc pada judul PA tersebut</p>

        </div>
      </div>
      <div class="col-md-8">
        <div class="d-flex">
          <div class="card-karya-wrapper1 card m-4">
            <div class="card-karya-header card-body text-center p-4">
              <h4 class="mb-4 text-white">Rekayasa Perangkat Lunak</h4>
              <div class="text-center mb-4">
                <img src="{{ asset('img/karya/icon/fa-solid_atom.jpg') }}" alt="" class="text-center w-30"
                  style="border-radius : 20px;">
              </div>
              <p class="mb-3 text-white">Pengubahan perangkat lunak itu sendiri guna mengembangkan,
                memelihara, dan membangun kembali dengan menggunakan prinsip rekayasa untuk menghasilkan
                perangkat lunak yang dapat bekerja lebih efisien dan efektif untuk pengguna</p>
              <div class="button-see-more mb-4">
                <a href="" class="btn">See more..</a>
              </div>
            </div>
          </div>
          <div class="card-karya-wrapper2 card m-4">
            <div class="card-body text-center p-4">
              <h4 class="mb-4">Workshop Produksi Perangkat Lunak</h4>
              <div class="text-center mb-4">
                <img src="{{ asset('img/karya/icon/fa-solid_atom.png') }}" alt="" class="text-center w-40">
              </div>
              <p>Workshop Produksi perangkat lunak merupakan mata kuliah yang mana membahas mengenai
                materi rekayasa perangkat lunak dengan mempelajari bagaimana cara memproduksi, serta
                membuat output karya rekayasa perangkat lunak tertentu yang dapat bermanfaat</p>
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



{{-- konten judul PA-2 --}}
<div class="container">
  <div class="tawaran-pa-wrapper">
    @foreach ($judul as $item)
    <div class="card tawaran-pa-card">
      <div class="card-body p-4 d-flex justify-content-between align-items-center">
        <div class="logo">
          <img src="{{ asset('img/karya/icon/fa-solid_atom.jpg') }}" alt="" class="w-100">
        </div>
        <div class="text-tawaran-pa">
          <h4>{{$item->nama_judul}}</h4>
          <p>{{$item->deskripsi_judul}}</p>
        </div>
        <div class="deskripsi-tawaran-pa">
          <div class="date-wrapper d-flex mb-3">
            <p class="date">{{$item->tahun_penawaran}}</p>
          </div>
          <div class="nama-dosen d-flex mb-1">
            <svg width="23" height="13" viewBox="0 0 23 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M15.1473 5.50316C16.8236 5.50316 18.1666 4.27412 18.1666 2.75158C18.1666 1.22904 16.8236 0 15.1473 0C13.471 0 12.1178 1.22904 12.1178 2.75158C12.1178 4.27412 13.471 5.50316 15.1473 5.50316ZM7.06873 5.50316C8.74503 5.50316 10.0881 4.27412 10.0881 2.75158C10.0881 1.22904 8.74503 0 7.06873 0C5.39243 0 4.03927 1.22904 4.03927 2.75158C4.03927 4.27412 5.39243 5.50316 7.06873 5.50316ZM7.06873 7.33754C4.71585 7.33754 0 8.41066 0 10.5477V12.8407H14.1375V10.5477C14.1375 8.41066 9.42161 7.33754 7.06873 7.33754ZM15.1473 7.33754C14.8544 7.33754 14.5212 7.35589 14.1678 7.3834C15.3391 8.15384 16.1571 9.19027 16.1571 10.5477V12.8407H22.216V10.5477C22.216 8.41066 17.5002 7.33754 15.1473 7.33754Z"
                fill="black" fill-opacity="0.5" />
            </svg>
            <p class="m-0 ms-2">{{$item->nama_pembimbing}}</p>
          </div>
          <div class="kategori-pa d-flex">
            <p>{{$item->kualifikasi_judul}}</p>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    <div class="pagination justify-content-center">
      {{$judul->links()}}
    </div>
  </div>
</div>
@endsection