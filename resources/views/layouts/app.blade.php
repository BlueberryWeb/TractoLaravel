<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/4514d9060c.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
    <title>TRACTOBULL</title>
</head>

<body>
    @include('sweetalert::alert')
    <!--SIDE BAR-->
    <div class="row">
        <div class="col-12 col-lg-2 col-md-12-col-sm-12">
            <div class="d-flex flex-column align-items-stretch flex-shrink-0 menu-lado" style="width: 280px;">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto  text-decoration-none pt-5 pb-4">
                    <img src="img/logo-login.png" alt="TRACTOBULL" id="logo-side" class="img-fluid" />
                </a>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link active border-bottom pt-5 pb-3"
                            aria-current="page">
                            <img src="img/icono-home.png" alt="BIENVENIDO" class="img-fluid icono-side" />
                            BIENVENIDO
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('administracion.index') }}" class="nav-link link-light border-bottom pt-3 pb-3">
                            <img src="img/icono-administracion.png" alt="ADMINISTRACIÓN" class="img-fluid icono-side" />
                            ADMINISTRACIÓN
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('ventas.index') }}" class="nav-link link-light border-bottom  pt-3 pb-3">
                            <img src="img/icono-ventas.png" alt="VENTAS" class="img-fluid icono-side" />
                            VENTAS
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('rrhhh.index') }}" class="nav-link link-light border-bottom  pt-3 pb-3">
                            <img src="img/icono-RH.png" alt="RRHHH" class="img-fluid icono-side" />
                            RRHHH
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('calidad.index') }}" class="nav-link link-light border-bottom  pt-3 pb-3">
                            <img src="img/icono-calidad.png" alt="CALIDAD" class="img-fluid icono-side" />
                            CALIDAD
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('cobranza.index') }}" class="nav-link link-light border-bottom  pt-3">
                            <img src="img/icono-credito.png" alt="CRÉDITO Y COBRANZA"
                                class="img-fluid icono-side credito" />
                            CRÉDITO Y <br> COBRANZA
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('finanzas.index') }}" class="nav-link link-light border-bottom  pt-3 pb-3">
                            <img src="img/icono-finanzas.png" alt="FINANZAS" class="img-fluid icono-side" />
                            FINANZAS
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('operaciones.index') }}" class="nav-link link-light border-bottom  pt-3 pb-3 ">
                            <img src="img/icono-operaciones.png" alt="OPERACIONES" class="img-fluid icono-side" />
                            OPERACIONES
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('almacen.index') }}" class="nav-link link-light border-bottom  pt-3 pb-3">
                            <img src="img/icono-almacen.png" alt="ALMACÉN" class="img-fluid icono-side" />
                            ALMACÉN
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logistica.index') }}" class="nav-link link-light border-bottom  pt-3 pb-3">
                            <img src="img/icono-logistica.png" alt="LOGÍSTICA" class="img-fluid icono-side" />
                            LOGÍSTICA
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('produccion.index') }}" class="nav-link link-light border-bottom  pt-3 pb-3">
                            <img src="img/icono-produccion.png" alt="PRODUCCIÓN" class="img-fluid icono-side" />
                            PRODUCCIÓN
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('peticiones.index') }}" class="nav-link link-light border-bottom  pt-3 pb-3">
                            <img src="img/icono-usuarios.png" alt="PETICIONES" class="img-fluid icono-side" />
                            PETICIONES
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('videos.index') }}" class="nav-link link-light border-bottom  pt-3 pb-3">
                            <img src="img/icono-videos.png" alt="VIDEOS" class="img-fluid icono-side" />
                            VIDEOS
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('users.index') }}" class="nav-link link-light border-bottom  pt-3 pb-3">
                            <img src="img/icono-usuarios.png" alt="USUARIOS" class="img-fluid icono-side" />
                            USUARIOS
                        </a>
                    </li>
                    <li>
                        <form style="margin: 0%" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" class="nav-link link-light   pt-3 pb-3"
                                onclick="event.preventDefault();this.closest('form').submit();">
                                <img src="img/icono-cerrar-sesion.png" alt="CERRAR SESIÓN"
                                    class="img-fluid icono-side" />
                                CERRAR SESIÓN
                            </a>
                        </form>

                    </li>
                    <li class="pb-4">
                        <img src="img/materialized-blueberry.gif" alt="MATERIALIZED BY Blueberry"
                            class="img-fliuid pt-4 logo-bb ms-4" />
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-12 col-lg-10 col-md-12-col-sm-12 mensaje-bienvenida">
            <div class="row fondo-bco pt-2 pb-2">
                <div class="text-end dropdown">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="img/icono-user.png" alt="USER" class="img-fluid icono-side" />
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <form style="margin: 0%" method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-item"
                                        onclick="event.preventDefault();this.closest('form').submit();"
                                        href="{{ route('logout') }}">Cerrar sesion</a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- CONTENIDO DE BLADE --}}
            {{ $slot }}

        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('eliminar') == 'ok')
        <script>
            Swal.fire(
                'Eliminado!',
                'Usuario eliminado correctamente',
                'success'
            )
        </script>
    @endif

    <script>
        $('.eliminar-usuario').submit(function(e) {
            e.preventDefault();

            Swal.fire({
                title: '¿Estas seguro?',
                text: "Este cambio es irreversible!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar!'
            }).then((result) => {
                if (result.isConfirmed) {

                    this.submit();
                }
            })
        });
    </script>

    <script src="js/script.js"></script>
</body>

</html>
