<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:title" content="{{ env('APP_NAME') }}" />
    <meta property="og:description" content="Site Lucas Barreto Senador." />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://lucasbarretosenador.com.br" />
    <meta property="og:image" content="https://lucasbarretosenador.com.br/img/psd.jpg" />

    <meta property="og:locale" content="pt_BR" />
    <meta property="og:site_name" content="{{ env('APP_NAME') }}" />

    <meta name="description" content="Site Lucas Barreto Senador." />
    <meta name="keywords" content="Senador Amapá, Amapá, Lucas Senador, Lucas Barreto">
    @stack('meta')
    <link rel="stylesheet" href="{{ mix('css/lucas.min.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @stack('css')

    <title>{{ env('APP_NAME') }}</title>
</head>
<body>
<header>
    {{--INICIO TOPO UM--}}
    <div class="container-fluid bg-gray-light-psd text-muted py-3 text-end" id="topo_um">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-end">
                    <div class="mt-3">
                        <span class="me-3"><i class="fas fa-phone-alt"></i> (96) 0000-0000</span>
                        <span class="me-3"><i class="fas fa-envelope"></i> contato@senadorlucasbarreto.com.br</span>
                        <span class="socials">
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-youtube"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--FIM TOPO UM--}}

    {{--INICIO TOPO DOIS--}}
    <div class="container-fluid bg-blue-psd text-white py-3" id="topo_dois">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-blue-psd">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#"><strong>LUCAS BARRETO</strong> SENADOR</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse ms-md-5 "id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="{{ route('site.index') }}">Página inicial</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Lucas Barreto
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="{{ route('site.bio') }}">Biografia</a></li>
                                            <li><a class="dropdown-item" href="{{ route('site.tribute') }}">Condecorações / Homenagens</a></li>
                                            <li><a class="dropdown-item" href="{{ route('site.video.index') }}">Vídeos</a></li>
                                            <li><a class="dropdown-item" href="#">Página do Senado</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="#">Proposições</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="#">Emendas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="{{ route('site.post.index') }}">Notícias</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="#">Entre em Contato</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    {{--FIM TOPO DOIS--}}

    {{--INICIO MENU--}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>
    {{--FIM MENU--}}
</header>
@yield('main')
<footer class="mt-5">
    <div class="container-fluid text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <strong>LUCAS BARRETO</strong> SENADOR
                    <p>2022 @ Lucas Barreto. Todos Direitos Reservados.</p>
                    Senado Federal Anexo 1 | 10º Pavimento, Brasilia<br>
                    <hr>
                    contato@senadorlucasbarreto.com.br<br>
                    (61) 3303-6460 / 6399<br>
                </div>
                <div class="col-md-4 text-center">
                    <div class="socials-foot mt-3">
                        <i class="fab fa-instagram fa-1x"></i>
                        <i class="fab fa-twitter fa-1x"></i>
                        <i class="fab fa-facebook-f fa-1x"></i>
                        <i class="fab fa-youtube fa-1x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="{{ asset('js/app.js') }}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@stack('js')
</body>
</html>
