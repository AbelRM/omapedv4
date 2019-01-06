<?php
  include('conexion.php');
  $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
  mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
  mysqli_query("SET NAMES 'utf8'");
  $usuario = $_POST['usuario'];
  $clave = $_POST['clave'];
  $sql = mysqli_query("SELECT * FROM usuario WHERE user = '$usuario'");
  
  if(true==1){

     if($registro["password"] == $clave){
        session_start();
      $_SESSION['usuario'] = $usuario;
        header("Location: index.php");
    }
    else{
    ?>
    <script languaje="javascript"> alert("Datos incorrectos"); location.href = "login2.php"; </script>

    <?php
    }
  }
  else{
    ?>
    <script languaje="javascript"> alert("Datos incorrectos"); location.href = "login2.php"; </script>
    <script type="text/javascript">
      $(document).ready(function(){
                $('.log-btn').click(function(){
                      $('.log-status').addClass('wrong-entry');
                });
      });
    </script>
    <?php
  }
  mysqli_free_result($sql);
  mysqli_close();
  ?>
