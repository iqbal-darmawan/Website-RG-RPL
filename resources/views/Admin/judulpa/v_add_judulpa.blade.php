@extends('Admin/components/v_wrapperDetail')
@section('title','Tambah Judul PA')
@section('content')
<div class="header pb-6 d-flex align-items-center" style="min-height: 250px; background-size: cover; background-position: center top;">
  <!-- Mask -->
  <span class="mask bg-gradient-default opacity-8"></span>
  <!-- Header container -->
  <div class="container-fluid d-flex align-items-center">  
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
              <a href="/judulpa" class="d-flex align-items-center">  
                <i class="fas fa-angle-left"></i>
                <span class="ml-2"><strong>Tambah Data</strong></span>                
              </a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form action="/judulpa/store" method="POST" enctype="multipart/form-data">
            @csrf
            <h6 class="heading-small text-muted mb-4">Informasi Dosen</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-first-name">Judul PA</label>
                    <input type="text" name="nama_judul" class="form-control" >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-first-name">Nama Pembimbing</label>
                    <input type="text" name="nama_pembimbing" id="input-first-name" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">Kualifikasi judul</label>
                    <textarea  name="kualifikasi_judul" class="form-control"   id="" cols="30" rows="5"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <hr class="my-4" />
            <!-- Address -->
            <h6 class="heading-small text-muted mb-4">Tahun Penawaran</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-city">Tahun penawaran </label>
                    <input type="date" name="tahun_penawaran" class="form-control" >
                  </div>
                </div>
              </div>
            </div>
            <hr class="my-4" />
            <!-- Description -->
            <h6 class="heading-small text-muted mb-4">Deskripsi</h6>
            <div class="pl-lg-4">
              <div class="form-group">
                <label class="form-control-label">Deskripsi Judul </label>
                <textarea rows="5" name="deskripsi_judul" class="form-control" placeholder="A few words about you ..."></textarea>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-neutal">reset</button>
          </form>
        </div>
      </div>
    </div>
  </div>  
  </div>
</div>  
        
@endsection