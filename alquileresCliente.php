<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alquileres</title>
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
	<link rel="stylesheet" href="css/main2.css" />

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
					<a href="#" class="tm-site-name">Quindi Car</a>	
				</div>
				<div class="col-lg-8 col-md-8 col-sm-9">
					<div class="mobile-menu-icon">
						<i class="fa fa-bars"></i>
					</div>
					<nav class="tm-nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">Nosotros</a></li>
							<li><a href="tours.php">Vehiculos</a></li>
							<?php
									session_start();
									if(isset($_SESSION["s_user"])){
										echo "<li><a href='alquileresCliente.php' class='active';>Mis alquileres</a></li>
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
					<h1 class="tm-banner-title">Un <span class="tm-yellow-text">viaje</span> en familia</h1>
					<p class="tm-banner-subtitle">Para tus vacaciones</p>
				</div>
		      <img src="img/banner-3.jpg" />
		    </li>
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Encuentra <span class="tm-yellow-text">tu </span>vehículo</h1>
					<p class="tm-banner-subtitle">Para seguir tu destino</p>
				</div>
		      <img src="img/banner-2.jpg" />
		    </li>
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Recorre<span class="tm-yellow-text">el</span> mundo</h1>
					<p class="tm-banner-subtitle">Se el dueño de tu camino</p>
				</div>
		      <img src="img/banner-1.jpg" />
		    </li>		    
		  </ul>
		</div>	
	</section>


	<!-- Table -->
	<section class="box">
		<h3>Historial de alquileres</h3>
		<br>
			<div class="table-wrapper" id="tablaAlquileresHist"></div>
	</section>
								
	<section class="box">
		<h3>Alquileres actuales</h3>
		<br>
			<div class="table-wrapper" id="tablaAlquileres"></div>
	</section>
		<a name="modificacionAlquiler"><section class="box"></a>
		<h3>Modificación de alquiler</h3>
		<br>
			<form method="get" action="#">
				<div class="row uniform 50%">
						<div class="12u 12u(mobilep)">
							<input type="text" name="placaMod" id="placaMod" value="" placeholder="Nueva placa" />
						</div>
						<div class="12u 12u(mobilep) input-group date-time" id='datetimepicker4'>
							<input type="text" name="query" id="diaIngresoMod" value="" placeholder="Día de petición" />
							<span class="input-group-addon">
								<span class="fa fa-calendar"></span>
							 </span>
						</div>
						<div class="12u 12u(mobilep) input-group date-time" id='datetimepicker4'>
							<input type="text" name="query" id="diaRegresoMod" value="" placeholder="Día de regreso" />
							<span class="input-group-addon">
							    <span class="fa fa-calendar"></span>
							</span>
						</div>
						<input id="userMod" type="hidden" class="form-control" value="<?php echo $_SESSION['s_user']; ?>"></input>
						<input id="idRentaMod" type="hidden" class="form-control" value=""></input>
						<div class="12u 12u(mobilep)" align="center">
							<input type="submit" id="ModificarVeh" value="Modificar" class="fit" />
						</div>
				</div>							
			</form>
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
   	<script type="text/javascript" src="js/templatemo-script.js"></script> 
   	<script type="text/javascript" src="js/ownjs.js"></script>        		<!-- Templatemo Script -->
	<script>
		// HTML document is loaded. DOM is ready.
		$(function() {

        	$('.date').datetimepicker({
            	format: 'YYYY/MM/DD HH:mm',
            });
            var dateToday = new Date(); 
            $('.date-time').each(function () {
	            $(this).datetimepicker({
	            	format: 'YYYY/MM/DD HH:mm',
	            	daysOfWeekDisabled: [0,6],
	            	enabledHours: [8,9,10,11,12,13,14,15,16,17,18,19,20],
	            	minDate: dateToday
			
	            });
       		 });
           
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
