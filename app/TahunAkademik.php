<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahunAkademik extends Model
{
    protected $table = "tahunakademik";
    protected $fillable = ['kode_tahun', 'nama_tahun', 'status'];

    // function getStatusAttribute($value)
    // {
    //     return $value == 'y' ? 'Aktif' : 'Tidak Aktif';
    // }
}
