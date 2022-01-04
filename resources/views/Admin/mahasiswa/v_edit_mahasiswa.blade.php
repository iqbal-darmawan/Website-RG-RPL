@extends('Admin/components/v_wrapperDetail')
@section('title','Edit Karya')
@section('content')
<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url({{asset('template')}}/assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
  <!-- Mask -->
  <span class="mask bg-gradient-default opacity-8"></span>
  <!-- Header container -->
  <div class="container-fluid d-flex align-items-center">
    <div class="row">
      <div class="col-lg-7 col-md-10">
        <h1 class="display-2 text-white">Hello Jesse</h1>
        <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
      </div>
    </div>
  </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--8">
  <div class="row">
    <div class="col-xl-12 order-xl-1">
      <div class="card">
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">@yield('title')</h3>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form action="/karya-mahasiswa/update/{{$dataKarya->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <h6 class="heading-small text-muted mb-4">Informasi Karya</h6>
                <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Nama Produk</label>
                        <input type="text" name="nama_produk" id="input-first-name" class="form-control"  value="{{$dataKarya->nama_produk}}">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Nama Tim</label>
                        <input type="text" name="nama_tim" id="input-last-name" class="form-control"  value="{{$dataKarya->nama_tim}}">
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="">Deskripsi Produk</label>
                            <textarea name="deskripsi_produk"  class="form-control"  cols="30" rows="3" value="{{$dataKarya->deskripsi_produk}}">{{$dataKarya->deskripsi_produk}}</textarea>
                    </div>
                </div>
                </div>
                @foreach ($fotoKarya as $item)
                <div class="row">
                  <img src="{{ url('img/produk/' . $item->foto_produk) }}" width="100px" height="100px" alt="">
                  <div class="col-lg-4">
                      <div class="form-group">
                          <label for="">Foto Produk</label>
                          <input type="file" name="foto_produk[]" class="form-control">
                      </div>
                  </div>
                  <div class="col-lg-4 mt-3">
                    <a href="/mahasiswa/hapusFoto/{{$item->id}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                  </div>
              </div>
                @endforeach
                <div class="form-group">
                  <a href="#"  class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addModal" >Tambah foto</a>
                </div>
            <hr class="my-4" />
            <h6 class="heading-small text-muted mb-4">Informasi Pengembang</h6>
            <div class="pl-lg-4">
            
              </div>
              <div class="container">
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                  <button type="reset" class="btn btn-neutral btn-sm">reset</button>
                </div>
              </div>   
          </form>
        </div>
      </div>
    </div>
  </div>  
  </div>
</div>  
        
  {{-- modal add foto produk--}}
  <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/mahasiswa/addFotoProduk/{{$dataKarya->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label >Foto Produk</label>
              <input class="form-control" type="file" name="foto_produk" >
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
    {{-- close modal add --}}

     {{-- modal add mahasisswa--}}
  <div class="modal fade" id="addModalMahasiswa" tabindex="-1" role="dialog" aria-labelledby="addModalMahasiswa" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/mahasiswa/tambahMahasiswa/{{$dataKarya->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label >Nama Anggota</label>
              <input class="form-control" type="text" name="nama_mahasiswa" >
            </div>
            <div class="form-group">
              <label >Kelas</label>
              <input class="form-control" type="text" name="kelas" >
            </div>
            <div class="form-group">
              <label >Foto anggota</label>
              <input class="form-control" type="file" name="foto_mahasiswa" >
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
    {{-- close modal add --}}
@endsection