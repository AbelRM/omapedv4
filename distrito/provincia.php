<?php
	include_once('../conexion.php');
	$conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
	mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
	mysqli_query($conexion,"SET NAMES 'utf8'");

$rpta="";
if ($_POST["elegido"]=="8") {
	$sql = mysqli_query($conexion,"SELECT * from v_lista_provincias WHERE IdDepartamento='8' ORDER BY Provincia DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option value=\"".$registro['IdProvincia']."\">".$registro['Provincia']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}
if ($_POST["elegido"]=="15") {
	$sql = mysqli_query($conexion,"SELECT * from v_lista_provincias WHERE IdDepartamento='15' ORDER BY Provincia DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option value=\"".$registro['IdProvincia']."\">".$registro['Provincia']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}
if ($_POST["elegido"]=="18") {
	$sql = mysqli_query($conexion,"SELECT * from v_lista_provincias WHERE IdDepartamento='18' ORDER BY Provincia DESC") or die("Problemas en consulta").mysqli_error();

	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['IdDepartamento']."\" value=\"".$registro['IdProvincia']."\">".$registro['Provincia']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}
if ($_POST["elegido"]=="23") {
	$sql = mysqli_query($conexion,"SELECT * from v_lista_provinciasv2 WHERE departamento_id='23' ORDER BY provincia DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['departamento_id']."\" value=\"".$registro['id']."\">".$registro['provincia']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}

echo $rpta;
?>
