<div class="grafikcovid">
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("Grafik", {
	animationEnabled: true,
	theme: "dark1",
	title:{
		text: "Data Dan Statistik Penyebaran COVID-19 Di Indonesia"
	},
	axisY: {
		title: "Jumlahnya"
	},
	data: [{        
		type: "column",  
		showInLegend: true, 
		legendMarkerColor: "grey",
		legendText: "Data:04-06-2021",
		dataPoints: [      
			{ y: 1842559, label: "Positif" },
			{ y: 1690000,  label: "Sembuh" },
			{ y: 51081,  label: "Meninggal" },
		]
	}]
});
chart.render();

}
</script>
</head>
<body>
<div id="Grafik" style="height: 430px; width: 68%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</div>