<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('nim')->primary();
            $table->string('nama_mahasiswa');
            $table->string('email');
            $table->string('password');
            $table->string('kode_jurusan');
            $table->string('alamat');
            $table->timestamps();
        });
    }
    // $table->string('nim')();
    // $table->string('alamat');
    // $table->date('tanggal_lahir')->nullable();
    // $table->string('tempat_lahir')->nullable();
    // $table->string('jenis_kelamin')->nullable();
    // $table->string('agama')->nullable();
    // $table->string('nama_ayah')->nullable();
    // $table->string('nama_ibu')->nullable();
    // $table->string('alamat_ortu')->nullable();
    // $table->string('kerja_ortu')->nullable();
    // $table->string('kerja_ortu')->nullable();
    // $table->string('no_hp_ortu')->nullable();
    // $table->string('kelas')->nullable();
    // $table->string('tahun_masuk')->nullable();
    // $table->string('tahun_lulus')->nullable();
    // $table->string('nisn')->nullable();
    // $table->timestamps();
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
}
