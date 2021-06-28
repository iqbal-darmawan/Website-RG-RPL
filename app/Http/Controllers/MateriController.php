<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Materi;
use App\Models\FileMateri;

class MateriController extends Controller
{
    
    public function index()
    {
        $data=[
            'materi' => Materi::find()->fileMateri,
        ];
        return view('Admin.Materi.v_materi',$data);
    }

    public function download($filename)
    {
        $file = public_path() . "/files/". $filename;
        return Response::download($file, $filename);
    }
  
    public function create()
    {
        return view('Admin.Materi.v_add_materi');
    }
  
    public function store(Request $request)
    {
        $materi = new Materi;
        $data=$request->all();
        $materi->nama = $data['nama'];
        $materi->deskripsi = $data['deskripsi'];
        $materi->created_at = now();
        $materi->save();
        if ($request->hasFile('file_materi')) {
            foreach($request->file('file_materi') as $key => $file)
            {
                    $fname = $file->getClientOriginalName();
                    $file->move(public_path('files/materi') , $fname);
                    $data2 = array(
                        'materi_id' => $materi->id,
                        'file_materi' => $fname,
                        'category' => $data['category'],
                        'created_at' => now(),
                        'updated_at' => now()
                    );
                    FileMateri::insert($data2);
            }
        }
        session()->flash('success','data berhasil di tambahkan');
        return redirect()->route('materi');
    }
   
    public function edit($id)
    {
        $data = Materi::find($id);
        if (!$data) {
            abort(404);
        }else{
            $file = [
                'materi' => Materi::find($id),
                'file_materi' => FileMateri::where('materi_id',$id)->get()
            ];
            
            return view('Admin.Materi.v_edit_materi',$file);
        }
    }

    public function update(Request $request, $id)
    {
        $data=[
            'nama' => $request->nama
        ];
        Materi::insert($data);
        if ($request->hasfile('file_materi')) {
            foreach($request->file('file_materi') as $key => $file)
            {
                $fname = $file->getClientOriginalName();
                $file->move(public_path('files/materi') , $fname);
                $data2 = array(
                    'materi_id' => $id,
                    'file_materi' => $fname,
                    'created_at' => now(),
                    'updated_at' => now()
                );
                FileMateri::where('materi_id',$id)->update($data2);
            }
        }
        session()->flash('success','data berhasil di tambahkan');
        return redirect()->route('materi');
    }

    public function destroy($id)
    {
        FileMateri::where('materi_id',$id)->delete();
        Materi::destroy($id);
        
        session()->flash('success','foto berhasil di hapus');
        return back();
    }

    public function addFileById(Request $request,$id)
    {    
        if ($request->hasFile('file_materi')) {
            foreach ($request->file('file_materi') as $key => $file) {
                
                $fname = $file->getClientOriginalName();
                $file->move(public_path('files/materi') , $fname);
                $data2 = array(
                    'materi_id' => $id,
                    'file_materi' => $fname,
                    'created_at' => now(),
                    'updated_at' => now()
                );
                FileMateri::insert($data2);
            }
        }
        session()->flash('success','foto berhasil di tambahkan');
        return back();
    }

    public function destroyById($id)
    {
        FileMateri::destroy($id);
        session()->flash('success','foto berhasil di tambahkan');
        return back();
    }
}
