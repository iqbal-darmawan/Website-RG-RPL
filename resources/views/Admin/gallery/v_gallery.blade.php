@extends('Admin/components/v_wrapper')
@section('title','Gallery')
@section('content')
  
     <div class="col-lg-6 col-5 text-right">
      <a href="/gallery/create" class="btn btn-sm btn-neutral">Tambah Foto</a>
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
              <h3 class="mb-0">List Gallery</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                  <th scope="col" class="sort" data-sort="completion">No</th>
                    <th scope="col" class="sort" data-sort="name">Nama Kegiatan</th>
                    <th scope="col" class="sort" data-sort="budget">Jumlah Foto</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                      $no=1;
                  @endphp
                  @foreach ($gallery as $data)
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->foto}}</td>
                    <td>
                      <button class="btn btn-danger btn-sm" onclick="deleteConfirmation({{$data->id}})"><i class="fas fa-trash"></i></button>
                      <a href="/gallery/edit/{{$data->id}}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
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
        
      <script type="text/javascript">
        function deleteConfirmation(id) {
            swal({
                title: "Delete?",
                text: "Please ensure and then confirm!",
                icon: "warning",
                
                buttons : ['Cancel','OK'],
                
            }).then(function (e) {
    
                if (e.value === true) {
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    
                    $.ajax({
                        type: 'POST',
                        url: "{{url('/gallery/destroy')}}/" + id,
                        data: {_token: CSRF_TOKEN},
                        dataType: 'JSON',
                        success: function (results) {
    
                            if (results.success === true) {
                                swal("Done!", results.message, "success");
                            } else {
                                swal("Error!", results.message, "error");
                            }
                        }
                    });
    
                } else {
                    e.dismiss;
                }
    
            }, function (dismiss) {
                return false;
            })
        }
    </script>
@endsection
