<?php

	// libreria para pasar a pdf
	require_once ("dompdf/dompdf_config.inc.php");
	include "lib/db_connect.php";
	

	
	// en esta variable va el codigo html de la tabla que se va a mostrar y la libreria pone todo
	// en pdf y al final solo muestra la tabla de resultados en pdf
	
	$codigoHTML = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reporte Kilometraje</title>
</head>
		<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="6" ><CENTER><strong>REPORTE DE LOS ALQUILERES</strong></CENTER></td>
  </tr>
  <tr >
    <td><strong>CEDULA</strong></td>
    <td><strong>NOMBRE</strong></td>
	<td><strong>PLACA</strong></td>
    <td><strong>MODELO</strong></td>
	<td><strong>FECHA ALQUILER</strong></td>
    <td><strong>FECHA ENTREGA</strong></td>
  </tr>';
	
	// CONSULTA PARA METER A LA TABLA SOLO CON 2 VARIABLES
	$query = "SELECT C.cedula,C.nombre,V.placa,concat(V.modelo,' ',V.ANIO)modelo,AR.fechaAlquiler, AR.fechaEntrega 
			FROM RentaVehiculos.AUTOS_RENTADOS AR JOIN `RentaVehiculos`.VEHICULOS V ON V.IDVEHICULO = AR.VEHICULO
			JOIN `RentaVehiculos`.CLIENTES C ON C.CEDULA = AR.CLIENTE ";
	$result = $conexion->query ( $query );
	// ese ciclo se le concatena por que es el resultado de la tabla
	foreach ( $result as $row ) {
		// este es un ejemplo de lo que debe incluir el codigo html los resultados de la tabla
		// como esta en el ejemplo solo puse 2 por ejemplo
		
		$codigoHTML.='	
	<tr>
		<td>'.$row['cedula'].'</td>
		<td>'.$row['nombre'].'</td>
		<td>'.$row['placa'].'</td>
		<td>'.$row['modelo'].'</td>
		<td>'.$row['fechaAlquiler'].'</td>
		<td>'.$row['fechaEntrega'].'</td>
												
	</tr>';
	}
	
	
	
	
	$codigoHTML .= '
	<div id="terms">
		  <h5>REPORTE Quindi-Car</h5>
		  <textarea>REPORTE DE LOS ALQUILERES  </textarea>
		 
		</div>
</table>
</body>
</html>';
	
	// se pone el codigo para generar el pdf
	$codigoHTML = utf8_encode ( $codigoHTML );
	$dompdf = new DOMPDF ();
	$dompdf->load_html ( $codigoHTML );
	ini_set ( "memory_limit", "500M" );
	$dompdf->render ();
	$dompdf->stream ( "Reporte_Alquileres.pdf" );
	
	// el boton para mostrar el reporte debe llevar esta clase


?>
