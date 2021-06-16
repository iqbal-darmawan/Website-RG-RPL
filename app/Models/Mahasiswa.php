<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mahasiswa extends Model
{
    public $timestamps = false;
    public $table = "Mahasiswa";
    use HasFactory;
    
    protected $fillable=[
        'id_produk','nama_mahasiswa','kelas','foto_mahasiswa'
    ];
    public function getAllData()
    {
        $data = DB::table('mahasiswa')->get();
        return $data;
    }
    public function detailData($id)
    {
        $data = DB::table('mahasiswa')->where('id_produk',$id)->get();
        return $data;
    }
    public function deleteData($id)
    {
        DB::table('mahasiswa')
        ->where('id_produk',$id)
        ->delete();
    }
    
    public function deleteMahasiswaById($id)
    {
        DB::table('mahasiswa')
        ->where('id',$id)
        ->delete(); 
    }

}
