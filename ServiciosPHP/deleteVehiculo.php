<?php

include_once("lib/Vehiculo.php");

if($_GET){

	$id = $_GET ["p"];
	
	$vehiculo = new Vehiculo();

	if($vehiculo->eliminarVehiculo($id)){
		header('Location:../modificar.php?ds=3');
	}else{
		header('Location:../modificar.php?ds=4');
	}
	
	
}
else die("Vehiculo no eliminado");

?>