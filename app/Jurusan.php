<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = "jurusan";

    protected $fillable = ['kode_jurusan', 'nama_jurusan', 'jenjang'];
    protected $primaryKey = 'kode_jurusan';

    public $incrementing = false;
}
