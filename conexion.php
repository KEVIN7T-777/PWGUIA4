<?php
function conexion(){

$servidor = "localhost"; //DONDE ESTA LA BBDD?
$usuario = "root"; //EL USUARIO POR DEFECTO DEL PHPMYADMIN
$clave = "";
$base = "sistema"; //NOMBRE DE LA BASE DE DATOS

//CONEXION A LA BASE DE DATOS SOLICITANDO TODOS LOS COMPONENTES ANTERIORES SI CUMPLE SE EJECUTA LA ACCION mysqli_connect
$conectar = mysqli_connect($servidor,$usuario,$clave,$base) or die("ERROR EN LA CONEXION");
return $conectar;
}

function buscarUsu($a,$b){
	$conect = conexion();
	$buscarCli = "SELECT usuario, clave FROM usuarios WHERE usuario='$a' && clave='$b'";
	$unir = mysqli_query($conect,$buscarCli);
	//La función mysql_num_rows() de MySQL devuelve simplemente el número delíneas de un resultado. El inconveniente de esta función es que pesa muchopara el servidor, ya que se trata de un bucle que recorre cada línea paracontarla.
	$unirC = mysqli_num_rows($unir);
	return $unirC;
}
?>