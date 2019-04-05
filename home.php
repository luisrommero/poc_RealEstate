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
	<meta name="description" content="RealBLOCK | High Performance Real Estate Investments Company" />
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

<!--
[8:26 PM, 2/6/2019] Mario EOS: 1.- vallarta
[8:26 PM, 2/6/2019] Mario EOS: 2.- cancun
[8:26 PM, 2/6/2019] Mario EOS: 2.- tulum
[8:26 PM, 2/6/2019] Mario EOS: 3.- Valle de Bravo
[8:26 PM, 2/6/2019] Mario EOS: 4.- San miguel de allende
[8:27 PM, 2/6/2019] Mario EOS: https://www.calatea.mx/?gclid=CjwKCAiAqOriBRAfEiwAEb9oXQn-ZPlApcSVAvwyDtM2cwcNUFCKCgyGhgjFAQvFdxVEAhVnoh8pQhoCHXsQAvD_BwE
[8:27 PM, 2/6/2019] Mario EOS: smart contract
-->

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
        <!-- Row RE -->
        <div class="row">
          <div class="col-sm-12">
            <div class="row">

              <!-- Property -->
              <div class="col-sm-4">
                <div class="panel panel-default border-panel card-view">
                  <div class="panel-heading">
                    <div class="pull-left">
                      <h6 class="panel-title txt-dark">Damasco</h6>
                    </div>
                    <div class="pull-right">
                      <p class="text-muted">Owner Ship <i class="fa fa-certificate font-13"></i></p>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="panel-body">
                    <img src="assets/img/uploads/property-1.jpg" alt="" class="" width="100%">
                    <div class="progress-anim">
                      <p>Inversión 95%</p>
                      <div class="progress">
                        <div class="progress-bar progress-bar-orange
                        wow animated progress-animated" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <hr class="light-grey-hr row mt-0 mb-10"/>
                    <div class="text-center">
                      <div class="inline-block "><h5>Desde: $4,500   |  TIR: 18%</h5></div>
                    </div>
                    <hr class="light-grey-hr row mt-10 mb-15"/>
                    <div class="text-center">
                      <div class="inline-block mr-45"><h6>Inversion</h6><small>$430,000</small></div>
                      <div class="inline-block mr-45"><h6>Inversores</h6><small>60</small></div>
                      <div class="inline-block"><h6>Return</h6><small class="text-success">15% <i class="fa fa-level-up"></i></small></div>
                    </div>
                    <hr class="light-grey-hr row mt-10 mb-15"/>
                      <div class="text-center">
                        <div class="inline-block mr-5"><h6 class="ml-30">Bounce Rate</h6></div>
                        <div class="inline-block mr-5"><span class="font-18 ml-25">4356 visits</span></div>
                        <div class="inline-block"><span class="font-18 ml-25">44.46%</span></div>
                        <div class="clearfix"></div>
                      </div>
                    <hr class="light-grey-hr row mt-10 mb-15"/>
                    <div class="">
                      <a href="project.php?id=1&amount=43000" class="btn btn-primary btn-lg btn-block" role="button">Invest</a>

                    </div>
                  </div>

                </div>
              </div>
              <!-- Property -->

              <!-- Property -->
              <div class="col-sm-4">
                <div class="panel panel-default border-panel card-view">
                  <div class="panel-heading">
                    <div class="pull-left">
                      <h6 class="panel-title txt-dark">Roco</h6>
                    </div>
                    <div class="pull-right">
                      <p class="text-muted">Owner Ship <i class="fa fa-certificate font-13"></i></p>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="panel-body">
                    <img src="assets/img/uploads/property-2.jpg" alt="" class="" width="100%">
                    <div class="progress-anim">
                      <p>Inversión 95%</p>
                      <div class="progress">
                        <div class="progress-bar progress-bar-orange
                        wow animated progress-animated" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <hr class="light-grey-hr row mt-0 mb-10"/>
                    <div class="text-center">
                      <div class="inline-block "><h5>Desde: $3,500   |  TIR: 18%</h5></div>
                    </div>
                    <hr class="light-grey-hr row mt-10 mb-15"/>
                    <div class="text-center">
                      <div class="inline-block mr-45"><h6>Inversion</h6><small>$320,000</small></div>
                      <div class="inline-block mr-45"><h6>Inversores</h6><small>60</small></div>
                      <div class="inline-block"><h6>Return</h6><small class="text-success">15% <i class="fa fa-level-up"></i></small></div>
                    </div>
                    <hr class="light-grey-hr row mt-10 mb-15"/>
                      <div class="text-center">
                        <div class="inline-block mr-5"><h6 class="ml-30">Bounce Rate</h6></div>
                        <div class="inline-block mr-5"><span class="font-18 ml-25">960 visits</span></div>
                        <div class="inline-block"><span class="font-18 ml-25">44.46%</span></div>
                        <div class="clearfix"></div>
                      </div>
                    <hr class="light-grey-hr row mt-10 mb-15"/>
                    <div class="">
                      <a href="project.php?id=1&amount=23000" class="btn btn-primary btn-lg btn-block" role="button">Invest</a>

                    </div>
                  </div>

                </div>
              </div>
              <!-- Property -->

              <!-- Property -->
              <div class="col-sm-4">
                <div class="panel panel-default border-panel card-view">
                  <div class="panel-heading">
                    <div class="pull-left">
                      <h6 class="panel-title txt-dark">Otero</h6>
                    </div>
                    <div class="pull-right">
                      <p class="text-muted">Owner Ship <i class="fa fa-certificate font-13"></i></p>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="panel-body">
                    <img src="assets/img/uploads/property-3.jpg" alt="" class="" width="100%">
                    <div class="progress-anim">
                      <p>Inversión 95%</p>
                      <div class="progress">
                        <div class="progress-bar progress-bar-orange
                        wow animated progress-animated" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <hr class="light-grey-hr row mt-0 mb-10"/>
                    <div class="text-center">
                      <div class="inline-block "><h5>Desde: $3,500   |  TIR: 18%</h5></div>
                    </div>
                    <hr class="light-grey-hr row mt-10 mb-15"/>
                    <div class="text-center">
                      <div class="inline-block mr-45"><h6>Inversion</h6><small>$320,000</small></div>
                      <div class="inline-block mr-45"><h6>Inversores</h6><small>60</small></div>
                      <div class="inline-block"><h6>Return</h6><small class="text-success">15% <i class="fa fa-level-up"></i></small></div>
                    </div>
                    <hr class="light-grey-hr row mt-10 mb-15"/>
                      <div class="text-center">
                        <div class="inline-block mr-5"><h6 class="ml-30">Bounce Rate</h6></div>
                        <div class="inline-block mr-5"><span class="font-18 ml-25">560 visits</span></div>
                        <div class="inline-block"><span class="font-18 ml-25">44.46%</span></div>
                        <div class="clearfix"></div>
                      </div>
                    <hr class="light-grey-hr row mt-10 mb-15"/>
                    <div class="">
                      <a href="project.php?id=1&amount=12000" class="btn btn-primary btn-lg btn-block" role="button">Invest</a>

                    </div>
                  </div>

                </div>
              </div>
              <!-- Property -->
              <!-- Property -->
              <div class="col-sm-4">
                <div class="panel panel-default border-panel card-view">
                  <div class="panel-heading">
                    <div class="pull-left">
                      <h6 class="panel-title txt-dark">Vallarta</h6>
                    </div>
                    <div class="pull-right">
                      <p class="text-muted">Owner Ship <i class="fa fa-certificate font-13"></i></p>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="panel-body">
                    <img src="assets/img/uploads/property-4.jpg" alt="" class="" width="100%">
                    <div class="progress-anim">
                      <p>Inversión 95%</p>
                      <div class="progress">
                        <div class="progress-bar progress-bar-orange
                        wow animated progress-animated" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <hr class="light-grey-hr row mt-0 mb-10"/>
                    <div class="text-center">
                      <div class="inline-block "><h5>Desde: $3,500   |  TIR: 18%</h5></div>
                    </div>
                    <hr class="light-grey-hr row mt-10 mb-15"/>
                    <div class="text-center">
                      <div class="inline-block mr-45"><h6>Inversion</h6><small>$320,000</small></div>
                      <div class="inline-block mr-45"><h6>Inversores</h6><small>60</small></div>
                      <div class="inline-block"><h6>Return</h6><small class="text-success">15% <i class="fa fa-level-up"></i></small></div>
                    </div>
                    <hr class="light-grey-hr row mt-10 mb-15"/>
                      <div class="text-center">
                        <div class="inline-block mr-5"><h6 class="ml-30">Bounce Rate</h6></div>
                        <div class="inline-block mr-5"><span class="font-18 ml-25">4356 visits</span></div>
                        <div class="inline-block"><span class="font-18 ml-25">44.46%</span></div>
                        <div class="clearfix"></div>
                      </div>
                    <hr class="light-grey-hr row mt-10 mb-15"/>
                    <div class="">
                      <a href="project.php?id=1&amount=7000" class="btn btn-primary btn-lg btn-block" role="button">Invest</a>

                    </div>
                  </div>

                </div>
              </div>
              <!-- Property -->

              <!-- Property -->
              <div class="col-sm-4">
                <div class="panel panel-default border-panel card-view">
                  <div class="panel-heading">
                    <div class="pull-left">
                      <h6 class="panel-title txt-dark">Canc&uacute;n</h6>
                    </div>
                    <div class="pull-right">
                      <p class="text-muted">Landing <i class="fa fa-certificate font-13"></i></p>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="panel-body">
                    <img src="assets/img/uploads/property-5.jpg" alt="" class="" width="100%">
                    <div class="progress-anim">
                      <p>Inversión 95%</p>
                      <div class="progress">
                        <div class="progress-bar progress-bar-orange
                        wow animated progress-animated" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <hr class="light-grey-hr row mt-0 mb-10"/>
                    <div class="text-center">
                      <div class="inline-block "><h5>Desde: $3,500   |  TIR: 18%</h5></div>
                    </div>
                    <hr class="light-grey-hr row mt-10 mb-15"/>
                    <div class="text-center">
                      <div class="inline-block mr-45"><h6>Inversion</h6><small>$320,000</small></div>
                      <div class="inline-block mr-45"><h6>Inversores</h6><small>60</small></div>
                      <div class="inline-block"><h6>Return</h6><small class="text-success">15% <i class="fa fa-level-up"></i></small></div>
                    </div>
                    <hr class="light-grey-hr row mt-10 mb-15"/>
                      <div class="text-center">
                        <div class="inline-block mr-5"><h6 class="ml-30">Bounce Rate</h6></div>
                        <div class="inline-block mr-5"><span class="font-18 ml-25">2465 visits</span></div>
                        <div class="inline-block"><span class="font-18 ml-25">44.46%</span></div>
                        <div class="clearfix"></div>
                      </div>
                    <hr class="light-grey-hr row mt-10 mb-15"/>
                    <div class="">
                      <a href="project.php?id=1&amount=67000" class="btn btn-primary btn-lg btn-block" role="button">Invest</a>

                    </div>
                  </div>

                </div>
              </div>
              <!-- Property -->


              <!-- Property -->
              <div class="col-sm-4">
                <div class="panel panel-default border-panel card-view">
                  <div class="panel-heading">
                    <div class="pull-left">
                      <h6 class="panel-title txt-dark">Tulum</h6>
                    </div>
                    <div class="pull-right">
                      <p class="text-muted">Owner Ship <i class="fa fa-certificate font-13"></i></p>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="panel-body">
                    <img src="assets/img/uploads/property-6.jpg" alt="" class="" width="100%">
                    <div class="progress-anim">
                      <p>Inversión 95%</p>
                      <div class="progress">
                        <div class="progress-bar progress-bar-orange
                        wow animated progress-animated" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <hr class="light-grey-hr row mt-0 mb-10"/>
                    <div class="text-center">
                      <div class="inline-block "><h5>Desde: $3,500   |  TIR: 18%</h5></div>
                    </div>
                    <hr class="light-grey-hr row mt-10 mb-15"/>
                    <div class="text-center">
                      <div class="inline-block mr-45"><h6>Inversion</h6><small>$320,000</small></div>
                      <div class="inline-block mr-45"><h6>Inversores</h6><small>60</small></div>
                      <div class="inline-block"><h6>Return</h6><small class="text-success">15% <i class="fa fa-level-up"></i></small></div>
                    </div>
                    <hr class="light-grey-hr row mt-10 mb-15"/>
                      <div class="text-center">
                        <div class="inline-block mr-5"><h6 class="ml-30">Bounce Rate</h6></div>
                        <div class="inline-block mr-5"><span class="font-18 ml-25">1020 visits</span></div>
                        <div class="inline-block"><span class="font-18 ml-25">44.46%</span></div>
                        <div class="clearfix"></div>
                      </div>
                    <hr class="light-grey-hr row mt-10 mb-15"/>
                    <div class="">
                      <a href="project.php?id=1&amount=23000" class="btn btn-primary btn-lg btn-block" role="button">Invest</a>

                    </div>
                  </div>

                </div>
              </div>
              <!-- Property -->




            </div>
          </div>
        </div>
        <!-- End Row RE -->
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
