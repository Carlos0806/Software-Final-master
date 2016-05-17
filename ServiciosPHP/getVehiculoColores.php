<?php
include_once ("lib/Vehiculo.php");

	 $result;


	$vehiculo = new Vehiculo ();

	$result = $vehiculo->getVehiculoColores();
	
	$html = "<option value=''>-- Colores -- </option>";

foreach ( $result as $row ) {
	// code...
	$html .= "<option value=".$row ["color"].">".$row ["color"]."</option>";
}
echo $html;

?>