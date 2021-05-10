<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Industri extends Model
{
    use HasFactory;

    public function getAllData()
    {
        $data = DB::table('industri')->get();
        return $data;
    }
    public function detailData($id)
    {
        $data = DB::table('industri')->where('id',$id)->first();

        return $data;
    }
    public function addData($data)
    {
        DB::table('industri')->insert($data);
    }
    public function editData($id,$data)
    {
        DB::table('industri')
        ->where('id',$id)
        ->update($data);
    }
    public function deleteData($id)
    {
        DB::table('industri')
        ->where('id',$id)
        ->delete();
    }
}
