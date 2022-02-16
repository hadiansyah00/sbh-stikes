<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalKuliah extends Model
{
    protected $table = "jadwal_kuliah";

    protected $fillable = ['hari', 'kode_matkul', 'kode_dosen', 'kode_ruangan', 'id_jam', 'semester', 'kode_tahun', 'kode_jurusan'];

    protected $primaryKey = "id";
}
