$(document).ready(function () {

	$('#table-genres').on('click', 'a[data-id]', function (e) {
		e.preventDefault();
		var ancla = $(this);
		var id = $(this).data('id');

		$('#ventana').modal('show');

		$('#aceptar-borrar').on('click', function () {
			$.ajax({
				url: '/php/controllers/genreDelete.php',
				type: 'POST',
				data: {
					id: id
				},
				success: function (response) {
					$('#ventana').modal('hide');
					ancla.parents('tr').fadeOut();
				}
			});
		});

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
			url: '/php/providers/genresProvider.php',
			data: function (data) {
				//data.movie_id = 1;
			}
		},
		columnDefs: [
			{
				render: function (data, b, row) {
					return row.name;
				},
				targets: 0
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