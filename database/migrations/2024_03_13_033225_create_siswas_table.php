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
        Schema::create('siswas', function (Blueprint $table) {
            $table->unsignedInteger('nis')->primary();
            $table->string('nama', 50);
            $table->string('alamat', 50);
            $table->string('no_telp', 50);
            $table->unsignedInteger('id_pendaftaran');
            $table->unsignedInteger('id_kelas');
            $table->unsignedInteger('id_jurusan');
            $table->unsignedInteger('id_user');
            $table->timestamps();

            // relasi
            $table->foreign('id_pendaftaran')->references('no_pendaftaran')->on('pendaftarans');
            $table->foreign('id_kelas')->references('kelas_id')->on('kelas');
            $table->foreign('id_jurusan')->references('jurusan_id')->on('jurusans');
            $table->foreign('id_user')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
