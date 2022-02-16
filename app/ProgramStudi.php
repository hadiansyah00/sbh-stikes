<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    protected $table = "prodi";

    protected $fillable = ['nama_fakultas'];
    protected $primaryKey = "kode_fakultas";
}
