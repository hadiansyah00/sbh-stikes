<?php

namespace App\Http\Controllers;

use DataTables;
use Illuminate\Http\Request;
use App\Matakuliah;
use App\Jurusan;

class MatakuliahController extends Controller
{
    function json()
    {
        $matakuliah = \DB::table('matakuliah')
            ->join('jurusan', 'matakuliah.kode_jurusan', '=', 'jurusan.kode_jurusan')
            ->get();

        return DataTables::of($matakuliah)
            ->addColumn('action', function ($row) {
                $action  = '<a href="/matakuliah/' . $row->kode_matkul . '/edit" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>';
                $action .= \Form::open(['url' => 'matakuliah/' . $row->kode_matkul, 'method' => 'delete', 'style' => 'float:right']);
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

        return view('matakuliah.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['jurusan'] = Jurusan::pluck('nama_jurusan', 'kode_jurusan');
        return view('matakuliah.create', $data);
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
            'kode_matkul' => 'required|unique:matakuliah|min:4',
            'nama_mk' => 'required|min:6',
            'sks'     => 'require'
        ]);

        $data['jurusan'] = Jurusan::pluck('nama_jurusan', 'kode_jurusan');
        $matakuliah = new Matakuliah();
        $matakuliah->create($request->all());
        return redirect('/matakuliah')->with('status', 'Data Matakuliah Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $data['jurusan'] = Jurusan::pluck('nama_jurusan', 'kode_jurusan');
        $data['matakuliah'] = Matakuliah::where('kode_matkul', $id)->first();
        return view('matakuliah.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_matkul)
    {


        $matakuliah = Matakuliah::where('kode_matkul', '=', $kode_matkul)->first();
        $matakuliah->kode_matkul = $request->kode_matkul;
        $matakuliah->nama_mk = $request->nama_mk;
        $matakuliah->in_english_matkul = $request->in_english_matkul;
        $matakuliah->kode_jurusan = $request->kode_jurusan;
        $matakuliah->semester = $request->semester;
        $matakuliah->tahun_akademik = $request->tahun_akademik;
        $matakuliah->jml_sks = $request->jml_sks;
        $matakuliah->save();
        //$mahasiswa->update($request->except('_method','_token'));
        return redirect('/matakuliah')->with('status', 'Data Matakuliah Berhasil Di Update');;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_matkul)
    {
        $matakuliah = Matakuliah::where('kode_matkul', $kode_matkul);
        $matakuliah->delete();
        return redirect('/matakuliah')->with('status_delete', 'Data Matakuliah Berhasil Dihapus');;
    }
}
