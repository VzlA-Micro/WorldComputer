<div class="content p-4 dataTables_wrapper">
    <h2 class="mb-4">Gestion de Ventas</h2>

    <div class="card mb-4">
        <div class="card-header bg-white">
          <a class="btn btn-primary" href="<?= ROOT;?>Venta/crear">
            <i class="fas fa-plus-square"></i> Agregar Venta
          </a>
        </div>
        <div class="card-body">
          <table class="table" id="datatable">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Nro Venta</th>
                <th scope="col">Fecha</th>
                <th scope="col">Cliente</th>
                <th scope="col">Estado</th>
                <th scope="col">Acción</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0001</td>
                    <td>02/01/2020</td>
                    <td>grupo Gonzales S.A.</td>
                    <td><a href="#" class='btn btn-success estatus'><i class='fas fa-check-circle'></i> Activa</a></td>
                    <td>
                        <a href="#" class='mostrar btn btn-info'><i class='fas fa-search'></i></a>
                        <a href="#" class='pdf btn btn-danger m-1'><i class='fas fa-file-pdf'></i></a>
                    </td>
                </tr>

                <tr>
                    <td>0002</td>
                    <td>01/01/2020</td>
                    <td>grupo Gonzales S.A.</td>
                    <td><a href="#" class='btn btn-danger estatus'><i class='fas fa-window-close'></i> Anulada</a></td>
                    <td>
                        <a href="#" class='mostrar btn btn-info'><i class='fas fa-search'></i></a>
                        <a href="#" class='pdf btn btn-danger m-1'><i class='fas fa-file-pdf'></i></a>
                    </td>
                </tr>
            </tbody>
          </table>
        </div>
    </div>
</div>


<!-- Modal Detalle Venta -->
<div class="modal fade" id="modalDetalleVenta" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

        <div class="card">

            <div class="card-header">
                <div class="row justify-content-center">
                    <h2 class="card-tittle text-center">Detalle Venta</h2>
                </div>
            </div>

            <div class="card-body">
                <div class="row justify-content-end">
                    <label for="" class="col-form-label col-2"><strong>Nro Venta:</strong> </label>
                    <div class="col-md-2">
                        <input type="text" class="form-control-plaintext" id="numero_venta" disabled>
                    </div>
                </div>

                <hr>

                <div class="row pl-5">
                    <h4>CLIENTE</h4>
                </div>

                <div class="row pl-5">
                    <label for="" class="col-form-label col-md-2"><strong>NOMBRE:</strong></label>
                    <div class="col-md-3">
                        <input type="text" id="nombre_cliente" class="form-control-plaintext" value="MICROTECH" disabled>
                    </div>

                    <label for="" class="col-form-label col-md-2"><strong> CEDULA/RIF:</strong></label>
                    <div class="col-md-3">
                        <input type="text" id="rif_cliente" class="form-control-plaintext" value="J-26540950" disabled>
                    </div>
                </div>

                <div class="row pl-5">
                    <label for="" class="col-form-label col-md-2"><strong>DIRECCION:</strong></label>
                    <div class="col-md-3">
                        <input type="text" id="direccion_cliente" class="form-control-plaintext" value="BARQUISIMETO" disabled>
                    </div>

                    
                </div>

                <hr>

                <div class="row justify-content-center pl-5">
                    <h4>PRODUCTOS</h4>
                </div>

                <div class="row">
                    <div class=" table-responsive">
                        <table class="table table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>CANTIDAD</th>
                                    <th>CODIGO</th>
                                    <th>PRODUCTO</th>
                                    <th>PRECIO VENTA</th>
                                    <th>IMPORTE</th>
                                </tr>
                            </thead>
    
                            <tbody id="cuerpo">
    
                            </tbody>
                        </table>
                    </div>

                </div>
                <hr>
                <div class="row justify-content-end">
                    <label for="" class="col-form-label col-2"><strong>SUB-TOTAL:</strong> </label>
                    <div class="col-md-2">
                        <input type="text" class="form-control-plaintext" id="subtotal" disabled>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <label for="" class="col-form-label col-2"><strong>IVA(16.00%):</strong> </label>
                    <div class="col-md-2">
                        <input type="text" class="form-control-plaintext" id="impuesto" disabled>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <label for="" class="col-form-label col-2"><strong>TOTAL:</strong> </label>
                    <div class="col-md-2">
                        <input type="text" class="form-control-plaintext" id="total" disabled>
                    </div>
                </div>

                <hr>

                <div class="row justify-content-center">
                    <button class="btn btn-secondary" data-dismiss="modal"> <i class="fas fa-window-close"></i> Cerrar</button>
                </div>
            
            </div>


        </div>

        </div>
    </div>
</div>


<!--<script src="<?//= ROOT; ?>public/assets/js/venta/index.js"></script>-->

