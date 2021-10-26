<nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
      <div class="container">
          <!-- Logo -->
          <a class="navbar-brand logo-image">
            <img src="{{asset('images/logo-checo.png')}}" alt="alternative">
          </a>
          <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
              <ul class="navbar-nav ms-auto navbar-nav-scroll">
                  <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page">Produtos</a>
                </li>
              </ul>
              <span class="nav-item">
                  <a class="btn-solid-sm" href="#carrinho">
                      <i class="fas fa-shopping-cart"></i>
                  </a>
              </span>
              <span class="nav-item">
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                 Sair
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </span>
          </div>
      </div>
  </nav>
