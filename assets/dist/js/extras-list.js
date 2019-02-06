$(document).ready(function() {

  var slider = document.getElementById("myRange");
  var output = document.getElementById("demo");
  var list_id = null;
  $('.slider').mousemove(function(){
    list_id = $(this).data('id');
  });

  var url;
  output.innerHTML = slider.value;
  slider.oninput = function() {
    output.innerHTML = this.value;
    url = "project.php?id=" + list_id + "&amount=" + slider.value;
    document.getElementById("myLink").href = url;

  }

});
