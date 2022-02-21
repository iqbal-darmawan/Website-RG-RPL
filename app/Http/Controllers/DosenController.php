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
        $dosen = $this->dosen->getAllData();
        return view('Admin/dosen/v_dosen', ['dosen' => $dosen]);
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
        $fname = $request->nama_lengkap . '.' . $file->extension();
        $file->move(public_path('img/dosen/profil') , $fname);
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
        if (!$this->dosen->detailData($id)) {
            abort(404);
        }
        $data=[
            'dosen' => $this->dosen->detailData($id),
            'penelitian' => $this->penelitian->detailData($id),
            'pengabdian' =>$this->pengabdian->detailData($id),
            'prestasi' => $this->prestasi->detailData($id),
        ];
        return view('Admin/dosen/v_edit_dosen',$data);
    }


    public function update(Request $request, $id)
    {

        if($request->hasfile('foto_dosen'))
        {
            $file = $request->foto_dosen;
            $fname = $request->nama_lengkap;
            $file->move(public_path('img/dosen') , $fname);
            $data=[
                'nip' => $request->nip,
                'nama_lengkap' => $request->nama_lengkap,
                'jenis_kelamin' => $request->jenis_kelamin,
                'alamat' => $request->alamat,
                'telefon' => $request->telefon,
                'foto_dosen' => $fname
            ];
        }else{
            $data=[
                'nip' => $request->nip,
                'nama_lengkap' => $request->nama_lengkap,
                'jenis_kelamin' => $request->jenis_kelamin,
                'alamat' => $request->alamat,
                'telefon' => $request->telefon,
            ];
        }
       
        DosenRpl::where('id',$id)->update($data);

         $this->updateArrayPrestasi($request,$id);
         $this->updateArrayPenelitian($request,$id);
         $this->updateArrayPengabdian($request,$id);
        return redirect()->route('dosen')->with('pesan','Data berhasil diupdate');

    }
    public function destroy($id)
    {
        $this->dosen->deleteData($id);
        $this->penelitian->deleteData($id);
        $this->pengabdian->deleteData($id);
        $this->prestasi->deleteData($id);
        return redirect()->route('dosen')->with('pesan','Data berhasil dihapus');
    }

    public function updateArrayPrestasi(Request $request,$id)
    {
        foreach ($request->nama_prestasi as $item => $value) {
            $data2= array(
                'dosen_id' => $id,
                'nama_prestasi' => $request->nama_prestasi[$item],
                'deskripsi_prestasi' => $request->deskripsi_prestasi[$item]
            );
            Prestasi::where('dosen_id',$id)->update($data2);
        }
    }

    public function updateArrayPenelitian(Request $request,$id)
    {
        foreach ($request->nama_penelitian as $item => $value) {
            $data2= array(
                'dosen_id' => $id,
                'nama_penelitian' =>$request->nama_penelitian[$item],
                'deskripsi_penelitian' =>  $request->deskripsi_penelitian[$item]
            );
            Penelitian::where('dosen_id',$id)->update($data2);
        }
    }

    public function updateArrayPengabdian(Request $request,$id)
    {
        foreach ($request->nama_pengabdian as $item => $value) {
            $data2= array(
                'dosen_id' => $id,
                'nama_pengabdian' => $request->nama_pengabdian[$item],
                'deskripsi_pengabdian' => $request->deskripsi_pengabdian[$item]
            );
            Pengabdian::where('dosen_id',$id)->update($data2);
        }
    }
    public function addArrayPrestasi(Request $request,$id)
    {
        $data=[
            'dosen_id' => $id,
            'nama_prestasi' => $request->nama_prestasi,
            'deskripsi_prestasi' => $request->deskripsi_prestasi
        ];
        Prestasi::insert($data);
        return back();
    }
    public function addArrayPenelitian(Request $request,$id)
    {
        $data=[
            'dosen_id' => $id,
            'nama_penelitian' => $request->nama_penelitian,
            'deskripsi_penelitian' => $request->deskripsi_penelitian
        ];
        Penelitian::insert($data);
        return back();
    }
    public function addArrayPengabdian(Request $request,$id)
    {
        $data=[
            'dosen_id' => $id,
            'nama_pengabdian' => $request->nama_pengabdian,
            'deskripsi_pengabdian' => $request->deskripsi_pengabdian
        ];
        Pengabdian::insert($data);
        return back();
    }
    public function deletePrestasiById($id)
    {
        Prestasi::destroy($id);
        return back();
    }
    public function deletePenelitianById($id)
    {
        Penelitian::destroy($id);
        return back();
    }
      public function deletePengabdianById($id)
    {
        Pengabdian::destroy($id);
        return back();
    }

    // Frontend =========================
    public function indexFront()
    {
        $dosen = $this->dosen->getAllData();

        return view('dosen.dosen-view', [
            'dosen' => $dosen
        ]);
    }

    public function showFront($id)
    {
        $dosen = $this->dosen->detailData($id);
        $penelitian = DosenRpl::find($id)->penelitian;
        $pengabdian = DosenRpl::find($id)->pengabdian;
        $prestasi = DosenRpl::find($id)->prestasi;

        return view('dosen.detail-dosen-view', [
            'dosen' => $dosen,
            'penelitian' => $penelitian,
            'pengabdian' => $pengabdian,
            'prestasi' => $prestasi,
        ]);
    }

}
