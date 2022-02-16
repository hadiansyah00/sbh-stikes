@extends('layouts.app')
@section('title', 'Edit Data Dosen')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Dosen</div>
                <div class="card-body">

                    @include('validation_error')

                    {{ Form::model($kaprodi,['url'=>'kaprodi/'.$kaprodi->kode_kap,'method'=>'PUT'])}}
                        @csrf

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Kode Ketua Program Studi </label>
                            <div class="col-md-6">
                                {{ Form::text('kode_kap',null,['class'=>'form-control', 'placeholder' =>'Kode Ketua Program Studi']) }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Ketua Program Studi</label>
                            <div class="col-md-6">
                                {{ Form::select('kode_dosen',$dosen,null,['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Program Studi</label>
                            <div class="col-md-6">
                                {{ Form::select('kode_jurusan',$jurusan,null,['class'=>'form-control',]) }}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                {{ Form::submit('Simpan data',['class'=>'btn btn-primary'])}}
                                <a href="/kaprodi" class = "btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
