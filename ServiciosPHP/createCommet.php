<?php

include_once ("lib/Comentario.php");
include_once("lib/Libro.php");

if($_GET){

	
	$comentario = $_GET["comentario"];
	$titulo = $_GET["tituloLibro"];
	$nombreUsuario = $_GET["nombreUsuario"];
	$cedulaUsuario = $_GET["cedulaUsuario"];
	$libro = new libro("", "","", 
			"",$titulo, "", "", "");

	$result= $libro -> getLibroTitulo();

	foreach ( $result as $row ) {

		$idLibro = $row["idLibro"];

	}


	$coment = new Comentario($comentario, $idLibro, $nombreUsuario, $cedulaUsuario);

	echo $coment->crearComent();
	//echo "hola";
}

else die("Comentario no creado");

?>