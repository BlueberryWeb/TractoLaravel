<x-app-layout>
    <div class="mensaje-bienvenida">
        <div class="container">
            <h1 class="pt-3 pb-5">BIENVENIDO</h1>
            <div class="row">
                <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                    <img src="img/logo-bienvenida.png" alt="BIENVENIDO A TRACTOBULL TRAINING PROGRAM" class="img-fluid logo-bienvenida pt-5"/>
                    <p class="pt-5 texto-bienvenida text-center">"Bienvenido a la plataforma de capacitación continua de TRACTOBULL. En ella encontrarás
                      todas las herramientas y recursos necesarios para que comprendas los diferentes procedimientos que realizamos en la compañía. Si consideras
                      que necesitamos integrar alguna capacitación que no esté dentro de la plataforma, haz clic en el siguiente link y realiza tu petición."
                    </p>
                    <div class="text-center pt-4 ms-5">
                      <button type="button" class="btn btn-primary btn-guardar" data-bs-toggle="modal" data-bs-target="#peticion">Realizar petición</button>
                    </div>

                    @include('components.peticiones')
                  </div>


                </div>
                <div class="col-12 col-lg-8 col-md-12 col-sm-12">
                    <img src="img/monita.png" alt="TRACTOBULL" id="fondo-bienvenida"/>
                </div>
            </div>
        </div>  
    </div>
</x-app-layout>
