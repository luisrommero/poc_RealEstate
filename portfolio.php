<!DOCTYPE html>
<?php
if(!isset($_COOKIE['user'])) {
    header("Location: public/"); // uncomment when cookies created

} else {
  include('database/con.php');
  $con = connectionBD();

}
?>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>RealBLOCK | High Performance Real Estate Investments Company</title>
	<meta name="description" content="Admintres is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Admintres Admin, Admintresadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Data table CSS -->
	<link href="vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

	<!-- Toast CSS -->
	<link href="vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">

	<!-- Morris Charts CSS -->
    <link href="vendors/bower_components/morris.js/morris.css" rel="stylesheet" type="text/css"/>

	<!-- Chartist CSS -->
	<link href="vendors/bower_components/chartist/dist/chartist.min.css" rel="stylesheet" type="text/css"/>


	<!-- vector map CSS -->
	<link href="vendors/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" type="text/css"/>

	<!-- Custom CSS -->
	<link href="assets/dist/css/style.css" rel="stylesheet" type="text/css">
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
				<!-- Row -->
				<div class="row">
          <!-- ==========content goes here========== -->

          <div class="col-sm-4 pull-right mb-40">
            <a href="#" class="btn btn-primary btn-sm btn-block" role="button">Nuevo Portafolio</a>
          </div>

          <!-- Property -->

          <div class="col-sm-12">
            <div class="panel panel-default border-panel card-view">
              <div class="panel-heading">
                <div class="pull-left">
                  <h4 class="panel-title txt-dark">Portafolio RealBlock</h4>
                  <p class="">Damasco + Coliving Valle + Vallarta</p>
                </div>
                <div class="pull-right">
                  <p class="text-muted">Portafolio Venta <i class="fa fa-th-large font-13"></i></p>
                </div>
                <div class="clearfix"></div>
              </div>

              <div class="panel-body">
                <div class="col-sm-3">
                  <img src="assets/img/uploads/property-1.jpg" alt="" class="" width="100%">
                </div>

                <div class="col-sm-3">
                  <img src="assets/img/uploads/property-2.jpg" alt="" class="" width="100%">
                </div>

                <div class="col-sm-3">
                  <img src="assets/img/uploads/property-3.jpg" alt="" class="" width="100%">
                </div>

                <div class="col-sm-3">
                  <img src="assets/img/uploads/property-4.jpg" alt="" class="" width="100%">
                </div>

                <hr class="light-grey-hr row mt-0 mb-10"/>
                <div class="text-center">
                  <div class="inline-block "><h5></h5></div>
                </div>
                <hr class="light-grey-hr row mt-10 mb-15"/>
                  <div class="text-center">
                    <div class="inline-block mr-45 pixelef" style="v"><h6>4 Propiedades</h6><small></small></div>
                    <div class="inline-block mr-45"><h6>Costo real</h6><small>$160,000</small></div>
                    <!-- <div class="inline-block mr-45"><h6>Portafolio costo</h6><small class="text-danger">130,000 <i class="fa fa-level-down"></i></small></div> -->
                    <div class="inline-block mr-45"><h6>TIR promedio</h6><small class="text-primary">23% <i class="fa fa-level-up"></i></small></div>
                    <div class="inline-block mr-45"><h6>ROÍ promedio</h6><small class="text-primary">8% <i class="fa fa-level-up"></i></small></div>

                    <div class="clearfix"></div>
                  </div>
                <hr class="light-grey-hr row mt-10 mb-15"/>
                <div class="">

                </div>
              </div>

            </div>

            <div class="ui-offer-ribbon" style="">
              <div class="ui-offer-ribbon-amount">28<small style="color: #FFF;"class="ui-offer-ribbon-percentage">%</small></div>
              <div class="ui-offer-ribbon-text">- OFF -</div>
            </div>


          </div>
          <!-- Property -->

          <!-- Property -->
          <div class="col-sm-12">
            <div class="panel panel-default border-panel card-view">
              <div class="panel-heading">
                <div class="pull-left">
                  <h4 class="panel-title txt-dark">Portafolio RealBlock</h4>
                  <p class="">Damasco + Coliving Valle + Vallarta</p>
                </div>
                <div class="pull-right">
                  <p class="text-muted">Portafolio Venta <i class="fa fa-th-large font-13"></i></p>
                </div>
                <div class="clearfix"></div>
              </div>

              <div class="panel-body">
                <div class="col-sm-3">
                  <img src="assets/img/uploads/property-6.jpg" alt="" class="" width="100%">
                </div>

                <div class="col-sm-3">
                  <img src="assets/img/uploads/property-5.jpg" alt="" class="" width="100%">
                </div>

                <div class="col-sm-3">
                  <img src="assets/img/uploads/property-3.jpg" alt="" class="" width="100%">
                </div>

                <div class="col-sm-3">
                  <img src="assets/img/uploads/property-2.jpg" alt="" class="" width="100%">
                </div>

                <hr class="light-grey-hr row mt-0 mb-10"/>
                <div class="text-center">
                  <div class="inline-block "><h5></h5></div>
                </div>
                <hr class="light-grey-hr row mt-10 mb-15"/>
                  <div class="text-center">
                    <div class="inline-block mr-45 pixelef" style="v"><h6>4 Propiedades</h6><small></small></div>
                    <div class="inline-block mr-45"><h6>Costo real</h6><small>$230,000</small></div>
                    <!-- <div class="inline-block mr-45"><h6>Portafolio costo</h6><small class="text-danger">30,000 <i class="fa fa-level-down"></i></small></div> -->
                    <div class="inline-block mr-45"><h6>TIR promedio</h6><small class="text-primary">34% <i class="fa fa-level-up"></i></small></div>
                    <div class="inline-block mr-45"><h6>ROÍ promedio</h6><small class="text-primary">12% <i class="fa fa-level-up"></i></small></div>



                    <div class="clearfix"></div>
                  </div>
                <hr class="light-grey-hr row mt-10 mb-15"/>
                <div class="">

                </div>
              </div>

            </div>

            <div class="ui-offer-ribbon" style="">
              <div class="ui-offer-ribbon-amount">28<small style="color: #FFF;"class="ui-offer-ribbon-percentage">%</small></div>
              <div class="ui-offer-ribbon-text">- OFF -</div>
            </div>


          </div>
          <!-- Property -->


          <!-- Property -->
          <div class="col-sm-12">
            <div class="panel panel-default border-panel card-view">
              <div class="panel-heading">
                <div class="pull-left">
                  <h4 class="panel-title txt-dark">Portafolio RealBlock</h4>
                  <p class="">Damasco + Coliving Valle + Vallarta</p>
                </div>
                <div class="pull-right">
                  <p class="text-muted">Portafolio Venta <i class="fa fa-th-large font-13"></i></p>
                </div>
                <div class="clearfix"></div>
              </div>

              <div class="panel-body">
                <div class="col-sm-3">
                  <img src="assets/img/uploads/property-4.jpg" alt="" class="" width="100%">
                </div>

                <div class="col-sm-3">
                  <img src="assets/img/uploads/property-5.jpg" alt="" class="" width="100%">
                </div>

                <div class="col-sm-3">
                  <img src="assets/img/uploads/property-3.jpg" alt="" class="" width="100%">
                </div>

                <div class="col-sm-3">
                  <img src="assets/img/uploads/property-3.jpg" alt="" class="" width="100%">
                </div>

                <hr class="light-grey-hr row mt-0 mb-10"/>
                <div class="text-center">
                  <div class="inline-block "><h5></h5></div>
                </div>
                <hr class="light-grey-hr row mt-10 mb-15"/>
                  <div class="text-center">
                    <div class="inline-block mr-45 pixelef" style="v"><h6>4 Propiedades</h6><small></small></div>
                    <div class="inline-block mr-45"><h6>Costo real</h6><small>$430,000</small></div>
                    <!-- <div class="inline-block mr-45"><h6>Portafolio costo</h6><small class="text-danger">390,000 <i class="fa fa-level-down"></i></small></div> -->
                    <div class="inline-block mr-45"><h6>TIR promedio</h6><small class="text-primary">10% <i class="fa fa-level-up"></i></small></div>
                    <div class="inline-block mr-45"><h6>ROÍ promedio</h6><small class="text-primary">5% <i class="fa fa-level-up"></i></small></div>

                    <div class="clearfix"></div>
                  </div>
                <hr class="light-grey-hr row mt-10 mb-15"/>
                <div class="">

                </div>
              </div>

            </div>

            <div class="ui-offer-ribbon" style="">
              <div class="ui-offer-ribbon-amount">28<small style="color: #FFF;"class="ui-offer-ribbon-percentage">%</small></div>
              <div class="ui-offer-ribbon-text">- OFF -</div>
            </div>


          </div>
          <!-- Property -->





          <!-- ==========content goes here========== -->
        </div>
				<!-- /Row -->

			</div>

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
  <style>

.ui-offer-ribbon{
box-sizing: border-box; position: absolute;left: -5px; bottom: 12%; background-color: #32c058; width: 60px; height: 60px; color: white; text-align: center; padding-top: 9px;
}

.pixelef{
  vertical-align: middle;
}
  </style>

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
</body>

</html>
