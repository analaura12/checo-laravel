@extends('layouts.app')

@section('content')
<div class="container-scroller">
    @include('layouts.user.menu')
    <div class="container-fluid page-body-wrapper">
        @include('layouts.user.sidebar')
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
                                            <i class="ti-ticket menu-icon"></i>
                                            Listagem de reservas
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                        <table class="table text-center">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Número da reserva</th>
                                                    <th scope="col">Estabelecimento</th>
                                                    <th scope="col">Data</th>
                                                    <th scope="col">Horário</th>
                                                    <th scope="col">Número da mesa</th>
                                                    <th scope="col">Produto</th>
                                                    <th scope="col">Valor</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col"></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @if(isset($reserves) && !empty($reserves))
                                                        @foreach ($reserves as $res)
                                                            <tr>
                                                                <td>{{ $res->id }}</td>
                                                                <td>
                                                                    @foreach ($establishments as $est)
                                                                        @if($res->establishment_id == $est->id)
                                                                            {{ $est->name }}
                                                                        @endif
                                                                    @endforeach
                                                                </td>
                                                                <td>{{ $res->date }}</td> 
                                                                <td>{{ $res->hour }}</td>
                                                                <td>
                                                                    @foreach ($tables as $tab)
                                                                        @if($res->table_id == $tab->id)
                                                                            {{ $tab->number }}
                                                                        @endif
                                                                    @endforeach
                                                                </td>
                                                                <td> 
                                                                    @foreach ($products as $pro)
                                                                        @if($res->product_id == $pro->id)
                                                                            {{ $pro->name }}
                                                                        @endif 
                                                                    @endforeach
                                                                </td>
                                                                <td>
                                                                    @foreach ($products as $pro)
                                                                        @if($res->product_id == $pro->id)
                                                                            R${{ $pro->price }}
                                                                        @endif
                                                                    @endforeach
                                                                </td>
                                                                <td>
                                                                    @switch($res->status_id)
                                                                        @case(1)
                                                                            <span class="grey"><i class="fas fa-clock" title="Pendente"></i></span>
                                                                            @break
                                                                        @case(2)
                                                                            <span class="green"><i class="fas fa-check-circle" title="Aprovado"></i></span>
                                                                            @break
                                                                        @case(3)
                                                                            <span class="red"><i class="far fa-times-circle" title="Desaprovado"></i></span>
                                                                            @break
                                                                        @case(4)
                                                                            <span class="grey"><i class="fas fa-calendar-check" title="Finalizada"></i></span>
                                                                            @break
                                                                        @case(5)
                                                                            <span class="red"><i class="fas fa-calendar-times" title="Cancelada"></i></span>
                                                                            @break
                                                                        @default
                                                                        <span class="green"><i class="fas fa-calendar-day" title="Em andamento"></i></span>
                                                                    @endswitch
                                                                </td>
                                                                <td>
                                                                    @if($res->status_id == 1 || $res->status_id == 2 || $res->status_id == 6)
                                                                        <a  class="btn btn-danger delete-confirm" title="Cancelar"
                                                                            data-original-title="Cancelar" href="{{route('reserve.update', $res->id)}}">
                                                                            <i class="fas fa-times"></i>
                                                                        </a>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        <h5>Não há reservas.</h5>
                                                    @endif
                                                </tbody>
                                            </table>
                                          <!--  @if(isset($tables) && !empty($tables))
                                            
                                            @foreach($tables as $table)
                                                @endforeach
                                            @else
                                            <h6>Não há registros</h6>
                                            @endif -->
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
