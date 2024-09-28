<?php

include("bd/conexion.php");
session_start();
$id = $_SESSION["id"];
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$cotraseña = $_POST["cotraseña"];
$rol = $_POST["rol"];

$conn->query("UPDATE usuarios SET nombre = '$nombre', email = '$correo', pass = '$cotraseña' , roles_id = $rol where id = $id");
header("location: usuarios.php");


?>