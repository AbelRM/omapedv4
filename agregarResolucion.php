<?php
include("conexion.php");

if (isset($_POST['resol']) && !empty($_POST['resol'])&&
    isset($_POST['did']) && !empty($_POST['did'])) {

      $resol = $_POST['resol'];
      $did = $_POST['did'];
      $persona = $_POST['persona'];

      $conexion= new mysqli($dbHost,$dbUser,$dbPass,$dbName) or die("Problemas en la conexión");
      mysqli_set_charset($conexion,'utf8');
      mysqli_query($conexion,"CALL pInsertar_resol('$resol','$did','$persona')");

	    header("location: pcd.php?id=$persona");
} else {
	    echo "Problemas al insertar los datos...";
}
?>
