<?php
require('fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'REPORTE DE VENTAS',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(75,10, 'PRODUCTO', 1, 0, 'C', 0);
    $this->Cell(35,10, 'CANTIDAD', 1, 0, 'C', 0);
    $this->Cell(35,10, 'PRECIO', 1, 0, 'C', 0);
    $this->Cell(35,10, 'TOTAL', 1, 1, 'C', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'cn.php';
$consulta = "SELECT * FROM ventas";
$resultados = $conexion->query($consulta);


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);

while($row = $resultados->fetch_assoc()){
    $pdf->Cell(75,10, $row['producto'], 1, 0, 'C', 0);
    $pdf->Cell(35,10, $row['cantidad'], 1, 0, 'C', 0);
    $pdf->Cell(35,10, $row['precio'], 1, 0, 'C', 0);
    $pdf->Cell(35,10, $row['total'], 1, 1, 'C', 0);
}

$pdf->Output();
?>