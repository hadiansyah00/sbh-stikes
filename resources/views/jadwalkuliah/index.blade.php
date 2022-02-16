@extends('layouts.app')
@section('title', 'Input Data Jadwal kuliah')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Input Jadwal Kuliah </div>
                <div class="card-body">

                <div class ="row">
                <div class="col-md-8">

                            {{ Form::open(['url'=>'jadwalkuliah','method'=>'GET'])}}

                            @csrf

                            <table class="table table-bordered">
                            <tr>
                                <td>Jurusan</td>
                                <td>{{ Form::select('jurusan',$jurusan,$jurusan_terpilih,['class'=>'form-control'])}}</td></tr>
                            <tr>
                                <td>Semester</td>
                                <td>{{ Form::select('semester',['1'=>'Semester 1','2'=>'Semester 2','3'=>'Semester 3','4'=>'Semester 4','5'=>'Semester 5','6'=>'Semester 6','7'=>'Semester 7','8'=>'Semester 8'],$semester_terpilih,['class'=>'form-control'])}}</td>
                            </tr>

                            <tr>
                                <td>Tahun Akademik</td>
                                <td>{{ Form::select('tahunakademik',$tahunakademik,$tahun_terpilih,['class'=>'form-control'])}}</td></tr>



                            <tr>
                                <td colspan="2">
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-plus-square"></i> Cari Data</button>
                                    <a href="/jadwalkuliah/create" class="btn btn-danger"><i class="fas fa-plus-square"></i> Tambah Jadwal</a>
                                </td></tr>
                        </table>
                          </form>
                        </div>

                            <hr>

                                <table class="table table-bordered">
                                <tr><th>No</th>
                                    <th>HARI</th>
                                    <th>JAM</th>
                                    <th>MATAKULIAH</th>
                                    <th>PENGAJAR</th>
                                    <th>RUANG</th>
                                    <th>AKSI</th>
                                    {{-- <th>AKSI</th></tr> --}}

                                    @php $no = 1; @endphp
                                    @foreach($jadwal as $row)
                                    <tr>
                                        <th>{{ $no++ }}</th>
                                        <td>{{ $row->hari }}</td>
                                        <td>{{ $row->jam }}</td>
                                        <td>{{ $row->nama_mk }}</td>
                                        <td>{{ $row->nama }}</td>
                                        <td>{{ $row->nama_ruangan }}</td>
                                        <td>
                                        {{ Form::open(['url'=>'jadwalkuliah/'.$row->id,'method'=>'delete'])}}
                                            <button type="submit" class="btn btn-danger btn-sm"><i class='fas fa-trash-alt'></i></button>
                                        {{ Form::close()}}
                                        <a href="jadwalkuliah/{{ $row->id }}/edit"><i class="fas fa-edit"></i>edit</a>
                                        </td>





                                    <tr>
                                    @endforeach
                            </table>

                        </div>
                    </div>
                     </div>
                 </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
