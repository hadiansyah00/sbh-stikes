@extends('layouts.app')
@section ('title', 'Ketua Program')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">@yield('title')</div>

                <div class="card-body">
                   @include('alert')
<a href="/kaprodi/create" class=" btn btn-danger"> Tambah Data Baru </a>
<hr>
<table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th> NIDN</th>
                <th>Nama KAPRODI</th>
                <th>Program Studi</th>
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
        ajax: '/kaprodi/json',
        columns: [
            { data: 'kode_kap', name: 'kode_kap' },
            { data: 'nama', name: 'nama' },
            { data: 'nama_jurusan', name: 'nama_jurusan' },
            { data: 'action', name: 'action' }
        ]
    });
});
</script>
@endpush
