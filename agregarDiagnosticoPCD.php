<?php
include("conexion.php");

if (isset($_POST['diagnostico']) && !empty($_POST['diagnostico'])) {

      $diagnostico = $_POST['diagnostico'];
      $persona = $_POST['persona'];

      $conexion= new mysqli($dbHost,$dbUser,$dbPass,$dbName) or die("Problemas en la conexión");
      mysqli_set_charset($conexion,'utf8');
      mysqli_query($conexion,"CALL pInsertar_diagnostico('$diagnostico','$persona')");

	    header("location: pcd.php?id=$persona");
} else {
	    echo "Problemas al insertar los datos...";
}
?>
