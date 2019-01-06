<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Iniciar Sesión</title>
  <link rel="stylesheet" href="css/login.css" type="text/css">
</head>
<body>
  <div class="form">
    <form action="dologin.php" method="POST" autocomplete="off">
      <h1>Iniciar Sesión</h1>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Usuario" name="usuario" required>
      </div>
      <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="clave" required>
      </div>
      <div class="form-group-btn">
        <input type="submit" name="login" class="form-action" value="Iniciar sesión" />
      </div>
    </form>
  </div>
</body>
</html>