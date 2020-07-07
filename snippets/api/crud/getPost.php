<?php
  include '../conexion.php';

  $temporal=array();
  $resultado=array();

  $sql="select * from snippets order by id desc";
  $sth = $db->dbh->query($sql);
  $sth->execute();
  echo json_encode($sth->fetchAll(PDO::FETCH_ASSOC));

?>
