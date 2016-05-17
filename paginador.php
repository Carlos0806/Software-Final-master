<?php
include_once"ServiciosPHP/lib/Vehiculo.php";
$vehiculo= new Vehiculo;
$RegistrosAMostrar=8;

//estos valores los recibo por GET
if(isset($_GET['pag'])){
    $RegistrosAEmpezar=($_GET['pag']-1)*$RegistrosAMostrar;
    $PagAct=$_GET['pag'];
    //caso contrario los iniciamos
}else{
    $RegistrosAEmpezar=0;
    $PagAct=1;
}


 

$Resultado=$vehiculo->getVehiculo($RegistrosAEmpezar, $RegistrosAMostrar);

foreach($Resultado as $MostrarFila ) {   
  
   echo"  
    <div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>

					<div class='tm-tours-box-1'>
					<img src=' imagenesAutos/".$MostrarFila["nombreImagen"].".".$MostrarFila["tipoImagen"]."' alt='image' class='img-responsive' style= background-size= '200px' heigth = '100'>
						
						<div class='tm-tours-box-1-info'>
							<div class='tm-tours-box-1-info-left'>
								<p class='text-uppercase margin-bottom-20'>".$MostrarFila["marca"]." ". $MostrarFila["color"]."</p>	
								<p class='gray-text'>".$MostrarFila["anio"]."</p>
							</div>
							<div class='tm-tours-box-1-info-right'>
								<p class='gray-text tours-1-description'> Modelo:".$MostrarFila["modelo"]."<br>Placa: ".$MostrarFila["placa"]."<br>Kilometraje: ".$MostrarFila["kilometraje"]."Km</p>	
							</div>							
						</div>

						<div class='tm-tours-box-1-link'>
							<div class='tm-tours-box-1-link-left'>
								Personas: ".$MostrarFila["capacidadPersonas"]."
							</div>
							<a href='#alquiler' value=".$MostrarFila["placa"]." aria-controls='alquiler' class='tm-tours-box-1-link-right BtnElegirAuto'>
								$".$MostrarFila["precioHora"]."							
							</a>							
						</div>
					</div>					
			
	</div>";
}



				

   

//numero de archivos totales ahy que hacer una consulta que obtenga el total de los vehiculos
$total=$vehiculo->getTotalVehiculo();
foreach ($total as $tol) {
   $NroRegistros = $tol["Total"];
}
$PagAnt=$PagAct-1;
$PagSig=$PagAct+1;
$PagUlt=$NroRegistros/$RegistrosAMostrar;

//verificamos residuo para ver si llevará decimales
$Res=$NroRegistros%$RegistrosAMostrar;
// si hay residuo usamos funcion floor para que me
// devuelva la parte entera, SIN REDONDEAR, y le sumamos
// una unidad para obtener la ultima pagina
if($Res>0) $PagUlt=floor($PagUlt)+1;

//desplazamiento
echo "<a onclick=\"Pagina('1')\">Primero</a> ";
if($PagAct>1) echo "<a onclick=\"Pagina('$PagAnt')\">Anterior</a> ";
echo "<strong>Pagina ".$PagAct."/".$PagUlt."</strong>";
if($PagAct<$PagUlt)  echo " <a onclick=\"Pagina('$PagSig')\">Siguiente</a> ";
echo "<a onclick=\"Pagina('$PagUlt')\">Ultimo</a>";
?>