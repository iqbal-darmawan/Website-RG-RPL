@extends('Admin/components/v_wrapper')
@section('title','Profile Dosen')
@section('content')
     <div class="col-lg-6 col-5 text-right">
      <a href="/dosen/create" class="btn btn-sm btn-neutral">Tambah Dosen</a>
    </div>
  </div>
</div>
</div>
</div>
    <!-- Page content -->
    @include('Admin.components.sweetalert')
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
                {{-- {{dd($dosen)}} --}}
                <tbody>
                  @php
                      $no=1;
                  @endphp
                  @foreach ($dosen as $data)
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$data->nip}}</td>
                    <td>{{$data->nama_lengkap}}</td>
                    <td>
                      <img class="avatar avatar-sm rounded-circle" src="{{ asset('img/dosen/profil/' . $data->foto_dosen) }}" alt="">
                    </td>
                    <td>
                      <a href="/dosen/show/{{$data->id}}" data-toggle="tooltip" data-placement="top" title="Detail" class="btn btn-primary btn-sm"><i class="fas fa-book"></i></a>
                      <a href="/dosen/edit/{{$data->id}}" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                      <a href="/dosen/destroy/{{$data->id}}" data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
                {{$dosen->links()}}
              </nav>
            </div>
          </div>
        </div>
      </div>
        
@endsection