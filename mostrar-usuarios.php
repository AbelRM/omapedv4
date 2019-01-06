<?php include_once('inc/header.php'); ?>
    <section class="indicaciones">
      <div class="holder">
        <h1><span class="resaltar">Listado de Usuarios</span> del sistema</h1>
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
                  <th>Nombres</th>
                  <th>Usuario</th>
                  <th>Tipo de usuario</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    include('conexion.php');
                    $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
                    mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
                    mysqli_query($conexion,"SET NAMES 'utf8'");

                    $sql = mysqli_query($conexion,"SELECT * from v_usuarios") or die("Problemas en consulta").mysqli_error();
                    while ($registro=mysqli_fetch_array($sql)) {
                      echo "<tr>";
                      echo "<td>".$registro['id']."</td>";
                      echo "<td>".$registro['nombre']."</td>";
                      echo "<td>".$registro['user']."</td>";
                      echo "<td>".$registro['tipo']."</td>";
                      echo "<td><span class='label detalle'><a href='usuario-detalles.php?id=".$registro['id']."'>Ver detalle</a></span><span class='label editar'><a href='#'>Editar</a></span></td>";
                    }
                      echo "</tr>";
                  ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </main>
<?php include_once('inc/footer.php'); ?>
