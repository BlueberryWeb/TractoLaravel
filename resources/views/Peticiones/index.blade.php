<x-app-layout>
    <div class="col-12 col-lg-10 col-md-12-col-sm-12 mensaje-bienvenida pb-5">
        <div class="row">
            <h4 class="pt-4 ms-5"><b>PETICIONES</b></h4>
            <div class="text-end">
                <button type="button" class="btn btn-primary me-5 btn-subir" data-bs-toggle="modal"
                    data-bs-target="#crearPeticion">CREAR PETICION</button>
            </div>
        </div>
        @include('Peticiones.components.crear')

        <div class="row pt-5 d-flex justify-content-center">
            <div class="col-12 col-lg-2 col-md-12 col-sm-12">
                <h6 class=""><b>NOMBRE DEL <br> COLABORADOR</b></h6>
            </div>
            <div class="col-12 col-lg-2 col-md-12 col-sm-12">
                <h6 class="text-center"><b>TÍTULO SUGERIDO <br> DE CAPACITACIÓN</b></h6>
            </div>
            <div class="col-12 col-lg-3 col-md-12 col-sm-12">
                <h6 class="text-center"><b>ÁREA INVOLUCRADA</b></h6>
            </div>
            <div class="col-12 col-lg-3 col-md-12 col-sm-12">
                <h6><b>DESCRIBE LA <br> CAPACITACIÓN SOLICITADA</b></h6>
            </div>
            <div class="col-12 col-lg-1 col-md-12 col-sm-12">
                <h6 class=""><b>ACCIONES</b></h6>
            </div>
        </div>

        @foreach ($peticiones as $peticion)
            <div class="row d-flex justify-content-center pt-2 pb-5">
                <div class="col-12 col-lg-2 col-md-12 col-sm-12 fondo-bco">
                    <h6 class="pt-4">{{ $peticion->colaborador }}</h6>
                </div>
                <div class="col-12 col-lg-2 col-md-12 col-sm-12 container-image fondo-bco">
                    <h6 class="pt-4">{{ $peticion->titulo }}</h6>
                </div>
                <div class="col-12 col-lg-3 col-md-12 col-sm-12 fondo-bco">
                    <h6 class="pt-4 text-center">{{ $peticion->area }}</h6>
                </div>
                <div class="col-12 col-lg-3 col-md-12 col-sm-12 fondo-bco">
                    <h6 class="pt-4">{{ $peticion->descripcion }}</h6>
                </div>
                <div class="col-12 col-lg-1 col-md-12 col-sm-12 fondo-bco pb-5">
                    <form class="eliminar-usuario" method="POST"
                        action="{{ route('peticiones.delete', $peticion->id) }}">
                        @csrf @method('delete')
                        <button type="submit" class="btn">
                            <img src="img/borrar-icono.png" alt="BORRAR" class="pt-4  ms-4" />
                        </button>
                    </form>
                </div>
            </div>
        @endforeach



    </div>
</x-app-layout>
