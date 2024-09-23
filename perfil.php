<?php
session_start();
if(!isset($_SESSION[ 'rol'])){
  header('location: login.php'); 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Empresa WEG</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<h2>Bienvenido  <?php   echo($_SESSION['nombre'])    ?></h2> 
<h1>Editar perfil</h1>
<form id="perfilForm">
<div class="m-2 col-md-6">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
</div>
<div class="m-2 col-md-6">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
</div>
            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required>

            <button type="submit">Guardar Cambios</button>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>   
</body>
</html>