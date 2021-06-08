<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->home = new Home();
    }
    public function index()
    {
        $data=[
            'dosen' => $this->home->totalDosen(),
            'produk' => $this->home->totalProduk(),
            'judulPa' => $this->home->totalJudulPa(),
            'industri' => $this->home->totalIndustri(),
        ];
        //dd($data);
        return view('Admin/v_home',$data);
    }
}
