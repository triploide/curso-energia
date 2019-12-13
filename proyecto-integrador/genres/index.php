<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario - Ministerio</title>
	<?php include __DIR__ . '/../tpl/head.php'; ?>

	<script src="/js/genres.js"></script>
</head>
<body>
	<div class="container">
		<?php include __DIR__ . '/../tpl/nav.php' ?>

		<div class="row">
			<div class="col-md-12 text-right">
				<a href="/genres/form.php" class="btn btn-primary">
					Crear <span class="fa fa-plus"></span>
				</a>

				<a href="/php/exports/genreExport.php" class="btn btn-primary">
					Exportar <span class="fa fa-download"></span>
				</a>
			</div>
		</div>

		<br>

		<div class="row">
			<div class="col-md-3">
				<?php include __DIR__ . '/../tpl/menu.php' ?>
			</div>
			<div class="col-md-9">
				<table id="table-genres" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Título</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						
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
	        <button id="aceptar-borrar" type="button" class="btn btn-danger">
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