@extends('Admin/components/v_wrapperDetail')
@section('title','Edit Dosen')
@section('content')
<div class="header pb-6 d-flex align-items-center" style="min-height: 50px; background-image: url({{asset('template')}}/assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
  <!-- Mask -->
  <span class="mask bg-gradient-default opacity-8"></span>
  <!-- Header container -->
  <div class="container-fluid d-flex align-items-center">
    <div class="row">
      <div class="col-lg-7 col-md-10">
        <h1 class="display-2 text-white"></h1>        
      </div>
    </div>
  </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col-xl-12 order-xl-1">
      <div class="card">
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-8">
              <a href="/dosen" class="d-flex align-items-center">  
                <i class="fas fa-angle-left"></i>
                <span class="ml-2"><strong>Edit Data</strong></span>                
              </a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form action="/dosen/update/{{$dosen->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <h6 class="heading-small text-muted mb-4">Informasi Dosen</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-first-name">NIP</label>
                    <input type="text" id="input-first-name" name="nip" class="form-control"  value="{{$dosen->nip}}">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-last-name">Nama Lengkap</label>
                    <input type="text" id="input-last-name" name="nama_lengkap" class="form-control" value="{{$dosen->nama_lengkap}}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">Jenis Kelamin</label>
                    <input type="text" id="input-username" name="jenis_kelamin" class="form-control" value="{{$dosen->jenis_kelamin}}">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Tahun Bergabung</label>
                    <input type="date" id="input-email" name="thn_bergabung" class="form-control" value="{{$dosen->thn_bergabung}}">
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
                     <textarea name="alamat" class="form-control"  cols="30" rows="5">{{$dosen->alamat}}</textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label" for="input-city">telefon</label>
                    <input type="text" name="telefon" id="input-city" class="form-control"  value="{{$dosen->telefon}}">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label" for="input-country">Foto dosen</label>
                    <input type="file" name="foto_dosen" id="input-country" class="form-control"  value="{{$dosen->foto_dosen}}">
                  </div>
                </div>
              </div>
                
              </div>            
            
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-sm">Simpan</button>              
            </div>
            <!-- Description -->                   
          </form>
        </div>
      </div>

      <div class="card">
        <div class="card-header">Tentang Dosen</div>
        <div class="card-body">
          <h6 class="heading-small text-muted mb-4">Tentang Dosen</h6>            
          <div class="pl-lg-4">
            <div class="form-group">
              <label class="form-control-label">Prestasi</label>
                <div class="form-group" style="float: right">
                  <a class="btn btn-primary btn-sm" style="color: white" data-toggle="modal" data-target="#addPrestasi">Tambah data</a>
                </div>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Prestasi</th>
                        <th>Deskripsi Prestasi</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                      $no=1;
                        @endphp
                        @foreach ($prestasi as $data)
                        <tr>
                          <td>{{$no}}</td>
                          <td><textarea name="nama_prestasi[]" id="" cols="30" rows="3">{{$data->nama_prestasi}}</textarea></td>
                          <td><textarea name="deskripsi_prestasi[]" id="" cols="70" rows="3">{{$data->deskripsi_prestasi}}</textarea></td>
                          <td class="text-right">
                            <a href="/dosen/deletePrestasiById/{{$data->id}}" class="btn btn-danger btn-sm mt-3"><i class="fas fa-trash"></i></a>
                          </td>
                        </tr>
                        @endforeach
                        @php
                            $no++;
                        @endphp
                    </tbody>

                </table>
              
            </div>
          </div>
          <div class="pl-lg-4">
            <div class="form-group">
              <label class="form-control-label">Penelitian</label>
                <div class="form-group" style="float: right">
                  <a class="btn btn-primary btn-sm" style="color: white" data-toggle="modal" data-target="#addPenelitian">Tambah data</a>
                </div>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Penelitian</th>
                        <th>Deskripsi Penelitian</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                      $no=1;
                      @endphp
                      @foreach ($penelitian as $data)
                      <tr>
                        <td>{{$no}}</td>
                        <td><textarea name="nama_penelitian[]" id="" cols="30" rows="3">{{$data->nama_penelitian}}</textarea></td>
                        <td><textarea name="deskripsi_penelitian[]" id="" cols="70" rows="3">{{$data->deskripsi_penelitian}}</textarea></td>
                        <td class="text-right">
                          <a href="/dosen/deletePenelitianById/{{$data->id}}" class="btn btn-danger btn-sm mt-3"><i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                      @endforeach
                      @php
                          $no++;
                      @endphp
                    </tbody>

                </table>
              
            </div>
          </div>
          <div class="pl-lg-4">
            <div class="form-group">
              <label class="form-control-label">Pengabdian</label>
                <div class="form-group" style="float: right">
                  <a class="btn btn-primary btn-sm" style="color: white" data-toggle="modal" data-target="#addPengabdian">Tambah data</a>
                </div>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Pengabdian</th>
                        <th>Deskripsi Pengabdian</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                          $no=1;
                      @endphp
                      @foreach ($pengabdian as $data)
                      <tr>
                        <td>{{$no}}</td>
                        <td><textarea name="nama_pengabdian[]" id="" cols="30" rows="3">{{$data->nama_pengabdian}}</textarea></td>
                        <td><textarea name="deskripsi_pengabdian[]" id="" cols="70" rows="3">{{$data->deskripsi_pengabdian}}</textarea></td>
                        <td class="text-right">
                          <a href="/dosen/deletePengabdianById/{{$data->id}}" class="btn btn-danger btn-sm mt-3"><i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                      @endforeach
                      @php
                          $no++;
                      @endphp
                    </tbody>

                </table>
              
            </div>
          </div>   
        </div>
      </div>
    </div>
  </div>  
  </div>
</div>  

{{-- MODAL ADD PRESTASI --}}
<div class="modal fade" id="addPrestasi" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/dosen/addArrayPrestasi/{{$dosen->id}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label >Nama Prestasi</label>
            <input class="form-control" type="text" name="nama_prestasi" >
          </div>
          <div class="form-group">
            <label >Deskripsi Prestasi</label>
            <textarea name="deskripsi_prestasi" class="form-control" id="" cols="30" rows="4"></textarea>
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
{{-- CLOSE MODAL ADD PRESTASI --}}

{{-- MODAL ADD PENELITIAN --}}
<div class="modal fade" id="addPenelitian" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/dosen/addArrayPenelitian/{{$dosen->id}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label >Nama Penelitian</label>
            <input class="form-control" type="text" name="nama_penelitian" >
          </div>
          <div class="form-group">
            <label >Deskripsi Penelitian</label>
            <textarea name="deskripsi_penelitian" class="form-control" id="" cols="30" rows="4"></textarea>
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
{{-- CLOSE MODAL ADD PENELITIAN --}}

{{-- MODAL ADD PENGABDIAN --}}
<div class="modal fade" id="addPengabdian" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/dosen/addArrayPengabdian/{{$dosen->id}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label >Nama Pengabdian</label>
            <input class="form-control" type="text" name="nama_pengabdian" >
          </div>
          <div class="form-group">
            <label >Deskripsi Pengabdian</label>
            <textarea name="deskripsi_pengabdian" class="form-control" id="" cols="30" rows="4"></textarea>
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
{{-- CLOSE MODAL ADD PENGABDIAN --}}
        
@endsection