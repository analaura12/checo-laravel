@extends('layouts.app')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap');

body {
    font-family: 'Roboto', sans-serif;
    font-size: 13px;
    font-weight: 500;
    color: #333;
    min-width: 300px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    -ms-font-smoothing: antialiased;
}

button:focus{
    outline: none;
}

.page-ath-wrap {
    display: flex;
    justify-content: center;
    align-items: center;
}

.page-ath-content {
    background: #fff;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 60px 40px;
}

.page-ath-heading {
    font-size: 28px;
    font-weight: 700;
    color: #231f20;
    padding-bottom: 40px;
}


.page-ath-form,
.page-ath-header,
.page-ath-footer,
.page-ath-text {
    width: 100%;
    margin-left: auto;
    margin-right: auto;
}

.page-ath-form {
    padding-bottom: 100px;
}

.page-ath-header {
    visibility: hidden;
    opacity: 0;
}

.page-ath-footer {
    font-family: 'Roboto', sans-serif;
    padding-top: 40px;
}
.page-ath-footer p{
    font-size: 15px;
}
.page-ath-footer p a{
    display: inline-block;
    margin-left: 3px;
    color: #000;
    font-weight: 600;
    text-decoration: underline;
}

.page-ath-footer p a:hover{
    color: #5161ce;
}
.auth-part-logo {
    
}
.page-content {
    margin-left: 260px;
    transition: all .5s;
    padding: 15px;
}
.page-content.page-active{
    margin-left: 0px;
}




/*---------signup-step-------------*/
.register-form-content{
    justify-content: center;
}
.register-form-content .page-ath-form{
    padding-bottom: 0px;
}
.register-form-content .form-align-box,
.register-form-content .page-ath-form,
.register-form-content .wizard,
.register-form-content .register-wizard-box,
.register-form-content .tab-content,
.register-form-content .wizard .tab-pane{
    height: 100%;
}
.register-form-content .page-ath-header{
    display: none;
}
.register-wizard-box .tab-pane h4{
    margin-top: 0px;
    font-size: 18px;
    color: #8e8c8c;
    margin-bottom: 12px;
}
.register-wizard-box .tab-pane h3{
    font-size: 26px;
    font-weight: 700;
    color: #231f20;
    padding-bottom: 25px;
}

.wizard {
    position: relative;
}
.wizard .nav-tabs {
    position: relative;
    margin-bottom: 0;
    border-bottom-color: transparent;
}

.wizard > div.wizard-inner {
    position: absolute;
    bottom: 20px;
}

.wizard .nav-tabs > li > a.active .round-tab, 
.wizard .nav-tabs > li > a.active:hover .round-tab, 
.wizard .nav-tabs > li > a.active:focus .round-tab{
    cursor: default;
    background-color: #5161ce;
    color: #fff;
}

.wizard li.active span.round-tab {
    background: #0db02b;
    color: #fff;
    border-color: #0db02b;
}
.wizard li.active span.round-tab i{
    color: #5bc0de;
}
.wizard .nav-tabs > li.active > a i{
    color: #0db02b;
}

.wizard .nav-tabs > li a {
    padding: 15px;
    position: relative;
}

.wizard .nav-tabs > li{
    width: 25%;
    position: relative;
}

.wizard .nav-tabs > li a .round-tab{
    width: 30px;
    height: 30px;
    color: #868cbd;
    font-weight: 600;
    background-color: #ced2f2;
    display: inline-block;
    border-radius: 50%;
    padding-top: 6px;
    text-align: center;
    z-index: 1;
    position: relative;
    transition: 0.5s;
}

.wizard .nav-tabs > li:before,
.wizard .nav-tabs > li:after{
    content: '';
    position: absolute;
    height: 2px;
    width: 100%;
    top: 50%;
    background-color: #ced2f2;
    left: 15px;
    transition: 0.5s;
}
.wizard .nav-tabs > li:after{
    background-color: #42b161;
    width: 0;    
}

.wizard .nav-tabs > li.done a .round-tab {
    background-color: #42b161;
    color: #fff;
}

.wizard .nav-tabs > li.done:after{
    width: 100%;
}

.wizard .nav-tabs > li.done.active a .round-tab{
    background-color: #5161ce;
    color: #fff;
}

.wizard .nav-tabs > li.done.active ~ li .round-tab {
    background: #ced2f2;
    color: #868cbd;
}

.wizard .nav-tabs > li.active:after, 
.wizard .nav-tabs > li.active~li:after{
    width: 0;
}


.wizard .nav-tabs > li:last-child:before,
.wizard .nav-tabs > li:last-child:after{
    display: none;
}

