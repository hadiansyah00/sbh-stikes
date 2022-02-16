<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProgramStudi;
use DataTables;

class ProgramStudiController extends Controller
{
    function json()
    {
        return Datatables::of(ProgramStudi::all())
            ->addColumn('action', function ($row) {
                $action  = '<a href="/prodi/' . $row->kode_fakultas . '/edit" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>';
                $action .= \Form::open(['url' => 'prodi/' . $row->kode_fakultas, 'method' => 'delete', 'style' => 'float:right']);
                $action .= "<button type='submit'class='btn btn-danger btn-sm'><i class='fas fa-trash-alt'></i></button>";
                $action .= \Form::close();
                return $action;
            })
            ->make(true);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('prodi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prodi.create');
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $prodi = new ProgramStudi();
        $prodi->create($request->all());
        return redirect('/prodi')->with('status', 'Data Program Studi Berhasil Disimpan');
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
    public function edit($kode_fakultas)
    {
        $data['prodi'] = ProgramStudi::where('kode_fakultas', $kode_fakultas)->first();
        return view('prodi.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_fakultas)
    {

        $prodi = ProgramStudi::where('prodi', '=', $kode_fakultas);
        $prodi->update($request->except('_method', '_token'));
        return redirect('/prodi')->with('status', 'Data prodi Berhasil Di Update');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_fakultas)
    {
        $prodi = ProgramStudi::where('kode_fakultas', $kode_fakultas);
        $prodi->delete();
        return redirect('/prodi')->with('status', 'Data prodi Berhasil Dihapus');;
    }
}
