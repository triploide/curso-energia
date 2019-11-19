$(document).ready(function () {
	$('input[name="release_date"]').datepicker({
		autoclose: true,
		language: 'es',
		daysOfWeekDisabled: [0,6],
		clearBtn: true,
		todayHighlight: true,
		todayBtn: true

	});
});