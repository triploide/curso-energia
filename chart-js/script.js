$(document).ready(function () {
	//colores ['#FF6F61', '#6B5B95', '#88B04B', '#009B77', '#D65076', '#EFC050', '#9B2335', '#E15D44'];
	var contexto = document.getElementById('grafico').getContext('2d');

	/*
	var data = {
		labels: ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'],
		datasets: [{
			label: 'Visitas',
			data: [24, 23, 56, 24, 19],
			//backgroundColor: ['#FF6F61', '#6B5B95', '#88B04B', '#009B77', '#D65076'],
			backgroundColor: '#FF6F61',
			borderColor: '#FF6F61',
			borderWidth: 3,
			fill: false
		}, {
			label: 'Reproducciones',
			data: [13, 17, 32, 11, 8],
			//backgroundColor: ['#FF6F61', '#6B5B95', '#88B04B', '#009B77', '#D65076'],
			backgroundColor: '#6B5B95',
			borderColor: '#6B5B95',
			borderWidth: 3,
			fill: false
		}]
	}
	*/

	var data = {
		labels: null,
		datasets: [{
			label: 'Rating',
			data: null,
			//backgroundColor: ['#FF6F61', '#6B5B95', '#88B04B', '#009B77', '#D65076'],
			backgroundColor: '#FF6F61',
			borderColor: '#FF6F61',
			borderWidth: 3,
			fill: true
		}],
	}

	var grafico;

	var fecha = $('#fecha').val(); //inicializar las variables para que funcione el gráfico
	var rating = $('#rating').val();  //inicializar las variables para que funcione el gráfico

	$.ajax({
		url: 'chartController.php',
		type: 'GET',
		data: {
			fecha: fecha,
			rating: rating
		},
		success: function (resultado) {
			data.labels = resultado.labels;
			data.datasets[0].data = resultado.data;

			grafico = new Chart(contexto, {
				type: 'horizontalBar',
				data: data,
				options: {
			        scales: {
			            xAxes: [{
			                ticks: {
			                    beginAtZero: true
			                }
			            }]
			        }
			    }
			});
		}
	});

	//on change fecha
	$('#fecha, #rating').on('change', function () {
		var fecha = $('#fecha').val();
		var rating = $('#rating').val();

		$.ajax({
			url: 'chartController.php',
			type: 'GET',
			data: {
				fecha: fecha,
				rating: rating
			},
			success: function (resultado) {
				console.log('test2')
				grafico.data.labels = resultado.labels;
				grafico.data.datasets[0].data = resultado.data;
				grafico.update();
			}
		})
	});

	//ajax

	//on success ajax

	//seteo otra vez
	//grafico.data.labels = resultado.labels;
	//grafico.data.datasets[0].data = resultado.data;
	//grafico.update();

	
});