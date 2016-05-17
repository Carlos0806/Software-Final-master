<?php
class evaluacion {

	private $idcalificacion;
	private $usuarioCedula;
	private $libro;
	private $calificacion;
	private $nombre;

	function evaluacion($usuarioCedula = 'def', $libro = 'def', $calificacion = 'def',$nombre = 'def'){
		$this->usuarioCedula=$usuarioCedula;
		$this->libro=$libro;
		$this->calificacion=$calificacion;
		$this->nombre=$nombre;

	}
	function createEvalucaion(){
		include 'lib/db_connect.php';
		 
		$query = "INSERT INTO `calificaciones`
            (`calificacion`,
             `libro`,
             `cedulaUsuario`,`nombreUsuario`)
				VALUES (?,?,?,?)";
		/*
		echo $this->nombre; 
		echo "</br>";
		echo $this->usuarioCedula; 
		echo "</br>";
		echo $this->libro;
		echo "</br>";
		echo $this->calificacion;
		echo "</br>";
		*/
			$stmt = $conexion->prepare($query);
			//$cosito = usuario;
			$stmt->bindParam(1, $this->calificacion);
			$stmt->bindParam(2, $this->libro);
			$stmt->bindParam(3, $this->usuarioCedula);
			$stmt->bindParam(4, $this->nombre);
			if($stmt->execute()){
				return "Su calificacion fue guardada con exito.";
			}
			else{
				return "Su calificacion no se pudo guardar, intentelo de nuevo.";
			}
			
	}
}