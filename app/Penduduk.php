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
        'ktp',
        'ijazah',
    ];
    protected $table = 'penduduk';
    public function kk()
    {
        return $this->belongsTo(KK::class,'k_k_id');
    }
    public function agama()
    {
        return $this->belongsTo(Agama::class,'agama_id');
    }
    public function klasifikasi()
    {
        return $this->belongsTo(Klasifikasi::class,'klasifikasi_id');
    }
    public function getKtp()
    {
        return asset('images/'.$this->ktp);
    }
    public function getIjazah()
    {
        return asset('images/'.$this->ijazah);
    }
}
