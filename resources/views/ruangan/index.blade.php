@extends('layouts.app')
@section ('title', 'Ruangan')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">@yield('title')</div>

                <div class="card-body">
                   @include('ruangan.alert')
<a href="/ruangan/create" class=" btn btn-danger"> Input Data Baru </a>
<hr>
<table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th width="70">Kode Ruangan</th>
                <th>Nama Ruangan</th>
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
        ajax: '/ruangan/json',
        columns: [
            { data: 'kode_ruangan', name: 'kode_ruangan' },
            { data: 'nama_ruangan', name: 'nama_ruangan' },
            { data: 'action', name: 'action' }
        ]
    });
});
</script>
@endpush
