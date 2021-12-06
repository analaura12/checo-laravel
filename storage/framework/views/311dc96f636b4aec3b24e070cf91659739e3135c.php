<?php $__env->startSection('content'); ?>

<?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<header class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1 mt-3">
                <h1>
                    <i class="fas fa-users"></i> Sobre nós
                </h1>
            </div>
        </div>
    </div>
</header>
<div class="ex-basic-1 pt-4">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <p>Nós somos uma equipe de estudantes do curso de análise e desenvolvimento de sistemas (ADS) do Instituto Federal de São Paulo (IFSP), do Campus de Jacareí, que se reuniu para a criação desse projeto e desse website. </p>
                <p class="mb-5">Nosso objetivo é ajudar os estabelecimentos e os clientes com um site de reserva de comida e mesa, o qual é possível facilitar a vida das pessoas e ajudar na proteção delas contra o coronavírus. Com esse website não há mais a necessidade de esperar em filas ou esperar pela comida ficar pronta, você apenas precisa escolher sua comida ou restaurante favorito e reservar sua refeição e mesa de forma online.</p>

                <h2 class="mb-3">Uma história de sucesso!</h2>
                <p>O Che Co foi lançado a pouco tempo e já está fazendo sucesso com os estabelecimentos e com os clientes. Com o seu fácil uso e sua grande utilidade, ele vem facilitando a vida das pessoas, que não precisam mais esperar em filas ou pela comida, e dos estabelecimentos, que agora conseguem gerenciar melhor as suas reservas, mesas e clientes. A reserva é feita toda online, poupando tempo e trazendo benefícios para ambos os lados. Alguns dos benefícios comprovados são:</p>
            </div>
        </div> 
    </div>
</div>
<div class="ex-cards-1 pt-3 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Card -->
                <div class="card">
                    <ul class="list-unstyled">
                        <li class="d-flex">
                            <span class="fa-stack">
                            <span class="fas fa-circle fa-stack-2x"></span>
                            <span class="fa-stack-1x">1</span>
                            </span>
                            <div class="flex-grow-1">
                                <h5>Poupamos o seu tempo de espera em fila</h5>
                                <p>Para os usuários, não há mais a necessidade de esperar em filas, basta realizar a sua reserva online e curtir o momento com seus amigos na hora marcada. Para os estabelecimentos, isso trás uma maior visibilidade para o seu comércio e ambos os lados saem felizes</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <ul class="list-unstyled">
                        <li class="d-flex">
                            <span class="fa-stack">
                            <span class="fas fa-circle fa-stack-2x"></span>
                            <span class="fa-stack-1x">2</span>
                            </span>
                            <div class="flex-grow-1">
                                <h5>Te ajudamos na proteção contra o Coronavirus</h5>
                                <p>Nessa pandemia, o que menos queremos é estar em lugares muito aglomerados por 
conta do vírus. Com este website é possível evitar a aglomeração realizando reservas, e protegendo todas as pessoas.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <ul class="list-unstyled">
                        <li class="d-flex">
                            <span class="fa-stack">
                            <span class="fas fa-circle fa-stack-2x"></span>
                            <span class="fa-stack-1x">2</span>
                            </span>
                            <div class="flex-grow-1">
                                <h5>Pensamos nos clientes <br></h5>
                                <p>No CHE CO é possível analisar os estabelecimentos e as refeições deles, com isso é possível verificar se o orçamento cabe no bolso do usuário ou se há alguma coisa na comida que o mesmo não pode comer. </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\checo-laravel-develop\resources\views/about.blade.php ENDPATH**/ ?>