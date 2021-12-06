<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Checo">
    <meta name="author" content="Equipe">
    <!-- CSRF Token -->
    <title><?php echo $__env->yieldContent('title'); ?></title>
 
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link href="<?php echo e(asset('css/swiper.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/home-user.css')); ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('vendors/feather/feather.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendors/ti-icons/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendors/css/vendor.bundle.base.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendors/ti-icons/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/dashboard.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/home-commerce.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/pedido.css')); ?>">

    <!-- Favicon  -->
    <link rel="icon" href="<?php echo e(asset('images/logo-checo.png')); ?>">
</head>
<body>
    <div id="app">
        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
    <!-- Footer Index -->
    <div class="footer bg-gray">
        <img class="decoration-circles" src="<?php echo e(asset('images/decoration-circles.png')); ?>" alt="alternative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4> Com o CHE CO não é necessário esperar em filas, basta apenas reservar a refeição e a mesa, chegar e comer.</h4>
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
        <img src="<?php echo e(asset('images/up-arrow.png')); ?>" alt="alternative">
    </button>
    
    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    
    <script src="<?php echo e(asset('js/swiper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/scripts.js')); ?>"></script>
    <script src="<?php echo e(asset('js/home-commerce.js')); ?>"></script>
    <script src="<?php echo e(asset('js/statuspedido.js')); ?>"></script>
    
    
    <script src="<?php echo e(asset('vendors/js/vendor.bundle.base.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/chart.js/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/datatables.net/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js')); ?>"></script>

    <script src="<?php echo e(asset('js/dashboard/off-canvas.js')); ?>"></script>
    <script src="<?php echo e(asset('js/dashboard/hoverable-collapse.js')); ?>"></script>
    <script src="<?php echo e(asset('js/dashboard/template.js')); ?>"></script>
    <script src="<?php echo e(asset('js/dashboard/todolist.js')); ?>"></script>
    <script src="<?php echo e(asset('js/dashboard/dashboard.js')); ?>"></script>
    <script src="<?php echo e(asset('js/dashboard/Chart.roundedBarCharts.js')); ?>"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">   
        $('#dropdownMenuButton').dropdown();
        
        


        // ------------step-wizard-------------
        $(document).ready(function () {
            $('.nav-tabs > li a[title]').tooltip();
            
            //Wizard
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

                var target = $(e.target);
            
                if (target.parent().hasClass('disabled')) {
                    return false;
                }
            });

            $(".next-step").click(function (e) {

                var active = $('.wizard .nav-tabs li.active');
                active.next().removeClass('disabled');
                nextTab(active);

            });
            $(".prev-step").click(function (e) {

                var active = $('.wizard .nav-tabs li.active');
                prevTab(active);

            });
        });

        function nextTab(elem) {
            $(elem).next().find('a[data-toggle="tab"]').click();
        }
        function prevTab(elem) {
            $(elem).prev().find('a[data-toggle="tab"]').click();
        }


        $('.nav-tabs').on('click', 'li', function() {
            $('.nav-tabs li.active').removeClass('active');
            $(this).addClass('active');
        });

        <?php if (! empty(trim($__env->yieldContent('javascript')))): ?>
            <?php echo $__env->yieldContent('javascript'); ?>
        <?php endif; ?>
    </script>
</body>
</html>
<?php /**PATH C:\wamp64\www\checo-laravel-develop\resources\views/layouts/app.blade.php ENDPATH**/ ?>