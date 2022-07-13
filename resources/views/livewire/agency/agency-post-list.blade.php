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
            @forelse($posts as $post)
                <div class="col-md-3 notice">
                    <div class="card">
                        <img src="{{ URL::asset('storage/posts/'.$post->image) }}" height="200" class="fakeImg w-100" alt="{{ $post->title }}">
                        <div class="card-body">
                            <div style="min-height: 150px">
                                <a href="{{ route('site.post.show',$post->slug) }}">
                                    <div class="small text-muted"><i class="fas fa-calendar-alt"></i> {{ $post->date_view }} </div>
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text sub text-muted small">{{ $post->subtitle }}</p>
                                </a>
                            </div>
                            <a href="{{ route('site.post.show',$post->slug) }}" class="btn btn-sm btn-blue-psd text-white"><i class="fas fa-book-reader"></i> Saiba mais</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-md-12">
                    <div class="alert alert-blue-psd" role="alert">
                        <i class="fas fa-exclamation-circle"></i> Sem notícias com estas referências
                    </div>
                </div>
            @endforelse
            <div class="col-md-12 mt-5">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
</div>
