<?php include_once('inc/header.php'); ?>
    <section class="indicaciones">
      <div class="holder">
        <?php
          include_once('conexion.php');
          $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
          mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
          mysqli_query($conexion,"SET NAMES 'utf8'");
          $sql = mysqli_query($conexion,"SELECT * from v_reporte_cantidad_sexo") or die("Problemas en consulta").mysqli_error();
          $suma = 0;
          while ($registro=mysqli_fetch_array($sql)) {
            $suma = $suma + $registro['cantidad']; 
          }        
          echo "<h1><span class='resaltar'>Información estadística basada en </span> ".$suma." PCD.</h1>";
          mysqli_close($conexion);
        ?>        
      </div>
    </section>
    <main id="main">
      <div class="box box-info">
        <div id="sexo" style="height: 300px;"></div>
        <script type="text/javascript">
          google.load("visualization", "1", {packages:["corechart"]});
          google.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Sexo', 'Cantidad'],
              <?php
                include_once('conexion.php');
                $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
                mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
                mysqli_query($conexion,"SET NAMES 'utf8'");
                $sql = mysqli_query($conexion,"SELECT * from v_reporte_cantidad_sexo") or die("Problemas en consulta").mysqli_error();
                while ($registro=mysqli_fetch_array($sql)) {
                  echo "['".$registro['sexo']."', ".$registro['cantidad']."],";
                }
                mysqli_close($conexion);
              ?>
            ]);
            var options = {
              title: 'PCD por Sexo',
              titleTextStyle: {color: 'black', fontSize: 20},
              fontSize: 14,
              fontName: 'Verdana',
              pieSliceTextStyle: {color: 'white', fontSize: 12},
              legend:{position: 'bottom', textStyle: { fontSize: 16}}
            };
            var chart = new google.visualization.PieChart(document.getElementById('sexo'));
            chart.draw(data, options);
          }
          </script>
      </div>
      <div class="box box-info">
        <div id="ecivil" style="height: 300px;"></div>
        <script type="text/javascript">
          google.load("visualization", "2", {packages:["corechart"]});
          google.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Estado civil', 'Cantidad'],
              <?php
                include_once('conexion.php');
                $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
                mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
                mysqli_query($conexion,"SET NAMES 'utf8'");
                $sql = mysqli_query($conexion,"SELECT * from v_reporte_cantidad_ecivil") or die("Problemas en consulta").mysqli_error();
                while ($registro=mysqli_fetch_array($sql)) {
                  echo "['".$registro['ecivil']."', ".$registro['cantidad']."],";
                }
                mysqli_close($conexion);
              ?>
            ]);
            var options = {
              title: 'PCD por estado civil',
              titleTextStyle: {color: 'black', fontSize: 20},
              fontSize: 14,
              fontName: 'Verdana',
              pieSliceTextStyle: {color: 'white', fontSize: 12},
              legend:{position: 'right', textStyle: { fontSize: 12}}
            };
            var chart = new google.visualization.PieChart(document.getElementById('ecivil'));
            chart.draw(data, options);
          }
          </script>
      </div>
      <div class="box box-info">
        <div id="instruccion" style="height: 300px;"></div>
        <script type="text/javascript">
          google.load("visualization", "3", {packages:["corechart"]});
          google.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Grado de instrucción', 'Cantidad'],
              <?php
                include_once('conexion.php');
                $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
                mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
                mysqli_query($conexion,"SET NAMES 'utf8'");
                $sql = mysqli_query($conexion,"SELECT * from v_reporte_cantidad_instruccion") or die("Problemas en consulta").mysqli_error();
                while ($registro=mysqli_fetch_array($sql)) {
                  echo "['".$registro['instruccion']."', ".$registro['cantidad']."],";
                }
                mysqli_close($conexion);
              ?>
            ]);
            var options = {
              title: 'PCD por grado de instrucción',
              titleTextStyle: {color: 'black', fontSize: 20},
              fontSize: 14,
              fontName: 'Verdana',
              pieSliceTextStyle: {color: 'white', fontSize: 12},
              legend:{position: 'right', textStyle: { fontSize: 12}}
            };
            var chart = new google.visualization.PieChart(document.getElementById('instruccion'));
            chart.draw(data, options);
          }
          </script>
      </div>
      <div class="box box-info">
        <div id="asociacion" style="height: 300px;"></div>
        <script type="text/javascript">
          google.load("visualization", "4", {packages:["corechart"]});
          google.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Asociación', 'Cantidad'],
              <?php
                include_once('conexion.php');
                $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
                mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
                mysqli_query($conexion,"SET NAMES 'utf8'");
                $sql = mysqli_query($conexion,"SELECT * from v_reporte_cantidad_asociacion") or die("Problemas en consulta").mysqli_error();
                while ($registro=mysqli_fetch_array($sql)) {
                  echo "['".$registro['asociacion']."', ".$registro['cantidad']."],";
                }
                mysqli_close($conexion);
              ?>
            ]);
            var options = {
              title: 'PCD por asociación',
              titleTextStyle: {color: 'black', fontSize: 20},
              fontSize: 14,
              fontName: 'Verdana',
              pieSliceTextStyle: {color: 'white', fontSize: 12},
              legend:{position: 'right', textStyle: { fontSize: 12}}
            };
            var chart = new google.visualization.PieChart(document.getElementById('asociacion'));
            chart.draw(data, options);
          }
          </script>
      </div>



      <div class="box box-info">
        <div id="usuario" style="height: 300px;"></div>
        <script type="text/javascript">
          google.load("visualization", "5", {packages:["corechart"]});
          google.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Asociación', 'Cantidad'],
              <?php
                include_once('conexion.php');
                $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
                mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
                mysqli_query($conexion,"SET NAMES 'utf8'");
                $sql = mysqli_query($conexion,"SELECT * from v_reporte_cantidad_usuario") or die("Problemas en consulta").mysqli_error();
                while ($registro=mysqli_fetch_array($sql)) {
                  echo "['".$registro['nombre']."', ".$registro['cantidad']."],";
                }
                mysqli_close($conexion);
              ?>
            ]);
            var options = {
              title: 'PCD por usuario',
              titleTextStyle: {color: 'black', fontSize: 20},
              fontSize: 14,
              fontName: 'Verdana',
              pieSliceTextStyle: {color: 'white', fontSize: 12},
              legend:{position: 'right', textStyle: { fontSize: 12}}
            };
            var chart = new google.visualization.PieChart(document.getElementById('usuario'));
            chart.draw(data, options);
          }
          </script>
      </div>

      <div class="box box-info">
        <div id="distritos" style="height: 300px;"></div>
        <script type="text/javascript">
          google.load("visualization", "3", {packages:["corechart"]});
          google.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Sexo', 'Cantidad'],
              <?php
                include_once('conexion.php');
                $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
                mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
                mysqli_query($conexion,"SET NAMES 'utf8'");
                $sql = mysqli_query($conexion,"SELECT * from v_reporte_cantidad_distrito WHERE provincia LIKE 'TACNA'") or die("Problemas en consulta").mysqli_error();
                while ($registro=mysqli_fetch_array($sql)) {
                  echo "['".$registro['distrito']."', ".$registro['cantidad']."],";
                }
                mysqli_close($conexion);
              ?>
            ]);
            var options = {
              title: 'PCD por distritos de Tacna',
              titleTextStyle: {color: 'black', fontSize: 20},
              fontSize: 14,
              fontName: 'Verdana',
              pieSliceTextStyle: {color: 'white', fontSize: 12},
              legend:{position: 'right', textStyle: { fontSize: 12}}
            };
            var chart = new google.visualization.PieChart(document.getElementById('distritos'));
            chart.draw(data, options);
          }
          </script>
      </div>

    </main>
<?php include_once('inc/footer.php'); ?>
