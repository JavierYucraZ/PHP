<?php  

$resultado = 0;

if (isset($_GET['get_numero1']) && isset($_GET['get_numero2'])
	&& is_numeric($_GET['get_numero1']) && is_numeric($_GET['get_numero2'])) {
	echo "<pre>";
	print_r($_GET);
	echo "</pre>";

	$numero1 = $_GET['get_numero1'];
	$numero2 = $_GET['get_numero2'];

	$resultado = Operaciones($numero1, $numero2);
	
}else{
	$resultado = "Existen valores invalidos";
}


function Operaciones($numero1, $numero2){
	return $numero1+$numero2;
}






?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculadora</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class="container p-5">
	

	<h2>Calculadora Web</h2>
	<form action="calculadora.php" method="get">
		<div class="form-row">
			<div class="col-lg-6">
				<div class="form-group">
					<label for="numero1">Numero 1</label>
					<input type="text" class="form-control" placeholder="Ingrese numero 1" 
					id="numero1" autocomplete="off" required name="get_numero1">
				</div>
				<div class="form-group">
					<label for="numero2">Numero 2</label>
					<input type="text" class="form-control" placeholder="Ingrese numero 2"
					id="numero2" autocomplete="off" required name="get_numero2">
				</div>
				<div class="btn-group">
					<button class="btn btn-success" type="submit">Calcular</button>
				</div>
				<div class="btn-group">
					<button class="btn btn-warning" type="reset">Limpiar</button>
				</div>
			</div>
			<div class="col-lg-6">
				<p class="lead text-center">
					Los Resultados son
				</p>

				<p class="lead text-center">
					<?php echo $resultado ?>
				</p>
			</div>
		</div>
	</form>


</body>
</html>