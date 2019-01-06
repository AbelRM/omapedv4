<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Combos dependientes</title>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script language="javascript">
$(document).ready(function(){
	// Parametros para e combo1
   $("#departamento").change(function () {
   		$("#departamento option:selected").each(function () {
			//alert($(this).val());
				elegido=$(this).val();
				$.post("distrito/provincia.php", { elegido: elegido }, function(data){
				$("#provincia").html(data);
				$("#distrito").html("");
			});
        });
   })
	// Parametros para el combo2
	$("#provincia").change(function () {
   		$("#provincia option:selected").each(function () {
			//alert($(this).val());
				elegido=$(this).val();
				$.post("distrito/distrito.php", { elegido: elegido }, function(data){
				$("#distrito").html(data);
			});
        });
   })
});
</script>
</head>
<body>
<select name="departamento" id="departamento">
	  <option value="" disabled selected>Elegir</option>
    <?php
      include_once('conexion.php');
      $conexion=mysql_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
      mysql_select_db($dbName,$conexion) or die("Problemas al acceder a la base de datos...");
      mysql_query("SET NAMES 'utf8'");
      $sql = mysql_query("SELECT * from v_lista_departamentos") or die("Problemas en consulta").mysql_error();
      while ($registro=mysql_fetch_array($sql)) {
        echo "<option value=\"".$registro['IdDepartamento']."\">".$registro['Departamento']."</option>";
      }
      mysql_close();
    ?>
</select>
<select name="provincia" id="provincia">
</select>
<select name="distrito" id="distrito">
</select>
</body>
</html>
