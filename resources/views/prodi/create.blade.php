@extends('layouts.app')
@section('title', 'Input Data Fakultas')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Input Data Fakultas</div>
                <div class="card-body">

                    @include('prodi.validation_error')

                    {{ Form::open(['url'=>'prodi'])}}
                        @csrf

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-2 col-form-label text-md-right">Kode Fakultas</label>
                            <div class="col-md-3">
                                {{ Form::text('kode_fakultas',null,['class'=>'form-control', 'placeholder' =>'Masukan Kode Fakultas']) }}
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
