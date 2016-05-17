<?php
include_once ("lib/Vehiculo.php");

	 $result;


	$vehiculo = new Vehiculo ();

	$result = $vehiculo->getVehiculoAnios();
	
	$html = "<option value=''>-- Años -- </option>";

foreach ( $result as $row ) {
	// code...
	$html .= "<option value=".$row ["anio"].">".$row ["anio"]."</option>";
}
echo $html;

?>