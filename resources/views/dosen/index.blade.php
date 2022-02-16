@extends('layouts.app')
@section ('title', 'Dosen')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">@yield('title')</div>

                <div class="card-body">
                   @include('dosen.alert')
<a href="/dosen/create" class=" btn btn-danger"> Input Data Baru </a>
<hr>
<table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th width="70">NIDN</th>
                <th>Kode Dosen</th>
                <th>Nama Dosen</th>
                <th>Nama Program Studi</th>
                {{--  <th>Program Studi</th>  --}}
                <th width="60">No. Telepon</th>
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
        ajax: '/dosen/json',
        columns: [
            { data: 'nidn',             name: 'nidn' },
            { data: 'kode_dosen',       name: 'kode_dosen' },
            { data: 'nama',             name: 'nama' },
            { data: 'nama_jurusan',     name: 'nama_jurusan' },
            { data: 'no_hp',            name: 'no_hp' },



            { data: 'action',           name: 'action' }
        ]
    });
});
</script>
@endpush
