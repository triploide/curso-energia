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
		}]
	}

	$.ajax({
		url: 'chartController.php',
		type: 'GET',
		success: function (resultado) {
			data.labels = resultado.labels;
			data.datasets[0].data = resultado.data;

			var grafico = new Chart(contexto, {
				type: 'line',
				data: data
			});
		}
	});

	
});