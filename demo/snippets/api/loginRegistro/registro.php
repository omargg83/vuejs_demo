<?php
  include '../conexion.php';

  if($_SERVER['REQUEST_METHOD']!= "POST"){
    header("location:../../index.php");
    die();
  }

  $usuario=clean_var($_REQUEST['user']);
  $pass=clean_var($_REQUEST['pass']);
  $email=clean_var($_REQUEST['email']);

  $extension = '';
  $ruta = '../api/loginRegistro/foto_perfil';
  $archivo = $_FILES['foto']['tmp_name'];
  $nombrearchivo = $_FILES['foto']['name'];
  $info = pathinfo($nombrearchivo);
  if($archivo!=""){
    $extension = $info['extension'];
    if ($extension=='png' || $extension=='PNG' || $extension=='jpg'  || $extension=='JPG') {
      $nombreFile = $usuario.rand(0000,9999).".".$extension;
      move_uploaded_file($archivo,'foto_perfil/'.$nombreFile);
      $ruta=$ruta."/".$nombreFile;
    }
    else{
      echo "fail";
      exit;
    }
  }
  else{
    $ruta = '../api/loginRegistro/foto_perfil/perfil.jpg';
  }
  $passEncriptada=password_hash($pass,PASSWORD_BCRYPT);

  $sql="insert into usuarios (user, email, pass, foto) values (:user, :email, :pass, :foto)";
  $sth = $db->dbh->prepare($sql);
  $sth->bindValue(":user",$usuario);
  $sth->bindValue(":email",$email);
  $sth->bindValue(":pass",$passEncriptada);
  $sth->bindValue(":foto",$ruta);
  if($sth->execute()){
    echo "success";
  }
  else{
    echo "fail";
  }

?>
