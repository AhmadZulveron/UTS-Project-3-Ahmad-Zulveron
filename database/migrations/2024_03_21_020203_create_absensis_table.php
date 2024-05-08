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
        Schema::create('absensis', function (Blueprint $table) {
            $table->increments('absensi_id');
            // $table->id();
            $table->unsignedInteger('id_kelas');
            $table->unsignedInteger('id_jurusan');
            $table->unsignedInteger('id_siswa');
            $table->string('status');
            $table->date('tanggal');
            $table->timestamps();

            //relasi
            $table->foreign('id_kelas')->references('kelas_id')->on('kelas');
            $table->foreign('id_jurusan')->references('jurusan_id')->on('jurusans');
            $table->foreign('id_siswa')->references('nis')->on('siswas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensis');
    }
};
