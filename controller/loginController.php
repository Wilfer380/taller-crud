<?php
session_start();
require_once("../bd/conexion.php");

$email = $_POST["email"];
$pass =  $_POST["pass"];

$sql = "SELECT * FROM usuarios WHERE email='$email' AND pass='$pass'";

//los aprendices deben realizar estas sentencias sql, a traves de
//prepared statement, para prevenir ataques sql.

$result = $conn->query($sql);
$conn->close();


if ($result->num_rows > 0){
    $usuario = $result->fetch_assoc();
    //$idrol= $fila ["id"];
    //$sql = "select * from rloes where id= '$idrol'";
    $_SESSION ['nombre'] = $usuario ["nombre"];
    $_SESSION['id'] = $usuario ["id"];
    
   if ( $usuario["roles_id"] == 1){
 
      $_SESSION['rol'] = 'admin';
   } else{
    $_SESSION['rol'] = 'user';
   }
   echo  $usuario ["id"];
    header('location: ../usuarios.php');
   echo "erro1";
}else{
    header('location: ../login.php');
   
}



?>
