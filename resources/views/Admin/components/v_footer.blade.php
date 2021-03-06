
  <!-- Argon JS -->
  <script src="{{asset('template/')}}/assets/js/argon.js?v=1.2.0"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script type="text/javascript">

      // materi
      $('.addFile').on('click',function(){
      addFile();
    });
    function addFile(){
      var addFile ='<div class="row"><div class="col-lg-12"><div class="form-group"><label class="form-control-label" for="input-username">File Materi</label><input type="file" name="file_materi[]" id="input-username" class=" form-control"></div></div></div>';
      $('.materi').append(addFile);
    };
   
    
      //prestasi
    $('.addPrestasi').on('click',function(){
      addPrestasi();
     });

    function addPrestasi(){
      var addPrestasi =`
                        <div class="prestasiParent">
                        <div class="form-group">
                          <label class="form-control-label"><i class="ni ni-hat-3">
                          </i> Prestasi</label><div class="form-group" style="float: right">
                            <a class="hapusPrestasi  btn btn-danger btn-sm" style="color: white">Hapus data</a>
                          </div>
                        </div>
                          <div class="form-group"><label class="form-control-label">Nama Prestasi</label><input type="text" class="form-control" name="nama_prestasi[]" ></div>
                              <div class="form-group"><label class="form-control-label">Deskripsi Prestasi</label><textarea rows="4" class="form-control" name="deskripsi_prestasi[]" ></textarea></div>
                        </div>
                      `;
      $('.prestasi').append(addPrestasi);
    }

    $(document).on("click", "a.hapusPrestasi", function () {
            $(this).parent().parent().parent().remove();
    });



    //penelitian
    $('.addPenelitian').on('click',function(){
      addPenelitian();
    });
    function addPenelitian(){
      var addPenelitian =`
                        <div class="parentPenelitian">
                          <div class="form-group">
                            <label class="form-control-label"><i class="ni ni-hat-3"></i> Penelitian</label>
                              <div class="form-group" style="float: right">
                                <a class=" hapusPenelitian btn btn-danger btn-sm" style="color: white">Hapus data</a>
                              </div>
                          </div>
                          <div class="form-group">
                                <label class="form-control-label">Nama Penelitian</label>
                                <input type="text" class="form-control" name="nama_penelitian[]" >
                                </div>
                          <div class="form-group">
                          <label class="form-control-label">Deskripsi Penelitian</label>
                          <textarea rows="4" class="form-control" name="deskripsi_penelitian[]" >
                          </textarea></div> 
                        </div>`;                        
      $('.penelitian').append(addPenelitian);
    }

    $(document).on("click", "a.hapusPenelitian", function () {
            $(this).parent().parent().parent().remove();
    });
    //pengabdian
    $('.addPengabdian').on('click',function(){
      addPengabdian();
    }); 
    function addPengabdian(){
      var addPengabdian =`<div class=""parentPengabdian"><div class="form-group"> <label class="form-control-label"> <i class="ni ni-hat-3"> </i> Pengabdian</label> <div class="form-group" style="float: right"><a class=" hapusPengabdian btn btn-danger btn-sm" style="color: white">Hapus data</a> </div></div><div class="form-group"><label class="form-control-label">Nama Pengabdian</label><input type="text" class="form-control" name="nama_pengabdian[]" ></div><div class="form-group"><label class="form-control-label">Deskripsi Penelitian</label><textarea rows="4" class="form-control" name="deskripsi_pengabdian[]" ></textarea></div></div>`;
      $('.pengabdian').append(addPengabdian);
    }    
    $(document).on("click", "a.hapusPengabdian", function () {
            $(this).parent().parent().parent().remove();
    });

    //Foto Produk
    $('.addFoto').on('click',function(){
      addFoto();
    });
    
    function addFoto(){
      var addFoto ='<div class="fotoProduk"><div class="form-group"><label class="form-control-label"><i class="ni ni-hat-3"></i> Foto Produk</label><div class="form-group" style="float: right"><a class="hapusFoto btn btn-danger btn-sm" style="color: white">Hapus data</a></div><div class="form-group"><input type="file" class="form-control" name="foto_produk[]"></div></div></div>';
      $('.fotoProduk').append(addFoto);
    };

    $(document).on("click", "a.hapusFoto", function () {
            $(this).parent().parent().parent().remove();
    });

    // pengembang
    $('.addTeam').on('click',function(){
      addTeam();
    });
    function addTeam(){
      var addTeam ='<div class="dataTeam"><div class="form-group"><label class="form-control-label"><i class="ni ni-hat-3"></i> Pengembang</label><div class="form-group" style="float: right"><a class="hapusTeam btn btn-danger btn-sm" style="color: white">Hapus data</a></div></div><div class="row"><div class="col-md-4"><div class="form-group"><label >Nama</label><input name="nama_mahasiswa[]" type="text" class="form-control"></div></div><div class="col-md-4"><div class="form-group"><label >Kelas</label><input name="kelas[]" type="text" class="form-control"></div></div><div class="col-md-4"><div class="form-group"><label >Nrp Mahasiswa</label><input type="text" name="nrp_mahasiswa[]"  class="form-control"></div></div></div>';
      $('.member').append(addTeam);
    };
    $(document).on("click", "a.hapusTeam", function () {
            $(this).parent().parent().parent().remove();
    });
  </script>
</body>
</html>