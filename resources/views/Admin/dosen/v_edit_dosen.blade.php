@extends('Admin/components/v_wrapperDetail')
@section('title','Edit Dosen')
@section('content')
<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
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
              <h3 class="mb-0">Edit</h3>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form>
            <h6 class="heading-small text-muted mb-4">Informasi Dosen</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-first-name">NIP</label>
                    <input type="text" id="input-first-name" class="form-control" placeholder="First name" value="Lucky">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-last-name">Nama Lengkap</label>
                    <input type="text" id="input-last-name" class="form-control" placeholder="Last name" value="Jesse">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">Jenis Kelamin</label>
                    <input type="text" id="input-username" class="form-control" placeholder="Username" value="lucky.jesse">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Tahun Bergabung</label>
                    <input type="email" id="input-email" class="form-control" placeholder="jesse@example.com">
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
                    <input id="input-address" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label" for="input-city">Kota</label>
                    <input type="text" id="input-city" class="form-control" placeholder="City" value="New York">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label" for="input-country">Negara</label>
                    <input type="text" id="input-country" class="form-control" placeholder="Country" value="United States">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label" for="input-country">Kode Pos</label>
                    <input type="number" id="input-postal-code" class="form-control" placeholder="Postal code">
                  </div>
                </div>
              </div>
                <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label" for="input-address">Alamat Email</label>
                    <input id="input-address" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                  </div>
                </div>
                  <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label" for="input-address">Telefon</label>
                    <input id="input-address" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                  </div>
                  </div>
                  <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label" for="input-address">Alamat Lecturer</label>
                    <input id="input-address" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                  </div>
                </div>
              </div>
              </div>
            <hr class="my-4" />
            <!-- Description -->
            <h6 class="heading-small text-muted mb-4">Tentang Dosen</h6>
            <div class="pl-lg-4">
              <div class="form-group">
                <label class="form-control-label">Prestasi</label>
                <textarea rows="4" class="form-control" placeholder="A few words about you ...">A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.</textarea>
              </div>
            </div>
            <div class="pl-lg-4">
              <div class="form-group">
                <label class="form-control-label">Penelitian</label>
                <textarea rows="4" class="form-control" placeholder="A few words about you ...">A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.</textarea>
              </div>
            </div>
            <div class="pl-lg-4">
              <div class="form-group">
                <label class="form-control-label">Pengabdian</label>
                <textarea rows="4" class="form-control" placeholder="A few words about you ...">A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.</textarea>
              </div>
            </div>
            <button class="btn btn-primary">Simpan</button>
            <button class="btn btn-neutal">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>  
  </div>
</div>  
        
@endsection