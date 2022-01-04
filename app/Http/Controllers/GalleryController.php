<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Gallery;
use App\Models\DosenRpl;
use App\Models\Industri;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $data=[
            'gallery' => Gallery::get()
        ];

        return view('Admin.gallery.v_gallery',$data);
    }

    public function indexFront()
    {
        $data=[
            'gallery' => Gallery::latest()->paginate(6),
            'dosen' => DosenRpl::count(),
            'karya' => Produk::count(),
            'industri' => Industri::count(),
            'kerjasama' => Industri::get(),
        ];

        return view('home.home-view',$data);
    }

    public function create()
    {
        return view('Admin/gallery/v_add_gallery');
    }

    public function store(Request $request)
    {
        $gallery = new Gallery;
        $data=$request->all();

        $gallery->nama = $data['nama_kegiatan'];
        $file = $data['foto_kegiatan'];

        $fname = $file->getClientOriginalName();
        $file->move(public_path('img/gallery'), $fname);
        $gallery->foto=$fname;
        $gallery->created_at = now();
        $gallery->updated_at = now();
        $gallery->save();

        session()->flash('success','data berhasil di tambahkan');
        return redirect()->route('gallery');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data=[
            'gallery' => Gallery::find($id),
        ];
        return view("Admin.gallery.v_edit_gallery",$data);
    }


    public function update(Request $request, $id)
    {
        $data = [
            'nama' => $request->nama,
            'foto' => $request->foto,
            'updated_at' => now(),
        ];

        Gallery::where('id', $id)->update($data);
        return redirect()->route('dosen')->with('pesan', 'Data berhasil diupdate');
    }


    public function destroy($id)
    {
        Gallery::destroy($id);
        session()->flash('success','foto berhasil dihapus');
        return back();
    }
}
