<div class="content p-4 dataTables_wrapper">
    <h2 class="mb-4">Gestion de Categorias</h2>

    <div class="card mb-4">
        <div class="card-header bg-white">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalRegistroCategoria">
            <i class="fas fa-plus-square"></i> Agregar Categoria
          </button>
        </div>
        <div class="card-body">
          <table class="table" id="datatable">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Categoria</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Estatus</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
                
            </tbody>
          </table>
        </div>
    </div>
</div>

<!-- Modal Registro -->
<div class="modal fade" id="modalRegistroCategoria" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

        <div class="card">
        <div class="card-body">
            <h2 class="card-tittle text-center">Nueva Categoria</h2>
            <hr>
          
                <form action="#" method="POST" id="formularioRegistrarCategoria" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="nombre"> <i class="fas fa-tag"></i> Nombre Categoria</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" onkeyup = "this.value=this.value.toUpperCase()" placeholder="ej. cajas">
                    </div>
                    
                    <div class="form-group">
                        <label for="descripcion"> <i class="fas fa-id-card-alt"></i> Descripcion</label>
                        <textarea name="descripcion" onkeyup = "this.value=this.value.toUpperCase()" id="descripcion" class="form-control" cols="30" rows="3" placeholder="descripcion de la categoria..."></textarea>
                    </div>


                    <div class="form-row justify-content-center">
                        <button class="btn btn-success" type="submit">Enviar</button>
                    </div>
                    
                </form>   
        </div>


    </div>

        </div>
    </div>
</div>

<!-- Modal Mostrar -->
<div class="modal fade" id="modalMostrarCategoria" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        <div class="card">
        <div class="card-body">
            <h2 class="card-tittle text-center">Nuevo Categoria</h2>
            <hr>
            <form action="#" method="POST" id="formularioMostrarCategoria" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="nombre"> <i class="fas fa-tag"></i> <strong>Nombre Categoria</strong></label>
                    <input type="text" name="nombre" id="nombre" class="form-control-plaintext" disabled onkeyup = "this.value=this.value.toUpperCase()" placeholder="ej. cajas">
                </div>
                
                <div class="form-group">
                    <label for="descripcion"> <i class="fas fa-id-card-alt"></i> <strong>Descripcion</strong></label>
                    <textarea name="descripcion" onkeyup = "this.value=this.value.toUpperCase()" id="descripcion" class="form-control-plaintext" disabled cols="30" rows="3" placeholder="descripcion de la categoria..."></textarea>
                </div>


                <div class="form-row justify-content-center">
                    <button class="btn btn-success" data-dismiss="modal">Atras</button>
                </div>
                
            </form>
        </div>


    </div>

        </div>
    </div>
</div>

<!-- Modal Actualizar -->
<div class="modal fade" id="modalActualizarCategoria" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

        <div class="card">
        <div class="card-body">
            <h2 class="card-tittle text-center">Nuevo Categoria</h2>
            <hr>
          
            <form action="#" method="POST" id="formularioActualizarCategoria" enctype="multipart/form-data">
                <input type="text" name="id" id="id" hidden>
                <div class="form-group">
                    <label for="nombre"> <i class="fas fa-tag"></i> Nombre Categoria</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" onkeyup = "this.value=this.value.toUpperCase()" placeholder="ej. cajas">
                </div>
                
                <div class="form-group">
                    <label for="descripcion"> <i class="fas fa-id-card-alt"></i> Descripcion</label>
                    <textarea name="descripcion" onkeyup = "this.value=this.value.toUpperCase()" id="descripcion" class="form-control" cols="30" rows="3" placeholder="descripcion de la categoria..."></textarea>
                </div>


                <div class="form-row justify-content-center">
                    <button class="btn btn-success" type="submit">Enviar</button>
                </div>
                
            </form>   
        </div>


    </div>

        </div>
    </div>
</div>


<script src="<?= ROOT; ?>public/assets/js/categoria/index.js"></script>

