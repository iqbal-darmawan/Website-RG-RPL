<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Penelitian extends Model
{
    protected $table = 'penelitian';
    use HasFactory;

    protected $fillable = [
        'nama_penelitian',
        'dekripsi_penelitian'
    ];
    public function detailData($id)
    {
        $data = DB::table('penelitian')->where('dosen_id',$id)->get();
        return $data;
    }
    public function deleteData($id)
    {
        DB::table('penelitian')
        ->where('dosen_id',$id)
        ->delete();
    }
}
