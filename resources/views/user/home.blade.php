@extends('layouts.app')

@section('content')
<div class="container-scroller">
    @include('layouts.user.menu')
    <div class="container-fluid page-body-wrapper">
        @include('layouts.user.sidebar')
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <header id="header" class="header">
                        <div class="container text-center">
                            <div class="row">
                                <div class="text-container">
                                    <h2 class="card-title">Chegou e Comeu, vem com o CHE CO</h2><br>
                                    <p class="card-text">Com o CHE CO não é necessário esperar em filas, basta apenas
                                        reservar a refeição e
                                        a mesa, chegar e comer.</p><br>
                                    <div class="container text-center">
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control"
                                                placeholder="Pesquise o estabelecimento ou item">
                                            <button class="dropbtn" id="calendar">Check-in: </button>
                                            <input type="date" id="calendar" class="btn-sm" name="trip-start"
                                                min="2021-09-16" max="2022-09-15">
                                            <div class="dropdown">
                                                <button class="dropbtn" id="calendar"><span class="fas fa-user"></span>
                                                    1
                                                    adulto</button>
                                                <div class="dropdown-content">
                                                    <div class="card" class="dropdown-item">
                                                        <div class="input-group mb-2">
                                                            <h6><br>Adultos: &nbsp
                                                                <button id="botao"><span
                                                                        class="fas fa-plus"></span></button> 1 <button
                                                                    id="botao"><span class="fas fa-minus"></span>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <div class="card" class="dropdown-item">
                                                        <div class="input-group mb-2">
                                                            <h6>Crianças:
                                                                <button id="botao"><span
                                                                        class="fas fa-plus"></span></button> 0 <button
                                                                    id="botao"><span class="fas fa-minus"></span>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="btn-solid-sm" href="#"><i class="fa fa-search"></i></a>
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

<!-- Tipos de estabelecimentos -->
<div id="services" class="cards-1 bg-red">
    <div class="container">
        <div class="col-lg-12">
            <h2>Explore nossos serviços</h2>
            <h4>Escolha um tipo de estabelecimento o qual deseja visitar:</h4>
        </div>
    </div>
</div>

<div id="services" class="cards-1 bg-red">
    <div class="container">
        <div class="col-lg-12">
            <div id="row">
                @if(isset($establishments) && !empty($establishments))
                    @foreach ($establishments as $est) 
                        <div id="column">
                            <div class="card mb-3" id="card">
                                <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="data:image;base64, {{ $est->profile_image }}" class="img-fluid rounded-start" alt="..." style="height:100%">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                    <h5 class="card-title">{{$est->name}}</h5>
                                    <p class="card-text">Telefone: {{$est->cellphone}} <br>E-mail: {{$est->email}}</p>
                                    <p class="card-text"><small class="text-muted"><a class="btn-solid-sm" href="{{route('user.management.reserve', $est->id)}}">Ver produtos</a></small></p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h5>Não há registros de estabelecimentos.</h5>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="cards-1">
    <div class="container">
        <div class="col-lg-12">
            <h2>Ainda está com dúvidas do que comer?</h2>
            <h4>Aqui temos uma lista com as refeições mais populares para te ajudar:</h4>
        </div>
    </div>
</div>

<!-- Filtros -->
<div id="filtro" class="container text-center">
    <div class="input-group mb-2">

        <select class="form-select" id="calendar" aria-label="Default select example">
            <option selected>Ordenar por &nbsp;</option>
            <option value="1">Preço <i class="fas fa-dollar-sign"></option>
            <option value="2">Avaliação <i class="fas fa-star"></option>
        </select>

        <select class="form-select" id="calendar" aria-label="Default select example">
            <option selected>Restrições Alimentícias &nbsp;</option>
            <option value="1">Vegetariano <i class="fas fa-dollar-sign"></option>
            <option value="2">Vegano <i class="fas fa-star"></option>
            <option value="3">Sem glúten <i class="fas fa-star"></option>
        </select>

        <button class="button px-md-5" id="calendar">Limpar filtros &ensp;<i class="fas fa-trash"></i></button>
        <button class="btn-solid-sm"><i class="fa fa-search"></i></button>
    </div>
