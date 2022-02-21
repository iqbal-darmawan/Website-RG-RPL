@extends('Admin/components/v_wrapper')
@section('title','Materi')
@section('content')
  
     <div class="col-lg-6 col-5 text-right">
      <a href="/materi/create" class="btn btn-sm btn-neutral"><i class="fas fa-plus mr-2"></i>Tambah Data</a>
    </div>
  </div>
</div>
</div>
</div>
@include('Admin.components.sweetalert')
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">List Materi</h3>
            </div>
            <section>
              <div class="container">
                <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Rekayasa Perangkat Lunak
                        </button>
                      </h2>
                    </div>
                
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        @php
                            $no=1;
                        @endphp
                        @foreach ($materi_rpl as $item)
                        <div class="media">           
                          <h5 class="mr-2">{{$no}}.</h5>               
                              <div class="media-body">                                
                                <div class="row">
                                  <div class="col-md-6">
                                    <h5 class="mt-0">{{$item->nama}}</h5>
                                    <p>{{$item->deskripsi}}</p>
                                  </div>
                                  <div class="col-md-6">
                                    <a href="/materi/edit/{{$item->id}}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                                    @if ($item->fileMateri)
                                    <a href="files/materi/{{$item->fileMateri->nama_file ?? ''}}" download class="btn btn-info btn-sm"><i class="fas fa-cloud-download-alt"></i></a>                                         
                                    @endif                                   
                                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>                                    
                                  </div>
                               </div>                                
                              </div>                                                                                                                                   
                        </div> 
                        @php
                            $no++;
                        @endphp
                        @endforeach
                                         
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Workshop Rekayasa Perangkat Lunak
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        
                        @php
                            $no=1;
                        @endphp
                        {{-- {{dd($materi_wppl)}} --}}
                        @foreach ($materi_wppl as $item)
                        <div class="media">           
                          <h5 class="mr-2">{{$no}}.</h5>               
                              <div class="media-body">                                
                                <div class="row">
                                  <div class="col-md-6">
                                    <h5 class="mt-0">{{$item->nama}}</h5>
                                    <p>{{$item->deskripsi}}</p>
                                  </div>
                                  <div class="col-md-6">
                                    <a href="/materi/edit/{{$item->id}}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                                    @if ($item->fileMateri)
                                    <a href="files/materi/{{$item->fileMateri->nama_file ?? ''}}" download class="btn btn-info btn-sm "><i class="fas fa-cloud-download-alt"></i></a>                                         
                                    @endif                                   
                                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>                                    
                                  </div>
                               </div>                                
                              </div>                                                                                                                                   
                        </div> 
                        @php
                            $no++;
                        @endphp
                        @endforeach
                      </div>
                    </div>
                  </div>                 
                </div>
              </div>
               
           </section>
          </div>
        </div>
      </div>
        
      <script type="text/javascript">
        $('#delete-confirm').on('click', function (event) {
          event.preventDefault();
          const url = $(this).attr('href');
          swal({
              title: 'Are you sure?',
              text: 'This record and it`s details will be permanantly deleted!',
              icon: 'warning',
              buttons: ["Cancel", "Yes!"],
          }).then(function(value) {
              if (value) {
                  window.location.href = url;
              }
          });
});
    </script>
@endsection
