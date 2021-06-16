@extends('Admin/components/v_wrapper')
@section('title','Tawaran Judul PA')
@section('content')

@include('Admin.components.toast')
  <div class="col-lg-6 col-5 text-right">
      <a href="/judulpa/create" class="btn btn-sm btn-neutral">Add</a>
      <a href="#" class="btn btn-sm btn-neutral">Filters</a>
    </div>
  </div>
</div>
</div>
</div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Daftar Tawaran Judul PA</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                  <th scope="col" class="sort" data-sort="completion">Nomor</th>
                    <th scope="col" class="sort" data-sort="name">Judul Diajukan</th>
                    <th scope="col" class="sort" data-sort="budget">Dosen Pembimbing</th>
                    <th scope="col" class="sort" data-sort="status">Tahun Judul</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                  @php
                      $no=1;
                  @endphp
                  @foreach ($judulpa as $data)
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$data->nama_judul}}</td>
                    <td>{{$data->nama_pembimbing}}</td>
                    <td>{{$data->tahun_penawaran}}</td>
                    <td>
                      <a href="/judulpa/show/{{$data->id}}" data-toggle="tooltip" data-placement="top" title="Detail" class="btn btn-primary btn-sm"><i class="fas fa-book"></i></a>
                      <a href="/judulpa/edit/{{$data->id}}" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                      <button  class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{$data->id}}"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  @php
                      $no++
                  @endphp
                    @endforeach
                </tbody>
              </table>
            </div>

             {{-- modal delete --}}
 
            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>

      @foreach ($judulpa as $data)
      <div class="modal fade" id="deleteModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
            <div class="modal-content bg-gradient-danger">
              
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <div class="py-3 text-center">
                        <i class="ni ni-bell-55 ni-3x"></i>
                        <h4 class="heading mt-4">You should read this!</h4>
                        <p>Are you sure for delete this item ?</p>
                    </div>
                    
                </div>
                
                <div class="modal-footer">
                  <a href="/judulpa/destroy/{{$data->id}}"  class="btn btn-white">Ok</button>
                  <a class="text-white ml-auto" data-dismiss="modal">Close</button>
                </div>
                
            </div>
        </div>
        @endforeach
      {{-- close modal delete --}}
    
        
@endsection