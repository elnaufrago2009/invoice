<?php include '../layout/header.php'; ?>
<main class="container" id="app">

  <div class="row justify-content-center">
    <div class="col-sm-10 py-5">
      <img class="d-block mx-auto mb-4" src="/assets/img/bootstrap-solid.svg" alt="" width="72" height="72">
      <h2 class="text-center">Registro de Usuario {{message}}</h2>
      <p class="lead text-center pb-5">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Pasos Registro</span>
            <span class="badge badge-secondary badge-pill">4</span>
          </h4>

          <!-- Pasos -->
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="text-success">
                <h6 class="my-0">Usuarios</h6>
                <small class="text-success">En proceso de Registro</small>
              </div>
              <span class="text-muted">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Emisor</h6>
                <small class="text-muted">Sin registrar</small>
              </div>
              <span class="text-muted">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Locales</h6>
                <small class="text-muted">Sin registrar</small>
              </div>
              <span class="text-muted">4</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Documentos</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">1</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div>
                <h6 class="my-0">Series</h6>
                <small>Logo, colores</small>
              </div>
              <span class="text-muted">No</span>
            </li>
          </ul>
          <!-- End Pasos -->

        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Llene los datos personales</h4>

          <!-- Form -->
          <form v-on:submit.prevent="register(datos)">

            <!-- Nombre -->
            <div class="mb-3">
              <label for="email">Nombre Completo</label>
              <input
                  type="text"
                  class="form-control form-control-lg is-invalid"
                  placeholder="Juan Perez Gutierrez"
                  v-model="datos.nombre" required>
              <div class="text-danger" v-show="true">
                Este campo no puede estar vacio
              </div>
            </div>

            <!-- Telefono -->
            <div class="mb-3">
              <label for="email">Telefono</label>
              <input
                  type="text"
                  class="form-control form-control-lg was-validated"
                  placeholder="952631806"
                  v-model="datos.telefono"
                  required>
              <div class="invalid-feedback">
                Este campo no puede estar vacio.
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
                  v-model="datos.email"
                  required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
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
                    v-model="datos.contra1"
                    required>
                  <div class="invalid-feedback" style="width: 100%;">
                    Your username is required.
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
                    v-model="datos.contra2"
                    required>
                  <div class="invalid-feedback" style="width: 100%;">
                    Your username is required.
                  </div>
                </div>
                <div class="invalid-feedback">
                  Valid last name is required.
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
                  v-model="datos.ruc"
                  required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <hr class="mb-4">
            <button
                class="btn btn-primary btn-lg btn-block"
                type="submit">
              Registrarme</button>
          </form>
          <!-- End Form -->

        </div>
      </div>
    </div>
  </div>

</main>
<script>
  var app = new Vue({
    el: '#app',
    data: {
      message: 'moises',
      datos: {}
    },
    methods: {
      register: function (register) {
        console.log(register);
      }
    }
  });
</script>
<?php include '../layout/footer.php'; ?>