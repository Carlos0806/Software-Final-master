<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>
<!--
Holiday Template
http://www.templatemo.com/tm-475-holiday
-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
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
<body>

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
							<li><a href="tours.php">Vehículos</a></li>
							<?php
									session_start();
									if(isset($_SESSION["s_user"])){
										echo "<li><a id='btnCerrarSesion' href='/Software-Final-master/ServiciosPHP/cerrarSesion.php'>Cerrar sesión</a></li>";
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
					<h1 class="tm-banner-title">Un <span class="tm-yellow-text">viaje</span> en familia</h1>
					<p class="tm-banner-subtitle">Para tus vacaciones</p>
					<a href="#more" class="tm-banner-link">leer mas</a>	
				</div>
		      <img src="img/banner-3.jpg" />
		    </li>
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Encuentra <span class="tm-yellow-text">tu </span>vehículo</h1>
					<p class="tm-banner-subtitle">Para seguir tu destino</p>
					<a href="#more" class="tm-banner-link">Learn More</a>	
				</div>
		      <img src="img/banner-2.jpg" />
		    </li>
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Recorre<span class="tm-yellow-text">el</span> mundo</h1>
					<p class="tm-banner-subtitle">Se el dueño de tu camino</p>
					<a href="#more" class="tm-banner-link">Learn More</a>	
				</div>
		      <img src="img/banner-1.jpg" />
		    </li>		    
		  </ul>
		</div>	
	</section>

	<!-- gray bg -->	
	<section class="container tm-home-section-1" id="more">
		<div class="row">
			<!-- slider -->
			<div class="flexslider effect2 effect2-contact tm-contact-box-1">
				<ul class="slides">
					<li>
						<img src="img/viaje-carro.jpg" alt="image" class="contact-image" />
						<div class="contact-text">
							<h2 class="slider-title">El mundo es tuyo</h2>
							<h3 class="slider-subtitle">Ya sea sólo, o en familia, te mereces un transporte acorde a tu grandeza</h3>
							<p class="slider-description">Vehiler te permite disfrutar del vehiculo que siempre has querido. Permitenos demostrarte la gran calidad de nuestro servicio, y haz de cada uno de tus viajes una experiencia inolvidable</p>
							<div class="slider-social">
								<a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
								<a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
								<a href="#" class="tm-social-icon"><i class="fa fa-pinterest"></i></a>
								<a href="#" class="tm-social-icon"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>			      
					</li>
				</ul>
			</div>
		</div>
	</section>		
	
	<!-- white bg -->
	<section class="section-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<?php
						if(isset($_SESSION["s_admin"])){
							echo "<div class='col-lg-4 col-md-6 col-sm-6'><h2 class='tm-section-title'>Registrar usuario</h2></div>";
						}else{
							echo "<div class='col-lg-4 col-md-6 col-sm-6'><h2 class='tm-section-title'>Registrate</h2></div>";
						}
					?>
					
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>
			<div class="row">
				<!-- contact form -->
				<form action="#" method="post" class="tm-contact-form">
					<div class="col-lg-6 col-md-6">
						<img src="img/registrar-01.png" alt="image"  width="60%" height="60%">
						
					</div> 
					<div class="col-lg-6 col-md-6 tm-contact-form-input">
						<div class="form-group">
							<input type="text" id="registro_name" class="form-control" placeholder="Nombre" />
						</div>
						<div class="form-group">
							<input type="text" id="registro_cedula" class="form-control" placeholder="Cedula" />
						</div>
						<div class="form-group">
							<input type="text" id="registro_direccion" class="form-control" placeholder="Dirección" />
						</div>
						<div class="form-group">
							<input type="text" id="registro_username" class="form-control" placeholder="Nombre de usuario" />
						</div>
						<div class="form-group">
							<input type="password" id="registro_pass" class="form-control" placeholder="Contraseña" />
						</div>
						<div class="form-group">
							<input type="password" id="registro_pass2" class="form-control" rows="6" placeholder="Repetir contraseña" />
						</div>
						<div class="form-group">
							<input type="text" id="registro_numLicencia" class="form-control" rows="6" placeholder="Número de licencia" />
						</div>
						<div class="form-group">
							<input type="text" id="registro_telefono" class="form-control" rows="6" placeholder="Telefono" />
						</div>
						<div class="form-group">
							<button class="tm-submit-btn" id="btn-regUser" type="submit" name="submit">Registrar</button> 
						</div>               
					</div>
				</form>
			</div>			
		</div>
	</section>
	<?php
		if(isset($_SESSION["s_admin"])){							
	?>
	<section class="section-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Registar Administrador</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>
			<div class="row">
				<!-- contact form -->
				<form action="#" method="post" class="tm-contact-form">
					<div class="col-lg-6 col-md-6">
						<img src="img/registrar-02.png" alt="image"  width="60%" height="60%">
						
					</div> 
					<div class="col-lg-6 col-md-6 tm-contact-form-input">
						<div class="form-group">
							<input type="text" id="registro_name-A" class="form-control" placeholder="Nombre" />
						</div>
						<div class="form-group">
							<input type="text" id="registro_cedula-A" class="form-control" placeholder="Cedula" />
						</div>
						<div class="form-group">
							<input type="text" id="registro_direccion-A" class="form-control" placeholder="Dirección" />
						</div>
						<div class="form-group">
							<input type="text" id="registro_username-A" class="form-control" placeholder="Nombre de usuario" />
						</div>
						<div class="form-group">
							<input type="password" id="registro_pass-A" class="form-control" placeholder="Contraseña" />
						</div>
						<div class="form-group">
							<input type="password" id="registro_pass2-A" class="form-control" rows="6" placeholder="Repetir contraseña" />
						</div>
						<div class="form-group">
							<input type="text" id="registro_numLicencia-A" class="form-control" rows="6" placeholder="Número de licencia" />
						</div>
						<div class="form-group">
							<input type="text" id="registro_telefono-A" class="form-control" rows="6" placeholder="Telefono" />
						</div>
						<div class="form-group">
							<button class="tm-submit-btn" id="btn-regAdmin" type="submit" name="submit">Registrar</button> 
						</div>               
					</div>
				</form>
			</div>			
		</div>
	</section>
	<?php
		} else{

		}							
	?>



	<footer class="tm-black-bg">
		<div class="container">
			<div class="row">
				<p class="tm-copyright-text">Copyright &copy; 2016 Vehiler 
                
                | Diseñado por <a rel="nofollow" href="http://www.templatemo.com" target="_parent">Montaño-Tapasco-Escobar-Montealegre-Riaño</a></p>
			</div>
		</div>		
	</footer>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      		<!-- jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>					<!-- bootstrap js -->
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>			<!-- flexslider js -->
	<script type="text/javascript" src="js/templatemo-script.js"></script>
	<script type="text/javascript" src="js/ownjs.js"></script>      		<!-- Templatemo Script -->
	<script>
		/* Google map
      	------------------------------------------------*/
      	var map = '';
      	var center;

      	function initialize() {
	        var mapOptions = {
	          	zoom: 14,
	          	center: new google.maps.LatLng(37.769725, -122.462154),
	          	scrollwheel: false
        	};
        
	        map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

	        google.maps.event.addDomListener(map, 'idle', function() {
	          calculateCenter();
	        });
        
	        google.maps.event.addDomListener(window, 'resize', function() {
	          map.setCenter(center);
	        });
      	}

	    function calculateCenter() {
	        center = map.getCenter();
	    }

	    function loadGoogleMap(){
	        var script = document.createElement('script');
	        script.type = 'text/javascript';
	        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
	        document.body.appendChild(script);
	    }
	
      	// DOM is ready
		$(function() {

			// https://css-tricks.com/snippets/jquery/smooth-scrolling/
			$('a[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					if (target.length) {
						$('html,body').animate({
							scrollTop: target.offset().top
						}, 1000);
						return false;
					}
				}
			});

		  	// Flexslider
		  	$('.flexslider').flexslider({
		  		controlNav: false,
		  		directionNav: false
		  	});

		  	// Google Map
		  	loadGoogleMap();
		  });
	</script>

</body>
</html>
