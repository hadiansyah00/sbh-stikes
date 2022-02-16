<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameKodeMkInJadwalKuliahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jadwal_kuliah', function (Blueprint $table) {
            $table->renameColumn('kode_mk', 'kode_matkul');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jadwal_kuliah', function (Blueprint $table) {
            $table->renameColumn('kode_matkul', 'kode_mk');
        });
    }
}
