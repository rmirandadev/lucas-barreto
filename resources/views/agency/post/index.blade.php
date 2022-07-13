@extends('agency.master')

@push('meta')

@endpush

@push('css')
    @livewireStyles
@endpush

@section('main')
    <main>
        @livewire('agency-post-list')
    </main>
@endsection

@push('js')
    @livewireScripts
@endpush

