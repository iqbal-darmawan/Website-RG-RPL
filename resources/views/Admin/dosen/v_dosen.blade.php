@extends('Admin/components/v_wrapper')
@section('title','Dosen')
@section('content')
     <div class="col-lg-6 col-5 text-right">
      <a href="/dosen/add" class="btn btn-sm btn-neutral">Add</a>
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
              <h3 class="mb-0">List Dosen</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                  <th scope="col" class="sort" data-sort="completion">No</th>
                    <th scope="col" class="sort" data-sort="name">NIP</th>
                    <th scope="col" class="sort" data-sort="budget">Nama Dosen</th>
                    <th scope="col" class="sort" data-sort="status">Foto Dosen</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>2103191047</td>
                    <td>Lula Rania Salsabilla</td>
                    <td>
                      <img class="avatar avatar-sm rounded-circle" src="{{ asset('template') }}/assets/img/theme/team-1.jpg" alt="">
                    </td>
                    <td>
                      <a href="/dosen/detail" data-toggle="tooltip" data-placement="top" title="Detail" class="btn btn-primary btn-sm"><i class="fas fa-book"></i></a>
                      <a href="/dosen/edit" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                      <a href="/dosen/destroy" data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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