<?php
if($_GET){
	$mensaje = $_GET["ds"];
	
	if($mensaje==1){
		echo "<script type='text/javascript'> alert('Alquiler satisfactorio!')</script>";
		
	}else if($mensaje==2){
		echo "<script type='text/javascript'> alert('rango de fechas incorrecto!')</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vehículos</title>
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
	<script src="js/paginador.js"></script>
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
  					<a href="#" class="tm-site-name">Quindi-Car </a>	
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
		<div class="row" >
			<div style="text-align: center;">
				<img src="img/alquiler-02.png" alt="image"  width="60%" height="60%">
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
										<form action="ServiciosPHP/ReporteFactura.php" method="POST" class="hotel-search-form">
											<div class="tm-form-inner">
												<div class="form-group">
									            	<input id="placaAlquiler" name="placa" placeholder="Placa" class="form-control" value="" required> 
									            </div>
									          	<div class="form-group">
									                <div class='input-group date-time' id='datetimepicker3'>
									                    <input id="diaPeticion" name="fechaIni" type='text' class="form-control" placeholder="Pickup Date" required />
									                    <span class="input-group-addon">
									                        <span class="fa fa-calendar"></span>
									                    </span>
									                </div>
									            </div>
									          	<div class="form-group">
									                <div class='input-group date-time' id='datetimepicker4'>
									                    <input id="diaRegreso" name="fechaFin" type='text' class="form-control" placeholder="Return Date" required/>
									                    <span class="input-group-addon">
									                        <span class="fa fa-calendar"></span>
									                    </span>
									                </div>
									            </div>
									            <div class="form-group">
									            	<input id="userAlq" type="hidden" name="user" class="form-control" value="<?php echo $_SESSION['s_user']; ?>">
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
								<div style="text-align: center;">
				<img src="img/alquiler-01.png" alt="image"  width="60%">
			</div>
				</div>	

			</div>
			</div>
	</section>

	<?php
							          		}
							          	?>	
	
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
