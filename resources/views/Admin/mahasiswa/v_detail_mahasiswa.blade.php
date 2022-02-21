@extends('Admin/components/v_wrapperDetail')
@section('title','Detail Karya')
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
    <div class="col-xl-4 order-xl-2">
      <div class="card card-profile">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            @foreach ($fotoKarya as $data)
            <div class="carousel-item active">
              <img src="{{ url('img/produk/' . $data->foto_produk) }}" class="d-block w-100" width="200px" height="200px" alt="...">
            </div>
            @endforeach
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
        <div class="card-body pt-0">
          <div class="row">
            <div class="col">
              <div class="card-profile-stats d-flex justify-content-center">
                <div>                 
                  <div class="avatar-group desription">
                    {{-- @foreach ($mahasiswa as $data)
                    <a  class="avatar avatar-sm rounded-circle"  data-toggle="tooltip" data-original-title="{{$data->nama_mahasiswa}}">
                     <img alt="Image placeholder" src="{{ url('img/mahasiswa/' . $data->foto_mahasiswa) }}" height="30px">
                    </a>
                    @endforeach --}}
                  </div> 
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
            <h5 class="h3">
              {{$dataKarya->nama_tim}}<span class="font-weight-light"> , {{date('d F Y',strtotime($dataKarya->created_at))}}</span>
            </h5>
            <div class="h5 mt-4">
              <i class="ni business_briefcase-24 mr-2"></i>{{$dataKarya->nama_produk}}
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
              <a href="/karya-mahasiswa" class="d-flex align-items-center">  
                <i class="fas fa-angle-left"></i>
                <span class="ml-2"><strong>Detail Data</strong></span>                
              </a>
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
                        <input type="text" id="input-first-name" class="form-control" placeholder="First name" value="{{$dataKarya->nama_produk}}" readonly>
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Nama Tim</label>
                        <input type="text" id="input-last-name" class="form-control" placeholder="Last name" value="{{$dataKarya->nama_tim}}" readonly>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="">Deskripsi Produk</label>
                            <textarea name=""  class="form-control"  cols="30" rows="3" readonly>{{$dataKarya->deskripsi_produk}}</textarea>
                    </div>
                </div>
                </div>              
                
            </div>
            <hr class="my-4" />
            <!-- Address -->
            <h6 class="heading-small text-muted mb-4">Informasi Pengembang</h6>
            <div class="pl-lg-4">
              @foreach ($dataKarya->mahasiswa as $data)
              <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="">Nrp Pengembang</label>
                      <input type="" class="form-control" value="{{$data->nrp}}" readonly>
                    </div>
                </div>
                  <div class="col-lg-4">
                      <div class="form-group">
                        <label for="">Nama Pengembang</label>
                        <input type="text" class="form-control" readonly name="nama_mahasiswa" value="{{$data->nama}}">
                      </div>
                  </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for=""> Kelas Pengembang</label>
                        <input type="text" class="form-control" readonly name="nama_mahasiswa" value="{{$data->kelas}}">
                      </div>
                  </div>
                </div>
                @endforeach
              </div>
           
          </form>
        </div>
      </div>
    </div>
  </div>  
  </div>
</div>  
        
@endsection