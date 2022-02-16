@extends('layouts.app')
@section('title', 'Edit Data User')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data User</div>
                <div class="card-body">
                    {{ Form::model($user,['url'=>'admin/'.$user->username,'method'=>'PUT'])}}
                        @csrf

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">Nama</label>
                            <div class="col-md-3">
                                {{ Form::text('nama',null,['class'=>'form-control', 'placeholder' =>'Nama']) }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Username </label>
                            <div class="col-md-4">
                                {{ Form::text('username',null,['class'=>'form-control', 'placeholder' =>'Masukan Username']) }}
                            </div>
                        </div>
                        @include('admin.form')

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                {{ Form::submit('Simpan data',['class'=>'btn btn-primary'])}}
                                <a href="/matakuliah" class = "btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
