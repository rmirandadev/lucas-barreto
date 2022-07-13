@extends('agency.master')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <style>
        .banner {
            background-image: url({{ asset('images/lucas-banner.jpeg') }});
            background-size: cover;
            -moz-background-size: cover;  /* Firefox 3.6 */
            background-position: center;  /* Internet Explorer 7/8 */
            height: 350px;
            font-family: 'Roboto', sans-serif;
        }
    </style>
@endpush

@section('main')
    <main>
        @include('agency.modals.video-modal')

        {{--Banner--}}
        <div class="container-fluid banner mb-5"></div>

        <div class="container public-life">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center mb-5">
                    <h2 class="text-gey-secondary titles">Vida Pública</h2>
                    <h6 class="sub text-muted">{!! $life->description !!}</h6>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center my-5">
                    <h2 class="text-gey-secondary titles">Últimas Notícias</h2>
                    <h6 class="sub text-muted">Mantenha-se informado.</h6>
                </div>
            </div>

            <div class="row notice">
                <div class="col-md-12">
                    <div class="owl-carousel owl-post owl-theme" id="imageView">
                        @foreach($posts as $index => $post)
                            <div class="card" data-aos="fade-in" data-aos-delay="{{ 200 * $index }}" >
                                <img src="{{ URL::asset('storage/posts/'.$post->image) }}" height="250" class="fakeImg" alt="{{ $post->title }}">
                                <div class="card-body">
                                    <div style="min-height: 120px">
                                        <a href="{{ route('site.post.show',$post->slug) }}">
                                            <div class="small text-muted"><i class="fas fa-calendar-alt"></i> {{ $post->date_view }} </div>
                                            <h5 class="card-title">{{ $post->title }}</h5>
                                            <p class="card-text sub text-muted small">{{ $post->subtitle }}</p>
                                        </a>
                                    </div>
                                    <a href="{{ route('site.post.show',$post->slug) }}" class="btn btn-sm btn-blue-psd text-white"><i class="fas fa-book-reader"></i> Saiba mais</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <a href="{{ route('site.post.index') }}" class="btn btn-outline-dark btn-sm"><i class="fas fa-plus-circle"></i> Leia todas</a>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center my-4">
                        <h2 class="text-blue-psd titles">Vídeos e Entrevistas</h2>
                    </div>
                </div>
                <div class="row video">
                    @foreach($videos as $index => $video)
                    <div class="col-6 col-md-3">
                        <div class="card shadow-sm mb-3" data-aos="zoom-in" data-aos-delay="{{ 200 * $index }}">
                            <div class="card-body">
                                <a href="#" data-bs-toggle="modal" class="video-btn" data-src="https://www.youtube.com/embed/{{ $video->cod }}" data-bs-target="#myVideo">
                                    <img src="https://i.ytimg.com/vi/{{ $video->cod }}/mqdefault.jpg" width="100%" height="150" class="fakeImg" alt="">
                                    <h6 class="sub text-muted"><strong><i class="fas fa-play-circle"></i> {{ $video->name }}</strong></h6>
                                    <h6 class="text-muted small">{{ $video->text }}</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <a href="{{ route('site.video.index') }}" class="btn btn-outline-dark btn-sm"><i class="fas fa-plus-circle"></i> Veja todos</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('js')
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.owl-post').owlCarousel({
                loop:true,
                margin:20,
                autoplay: true,
                autoplayHoverPause: true,
                responsive:{0:{items:1}, 600:{items:2}, 1000:{items:3}}
            })

            //VIDEOS
            var $videoSrc;
            $('.video-btn').click(function() {
                $videoSrc = $(this).data( "src" );
            });

            $('#myVideo').on('shown.bs.modal', function (e) {

                $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" );
            });

            $('#myVideo').on('hide.bs.modal', function (e) {
                $("#video").attr('src',$videoSrc);
            });

            $('#imageView img').replaceWith(function(i, v){
                return $('<div/>', {
                    style: 'background-image: url(' + this.src + ');' +
                        'width:' + this.width + 'px;' +
                        'height:' + this.height + 'px;' ,
                    class: 'fakeImg'
                })
            })
        });
    </script>
@endpush

