<?php
include_once ("lib/Libro.php");

	 $result;

if($_GET){


	$idLibro = "";
	$referencia = "";
	$precio = "";
	$autor = "";
	$titulo = $_GET["titulo"];
	$ISBN = "";
	$contenido = "";
	$descripcion = "";

	$libro = new Libro ($idLibro , $referencia , $precio , $autor, 
			$titulo , $ISBN  , $contenido , $descripcion);

	$result = $libro->getLibroTitulo();
	
	$html = "<table>
			<thead>
				<tr>
				
				<th>Nombre</th>
				<th>Autor</th>
				<th>Precio</th>
				<th>ISBN</th>
		
				</tr>
			</thead>

			<tbody>";

foreach ( $result as $row ) {
	// code...
	$html .= "<tr>";
	$html .= "<td>" . $row ["titulo"] . "</td>";
	$html .= "<td>" . $row ["autor"] . "</td>";
	$html .= "<td>" . $row ["precio"] . "</td>";	
	$html .= "<td>" . $row ["ISBN"] . "</td>";
	$html .= "</tr>";
}

	$html .= "</tbody>
			</table>";




echo $html;
}

else die("Usuario no registrado");



/*
 * tr = fila;
 * td = columna;
 */



?>