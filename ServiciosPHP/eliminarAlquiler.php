<?php

	include_once ("lib/Alquiler.php");
	include_once ("lib/usuario.php");
	include_once ("lib/Vehiculo.php");


	$idRenta = $_POST["idRenta"];


		$alquiler = new Alquiler("", "", "","", "", $idRenta);

		$resultado = $alquiler->eliminarAlquiler();

		echo $resultado;

?>