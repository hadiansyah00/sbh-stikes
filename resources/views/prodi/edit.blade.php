@extends('layouts.app')
@section('title', 'Edit Data Fakultas')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Fakultas</div>
                <div class="card-body">
                    {{ Form::model($prodi,['url'=>'prodi/'.$prodi->kode_fakultas,'method'=>'PUT'])}}
                        @csrf

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">Kode Fakultas</label>
                            <div class="col-md-3">
                                {{ Form::text('kode_fakultas',null,['class'=>'form-control', 'placeholder' =>'Masukan Kode Fakultas','disabled']) }}
                            </div>
                        </div>
                        @include('prodi.form')

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                {{ Form::submit('Simpan data',['class'=>'btn btn-primary'])}}
                                <a href="/prodi" class = "btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
