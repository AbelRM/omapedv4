<?php
  include('conexion.php');
  $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
  mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
  
  if (isset($_POST['iniciar'])) 
  {
    if(isset($_POST['usuario']) && !empty($_POST['usuario']) &&
       isset($_POST['clave']) && !empty($_POST['clave']))
    {
       $sqldos = "SELECT user,password FROM usuario WHERE user='$_POST[usuario]'";
       $recdos = mysqli_query($conexion,$sqldos);

            $sesion = mysqli_fetch_array($recdos);

            if(password_verify($_POST['clave'], $sesion['password']))
            {
                $_SESSION['user'] = $_POST['usuario'];
                header("Location: index.php");
            }
            else{
            ?>
            <script languaje="javascript"> alert("DATOS INCORRECTOS."); location.href = "login2.php"; </script>
            <?php
            }
    }
    else{
        ?>
        <script languaje="javascript"> alert("DEBE LLENAR AMBOS CAMPOS."); location.href = "login2.php"; </script>
        <?php
    }
  }
  mysqli_close();
  ?>