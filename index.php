<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inicio</title>
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
  <body class="tm-gray-bg">
  	<!-- Header -->
  	<div class="tm-header">
  		<div class="container">
  			<div class="row">
  				<div class="col-lg-4 col-md-4 col-sm-2 tm-site-name-container">
  					<a href="#" class="tm-site-name">Quindi-Car</a>	
  				</div>
	  			<div class="col-lg-8 col-md-10 col-sm-10">
	  				<div class="mobile-menu-icon">
		              <i class="fa fa-bars"></i>
		            </div>
	  				<nav class="tm-nav">
						<ul>
							<li><a href="index.php" class="active">Inicio</a></li>
							<li><a href="about.php">Nosotros</a></li>
							<li><a href="tours.php">Vehiculos</a></li>
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

	<!-- gray bg -->	
	<section class="container tm-home-section-1" id="more">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6">
				<!-- Nav tabs -->
					<?php 
		  						

		  						if(!isset($_SESSION["s_user"]) && !isset($_SESSION["s_admin"])){
		  					?>
				<div style="text-align: center;" class="tm-home-box-1">

					<ul class="nav nav-tabs tm-white-bg" role="tablist" id="hotelCarTabs">
					    <li role="presentation" class="active">
					    	<a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab">Iniciar sesión.</a>
					    </li>
					    <!--
					    <li role="presentation">
					    	<a href="#car" aria-controls="car" role="tab" data-toggle="tab">Car Rental</a>
					    </li>
					    -->
					</ul>

					<!-- Tab panes -->
							
					<div  style="text-align: center;" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active tm-white-bg"id="hotel">
					    	<div class="tm-search-box effect2">
								<form action="/Software-Final-master/ServiciosPHP/iniciarSesion.php" method="post" class="hotel-search-form iniciarSesion">
									<div class="tm-form-inner">
										<div class="form-group">
												<input type="text" id="registro_name" name="registro_name" class="form-control" placeholder="Nombre" />
							          	</div>
							          	<div class="form-group">
							                   <input type="password" id="registro_pass" name="registro_pass" class="form-control" placeholder="Contraseña" />
							            </div>
									</div>							
						            <div style="background: white;" class="form-group tm-yellow-gradient-bg text-center">
						            	<button type="submit" name="submit" id="btnInicioSesion" class="tm-yellow-btn" >Inicia sesión</button>
						            </div>  
								</form>
							</div>
					    </div>
					    	<?php
					    } else{

					    }
					    ?>
					    				    
					</div>
				</div>								
			</div>
						<div style="text-align: center;">
				<img src="img/index-01.png" alt="image"  width="60%" height="60%">
			</div>

			</div>

		</div>
	
		<div class="section-margin-top">
			<div class="row">				
				<div class="tm-section-header">
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-6 col-md-6 col-sm-6"><h1 class="tm-section-title">SUCURSALES</h1></div>
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-home-box-2">						
						<img src="img/index-03.jpg" alt="image" class="img-responsive">
						<h1 style="text-align: center;">ARMENIA</h1>
						<p class="tm-date">Telefono: 321-475-4123</p>
						<p class="tm-date">Calle 10 Carrera 29</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-home-box-2">						
					    <img src="img/index-04.jpg" alt="image" class="img-responsive">
						<h1 style="text-align: center;">BOGOTÁ</h1>
						<p class="tm-date">Telefono: 314-763-4235</p>
						<p class="tm-date">Avenida Boyacá</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-home-box-2">						
					    <img src="img/index-05.jpg" alt="image" class="img-responsive">
						<h1 style="text-align: center;">CALI</h1>
						<p class="tm-date">Telefono: 318-005-4387</p>
						<p class="tm-date">Calle 14 Carrera 22</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-home-box-2 tm-home-box-2-right">						
					    <img src="img/index-06.jpg" alt="image" class="img-responsive">
						<h1 style="text-align: center;">MEDELLIN</h1>
						<p class="tm-date">Telefono: 300-566-6874</p>
						<p class="tm-date">Carrera 5 Transversal 16</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<p class="home-description">Quindi-Car, la mejor opción para rentar el vehículo de tus sueños.<a href="http://www.facebook.com/templatemo" target="_parent">contact us</a>. Credit goes to <a rel="nofollow" href="http://unsplash.com" target="_parent">Unspash</a> for images used in this template.</p>					
				</div>
			</div>			
		</div>
	</section>		
	
	<!-- white bg -->


	<footer class="tm-black-bg">
		<div class="container">
			<div class="row">
				<p class="tm-copyright-text">Copyright &copy; 2084 Your Company Name 
                
                | Designed by <a rel="nofollow" href="http://www.templatemo.com" target="_parent">templatemo</a></p>
			</div>
		</div>		
	</footer>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      		<!-- jQuery -->
  	<script type="text/javascript" src="js/moment.js"></script>							<!-- moment.js -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>					<!-- bootstrap js -->
	<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>	<!-- bootstrap date time picker js, http://eonasdan.github.io/bootstrap-datetimepicker/ -->
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<!--
	<script src="js/froogaloop.js"></script>
	<script src="js/jquery.fitvid.js"></script>
-->
   	<script type="text/javascript" src="js/templatemo-script.js"></script>  
   	<script type="text/javascript" src="js/ownjs.js"></script>         		<!-- Templatemo Script -->
	<script>
		// HTML document is loaded. DOM is ready.
		$(function() {

			$('#hotelCarTabs a').click(function (e) {
			  e.preventDefault()
			  $(this).tab('show')
			})

        	$('.date').datetimepicker({
            	format: 'MM/DD/YYYY'
            });
            $('.date-time').datetimepicker();

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
		});
		
		// Load Flexslider when everything is loaded.
		$(window).load(function() {	  		
			// Vimeo API nonsense

/*
			  var player = document.getElementById('player_1');
			  $f(player).addEvent('ready', ready);
			 
			  function addEvent(element, eventName, callback) {
			    if (element.addEventListener) {
			      element.addEventListener(eventName, callback, false)
			    } else {
			      element.attachEvent(eventName, callback, false);
			    }
			  }
			 
			  function ready(player_id) {
			    var froogaloop = $f(player_id);
			    froogaloop.addEvent('play', function(data) {
			      $('.flexslider').flexslider("pause");
			    });
			    froogaloop.addEvent('pause', function(data) {
			      $('.flexslider').flexslider("play");
			    });
			  }
*/

			 
			 
			  // Call fitVid before FlexSlider initializes, so the proper initial height can be retrieved.
/*

			  $(".flexslider")
			    .fitVids()
			    .flexslider({
			      animation: "slide",
			      useCSS: false,
			      animationLoop: false,
			      smoothHeight: true,
			      controlNav: false,
			      before: function(slider){
			        $f(player).api('pause');
			      }
			  });
*/


			  

//	For images only
		    $('.flexslider').flexslider({
			    controlNav: false
		    });


	  	});
	</script>
</body>