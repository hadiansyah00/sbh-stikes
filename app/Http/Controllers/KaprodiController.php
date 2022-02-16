<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
use App\Kaprodi;
use App\Jurusan;
use DataTables;
use Auth;

class KaprodiController extends Controller
{
    function json()
    {

        $kaprodi = \DB::table('kaprodi')
            ->join('jurusan', 'kaprodi.kode_jurusan', '=', 'jurusan.kode_jurusan')
            ->join('dosen', 'kaprodi.kode_dosen', '=', 'dosen.kode_dosen')
            ->get();

        return DataTables::of($kaprodi)
            ->addColumn('action', function ($row) {
                $action  = '<a href="/kaprodi/' . $row->kode_kap . '/edit" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>';
                $action .= \Form::open(['url' => 'kaprodi/' . $row->kode_kap, 'method' => 'delete', 'style' => 'float:right']);
                $action .= "<button type='submit'class='btn btn-danger btn-sm'><i class='fas fa-trash-alt'></i></button>";
                $action .= \Form::close();
                return $action;
            })
            ->make(true);
    }

    /**
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('kaprodi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['dosen'] = Dosen::pluck('nama', 'kode_dosen');
        $data['jurusan'] = Jurusan::pluck('nama_jurusan', 'kode_jurusan');
        return view('kaprodi.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_kap' => 'required|unique:kaprodi|min:4',


        ]);
        $data['dosen'] = Dosen::pluck('nama', 'kode_dosen');
        $data['jurusan'] = Jurusan::pluck('nama_jurusan', 'kode_jurusan');
        $kaprodi = new Kaprodi();
        $kaprodi->kode_kap          = $request->kode_kap;
        $kaprodi->kode_dosen          = $request->kode_dosen;
        // $kaprodi->nama_kap          = $request->nama_kap;
        $kaprodi->kode_jurusan      = $request->kode_jurusan;
        $kaprodi->save();



        return redirect('/kaprodi')->with('status', 'Data Ketua Program Studi Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['dosen'] = Dosen::pluck('nama', 'kode_dosen');
        $data['jurusan'] = Jurusan::pluck('nama_jurusan', 'kode_jurusan');
        $data['kaprodi'] = Kaprodi::where('kode_kap', $id)->first();
        return view('kaprodi.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_kap)
    {

        $data['dosen'] = Dosen::pluck('nama', 'kode_dosen');
        $data['jurusan'] = Jurusan::pluck('nama_jurusan', 'kode_jurusan');
        $kaprodi = Kaprodi::where('kode_kap', $kode_kap)->first();
        // $kaprodi->nama_kap        = $request->nama_kap;
        $kaprodi->kode_dosen             = $request->kode_dosen;
        $kaprodi->kode_jurusan      = $request->kode_jurusan;
        $kaprodi->update();

        return redirect('/kaprodi')->with('status', 'Data Dosen Berhasil Di Update');;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_kap)
    {
        $kaprodi = Kaprodi::where('kode_kap', $kode_kap);
        $kaprodi->delete();
        return redirect('/kaprodi')->with('status_delete', 'Data Dosen Berhasil Dihapus');;
    }
    // function jadwal_mengajar()
    // {
    //     return view('dosen.jadwal_mengajar');
    // }

    // function jadwal_mengajar_json()
    // {
    //     $jadwal = \DB::table('jadwal_kuliah')
    //         ->join('ruangan', 'ruangan.kode_ruangan', '=', 'jadwal_kuliah.kode_ruangan')
    //         ->join('matakuliah', 'matakuliah.kode_matkul', '=', 'jadwal_kuliah.kode_matkul')
    //         ->join('jam_kuliah', 'jam_kuliah.id', '=', 'jadwal_kuliah.jam')
    //         ->join('jurusan', 'jurusan.kode_jurusan', '=', 'jadwal_kuliah.kode_jurusan')
    //         ->where('jadwal_kuliah.kode_dosen', Auth::guard('dosen')->user()->kode_dosen);

    //     return DataTables::of($jadwal)
    //         ->addColumn('action', function ($row) {
    //             $action  = '<a href="/nilai/' . $row->nim . '/edit" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt">Input nilai</i></a>';
    //             // $action .= \Form::open(['url' => 'dosen/' . $row->nidn, 'method' => 'delete', 'style' => 'float:right']);
    //             // $action .= "<button type='submit'class='btn btn-danger btn-sm'><i class='fas fa-trash-alt'></i></button>";
    //             // $action .= \Form::close();
    //             $action = "";
    //             return $action;
    //         })
    //         ->make(true); }
}
