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

          <!-- Row -->
  				<div class="row">
  					<div class="col-md-8 col-sm-7">
  						<div class="row">
  							<div class="col-sm-12 col-xs-12">
  								<div class="panel panel-default border-panel card-view">
  									<div class="panel-heading">
  										<div class="pull-left">
  											<h6 class="panel-title txt-dark">Estadísticas de Renta de Propiedades</h6>
  										</div>
  										<div class="pull-right">
  											<span class="data-text weight-500 pr-5" id="tipoPropiedad">Comerciales</span>
  											<span class="no-margin-switcher">
  												<input type="checkbox" checked id="morris_switch"  class="js-switch" data-color="#ffcfbe" data-secondary-color="#dedede" data-size="small"/>
  											</span>
  										</div>
  										<div class="clearfix"></div>
  									</div>
  									<div class="panel-wrapper collapse in">
  										<div class="panel-body">
  											<ul class="flex-stat flex-stat-2 mt-20">
  												<li>
  													<span class="block"><span class="initial">$ </span><span class="txt-dark weight-300 counter-anim data-rep">7,115,008</span></span>
  													<span class="block">Ingresos</span>

  												</li>
  												<li>
  													<span class="block"><span class="initial">$ </span><span class="txt-dark weight-300 counter-anim data-rep">3,426.21</span></span>
  													<span class="block">Egresos</span>

  												</li>
  												<li>
  													<span class="block">
  														<i class="zmdi zmdi-caret-up pr-10 font-24 txt-success"></i><span class="txt-dark weight-300 data-rep"><span class="counter-anim">89</span>%</span>
  													</span>

  													<span class="block">Ocupación</span>

  												</li>
  											</ul>
  											<div id="chart_1" class="morris-chart" style="height:314px;"></div>
  										</div>
  									</div>
  								</div>
  							</div>
  							<div class="col-sm-12 col-xs-12">
  								<div class="panel panel-default card-view border-panel panel-refresh">
  									<div class="refresh-container">
  										<div class="la-anim-1"></div>
  									</div>
  									<div class="panel-heading">
  										<div class="pull-left">
  											<h6 class="panel-title txt-dark">Últimos movimientos</h6>
  										</div>
  										<div class="pull-right">
  											<a href="#" class="pull-left inline-block refresh mr-15">
  												<i class="zmdi zmdi-replay"></i>
  											</a>
  											<a href="#" class="pull-left inline-block full-screen mr-15">
  												<i class="zmdi zmdi-fullscreen"></i>
  											</a>
  											<div class="pull-left inline-block dropdown">
  												<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
  												<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
  													<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>option 1</a></li>
  													<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>option 2</a></li>
  													<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>option 3</a></li>
  												</ul>
  											</div>
  										</div>
  										<div class="clearfix"></div>
  									</div>
  									<div class="panel-wrapper collapse in">
  										<div class="panel-body pa-0 row">
  											<div class="table-wrap">
  												<div class="table-responsive">
  													<table class="table  table-striped mb-0">
  														<thead>
  														  <tr>
  															<th>Folio Factura</th>
  															<th>Concepto</th>
  															<th>Estatus</th>
  															<th>Cantidad</th>
  														  </tr>
  														</thead>
  														<tbody>
  														  <tr>
  															<td class="weight-600"><i class="fa fa-dot-circle-o pr-10 txt-success"></i>123456</td>
  															<td>Pago Renta</td>
  															<td><span class="label label-outline label-success">Complete</span> </td>
  															<td><i class="fa fa-plus pr-10 txt-success"></i>$4,500.00</td>
  														  </tr>
  														  <tr>
  															<td class="weight-600"><i class="fa fa-dot-circle-o pr-10 txt-success"></i>223456</td>
  															<td>Pago Renta</td>
  															<td><span class="label label-outline label-success">Complete</span> </td>
  															<td><i class="fa fa-plus pr-10 txt-success"></i>$6,700.00</td>
  														  </tr>
  														  <tr>
  															<td class="weight-600"><i class="fa fa-dot-circle-o pr-10 txt-success"></i>323456</td>
  															<td>Pago Renta</td>
  															<td><span class="label label-outline label-success">Complete</span> </td>
  															<td><i class="fa fa-plus pr-10 txt-success"></i>$5,000.00</td>
  														  </tr>
  														  <tr>
  															<td class="weight-600"><i class="fa fa-dot-circle-o pr-10 txt-warning"></i>423456</td>
  															<td>Plomero</td>
  															<td><span class="label label-outline label-warning">pending</span> </td>
  															<td><i class="fa fa-plus pr-10 txt-success"></i>$1,899.00</td>
  														  </tr>
  														  <tr>
  															<td class="weight-600"><i class="fa fa-dot-circle-o pr-10 txt-danger"></i>523456</td>
  															<td>Ventana</td>
  															<td><span class="label label-outline label-danger">cancled</span> </td>
  															<td><i class="fa fa-minus pr-10 txt-danger"></i>$500.00</td>
  														  </tr>
  														  <tr>
  															<td class="weight-600"><i class="fa fa-dot-circle-o pr-10 txt-danger"></i>623456</td>
  															<td>Cámara Vig.</td>
  															<td><span class="label label-outline label-danger">cancled</span> </td>
  															<td><i class="fa fa-minus pr-10 txt-danger"></i>$200.00</td>
  														  </tr>
  														   <tr>
  															<td class="weight-600"><i class="fa fa-dot-circle-o pr-10 txt-warning"></i>723456</td>
  															<td>Alarma</td>
  															<td><span class="label label-outline label-warning">pending</span> </td>
  															<td><i class="fa fa-plus pr-10 txt-success"></i>$750.00</td>
  														  </tr>
  														  <tr>
  															<td class="weight-600"><i class="fa fa-dot-circle-o pr-10 txt-danger"></i>823456</td>
  															<td>Circuito Cerrado Vig.</td>
  															<td><span class="label label-outline label-danger">cancled</span> </td>
  															<td><i class="fa fa-minus pr-10 txt-danger"></i>$2,500.00</td>
  														  </tr>
  														  <tr>
  															<td class="weight-600"><i class="fa fa-dot-circle-o pr-10 txt-danger"></i>923456</td>
  															<td>Barniz</td>
  															<td><span class="label label-outline label-danger">cancled</span> </td>
  															<td><i class="fa fa-minus pr-10 txt-danger"></i>$450.00</td>
  														  </tr>
  														  <tr>
  															<td class="weight-600"><i class="fa fa-dot-circle-o pr-10 txt-danger"></i>103456</td>
  															<td>Pintura</td>
  															<td><span class="label label-outline label-danger">cancled</span> </td>
  															<td><i class="fa fa-minus pr-10 txt-danger"></i>$2,999.00</td>
  														  </tr>
  														</tbody>
  													</table>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  							</div>
  						</div>
  					</div>
  					<div class="col-md-4 col-sm-5">
  						<div class="row">
  							<div class="col-sm-12 col-xs-12">
  								<div class="panel panel-default border-panel card-view">
  									<div class="panel-heading">
  										<div class="pull-left">
  											<h6 class="panel-title txt-dark">Contratos por Expirar</h6>
  										</div>
  										<div class="pull-right">
  											<a href="javascript:void(0);" class="txt-grey weight-500 capitalize-font">View all</a>
  										</div>
  										<div class="clearfix"></div>
  									</div>
  									<div class="panel-wrapper collapse in">
  										<div  class="panel-body">
  											<div class="streamline user-activity">
  												<div class="sl-item pb-15">
  													<a href="javascript:void(0)">
  														<div class="sl-avatar avatar-circle">
  															<span><i class="fa fa-calendar"></i></span>
  														</div>
  														<div class="sl-content no-seprator pb-0">
  															<div class="pull-left">
  																<p class="inline-block"><span class="capitalize-font txt-dark mr-5 weight-500">Manuel Benitez Martínez</span></p>
  																<span class="block txt-grey font-12 capitalize-font">Feb 28, 2019</span>
  																<span class="block txt-primary font-12 pt-5 capitalize-font">Mar 08, 2019</span>
  															</div>
  															<div class="pull-right text-right">
  																<p class="inline-block"><span class="txt-success font-16 weight-500">Dirección</span></p>
  																<span class="block txt-grey font-12 capitalize-font">La Paz, #87</span>
  															</div>
  															<div class="clearfix"></div>
  														</div>
  													</a>
  												</div>
  												<div class="sl-item pb-15">
  													<a href="javascript:void(0)">
  														<div class="sl-avatar avatar-circle">
  															<span><i class="fa fa-calendar"></i></span>
  														</div>
  														<div class="sl-content no-seprator pb-0">
  															<div class="pull-left">
  																<p class="inline-block"><span class="capitalize-font txt-dark mr-5 weight-500">Fernanda Buenavidez Chávez</span></p>
  																<span class="block txt-grey font-12 capitalize-font">Feb 28, 2019</span>
  																<span class="block txt-primary font-12 pt-5 capitalize-font">Mar 15, 2019</span>
  															</div>
  															<div class="pull-right text-right">
  																<p class="inline-block"><span class="txt-grey font-16 weight-500">Dirección</span></p>
  																<span class="block txt-grey font-12 capitalize-font">La Floresta, #11</span>
  															</div>
  															<div class="clearfix"></div>
  														</div>
  													</a>
  												</div>
  												<div class="sl-item pb-15">
  													<a href="javascript:void(0)">
  														<div class="sl-avatar avatar-circle">
  															<span><i class="fa fa-calendar"></i></span>
  														</div>
  														<div class="sl-content no-seprator pb-0">
  															<div class="pull-left">
  																<p class="inline-block"><span class="capitalize-font txt-dark mr-5 weight-500">Octavio Peralta Santoalalla</span></p>
  																<span class="block txt-grey font-12 capitalize-font">Feb 28, 2019</span>
  																<span class="block txt-primary font-12 pt-5 capitalize-font">Mar 18, 2019</span>
  															</div>
  															<div class="pull-right text-right">
  																<p class="inline-block"><span class="txt-success font-16 weight-500">Dirección</span></p>
  																<span class="block txt-grey font-12 capitalize-font">La Peña, ext#26 - int#02</span>
  															</div>
  															<div class="clearfix"></div>
  														</div>
  													</a>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  							</div>
  							<div class="col-sm-12 col-xs-12">
  								<div class="panel panel-default border-panel card-view panel-refresh">
  									<div class="refresh-container">
  										<div class="la-anim-1"></div>
  									</div>
  									<div class="panel-heading">
  										<div class="pull-left">
  											<h6 class="panel-title txt-dark">Balance Total de Rentas</h6>
  										</div>
  										<div class="clearfix"></div>
  									</div>
  									<div class="panel-wrapper collapse in">
  										<div class="panel-body">
  											<div class="flex-stat flex-stat-3 text-center">
  												<span class="block"><span class="initial">$ </span><span class="txt-orange weight-300 counter-anim data-rep">7,111,582.34</span></span>
  												<span class="block">Balance Total de Ventas</span>
  											</div>
  											<hr class="light-grey-hr row mt-10 mb-15"/>
  											<div class="label-chatrs">
  												<div class="">
  													<div class="pull-left"><img class="pull-left" src="../img/money/bitcoin.png" alt="money"/><span class="pull-left txt-dark capitalize-font pl-10 pt-5">CDMX</span></div>
  													<span class="clabels-text font-12 inline-block txt-dark text-right capitalize-font pull-right"><span class="block font-15 mb-5">Anual</span><span class="block txt-grey">$ 2,15,008</span></span>
  													<div class="clearfix"></div>
  												</div>
  											</div>
  											<hr class="light-grey-hr row mt-10 mb-15"/>
  											<div class="label-chatrs">
  												<div class="">
  													<div class="pull-left"><img class="pull-left" src="../img/money/ethereum.png" alt="money"/><span class="pull-left txt-dark capitalize-font pl-10 pt-5">Guadalajara</span></div>
  													<span class="clabels-text font-12 inline-block txt-dark text-right capitalize-font pull-right"><span class="block font-15 mb-5">Anual</span><span class="block txt-grey">$ 2,15,008</span></span>
  													<div class="clearfix"></div>
  												</div>
  											</div>
  											<hr class="light-grey-hr row mt-10 mb-15"/>
  											<div class="label-chatrs">
  												<div class="">
  													<div class="pull-left"><img class="pull-left" src="../img/money/litecoin.png" alt="money"/><span class="pull-left txt-dark capitalize-font pl-10 pt-5">Hidalgo</span></div>
  													<span class="clabels-text font-12 inline-block txt-dark text-right capitalize-font pull-right"><span class="block font-15 mb-5">Anual</span><span class="block txt-grey">$ 2,15,008</span></span>
  													<div class="clearfix"></div>
  												</div>
  											</div>
  											<hr class="light-grey-hr row mt-10 mb-15"/>
  											<div class="label-chatrs">
  												<div class="">
  													<div class="pull-left"><img class="pull-left" src="../img/money/usd.png" alt="money"/><span class="pull-left txt-dark capitalize-font pl-10 pt-5">Nuevo León</span></div>
  													<span class="clabels-text font-12 inline-block txt-dark text-right capitalize-font pull-right"><span class="block font-15 mb-5">Anual</span><span class="block txt-grey">$ 2,15,008</span></span>
  													<div class="clearfix"></div>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  							</div>
  							<div class="col-sm-12 col-xs-12">
  								<div class="panel panel-default border-panel card-view">
  									<div class="panel-heading">
  										<div class="pull-left">
  											<h6 class="panel-title txt-dark">Alertas</h6>
  										</div>
  										<div class="clearfix"></div>
  									</div>
  									<div class="panel-wrapper collapse in">
  										<div class="panel-body">
  											<div class="sm-data-box-4">
  												<div class="relative">
  													<div class="data-wrap-right">
  														<p>¡Tienes un nuevo cliente!	 </p>
  														<div class="pt-15 uppercase-font">
  															<button class="btn btn-block btn-dark btn-sm">Ver</button>
  														</div>
  													</div>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  							</div>
  						</div>
  					</div>
  				</div>
  				<!-- /Row -->

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


<!-- Flot Charts JavaScript -->

<!-- Init JavaScript -->
<script src="assets/dist/js/dashboard2-data.js"></script>









</body>

</html>
