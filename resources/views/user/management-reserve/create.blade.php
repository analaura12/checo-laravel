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
                                                            <form role="form" action="index.html" class="login-box">
                                                                <div class="tab-content" id="main_form">
                                                                    <div class="tab-pane active" role="tabpanel" id="step1">
                                                                        <h4 class="text-center">Selecione o produto</h4>
                                                                        <div class="row">
                                                                            <div class="container">
                                                                                <div class="row">      
                                                                                    @foreach($products as $product)                                  
                                                                                    <div class="col-md-4 col-lg-4 col-sm-4">
                                                                                      <label>
                                                                                        <input type="radio" name="product" class="card-input-element" />
                                                                                          <div class="panel panel-default card-input">
                                                                                            <div class="card" style="width: 13rem;">
                                                                                                <img class="card-img-top" src="data:image;base64,{{$product->image}}" alt="" />
                                                                                                <div class="card-body">
                                                                                                  <h6 class="card-title">{{$product->name}}</h6>
                                                                                                  <p class="card-text"><p>
                                                                                                  <a href="#" class="btn btn-primary">Go somewhere</a>
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
                                                                                  <input type="radio" name="product" class="card-input-element" />
                                                                                    <div class="panel panel-default card-input">
                                                                                        
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
                                                                        <h4 class="text-center">Step 3</h4>
                                                                         <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Account Name *</label> 
                                                                                <input class="form-control" type="text" name="name" placeholder=""> 
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Demo</label> 
                                                                                <input class="form-control" type="text" name="name" placeholder=""> 
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Inout</label> 
                                                                                <input class="form-control" type="text" name="name" placeholder=""> 
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Information</label> 
                                                                                <div class="custom-file">
                                                                                  <input type="file" class="custom-file-input" id="customFile">
                                                                                  <label class="custom-file-label" for="customFile">Select file</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Number *</label> 
                                                                                <input class="form-control" type="text" name="name" placeholder=""> 
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Input Number</label> 
                                                                                <input class="form-control" type="text" name="name" placeholder=""> 
                                                                            </div>
                                                                        </div>
                                                                           </div>
                                                                        <ul class="list-inline pull-right">
                                                                            <li><button type="button" class="default-btn prev-step">Voltar</button></li>
                                                                            <li><button type="button" class="default-btn next-step skip-btn">Pular</button></li>
                                                                            <li><button type="button" class="default-btn next-step">Continuar</button></li>
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
  

