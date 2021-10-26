<nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand logo-image" href="{{route('home')}}">
            <img src="{{asset('images/logo-checo.png')}}" alt="alternative">
        </a>
        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ms-auto navbar-nav-scroll">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">Quem Somos</a>
                </li>
                {{--  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Serviços</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown01">
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li><a class="dropdown-item" href="">Usuário</a></li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li><a class="dropdown-item" href="">Estabelecimento</a></li>
                    </ul>
                </li>  --}}
            </ul>
            <span class="nav-item">
                <a class="btn-solid-sm" href="{{route('login')}}">
                    <i class="fas fa-user"></i>                    
                    Sou um cliente
                </a>
            </span>
            <span class="nav-item">
                <a class="btn-solid-sm" href="{{route('establishment.login')}}">
                    <i class="fas fa-utensils"></i>                    
                    Sou um restaurante
                </a>
                {{--  <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
                </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>  --}}
            </span>
        </div>
    </div>
</nav>