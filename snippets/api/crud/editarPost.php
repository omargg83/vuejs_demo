<?php
  include '../conexion.php';

  foreach($_POST as $campo => $valor ){
    $var ="$".$campo."='".$valor."';";
    eval($var);
  }

  $sql="update snippets set titulo=:titulo, codigo=:codigo, descripcion=:descripcion, categoria=:categoria where id=:id";
  $sth = $db->dbh->prepare($sql);
  $sth->bindValue(":id",$id);
  $sth->bindValue(":titulo",$titulo);
  $sth->bindValue(":codigo",$codigo);
  $sth->bindValue(":descripcion",$descripcion);
  $sth->bindValue(":categoria",$categoria);
  if($sth->execute()){
    echo "success";
  }
  else{
    echo "fail";
  }


?>
