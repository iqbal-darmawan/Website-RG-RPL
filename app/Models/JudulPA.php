<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JudulPA extends Model
{
    use HasFactory;
    protected $table = 'judul_pa';

    public function getAllData()
    {
        $data = DB::table('judul_pa')->paginate(5);
        return $data;
    }
    public function addData($data)
    {
        DB::table('judul_pa')->insert($data);
    }
    public function detailData($id)
    {
      $data = DB::table('judul_pa')->where('id',$id)->first(['nama_judul', 'deskripsi_judul', 'kualifikasi_judul', 'nama_pembimbing']);
  
      return $data;
    }
    public function editData($id,$data)
    {
        DB::table('judul_pa')
        ->where('id',$id)
        ->update($data);
    }
    public function deleteData($id)
    {
        DB::table('judul_pa')
        ->where('id',$id)
        ->delete();
    }
    public function industri()
    {
        return $this->belongsTo(Industri::class);
    }
    public function dosen()
    {
        return $this->belongsTo(DosenRpl::class);
    }
}
