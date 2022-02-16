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

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">Jenjang</label>
                            <div class="col-md-4">
                                    {{ Form::select('jenjang',$jenjang,null,['class'=>'form-control'])}}

                        </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">Kelas</label>
                            <div class="col-md-4">
                                    {{ Form::select('kelas',['Pagi'=>'pagi','Reguler'=>'reguler'],null,['class'=>'form-control'])}}

                        </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">Tahun Masuk</label>
                            <div class="col-md-8">
                                {{ Form::select('tahun_masuk',['2019'=>'2019','2020'=>'2020'],null,['class'=>'form-control'])}}
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





