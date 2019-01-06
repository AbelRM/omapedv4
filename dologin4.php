<?php 
/**$alert = '';
session_start();
if (!empty($_SESSION['active'])) {
	header("location:index.php");
}else{
if(!empty($_POST))

	if (empty($_POST['usuario']) || empty($_POST['clave'])) {
		$alert = "Por favor, ingrese su usuario y contraseña";
	}else{
		include('conexion.php');
        $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
                  mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
                  mysqli_query($conexion,"SET NAMES 'utf8'");

        $usuario= mysqli_real_escape_string($conexion,$_POST['user']);
		$contraseña= md5(mysqli_real_escape_string($conexion,$_POST['password']));

        $query = mysqli_query($conexion,"SELECT * FROM usuario WHERE user='$usuario' and password='$password'");
        $resultado = mysqli_num_rows($query);

        if ($resultado > 0) {
        	$_SESSION['active'] = true;
        	header("location:index.php");

        }else{
         	?>
    		<script languaje="javascript"> alert("Datos incorrectos"); location.href = "login2.php"; </script>
   		 	<?php
        }
    $_SESSION['user']=$usuario;
	mysqli_free_result($resultado);
	mysqli_close($conexion);
	}
}
**/
session_start();

$usuario=$_POST['usuario'];
$contraseña=$_POST['clave'];

$conexion=mysqli_connect("localhost","root","","omaped_prueba");
$consulta="SELECT * FROM usuario WHERE user='$usuario' and password='$contraseña'";
$resultado =mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
if($filas>0)
{
    header("location:index.php");
}
else
{
    ?>
    <script languaje="javascript"> alert("Datos incorrectos"); location.href = "login2.php"; </script>

    <?php
}
$_SESSION['usuario']=$usuario;
mysqli_free_result($resultado);
mysqli_close($conexion);
?>