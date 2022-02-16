@extends('layouts.app')
@section('title', 'Input Data Kurikulum')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Input Data Kurikulum</div>
                <div class="card-body">

                    {{ Form::open(['url'=>'kurikulum'])}}
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">Nama Kurikulum</label>
                            <div class="col-md-8">
                                {{ Form::text('nama_kurikulum',null,['class'=>'form-control', 'placeholder' =>'Masukan Nama Kurikulum']) }}
                            </div>
                        </div>

                        @include('kurikulum.alert')
                        @include('kurikulum.form')

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                {{ Form::submit('Simpan data',['class'=>'btn btn-primary'])}}
                                <a href="/kurikulum" class = "btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
