<?php
include 'lib/persona.php';
class Usuario extends Persona{

	private $username;
	private $direccion;
	private $numLicencia;
	private $telefono;
	private $pass;
	private $horasRentadas;

	function Usuario($cedula = 'def', $nombre = 'def', $pass = 'def', $direccion = 'def', $username = 'def', $numLicencia = 'def', $telefono = 'def'){

		$this->username = $username;
		$this->direccion = $direccion;
		$this->username = $username;
		$this->numLicencia = $numLicencia;
		$this->telefono = $telefono;
		$this->pass = crypt($pass, "salt");
		$this->horasRentadas = 0;
		parent::Persona($cedula, $nombre);
	}


	function getData(){
		return $this->cedula." : ".$this->name." : ".$this->edad." : ".$this->username;
	}

	function getUsers(){
		include 'lib/db_connect.php';
		$query = "SELECT * from users";
		$result = $conexion->query($query);

		return $result;
	}

	function registrarUsuario(){
		try{
			include 'lib/db_connect.php';

			$query = "insert INTO `RentaVehiculos`.CLIENTES  SET cedula = ?, nombre = ?, licencia = ?,telefono = ?, direccionActual = ?, horasRentadas = ?, contrasenia= ?, username = ?";

			$stmt = $conexion->prepare($query);
			$stmt->bindParam(1, $this->cedula);
			$stmt->bindParam(2, $this->name);
			$stmt->bindParam(3, $this->numLicencia);
			$stmt->bindParam(4, $this->telefono);
			$stmt->bindParam(5, $this->direccion);
			$stmt->bindParam(6, $this->horasRentadas);
			$stmt->bindParam(7, $this->pass);
			$stmt->bindParam(8, $this->username);

			echo("Contraseña: " . $this->cedula);
			echo("Nombre: ".$this->name);
			echo("Licencia: ".$this->numLicencia);
			echo("Telefono: ".$this->telefono);
			echo("Direccion: ".$this->direccion);
			echo("HorasRentadas: ".$this->horasRentadas);
			echo("Contra: ".$this->pass);
			echo("Username: ".$this->username);

			echo $query;

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

	function modificarUsuario(){

		try{

			include 'lib/db_connect.php';

			$query = "UPDATE users SET cedula = ?, nombre = ?, email = ?, username = ?, password= ?, numCuenta = ?, tipoCuenta = ? WHERE cedula = ?";

			$stmt = $conexion->prepare($query);


			$stmt->bindParam(1, $this->cedula);
			$stmt->bindParam(2, $this->name);
			$stmt->bindParam(3, $this->email);
			$stmt->bindParam(4, $this->username);
			$stmt->bindParam(5, $this->pass);
			$stmt->bindParam(6, $this->numCuenta);
			$stmt->bindParam(7, $this->tipoCuenta);
			$stmt->bindParam(8, $this->cedula);

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

	function eliminarUsuario(){

		try {

			include 'lib/db_connect.php';

			$query = "DELETE FROM users WHERE cedula = ?";

			$stmt = $conexion->prepare($query);

			$stmt->bindParam(1, $this->cedula);

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

	function iniciarSesion(){

		try{
			include 'lib/db_connect.php';

			$query = "SELECT tipoUsuario FROM `RentaVehiculos`.CLIENTES WHERE username = ? AND contrasenia = ?";

			$stmt = $conexion->prepare($query);

			$stmt->bindParam(1, $this->username);
			$stmt->bindParam(2, $this->pass);

			if($stmt->execute()){
				return $stmt;
			}
			else{
				return null;
			}

		}
		catch(PDOException $exception){
			return "Error: ". $exception->getMessage();
		}
	}

	function getUsuarioPorUsername(){

		try{
			include 'lib/db_connect.php';

			$query = "SELECT cedula FROM `RentaVehiculos`.CLIENTES WHERE username = ?";

			$stmt = $conexion->prepare($query);

			$stmt->bindParam(1, $this->username);

			if($stmt->execute()){
				$ced="";
				foreach ($stmt as $row ) {
					// code...
					$ced .= $row ["cedula"];
				}
				return $ced;
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