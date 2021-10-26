@extends('layouts.app')

@section('content')
@include('layouts.user.menu')
<header id="header" class="header" style="padding-top: 7rem; padding-bottom: 2rem;">
    <div class="container">
        <h3>Promoções do dia</h3>
        <!-- Carrossel -->
        <div class="row">
            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false" style="margin-top: 15px;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container-fluid">
                            <div class="container">
                                <div class="row">
                                    <div class=" col-lg-4">
                                        <!-- Card -->
                                        <div class="card">
                                            <div class="card-body" style="text-align: center;">
                                                <img src="{{asset('images/comida_1.jpeg') }}" class="bordaImagem card-img-top" style="text-align: center;" width="200px" height="200px">
                                                <h5 class="card-title">Macarrão com vegetais</h5>
                                                <p style="color: #f05642; float:right">
                                                    R$0.00
                                                </p>
                                                <button type="button" class="btn btn-md" data-bs-toggle="modal" data-bs-target="#modal1" style="margin-top: 10px; float: left; background-color: #f05642; color:white;">Ver mais</button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="modal1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modal1Label">Macarrão com vegetais</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <img src="{{asset('images/comida_1.jpeg') }}" class="bordaImagem card-img-top" style="text-align: center;" width="200px" height="200px">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h5>Descrição</h5>
                                                                        <p style="text-align:justify;">
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In arcu nunc, sollicitudin efficitur urna eget, varius euismod leo. Duis a dolor ipsum. Nullam dapibus tincidunt elit nec venenatis. Sed quis ante felis.
                                                                        </p>
                                                                        <p style="text-align: justify;">Serve ? pesssoas</p>
                                                                    </div>
                                                                    <div class="col-md-12" style="margin-top: 10px;">
                                                                        <h6 style="text-align:justify;">Observações</h6>
                                                                        <textarea class="col-md-8" placeholder="Digite aqui" style="float:left;"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-md" style="background-color: #f05642; color:white;">Adicionar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-4">
                                        <!-- Card -->
                                        <div class="card">
                                            <div class="card-body" style="text-align: center;">
                                                <img src="{{asset('images/bebida_4.jpeg') }}" class="bordaImagem card-img-top" style="text-align: center;" width="200px" height="200px">
                                                <h5 class="card-title">Drinque</h5>
                                                <p style="color: #f05642; float:right">
                                                    R$0.00
                                                </p>
                                                <button type="button" class="btn btn-md" data-bs-toggle="modal" data-bs-target="#modal2" style="margin-top: 10px; float: left; background-color: #f05642; color:white;">Ver mais</button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="modal2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modal2Label">Drinque</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <img src="{{asset('images/bebida_4.jpeg') }}" class="bordaImagem card-img-top" style="text-align: center;" width="200px" height="200px">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h5>Descrição</h5>
                                                                        <p style="text-align:justify;">
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In arcu nunc, sollicitudin efficitur urna eget, varius euismod leo. Duis a dolor ipsum. Nullam dapibus tincidunt elit nec venenatis. Sed quis ante felis.
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-12" style="margin-top: 10px;">
                                                                        <h6 style="text-align:justify;">Observações</h6>
                                                                        <textarea class="col-md-8" placeholder="Digite aqui" style="float:left;"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-md" style="background-color: #f05642; color:white;">Adicionar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-4">
                                        <!-- Card -->
                                        <div class="card">
                                            <div class="card-body" style="text-align: center;">
                                                <img src="{{asset('images/comida_3.jpeg') }}" class="bordaImagem card-img-top" style="text-align: center;" width="200px" height="200px">
                                                <h5 class="card-title">X-burger com fritas</h5>
                                                <p style="color: #f05642; float:right">
                                                    R$0.00
                                                </p>
                                                <button type="button" class="btn btn-md" data-bs-toggle="modal" data-bs-target="#modal3" style="margin-top: 10px; float: left; background-color: #f05642; color:white;">Ver mais</button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="modal3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal3Label" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modal3Label">X-burger com fritas</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <img src="{{asset('images/comida_3.jpeg') }}" class="bordaImagem card-img-top" style="text-align: center;" width="200px" height="200px">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h5>Descrição</h5>
                                                                        <p style="text-align:justify;">
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In arcu nunc, sollicitudin efficitur urna eget, varius euismod leo. Duis a dolor ipsum. Nullam dapibus tincidunt elit nec venenatis. Sed quis ante felis.
                                                                        </p>
                                                                        <p style="text-align: justify;">Serve ? pesssoas</p>
                                                                    </div>
                                                                    <div class="col-md-12" style="margin-top: 10px;">
                                                                        <h6 style="text-align:justify;">Observações</h6>
                                                                        <textarea class="col-md-8" placeholder="Digite aqui" style="float:left;"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-md" style="background-color: #f05642; color:white;">Adicionar</button>
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
                    <div class="carousel-item">
                        <div class="container-fluid">
                            <div class="container">
                                <div class="row">
                                    <div class=" col-lg-4">
                                        <!-- Card -->
                                        <div class="card">
                                            <div class="card-body" style="text-align: center;">
                                                <img src="{{asset('images/comida_japonesa.jpg') }}" aponesa" class="bordaImagem card-img-top" style="text-align: center;" width="200px" height="200px">
                                                <h5 class="card-title">Sushi</h5>
                                                <p style="color: #f05642; float:right">
                                                    R$0.00
                                                </p>
                                                <button type="button" class="btn btn-md" data-bs-toggle="modal" data-bs-target="#modal4" style="margin-top: 10px; float: left; background-color: #f05642; color:white;">Ver mais</button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="modal4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal4Label" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modal4Label">Sushi</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <img src="{{asset('images/comida_japonesa.jpg') }}" class="bordaImagem card-img-top" style="text-align: center;" width="200px" height="200px">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h5>Descrição</h5>
                                                                        <p style="text-align:justify;">
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In arcu nunc, sollicitudin efficitur urna eget, varius euismod leo. Duis a dolor ipsum. Nullam dapibus tincidunt elit nec venenatis. Sed quis ante felis.
                                                                        </p>
                                                                        <p style="text-align: justify;">Serve ? pesssoas</p>
                                                                    </div>
                                                                    <div class="col-md-12" style="margin-top: 10px;">
                                                                        <h6 style="text-align:justify;">Observações</h6>
                                                                        <textarea class="col-md-8" placeholder="Digite aqui" style="float:left;"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-md" style="background-color: #f05642; color:white;">Adicionar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-4">
                                        <!-- Card -->
                                        <div class="card">
                                            <div class="card-body" style="text-align: center;">
                                                <img src="{{asset('images/sorvete.jpg') }}" class="bordaImagem card-img-top" style="text-align: center;" width="200px" height="200px">
                                                <h5 class="card-title">Sorvete</h5>
                                                <p style="color: #f05642; float:right">
                                                    R$0.00
                                                </p>
                                                <button type="button" class="btn btn-md" data-bs-toggle="modal" data-bs-target="#modal5" style="margin-top: 10px; float: left; background-color: #f05642; color:white;">Ver mais</button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="modal5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal5Label" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modal5Label">Sorvete</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <img src="{{asset('images/sorvete.jpg') }}" class="bordaImagem card-img-top" style="text-align: center;" width="200px" height="200px">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h5>Descrição</h5>
                                                                        <p style="text-align:justify;">
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In arcu nunc, sollicitudin efficitur urna eget, varius euismod leo. Duis a dolor ipsum. Nullam dapibus tincidunt elit nec venenatis. Sed quis ante felis.
                                                                        </p>
                                                                        <p style="text-align: justify;">Serve ? pesssoas</p>
                                                                    </div>
                                                                    <div class="col-md-12" style="margin-top: 10px;">
                                                                        <h6 style="text-align:justify;">Observações</h6>
                                                                        <textarea class="col-md-8" placeholder="Digite aqui" style="float:left;"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-md" style="background-color: #f05642; color:white;">Adicionar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-4">
                                        <!-- Card -->
                                        <div class="card">
                                            <div class="card-body" style="text-align: center;">
                                                <img src="{{asset('images/pizza.png') }}" nimalístico" class="bordaImagem card-img-top" style="text-align: center;" width="200px" height="200px">
                                                <h5 class="card-title">Pizza</h5>
                                                <p style="color: #f05642; float:right">
                                                    R$0.00
                                                </p>
                                                <button type="button" class="btn btn-md" data-bs-toggle="modal" data-bs-target="#modal6" style="margin-top: 10px; float: left; background-color: #f05642; color:white;">Ver mais</button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="modal6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal6Label" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modal6Label">Pizza</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <img src="{{asset('images/pizza.png') }}') }}" class="bordaImagem card-img-top" style="text-align: center;" width="200px" height="200px">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h5>Descrição</h5>
                                                                        <p style="text-align:justify;">
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In arcu nunc, sollicitudin efficitur urna eget, varius euismod leo. Duis a dolor ipsum. Nullam dapibus tincidunt elit nec venenatis. Sed quis ante felis.
                                                                        </p>
                                                                        <p style="text-align: justify;">Serve ? pesssoas</p>
                                                                    </div>
                                                                    <div class="col-md-12" style="margin-top: 10px;">
                                                                        <h6 style="text-align:justify;">Observações</h6>
                                                                        <textarea class="col-md-8" placeholder="Digite aqui" style="float:left;"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-md" style="background-color: #f05642; color:white;">Adicionar</button>
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
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>

        <!-- Tabs of products -->
        <h3 style="margin-top: 20px;">Procure por:</h3>
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item" role="presentation" style="margin-right: 10px;">
                <button class="nav-link" id="lanches-tab" style="background-color: #f05642; color:white;" data-bs-toggle="tab" data-bs-target="#lanches" type="button" role="tab" aria-controls="lanches" aria-selected="false">Lanches</button>
            </li>
            <li class="nav-item" role="presentation" style="margin-right: 10px;">
                <button class="nav-link" id="vegetariana-tab" style="background-color: #f05642; color:white;" data-bs-toggle="tab" data-bs-target="#vegetariana" type="button" role="tab" aria-controls="vegetariana" aria-selected="false">Vegetariana</button>
            </li>
            <li class="nav-item" role="presentation" style="margin-right: 10px;">
                <button class="nav-link" id="doces-tab" style="background-color: #f05642; color:white;" data-bs-toggle="tab" data-bs-target="#doces" type="button" role="tab" aria-controls="doces" aria-selected="true">Doces</button>
            </li>
            <li class="nav-item" role="presentation" style="margin-right: 10px;">
                <button class="nav-link" id="bebidas-tab" style="background-color: #f05642; color:white;" data-bs-toggle="tab" data-bs-target="#bebidas" type="button" role="tab" aria-controls="bebidas" aria-selected="false">Bebidas em geral</button>
            </li>
            <li class="nav-item" role="presentation" style="margin-right: 10px;">
                <button class="nav-link" id="japonesa-tab" style="background-color: #f05642; color:white;" data-bs-toggle="tab" data-bs-target="#japonesa" type="button" role="tab" aria-controls="japonesa" aria-selected="false">Comida japonesa</button>
            </li>
            <li class="nav-item" role="presentation" style="margin-right: 10px;">
                <button class="nav-link" id="pizza-tab" style="background-color: #f05642; color:white;" data-bs-toggle="tab" data-bs-target="#pizza" type="button" role="tab" aria-controls="pizza" aria-selected="true">Pizza</button>
            </li>
            <li class="nav-item" role="presentation" style="margin-right: 10px;">
                <button class="nav-link" id="italiana-tab" style="background-color: #f05642; color:white;" data-bs-toggle="tab" data-bs-target="#italiana" type="button" role="tab" aria-controls="italiana" aria-selected="false">Comida italiana</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            {{-- <!-- Lanches -->
            <?php include '../user/products/lanches.php'; ?>

            <!-- Vegetariana-->
            <?php include '../user/products/vegetarian.php' ?>

            <!-- Doces -->
            <?php include '../user/products/candy.php' ?>

            <!-- Bebidas -->
            <?php include '../user/products/drinks.php' ?>

            <!-- Japonesa -->
            <?php include '../user/products/japanese.php' ?>

            <!-- Pizza -->
            <?php include '../user/products/pizza.php' ?>

            <!-- Italiana -->
            <?php include '../user/products/italian.php' ?> --}}

        </div>

    </div>
