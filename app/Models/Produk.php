<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produk extends Model
{
    public $table = "produk";
    protected $guard=[];
    
    use HasFactory;

    public function getAllData()
    {
        $data = DB::table('produk')->paginate(10);
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
    
    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'produk_id');
    }
}
