$(document).ready(function () {
	$('#tipo').on('change', function () {
		var tipo = $(this).val();

		if (tipo != '') {
			$('#loader').show();
			$.ajax({
				url: 'generoController.php',
				type: 'GET',
				data: {
					tipo: tipo
				},
				success: function (response) {
					$('#loader').hide();
					$('#genero').html(response);
				},
				error: function () {
					$('#loader').hide();
					alert('Algo salió mal');
				}
			});
		} else {
			$('#genero').html('<option value="">Elegir</option>');
		}
	});
});