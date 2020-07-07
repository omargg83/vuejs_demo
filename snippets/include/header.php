<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.15.2/dist/sweetalert2.css">
    <title>Snippets</title>
  </head>
  <body>
    <main id='app'>
      <nav class='blue'>
        <div class="nav-wrapper" v-if="menu == true">
          <ul id="nav_mobile" class="right hide-on-med-and-down">
            <li><a href="index.php"><i class='material-icons'>home</i></a></li>
            <li><a href="alta.php"><i class='material-icons'>add</i></a></li>
            <li><a href="../login/salir.php">Salir</a></li>
          </ul>
        </div>
      </nav>
