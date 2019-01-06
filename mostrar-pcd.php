<?php include_once('inc/header.php'); ?>
    <section class="indicaciones">
      <div class="holder">
        <?php
          include_once('conexion.php');
          $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
          mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
          mysqli_query($conexion,"SET NAMES 'utf8'");
          
          $sql = mysqli_query($conexion,"SELECT * from pcd") or die("Problemas en consulta").mysqli_error();
          $suma = 0;
          while ($registro=mysqli_fetch_array($sql)) {
            $suma = $suma + 1;
          }
          //$suma = $suma + 1;        
          echo "<h1><span class='resaltar'>Listado de PCD </span> en la ciudad de Tacna es de (N°".$suma.")</h1>";
          mysqli_close($conexion);
        ?>  
      </div>
    </section>

    <main id="main-full">
      <div class="panel panel-default">
        <div class="panel-heading">
          LISTADO
        </div>
        
        <div class="panel-body">
          <div class="table-responsive"> 
            <table class="table table-striped table-bordered table-hover" id="data">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Apellidos</th>
                  <th>DNI</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    include('conexion.php');
                    $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
                    mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
                    mysqli_query($conexion,"SET NAMES 'utf8'");

                    $sql = mysqli_query($conexion,"SELECT * from pcd") or die("Problemas en consulta").mysqli_error();
                   while ($registro=mysqli_fetch_array($sql)) {
                      echo "<tr>";
                      echo "<td>".$registro['id']."</td>";
                      echo "<td>".$registro['nombres']."</td>";
                      echo "<td>".$registro['apellidos']."</td>";
                      echo "<td>".$registro['dni']."</td>";
                      echo "<td>
                                <a class='btn btn-success' href=pcd.php?id=".$registro['id'].">Ver detalle</a>

                                <a class='btn btn-warning' href=editar-pcd.php?id=".$registro['id']." >Editar</a></span>

                                <a class='btn btn-danger' href=eliminar-pcd.php?id=".$registro['id']." echo >Eliminar</a>
                                
                            </td>";

                    }
                  ?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      
    </main>
<?php include_once('inc/footer.php'); ?>
