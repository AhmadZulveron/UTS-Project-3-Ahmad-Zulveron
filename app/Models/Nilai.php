<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Nilai extends Model
{
    use HasFactory;

    protected $guarded=[];
    protected $primaryKey = 'nilai_id';

    // public function siswa(): BelongsTo
    // {
    //     return $this->belongsTo(Siswa::class, 'nis');
    // }

    public function mataPelajaran(): BelongsTo
    {
        return $this->belongsTo(MataPelajaran::class, 'id_mata_pelajaran');
    }
}
