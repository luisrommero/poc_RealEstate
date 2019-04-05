<!DOCTYPE html>
<?php
if(!isset($_COOKIE['user'])) {
    header("Location: public/"); // uncomment when cookies created

} else {
  include('database/con.php');
  $con = connectionBD();

  // sql script
  // $list_sql = "SELECT * FROM list";
  $list_sql = "SELECT list.id_list, list.name_list, list.name_owner, list.inv_min, list.inv_max, list.percentage, project.id_project, project.p_address, project.p_type, project.p_desc, project.p_goal FROM list INNER JOIN project ON list.id_list = project.id_list;";

  // its a bad cheat
  $list_sql_cheat = "SELECT id_list FROM list;";
  $result_set_cheat = mysqli_query($con, $list_sql_cheat);

  // ResultSet
  $result_set = mysqli_query($con, $list_sql);

}
?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>RealBLOCK | High Performance Real Estate Investments Company</title>
  <meta name="description" content="RealBLOCK | High Performance Real Estate Investments Company" />
  <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Admintres Admin, Admintresadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
  <meta name="author" content="hencework" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <!-- Data table CSS -->
  <link href="vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

  <!-- Toast CSS -->
  <link href="vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">

  <!-- Morris Charts CSS -->
  <link href="vendors/bower_components/morris.js/morris.css" rel="stylesheet" type="text/css" />

  <!-- Chartist CSS -->
  <link href="vendors/bower_components/chartist/dist/chartist.min.css" rel="stylesheet" type="text/css" />


  <!-- vector map CSS -->
  <link href="vendors/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" type="text/css" />

  <!-- Custom CSS -->
  <link href="assets/dist/css/style.css" rel="stylesheet" type="text/css">

  <!-- Extra CSS -->
  <link href="assets/dist/css/extras-list.css" rel="stylesheet" type="text/css">
</head>

