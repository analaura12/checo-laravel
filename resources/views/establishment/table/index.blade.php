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
                                            Listagem de Mesas
                                        </h4>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Ações
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="{{route('table.create')}}">
                                                    <i class="fas fa-concierge-bell"></i>
                                                    Adicionar nova mesa
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            @if(isset($tables) && !empty($tables))
                                            <table class="table text-center">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Número da mesa</th>
                                                    <th scope="col">Número de lugares</th>
                                                    <th scope="col">Descrição</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col"></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($tables as $table)
                                                    <tr>
                                                        <td>{{$table->number}}</td>
                                                        <td>{{$table->number_of_chairs}}</td>
                                                        <td>{{$table->description}}</td>
                                                        <td>
                                                            <span class="green">
                                                                <i class="fas fa-check-circle" title="Ativo"></i>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <a  class="btn btn-primary" alt="Editar" title="Editar mesa"
                                                            data-original-title="Editar mesa" href="{{route('table.edit', $table->id)}}">
                                                            <i class="fas fa-edit"></i>
                                                            </a>
                                                            <a  class="btn btn-danger delete-confirm" title="Remover informação"
                                                                data-original-title="Remover informação" href="{{route('table.destroy', $table->id)}}">
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
{{--  swal({
    title: "Deseja excluir a mesa?",
    text: "Essa ação não é reversível!",
    icon: "warning",
    buttons: {
        cancel: {
        text: "Cancelar",
        value: false,
        visible: true,
        className: "",
        closeModal: true,
        },
        confirm: {
        text: "OK",
        value: true,
        visible: true,
        className: "",
        closeModal: true
        }
    },
    dangerMode: true,
    })
    .then((willDelete) => {
    if (willDelete) {
        swal("Deletado com sucesso!", {
        icon: "success",
        });
    } else {
        swal("Operação cancelada.");
    }
    });'  --}}
@endsection