<?php
if($_GET){
	$placa = $_GET["p"];
	
}
include_once ("ServiciosPHP/lib/Vehiculo.php");

	?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modificar</title>
<!--
Holiday Template
http://www.templatemo.com/tm-475-holiday
-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/boostrap.css" rel="stylesheet">
  <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet"> 
  <link href="css/flexslider.css" rel="stylesheet"> 
  <link href="css/templatemo-style.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body class="tm-gray-bg">

  	<!-- Header -->
  	<div class="tm-header">
  		<div class="container">
  			<div class="row">
  				<div class="col-lg-4 col-md-4 col-sm-3 tm-site-name-container">
  					<a href="#" class="tm-site-name">Quindi-Car</a>	
  				</div>

	  			<div class="col-lg-8 col-md-8 col-sm-9">
	  				<div class="mobile-menu-icon">
		              <i class="fa fa-bars"></i>
		            </div>
	  				<nav class="tm-nav">
						<ul>
							<li><a href="index.php">Inicio</a></li>
							<li><a href="about.php">Nosotros</a></li>
							<li><a href="tours.php" class="active">Vehiculos</a></li>
							<?php
									session_start();
									if(isset($_SESSION["s_user"])){
										echo "<li><a href='alquileresCliente.php';>Mis alquileres</a></li>
										<li><a id='btnCerrarSesion' href='/Software-Final-master/ServiciosPHP/cerrarSesion.php'>Salir</a></li>";
									}elseif (isset($_SESSION["s_admin"])) {
										echo "<li><a href='administrador.php'>Administar</a></li>
										<li><a id='btnCerrarSesion' href='/Software-Final-master/ServiciosPHP/cerrarSesion.php'>Salir</a></li>
										";
									}else {
										echo "<li><a href='contact.php';>Registro</a></li>";
									}
							?>
						</ul>
					</nav>		
	  			</div>				
  			</div>
  		</div>	  	
  	</div>
	

	
	<!-- Banner -->
	<section class="tm-banner">
		<!-- Flexslider -->
		<div class="flexslider flexslider-banner">
		  <ul class="slides">
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Encuentra <span class="tm-yellow-text">El mejor</span> Vehiculo</h1>
					<p class="tm-banner-subtitle">Para ti</p>
				</div>
				<img src="img/banner-1.jpg" alt="Image" />	
		    </li>
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Gran<span class="tm-yellow-text">Calidad</span>!</h1>
					<p class="tm-banner-subtitle">Mejores Precios</p>	
				</div>
		      <img src="img/banner-2.jpg" alt="Image" />
		    </li>
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Disfruta <span class="tm-yellow-text">Las Ruedas</span> En tu vida</h1>
					<p class="tm-banner-subtitle">Alquila Tu Vehiculo</p>
				</div>
		      <img src="img/banner-3.jpg" alt="Image" />
		    </li>
		  </ul>
		</div>	
	</section>
 <section class="section-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Modificar un vehiculo</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>
			<div class="row">
				<!-- contact form -->
				<form action="ServiciosPHP/updateVehiculo.php" method="POST" class="tm-contact-form"  enctype="multipart/form-data">
					<div class="col-lg-6 col-md-6">
						<div id="google-map"></div>
						<div class="contact-social">
							<a href="#" class="tm-social-icon tm-social-facebook"><i class="fa fa-facebook"></i></a>
				      		<a href="#" class="tm-social-icon tm-social-dribbble"><i class="fa fa-dribbble"></i></a>
				      		<a href="#" class="tm-social-icon tm-social-twitter"><i class="fa fa-twitter"></i></a>
				      		<a href="#" class="tm-social-icon tm-social-instagram"><i class="fa fa-instagram"></i></a>
				      		<a href="#" class="tm-social-icon tm-social-google-plus"><i class="fa fa-google-plus"></i></a>
						</div>
					</div> <?php
					$vehiculo= new Vehiculo();
					$resultado =$vehiculo->getVehiculoPorId($placa);
					  foreach($resultado as $MostrarFila ) { 
					echo '
					<div class="col-lg-6 col-md-6 tm-contact-form-input">
					<div class="form-group">
							<input type="hidden" id="modificar_marcaVeh" class="form-control" placeholder="Marca" name="idVehiculo" value="'.$MostrarFila["idVehiculo"].'"></input>
						</div>
						<div class="form-group">
							<input type="text" id="modificar_marcaVeh" class="form-control" placeholder="Marca" name="marca" value="'.$MostrarFila["marca"].'"></input>
						</div>
						<div class="form-group">
							<input type="text" id="modificar_modeloVeh" class="form-control" value="'.$MostrarFila["modelo"].'" placeholder="Modelo" name="modelo"/>
						</div>
						<div class="form-group">
							<input type="text" id="modificar_tipoVeh" class="form-control" value="'.$MostrarFila["tipo"].'" placeholder="tipo" name="tipo"/>
						</div>						
						<div class="form-group">
							<input type="text" id="modificar_colorVeh" value="'.$MostrarFila["color"].'" class="form-control" rows="6" placeholder="Color" name="color"/>
						</div>						
						<div class="form-group">
							<input type="text" id="modificar_placaVeh" value="'.$MostrarFila["placa"].'" class="form-control" rows="6" placeholder="Placa" name="placa" />
						</div>
						<div class="form-group">
							<input type="text" id="modificar_kilometrajeVeh" value="'.$MostrarFila["kilometraje"].'" class="form-control" rows="6" placeholder="Kilometraje" name="kilometraje"/>
						</div>
						<div class="form-group">
							<input type="text" id="modificar_anioVeh" value="'.$MostrarFila["anio"].'" class="form-control" placeholder="año" name="anio"/>
						</div>
						<div class="form-group">
							<input type="text" id="modificar_capacidadVeh" value="'.$MostrarFila["capacidadPersonas"].'" class="form-control" placeholder="capacidad Persona" name="capacidad"/>
						</div>
						<div class="form-group">
							<input type="text" id="modificar_precioVeh" value="'.$MostrarFila["precioHora"].'" class="form-control" placeholder="Precio Hora" name="precio"/>
						</div>
						<div class="form-group">
							<input type="text" id="modificar_disponibilidadVeh" class="form-control" placeholder="disponibilidad" value="'.$MostrarFila["disponibilidad"].'" name="disponibilidad"/>
						</div>
						<div class="form-group">
							<input type="hidden" id="modificar_nomImg" class="form-control"  value="'.$MostrarFila["nombreImagen"].'" name="nomImg"/>
						</div>
						<div class="form-group">
							<input type="hidden" id="modificar_tipImg" class="form-control"  value="'.$MostrarFila["tipoImagen"].'" name="tipImg"/>
						</div>											
						<div class="form-group">
							<input  id="file_url" class="form-control" rows="6" type="file" name="imagen" placeholder="nombre Imagen" />
						</div> 
						<div class="form-group">
							<button class="tm-submit-btn" type="submit" id="btn-modificarVehs" name="submit">Modificar</button> 
						</div> 
                            ';
					  }
							?>         
					</div>
				</form>
			</div>			
		</div>
	</section>
    <footer class="tm-black-bg">
		<div class="container">
			<div class="row">
				<p class="tm-copyright-text">Copyright &copy; 2084 Your Company Name 
                
                | Designed by <a rel="nofollow" href="http://www.templatemo.com" target="_parent">templatemo</a></p>
			</div>
		</div>		
	</footer>
</body>
</html>