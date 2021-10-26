@extends('layouts.app')

@section('content')
<div class="container-scroller">
    @include('layouts.establishment.menu')
    <div class="container-fluid page-body-wrapper">
        @include('layouts.establishment.sidebar')
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="cards-1 bg-gray">
                    <div class="container-fluid">
                        <div class="container">
                            @include('layouts.alerts.success')
                            @include('layouts.alerts.error')
                            <div class="row">
                            <div class="card">
                                    <div class="card-header">
                                        <h4>
                                            <i class="fas fa-concierge-bell"></i>
                                            Listagem de Produtos
                                        </h4>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Ações
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="{{route('product.create')}}">
                                                    <i class="fas fa-concierge-bell"></i>
                                                    Adicionar nova Produto
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            @if(isset($products) && !empty($products))
                                            <table class="table text-center">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Nome</th>
                                                    <th scope="col">Categoria</th>
                                                    <th scope="col">Restrição Alimentar</th>
                                                    <th scope="col">Preço</th>
                                                    <th scope="col"></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($products as $product)
                                                    <tr>
                                                        <td>{{$product->name}}</td>
                                                        <td>{{$product->category}}</td>
                                                        <td>{{$product->food_restriction}}</td>
                                                        <td>{{$product->price}}</td>
                                                        <td>
                                                            <a  class="btn btn-primary" alt="Editar" title="Editar produto"
                                                            data-original-title="Editar mesa" href="{{route('product.edit', $product->id)}}">
                                                            <i class="fas fa-edit"></i>
                                                            </a>
                                                            <a  class="btn btn-danger delete-confirm" title="Remover produto"
                                                                data-original-title="Remover informação" href="{{route('product.destroy', $product->id)}}">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            @else
                                            <h6>Não há registros</h6>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- <div class="card-footer"> 
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')

@endsection