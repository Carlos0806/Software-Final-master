<?php
include_once ("lib/Vehiculo.php");

	 $result;


	$vehiculo = new Vehiculo ();

	$result = $vehiculo->getVehiculoTipos();
	
	$html = "<option value=''>-- Tipos -- </option>";

foreach ( $result as $row ) {
	// code...
	$html .= "<option value=".$row ["tipo"].">".$row ["tipo"]."</option>";
}
echo $html;

?>