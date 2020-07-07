<?php
  include '../conexion.php';

  $correo=clean_var($_REQUEST['correo']);
  $sql="select email from usuarios where email=:correo";
  $sth = $db->dbh->prepare($sql);
  $sth->bindValue(":correo",$correo);
  $sth->execute();
  $num=$sth->rowCount();
  if($num==0){
    echo "success";
  }
  else{
    echo "fail";
  }
?>