.wizard .nav-tabs > li a.disabled{
    cursor: not-allowed;
}
.wizard .nav-tabs > li a i{
    position: absolute;
    top: -15px;
    font-style: normal;
    font-weight: 400;
    white-space: nowrap;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 12px;
    font-weight: 700;
    color: #000;
}



.wizard .tab-content>.active{
    display: flex;
    justify-content: space-between;
    flex-direction: column;
}

.wizard .tab-pane {
    position: relative;
    padding-top: 40px;
}
.step-btn{
    background-color: transparent;
}
.step-btn i{
    width: 40px;
    height: 40px;
    background-color: #e9e9ea;
    display: inline-block;
    border-radius: 50%;
    color: #5e666b;
    font-size: 15px;
    text-align: center;
    padding-top: 12px;
}
.step-btn span{
    display: inline-block;
    font-weight: 700;
    font-size: 16px;
    color: #5e666b;
    letter-spacing: 0.3px;
}
.wizard h3 {
    margin-top: 0;
}
.prev-step,
.next-step{
    border: none;
    margin-top: 30px;
}
.prev-step span{
    margin-left: 10px;
}
.next-step span{
    margin-right: 10px;
    color: #5161ce;
}
.next-step i {
        box-shadow: 0px 4px 12px rgba(81, 97, 206, 0.5);
    background-color: #5161ce;
    color: #fff;
}

.form-input-steps .custom-control.custom-checkbox label{
    font-family: 'Roboto', sans-serif;
    font-size: 15px;
}

.form-input-steps .custom-control.custom-checkbox label a{
    display: inline-block;
    margin-left: 3px;
    color: #000;
    font-weight: 600;
    text-decoration: underline;
    
}
.form-input-steps .custom-control.custom-checkbox label a:hover{
    color: #5161ce;
}

.form-control {
    height: auto;
    padding: 16px 18px;
    border-radius: 13px;
    font-weight: 400;
    color: #333;
    border-color: #e4e4e4;
}

