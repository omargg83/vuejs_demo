<?php @session_start();
  if (isset($_SESSION['user'])) {
    header("location:../principal/");
  }
  include '../include/header.php';
?>

  <div class="container center">
    <div class="row" style="margin:0,auto; width:50%;">
      <div class="col s12 m12 l12">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Registro</span>
            <form id="inicioSesion" autocomplete="off" @submit.prevent="login">
              <input type="email" name="email" value="" placeholder="Correo electronico" required>
              <input type="password" name="pass" value="" placeholder="Password" required pattern="[A-Za-z0-9]{8,15}">
              <input type="submit" name="" value="Entrar" class='btn blue'>
            </form>
          </div>
          <div class="card-action">
            <a href="registro.php">Registrarse</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
  include '../include/footerLogin.php';
?>
