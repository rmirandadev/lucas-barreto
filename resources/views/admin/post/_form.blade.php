<div class="row">
    <div class="col-md-12 mb-3">
        {!! Form::label('title', 'Título'); !!}
        {!! Form::text('title',null,['class' => 'form-control' . ( $errors->has('title') ? ' is-invalid' : '' )]) !!}
        @error('title')
        <small class="form-text text-danger">{{ $errors->first('title') }}</small>
        @enderror
    </div>

    <div class="col-md-12 mb-3">
        {!! Form::label('subtitle', 'Subtítulo'); !!}
        {!! Form::text('subtitle',null,['class' => 'form-control' . ( $errors->has('subtitle') ? ' is-invalid' : '' )]) !!}
        @error('subtitle')
        <small class="form-text text-danger">{{ $errors->first('subtitle') }}</small>
        @enderror
    </div>

    <div class="col-md-4 mb-3">
        {!! Form::label('status', 'Status da notícia'); !!}
        {!! Form::select('status', \App\Models\Post::STATUS, null,['class' => 'form-control form-group select2','placeholder' => 'Selecione...']); !!}
        @error('status')
        <small class="form-text text-danger">{{ $errors->first('status') }}</small>
        @enderror
    </div>

    <div class="col-md-8 mb-3">
        {!! Form::label('image', 'Imagem - Largura minima 1200px'); !!}
        <div class="custom-file">
            {!! Form::file('image',['class' => 'input-group custom-file-input'. ( $errors->has('image') ? ' is-invalid' : '' )]) !!}
            {!! Form::label('image', 'Selecione uma foto',['class' => 'custom-file-label']); !!}
            @error('image')
            <small class="form-text text-danger">{{ $errors->first('image') }}</small>
            @enderror
        </div>
    </div>

    <div class="col-md-12 mb-3">
        {!! Form::label('image_legend', 'Legenda para a imagem'); !!}
        {!! Form::text('image_legend',null,['class' => 'form-control' . ( $errors->has('image_legend') ? ' is-invalid' : '' )]) !!}
        @error('image_legend')
        <small class="form-text text-danger">{{ $errors->first('image_legend') }}</small>
        @enderror
    </div>

    <div class="col-sm-12 mb-3">
        {!! Form::label('text', 'Texto'); !!}
        {!! Form::textarea('text',null,['class' => 'form-control', 'rows' => '5', 'name' => 'text']) !!}
        @error('text')
        <small class="form-text text-danger">{{ $errors->first('text') }}</small>
        @enderror
    </div>

    <div class="col-md-12 mb-3">
        {!! Form::label('user_id', 'Assessores'); !!}
        {!! Form::select('user_id[]', $users, $post->users ?? null,['multiple' => true, 'class' => 'form-control form-group select2']); !!}
        @error('user_id')
        <small class="form-text text-danger">{{ $errors->first('user_id') }}</small>
        @enderror
    </div>


</div>
