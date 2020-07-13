<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $fillable = 
    [
        'agama_id',
        'klasifikasi_id',
        'k_k_id',
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
    ];
    protected $table = 'penduduk';
    public function kk()
    {
        return $this->belongsTo(KK::class);
    }
    public function agama()
    {
        return $this->belongsTo(Agama::class);
    }
    public function klasifikasi()
    {
        return $this->belongsTo(Klasifikasi::class);
    }
}
