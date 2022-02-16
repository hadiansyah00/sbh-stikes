@extends('layouts.mahasiswa')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Kurikulum Rencana Studi</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="row">
                            <div class="col-md-6">
                                <h6 align="center">Daftar Matakuliah</h6>
                                <hr>

                            <table class="table table-bordered" id="users-table">
                                <thead>
                                    <tr>
                                        <th width="70">Kode MK</th>
                                        <th>Nama Matkul</th>
                                        <th width="40">SKS</th>
                                        <th width="40">Semester</th>
                                        <th width="18"></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <button>Submit</button>
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
        ajax: '/krs/MatakuliahKurikulum',
        columns: [
            { data: 'kode_matkul', name: 'kode_matkul' },
            { data: 'nama_mk', name: 'nama_mk' },
            { data: 'jml_sks', name: 'jml_sks' },
            { data: 'action', name: 'action' }
        ]
    });
    tampil_krs();
});
</script>

<script>

    function tambah_krs(kode_matkul){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $.post("/krs/tambahKrs",
        {
          kode_matkul : kode_matkul,
          _token: CSRF_TOKEN
        },
        function(data, status){

            tampil_krs();

      });
    }

    function tampil_krs(){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.get("/krs/tampilKrs",
        {
          _token    :   CSRF_TOKEN
        },
        function(data, status){
            $("#list").html(data);
      });
    }

    function hapus_krs(id){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $.post("/krs/hapusKrs",
        {
          id : id,
          _token: CSRF_TOKEN
        },
        function(data, status){

            alert('berhasil di hapus')
          tampil_krs();

      });

    }
</script>
@endpush

