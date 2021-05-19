<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoProduk extends Model
{
    public $table = "foto_produk";
    use HasFactory;
    protected $fillable = [
        'produk_id',
        'foto_produk'
    ];
}
