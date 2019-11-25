<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo e($movie->getColumna('title')); ?></title>
	<?php echo $__env->make('partials/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>
	<h1><?php echo e($movie->getColumna('title')); ?></h1>
	
	<p><strong>Duración: </strong><?php echo e($movie->getColumna('length')); ?></p>

	<p><strong>Estreno: </strong><?php echo e($movie->getColumna('release_date')); ?></p>
</body>
</html><?php /**PATH C:\xampp\htdocs\curso-energia\blade\views/movies/show.blade.php ENDPATH**/ ?>