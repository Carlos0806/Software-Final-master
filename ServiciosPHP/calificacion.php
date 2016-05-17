<?php
include 'lib/usuario.php';
include 'lib/libro.php';
include 'lib/evaluacion.php';
include 'lib/db_connect.php';

 
if($_GET){
	$cedula = $_GET["cedula"];
	$usuario = $_GET["usuario"];
	$titulo = $_GET["titulo"];
	$calificacion = $_GET["estrellas"];
	$libro = new libro("", "","", 
			"",$titulo, "", "", "");
		$result= $libro -> getLibroTitulo();
		foreach ( $result as $row ) {
			$idLib = $row ["idLibro"];
		}
		$evaluacion = new evaluacion($cedula, $idLib, $calificacion,$usuario);
		$evaluacion->createEvalucaion();
	}
else die("Calificacion no registrado no envio nada");


?>