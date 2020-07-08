<?php
  include '../conexion.php';
  $id=clean_var($_GET['id']);

  $sql="delete from snippets where id=:id";
  $sth = $db->dbh->prepare($sql);
  $sth->bindValue(":id",$id);
  $a=$sth->execute();
  if($a){
    echo "success";
  }
  else{
    echo "fail";
  }
?>
