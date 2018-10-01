<?php include '../config/validate.php'; ?>
<?php include '../layout/header.php'; ?>
<div class="container" id="app">
  <div class="row justify-content-center">
    <div class="col-sm-11 py-5">
      <h2 class="text-center pb-5">Nueva Factura Electrónica</h2>

      <!-- Formulario -->
      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">

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

        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Llene los datos personales</h4>

          <!-- Form -->
          <form @submit.prevent="register()">
            <div class="row">
              <!-- Cliente -->
              <div class="col-sm-6">
                <label>Cliente</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-search"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="" v-bind:class="{'is-invalid':error.email}" v-model="datos.email">
                  <div class="invalid-feedback" v-show="error.email">
                    Error en el email.
                  </div>
                </div>
              </div>
              <!-- Serie -->
              <div class="col-sm-2">
                <label for="exampleFormControlSelect1">Serie</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>F001</option>
                  <option>F002</option>
                  <option>F003</option>
                </select>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Fecha Emision</label>
                  <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                </div>
              </div>
            </div>

            <!-- Segunda fila -->
            <div class="row">
              <!-- Tipo Operacion -->
              <div class="col-sm-3">
                <label for="exampleFormControlSelect1">Tipo Operacion</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Venta Interna</option>
                  <option>Anticipo o Deduccion de anticipo en venta interna</option>
                  <option>Exportacion</option>
                </select>
              </div>
              <!-- Observaciones -->
              <div class="col-sm-7">
                <label>Observaciones</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="col-sm-2">
                <label>Opciones</label>
                <button class="btn btn-secondary"><i class="fa fa-lock"></i> Extra</button>
              </div>
            </div>




            

            

            <hr class="mb-4">
            <button
              class="btn btn-primary btn-lg btn-block"
              :disabled="error.button_send"
              type="submit">
              <i class="fa fa-spinner fa-spin" v-show="error.button_send"></i>
              Registrarme</button>
          </form>
          <!-- End Form -->

        </div>
      </div>
    </div>
  </div>
</div>
<?php include '../layout/footer.php'; ?>

