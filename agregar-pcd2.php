<?php include_once('inc/header.php'); ?>
    <section class="indicaciones">
      <div class="holder">
        <?php
          include_once('conexion.php');
          $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
          mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
          mysqli_query($conexion,"SET NAMES 'utf8'");
          $sql = mysqli_query($conexion,"SELECT * from pcd") or die("Problemas en consulta").mysqli_error();
          //$suma = 0;
          //while ($registro=mysqli_fetch_array($sql)) {
          //  $suma = $suma + 1;
          //}
          //$suma = $suma + 1;         
          echo "<h1><span class='resaltar'>Registrar</span> una nueva persona con discapacidad</h1>";
          mysqli_close($conexion);
        ?>        
      </div>
    </section>
    <main id="main">
      <div class="form">
        <form class="formulario" action="agregarPCD.php" method="POST" name="pcd">
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input class="form-info" type="text" name="nombre" id="nombre" maxlength="100" required>
          </div>
          <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input class="form-info" type="text" name="apellidos" id="apellidos" maxlength="100" required>
          </div>
          <div class="form-group">
            <label for="dni">D.N.I.</label>
            <input class="form-info" type="text" name="dni" id="dni" maxlength="8" required>
          </div>
          <div class="form-group">
            <label for="nacimiento">Fecha de Nacimiento</label>
            <input class="form-info" type="date" name="nacimiento" id="nacimiento" required>
          </div>
          <div class="form-group">
            <label for="fono">Teléfono / Celular</label>
            <input class="form-info" type="text" name="fono" id="fono" maxlength="50" required>
          </div>
          <div class="form-group">
            <label for="direccion">Dirección domiciliaria</label>
            <input class="form-info" type="text" name="direccion" id="direccion" maxlength="120" required>
          </div>
          
          <div class="form-group">
            <label for="departamento">Departamento</label>
            <select name="departamento" id="departamento" required>
              <option value="" disabled selected>Elegir</option>
              <?php
                include_once('conexion.php');
                $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
                mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
                mysqli_query($conexion,"SET NAMES 'utf8'");
                $sql = mysqli_query($conexion,"SELECT * from v_lista_departamentos") or die("Problemas en consulta").mysqli_error();
                while ($registro=mysqli_fetch_array($sql)) {
                  echo "<option value=\"".$registro['IdDepartamento']."\">".$registro['Departamento']."</option>";
                }
                mysqli_close($conexion);
              ?>
            </select>
          </div>

          <div class="form-group">
            <label for="provincia">Provincia</label>
            <select name="provincia" id="provincia" required>
              <option value="" disabled selected>Elegir</option>
            </select>
          </div>

          <div class="form-group">
            <label for="distrito">Distrito</label>
            <select name="distrito" id="distrito" required>
              <option value="" disabled selected>Elegir</option>
            </select>
          </div>

          <div class="form-group">
            <label for="sexo">Sexo</label>
            <select name="sexo" id="sexo" required>
              <option value="" disabled selected>Elegir</option>
              <?php
                include_once('conexion.php');
    						$conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
    						mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
    						mysqli_query($conexion,"SET NAMES 'utf8'");
    			      $sql = mysqli_query($conexion,"SELECT * from v_lista_sexo") or die("Problemas en consulta").mysqli_error();
                while ($registro=mysqli_fetch_array($sql)) {
                  echo "<option value=\"".$registro['id']."\">".$registro['sexo']."</option>";
                }
                mysqli_close($conexion);
    					?>
            </select>
          </div>
          <div class="form-group">
            <label for="ecivil">Estado civil</label>
            <select name="ecivil" id="ecivil" required>
              <option value="" disabled selected>Elegir</option>
              <?php
                include_once('conexion.php');
    						$conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
    						mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
    						mysqli_query($conexion,"SET NAMES 'utf8'");
    			      $sql = mysqli_query($conexion,"SELECT * from v_lista_estado_civil") or die("Problemas en consulta").mysqli_error();
                while ($registro=mysqli_fetch_array($sql)) {
                  echo "<option value=\"".$registro['id']."\">".$registro['ecivil']."</option>";
                }
                mysqli_close($conexion);
    					?>
            </select>
          </div>
          <div class="form-group">
            <label for="instruccion">Grado de instrucción</label>
            <select name="instruccion" id="instruccion" required>
              <option value="" disabled selected>Elegir</option>
              <?php
                include_once('conexion.php');
    						$conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
    						mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
    						mysqli_query($conexion,"SET NAMES 'utf8'");
    			      $sql = mysqli_query($conexion,"SELECT * from v_lista_grado_instruccion") or die("Problemas en consulta").mysqli_error();
                while ($registro=mysqli_fetch_array($sql)) {
                  echo "<option value=\"".$registro['id']."\">".$registro['instruccion']."</option>";
                }
                mysqli_close($conexion);
    					?>
            </select>
          </div>
          <div class="form-group">
            <label for="asociacion">Asociación a la que pertenece</label>
            <select name="asociacion" id="asociacion" required>
              <option value="" disabled selected>Elegir</option>
              <?php
                include_once('conexion.php');
    						$conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
    						mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
    						mysqli_query($conexion,"SET NAMES 'utf8'");
    			      $sql = mysqli_query($conexion,"SELECT * from v_lista_asociacion") or die("Problemas en consulta").mysqli_error();
                while ($registro=mysqli_fetch_array($sql)) {
                  echo "<option value=\"".$registro['id']."\">".$registro['asociacion']."</option>";
                }
                mysqli_close($conexion);
    					?>
            </select>
          </div>
          <div class="form-group">
            <label for="seguro">Seguro</label>
            <select name="seguro" id="seguro" required>
              <option value="" disabled selected>Elegir</option>
              <?php
                include_once('conexion.php');
    						$conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
    						mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
    						mysqli_query($conexion,"SET NAMES 'utf8'");
    			      $sql = mysqli_query($conexion,"SELECT * from v_lista_seguro") or die("Problemas en consulta").mysqli_error();
                while ($registro=mysqli_fetch_array($sql)) {
                  echo "<option value=\"".$registro['id']."\">".$registro['seguro']."</option>";
                }
                mysqli_close($conexion);
    					?>
            </select>
          </div>
          <div class="form-group">
            <label for="trabajo">Trabajo</label>
            <select name="trabajo" id="trabajo" required>
              <option value="" disabled selected>Elegir</option>
              <?php
                include_once('conexion.php');
    						$conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
    						mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
    						mysqli_query($conexion,"SET NAMES 'utf8'");
    			      $sql = mysqli_query($conexion,"SELECT * from v_lista_trabajo") or die("Problemas en consulta").mysqli_error();
                while ($registro=mysqli_fetch_array($sql)) {
                  echo "<option value=\"".$registro['id']."\">".$registro['trabajo']."</option>";
                }
                mysqli_close($conexion);
    					?>
            </select>
          </div>
          <div class="form-group-btn">
            <input type="submit" name="submit" class="form-action" value="Registrar" />
          </div>
          
            <input value="<?php echo date('Y-m-d') ?>"  class="form-info" type="text" name="fecha" id="fecha" hidden>

            <?php
              include_once('conexion.php');
              $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
              mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
              mysqli_query($conexion,"SET NAMES 'utf8'");
              $user = $_SESSION['usuario'];
              $sql = mysqli_query($conexion,"SELECT * from v_usuarios WHERE user='".$user."'") or die("Problemas en consulta").mysqli_error();
              while ($registro=mysqli_fetch_array($sql)) {
                echo "<input type=\"hidden\" name=\"user\" id=\"user\" value=\"".$registro['id']."\" />";
                $registrador= $registro['nombre'];
              }
              mysqli_close($conexion);
            ?>
          <div class="form-group-btn">
            <input type="submit" name="submit" class="form-action" value="Registrar" />
            <!--<input type="reset" name="submit" class="form-action limpiar" value="Limpiar" />-->
          </div>
        </form>
        <div class="datos">
          <span>Fecha de registro:</span> <?php echo date('d-m-Y') ?>  | <span>Registrado por:</span> <?php echo $registrador; ?>
        </div>
      </div>
    </main>
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
