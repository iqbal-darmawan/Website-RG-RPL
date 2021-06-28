<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Pengabdian extends Model
{
    protected $table = 'pengabdian';
    use HasFactory;
    protected $fillable = [
        'nama_pengabdian',
        'dekripsi_pengabdian'
    ];
    public function detailData($id)
    {
        $data = DB::table('pengabdian')->where('dosen_id',$id)->get();
        return $data;
    }
    public function deleteData($id)
    {
        DB::table('pengabdian')
        ->where('dosen_id',$id)
        ->delete();
    }
}
