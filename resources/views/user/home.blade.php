@extends('layouts.app')

@section('content')
    <div class="container-scroller">
        @include('layouts.user.menu')
        <div class="container-fluid page-body-wrapper">
            @include('layouts.user.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <header id="header" class="header" style="padding-top: 1rem;">
                            <div class="container text-center">
                                <div class="row">
                                    <div class="text-container">
                                        <h2 class="card-title">Chegou e Comeu, vem com o CHE CO</h2><br>
                                        <p class="card-text">Com o CHE CO não é necessário esperar em filas, basta
                                            apenas
                                            reservar a refeição e
                                            a mesa, chegar e comer.</p><br>
                                        <p  class="card-h1">Escolha um dos estabelecimentos listados abaixo e faça sua reserva!</p>
                                        <div class="container text-center">
                                            <div id="services" class="cards-1 bg-red">
                                                <div class="container">
                                                    <div class="col-lg-12">
                                                        <div id="row">
                                                            @if (isset($establishments) && !empty($establishments))
                                                                @foreach ($establishments as $est)
                                                                    <div id="column">
                                                                        <div class="card mb-3" id="card">
                                                                            <div class="row g-0">
                                                                                <div class="col-md-4">
                                                                                    <img src="data:image;base64, {{ $est->profile_image }}"
                                                                                        class="img-fluid rounded-start"
                                                                                        alt="..." style="height:100%">
                                                                                </div>
                                                                                <div class="col-md-8">
                                                                                    <div class="card-body">
                                                                                        <h5 class="card-title">
                                                                                            {{ $est->name }}</h5>
                                                                                        <p class="card-text">Telefone:
                                                                                            {{ $est->cellphone }}
                                                                                            <br>E-mail:
                                                                                            {{ $est->email }}
                                                                                        </p>
                                                                                        <p>
                                                                                          Avaliação: {{$est->score_final}}
                                                                                        </p>
                                                                                        <p class="card-text">
                                                                                            <small class="text-muted"><a
                                                                                                    class="btn-solid-sm"
                                                                                                    href="{{ route('user.management.reserve', $est->id) }}">
                                                                                                    Ver produtos</a>
                                                                                            </small>
                                                                                            <small class="text-muted">
                                                                                                <a class="btn-solid-sm"
                                                                                                    title="Avaliações"
                                                                                                    data-toggle="modal"
                                                                                                    data-target="#avaliable-{{ $est->id }}">
                                                                                                    Avaliações
                                                                                                </a>
                                                                                            </small>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @include('user.modal')
                                                                @endforeach
                                                            @else
                                                                <h5>Não há registros de estabelecimentos.</h5>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </header>
    </div>
    </div>
    </div>
@endsection
@section('javascript')
    function myFunction() {
    document.getElementById("teste").innerHTML = "Hello World";
    }
@endsection
