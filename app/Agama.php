<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    protected $fillable = ['nama_agama','status'];
    protected $table = 'agama';
}
