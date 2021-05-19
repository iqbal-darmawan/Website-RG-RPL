<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\FotoProduk;
use App\Models\Produk;

class MahasiswaController extends Controller
{
   
    public function __construct( )
    {
        $this->mahasiswa= new Mahasiswa();

    }
    public function index()
    {
        $data=[
            'mahasiswa' => $this->mahasiswa->getAlldata()
        ];
        return view('Admin/mahasiswa/v_mahasiswa',$data);
    }

    public function create()
    {
        return view('Admin/mahasiswa/v_add_mahasiswa');
    }
    public function store(Request $request)
    {
        $produk = new Produk;
        $data = $request->all();
        $produk->nama_produk = $data['nama_produk'];
        $produk->nama_tim = $data['nama_tim'];
        $produk->deskripsi_produk = $data['deskripsi_produk'];
        $produk->save();
                if($request->hasfile('foto_produk'))
                {
                foreach($request->file('foto_produk') as $key => $file)
                {
                        $fname = $file->getClientOriginalName();
                        $file->move(public_path('Img/produk') , $fname);
                        $data3 = array(
                            'produk_id' => $produk->id,
                            'foto_produk' => $fname,
                        );
                        fotoProduk::insert($data3);
                    }
                
                }
                if($request->hasfile('foto_mahasiswa'))
                {
                   foreach($request->file('foto_mahasiswa') as $key => $file)
                   {
                        $fname = $file->getClientOriginalName();
                        $file->move(public_path('Img/mahasiswa') , $fname);
                        $data2 = array(
                            'id_produk' => $produk->id,
                            'nama_mahasiswa' => $request->nama_mahasiswa[$key],
                            'kelas' => $request->kelas[$key],
                            'foto_mahasiswa' => $fname
                        );
                        mahasiswa::insert($data2);
                    }
                   
                }
            
        return redirect()->route('mahasiswa')->with('pesan','data berhasil di tambahkan');
    }

    public function show($id)
    {
        if (!$this->mahasiswa->detailData($id)) {
            abort(404);
        }
        $data=[
            'mahasiswa' => $this->mahasiswa->detailData($id)
        ];
        return view('Admin/mahasiswa/v_detail_mahasiswa',$data);
    }
    public function edit($id)
    {
        if (!$this->mahasiswa->detailData($id)) {
            abort(404);
        }
        $data=[
            'mahasiswa' => $this->mahasiswa->detailData($id)
        ];
        return view('Admin/mahasiswa/v_edit_mahasiswa',$data);
    }
    public function update(Request $request, $id)
    {
        
    }
    public function destroy($id)
    {
        
    }
}
