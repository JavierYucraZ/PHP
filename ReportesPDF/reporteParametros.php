<?php  

require 'fpdf/fpdf.php';

/*
Orientacion de la hoja
Portraip(Retrato) = Vertical (P)
Landscape(Paisaje) = Horizontal (L)

medidas para utilizar en la hoja
mm, cm, in, pt

Tamaño de la hoja
carta, a4, a5, Oficio

*/
$pdf = new FPDF('L', 'mm', array(50, 180));
$pdf -> AddPage();
$pdf -> SetFont('Arial', 'B', 18);
$pdf -> Cell(150, 12, 'Este es un reporte con parametros', 1, 1, 'C');
$pdf -> Output();


?>