<?php 

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

$clase = '';


function Clase($valor){
	$temp = '';
	if ($valor < 2000) {
		$temp = 'danger';
	}else if ($valor > 2000 && $valor < 3000){
		$temp = 'warning';
	}else{
		$temp = 'success';
	}
	echo $temp;
}

function Promedio($array){
	$prom = 0;
	foreach ($array as $key => $value) {
		$prom += $value;
	}
	$prom = $prom/count($array);
	return $prom;
}

$promedioFuncion = Promedio($ganancias);

echo "<hr>";
define('edad', 8);

echo "Mostrando valor constante : ".edad;

define('edad', 9);
echo "Mostrando valor constante : ".edad;



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class="container">


	<h1>Reporte de Ganancias</h1>
	
	<h2>Ganancias por Mes</h2>

	<table class="table border">
		<thead>
			<th>Mes</th>
			<th>Ganancia</th>
		</thead>
		<tbody>
			<?php foreach ($ganancias as $mes => $valor): 
				if ($valor < 2000) {
					$clase = 'danger';
				}else if($valor > 2000 && $valor < 3000){
					$clase = 'warning';
				}else if ($valor > 3000) {
					$clase = 'success';
				}
				?>
			<tr class="table-<?php echo $clase; ?>">
				<td><?php echo $mes ?></td>
				<td><?php echo $valor ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>


	<table class="table border">
		<thead>
			<th>Mes</th>
			<th>Ganancia</th>
		</thead>
		<tbody>
			<?php foreach ($ganancias as $mes => $valor): ?>
			<tr class="table-<?php Clase($valor) ?>">
				<td><?php echo $mes ?></td>
				<td><?php echo $valor ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	

	<p class="lead">
		El promedio es igual a : 
	</p>

	<p class="display-4">
		<?php echo $promedioFuncion; ?>
	</p>

	
</body>
</html>