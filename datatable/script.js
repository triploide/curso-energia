$(document).ready(function () {
	$('#tabla-peliculas').DataTable({
		serverSide: true,
		ajax: {
			url: 'datatableController.php',
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
		]
	});
});