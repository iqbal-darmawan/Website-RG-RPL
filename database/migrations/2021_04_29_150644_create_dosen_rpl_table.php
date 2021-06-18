<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenRplTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen_rpl', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('user_id')->constrained('users');
            $table->string('nip');
            $table->string('nama_lengkap');
            $table->string('jenis_kelamin',20);
            $table->string('alamat');
            $table->string('thn_bergabung');
            $table->string('telefon');
            $table->string('foto_dosen');
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
        Schema::dropIfExists('dosen_rpl');
    }
}
