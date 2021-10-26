@extends('layouts.app')

@section('content')
<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-5">
                <div class="text-container">
                    <h5 class="card-title">Reserve seus pedidos com antecedência!</h5>
                    <p>Com o CHE CO você pode reservar suas mesas e pedidos antes mesmo de estar lá! Aproveite bares e restaurantes com tranquilidade! </p>
                    <a class="btn-solid-lg" href="#">Saiba mais</a>
                </div>
            </div>
            <div class="col-lg-6 col-xl-7">
                <div class="image-container">
                    <img class="img-fluid" src="{{asset('images/header-image.png')}}" alt="alternative">
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Serviços -->
<div id="services" class="cards-1 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Explore nossos serviços</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-icon">
                        <span class="fas fa-headphones-alt"></span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Visibilidade do seu comércio</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua </p>
                        <a class="read-more no-line" href="">Saiba mais <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div>
                </div>

                <!-- Card -->
                <div class="card">
                    <div class="card-icon red">
                        <span class="far fa-clipboard"></span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Oportunidade</h5>
                        <p>Bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim. </p>
                        <a class="read-more no-line" href="">Saiba mais <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div>
                </div>

                <!-- Card -->
                <div class="card">
                    <div class="card-icon green">
                        <span class="far fa-comments"></span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Reserve seus pedidos com antecedência!</h5>
                        <p>At ultrices mi tempus imperdiet nulla malesuada. Auctor elit sed vulputate mi sit amet. </p>
                        <a class="read-more no-line" href="">Saiba mais <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection