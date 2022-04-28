<x-app-layout>
    <div class="col-12 col-lg-10 col-md-12-col-sm-12 mensaje-bienvenida pb-5">
        <div class="row">
            <h4 class="pt-4 ms-5"><b>PETICIONES</b></h4>
            <div class="text-end">
                <button type="button" class="btn btn-primary me-5 btn-subir" data-bs-toggle="modal"
                    data-bs-target="#crearVideo">NUEVO VIDEO</button>
            </div>
        </div>
        @include('Videos.components.crear')

        <div class="row pt-5 d-flex justify-content-center">
            <div class="col-12 col-lg-2 col-md-12 col-sm-12">
                <h6><b>FECHA <br> DE SUBIDA</b></h6>
            </div>
            <div class="col-12 col-lg-2 col-md-12 col-sm-12">
                <h6 class="text-center"><b>VIDEO</b></h6>
            </div>
            <div class="col-12 col-lg-2 col-md-12 col-sm-12">
                <h6 class="text-center"><b>TÍTULO</b></h6>
            </div>
            <div class="col-12 col-lg-2 col-md-12 col-sm-12">
                <h6 class="text-center"><b>DESCRIPCIÓN</b></h6>
            </div>
            <div class="col-12 col-lg-2 col-md-12 col-sm-12">
                <h6 class="text-center"><b>CATEGORÍA</b></h6>
            </div>
            <div class="col-12 col-lg-1 col-md-12 col-sm-12">
                <h6 class="text-center"><b>ACCIONES</b></h6>
            </div>
        </div>

        @foreach ($videos as $video)
            <div class="row d-flex justify-content-center pt-2">
                <div class="col-12 col-lg-2 col-md-12 col-sm-12 fondo-bco">
                    <h6 class="pt-5">{{ $video->created_at }}</h6>
                </div>
                <div class="col-12 col-lg-2 col-md-12 col-sm-12 container-image fondo-bco">
                    <img src="img/miniatura-video-5.png" alt="TRACTOBULL"
                        class="img-thumbnail-item imagen-poster img-fluid" />
                    <img class="top" src="img/play-button.png" alt="Play" id="btn-play"
                        data-bs-toggle="modal" data-bs-target="#Kluane-video" />
                </div>
                <div class="col-12 col-lg-2 col-md-12 col-sm-12 fondo-bco">
                    <h6 class="pt-5">{{ $video->titulo }}</h6>
                </div>
                <div class="col-12 col-lg-2 col-md-12 col-sm-12 fondo-bco">
                    <p class="pt-3">{{ $video->descripcion }}</p>
                </div>
                <div class="col-12 col-lg-2 col-md-12 col-sm-12 fondo-bco">
                    <h6 class="text-center pt-5">{{ $video->categoria }}</h6>
                </div>
                <div class="d-flex justify-content-end col-12 col-lg-1 col-md-12 col-sm-12 fondo-bco pb-5">
                    <button type="button" class="btn" data-bs-toggle="modal"
                        data-bs-target="#editaVideo-{{ $video->id }}">
                        <img src="img/editar-icon.png" alt="EDITAR" class="pt-4" />
                    </button>
                    <form class="eliminar-usuario" method="POST" action="{{ route('videos.delete', $video->id) }}">
                        @csrf @method('delete')
                        <button type="submit" class="btn">
                            <img src="img/borrar-icono.png" alt="BORRAR" class="pt-4" />
                        </button>
                    </form>
                </div>
            </div>

            @include('Videos.components.editar')
        @endforeach
        <div class="container">
            <br>
            <div class="page_break"></div>
            {!! $videos->links() !!}

        </div>

    </div>
</x-app-layout>
