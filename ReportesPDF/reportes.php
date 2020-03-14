<?php 

require 'fpdf/fpdf.php';

$pdf = new FPDF();


$pdf -> AddPage();

/*
SetFont(Familia de fuente, Estilo de letra, Tamaño de la fuente)

B = negrilla
I = italica
U = underline

*/

$pdf -> SetFont('Arial', 'B', 18);

/*
Cell(Ancho, alto, Texto, Bordes, Salto de linea, Alineacion, Color de fondo(Opcional))
Bordes = Left, Right, Bottom, Top
*/

$pdf -> Cell(100, 12, 'Este es mi primer reporte', 1, 0, 'C');
$pdf -> Cell(100, 12, 'Usando FPDF', 'B', 1, 'R');


$pdf -> Output();



?>