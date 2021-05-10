<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JudulPA extends Model
{
    use HasFactory;
    public function getAllData()
    {
        $data = DB::table('judul_pa')->get();
        return $data;
    }
    public function addData($data)
    {
        DB::table('judul_pa')->insert($data);
    }
}
