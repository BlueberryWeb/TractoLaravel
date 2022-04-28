<!-- Modal -->
<div class="modal fade" id="crearUsuario" tabindex="-1" aria-labelledby="crearUsuario" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b class="text-center">CREAR USUARIO</b>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form method="POST" action="{{ route('users.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NOMBRE COMPLETO</label>
                            <input required name="name" value="{{old('name')}}" type="text" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">CORREO ELECTRÓNICO</label>
                            <input required name="email" value="{{old('email')}}" type="email" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">CONTRASEÑA</label>
                            <input required name="password" value="{{old('password')}}" type="password" class="form-control  @error('password') is-invalid @enderror" id="password" >
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">CONFIRMAR CONTRASEÑA</label>
                            <input required name="password_confirmation" type="password" class="form-control  @error('password') is-invalid @enderror" id="password" autocomplete="current-password">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">TIPO DE USUARIO</label>
                            <select required name="level" class="form-select" aria-label="Default select example">
                                <option value="" selected>Tipos ...</option>
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