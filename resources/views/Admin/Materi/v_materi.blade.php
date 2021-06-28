@extends('Admin/components/v_wrapper')
@section('title','Materi')
@section('content')
  
     <div class="col-lg-6 col-5 text-right">
      <a href="/materi/create" class="btn btn-sm btn-neutral">Tambah Data</a>
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
              <h3 class="mb-0">List Materi</h3>
            </div>
            <section>
              <div class="container">
                <p>
                  <a class="btn btn-primary" data-toggle="collapse" href="#rpl" role="button" aria-expanded="true" aria-controls="rpl">
                    RPL
                  </a>
                  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#wppl" aria-expanded="false" aria-controls="wppl">
                    WPPL
                  </button>
                </p>       
               
                <div class="collapse" id="rpl">
                  <div class="card card-body">
                    <label for="">Materi RPL</label>
                    <hr>
                  
                   
                  </div>
                </div>
                <div class="collapse" id="wppl">
                  <div class="card card-body">
                    <label for="">Materi WPPL</label>
                  </div>
                </div>
              </div>
           </section>
          </div>
        </div>
      </div>
        
      <script type="text/javascript">
        $('#delete-confirm').on('click', function (event) {
          event.preventDefault();
          const url = $(this).attr('href');
          swal({
              title: 'Are you sure?',
              text: 'This record and it`s details will be permanantly deleted!',
              icon: 'warning',
              buttons: ["Cancel", "Yes!"],
          }).then(function(value) {
              if (value) {
                  window.location.href = url;
              }
          });
});
    </script>
@endsection
