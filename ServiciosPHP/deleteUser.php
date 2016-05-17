<?php

include_once("lib/usuario.php");

if($_GET){

	$cedula = $_GET["cedula"];
	$nombre = $_GET["name"];
	$edad = $_GET["age"];
	$username = $_GET["username"];

	$usuario = new Usuario($cedula, $nombre, $edad, $username);

	echo $usuario->eliminarUsuario();
}
else die("Usuario no eliminado");

?>