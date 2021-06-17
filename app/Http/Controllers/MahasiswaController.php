<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\FotoProduk;
use App\Models\Produk;

class MahasiswaController extends Controller
{
    public function __construct()
    {
        $this->mahasiswa= new Mahasiswa();
        $this->produk= new Produk();
        $this->fotoProduk= new FotoProduk();
    }
    public function index()
    {
        $data=[
            'mahasiswa' => $this->mahasiswa->getAlldata(),
            'dataKarya' => $this->produk->getAllData(),
            'fotoKarya' => $this->fotoProduk->getAllData(),
        ];
        
        return view('Admin/mahasiswa/v_mahasiswa',$data);
    }

    public function create()
    {
        return view('Admin/mahasiswa/v_add_mahasiswa');
    }
    public function store(Request $request)
    {
        //input to table produk
        $produk = new Produk;
        $data = $request->all();
        $produk->nama_produk = $data['nama_produk'];
        $produk->nama_tim = $data['nama_tim'];
        $produk->deskripsi_produk = $data['deskripsi_produk'];
        $produk->save();

                //input to table foto_produk
                if($request->hasfile('foto_produk'))
                {
                    foreach($request->file('foto_produk') as $key => $file)
                    {
                            $fname = $file->getClientOriginalName();
                            $file->move(public_path('img/produk') , $fname);
                            $data3 = array(
                                'produk_id' => $produk->id,
                                'foto_produk' => $fname,
                            );
                            fotoProduk::insert($data3);
                        }
                }
                
                //input to table mahasiswa
                if($request->hasfile('foto_mahasiswa'))
                {
                   foreach($request->file('foto_mahasiswa') as $key => $file)
                   {
                        $fname = $file->getClientOriginalName();
                        $file->move(public_path('img/mahasiswa') , $fname);
                        $data2 = array(
                            'id_produk' => $produk->id,
                            'nama_mahasiswa' => $request->nama_mahasiswa[$key],
                            'kelas' => $request->kelas[$key],
                            'foto_mahasiswa' => $fname
                        );
                        mahasiswa::insert($data2);
                    }
                }
        session()->flash('success','data berhasil di tambahkan');
        return redirect()->route('mahasiswa');
    }

    public function show($id)
    {
        if (!$this->mahasiswa->detailData($id)) {
            abort(404);
        }
        $data=[
            'mahasiswa' => $this->mahasiswa->detailData($id),
            'dataKarya' => $this->produk->detailData($id),
            'fotoKarya' => $this->fotoProduk->detailData($id),
        ];
        return view('Admin/mahasiswa/v_detail_mahasiswa',$data);
    }
    public function edit($id)
    {
        if (!$this->mahasiswa->detailData($id)) {
            abort(404);
        }
        $data=[
            'mahasiswa' => $this->mahasiswa->detailData($id),
            'dataKarya' => $this->produk->detailData($id),
            'fotoKarya' => $this->fotoProduk->detailData($id),
        ];
        return view('Admin/mahasiswa/v_edit_mahasiswa',$data);
    }
    public function update (Request $request, $id)
    {
        $produk = new Produk;
        $data = [
            'nama_produk' => $request->nama_produk,
            'nama_tim'  => $request -> nama_tim,
            'deskripsi_produk' => $request -> deskripsi_produk
        ];
        produk::where('id',$id)->update($data);
                //input to table foto_produk
                if($request->hasfile('foto_produk'))
                {
                    $fotoproduk = new FotoProduk;
                    foreach($request->file('foto_produk') as $key => $file)
                    {
                            $fname = $file->getClientOriginalName();
                            $file->move(public_path('img/produk') , $fname);
                            $data3 = array(
                                'foto_produk' => $fname,
                            );
                            fotoProduk::where('produk_id',$id)->update($data3);
                     }
                }
                // //input to table mahasiswa
                if($request->hasfile('foto_mahasiswa'))
                {
                    $mahasiswa = new Mahasiswa;
                   foreach($request->file('foto_mahasiswa') as $key => $file)
                   {
                        $fname = $file->getClientOriginalName();
                        $file->move(public_path('img/mahasiswa') , $fname);
                        $data2 = array(
                            'nama_mahasiswa' => $request->nama_mahasiswa[$key],
                            'kelas' => $request->kelas[$key],
                            'foto_mahasiswa' => $fname
                        );
                        mahasiswa::where('id_produk',$id)->update($data2);
                    }
                }   
        session()->flash('success','data berhasil diubah');
       return redirect()->route('mahasiswa');      
    }
    public function destroy($id)
    {
        $this->produk->deleteData($id);
        $this->mahasiswa->deleteData($id);
        $this->fotoProduk->deleteData($id);
        session()->flash('success','data berhasil dihapus');
        return redirect()->route('mahasiswa');
    }

    public function deleteFotoById($id)
    {
        $this->fotoProduk->deleteFotoById($id);
        return back();
    }
    public function deleteMahasiswaByid($id)
    {
        $this->mahasiswa->deleteMahasiswaById($id);
        return back();
    }
    public function addFotoProduk(Request $request,$id)
    {
        if($request->hasfile('foto_produk'))
        {
            $fotoproduk = new fotoProduk;
            $file = $request->file('foto_produk');
          
                $fname = $file->getClientOriginalName();
                $file->move(public_path('img/produk') , $fname);
                $data = array(
                    'produk_id' => $id,
                    'foto_produk' => $fname
                );
                fotoproduk::insert($data);
            
        }
        return back();
        
    }
    public function addMahasiswaById(Request $request , $id)
    {
        if($request->hasfile('foto_mahasiswa'))
        {
            $mahasiswa = new Mahasiswa;
            $file = $request->file('foto_mahasiswa');
          
                $fname = $file->getClientOriginalName();
                $file->move(public_path('img/mahasiswa') , $fname);
                $data = array(
                    'id_produk' => $id,
                    'nama_mahasiswa' => $request->nama_mahasiswa,
                    'kelas' => $request->kelas,
                    'foto_mahasiswa' => $fname
                );
                mahasiswa::insert($data);
            
        }
        return back();
    }
}
