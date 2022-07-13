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
                    <div><a href="{{ route('site.index') }}" class="text-yellow-psd"><i class="fas fa-home"></i> Início</a> / <a href="{{ route('site.post.index') }}" class="text-green-psd"><i class="fas fa-list-alt"></i> Notícias</a></div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="container bg-white my-5">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{URL::asset('storage/posts/'.$post->image) }}" style="width: 100%" class="img-fluid p-5" alt="">
                </div>
            </div>

            <div class="row px-5">
                <div class="col-md-12">

                    <div class="small text-muted"><i class="fas fa-user"></i> {{ $post->user->name }} <span class="px-2">/</span> <i class="fas fa-calendar-alt"></i> {{ $post->date_view }} <span class="px-2">/</span> <i class="fa fa-eye"></i> {{ $post->clicks }} </div>
                    <h2 class="text-blue-psd mt-4"><strong>{{ $post->title }}</strong></h2>
                    <p>{{ $post->subtitle }}</p>

                    <div style="line-height: 30px !important;" class="mb-5">{!! $post->text !!}</div>

                </div>
            </div>
        </div>
    </main>
@endsection

@push('js')
@endpush

