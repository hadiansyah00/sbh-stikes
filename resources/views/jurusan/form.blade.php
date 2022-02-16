<div class="form-group row">
    <label for="password-confirm" class="col-md-2 col-form-label text-md-right">Jurusan</label>
    <div class="col-md-4">
        {{ Form::text('nama_jurusan',null,['class'=>'form-control', 'placeholder' =>'Masukan Nama Jurusan']) }}
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label text-md-right">Jenjang</label>
    <div class="col-md-8">
        {{ Form::select('jenjang',['D3'=>'D3','S1'=>'S1'],null,['class'=>'form-control'])}}
    </div>
</div>
