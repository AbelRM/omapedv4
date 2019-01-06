<?php include_once('inc/header.php'); ?>
    <section class="indicaciones">
      <div class="holder">
        <h1><span class="resaltar">Listado de Diagnósticos</span> CIE10.</h1>Esperar a que se terminen de cargar todos los registros antes de realizar una búsqueda.
      </div>
    </section>
    <main id="main">
      <div class="panel panel-default">
        <div class="panel-heading">
          Listado
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="data">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Diagnóstico</th>
                  <th>Tipo</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    include('conexion.php');
                    $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
                    mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
                    mysqli_query($conexion,"SET NAMES 'utf8'");

                    $sql = mysqli_query($conexion,"SELECT * from v_diagnostico") or die("Problemas en consulta").mysqli_error();
                    while ($registro=mysqli_fetch_array($sql)) {
                      echo "<tr>";
                      echo "<td>".$registro['id']."</td>";
                      echo "<td>".$registro['diagnostico']."</td>";
                      echo "<td>".$registro['tipo']."</td>";
                      echo "<td><span class=\"label ver\"><a href=\"#\">Ver listado</a></span><span class=\"label editar\"><a href=\"editar-diagnostico.php?id=".$registro['id']."\">Editar</a></span></td>";
                      echo "</tr>";
                    }
                  ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </main>
<?php include_once('inc/footer.php'); ?>
