<div class="form-group col-md-12">
    {{ Form::label('first_name', null, ['class' => '']) }}
    {{ Form::text('first_name', null, ['class' => 'form-control '. ($errors->has('first_name') ? 'is-invalid' : '') ] ) }}
    <span class="invalid-feedback">
         {{ $errors->first('first_name') }}
    </span>
</div>
<div class="form-group col-md-12">
    {{ Form::label('last_name', null, ['class' => '']) }}
    {{ Form::text('last_name', null, ['class' => 'form-control '. ($errors->has('last_name') ? 'is-invalid' : '') ] ) }}
    <span class="invalid-feedback">
         {{ $errors->first('last_name') }}
    </span>
</div>
<div class="form-group col-md-12">
    {{ Form::label('phone', null, ['class' => '']) }}
    {{ Form::text('phone', null, ['class' => 'form-control '. ($errors->has('phone') ? 'is-invalid' : '') ] ) }}
    <span class="invalid-feedback">
         {{ $errors->first('phone') }}
    </span>
</div>
<div class="form-group col-md-12">
    {{ Form::label('facebook', null, ['class' => '']) }}
    {{ Form::text('facebook', null, ['class' => 'form-control '. ($errors->has('facebook') ? 'is-invalid' : '') ] ) }}
    <span class="invalid-feedback">
         {{ $errors->first('facebook') }}
    </span>
</div>
<div class="form-group col-md-12">
    {{ Form::label('instagram', null, ['class' => '']) }}
    {{ Form::text('instagram', null, ['class' => 'form-control '. ($errors->has('instagram') ? 'is-invalid' : '') ] ) }}
    <span class="invalid-feedback">
         {{ $errors->first('instagram') }}
    </span>
</div>
<div class="form-group col-md-12">
    {{ Form::label('linkedin', null, ['class' => '']) }}
    {{ Form::text('linkedin', null, ['class' => 'form-control '. ($errors->has('linkedin') ? 'is-invalid' : '') ] ) }}
    <span class="invalid-feedback">
         {{ $errors->first('linkedin') }}
    </span>
</div>

<div class="form-group col-md-12">
    {{ Form::label('Archivos', null, ['class' => 'form-label mt-1']) }}
    {{ Form::file('file', ['class' => 'form-control', 'accept' => 'image/*']) }}
</div>