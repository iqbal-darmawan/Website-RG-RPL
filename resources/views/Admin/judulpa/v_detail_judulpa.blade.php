@extends('Admin/components/v_wrapperDetail')
@section('title','Detail Dosen')
@section('content')
<div class="header pb-6 d-flex align-items-center" style="min-height: 250px;background-size: cover; background-position: center top;">
  <!-- Mask -->
  <span class="mask bg-gradient-default opacity-8"></span>
  <!-- Header container -->
  <div class="container-fluid d-flex align-items-center">
    <div class="row">     
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
                <a href="/judulpa" class="d-flex align-items-center">  
                  <i class="fas fa-angle-left"></i>
                  <span class="ml-2"><strong>Detail Data</strong></span>                
                </a>
              </div>
              <div class="col-4 text-right">
                <a href="/judulpa/edit" class="btn btn-sm btn-primary">Edit</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form>
              <h6 class="heading-small text-muted mb-4">Informasi Dosen</h6>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-first-name">Judul PA</label>
                      <input type="text" id="input-first-name" class="form-control"  value="{{$judulpa->nama_judul}}" disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-first-name">Nama Pembimbing</label>
                      <input type="text" id="input-first-name" class="form-control"  value="{{$judulpa->nama_pembimbing}}" disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-username">Kualifikasi judul</label>
                    <textarea  id="input-username" class="form-control" value=""  id="" cols="30" rows="5" disabled>{{$judulpa->kualifikasi_judul}}</textarea>
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
                      <input type="text" id="input-city" class="form-control"  value="{{$judulpa->tahun_penawaran}}" disabled>
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
                  <textarea rows="5" class="form-control" disabled>{{$judulpa->deskripsi_judul}}</textarea>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>  
    </div>
</div>  
        
@endsection