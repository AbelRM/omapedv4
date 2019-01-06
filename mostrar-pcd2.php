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
                    while ($registro=mysqli_fetch_array($sql)) 
                    {
                      ?>
                      <tr>
                        <td><?php echo $registro['id']; ?></td>
                        <td><?php echo $registro['nombres']; ?></td>
                        <td><?php echo $registro['apellidos']; ?></td>
                        <td><?php echo $registro['dni']; ?></td>
                        <td>

                         <a class='btn btn-success' href="pcd.php" onclick="mensaje(<?php echo $registro['id']; ?>)"  >Ver detalle</a>

                         <!-- <a class='btn btn-success' href=pcd.php?id=".$registro['id'].">Ver detalle</a>-->

                          <!--<a class='btn btn-warning' href=editar-pcd.php?id=".$registro['id'].">Editar</a>-->

                          <a class='btn btn-warning' href="editar-pcd.php" onclick="preguntar2(<?php echo $registro['id']; ?>)">Editar</a>

                          <a class='btn btn-danger' href="eliminar-pcd.php" onclick="preguntar(<?php echo $registro['id']; ?>)" >Eliminar</a>
                        </td>                  
                      </tr>
                      <?php 
                    }

                       ?>
        
              </tbody>
            </table>
          </div>
        </div>
      </div>
    <script type="text/javascript">
      function mensaje(id){
        if (confirm('SE MOSTRARAN LOS DATOS DE '+ id)) {
          window.location.href = "pcd.php?id=" + id;
        }
      }
      function preguntar(id){
        if (confirm('¿ESTA SEGURO DE ELIMINAR ESTE REGISTRO DE '+ id + '?')) {
          window.location.href = "eliminar-pcd.php?id=" + id;
        }
      }
       function preguntar2(id){
        if (confirm('¿ESTA SEGURO QUE DESEA EDITAR ESTE REGISTRO '+ id + '?')) {
          window.location.href = "eliminar-pcd.php?id=" + id;
        }
      }
    </script>
    </main>
<?php include_once('inc/footer.php'); ?>