<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JadwalPelajaran extends Model
{
    use HasFactory;

    protected $guarded=[];
    protected $primaryKey = 'jadwal_pelajaran_id';

    public function mataPelajaran(): BelongsTo
    {
        return $this->belongsTo(MataPelajaran::class, 'id_mata_pelajaran');
    }

    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
}
