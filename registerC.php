<?php

require_once("bd/conexion.php");
//require_once("utilities.php/verificador1.php");

$name =  $_POST["nombre"];
$pass =  $_POST["pass"];
$email = $_POST["email"];
$rol = $_POST["rol"];

//$v1 = new Verificador();
//$v1->EspaciosBlanco($name);

$sql = "Insert into usuarios (nombre, pass, email, roles_id) values 
('$name', '$pass', '$email', '$rol')"; 

if(!$conn->query($sql)) {
    echo ("Ocurrio un error");
}
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
    <a href="usuarios.php" class="btn btn-primary"> ver usuarios </a>
</body>
</html>