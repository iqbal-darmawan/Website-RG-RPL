<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Home extends Model
{
    use HasFactory;
    public function totalProduk()
    { 
        $data = DB::table('produk')->count();
        return $data;
    }
    public function totalDosen()
    {   
        $data = DB::table('dosen_rpl')->count();
        return $data;
    }
    public function totalJudulPa()
    {   
        $data = DB::table('judul_pa')->count();
        return $data;
    }
    public function totalIndustri()
    {   
        $data = DB::table('industri')->count();
        return $data;
    }
}
