<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>JSON</title>
	<script>
		var cars = {
			"titulo": "Cars",
			"duracion": 120,
			"ATP": true,
			"genero": "Aventura",
			"director": {
				"nombre": "Jhon",
				"apellido": "Doe"
			},
			"mostrarTitulo": function () {
				console.log('La pelí se llama ' + this.titulo);
			}
		}

		var prop = 'titulo';

		console.log(cars.titulo, cars.ATP);
		console.log(cars['titulo']);
		console.log(cars[prop]);

		console.log(cars.director.nombre);
		console.log(cars.director);

		cars.mostrarTitulo();
	</script>
</head>
<body>
	<h1>JSON</h1>
</body>
</html>