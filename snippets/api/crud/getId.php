<?php
  include '../conexion.php';
  $id=clean_var($_GET['id']);

  $sql="select * from snippets where id='$id'";
  $sth = $db->dbh->query($sql);
  $sth->execute();
  echo json_encode($sth->fetch(PDO::FETCH_ASSOC));

?>
