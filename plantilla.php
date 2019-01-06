<?php 
	require('fpdf/fpdf.php');
	/**
	 *
	 */
	class PDF extends FPDF
	{
		
		function Header()
		{
			$this->Image('css/img/omaped.jpg',5,5,30);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);//Espacio entre imagen y titulo
			$this->Cell(120,10,'Listado de Personas con Discapacidad',0,0,'C');

			$this->Ln(20);
		}

		function Footer() //pie de pagina
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I',8);
			//$this->Cell(0,10,'Pagina '$this->PageNo().'/{nb}',0,0,'C');
		}
	}
 ?>
