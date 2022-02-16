@extends('layouts.app')
@section ('title', 'Program Studi')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@yield('title')</div>

                <div class="card-body">
                   @include('prodi.alert')
<a href="/prodi/create" class=" btn btn-danger"> Input Data Baru </a>
<hr>
<table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Kode Program Studi</th>
                <th>Nama Program Studi</th>
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
        ajax: '/prodi/json',
        columns: [
            { data: 'kode_fakultas', name: 'kode_fakultas' },
            { data: 'nama_fakultas', name: 'nama_fakultas' },
            { data: 'action', name: 'action' }
        ]
    });
});
</script>
@endpush
