<?php

include_once ("lib/usuario.php");

if($_GET){


	$cedula = $_GET["cedula"];
	$nombre = $_GET["name"];
	$direccion = $_GET["direccion"];
	$username = $_GET["username"];
	$password = $_GET["pass"];
	$username = $_GET["username"];
	$telefono = $_GET["telefono"];
	$numLicencia = $_GET["numLicencia"];

	$usuario = new Usuario($cedula, $nombre, $password, $direccion, $username, $numLicencia, $telefono);

	echo $usuario->registrarUsuario();
}

else die("Usuario no registrado");

?>