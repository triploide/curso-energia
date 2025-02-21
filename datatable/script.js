$(document).ready(function () {

	var datatable = $('#tabla-peliculas').DataTable({

		serverSide: true,
		ajax: {
			url: 'datatableController.php',
			data: function (data) {
				data.genre_id = $('#genre').val();
			}
		},
		columnDefs: [
			{
				render: function (data, b, row) {
					return row.title
				},
				targets: 0
			},
			{
				render: function (data, b, row) {
					return row.rating
				},
				targets: 1
			},
			{
				render: function (data, b, row) {
					return row.genre
				},
				targets: 2
			}
		],
	});

	$('#genre').on('change', function () {
		var genre_id = $(this).val();
		datatable.ajax.reload();
	})
});