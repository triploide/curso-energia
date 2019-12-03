<?php $__env->startSection('title'); ?>
	Formulario de <?php echo e($form_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('head'); ?>
	<script src="Form.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

	<!-- Styles -->
	<link href="../css/jquery.filer.css" rel="stylesheet">

	<!-- Jvascript -->
	<script src="../js/jquery.filer.min.js" type="text/javascript"></script>
	<script src="../js/custom.js" type="text/javascript"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<form action="../php/controllers/movieController.php" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="title">Título</label>
			<input class="form-control" type="text" name="title" id="title" value="<?php echo e($movie->title); ?>">
			<div class="invalid-feedback">La película ya existe</div>
		</div>

		<div class="form-group">
			<label for="length">Duración</label>
			<input class="form-control" type="text" name="length" id="length" value="<?php echo e($movie->length); ?>">
			<div class="invalid-feedback">Sólo se aceptan números sin decimales</div>
		</div>

		<div class="form-group">
			<label for="rating">Rating</label>
			<input class="form-control" type="text" name="rating" id="rating" value="<?php echo e($movie->rating); ?>">
			<div class="invalid-feedback">Sólo se aceptan números sin decimales</div>
		</div>

		<div class="form-group">
			<label for="release_date">Fecha de estreno</label>
			<input class="form-control" type="text" name="release_date" id="release_date" value="<?php echo e($movie->release_date); ?>">
		</div>

		<div class="form-group">
			<label for="banner">Banner</label>
		    <input type="file" name="files[]" id="banner" multiple>
		</div>

		<div class="form-group">
			<label for="genre_id">Género</label>
			<select class="form-control" name="genre_id" id="genre_id" >
				<option value="">Seleccionar</option>
			</select>
			<div class="invalid-feedback">Tenés que seleccionar un género</div>
		</div>

		<input type="hidden" name="id" value="<?php echo e($movie->id); ?>">

		<div class="form-group d-flex mt-5 justify-content-end">
			<button type="submit" class="btn btn-primary">Enviar</button>
		</div>

	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\curso-energia\proyecto-integrador-lucho\php\views/movies/show.blade.php ENDPATH**/ ?>