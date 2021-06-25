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
        'email',
        'password',
        'nama_lengkap',
        'jenis_kelamin',
        'alamat',
        'foto_dosen',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'thn_bergabung' => 'datetime',
    ];

    public function getAllData()
    {
        
        $data = DB::table('dosen_rpl')->paginate(9);
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

    public function penelitian()
    {
        return $this->hasMany(Penelitian::class, 'dosen_id');
    }
    public function prestasi()
    {
        return $this->hasMany(Prestasi::class, 'dosen_id');
    }
    public function pengabdian()
    {
        return $this->hasMany(Pengabdian::class, 'dosen_id');
    }
    public function judulpa()
    {
        return $this->hasMany(JudulPA::class, 'dosen_id');
    }
}
