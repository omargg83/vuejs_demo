<?php
  include '../conexion.php';

  $cat=clean_var($_REQUEST['cat']);

  $sql="select * from snippets where categoria=:cat";
  $sth = $db->dbh->prepare($sql);
  $sth->bindValue(":cat",$cat);
  $sth->execute();
  echo json_encode($sth->fetchAll(PDO::FETCH_ASSOC));

?>
