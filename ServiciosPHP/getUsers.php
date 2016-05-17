<?php

	include_once ("lib/usuario.php");

	$usuario = new Usuario();

	$result = $usuario->getUsers();

	/*
	tr = fila;
	td = columna;
	*/

	$html= "<tr> 
				<td>Cedula</td>
				<td>Name</td>
				<td>Age</td>
				<td>Username</td>
			</tr>";

	foreach ($result as $row) {
		# code...
		$html.= "<tr>";
		$html.= "<td>".$row["cedula"]."</td>";
		$html.= "<td>".$row["nombre"]."</td>";
		$html.= "<td>".$row["age"]."</td>";
		$html.= "<td>".$row["username"]."</td>";
		$html.= "</tr>";
	}

	echo $html;

?>