@extends('adminlte::page')

@section('title', env('APP_NAME') . ' - Condecorações e Homenagens')

@section('content_header')
    <h5 class="text-muted"><i class="fas fa-id-card"></i> Condecorações e Homenagens</h5>
@stop

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                {!! Form::model($tribute, array('method' => 'PUT','route' => ['tribute.update', 1])) !!}
                <div class="card-header bg-info">Atualizar</div>
                <div class="card-body">
                    @include('admin.tribute._form')
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Salvar</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')
    @include('sweetalert::alert')
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
@stop
