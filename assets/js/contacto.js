$(document).ready(function() {


	





	$('#form-contacto').submit(function(event){


		event.preventDefault();


		var nombre = $('#nombre').val();
		var apellidos = $('#apellidos').val();
		var telefono = $('#telefono').val();
		var correo = $('#correo').val();
		var resultado = $('#resultado p');

		// alert(nombre)


		if (nombre==='') {
			
		}else if (apellidos=="") {

		}else if (telefono=="") {

		}else if (correo=="") {

		}else{

			console.log("vamos acá al final.");

		}





		
	});




});