<?php
  include '../conexion.php';

  $email=clean_var($_REQUEST['email']);
  $pass=clean_var($_REQUEST['pass']);

  $sql="select user,foto, pass, email from usuarios where email=:correo";
  $sth = $db->dbh->prepare($sql);
  $sth->bindValue(":correo",$email);
  $sth->execute();
  $res=$sth->fetch(PDO::FETCH_OBJ);

  $user=$res->user;
  $correo=$res->email;
  $password=$res->pass;
  $foto=$res->foto;

  $passEncriptada=password_verify($pass,$password);
  if($email == $correo && $passEncriptada == true){
    $_SESSION['user']=$user;
    $_SESSION['foto']=$foto;
    echo "success";
  }
  else{
    echo "fail";
  }
 ?>
