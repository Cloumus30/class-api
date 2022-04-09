<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTugasSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugas_siswa', function (Blueprint $table) {
            $table->id();

            $table->uuid('uuid');
            $table->foreignId('tugas_id')->constrained('tugas');
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
        Schema::dropIfExists('tugas_siswa');
    }
}
