<?php
class Alquiler {

	private $idVeh;
	private $diaIngreso;
	private $diaRegreso;
	private $horas;
	private $usuario;
	private $idRenta;

	function Alquiler($idVeh = 'def', $diaIngreso = 'def', $diaRegreso = 'def',$horas = 'def', $usuario= 'def', $idRenta='def'){
		$this->idVeh=$idVeh;
		$this->diaIngreso=$diaIngreso;
		$this->diaRegreso=$diaRegreso;
		$this->usuario=$usuario;
		$this->horas = $horas;
		$this->idRenta = $idRenta;
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

	function getAlquileres(){

		include 'lib/db_connect.php';
		 
		 try{
			$query = "SELECT * FROM `RentaVehiculos`.AUTOS_RENTADOS JOIN `RentaVehiculos`.VEHICULOS ON  
`RentaVehiculos`.AUTOS_RENTADOS.vehiculo = 
`RentaVehiculos`.VEHICULOS.idVehiculo where cliente = ?";

		$stmt = $conexion->prepare($query);
		$stmt->bindParam(1, $this->usuario);

		if($stmt->execute()){
			return $stmt;
		}else{
			return "no existen rentas para ese cliente.";
		}
			}
			catch(PDOException $exception){
				return "Error: ". $exception->getMessage();
			}


	}

	function modificarAlquiler(){
		include 'lib/db_connect.php';
		 
		 try{
			$query = "UPDATE `RentaVehiculos`.AUTOS_RENTADOS
	            
	           SET `numeroHoras` = ?,
	             `fechaAlquiler`=?,
	             `vehiculo`=?,
	             `cliente`=?,`fechaEntrega`=? WHERE idRenta=?";

				$stmt = $conexion->prepare($query);
				$stmt->bindParam(1, $this->horas);
				$stmt->bindParam(2, $this->diaIngreso);
				$stmt->bindParam(3, $this->idVeh);
				$stmt->bindParam(4, $this->usuario);
				$stmt->bindParam(5, $this->diaRegreso);
				$stmt->bindParam(6, $this->idRenta);


				if($stmt->execute()){
					return "El alquiler fue modificado satisfactoriamente";
				}
				else{
					return "Mo se pudo moficiar el alquiler";
				}
			}
			catch(PDOException $exception){
				return "Error: ". $exception->getMessage();
			}
			
	}

	function eliminarAlquiler(){
		include 'lib/db_connect.php';
		 
		 try{
			$query = "DELETE FROM `RentaVehiculos`.AUTOS_RENTADOS
	         WHERE idRenta=?";

				$stmt = $conexion->prepare($query);
				$stmt->bindParam(1, $this->idRenta);


				if($stmt->execute()){
					return "El alquiler fue eliminado satisfactoriamente";
				}
				else{
					return "Mo se pudo eliminar el alquiler";
				}
			}
			catch(PDOException $exception){
				return "Error: ". $exception->getMessage();
			}
			
	}

	function getAlquileresSinDevolucion(){

		include 'lib/db_connect.php';
		 
	try{
		$query = "SELECT AR.idRenta, concat(V.modelo,' - ',V.anio) modelo, V.placa FROM `RentaVehiculos`.AUTOS_RENTADOS AR
JOIN `RentaVehiculos`.VEHICULOS V ON AR.vehiculo = V.idVehiculo
 LEFT JOIN `RentaVehiculos`.RENTAS_FINALIZADAS RF ON 
AR.idRenta = RF.autoRentado where RF.autoRentado is null and AR.cliente = ?";

	#return $result = $conexion->query($query);
		$stmt = $conexion->prepare($query);
		$stmt->bindParam(1, $this->usuario);

		if($stmt->execute()){
			return $stmt;
		}else{
			return "no existen rentas para ese cliente.";
		}
	}catch(PDOException $exception){
		return "Error: ". $exception->getMessage();
	}


	}

}
?>