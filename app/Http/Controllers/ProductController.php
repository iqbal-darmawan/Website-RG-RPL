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
}
