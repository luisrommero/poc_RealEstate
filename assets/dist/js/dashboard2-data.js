/*Dashboard Init*/

"use strict";

/*****Ready function start*****/
$(document).ready(function(){
	$('#statement').DataTable({
		"bFilter": false,
		"bLengthChange": false,
		"bPaginate": false,
		"bInfo": false,
	});


if($('#chart_1').length > 0) {
	// Line Chart
	var data=[{
		period: '2018',
		Pagadas: 250,
		Pendientes: 100,
		EBITDA: 270
	}, {
		period: '2019',
		Pagadas: 280,
		Pendientes: 60,
		EBITDA: 310
	}, {
		period: '2020',
		Pagadas: 270,
		Pendientes: 100,
		EBITDA: 250
	}, {
		period: '2021',
		Pagadas: 280,
		Pendientes: 150,
		EBITDA: 290
	}, {
		period: '2022',
		Pagadas: 205,
		Pendientes: 100,
		EBITDA: 220
	},
	 {
		period: '2023',
		Pagadas: 250,
		Pendientes: 120,
		EBITDA: 300
	}];
	var dataNew=[{
		period: '2010',
		Pagadas: 210,
		Pendientes: 80,
		EBITDA: 200
	}, {
		period: '2011',
		Pagadas: 210,
		Pendientes: 150,
		EBITDA: 230
	}, {
		period: '2012',
		Pagadas: 280,
		Pendientes: 160,
		EBITDA: 250
	}, {
		period: '2013',
		Pagadas: 270,
		Pendientes: 70,
		EBITDA: 90
	}, {
		period: '2014',
		Pagadas: 280,
		Pendientes: 50,
		EBITDA: 90
	}, {
		period: '2015',
		Pagadas: 315,
		Pendientes: 20,
		EBITDA: 290
	},
	 {
		period: '2016',
		Pagadas: 250,
		Pendientes: 90,
		EBITDA: 200
	}];
	var lineChart = Morris.Area({
		element: 'chart_1',
		data: data,
		xkey: 'period',
		ykeys: ['Pagadas', 'Pendientes', 'EBITDA'],
		labels: ['Pagadas', 'Pendientes', 'EBITDA'],
		pointSize: 3,
		lineWidth: 2,
		pointStrokeColors:['#ff6028'],
		pointFillColors:['#ffffff'],
		behaveLikeLine: true,
		gridLineColor: 'rgba(33,33,33,0.1)',
		smooth: false,
		hideHover: 'auto',
		lineColors: ['#ffcfbe', '#ff6028', '#c63300'],
		resize: true,
		gridTextColor:'#878787',
		gridTextFamily:"Roboto",
		parseTime: false,
		fillOpacity:0.4
	});
	/* Switchery Init*/
	var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
	$('#morris_switch').each(function() {
		new Switchery($(this)[0], $(this).data());
	});
	var swichMorris = function() {
		if($("#morris_switch").is(":checked")) {
			lineChart.setData(data);
			lineChart.redraw();
			$('#tipoPropiedad').text('Comercial');
		} else {
			lineChart.setData(dataNew);
			lineChart.redraw();
			$('#tipoPropiedad').text('Habitacional');
		}
	}
	swichMorris();
	$(document).on('change', '#morris_switch', function () {
		swichMorris();
	});
	}
});
/*****Ready function end*****/

/*****Load function start*****/
$(window).on("load",function(){
	window.setTimeout(function(){
		$.toast({
			heading: 'Welcome to Admintres',
			text: 'Use the predefined ones, or specify a custom position object.',
			position: 'bottom-right',
			loaderBg:'#e8af48',
			icon: 'warning',
			hideAfter: 3500,
			stack: 6
		});
	}, 3000);
});
/*****Load function* end*****/

/*****E-Charts function start*****/
var echartsConfig = function() {
}
/*****E-Charts function end*****/

/*****Sparkline function start*****/
var sparklineLogin = function() {
	if( $('#sparkline_6').length > 0 ){
		$("#sparkline_6").sparkline([9,7,7,8,8,6,8,5,6], {
			type: 'bar',
			width: '100%',
			height: '155',
			barWidth: '8',
			resize: true,
			barSpacing: '10',
			barColor: '#ff6028',
			highlightSpotColor: '#ff6028'
		});
	}
}
/*****Sparkline function end*****/

/*****Resize function start*****/
var sparkResize,echartResize;
$(window).on("resize", function () {
	/*Sparkline Resize*/
	clearTimeout(sparkResize);
	sparkResize = setTimeout(sparklineLogin, 200);

	/*E-Chart Resize*/
	clearTimeout(echartResize);
	echartResize = setTimeout(echartsConfig, 200);
}).resize();
/*****Resize function end*****/

/*****Function Call start*****/
sparklineLogin();
echartsConfig();
/*****Function Call end*****/
