<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nim', 12);
            $table->string('kode_tahun');
            $table->string('kode_matkul');
            $table->double('nilai_uts');
            $table->double('nilai_uas');
            $table->double('nilai_tugas');
            $table->double('nilai_praktek');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khs');
    }
}
