<?php
  include_once('inc/header.php');
  $id=$_GET['id'];
  include('conexion.php');
  $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
  mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
  mysqli_query($conexion,"SET NAMES 'utf8'");

  $sql = mysqli_query($conexion,"SELECT * from usuario WHERE id='".$id."'") or die("Problemas en consulta").mysqli_error();
  while ($registro=mysqli_fetch_array($sql)) {
    echo "<section class='indicaciones'>
      <div class='holder'>
        <h1><span class='resaltar'>USUARIO:</span> ".$registro['nombre'].".</h1>
      </div>
    </section>
    <main id='main'>
      <section class='personal espacio-superior'>
        <h3>Datos personales:</h3>
        <div class='contenido cols-2'>
          <p class='infor'><span>Usuario:</span> <br />".$registro['user']."</p>
          <p class='infor'><span>Nombre de usuario:</span> <br />".$registro['nombre']."</p>
          <p class='infor'><span>Apellidos de usuario:</span> <br />".$registro['apellido']."</p>
          <p class='infor'><span>DNI:</span> <br />".$registro['dni']."</p>
          <p class='infor'><span>Teléfono / Celular:</span> <br />".$registro['telefono']."</p>
          <p class='infor'><span>Tipo de usuario:</span> <br />".$registro['tipo_id']."</p>
      </section>";
  }
?>