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
                                                            @include('user.management-reserve.form')
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
  

