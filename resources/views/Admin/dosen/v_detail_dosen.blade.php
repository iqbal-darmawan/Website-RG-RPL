@extends('Admin/components/v_wrapperDetail')
@section('title','Detail Dosen')
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
    <div class="col-xl-4 order-xl-2">
      <div class="card card-profile">
        <img src="{{ asset('template') }}/assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
        <div class="row justify-content-center">
          <div class="col-lg-3 order-lg-2">
            <div class="card-profile-image">
              <a href="#">
                <img src="{{asset('img/dosen/profil/'.$dosen->foto_dosen)}}" class="rounded-circle">
              </a>
            </div>
          </div>
        </div>
        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
          <div class="d-flex justify-content-between">           
          </div>
        </div>
        <div class="card-body pt-0 mt-3">
          <div class="row">
            <div class="col">
              <div class="card-profile-stats d-flex justify-content-center">
                <div>
                  <span class="heading">{{count($penelitian)}}</span>
                  <span class="description">Penelitian</span>
                </div>
                <div>
                  <span class="heading">{{count($prestasi)}}</span>
                  <span class="description">Prestasi</span>
                </div>
                <div>
                  <span class="heading">{{count($pengabdian)}}</span>
                  <span class="description">Pengabdian</span>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
            <h5 class="h3">
              {{$dosen->nama_lengkap}}<span class="font-weight-light text-default">, <br> <strong>{{date('d F Y', strtotime($dosen->thn_bergabung))}}</strong> </span>
            </h5>
            <div class="h5 font-weight-300">
              <i class="ni location_pin mr-2"></i>{{$dosen->alamat}}
            </div>
            <div class="h5 mt-4">
              <i class="ni business_briefcase-24 mr-2"></i>{{$dosen->nip}}
            </div>
            <div>
              <i class="ni education_hat mr-2"></i>Politeknik Elektronika Negeri Surabaya
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
              <a href="/dosen" class="d-flex align-items-center">  
                <i class="fas fa-angle-left"></i>
                <span class="ml-2"><strong>Edit Data</strong></span>                
              </a>
            </div>
            <div class="col-4 text-right">
              <a href="{{route('dosen-edit', $dosen->id)}}" class="btn btn-sm btn-primary">Edit</a>
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
               
              </div>
            </div>
          </form>
        </div>
            <div class="card">
              <div class="card-header"><h6 class="heading-small ">Pencapaian Dosen</h6></div>
              <div class="card-body">
                <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Data Prestasi
                        </button>
                      </h2>
                    </div>
                
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        @php
                            $no=1;
                        @endphp
                        @forelse ($prestasi as $item)
                          <div class="media">
                            <h5 class="mr-2">{{$no}}.</h5>
                            <div class="media-body">
                              <h5 class="mt-0"> {{$item->nama_prestasi}}</h5>
                              <p>{{$item->deskripsi_prestasi}}.</p>
                            </div>
                          </div>
                          @php
                              $no++;
                          @endphp
                        @empty
                        <div class="media">
                          <h5 class="mr-2">{{$no}}.</h5>
                          <div class="media-body">
                            <h5 class="mt-0">Data Kosong</h5>
                            
                          </div>
                        </div>
                        @endforelse ()
                       
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Data Penelitian
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        @php
                        $no=1;
                        @endphp
                        @forelse ($penelitian as $item)
                          <div class="media">
                            <h5 class="mr-2">{{$no}}.</h5>
                            <div class="media-body">
                              <h5 class="mt-0"> {{$item->nama_penelitian}}</h5>
                              <p>{{$item->deskripsi_penelitian}}.</p>
                            </div>
                          </div>
                          @php
                              $no++;
                          @endphp
                        @empty
                        <div class="media">
                          <h5 class="mr-2">{{$no}}.</h5>
                          <div class="media-body">
                            <h5 class="mt-0">Data Kosong</h5>
                            
                          </div>
                        </div>
                        @endforelse 
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Pengabdian
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        @php
                        $no=1;
                        @endphp
                        @forelse ($pengabdian as $item)
                          <div class="media">
                            <h5 class="mr-2">{{$no}}.</h5>
                            <div class="media-body">
                              <h5 class="mt-0"> {{$item->nama_pengabdian}}</h5>
                              <p>{{$item->deskripsi_pengabdian}}.</p>
                            </div>
                          </div>
                          @php
                              $no++;
                          @endphp
                        @empty
                        <div class="media">
                          <h5 class="mr-2">{{$no}}.</h5>
                          <div class="media-body">
                            <h5 class="mt-0">Data Kosong</h5>
                            
                          </div>
                        </div>
                        @endforelse 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            
          
      </div>
    </div>
  </div>  
  </div>
</div>  
        
@endsection