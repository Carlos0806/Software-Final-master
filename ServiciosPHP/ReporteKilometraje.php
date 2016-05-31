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
    <td colspan="6" ><CENTER><strong>REPORTE POR KILOMETRAJE</strong></CENTER></td>
  </tr>
  <tr >
    <td><strong>KILOMETRAJE</strong></td>
    <td><strong>PLACA</strong></td>
	<td><strong>MODELO</strong></td>
    <td><strong>MARCA</strong></td>
	<td><strong>TIPO</strong></td>
    
  
  </tr>';
	
	// CONSULTA PARA METER A LA TABLA SOLO CON 2 VARIABLES
	$query = "SELECT * from `RentaVehiculos`.VEHICULOS order by kilometraje asc
			";
	$result = $conexion->query ( $query );
	// ese ciclo se le concatena por que es el resultado de la tabla
	foreach ( $result as $row ) {
		// este es un ejemplo de lo que debe incluir el codigo html los resultados de la tabla
		// como esta en el ejemplo solo puse 2 por ejemplo
		
		$codigoHTML.='	
	<tr>
		<td>'.$row['kilometraje'].'</td>
		<td>'.$row['placa'].'</td>
		<td>'.$row['modelo'].'</td>
		<td>'.$row['marca'].'</td>
		<td>'.$row['tipo'].'</td>
												
	</tr>';
	}
	
	
	
	
	$codigoHTML .= '
	<div id="terms">
		  <h5>REPORTE Quindi-Car</h5>
		  <textarea>REPORTE PARA ESTABLECER LOS AUTOS QUE TIENEN QUE SER REVISADOS</textarea>
		 
		</div>
</table>
</body>
</html>';
	
	// se pone el codigo para generar el pdf
	$codigoHTML = utf8_encode ( $codigoHTML );
	$dompdf = new DOMPDF ();
	$dompdf->load_html ( $codigoHTML );
	ini_set ( "memory_limit", "128M" );
	$dompdf->render ();
	$dompdf->stream ( "Reporte_Kilometraje.pdf" );
	
	// el boton para mostrar el reporte debe llevar esta clase


?>
