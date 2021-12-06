<?php $__env->startSection('content'); ?>

<?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-5">
                <div class="text-container">
                    <h5 class="card-title">Reserve seus pedidos com antecedência!</h5>
                    <p>Com o CHE CO você pode reservar suas mesas e pedidos antes mesmo de estar lá! Aproveite bares e restaurantes com tranquilidade! </p>
                    <a class="btn-solid-lg" href="#">Saiba mais</a>
                </div>
            </div>
            <div class="col-lg-6 col-xl-7">
                <div class="image-container">
                    <img class="img-fluid" src="<?php echo e(asset('images/header-image.png')); ?>" alt="alternative">
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Serviços -->
<div id="services" class="cards-1 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Explore nossos serviços</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="card">
                    <div class="card-icon">
                        <span class="fas fa-headphones-alt"></span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Visibilidade do seu comércio</h5>
                        <p>Quando um cliente usa o Che Co ele pode filtrar os restaurantes de acordo com a categoria, se o seu restaurante for da categoria desejada, iremos recomendá-los aos clientes para que eles possam analisar as refeições do seu comércio, isso trará uma maior visibilidade para você. Se o seu restaurante se tornar um dos destaques, podemos recomendá-lo também na página inicial do cliente. </p>
                        <a class="read-more no-line" href="">Saiba mais <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <!-- Card -->
                <div class="card">
                    <div class="card-icon red">
                        <span class="far fa-clipboard"></span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Oportunidade</h5>
                        <p>Esse website trás oportunidades para ambos os lados: para o comércio e para o cliente. Ambos poderão poupar tempo com a realização de reservas, trazendo diversos outros benefícios para ambos, incluindo a satisfação e um melhor gerenciamento das reservas (para o estabelecimento) e de tempo (para o cliente). </p>
                        <a class="read-more no-line" href="">Saiba mais <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <!-- Card -->
                <div class="card">
                    <div class="card-icon green">
                        <span class="far fa-comments"></span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Reserve seus pedidos com antecedência!</h5>
                        <p>Com o CHE CO você pode ter sua refeição favorita e realizar encontros com os amigos no seu lugar favorito sem ter que esperar, é só fazer a reserva, com antecedência, da sua comida e mesa, chegar e aproveitar. </p>
                        <a class="read-more no-line" href="">Saiba mais <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\checo-laravel-develop\resources\views/index.blade.php ENDPATH**/ ?>