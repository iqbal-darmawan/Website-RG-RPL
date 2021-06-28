@extends('Admin/components/v_wrapperDetail')
@section('title','Detail Dosen')
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
            <form action="/judulpa/update/{{$judulpa->id}}" method="POST" enctype="multipart/form-data">
              <h6 class="heading-small text-muted mb-4">Informasi Dosen</h6>
              @csrf
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-first-name">Judul PA</label>
                      <input type="text" name="nama_judul" class="form-control"  value="{{$judulpa->nama_judul}}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-first-name">Nama Pembimbing</label>
                      <input type="text" name="nama_pembimbing" id="input-first-name" class="form-control"  value="{{$judulpa->nama_pembimbing}}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-username">Kualifikasi judul</label>
                      <textarea  name="kualifikasi_judul" class="form-control"  value=""  id="" cols="30" rows="5">{{$judulpa->kualifikasi_judul}}</textarea>
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
                      <input type="date" name="tahun_penawaran" class="form-control"  value="{{$judulpa->tahun_penawaran}}">
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
                  <textarea rows="5" name="deskripsi_judul" placeholder="" class="form-control" >{{$judulpa->deskripsi_judul}}</textarea>
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