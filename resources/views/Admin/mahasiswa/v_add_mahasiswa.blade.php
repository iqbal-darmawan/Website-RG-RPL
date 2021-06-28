@extends('Admin/components/v_wrapperDetail')
@section('title','Tambah Karya')
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
    <div class="col-xl-8 order-xl-1">
      <div class="card">
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">@yield('title')</h3>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form action="/mahasiswa/store" method="POST" enctype="multipart/form-data" >
           @csrf
            <h6 class="heading-small text-muted mb-4">Informasi Karya</h6>
                <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                          <label class="form-control-label" for="input-first-name">Nama Karya</label>
                          <input type="text" class="form-control" name="nama_produk" >
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                          <label class="form-control-label" for="input-last-name">Nama Tim</label>
                          <input type="text" class="form-control" name="nama_tim">
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="">Deskripsi Produk</label>
                            <textarea name="deskripsi_produk"  class="form-control"  cols="30" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                  <label class="form-control-label"><i class="ni ni-hat-3"></i> Foto Produk</label>
                  <div class="form-group" style="float: right">
                    <a class="addFoto btn btn-primary btn-sm" style="color: white">Tambah data</a>
                  </div>
                  <div class="form-group">
                      <input type="file" class="form-control" name="foto_produk[]">
                  </div>
                </div>
                <div class="fotoProduk"></div>
            </div>
            <hr class="my-4" />
            <!-- Address -->
            <h6 class="heading-small text-muted mb-4">Informasi Pengembang</h6>
            <div class="pl-lg-4">
              <div class="form-group">
                <label class="form-control-label"><i class="ni ni-hat-3"></i> Pengembang</label>
                <div class="form-group" style="float: right">
                  <a class="addTeam btn btn-primary btn-sm" style="color: white">Tambah data</a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label >Nama</label>
                    <input name="nama_mahasiswa[]" type="text" class="form-control">
                  </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label >Kelas</label>
                      <input name="kelas[]" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label >Foto </label>
                      <input name="foto_mahasiswa[]" type="file" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="member"></div>
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-sm" >Simpan</button>
                  <button type="reset" class="btn btn-neutral btn-sm">Reset</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>  
  </div>
</div>  

@endsection