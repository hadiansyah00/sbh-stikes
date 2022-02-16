<?php

namespace App\Http\Controllers;

use DataTables;
use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Jurusan;
use App\Dosen;

class MahasiswaController extends Controller
{
    function json()
    {
        $mahasiswa = \DB::table('mahasiswa')
            ->join('jurusan', 'mahasiswa.kode_jurusan', '=', 'jurusan.kode_jurusan')
            ->join('dosen', 'mahasiswa.kode_dosen', '=', 'dosen.kode_dosen')
            ->get();

        return Datatables::of($mahasiswa)

            ->addColumn('action', function ($row) {
                $action  = '<a href="/mahasiswa/' . $row->nim . '/edit" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>';
                $action .= \Form::open(['url' => 'mahasiswa/' . $row->nim, 'method' => 'delete', 'style' => 'float:right']);
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
        return view('mahasiswa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['jurusan'] = Jurusan::pluck('nama_jurusan', 'kode_jurusan');
        $data['dosen'] = Dosen::pluck('nama', 'kode_dosen');
        $data['jenjang'] = Jurusan::pluck('jenjang');
        return view('mahasiswa.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $messages = [
            'required' => ':attribute wajib diisi!!',
            'min' => ':attribute harus diisi minimal :min karakter ya!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya!!',
            'email' => ':email mohon tulis email dengan benar!!',
        ];

        $this->validate($request, [
            'nim'            => 'required|unique:mahasiswa|min:4',
            'nama_mahasiswa' => 'required|min:3',
            'email'          => 'required|email',
            'tempat_lahir'   => 'required|min:3',
            'alamat'         => 'required|min:3',
            // 'nama_ibu'       => 'required|min:3',
            // 'no_hp_ortu'     => 'required|min:3'

        ], $messages);

        $mahasiswa = new mahasiswa();
        $mahasiswa->create($request->all());
        return redirect('/mahasiswa')->with('status', 'Data mahasiswa Berhasil Disimpan');
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
        $data['dosen'] = Dosen::pluck('nama', 'kode_dosen');
        $data['jurusan'] = Jurusan::pluck('nama_jurusan', 'kode_jurusan');
        $data['jenjang'] = Jurusan::pluck('jenjang');
        $data['mahasiswa'] = Mahasiswa::where('nim', $id)->first();
        return view('mahasiswa.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nim)
    { {
            // $request->validate([
            //     'nama_mahasiswa' => 'required|min:6'
            // ]);


            $mahasiswa = Mahasiswa::where('nim', '=', $nim)->first();
            $mahasiswa->nim = $request->nim;
            $mahasiswa->nama_mahasiswa = $request->nama_mahasiswa;
            $mahasiswa->kode_dosen = $request->kode_dosen;
            $mahasiswa->email = $request->email;
            $mahasiswa->alamat = $request->alamat;
            $mahasiswa->semester_aktif = $request->semester_aktif;
            $mahasiswa->tahun_masuk = $request->tahun_masuk;
            $mahasiswa->kode_jurusan = $request->kode_jurusan;
            if ($request->password != '') {
                $mahasiswa->password = $request->password;
            }

            $mahasiswa->save();
            //$mahasiswa->update($request->except('_method','_token'));
            return redirect('/mahasiswa')->with('status', 'Data mahasiswa Berhasil Di Update');;
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim);
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('status_delete', 'Data Berhasil Dihapus');;
    }
}
