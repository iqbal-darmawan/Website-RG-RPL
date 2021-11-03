@extends('Admin/components/v_wrapper')
@section('title','Karya Mahasiswa')
@section('content')
<div class="col-lg-6 col-5 text-right">
      <a href="/mahasiswa/create" class="btn btn-sm btn-neutral">Add</a>
      <a href="#" class="btn btn-sm btn-neutral">Filters</a>
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
              <h3 class="mb-0">Daftar Karya Mahasiswa</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                  <th scope="col" class="sort" data-sort="completion">No</th>
                    <th scope="col" class="sort" data-sort="name">Judul Karya</th>
                    <th scope="col" class="sort" data-sort="status">Nama Tim</th>
                    <th scope="col" class="sort" data-sort="status">Tahun Produksi</th>
                    
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                  
                  @php
                      $no=1;
                  @endphp
                  @foreach ($dataKarya as $data)
                  <tr>
                    <td>{{$no}}</td>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm">{{$data->nama_produk}}</span>
                        </div>
                      </div> 
                    </th>
                    <td>{{$data->nama_tim}}</td>
                    <td>26 mei 2021</td>
                    <td>
                      <a href="/mahasiswa/show/{{$data->id}}" data-toggle="tooltip" data-placement="top" title="Detail" class="btn btn-primary btn-sm"><i class="fas fa-book"></i></a>
                      <a href="/mahasiswa/edit/{{$data->id}}" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                      <a href="/mahasiswa/destroy/{{$data->id}}" data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  @php
                      $no++;
                  @endphp
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                {{$dataKarya->links()}}
              </nav>
            </div>
          </div>
        </div>
      </div>
        
@endsection

