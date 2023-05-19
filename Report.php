<?php
require('Fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
	
    // Arial bold 15
    $this->SetFont('Arial','B',16);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reporte de Pacientes ',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(80,10,'Nombre',1,0,'C',0);
	$this->Cell(50,10,'Precio',1,0,'C',0);
	$this->Cell(50,10,'Stock',1,1,'C',0);
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

include_once "model/conexion.php";
$sentencia = $bd->query("select * from pacientes");
$pacientes = $sentencia->fetchAll(PDO::FETCH_OBJ);

foreach ($pacientes as $dato) {

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);

echo $dato->codigo;
echo $dato->nombre;
echo $dato->apellidop; 
echo $dato->apellidom; 
echo $dato->fecha;
echo $dato->dni;
echo $dato->edad;
echo $dato->Tipo;
echo $dato->duracion;
}

	$pdf->Output();
?>