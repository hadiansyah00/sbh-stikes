<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;
use App\Kurikulum;
use DataTables;
use App\TahunAkademik;
use DB;
use App\Matakuliah;

class KurikulumController extends Controller
{
    function index(Request $request)
    {

        $jurusan = $request->get('jurusan');
        $semester = $request->get('semester');
        $tahunakademik = $request->get('tahunakademik');

        $data['kurikulum'] = \DB::table('kurikulum')
            ->join('tahunakademik', 'tahunakademik.kode_tahun', '=', 'kurikulum.kode_tahun')
            ->join('jurusan', 'jurusan.kode_jurusan', '=', 'kurikulum.kode_jurusan')
            ->where('kurikulum.semester', $semester)
            ->where('kurikulum.kode_tahun', $tahunakademik)
            ->where('kurikulum.kode_jurusan', $jurusan)
            ->get();

        $data['tahunakademik'] = TahunAkademik::pluck('nama_tahun', 'kode_tahun');
        $data['jurusan'] = Jurusan::pluck('nama_jurusan', 'kode_jurusan');
        $data['jurusan_terpilih'] = $jurusan;
        $data['semester_terpilih'] = $semester;
        $data['tahun_terpilih'] = $tahunakademik;
        return view('kurikulum.index', $data);
    }


    function create()
    {

        $data['tahunakademik'] = TahunAkademik::pluck('nama_tahun', 'kode_tahun');
        $data['jurusan'] = Jurusan::pluck('nama_jurusan', 'kode_jurusan');
        return view('kurikulum.create', $data);
    }


    // function edit($id)
    // {

    //     $data['jurusan']        = Jurusan::pluck('nama_jurusan', 'kode_jurusan');
    //     $data['tahunakademik']  = TahunAkademik::pluck('nama_tahun', 'kode_tahun');
    //     $data['kurikulum']  = Kurikulum::where('id_kurikulum', $id)->first();
    //     return view('kurikulum.edit', $data);
    // }

    // function update(Request $request, $id)
    // {
    //     $kurikulum = Kurikulum::where('id_kurikulum', $id)->first();
    //     $kurikulum->nama_kurikulum              = $request->nama_kurikulum;
    //     // $kurikulum->kode_jurusan            = $request->kode_jurusan;
    //     // $kurikulum->kode_tahun            = $request->kode_tahun
    //     $kurikulum->update();

    //     return redirect('/kurikulum')->with('status', 'Data Kurikulum Berhasil Di Update');;
    // }

    function store(Request $request)
    {
        $kurikulum = new Kurikulum();
        $kurikulum->create($request->all());
        return redirect('kurikulum')->with('status', 'Input Data Kurikulum Berhasil');
    }

    function destroy($id_kurikulum)
    {
        $kurikulum = Kurikulum::find($id_kurikulum);
        $kurikulum->delete();
        return redirect('kurikulum')->with('status', 'Data Kurikulum Berhasil Dihapus');
    }


    // Input Matakuliah dikurikulum Untuk di Rencana Studi


    function MatakuliahKurikulum()
    {
        return Datatables::of(Matakuliah::all())
            ->addColumn('action', function ($row) {
                $action = '<button onClick="tambah_krs(\'' . $row->id . '\')" class=" btn btn-success"> <i class="fas fa-check-circle"></i> </button>';
                // $action  = '<a href="/matakuliah/'.$row->kode_matkul.'/edit" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i>Ambil</a>';<i class="fas fa-check-circle"></i>

                return $action;
            })
            ->make(true);
    }

    function hapusKrs(Request $request)
    {
        $krs = Krs::find($request->id);
        $krs->delete();
    }


    function tambahKrs(Request $request)
    {
        // $tahunakademik = \DB::table('tahunakademik')->where('status', 'y')->first();

        $krs = new Krs;
        $krs->kode_matkul   = $request->kode_matkul;
        $krs->kode_tahun = $tahunakademik->kode_tahun;
        $krs->save();
    }
}
