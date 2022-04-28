<!-- Modal -->
<div class="modal fade" id="editarUsuario-{{ $user->id }}" tabindex="-1" aria-labelledby="editarUsuario" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b class="text-center">EDITAR USUARIO</b>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form method="POST" action="{{ route('users.edit',  $user->id) }}">
                        @csrf @method('put')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NOMBRE COMPLETO</label>
                            <input required name="name" value="{{ $user->name }}" type="text" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">CORREO ELECTRÓNICO</label>
                            <input required name="email" value="{{ $user->email }}" type="email" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">TIPO DE USUARIO</label>
                            <select required name="level" class="form-select" aria-label="Default select example">
                                <option value="{{ $user->level }}" selected>{{ $user->level }}</option>
                                <option value="normal">normal</option>
                                <option value="admin">admin</option>
                                <option value="editor">editor</option>
                            </select>
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