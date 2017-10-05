$(document).ready(function() {


	





	$('#form-contacto').submit(function(event){


		event.preventDefault();


		var nombre = $('#nombre').val();
		var apellidos = $('#apellidos').val();
		var telefono = $('#telefono').val();
		var correo = $('#correo').val();
		var mensaje = $('#mensaje').val();
		var resultado = $('#resultado p');

		// alert(nombre)


		if (nombre==='') {
			
		}else if (apellidos=="") {

		}else if (telefono=="") {

		}else if (correo=="") {

		}else{

			console.log("vamos acá al final.");
			var datos = {
				nombre:nombre,
				apellido:apellidos,
				telefono:telefono,
				correo:correo,
				mensaje:mensaje
			}

			$.ajax({
				url: 'controladores/guarda_contacto.php',
				type: 'POST',
				dataType: 'json',
				data: datos,
			})
			.done(function() {
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			

		}





		
	});




});