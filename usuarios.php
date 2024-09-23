<?php
session_start();

if(!isset($_SESSION[ 'rol']) ||$_SESSION['rol'] != 'admin'){
  header('location: login.php');
  
}

require_once("bd/conexion.php");

$sql = "select * from usuarios";

$result = $conn->query($sql);

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Usuarios</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Empresa WEG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-disabled="true"href="controller/logout.php">logout</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
   
<div class="container">
  <h2>Bienvenido <?php  echo($_SESSION["nombre"]);  ?></h2>
    
  <table class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>email</th>
        </tr>
    </thead>
    <tbody>

    <h2></h2>

    <?php

if ($result->num_rows > 0){

    while($fila = $result->fetch_assoc()){
    ?>
        <tr>
        <td><?php  echo $fila["id"];   ?></td>
        <td><?php  echo $fila["nombre"];   ?></td>
        <td><?php  echo $fila["email"];   ?></td>
        </tr>

     <?php
    }

}

?>

    </tbody>  
    </table> 
     </div>    
    </body>
    </html>
