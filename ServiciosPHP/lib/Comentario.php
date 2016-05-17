<?php

class Comentario {


	protected $comentario;
	protected $libro;
	protected $nombreUsuario;
	protected $cedulaUsuario;


	function Comentario($comentario = 'def', $libro = 'def', $nombreUsuario = 'def', $cedulaUsuario = 'def'){
		$this->comentario = $comentario;
		$this->libro = $libro;
		$this->nombreUsuario = $nombreUsuario;
		$this->cedulaUsuario = $cedulaUsuario;
	}

	function getData(){
		return $this->idComentario." : ".$this->comentario." : ".$this->libro." : ".$this->usuario;
	}

	function getComentario(){
		include 'lib/db_connect.php';
		$query = "SELECT * from comentarios";
		$result = $conexion->query($query);

		return $result;
	}

	function crearComent(){
		try{
			include 'lib/db_connect.php';

			$query = "INSERT INTO `comentarios`
            (`comentario`,
             `cedulaUsuario`,
             `nombreUsuario`,`libro`)
				VALUES (?,?,?,?)";

			$stmt = $conexion->prepare($query);

			$stmt->bindParam(1, $this->comentario);
			$stmt->bindParam(2, $this->cedulaUsuario);
			$stmt->bindParam(3, $this->nombreUsuario);
			$stmt->bindParam(4, $this->libro);

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

	function modificarComent(){

		try{

			include 'lib/db_connect.php';

			$query = "UPDATE comentarios set comentario = ?, libro = ?, usuario = ? WHERE idComentario = ?";

			$stmt = $conexion->prepare($query);


			$stmt->bindParam(1, $this->idComentario);
			$stmt->bindParam(2, $this->comentario);
			$stmt->bindParam(3, $this->libro);
			$stmt->bindParam(4, $this->usuario);
			

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

	function eliminarComent(){

		try {

			include 'lib/db_connect.php';

			$query = "DELETE FROM comentarios WHERE idComentario = ?";

			$stmt = $conexion->prepare($query);

			$stmt->bindParam(1, $this->idComentario);

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

}

?>