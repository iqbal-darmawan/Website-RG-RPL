@extends('Admin/components/v_wrapperDetail')
@section('title','Tambah Karya')
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
    <div class="col-xl-4 order-xl-2">
      <div class="card card-profile">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{asset('Img')}}/slider1.jpg" class="d-block w-100" width="200px" height="200px" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{asset('Img')}}/slider2.jpg" class="d-block w-100" width="200px" height="200px" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{asset('Img')}}/slider3.jpg" class="d-block w-100" width="200px" height="200px" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
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
                  <span class="heading">Pengembang</span> <br>
                  <div class="avatar-group desription">
                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                      <img alt="Image placeholder" src="{{ asset('template') }}/assets/img/theme/team-1.jpg">
                    </a>
                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                      <img alt="Image placeholder" src="{{ asset('template') }}/assets/img/theme/team-2.jpg">
                    </a>
                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                      <img alt="Image placeholder" src="{{ asset('template') }}/assets/img/theme/team-3.jpg">
                    </a>
                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                      <img alt="Image placeholder" src="{{ asset('template') }}/assets/img/theme/team-4.jpg">
                    </a>
                  </div> 
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
            <h5 class="h3">
              Tim Lizan<span class="font-weight-light">, D3 IT B</span>
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
              <h3 class="mb-0">@yield('title')</h3>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form>
            <h6 class="heading-small text-muted mb-4">Informasi Karya</h6>
                <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Nama Karya</label>
                        <input type="text" id="input-first-name" class="form-control" placeholder="First name" value="Lucky">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Nama Tim</label>
                        <input type="text" id="input-last-name" class="form-control" placeholder="Last name" value="Jesse">
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="">Deskripsi Produk</label>
                            <textarea name=""  class="form-control"  cols="30" rows="3"></textarea>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Foto Produk</label>
                            <input type="file" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Foto Produk</label>
                            <input type="file" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Foto Produk</label>
                            <input type="file" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Foto Produk</label>
                            <input type="file" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-4" />
            <!-- Address -->
            <h6 class="heading-small text-muted mb-4">Informasi Pengembang</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label >Nama</label>
                    <input type="text" class="form-control">
                  </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label >Kelas</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label >Foto</label>
                        <input type="file" class="form-control">
                      </div>
                   </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label >Nama</label>
                    <input type="text" class="form-control">
                  </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label >Kelas</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label >Foto</label>
                        <input type="file" class="form-control">
                      </div>
                   </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label >Nama</label>
                    <input type="text" class="form-control">
                  </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label >Kelas</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label >Foto</label>
                        <input type="file" class="form-control">
                      </div>
                   </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label >Nama</label>
                    <input type="text" class="form-control">
                  </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label >Kelas</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label >Foto</label>
                        <input type="file" class="form-control">
                      </div>
                   </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label >Nama</label>
                    <input type="text" class="form-control">
                  </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label >Kelas</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label >Foto</label>
                        <input type="file" class="form-control">
                      </div>
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