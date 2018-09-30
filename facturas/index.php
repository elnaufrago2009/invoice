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

            <!-- Primera linea -->
            <div class="row">
              <div class="col-sm-6">

              </div>
              <div class="col-sm-3"></div>
              <div class="col-sm-3"></div>
            </div>

            <!-- Nombre -->
            <div class="mb-3">
              <label for="email">Nombre Completo</label>
              <input
                type="text"
                class="form-control form-control-lg"
                v-bind:class="{'is-invalid':error.nombre}"
                placeholder="Juan Perez Gutierrez"
                v-model="datos.nombre">
              <div class="invalid-feedback" v-show="error.nombre">
                Este campo no puede estar vacio
              </div>
            </div>

            <!-- Telefono -->
            <div class="mb-3">
              <label for="email">Telefono</label>
              <input
                type="text"
                class="form-control form-control-lg"
                v-bind:class="{'is-invalid':error.telefono}"
                placeholder="952631806"
                v-model="datos.telefono">
              <div class="invalid-feedback" v-show="error.telefono">
                Telefono no puede estar vacio.
              </div>
            </div>

            <!-- Email -->
            <div class="mb-3">
              <label>Email</label>
              <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-at"></i></span>
                </div>
                <input
                  type="email"
                  class="form-control"
                  placeholder="correo@gmail.com"
                  v-bind:class="{'is-invalid':error.email}"
                  v-model="datos.email">
                <div class="invalid-feedback" v-show="error.email">
                  Error en el email.
                </div>
              </div>
            </div>

            <!-- Contraseña -->
            <div class="row">
              <!-- contra 1 -->
              <div class="col-md-6 mb-3">
                <label for="firstName">Contraseña</label>
                <div class="input-group input-group-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                  </div>
                  <input
                    type="password"
                    class="form-control"
                    placeholder="**********"
                    v-bind:class="{'is-invalid':error.contra1}"
                    v-model="datos.contra1">
                  <div class="invalid-feedback" v-show="error.contra1">
                    Error en la conrtaseña.
                  </div>
                </div>
              </div>
              <!-- contra 2 -->
              <div class="col-md-6 mb-3">
                <label for="lastName">Repetir Contraseña</label>
                <div class="input-group input-group-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                  </div>
                  <input
                    type="password"
                    class="form-control"
                    placeholder="**********"
                    v-bind:class="{'is-invalid':error.contra2}"
                    v-model="datos.contra2">
                  <div class="invalid-feedback" v-show="error.contra2">
                    Error en la conrtaseña.
                  </div>
                </div>
              </div>
            </div>

            <!-- Ruc -->
            <div class="mb-3">
              <label for="username">RUC</label>
              <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-check-circle"></i></span>
                </div>
                <input
                  type="text"
                  class="form-control"
                  placeholder="12345678912"
                  v-bind:class="{'is-invalid':error.ruc}"
                  v-model="datos.ruc">
                <div class="invalid-feedback" v-show="error.ruc" style="width: 100%;">
                  Error en el RUC.
                </div>
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

