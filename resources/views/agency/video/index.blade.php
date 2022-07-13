@extends('agency.master')

@push('meta')

@endpush

@push('css')
    @livewireStyles
@endpush

@section('main')
    <main>
        @include('agency.modals.video-modal')
        @livewire('agency-video-list')
    </main>
@endsection

@push('js')
    @livewireScripts
    <script>
        $(document).ready(function (){
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
        })
    </script>
@endpush

