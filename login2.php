<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Iniciar Sesión</title>
  <link rel="icon" href="css/img/icono.ico">
  <link rel="stylesheet" href="css/login2.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/_bootstrap.css">
</head>
<body>
  <form action="dologin4.php" method="POST" autocomplete="off">
  <div class="login-box">
    <img class="avatar" src="css/img/muni3.jpg">
    <h1>OMAPED - TACNA</h1>
    <h2>Iniciar Sesión</h2>
    <form>
      <label for="user">USUARIO:</label>
      <input type="text" placeholder="Ingresar Usuario" name="usuario">

      <label for="password">CONTRASEÑA:</label>
      <input type="password" placeholder="Ingresar Contraseña" name="clave">
      
      <button name="iniciar" class="btn btn-warning btn-block ">INGRESAR</button>

      <!--<input type="submit" value="INGRESAR">-->
    
    </form>
  </div>
  </form>
</body>
</html>