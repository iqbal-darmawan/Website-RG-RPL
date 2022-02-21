<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenelitianTable extends Migration{

    public function up()
    {
        Schema::create('penelitian', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('dosen_id')->nullable()->constrained('dosen_rpl')->onDelete('cascade');
            $table->string('nama_penelitian');
            $table->string('deskripsi_penelitian')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('penelitian');
    }
}
