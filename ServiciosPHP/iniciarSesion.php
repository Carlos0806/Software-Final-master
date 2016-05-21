<?php

	include_once ("lib/usuario.php");

	session_start();
	$username = $_POST["username"];
	$password = $_POST["pass"];

	$usuario = new Usuario("", "", $password, "", $username, "", "");
	$resultado = $usuario->iniciarSesion();
	if($resultado != "malo" ) {
		if($resultado == 0){
			$_SESSION["s_user"] = $username;
			
		}if($resultado == 1){
			$_SESSION["s_admin"] = $username;
			
		}
		echo "OK";
		exit;
	}
	else{
		echo "Datos inválidos";
	}
?>