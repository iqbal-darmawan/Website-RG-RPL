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
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col-xl-4 order-xl-2">
      <div class="card card-profile">
        <img src="{{ asset('template') }}/assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
        <div class="row justify-content-center">
          <div class="col-lg-3 order-lg-2">
            <div class="card-profile-image">
              <a href="#">
                <img src="{{ asset('template') }}/assets/img/theme/team-4.jpg" class="rounded-circle">
              </a>
            </div>
          </div>
        </div>
        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
          <div class="d-flex justify-content-between">
            <a href="#" class="btn btn-sm btn-info  mr-4 ">Connect</a>
            <a href="#" class="btn btn-sm btn-default float-right">Message</a>
          </div>
        </div>
        <div class="card-body pt-0">
          <div class="row">
            <div class="col">
              <div class="card-profile-stats d-flex justify-content-center">
                <div>
                  <span class="heading">22</span>
                  <span class="description">Friends</span>
                </div>
                <div>
                  <span class="heading">10</span>
                  <span class="description">Photos</span>
                </div>
                <div>
                  <span class="heading">89</span>
                  <span class="description">Comments</span>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
            <h5 class="h3">
              Jessica Jones<span class="font-weight-light">, 27</span>
            </h5>
            <div class="h5 font-weight-300">
              <i class="ni location_pin mr-2"></i>Bucharest, Romania
            </div>
            <div class="h5 mt-4">
              <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
            </div>
            <div>
              <i class="ni education_hat mr-2"></i>University of Computer Science
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-8 order-xl-1">
      <div class="card">
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">Detail</h3>
            </div>
            <div class="col-4 text-right">
              <a href="#!" class="btn btn-sm btn-primary">Edit</a>
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
                    <label class="form-control-label" for="input-last-name">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap"  class="form-control" value="{{$dosen->nama_lengkap}}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin"  class="form-control" value="{{$dosen->jenis_kelamin}}" readonly>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-first-name">NIP</label>
                    <input type="text" name="nip"  class="form-control" value="{{$dosen->nip}}" readonly>
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
                     <textarea name="alamat" class="form-control"  cols="30" rows="5" readonly>{{$dosen->alamat}}</textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-address">Tahun bergabung</label>
                    <input name="thn_bergabung" class="form-control" placeholder="{{$dosen->thn_bergabung}}"  type="text" readonly>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-address">Telefon</label>
                    <input name="telefon" class="form-control"  type="text" value="{{$dosen->telefon}}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-address">Foto Dosen</label>
                    <div>
                        <img src="{{ url('Img/dosen/' . $dosen->foto_dosen) }}" width="100px" height="100px" alt="">
                    </div>
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
              </div>
              <div class="form-group">
                <ul class="list-group list-group-flush">
                  @foreach ($prestasi as $item)
                  <li class="list-group-item"><i class="ni ni-button-play"></i>  {{$item->nama_prestasi}} <br> {{$item->deskripsi_prestasi}}</li>
                  
                  @endforeach
                </ul>
              </div>
              
            </div>
            <hr class="my-4" />
            <div class="pl-lg-4">
              <div class="form-group">
                <label class="form-control-label"><i class="ni ni-hat-3"></i> Penelitian</label>
              </div>
              <div class="form-group">
                <ul class="list-group list-group-flush">
                  @foreach ($penelitian as $item)
                  <li class="list-group-item"><i class="ni ni-button-play"></i>  {{$item->nama_penelitian}} <br> {{$item->deskripsi_penelitian}}</li>
                  @endforeach
                </ul>
              </div>
              <div class="penelitian"></div>
            </div>
            <hr class="my-4" />
            <div class="pl-lg-4">
              <div class="form-group">
                <label class="form-control-label"><i class="ni ni-hat-3"></i> Pengabdian</label>
              </div>
              <div class="form-group">
                <ul class="list-group list-group-flush">
                  @foreach ($pengabdian as $item)
                  <li class="list-group-item"><i class="ni ni-button-play"></i>  {{$item->nama_pengabdian}} <br> {{$item->deskripsi_pengabdian}}</li>
                  @endforeach
                </ul>
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