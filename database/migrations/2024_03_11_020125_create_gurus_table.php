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
        Schema::create('gurus', function (Blueprint $table) {
            $table->unsignedBigInteger('nip')->primary();
            $table->string('nama', 50);
            $table->string('jenis_kelamin', 25);
            $table->string('alamat', 100);
            $table->string('agama', 25);
            $table->string('status_pegawai', 25);
            $table->string('pendidikan_terakhir', 25);
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
