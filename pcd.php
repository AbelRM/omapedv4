<?php
  include_once('inc/header.php');
  $id=$_GET['id'];
  include('conexion.php');
  $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
  mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
  mysqli_query($conexion,"SET NAMES 'utf8'");

  $sql = mysqli_query($conexion,"SELECT * from v_lista_pcd WHERE id='".$id."'") or die("Problemas en consulta").mysqli_error();
  while ($registro=mysqli_fetch_array($sql)) {
    echo "<section class='indicaciones'>
      <div class='holder'>
        <h1><span class='resaltar'>PCD:</span> ".$registro['nombre'].".</h1>
      </div>
    </section>
    <main id='main'>
      <h6>Información registrada por: <strong>".$registro['registrador']."</strong> (".$registro['usuario']."), el ".$registro['fecha']."</h6>
      <section class='personal espacio-superior'>
        <h3>Datos personales:</h3>
        <div class='contenido cols-2'>
          <p class='infor'><span>DNI:</span> <br />".$registro['dni']."</p>
          <p class='infor'><span>Fecha de nacimiento:</span> <br />".$registro['nacimiento']."</p>
          <p class='infor'><span>Edad:</span> <br />".$registro['edad']." años</p>
          <p class='infor'><span>Teléfono / Celular:</span> <br />".$registro['fono']."</p>
          <p class='infor'><span>Departamento:</span> <br />".$registro['departamento']."</p>
          <p class='infor'><span>Provincia:</span> <br />".$registro['provincia']."</p>
          <p class='infor'><span>Distrito:</span> <br />".$registro['distrito']."</p>
          <p class='infor'><span>Dirección:</span> <br />".$registro['direccion']."</p>
          <p class='infor'><span>Sexo:</span> <br />".$registro['sexo']."</p>
          <p class='infor'><span>Estado civil:</span> <br />".$registro['ecivil']."</p>
          <p class='infor'><span>Grado de instrucción:</span> <br />".$registro['instruccion']."</p>
          <p class='infor'><span>Asociación:</span> <br />".$registro['asociacion']."</p>
          <p class='infor'><span>Seguro:</span> <br />".$registro['seguro']."</p>
          <p class='infor'><span>Trabajo:</span> <br />".$registro['trabajo']."</p>
        </div>
      </section>";
  }
