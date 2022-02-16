<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;
use App\Matakuliah;
use App\Dosen;
use App\Ruangan;
use App\Jamkuliah;
use App\TahunAkademik;
use App\JadwalKuliah;

class JadwalkuliahController extends Controller
{

    function index(request $request)
    {

        $jurusan  = $request->get('jurusan');
        $semester = $request->get('semester');
        $tahunakademik = $request->get('tahunakademik');


        $data['jadwal'] = \DB::table('jadwal_kuliah')
            ->join('matakuliah', 'matakuliah.kode_matkul', '=', 'jadwal_kuliah.kode_matkul')
            ->join('dosen', 'dosen.kode_dosen', '=', 'jadwal_kuliah.kode_dosen')
            ->join('ruangan', 'ruangan.kode_ruangan', '=', 'jadwal_kuliah.kode_ruangan')
            ->join('jam_kuliah', 'jam_kuliah.id_jam', '=', 'jadwal_kuliah.id_jam')
            ->where('jadwal_kuliah.kode_jurusan', $jurusan)
            ->where('jadwal_kuliah.kode_tahun', $tahunakademik)
            ->where('jadwal_kuliah.semester', $semester)
            ->get();

        $data['jurusan'] = Jurusan::pluck('nama_jurusan', 'kode_jurusan');
        $data['tahunakademik'] = TahunAkademik::pluck('nama_tahun', 'kode_tahun');
        $data['jurusan_terpilih'] = $jurusan;
        $data['semester_terpilih'] = $semester;
        $data['tahun_terpilih'] = $tahunakademik;

        return view('jadwalkuliah.index', $data);
    }


    function create()
    {

        $data['dosen'] = Dosen::pluck('nama', 'kode_dosen');
        $data['matakuliah'] = Matakuliah::pluck('nama_mk', 'kode_matkul');
        $data['jurusan'] = Jurusan::pluck('nama_jurusan', 'kode_jurusan');
        $data['ruangan'] = Ruangan::pluck('nama_ruangan', 'kode_ruangan');
        $data['tahunakademik'] = TahunAkademik::pluck('nama_tahun', 'kode_tahun');
        $data['jam_kuliah'] = Jamkuliah::pluck('jam', 'id_jam');
        $data['hari'] = ['Senin' => 'Senin', 'Selasa' => 'Selasa', 'Rabu' => 'Rabu', 'Kamis' => 'Kamis', 'Jum\'at' => 'Jum\'at'];
        // $data['tahunakademik'] = \DB::table('tahunakademik')->where('status', 'y')->first();
        return view('jadwalkuliah.create', $data);
    }

    function store(request $request)
    {
        $jadwal = new JadwalKuliah();
        $jadwal->create($request->all());
        return redirect('jadwalkuliah')->with('status', 'Jadwal Kuliah Berhasil Diinput');
    }

    function edit($id)
    {
        $data['dosen']          = Dosen::pluck('nama', 'kode_dosen');
        $data['matakuliah']     = Matakuliah::pluck('nama_mk', 'kode_matkul');
        $data['jurusan']        = Jurusan::pluck('nama_jurusan', 'kode_jurusan');
        $data['ruangan']        = Ruangan::pluck('nama_ruangan', 'kode_ruangan');
        $data['tahunakademik']  = TahunAkademik::pluck('nama_tahun', 'kode_tahun');
        $data['jam_kuliah']     = Jamkuliah::pluck('jam', 'id_jam');
        $data['hari']           = ['Senin' => 'Senin', 'Selasa' => 'Selasa', 'Rabu' => 'Rabu', 'Kamis' => 'Kamis', 'Jum\'at' => 'Jum\'at'];
        $data['jadwal_kuliah']  = JadwalKuliah::where('id', $id)->first();
        return view('jadwalkuliah.edit', $data);
    }

    function update(Request $request, $id)
    {
        $jadwal = JadwalKuliah::where('id', $id)->first();

        $jadwal->hari              = $request->hari;
        $jadwal->id_jam            = $request->id_jam;
        $jadwal->kode_jurusan      = $request->kode_jurusan;
        $jadwal->kode_matkul       = $request->kode_matkul;
        $jadwal->kode_dosen        = $request->kode_dosen;
        $jadwal->kode_ruangan      = $request->kode_ruangan;
        $jadwal->kode_tahun        = $request->kode_tahun;
        $jadwal->semester          = $request->semester;
        $jadwal->update();

        return redirect('/jadwalkuliah')->with('status', 'Data Jadwal Berhasil Di Update');;
    }
    function destroy($id)
    {
        $kurikulum = JadwalKuliah::find($id);
        $kurikulum->delete();
        return redirect('jadwalkuliah')->with('status', 'Data Kurikulum Berhasil Dihapus');
    }
}
