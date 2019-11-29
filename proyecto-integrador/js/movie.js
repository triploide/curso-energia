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
		}
	});

	//filer
	$('#banner').filer({
		showThumbs: true,
		addMore: true,
		allowDuplicates: false
	});
});