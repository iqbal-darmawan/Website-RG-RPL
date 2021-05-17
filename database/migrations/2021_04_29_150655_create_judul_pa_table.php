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
            $table->foreignId('mahasiswa_id')->nullable()->constrained('mahasiswa')->onDelete('cascade');
            $table->foreignId('dosen_id')->nullable()->constrained('dosen_rpl')->onDelete('cascade');
            $table->foreignId('industri_id')->nullable()->constrained('industri')->onDelete('cascade');
            $table->string('nama_judul', 100);
            $table->string('nama_pembimbing', 100);
            $table->text('deskripsi_judul');
            $table->text('kualifikasi_judul');
            $table->string('tahun_penawaran');
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
