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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->increments('no_pendaftaran');
            $table->timestamp('tgl_pendaftaran');
            $table->string('nama_siswa', 50);
            $table->string('jenis_kelamin', 50);
            $table->string('tempat_lahir', 50);
            $table->date('tgl_lahir', 25);
            $table->string('agama', 25);
            $table->string('alamat_siswa', 100);
            $table->string('no_telp', 25);
            $table->string('sekolah_asal', 25);
            $table->string('photo', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
