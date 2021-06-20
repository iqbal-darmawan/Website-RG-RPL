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
        $products = Produk::has('fotoproduk')
            ->with('fotoproduk')
            ->paginate(9);
        $data = [
            'karya' => $products,
        ];
        return view('karya.karya-view', $data);
    }

    public function show($id)
    {
        $karya = $this->produk->detailData($id);
        $foto = Produk::find($id)->fotoproduk;
        $data = [
            'karya' => $karya,
            'foto' => $foto,
        ];

        return view('karya.details.karya-details-view', $data);
    }
}
