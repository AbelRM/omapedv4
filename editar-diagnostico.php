<?php include_once('inc/header.php'); ?>
<?php $id = $_GET['id']; ?>
    <section class="indicaciones">
      <div class="holder">
        <h1><span class="resaltar">Editar diagnóstico</span> CIE10.</h1>
      </div>
    </section>
    <main id="main">
      <div class="form">
        <?php
          include_once('conexion.php');
          $conexion = mysql_connect($dbHost,$dbUser,$dbPass) or die ("Problemas al acceder al servidor");
          mysql_select_db($dbName,$conexion) or die ("Problemas al acceder a la base de datos");
          mysql_query("SET NAMES 'utf8'");
          $sql = mysql_query("SELECT * FROM v_diagnostico WHERE id='".$id."'") or die ("Problemas en consulta").mysql_error();
          while($registro = mysql_fetch_array($sql)){
            echo "<br><br>
            <form class=\"formulario\" action=\"editarDiagnostico.php\" method=\"POST\" autocomplete=\"off\">
              <div class=\"form-group\">
                <label for=\"codigo\">Código</label>
                <input class=\"form-info\" value=\"".$registro['id']."\" type=\"text\" name=\"codigo\" id=\"codigo\" maxlength=\"80\" disabled>
                <input class=\"form-info\" value=\"".$registro['id']."\" type=\"text\" name=\"codigo\" id=\"codigo\" maxlength=\"80\" hidden>
              </div>
              <div class=\"form-group\">
                <label for=\"diagnostico\">Diagnóstico</label>
                <input class=\"form-info\" value=\"".$registro['diagnostico']."\" type=\"text\" name=\"diagnostico\" id=\"diagnostico\" required>
              </div>";

              /*$datos = "SELECT * FROM tipodis";
	            $consulta = mysql_query($datos, $conexion) or die ("Fallo en obtener la Canfiguración");
	            while($row = mysql_fetch_array($consulta)){
		            $tipoDiscapacidad[] = array(
			          $row['tipo'] => $row['id']
                );
	            }

              echo "<select name=\"tipo\" id=\"tipo\" required>\n
                <option value=\"\" disabled selected>Elegir</option>";
              foreach ($tipoDiscapacidad as $indice=>$valor){
                if ($row['tipo'] == $indice){
                  echo "<option value=\"".$valor."\" selected>".$indice."</option>\n";
                } else {
                  echo "<option value=\"".$valor."\">".$indice."</option>\n";
                }
              }
              echo "</select>\n";*/

              echo "<div class=\"form-group\">
                <label for=\"tipo\">Tipo</label>
                <select name=\"tipo\" id=\"tipo\" required>
                  <option value=\"\" disabled selected>Elegir</option>";
              $sql2 = mysql_query('SELECT * FROM v_lista_tipo_discapacidad') or die ("Problemas en consulta").mysql_error();
              while($registro2 = mysql_fetch_array($sql2)){
                echo "<option value=\"".$registro2['id']."\">".$registro2['tipo']."</option>";
              }
              echo "</select>
              </div>

              <div class=\"form-group\">
                <label for=\"actual\">Tipo actual (Referencial)</label>
                <input class=\"form-info\" value=\"".$registro['tipo']."\" type=\"text\" name=\"actual\" id=\"actual\" maxlength=\"80\" disabled>
              </div>

              <div class=\"form-group-btn\">
                <input type=\"submit\" name=\"submit\" class=\"form-action\" value=\"Actualizar\" />
                  <input type=\"reset\" name=\"reset\" class=\"form-action limpiar\" value=\"Reestablecer\" />
              </div>
            </form><br><br>
            ";
          }
        ?>
      </div>
    </main>
<?php include_once('inc/footer.php'); ?>
