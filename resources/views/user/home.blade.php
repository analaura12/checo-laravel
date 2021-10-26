@extends('layouts.app')

@section('content')
@include('layouts.user.menu')
<header id="header" class="header">
    <div class="container text-center">
        <div class="row">
            <div class="text-container">
                <h2 class="card-title">Chegou e Comeu, vem com o CHE CO</h2><br>
                <p class="card-text">Com o CHE CO não é necessário esperar em filas, basta apenas reservar a refeição e
                    a mesa, chegar e comer.</p><br>
                <div class="container text-center">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" placeholder="Pesquise o estabelecimento ou item">
                        <button class="dropbtn" id="calendar">Check-in: </button>
                        <input type="date" id="calendar" class="btn-sm" name="trip-start" min="2021-09-16"
                            max="2022-09-15">
                        <div class="dropdown">
                            <button class="dropbtn" id="calendar"><span class="fas fa-user"></span> 1
                                adulto</button>
                            <div class="dropdown-content">
                                <div class="card" class="dropdown-item">
                                    <div class="input-group mb-2">
                                        <h6><br>Adultos: &nbsp
                                            <button id="botao"><span class="fas fa-plus"></span></button> 1 <button
                                                id="botao"><span class="fas fa-minus"></span>
                                        </h6>
                                    </div>
                                </div>
                                <div class="card" class="dropdown-item">
                                    <div class="input-group mb-2">
                                        <h6>Crianças:
                                            <button id="botao"><span class="fas fa-plus"></span></button> 0 <button
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
</header>

<!-- Tipos de estabelecimentos -->
<div id="services" class="cards-1 bg-red">
    <div class="container">
        <div class="col-lg-12">
            <h2>Explore nossos serviços</h2>
            <h6>Escolha um tipo de estabelecimento o qual deseja visitar:</h6>
        </div>
    </div>
</div>
<div id="services" class="cards-1 bg-red">
    <div class="container">
        <div class="col-lg-12">
            <h2>Explore nossos serviços</h2>
            <h6>Escolha um tipo de estabelecimento o qual deseja visitar:</h6>
        </div>
    </div>
</div>
<ul class="tipoComida">
    <li>
        <!-- Card -->
        <div class="card" style="width: 13rem;" id="navbarsExampleDefault">
            <figure class="figure">
                <a href="#restaurante" class="card-link" style="text-decoration:none"><img
                        src="{{asset('images/restaurante.png')}}" class="figure-img img-fluid rounded w-20"
                        alt="alternative">
                    <figcaption class="figure-caption text-center">Restaurante</figcaption>
                </a>
            </figure>
        </div>
    </li>
    <li>
        <!-- Card -->
        <div class="card" style="width: 13rem;">
            <figure class="figure">
                <a href="#lanchonete" class="card-link" style="text-decoration:none"><img
                        src="{{asset('images/lanchonete.png')}}" class="figure-img img-fluid rounded" alt="alternative">
                    <figcaption class="figure-caption text-center">Lanchonete</figcaption>
                </a>
            </figure>
        </div>
    </li>
    <li>
        <!-- Card -->
        <div class="card" style="width: 13rem;">
            <figure class="figure">
                <a href="#bar" class="card-link" style="text-decoration:none"><img src="{{asset('images/bar.png')}}"
                        class="figure-img img-fluid rounded" alt="alternative">
                    <figcaption class="figure-caption text-center">Bar</figcaption>
                </a>
            </figure>
        </div>
    </li>
    <li>
        <!-- Card -->
        <div class="card" style="width: 13rem;">
            <figure class="figure">
                <a href="#cafeteria" class="card-link" style="text-decoration:none"><img
                        src="{{asset('images/cafeteria.png')}}" class="figure-img img-fluid rounded" alt="alternative">
                    <figcaption class="figure-caption text-center">Cafeteria</figcaption>
                </a>
            </figure>
        </div>
    </li>
</ul>
<div class="cards-1 bg-red">
    <div class="container">
        <div class="col-lg-12">
            <h6>Ou escolha uma refeição a qual gostaria de comer</h6>
        </div>
    </div>
