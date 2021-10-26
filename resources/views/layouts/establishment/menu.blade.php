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
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                    data-toggle="dropdown">
                    <i class="icon-bell mx-0"></i>
                    <span class="count"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                    aria-labelledby="notificationDropdown">
                    <p class="mb-0 font-weight-normal float-left dropdown-header">Notificações</p>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-success">
                                <i class="ti-info-alt mx-0"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject font-weight-normal">Existem reservas pendentes para aprovação</h6>
                            <p class="font-weight-light small-text mb-0 text-muted">
                                Agora pouco
                            </p>
                        </div>
                    </a>
                </div>
            </li>
            <li class="nav-item nav-profile">
                <a class="nav-link" href="#">
                    <img src="{{asset('images/dashboard/user.jpeg')}}" alt="profile" />
                </a>
            </li>
            <li class="nav-item">
                <i class="ti-power-off text-primary"></i> 
                <a href="{{route('establishment.logout')}}">
                    Sair
                </a>
            </li>
        </ul>
    </div>
</nav>