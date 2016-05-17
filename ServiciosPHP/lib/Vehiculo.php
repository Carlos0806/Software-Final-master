<?php
class Vehiculo {
	private $placa;
	private $nombre;
	private $precioHora;
	private $modelo;
	private $marca;
	private $color;
	private $tipoImagen;
	private $nombreImagen;
	private $kilometraje;
	private $disponibilidad;
	
	function Vehiculo($placa = 'def', $nombre = 'def', $precioHora = 'def', $modelo = 'def', 
			$marca = 'def', $color  = 'def', $tipoImagen = 'def', $kilometraje = 'def', $nombreImagen = 'def') {
	
		$this->placa = $placa;
		$this->nombre = $nombre;
		$this->precioHora = $precioHora;
		$this->modelo = $modelo;
		$this->marca = $marca;
		$this->color = $color;
		$this->tipoImagen = $tipoImagen;
		$this->nombreImagen = $nombreImagen;
		
	}
	
	function getData(){
		return $this->placa." : ".$this->nombre." : ".$this->precioHora." 
				: ".$this->modelo." : ".$this->marca." : ".$this->color." : "
						.$this->tipoImagen.":".$this->nombreImagen; 
	}

	function getVehiculo($RegistrosAEmpezar, $RegistrosAMostrar){		
		include 'ServiciosPHP/lib/db_connect.php';
		$query = "SELECT  idVehiculo,  anio,  placa,  marca,  tipo,  capacidadPersonas,  precioHora,  color,  kilometraje,  disponibilidad,  modelo,  tipoImagen, nombreImagen FROM VEHICULOS ORDER BY precioHora ASC LIMIT ". $RegistrosAEmpezar.", ". $RegistrosAMostrar;	
		$result = $conexion->query($query);
	
		return $result;
	}
	function getTotalVehiculo(){		
		include 'ServiciosPHP/lib/db_connect.php';
		$query = "SELECT    COUNT(`idVehiculo`) AS Total FROM    VEHICULOS";	
		$result = $conexion->query($query);		
		return $result;
	}
	

	

	function getVehiculoModelo(){

		include 'lib/db_connect.php';
		$query = "SELECT * from vehiculos WHERE modelo = ?";

		$stmt = $conexion->prepare($query);

		$stmt->bindParam(1, $this->modelo);
		


		if($stmt->execute()){
			return $stmt;
		}
		else{
			return "No se pudo realizar la consulta por modelo/nombre correctamente";
		}
	}

	function registrarVehiculo(){
		try{
			include 'lib/db_connect.php';
	
			$query = "INSERT INTO vehiculos SET placa = ?, nombre = ?, precioHora = ?, 
					modelo = ?, marca = ?, color = ?, imagen = ?";
	
			$stmt = $conexion->prepare($query);
	
			$stmt->bindParam(1, $this->placa);
			$stmt->bindParam(2, $this->nombre);
			$stmt->bindParam(3, $this->precioHora);
			$stmt->bindParam(4, $this->modelo);
			$stmt->bindParam(5, $this->marca);
			$stmt->bindParam(6, $this->color);
			$stmt->bindParam(7, $this->imagen);
			
	
			if($stmt->execute()){
				return "GUARDO!";
			}
			else{
				return "NO GUARDO";
			}
	
		} catch(PDOException $exception){
			return "Error: ". $exception->getMessage();
		}
	}
	
	function modificarVehiculo(){
	
		try{
	
			include 'lib/db_connect.php';
	
			$query = "UPDATE vehiculos  SET placa = ?, nombre = ?, precioHora = ?, 
					modelo = ?, marca = ?, color = ?, imagen = ? WHERE placa = ?";
	
			$stmt = $conexion->prepare($query);
	
			$stmt->bindParam(1, $this->placa);
			$stmt->bindParam(2, $this->nombre);
			$stmt->bindParam(3, $this->precioHora);
			$stmt->bindParam(4, $this->modelo);
			$stmt->bindParam(5, $this->marca);
			$stmt->bindParam(6, $this->color);
			$stmt->bindParam(7, $this->imagen);
			$stmt->bindParam(8, $this->placa);

	
			if($stmt->execute()){
				return "MODIFICO!";
			}
			else{
				return "NO MODIFICO";
			}
		}
		catch(PDOException $exception){
			return "Error: ". $exception->getMessage();
		}
	}
	
