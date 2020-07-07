<?php
include '../include/header.php';
?>

<div class="container center">
  <div class="row" style="margin:0,auto; width:80%;">
    <div class="col s12 m12 l12">
      <div class="card">
        <div class="card-content">
          <span class="card-title">Postea tu codigo</span>
          <form id="altaPost" autocomplete="off" @submit.prevent="alta">
            <input type="text" name="titulo" value="" placeholder="titulo" required>
            <textarea name="codigo" class="materialize-textarea" placeholder="Escribe tu codigo"></textarea>
            <textarea name="descripcion" class="materialize-textarea" placeholder="Escribe tu descripcion"></textarea>
            <select class="browser-default" name="categoria" required>
              <option value="" disabled selected>Escoge una opcion</option>
              <option value="php">PHP</option>
              <option value="css">CSS</option>
              <option value="html5">HTML5</option>
              <option value="mysql">MYSQL</option>
              <option value="vue">VUE</option>
            </select>
            <input type="submit" name="" value="Guardar" class='btn blue'>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
  include '../include/footer.php';
?>
