<div class="form-group row">
    <label class="col-md-2 col-form-label text-md-right">Username</label>
    <div class="col-md-6 ">
        {{ Form::text('username',null,['class'=>'form-control','placeholder'=>'Username'])}}
    </div>
</div>
<div class="form-group row">
    <label class="col-md-2 col-form-label text-md-right">Nama Mahasiswa</label>
    <div class="col-md-6 ">
        {{ Form::text('nama_mahasiswa',null,['class'=>'form-control','placeholder'=>'Nama Lengkap'])}}
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label text-md-right">Jenis Kelamin</label>
    <div class="col-md-4">
            {{ Form::select('jenis_kelamin',['pria'=>'Pria','wanita'=>'Wanita','lainnya'=>'Lainnya', ],null,['class'=>'form-control'])}}
    </div>
</div>
<div class="form-group row">
    <label class="col-md-2 col-form-label text-md-right">Agama</label>
    <div class="col-md-4">
            {{ Form::select('agama',['Islam'=>'Islam','Hindu'=>'Hindu','Nasrani'=>'Nasrani','Katolik'=>'Katolik','Buddha'=>'Budha','Konghucu'=>'Konghucu'],null,['class'=>'form-control'])}}
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label text-md-right">Tempat & Tgl Lahir</label>
    <div class="col-md-3">
            {{ Form::text('tempat_lahir',null,['class'=>'form-control','placeholder'=>'Tempat lahir'])}}
    </div>
    <div class="col-md-3">
            {{ Form::date('tanggal_lahir',null,['class'=>'form-control','datepicker'])}}
    </div>
</div>
<div class="form-group row">
<label class="col-md-2 col-form-label text-md-right">Alamat</label>
<div class="col-md-6">
    {{ Form::textarea('alamat',null,['class'=>'form-control','placeholder'=>'Alamat Lengkap'])}}
</div>
</div>
<hr>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Informasi Akademik</div>
                <div class="card-body">



                    <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right">Dosen Pembimbing</label>
                            <div class="col-md-4">
                                    {{ Form::select('kode_dosen',$dosen,null,['class'=>'form-control'])}}

                        </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">Nama Jurusan</label>
                            <div class="col-md-4">
                                    {{ Form::select('kode_jurusan',$jurusan,null,['class'=>'form-control'])}}

                        </div>
                        </div>
{{--
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">Jenjang</label>
                            <div class="col-md-4">
                                    {{ Form::select('jenjang',$jenjang,null,['class'=>'form-control'])}}

                        </div>
                        </div>  --}}

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">Kelas</label>
                            <div class="col-md-4">
                                    {{ Form::select('kelas',['Pagi'=>'pagi','Reguler'=>'reguler'],null,['class'=>'form-control'])}}

                        </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">Semester</label>
                            <div class="col-md-8">
                                    {{ Form::select('semester_aktif',['1'=>'Semester 1','2'=>'Semester 2','3'=>'Semester 3','4'=>'Semester 4','5'=>'Semester 5','6'=>'Semester 6','7'=>'Semester 7','8'=>'Semester 8'],null,['class'=>'form-control'])}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">Tahun Masuk</label>
                            <div class="col-md-8">
                                {{ Form::select('tahun_masuk',['2018'=>'2018','2019'=>'2019','2020'=>'2020','2021'=>'2021','2022'=>'2022'],null,['class'=>'form-control'])}}
                            </div>
                            </div>
                    <div class="form-group row">
                    <label class="col-md-2 col-form-label text-md-right">Email</label>
                    <div class="col-md-8">
                        {{ Form::email('email',null,['class'=>'form-control','placeholder'=>'Email'])}}
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-md-2 col-form-label text-md-right">Password</label>
                    <div class="col-md-8">
                        {{ Form::password('password',['class'=>'form-control','placeholder'=>'Password'])}}
                    </div>
                    </div>


                    </div>
                </div>
          </div>
     </div>
    </div>




</div>





{{--  @include('mahasiswa.form_orangtua')
<br></br>
<hr>
@include('mahasiswa.form_sekolah')
<hr>
@include('mahasiswa.form_informasi')  --}}

