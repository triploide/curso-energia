<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Datatable</title>

	<!-- bootstrap - css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- jquery ui - css -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
	<!-- font awesome - css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- datatable -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
	<!-- jquery - js -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<!-- jquery ui - js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<!-- popper - js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<!-- bootstrap - js -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- datatable js -->
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
	
	<script src="script.js"></script>
</head>
<body>
	<div class="container">
		<h1 class="mb-5">Datatable</h1>

		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<select class="form-control" name="genre" id="genre">
						<option value="4">Acción</option>
						<option value="7">Animación</option>
						<option value="8">Aventuras</option>
						<option value="5">Ciencia Ficción</option>
					</select>
				</div>
			</div>
		</div>


		<table id="tabla-peliculas" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Genero</th>
					<th>Ranking</th>
					<th>Genero</th>
					
				</tr>
			</thead>
			<tbody>
				<!-- Datatable -->
			</tbody>
		</table>
	</div>
</body>
</html>