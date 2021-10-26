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
                                            Adicionar Produto
                                        </h4>
                                        <a role="button" href="{{route('product')}}" class="btn btn-secondary">Retornar para listagem</a>
                                    </div>
                                    <form class="form" method="POST" action="{{route('product.store')}}">
                                        <div class="card-body">
                                                @include('establishment.product.form')
                                        </div>
                                        <div class="card-footer flex-root"> 
                                            <button type="submit" class="btn btn-success float-right">Adicionar</button>
                                        </div>
                                    </form>
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