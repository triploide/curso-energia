$(document).ready(function () {

	$('#titulo').on('blur', function () {
		var titulo = $(this).val();
		
		if (titulo){
			$.ajax({
				url: 'peliculaController.php',
				type: 'GET',
				data: {
					validation: 'title',
					titulo: titulo
				},
				success: function (respuesta) {
														console.log(respuesta.resultado);

					if (respuesta.resultado) {
						$('#titulo').addClass('is-invalid');
						$('#titulo').removeClass('is-valid');
					}else{
						$('#titulo').addClass('is-valid');
						$('#titulo').removeClass('is-invalid');
					}

				}
			})
		}else{
			$('#titulo').removeClass('is-invalid');
			$('#titulo').removeClass('is-valid');
		}
	});

	$('#mail').on('keyup', function () {
		var valor = $(this).val();
		if (valor){
			$.ajax({
				url: 'peliculaController.php',
				type: 'GET',
				data: {
					validation: 'mail',
					mail: valor
				},
				success: function (respuesta) {
					if (respuesta.resultado) {
						$('#mail').addClass('is-valid');
						$('#mail').removeClass('is-invalid');
					}else{
						$('#mail').addClass('is-invalid');
						$('#mail').removeClass('is-valid');
						
					}

				}
			})
		}else{
			$('#mail').removeClass('is-invalid');
			$('#mail').removeClass('is-valid');
		}
	});
});