<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DosenRpl extends Model
{
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

    public function addDetail($data)
    {
        DB::table('dosen_rpl')->insert($data);
    }

    public function userRelated()
    {
        return $this->hasOne(User::class);
    }
}
