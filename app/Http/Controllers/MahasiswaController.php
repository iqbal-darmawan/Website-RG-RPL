<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FotoProduk;
use App\Models\Mahasiswa;
use App\Models\Produk;

class MahasiswaController extends Controller
{
    public function __construct()
    {
        $this->produk= new Produk();
        $this->fotoProduk= new FotoProduk();
    }

    public function index()
    {
        $data=[
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
                FotoProduk::insert($data3);
            }
        }
        $count=0;

        foreach ($request->nama_mahasiswa as $key => $value) {
            $dataMahasiswa=[
                'produk_id' => $produk->id,
                'nama' => $value,
                'kelas' => $data['kelas'][$count],
                'nrp' => $data['nrp_mahasiswa'][$count],
            ];
            Mahasiswa::create($dataMahasiswa);
            $count++;
        }

        session()->flash('success','data berhasil di tambahkan');
        return redirect()->route('mahasiswa');
    }

    public function show($id)
    {
        $data=[
            'dataKarya' => Produk::where('id',$id)->with('mahasiswa')->first(),
            'fotoKarya' => $this->fotoProduk->detailData($id),
        ];
        return view('Admin/mahasiswa/v_detail_mahasiswa',$data);
    }

    public function edit($id)
    {
        $data=[
            'dataKarya' => Produk::where('id',$id)->with('mahasiswa')->first(),
            'fotoKarya' => $this->fotoProduk->detailData($id),
        ];

        return view('Admin/mahasiswa/v_edit_mahasiswa',$data);
    }

    public function update (Request $request, $id)
    {
        $data = $request->all();        
        
        $produk=[
            'nama_produk' => $data['nama_produk'],
            'nama_tim' => $data['nama_tim'],
            'deskripsi_produk' => $data['deskripsi_produk'],
        ];
        Produk::where('id',$id)->update($produk);     

            if($request->hasfile('foto_produk'))
            {
                foreach($request->file('foto_produk') as $key => $file)
                {
                    $fname = $file->getClientOriginalName();
                    $file->move(public_path('img/produk') , $fname);
                    $data3 = array(
                        'foto_produk' => $fname,
                    );
                    FotoProduk::where('produk_id',$id)->update($data3);
                }
            }     

        $count=0;        
        foreach ($request->nama_mhs as $key => $value) {
            $dataMahasiswa=[               
                'nama' => $value,
                'kelas' => $data['kelas_mhs'][$count],
                'nrp' => $data['nrp_mhs'][$count],
            ];
            Mahasiswa::where('id',$data['id'][$count])->update($dataMahasiswa);
            $count++;
        }
        session()->flash('success','data berhasil diubah');
        return redirect()->route('mahasiswa');      
    }
    public function destroy($id)
    {
        $this->produk->deleteData($id);
        $this->fotoProduk->deleteData($id);
        Mahasiswa::where('produk_id',$id)->delete();
        session()->flash('success','data berhasil dihapus');
        return redirect()->route('mahasiswa');
    }

    public function deleteFotoById($id)
    {
        $this->fotoProduk->deleteFotoById($id);
        return back();
    }

    public function addFotoProduk(Request $request,$id)
    {
        if($request->hasfile('foto_produk'))
        {
            $file = $request->file('foto_produk');
          
                $fname = $file->getClientOriginalName();
                $file->move(public_path('img/produk') , $fname);
                $data = array(
                    'produk_id' => $id,
                    'foto_produk' => $fname
                );
                FotoProduk::insert($data);
            
        }
        return back();        
    }

    public function addMahasiswa(Request $request,$id)
    {
        $data=$request->all();
        $data['produk_id']=$id;

        Mahasiswa::create($data);
        return back();
    }
    public function deleteMahasiswaById($id)
    {
        $data=Mahasiswa::findOrFail($id);

        $data->delete();
        return back();
    }
}
