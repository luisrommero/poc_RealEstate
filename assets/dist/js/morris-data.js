/*Morris Init*/

function morrisChart() {
  // proof
  if ($('#morris_bar_chart').length > 0)
    // Bar Chart
    Morris.Bar({
      element: 'morris_bar_chart',
      data: [{
        device: 'Max',
        geekbench: inv_max
      }, {
        device: 'Min',
        geekbench: inv_min
      }, {
        device: 'Meta',
        geekbench: p_goal
      }],
      xkey: 'device',
      ykeys: ['geekbench'],
      labels: ['Geekbench'],
      barRatio: 0.4,
      xLabelAngle: 35,
      pointSize: 1,
      barOpacity: 1,
      pointStrokeColors: ['#ff6028'],
      behaveLikeLine: true,
      grid: false,
      gridTextColor: '#878787',
      hideHover: 'auto',
      barColors: ['#ff6028'],
      resize: true,
      gridTextFamily: "Roboto"
    });
  // proof
}

$(document).ready(function() {
  morrisChart();

  $('#inv_min, #inv_max, #p_goal').keyup(function() {
    $('#morris_bar_chart').empty();
    var inv_min = $('#inv_min').val() <= 0 ? 0 : $('#inv_min').val();
    var inv_max = $('#inv_max').val() <= 0 ? 0 : $('#inv_max').val();
    var p_goal = $('#p_goal').val() <= 0 ? 0 : $('#p_goal').val();
		console.log('inv_min = ' + inv_min);
		console.log('inv_max = ' + inv_max);
		console.log('p_goal = ' + p_goal);
    if ($('#morris_bar_chart').length > 0)
      // Bar Chart
      Morris.Bar({
        element: 'morris_bar_chart',
        data: [{
          device: 'Max',
          geekbench: inv_max
        }, {
          device: 'Min',
          geekbench: inv_min
        }, {
          device: 'Meta',
          geekbench: p_goal
        }],
        xkey: 'device',
        ykeys: ['geekbench'],
        labels: ['Geekbench'],
        barRatio: 0.4,
        xLabelAngle: 35,
        pointSize: 1,
        barOpacity: 1,
        pointStrokeColors: ['#ff6028'],
        behaveLikeLine: true,
        grid: false,
        gridTextColor: '#878787',
        hideHover: 'auto',
        barColors: ['#ff6028'],
        resize: true,
        gridTextFamily: "Roboto"
      });
  });
});
