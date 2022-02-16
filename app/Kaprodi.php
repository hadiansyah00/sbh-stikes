<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kaprodi extends Model
{
    protected $table = "kaprodi";
    protected $fillable = ['kode_jurusan', 'kode_dosen'];

    protected $primaryKey = "kode_kap";
}
