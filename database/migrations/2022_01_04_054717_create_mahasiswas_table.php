<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
   
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produk_id')->constrained('produk');
            $table->string('nama');
            $table->string('kelas');
            $table->string('nrp');
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
}
