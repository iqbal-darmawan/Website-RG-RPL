<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produk extends Model
{
    public $table = "produk";
    use HasFactory;

    public function getAllData()
    {
        $data = DB::table('produk')
            ->select('produk.*', 'foto_produk.foto_produk')
            ->join('foto_produk', 'foto_produk.produk_id', '=', 'produk.id')
            ->paginate(9);
        return $data;  
    }
    public function detailData($id)
    {
        $data = DB::table('produk')->where('id',$id)->first();
        return $data;
    }
    public function deleteData($id)
    {
        DB::table('produk')
        ->where('id',$id)
        ->delete();
    }

    public function fotoproduk()
    {
        return $this->hasMany(FotoProduk::class);
    }
}
