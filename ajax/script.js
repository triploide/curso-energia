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
});