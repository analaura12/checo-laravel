<nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand logo-image" href="<?php echo e(route('home')); ?>">
            <img src="<?php echo e(asset('images/logo-checo.png')); ?>" alt="alternative">
        </a>
        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ms-auto navbar-nav-scroll">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo e(route('index')); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('about')); ?>">Quem Somos</a>
                </li>
                
            </ul>
            <span class="nav-item">
                <a class="btn-solid-sm" href="<?php echo e(route('login')); ?>">
                    <i class="fas fa-user"></i>                    
                    Sou um cliente
                </a>
            </span>
            <span class="nav-item">
                <a class="btn-solid-sm" href="<?php echo e(route('establishment.login')); ?>">
                    <i class="fas fa-utensils"></i>                    
                    Sou um restaurante
                </a>
                
            </span>
        </div>
    </div>
</nav><?php /**PATH C:\wamp64\www\checo-laravel-develop\resources\views/menu.blade.php ENDPATH**/ ?>