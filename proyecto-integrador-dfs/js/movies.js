$(document).ready(function () {

	$('#table-movies').on('click', 'a[data-id]', function (e) {
		e.preventDefault();
		var ancla = $(this);
		var id = $(this).data('id');

		setTimeout(function () {
			ancla.parents('tr').fadeOut();
		}, 2000)

		/*
		ajax({
			url: 'movieDelete.php',
			type: 'POST',
			data: {
				id: id
			},
			success: function (response) {

			}
		})
		*/
	})

	$('#table-movies').DataTable({
		serverSide: true,
		ajax: {
			url: '../php/providers/moviesProvider.php',
			data: function (data) {
				//data.movie_id = 1;
			}
		},
		columnDefs: [
			{
				render: function (data, b, row) {
					return row.title;
				},
				targets: 0
			},
			{
				render: function (data, b, row) {
					return row.length || 'Sin data';
				},
				targets: 1
			},
			{
				render: function (data, b, row) {
					return '\
						<a title="Editar" class="btn btn-primary" href="form.php?id='+row.id+'">\
							<span class="fa fa-pencil"></span>\
						</a>\
						<a data-id="'+row.id+'" title="Borrar" class="btn btn-danger" href="borrar">\
							<span class="fa fa-trash"></span>\
						</a>\
					';
				},
				targets: 2
			}
		]
	});
});