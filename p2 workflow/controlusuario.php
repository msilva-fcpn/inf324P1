<?php
session_start();
if ($_POST["usuario"]=="moyo" && $_POST["contrasenia"]=="123456")
{	
	$_SESSION["IdUser"]=1;
	$_SESSION["rol"]="U";
	header("Location: bandeja.php");
}
if ($_POST["usuario"]=="meyo" && $_POST["contrasenia"]=="123456")
{
	$_SESSION["IdUser"]=10;
	$_SESSION["rol"]="U";
	header("Location: bandeja.php");
}
if ($_POST["usuario"]=="zulema" && $_POST["contrasenia"]=="123456")
{
	$_SESSION["IdUser"]=20;
	$_SESSION["rol"]="K";
	header("Location: bandeja.php");
}
?>