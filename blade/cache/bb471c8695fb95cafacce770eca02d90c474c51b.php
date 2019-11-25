<?php $__env->startSection('title'); ?>
	Nuevo title
<?php $__env->stopSection(); ?>

<?php $__env->startSection('head'); ?>
	<h1>Formulario</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title-page'); ?>
	Ejemplo de blade
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<form action="?">
		<div class="form-group">
			<label for="titulo">Título</label>
			<input class="form-control" type="text" name="titulo" id="titulo" value="<?php echo e($titulo); ?>">
		</div>

		<div class="form-group">
			<label for="duracion">Duración</label>
			<input class="form-control" type="text" name="duracion" id="duracion" value="<?php echo e($duracion); ?>">
		</div>

		<div class="form-group">
			<label for="actor">Actor</label>
			<input class="form-control" type="text" name="actor" id="actor">
			<input type="hidden" name="actor_id" id="actor_id" value="<?php echo e($actor_id); ?>">
		</div>
		<div class="form-group">
			<label for="actor">Puntos</label>
			<select name="puntos" id="puntos" class="form-control">
				<?php $__currentLoopData = $otraData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $punto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($punto); ?>"><?php echo e($punto); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Enviar</button>
		</div>
	</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
	Ministerio de Energía
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\curso-energia\blade\views/bootstrap/index.blade.php ENDPATH**/ ?>