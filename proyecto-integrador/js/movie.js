$(document).ready(function () {
	//datepicker
	$('input[name="release_date"]').datepicker({
		autoclose: true,
		language: 'es',
		daysOfWeekDisabled: [0,6],
		clearBtn: true,
		startView: 2,
		defaultViewDate: {
			year: 1990,
			month: 0,
			day: 1
		},
		format: 'dd-mm-yyyy',
	});

	//filer
	$('#banner').filer({
		showThumbs: true,
		addMore: true,
		allowDuplicates: false,
		files: files,
		onRemove: function ($el, file) {
			$.ajax({
				url: '/php/controllers/fileController.php',
				type: 'POST',
				data: {
					id: file.id
				},
				error: function () {
					alert('Algo salió mal');
				}
			})
		}
	});
});