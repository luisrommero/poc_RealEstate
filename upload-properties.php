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

  <!-- vector map CSS -->
  <link href="vendors/bower_components/jquery-wizard.js/css/wizard.css" rel="stylesheet" type="text/css"/>

  <!-- jquery-steps css -->
  <link rel="stylesheet" href="vendors/bower_components/jquery.steps/demo/css/jquery.steps.css">

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

  <!-- Bootstrap Dropzone CSS -->
  <link href="vendors/bower_components/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css"/>
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

          <!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Subir Propiedad</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="#">Dashboard</a></li>
							<li><a href="#"><span>form</span></a></li>
							<li class="active"><span>Properties</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->



          <!-- form -->
                <!-- wizard -->
                <div class="form-group">
                  <div class="input-group">

                    <!--  -->



                    <!--  -->
                  </div>
                </div>

                <!-- Row -->
      					<div class="row">
      						<div class="col-sm-12">
      							<div class="panel panel-default border-panel card-view">
      								<div class="panel-heading">
      									<div class="pull-left">
      										<h6 class="panel-title txt-dark">Subir Propiedad</h6>
      									</div>
      									<div class="clearfix"></div>
      								</div>
      								<div class="panel-wrapper collapse in">
      									<div class="panel-body">
      										<form id="example-advanced-form" method="post" name="propertyForm" enctype="multipart/form-data">
      											<h3><span class="number"><i class="icon-user-following txt-black"></i></span><span class="head-font capitalize-font">Datos Básicos de Projecto</span></h3>
      											<fieldset>
      												<div class="row">

                                <!-- upload files -->
                                <!--  -->

      													<div class="col-sm-6">
      														<div class="form-wrap">
                                    <div class="form-group">
                                        <div class="input-group">
                                          <!-- IMPORTANTEEEEEEEEEEEEEEEEEEEEE -->
                                          <div class="col-md-12">
                      											<div action="#" class="dropzone" id="my-awesome-dropzone">
                      												<div class="fallback">
                      													<input name="file" type="file" multiple />
                      												</div>
                      										</div>
                      									</div>
                                          <!-- IMPORTANTEEEEEEEEEEEEEEEEEEEEE -->
                                        </div>
                                    </div>
      															<div class="form-group">
      																<div class="input-group">
      																	<div class="input-group-addon"><i class="fa fa-codepen"></i></div>
      																	<input type="text" class="form-control required"  name="name_List"  placeholder="Nombre del proyecto">
      																</div>
      															</div>
      															<div class="form-group">
      																<div class="input-group">
      																	<div class="input-group-addon">
                                          <i class="fa fa-dollar fa-angle-down"></i>
                                          <i class="fa fa-angle-down"></i>
                                        </div>
      																	<input type="text" class="form-control required" name="inv_min" placeholder="Inversión minima" id="inv_min">
      																</div>
      															</div>
      															<div class="form-group">
      																<div class="input-group">
      																	<div class="input-group-addon">
                                          <i class="fa fa-dollar"></i>
                                          <i class="fa  fa-angle-up"></i>
                                        </div>
      																	<input type="text" class="form-control required" name="inv_max" placeholder="Inversión maxima" id="inv_max">
      																</div>
      															</div>
      															<div class="form-group">
      																<div class="input-group">
      																	<div class="input-group-addon"><i class="fa fa-fa"></i></div>
      																	<input type="text" class="form-control required" name="p_goal" placeholder="Meta" id="p_goal">
      																</div>
      															</div>
      														</div>
      													</div>
                                <div class="col-lg-6">
                      						<div id="morris_bar_chart" class="morris-chart"></div>
                      					</div>
      												</div>
      											</fieldset>
      											<h3><span class="number"><i class="icon-bag txt-black"></i></span><span class="head-font capitalize-font">Tipo y Descripci&oacute;n</span></h3>
      											<fieldset>
      												<div class="row">
      													<div class="col-sm-12">
      														<div class="form-wrap">
      															<div class="form-group">
      																<label class="control-label mb-10" for="exampleCountry">Tipo de Inmueble:</label>
      																<select class="form-control required" name="p_type">
      																	<option value="res">Residencial</option>
      																	<option value="com">Comercial</option>
      																	<option value="ind">Industrial</option>
      																</select>
      															</div>
      															<div class="form-group">
      																<div class="row">
      																	<div class="col-md-6 col-xs-12">
      																		<label class="control-label mb-10" for="firstName">Descripción:</label>
      																		<input type="text" name="p_desc" class="form-control required" value="" />
      																	</div>
      																	<div class="span1"></div>
      																</div>
      															</div>
      														</div>
      													</div>
      												</div>
      											</fieldset>

      											<!-- <h3>
                              <span class="number">
                                <i class="icon-credit-card txt-black"></i>
                              </span>
                              <span class="head-font capitalize-font">Documentos</span>
                            </h3> -->
      												<!-- <fieldset> -->
      												<!--CREDIT CART PAYMENT-->
      												<!-- <div class="row">
      													<div class="col-sm-12">
                                  <p></p>
                                  <div class="">

                                  </div>
      													</div>
      												</div> -->
      												<!--CREDIT CART PAYMENT END-->
      											<!-- </fieldset> -->

      											<h3><span class="number"><i class="icon-basket-loaded txt-black"></i></span><span class="head-font capitalize-font">Aceptar Propiedad</span></h3>
      											<fieldset>
      													<table class="table display product-overview" id="datable_1">
      														<thead>
      															<tr>
      																<th>Tipo</th>
      																<th>Inv min</th>
      																<th>Meta</th>
      																<th>Lugar</th>
      																<th>Actions</th>
      															</tr>
      														</thead>
      														<tfoot>
      															<tr>
      																<th colspan="3">Subtotal:</th>
      																<th></th>
      																<th></th>
      															</tr>
      														</tfoot>
      														<tbody>
      															<tr>
      																<td>
      																	<img src="../img/chair.jpg" alt="Residencial" width="80">
      																</td>
      																<td><input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-default"   data-bts-button-up-class="btn btn-default" value="500,000" name="vertical-spin"></td>
      																<td>
      																<input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-default"   data-bts-button-up-class="btn btn-default" value="2,000,000" name="vertical-spin">
      																</td>
      																<td>Dirección</td>
      																<td><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
      															</tr>
      														</tbody>
      													</table>
      											</fieldset>
      										</form>
                          <!-- /form -->
      									</div>
      								</div>
      							</div>
      						</div>
      					</div>
      					<!-- /Row -->

                <!-- /wizard -->
					      <!-- /Row -->



          <!-- ==========content goes here========== -->
        </div>
				<!-- /Row -->

			</div>

			<!-- Footer -->
      <div>
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

    <!-- Form Wizard JavaScript -->
		<script src="vendors/bower_components/jquery.steps/build/jquery.steps.js"></script>
		<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>

		<!-- Form Wizard Data JavaScript -->
		<script src="assets/dist/js/form-wizard-data.js"></script>

    <!-- Starrr JavaScript -->
    <script src="assets/dist/js/starrr.js"></script>

    <!-- Bootstrap Touchspin JavaScript -->
		<script src="vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>

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

    <!-- Morris Charts JavaScript -->
    <script src="vendors/bower_components/raphael/raphael.min.js"></script>
    <script src="vendors/bower_components/morris.js/morris.min.js"></script>
    <script src="assets/dist/js/morris-data.js"></script>

    <!-- Dropzone JavaScript -->
    <script src="vendors/bower_components/dropzone/dist/dropzone.js"></script>

    <!-- Dropzone Init JavaScript -->
    <script src="assets/dist/js/dropzone-data.js"></script>


</body>

<!--

REAL STATE*
REAL BLOCK*
HESTIA*

.mx*
.com*
.com.mx*

TIPO USUARIO - NAVEGACION
             -
ROOT
  google analytics

anónimo

BROKER *
ADMIN *
INVERSOR *
Desarrollador *
(*) significa puede subir inmuebles

PPT O SLIDE DE:

1.- ANALISIS DE MERCADO
2.- VENTAJAS DE PLATAFORMA
3.- MARKETING

============clasificador de inmuebles============
inmuebles dividir
tiempo
  analisis
  terreno

construcción
  obra negra
  preventa
  terminado
  entregado
  en renta/venta

tipo de inmuebles
  Rural
  Urbano

Monto

tipo de uso
  Habitacional
  Industrial
  ============clasificador de inmuebles============
  *** KPI: tir retornos ***

hoy en la noche
HOY EN LA NOCHE

4 LOS INMUEBLES
LOGUE COMO INVIERSOR
EMULAR SUBIDA

-->

</html>
