<?php
	include_once('../conexion.php');
	$conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
	mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
	mysqli_query($conexion,"SET NAMES 'utf8'");

$rpta="";

if ($_POST["elegido"]=="69") {
	$sql = mysqli_query("SELECT * from v_lista_distritos WHERE IdProvincia='69' ORDER BY Distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['Idprovincia']."\" value=\"".$registro['IdDistrito']."\">".$registro['Distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}
if ($_POST["elegido"]=="70") {
	$sql = mysqli_query("SELECT * from v_lista_distritos WHERE IdProvincia='70' ORDER BY Distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['Idprovincia']."\" value=\"".$registro['IdDistrito']."\">".$registro['Distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}
if ($_POST["elegido"]=="71") {
	$sql = mysqli_query("SELECT * from v_lista_distritos WHERE IdProvincia='71' ORDER BY Distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['Idprovincia']."\" value=\"".$registro['IdDistrito']."\">".$registro['Distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}
if ($_POST["elegido"]=="72") {
	$sql = mysqli_query("SELECT * from v_lista_distritos WHERE IdProvincia='72' ORDER BY Distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['Idprovincia']."\" value=\"".$registro['IdDistrito']."\">".$registro['Distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}
if ($_POST["elegido"]=="73") {
	$sql = mysqli_query("SELECT * from v_lista_distritos WHERE IdProvincia='73' ORDER BY Distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['Idprovincia']."\" value=\"".$registro['IdDistrito']."\">".$registro['Distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}
if ($_POST["elegido"]=="74") {
	$sql = mysqlii_query("SELECT * from v_lista_distritos WHERE IdProvincia='74' ORDER BY Distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['Idprovincia']."\" value=\"".$registro['IdDistrito']."\">".$registro['Distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}
if ($_POST["elegido"]=="75") {
	$sql = mysqli_query("SELECT * from v_lista_distritos WHERE IdProvincia='75' ORDER BY Distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['Idprovincia']."\" value=\"".$registro['IdDistrito']."\">".$registro['Distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}
if ($_POST["elegido"]=="76") {
	$sql = mysqli_query("SELECT * from v_lista_distritos WHERE IdProvincia='76' ORDER BY Distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['Idprovincia']."\" value=\"".$registro['IdDistrito']."\">".$registro['Distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}
if ($_POST["elegido"]=="77") {
	$sql = mysqli_query("SELECT * from v_lista_distritos WHERE IdProvincia='77' ORDER BY Distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['Idprovincia']."\" value=\"".$registro['IdDistrito']."\">".$registro['Distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}
if ($_POST["elegido"]=="78") {
	$sql = mysqli_query("SELECT * from v_lista_distritos WHERE IdProvincia='78' ORDER BY Distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqi_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['Idprovincia']."\" value=\"".$registro['IdDistrito']."\">".$registro['Distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}
if ($_POST["elegido"]=="79") {
	$sql = mysqli_query("SELECT * from v_lista_distritos WHERE IdProvincia='79' ORDER BY Distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['Idprovincia']."\" value=\"".$registro['IdDistrito']."\">".$registro['Distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}
if ($_POST["elegido"]=="80") {
	$sql = mysqli_query("SELECT * from v_lista_distritos WHERE IdProvincia='80' ORDER BY Distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['Idprovincia']."\" value=\"".$registro['IdDistrito']."\">".$registro['Distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}
if ($_POST["elegido"]=="81") {
	$sql = mysqli_query("SELECT * from v_lista_distritosv2 WHERE provincia_id='81' ORDER BY distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['provincia_id']."\" value=\"".$registro['id']."\">".$registro['distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}











if ($_POST["elegido"]=="129") {
	$sql = mysqli_query("SELECT * from v_lista_distritos WHERE IdProvincia='129' ORDER BY Distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['Idprovincia']."\" value=\"".$registro['IdDistrito']."\">".$registro['Distrito']."</option>\n".$rpta;
	}
	mysql_close($conexion);
}
if ($_POST["elegido"]=="130") {
	$sql = mysqli_query("SELECT * from v_lista_distritos WHERE IdProvincia='130' ORDER BY Distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['Idprovincia']."\" value=\"".$registro['IdDistrito']."\">".$registro['Distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}
if ($_POST["elegido"]=="131") {
	$sql = mysqli_query("SELECT * from v_lista_distritos WHERE IdProvincia='131' ORDER BY Distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['Idprovincia']."\" value=\"".$registro['IdDistrito']."\">".$registro['Distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}
if ($_POST["elegido"]=="132") {
	$sql = mysqli_query("SELECT * from v_lista_distritos WHERE IdProvincia='132' ORDER BY Distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['Idprovincia']."\" value=\"".$registro['IdDistrito']."\">".$registro['Distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}
if ($_POST["elegido"]=="133") {
	$sql = mysqli_query("SELECT * from v_lista_distritos WHERE IdProvincia='133' ORDER BY Distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option value=\"".$registro['IdDistrito']."\">".$registro['Distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}
if ($_POST["elegido"]=="134") {
	$sql = mysqli_query("SELECT * from v_lista_distritos WHERE IdProvincia='134' ORDER BY Distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['Idprovincia']."\" value=\"".$registro['IdDistrito']."\">".$registro['Distrito']."</option>\n".$rpta;
	}
	mysqlii_close($conexion);
}
if ($_POST["elegido"]=="135") {
	$sql = mysqli_query("SELECT * from v_lista_distritos WHERE IdProvincia='135' ORDER BY Distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['Idprovincia']."\" value=\"".$registro['IdDistrito']."\">".$registro['Distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}
if ($_POST["elegido"]=="136") {
	$sql = mysqli_query("SELECT * from v_lista_distritos WHERE IdProvincia='136' ORDER BY Distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['Idprovincia']."\" value=\"".$registro['IdDistrito']."\">".$registro['Distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}
if ($_POST["elegido"]=="137") {
	$sql = mysqli_query("SELECT * from v_lista_distritos WHERE IdProvincia='137' ORDER BY Distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['Idprovincia']."\" value=\"".$registro['IdDistrito']."\">".$registro['Distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}
if ($_POST["elegido"]=="138") {
	$sql = mysqli_query("SELECT * from v_lista_distritos WHERE IdProvincia='138' ORDER BY Distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['Idprovincia']."\" value=\"".$registro['IdDistrito']."\">".$registro['Distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}


if ($_POST["elegido"]=="149") {
	$sql = mysqli_query("SELECT * from v_lista_distritos WHERE IdProvincia='149' ORDER BY Distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['Idprovincia']."\" value=\"".$registro['IdDistrito']."\">".$registro['Distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}
if ($_POST["elegido"]=="150") {
	$sql = mysqli_query("SELECT * from v_lista_distritos WHERE IdProvincia='150' ORDER BY Distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['Idprovincia']."\" value=\"".$registro['IdDistrito']."\">".$registro['Distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}
if ($_POST["elegido"]=="151") {
	$sql = mysqli_query("SELECT * from v_lista_distritosv2 WHERE provincia_id='151' ORDER BY distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['provincia_id']."\" value=\"".$registro['id']."\">".$registro['distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}



if ($_POST["elegido"]=="187") {
	$sql = mysqli_query($conexion,"SELECT * from v_lista_distritosv2 WHERE provincia_id='187' ORDER BY distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['provincia_id']."\" value=\"".$registro['id']."\">".$registro['distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}

if ($_POST["elegido"]=="188") {
	$sql = mysqli_query("SELECT * from v_lista_distritosv2 WHERE provincia_id='188' ORDER BY distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['provincia_id']."\" value=\"".$registro['id']."\">".$registro['distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}

if ($_POST["elegido"]=="189") {
	$sql = mysqli_query("SELECT * from v_lista_distritos WHERE IdProvincia='189' ORDER BY Distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['IdProvincia']."\" value=\"".$registro['IdDistrito']."\">".$registro['Distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}

if ($_POST["elegido"]=="190") {
	$sql = mysqli_query("SELECT * from v_lista_distritos WHERE IdProvincia='190' ORDER BY Distrito DESC") or die("Problemas en consulta").mysqli_error();
	while ($registro=mysqli_fetch_array($sql)) {
		$rpta = "<option data-location=\"".$registro['Idprovincia']."\" value=\"".$registro['IdDistrito']."\">".$registro['Distrito']."</option>\n".$rpta;
	}
	mysqli_close($conexion);
}


echo $rpta;
?>
