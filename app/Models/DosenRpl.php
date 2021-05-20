<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DosenRpl extends Model
{
    protected $table = 'dosen_rpl';
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_lengkap',
<<<<<<< HEAD
        'email',
=======
>>>>>>> 15c2c673c9e920b4c69703eea34049002cc1a2f0
        'password',
        'nama_lengkap',
        'jenis_kelamin',
<<<<<<< HEAD
        'alamat',
        'foto_dosen',
=======
        'foto_dosen',
        'nip',
        'thn_bergabung',
        'deskrispi_prestasi'
>>>>>>> 15c2c673c9e920b4c69703eea34049002cc1a2f0
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'thn_bergabung' => 'datetime',
    ];

<<<<<<< HEAD
    public function addDetail($data)
    {
        DB::table('dosen_rpl')->insert($data);
    }

    public function userRelated()
    {
        return $this->hasOne(User::class);
=======
    public function getAllData()
    {
        
        $data = DB::table('dosen_rpl')->get();
        return $data;
    }
    public function detailData($id)
    {
        $data = DB::table('dosen_rpl')->where('id',$id)->first();
        return $data;
    }
    public function deleteData($id)
    {
        DB::table('dosen_rpl')
        ->where('id',$id)
        ->delete();
>>>>>>> 15c2c673c9e920b4c69703eea34049002cc1a2f0
    }
}
