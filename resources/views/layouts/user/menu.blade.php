<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="../establishment/home-establishment.php"> <img src="{{asset('images/logo-checo.png')}}"
                alt="alternative"></a>
        <a class="navbar-brand brand-logo-mini" href="../establishment/home-establishment.php"> <img src="{{asset('images/logo-checo.png')}}"
                alt="alternative"></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item">
                {{auth()->guard('web')->user()->name}}
            </li>
            <li class="nav-item">
                <span class="nav-item">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                     Sair
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </span>
            </li>
        </ul>
    </div>
</nav>