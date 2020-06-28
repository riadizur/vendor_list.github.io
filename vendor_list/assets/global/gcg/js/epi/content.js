// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
	number = (number + '').replace(',', '').replace(' ', '');
	var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
	s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
	if (s[0].length > 3) {
		s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
	}
	if ((s[1] || '').length < prec) {
		s[1] = s[1] || '';
		s[1] += new Array(prec - s[1].length + 1).join('0');
	}
	return s.join(dec);
}

// Bar Chart Example
var bar_klasifikasi = document.getElementById("myBarChart");
var myBarChart = new Chart(bar_klasifikasi, {
	type: 'bar',
	data: {
		labels: ["January", "February", "March", "April", "May", "June"],
		datasets: [{
			label: "Klasifikasi",
			data: [4215, 5312, 6251, 7841, 9821, 14984],
			backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
			borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
			borderWidth: 1,
		}],
	},
	options: {
		maintainAspectRatio: false,
		layout: {
				padding: {
				left: 10,
				right: 25,
				top: 25,
				bottom: 0
			}
		},
		scales: {
		  xAxes: [{
			gridLines: {
			  display: false,
			  drawBorder: false
			},
			ticks: {
			  beginAtZero:true
			},
			maxBarThickness: 50,
		  }],
		  yAxes: [{
			ticks: {
			  padding: 10,
			  // Include a dollar sign in the ticks
			  callback: function(value, index, values) {
				return '';
				//return '$' + number_format(value);
			  }
			},
			gridLines: {
			  color: "rgb(234, 236, 244)",
			  zeroLineColor: "rgb(234, 236, 244)",
			  drawBorder: false,
			  borderDash: [2],
			  zeroLineBorderDash: [2]
			}
		  }],
		},
		legend: {
		  display: false
		},
		tooltips: false,
		animation: {
			duration: 0,
			onComplete: function () {
				var chartInstance = this.chart,
				bar_klasifikasi = chartInstance.ctx;
				bar_klasifikasi.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
				bar_klasifikasi.textAlign = 'center';
				bar_klasifikasi.textBaseline = 'bottom';

				this.data.datasets.forEach(function (dataset, i) {
					var meta = chartInstance.controller.getDatasetMeta(i);
					meta.data.forEach(function (bar, index) {
						var data = dataset.data[index];                            
						bar_klasifikasi.fillText(number_format(data), bar._model.x, bar._model.y - 5);
					});
				});
			}
		},
	
	
	
	}
});
