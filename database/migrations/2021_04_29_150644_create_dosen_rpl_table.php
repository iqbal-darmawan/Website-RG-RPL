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
<<<<<<< HEAD
            $table->id();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('nip')->unique();
            $table->string('nama_lengkap');
            $table->string('jenis_kelamin',20)->nullable();
            $table->string('alamat')->nullable();
            $table->string('thn_bergabung')->nullable();
            $table->string('foto_dosen')->nullable();
=======
            $table->id('id');
            $table->string('nip');
            $table->string('nama_lengkap');
            $table->string('jenis_kelamin',20);
            $table->string('alamat');
            $table->string('thn_bergabung');
            $table->string('telefon');
            $table->string('foto_dosen');
>>>>>>> 15c2c673c9e920b4c69703eea34049002cc1a2f0
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
