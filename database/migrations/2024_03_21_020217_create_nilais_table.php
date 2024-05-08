<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->increments('nilai_id');
            // $table->id();
            // $table->unsignedInteger('id_siswa');
            $table->string('id_siswa');
            $table->unsignedInteger('id_mata_pelajaran');
            $table->double('nilai');
            $table->timestamps();

            //relasi
            // $table->foreign('id_siswa')->references('nis')->on('siswas');
            $table->foreign('id_mata_pelajaran')->references('mata_pelajaran_id')->on('mata_pelajarans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilais');
    }
};
