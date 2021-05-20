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
        'password',
        'jenis_kelamin',
        'foto_dosen',
        'nip',
        'thn_bergabung',
        'deskrispi_prestasi'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'thn_bergabung' => 'datetime',
    ];

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
    }
}
