<div class="row">
    <div class="col-md-12 mb-3">
        {!! Form::label('description', 'Vida Pública'); !!}
        {!! Form::textarea('description',null,['class' => 'form-control' . ( $errors->has('description') ? ' is-invalid' : '' )]) !!}
        @error('description')
        <small class="form-text text-danger">{{ $errors->first('description') }}</small>
        @enderror
    </div>
</div>
