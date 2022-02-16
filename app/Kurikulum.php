<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    protected $table = "kurikulum";

    protected $fillable = ['nama_kurikulum', 'semester', 'kode_tahun', 'kode_jurusan'];

    protected $primaryKey = 'id_kurikulum';
}
