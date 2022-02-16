@extends('layouts.app')
@section ('title', 'Tahun Akademik')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">@yield('title')</div>

                <div class="card-body">
                   @include('tahunakademik.alert')
<a href="/tahunakademik/create" class=" btn btn-danger"> Input Data Baru </a>
<hr>
<table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th width="70">Kode</th>
                <th>Tahun Akademik</th>
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
        ajax: '/tahunakademik/json',
        columns: [
            { data: 'kode_tahun', name: 'kode_tahun' },
            { data: 'nama_tahun', name: 'nama_tahun' },
            { data: 'action', name: 'action' }
        ]
    });
});
</script>
@endpush
