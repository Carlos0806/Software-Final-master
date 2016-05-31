<?php
	include_once ("lib/Alquiler.php");
	include_once ("lib/usuario.php");
	include_once ("lib/Vehiculo.php");

if($_GET){

$cedula = $_GET["cedula"];

$alquiler = new Alquiler ("", "", "","", $cedula, "");

$result = $alquiler->getAlquileresSinDevolucion();

$html = "<h3>Alquileres sin devolucion</h3>
		<br>
			<table>
			<thead>
				<tr>
				<th>Modelo</th>
				<th>Placa</th>
				<th>Devolver</th)
				</tr>
			</thead>
			<tbody>";

foreach ( $result as $row ) {
	
		$html .= "<tr>";
		$html .= "<td>" . $row ["modelo"] . "</td>";
		$html .= "<td>" . $row ["placa"] . "</td>";
		$html .= "<td><a href='#modificacionAlquiler2' id=".$row["idRenta"]." value=".$row["placa"]." class='tm-home-box-2-link BtnRegDevolucion'><i value=".$row["idRenta"]." class='glyphicon glyphicon-pencil tm-home-box-2-icon border-left'></i></a></td>";
		$html .= "</tr>";
}
	$html .= "</tbody>
			</table>";




echo $html;
}else{
	echo "murio";
}

?>