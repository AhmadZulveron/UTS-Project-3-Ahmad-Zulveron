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
        Schema::create('kelas', function (Blueprint $table) {
            $table->increments('kelas_id');
            $table->string('tahun_ajaran', 25);
            $table->unsignedInteger('id_jurusan');
            $table->unsignedBigInteger('wali_kelas');
            $table->timestamps();

            // relasi
            $table->foreign('wali_kelas')->references('nip')->on('gurus');
            $table->foreign('id_jurusan')->references('jurusan_id')->on('jurusans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
