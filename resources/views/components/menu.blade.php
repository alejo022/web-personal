<nav
    @if (Route::is('inicio')) class="navbar navbar-expand-lg navbar-light bg-dark barra-inicio"
        @else
        class="navbar navbar-expand-lg navbar-light" style="background-color:  rgba(52, 58, 64,0.8);" @endif>
    <a class="navbar-brand text-white" href="{{ route('inicio') }}">ALEJANDRO VALENCIA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto w-100 justify-content-end">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('inicio') }}"><i class="fa-solid fa-house-user"></i> Inicio</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('sobre-mi') }}"><i class="fa-solid fa-address-card"></i> Sobre mi</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('habilidades') }}"><i class="fa-solid fa-list-check"></i>
                    Servicios</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('portafolio') }}"><i class="fa-solid fa-book-open"></i>
                    Portafolio</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('contacto') }}"><i class="fa-solid fa-address-book"></i> Contacto</a>
            </li>
            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li> --}}
            @auth

                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('profile.show') }}"><i class="fa-solid fa-toolbox"></i>
                        Administración</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fa-solid fa-right-from-bracket"></i> Cerrar sesión</a>
                </li>
            @else
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('login') }}"><i class="fa-solid fa-user"></i> Iniciar sesión</a>
                </li>
            @endauth
        </ul>
    </div>
</nav>
