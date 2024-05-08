<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jurusan extends Model
{
    use HasFactory;

    protected $guarded=[];
    protected $primaryKey = 'jurusan_id';

    public function siswa(): HasMany
    {
        return $this->hasMany(Siswa::class);
    }

    public function kelas(): HasMany
    {
        return $this->hasMany(Kelas::class);
    }
}
