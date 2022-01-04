@extends('Admin/components/v_wrapperDetail')
@section('title','Edit Gallery')
@section('content')
<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url({{asset('template')}}/assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
  <!-- Mask -->
  <span class="mask bg-gradient-default opacity-8"></span>
  <!-- Header container -->
</div>
<!-- Page content -->
@include('Admin.components.sweetalert')
<div class="container-fluid mt--4">
  <div class="row">
    </div>
    <div class="col-xl-12 order-xl-1">
      <div class="card">
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-8">
              <a href="/gallery" class="d-flex align-items-center">  
                <i class="fas fa-angle-left"></i>
                <span class="ml-2"><strong>Edit Data</strong></span>                
              </a>
            </div>           
          </div>
        </div>
        <div class="card-body">
          <form action="/gallery/update/{{$gallery->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <h6 class="heading-small text-muted mb-4">Gallery Kegiatan</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-last-name">Nama Kegiatan</label>
                    <input type="text" name="nama_kegiatan" id="input-last-name" class="form-control" value="{{$gallery->nama_kegiatan}}">
                  </div>
                </div>
              </div>
              <div class="form-group" style="float: right">
                <a  data-toggle="modal" data-target="#addModal"  class="btn btn-primary btn-sm" style="color: white">Tambah Foto</a>
              </div>                           
              @foreach ($gallery as $data)
              <div class="row">
                <div class="col-sm-10">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">Foto Kegiatan</label>
                    <input type="file" name="foto_kegiatan[]" id="input-username" class="form-control">  
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group" style="float: right">
                    <a href="/gallery/destroyById/{{$data->id}}"  class="btn btn-danger btn-sm" style="color: white"><i class="fas fa-trash"></i></a>
                  </div>
                </div>
              </div>
              @endforeach
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

 {{-- modal add --}}
 <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Foto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/gallery/addFotoById/{{$gallery->id}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label >Foto Kegiatan</label>
            <input type="file" name="foto_kegiatan[]" class="form-control"   >
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