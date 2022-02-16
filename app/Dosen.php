<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Dosen extends Authenticatable
{
    protected $table = "dosen";
    protected $fillable = ['nidn', 'nama', 'no_hp', 'email', 'alamat', 'kode_jurusan'];

    protected $primaryKey = "kode_dosen";

    public $incrementing = false;
}
