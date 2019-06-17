<?php 

require 'fpdf/fpdf.php';

/*Constructor:  Alineación P/L, medida, tamaño : array(W, H) */
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);

/*Coordenadas*/
$pdf->SetXY(50, 30);
/*Cell:    Ancho, Alto, Text, Borde, Salto Linea, Posición*/ 
$pdf->Cell(100, 10, "Hola Mundo", 1, 1,'C');
$pdf->Cell(100, 10, "Hola Mundo2aaaaaaaaaaaaaaaaaaaaaaaaaaaa", 1, 1,'C');
// $pdf->Image('creeperdj.png', 50, 100, 30);
/*Desplaza el texto: Ancho, Alto Fila, Text,               Borde, Posición, Color Fondo*/ 
$pdf->MultiCell(100, 10, "Hola Mundo2aaaaaaaaaaaaaaaaaaaaaaaaaaaa", 1 , 'L', 0);

$pdf->Output();
?>