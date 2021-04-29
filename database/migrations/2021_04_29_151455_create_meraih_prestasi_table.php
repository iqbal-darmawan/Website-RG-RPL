<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeraihPrestasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meraih_prestasi', function (Blueprint $table) {
            $table->foreignId('dosen_id')->constrained('dosen_rpl');
            $table->foreignId('prestasi_id')->constrained('prestasi');
            $table->string('thn_prestasi');
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
        Schema::dropIfExists('meraih_prestasi');
    }
}
