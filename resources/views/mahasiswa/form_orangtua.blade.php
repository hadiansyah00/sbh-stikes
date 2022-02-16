<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Indentitas Orang Tua</div>
                <div class="card-body">


                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right">Nama Ayah</label>
                        <div class="col-md-6 ">
                            {{ Form::text('nama_ayah',null,['class'=>'form-control'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right">Nama Ibu</label>
                        <div class="col-md-6 ">
                            {{ Form::text('nama_ibu',null,['class'=>'form-control'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right">Pekerjaan Orang Tua</label>
                        <div class="col-md-6">
                                {{ Form::text('kerja_ortu',null,['class'=>'form-control'])}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right">Nomor Telp. Orang Tua</label>
                        <div class="col-md-6">
                                {{ Form::number('no_hp_ortu',null,['class'=>'form-control'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-md-3 col-form-label text-md-right">Alamat Orang Tua</label>
                    <div class="col-md-6">
                        {{ Form::textarea('alamat_ortu',null,['class'=>'form-control','placeholder'=>'Alamat Lengkap'])}}
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
