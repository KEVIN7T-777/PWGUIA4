
<?php

session_start();
include("conexion.php");
//LLAMANDO A LA FUNCION->CONEXION:
$conexion = conexion();
//*******************************BUSCAR USUARIO***********************
if (isset($_POST)) {
	$usuario = $_POST['usuario'];
	$contraseña = $_POST['clave'];

	$ver = buscarUsu($usuario,$contraseña);

	if ($ver>0) {
		$_SESSION["confirmar"]= true; 
		echo "<h1>BIENVENIDO : " . $_POST['usuario'] . " </h1>";
	}else{
		header('location: index.php');

	}
}
?>
