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
                                                            <th scope="col">Ações</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if (isset($reserves) && !empty($reserves))
                                                            @foreach ($reserves as $res)
                                                                <tr>
                                                                    <td>{{ $res->id }}</td>
                                                                    <td>
                                                                        @foreach ($user as $usr)
                                                                            @if ($res->user_id == $usr->id)
                                                                                {{ $usr->name }}
                                                                            @endif
                                                                        @endforeach
                                                                    </td>
                                                                    <td>{{date('d/m/Y', strtotime($res->date))}}</td>
                                                                    <td>{{ $res->hour }}</td>
                                                                    <td>
                                                                        @foreach ($tables as $tab)
                                                                            @if ($res->table_id == $tab->id)
                                                                                {{ $tab->number }}
                                                                            @endif
                                                                        @endforeach
                                                                    </td>
                                                                    <td>
                                                                        @foreach ($products as $prod)
                                                                            @if ($res->product_id == $prod->id)
                                                                                {{ $prod->name }}
                                                                            @endif
                                                                        @endforeach
                                                                    </td>
                                                                    <td>
                                                                        @foreach ($products as $prod)
                                                                            @if ($res->product_id == $prod->id)
                                                                                {{ $prod->price }}
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
                                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-{{$res->id}}"  title="Ver detalhes"
                                                                        data-original-title="Ver detalhes">
                                                                            <i class="fas fa-list"></i>
                                                                        </button>
                                                                        @if($res->status_id == 1)
                                                                        <a class="btn btn-success" title="Aprovar"
                                                                            data-original-title="Aprovar" href="{{route('status.update',['id' => $res->id, 'status_id' => 2] )}}">
                                                                            <i class="fas fa-check"></i>
                                                                        </a>
                                                                        @endif
                                                                        @if($res->status_id == 1)
                                                                        <a class="btn btn-danger" title="Desaprovar"
                                                                            data-original-title="Desaprovar" href="{{route('status.update', ['id' => $res->id, 'status_id' => 3] )}}">
                                                                            <i class="far fa-times-circle"></i>
                                                                        </a>
                                                                        @endif
                                                                        @if($res->status_id == 2)
                                                                        <a class="btn btn-warning" title="Em andamento"
                                                                            data-original-title="Em andamento" href="{{route('status.update', ['id' => $res->id, 'status_id' => 6] )}}">
                                                                            <i class="fas fa-spinner"></i>
                                                                        </a>
                                                                        @endif
                                                                        @if($res->status_id == 6)
                                                                        <a class="btn btn-info" title="Finalizada"
                                                                            data-original-title="Finalizada" href="{{route('status.update',  ['id' => $res->id, 'status_id' => 4] )}}">
                                                                            <i class="fas fa-check-double"></i>
                                                                        </a>
                                                                        @endif
                                                                        @if($res->status_id == 4)
                                                                        <a class="btn btn-info" title="Avaliar Cliente"
                                                                        data-toggle="modal" data-target="#avaliable-{{$res->id}}">
                                                                            <i class="fas fa-star"></i>
                                                                        </a>
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                @include('establishment.reserve.modal')
                                                                @include('establishment.reserve.avaliate')
                                                            @endforeach
                                                        @else
                                                            <h5>Não há reservas.</h5>
                                                        @endif
                                                    </tbody>
                                                </table>
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
    <script>
    function setNumber(number){
        $("#classificacao").val(number);
    }
</script>