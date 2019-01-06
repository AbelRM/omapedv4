<?php 
include('conexion.php');
        $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
                  mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
                  mysqli_query($conexion,"SET NAMES 'utf8'");
        $consulta = '';

function laConsulta()
{

	global $conexion, $consulta;
	$sql = 'SELECT * FROM pcd';
	return $conexion->query($sql);
}

function borrar($id)
{
	global $conexion;
	$sql = "DELETE FROM pcd WHERE id = {$id}";
	$conexion->query($sql);
}

 ?>

