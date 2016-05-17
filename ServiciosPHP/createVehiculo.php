<?php
include_once ("lib/Vehiculo.php");

if ($_GET) {
	
	$placa = $_GET ["placa"];
	$nombre = $_GET ["name"];
	$precioHora = $_GET ["precioHora"];
	$modelo = $_GET ["modelo"];
	$marca = $_GET ["marca"];
	$color = $_GET ["color"];
	$imagen = $_GET ["imagen"];
	$kilometraje = $_GET ["kilometraje"];
	
	$vehiculo = new Vehiculo($placa, $nombre , $precioHora , $modelo , 
			$marca , $color , $imagen , $kilometraje);
	
	echo $vehiculo->registrarVehiculo();
} 

else
	die ( "vehiculo no registrado" );

?>