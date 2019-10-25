function validar ($el) {
	$el.addClass('is-valid');
	$el.removeClass('is-invalid');
}

function invalidar ($el) {
	$el.addClass('is-invalid');
	$el.removeClass('is-valid');
}	

$(document).ready(function () {

	$('#titulo').on('blur', function () {
		var titulo = $(this).val();
		$.ajax({
			url: 'peliculaController.php',
			type: 'GET',
			data: {
				titulo: titulo
			},
			success: function (respuesta) {
				if (respuesta.existe) {
					alert('La peli ya existe');
				}
			}
		})
	});

	$('#duracion').on('keyup', function () {
		var val = $(this).val();
		var regex = /^[0-9]*$/;
		
		if (!regex.test(val)) {
			invalidar($(this));
		} else {
			validar($(this));
		}
	});

});