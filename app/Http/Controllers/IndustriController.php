<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Industri;
class IndustriController extends Controller
{
    public function __construct()
    {
        $this->Industri = new Industri();
    }
    public function index()
    {
        $data=[
            'industri' => $this->Industri->getAllData()
        ];
        return view('Admin.v_industri',$data);
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_industri' => 'required',
            'deskripsi_industri' => 'required',
            'foto_industri' => 'required'
        ],[
            'nama_industri.required' =>'masukan nama industri',
            'deskripsi_industri.required' => 'masukan deskripsi industri',
            'foto_industri.required' => 'masukan logo industri'
        ]);
        $file = Request()->foto_industri;
        $filename = Request()->nama_industri. '.' . $file->extension();
        $file->move(public_path('Img/industri'),$filename);
        $data = [
            'nama_industri' => $request-> nama_industri,
            'deskripsi_industri' => $request -> deskripsi_industri,
            'foto_industri' => $filename
        ];
        $this->Industri->addData($data);
        return redirect()->route('industri')->with('pesan','data berhasil di tambahkan');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_industri' => 'required',
            'deskripsi_industri' => 'required',
        ],[
            'nama_industri.required' =>'masukan nama industri',
            'deskripsi_industri.required' => 'masukan deskripsi industri',
        ]);
        if ($request->foto_industri <> "") {
            $file = Request()->foto_industri;
            $filename = Request()->nama_industri. '.' . $file->extension();
            $file->move(public_path('Img/industri'),$filename);
            $data = [
                'nama_industri' => $request -> nama_industri,
                'deskripsi_industri' => $request -> deskripsi_industri,
                'foto_industri' => $filename
            ];
            $this->Industri->editData($id,$data);
        }else{
            $data = [
                'nama_industri' => $request -> nama_industri,
                'deskripsi_industri' => $request -> deskripsi_industri,
            ];
            $this->Industri->editData($id,$data);
        }
        return redirect()->route('industri')->with('pesan','Data berhasil diubah');
    }
    public function destroy($id)
    {
        $data = $this->Industri->detailData($id);
        if ($data->foto_industri <>"") {
            unlink(public_path('Img/industri'). '/' . $data->foto_industri);
        }
        $this->Industri->deleteData($id);
        return redirect()->route('industri')->with('pesan','Data berhasil dihapus');
    }
}