</div>

<!-- Tipos de comida -->
<ul class="tipoComida">
    <li>
        <!-- Card -->
        <div class="card" style="width: 12rem;" id="navbarsExampleDefault">
            <figure class="figure">
                <a href="#pizza" class="card-link" style="text-decoration:none"><img src="{{asset('images/pizza.png')}}"
                        class="figure-img img-fluid rounded w-20" alt="alternative">
                    <figcaption class="figure-caption text-center">Pizza</figcaption>
                </a>
            </figure>
        </div>
    </li>
    <li>
        <!-- Card -->
        <div class="card" style="width: 12rem;">
            <figure class="figure">
                <a href="#japones" class="card-link" style="text-decoration:none"><img
                        src="{{asset('images/japones.png')}}" class="figure-img img-fluid rounded" alt="alternative">
                    <figcaption class="figure-caption text-center">Japonês</figcaption>
                </a>
            </figure>
        </div>
    </li>
    <li>
        <!-- Card -->
        <div class="card" style="width: 12rem;">
            <figure class="figure">
                <a href="#lanche" class="card-link" style="text-decoration:none"><img src="{{asset('images/lanche.png')}}"
                        class="figure-img img-fluid rounded" alt="alternative">
                    <figcaption class="figure-caption text-center">Lanche</figcaption>
                </a>
            </figure>
        </div>
    </li>
    <li>
        <!-- Card -->
        <div class="card" style="width: 12rem;">
            <figure class="figure">
                <a href="#acai" class="card-link" style="text-decoration:none"><img src="{{asset('images/acai.png')}}"
                        class="figure-img img-fluid rounded" alt="alternative">
                    <figcaption class="figure-caption text-center">Açaí</figcaption>
                </a>
            </figure>
        </div>
    </li>
    <li>
        <!-- Card -->
        <div class="card" style="width: 12rem;">
            <figure class="figure">
                <a href="#massa" class="card-link" style="text-decoration:none"><img src="{{asset('images/massa.png')}}"
                        class="figure-img img-fluid rounded" alt="alternative">
                    <figcaption class="figure-caption text-center">Massa</figcaption>
                </a>
            </figure>
        </div>
    </li>
    <li>
        <!-- Card -->
        <div class="card" style="width: 12rem;">
            <figure class="figure">
                <a href="#doce" class="card-link" style="text-decoration:none"><img src="{{asset('images/doce.png')}}"
                        class="figure-img img-fluid rounded" alt="alternative">
                    <figcaption class="figure-caption text-center">Doces</figcaption>
                </a>
            </figure>
        </div>
    </li>
</ul>

<!-- Estabelecimentos -->
<div class="cards-1">
    <div class="container">
        <div class="col-lg-12">
            <h2>Ainda está com dúvidas em onde realizar a sua refeição ou encontro com os amigos?</h2>
            <h6>Aqui temos uma lista com os restaurantes mais populares para você visitar:</h6>
        </div>
    </div>
</div>

