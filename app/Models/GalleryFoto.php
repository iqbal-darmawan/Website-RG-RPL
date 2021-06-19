<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryFoto extends Model
{
    protected $table = 'gallery_foto';
    protected $fillable = [
        'gallery_id',
        'foto_kegiatan'
    ];
    protected $hidden=[
        'created_at','updated_at'
    ];
    use HasFactory;
}
