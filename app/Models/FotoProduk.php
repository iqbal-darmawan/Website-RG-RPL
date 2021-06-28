<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class FotoProduk extends Model
{
    use HasFactory;
    public $table = "foto_produk";
    protected $fillable = [
        'produk_id',
        'foto_produk'
    ];
    public function getAllData()
    {
        $data = DB::table('foto_produk')->get();
        return $data;
    }

    public function getSinglePhoto($id)
    {
        $data = DB::table($this->table)->where('produk_id', '=', $id)->first();
        return $data;
    }

    public function detailData($id)
    {
        $data = DB::table('foto_produk')->where('produk_id',$id)->get();
        return $data;
    }
    public function deleteData($id)
    {
        DB::table('foto_produk')
        ->where('produk_id',$id)
        ->delete();
    }
    
    public function deleteFotoById($id)
    {
        DB::table('foto_produk')
        ->where('id',$id)
        ->delete();
    }
    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
