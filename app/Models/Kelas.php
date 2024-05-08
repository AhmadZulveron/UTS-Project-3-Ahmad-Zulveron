<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
    use HasFactory;

    protected $guarded=[];
    protected $primaryKey = 'kelas_id';

    public function guru(): BelongsTo
    {
        return $this->belongsTo(Guru::class, 'wali_kelas');
    }

    public function siswa(): HasMany
    {
        return $this->hasMany(Siswa::class);
    }

    public function jadwalPelajaran(): HasMany
    {
        return $this->hasMany(JadwalPelajaran::class);
    }

    public function jurusan(): BelongsTo
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }
}
