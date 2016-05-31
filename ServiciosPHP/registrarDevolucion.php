<?php

	include_once ("lib/Devolucion.php");

	$placa = $_POST["placa"];
	$kilometraje = $_POST["kilometraje"];
	$fechaDevolucion = $_POST["diaDevolucion"];
	$idRenta = $_POST["idRenta"];
	$observaciones = $_POST["observaciones"];

	$devolucion = new Devolucion($idRenta, $fechaDevolucion, $fechaDevolucion, $kilometraje, $observaciones);

	$resultado = $devolucion->registrarDevolucion();

	echo $resultado;

?>