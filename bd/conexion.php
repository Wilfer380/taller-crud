<?php

$localHost = "localhost";

$conn = new mysqli("$localHost", "root", "", "php");

if ($conn->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " 
    . $mysqli->connect_error;
}


?>