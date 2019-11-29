<?php $__env->startSection('title'); ?>
	<?php echo e($movie->getColumna('title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('head'); ?>
	<?php echo $__env->make('partials/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
	<h1><?php echo e($movie->getColumna('title')); ?></h1>
	
	<p><strong>Duración: </strong><?php echo e($movie->getColumna('length')); ?></p>

	<p><strong>Estreno: </strong><?php echo e($movie->getColumna('release_date')); ?></p>

	<p><strong>Genero: </strong><?php echo e($movie->getColumna('rating')); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('movies/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\curso-energia\blade\views/movies/show.blade.php ENDPATH**/ ?>