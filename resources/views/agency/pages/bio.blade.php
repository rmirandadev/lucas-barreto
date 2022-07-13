@extends('agency.master')

@push('meta')

@endpush

@push('css')
@endpush

@section('main')
    <main>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div><a href="{{ route('site.index') }}" class="text-yellow-psd"><i class="fas fa-home"></i> Início</a> / <a href="{{ route('site.post.index') }}" class="text-green-psd"><i class="fas fa-list-alt"></i> Biografia</a></div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="container bg-white my-5">
            <div class="row p-5">
                <div class="col-md-12">
                    <h4><strong>Biografia</strong></h4>
                    <hr class="mb-5">
                  {!! $bio->description !!}
                </div>
            </div>
        </div>
    </main>
@endsection

@push('js')
@endpush

