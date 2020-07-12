<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $fillable = 
    [
        'id_agama',
        'id_klasifikasi',
        'id_kk',
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'gol_darah',
        'pekerjaan',
        'pendidikan',
        'status_perkawinan',
        'kewarganegaraan',
        'foto',
    ];
    protected $table = 'penduduk';
}
