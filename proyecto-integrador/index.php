<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
	<?php include 'tpl/head.php'; ?>

	<script>
		function mostrarVentana () {
			$('#ventana').modal('show');
		}

		//Espero a que el documento esté inicializado
		$(document).ready(function () {
			$('#tabla .btn-danger').on('click', function (e) {
				$(this).addClass('btn-default');
				$(this).removeClass('btn-danger');
				e.preventDefault();
				mostrarVentana();
			});


			/*
			$('selector --igual que css').on('nombre del evento', function () {
				Lo que quiero ejecutar cuando hago click
				Lo que quiero ejecutar cuando hago click
				Lo que quiero ejecutar cuando hago click
			});
			*/

		});
	</script>
</head>
<body>
	<div class="container">
		<?php include 'tpl/nav.php' ?>

		<div class="row">
			<div class="col-md-3">
				<?php include 'tpl/menu.php' ?>
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
</html>