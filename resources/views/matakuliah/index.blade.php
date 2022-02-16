@extends('layouts.app')
@section ('title', 'Matakuliah')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">@yield('title')</div>

                <div class="card-body">
                   @include('matakuliah.alert')
<a href="/matakuliah/create" class=" btn btn-danger"> Input Data Baru </a>
<hr>
<table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th width="70">Kode MK</th>
                <th>Nama Matakuliah</th>
                <th><strong> <i>English course</i></strong></th>
                <th>Program Study</th>
                <th width="50">Semester</th>
                <th width="40">SKS</th>
                <th> Tahun Akademik </th>
                <th width="53">Action</th>
            </tr>
        </thead>
    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/matakuliah/json',
        columns: [
            { data: 'kode_matkul', name: 'kode_matkul' },
            { data: 'nama_mk', name: 'nama_mk' },
            { data: 'in_english_matkul', name: 'in_english_matkul' },
            { data: 'nama_jurusan', name: 'nama_jurusan' },
            { data: 'semester', name: 'semester' },
            { data: 'jml_sks', name: 'jml_sks' },
            { data: 'tahun_akademik', name: 'tahun_akademik' },
            { data: 'action', name: 'action' }
        ]
    });
});
</script>
@endpush
