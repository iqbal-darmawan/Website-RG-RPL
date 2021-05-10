<?php

namespace App\Http\Controllers;

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
    public function create()
    {
        return view('Admin/judulpa/v_add_judulpa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judulpa' => 'required',
            'nama_pembimbing' => 'required',
            'kualifikasi_judul' => 'required',
            'deskripsi_judul' => 'required',
        ],[
            'judulpa.required' =>'masukan judul yang ditawarkan',
            'nama_pembimbing.required' =>'masukan nama pembimbing',
            'kualifikasi_judul.required' => 'masukan kualifikasi judul',
            'deskripsi_judul.required' => 'masukan deskripsi judul'
        ]);
        $data = [
            'judulpa' => $request-> judulpa,
            'nama_pembimbing' => $request-> nama_pembimbing,
            'kualifikasi_judul' => $request-> kualifikasi_judul,
            'tahun_penawaran' => $request-> tahun_penawaran_industri,
            'deskripsi_judul' => $request->deskripsi_judul
        ];
        $this->Judulpa->addData($data);
        return redirect()->route('judulpa')->with('pesan','data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
