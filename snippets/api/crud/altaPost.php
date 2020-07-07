<?php
  include '../conexion.php';

  foreach($_POST as $campo => $valor ){
    $var ="$".$campo."='".$valor."';";
    eval($var);
  }

  $id=null;
  $user=$_SESSION['user'];
  $foto=$_SESSION['foto'];

  $sql="insert into snippets (user, foto, titulo, codigo, descripcion, categoria) values (:user,:foto, :titulo, :codigo, :descripcion, :categoria)";
  $sth = $db->dbh->prepare($sql);
  $sth->bindValue(":user",$user);
  $sth->bindValue(":foto",$foto);
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
