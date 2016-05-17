<?php

include_once("lib/Vehiculo.php");

if($_GET){

	$placa = $_GET ["placa"];
	
	$vehiculo = new Vehiculo($placa, "" , "", "", 
			"" , "", "", "");

	echo $vehiculo->eliminarVehiculo();
}
else die("Vehiculo no eliminado");

?>