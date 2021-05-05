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
                      <input type="text" id="input-first-name" class="form-control" placeholder="First name" value="Lucky">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-first-name">Nama Pembimbing</label>
                      <input type="text" id="input-first-name" class="form-control" placeholder="First name" value="Lucky">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-username">Kualifikasi judul</label>
                      <textarea  id="input-username" class="form-control" placeholder="Username" value="lucky.jesse"  id="" cols="30" rows="5"></textarea>
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
                      <label class="form-control-label" for="input-city">Tahun penawaran dosen</label>
                      <input type="date" id="input-city" class="form-control" placeholder="City" value="New York">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-country">Industri</label>
                      <input type="date" id="input-country" class="form-control" placeholder="Country" value="United States">
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
                  <textarea rows="5" class="form-control" placeholder="A few words about you ...">A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.</textarea>
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