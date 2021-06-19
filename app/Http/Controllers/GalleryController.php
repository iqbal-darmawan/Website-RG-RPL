<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryFoto;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $data=[
            'gallery' => Gallery::get()
        ];
      
        return view('Admin.Gallery.v_gallery',$data);
    }

    public function create()
    {
        return view('Admin/Gallery/v_add_gallery');
    }

    public function store(Request $request)
    {
        $gallery = new Gallery;
        $data=$request->all();
        $gallery->nama_kegiatan = $data['nama_kegiatan'];
        $gallery->created_at = now();
        $gallery->save();
        if ($request->hasFile('foto_kegiatan')) {
            foreach($request->file('foto_kegiatan') as $key => $file)
            {
                    $fname = $file->getClientOriginalName();
                    $file->move(public_path('Img/gallery') , $fname);
                    $data2 = array(
                        'gallery_id' => $gallery->id,
                        'foto_kegiatan' => $fname,
                        'created_at' => now(),
                        'updated_at' => now()
                    );
                    GalleryFoto::insert($data2);
            }
        }
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
            'gallery_foto' => GalleryFoto::where('gallery_id',$id)->get()
        ];
        return view("Admin.Gallery.v_edit_gallery",$data);
    }


    public function update(Request $request, $id)
    {
        
    }


    public function destroy($id)
    {
        Gallery::destroy($id);
        GalleryFoto::destroy($id);
        session()->flash('success','foto berhasil di hapus');
        return back();
    }
    public function addFotoById(Request $request,$id)
    {    
        if ($request->hasFile('foto_kegiatan')) {
            foreach ($request->file('foto_kegiatan') as $key => $file) {
                
                $fname = $file->getClientOriginalName();
                $file->move(public_path('Img/gallery') , $fname);
                $data2 = array(
                    'gallery_id' => $id,
                    'foto_kegiatan' => $fname,
                    'created_at' => now(),
                    'updated_at' => now()
                );
                
                GalleryFoto::insert($data2);
            }
        }
        session()->flash('success','foto berhasil di tambahkan');
        return back();
    }
    public function destroyById($id)
    {
        GalleryFoto::destroy($id);
        session()->flash('success','foto berhasil di tambahkan');
        return back();
    }
}
