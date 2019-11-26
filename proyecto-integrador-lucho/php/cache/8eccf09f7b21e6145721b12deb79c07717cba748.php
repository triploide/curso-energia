<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title><?php echo $__env->yieldContent('title'); ?></title>
		<?php echo $__env->make('tpl/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->yieldContent('head'); ?>
	</head>
	<body>
		<div class="container">
			<?php echo $__env->make('tpl/nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

			<main class="row">
				<div class="col-md-3">
					<?php echo $__env->make('tpl/menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				</div>
				<div class="col-md-9">
					<?php echo $__env->yieldContent('content'); ?>
				</div>
			</main>
		</div>
	</body>
</html><?php /**PATH C:\xampp\htdocs\curso-energia\proyecto-integrador-lucho\php\views/app.blade.php ENDPATH**/ ?>