<div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div><a href="{{ route('site.index') }}" class="text-yellow-psd"><i class="fas fa-home"></i> Início</a> / <a href="{{ route('site.post.index') }}" class="text-green-psd"><i class="fas fa-list-alt"></i> Notícias</a></div>
                <hr>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row my-3">
            <div class="col-md-9">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Procurar" wire:model.debounce.300ms="search">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <select wire:model="orderAsc" class="form-select mb-2">
                    <option value="1">Decrescente</option>
                    <option value="0">Crescente</option>
                </select>
            </div>
        </div>
        <div class="row">
            @forelse($videos as $index => $video)
                <div class="col-6 col-md-3">
                    <div class="card shadow-sm mb-3">
                        <div class="card-body">
                            <a href="#" data-bs-toggle="modal" class="video-btn" data-src="https://www.youtube.com/embed/{{ $video->cod }}" data-bs-target="#myVideo">
                                <img src="https://i.ytimg.com/vi/{{ $video->cod }}/mqdefault.jpg" width="100%" height="150" class="fakeImg" alt="">
                                <h6 class="sub text-muted"><strong><i class="fas fa-play-circle"></i> {{ $video->name }}</strong></h6>
                                <h6 class="text-muted small">{{ $video->text }}</h6>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-md-12">
                    <div class="alert alert-blue-psd" role="alert">
                        <i class="fas fa-exclamation-circle"></i> Sem vídeos com estas referências
                    </div>
                </div>
            @endforelse
            <div class="col-md-12 mt-5">
                {!! $videos->links() !!}
            </div>
        </div>
    </div>
</div>
