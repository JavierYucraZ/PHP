<?php 

$carreras = array(
	'Carrera : Diseño y Programacion de sitios web','Html','Javascript','Bootstrap','PHP',
	'Carrera : Tecnologias .NET', 'Visual Basic','ASP .NET','C#','ADO .NET',
	'Carrera : Base de Datos','Analisis y diseño','Acces','SQL','MySQL','PostGreSQL'
);

echo "<pre>";
print_r($carreras);
echo "</pre>";

for ($i=0; $i < count($carreras); $i++) { 
	echo "<br>";
	echo $carreras[$i];
}

echo "<hr>";

$indice = 0;
while ($indice < count($carreras)){
	echo "<br>";
	echo $carreras[$indice];
	$indice = $indice + 1;
}

echo "<hr>";

$ganancias = array(
	'Enero' => 4500,
	'Febrero' => 3700,
	'Marzo' => 1000,
	'Abril' => 2500,
	'Mayo' => 1800,
	'Junio' => 2000,
	'Julio' => 2800,
	'Agosto' => 3700,
	'Septiembre' => 1500,
	'Octubre' => 900,
	'Noviembre' => 2500,
	'Diciembre' => 7000
);

foreach ($ganancias as $mes => $valor) {
	echo "Mes : ".$mes.", Ganancia : ".$valor."bs";
	echo "<br>";
}

$promedioGanancia = 0;
foreach ($ganancias as $mes => $valor) {
	$promedioGanancia += $valor;
}

echo "<br>";
echo "El promedio de las ganancias anuales es : ".$promedioGanancia/count($ganancias)."bs";

?>