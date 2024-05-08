<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Siswa extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function pendaftaran(): BelongsTo
    {
        return $this->belongsTo(Pendaftaran::class, 'id_pendaftaran');
    }

    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function nilai(): HasMany
    {
        return $this->hasMany(Nilai::class, 'nilai_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
