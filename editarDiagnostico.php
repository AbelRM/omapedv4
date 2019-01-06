<?php
include("conexion.php");

if (isset($_POST['codigo']) && !empty($_POST['codigo']) &&
    isset($_POST['diagnostico']) && !empty($_POST['diagnostico']) &&
    isset($_POST['tipo']) && !empty($_POST['tipo'])){
    $codigo = $_POST['codigo'];
    $diagnostico = $_POST['diagnostico'];
    $tipo = $_POST['tipo'];

    $conexion = new mysqli($dbHost,$dbUser,$dbPass,$dbName) or die("Problemas en la conexión");
    mysqli_set_charset($conexion,'utf8');
    mysqli_query($conexion,"CALL pEditar_diagnostico('$codigo','$diagnostico','$tipo')");

	  header("location: editar-diagnostico.php?id=$codigo");
}else{
  echo "<<h1>Problemas en la inserción</h1>";
}
?>
