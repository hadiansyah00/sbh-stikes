<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameKodeDoenToKodeDosen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kaprodi', function (Blueprint $table) {
            $table->renameColumn('kode_doen', 'kode_dosen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kaprodi', function (Blueprint $table) {
            $table->renameColumn('kode_dosen', 'kode_doen');
        });
    }
}
