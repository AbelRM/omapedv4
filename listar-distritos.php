<?php
$db = mysql_connect('localhost','root','');
mysql_select_db('dbomaped');

  $Accion = $_REQUEST['Accion'];
  if(is_callable($Accion)){
    $Accion();
  }
  function GetDepartamentos(){
    header('Content-Type: application/json');
    $Departamentos = array();
    $Consulta = mysql_query("SELECT * FROM v_lista_departamentos");
    while ($Fila = mysql_fetch_assoc($Consulta)){
      $Departamentos[] = $Fila;
    }
    echo json_encode($Departamentos);
  }
  function GetProvincias(){
    header('Content-Type: application/json');
    $Provincias = array();
    $Consulta = mysql_query("SELECT * FROM v_lista_provincias WHERE IdDepartamento = ".$_REQUEST['IdDepartamento']);
    while ($Fila = mysql_fetch_assoc($Consulta)){
      $Provincias[] = $Fila;
    }
    echo json_encode($Provincias);
  }
?>
