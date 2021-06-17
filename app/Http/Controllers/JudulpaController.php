<?php

namespace App\Http\Controllers;

use App\Models\Industri;
use App\Models\JudulPA;
use Illuminate\Http\Request;

class JudulpaController extends Controller
{
    public function __construct()
    {
        $this->Judulpa= new JudulPA();
    }
    public function index()
    {
        $data = [
            'judulpa' => $this->Judulpa->getAllData(),
        ];
        return view('Admin/judulpa/v_judulpa',$data);
    }

    public function display()
    {
        

    }
    public function create()
    {
        return view('Admin/judulpa/v_add_judulpa');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_judul' => 'required',
            'nama_pembimbing' => 'required',
            'kualifikasi_judul' => 'required',
            'deskripsi_judul' => 'required',
        ],[
            'nama_judul.required' =>'masukan judul yang ditawarkan',
            'nama_pembimbing.required' =>'masukan nama pembimbing',
            'kualifikasi_judul.required' => 'masukan kualifikasi judul',
            'deskripsi_judul.required' => 'masukan deskripsi judul'
        ]);
        $data = [
            'nama_judul' => $request-> nama_judul,
            'nama_pembimbing' => $request-> nama_pembimbing,
            'kualifikasi_judul' => $request-> kualifikasi_judul,
            'tahun_penawaran' => $request-> tahun_penawaran,
            'deskripsi_judul' => $request->deskripsi_judul
        ];
        session()->flash('success','data berhasil di tambahkan');
        $this->Judulpa->addData($data);
        return redirect()->route('judulpa')->with('pesan','data berhasil di tambahkan');
    }

    public function show($id)
    {
        if (!$this->Judulpa->detailData($id)) {
            abort(404);
        }
        $data=[
            'judulpa' => $this->Judulpa->detailData($id)
        ];
        return view('Admin/judulpa/v_detail_judulpa',$data);
    }

    public function edit($id)
    {
        if (!$this->Judulpa->detailData($id)) {
            abort(404);
        }
        $data=[
            'judulpa' => $this->Judulpa->detailData($id)
        ];
        
        return view('Admin/judulpa/v_edit_judulpa',$data);
    }

    public function update(Request $request, $id)
    {
        $data = [
            'nama_judul' => $request -> nama_judul,
            'nama_pembimbing' => $request -> nama_pembimbing,
            'tahun_penawaran' => $request -> tahun_penawaran,
            'kualifikasi_judul' => $request ->kualifikasi_judul,
            'deskripsi_judul' => $request ->deskripsi_judul,
        ];
        $this->Judulpa->editData($id,$data);
        session()->flash('success','data berhasil diubah');
        return redirect()->route('judulpa')->with('pesan','Data berhasil diubah');
    }
    public function destroy($id)
    {
        $this->Judulpa->deleteData($id);
        session()->flash('success','data berhasil dihapus');
        return redirect()->route('judulpa');
    }
}
