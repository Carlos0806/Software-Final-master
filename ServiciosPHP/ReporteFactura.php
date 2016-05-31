<?php

	// libreria para pasar a pdf
	 include_once("dompdf/dompdf_config.inc.php");
	
	
	include_once ("lib/Alquiler.php");
	include_once ("lib/usuario.php");
	include_once ("lib/Vehiculo.php");
	
	

	$placaVeh = $_POST["placa"];
	$diaIngreso = $_POST["fechaIni"];
	$diaRegreso = $_POST["fechaFin"];
	$usuario = $_POST["user"];
	$usuarioNom = $usuario;

	$fechaIni = strtotime($diaIngreso);
	$fechaFin = strtotime($diaRegreso);
	$horas = ($fechaFin - $fechaIni)/(60*60);
	
	
	
	if($horas>0){
		$usuario = new Usuario("", "", "", "", $usuario, "", "");
		$vehiculo = new Vehiculo($placaVeh, "", "", "", 
				"", "", "", "", "");
				

		$cedula = $usuario->getUsuarioPorUsername();
		$idVehiculo = $vehiculo->getVehiculoPorPlaca();
		$precioHora = $vehiculo->getPrecioHora();
		$modelo = $vehiculo->getModelo();
		$color = $vehiculo->getColor();
		$anio = $vehiculo->getAnio();
		
		$valor = $precioHora*$horas;
		$descuento =0;
		if($horas>=100){
			$descuento=$valor*0.2;
		}
		
		$valorTotal=$valor-$descuento;
		
		
		$alquiler = new Alquiler($idVehiculo, $diaIngreso, $diaRegreso,$horas, $cedula);
		
		
		$resultado = $alquiler->registrarAlquiler();
		

		echo $resultado;
	}

	else{
		header('Location:../tours.php?ds=2');
		
	}
	
	//include "lib/db_connect.php";
	
	
	
	// en esta variable va el codigo html de la tabla que se va a mostrar y la libreria pone todo
	// en pdf y al final solo muestra la tabla de resultados en pdf
	
	// CONSULTA PARA METER A LA TABLA SOLO CON 2 VARIABLES
// 	$query = "SELECT CLIENTES.cedula, AUTOS_RENTADOS.idRenta
// 			FROM RentaVehiculos.CLIENTES LEFT join
// 			RentaVehiculos.AUTOS_RENTADOS on CLIENTES.cedula = AUTOS_RENTADOS.cliente 
// 			WHERE CLIENTES.cedula ='231312' AND AUTOS_RENTADOS.idRenta =1
// 			";
// 	$result = $conexion->query ( $query );
	
// 	$cedula=null;
// 	$idRenta=null;
// foreach ( $result as $row ) {
// 		$cedula=$row['cedula'];
// 		$idRenta=$row['idRenta'];
// 	}
	
	
	
	$codigoHTML = '
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Factura Alquiler</title>
	
	<link rel="stylesheet" type="text/css" href="../css/styleReporte.css" />
	

</head>

<body>

	<div id="page-wrap">

		<textarea id="header">Factura de Alquiler</textarea>
		
		<div id="identity">

             <div id="logo">
              <div id="logohelp">
              </div>
              <img id="image" src="../img/logo1.png" alt="logo" />
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div>
		 
<BR> 
          <table id="meta">
                <tr>
                    <td class="meta-head">Usuario</td>
                    <td><textarea name="textarea">'.$usuarioNom.'</textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Cedula</td>
                    <td><textarea name="textarea">'.$cedula.'</textarea></td>
                </tr>
                
                 <tr>
                    <td class="meta-head">Fecha de peticion:</td>
                    <td><textarea name="textarea">'.$diaIngreso.'</textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Fecha de devolucion:</td>
                    <td><textarea id="date">'.$diaRegreso.'</textarea></td>
                </tr>
               

            </table>
		
		 
  
	  <table id="items">
		
		  <tr>
		      <th>Placa</th>
		      <th>Modelo</th>
		      <th>Color</th>
		      <th>Horas</th>
		      <th>Precio C/hora</th>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="item-name"><textarea>'.$placaVeh.'</textarea></td>
		      <td class="description"><textarea>'.$modelo.' '.$anio.'</textarea></td>
		      <td align="center"><textarea class="qty">'.$color.'</textarea></td>
		      <td align="center"><textarea class="qty">'.$horas.'</textarea></td>
		      <td><span class="price">'.$precioHora.'</span></td>
		  </tr>
	  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Valor</td>
		      <td class="total-value"><div id="subtotal">'.$valor.'</div></td>
		  </tr>
          <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Descuento</td>

		      <td class="total-value"><textarea id="paid">'.$descuento.'</textarea></td>
		  </tr>
		 
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Valor Total</td>
		      <td class="total-value balance"><div class="due">'.$valorTotal.'</div></td>
		  </tr>
		
		</table>
		
		<div id="terms">
		  <h5>Terminos Quindi-Car</h5>
		  <textarea>Esta factura es valida hasta 72 horas despues de su impresion</textarea>
		 
		</div>
	
	</div>
	
</body>

</html>';
	
	// se pone el codigo para generar el pdf
	$codigoHTML = utf8_encode ( $codigoHTML );
	$dompdf = new DOMPDF ();
	$dompdf->load_html ( $codigoHTML );
	ini_set ( "memory_limit", "128M" );
	$dompdf->render ();
	$dompdf->stream ( "Reporte_factura.pdf" );
	
	// el boton para mostrar el reporte debe llevar esta clase
	


 
	header('Location:../tours.php?ds=1');
?>
