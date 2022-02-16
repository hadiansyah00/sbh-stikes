
<div class="form-group row">
    <label class="col-md-2 col-form-label text-md-right">Program Studi</label>
    <div class="col-md-8">
            {{ Form::select('kode_jurusan',$jurusan,null,['class'=>'form-control'])}}
            {{--  {{ Form::hidden('kode_tahun',$tahunakademik->kode_tahun) }}  --}}
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label text-md-right">Semester</label>
    <div class="col-md-8">
            {{ Form::select('semester',['1'=>'Semester 1',
            '2'=>'Semester 2','3'=>'Semester 3','4'=>'Semester 4',
            '5'=>'Semester 5','6'=>'Semester 6','7'=>'Semester 7',
            '8'=>'Semester 8'],null,['class'=>'form-control'])}}
    </div>
</div>

<div class="form-group row">
        <label class="col-md-2 col-form-label text-md-right">Matakuliah</label>
        <div class="col-md-8">
                {{ Form::select('kode_matkul',$matakuliah,null,['class'=>'form-control'])}}
        </div>
</div>

<div class="form-group row">
        <label class="col-md-2 col-form-label text-md-right">Tahun Akademik</label>
        <div class="col-md-8">
                {{ Form::select('kode_tahun',$tahunakademik,null,['class'=>'form-control'])}}
        </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label text-md-right">Dosen Pengajar</label>
    <div class="col-md-8">
            {{ Form::select('kode_dosen',$dosen,null,['class'=>'form-control'])}}
    </div>
</div>

<div class="form-group row">
        <label class="col-md-2 col-form-label text-md-right">Ruangan</label>
        <div class="col-md-8">
                {{ Form::select('kode_ruangan',$ruangan,null,['class'=>'form-control'])}}
        </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label text-md-right">Hari & Jam</label>
    <div class="col-md-2">
        {{ Form::select('hari',$hari,null,['class'=>'form-control'])}}

    </div>
    <div class="col-md-4">
        {{ Form::select('id_jam',$jam_kuliah,null,['class'=>'form-control'])}}
    </div>
</div>
