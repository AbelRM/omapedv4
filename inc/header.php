<?php
  session_start();
  if(!isset($_SESSION['usuario'])){
    header('Location:login2.php');
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Sistema interno - OMAPED</title>
  <link rel="icon" href="css/img/icono.ico">
  <link rel="stylesheet" href="css/estilos.css">
  <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

  <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <link href="css/tablas/bootstrap.css" rel="stylesheet" />
  <!--<link href="css/_bootstrap.css" rel="stylesheet" />-->
	<link href="js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
  <script type="text/javascript" src="js/jsapi.js"></script>
  
  <!--<link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
  <link href="css/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
  <script src="css/bootstrap/js/bootstrap.min.js"></script>
  <script src="css/bootstrap/js/bootstrap.js"></script>-->

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

  function mostrar(){
    document.getElementById('oculto').style.display = 'block';
  }
  function muestra_oculta(id){
    if (document.getElementById){ //se obtiene el id
    var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
    el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
    }
    }
    window.onload = function(){/*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
    muestra_oculta('oculto');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
  }
  </script>
  
</head>
<!--<body onload="document.pcd.nombre.focus()">-->
  <div id="contenedor">
    <header id="cabecera">
      <div class="panel-superior">
        <div class="holder">
          <div class="bienvenida">
            <span class="texto-bienvenida">Sistema Interno de OMAPED</span>
          </div>
            <?php
            date_default_timezone_get('America/Lima');
            $hora_actual=date("Y-m-d H:i:s");

            if(!isset($_SESSION['usuario']))
              {
              echo "<ul class=\"menu\">";
              echo "<li><a href=\"login2.php\">Iniciar Sesión</a></li>";
              echo "</ul>";
              }
              else{
              echo "<ul class=\"menu\">";
              echo "<li>Fecha: <strong>".$hora_actual."</strong></li>";
              echo "<li>Bienvenido nuevamente <strong>".$_SESSION['usuario']."</strong></li>";
            
              echo "<li><a href=\"logout.php\">Cerrar Sesión</a></li>";
              echo "</ul>";
              }
          ?>
        </div>
      </div>
      <!--<div class="contenedor-cabecera">
        <div class="contenedor-logo">
          <strong class="logo"><a href="#">Sistema interno - OMAPED</a></strong>
        </div>
      </div>-->
    </header>
  </div>
<?php include_once('inc/nav3.php'); ?>