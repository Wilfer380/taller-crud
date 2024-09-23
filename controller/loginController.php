<?php
session_start();
require_once("../bd/conexion.php");

$email = $_POST["email"];
$pass =  $_POST["pass"];

$sql = "select * from usuarios where email='$email' and pass='$pass' ;";

//los aprendices deben realizar estas sentencias sql, a traves de
//prepared statement, para prevenir ataques sql.

$result = $conn->query($sql);
$conn->close();


if ($result->num_rows > 0){
    $usuario = $result->fetch_assoc();
    //$idrol= $fila ["id"];
    //$sql = "select * from rloes where id= '$idrol'";
    $_SESSION ['nombre'] = $usuario ["nombre"];

   if ( $usuario["roles_id"] ==1){
      $_SESSION['rol'] = 'admin';
   } else{
    $_SESSION['rol'] = 'user';
   }
    header('location: ../usuarios.php');

}else{
    header('location: ../login.php');
}



?>
