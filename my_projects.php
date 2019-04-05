<!DOCTYPE html>
<?php
if(!isset($_COOKIE['user'])) {
    header("Location: public/"); // uncomment when cookies created

} else {
  include('database/con.php');
  $con = connectionBD();

  // sql script
  // $list_sql = "SELECT * FROM list";
  $list_sql = "SELECT list.id_list, list.name_list, list.name_owner, list.inv_min, list.percentage, project.id_project, project.p_address, project.p_type, project.p_desc, project.p_goal FROM list INNER JOIN project ON list.id_list = project.id_list;";

  // ResultSet
  $result_set = mysqli_query($con, $list_sql);

}
?>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>RealBLOCK | High Performance Real Estate Investments Company</title>
  <meta name="description" content="Admintres is a Dashboard & Admin Site Responsive Template by hencework." />
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
                    <div class="col-md-3">
                      <div class="item-big">
                        <!-- START carousel-->
                        <div id="carousel-example-captions-1" data-ride="carousel" class="carousel slide">
                          <ol class="carousel-indicators">
                             <li data-target="#carousel-example-captions-1" data-slide-to="0" class="active"></li>
                             <li data-target="#carousel-example-captions-1" data-slide-to="1"></li>
                          </ol>
                          <div role="listbox" class="carousel-inner">
                             <div class="item active">
                               <img src="assets/img/gallery/mock1.jpg" alt="First slide image">
                             </div>
                             <div class="item">
                               <img src="assets/img/gallery/mock4.jpg" alt="Second slide image">
                             </div>
                          </div>
                        </div>
                        <!-- END carousel-->
                      </div>
                    </div>

                    <div class="col-md-9">
                      <div class="product-detail-wrap">
                        <div class="">
                          <!-- progress bar -->
                          <div class="progress mt-40">
  													<div class="progress-bar progress-bar-info active progress-bar-striped"
                                 aria-valuenow="85"
                                 aria-valuemin="0"
                                 aria-valuemax="100"
                                 style="width: <?php echo $row['percentage'] ?>%"
                                 role="progressbar">
                            </div>
  												</div>
                          <!-- progress bar -->
                        </div>
                        <div class="average-review inline-block mb-10">
                          &nbsp;(<span class="review-count"><?php echo $row['percentage'] ?>%</span> de progreso)
                        </div>
                        <h4 class="mb-5 weight-500">
                          <?php echo $row['name_list'] ?>
                        </h4>
                        <div class="head-font mb-15">
                          Inv. Mínima: <p class="product-price ">$ <?php echo $row['inv_min'] ?></p>
                        </div>
                        <p class="mb-25">
                          <?php echo $row['p_desc'] ?>
                        </p>

                        <!-- slider -->
                        <!-- <input class="vertical-spin"
                               type="text"
                               data-bts-button-down-class="btn btn-default"
                               data-bts-button-up-class="btn btn-default"
                               value="<?php echo $row['inv_min'] ?>"
                               name="vertical-spin"> -->
                        <div class="row">
                          <div class="col-md-4">
                            <div class="slidecontainer">
                              <input  type="range"
                              min="<?php echo $row['inv_min'] ?>"
                              max="<?php echo $row['p_goal'] ?>"
                              value="<?php echo $row['inv_min'] ?>"
                              data-id="<?php echo $row['id_list'] ?>"
                              class="slider"
                              id="myRange">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="btn-group mr-10">
                              <a href="project.php?id=<?php echo $row['id_list'] ?>&amount=<?php echo $row['inv_min'] ?>"
                                class="btn btn-dark btn-anim"
                                id="myLink">
                                <i class="fa fa-money"></i>
                                <span class="btn-text">&iexcl;Invertir $<span id="demo"></span>!</span>
                              </a>
                            </div>
                            <div class="btn-group wishlist">
                              <a href="project.php?id=<?php echo $row['id_list'] ?>" class="btn btn-default btn-outline btn-anim">
                                <i class="fa fa-eye"></i>
                                <span class="btn-text">Ver M&aacute;s</span>
                              </a>
                            </div>
                          </div>
                        </div>
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
  <script src="assets/dist/js/dashboard-data.js"></script>

  <!-- js functions for list -->
  <script type="text/javascript" src="assets/dist/js/extras-list.js"></script>
</body>

</html>
