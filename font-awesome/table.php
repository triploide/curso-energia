<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Font awesome</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<script>
		$(document).ready(function () {
			$('#tabla .btn-danger').on('click', function (e) {
				e.preventDefault();
				$('#ventana').modal('show');
			});
		});
	</script>
</head>
<body>
	<body>
	<div class="container">
		<nav class="navbar navbar-light navbar-expand-md">
			<a class="navbar-brand" href="#">
				<img width="120" src="https://bankingthefuture.com/wp-content/uploads/2019/04/dummylogo.jpg" alt="Ministerio de Energía">
			</a>

			<button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-end" id="menu">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="#" class="nav-link">Uno</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Uno</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Uno</a>
					</li>
				</ul>
			</div>

		</nav>

		<div class="row">
			<div class="col-md-3">
				<nav>
					<p id="seccion">Sección</p>
					<ul class="nav flex-column">
						<li class="nav-item">
							<a href="#" class="nav-link">Uno</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Uno</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Uno</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="col-md-9">
				<table id="tabla" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Lorem</td>
							<td>Ipsum</td>
							<td>
								<a title="Editar" class="btn btn-primary" href="#">
									<span class="fa fa-pencil"></span>
								</a>
								<a title="Borrar" class="btn btn-danger" href="/">
									<span class="fa fa-trash"></span>
								</a>
							</td>
						</tr>
						<tr>
							<td>Lorem</td>
							<td>Ipsum</td>
							<td>
								<a title="Editar" class="btn btn-primary" href="#">
									<span class="fa fa-pencil"></span>
								</a>
								<a title="Borrar" class="btn btn-danger" href="#">
									<span class="fa fa-trash"></span>
								</a>
							</td>
						</tr>
						<tr>
							<td>Lorem</td>
							<td>Ipsum</td>
							<td>
								<a title="Editar" class="btn btn-primary" href="#">
									<span class="fa fa-pencil"></span>
								</a>
								<a title="Borrar" class="btn btn-danger" href="#">
									<span class="fa fa-trash"></span>
								</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

	</div>


	<div id="ventana" class="modal" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Borrar</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <p>¿Está seguro que desea borrar este elemento?</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary">
	        	<span style="display: none" class="fa fa-spinner fa-spin"></span> 
	        	Borrar
	        </button>
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	      </div>
	    </div>
	  </div>
	</div>
</body>
</body>
</html>