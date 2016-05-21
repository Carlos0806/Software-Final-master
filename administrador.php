<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Administrador</title>
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
							<li><a href="tours.php">Vehiculos</a></li>
							<?php
									session_start();
									if(isset($_SESSION["s_user"])){
										echo "<li><a id='btnCerrarSesion' href='/Software-Final-master/ServiciosPHP/cerrarSesion.php'>Cerrar sesión</a></li>";
									}elseif (isset($_SESSION["s_admin"])) {
										echo "<li><a href='administrador.php'class='active'>Administar</a></li>
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
					<a href="#more" class="tm-banner-link">Conoce más</a>	
				</div>
				<img src="img/banner-1.jpg" alt="Image" />	
		    </li>
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Gran<span class="tm-yellow-text">Calidad</span>!</h1>
					<p class="tm-banner-subtitle">Mejores Precios</p>
					<a href="#more" class="tm-banner-link">Conoce más</a>	
				</div>
		      <img src="img/banner-2.jpg" alt="Image" />
		    </li>
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Disfruta <span class="tm-yellow-text">Las Ruedas</span> En tu vida</h1>
					<p class="tm-banner-subtitle">Alquila Tu Vehiculo</p>
					<a href="#more" class="tm-banner-link">Conoce más</a>	
				</div>
		      <img src="img/banner-3.jpg" alt="Image" />
		    </li>
		  </ul>
		</div>	
	</section>

	<section class="section-padding-bottom">
		<div class="row">
			<!-- slider -->
			<div class="flexslider flexslider-about effect2">
			  <ul class="slides">
			    <li>
			      <img src="img/administrador-1.png" alt="image" />
			      <div class="flex-caption">
			      	<h1 class="slider-title">INFORMES</h1>
			      	<h2 class="slider-subtitle">Aqui podrá acceder a los informes relacionados con las rentas y con el estado del kilometraje de los vehiculos</h2>
			      	<div class="slider-social" style="text-align: center;">
			      		<a href="#more" class="tm-banner-link">Revisar informes</a>
			      	</div>
			      </div>			      
			    </li>
			    <li>
			      <img src="img/administrador-2.png" alt="image" />
			      <div class="flex-caption">
			      	<h1 class="slider-title">REGISTRAR DEVOLUCION.</h1>
			      	<h2 class="slider-subtitle">Aquí podra acceder a la pagina de registro de devolucion de un vehículo que un cliente habia alquilado.</h2>
			      	<div class="slider-social" style="text-align: center;">
			      		<a href="#more" class="tm-banner-link" >Registrar devolución</a>
			      	</div>
			      </div>			      
			    </li>
			    <li>
			      <img src="img/administrador-3.png" alt="image" />
			      <div class="flex-caption">
			      	<h1 class="slider-title">ADMINISTRAR VEHÍCULOS</h1>
			      	<h2 class="slider-subtitle">Aquí podra acceder a la pagina para realizar la inserción y modificación de los datos de los vehiculos</h2>
			      	<div class="slider-social" style="text-align: center;">
			      		<a href="#more" class="tm-banner-link">Insertar Vehículos</a>
			      	</div>
			      	<div class="slider-social" style="text-align: center;">
			      		<a href="#more" class="tm-banner-link">Modificar Vehículos</a>
			      	</div>
			      </div>			      
			    </li>
			    <li>
			      <img src="img/administrador-4.png" alt="image" />
			      <div class="flex-caption">
			      	<h1 class="slider-title">REGISTRAR</h1>
			      	<h2 class="slider-subtitle">Aquí podra acceder a la pagina para realizar el registro de nuevos usuarios y administradores.</h2>
			      	<div class="slider-social" style="text-align: center;">
			      		<a href="contact.php" class="tm-banner-link">Registrar usuario</a>
			      	</div>
			      </div>			      
			    </li>
			  </ul>
			</div>
		</div>
	</section>

	<footer class="tm-black-bg">
		<div class="container">
			<div class="row">
				<p class="tm-copyright-text">Copyright &copy; 2016 Scrumizacion 
                
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
   	<script type="text/javascript" src="js/ownjs.js"></script>     		<!-- Templatemo Script -->
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
 </html>