<!-- Filtros -->
<div id="filtro" class="container text-center">
    <div class="input-group mb-2">
        <div class="dropdown">
            <button class="dropbtn" id="calendar">Ordenar por &nbsp<span class="fas fa-chevron-down"></span></button>
            <div class="dropdown-content">
                <div class="card" class="dropdown-item">
                    <div class="input-group mb-2">
                        <h6><br>Preço <i class="fas fa-dollar-sign"></i></h6>
                        <div class="dropdown-divider"></div>
                    </div>
                </div>
                <div class="card" class="dropdown-item">
                    <div class="input-group mb-2">
                        <h6><br>Avaliação <i class="fas fa-star"></i></h6>
                        <div class="dropdown-divider"></div>
                    </div>
                </div>
                <div class="card" class="dropdown-item">
                    <div class="input-group mb-2">
                        <h6><br>Menor Distância <i class="fas fa-map-marked-alt"></i></h6>
                        <div class="dropdown-divider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn" id="calendar">Vale Refeição &nbsp<span class="fas fa-chevron-down"></span></button>
            <div class="dropdown-content">
                <div class="card" class="dropdown-item">
                    <div class="input-group mb-2">
                        <h6><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    VR Refeição
                                </label>
                            </div>
                        </h6>
                        <div class="dropdown-divider"></div>
                    </div>
                </div>
                <div class="card" class="dropdown-item">
                    <div class="input-group mb-2">
                        <h6><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Sodexo Refeição
                                </label>
                            </div>
                        </h6>
                        <div class="dropdown-divider"></div>
                    </div>
                </div>
                <div class="card" class="dropdown-item">
                    <div class="input-group mb-2">
                        <h6><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Alelo Refeição
                                </label>
                            </div>
                        </h6>
                        <div class="dropdown-divider"></div>
                    </div>
                </div>
                <div class="card" class="dropdown-item">
                    <div class="input-group mb-2">
                        <h6><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Ticket Restaurante
                                </label>
                            </div>
                        </h6>
                        <div class="dropdown-divider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn" id="calendar">Distância &nbsp<span class="fas fa-chevron-down"></span></button>
            <div class="dropdown-content">
                <div class="card" class="dropdown-item">
                    <div class="input-group mb-2">
                        <h6><br>Sua distância até o estabelecimento</h6>
                        <p>Variando de 1km a 100km</p>
                        <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
                        <div class="dropdown-divider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn" id="calendar">Restrições Alimentícias <span
                    class="fas fa-chevron-down"></span></button>
            <div class="dropdown-content">
                <div class="card" class="dropdown-item">
                    <div class="input-group mb-2">
                        <h6><br>Vegetariano</h6>
                        <div class="dropdown-divider"></div>
                    </div>
                </div>
                <div class="card" class="dropdown-item">
                    <div class="input-group mb-2">
                        <h6><br>Vegano</h6>
                        <div class="dropdown-divider"></div>
                    </div>
                </div>
                <div class="card" class="dropdown-item">
                    <div class="input-group mb-2">
                        <h6><br>Sem glúten</h6>
                        <div class="dropdown-divider"></div>
                    </div>
                </div>
                <div class="card" class="dropdown-item">
                    <div class="input-group mb-2">
                        <h6><br>Outras</h6>
                        <div class="dropdown-divider"></div>
                    </div>
                </div>
            </div>
        </div>
        <button class="button" id="calendar">Promoções <i class="fas fa-percentage"></i></button>
        <button class="button" id="calendar">Limpar filtros <i class="fas fa-trash"></i></button>

        <a class="btn-solid-sm" href="#"><i class="fa fa-search"></i></a>
    </div>
