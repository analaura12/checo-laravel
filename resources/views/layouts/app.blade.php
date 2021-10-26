<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Checo">
    <meta name="author" content="Equipe">
    <!-- CSRF Token -->
    <title>@yield('title')</title>
 
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link href="{{ asset('css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{asset('css/home-user.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{asset('vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/dashboard.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/home-commerce.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/pedido.css')}}">

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('images/logo-checo.png')}}">
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Footer Index -->
    <div class="footer bg-gray">
        <img class="decoration-circles" src="{{asset('images/decoration-circles.png')}}" alt="alternative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4> In hac habitasse platea dictumst quisque sagittis.</h4>
                    <div class="social-container">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-youtube fa-stack-1x"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <ul class="list-unstyled li-space-lg p-small">
                        <li><a href="">Quem somos</a></li>
                        <li><a href="">Termos e Condições</a></li>
                        <li><a href="">Política Privacidade</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <p class="p-small statement">Copyright © <a href="#">CHECO</a></p>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <p class="p-small statement">Desenvolvidor por CHECO</p>
                </div>
            </div>
        </div>
    </div>
    <button onclick="topFunction()" id="myBtn">
        <img src="{{asset('images/up-arrow.png')}}" alt="alternative">
    </button>
    
    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    {{--  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>  --}}
    {{--  <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>  --}}
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/home-commerce.js') }}"></script>
    <script src="{{ asset('js/statuspedido.js') }}"></script>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>

    <script src="{{asset('js/dashboard/off-canvas.js')}}"></script>
    <script src="{{asset('js/dashboard/hoverable-collapse.js')}}"></script>
    <script src="{{asset('js/dashboard/template.js')}}"></script>
    <script src="{{asset('js/dashboard/todolist.js')}}"></script>
    <script src="{{asset('js/dashboard/dashboard.js')}}"></script>
    <script src="{{asset('js/dashboard/Chart.roundedBarCharts.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">   
        $('#dropdownMenuButton').dropdown();
        
        $('.tipoComida').slick({
            dots: false,
            slidesToShow: 5,
            slidesToScroll: 1,
            touchMove: true,
            prevArrow: '<button type="button" id= "setinha" data-role="none" class="slick-prev"><span class="fas fa-arrow-left"></span></button>',
            nextArrow: '<button type="button" id= "setinha" data-role="none" class="slick-next"><span class="fas fa-arrow-right"></span></button>',
        });
    
        $('.tipoEstabelecimento').slick({
            dots: false,
            slidesToShow: 5,
            slidesToScroll: 1,
            touchMove: true,
            prevArrow: '<button type="button" id= "setinha" data-role="none" class="slick-prev"><span class="fas fa-arrow-left"></span></button>',
            nextArrow: '<button type="button" id= "setinha" data-role="none" class="slick-next"><span class="fas fa-arrow-right"></span></button>',
        });

        @hasSection ('javascript')
            @yield('javascript')
        @endif
    </script>
</body>
</html>
