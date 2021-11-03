@extends('Admin/components/v_wrapperDetail')
@section('title','Tambah Materi')
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
              <h3 class="mb-0">Tambah Materi</h3>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form action="/materi/store" method="POST" enctype="multipart/form-data">
            @csrf
            <h6 class="heading-small text-muted mb-4">Materi Kuliah</h6>   
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-last-name">Nama Materi</label>
                    <input type="text" name="nama" id="input-last-name" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-last-name">Kategory</label>
                    <select name="category" id="" class="form-control">
                      <option selected>Category</option>
                      <option value="wppl">RPL</option>
                      <option value="wppl"> WPPL</option>
                   </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">File Materi</label>
                    <div class="form-group" style="float: right">
                      <a class="addFile btn btn-primary btn-sm" style="color: white">Tambah data</a>
                    </div>
                    <input type="file" name="file_materi[]" id="input-username" class=" form-control">
                  </div>
                </div>
              </div>
              <div class="materi">

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