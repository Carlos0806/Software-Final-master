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

	echo "	<div class='col-lg-6'>
					<div class='tm-home-box-3'>
						<div class='tm-home-box-3-img-container2'>
							<img src='imagenesAutos/".$MostrarFila["nombreImagen"].".".$MostrarFila["tipoImagen"]."' alt='image' class='img-responsive2' style='float:left'>	
						</div>						
						<div class='tm-home-box-3-info'>
							<p class='tm-home-box-3-description'>Modelo:".$MostrarFila["modelo"]."<br>Placa: ".$MostrarFila["placa"]."<br>Kilometraje: ".$MostrarFila["kilometraje"]."Km</p>
					        <div class='tm-home-box-2-container2'>
					       
							<a href='#' class='tm-home-box-2-link'><i class='fa fa-heart tm-home-box-2-icon border-right'></i></a>
							<a  class='tm-home-box-2-link'><span value=".$MostrarFila["placa"]." class='tm-home-box-2-description box-3 BtnEliminar'>Eliminar</span></a>
							<a href='#' class='tm-home-box-2-link'><i class='fa fa-edit tm-home-box-2-icon border-left'></i></a>
						</div>
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