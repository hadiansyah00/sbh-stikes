<div class="form-group row">
    <label class="col-md-2 col-form-label text-md-right">Kode Dosen</label>
    <div class="col-md-2">
        {{ Form::text('kode_dosen',null,['class'=>'form-control','placeholder'=>'Kode Dosen'])}}
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label text-md-right">Nama Dosen</label>
    <div class="col-md-4">
        {{ Form::text('nama',null,['class'=>'form-control','placeholder'=>'Nama Dosen'])}}
    </div>
</div>


<div class="form-group row">
    <label class="col-md-2 col-form-label text-md-right">Telepon</label>
    <div class="col-md-4">
        {{ Form::text('no_hp',null,['class'=>'form-control','placeholder'=>'Nomor Telepon'])}}
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label text-md-right">Alamat</label>
    <div class="col-md-8">
        {{ Form::textarea('alamat',null,['class'=>'form-control','placeholder'=>'Alamat'])}}
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label text-md-right">Program Study</label>
    <div class="col-md-8">
            {{ Form::select('kode_jurusan',$jurusan,null,['class'=>'form-control'])}}
</div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label text-md-right">Email</label>
    <div class="col-md-4">
        {{ Form::email('email',null,['class'=>'form-control','placeholder'=>'email'])}}
    </div>
</div>

<div class="form-group row">
    <label  class="col-md-2 col-form-label text-md-right">Password</label>
    <div class="col-md-4">
        {{ Form::password('password',['class'=>'form-control','placeholder'=>'Password'])}}
    </div>
</div>



    </div>


</div>










