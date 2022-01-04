<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileMateri extends Model
{
    protected $table = 'file_materi';
    protected $fillable = [
        'materi_id',
        'file_materi'
    ];
    protected $hidden =[
        'created_at',
        'updated_at'
    ];
    
  
    public function materi()
    {
        return $this->belongsTo(Materi::class, 'materi_id', 'id');
    }
}
