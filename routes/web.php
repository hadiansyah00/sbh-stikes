<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/mahasiswa/login', 'LoginmahasiswaController@index');
Route::post('/mahasiswa/login', 'LoginmahasiswaController@submit');

Route::get('/dosen/login', 'LoginDosenController@index');
Route::post('/dosen/login', 'LoginDosenController@submit');

Route::get('jadwal_mengajar', 'DosenController@jadwal_mengajar');
Route::get('jadwal_mengajar/json', 'DosenController@jadwal_mengajar_json');

Route::get('/homemhs', 'HomeMahasiswaController@index');
Route::get('/krs', 'KrsController@index');
Route::get('/krs/kurikulum', 'KrsController@MatakuliahKurikulum');
Route::post('/krs/tambahKrs', 'KrsController@tambahKrs');
Route::get('/krs/tampilKrs', 'KrsController@tampilKrs');
Route::post('/krs/hapusKrs', 'KrsController@hapusKrs');
Route::get('/krs/selesai', 'KrsController@selesai');
Route::get('/khs', 'KhsController@index');





Route::get('/mahasiswa/json', 'MahasiswaController@json');
Route::get('/tahunakademik/json', 'TahunAkademikController@json');
Route::get('/ruangan/json', 'RuanganController@json');
Route::get('/jurusan/json', 'JurusanController@json');
Route::get('/prodi/json', 'ProgramStudiController@json');
Route::get('/matakuliah/json', 'MatakuliahController@json');
Route::get('/dosen/json', 'DosenController@json');
Route::get('/kaprodi/json', 'KaprodiController@json');
Route::get('/home', 'HomeController@index')->name('home');


#Controller Modul


Route::resource('/matakuliah', 'MatakuliahController');
Route::resource('/dosen', 'DosenController');
Route::resource('/kaprodi', 'KaprodiController');
Route::resource('/prodi', 'ProgramStudiController');
Route::resource('/jurusan', 'JurusanController');
Route::resource('/ruangan', 'RuanganController');
Route::resource('/tahunakademik', 'TahunAkademikController');
Route::resource('/kurikulum', 'KurikulumController');
Route::resource('/jadwalkuliah', 'JadwalKuliahController');

Route::resource('/mahasiswa', 'MahasiswaController');
Route::get('setting', 'SettingController@index');
Route::put('setting', 'SettingController@update');
Route::put('/jadwalkuliah/edit', 'JadwalKuliahController@edit');

Route::get('jadwalkuliah', 'JadwalKuliahController@index');
Route::get('kurikulum', 'KurikulumController@index');

Route::resource('/user', 'UserController');
