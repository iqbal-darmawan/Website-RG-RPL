@extends('Admin/components/v_wrapperDetail')
@section('title','Tambah Gallery')
@section('content')
<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url({{asset('template')}}/assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
  <!-- Mask -->
  <span class="mask bg-gradient-default opacity-8"></span>
  <!-- Header container -->
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="row">
    </div>
    <div class="col-xl-12 order-xl-1">
      <div class="card">
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">Tambah Gallery</h3>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form action="/gallery/store" method="POST" enctype="multipart/form-data">
            @csrf
            <h6 class="heading-small text-muted mb-4">Gallery Kegiatan</h6>
            
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-last-name">Nama Kegiatan</label>
                    <input type="text" name="nama_kegiatan" id="input-last-name" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">Foto Kegiatan</label>
                    <div class="form-group" style="float: right">
                      <a class="addGallery btn btn-primary btn-sm" style="color: white">Tambah data</a>
                    </div>
                    <input type="file" name="foto_kegiatan[]" id="input-username" class=" form-control">
                  </div>
                </div>
              </div>
              <div class="gallery">

              </div>
            </div>
            <hr class="my-4" />
            <div class="form-group">
                <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
                <button class="btn btn-neutral btn-sm" type="reset">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>  
  </div>
</div>  
        
@endsection