?>
      <section class="personal espacio-superior">
        <h3>Resolución CONADIS</h3>
        <?php 
          $consultaResol = mysqli_query($conexion,"SELECT * from v_resolucion WHERE pcd_id='".$id."'") or die("Problemas en consulta").mysqli_error();
          $existe = mysqli_num_rows($consultaResol);
          if ($existe==1){
            while ($registroResol=mysqli_fetch_array($consultaResol)){
              echo "<div class=\"contenido cols-2\">
              <p class=\"infor\"><span>Nro. Resolución:</span> <br />".$registroResol['resol']."</p>
              <p class=\"infor\"><span>DID:</span> <br />".$registroResol['did']."</p>
              </div>"; 
            }
          }
          else{           
            echo "<div class='form'>
            <form class=\"formulario\" action=\"agregarResolucion.php\" method=\"POST\" name=\"pcd\">
            <div class=\"form-group-corto\">
            <label for=\"resol\">Resolución</label>
            <input class=\"form-info\" type=\"text\" name=\"resol\" id=\"resol\" maxlength=\"20\" required>
            </div>
            <div class=\"form-group-corto\">
            <label for=\"did\">DID</label>
            <input class=\"form-info\" type=\"text\" name=\"did\" id=\"did\" maxlength=\"20\" required>
            </div>
            <input class=\"form-info\" type=\"text\" name=\"persona\" id=\"persona\" value=\"".$id."\" maxlength=\"100\" hidden>
            <div class=\"form-group-btn\">
            <input type=\"submit\" name=\"submit\" class=\"form-action-corto\" value=\"Registrar\" />              
            </div>
            </form>
            </div>"; 
          }
        ?>        
      </section>
      <section class="personal espacio-superior">
        <h3>Diagnóstico</h3>
        <?php 
          $consultaDiagnostico = mysqli_query($conexion,"SELECT * from v_diagnostico_pcd WHERE pcd_id='".$id."'") or die("Problemas en consulta").mysqli_error();
          $existe = mysqli_num_rows($consultaDiagnostico);
          if ($existe>=1){
            echo "<div class='form'>
            <form class=\"formulario\" action=\"agregarDiagnosticoPCD.php\" method=\"POST\" name=\"pcd\">
            <div class=\"form-group-corto\">
            <label for=\"diagnostico\">Diágnostico CIE v10</label>
            <input class=\"form-info\" type=\"text\" name=\"diagnostico\" id=\"diagnostico\" maxlength=\"10\" required>
            </div>
            <input class=\"form-info\" type=\"text\" name=\"persona\" id=\"persona\" value=\"".$id."\" maxlength=\"100\" hidden>
            <div class=\"form-group-btn\">
            <input type=\"submit\" name=\"submit\" class=\"form-action-corto\" value=\"Agregar\" />              
            </div>
            </form>
            </div><br>
            <div class=\"contenido cols-1\">
              <table class=\"table table-striped table-bordered table-hover\">
              <thead>
              <th>Código</th>
              <th>Diágnostico</th>
              <th>Tipo</th>
              </thead>
              <tbody>";
            while ($registroDiagnostico=mysqli_fetch_array($consultaDiagnostico)){
              echo "<tr>
              <td>".$registroDiagnostico['id']."</td>
              <td>".$registroDiagnostico['diagnostico']."</td>
              <td>".$registroDiagnostico['tipo']."</td>
              </tr>";
            }
            echo "</tbody>
            </table>
            </div>";
          }
          else{           
            echo "<div class='form'>            
            <form class=\"formulario\" action=\"agregarDiagnosticoPCD.php\" method=\"POST\" name=\"pcd\">
            <div class=\"form-group-corto\">
            <label for=\"diagnostico\">Diágnostico CIE v10</label>
            <input class=\"form-info\" type=\"text\" name=\"diagnostico\" id=\"diagnostico\" maxlength=\"10\" required>
            </div>
            <input class=\"form-info\" type=\"text\" name=\"persona\" id=\"persona\" value=\"".$id."\" maxlength=\"100\" hidden>
            <div class=\"form-group-btn\">
            <input type=\"submit\" name=\"submit\" class=\"form-action-corto\" value=\"Agregar\" />              
            </div>
            </form>
            </div><br>"; 
          }
        ?>        
      </section>
      <section class="personal espacio-superior">
        <h3>Donaciones</h3>
        <?php 
          $consultaDonacion = mysqli_query($conexion,"SELECT * from v_donaciones_pcd WHERE pcd='".$id."'") or die("Problemas en consulta").mysqli_error();
          $existe = mysqli_num_rows($consultaDonacion);
          if ($existe>=1){
            echo "<input class='form-action-corto' type ='button' value = 'Agregar Solicitud' onclick=\"muestra_oculta('oculto')\" />
              <div class='form' id='oculto'>
              <form class='formulario' action='agregarDonacion.php' method='POST' name='donacion'>
              <div class='form-group'>
                <label for='codigo'>Código</label>
                <input class='form-info' type='text' name='codigo' id='codigo' maxlength='9' value='2015-00' required>
              </div>
              <div class='form-group'>
                <label for='fecha-sol'>Fecha de Solicitud</label>
                <input class='form-info' type='date' name='fecha-sol' id='fecha-sol' required>
              </div>
              <div class='form-group'>
                <label for='fecha-entrega'>Fecha de Entrega</label>
                <input class='form-info' type='date' name='fecha-entrega' id='fecha-entrega' required>
              </div>
              <div class='form-group'>
                <label for='fecha-devol'>Fecha de Devolución</label>
                <input class='form-info' type='date' name='fecha-devol' id='fecha-devol' required>
              </div>
              <div class='form-group'>
                <label for='solicitante'>Solicitante</label>
                <input class='form-info' type='text' name='solicitante' id='solicitante' maxlength='120' required>
              </div>
              <div class='form-group'>
              <label for='estadoTramite'>Estado del trámite</label>
              <select name='estadoTramite' id='estadoTramite' required>
                <option value='' disabled selected>Elegir</option>";              
                  $consultaEstados = mysqli_query($conexion,"SELECT * from v_lista_estados_tramite") or die("Problemas en consulta").mysqli_error();
                  while ($registroEstados=mysqli_fetch_array($consultaEstados)) {
                    echo "<option value=\"".$registroEstados['id']."\">".$registroEstados['estado']."</option>";
                  }
              echo "</select>
              </div>
              <div class='form-group'>
              <label for='tipoDonacion'>Tipo de Donación</label>
              <select name='tipoDonacion' id='tipoDonacion' required>
                <option value='' disabled selected>Elegir</option>";
                $consultaTipoDonacion = mysqli_query($conexion,"SELECT * from v_lista_tipo_donacion") or die("Problemas en consulta").mysqli_error();
                  while ($registroTipoDonacion=mysqli_fetch_array($consultaTipoDonacion)) {
                    echo "<option value=\"".$registroTipoDonacion['id']."\">".$registroTipoDonacion['tipo']."</option>";
                  }
              echo "</select>
              </div>
              <div class='form-group'>
              <label for='nombreEquipo'>Equipo Solicitado</label>
              <select name='nombreEquipo' id='nombreEquipo' required>
                <option value='' disabled selected>Elegir</option>";
                $consultaEquipos = mysqli_query($conexion,"SELECT * from v_lista_equipos") or die("Problemas en consulta").mysqli_error();
                  while ($registroEquipos=mysqli_fetch_array($consultaEquipos)) {
                    echo "<option value=\"".$registroEquipos['id']."\">".$registroEquipos['nombre_equipo']."</option>";
                  }
              echo "</select>
              </div>
              <div class='form-group'>
              <label for='estadoEquipo'>Estado del equipo</label>
              <select name='estadoEquipo' id='estadoEquipo' required>
                <option value='' disabled selected>Elegir</option>";
                $consultaEstadoEquipo = mysqli_query($conexion,"SELECT * from v_lista_estado_equipo") or die("Problemas en consulta").mysqli_error();
                  while ($registroEstadoequipo=mysqli_fetch_array($consultaEstadoEquipo)) {
                    echo "<option value=\"".$registroEstadoequipo['id']."\">".$registroEstadoequipo['estado_equipo']."</option>";
                  }
              echo "</select>
              </div>

              <input class=\"form-info\" type=\"text\" name=\"id\" id=\"id\" value=\"<?php echo $id; ?>\" hidden>
              <div class='form-group-btn'>
              <input type='submit' name='submit' class='form-action-corto' value='Registrar' />
              <!--<input type='reset' name='submit' class='form-action limpiar' value='Limpiar' />-->
              </div>
              </form>
              </div><br><br>
              <div class=\"contenido cols-1\">
              <table class=\"table table-striped table-bordered table-hover\">
              <thead>
              <th>Código</th>
              <th>Fecha de solicitud</th>
              <th>Estado del trámite</th>
              <th>Equipo solicitado</th>
              </thead>
              <tbody>";
            while ($registroDonacion=mysqli_fetch_array($consultaDonacion)){
              echo "<tr>
              <td>".$registroDonacion['codigo']."</td>
              <td>".$registroDonacion['fecha_solicitud']."</td>
              <td>".$registroDonacion['estado_tramite']."</td>
              <td>".$registroDonacion['nombre_equipo']."</td>
              </tr>";
            }
            echo "</tbody>
            </table>
            </div>";
          }
          else{
          }
        ?>   
      </section>
    </main>
<?php include_once('inc/footer.php'); ?>
