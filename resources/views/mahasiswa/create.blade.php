@extends('layouts.app')
@section('title', 'Input Data Mahasiswa')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h2 align="center" >Modul Data Mahasiswa</h2>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Identitas Mahasiswa</div>
                <div class="card-body">
                    @include('validation_error')

                    {{ Form::open(['url'=>'mahasiswa'])}}
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">NIM</label>
                            <div class="col-md-4">
                                {{ Form::text('nim',null,['class'=>'form-control', 'placeholder' =>'Masukan NIM']) }}
                            </div>
                        </div>

                       @include('mahasiswa.form')

                        <br></br>
                       <hr>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                {{ Form::submit('Simpan data',['class'=>'btn btn-primary'])}}
                                <a href="/mahasiswa" class = "btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
