<?php 

echo "Hola mundo desde PHP";

echo "<h1> Hola mundo desde PHP </h1>";

$mensaje = 'Mensaje guardado en una variable';

echo $mensaje;

$numero1 = "50";
$numero2 = 30;

echo "<br>";
echo $numero1 + $numero2;

$nombre = "Javier";
$apellido = "Yucra";
$celular = 70190260;

echo "<br>";

echo $nombre." ".$apellido." ".$celular;
$encendido = true;
$apagado = false;

echo "<br>";
echo "variable en true : ".$encendido;

echo "<br>";
echo "variable en false : ".$apagado;

$alumnos = array("Rosa", "Jhoselin", "Javier", true, 123);

echo "<br>";

echo $alumnos[0];

echo "<pre>";
print_r($alumnos);
echo "</pre>";

$alumnos2 = array(
	'nombre' => 'Javier',
	'apellido' => 'Yucra',
	'celular' => 70190260
);

echo "<pre>";
print_r($alumnos2);
echo "</pre>";

echo $alumnos2['celular'];

$alumnos3[0] = array(
	'nombre' => 'Javier',
	'materias' => array(
		'Html', 'Javascript'
	)
);

$alumnos3[1] = array(
	'nombre' => 'Rosa',
	'materias' => array(
		'Bootstrap', 'PHP'
	)
);

$alumnos3[2] = array(
	'nombre' => 'Jhoselin',
	'materias' => array(
		'Wordpress', 'Joomla'
	)
);

echo "<pre>";
print_r($alumnos3);
echo "</pre>";


$alumnos4['Javier'] = array(
	'materias' => array(
		'bootstrap' => array(
			51,70,80
		),
		'Javascript' => array(
			45,80,90
		)
	)
);

$alumnos4['Rosa'] = array(
	'materias' => array(
		'Bootstrap', 'PHP'
	)
);

$alumnos4['Jhoselin'] = array(
	'materias' => array(
		'Wordpress', 'Joomla'
	)
);


echo "<pre>";
print_r($alumnos4);
echo "</pre>";


$alumnos5['Javier']= array(
	'materias' => array(
		'Html' => array(
			'1er Trimestre' => 51,
			'2do Trimestre' => 70,
			'3er Trimestre' => 90
		)
	)
);

echo "<pre>";
print_r($alumnos5);
echo "</pre>";

$alumnos5['Javier']['materias']['Html']['1er Trimestre'] = 30;

echo "<pre>";
print_r($alumnos5);
echo "</pre>";

$tri1 = $alumnos5['Javier']['materias']['Html']['1er Trimestre'];
$tri2 = $alumnos5['Javier']['materias']['Html']['2do Trimestre'];
$tri3 = $alumnos5['Javier']['materias']['Html']['3er Trimestre'];

$promedio = ($tri1 + $tri2 + $tri3)/3;

echo "Promedio del Alumno Javier : ".$promedio;
echo "<br>";
echo "Promedio del Alumno Javier : ".round($promedio);
echo "<br>";
echo "Promedio del Alumno Javier : ".round($promedio,2);



$alumnos6['Pepito'] = array( 
	'materias' => array(
		'Bootstrap' => array(
			'1er Trimestre' => array(
				'Asistencia' => 20,
				'Examen' => 40),
			'2er Trimestre' =>  array(
				'Asistencia' => 20,
				'Examen' => 40),
			'3er Trimestre' =>  array(
				'Asistencia' => 20,
				'Examen' => 40))
		,'PHP' => array(
			'1er Trimestre' =>  array(
				'Asistencia' => 20,
				'Examen' => 40),
			'2er Trimestre' =>  array(
				'Asistencia' => 20,
				'Examen' => 40),
			'3er Trimestre' =>  array(
				'Asistencia' => 20,
				'Examen' => 40))));


echo "<pre>";
print_r($alumnos6);
echo "</pre>";

?>