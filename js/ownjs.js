$(document).ready(function(){



	function ajax (url, elemento) {

		$.ajax({

			url: url,
			type: 'GET',
			dataType: 'html',

			success: function(respuesta){
				$(elemento).html(respuesta);				
				
			}
		}); 
	}

	ajax("ServiciosPHP/getVehiculoTipos.php", "#selectTipos");
	ajax("ServiciosPHP/getVehiculoMarcas.php", "#selectMarcas");
	ajax("ServiciosPHP/getVehiculoColores.php", "#selectColores");
	ajax("ServiciosPHP/getVehiculoPrecio.php", "#selectPrecios");
	ajax("ServiciosPHP/getVehiculoAnios.php", "#selectAnios");
	ajax("ServiciosPHP/getAlquileresCliente.php", "#tablaAlquileres");
	ajax("ServiciosPHP/getAlquileresClienteHist.php", "#tablaAlquileresHist");


	$('#btn-regUser').on('click', function(event){

		event.preventDefault();

	var cedula = $('#registro_cedula')[0].value;
	var name = $('#registro_name')[0].value;
	var username = $('#registro_username')[0].value;
	var direccion = $('#registro_direccion')[0].value;
	var pass = $('#registro_pass')[0].value;
	var pass2 = $('#registro_pass2')[0].value;
	var numLicencia = $('#registro_numLicencia')[0].value;
	var telefono = $('#registro_telefono')[0].value;

	if(cedula == "" || cedula == null || name=="" || name==null || direccion=="" || direccion==null || username=="" || username==null || pass==""
	 || pass == null || pass2 == "" || pass2 == null || numLicencia == "" || numLicencia == null || telefono == "" || telefono == null){

		alert("Ingrese datos validos");
	}
	else{

		if(pass == pass2){
		
		ajax("ServiciosPHP/createUser.php?cedula="+cedula+"&name="+name+"&direccion="+direccion+"&username="+username+"&pass="+pass+"&numLicencia="+numLicencia
			+"&telefono="+telefono, "#respuesta");

			alert("Registro realizado satisfactoriamente");
			session_start();
			if(isset($_SESSION["s_admin"])){
				window.location.reload()
			}else{
				window.open('index.php');
			}
		}

		else{
			alert("Las contraseñas no coinciden");
		}
	}
	})

	$('#mibtnmodificar').on('click', function(event){

		event.preventDefault();

	var cedula = $('#registro_cedula')[0].value;
	var name = $('#registro_name')[0].value;
	var username = $('#registro_username')[0].value;
	var email = $('#registro_email')[0].value;
	var pass = $('#registro_pass')[0].value;
	var pass2 = $('#registro_pass2')[0].value;
	var numCuenta = $('#registro_numCuenta')[0].value;
	var tipoCuenta = $('#registro_tipoCuenta')[0].value;

	if(cedula == "" || cedula == null || name=="" || name==null || email=="" || email==null || username=="" || username==null || pass==""
	 || pass == null || pass2 == "" || pass2 == null || numCuenta == "" || numCuenta == null || tipoCuenta == "" || tipoCuenta == null){

		alert("Ingrese datos validos");
	}
	else{

		if(pass == pass2){
		ajax("ServiciosPHP/updateUser.php?cedula="+cedula+"&name="+name+"&age="+edad+"&username="+username, "#respuesta");
		//ajax("ServiciosPHP/getUsers.php", "#usertable");
		}

		else{
			alert("Las contraseñas no coinciden");
		}
	}
	})

	$('#mibtneliminar').on('click', function(event){

		event.preventDefault();

	var cedula = $('#cedula')[0].value;
	var name = $('#name')[0].value;
	var edad = $('#age')[0].value;
	var username = $('#username')[0].value;

	if(cedula == "" || cedula == null){

		alert("Ingrese datos validos");
	}
	else{

		
		ajax("../ServiciosPHP/deleteUser.php?cedula="+cedula+"&name="+name+"&age="+edad+"&username="+username, "#respuesta");
	}
	})


		$(".iniciarSesion").on('submit', function(event){

			event.preventDefault();
			var username= $('#registro_name')[0].value;
			var pass= $('#registro_pass')[0].value;

			$.post("/Software-Final-master/ServiciosPHP/iniciarSesion.php", {
				"username": username,
				"pass": pass

			}, function(data){

				if(data == "OK"){
					location.href='/Software-Final-master';
					window.location.reload()
				}
				else{
					alert(data);
				}
			});
		});


		$('.BtnEliminar').on('click', function(event){

			event.preventDefault();

			var placaElim = $(this).attr("value");
			var confirmacion = confirm("¿Está seguro de eliminar el vehiculo?");

			if(confirmacion){
				ajax("/Software-Final-master/ServiciosPHP/calificacion.php?placa="+placaElim, "#respuesta");
				alert("El vehiculo con placa " + placaElim + " ha sido eliminado");
			}

		});


		$('.BtnElegirAuto').on('click', function(event){

			var placaAlq = $(this).attr("value");
			$.get("/Software-Final-master/ServiciosPHP/getSession.php", {

			}, function(data){

				if(data == "Activo"){
					$('#placaAlquiler').val(placaAlq);
				}
				else{
					
					alert("Inicie sesión para realizar el alquiler");
				}
			});
		
		

		});

		$('#BtnRegistrarAlquiler').on('click', function(event){

			event.preventDefault();

			
			var placa = $("#placaAlquiler").val();
			var diaPeticion = $("#diaPeticion").val();
			var diaRegreso = $("#diaRegreso").val();
			var usuario = $("#userAlq").val();

			if(placa != "" && placa != null && diaPeticion!="" && diaPeticion != null && diaRegreso 
					!= "" && diaRegreso !=null && usuario != "" && usuario != null){

				var confirmacion = confirm("¿Esta seguro de alquilar este vehiculo?");

				if(confirmacion){
					$.post("/Software-Final-master/ServiciosPHP/registrarAlquiler.php", {
						"placa": placa,
						"diaPeticion": diaPeticion,
						"diaRegreso": diaRegreso,
						"usuario": usuario

					}, function(data){
						alert(data);
					});

				}
				
			}
			else{
					alert("Ingrese todos los campos");
				}
		});

		$('.BtnModificarAlquiler').on('click', function(event){

			alert("holi");
			//var placaAlq = $(this).attr("value");
			//$.get("/Software-Final-master/ServiciosPHP/getSession.php", {

			//}, function(data){

				//if(data == "Activo"){
					//$('#placaMod').val(placaAlq);
				//}
				//else{
					
				//	alert("Inicie sesión para realizar el alquiler");
				//}
			//});
		
		});

	$(document).on('click', '.BtnModificarAlquiler', function() { 
		var placaAlq = $(this).attr("value");
		var idRenta = $(this).attr("id");

				$.get("/Software-Final-master/ServiciosPHP/getSession.php", {

				}, function(data){

					if(data == "Activo"){
						$('#placaMod').val(placaAlq);
						$('#idRentaMod').val(idRenta);
						
					}
					else{
						
						alert("Debe loguearse para modificar");
					}
				});
	});



	$(document).on('click', '#ModificarVeh', function() { 
			event.preventDefault();
			var placa = $("#placaMod").val();
			var diaPeticion = $("#diaIngresoMod").val();
			var diaRegreso = $("#diaRegresoMod").val();
			var usuario = $("#userMod").val();
			var idRenta = $('#idRentaMod').val();

			if(placa != "" && placa != null && diaPeticion!="" && diaPeticion != null && diaRegreso 
					!= "" && diaRegreso !=null && usuario != "" && usuario != null && idRenta!= "" 
					&& idRenta != null){

				var confirmacion = confirm("¿Esta seguro de modificar este alquiler?");

				if(confirmacion){
					$.post("/Software-Final-master/ServiciosPHP/modificarAlquiler.php", {
						"placa": placa,
						"diaPeticion": diaPeticion,
						"diaRegreso": diaRegreso,
						"usuario": usuario,
						"idRenta": idRenta

					}, function(data){
						alert(data);
						ajax("ServiciosPHP/getAlquileresCliente.php", "#tablaAlquileres");
					});

				}
				
			}
			else{
					alert("Ingrese todos los campos");
				}

	});

	$(document).on('click', '.BtnEliminarAlquiler', function() { 
			event.preventDefault();
			var idRenta = $(this).attr("value");

				$.get("/Software-Final-master/ServiciosPHP/getSession.php", {

				}, function(data){

					if(data == "Activo"){
						alert(idRenta);
						$('#idRentaMod').val(idRenta);

						var confirmacion = confirm("¿Esta seguro de eliminar este alquiler?");

						if(confirmacion){
							$.post("/Software-Final-master/ServiciosPHP/eliminarAlquiler.php", {
								"idRenta": idRenta

							}, function(data){
								alert(data);
								ajax("ServiciosPHP/getAlquileresCliente.php", "#tablaAlquileres");
							});

						}

						
					}
					else{
						
						alert("Debe loguearse para eliminar");
					}
				});

	});


	$('#btn-regAdmin').on('click', function(event){

			event.preventDefault();

		var cedula = $('#registro_cedula-A')[0].value;
		var name = $('#registro_name-A')[0].value;
		var username = $('#registro_username-A')[0].value;
		var direccion = $('#registro_direccion-A')[0].value;
		var pass = $('#registro_pass-A')[0].value;
		var pass2 = $('#registro_pass2-A')[0].value;
		var numLicencia = $('#registro_numLicencia-A')[0].value;
		var telefono = $('#registro_telefono-A')[0].value;

		if(cedula == "" || cedula == null || name=="" || name==null || direccion=="" || direccion==null || username=="" || username==null || pass==""
		 || pass == null || pass2 == "" || pass2 == null || numLicencia == "" || numLicencia == null || telefono == "" || telefono == null){

			alert("Ingrese datos validos");
		}
		else{

			if(pass == pass2){
			
			ajax("ServiciosPHP/createAdmin.php?cedula="+cedula+"&name="+name+"&direccion="+direccion+"&username="+username+"&pass="+pass+"&numLicencia="+numLicencia
				+"&telefono="+telefono, "#respuesta");

				alert("Registro realizado satisfactoriamente");
				window.location.reload();
			}

			else{
				alert("Las contraseñas no coinciden");
			}
		}
	});

	$('#btn-regDev').on('click', function(event){

		event.preventDefault();
		var cedula = $('#cedulaCliente')[0].value;

		if(cedula == "" || cedula == null){
			alert("Ingrese una cedula valida");
		}
		else{
			ajax("ServiciosPHP/getAlquileresActuales.php?cedula="+cedula,"#tablaAlquileresSinDev");
			}
	});


	$(document).on('click', '.BtnRegDevolucion', function() { 
		var placaAlq = $(this).attr("value");
		var idRenta = $(this).attr("id");
		$('#placaMod').val(placaAlq);
		$('#idRentaMod').val(idRenta);
						
	});

	$(document).on('click', '#RegistrarDevolucion', function() { 
			event.preventDefault();
			var placa = $("#placaMod").val();
			var kilometraje = $("#kilometraje").val();
			var diaDevolucion = $("#diaDevolucion").val();
			var observaciones= $("#observaciones").val();
			var idRenta = $('#idRentaMod').val();

			alert(placa+kilometraje+diaDevolucion+idRenta);

			if(placa != "" && placa != null && kilometraje!="" && kilometraje != null && diaDevolucion
					!= "" && diaDevolucion !=null && observaciones != "" && observaciones != null && idRenta!= "" 
					&& idRenta != null){

				var confirmacion = confirm("¿Esta seguro de registrar esta devolucion?");

				if(confirmacion){
					$.post("/Software-Final-master/ServiciosPHP/registrarDevolucion.php", {
						"placa": placa,
						"kilometraje": kilometraje,
						"diaDevolucion": diaDevolucion,
						"observaciones": observaciones,
						"idRenta": idRenta

					}, function(data){
						alert(data);
					});

				}
				
			}
			else{
					alert("Ingrese todos los campos");
				}

	});




});