</header>

<!-- Menu by establishment -->
<div class="cards-1 bg-gray">
    <div class="container">
        <div class="row">
            <h3>Veja o cardápio dos estabelecimentos</h3>

            <div class="col-lg-3" style="text-align: center; ">
                <div class="btn btn-md" data-bs-toggle="modal" data-bs-target="#establishment1">
                    <img src="{{asset('images/outback_logo.png') }}') }}" id="movimentar" class="img-fluid circuloImagem" style="text-align: center; ">
                </div>
                <!-- Modal -->
                <div class="modal fade" id="establishment1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="establishment1Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="establishment1Label" style="text-align: center;">Cardápio</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <h6>Produto</h6>
                                    <div class="col-md-6">
                                        <img src="{{asset('images/produto-imagem.svg') }}" class="bordaImagem card-img-top" style="text-align: center;" width="200px" height="200px">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Descrição</h5>
                                        <p style="text-align:justify;">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In arcu nunc, sollicitudin efficitur urna eget, varius euismod leo. Duis a dolor ipsum. Nullam dapibus tincidunt elit nec venenatis. Sed quis ante felis.
                                        </p>
                                        <p style="text-align: justify;">Serve ? pesssoas</p>
                                    </div>
                                    <div class="col-md-12" style="margin-top: 10px;">
                                        <h6 style="text-align:justify;">Observações</h6>
                                        <textarea class="col-md-8" placeholder="Digite aqui" style="float:left;"></textarea>
                                        <button type="button" class="btn btn-md col-md-2" style="background-color: #f05642; color:white; float:right;">Adicionar</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <h6>Produto</h6>
                                    <div class="col-md-6">
                                        <img src="{{asset('images/produto-imagem.svg') }}" class="bordaImagem card-img-top" style="text-align: center;" width="200px" height="200px">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Descrição</h5>
                                        <p style="text-align:justify;">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In arcu nunc, sollicitudin efficitur urna eget, varius euismod leo. Duis a dolor ipsum. Nullam dapibus tincidunt elit nec venenatis. Sed quis ante felis.
                                        </p>
                                        <p style="text-align: justify;">Serve ? pesssoas</p>
                                    </div>
                                    <div class="col-md-12" style="margin-top: 10px;">
                                        <h6 style="text-align:justify;">Observações</h6>
                                        <textarea class="col-md-8" placeholder="Digite aqui" style="float:left;"></textarea>
                                        <button type="button" class="btn btn-md col-md-2" style="background-color: #f05642; color:white; float:right;">Adicionar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3" style="text-align: center; ">
                <div class="btn btn-md" data-bs-toggle="modal" data-bs-target="#establishment2">
                    <img src="{{asset('images/starbucks_logo.png') }}') }}" alt="bebida" id="movimentar" class="img-fluid circuloImagem" style="text-align: center;">
                </div>
                <!-- Modal -->
                <div class="modal fade" id="establishment2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="establishment2Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="establishment2Label" style="text-align: center;">Cardápio</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <h6>Produto</h6>
                                    <div class="col-md-6">
                                        <img src="{{asset('images/produto-imagem.svg') }}" class="bordaImagem card-img-top" style="text-align: center;" width="200px" height="200px">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Descrição</h5>
                                        <p style="text-align:justify;">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In arcu nunc, sollicitudin efficitur urna eget, varius euismod leo. Duis a dolor ipsum. Nullam dapibus tincidunt elit nec venenatis. Sed quis ante felis.
                                        </p>
                                        <p style="text-align: justify;">Serve ? pesssoas</p>
                                    </div>
                                    <div class="col-md-12" style="margin-top: 10px;">
                                        <h6 style="text-align:justify;">Observações</h6>
                                        <textarea class="col-md-8" placeholder="Digite aqui" style="float:left;"></textarea>
                                        <button type="button" class="btn btn-md col-md-2" style="background-color: #f05642; color:white; float:right;">Adicionar</button>
                                    </div>
                                </div>
                                    <hr>
                                    <div class="row">
                                    <h6>Produto</h6>
                                    <div class="col-md-6">
                                        <img src="{{asset('images/produto-imagem.svg') }}" class="bordaImagem card-img-top" style="text-align: center;" width="200px" height="200px">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Descrição</h5>
                                        <p style="text-align:justify;">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In arcu nunc, sollicitudin efficitur urna eget, varius euismod leo. Duis a dolor ipsum. Nullam dapibus tincidunt elit nec venenatis. Sed quis ante felis.
                                        </p>
                                        <p style="text-align: justify;">Serve ? pesssoas</p>
                                    </div>
                                    <div class="col-md-12" style="margin-top: 10px;">
                                        <h6 style="text-align:justify;">Observações</h6>
                                        <textarea class="col-md-8" placeholder="Digite aqui" style="float:left;"></textarea>
                                        <button type="button" class="btn btn-md col-md-2" style="background-color: #f05642; color:white; float:right;">Adicionar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3" style="text-align: center; ">
                <div class="btn btn-md" data-bs-toggle="modal" data-bs-target="#establishment3">
                    <img src="{{asset('images/bar_do_coronel.png') }}" alt="bebida" id="movimentar" class="img-fluid circuloImagem" style="text-align: center;">
                </div>
                <!-- Modal -->
                <div class="modal fade" id="establishment3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="establishment3Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="establishment3Label" style="text-align: center;">Cardápio</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <h6>Produto</h6>
                                    <div class="col-md-6">
                                        <img src="{{asset('images/produto-imagem.svg') }}" class="bordaImagem card-img-top" style="text-align: center;" width="200px" height="200px">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Descrição</h5>
                                        <p style="text-align:justify;">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In arcu nunc, sollicitudin efficitur urna eget, varius euismod leo. Duis a dolor ipsum. Nullam dapibus tincidunt elit nec venenatis. Sed quis ante felis.
                                        </p>
                                        <p style="text-align: justify;">Serve ? pesssoas</p>
                                    </div>
                                    <div class="col-md-12" style="margin-top: 10px;">
                                        <h6 style="text-align:justify;">Observações</h6>
                                        <textarea class="col-md-8" placeholder="Digite aqui" style="float:left;"></textarea>
                                        <button type="button" class="btn btn-md col-md-2" style="background-color: #f05642; color:white; float:right;">Adicionar</button>
                                    </div>
                                </div>
                                    <hr>
                                    <div class="row">
                                    <h6>Produto</h6>
                                    <div class="col-md-6">
                                        <img src="{{asset('images/produto-imagem.svg') }}" class="bordaImagem card-img-top" style="text-align: center;" width="200px" height="200px">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Descrição</h5>
                                        <p style="text-align:justify;">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In arcu nunc, sollicitudin efficitur urna eget, varius euismod leo. Duis a dolor ipsum. Nullam dapibus tincidunt elit nec venenatis. Sed quis ante felis.
                                        </p>
                                        <p style="text-align: justify;">Serve ? pesssoas</p>
                                    </div>
                                    <div class="col-md-12" style="margin-top: 10px;">
                                        <h6 style="text-align:justify;">Observações</h6>
                                        <textarea class="col-md-8" placeholder="Digite aqui" style="float:left;"></textarea>
                                        <button type="button" class="btn btn-md col-md-2" style="background-color: #f05642; color:white; float:right;">Adicionar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3" style="text-align: center; ">
                <div class="btn btn-md" data-bs-toggle="modal" data-bs-target="#establishment4">
                    <img src="{{asset('images/vassoura_quebrada.jpeg') }}" alt="bebida" id="movimentar" class="img-fluid circuloImagem" style="text-align: center; margin-left: 15px;">
                </div>
                <!-- Modal -->
                <div class="modal fade" id="establishment4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="establishment4Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="establishment4Label" style="text-align: center;">Cardápio</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <h6>Produto</h6>
                                    <div class="col-md-6">
                                        <img src="{{asset('images/produto-imagem.svg') }}" class="bordaImagem card-img-top" style="text-align: center;" width="200px" height="200px">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Descrição</h5>
                                        <p style="text-align:justify;">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In arcu nunc, sollicitudin efficitur urna eget, varius euismod leo. Duis a dolor ipsum. Nullam dapibus tincidunt elit nec venenatis. Sed quis ante felis.
                                        </p>
                                        <p style="text-align: justify;">Serve ? pesssoas</p>
                                    </div>
                                    <div class="col-md-12" style="margin-top: 10px;">
                                        <h6 style="text-align:justify;">Observações</h6>
                                        <textarea class="col-md-8" placeholder="Digite aqui" style="float:left;"></textarea>
                                        <button type="button" class="btn btn-md col-md-2" style="background-color: #f05642; color:white; float:right;">Adicionar</button>
                                    </div>
                                </div>                                
                                <hr>
                                <div class="row">
                                    <h6>Produto</h6>
                                    <div class="col-md-6">
                                        <img src="{{asset('images/produto-imagem.svg') }}" class="bordaImagem card-img-top" style="text-align: center;" width="200px" height="200px">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Descrição</h5>
                                        <p style="text-align:justify;">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In arcu nunc, sollicitudin efficitur urna eget, varius euismod leo. Duis a dolor ipsum. Nullam dapibus tincidunt elit nec venenatis. Sed quis ante felis.
                                        </p>
                                        <p style="text-align: justify;">Serve ? pesssoas</p>
                                    </div>
                                    <div class="col-md-12" style="margin-top: 10px;">
                                        <h6 style="text-align:justify;">Observações</h6>
                                        <textarea class="col-md-8" placeholder="Digite aqui" style="float:left;"></textarea>
                                        <button type="button" class="btn btn-md col-md-2" style="background-color: #f05642; color:white; float:right;">Adicionar</button>
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
@endsection
