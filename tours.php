<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Driving car</title>
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
  					<a href="#" class="tm-site-name">Driving car</a>	
  				</div>

	  			<div class="col-lg-8 col-md-8 col-sm-9">
	  				<div class="mobile-menu-icon">
		              <i class="fa fa-bars"></i>
		            </div>
	  				<nav class="tm-nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">Nosotros</a></li>
							<li><a href="tours.php" class="active">Vehiculos</a></li>
							<li><a href="contact.php">Registro</a></li>
							<?php
									session_start();
									if(isset($_SESSION["s_user"])){
											echo "<li><a id='btnCerrarSesion' href='/Software-Final-master/ServiciosPHP/cerrarSesion.php'>Cerrar Sesión</a></li>";
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
			<div class="col-lg-4 col-md-4 col-sm-6">
				<!-- Nav tabs -->
				<div class="tm-home-box-1">
					<ul class="nav nav-tabs tm-white-bg" role="tablist" id="hotelCarTabs">
					    <li role="presentation" class="active">
					    	<a href="#car" aria-controls="car" role="tab" data-toggle="tab">Consultar Auto</a>
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
	
		<div class="section-margin-top">
			<div class="row">				
				<div class="tm-section-header">
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">Catalogo de Vehiculos</h2></div>
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
				</div>
			</div >	
			<div class="row" id="contenido">				
				 <?php include 'paginador.php' ?>
			</div>		
		</div>
	</section>

	<!-- gray bg -->	
	<?php
							           		if(isset($_SESSION["s_user"])){	
							           	?>
	<section class="container tm-home-section-1" id="more">
		<div class="row">

			<div class="section-margin-top">
				<div class="row">				
					<div class="tm-section-header">
						<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
						<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">Alquiler</h2></div>
						<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
					</div>
				</div >	
				<div class="row">				
					 <div class="col-lg-4 col-md-4 col-sm-6">

				<!-- Nav tabs -->
				<div class="tm-home-box-1">
					<ul class="nav nav-tabs tm-white-bg" role="tablist" id="hotelCarTabs">
					    <li role="presentation" class="active">
					    	<a href="#alquiler" aria-controls="alquiler" role="tab" data-toggle="tab" aria-expanded="true">Alquilar Auto</a>
					    </li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
					    <div role="tabpanel" class="tab-pane fade tm-white-bg active in" id="alquiler">
							<div class="tm-search-box effect2">
							
								<form action="#" method="post" class="hotel-search-form">
									<div class="tm-form-inner">
										<div class="form-group">
							            	<input id="placaAlquiler" placeholder="Placa" class="form-control" value="" required>
							            	 
											</input>
							          	</div>
							          	<div class="form-group">
							                <div class='input-group date-time' id='datetimepicker3'>
							                    <input id="diaPeticion" type='text' class="form-control" placeholder="Pickup Date" required />
							                    <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
							                </div>
							            </div>
							          	<div class="form-group">
							                <div class='input-group date-time' id='datetimepicker4'>
							                    <input id="diaRegreso" type='text' class="form-control" placeholder="Return Date" required/>
							                    <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
							                </div>
							            </div>
							            
							           <div class="form-group">

							            	<input id="userAlq" type="hidden" class="form-control" value="<?php echo $_SESSION['s_user']; ?>">
											</input>
							          	</div>	           
									</div>							
						            <div class="form-group tm-yellow-gradient-bg text-center">
						            	<button type="submit" name="submit" id="BtnRegistrarAlquiler" class="tm-yellow-btn">Alquilar</button>
						            </div>  
						            
								</form>
								
							</div>
					    </div>				    
					</div>

				</div>								
			</div>

				</div>		
			</div>

			
			
			
		</div>
	
	</section>

	<?php
							          		}
							          	?>	
	
	<!-- white bg -->
	<section class="tm-white-bg section-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Special Packages</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="img/index-03.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15">Proin Gravida Nibhvel Lorem Quis Bind</h3>
							<img src="img/rating.png" alt="image" class="margin-bottom-5">
							<p>28 March 2084</p>	
						</div>						
						<a href="#" class="tm-tours-box-2-link">Book Now</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="img/index-04.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15">Proin Gravida Nibhvel Lorem Quis Bind</h3>
							<img src="img/rating.png" alt="image" class="margin-bottom-5">
							<p>26 March 2084</p>	
						</div>						
						<a href="#" class="tm-tours-box-2-link">Book Now</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="img/index-05.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15">Proin Gravida Nibhvel Lorem Quis Bind</h3>
							<img src="img/rating.png" alt="image" class="margin-bottom-5">
							<p>24 March 2084</p>	
						</div>						
						<a href="#" class="tm-tours-box-2-link">Book Now</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="img/index-06.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15">Proin Gravida Nibhvel Lorem Quis Bind</h3>
							<img src="img/rating.png" alt="image" class="margin-bottom-5">
							<p>22 March 2084</p>	
						</div>						
						<a href="#" class="tm-tours-box-2-link">Book Now</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<p class="home-description">Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
					Morbi accumsaipsu m velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat.
					</p>					
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
   	<script type="text/javascript" src="js/templatemo-script.js"></script> 
   	<script type="text/javascript" src="js/ownjs.js"></script>        		<!-- Templatemo Script -->
	<script>
		// HTML document is loaded. DOM is ready.
		$(function() {

			$('#hotelCarTabs a').click(function (e) {
			  e.preventDefault()
			  $(this).tab('show')
			})

        	$('.date').datetimepicker({
            	format: 'YYYY/MM/DD HH:mm',
            });
            var dateToday = new Date(); 
            $('.date-time').each(function () {
	            $(this).datetimepicker({
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
