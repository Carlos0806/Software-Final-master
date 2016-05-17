<?php
include_once ("lib/Vehiculo.php");

	 $result;


	$vehiculo = new Vehiculo ();

	$result = $vehiculo->getVehiculoMarcas();
	
	$html = "<option value=''>-- Marcas -- </option>";

foreach ( $result as $row ) {
	// code...
	$html .= "<option value=".$row ["marca"].">".$row ["marca"]."</option>";
}
echo $html;

?>