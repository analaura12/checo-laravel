
@extends('layouts.app')

@section('content')
<div class="container-scroller">
    @include('layouts.establishment.menu')
    <div class="container-fluid page-body-wrapper">
        @include('layouts.establishment.sidebar')
        <div class="main-panel">
   
    <!-- Header -->
    <header id="header" class="header estabelecimento">
        <div class="container">
            <h1>Pedidos</h1>
            <!--Pedidos-->
            <div class="boards">
                <div class="board">
                    <h3>Novo Pedido</h3>
                    <div class="dropzone">
                        <div class="card" draggable="true">
                            <div class="content"> Pedido exemplo</div>
                        </div>
                    </div>
                </div>
                <div class="board">
                    <h3>Em andamento</h3>
                    <div class="dropzone">
                        <div class="card" draggable="true">
                            <div class="content"> Pedido exemplo</div>
                        </div>
                    </div>
                </div>
                <div class="board">
                    <h3>Concluido</h3>
                    <div class="dropzone">
                        <div class="card" draggable="true">
                            <div class="content"> Pedido exemplo</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection