<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Ejercicio 8</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
			$alumno = array("Fabian" => 42,"Sergio" => 18,"Manuel" => 35,"JoseLuis" => 27,"Pedro" => 24,"Alejandro" => 33 );
			if(isset($_GET['nombre'])){
				$nombre = $_GET['nombre'];
				

				echo $nombre." tiene ".$alumno[$nombre]." años.";


			} else {echo "Falta parámetros array10.php?nombre=XX<br><br>";
					echo "<pre>Nombre&nbsp;&nbsp;\tEdad</pre><br>"; 
					foreach ($alumno as $clave => $valor) {
					echo "<pre>".$clave ."&nbsp;&nbsp;&nbsp;\t". $valor."</pre>";
					
					}
					}
		?>
	</body>

</html>