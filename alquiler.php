<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alquilar</title>
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
  				<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
  					<a href="#" class="tm-site-name">Quindi-Car</a>	
  				</div>
	  			<div class="col-lg-6 col-md-8 col-sm-9">
	  				<div class="mobile-menu-icon">
		              <i class="fa fa-bars"></i>
		            </div>
	  				<nav class="tm-nav">
						<ul>
							<li><a href="index.html">Inicio</a></li>
							<li><a href="about.html">Nosotros</a></li>
							<li><a href="tours.html" class="active">Vehiculos</a></li>
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
					<h1 class="tm-banner-title">Encuentra <span class="tm-yellow-text">Tu</span> Vehiculo</h1>
					<p class="tm-banner-subtitle">Para seguir tu destino</p>
					<a href="#more" class="tm-banner-link">Conoce más</a>	
				</div>
		      <img src="img/banner-2.jpg" />
		    </li>
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Puedes <span class="tm-yellow-text">Personalizar</span> Tu Viaje</h1>
					<p class="tm-banner-subtitle">Traza tu ruta</p>
					<a href="#more" class="tm-banner-link">Conoce más</a>	
				</div>
		      <img src="img/banner-3.jpg" />
		    </li>
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Lleva el <span class="tm-yellow-text"> Volante </span> En tu vida</h1>
					<p class="tm-banner-subtitle">Se el dueño de tu camino</p>
					<a href="#more" class="tm-banner-link">Conoce más</a>	
				</div>
		      <img src="img/banner-1.jpg" />
		    </li>
		  </ul>
		</div>			
	</section>

	<!-- gray bg -->	
	<section class="container tm-home-section-1" id="more">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6">
				<!-- Nav tabs -->
				<div class="tm-home-box-1">
					<ul class="nav nav-tabs tm-white-bg" role="tablist" id="hotelCarTabs">
					    <li role="presentation" class="active">
					    	<a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab">Alquiler</a>
					    </li>
					    <li role="presentation">
					    	<a href="#car" aria-controls="car" role="tab" data-toggle="tab">Alquilar Auto</a>
					    </li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
					    <div role="tabpanel" class="tab-pane fade in active tm-white-bg" id="car">
							<div class="tm-search-box effect2">
								<form action="#" method="post" class="hotel-search-form">
									<div class="tm-form-inner">
										<div class="form-group">
							            	 <select id="selectMarcas" class="form-control">
							            	 
											</select> 
							          	</div>
							          	<div class="form-group">
							          		 <select id="selectColores" class="form-control">

							          		 </select> 
							          	</div>
							          	<div class="form-group">
							          		 <select id="selectTipos" class="form-control">

							          		 </select> 
							          	</div>
							          	<div class="form-group">
							          		 <select id="selectPrecios" class="form-control">

							          		 </select> 
							          	</div>
							            <div class="form-group">
							            	 <select id="selectAnios" class="form-control">

											</select> 
							          	</div>							           
									</div>							
						            <div style="background: white;"class="form-group tm-yellow-gradient-bg text-center">
						            	<button type="submit" name="submit" class="tm-yellow-btn">Buscar</button>
						            </div>  
								</form>
							</div>
					    </div>
					    <div role="tabpanel" class="tab-pane fade tm-white-bg" id="car">
							<div class="tm-search-box effect2">
								<form action="#" method="post" class="hotel-search-form">
									<div class="tm-form-inner">
										<div class="form-group">
							            	 <select class="form-control">
							            	 	<option value="">-- Select Model -- </option>
							            	 	<option value="shangrila">BMW</option>
												<option value="chatrium">Mercedes-Benz</option>
												<option value="fourseasons">Toyota</option>
												<option value="hilton">Honda</option>
											</select> 
							          	</div>
							          	<div class="form-group">
							                <div class='input-group date-time' id='datetimepicker3'>
							                    <input type='text' class="form-control" placeholder="Pickup Date" />
							                    <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
							                </div>
							            </div>
							          	<div class="form-group">
							                <div class='input-group date-time' id='datetimepicker4'>
							                    <input type='text' class="form-control" placeholder="Return Date" />
							                    <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
							                </div>
							            </div>	
							            <div class="form-group">
							            	 <select class="form-control">
							            	 	<option value="">-- Options -- </option>
							            	 	<option value="">Child Seat</option>
												<option value="">GPS Navigator</option>
												<option value="">Insurance</option>
											</select> 
							          	</div>						           
									</div>							
						            <div class="form-group tm-yellow-gradient-bg text-center">
						            	<button type="submit" name="submit" class="tm-yellow-btn">Check Now</button>
						            </div>  
								</form>
							</div>
					    </div>				    
					</div>
				</div>								
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-center">
					<img src="img/index-01.jpg" alt="image" class="img-responsive">
					<a href="#">
						<div class="tm-green-gradient-bg tm-city-price-container">
							<span>New York</span>
							<span>$6,600</span>
						</div>	
					</a>			
				</div>				
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-right">
					<img src="img/index-02.jpg" alt="image" class="img-responsive">
					<a href="#">
						<div class="tm-red-gradient-bg tm-city-price-container">
							<span>Paris</span>
							<span>$4,200</span>
						</div>	
					</a>					
				</div>				
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
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      		<!-- jQuery -->
  	<script type="text/javascript" src="js/moment.js"></script>							<!-- moment.js -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>					<!-- bootstrap js -->
	<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>	<!-- bootstrap date time picker js, http://eonasdan.github.io/bootstrap-datetimepicker/ -->
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
   	<script type="text/javascript" src="js/templatemo-script.js"></script>      		<!-- Templatemo Script -->
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
		    $('.flexslider').flexslider({
			    controlNav: false
		    });
	  	});
	</script>
 </body>
 </html>
