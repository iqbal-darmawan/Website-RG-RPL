<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FileMateri;

class Materi extends Model
{
    use HasFactory;
    protected $table = 'materi';
    protected $fillable = [
        'nama',
        'deskripsi'
    ];

    protected $hidden =[
        'created_at',
        'updated_at'
    ];

    public function fileMateri()
    {
        return $this->hasOne(FileMateri::class,'materi_id');
    }
}

