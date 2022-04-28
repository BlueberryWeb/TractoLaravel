<x-app-layout>
    <div class="col-12 col-lg-10 col-md-12-col-sm-12 mensaje-bienvenida pb-5">
        <div class="row">
            <h4 class="pt-4 ms-5"><b>USUARIOS</b></h4>
            <div class="text-end">
                <button type="button" class="btn btn-primary me-5 btn-subir" data-bs-toggle="modal"
                    data-bs-target="#crearUsuario">CREAR USUARIO</button>
            </div>
        </div>
        @include('Usuarios.components.crear')

        <div class="row pt-5 d-flex justify-content-center">
            <div class="col-12 col-lg-3 col-md-12 col-sm-12">
                <h6><b>FECHA DE <br> CREACIÓN</b></h6>
            </div>
            <div class="col-12 col-lg-2 col-md-12 col-sm-12">
                <h6 class=""><b>TIPO DE <br> USUARIO</b></h6>
            </div>
            <div class="col-12 col-lg-2 col-md-12 col-sm-12">
                <h6 class=""><b>NOMBRE</b></h6>
            </div>
            <div class="col-12 col-lg-3 col-md-12 col-sm-12">
                <h6 class="ms-4"><b>CORREO</b></h6>
            </div>
            <div class="col-12 col-lg-1 col-md-12 col-sm-12">
                <h6 class=""><b>ACCIONES</b></h6>
            </div>
        </div>

        @foreach ($users as $user)
            <div class="row d-flex justify-content-center pt-2 pb-5">
                <div class="col-12 col-lg-3 col-md-12 col-sm-12 fondo-bco">
                    <h6 class="pt-4">{{ $user->created_at }}</h6>
                </div>
                <div class="col-12 col-lg-2 col-md-12 col-sm-12 container-image fondo-bco">
                    <h6 class="pt-4">{{ $user->level }}</h6>
                </div>
                <div class="col-12 col-lg-2 col-md-12 col-sm-12 fondo-bco">
                    <h6 class="pt-4">{{ $user->name }}</h6>
                </div>
                <div class="col-12 col-lg-3 col-md-12 col-sm-12 fondo-bco">
                    <h6 class="pt-4">{{ $user->email }}</h6>
                </div>
                <div class="d-flex justify-content-end col-12 col-lg-1 col-md-12 col-sm-12 fondo-bco pb-5">
                    <button type="button" class="btn" data-bs-toggle="modal"
                        data-bs-target="#editarUsuario-{{ $user->id }}">
                        <img src="img/editar-icon.png" alt="EDITAR" class="pt-4" />
                    </button>
                    <form class="eliminar-usuario" method="POST" action="{{ route('users.delete', $user->id) }}">
                        @csrf @method('delete')
                        <button type="submit" class="btn">
                            <img src="img/borrar-icono.png" alt="BORRAR" class="pt-4" />
                        </button>
                    </form>
                </div>
            </div>
            @include('Usuarios.components.editar')
        @endforeach



    </div>
</x-app-layout>
