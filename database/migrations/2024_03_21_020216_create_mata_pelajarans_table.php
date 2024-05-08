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
        Schema::create('mata_pelajarans', function (Blueprint $table) {
            $table->increments('mata_pelajaran_id');
            // $table->id();
            $table->string('judul', 25);
            $table->unsignedBigInteger('id_guru');
            $table->timestamps();

            //relasi
            $table->foreign('id_guru')->references('nip')->on('gurus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mata_pelajarans');
    }
};
