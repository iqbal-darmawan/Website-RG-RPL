<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\FotoProduk;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->produk = new Produk();
    }
    public function index()
    {
        $data = [
            'karya' => $this->produk->getAllData(),
            // 'foto' => $this->foto
        ];
        return view('karya.karya-view', $data);
    }
}
