<?php  

require 'fpdf/fpdf.php';


$pdf = new FPDF();

/*
orientacion
formato de la pagina
rotacion, en sentido de las agujas del reloj
la rotacion debe ser un multiplo de 90
0,90,180,270,360
*/

$pdf -> AddPage('L', 'letter', -90);
$pdf -> SetFont('Arial', 'B', 18);
$pdf -> Cell(150, 12, 'Este es un reporte con parametros', 1, 1, 'C');
$pdf -> Output();


?>