<body>
  <!-- Preloader -->
  <div class="preloader-it">
    <div class="la-anim-1"></div>
  </div>
  <!-- /Preloader -->
  <div class="wrapper theme-2-active navbar-top-light horizontal-nav">

    <!--  -->
    <?php include('import/header.php'); ?>
    <!--  -->
    
    <!-- Main Content -->
    <div class="page-wrapper">
      <div class="container pt-30">
        <?php   while ($row = mysqli_fetch_assoc($result_set)) {?>
        <!-- Row -->
        <div class="row">
          <!-- ==========content goes here========== -->

          <div class="col-sm-12">
            <div class="panel panel-default card-view">
              <div class="panel-wrapper collapse in">
                <div class="panel-body pt-0">
                  <div class="row">

                        <!-- START carousel-->
                        <!-- <div id="carousel-example-captions-1" data-ride="carousel" class="carousel slide">
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-example-captions-1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-captions-1" data-slide-to="1"></li>
                            <li data-target="#carousel-example-captions-1" data-slide-to="2"></li>
                          </ol>
                          <div role="listbox" class="carousel-inner">
                            <div class="item active">
                              <img src="assets/img/uploads/slide-01-san.jpg" alt="First slide image">
                            </div>
                            <div class="item">
                              <img src="assets/img/uploads/slide-02.jpg" alt="Second slide image">
                            </div>
                            <div class="item">
                              <img src="assets/img/uploads/slide-03.jpg" alt="Second slide image">
                            </div>
                          </div>
                        </div> -->
                        <img src="assets/img/uploads/property-5.jpg" alt="" class="col-md-5 project-photo" width="100%">
                        <!-- END carousel-->
                    <div class="col-md-7">
                      <div class="product-detail-wrap">
                        <!-- progress bar -->
                        <div class="col-md-5">
                          <h4 class="mb-5 weight-500">
                            <?php echo $row['name_list'] ?>
                          </h4>
                          <p class="mb-25">
                            <?php echo $row['p_desc'] ?>
                          </p>

                          <div class="progress mt-15">
                            <div class="progress-bar progress-bar-info active progress-bar-striped" aria-valuenow="<?php echo $row['percentage'] ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $row['percentage'] ?>%" role="progressbar">
                            </div>
                          </div>

                          <div class="average-review inline-block mb-10">
                            <span class="review-count">Inversion <?php echo $row['percentage'] ?>%
                              </span>
                          </div>

                          <div class="average-review mb-10">
                            <span class="review-count">TIR: 18%
                              </span>
                          </div>

                          <div class="head-font mb-15">
                            Inv. Mínima: <p class="pull-right product-price ">
                              <?php
                              setlocale(LC_MONETARY, 'en_US');
                              echo money_format('%(#10n', $row['inv_min']) . "\n";
                              ?>
                            </p>
                          </div>
                          <div class="head-font mb-15">
                            Inv. Maxima: <p class="pull-right product-price ">
                              <?php
                              setlocale(LC_MONETARY, 'en_US');
                              echo money_format('%(#10n', $row['inv_max']) . "\n";
                              ?>
                            </p>
                          </div>
                          <div class="head-font mb-15" type="number">
                            Meta: <p class="pull-right product-price ">USD
                              <?php
                              setlocale(LC_MONETARY, 'en_US');
                              echo money_format('%(#10n', $row['p_goal']) . "\n";
                              ?>

                            </p>
                          </div>


                        </div>
                        <div class="col-md-7">

                          <div class="pt-20" id="chart_div">
                            <canvas id="chart_2_<?php echo $row['id_list']  ?>" height="150"></canvas>
                          </div>
                          <input type="hidden" name="" id="hid_<?php echo $row['id_list'] ?>" value="<?php echo $row['id_list'] ?>">
                            <input type="range"
                            min="<?php echo $row['inv_min'] ?>"
                            max="<?php echo $row['inv_max'] ?>"
                            value="<?php echo $row['inv_min'] ?>"
                            data-id_<?php echo $row['id_list']  ?>="<?php echo $row['id_list'] ?>"
                            class="slider_<?php echo $row['id_list'] ?> mt-15" id="myRange_<?php echo $row['id_list']  ?>">

                          <div class="form-group mt-30 mb-30">
                            <select class="form-control mounth_<?php echo $row['id_list'] ?>">
                              <option value="6">6 Meses</option>
                              <option value="12">12 Meses</option>
                              <option value="18">18 Meses</option>
                              <option value="24">24 Meses</option>
                              <option value="36">36 Meses</option>
                            </select>
                          </div>

                          <div class="btn-group pull-right pl-20">
                            <a href="project.php?id=<?php echo $row['id_list'] ?>&amount=<?php echo $row['inv_min'] ?>" class="btn btn-dark btn-anim" id="myLink_<?php echo $row['id_list']  ?>">
                              <i class="fa fa-money"></i>
                              <span class="btn-text">&iexcl;Invertir $<span id="demo_<?php echo $row['id_list']  ?>"></span>!</span>
                            </a>
                          </div>

                          <div class="btn-group wishlist pull-right">
                            <a href="project.php?id=<?php echo $row['id_list'] ?>" class="btn btn-default btn-outline btn-anim">
                              <i class="fa fa-eye"></i>
                              <span class="btn-text">Ver M&aacute;s</span>
                            </a>
                          </div>

                        </div>

                        <!-- progress bar -->

                        <!-- slider -->
                        <!-- <input class="vertical-spin"
                               type="text"
                               data-bts-button-down-class="btn btn-default"
                               data-bts-button-up-class="btn btn-default"
                               value="<?php echo $row['inv_min'] ?>"
                               name="vertical-spin"> -->

                        <!-- slider -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- ==========content goes here========== -->
        </div>
        <?php } ?>
      </div>
      <!-- /Row -->

      <!-- Footer -->
      <footer class="footer pl-30 pr-30">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p>2019 &copy; eos Software. All rights reserved</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Follow Us</p>
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-google-plus"></i></a>
            </div>
          </div>
        </div>
      </footer>
      <!-- /Footer -->

    </div>
    <!-- /Main Content -->

  </div>
  <!-- /#wrapper -->

  <!-- JavaScript -->

  <!-- jQuery -->
  <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- Data table JavaScript -->
  <script src="vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>

  <!-- Slimscroll JavaScript -->
  <script src="assets/dist/js/jquery.slimscroll.js"></script>

  <!-- Progressbar Animation JavaScript -->
  <script src="vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
  <script src="vendors/bower_components/jquery.counterup/jquery.counterup.min.js"></script>

  <!-- Fancy Dropdown JS -->
  <script src="assets/dist/js/dropdown-bootstrap-extended.js"></script>

  <!-- Sparkline JavaScript -->
  <script src="vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>

  <!-- Owl JavaScript -->
  <script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

  <!-- Switchery JavaScript -->
  <script src="vendors/bower_components/switchery/dist/switchery.min.js"></script>

  <!-- Vector Maps JavaScript -->
  <script src="vendors/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="vendors/vectormap/jquery-jvectormap-us-aea-en.js"></script>
  <script src="vendors/vectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="assets/dist/js/vectormap-data.js"></script>

  <!-- Toast JavaScript -->
  <script src="vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>

  <!-- Piety JavaScript -->
  <script src="vendors/bower_components/peity/jquery.peity.min.js"></script>
  <script src="assets/dist/js/peity-data.js"></script>

  <!-- Chartist JavaScript -->
  <script src="vendors/bower_components/chartist/dist/chartist.min.js"></script>

  <!-- Morris Charts JavaScript -->
  <script src="vendors/bower_components/raphael/raphael.min.js"></script>
  <script src="vendors/bower_components/morris.js/morris.min.js"></script>
  <script src="vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>

  <!-- ChartJS JavaScript -->
  <script src="vendors/chart.js/Chart.min.js"></script>

  <!-- Init JavaScript -->
  <script src="assets/dist/js/init.js"></script>
  <!-- <script src="assets/dist/js/dashboard-data.js"></script> -->

  <!-- js functions for list -->
  <script type="text/javascript" src="assets/dist/js/extras-list.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
      <?php   while ($row = mysqli_fetch_assoc($result_set_cheat)) {?>
      var slider = document.getElementById("myRange_<?php echo $row['id_list'] ?>");
      var output = document.getElementById("demo_<?php echo $row['id_list'] ?>");
      var inversion = 10000.0;
      var isr;
      var comision;
      var ganancia;
      var suma;
      var total;
      var mounth;
      var list_id_<?php echo $row['id_list'] ?> = <?php echo $row['id_list'] ?>;

      var url;
      output.innerHTML = slider.value;
      slider.oninput = function() {
        output.innerHTML = this.value;
        url = "project.php?id=" + list_id_<?php echo $row['id_list'] ?> + "&amount=" + slider.value;
        document.getElementById("myLink_<?php echo $row['id_list'] ?>").href = url;

      }


      $('.slider_<?php echo $row['id_list'] ?>').mouseup(function(){
        $('#chart_2_<?php echo $row['id_list'] ?>').empty();
        inversion = null;
        comision = null;
        total = null;
        mounth = $('.mounth_<?php echo $row['id_list'] ?>').val();
        //list_id_<?php echo $row['id_list'] ?> = $(this).data('id_<?php echo $row['id_list'] ?>');
        list_id_<?php echo $row['id_list'] ?> = document.getElementById('hid_<?php echo $row['id_list'] ?>').value;
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

        if( $('#chart_2_<?php echo $row['id_list'] ?>').length > 0 ){
          $('#chart_div_<?php echo $row['id_list'] ?>').empty();
          $('#chart_div_<?php echo $row['id_list'] ?>').html('<canvas id="chart_2_<?php echo $row['id_list'] ?>" height="150"></canvas>');

          var ctx6 = document.getElementById("chart_2_<?php echo $row['id_list'] ?>").getContext("2d");
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
        $('.mounth_<?php echo $row['id_list'] ?>').change(function(){
          inversion = null;
          comision = null;
          total = null;
          $('#chart_2_<?php echo $row['id_list'] ?>').empty();
          mounth = $('.mounth_<?php echo $row['id_list'] ?>').val();
          // list_id_<?php echo $row['id_list'] ?> = $(this).data('id_<?php echo $row['id_list'] ?>');
          list_id_<?php echo $row['id_list'] ?> = document.getElementById('hid_<?php echo $row['id_list'] ?>').value;

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

          if( $('#chart_2_<?php echo $row['id_list'] ?>').length > 0 ){
            $('#chart_div_<?php echo $row['id_list'] ?>').empty();
            $('#chart_div_<?php echo $row['id_list'] ?>').html('<canvas id="chart_2_<?php echo $row['id_list'] ?>" height="150"></canvas>');
            var ctx6 = document.getElementById("chart_2_<?php echo $row['id_list'] ?>").getContext("2d");
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
          <?php } ?>
  });
  </script>
</body>

</html>
<!--
deducir impuestos
comisión inversionistas

10 mil, taza anual 13%, dura 18 meses, comisión inv 0.1, calcular retorno en 5 pasos:

1.- ganancia de intereses por un año: 10,000 * 0.13 = 1,300
2.- ganancia de intereses por los 18 meses del proyecto: 1,300 x (18/12) = 1,950
3.- retención de ISR de 20%: 1,950 x 0.20 = 390
4.- restar comisión del inversionista 0.1, aplica a capital invertido más intereses: (10,000 + 1950) * 0.001 = 11.95
5.- al final del plazo se recibirá: 10,000 + 1950 - 390 - 11.95 = 11,548.05




-->
