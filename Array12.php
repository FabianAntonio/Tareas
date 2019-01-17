<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Ejercicio 12</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
			$alumno = array(
			"Fabian" => array(43,"Torreagúera"),
			"Sergio" => array(18,"Murcia"),
			"Manuel" => array(35, "Beniaján"),
			"JoseLuis" => array(27, "Alguazas"),
			"Pedro" => array(24,"Molina de Segura"),
			"Alejandro" => array(33, "Alcantarilla" ));

			if(isset($_GET['nombre'])){
				$nombre = $_GET['nombre'];
				

				echo $nombre." tiene ".$alumno[$nombre][0]." años y vive en ".$alumno[$nombre][1];


			} elseif ($_GET['calcula']=="total") { $calcula = $_GET['calcula'];
				
						$total = 0;
						foreach ($alumno as $clave => list($valor,$provincia) ) {
					
								$total = $total+$valor;
						
							} echo $total;


				} else {
						echo "Falta parámetros array12.php?nombre=XX<br><br>";
						echo "o también puedes usar el parámetros array12.php?consulta=total<br><br>";
						echo "<pre>Nombre&nbsp;&nbsp;\tEdad\tProvincia</pre><br>";
						
						foreach ($alumno as $clave => list($valor,$provincia) ) {
							
								echo "<pre>".$clave ."&nbsp;&nbsp;&nbsp;\t". $valor."\t".$provincia."</pre>";
								
						
							}

						}
				
					
		?>
	</body>

</html>