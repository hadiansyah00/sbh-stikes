<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Mahasiswa extends Authenticatable
{
    protected $table = "mahasiswa";
    protected $fillable = [
        'nim',
        'nama_mahasiswa',
        'kode_jurusan',
        'email',
        'password',
        'alamat',
        'nama_sekolah',
        'kode_dosen',
        'tanggal_lahir',
        'tempat_lahir', //
        'jenis_kelamin', //
        'agama', //
        'kelas', //
        'tahun_masuk',
        'semester_aktif' //
        // 'sekolah_asal',  //
        // 'nisn',
        // 'status'
        // 'nama_ayah', //
        // 'nama_ibu', //
        // 'alama_ortu', //
        // 'kerja_ortu', //
        // 'no_hp_ortu', //

    ];

    protected $primaryKey = 'nim';

    public $incrementing = false;


    function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
