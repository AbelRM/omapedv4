<?php 
	include('conexion.php');
        $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
                  mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
                  mysqli_query($conexion,"SET NAMES 'utf8'");

    header('Location: mostrar-pcd2.php');
    $id = isset($_GET['id']) ? $_GET['id'] : 0;
//funcion para borrar
	global $conexion;
	$sql = "DELETE FROM pcd WHERE id = {$id}";
	$conexion->query($sql);
 //funcion   
  die();


