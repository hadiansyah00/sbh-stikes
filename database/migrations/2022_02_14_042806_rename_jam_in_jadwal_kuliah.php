<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameJamInJadwalKuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jadwal_kuliah', function (Blueprint $table) {
            $table->renameColumn('jam', 'id_jam');
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
            $table->renameColumn('id_jam', 'jam');
        });
    }
}
