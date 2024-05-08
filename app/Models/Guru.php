<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Guru extends Model
{
    use HasFactory;

    protected $guarded=[];
    protected $primaryKey = 'nip';

    public function kelas(): HasOne
    {
        return $this->hasOne(Kelas::class, 'nip');
    }

    public function mata_pelajaran(): HasOne
    {
        return $this->hasOne(MataPelajaran::class, 'nip');
    }
}
