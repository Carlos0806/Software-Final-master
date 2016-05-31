<?php
	include_once ("lib/Alquiler.php");
	include_once ("lib/usuario.php");
	include_once ("lib/Vehiculo.php");

session_start();
$username = $_SESSION["s_user"];

$usuario = new Usuario("", "", "", "", $username, "", "");

$cedula = $usuario->getUsuarioPorUsername();

$alquiler = new Alquiler ("", "", "","", $cedula, "");

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
		
				</tr>
			</thead>

			<tbody>";

foreach ( $result as $row ) {
	// code...
	$fechaActual = time();
	$fechaAlquilerVeh = strtotime($row ["fechaAlquiler"]);
	$tiempoRestante = ($fechaAlquilerVeh - $fechaActual)/(60*60);

	if($tiempoRestante <= 24){
		$html .= "<tr>";
		$html .= "<td>" . $row ["placa"] . "</td>";
		$html .= "<td>" . $row ["modelo"] . "</td>";
		$html .= "<td>" . $row ["anio"] . "</td>";	
		$html .= "<td>" . $row ["fechaAlquiler"] . "</td>";
		$html .= "<td>" . $row ["fechaEntrega"] . "</td>";
		$valor = $row ["precioHora"] * $row ["numeroHoras"];
		$html .= "<td>" . $valor  . "</td>";
		$html .= "</tr>";
	}
}

	$html .= "</tbody>
			</table>";




echo $html;

?>