@extends('Admin/components/v_wrapper')
@section('title','User')
@section('content')
<div class="col-lg-6 col-5 text-right">
      <a href="/industri/add" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#addModal">Add</a>
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
              <h3 class="mb-0">Table User</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="completion">No</th>
                    <th scope="col" class="sort" data-sort="name">Username</th>
                    <th scope="col" class="sort" data-sort="budget">Email</th>
                    <th scope="col" class="sort" data-sort="status">Password</th>
                    <th scope="col" class="sort" data-sort="status">Tanggal Bergabung</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
                    <td>1</td>
                    <th scope="row">
                       <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="{{ asset('template') }}/assets/img/theme/bootstrap.jpg">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Lula Rania Salsabilla</span>
                        </div>
                      </div> 
                    </th>
                    <td class="budget">
                      $2500 USD 
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">pending</span>
                      </span> 
                    </td>
                    <td>2021-05-24</td>
                    <td>
                      <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i></button>
                    </td>
                   
                  </tr>
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
        <form action="" method="POST">
          @csrf
          <div class="form-group">
            <label >Username</label>
            <input class="form-control" type="text" name="" id="">
          </div>
          <div class="form-group">
            <label >Email</label>
            <input class="form-control" type="email" name="" id="">
          </div>
          <div class="form-group">
            <label >Password</label>
            <input class="form-control" type="text" name="" id="">
          </div>
          <div class="form-group">
            <label >Created at</label>
            <input type="date"  class="form-control">
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  {{-- close modal add --}}
  {{-- modal edit --}}
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit  Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="POST">
            @csrf
            <div class="form-group">
              <label >Username</label>
              <input class="form-control" type="text" name="" id="">
            </div>
            <div class="form-group">
              <label >Email</label>
              <input class="form-control" type="email" name="" id="">
            </div>
            <div class="form-group">
              <label >Password</label>
              <input class="form-control" type="text" name="" id="">
            </div>
            <div class="form-group">
              <label >Created at</label>
              <input type="date"  class="form-control">
            </div>
            
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  {{-- close modal edit --}}
  {{-- modal delete --}}
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
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
                <button type="button" class="btn btn-white">Ok, Got it</button>
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
            </div>
            
        </div>
    </div>
  {{-- close modal delete --}}   
@endsection