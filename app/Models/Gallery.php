<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'gallery';
    protected $fillable=[
        'nama_kegiatan','foto_kegiatan'
    ];

    protected $hidden=[
        'created_at','updated_at'
    ];
}
