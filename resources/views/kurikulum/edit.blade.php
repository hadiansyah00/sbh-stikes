@extends('layouts.app')
@section('title','Edit Data Kurikulum')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Kurikulum</div>

                <div class="card-body">
                    @include('kurikulum.validation_error')

                    {{ Form::model($jurusan,['url'=>'jurusan/'.$jurusan->kode_jurusan,'method'=>'PUT'])}}

                        @csrf

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">Nama Kurikulum</label>
                            <div class="col-md-6">
                                {{ Form::text('nama_kurikulum',null,['class'=>'form-control','placeholder'=>'Nama Kurikulum'])}}
                            </div>
                        </div>

                        @include('kurikulum.form')

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">

                                {{ Form::submit('Simpan Data',['class'=>'btn btn-primary'])}}
                                <a href="/jurusan" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
