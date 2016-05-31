<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>reporte</title>
</head>
		<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="6" ><CENTER><strong>REPORTE POR KILOMETRAJE</strong></CENTER></td>
  </tr>
  <tr >
    <td><strong>CEDULA</strong></td>
    <td><strong>NOMBRE</strong></td>
	<td><strong>PLACA</strong></td>
    <td><strong>MODELO</strong></td>
	<td><strong>FECHA ALQUILER</strong></td>
    <td><strong>FECHA ENTREGA</strong></td>
  </tr>
	
	<?php
	include 'lib/db_connect.php';
	//$fecha1 = $_POST["fecha1"];	
	//$fecha2 = $_POST["fecha2"];

	$query = "SELECT C.cedula,C.nombre,V.placa,concat(V.modelo,' ',V.ANIO)modelo,AR.fechaAlquiler, AR.fechaEntrega 
			FROM RentaVehiculos.AUTOS_RENTADOS AR JOIN `RentaVehiculos`.VEHICULOS V ON V.IDVEHICULO = AR.VEHICULO
			JOIN `RentaVehiculos`.CLIENTES C ON C.CEDULA = AR.CLIENTE";

	$result = $conexion->query($query);
	echo $result;
	foreach ( $result as $row ){
				echo '<tr>
						<td><'.$row['cedula'].'</td>
						<td><'.$row['nombre'].'</td>
						<td>'.$row['placa'].'</td>
						<td>'.$row['modelo'].'</td>
						<td><'.$row['fechaAlquiler'].'</td>
						<td><'.$row['fechaEntrega'].'</td>									
					</tr>';
	}
	?>
	
	<div id="terms">
		  <h5>REPORTE Quindi-Car</h5>
		  <textarea>REPORTE DE LOS ALQUILERES ENTRE FECHAS </textarea>
		 
		</div>
</table>
</body>
</html>