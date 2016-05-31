<?php
class Vehiculo {
	private $idVehiculo;
	private $placa;
	private $anio;
	private $precioHora;
	private $modelo;
	private $marca;
	private $color;
	private $tipoImagen;
	private $nombreImagen;
	private $kilometraje;
	private $disponibilidad;
	private $capacidadPersonas;
	private $tipo;
	
	function Vehiculo($anio= 'def',$placa= 'def',$marca= 'def',$tipo= 'def',$capacidadPersonas= 'def',$precioHora= 'def',$color= 'def', $kilometraje= 'def',$disponibilidad= 'def',$modelo='def',$tipoImagen= 'def',$nombreImagen= 'def') {
	
		$this->placa = $placa;
		$this->anio = $anio;
		$this->tipo= $tipo;
		$this->precioHora = $precioHora;
		$this->capacidadPersonas= $capacidadPersonas;	
		$this->marca = $marca;
		$this->color = $color;
		$this->modelo= $modelo;
		$this->kilometraje=$kilometraje;
		$this->disponibilidad= $disponibilidad;
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

function registrarVehiculo($anio,$placa,$marca,$tipo,$capacidad,$precioHora,$color, $kilometraje,$disponibilidad,$modelo,$tipoImagen,$imagen){
		try{
			include 'lib/db_connect.php';
	
			$query = "INSERT INTO RentaVehiculos.VEHICULOS
            (anio, placa, marca, tipo, capacidadPersonas, precioHora, color, kilometraje, disponibilidad, modelo, tipoImagen, nombreImagen) VALUES (".$anio.", '".$placa."', '".$marca."', ".$tipo.", ".$capacidad.", ".$precioHora.",  '".$color."',  ".$kilometraje.", ".$disponibilidad.",  '".$modelo."', '".$tipoImagen."', '".$imagen."')";	
			$stmt = $conexion->prepare($query);				
			
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
	
	function modificarVehiculo($idVehiculo, $anio,$placa,$marca,$tipo,$capacidad,$precioHora,$color, $kilometraje,$disponibilidad,$modelo,$tipoImagen,$imagen){
	
		try{
	
			include 'lib/db_connect.php';
	
			$query = "UPDATE VEHICULOS
					SET 
						  anio = ".$anio.",
						  placa = '".$placa."',
						  marca = '".$marca."',
						  tipo = '".$tipo."',
						  capacidadPersonas = '".$capacidad."',
						  precioHora = '".$precioHora."',
						  color = '".$color."',
						  kilometraje = '".$kilometraje."',
						  disponibilidad = '".$disponibilidad."',
						  modelo = '".$modelo."',
						  tipoImagen = '".$tipoImagen."',
						  nombreImagen = '".$imagen."'
						WHERE idVehiculo = ".$idVehiculo;
						
			echo $query;
	
			$stmt = $conexion->prepare($query);
	


	
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
	
	function eliminarVehiculo($idVehiculo){
	
		try {
	
			include 'lib/db_connect.php';
	
			$query = "DELETE FROM VEHICULOS WHERE idVehiculo = '".$idVehiculo."'";
			
			
			$stmt = $conexion->prepare($query);
	
		
	
			if($stmt->execute()){
				return true;
			}
			else{
				echo false;
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

	function getVehiculoPorPlaca($idVehiculo){

		
	
			include 'ServiciosPHP/lib/db_connect.php';
	
			$query = "Select 
						idVehiculo
						, anio
    					, placa
						, marca
						, tipo
						, capacidadPersonas
						, precioHora
						, color
						, kilometraje
						, disponibilidad
						, modelo
						, tipoImagen
						, nombreImagen FROM VEHICULOS WHERE idVehiculo = '".$idVehiculo."'";
			
			
		$result = $conexion->query($query);
	
		return $result;
	}
	
	
	function getPrecioHora(){

		try {
	
			include 'lib/db_connect.php';
	
			$query = "Select precioHora FROM `RentaVehiculos`.VEHICULOS WHERE placa = ?";
	
			$stmt = $conexion->prepare($query);
	
			$stmt->bindParam(1, $this->placa);
	
			if($stmt->execute()){
				$precioHora="";
				foreach ($stmt as $row ) {
					// code...
					$precioHora .= $row ["precioHora"];
				}
				return $precioHora;
			}
			else{
				return null;
			}
		}
		catch(PDOException $exception){
			return "Error: ". $exception->getMessage();
		}
	}
	function getModelo(){

		try {
	
			include 'lib/db_connect.php';
	
			$query = "Select modelo FROM `RentaVehiculos`.VEHICULOS WHERE placa = ?";
	
			$stmt = $conexion->prepare($query);
	
			$stmt->bindParam(1, $this->placa);
	
			if($stmt->execute()){
				$modelo="";
				foreach ($stmt as $row ) {
					// code...
					$modelo .= $row ["modelo"];
				}
				return $modelo;
			}
			else{
				return null;
			}
		}
		catch(PDOException $exception){
			return "Error: ". $exception->getMessage();
		}
	}
	function getAnio(){

		try {
	
			include 'lib/db_connect.php';
	
			$query = "Select anio FROM `RentaVehiculos`.VEHICULOS WHERE placa = ?";
	
			$stmt = $conexion->prepare($query);
	
			$stmt->bindParam(1, $this->placa);
	
			if($stmt->execute()){
				$anio="";
				foreach ($stmt as $row ) {
					// code...
					$anio .= $row ["anio"];
				}
				return $anio;
			}
			else{
				return null;
			}
		}
		catch(PDOException $exception){
			return "Error: ". $exception->getMessage();
		}
	}
	function getColor(){

		try {
	
			include 'lib/db_connect.php';
	
			$query = "Select color FROM `RentaVehiculos`.VEHICULOS WHERE placa = ?";
	
			$stmt = $conexion->prepare($query);
	
			$stmt->bindParam(1, $this->placa);
	
			if($stmt->execute()){
				$color="";
				foreach ($stmt as $row ) {
					// code...
					$color .= $row ["color"];
				}
				return $color;
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
