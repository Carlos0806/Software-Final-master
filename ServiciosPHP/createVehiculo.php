<?php
include_once ("lib/Vehiculo.php");


	$rutaTemporal=$_FILES['imagen']['tmp_name'];
	$nombreImagen=$_FILES['imagen']['name'];
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
	$rutaEnServidor='../imagenesAutos';
	$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;	
	list($imagen, $tipoImagen)=explode(".", $nombreImagen);	
	


		
		if (move_uploaded_file($rutaTemporal,$rutaDestino)) {			

			$vehiculo = new Vehiculo();			
			 echo $vehiculo->registrarVehiculo($anio,$placa,$marca,$tipo,$capacidad,$precio,$color, $kilometraje,$disponibilidad,$modelo,$tipoImagen,$imagen);
			
			header('Location:../modificar.php?ds=1');
		} else {
			echo "Posible ataque de carga de archivos!\n";
		}
	

	
	



?>