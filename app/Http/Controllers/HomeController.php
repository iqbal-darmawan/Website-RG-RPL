<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data=[
            'dosen' => $this->home->totalDosen(),
            'produk' => $this->home->totalProduk(),
            'judulPa' => $this->home->totalJudulPa(),
            'industri' => $this->home->totalIndustri(),
        ];
        return view('Admin/v_home',$data);
    }
}
