<?php
include_once("lib/Vehiculo.php");
$vehiculo = new Vehiculo();
	$idVehiculo= $_POST["idVehiculo"];
	$placa = $_POST["placa"];	
	$tipo= $_POST["tipo"];	
	$anio = $_POST["anio"];	
	$precio = $_POST["precio"];
	$modelo = $_POST["modelo"];
	$marca = $_POST["marca"];
	$color = $_POST["color"];	
	$capacidad=$_POST["capacidad"];
	$kilometraje=$_POST["kilometraje"];
	$disponibilidad=$_POST["disponibilidad"];
	$nombreImagen=$_FILES['imagen']['name'];

	if($nombreImagen==""){
		$imagen=$_POST["nomImg"];
		$tipoImagen=$_POST["tipImg"];	
		echo $vehiculo->modificarVehiculo($idVehiculo,$anio,$placa,$marca,$tipo,$capacidad,$precio,$color, $kilometraje,$disponibilidad,$modelo,$tipoImagen,$imagen);
	}
	else{
		$rutaTemporal=$_FILES['imagen']['tmp_name'];
		$rutaEnServidor='../imagenesAutos';
		$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;	
		list($imagen, $tipoImagen)=explode(".", $nombreImagen);
		
		if (move_uploaded_file($rutaTemporal,$rutaDestino)) {
	
			echo $vehiculo->modificarVehiculo($idVehiculo,$anio,$placa,$marca,$tipo,$capacidad,$precio,$color, $kilometraje,$disponibilidad,$modelo,$tipoImagen,$imagen);
		} else {
			echo "Posible ataque de carga de archivos!\n";
		}
	}		
		header('Location:../modificar.php?ds=2');



?>