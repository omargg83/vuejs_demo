<?php
  include '../include/header.php';
?>
  <div class="container center">
    <div class="row" style="margin:0,auto; width:50%;">
      <div class="col s12 m12 l12">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Iniciar sesion</span>
            <form id="formRegistro" autocomplete="off" @submit.prevent="registro" enctype="multipart/form-data">
              <input type="text" name="user" value="" placeholder="Nombre de usuario" required pattern="[A-Za-z]{5,30}">
              <input type="password" v-model="pass" name="pass" value="" placeholder="Password" required pattern="[A-Za-z0-9]{8,15}">
              <input type="password" v-model="passC" value="" placeholder="Confirmar password" required pattern="[A-Za-z0-9]{8,15}">
              <input type="email" v-model="correo" name="email" value="" placeholder="Correo electronico" required @blur="validarCorreo">
              <div class="file-field input-field">
                <div class="btn">
                  <span>Imagen de perfil</span>
                  <input type="file" name="foto">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
              <input type="submit" name="" value="Registrarse" :class='boton'>
            </form>
          </div>
          <div class="card-action">
            <a href="index.php">Iniciar sesion</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
  include '../include/footerLogin.php';
?>
