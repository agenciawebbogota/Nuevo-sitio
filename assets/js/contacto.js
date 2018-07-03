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
				if (resp.resp) {
					$('#resultado').text('Tus datos se han enviado, pronto estaremos atendiendo tu solicitud.');
					$('#nombre').val('');
					$('#apellido').val('');
					$('#telefono').val('');
					$('#correo').val('');
					$('#mensaje').val('');
				}
			})	

		}	
	});
});