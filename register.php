<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Registro</title>
    
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
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
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
  <h2>Registro de sus datos</h2>
  <br>
  <br>
 </div>
 <div class="container">
<form action="registerC.php" method="post">
<div class="m-2 col-md-6">
    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
        <input name="nombre" type="text" class="form-control"  placeholder="Jaimito perez"required>
    </div>
    <div class="m-2 col-md-6">
    <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
        <input name="pass" type="password" class="form-control"  placeholder="12345678"required> 
    </div>  
    <div class="m-2 col-md-6">
    <label for="exampleFormControlInput1" class="form-label">correo</label>
        <input name="email" type="email" class="form-control"  placeholder="name@example.com"required>  
    </div>

    <input type= "hidden"name='rol' value=2>
    <div class="m-2 col-md-6">
    <button type="submit" class="btn btn-success">Registrarse</button>

    </div>
</form>
</body>
</html>