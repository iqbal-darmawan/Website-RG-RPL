@extends('Admin/components/v_wrapper')
@section('title','Tawaran Judul PA')
@section('content')
  <div class="col-lg-6 col-5 text-right">
      <a href="/judulpa/add" class="btn btn-sm btn-neutral">Add</a>
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
                    <th scope="col" class="sort" data-sort="budget">Dosen yang Mengajukan</th>
                    <th scope="col" class="sort" data-sort="budget">Dosen Pembimbing</th>
                    <th scope="col" class="sort" data-sort="status">Tahun Judul</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                <tr>
                    <td>1</td>
                    <th scope="row">
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Aplikasi www.hehehe</span>
                        </div>
                    </th>
                    <td>
                    <div class="media-body">
                          <span class="name mb-0 text-sm">Lula Rania Salsabilla</span>
                        </div>
                    </td>
                    <td>
                    <div class="media-body">
                          <span class="name mb-0 text-sm">Lula Rania Salsabilla</span>
                        </div>
                    </td>
                    <td>
                    <div class="media-body">
                          <span class="name mb-0 text-sm">2020</span>
                        </div>
                    </td>
                    <td>
                      <a href="/judulpa/detail" data-toggle="tooltip" data-placement="top" title="Detail" class="btn btn-primary btn-sm"><i class="fas fa-book"></i></a>
                      <a href="/judulpa/edit" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                      <a href="/judulpa/destroy" data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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