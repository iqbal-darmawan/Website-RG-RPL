<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Mendapatkan semua data di table user
     * @return Array
     */
    public function getUserData()
    {
        return DB::table('users')->get();
    }

    /**
     * Mengedit profile setting
     */
    public function editData($id, $data)
    {
        DB::table('industri')
        ->where('id',$id)
        ->update($data);
    }

    /**
     * Menghapus user
     */
    public function deleteData($id)
    {
        DB::table('industri')
        ->where('id',$id)
        ->delete();
    }
}