</div><br>
<ul class="tipoEstabelecimento">
    <li>
        <!-- Card -->
        <div class="card" style="width: 10rem;">
            <figure class="figure">
                <a href="#starbucks" class="card-link" style="text-decoration:none"><img
                        src="{{asset('images/starbucks.png')}}" class="figure-img img-fluid rounded" alt="alternative">
                    <figcaption class="figure-caption text-center">Starbucks</figcaption>
                </a>
            </figure>
        </div>
    </li>
    <li>
        <!-- Card -->
        <div class="card" style="width: 10rem;" id="navbarsExampleDefault">
            <figure class="figure">
                <a href="#vassoura-quebrada" class="card-link" style="text-decoration:none"><img
                        src="{{asset('images/vassoura-quebrada.png')}}" class="figure-img img-fluid rounded w-20"
                        alt="alternative">
                    <figcaption class="figure-caption text-center">Vassoura Quebrada</figcaption>
                </a>
            </figure>
        </div>
    </li>
    <li>
        <!-- Card -->
        <div class="card" style="width: 10rem;">
            <figure class="figure">
                <a href="#coronel" class="card-link" style="text-decoration:none"><img
                        src="{{asset('images/coronel.png')}}" class="figure-img img-fluid rounded" alt="alternative">
                    <figcaption class="figure-caption text-center">Bar do Coronel</figcaption>
                </a>
            </figure>
        </div>
    </li>
    <li>
        <!-- Card -->
        <div class="card" style="width: 10rem;">
            <figure class="figure">
                <a href="#johnny-rockets" class="card-link" style="text-decoration:none"><img
                        src="{{asset('images/johnny-rockets.png')}}" class="figure-img img-fluid rounded"
                        alt="alternative">
                    <figcaption class="figure-caption text-center">Johnny Rockets</figcaption>
                </a>
            </figure>
        </div>
    </li>
    <li>
        <!-- Card -->
        <div class="card" style="width: 10rem;">
            <figure class="figure">
                <a href="#losmex" class="card-link" style="text-decoration:none"><img src="{{asset('images/losmex.png')}}"
                        class="figure-img img-fluid rounded" alt="alternative">
                    <figcaption class="figure-caption text-center">Los Mex Cocina</figcaption>
                </a>
            </figure>
        </div>
    </li>
    <li>
        <!-- Card -->
        <div class="card" style="width: 10rem;">
            <figure class="figure">
                <a href="#mc" class="card-link" style="text-decoration:none"><img src="{{asset('images/mc.png')}}"
                        class="figure-img img-fluid rounded" alt="alternative">
                    <figcaption class="figure-caption text-center">McDonald</figcaption>
                </a>
            </figure>
        </div>
    </li>
    <li>
        <!-- Card -->
        <div class="card" style="width: 10rem;" id="navbarsExampleDefault">
            <figure class="figure">
                <a href="#sukiya" class="card-link" style="text-decoration:none"><img src="{{asset('images/sukiya.png')}}"
                        class="figure-img img-fluid rounded w-20" alt="alternative">
                    <figcaption class="figure-caption text-center">Sukiya</figcaption>
                </a>
            </figure>
        </div>
    </li>
    <li>
        <!-- Card -->
        <div class="card" style="width: 10rem;">
            <figure class="figure">
                <a href="#outback" class="card-link" style="text-decoration:none"><img
                        src="{{asset('images/outback.png')}}" class="figure-img img-fluid rounded" alt="alternative">
                    <figcaption class="figure-caption text-center">Outback</figcaption>
                </a>
            </figure>
        </div>
    </li>
    <li>
        <!-- Card -->
        <div class="card" style="width: 10rem;">
            <figure class="figure">
                <a href="#speranza" class="card-link" style="text-decoration:none"><img
                        src="{{asset('images/speranza.png')}}" class="figure-img img-fluid rounded" alt="alternative">
                    <figcaption class="figure-caption text-center">Pizzaria Speranza</figcaption>
                </a>
            </figure>
        </div>
    </li>
    <li>
        <!-- Card -->
        <div class="card" style="width: 10rem;" id="navbarsExampleDefault">
            <figure class="figure">
                <a href="#albadah" class="card-link" style="text-decoration:none"><img
                        src="{{asset('images/albadah.png')}}" class="figure-img img-fluid rounded w-20" alt="alternative">
                    <figcaption class="figure-caption text-center">Al Badah</figcaption>
                </a>
            </figure>
        </div>
    </li>
</ul>

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
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-icon red">
                        <span class="fas fa-clock"></span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Poupamos o seu tempo de espera em fila</h5>
                        <p>Não há mais a necessidade de esperar em filas, basta realizar a sua reserva online e curtir o
                            momento com seus amigos na hora marcada.</p>
                    </div>
                </div>

                <!-- Card -->
                <div class="card">
                    <div class="card-icon red">
                        <span class="fas fa-head-side-mask"></span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Te ajudamos na proteção contra o Coronavirus</h5>
                        <p>Nessa pandemia, o que menos queremos é estar em lugares muito aglomerados por conta do vírus.
                            Com este website é possível evitar a aglomeração realizando reservas.</p>
                    </div>
                </div>

                <!-- Card -->
                <div class="card">
                    <div class="card-icon red">
                        <span class="far fa-heart"></span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Pensamos em você</h5><br>
                        <p>No CHE CO é possível analisar os estabelecimentos e as refeições deles, com isso pode-se
                            verificar se o orçamento cabe no seu bolso ou se há alguma coisa na comida que você não pode
                            comer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')

@endsection