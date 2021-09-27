<html>
	<head>
		<title>FCPN</title>
	</head>
	<body>
		<h1>Lectura de datos</h1>
		<?php
			$nombre=$_GET["nombre"];
			$apellido=$_GET["apellido"];
			echo "Hola ".$nombre." ".$apellido."<br>";
			if (isset($_GET["enviar"]))
				echo "Presiono enviar";
			else
				echo "Presiono cancelar";
		?>
	</body>
</html>