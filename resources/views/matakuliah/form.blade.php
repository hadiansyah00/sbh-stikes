<div class="form-group row">
    <label for="password-confirm" class="col-md-2 col-form-label text-md-right">Nama Matakuliah</label>
    <div class="col-md-3">
        {{ Form::text('nama_mk',null,['class'=>'form-control', 'placeholder' =>'Masukan Nama Matakuliah']) }}
    </div>
</div>
<div class="form-group row">
    <label for="password-confirm" class="col-md-2 col-form-label text-md-right">In English Course</label>
    <div class="col-md-3">
        {{ Form::text('in_english_matkul',null,['class'=>'form-control']) }}
    </div>
</div>
<div class="form-group row">
    <label for="password-confirm" class="col-md-2 col-form-label text-md-right">Program Studi</label>
    <div class="col-md-3">
        {{ Form::select('kode_jurusan',$jurusan,null,['class'=>'form-control']) }}
    </div>
</div>
<div class="form-group row">
    <label for="password-confirm" class="col-md-2 col-form-label text-md-right">Semester</label>
    <div class="col-md-2">
        {{ Form::select('semester',['1'=>'Semester 1','2'=>'Semester 2','3'=>'Semester 3','4'=>'Semester 4','5'=>'Semester 5','6'=>'Semester 6','7'=>'Semester 7','8'=>'Semester 8'],null,['class'=>'form-control'])}}
    </div>
</div>

<div class="form-group row">
    <label for="password-confirm" class="col-md-2 col-form-label text-md-right">Tahun Akademik</label>
    <div class="col-md-2">
        {{ Form::select('tahun_akademik',['2016/2017'=>'2016/2017','2017/2018'=>'2017/2018',
        '2018/2019'=>'2018/2019','2019/2020'=>'2019/2020','2020/2021'=>'2020/2021','2021/2022'=>'2021/2022',
        '2022/2023'=>'2022/2023'],null,['class'=>'form-control'])}}
    </div>
</div>

<div class="form-group row">
    <label for="password-confirm" class="col-md-2 col-form-label text-md-right">Jumlah SKS </label>
    <div class="col-md-2">
        {{ Form::text('jml_sks',null,['class'=>'form-control', 'placeholder' =>'Jumlah SKS']) }}
    </div>
</div>
