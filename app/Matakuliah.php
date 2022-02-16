<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = "matakuliah";

    protected $fillable = [

        'nama_mk',
        'jml_sks',
        'semester',
        'in_english_matkul',
        'kode_jurusan',
        'tahun_akademik'
    ];
    protected $primaryKey = 'kode_matkul';

    public $incrementing = false;
}
