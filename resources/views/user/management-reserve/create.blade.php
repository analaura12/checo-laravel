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
                                            Efetuar reserva
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <section class="signup-step-container">
                                            <div class="container">
                                                <div class="row d-flex justify-content-center">
                                                    <div class="col-md-12">
                                                        <div class="wizard">
                                                            <div class="wizard-inner">
                                                                <div class="connecting-line"></div>
                                                                <ul class="nav nav-tabs" role="tablist">
                                                                    <li role="presentation" class="active">
                                                                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span> <i>Step 1</i></a>
                                                                    </li>
                                                                    <li role="presentation" class="disabled">
                                                                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab">2</span> <i>Step 2</i></a>
                                                                    </li>
                                                                    <li role="presentation" class="disabled">
                                                                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab">3</span> <i>Step 3</i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <form role="form" method="POST" action="{{route('user.management.reserve.store')}}" class="login-box">
                                                                @csrf
                                                                <input type="hidden" name="establishment_id" value="{{$establishment_id}}">
                                                                <div class="tab-content" id="main_form">
                                                                    <div class="tab-pane active" role="tabpanel" id="step1">
                                                                        <h4 class="text-center">Selecione o produto</h4>
                                                                        <div class="row">
                                                                            <div class="container">
                                                                                <div class="row">      
                                                                                    @foreach($products as $product)                                  
                                                                                    <div class="col-md-4 col-lg-4 col-sm-4">
                                                                                      <label>
                                                                                        <input type="radio" name="product_id" value="{{$product->id}}" class="card-input-element" />
                                                                                          <div class="panel panel-default card-input">
                                                                                            <div class="card" style="width: 13rem;">
                                                                                                <img class="card-img-top" src="data:image;base64,{{$product->image}}" alt="" />
                                                                                                <div class="card-body">
                                                                                                  <h6 class="card-title">{{$product->name}}</h6>
                                                                                                  <p class="card-text"><p>
                                                                                                  {{--  <a href="#" class="btn btn-primary">Go somewhere</a>  --}}
                                                                                                </div>
                                                                                            </div>
                                                                                          </div>
                                                                                      </label>
                                                                                    </div>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="list-inline pull-right">
                                                                            <li><button type="button" class="default-btn next-step">Próximo</button></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="tab-pane" role="tabpanel" id="step2">
                                                                        <h4 class="text-center">Selecione a mesa</h4>
                                                                        <div class="row">
                                                                            @foreach($tables as $table)                                  
                                                                            <div class="col-md-4 col-lg-4 col-sm-4">
                                                                                <label>
                                                                                  <input type="radio" name="table_id" value="{{$table->id}}" class="card-input-element" />
                                                                                    <div class="panel panel-default card-input">
                                                                                        <div class="card" style="width: 14rem;">
                                                                                            <div class="card-body">
                                                                                              <h5 class="card-title">Mesa #{{$table->number}}</h5>
                                                                                              <h6 class="card-subtitle mb-2 text-muted">Número de cadeiras: {{$table->number_of_chairs}}</h6>
                                                                                              <p class="card-text">
                                                                                                  {{$table->description}}
                                                                                              </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </label>
                                                                            </div>    
                                                                            @endforeach
                                                                        </div>
                                                                        <ul class="list-inline pull-right">
                                                                            <li><button type="button" class="default-btn prev-step">Voltar</button></li>
                                                                            <li><button type="button" class="default-btn next-step skip-btn">Pular</button></li>
                                                                            <li><button type="button" class="default-btn next-step">Continuar</button></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="tab-pane" role="tabpanel" id="step3">
                                                                        <h4 class="text-center">Informações Adicionais</h4>
                                                                         <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label>Data *</label> 
                                                                                    <input class="form-control" type="date" name="date" placeholder=""> 
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label>Demo</label> 
                                                                                    <input class="form-control" type="time" name="hour" placeholder=""> 
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="form-group">
                                                                                    <label for="exampleFormControlTextarea1">Observações</label>
                                                                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="observation" rows="3"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="list-inline pull-right">
                                                                            <li><button type="button" class="default-btn prev-step">Voltar</button></li>
                                                                            <li><button type="sybmit" class="default-btn next-step">Salvar</button></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
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
  

