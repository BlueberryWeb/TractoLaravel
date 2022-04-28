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

<body class="login">
    <div class="container pt-5">
        <div class="row d-flex justify-content-center pt-5">
            <div class="row d-flex justify-content-center pt-5 raya">
                <img src="img/logo-login.png" alt="TRACTOBULL" id="logo-login" class="img-fluid pt-5 pb-5" />
                <hr>
            </div>
            <div class="pt-5"></div>
            <div class="col-12 col-lg-4 col-md-12 col-sm-12"></div>
            <div class="col-12 col-lg-3 col-md-12 col-sm-12">

                <x-guest-layout>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4 text-light" :errors="$errors" />

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-light">Correo electrónico:</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ old('email') }}" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label text-light">Contraseña:</label>
                            <input type="password" class="form-control" id="password" name="password"
                                value="{{ old('password') }}">
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-light btn-login">
                                {{ __('Enviar') }}
                            </button>
                        </div>

                    </form>
                </x-guest-layout>


            </div>
            <div class="col-12 col-lg-4 col-md-12 col-sm-12"></div>
        </div>
    </div>
    <div class="container pt-5 pb-5">
        <div class="row pt-3">
            <div class="col-12 col-lg-4 col-md-12 col-sm-12"></div>
            <div class="col-12 col-lg-4 col-md-12 col-sm-12 pt-5">
                <div class="text-center">
                    <span><b>Tractobull</b> © 2022. Todos los derechos reservados</span>
                    <h5 class="pt-2 h6"><a href="#">AVISO DE PRIVACIDAD </a> | <a href="#"> TÉRMINOS Y
                            CONDICIONES</a> </h5>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-12 col-sm-12"></div>
        </div>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