.list-inline>li {
    display: inline-block;
    padding-right: 5px;
    padding-left: 5px;
}
.progress{
  border-radius: 50px;
}
.progress-bar{
  background-color: #5161ce;
}
</style>
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
                                        <div class="table-responsive">
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-8">
                                                        <div class="page-ath-wrap">
                                                            <div class="page-ath-content register-form-content">
                                                                <div class="page-ath-form">
                                                                    <div class="form-align-box">
                                                                        <div class="wizard">
                                                                          <div class="progress" style="height: 30px;">
                                                                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="4" style="width: 25%;">
                                                                                  Step 1 of 4
                                                                                </div>
                                                                            </div>
                                                                            <form role="form" action="index.html" class="register-wizard-box">
                                                                                <div class="tab-content" id="main_form">
                                                                                    <div class="tab-pane active" role="tabpanel" id="step1">
                                                                                        <div class="form-input-steps">
                                                                                            <h4>Setup account for delivery</h4>
                                                                                            <h3>Personal information</h3>
                                                                                            <div class="form-group">
                                                                                                <label>First name</label>
                                                                                                <input type="text" class="form-control" name="" placeholder="Enter first name">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>Last name</label>
                                                                                                <input type="text" class="form-control" name="" placeholder="Enter last name">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>Business name (if required)</label>
                                                                                                <input type="text" class="form-control" name="" placeholder="Enter business name">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>ABN/TAX no. (if required)</label>
                                                                                                <input type="text" class="form-control" name="" placeholder="Enter ABN/TAX number">
                                                                                            </div>
                                                                                        </div>
                                                                                        <ul class="list-inline text-right">
                                                                                            <li>
                                                                                                <button type="button" class="step-btn prev-step"><i class="fa fa-chevron-left"></i><span>Back</span></button>
                                                                                            </li>
                                                                                            <li>
                                                                                                <button type="button" class="step-btn next-step"><span>Next</span><i class="fa fa-chevron-right"></i></button>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="tab-pane" role="tabpanel" id="step2">
                                                                                        <div class="form-input-steps">
                                                                                            <h4>Setup account for delivery</h4>
                                                                                            <h3>Contact information</h3>
                                                                                            <div class="form-group">
                                                                                                <label>Phone</label>
                                                                                                <input type="text" class="form-control" name="" placeholder="Enter phone number">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>Mobile</label>
                                                                                                <input type="text" class="form-control" name="" placeholder="Enter mobile number">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>Email</label>
                                                                                                <input type="text" class="form-control" name="" placeholder="Enter email address">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>Mobile</label>
                                                                                                <input type="text" class="form-control" name="" placeholder="Enter mobile number">
                                                                                            </div>
                                                                                        </div>
                                                                                        <ul class="list-inline text-right">
                                                                                            <li>
                                                                                                <button type="button" class="step-btn prev-step"><i class="fa fa-chevron-left"></i><span>Back</span></button>
                                                                                            </li>
                                                                                            <li>
                                                                                                <button type="button" class="step-btn next-step"><span>Next</span><i class="fa fa-chevron-right"></i></button>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="tab-pane" role="tabpanel" id="step3">
                                                                                        <div class="form-input-steps">
                                                                                            <h4>Setup account for delivery</h4>
                                                                                            <h3>Create password</h3>
                                                                                            <div class="form-group">
                                                                                                <label>Create new password</label>
                                                                                                <input type="password" class="form-control" name="" placeholder="Create a new password">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>Confirm Password</label>
                                                                                                <input type="text" class="form-control" name="" placeholder="Re-enter your password">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>Create new password</label>
                                                                                                <input type="password" class="form-control" name="" placeholder="Create a new password">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>Confirm Password</label>
                                                                                                <input type="text" class="form-control" name="" placeholder="Re-enter your password">
                                                                                            </div>
                                                                                        </div>
                                                                                        <ul class="list-inline text-right">
                                                                                            <li>
                                                                                                <button type="button" class="step-btn prev-step"><i class="fa fa-chevron-left"></i><span>Back</span></button>
                                                                                            </li>
                                                                                            <li>
                                                                                                <button type="button" class="step-btn next-step"><span>Next</span><i class="fa fa-chevron-right"></i></button>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="tab-pane" role="tabpanel" id="step4">
                                                                                        <div class="form-input-steps">
                                                                                            <h4>Setup account for delivery</h4>
                                                                                            <h3>Credit card information</h3>
                                                                                            <div class="form-group">
                                                                                                <label>Card holder name</label>
                                                                                                <input type="text" class="form-control" name="" placeholder="Enter card holder name">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>Card number</label>
                                                                                                <input type="text" class="form-control" name="" placeholder="Enter card number">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>MM/YY</label>
                                                                                                <input type="text" class="form-control" id="card-month-year" name="" placeholder="MM/YY">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>CCV/CVV</label>
                                                                                                <input type="text" class="form-control" name="" placeholder="CCV/CVV">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <div class="custom-control custom-checkbox">
                                                                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                                                    <label class="custom-control-label" for="customCheck1">I agree to all <a href="javascript:void(0)">Terms & Conditions</a></label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <ul class="list-inline text-right">
                                                                                            <li>
                                                                                                <button type="button" class="step-btn prev-step"><i class="fa fa-chevron-left"></i><span>Back</span></button>
                                                                                            </li>
                                                                                            <li>
                                                                                                <button type="button" class="step-btn next-step"><span>Finish</span><i class="fa fa-chevron-right"></i></button>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="clearfix"></div>
                                                                                </div>
                                                                            </form>
                                                                            <div class="wizard-inner">
                                                                                <ul class="nav nav-tabs" role="tablist">
                                                                                    <li role="presentation">
                                                                                        <a href="#step1" class="active" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true" data-step="1">
                                                                                            <span class="round-tab">1</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li role="presentation">
                                                                                        <a href="#step2" class="disabled" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false" data-step="2">
                                                                                            <span class="round-tab">2</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li role="presentation">
                                                                                        <a href="#step3" class="disabled" data-toggle="tab" aria-controls="step3" role="tab" data-step="3">
                                                                                            <span class="round-tab">3</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li role="presentation">
                                                                                        <a href="#step4" class="disabled" data-toggle="tab" aria-controls="step4" role="tab" data-step="4"> 
                                                                                           <span class="round-tab">4</span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                          
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
    <script type="javascript">
        $(document).ready(function () {
            $('.nav-tabs > li a[title]').tooltip();
            //Wizard
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                var $target = $(e.target);
                if ($target.hasClass('disabled')) {
                    return false;
                }
            
                // handle with prgressbar 
                var step = $(e.target).data('step');
                var percent = (parseInt(step) / 4) * 100;
                $('.progress-bar').css({ width: percent + '%' });
                $('.progress-bar').text('Step ' + step + ' of 4');
            
            });

            $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
                var $target = $(e.target);
                $target.parent().addClass('active');
            });

            $('a[data-toggle="tab"]').on('hide.bs.tab', function (e) {
                var $target = $(e.target);
                $target.parent().removeClass('active');
            });


            $(".next-step").click(function (e) {
                var $active = $('.wizard .nav-tabs li a.active');
                $active.parent().next().children().removeClass('disabled');
                $active.parent().addClass('done');
                nextTab($active);
            });

            $(".prev-step").click(function (e) {
                var $active = $('.wizard .nav-tabs li a.active');
                prevTab($active);
            });
        });

        function nextTab(elem) {
            $(elem).parent().next().find('a[data-toggle="tab"]').click();
        }
        function prevTab(elem) {
            $(elem).parent().prev().find('a[data-toggle="tab"]').click();
        }

    </script>
    