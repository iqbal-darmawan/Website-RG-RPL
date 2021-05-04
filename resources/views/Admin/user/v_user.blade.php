@extends('Admin/components/v_wrapper')
@section('title','User')
@section('content')
<div class="col-lg-6 col-5 text-right">
      <a href="#" class="btn btn-sm btn-neutral">New</a>
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
                    <th scope="col" class="sort" data-sort="completion">Nomor</th>
                    <th scope="col" class="sort" data-sort="name">Nama User</th>
                    <th scope="col" class="sort" data-sort="budget">Status</th>
                    <th scope="col" class="sort" data-sort="status">Tanggal Login</th>
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
                    <td>
                      <a href="/user/detail" data-toggle="tooltip" data-placement="top" title="Detail" class="btn btn-primary btn-sm"><i class="fas fa-book"></i></a>
                      <a href="/user/edit" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                      <a href="/user/destroy" data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
        
@endsection