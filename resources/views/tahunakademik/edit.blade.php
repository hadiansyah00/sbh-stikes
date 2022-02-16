@extends('layouts.app')
@section('title', 'Edit Data Ruangan')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Ruangan</div>
                <div class="card-body">
                    {{ Form::model($tahunakademik,['url'=>'tahunakademik/'.$tahunakademik->kode_tahun,'method'=>'PUT'])}}
                        @csrf

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-2 col-form-label text-md-right">Kode</label>
                            <div class="col-md-4">
                                {{ Form::text('kode_tahun',null,['class'=>'form-control', 'placeholder' =>'Tahun Akademik']) }}
                            </div>
                        </div>
                        @include('tahunakademik.form')

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                {{ Form::submit('Simpan data',['class'=>'btn btn-primary'])}}
                                <a href="/tahunakademik" class = "btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
