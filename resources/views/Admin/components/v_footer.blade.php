  <script src="{{asset('template/')}}/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="{{asset('template/')}}/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('template/')}}/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="{{asset('template/')}}/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="{{asset('template/')}}/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  
  <!-- Argon JS -->
  <script src="{{asset('template/')}}/assets/js/argon.js?v=1.2.0"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>
<script type="text/javascript">

      //prestasi
      $('.addPrestasi').on('click',function(){
      addPrestasi();
     });
    function addPrestasi(){
      var addPrestasi ='<div class="form-group"><label class="form-control-label"><i class="ni ni-hat-3"></i> Prestasi</label><div class="form-group" style="float: right"><a class="  btn btn-danger btn-sm" style="color: white">Hapus data</a></div></div><div class="form-group"><label class="form-control-label">Nama Prestasi</label><input type="text" class="form-control" name="nama_prestasi[]" ></div><div class="form-group"><label class="form-control-label">Deskripsi Prestasi</label><textarea rows="4" class="form-control" name="deskripsi_prestasi[]" ></textarea></div>';
      $('.prestasi').append(addPrestasi);
    }
    
    //penelitian
    $('.addPenelitian').on('click',function(){
      addPenelitian();
    });
    function addPenelitian(){
      var addPenelitian ='<div><div class="form-group"><label class="form-control-label"><i class="ni ni-hat-3"></i> Penelitian</label><div class="form-group" style="float: right"><a class="  btn btn-danger btn-sm" style="color: white">Hapus data</a></div></div><div class="form-group"><label class="form-control-label">Nama Penelitian</label><input type="text" class="form-control" name="nama_penelitian[]" ></div><div class="form-group"><label class="form-control-label">Deskripsi Penelitian</label><textarea rows="4" class="form-control" name="deskripsi_penelitian[]" ></textarea></div> </div>';
      $('.penelitian').append(addPenelitian);
    }
    //pengabdian
    $('.addPengabdian').on('click',function(){
      addPengabdian();
    }); 
    function addPengabdian(){
      var addPengabdian ='<div class="form-group"><label class="form-control-label"><i class="ni ni-hat-3"></i> Pengabdian</label><div class="form-group" style="float: right"><a class="  btn btn-danger btn-sm" style="color: white">Hapus data</a></div></div><div class="form-group"><label class="form-control-label">Nama Pengabdian</label><input type="text" class="form-control" name="nama_pengabdian[]" ></div><div class="form-group"><label class="form-control-label">Deskripsi Penelitian</label><textarea rows="4" class="form-control" name="deskripsi_pengabdian[]" ></textarea></div>';
      $('.pengabdian').append(addPengabdian);
    }
    //Foto Produk
    $('.addFoto').on('click',function(){
      addFoto();
    });
    function addFoto(){
      var addFoto ='<div class="form-group"><label class="form-control-label"><i class="ni ni-hat-3"></i> Foto Produk</label><div class="form-group" style="float: right"><a class="btn btn-danger btn-sm" style="color: white">Hapus data</a></div><div class="form-group"><input type="file" class="form-control" name="foto_produk[]"></div></div>';
      $('.fotoProduk').append(addFoto);
    };

    // pengembang
    $('.addTeam').on('click',function(){
      addTeam();
    });
    function addTeam(){
      var addTeam ='<div class="form-group"><label class="form-control-label"><i class="ni ni-hat-3"></i> Pengembang</label><div class="form-group" style="float: right"><a class=" btn btn-danger btn-sm" style="color: white">Hapus data</a></div></div><div class="row"><div class="col-md-4"><div class="form-group"><label >Nama</label><input name="nama_mahasiswa[]" type="text" class="form-control"></div></div><div class="col-md-4"><div class="form-group"><label >Kelas</label><input name="kelas[]" type="text" class="form-control"></div></div><div class="col-md-4"><div class="form-group"><label >Foto </label><input type="file" name="foto_mahasiswa[]"  class="form-control"></div></div></div>';
      $('.member').append(addTeam);
    };
    $('.remove').live('click',function(){
      $(this).parent().parent().parent().remove();
    });
  </script>