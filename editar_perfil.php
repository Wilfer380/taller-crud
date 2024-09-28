<?php

include("bd/conexion.php");
session_start();

$id = $_SESSION ['id'];
$resultado = $conn->query("SELECT * FROM usuarios WHERE id = $id");
$usuarios = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="edit.php" method="post">
        <p>
            Nombre
        </p>
        <input type="text" name="nombre" id="" value="<?= $usuarios["nombre"]?>">
        <p>
            correo
        </p>
        <input type="text" name="correo" id="" value="<?= $usuarios["email"]?>">
        <p>
            contraseña
        </p>
        <input type="text" name="cotraseña" id="" value="<?= $usuarios["pass"]?>">
        <p>
           rol
        </p>
        <input type="text" name="rol" id="" value="<?= $usuarios["roles_id"]?>">
        <br>
        <input type="submit" value="">
    </form>
</body>
</html>