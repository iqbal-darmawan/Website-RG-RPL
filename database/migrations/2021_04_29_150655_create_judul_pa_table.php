<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJudulPATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judul_pa', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('mahasiswa_id')->constrained('mahasiswa');
            $table->foreignId('dosen_id')->constrained('dosen_rpl');
            $table->foreignId('industri_id')->constrained('industri');
            $table->string('nama_judul', 100);
            $table->string('deskripsi_judul');
            $table->string('kualifikasi_judul');
            $table->string('tahun_mengambil');
            $table->string('tahun_penawaran_dosen');
            $table->string('tahun_penawaran_industri');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('judul_pa');
    }
}
