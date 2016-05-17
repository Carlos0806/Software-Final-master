<?php
class Alquiler {

	private $idVeh;
	private $diaIngreso;
	private $diaRegreso;
	private $horas;
	private $usuario;

	function Alquiler($idVeh = 'def', $diaIngreso = 'def', $diaRegreso = 'def',$horas = 'def', $usuario= 'def'){
		$this->idVeh=$idVeh;
		$this->diaIngreso=$diaIngreso;
		$this->diaRegreso=$diaRegreso;
		$this->usuario=$usuario;
		$this->horas = $horas;
	}
	function registrarAlquiler(){
		include 'lib/db_connect.php';
		 
		 try{
			$query = "INSERT INTO `RentaVehiculos`.AUTOS_RENTADOS
	            (
	            `numeroHoras`,
	             `fechaAlquiler`,
	             `vehiculo`,
	             `cliente`,`fechaEntrega`)
					VALUES (?,?,?,?,?)";

				$stmt = $conexion->prepare($query);
				//$cosito = usuario;
				echo("id veh: ". $this->idVeh);
				echo("diaAlquiler: ". $this->diaIngreso);
				echo("diaRegreso: ". $this->diaRegreso);
				echo("horas: ". $this->horas);
				echo("cedula: ". $this->usuario);
				echo $query;
				$stmt->bindParam(1, $this->horas);
				$stmt->bindParam(2, $this->diaIngreso);
				$stmt->bindParam(3, $this->idVeh);
				$stmt->bindParam(4, $this->usuario);
				$stmt->bindParam(5, $this->diaRegreso);


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