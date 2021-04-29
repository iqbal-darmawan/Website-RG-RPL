<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBimbingJudulPATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bimbing_judul_pa', function (Blueprint $table) {
            $table->foreignId('dosen_id')->constrained('dosen_rpl');
            $table->foreignId('judul_id')->constrained('judul_pa');
            $table->string('thn_membimbing');
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
        Schema::dropIfExists('bimbing_judulpa');
    }
}