</div><br>

<!-- Tipos de comida -->
<div class="tipoComida">
    <div class="container">
        <div id="row">
            @if(isset($establishments) && !empty($establishments) && isset($products) && !empty($products))
                @foreach ($establishments as $est)
                    @foreach ($products as $prod)
                        @if($prod->user_id == $est->id)
                            <div id="column">
                                <div class="card mb-3" id="card" name="cardProducts">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="data:image;base64, {{ $prod->image }}" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$prod->name}}</h5>
                                                <p><strong>{{$est->name}}</strong> - {{$prod->category}}</p>
                                                <p class="card-text">Descrição: {{$prod->description}}</p>
                                                <p>Serve {{$prod->number_people_served}} pessoa(s)</p>
                                                <p style="text-align: right"><strong>Preço: {{$prod->price}}</strong></p>
                                            </div>
                                            <div class="card-footer" style="text-align: right">
                                                <small class="text-muted"><a class="btn-solid-sm" href="#">Selecionar</a></small>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                            </div>
                        @endif
                    @endforeach
                @endforeach
            @else
                <h5>Não há registros de estabelecimentos.</h5>
            @endif
        </div>
    </div>
</div>

<!-- Mais sobre nós -->
<div class="cards-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Reserve sua comida e mesa antes de ir</h2>
                <p>Nada melhor do que chegar em um lugar, não pegar fila, não ter que esperar pela comida pois a mesma
                    já estará quase pronta quando você chegar, certo? Parece um sonho? Pois com o CHE CO isso é
                    possível, você
                    pode ter sua refeição favorita e realizar encontros com os amigos no seu lugar favorito sem ter que
                    esperar, é só chegar e aproveitar.
                </p>
                <p>Abaixo trouxemos alguns dos benefícios do CHE CO:</p>
                <br>
            </div>
        </div>
        {{--  <div class="row">
            <div class="col-lg-4 col-12">
                <div class="card">
                    <div class="card-icon">
                        <span class="fas fa-headphones-alt"></span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Visibilidade do seu comércio</h5>
                        <p>Quando um cliente usa o Che Co ele pode filtrar os restaurantes de acordo com a categoria, se o seu restaurante for da categoria desejada, iremos recomendá-los aos clientes para que eles possam analisar as refeições do seu comércio, isso trará uma maior visibilidade para você. Se o seu restaurante se tornar um dos destaques, podemos recomendá-lo também na página inicial do cliente. </p>
                        <a class="read-more no-line" href="">Saiba mais <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <!-- Card -->
                <div class="card">
                    <div class="card-icon red">
                        <span class="far fa-clipboard"></span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Oportunidade</h5>
                        <p>Esse website trás oportunidades para ambos os lados: para o comércio e para o cliente. Ambos poderão poupar tempo com a realização de reservas, trazendo diversos outros benefícios para ambos, incluindo a satisfação e um melhor gerenciamento das reservas (para o estabelecimento) e de tempo (para o cliente). </p>
                        <a class="read-more no-line" href="">Saiba mais <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-icon">
                                <span class="fas fa-headphones-alt"></span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Visibilidade do seu comércio</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua </p>
                                <a class="read-more no-line" href="">Saiba mais <span
                                        class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Reserve seus pedidos com antecedência!</h5>
                        <p>Com o CHE CO você pode ter sua refeição favorita e realizar encontros com os amigos no seu lugar favorito sem ter que esperar, é só fazer a reserva, com antecedência, da sua comida e mesa, chegar e aproveitar. </p>
                        <a class="read-more no-line" href="">Saiba mais <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div>
                </div>
            </div>
        </div>  --}}
    </div>
</div>
</div>
</div>
</div>
@endsection
@section('javascript')
    function myFunction() {
        document.getElementById("teste").innerHTML = "Hello World";
    }
@endsection