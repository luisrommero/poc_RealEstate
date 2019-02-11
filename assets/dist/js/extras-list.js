$(document).ready(function() {

  var slider = document.getElementById("myRange");
  var output = document.getElementById("demo");
  var inversion = 10000.0;
  var isr;
  var comision;
  var ganancia;
  var suma;
  var total;
  var mounth;
  var list_id = null;

  var url;
  output.innerHTML = slider.value;
  slider.oninput = function() {
    output.innerHTML = this.value;
    url = "project.php?id=" + list_id + "&amount=" + slider.value;
    document.getElementById("myLink").href = url;

  }


  $('.slider').mouseup(function(){
    $('#chart_2').empty();
    inversion = null;
    comision = null;
    total = null;
    mounth = $('.mounth').val();
    list_id = $(this).data('id');
    inversion = slider.value;
    // primer paso
    ganancia = inversion * 0.13;
    // segundo paso
    ganancia = ganancia * (mounth/12);
    // tercer
    isr = (ganancia * 0.20);
    // cuarto paso
    suma = +inversion + +ganancia;
    comision = +isr + (suma * 0.001);
    // quinto paso
    total = suma - comision;

    console.log("Ganancia: " + ganancia);
    console.log("ISR: " + isr);
    console.log("comision: " + comision);
    console.log("Inversion: " + inversion);
    console.log("Meses: " + mounth);

    if( $('#chart_2').length > 0 ){
      $('#chart_div').empty();
      $('#chart_div').html('<canvas id="chart_2" height="210"></canvas>');

  		var ctx6 = document.getElementById("chart_2").getContext("2d");
  		var data6 = {
  			 labels: [
  			"Invertido",
  			"ISR y Comisión",
  			"Ganancia"
  		],
  		datasets: [
  			{
  				data: [inversion , comision, total],
  				backgroundColor: [
  					"#ff6028",
  					"#ff936d",
  					"#ffaf93",
  				],
  				hoverBackgroundColor: [
  					"#ff6029",
  					"#ff937d",
  					"#ffaf94",
  				]
  			}]
  		};
  		var pieChart  = new Chart(ctx6,{
  			type: 'pie',
  			data: data6,
  			options: {
  				animation: {
  					duration:	3000
  				},
  				responsive: true,
  				maintainAspectRatio:false,
  				legend: {
  					display:false
  				},
  				tooltip: {
  					backgroundColor:'rgba(33,33,33,1)',
  					cornerRadius:0,
  					footerFontFamily:"'Roboto'"
  				},
  				elements: {
  					arc: {
  						borderWidth: 0
  					}
  				}
  			}
  		});
  	}
  });
  $('.mounth').click(function(){
    inversion = null;
    comision = null;
    total = null;
    $('#chart_2').empty();
    mounth = $('.mounth').val();
    list_id = $(this).data('id');
    inversion = slider.value;
    // primer paso
    ganancia = inversion * 0.13;
    // segundo paso
    ganancia = ganancia * (mounth/12);
    // tercer
    isr = (ganancia * 0.20);
    // cuarto paso
    suma = +inversion + +ganancia;
    comision = +isr + (suma * 0.001);
    // quinto paso
    total = suma - comision;

    console.log("Ganancia: " + ganancia);
    console.log("ISR: " + isr);
    console.log("comision: " + comision);
    console.log("Inversion: " + inversion);
    console.log("Meses: " + mounth);

    if( $('#chart_2').length > 0 ){
      $('#chart_div').empty();
      $('#chart_div').html('<canvas id="chart_2" height="210"></canvas>');
      var ctx6 = document.getElementById("chart_2").getContext("2d");
  		var data6 = {
  			 labels: [
  			"Invertido",
  			"ISR y Comisión",
  			"Ganancia"
  		],
  		datasets: [
  			{
  				data: [inversion , comision, total],
  				backgroundColor: [
  					"#ff6028",
  					"#ff936d",
  					"#ffaf93",
  				],
  				hoverBackgroundColor: [
  					"#ff6028",
  					"#ff936d",
  					"#ffaf93",
  				]
  			}]
  		};
  		var pieChart  = new Chart(ctx6,{
  			type: 'pie',
  			data: data6,
  			options: {
  				animation: {
  					duration:	3000
  				},
  				responsive: true,
  				maintainAspectRatio:false,
  				legend: {
  					display:false
  				},
  				tooltip: {
  					backgroundColor:'rgba(33,33,33,1)',
  					cornerRadius:0,
  					footerFontFamily:"'Roboto'"
  				},
  				elements: {
  					arc: {
  						borderWidth: 0
  					}
  				}
  			}
  		});
  	}
  });
});
