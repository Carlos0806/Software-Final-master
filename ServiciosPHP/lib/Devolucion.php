<?php
class Devolucion {

	private $autoRentado;
	private $fecha;
	private $hora;
	private $kilometraje;
	private $observaciones;

	function Devolucion($autoRentado = 'def', $fecha = 'def', $hora = 'def',$kilometraje = 'def', $observaciones = 'def'){
		$this->autoRentado=$autoRentado;
		$this->fecha=$fecha;
		$this->hora=$hora;
		$this->kilometraje=$kilometraje;
		$this->observaciones = $observaciones;
	}
	function registrarDevolucion(){
		include 'lib/db_connect.php';
		 
		 try{
			$query = "INSERT INTO `RentaVehiculos`.RENTAS_FINALIZADAS
	            (
	            `autoRentado`,
	             `fecha`,
	             `hora`,
	             `kilometrajeActual`,`observaciones`)
					VALUES (?,?,?,?,?)";

				$stmt = $conexion->prepare($query);
				$stmt->bindParam(1, $this->autoRentado);
				$stmt->bindParam(2, $this->fecha);
				$stmt->bindParam(3, $this->hora);
				$stmt->bindParam(4, $this->kilometraje);
				$stmt->bindParam(5, $this->observaciones);

				if($stmt->execute()){
					return "OK";
				}
				else{
					return "NO OK";
				}
			}
			catch(PDOException $exception){
				return "Error: ". $exception->getMessage();
			}
			
	}
}
?>