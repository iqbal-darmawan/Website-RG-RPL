<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Prestasi extends Model
{
    protected $table = 'prestasi';
    //use HasFactory;
    protected $fillable = [
        'nama_prestasi',
        'dekripsi_prestasi'
    ];
    public function detailData($id)
    {
        $data = DB::table('prestasi')->where('dosen_id',$id)->get();
        return $data;
    }
    public function deleteData($id)
    {
        DB::table('prestasi')
        ->where('dosen_id',$id)
        ->delete();
    }
}
