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
                            <div class="row">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>
                                            <i class="fas fa-concierge-bell"></i>
                                            Edição Mesas
                                        </h4>
                                        <a role="button" href="{{route('table')}}" class="btn btn-secondary">Retornar para listagem</a>
                                    </div>
                                    <form class="form" method="POST" action="{{route('table.update', $table->id)}}">
                                        <div class="card-body">
                                            @include('establishment.table.form')
                                        </div>
                                        <div class="card-footer flex-root"> 
                                            <button type="submit" class="btn btn-success float-right">Atualizar</button>
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