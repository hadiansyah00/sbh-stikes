@extends('layouts.app')
@section('title', 'Edit Data Mahasiswa')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Mahasiswa</div>
                <div class="card-body">
                    {{ Form::model($mahasiswa,['url'=>'mahasiswa/'.$mahasiswa->nim,'method'=>'PUT'])}}
                        @csrf

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">NIM</label>
                            <div class="col-md-4">
                                {{ Form::text('nim',null,['class'=>'form-control']) }}
                            </div>
                        </div>
                        @include('mahasiswa.form')

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
