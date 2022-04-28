<!-- Modal -->
<div class="modal fade" id="editaVideo-{{ $video->id }}" tabindex="-1" aria-labelledby="editaVideo"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b class="text-center">EDITAR USUARIO</b>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form method="POST" action="{{ route('videos.edit',  $video->id) }}">
                        @csrf @method('put')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">TITULO</label>
                            <input required name="titulo" value="{{ $video->titulo }}" type="text"
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">DESCRIPCION</label>
                            <textarea required name="descripcion" value="" type="text" class="form-control">{{ $video->descripcion }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">CATEGORIA</label>
                            <select required name="categoria" class="form-select" aria-label="Default select example">
                                <option value="{{$video->categoria}}" selected>{{$video->categoria}}</option>
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
                            <label for="exampleInputEmail1" class="form-label">VIDEO</label>
                            <input  name="" value="" type="file" class="form-control">
                        </div>

                        <div class="text-center pt-3">
                            <button type="submit" class="btn btn-primary btn-guardar">GUARDAR</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
