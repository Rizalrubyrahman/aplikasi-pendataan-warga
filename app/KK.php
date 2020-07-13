<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KK extends Model
{
    protected $fillable = 
    [
        'no_kk',
        'rt',
        'rw',
        'desa',
        'kecamatan',
        'kabupaten',
        'kepala_keluarga',
    ];
    protected $table = 'kk';
    public function penduduk()
    {
        return $this->hasMany(Penduduk::class);
    }
}
