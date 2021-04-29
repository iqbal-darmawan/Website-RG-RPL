<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMelakukanPengabdianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('melakukan_pengabdian', function (Blueprint $table) {
            $table->foreignId('dosen_id')->constrained('dosen_rpl');
            $table->foreignId('pengabdian_id')->constrained('pengabdian');
            $table->string('thn_pengabdian');
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
        Schema::dropIfExists('melakukan_pengabdian');
    }
}
