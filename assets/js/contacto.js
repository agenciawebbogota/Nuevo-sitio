$(document).ready(function() {
	$('#form-contacto').submit(function(event){
		event.preventDefault();
		var nombre = $('#nombre').val();
		var apellido = $('#apellido').val();
		var telefono = $('#telefono').val();
		var correo = $('#correo').val();
		var mensaje = $('#mensaje').val();
		var resultado = $('#resultado p');
		if (nombre==='') {
			
		}else if (apellido=="") {

		}else if (telefono=="") {

		}else if (correo=="") {

		}else{

			console.log("vamos acá al final.");
			var datos = {
				nombre:nombre,
				apellido:apellido,
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
			.done(function(resp) {
				console.log(resp);
				if (resp) {
					$('#resultado').text('Tus datos se han enviado, pronto estaremos atendiendo tu solicitud.');
				}
			})
			.fail(function(data) {
				console.log(data);
			})
			.always(function() {
				console.log("complete");
			});
			

		}





		
	});




});