<x-app-layout>
    <div class="col-12 col-lg-10 col-md-12-col-sm-12 mensaje-bienvenida pb-5">
        <div class="row">
            <h4 class="pt-4 pb-5 ms-5">"TRACTOBULL TRAINING PROGRAM"</h4>
            <div class="">
                <img src="img/icono-admin.png" alt="ADMINISTRACIÓN" class="img-fluid" id="icono-area" />
                <aside>
                    <h4 class="pt-4"><b>ALMACEN</b></h4>
                    <h6>POR FAVOR DA CLICK EN EL VIDEO QUE DESEES VER</h6>
                </aside>
            </div>
            <div class="row videos pt-2">

                @php
                    $i=1;
                @endphp
                @foreach ($videos->chunk(2) as $chunk)
                    <div class="col-12 col-lg-6 col-md-12 col-sm-12 pt-4">
                        @foreach ($chunk as $video)
                            <div class="row  mt-4">
                                <div class="col-12 col-lg-1 col-md-12 col-sm-12 "></div>
                                <div class="col-12 col-lg-1 col-md-12 col-sm-12 fondo-azul">
                                    <h1 class="num">{{$i ++}}</h1>
                                </div>
                                <div class="col-12 col-lg-4 col-md-12 col-sm-12 fondo-bco pt-4">
                                    <h6><b>{{$video->titulo}}</b></h6>
                                    <p>{{$video->descripcion}}</p>
                                </div>
                                <div class="col-12 col-lg-5 col-md-12 col-sm-12 container-image fondo-bco pt-3">
                                    <img src="img/miniatura-video.png" alt="TRACTOBULL"
                                        class="img-thumbnail-item imagen-poster img-fluid" />
                                    <img class="top" src="img/play-button.png" alt="Play" id="btn-play"
                                        data-bs-toggle="modal" data-bs-target="#Kluane-video" />
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach

            </div>

        </div>
    </div>
</x-app-layout>
