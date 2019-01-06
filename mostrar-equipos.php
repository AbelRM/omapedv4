<?php include_once('inc/header.php'); ?>
    <section class="indicaciones">
      <div class="holder">
        <h1><span class="resaltar">Listado de Equipos biomecanicos</span> que se cuenta en OMAPED.</h1>
      </div>
    </section>
    <main id="main-full">
      <div class="panel panel-default">
        <div class="panel-heading">
          LISTADO DE EQUIPOS BIOMECANICOS
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="data">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre del equipo</th>
                  <th>Cantidad almacen</th>
                  <th>Caracteristicas</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    include('conexion.php');
                    $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
                    mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
                    mysqli_query($conexion,"SET NAMES 'utf8'");
                    $sql = mysqli_query($conexion,"SELECT * from lista_equipo") or die("Problemas en consulta").mysqli_error();
                    while ($registro=mysqli_fetch_array($sql)) {
                      echo "<tr>";
                      echo "<td>".$registro['id']."</td>";
                      echo "<td>".$registro['nombre_equipo']."</td>";
                      echo "<td>".$registro['cantidad']."</td>";
                      echo "<td>".$registro['caracteristicas']."</td>";
                      echo "<td><span class='label detalle'><a href='#?id=".$registro['id']."'>Ver detalle</a></span><span class='label editar'><a href='#'>Editar</a></span></td>";
                    }
                  ?>
                  <div class="form-group-btn">
                    <input type="submit" name="submit" class="form-action" value="Agregar nuevo equipo" />
                  </div>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </main>
<?php include_once('inc/footer.php'); ?>