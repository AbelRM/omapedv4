<?php
include("conexion.php");

if (isset($_POST['nombre']) && !empty($_POST['nombre'])&&
    isset($_POST['apellidos']) && !empty($_POST['apellidos'])&&
    isset($_POST['dni']) && !empty($_POST['dni'])&&
    isset($_POST['nacimiento']) && !empty($_POST['nacimiento'])&&
    isset($_POST['direccion']) && !empty($_POST['direccion'])&&
    isset($_POST['fono']) && !empty($_POST['fono'])&&
    isset($_POST['departamento']) && !empty($_POST['departamento'])&&
    isset($_POST['provincia']) && !empty($_POST['provincia'])&&
    isset($_POST['distrito']) && !empty($_POST['distrito'])&&
    isset($_POST['sexo']) && !empty($_POST['sexo'])&&
    isset($_POST['ecivil']) && !empty($_POST['ecivil'])&&
    isset($_POST['instruccion']) && !empty($_POST['instruccion'])&&
    isset($_POST['asociacion']) && !empty($_POST['asociacion'])&&
    isset($_POST['seguro']) && !empty($_POST['seguro'])&&
    isset($_POST['trabajo']) && !empty($_POST['trabajo'])) {

      $nombre = $_POST['nombre'];
      $apellidos = $_POST['apellidos'];
      $dni = $_POST['dni'];
      $nacimiento = $_POST['nacimiento'];
      $direccion = $_POST['direccion'];
      $fono = $_POST['fono'];
      $distrito = $_POST['distrito'];
      $sexo = $_POST['sexo'];
      $instruccion = $_POST['instruccion'];
      $ecivil = $_POST['ecivil'];
      $asociacion = $_POST['asociacion'];
      $seguro = $_POST['seguro'];
      $trabajo = $_POST['trabajo'];
      $fecha = $_POST['fecha'];
      $usuario = $_POST['user'];

      $conexion= new mysqli($dbHost,$dbUser,$dbPass,$dbName) or die("Problemas en la conexión");
      mysqli_set_charset($conexion,'utf8');
      mysqli_query($conexion,"CALL pInsertar_pcd('$nombre','$apellidos','$dni','$nacimiento','$direccion','$fono','$fecha','$distrito','$sexo','$instruccion','$ecivil','$asociacion','$seguro','$trabajo','$usuario')");

	    header("location: agregar-pcd.php");
} else {
	    echo "Problemas al insertar los datos...";
}
?>
