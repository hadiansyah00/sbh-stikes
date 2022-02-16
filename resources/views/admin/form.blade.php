
<div class="form-group row">
    <label  class="col-md-4 col-form-label text-md-right">Email</label>
    <div class="col-md-4">
        {{ Form::email('email',null,['class'=>'form-control', 'placeholder' =>'Email']) }}
    </div>
</div>

<div class="form-group row">
    <label class="col-md-4 col-form-label text-md-right">Password</label>
    <div class="col-md-4">
        {{ Form::password('password',['class'=>'form-control','placeholder'=>'Password'])}}
    </div>
    </div>
