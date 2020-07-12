<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KK extends Model
{
    protected $fillable = 
    [
        'no_kk',
        'alamat',
        'rt',
        'rw',
        'desa',
        'kecamatan',
        'kabupaten',
        'kode_pos',
        'provinsi',
        'kepala_keluarga',
    ];
    protected $table = 'kk';
}
