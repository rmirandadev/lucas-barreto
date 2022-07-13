@extends('adminlte::page')

@section('title', env('APP_NAME') . ' - Videos')

@section('content_header')
    <h5 class="text-muted"><i class="fas fa-film"></i> Videos</h5>
@stop

@section('content')

    @include('admin.modals.admin.confirm-delete')

    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title mt-2">Listagem</h3>
            <div class="card-tools">
                <a href="{{route('video.create')}}" class="btn btn-success text-white"> <i class="fas fa-folder-plus"></i> Adicionar</a>
            </div>
        </div>
        @livewire('video-list')
    </div>
@stop

@push('css')
    @livewireStyles
@endpush

@section('js')
    @include('sweetalert::alert')
    @livewireScripts
    <script>
        $('table').on('click', '.form-delete', function(e){
            e.preventDefault();
            var $form=$(this);
            $('#confirm').modal({ backdrop: 'static', keyboard: false })
                .on('click', '#delete-btn', function(){
                    $form.submit();
                });
        });
    </script>
@stop
