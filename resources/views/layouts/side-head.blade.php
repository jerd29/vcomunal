<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voto Comunal</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@yield('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css" integrity="sha512-OdEXQYCOldjqUEsuMKsZRj93Ht23QRlhIb8E/X0sbwZhme8eUw6g8q7AdxGJKakcBbv7+/PX0Gc2btf7Ru8cZA==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>
    <style>
        .dropdown-menu {
            background-color: #3c415c;
        }

        .dropdown-item{
            color: white;
        }

        .dropdown-menu > .dropdown-item:hover{
        /*Modifica lo que quieras*/
        background:rgb(105, 45, 5);
        color:white;
        }


         .cintillo {

            width: 100%;
            background-color: rgba(158,12,18,255); 
            height: 4rem;

        }

        .img-cintillo{
            height: 4rem;
            padding: 0%;
            vertical-align: top;
        }

        /* body{
            margin: 0;
        }  */

        body, html {
    height: 100%;
    scroll-behavior: smooth;
    position: relative;
}

.ocultar {
    display: none;
}

.fondo {
    
    background: url(../resources/img/banner.jpg)
    no-repeat center center fixed;
    /* background: url(../resources/img/MAPA-VNZLA.png)
    no-repeat center center fixed; */
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: 80% 20%;
    /* background-size: cover; */
    overflow-x: hidden;
    overflow-y: auto;

}

@media (max-width: 992px) {
    .h-md-100 {
        min-height: 100%;
        min-width: 130px;
    }

    .img-cintillo {
        display: none;
    }

    .titulo-cintillo{
        height: 100%;
        display: contents;
        color: white;
        display:flex;
        justify-content: center;
        align-items: center;
    }
}

    </style>
<body>

    
    <div class="container-fluid h-100 fondo">
        <div class="row d-flex flex-lg-column flex-row">
            <div class="cintillo">
                <img class="img-cintillo" src="../resources/img/cintillo-rec2.png" alt="" srcset="">
                <h3 class="ocultar titulo-cintillo">Voto Comunal</h3>
            </div>
            <aside class="col-2 col-lg-12 h-md-100 p-0 bg-dark fixed-top">
                <nav class="navbar navbar-expand navbar-dark bg-dark px-0 px-lg-2">
                    <div class="collapse navbar-collapse" id="nav">
                        <ul class="flex-column flex-lg-row navbar-nav w-100 justify-content-center align-items-center align-items-sm-start text-left text-lg-center">

                            <li class="nav-item dropdown active w-100 text-nowrap">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bullseye fa-fw"></i><span class="d-none d-sm-inline font-weight-bold">Elecciones</span></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="{{ route('tipo_eleccion.index')}}"><span class="d-none d-sm-inline font-weight-bold">Tipos de Eleccion</span></a>
                                  <a class="dropdown-item" href="{{ route('eleccion.index')}}"><span class="d-none d-sm-inline font-weight-bold">Elecciones</span></a>
                                  <a class="dropdown-item" href="#">Something else here</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown active w-100 text-nowrap">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-file" aria-hidden="true"></i><span class="d-none d-sm-inline font-weight-bold"> Reportes</span></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="{{ route('reportes.tnacional')}}"><span class="d-none d-sm-inline font-weight-bold">Total nacional</span></a>
                                  {{-- <a class="dropdown-item" href="{{ route('eleccion.index')}}"><span class="d-none d-sm-inline font-weight-bold">Elecciones</span></a> --}}
                                  <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown active w-100 text-nowrap">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-chart-line"></i><span class="d-none d-sm-inline font-weight-bold"> Graficas</span></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="##"><span class="d-none d-sm-inline font-weight-bold">Grafica Tiempo</span></a>
                                  {{-- <a class="dropdown-item" href="{{ route('eleccion.index')}}"><span class="d-none d-sm-inline font-weight-bold">Elecciones</span></a> --}}
                                  <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown active w-100 text-nowrap">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-users"></i><span class="d-none d-sm-inline font-weight-bold"> Usuarios</span></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="{{ route('usuarios.index') }}"><span class="d-none d-sm-inline font-weight-bold">Listado de Usuario</span></a>
                                  {{-- <a class="dropdown-item" href="{{ route('eleccion.index')}}"><span class="d-none d-sm-inline font-weight-bold">Elecciones</span></a> --}}
                                  <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>

                            <li class="nav-item w-100">
                                <a class="nav-link text-truncate" href="#spy1"><i class="fa fa-book fa-fw"></i> <span class="d-none d-sm-inline">Link 1</span></a>
                            </li>

                            @guest
                            <li class="nav-item w-100">
                                <a class="nav-link text-truncate" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-truncate" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif

                            @else
                                <li class="nav-item dropdown w-100">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-truncate" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <i class="fas fa-user"></i>
                                        <span class="d-none d-sm-inline">{{ Auth::user()->name }}</span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>

                    </div>
                </nav>
            </aside>
            <main class="col offset-2 offset-lg-0 bg-faded py-2" id="main">
                
                
                
            </main>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @yield('js')
</body>
</html>