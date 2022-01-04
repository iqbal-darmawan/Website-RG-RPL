@extends('Admin/components/v_wrapperDetail')
@section('title','Tambah Dosen')
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
    </div>
    <div class="col-xl-12 order-xl-1">
      <div class="card">
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-8">
              <a href="/dosen" class="d-flex align-items-center">  
                <i class="fas fa-angle-left"></i>
                <span class="ml-2"><strong>Tambah Data</strong></span>                
              </a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form action="/dosen/store" method="POST" enctype="multipart/form-data">
            @csrf
            <h6 class="heading-small text-muted mb-4">Informasi Dosen</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-last-name">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" id="input-last-name" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin" id="input-username" class="form-control">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-first-name">NIP</label>
                    <input type="text" name="nip" id="input-first-name" class="form-control">
                  </div>
                </div>
              </div>
            </div>
            <hr class="my-4" />
            <!-- Address -->
            <h6 class="heading-small text-muted mb-4">Informasi Kontak</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-address">Alamat</label>
                     <textarea name="alamat" class="form-control"  cols="30" rows="5"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-address">Email</label>
                    <input  name="email" class="form-control"  type="text">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-address">Telefon</label>
                    <input name="telefon" class="form-control"  type="text">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-address">Foto Dosen</label>
                    <input name="foto_dosen" class="form-control"  type="file">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-address">Tahun bergabung</label>
                    <input name="thn_bergabung" class="form-control"  type="date">
                  </div>
                </div>
              </div>
            </div>
            <hr class="my-4" />
            <!-- Description -->
            <h6 class="heading-small text-muted mb-4">Tentang Dosen</h6>
            <div class="pl-lg-4">
              <div class="form-group">
                <label class="form-control-label"><i class="ni ni-hat-3"></i> Prestasi</label>
                <div class="form-group" style="float: right">
                    <a class="addPrestasi btn btn-primary btn-sm" style="color: white">Tambah data</a>
                </div>
              </div>
              <div class="form-group">
                <label class="form-control-label">Nama Prestasi</label>
                <input type="text" class="form-control" name="nama_prestasi[]">
              </div>
              <div class="form-group">
                <label class="form-control-label">Deskripsi Prestasi</label>
                <textarea rows="3" class="form-control" name="deskripsi_prestasi[]" ></textarea>
              </div>
              <div class="prestasi"></div>
            </div>
            <hr class="my-4" />
            <div class="pl-lg-4">
              <div class="form-group">
                <label class="form-control-label"><i class="ni ni-hat-3"></i> Penelitian</label>
                <div class="form-group" style="float: right">
                  <a class="addPenelitian btn btn-primary btn-sm" style="color: white">Tambah data</a>
                </div>
              </div>
              <div class="form-group">
                <label class="form-control-label">Nama Penelitian</label>
                <input type="text" class="form-control" name="nama_penelitian[]" >
              </div>
              <div class="form-group">
                <label class="form-control-label">Deskripsi Penelitian</label>
                <textarea rows="4" class="form-control" name="deskripsi_penelitian[]" ></textarea>
              </div>
              <div class="penelitian"></div>
            </div>
            <hr class="my-4" />
            <div class="pl-lg-4">
              <div class="form-group">
                <label class="form-control-label"><i class="ni ni-hat-3"></i> Pengabdian</label>
                <div class="form-group" style="float: right">
                  <a class="addPengabdian btn btn-primary btn-sm" style="color: white">Tambah data</a>
                </div>
              </div>
              <div class="form-group">
                <label class="form-control-label">Nama Pengabdian</label>
                <input type="text" class="form-control" name="nama_pengabdian[]" >
              </div>
              <div class="form-group">
                <label class="form-control-label">Deskripsi Pengabdian</label>
                <textarea rows="4" class="form-control" name="deskripsi_pengabdian[]" ></textarea>
              </div>
              <div class="pengabdian"></div>
            </div>
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