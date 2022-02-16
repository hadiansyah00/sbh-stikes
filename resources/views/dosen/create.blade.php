@extends('layouts.app')
@section('title', 'Input Data Dosen')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Input Data Dosen</div>
                <div class="card-body">
                    @include('validation_error')
                    {{ Form::open(['url'=>'dosen/'])}}
                        @csrf
                        {{-- {{ Form::model($dosen,['url'=>'dosen/'.$dosen->nidn,'method'=>'PUT'])}} --}}
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">NIDN</label>
                            <div class="col-md-2">
                                {{ Form::text('nidn',null,['class'=>'form-control', 'placeholder' =>'NIDN']) }}
                            </div>
                        </div>

                       @include('dosen.form')

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                {{ Form::submit('Simpan data',['class'=>'btn btn-primary'])}}
                                <a href="/dosen" class = "btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
