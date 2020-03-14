<?php  

$variable = "variable global";

function Variables(){
	$variable = "variable local";
	echo $variable;
}


echo $variable;
echo "<hr>";
Variables();

echo "<hr>";

$numero1 = 7;
$numero2 = 7;

function Globales(){
	global $numero1, $numero2;
	$resultado = $numero1 + $numero2;
	echo $resultado;
}

echo "<hr>";
Globales();

$nombre = "Javier";
$apellido = '';

echo "<hr>";
echo $GLOBALS['nombre'];


function super_globales($apellido){
	echo $GLOBALS['nombre']." ".$apellido;
}

echo "<hr>";
super_globales('Yucra');


?>