<?php
  require_once("conexion.php");

  if($_SERVER['REQUEST_METHOD']!='POST'){
    header("location:index.php");
    die();
  }

  $id=clean_var($_REQUEST['id']);
  $producto=clean_var($_REQUEST['producto']);
  $precio=clean_var($_REQUEST['precio']);
  $cantidad=clean_var($_REQUEST['cantidad']);
  $categoria=clean_var($_REQUEST['categoria']);
  if($id>0){
    $sql="update inventario set producto=:producto, precio=:precio, cantidad=:cantidad, categoria=:categoria where id='$id'";
  }
  else{
    $sql="insert inventario (producto, precio, cantidad, categoria) values (:producto, :precio, :cantidad, :categoria)";
  }
  $sth = $db->dbh->prepare($sql);
  $sth->bindValue(":producto",$producto);
  $sth->bindValue(":precio",$precio);
  $sth->bindValue(":cantidad",$cantidad);
  $sth->bindValue(":categoria",$categoria);
  if($sth->execute()){
    echo "Funciona";
  }
  else{
    echo "no funciona";
  }


 ?>
