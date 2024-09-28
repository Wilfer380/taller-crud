<?php

$conn = new mysqli("localhost", "root", "", "", 3320);

// Crear la base de datos si no existe
$conn->query("CREATE DATABASE IF NOT EXISTS php");
$conn->select_db("php");

// Crear la tabla usuarios si no existe, incluyendo el campo 'nombre'
$conn->query("CREATE TABLE IF NOT EXISTS usuarios(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(250) NOT NULL,  
    email VARCHAR(250) NOT NULL,
    pass VARCHAR(250) NOT NULL,
    roles_id INT NOT NULL
)");

// Datos ficticios para insertar en la tabla usuarios (incluyendo id_rol y nombre)
$datos = [
    ['Juan Perez', 'juan.perez@example.com', 'password1', 1],
    ['Maria Lopez', 'maria.lopez@example.com', 'password2', 2],
    ['Carlos Sanchez', 'carlos.sanchez@example.com', 'password3', 1],
    ['Ana Gomez', 'ana.gomez@example.com', 'password4', 2],
    ['Luis Fernandez', 'luis.fernandez@example.com', 'password5', 1],
    ['Marta Diaz', 'marta.diaz@example.com', 'password6', 2],
    ['Jose Romero', 'jose.romero@example.com', 'password7', 1],
    ['Laura Martinez', 'laura.martinez@example.com', 'password8', 2],
    ['Miguel Ortiz', 'miguel.ortiz@example.com', 'password9', 1],
    ['Carmen Ruiz', 'carmen.ruiz@example.com', 'password10', 2],
    ['Pablo Gutierrez', 'pablo.gutierrez@example.com', 'password11', 1],
    ['Sofia Moreno', 'sofia.moreno@example.com', 'password12', 2],
    ['Alberto Alvarez', 'alberto.alvarez@example.com', 'password13', 1],
    ['Silvia Herrera', 'silvia.herrera@example.com', 'password14', 2],
    ['Jorge Castillo', 'jorge.castillo@example.com', 'password15', 1],
    ['Isabel Dominguez', 'isabel.dominguez@example.com', 'password16', 2],
    ['Raul Navarro', 'raul.navarro@example.com', 'password17', 1],
    ['Paula Varela', 'paula.varela@example.com', 'password18', 2],
    ['David Vega', 'david.vega@example.com', 'password19', 1],
    ['Cristina Jimenez', 'cristina.jimenez@example.com', 'password20', 2]
];

// Generar y ejecutar las consultas de inserción
foreach ($datos as $dato) {
    $nombre = $conn->real_escape_string($dato[0]);
    $email = $conn->real_escape_string($dato[1]);
    $pass = $conn->real_escape_string($dato[2]); // Asegúrate de usar hashing en contraseñas en un entorno real
    $id_rol = (int)$dato[3];
    $sql = "INSERT INTO usuarios (nombre, email, pass, roles_id) VALUES ('$nombre', '$email', '$pass', $id_rol)";
    $conn->query($sql);
}




?>
