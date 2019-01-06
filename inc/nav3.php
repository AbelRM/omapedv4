<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Tramites <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="agregar-pcd2.php">Registro PCD</a></li>
          <li><a href="#">Tramite de DID</a></li>
          <li><a href="#">Tramite de duplicado</a></li>
          <li><a href="registrar-donacion.php"">Tramite de equipo</a></li> 
        </ul>
      </li>
      <li><a href="mostrar-pcd.php">Listado PCD</a></li>
      <li><a href="mostrar-equipos.php">Listado de Equipos</a></li>
      <li><a href="mostrar-diagnosticos.php">Diagnósticos</a></li>
      <li><a href="mostrar-usuarios.php">Usuarios</a></li>
      <li><a href="menu-reportes.php">Reportes</a></li>
    </ul>
  </div>
</nav>
</body>
</html>
