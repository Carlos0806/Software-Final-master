<?php
	include_once ("lib/Alquiler.php");
	include_once ("lib/usuario.php");
	include_once ("lib/Vehiculo.php");

$alquiler = new Alquiler ("", "", "","", "", "");

$result = $alquiler->getAlquileres();

$html = "<table>
			<thead>
				<tr>
				
				<th>Placa</th>
				<th>Modelo</th>
				<th>Año</th>
				<th>Fecha Petición</th>
				<th>Fecha Devolución</th>
				<th>Valor</th>
				<th>Eliminar</th>
				<th>Editar</th)
		
				</tr>
			</thead>

			<tbody>";

foreach ( $result as $row ) {
	// code...
	$fechaActual = time();
	$fechaAlquilerVeh = strtotime($row ["fechaAlquiler"]);
	$tiempoRestante = ($fechaAlquilerVeh - $fechaActual)/(60*60);

	if($tiempoRestante > 24){
		$html .= "<tr>";
		$html .= "<td>" . $row ["placa"] . "</td>";
		$html .= "<td>" . $row ["modelo"] . "</td>";
		$html .= "<td>" . $row ["anio"] . "</td>";	
		$html .= "<td>" . $row ["fechaAlquiler"] . "</td>";
		$html .= "<td>" . $row ["fechaEntrega"] . "</td>";
		$valor = $row ["precioHora"] * $row ["numeroHoras"];
		$html .= "<td>" . $valor  . "</td>";
		$html .= "<td><a href='#' class='tm-home-box-2-link BtnEliminarAlquiler' value=".$row["idRenta"]."><i class='glyphicon glyphicon-remove tm-home-box-2-icon border-left'></i></a></td>";
		$html .= "<td><a href='#modificacionAlquiler' id=".$row["idRenta"]." value=".$row["placa"]." class='tm-home-box-2-link BtnModificarAlquiler'><i value=".$row["idRenta"]." class='glyphicon glyphicon-pencil tm-home-box-2-icon border-left'></i></a></td>";
		$html .= "</tr>";
	}
}

	$html .= "</tbody>
			</table>";




echo $html;

?>