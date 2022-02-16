<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameIdInKurikulum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kurikulum', function (Blueprint $table) {
            $table->renameColumn('id', 'id_kurikulum');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kurikulum', function (Blueprint $table) {
            $table->renameColumn('id_kurikulum', 'id');
        });
    }
}