	function eliminarVehiculo(){
	
		try {
	
			include 'lib/db_connect.php';
	
			$query = "DELETE FROM vehiculos WHERE placa = ?";
	
			$stmt = $conexion->prepare($query);
	
			$stmt->bindParam(1, $this->placa);
	
			if($stmt->execute()){
				return "ELIMINO!";
			}
			else{
				return "NO ELIMINO";
			}
		}
		catch(PDOException $exception){
			return "Error: ". $exception->getMessage();
		}
	}

		function getVehiculoMarcas(){

		try {
	
			include 'lib/db_connect.php';
	
			$query = "SELECT marca from `RentaVehiculos`.VEHICULOS";
			$result = $conexion->query($query);
			echo $query;
			return $result;
		}catch(PDOException $exception){
			return "Error: ". $exception->getMessage();
		}

	}

	function getVehiculoColores(){

		try {
	
			include 'lib/db_connect.php';
	
			$query = "SELECT distinct  color from `RentaVehiculos`.VEHICULOS";
			$result = $conexion->query($query);
			echo $query;
			return $result;
		}catch(PDOException $exception){
			return "Error: ". $exception->getMessage();
		}

	}

	function getVehiculoTipos(){

		try {
	
			include 'lib/db_connect.php';
	
			$query = "SELECT distinct case tipo  when 1 then 'FAMILIAR' when 2 then 'DEPORTIVO' when 3 then 'TODO TERRENO' when 4 then 'FURGONETA' when 5 then 'SEDAN' when 6 then 'CAMIONETA' end tipo from `RentaVehiculos`.VEHICULOS;";
			$result = $conexion->query($query);
			echo $query;
			return $result;
		}catch(PDOException $exception){
			return "Error: ". $exception->getMessage();
		}

	}

	function getVehiculoPrecios(){

		try {
	
			include 'lib/db_connect.php';
	
			$query = "SELECT distinct precioHora from `RentaVehiculos`.VEHICULOS order by precioHora asc;";
			$result = $conexion->query($query);
			echo $query;
			return $result;
		}catch(PDOException $exception){
			return "Error: ". $exception->getMessage();
		}

	}

	function getVehiculoAnios(){

		try {
	
			include 'lib/db_connect.php';
	
			$query = "SELECT distinct anio from `RentaVehiculos`.VEHICULOS order by anio asc;";
			$result = $conexion->query($query);
			echo $query;
			return $result;
		}catch(PDOException $exception){
			return "Error: ". $exception->getMessage();
		}

	}

		function getVehiculoImagen(){

		try {
	
			include 'lib/db_connect.php';
	
			$query = "SELECT distinct imagen from `RentaVehiculos`.VEHICULOS where idVehiculo = 1;";
			$result = $conexion->query($query);
			echo $query;
			return $result;
		}catch(PDOException $exception){
			return "Error: ". $exception->getMessage();
		}

	}

	function getVehiculoPorPlaca(){

		try {
	
			include 'lib/db_connect.php';
	
			$query = "Select idVehiculo FROM `RentaVehiculos`.VEHICULOS WHERE placa = ?";
	
			$stmt = $conexion->prepare($query);
	
			$stmt->bindParam(1, $this->placa);
	
			if($stmt->execute()){
				$idVehiculo="";
				foreach ($stmt as $row ) {
					// code...
					$idVehiculo .= $row ["idVehiculo"];
				}
				return $idVehiculo;
			}
			else{
				return null;
			}
		}
		catch(PDOException $exception){
			return "Error: ". $exception->getMessage();
		}
	}
}

?>
