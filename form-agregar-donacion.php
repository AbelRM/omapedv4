<?php include_once('inc/header.php'); ?>
      <section class="indicaciones">
      <div class="holder">
        <?php
          include_once('conexion.php');
          $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
          mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
          mysqli_query($conexion,"SET NAMES 'utf8'");
          
          $sql = mysqli_query($conexion,"SELECT * from pcd") or die("Problemas en consulta").mysqli_error();
            
          echo "<h1>Lista de <span class='resaltar'>reporte</span> de la Oficina de OMAPED</h1>";
          mysqli_close($conexion);
        ?>        
      </div>
    </section>

     <div class="form-group-btn">
            <input type="submit" name="submit" class="form-action" value="Registrar" />
            <input type="reset" name="submit" class="form-action limpiar" value="Limpiar" />
          </div>
      
    <footer id="pie-pagina">
      <div class="texto">
        <strong class="logo-abajo"><a href="#">Sistema Interno - Omaped</a></strong>
        <span>Municipalidad Provincial de Tacna</span><br>
        <span>Gerencia de desarrollo económico social</span> -
        <span>Sub Gerencia de programas sociales y participación vecinal</span><br>
        <span>Oficina municipal de atención a la persona con discapacidad</span>
      </div>
    </footer>
   </div>
</body>
</html>