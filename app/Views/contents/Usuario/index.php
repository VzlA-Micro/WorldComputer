<div class="content p-4 dataTables_wrapper">
    <h2 class="mb-4">Gestion de Usuarios</h2>

    <div class="card mb-4">
        <div class="card-header bg-white">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalRegistroUsuario">
            <i class="fas fa-plus-square"></i> Agregar Usuarios
          </button>
        </div>
        <div class="card-body">
          <table class="table" id="datatable">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Cedula/RIF</th>
                <th scope="col">Nombre y Apellido</th>
                <th scope="col">Usuario</th>
                <th scope="col">Rol</th>
                <th scope="col">Acción</th>
              </tr>
            </thead>
            <tbody>
                
            </tbody>
          </table>
        </div>
    </div>
</div>



    <!-- Modal Registro -->
    <div class="modal fade" id="modalRegistroUsuario" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="card">
                    <div class="card-header">
                            <h2 class="text-center">Nuevo Usuario</h2>
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST" enctype="multipart/form-data" id="formularioRegistrarUsuario">

                            <div class="form-row justify-content-center">
                                <h4 class="text-center">Datos Personales</h4>
                            </div>

                            <hr>

                            <div class="row form-group">
                                <input  name="id" id="id" hidden>
                                <label for="nombre" class="col-form-label col-md-2">Nombre:</label>
                                <div class="col-md-4 ">
                                    <input type="text" name="nombre" id="nombre" pattern="[A-Za-z ]+" title="Ingrese solo letras" maxlength="30" required="required" class="form-control" placeholder="Nombre">
                                </div> 

                                <label for="apellido" class="col-form-label col-md-2">Apellido:</label>
                                <div class="col-md-4 ">
                                    <input type="text" name="apellido" id="apellido" pattern="[A-Za-z ]+" title="Ingrese solo letras" maxlength="30" required="required"  class="form-control" placeholder="Apellido">
                                </div>
                            </div>

                            <div class="row form-group">
                                <label for="cedula_cliente" class="col-form-label col-md-2">Cedula/RIF:</label>
                                <div class="col-md-1 ">
                                    <select class="form-control pl-0 pr-0" name="inicial_documento" id="inicial_documento" required="">
                                        <option value="" selected="">-</option>
                                        <option value="V">V</option>
                                        <option value="E">E</option>
                                        <option value="J">J</option>
                                        <option value="G">G</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" pattern="[0-9]{6,8}" name="documento" id="documento" minlength="6" maxlength="8" title="Ingrese entre 6 y 8 digitos" class="form-control" placeholder="Identificaion" required="">
                                </div>
                                <label for="telefono" class="col-form-label col-md-2" >Telefono:</label>
                                <div class="col-md-4 ">
                                    <input type="tel" name="telefono" id="telefono" title="Debe Contener minimo 11 Caracteres numericos" minlength="10"  maxlength="12" pattern="[0-9-]+" required class="form-control" placeholder="Telefono">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="correo" class="col-form-label col-md-2">Correo:</label>
                                <div class="col-md-4 ">
                                    <input type="email" name="correo" id="correo" required class="form-control" placeholder="Correo Electronico">
                                </div>

                                <label for="direccion" class="col-form-label col-md-2">Direccion:</label>
                                <div class="col-md-4">
                                    <input type="text" name="direccion" id="direccion" pattern="[A-Za-z0-9/ ]+" required maxlength="150" class="form-control" placeholder="Direccion" >
                                </div>
                            </div>

                            <hr class="bg-secondary">

                            <div class="form-row justify-content-center">
                                <h4 class="text-center">Usuario</h4>
                            </div>

                            <hr>

                            <div class="form-group">
                                <label for="user">Nombre de Usuario</label>
                                <input  name="usuario" type="text" class="form-control">
                            </div>

                            <div class="form-row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="pass">Password</label>
                                        <input type="text" class="form-control" name="contrasena">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="pass">Confirmar Password</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <hr class="bg-secondary">

                            <div class="form-row justify-content-center">
                                <h4 class="text-center">Rol de Usuario</h4>
                            </div>

                            
                            <div class="form-row">
                                <small class=" form-text">**Por favor seleccione un rol de usuario</small>
                            </div>
                            <hr>

                            <div class="form-row" id="listadoRoles">
                                <div class="custom-control custom-radio pr-3">
                                    <input type="radio" id="rolUsuario1" name="rolUsuario" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="rolUsuario1">Super Administrador</label>
                                </div>
                                <div class="custom-control custom-radio pr-3">
                                    <input type="radio" id="rolUsuario2" name="rolUsuario" class="custom-control-input">
                                    <label class="custom-control-label" for="rolUsuario2">Administrador</label>
                                </div>

                                <div class="custom-control custom-radio pr-3">
                                    <input type="radio" id="rolUsuario3" name="rolUsuario" class="custom-control-input">
                                    <label class="custom-control-label" for="rolUsuario3">Vendedor</label>
                                </div>
                                <div class="custom-control custom-radio pr-3">
                                    <input type="radio" id="rolUsuario4" name="rolUsuario" class="custom-control-input">
                                    <label class="custom-control-label" for="rolUsuario4">Almacenista</label>
                                </div>

                                <div class="custom-control custom-radio pr-3">
                                    <input type="radio" id="rolUsuario5" name="rolUsuario" class="custom-control-input">
                                    <label class="custom-control-label" for="rolUsuario5">Recepcionista</label>
                                </div>
                                
                            </div>

                            <hr>

                            <div class="row form-group justify-content-md-center">
                                <a href="#" class="btn btn-secondary m-2" data-dismiss="modal"><i class="fas fa-arrow-circle-left"></i> Cerrar</a>
                                <button type="submit"  class="btn btn-success m-2">Enviar</button>
                                <button type="reset" class="btn btn-danger m-2">Limpiar</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal mostrar -->
    <div class="modal fade" id="modalMostrarUsuario" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="card">
                    <div class="card-header">
                            <h2 class="text-center">Usuario</h2>
                    </div>
                    <div class="card-body">
                        <form id="formularioMostrarUsuario">
                            <div class="row form-group">
                                <input  name="id" id="id" value="" hidden>
                                <label for="nombre" class="col-form-label col-md-2"><strong>Nombre:</strong></label>
                                <div class="col-md-4 ">
                                    <input type="text" name="nombre" id="nombre" value="" class="form-control-plaintext" disabled placeholder="Nombre">
                                </div> 

                                <label for="apellido" class="col-form-label col-md-2"><strong>Apellido:</strong></label>
                                <div class="col-md-4 ">
                                    <input type="text" name="apellido" id="apellido" class="form-control-plaintext" disabled placeholder="Apellido">
                                </div>
                            </div>

                            <div class="row form-group">
                                <label for="cedula_cliente" class="col-form-label col-md-2"><strong>Cedula|RIF:</strong></label>
                              
                                <div class="col-md-4">
                                    <input type="text" id="documento" class="form-control-plaintext" placeholder="Identificaion" disabled>
                                </div>
                                <label for="telefono" class="col-form-label col-md-2"><strong>Telefono:</strong></label>
                                <div class="col-md-4 ">
                                    <input type="tel" id="telefono" class="form-control-plaintext" disabled placeholder="Telefono">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="correo"><strong>Correo:</strong></label>
                                <input type="email" id="correo" class="form-control-plaintext" disabled placeholder="Correo Electronico">
                            </div>

                            <div class="form-group">
                                <label for="direccion"><strong>Direccion:</strong></label> 
                                <input type="text" id="direccion" class="form-control-plaintext" disabled placeholder="Direccion" > 
                            </div>
                            <div class="form-group">
                                <label for="usuario"><strong>Usuario:</strong></label> 
                                <input type="text" id="usuario" class="form-control-plaintext" disabled placeholder="Usuario" > 
                            </div>

                            <hr class="bg-secondary">
                            
                            <div class="row form-group justify-content-md-center">
                                <a href="#" class="btn btn-secondary m-2" data-dismiss="modal"><i class="fas fa-arrow-circle-left"></i> Cerrar</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal actualizar -->
    <div class="modal fade" id="modalActualizarUsuario" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="card">
                    <div class="card-header">
                            <h2 class="text-center">Actualizar Usuario</h2>
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST" enctype="multipart/form-data" id="formularioActualizarUsuario">

                            <div class="form-row justify-content-center">
                                <h4 class="text-center">Datos Personales</h4>
                            </div>

                            <hr>

                            <div class="row form-group">
                                <input  name="id" id="id" hidden>
                                <label for="nombre" class="col-form-label col-md-2">Nombre:</label>
                                <div class="col-md-4 ">
                                    <input type="text" name="nombre" id="nombre" pattern="[A-Za-z ]+" title="Ingrese solo letras" maxlength="30" required="required" class="form-control" placeholder="Nombre">
                                </div> 

                                <label for="apellido" class="col-form-label col-md-2">Apellido:</label>
                                <div class="col-md-4 ">
                                    <input type="text" name="apellido" id="apellido" pattern="[A-Za-z ]+" title="Ingrese solo letras" maxlength="30" required="required"  class="form-control" placeholder="Apellido">
                                </div>
                            </div>

                            <div class="row form-group">
                                <label for="cedula_cliente" class="col-form-label col-md-2">Cedula/RIF:</label>
                                <div class="col-md-1 ">
                                    <select class="form-control pl-0 pr-0" name="inicial_documento" id="inicial_documento" required="">
                                        <option value="" selected="">-</option>
                                        <option value="V">V</option>
                                        <option value="E">E</option>
                                        <option value="J">J</option>
                                        <option value="G">G</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" pattern="[0-9]{6,8}" name="documento" id="documento" minlength="6" maxlength="8" title="Ingrese entre 6 y 8 digitos" class="form-control" placeholder="Identificaion" required="">
                                </div>
                                <label for="telefono" class="col-form-label col-md-2" >Telefono:</label>
                                <div class="col-md-4 ">
                                    <input type="tel" name="telefono" id="telefono" title="Debe Contener minimo 11 Caracteres numericos" minlength="10"  maxlength="12" pattern="[0-9-]+" required class="form-control" placeholder="Telefono">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="correo" class="col-form-label col-md-2">Correo:</label>
                                <div class="col-md-4 ">
                                    <input type="email" name="correo" id="correo" required class="form-control" placeholder="Correo Electronico">
                                </div>

                                <label for="direccion" class="col-form-label col-md-2">Direccion:</label>
                                <div class="col-md-4">
                                    <input type="text" name="direccion" id="direccion" pattern="[A-Za-z0-9/ ]+" required maxlength="150" class="form-control" placeholder="Direccion" >
                                </div>
                            </div>

                            <hr class="bg-secondary">

                            <div class="form-row justify-content-center">
                                <h4 class="text-center">Usuario</h4>
                            </div>

                            <hr>

                            <div class="form-group">
                                <label for="user">Nombre de Usuario</label>
                                <input  name="usuario" id="usuario" type="text" class="form-control">
                            </div>

                            <div class="form-row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="pass">Password</label>
                                        <input type="text" class="form-control" name="contrasena" id="contrasena">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="pass">Confirmar Password</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <hr class="bg-secondary">

                            <div class="form-row justify-content-center">
                                <h4 class="text-center">Rol de Usuario</h4>
                            </div>

                            
                            <div class="form-row">
                                <small class=" form-text">**Por favor seleccione un rol de usuario</small>
                            </div>
                            <hr>

                            <div class="form-row" id="listadoRoles">
                                <div class="custom-control custom-radio pr-3">
                                    <input type="radio" id="rolUsuario1" name="rolUsuario" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="rolUsuario1">Super Administrador</label>
                                </div>
                                <div class="custom-control custom-radio pr-3">
                                    <input type="radio" id="rolUsuario2" name="rolUsuario" class="custom-control-input">
                                    <label class="custom-control-label" for="rolUsuario2">Administrador</label>
                                </div>

                                <div class="custom-control custom-radio pr-3">
                                    <input type="radio" id="rolUsuario3" name="rolUsuario" class="custom-control-input">
                                    <label class="custom-control-label" for="rolUsuario3">Vendedor</label>
                                </div>
                                <div class="custom-control custom-radio pr-3">
                                    <input type="radio" id="rolUsuario4" name="rolUsuario" class="custom-control-input">
                                    <label class="custom-control-label" for="rolUsuario4">Almacenista</label>
                                </div>

                                <div class="custom-control custom-radio pr-3">
                                    <input type="radio" id="rolUsuario5" name="rolUsuario" class="custom-control-input">
                                    <label class="custom-control-label" for="rolUsuario5">Recepcionista</label>
                                </div>
                                
                            </div>

                            <hr>

                            <div class="row form-group justify-content-md-center">
                                <a href="#" class="btn btn-secondary m-2" data-dismiss="modal"><i class="fas fa-arrow-circle-left"></i> Cerrar</a>
                                <button type="submit"  class="btn btn-success m-2">Enviar</button>
                                <button type="reset" class="btn btn-danger m-2">Limpiar</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="<?= ROOT; ?>public/assets/js/usuario/index.js"></script>


