<?php

namespace App\Http\Controllers;

use DataTables;
use Illuminate\Http\Request;
use App\Jurusan;

class JurusanController extends Controller
{
    function json()
    {

        return DataTables::of(Jurusan::all())
            ->addColumn('action', function ($row) {
                $action  = '<a href="/jurusan/' . $row->kode_jurusan . '/edit" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>';
                $action .= \Form::open(['url' => 'jurusan/' . $row->kode_jurusan, 'method' => 'delete', 'style' => 'float:right']);
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
        return view('jurusan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurusan.create');
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
            'kode_jurusan' => 'required|unique:jurusan|min:3',
            'nama_jurusan' => 'required|min:4',

        ]);


        $jurusan = new Jurusan();
        $jurusan->create($request->all());
        return redirect('/jurusan')->with('status', 'Data Jurusan Berhasil Disimpan');
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
        $data['jurusan'] = Jurusan::where('kode_jurusan', $id)->first();
        return view('jurusan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_jurusan)
    {
        $jurusan = Jurusan::where('kode_jurusan', '=', $kode_jurusan);
        $jurusan->update($request->except('_method', '_token'));
        return redirect('/jurusan')->with('status', 'Data Jurusan Berhasil Di Update');;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_jurusan)
    {
        $jurusan = Jurusan::where('kode_jurusan', $kode_jurusan);
        $jurusan->delete();
        return redirect('/jurusan')->with('status_delete', 'Data Jurusan Berhasil Dihapus');;
    }
}
