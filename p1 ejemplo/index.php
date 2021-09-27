<html>
	<head>
		<title>FCPN</title>
	</head>
	<body>
		<?php
			session_start();
			echo "Facultad de Ciencias Puras y Naturales";
			echo '<br>';
			echo 1990;
			echo '<table border="1px">';
			echo '<tr>';
			echo '<td>numero</td><td>descripcion</td>';
			echo '</tr>';
			$numero = 1;
			$_SESSION["nombre"]="Moises";
			
		?>
<tr>
<td><?php echo $numero; $numero=$numero+1;?></td>
<td>uno</td>
</tr>
<tr>
<td><?php echo $numero; ?></td>
<td>dos</td>
</tr>
		<?php
			echo '</table>';
		?>
		<div style="width:400;heigth:200;">
			<p style="color:#9b2e16;background:#f7f68e">Hola mundo mundiales</p>
		</div>
	<?php echo $_SESSION["nombre"]; ?>
	<form method="GET" action="sesiones.php">
		<input type="Submit" value="Enviar" name="Enviar"/>
	</form>
	</body>
	
</html>