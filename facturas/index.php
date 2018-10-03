<?php include '../config/validate.php'; ?>
<?php include '../layout/header.php'; ?>
<div class="container" id="app">
  <div class="row justify-content-center">
    <div class="col-sm-11 py-1">
      <h2 class="text-center pb-1">Nueva Factura Electrónica</h2>

      <!-- Formulario -->
      <div class="row">
        <div class="col-md-3 order-md-2 mb-4">

          <!-- Totales de Factura -->
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Totales de Factura</span>
            <span class="badge badge-secondary badge-pill">4</span>
          </h4>

          <!-- Pasos -->
          <ul class="list-group mb-3">

            <!-- Descuento Gloobal -->
            <li class="list-group-item d-flex justify-content-between lh-condensed pt-1 pb-1">
              <div>
                <h6 class="my-0 text-muted">Descuento Global %</h6>
                <small class="text-muted">de toda la factura</small>
              </div>
              <span class="text-muted">0.00</span>
            </li>

            <!-- Exonerada -->
            <li class="list-group-item d-flex justify-content-between lh-condensed pt-1 pb-1">
              <div>
                <h6 class="my-0 text-muted">Exonerada</h6>
                <small class="text-muted">Sin registrar</small>
              </div>
              <span class="text-muted">0.00</span>
            </li>

            <!-- Inafecta -->
            <li class="list-group-item d-flex justify-content-between lh-condensed pt-1 pb-1">
              <div>
                <h6 class="my-0 text-muted">Inafecta</h6>
                <small class="text-muted">Sin registrar</small>
              </div>
              <span class="text-muted">0.00</span>
            </li>

            <!-- Grabadas -->
            <li class="list-group-item d-flex justify-content-between lh-condensed pt-1 pb-1">
              <div>
                <h6 class="my-0 text-muted">Grabadas</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">0.00</span>
            </li>

            <!-- IGV -->
            <li class="list-group-item d-flex justify-content-between pt-1 pb-1">
              <div>
                <h6 class="my-0 text-muted">I.G.V.</h6>
                <small class="text-muted">Impuestos Sunat</small>
              </div>
              <span class="text-muted">0.00</span>
            </li>

            <!-- Gratuitas -->
            <li class="list-group-item d-flex justify-content-between lh-condensed pt-1 pb-1">
              <div>
                <h6 class="my-0 text-muted">Gratuitas</h6>
              </div>
              <span class="text-muted">0.00</span>
            </li>

            <!-- Otros Cargos -->
            <li class="list-group-item d-flex justify-content-between lh-condensed pt-1 pb-1">
              <div>
                <h6 class="my-0 text-muted">Otros Cargos</h6>
              </div>
              <span class="text-muted">0.00</span>
            </li>

            <!-- Otros Cargos -->
            <li class="list-group-item d-flex justify-content-between lh-condensed pt-1 pb-1">
              <div>
                <h6 class="my-0 text-muted">Descuento Total</h6>
              </div>
              <span class="text-muted">0.00</span>
            </li>

            <!-- TOTAL -->
            <li class="list-group-item d-flex justify-content-between bg-light pt-1 pb-1">
              <span class="text-success"><strong>TOTAL (Soles)</strong></span>
              <strong>1548.00</strong>
            </li>


          </ul>


        </div>

        <div class="col-md-9 order-md-1">
          <h4 class="mb-3">Llene los datos personales</h4>

          <!-- Form -->
          <form @submit.prevent="enviar_factura()">

            <div class="form-row">
              <!-- Cliente -->
              <div class="form-group col-sm-6">
                <label>Cliente</label>
                <div class="input-group">
                  <input type="text" class="form-control" disabled v-model="invoice.cliente" placeholder="Nombre Cliente" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <input type="hidden" v-model="invoice.cliente_id">
                  <div class="input-group-append">
                    <span class="input-group-text" style="cursor: pointer" id="basic-addon2" @click="cliente"><i class="fa fa-search"></i></span>
                  </div>
                </div>
              </div>
              <!-- Serie -->
              <div class="col-sm-2">
                <label>Serie</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>F001</option>
                  <option>F002</option>
                  <option>F003</option>
                </select>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Fecha Emision</label>
                  <input type="date" class="form-control" placeholder="">
                </div>
              </div> 
            </div>

            <!-- Segunda fila -->
            <div class="form-row">
              <!-- Tipo Operacion -->
              <div class="form-group col-sm-3">
                <label>Tipo Operacion</label>
                <select class="form-control"> 
                  <option>Venta Interna</option>
                  <option>Anticipo o Deduccion de anticipo en venta interna</option>
                  <option>Exportacion</option>
                </select>
              </div>
              <div class="form-group col-sm-7">
                <label>Observaciones</label>
                <input type="text" class="form-control" placeholder="">
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="form-group col-sm-2">
                <label>Opciones</label>
                <button class="btn btn-secondary btn-block"><i class="fa fa-lock"></i> Extra</button>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
            </div>


            <!-- Tercera fila -->
            <div class="form-row" v-for="(item, index) in invoice.items">
              <div class="form-group col-sm-4">
                <!-- <label for="exampleFormControlInput1">{{index}}</label> -->
                <select class="form-control">
                  <option>{{item}}</option>
                </select>
              </div>
              <div class="form-group col-sm-1">
                <!-- <label>Cant</label> -->
                <input type="text" name="" class="form-control" placeholder="10">
              </div>              
              <div class="form-group col-sm-2">
                <!-- <label>P. unitario</label> -->
                <input type="text" name="" class="form-control" placeholder="45.59">
              </div>
              <div class="form-group col-sm-2">
                <!-- <label>SubTotal</label> -->
                <input type="text" name="" class="form-control" placeholder="85.12">
              </div>
              <div class="form-group col-sm-2">
                <!-- <label>Total</label> -->
                <input type="text" name="" class="form-control" placeholder="102.89">
              </div>
              <div class="form-group col-sm-1">
                <!-- <label>Opcion</label> -->
                <button class="btn btn-secondary btn-block"><i class="fa fa-cog"></i></button>
              </div>
            </div> 


            <hr class="mb-4">
            <button type="submit" class="btn btn-primary btn-lg btn-block">
              <i class="fa fa-spinner fa-spin"></i> Crear Documento
            </button>
          </form>
          <!-- End Form -->


          <!-- Modal Cliente -->
          <div class="modal fade" id="modal_cliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Seleccionar Cliente</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Contenido cliente
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<script>
  var app = new Vue({
    el: '#app',
    data: {
      nombre: 'moises',
      invoice: {
        cliente: '',
        cliente_id: '',
        items: [
          { producto: ''}

          ]
      }
    },
    methods: {
      cliente: function () {
        //activa el modal
        this.invoice.cliente = 'Abraham Moises.. - 01425162531';
        this.invoice.cliente_id = 5;
        this.invoice.items.push({
          producto: 'segundo'
        });
        $("#modal_cliente").modal('show');
      },
      enviar_factura: function () {
        console.log(this.invoice);
      }
    }
  });
</script>
<?php include '../layout/footer.php'; ?>
