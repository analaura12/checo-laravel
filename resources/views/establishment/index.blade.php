{{--  {{auth()->guard('establishment')->user()}}  --}}
@extends('layouts.app')

@section('content')
<div class="container-scroller">
    @include('layouts.establishment.menu')
    <div class="container-fluid page-body-wrapper">
        @include('layouts.establishment.sidebar')
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="row">
                            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                <h3 class="font-weight-bold">Bem-vindo!</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card tale-bg">
                            <div class="card-people mt-auto">
                                <img src="{{asset('images/dashboard/restaurante.jpg')}}" alt="people">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 grid-margin transparent">
                        <div class="row">
                            <div class="col-md-6 mb-4 stretch-card transparent">
                                <div class="card card-tale">
                                    <div class="card-body">
                                        <p class="mb-4">Mesas disponíveis</p>
                                        <p class="fs-30 mb-2">12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 stretch-card transparent">
                                <div class="card card-dark-blue">
                                    <div class="card-body">
                                        <p class="mb-4">Mesas ocupadas</p>
                                        <p class="fs-30 mb-2">8</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                                <div class="card card-light-blue">
                                    <div class="card-body">
                                        <p class="mb-4">Reservas em andamento</p>
                                        <p class="fs-30 mb-2">8</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 stretch-card transparent">
                                <div class="card card-light-danger">
                                    <div class="card-body">
                                        <p class="mb-4">Pedidos de reserva</p>
                                        <p class="fs-30 mb-2">12</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title">Valores</p>
                                <div class="d-flex flex-wrap mb-5">
                                    <div class="mr-5 mt-3">
                                        <p class="text-muted">Valor diário</p>
                                        <h3 class="text-primary fs-30 font-weight-medium">R$123</h3>
                                    </div>
                                    <div class="mr-5 mt-3">
                                        <p class="text-muted">Valor semanal</p>
                                        <h3 class="text-primary fs-30 font-weight-medium">R$123</h3>
                                    </div>
                                    <div class="mr-5 mt-3">
                                        <p class="text-muted">Valor adquirido</p>
                                        <h3 class="text-primary fs-30 font-weight-medium">R$7000</h3>
                                    </div>
                                </div>
                                <canvas id="order-chart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <p class="card-title">Vendas</p>
                                    <a href="#" class="text-info">Ver mais</a>
                                </div>
                                <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                                <canvas id="sales-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Partners -->
                {{--  <div id="partners" class="cards-1 bg-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 style="text-align: center;">Conheça alguns dos nossos parceiros</h2>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 5px; text-align: center;">
                            <div>
                                <img src="{{asset('images/outback_logo.png')}}" alt="bebida" id="movimentar"
                                    class="img-fluid circuloImagem" style="text-align: center; ">
                                <img src="{{asset('images/starbucks_logo.png')}}" alt="bebida" id="movimentar"
                                    class="img-fluid circuloImagem" style="text-align: center;">
                                <img src="{{asset('images/bar_do_coronel.png')}}" alt="bebida" id="movimentar"
                                    class="img-fluid circuloImagem" style="text-align: center;">
                                <img src="{{asset('images/vassoura_quebrada.jpeg')}}" alt="bebida" id="movimentar"
                                    class="img-fluid circuloImagem" style="text-align: center; margin-left: 15px;">
                                <img src="{{asset('images/los_mex.png')}}" alt="bebida" id="movimentar"
                                    class="img-fluid circuloImagem" style="text-align: center;">
                            </div>
                        </div>
                    </div>
                </div>  --}}
    
                <!-- Depoimentos-->
                {{--  <div class="cards-1 bg-gray">
                    <div class="container-fluid">
                        <div class="container">
                            <div class="row">
                                <hr>
                                <div class="col-lg-12">
                                    <h2 style="text-align: center;">Depoimentos</h2>
                                </div>
                                <div class="col-lg-4">
                                    <!-- Card -->
                                    <div class="card ">
                                        <div class="card-body">
                                            <h5 class="card-title">Estabelecimento</h5>
                                            <p>
                                                Morbi dolor lacus, mattis volutpat elit quis, tempus faucibus
                                                tellus. Donec porttitor nunc eu justo mattis, ac laoreet tellus
                                                vestibulum. Maecenas sit amet velit arcu. Integer ut nunc sed purus
                                                elementum condimentum.
                                            </p>
                                            <p style="color: #f05642;">Responsável</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <!-- Card -->
                                    <div class="card ">
                                        <div class="card-body">
                                            <h5 class="card-title">Estabelecimento</h5>
                                            <p>
                                                Morbi dolor lacus, mattis volutpat elit quis, tempus faucibus
                                                tellus. Donec porttitor nunc eu justo mattis, ac laoreet tellus
                                                vestibulum. Maecenas sit amet velit arcu. Integer ut nunc sed purus
                                                elementum condimentum.
                                            </p>
                                            <p style="color: #f05642;">Responsável</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <!-- Card -->
                                    <div class="card ">
                                        <div class="card-body">
                                            <h5 class="card-title">Estabelecimento</h5>
                                            <p>
                                                Morbi dolor lacus, mattis volutpat elit quis, tempus faucibus
                                                tellus. Donec porttitor nunc eu justo mattis, ac laoreet tellus
                                                vestibulum. Maecenas sit amet velit arcu. Integer ut nunc sed purus
                                                elementum condimentum.
                                            </p>
                                            <p style="color: #f05642;">Responsável</p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>  --}}
    
                <!-- New Partners -->
                {{--  <div id="benefits" class="cards-1 bg-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 style="text-align: center;">Venha ser um parceiro</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
    
                                <!-- Card -->
                                <div class="card col-lg-3">
                                    <div class="card-icon red">
                                        <span class="far fa-clock"></span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Gerenciamento</h5>
                                        <p>Com o CHE CO a retirada dos pedidos fica muito mais dinâmica, os pedidos
                                            poderão fazer toda a definição dos itens que desejam consumir e também
                                            da disposição de mesa que necessita para utilizar no estabelecimento.
                                        </p>
                                    </div>
                                </div>
    
                                <!-- Card -->
                                <div class="card col-lg-3">
                                    <div class="card-icon blue">
                                        <span class="fas fa-users"></span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Novos clientes</h5>
                                        <p>Alcance um número maior de clientes para o seu negócio, com o CHE CO o
                                            seu atendimento fica ainda mais eficiente.</p>
                                    </div>
                                </div>
    
                                <!-- Card -->
                                <div class="card col-lg-3">
                                    <div class="card-icon green">
                                        <span class="fas fa-bullhorn"></span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Visibilidade</h5>
                                        <p>O CHE CO proporciona aos seus parceiros uma plataforma de qualidade para
                                            a divulgação do seu negócio, contando com todo o suporte necessário para
                                            que o atendimento aos clientes dos seus parceiros seja sempre o melhor
                                            possível.
                                        </p>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>  --}}
                <!-- FIM DO CONTEÚDO -->
            </div>
        </div>
    </div>
@endsection
@section('javascript')

@endsection