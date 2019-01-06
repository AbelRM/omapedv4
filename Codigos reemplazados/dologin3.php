<?php session_start();
if (isset($_SESSION['usuario'])) {
	header("Location: login2.php");
}

if ($_SERVER['REQUEST_METHOD']=='POST') {
	$usuario = $_POST['usuario'];
  	$clave = $_POST['clave'];

  	require('conexion.php');
  	$conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
 	mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
  
  	$consulta = $conexion ->prepare('SELECT * FROM usuario WHERE user=:usuario and password=:clave');
  	$consulta = execute(array(':usuario' => $usuario, ':clave' => $clave));
  	$resultado = $consulta ->fetch();
  	if ($resultado!== false) {
  		$_SESSION['usuario']=$usuario;
  		header("Location: index.php");
  	}
  	else{
  		?>
         <script languaje="javascript"> alert("DATOS INCORRECTOS."); location.href = "login2.php"; </script>
        <?php
  	}
  }
?>