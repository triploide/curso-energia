$(document).ready(function () {
	$('#tabla-generos').DataTable({
		serverSide: true,
		ajax: {
			url: 'datatableController.php',
		},
		columnDefs: [
			{
				render: function (data, b, row) {
					return row.name
				},
				targets: 0
			},
			{
				render: function (data, b, row) {
					return row.ranking
				},
				targets: 1
			}
		]
	});
});