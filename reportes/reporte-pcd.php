<?php
  include('../conexion.php');
  $conexion=mysqli_connect($dbHost,$dbUser,$dbPass) or die("Problemas al acceder al servidor...");
  mysqli_select_db($conexion,$dbName) or die("Problemas al acceder a la base de datos...");
  mysqli_query($conexion,"SET NAMES 'utf8'");
  require('../fpdf/fpdf.php');

  $pdf = new FPDF();
  $pdf->AddPage('landscape','a4');//portrait=modo normal
  $pdf->SetFont('Arial', '', 10);//idetificar el tipo de letro, fuete, tipo de fuente, tamaño
  $pdf->Image('../css/img/omaped.jpg' , 10 ,8, 10 , 13,'JPG');//traer una imagen 10=x,13=y
  $pdf->Cell(18, 10, '', 0);//nos crea las celdas donde colocas la info:largo,ancho, ,bordes
  $pdf->Cell(150, 10, 'Oficina Municipal de apoyo a la Persona con Discapacidad - OMAPED', 0);
  $pdf->SetFont('Arial', '', 9);
  $pdf->Cell(50, 10, 'Fecha: '.date('d-m-y').'', 0);//aqui va la fecha, si cambiamos el 0 por 1 es el borde
  $pdf->Ln(15);//salto de linea
  $pdf->SetFont('Arial', 'B', 11);//b=negrita, 11 tamaño
  $pdf->Cell(75, 8, '', 0);
  $pdf->Cell(100, 8, 'LISTADO DE PERSONAS CON DISCAPACIDAD EN BASE DE DATOS', 0);
  $pdf->Ln(15);//SALTO DE LINEA
  $pdf->SetFont('Arial', 'B', 8);
  $pdf->Cell(8, 8, 'ID', 0);
  $pdf->Cell(45, 8, 'Nombre', 0);
  $pdf->Cell(50, 8, 'Apellidos', 0);
  $pdf->Cell(17, 8, 'D.N.I', 0);
  $pdf->Cell(25, 8, 'Direccion', 0);
  $pdf->Ln(8);//salto de linea
  $pdf->SetFont('Arial', '', 8);
  //CONSULTA
  $datos = mysqli_query($conexion,"SELECT nombres,apellidos,dni,direccion FROM pcd");
  $item = 0;
  //$totaluni = 0;
  //$totaldis = 0;
  while($datos2 = mysqli_fetch_array($datos)){
  $item = $item+1;
  //$totaluni = $totaluni + $datos2['precio_unit'];
  //$totaldis = $totaldis + $datos2['precio_dist'];
  $pdf->Cell(8, 8, $item, 0);
  $pdf->Cell(45, 8,$datos2['nombres'], 0);
  $pdf->Cell(50, 8, $datos2['apellidos'], 0);
  $pdf->Cell(17, 8, $datos2['dni'], 0);
  $pdf->Cell(25, 8, $datos2['direccion'], 0);
  $pdf->Ln(8);//salto de linea
  }
  //$pdf->SetFont('Arial', 'B', 8);
  //$pdf->Cell(114,8,'',0);
  //$pdf->Cell(31,8,'Total Unitario: S/. '.$totaluni,0);
  //$pdf->Cell(32,8,'Total Dist: S/. '.$totaldis,0);
  $pdf->Output();

?>

    