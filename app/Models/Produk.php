<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produk extends Model
{
    public $table = "Produk";
    use HasFactory;

    public function getAllData()
    {
       
        $data = DB::table('produk')->get();
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
}
