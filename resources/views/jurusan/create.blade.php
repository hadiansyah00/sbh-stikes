@extends('layouts.app')
@section('title', 'Input Data Jurusan')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Input Data Jurusan</div>
                <div class="card-body">

                    @include('jurusan.validation_error')

                    {{ Form::open(['url'=>'jurusan'])}}
                        @csrf

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-2 col-form-label text-md-right">Kode Jurusan</label>
                            <div class="col-md-4">
                                {{ Form::text('kode_jurusan',null,['class'=>'form-control', 'placeholder' =>'Masukan Kode Jurusan']) }}
                            </div>
                        </div>

                       @include('jurusan.form')

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                {{ Form::submit('Simpan data',['class'=>'btn btn-primary'])}}
                                <a href="/jurusan" class = "btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
