<?php
include_once ("lib/Vehiculo.php");

	 $result;


	$vehiculo = new Vehiculo ();

	$result = $vehiculo->getVehiculoPrecios();
	
	$html = "<option value=''>-- Precios hora-- </option>";

foreach ( $result as $row ) {
	// code...
	$html .= "<option value=".$row ["precioHora"].">".$row ["precioHora"]."</option>";
}
echo $html;

?>