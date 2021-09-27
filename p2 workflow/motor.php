<?php
session_start();
include "conexion.inc.php";
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];
$sql="select * from flujo where Flujo='$flujo' and proceso='$proceso'";
$resultado=mysqli_query($conn, $sql);
$fila=mysqli_fetch_array($resultado);
$formulario=$fila["formulario"];
include $formulario.".cabecera.form.inc.php";
?>
<form method="GET" action="controlador.php">
<?php
include $formulario.".form.inc.php";
?>
<br/>
<input type="hidden" value="<?php echo $flujo; ?>" name="flujo"/>
<input type="hidden" value="<?php echo $proceso; ?>" name="proceso"/>
<input type="hidden" value="<?php echo $formulario; ?>" name="formulario"/>
<input type="submit" value="Anterior" name="Anterior"/>
<input type="submit" value="Siguiente" name="Siguiente"/>
</form>