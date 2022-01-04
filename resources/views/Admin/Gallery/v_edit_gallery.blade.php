@extends('Admin/components/v_wrapperDetail')
@section('title','Edit Gallery')
@section('content')
<div class="header pb-6 d-flex align-items-center" style="min-height: 250px;background-size: cover; background-position: center top;">
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
                    <input type="text" name="nama" id="input-last-name" class="form-control" value="{{$gallery->nama}}">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="">Foto Produk</label> <br>
                <img src="{{ asset('img/gallery/' . $gallery->foto) }}" class="mb-2" alt="" width="200px" height="200px">
                <input type="file" name="foto_kegiatan" class="form-control">
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