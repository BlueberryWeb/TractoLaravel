<!--MODAL-->
<div class="modal fade" id="peticion" tabindex="-1" aria-labelledby="peticion" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b class="text-center">REALIZAR PETICIÓN</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="container">
            <form method="POST" action="{{ route('peticiones.store') }}">
              @csrf
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">COLABORADOR</label>
                  <input required name="colaborador" value="{{old('colaborador')}}" type="text" class="form-control">
              </div>
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">TITULO</label>
                  <input required name="titulo" value="{{old('titulo')}}" type="text" class="form-control">
              </div>
              <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">AREA</label>
                  <select required name="area" class="form-select" aria-label="Default select example">
                      <option value="" selected>Areas ...</option>
                      <option value="administracion">administracion</option>
                      <option value="ventas">ventas</option>
                      <option value="rrhhh">rrhhh</option>
                      <option value="calidad">calidad</option>
                      <option value="credito y cobranza">credito y cobranza</option>
                      <option value="finanzas">finanzas</option>
                      <option value="operacion">operacion</option>
                      <option value="almacen">almacen</option>
                      <option value="logistica">logistica</option>
                      <option value="produccion">produccion</option>
                  </select>
              </div>
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">DESCRIPCION</label>
                  <input required name="descripcion" value="{{old('descripcion')}}" type="text" class="form-control">
              </div>

              <div class="text-center pt-3">
                  <button type="submit" class="btn btn-primary btn-guardar">GUARDAR</button>
              </div>

          </form>
          </div>
      </div>
    </div>
  </div>