@extends('layouts.app')
@section('title', 'Input Data Dosen')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Input Data Kaprodi</div>
                <div class="card-body">
                    @include('validation_error')
                    {{ Form::open(['url'=>'kaprodi/'])}}
                        @csrf
                        {{-- {{ Form::model($dosen,['url'=>'dosen/'.$dosen->nidn,'method'=>'PUT'])}} --}}
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">NIDN </label>
                            <div class="col-md-6">
                                {{ Form::text('kode_kap',null,['class'=>'form-control', 'placeholder' =>'Kode Ketua Program Studi']) }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Nama KAPRODI</label>
                            <div class="col-md-6">
                                {{ Form::select('kode_dosen',$dosen,null,['class'=>'form-control',])}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Program Studi</label>
                            <div class="col-md-6">
                                {{ Form::select('kode_jurusan',$jurusan,null,['class'=>'form-control',]) }}
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
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
