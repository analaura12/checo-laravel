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
                                            Listagem de Avaliações
                                        </h4>
                                        <h4>
                                            @php
                                            $total = $ratings->sum('evaluate_score');
                                            $quantidade = $ratings->count();
                                            $media = $total / $quantidade;
                                            @endphp
                                            <b>Avaliação média: {{ $media }} </b>
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            @if(isset($ratings) && !empty($ratings))
                                            <table class="table text-center">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Nome do cliente</th>
                                                    <th scope="col">Avaliação</th>
                                                    <th scope="col">Descrição</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($ratings as $rating)
                                                    <tr>
                                                        <td>{{$rating->user->name}}</td>
                                                        <td>{{$rating->evaluate_score}}</td>
                                                        <td>{{$rating->description ? $rating->description :  '-'}}</td>
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