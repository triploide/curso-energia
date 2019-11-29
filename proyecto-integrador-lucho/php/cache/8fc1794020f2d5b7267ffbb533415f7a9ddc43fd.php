<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo e($titulo); ?></title>
	<?php echo $__env->make('partials/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>
	<?php if($mostrarTitulo): ?>
		<h1><?php echo e($titulo); ?></h1>
	<?php else: ?>
		<h1>Sin título</h1>
	<?php endif; ?>
	
	<p><?php echo e($contenido); ?></p>

	<ul>
		<?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li><?php echo e($tag); ?></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
</body>
</html><?php /**PATH C:\xampp\htdocs\curso-energia\blade\views/movies/show.blade.php ENDPATH**/ ?>