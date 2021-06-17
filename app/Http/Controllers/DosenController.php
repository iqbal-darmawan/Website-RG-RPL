<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DosenRpl;
use App\Models\Penelitian;
use App\Models\Prestasi;
use App\Models\Pengabdian;


class DosenController extends Controller
{
   public function __construct()
   {
       $this->dosen = new DosenRpl();
       $this->penelitian = new Penelitian();
       $this->pengabdian = new Pengabdian();
       $this->prestasi = new Prestasi();
   }
    public function index()
    {
        $data=[
            'dosen' => $this->dosen->getAllData()
        ];
        return view('Admin/dosen/v_dosen',$data);
    }

    public function create()
    {
        return view('Admin/dosen/v_add_dosen');
    }

    public function store(Request $request)
    {
        $data = $request->all();  
        $dosen = new DosenRpl;
        $file = $request->foto_dosen;
        $fname = $file->getClientOriginalName();
        $file->move(public_path('Img/dosen') , $fname);
        $dosen->nip = $data['nip'];
        $dosen->nama_lengkap = $data['nama_lengkap'];
        $dosen->jenis_kelamin = $data['jenis_kelamin'];
        $dosen->alamat = $data['alamat'];
        $dosen->foto_dosen = $fname;
        $dosen->telefon = $data['telefon'];
        $dosen->thn_bergabung = $data['thn_bergabung'];
        $dosen->save();
        
        //prestasi
       
            foreach ($data['nama_prestasi'] as $item => $value) {
                $data2= array(
                    'dosen_id' => $dosen->id,
                    'nama_prestasi' => $data['nama_prestasi'][$item],
                    'deskripsi_prestasi' => $data['deskripsi_prestasi'][$item]
                );
                Prestasi::insert($data2);
            }
        
        // //penelitian
       
            foreach ($data['nama_penelitian'] as $item => $value) {
                $data2= array(
                    'dosen_id' => $dosen->id,
                    'nama_penelitian' => $data['nama_penelitian'][$item],
                    'deskripsi_penelitian' => $data['deskripsi_penelitian'][$item]
                );
                Penelitian::insert($data2);
            }
        
        // pengabdian
        
            foreach ($data['nama_pengabdian'] as $item => $value) {
                $data2= array(
                    'dosen_id' => $dosen->id,
                    'nama_pengabdian' => $data['nama_pengabdian'][$item],
                    'deskripsi_pengabdian' => $data['deskripsi_pengabdian'][$item]
                );
                Pengabdian::insert($data2);

            }
            return redirect()->route('dosen')->with('pesan','data berhasil di tambahkan');
    }

    public function show($id)
    {
        if (!$this->dosen->detailData($id)) {
            abort(404);
        }
        $data=[
            'dosen' => $this->dosen->detailData($id),
            'penelitian' => $this->penelitian->detailData($id),
            'pengabdian' => $this->pengabdian->detailData($id),
            'prestasi' => $this->prestasi->detailData($id),
        ];
        //dd($data);
        return view('Admin/dosen/v_detail_dosen',$data);
    }

    public function edit($id)
    {
        
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $this->dosen->deleteData($id);
        $this->penelitian->deleteData($id);
        $this->pengabdian->deleteData($id);
        $this->prestasi->deleteData($id);
        return redirect()->route('dosen')->with('pesan','Data berhasil dihapus');
    }
    //frontend =====================================

    public function indexfrontend()
    {
        $data = [
            "dosen" => $this->dosen->getAllData()
        ];
        return view("dosen.dosen-view",$data);
    }
}
