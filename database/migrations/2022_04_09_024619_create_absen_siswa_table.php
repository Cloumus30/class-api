<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsenSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absen_siswa', function (Blueprint $table) {
            $table->id();

            $table->uuid('uuid');
            $table->foreignId('absen_id')->constrained('absen');
            $table->foreignId('siswa_id')->constrained('siswa');

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
        Schema::dropIfExists('absen_siswa');
    }
}
