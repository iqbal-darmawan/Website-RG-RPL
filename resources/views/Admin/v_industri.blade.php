@extends('Admin/components/v_wrapper')
@section('title','Industri')
@section('content')
  <div class="col-lg-6 col-5 text-right">
      <a href="/industri/add" class="btn btn-sm btn-neutral">Add</a>
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
                <tr>
                    <td>1</td>
                    <th scope="row">
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Maulidan Games</span>
                        </div>
                    </th>
                    <td>
                        <div class="media-body">
                            <span class="name mb-0 text-sm">lorem ipsum</span>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                            <img alt="Image placeholder" src="{{ asset('template') }}/assets/img/theme/team-1.jpg">
                        </a>
                    <td>
                        <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
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