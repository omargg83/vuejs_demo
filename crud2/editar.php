<?php
  require_once("conexion.php");
  $id=clean_var($_REQUEST['id']);

  $sql="select * from inventario where id=:id";
  $sth = $db->dbh->prepare($sql);
  $sth->bindValue(":id",$id);
  $sth->execute();
  $resp=$sth->fetch(PDO::FETCH_OBJ);
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
        <input type="hidden" name="id" placeholder="id" class="form-control" value="<?php echo $resp->id; ?>" >
        <div class="form-group">
          <input type="text" name="producto" placeholder="Producto" class="form-control" value="<?php echo $resp->producto; ?>" >
        </div>
        <div class="form-group">
          <input type="number" name="precio" placeholder="Precio" class="form-control" value="<?php echo $resp->precio; ?>" >
        </div>
        <div class="form-group">
          <input type="number" name="cantidad" placeholder="Cantidad" class="form-control" value="<?php echo $resp->cantidad; ?>" >
        </div>
        <div class="form-group">
          <input type="text" name="categoria" placeholder="Categoria" class="form-control" value="<?php echo $resp->categoria; ?>" >
        </div>
        <div class="form-group">
          <input type="submit" value="guardar" class="btn btn-info">
        </div>
      </form>
    </div>

      <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  </body>
</html>
