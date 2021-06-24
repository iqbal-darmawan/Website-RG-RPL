@extends('Admin/components/v_wrapper')
@section('title','Industri')
@section('content')

@include('Admin.components.sweetalert')
  <div class="col-lg-6 col-5 text-right">
      <button class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#addModal" >Add</button>
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
              <h3 class="mb-0">@yield('title')</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                  <th scope="col" class="sort" data-sort="completion">No</th>
                    <th scope="col" class="sort" data-sort="name">Nama Industri</th>
                    <th scope="col" class="sort" data-sort="budget">Deskripsi Industri</th>
                    <th scope="col" class="sort" data-sort="budget">Foto Industri</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
               
                  @php
                      $no=1;
                  @endphp
                   @foreach ($industri as $data)
                   <tr>
                       <td>{{$no}}</td>
                       <td>{{$data->nama_industri}}</td>
                       <td>{{$data->deskripsi_industri}}</td>
                       <td>
                        <img class="avatar avatar-sm rounded-circle" src="{{ url('img/Industri/' . $data->foto_industri) }}" alt="">
                      </td>
                       <td>
                         <div>
                          <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal{{$data->id}}"><i class="fas fa-edit"></i></button>
                          <a href="industri/destroy/{{$data->id}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                         </div>
                       </td>
                      </tr>
                       @php
                           $no++
                       @endphp
                   @endforeach
                 
                </tbody>
              </table>
            </div>
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
    
  {{-- modal add --}}
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/industri/store" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label >Nama Industri</label>
            <input class="form-control" type="text" name="nama_industri" >
          </div>
          <div class="form-group">
            <label >Logo Industri</label>
            <input class="form-control" type="file" name="foto_industri" >
          </div>
          <div class="form-group">
            <label >Deskripsi Industri</label>
            <textarea name="deskripsi_industri" class="form-control" cols="30" rows="3"></textarea>
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
  {{-- close modal add --}}
  {{-- modal edit --}}
  @foreach ($industri as $data)
  <div class="modal fade" id="editModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit  Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="industri/update/{{$data->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label >Nama Industri</label>
              <input class="form-control" type="text" value="{{$data->nama_industri}}" name="nama_industri">
            </div>
            <div class="form-group">
              <img class="avatar rounded-circle" src="{{ url('img/Industri/' . $data->foto_industri) }}" alt="">
            </div>
            <div class="form-group">
              <label >Logo Industri</label>
              <input class="form-control" type="file"  name="foto_industri">
            </div>
            <div class="form-group">
              <label>Deskripsi Industri</label>
              <textarea name="deskripsi_industri" value="{{$data->deskripsi_industri}}" class="form-control" cols="30" rows="3"></textarea>
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
  @endforeach
  {{-- close modal edit --}}
  {{-- modal delete --}}
  @foreach ($industri as $data)
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
              <a href="/industri/destroy/{{$data->id}}"  class="btn btn-white">Ok</button>
                <a class="text-white ml-auto" data-dismiss="modal">Close</button>
            </div>
            
        </div>
    </div>
    @endforeach
  {{-- close modal delete --}}
@endsection