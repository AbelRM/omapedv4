<?php include_once('inc/header.php'); ?>
      <section class="indicaciones">
      <div class="holder">
        <?php
          include_once('conexion.php');
          $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
          mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
          mysqli_query($conexion,"SET NAMES 'utf8'");
          
          $sql = mysqli_query($conexion,"SELECT * from pcd") or die("Problemas en consulta").mysqli_error();
            
          echo "<h1>Lista de <span class='resaltar'>reportes</span> de la Oficina de OMAPED</h1>";
          mysqli_close($conexion);
        ?>        
      </div>
    </section>
   
    <main id="main-full">
      <div class="panel panel-default">
        <div class="panel-heading">
          LISTADO DE REPORTES
        </div>
        <div class="panel-body">
          <div class="table-responsive">
        
            <td>
              <h2>Reporte del total de personas registradas en el sistema:</h2>
              <a class='btn btn-success' href="reportes/reporte-pcd.php" target="_blank">Reporte PCD</a>
              <h2>Reporte del total de equipos en el almacen: </h2>
              <a class='btn btn-warning' href="reportes/reporte-equipos.php" target="_blank">Reporte Equipos</a></span>      
            </td>

        </div> 
        </div> 
      </div>
  </main>
<?php include_once('inc/footer.php'); ?>