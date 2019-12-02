$(document).ready(function () {
	$('#release_date').datepicker({
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
		format: "dd-mm-yyyy"
	});


	$('input[name="release_date"]').datepicker();
});