<?php include_once('inc/header.php'); ?>
    <section class="indicaciones">
      <div class="holder">
        <?php
          include_once('conexion.php');
          $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
          mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
          mysqli_query($conexion,"SET NAMES 'utf8'");
          $sql = mysqli_query($conexion,"SELECT * from v_reporte_cantidad_sexo") or die("Problemas en consulta").mysqli_error();
          /*$suma = 0;
          while ($registro=mysqli_fetch_array($sql)) {
            $suma = $suma + $registro['cantidad']; 
          }
          $suma = $suma + 1;  */      
          echo "<h1><span class='resaltar'>Registrar</span> una nueva donación </h1>";
          mysqli_close($conexion);
        ?>        
      </div>
    </section>
    <main id="main">
      <div class="form">
        <form class="formulario" action="agregardonacion.php" method="POST" name="donacion">
          <div class="form-group">
            <label for="instruccion">Persona Beneficiada</label>
            <select name="persona_beneficiada" id="persona_beneficiada" required>
              <option value="" disabled selected>Elegir</option>
              <?php
                include_once('conexion.php');
                $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
                mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
                mysqli_query($conexion,"SET NAMES 'utf8'");
                $sql = mysqli_query($conexion,"SELECT * from pcd") or die("Problemas en consulta").mysqli_error();
                while ($registro=mysqli_fetch_array($sql)) {
                  echo "<option value=\"".$registro['id']."\">".$registro['apellidos']."</option>";
                }
                mysqli_close($conexion);
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="nombre">N° DID / Carnet de discapacidad</label>
            <input class="form-info" type="text" name="n_did" id="n_did" maxlength="15" required>
          </div>
          <div class="form-group">
            <label for="nombre">Nombre Solicitante</label>
            <input class="form-info" type="text" name="nombre" id="nomb_solicitante" maxlength="100" required>
          </div>
          <div class="form-group">
            <label for="apellidos">Apellidos Solicitante</label>
            <input class="form-info" type="text" name="apellidos" id="apell_solicitante" maxlength="100" required>
          </div>
          <div class="form-group">
            <label for="dni">D.N.I. Solicitante</label>
            <input class="form-info" type="text" name="dni" id="dni_solicitante" maxlength="8" required>
          </div>
          <div class="form-group">
            <label for="instruccion">Parentesco Solicitante</label>
            <select name="parentesco" id="parentesco" required>
              <option value="" disabled selected>Elegir</option>
              <?php
                include_once('conexion.php');
                $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
                mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
                mysqli_query($conexion,"SET NAMES 'utf8'");
                $sql = mysqli_query($conexion,"SELECT * from parentesco") or die("Problemas en consulta").mysqli_error();
                while ($registro=mysqli_fetch_array($sql)) {
                  echo "<option value=\"".$registro['id']."\">".$registro['parentesco']."</option>";
                }
                mysqli_close($conexion);
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="nacimiento">Fecha de Solicitud</label>
            <input class="form-info" type="date" name="fecha_solicitud" id="fecha_solicitud" required>
          </div>
          <div class="form-group">
            <label for="sexo">Estado Tramite</label>
            <select name="estado_tramite" id="id" required>
              <option value="" disabled selected>Elegir</option>
              <?php
                include_once('conexion.php');
                $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
                mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
                mysqli_query($conexion,"SET NAMES 'utf8'");
                $sql = mysqli_query($conexion,"SELECT * from estado_tramite") or die("Problemas en consulta").mysqli_error();
                while ($registro=mysqli_fetch_array($sql)) {
                  echo "<option value=\"".$registro['id']."\">".$registro['estado']."</option>";
                }
                mysqli_close($conexion);
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="fono">Fecha de Entrega</label>
            <input class="form-info" type="date" name="fecha_entrega" id="fecha_entrega" required>
          </div>
          <div class="form-group">
            <label for="ecivil">Equipo Biomecanico</label>
            <select name="equipo" id="id" required>
              <option value="" disabled selected>Elegir</option>
              <?php
                include_once('conexion.php');
                $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
                mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
                mysqli_query($conexion,"SET NAMES 'utf8'");
                $sql = mysqli_query($conexion,"SELECT * from lista_equipo") or die("Problemas en consulta").mysqli_error();
                while ($registro=mysqli_fetch_array($sql)) {
                  echo "<option value=\"".$registro['id']."\">".$registro['nombre_equipo']."</option>";
                }
                mysqli_close($conexion);
              ?>
            </select>
          </div>
    
          <div class="form-group">
            <label for="direccion">Cantidad (Unid.)</label>
            <input class="form-info" type="text" name="direccion" id="direccion" maxlength="120" required>
          </div>
      
          <div class="form-group">
            <label for="instruccion">Estado equipo</label>
            <select name="estado_equipo" id="estado_equipo" required>
              <option value="" disabled selected>Elegir</option>
              <?php
                include_once('conexion.php');
    						$conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
    						mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
    						mysqli_query($conexion,"SET NAMES 'utf8'");
    			      $sql = mysqli_query($conexion,"SELECT * from estado_equipo") or die("Problemas en consulta").mysqli_error();
                while ($registro=mysqli_fetch_array($sql)) {
                  echo "<option value=\"".$registro['id']."\">".$registro['estado_equipo']."</option>";
                }
                mysqli_close($conexion);
    					?>
            </select>
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
