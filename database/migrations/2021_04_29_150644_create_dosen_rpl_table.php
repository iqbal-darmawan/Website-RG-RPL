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
            $table->string('nip')->unique();
            $table->string('password');
            $table->string('nama_dosen',50);
            $table->string('jenis_kelamin',20);
            $table->string('alamat');
            $table->string('email',50);
            $table->string('thn_bergabung');
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
