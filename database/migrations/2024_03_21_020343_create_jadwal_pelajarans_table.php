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
        Schema::create('jadwal_pelajarans', function (Blueprint $table) {
            $table->increments('jadwal_pelajaran_id');
            // $table->id();
            $table->unsignedInteger('id_mata_pelajaran');
            $table->unsignedInteger('id_kelas');
            $table->string('waktu_mengajar', 25);
            $table->timestamps();

            //relasi
            $table->foreign('id_mata_pelajaran')->references('mata_pelajaran_id')->on('mata_pelajarans');
            $table->foreign('id_kelas')->references('kelas_id')->on('kelas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_pelajarans');
    }
};
