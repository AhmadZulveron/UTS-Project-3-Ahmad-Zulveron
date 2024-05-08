<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $guarded=[];
    protected $primaryKey = 'no_pendaftaran';

    public function siswa(): HasOne
    {
        return $this->hasOne(Siswa::class, 'pendaftaran_id');
    }
}
