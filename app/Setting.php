<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = "setting";

    protected $fillable = ['nama_akademik', 'email', 'no_telpon', 'alamat', 'web'];
}
