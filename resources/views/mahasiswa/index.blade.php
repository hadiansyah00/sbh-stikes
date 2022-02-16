@extends('layouts.app')
@section ('title', 'Mahasiswa')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">@yield('title')</div>

                <div class="card-body">
                   @include('mahasiswa.alert')
    <a href="/mahasiswa/create" class=" btn btn-danger"> Input Data Baru Mahasiswa </a>
    <hr>

    <div class="container-fluid">

    <table class="table table-bordered table-hover" id="users-table">
    <thead>
            <tr>
                <th width="70">NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Jenjang</th>
                <th> Jurusan</th>
                <th> Semester Aktif</th>
                <th> Tahun Masuk</th>
                <th> Kelas </th>
                <th> Dosen Pembimbing</th>
                <th width="53">Action</th>
            </tr>
        </thead>
    </table></div>

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
        ajax: '/mahasiswa/json',
        columns: [
            { data: 'nim', name: 'nim' },
            { data: 'nama_mahasiswa', name: 'nama_mahasiswa' },
            { data: 'jenjang', name: 'jenjang' },
            { data: 'nama_jurusan', name: 'nama_jurusan' },
            { data: 'semester_aktif', name: 'semester_aktif' },
            { data: 'tahun_masuk', name: 'tahun_masuk' },
            { data: 'kelas', name: 'kelas' },
            { data: 'nama', name: 'nama' },
            { data: 'action', name: 'action' }
        ]
    });
});
</script>
@endpush
