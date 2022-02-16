<?php

namespace App\Http\Controllers;

use Yajra\DataTables\DataTables;
use App\Matakuliah;
use App\Krs;
use App\Khs;
use App\TahunAkademik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DB;
use App\JadwalKuliah;

class KrsController extends Controller
{

    // function __construct()
    // {
    //     return $this->middleware('auth:mahasiswa');
    // }

    function MatakuliahKurikulum()
    {
        return Datatables::of(Matakuliah::all())
            ->addColumn('action', function ($row) {
                $action = '<button onClick="tambah_krs(\'' . $row->id . '\')" class=" btn btn-success"> <i class="fas fa-check-circle"></i> </button>';
                $action  = '<a href="/matakuliah/' . $row->kode_matkul . '/edit" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i>Ambil</a>';

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
        $krs->id_kurikulum       = Auth::guard('web')->user()->$id_kurikulum;
        $krs->kode_tahun = $tahunakademik->kode_tahun;
        $krs->save();
    }

    function tampilKrs()
    {
        $result = '<table class="table table-bordered">
                <tr><th>Kode MK</th><th>Nama Matakuliah</th><th>SKS</th>Semester<th>Aksi</th><tr>';

        $krs = \DB::table('krs')
            ->join('matakuliah', 'krs.kode_matkul', '=', 'matakuliah.kode_matkul')
            ->get();
        foreach ($krs as $row) {
            $result .= '<tr>
                        <td>' . $row->kode_matkul . '</td>
                        <td>' . $row->nama_mk . '</td>
                        <td>' . $row->jml_sks . '</td>
                        <td>' . $row->semester . '</td>
                        <td><button onClick="hapus_krs(' . $row->id . ')" class="btn btn-danger"><i class="far fa-trash-alt"></i></td>
                        </tr>';
        }
        $result .= '<tr><td colspan="4"><a class="btn btn-success" href="/krs/selesai"><i class="fas fa-cart-plus"></i> Saya Selesai Mengisi KRS</a></td></tr>';
        $result .= '</table>';
        return $result;
    }
    function selesai()
    {
        // $nim = Auth::guard('web')->user()->nim;
        $krs = \DB::table('krs')->where('nim', $nim)->get();
        // $tahunakademik = \DB::table('tahunakademik')->where('status', 'y')->first();
        foreach ($krs as $row) {

            $khs = new Khs;
            $khs->kode_matkul   = $row->kode_matkul;
            $khs->nim       = $nim;
            $khs->kode_tahun = $tahunakademik->kode_tahun;
            $khs->nilai_uts = 0;
            $khs->nilai_uas = 0;
            $khs->nilai_tugas = 0;
            $khs->nilai_praktek = 0;
            $khs->save();
        }
        return redirect('khs');
    }
    function index()
    {
        return view('krs.index');
    }
}
