<?php
require('fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
	
    // Arial bold 15
    $this->SetFont('Arial','B',10);
    // Movernos a la derecha
    $this->Cell(60);
    //Logo
    $this->Image('Logo-VidadePaz.jpeg', 185, 5, 20);
    // Título
    $this->Cell(70,10,'Reporte de Pacientes ',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(30,10,'Nombre',1,0,'C',0);
	$this->Cell(35,10,'Apellido Paterno',1,0,'C',0);
	$this->Cell(35,10,'Apellido Materno',1,0,'C',0);
    $this->Cell(20,10,'Fecha',1,0,'C',0);
    $this->Cell(20,10,'DNI',1,0,'C',0);
    $this->Cell(10,10,'Edad',1,0,'C',0);
    $this->Cell(20,10,'Tipo',1,0,'C',0);
    $this->Cell(25,10,utf8_decode('Duración'),1,1,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página') .$this->PageNo().'/{nb}',0,0,'C');
}
}

require ("cn.php");
$consulta = "SELECT * FROM pacientes";
$resultado = mysqli_query($conexion, $consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);

while ($row=$resultado->fetch_assoc()) {
	$pdf->Cell(30,10,$row['nombre'],1,0,'C',0);
	$pdf->Cell(35,10,$row['apellidop'],1,0,'C',0);
	$pdf->Cell(35,10,$row['apellidom'],1,0,'C',0);
    $pdf->Cell(20,10,$row['fecha'],1,0,'C',0);
    $pdf->Cell(20,10,$row['dni'],1,0,'C',0);
    $pdf->Cell(10,10,$row['edad'],1,0,'C',0);
    $pdf->Cell(20,10,$row['Tipo'],1,0,'C',0);
    $pdf->Cell(25,10,$row['duracion'],1,1,'C',0);

    

} 


	$pdf->Output();
?>