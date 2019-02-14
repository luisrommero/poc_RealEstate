$(document).ready(function() {

});

function no_1() {
  var slider = document.getElementById("myRange_1");
  var output = document.getElementById("demo_1");
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
    document.getElementById("myLink_1").href = url;

  }


  $('.slider_1').mouseup(function(){
    $('#chart_2_1').empty();
    inversion = null;
    comision = null;
    total = null;
    mounth = $('.mounth_1').val();
    list_id = $(this).data('id_1');
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

    if( $('#chart_2_1').length > 0 ){
      $('#chart_div_1').empty();
      $('#chart_div_1').html('<canvas id="chart_2_1" height="150"></canvas>');

      var ctx6 = document.getElementById("chart_2_1").getContext("2d");
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
  $('.mounth_1').change(function(){
    inversion = null;
    comision = null;
    total = null;
    $('#chart_2_1').empty();
    mounth = $('.mounth_1').val();
    list_id = $(this).data('id_1');
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

    if( $('#chart_2_1').length > 0 ){
      $('#chart_div_1').empty();
      $('#chart_div_1').html('<canvas id="chart_2_1" height="150"></canvas>');
      var ctx6 = document.getElementById("chart_2_1").getContext("2d");
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
}

function no_2() {
  var slider = document.getElementById("myRange_2");
  var output = document.getElementById("demo_2");
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
    document.getElementById("myLink_2").href = url;

  }


  $('.slider_2').mouseup(function(){
    $('#chart_2_2').empty();
    inversion = null;
    comision = null;
    total = null;
    mounth = $('.mounth_2').val();
    list_id = $(this).data('id_2');
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

    if( $('#chart_2_2').length > 0 ){
      $('#chart_div_2').empty();
      $('#chart_div_2').html('<canvas id="chart_2_2" height="150"></canvas>');

      var ctx6 = document.getElementById("chart_2_2").getContext("2d");
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
  $('.mounth_2').change(function(){
    inversion = null;
    comision = null;
    total = null;
    $('#chart_2_2').empty();
    mounth = $('.mounth_2').val();
    list_id = $(this).data('id_2');
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

    if( $('#chart_2_2').length > 0 ){
      $('#chart_div_2').empty();
      $('#chart_div_2').html('<canvas id="chart_2_2" height="150"></canvas>');
      var ctx6 = document.getElementById("chart_2_2").getContext("2d");
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
}

function no_3() {
  var slider = document.getElementById("myRange_3");
  var output = document.getElementById("demo_3");
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
    document.getElementById("myLink_3").href = url;

  }


  $('.slider_3').mouseup(function(){
    $('#chart_2_3').empty();
    inversion = null;
    comision = null;
    total = null;
    mounth = $('.mounth_3').val();
    list_id = $(this).data('id_3');
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

    if( $('#chart_2_3').length > 0 ){
      $('#chart_div_3').empty();
      $('#chart_div_3').html('<canvas id="chart_2_3" height="150"></canvas>');

      var ctx6 = document.getElementById("chart_2_3").getContext("2d");
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
  $('.mounth_3').change(function(){
    inversion = null;
    comision = null;
    total = null;
    $('#chart_2_3').empty();
    mounth = $('.mounth_3').val();
    list_id = $(this).data('id_3');
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

    if( $('#chart_2_3').length > 0 ){
      $('#chart_div_3').empty();
      $('#chart_div_3').html('<canvas id="chart_2_3" height="150"></canvas>');
      var ctx6 = document.getElementById("chart_2_3").getContext("2d");
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
}

function no_4() {
  var slider = document.getElementById("myRange_4");
  var output = document.getElementById("demo_4");
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
    document.getElementById("myLink_3").href = url;

  }


  $('.slider_4').mouseup(function(){
    $('#chart_2_4').empty();
    inversion = null;
    comision = null;
    total = null;
    mounth = $('.mounth_4').val();
    list_id = $(this).data('id_4');
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

    if( $('#chart_2_4').length > 0 ){
      $('#chart_div_4').empty();
      $('#chart_div_4').html('<canvas id="chart_2_4" height="150"></canvas>');

      var ctx6 = document.getElementById("chart_2_4").getContext("2d");
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
  $('.mounth_4').change(function(){
    inversion = null;
    comision = null;
    total = null;
    $('#chart_2_4').empty();
    mounth = $('.mounth_4').val();
    list_id = $(this).data('id_4');
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

    if( $('#chart_2_4').length > 0 ){
      $('#chart_div_4').empty();
      $('#chart_div_4').html('<canvas id="chart_2_4" height="150"></canvas>');
      var ctx6 = document.getElementById("chart_2_4").getContext("2d");
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
}
