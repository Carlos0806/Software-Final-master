<?php

	include_once ("lib/Alquiler.php");
	include_once ("lib/usuario.php");
	include_once ("lib/Vehiculo.php");

	$placaVeh = $_POST["placa"];
	$diaIngreso = $_POST["diaPeticion"];
	$diaRegreso = $_POST["diaRegreso"];
	$usuario = $_POST["usuario"];

	$fechaIni = strtotime($diaIngreso);
	$fechaFin = strtotime($diaRegreso);
	$horas = ($fechaFin - $fechaIni)/(60*60);

	if($horas>0){
		$usuario = new Usuario("", "", "", "", $usuario, "", "");
		$vehiculo = new Vehiculo($placaVeh, "", "", "", 
				"", "", "", "", "");

		$cedula = $usuario->getUsuarioPorUsername();
		$idVehiculo = $vehiculo->getVehiculoPorPlaca();

		$alquiler = new Alquiler($idVehiculo, $diaIngreso, $diaRegreso,$horas, $cedula);

		$resultado = $alquiler->registrarAlquiler();

		echo $resultado;
	}

	else{
		echo "El rango de fechas es erroneo";
	}

?>