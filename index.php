<?php include './layout/header.php' ?>
<style>
  .form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: auto;
  }
  .form-signin .checkbox {
    font-weight: 400;
  }
  .form-signin .form-control {
    position: relative;
    box-sizing: border-box;
    height: auto;
    padding: 10px;
    font-size: 16px;
  }
  .form-signin .form-control:focus {
    z-index: 2;
  }
  .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
</style>
<form class="form-signin text-center mt-4" id="app" v-on:submit.prevent>
  <img class="mb-4" src="./assets/img/bootstrap-solid.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Iniciar Session</h1>
  <label for="inputEmail" class="sr-only">Correo Direccion</label>
  <input
      type="email"
      id="inputEmail"
      class="form-control"
      placeholder="Correo Direccion"
      v-model="login.email"
      required autofocus>
  <label for="inputPassword" class="sr-only">Contraseña</label>
  <input
      type="password"
      id="inputPassword"
      class="form-control"
      placeholder="Contraseña"
      v-model="login.password"
      required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Recordarme
    </label>
  </div>
  <button
      class="btn btn-lg btn-info btn-block"
      @click="check(login)"
      type="submit"><i class="fa fa-lock"></i> Iniciar Session</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
</form>
<script>
  var app = new Vue({
    el: '#app',
    data: {
      message: 'moises',
      login: {}
    },
    methods: {
      check: function (login) {
        console.log(login.email);
      }
    }
  });
</script>
<?php include './layout/footer.php' ?>
