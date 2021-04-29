<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMelakukanPenelitianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('melakukan_penelitian', function (Blueprint $table) {
            $table->foreignId('dosen_id')->constrained('dosen_rpl');
            $table->foreignId('penelitian_id')->constrained('penelitian');
            $table->string('thn_penelitian');
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
        Schema::dropIfExists('melakukan_penelitian');
    }
}
