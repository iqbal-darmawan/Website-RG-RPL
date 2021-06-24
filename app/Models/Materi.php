<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $table = 'materi';
    protected $fillable = [
        'nama_materi'
    ];

    protected $hidden =[
        'created_at',
        'updated_at'
    ];
    use HasFactory;
}

