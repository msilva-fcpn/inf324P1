<?php
session_start();
include "conexion.inc.php";
$sql="select * from seguimiento where fechafin is null and usuario=".$_SESSION["IdUser"];
$resultado=mysqli_query($conn, $sql);
?>
<table>
<tr>
	<td>Flujo</td>
	<td>Proceso</td>
	<td>Accion</td>
</tr>
<?php
while ($fila=mysqli_fetch_array($resultado))
{
echo "<tr>";
echo "<td>".$fila["codFlujo"]."</td>";
echo "<td>".$fila["codProceso"]."</td>";
echo "<td><a href='motor.php?flujo=".$fila["codFlujo"]."&proceso=".$fila["codProceso"]."'>Editar</a></td>";
echo "</tr>";
}
?>
</table>

<a href="nuevoflujo.php">Nuevo</a>