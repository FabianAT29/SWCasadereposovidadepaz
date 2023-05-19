<?php

require('Fpdf/fpdf.php');

class PDF extends Fpdf{

    //Cabecera de Pagina
    function Header()
    {
        //Logo
        $this->Cell(-200);
        $this->Image('Logo-VidadePaz.jpeg',0,-10,220);
        //Letra
        $this->Ln(10);
        $this->SetFont('Arial','B',10);

        $this->Cell(-200);

    }

    function Footer()
    {
        $this->SetFillColor(20,05,19);
        $this->Rect(0,270,270,30,'F');
        $this->SetY(-20);//sube las letras
        $this->SetFont('Arial','',10);
        $this->SetTextColor(255,255,255);
        $this->SetX(90);
        $this->Write(5,'  Casa de Reposo Vida de Paz');
        $this->Ln();

    }
}
    $pdf = new PDF();
    $pdf -> AliasNbPages();
    $pdf ->AddPage();
    $pdf ->SetFont('Arial','',10);

    $pdf->SetY(70);
    $pdf->SetX(45);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFillColor(79,59,120);
    $pdf->Cell(40,6, 'Nombre',0,0,'C',1);
    $pdf->Cell(60,6, 'Apellido Paterno',0,0,'C',1);
    $pdf->Cell(35,6, 'Apellido Materno',0,0,'C',1);
    $pdf->Cell(35,6, 'Fecha de Nacimiento',0,0,'C',1);
    $pdf->Cell(35,6, 'DNI',0,0,'C',1);
    $pdf->Cell(35,6, 'Edad',0,0,'C',1);
    $pdf->Cell(35,6, 'Tipo de Servicio',0,0,'C',1);
    $pdf->Cell(35,6, 'Duración',0,1,'C',1);

    include('model/conexion.php');
    require('model/conexion.php');

    $sentencia = $bd->query("select * from pacientes");
    $pacientes = $sentencia->fetchAll(PDO::FETCH_OBJ);

    $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(240,245,255);

    while($sentencia->fetchAll(PDO::FETCH_OBJ)){
        $pdf->SetX(45);
        $pdf->Cell(40,6, 'nombre',0,0, 'C',1);
        $pdf->Cell(60,6, 'apellidop',0,0, 'C',1);
        $pdf->Cell(35,6, 'apellidom',0,0, 'C',1);
        $pdf->Cell(35,6, 'fecha',0,0, 'C',1);
        $pdf->Cell(35,6, 'dni',0,0, 'C',1);
        $pdf->Cell(35,6, 'edad',0,0, 'C',1);
        $pdf->Cell(35,6, 'Tipo',0,0, 'C',1);
        $pdf->Cell(35,6, 'duracion',0,0, 'C',1);
    }
    $pdf->Output();


?>