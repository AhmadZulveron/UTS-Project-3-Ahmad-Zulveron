<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MataPelajaran extends Model
{
    use HasFactory;

    protected $guarded=[];
    protected $primaryKey = 'mata_pelajaran_id';

    public function guru(): BelongsTo
    {
        return $this->belongsTo(Guru::class, 'id_guru');
    }

    public function nilai(): HasMany
    {
        return $this->hasMany(Nilai::class, 'mata_pelajaran_id');
    }

    public function jadwalPelajaran(): HasMany
    {
        return $this->hasMany(JadwalPelajaran::class, 'mata_pelajaran_id');
    }
}
