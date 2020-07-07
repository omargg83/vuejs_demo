<?php
  require_once("conexion.php");

  $sql="select * from inventario";
  $sth = $db->dbh->query($sql);
  $sth->execute();
  $resp=$sth->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-light bg-warning">
      <a href="#" class="navbar-brand">CRUD</a>
    </nav>

    <div class="container" style="padding-top:30px">
      <form class="" action="guardar.php" method="post">
        <div class="form-group">
          <input type="text" name="producto" value="" placeholder="Producto" class="form-control">
        </div>
        <div class="form-group">
          <input type="number" name="precio" value="" placeholder="Precio" class="form-control">
        </div>
        <div class="form-group">
          <input type="number" name="cantidad" value="" placeholder="Cantidad" class="form-control">
        </div>
        <div class="form-group">
          <input type="text" name="categoria" value="" placeholder="Categoria" class="form-control">
        </div>
        <div class="form-group">
          <input type="submit" value="guardar" class="btn btn-info">
        </div>
      </form>
    </div>

    <div class='container'>
      <table class='table'>
        <th>Producto</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Categoria</th>
        <?php
          foreach($resp as $key){
            echo "<tr>";
              echo "<td>";
                echo "<a href='editar.php?id={$key->id}'>Editar</a>";
              echo "</td>";
              echo "<td>";
                echo $key->producto;
              echo "</td>";
              echo "<td>";
                echo $key->precio;
              echo "</td>";
              echo "<td>";
                echo $key->cantidad;
              echo "</td>";
              echo "<td>";
                echo $key->categoria;
              echo "</td>";
            echo "</tr>";
          }
        ?>
      </table>
    </div>

      <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  </body>
</html>
