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
                                                    <th scope="col">Nome do Cliente</th>
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
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Outback</td>
                                                        <td>03/11/21</td>
                                                        <td>20:30</td>
                                                        <td>3</td>
                                                        <td>Porção</td>
                                                        <td>R$50</td>
                                                        <td>
                                                            <span class="green">
                                                                <i class="fas fa-check-circle" title="Ativo"></i>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <a  class="btn btn-danger delete-confirm" title="Cancelar"
                                                                data-original-title="Cancelar" href="">
                                                                <i class="fas fa-times"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
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
