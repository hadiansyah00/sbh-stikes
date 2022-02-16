@extends('layouts.app')
@section ('title', 'Modul Kurikulum')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">@yield('title')</div>

                <div class="card-body">
                 {{ Form::open(['url'=>'kurikulum','method'=>'GET']) }}
                <table class = "table table-bordered">

            <tr>

                <td>Jurusan</td>
            <td>
            {{ Form::select('jurusan', $jurusan,$jurusan_terpilih,['class'=>'form-control'])}}
            </td>
            <tr>
                <td>Semester</td>
                <td>{{ Form::select('semester',['1'=>'Semester 1',
                    '2'=>'Semester 2',
                    '3'=>'Semester 3','
                    4'=>'Semester 4',
                    '5'=>'Semester 5',
                    '6'=>'Semester 6',
                    '7'=>'Semester 7',
                    '8'=>'Semester 8']
                    ,$semester_terpilih,['class'=>'form-control'])}}</td>
            </tr>

            <tr>
                <td>Tahun Akademik</td>
                <td>{{ Form::select('tahunakademik',$tahunakademik,$tahun_terpilih,['class'=>'form-control'])}}</td></tr>
            </tr>
    <td>
        <button type="submit" class="btn btn-danger">Cari Data Data </button>
        <a href="/kurikulum/create" class=" btn btn-danger"> Input Data Baru </a></td></tr>
</table>
@include('alert')
    <hr>
{{--  <thead>
    <table class="table table-light">
        <tr><td>Nama Kurikulum</td></tr>
        <tr><td>Program Study</td></tr>
        <tr><td>Tahun Ajaran</td></tr>

    @foreach (kurikulum as $row )
    <tr>
    <td>{{ $row->nama_kurikulum}}</td>
    <td>{{ $row->nama_jurusan }} </td>
    <td>{{ $row->tahun_akademik}}</td>
    </tr>
    @endforeach
</table>
</thead>  --}}


<table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th >Nama Kurikulum</th>
                <th align="center">Program Study</th>

                <th align="center">Semester</th>
                <th align="center">Tahun Akademik</th>
                <th width="53">Action</th>
            </tr>

            @foreach($kurikulum as $row)
            <tr>
                <td>{{ $row->nama_kurikulum }}</td>
                <td>{{ $row->nama_jurusan }}</td>
                <td>{{ $row->semester }}</td>
                <td>{{ $row->kode_tahun }}</td>
                {{--  <td align="center">{{ $row->jml_sks }}</td>  --}}
                <td>
                    {{ Form::open(['url'=>'kurikulum/'.$row->id_kurikulum,'method'=>'delete'])}}
                        <button type="submit" class="btn btn-info btn-sm"><i class='fas fa-trash-alt'></i></button>
                    {{--  {{ Form::close()}}
                    <a href="kurikulum/{{ $row->id }}/edit"><i class="fas fa-edit"></i>edit</a>
                </td>  --}}
                   {{--  {{ Form::close()}}
                    <a href="kurikulum/{{ $row->id }}/edit"><i class="fas fa-edit"></i>edit</a>
                </td>  --}}
            </tr>
        @endforeach

        </thead>
    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


