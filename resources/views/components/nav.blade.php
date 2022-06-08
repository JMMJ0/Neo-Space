<div>
    <header>
        <div class="container">
            <nav id="navigation">
                <a href="/" class="logo">
                    <div><img src="/svg/LogoWhite.svg" alt="SpaceNeo" /></div>
                </a>
                <a aria-label="mobile menu" class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
                <ul class="menu-left">
                    <li><a href="/">Inicio</a></li>
                    <li><a href="{{ url('cohete') }}">Cohetes</a></li>
                    <li><a href="{{ url('companies') }}">Compañias</a></li>
                    <li><a href="{{ url('destinos') }}">Destinos</a></li>
                    @auth
                        <li>
                            <div class="dropDown">
                                <a class="dropbtn" href="#">{{ Auth::user()->name }}</a>
                                <div class="dropDown-content">
                                    <a href="{{ route('Users.profile') }}">Mi Perfil</a>
                                    <a href="{{route('Users.MisViajes')}}">Mis Viajes</a>
                                    @if (Auth::user()->hasRole('admin'))
                                        <a href="{{route('Admin.admin')}}">Administrar</a>
                                    @endif
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="route('logout')" onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                                            {{ __('Log Out') }}</a>
                                    </form>
                                </div>
                            </div>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}">Log In</a></li>
                        <li><a href="{{ route('register') }}">Registrarse</a></li>
                    @endauth
                </ul>
            </nav>
        </div>
    </header>
</div>
