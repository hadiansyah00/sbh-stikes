@extends('layouts.app')
@section ('title', 'Jurusan')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">@yield('title')</div>

                <div class="card-body">
                   @include('jurusan.alert')
<a href="/jurusan/create" class=" btn btn-danger"> Input Data Baru </a>
<hr>
<table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th width="70">Kode PRODI</th>
                <th>Program Studi</th>
                <th> Jenjang</th>
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
        ajax: '/jurusan/json',
        columns: [
            { data: 'kode_jurusan', name: 'kode_jurusan' },
            { data: 'nama_jurusan', name: 'nama_jurusan' },
            { data: 'jenjang', name: 'jenjang' },
            { data: 'action', name: 'action' }
        ]
    });
});
</script>
@endpush
