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
	<title>Admintres I Fast build Admin dashboard for any platform</title>
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

  <!-- Bootstrap Dropzone CSS -->
  <link href="vendors/bower_components/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css"/>

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
		<!-- Top Menu Items -->
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="nav-wrap">
				<div class="mobile-only-brand pull-left">
					<div class="nav-header pull-left">
						<div class="logo-wrap">
							<a href="index.html">
								<img class="brand-img" src="assets/img/logo.png" alt="brand"/>
								<span class="brand-text"><img  src="assets/img/brand.png" alt="brand"/></span>
							</a>
						</div>
					</div>
					<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="ti-align-left"></i></a>
					<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
					<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="ti-more"></i></a>
					<form id="search_form" role="search" class="top-nav-search collapse pull-left">
						<div class="input-group">
							<input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
							<span class="input-group-btn">
							<button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
							</span>
						</div>
					</form>
				</div>
				<div id="mobile_only_nav" class="mobile-only-nav pull-right">
					<ul class="nav navbar-right top-nav pull-right">

						<li>
							<a id="open_right_sidebar" href="#"><i class="ti-settings  top-nav-icon"></i></a>
						</li>
						<li class="dropdown full-width-drp">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-align-center top-nav-icon"></i></a>
							<ul class="dropdown-menu mega-menu pa-0" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
								<li class="product-nicescroll-bar row">
									<ul class="pa-20">
										<!-- <li class="col-md-3 col-xs-6 col-menu-list">
											<a href="index.html"><div class="pull-left"><i class="ti-dashboard  mr-20"></i><span class="right-nav-text">Educational Center</span></div><div class="clearfix"></div></a>
											<a href="index2.html"><div class="pull-left"><i class="ti-money  mr-20"></i><span class="right-nav-text">Cryptocurrency</span></div><div class="pull-right"><span class="label label-success">Hot</span></div><div class="clearfix"></div></a>
											<a href="profile.html"><div class="pull-left"><i class="ti-briefcase  mr-20"></i><span class="right-nav-text">Profile</span></div><div class="clearfix"></div></a>
										</li> -->

										<!-- <li class="col-md-3 col-xs-6 col-menu-list">
											<a href="javascript:void(0);">
												<div class="pull-left">
													<i class="ti-shopping-cart  mr-20"></i><span class="right-nav-text">E-Commerce</span>
												</div>
												<div class="pull-right"><i class="ti-angle-down"></i></div>
												<div class="clearfix"></div>
											</a>
											<hr class="light-grey-hr ma-0"/>
											<ul>
												<li>
													<a href="e-commerce.html">My Portfolio</a>
												</li>
												<li>
													<a href="product.html">Products</a>
												</li>
												<li>
													<a href="product-detail.html">Product Detail</a>
												</li>
												<li>
													<a href="add-products.html">Add Product</a>
												</li>
												<li>
													<a href="product-orders.html">Orders</a>
												</li>
												<li>
													<a href="product-cart.html">Cart</a>
												</li>
												<li>
													<a href="product-checkout.html">Checkout</a>
												</li>
											</ul>
										</li> -->
										<li class="col-md-6 col-xs-12 preview-carousel">
											<a href="javascript:void(0);"><div class="pull-left"><span class="right-nav-text">opportunities to invest</span></div><div class="clearfix"></div></a>
											<hr class="light-grey-hr ma-0"/>
											<div class="product-carousel owl-carousel owl-theme text-center">
												<a href="#">
													<img src="assets/img/chair.jpg" alt="chair">
													<span>Circle chair</span>
												</a>
												<a href="#">
													<img src="assets/img/chair2.jpg" alt="chair">
													<span>square chair</span>
												</a>
												<a href="#">
													<img src="assets/img/chair3.jpg" alt="chair">
													<span>semi circle chair</span>
												</a>
												<a href="#">
													<img src="assets/img/chair4.jpg" alt="chair">
													<span>wooden chair</span>
												</a>
												<a href="#">
													<img src=".assets/img/chair2.jpg" alt="chair">
													<span>square chair</span>
												</a>
                        <a href="#">
													<img src=".assets/img/chair2.jpg" alt="chair">
													<span>square chair</span>
												</a>
											</div>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="dropdown alert-drp">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-bell top-nav-icon"></i><span class="top-nav-icon-badge">4</span></a>
							<ul  class="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
								<li>
									<div class="notification-box-head-wrap">
										<span class="notification-box-head pull-left inline-block">notifications</span>
										<a class="txt-danger pull-right clear-notifications inline-block" href="javascript:void(0)"> clear all </a>
										<div class="clearfix"></div>
										<hr class="light-grey-hr ma-0"/>
									</div>
								</li>
								<li>
									<div class="streamline message-nicescroll-bar">
                    <!-- notifications -->
										<div class="sl-item">
											<a href="javascript:void(0)">
												<div class="icon bg-green">
													<i class="ti-briefcase "></i>
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font  pull-left truncate head-notifications">
													New property created</span>
													<span class="inline-block font-11  pull-right notifications-time">2pm</span>
													<div class="clearfix"></div>
													<p class="truncate">Your customer subscribed for the basic plan. The customer will pay $25 per month.</p>
												</div>
											</a>
										</div>
                    <!--  -->
										<hr class="light-grey-hr ma-0"/>
										<div class="sl-item">
											<a href="javascript:void(0)">
												<div class="icon bg-yellow">
													<i class="zmdi zmdi-trending-down"></i>
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font  pull-left truncate head-notifications txt-warning">2 new investors</span>
													<span class="inline-block font-11 pull-right notifications-time">1pm</span>
													<div class="clearfix"></div>
													<p class="truncate">Some technical error occurred needs to be resolved.</p>
												</div>
											</a>
										</div>
                    <!--  -->
										<hr class="light-grey-hr ma-0"/>
										<div class="sl-item">
											<a href="javascript:void(0)">
												<div class="icon bg-blue">
													<i class="zmdi zmdi-email"></i>
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font  pull-left truncate head-notifications">a new investor</span>
													<span class="inline-block font-11  pull-right notifications-time">4pm</span>
													<div class="clearfix"></div>
													<p class="truncate"> The last payment for your G Suite Basic subscription failed.</p>
												</div>
											</a>
										</div>
										<hr class="light-grey-hr ma-0"/>
										<div class="sl-item">
											<a href="javascript:void(0)">
												<div class="sl-avatar">
													<img class="img-responsive" src="assets/img/avatar.jpg" alt="avatar"/>
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font  pull-left truncate head-notifications">Sandy Doe</span>
													<span class="inline-block font-11  pull-right notifications-time">1pm</span>
													<div class="clearfix"></div>
													<p class="truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</a>
										</div>
										<hr class="light-grey-hr ma-0"/>
										<div class="sl-item">
											<a href="javascript:void(0)">
												<div class="icon bg-red">
													<i class="zmdi zmdi-storage"></i>
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font  pull-left truncate head-notifications txt-danger">99% server space occupied.</span>
													<span class="inline-block font-11  pull-right notifications-time">1pm</span>
													<div class="clearfix"></div>
													<p class="truncate">consectetur, adipisci velit.</p>
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<div class="notification-box-bottom-wrap">
										<hr class="light-grey-hr ma-0"/>
										<a class="block text-center read-all" href="javascript:void(0)"> read all </a>
										<div class="clearfix"></div>
									</div>
								</li>
							</ul>
						</li>
            <!-- profile -->
						<li class="dropdown auth-drp">
							<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="assets/img/user1.png" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
							<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
								<li>
									<a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
								</li>
								<li>
									<a href="#"><i class="zmdi zmdi-card"></i><span>my balance</span></a>
								</li>
								<li>
									<a href="inbox.html"><i class="zmdi zmdi-email"></i><span>Inbox</span></a>
								</li>
								<li>
									<a href="#"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
								</li>
								<li class="divider"></li>
								<li class="sub-menu show-on-hover">
									<a href="#" class="dropdown-toggle pr-0 level-2-drp"><i class="zmdi zmdi-check text-success"></i> available</a>
									<ul class="dropdown-menu open-left-side">
										<li>
											<a href="#"><i class="zmdi zmdi-check text-success"></i><span>available</span></a>
										</li>
										<li>
											<a href="#"><i class="zmdi zmdi-circle-o text-warning"></i><span>busy</span></a>
										</li>
										<li>
											<a href="#"><i class="zmdi zmdi-minus-circle-outline text-danger"></i><span>offline</span></a>
										</li>
									</ul>
								</li>
								<li class="divider"></li>
								<li>
									<a href="#"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				</div>
			</nav>
			<!-- /Top Menu Items -->

      <!-- Left Sidebar Menu -->
      <div class="fixed-sidebar-left">
        <ul class="nav navbar-nav side-nav nicescroll-bar">
          <li class="navigation-header">
            <span>Main</span>
            <hr />
          </li>
          <li>
            <a class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr">
              <div class="pull-left"><i class="fa fa-user mr-20"></i><span class="right-nav-text">My portfolio</span></div>
              <div class="pull-right"><i class="ti-angle-down"></i></div>
              <div class="clearfix"></div>
            </a>
            <ul id="dashboard_dr" class="collapse collapse-level-1">
              <li>
                <a class="active-page" href="home.php">Pagos Recibidos</a>
              </li>
              <li>
                <a href="sumary.php"><div class="pull-left"><span>Resumen</span></div><div class="pull-right"><span class="label label-success">New</span></div><div class="clearfix"></div></a>
              </li>
              <li>
                <a href="docs.php">Documentos</a>
              </li>
            </ul>
          </li>
          <?php if($_COOKIE['user'] == "investor") { ?>
          <!-- properties -->
          <li>
            <a class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr">
              <div class="pull-left"><i class="fa fa-university mr-20"></i><span class="right-nav-text">Proyectos</span></div>
              <div class="pull-right"><i class="ti-angle-down"></i></div>
              <div class="clearfix"></div>
            </a>
            <ul id="dashboard_dr" class="collapse collapse-level-1">
              <li>
                <a class="active-page" href="upload-properties.php">Nuevo Proyecto</a>
              </li>
              <li>
                <a href="my_projects.php">
                  <div class="pull-left">
                    <span>Mis proyectos</span>
                  </div>
                  <div class="pull-right">
                    <span class="label label-success">1 Notificaci&oacute;n</span>
                  </div>
                  <div class="clearfix"></div>
                </a>
              </li>
              <li>
                <a href="list.php">Otros Proyectos</a>
              </li>
            </ul>
          </li>
          <!-- properties -->

        <?php } else {?>
          <li>
            <a href="list.php">
              <div class="pull-left"><i class="fa fa-university mr-20"></i><span class="right-nav-text">Proyectos</span></div>
              <div class="clearfix"></div>
            </a>
          </li>
        <?php } ?>
          <li>
            <a href="calendar.php">
              <div class="pull-left"><i class="fa fa-calendar mr-20"></i><span class="right-nav-text">Calendario de pagos</span></div>
              <div class="clearfix"></div>
            </a>
          </li>
          <li>
            <a href="statistics.php">
              <div class="pull-left"><i class="fa fa-bar-chart-o mr-20"></i><span class="right-nav-text">Estadísticas</span></div>
              <div class="clearfix"></div>
            </a>
          </li>
          <li>
            <a href="news.php">
              <div class="pull-left"><i class="ti-book mr-20"></i><span class="right-nav-text">Noticias</span></div>
              <div class="clearfix"></div>
            </a>
          </li>
        </ul>
      </div>
      <!-- /Left Sidebar Menu -->

			<!-- Right Sidebar Menu -->
			<div class="fixed-sidebar-right">
				<ul class="right-sidebar">
					<li>
						<div  class="tab-struct custom-tab-1">
							<ul role="tablist" class="nav nav-tabs" id="right_sidebar_tab">
								<li class="active" role="presentation"><a aria-expanded="true"  data-toggle="tab" role="tab" id="chat_tab_btn" href="#chat_tab">chat</a></li>
								<li role="presentation" class=""><a  data-toggle="tab" id="messages_tab_btn" role="tab" href="#messages_tab" aria-expanded="false">messages</a></li>
								<li role="presentation" class=""><a  data-toggle="tab" id="todo_tab_btn" role="tab" href="#todo_tab" aria-expanded="false">todo</a></li>
							</ul>
							<div class="tab-content" id="right_sidebar_content">
								<div  id="chat_tab" class="tab-pane fade active in" role="tabpanel">
									<div class="chat-cmplt-wrap">
										<div class="chat-box-wrap">
											<div class="add-friend">
												<a href="javascript:void(0)" class="inline-block txt-grey">
													<i class="zmdi zmdi-more"></i>
												</a>
												<span class="inline-block txt-dark">users</span>
												<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-plus"></i></a>
												<div class="clearfix"></div>
											</div>
											<form role="search" class="chat-search pl-15 pr-15 pb-15">
												<div class="input-group">
													<input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
													<span class="input-group-btn">
													<button type="button" class="btn  btn-default"><i class="zmdi zmdi-search"></i></button>
													</span>
												</div>
											</form>
											<div id="chat_list_scroll">
												<div class="nicescroll-bar">
													<ul class="chat-list-wrap">
														<li class="chat-list">
															<div class="chat-body">

																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="assets/img/user4.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Beautiful Property</span>
																			<span class="time block truncate txt-grey">I would like to invest in the property of $ 2,000,000.00</span>
																		</div>
																		<div class="status away"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="recent-chat-box-wrap">
											<div class="recent-chat-wrap">
												<div class="panel-heading ma-0">
													<div class="goto-back">
														<a  id="goto_back" href="javascript:void(0)" class="inline-block txt-grey">
															<i class="zmdi zmdi-chevron-left"></i>
														</a>
														<span class="inline-block txt-dark">ryan</span>
														<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-more"></i></a>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="panel-wrapper collapse in">
													<div class="panel-body pa-0">
														<div class="chat-content">
															<ul class="nicescroll-bar pt-20">
																<li class="friend">
																	<div class="friend-msg-wrap">
																		<img class="user-img img-circle block pull-left"  src="assets/img/user.png" alt="user"/>
																		<div class="msg pull-left">
																			<p>Hello Jason, how are you, it's been a long time since we last met?</p>
																			<div class="msg-per-detail text-right">
																				<span class="msg-time txt-light">2:30 PM</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																</li>
																<li class="self mb-10">
																	<div class="self-msg-wrap">
																		<div class="msg block pull-right"> Oh, hi Sarah I'm have got a new job now and is going great.
																			<div class="msg-per-detail text-right">
																				<span class="msg-time txt-light">2:31 pm</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																</li>
																<li class="self">
																	<div class="self-msg-wrap">
																		<div class="msg block pull-right">  How about you?
																			<div class="msg-per-detail text-right">
																				<span class="msg-time txt-light">2:31 pm</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																</li>
																<li class="friend">
																	<div class="friend-msg-wrap">
																		<img class="user-img img-circle block pull-left"  src=".assets/img/user.png" alt="user"/>
																		<div class="msg pull-left">
																			<p>Not too bad.</p>
																			<div class="msg-per-detail  text-right">
																				<span class="msg-time txt-light">2:35 pm</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																</li>
															</ul>
														</div>
														<div class="input-group">
															<input type="text" id="input_msg_send" name="send-msg" class="input-msg-send form-control" placeholder="Type something">
															<div class="input-group-btn emojis">
																<div class="dropup">
																	<button type="button" class="btn  btn-default  dropdown-toggle" data-toggle="dropdown" ><i class="zmdi zmdi-mood"></i></button>
																	<ul class="dropdown-menu dropdown-menu-right">
																		<li><a href="javascript:void(0)">Action</a></li>
																		<li><a href="javascript:void(0)">Another action</a></li>
																		<li class="divider"></li>
																		<li><a href="javascript:void(0)">Separated link</a></li>
																	</ul>
																</div>
															</div>
															<div class="input-group-btn attachment">
																<div class="fileupload btn  btn-default"><i class="zmdi zmdi-attachment-alt"></i>
																	<input type="file" class="upload">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="messages_tab" class="tab-pane fade" role="tabpanel">
									<div class="message-box-wrap">
										<div class="msg-search">
											<a href="javascript:void(0)" class="inline-block txt-grey">
												<i class="zmdi zmdi-more"></i>
											</a>
											<span class="inline-block txt-dark">messages</span>
											<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-search"></i></a>
											<div class="clearfix"></div>
										</div>
										<div class="set-height-wrap">
											<div class="streamline message-box nicescroll-bar">

												<a href="javascript:void(0)">
													<div class="sl-item unread-message">
														<div class="sl-avatar avatar avatar-sm avatar-circle">
															<img class="img-responsive img-circle" src="assets/img/user4.png" alt="avatar"/>
														</div>
														<div class="sl-content">
															<span class="inline-block capitalize-font   pull-left message-per">Jonnie Metoyer</span>
															<span class="inline-block font-11  pull-right message-time">27 Jan</span>
															<div class="clearfix"></div>
															<span class=" truncate message-subject">Help with this Property</span>
															<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
														</div>
													</div>
												</a>
												<a href="javascript:void(0)">
													<div class="sl-item">
														<div class="sl-avatar avatar avatar-sm avatar-circle">
															<img class="img-responsive img-circle" src="assets/img/user.png" alt="avatar"/>
														</div>
														<div class="sl-content">
															<span class="inline-block capitalize-font   pull-left message-per">Priscila Shy</span>
															<span class="inline-block font-11  pull-right message-time">19 Jan</span>
															<div class="clearfix"></div>
															<span class=" truncate message-subject">invest in this property</span>
															<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
														</div>
													</div>
												</a>

											</div>
										</div>
									</div>
								</div>
								<div  id="todo_tab" class="tab-pane fade" role="tabpanel">
									<div class="todo-box-wrap">
										<div class="add-todo">
											<a href="javascript:void(0)" class="inline-block txt-grey">
												<i class="zmdi zmdi-more"></i>
											</a>
											<span class="inline-block txt-dark">todo list</span>
											<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-plus"></i></a>
											<div class="clearfix"></div>
										</div>
										<div class="set-height-wrap">
											<!-- Todo-List -->
											<ul class="todo-list nicescroll-bar">
												<li class="todo-item">
													<div class="checkbox checkbox-default">
														<input type="checkbox" id="checkbox01"/>
														<label for="checkbox01">Record The First Episode</label>
													</div>
												</li>
												<li>
													<hr class="light-grey-hr"/>
												</li>
												<li class="todo-item">
													<div class="checkbox checkbox-pink">
														<input type="checkbox" id="checkbox02"/>
														<label for="checkbox02">Prepare The Conference Schedule</label>
													</div>
												</li>
												<li>
													<hr class="light-grey-hr"/>
												</li>
												<li class="todo-item">
													<div class="checkbox checkbox-warning">
														<input type="checkbox" id="checkbox03" checked/>
														<label for="checkbox03">Decide The Live Discussion Time</label>
													</div>
												</li>
												<li>
													<hr class="light-grey-hr"/>
												</li>
												<li class="todo-item">
													<div class="checkbox checkbox-success">
														<input type="checkbox" id="checkbox04" checked/>
														<label for="checkbox04">Prepare For The Next Project</label>
													</div>
												</li>
												<li>
													<hr class="light-grey-hr"/>
												</li>
												<li class="todo-item">
													<div class="checkbox checkbox-danger">
														<input type="checkbox" id="checkbox05" checked/>
														<label for="checkbox05">Finish Up AngularJs Tutorial</label>
													</div>
												</li>
												<li>
													<hr class="light-grey-hr"/>
												</li>
												<li class="todo-item">
													<div class="checkbox checkbox-purple">
														<input type="checkbox" id="checkbox06" checked/>
														<label for="checkbox06">Finish Infinity Project</label>
													</div>
												</li>
												<li>
													<hr class="light-grey-hr"/>
												</li>
											</ul>
											<!-- /Todo-List -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<!-- /Right Sidebar Menu -->

      <!--  -->



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
						  <h5 class="txt-dark">Upload Properties</h5>
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
      										<h6 class="panel-title txt-dark">UPLOAD PROPERTIES</h6>
      									</div>
      									<div class="clearfix"></div>
      								</div>
      								<div class="panel-wrapper collapse in">
      									<div class="panel-body">
      										<form id="example-advanced-form" action="#">
      											<h3><span class="number"><i class="icon-user-following txt-black"></i></span><span class="head-font capitalize-font">signup</span></h3>
      											<fieldset>
      												<div class="row">

                                <!-- upload files -->
                                <div class="col-md-1-12">

                                  <div class="panel-wrapper collapse in">
                  									<div class="panel-body">
                  										<div class="">
                  											<div action="#" class="dropzone" id="my-awesome-dropzone">
                  												<div class="fallback">
                  													<input name="file" type="file" multiple />
                  												</div>
                  											</div>
                  										</div>
                  									</div>
                  								</div>
                                </div>
                                <!--  -->

      													<div class="col-sm-6">
      														<div class="form-wrap">
      															<div class="form-group">
      																<div class="input-group">
      																	<div class="input-group-addon"><i class="icon-user"></i></div>
      																	<input type="text" class="form-control required"  name="Username" id="exampleInputuname" placeholder="Username">
      																</div>
      															</div>
      															<div class="form-group">
      																<div class="input-group">
      																	<div class="input-group-addon"><i class="icon-envelope-open"></i></div>
      																	<input type="email" class="form-control required" id="exampleInputEmail" name="email" placeholder="Enter email">
      																</div>
      															</div>
      															<div class="form-group">
      																<div class="input-group">
      																	<div class="input-group-addon"><i class="icon-lock"></i></div>
      																	<input id="password-2" type="password" class="form-control required" name="password" placeholder="Enter password">
      																</div>
      															</div>

      															<div class="form-group mb-0">
      																<div class="input-group">
      																	<div class="input-group-addon"><i class="icon-lock"></i></div>
      																	<input type="password" class="form-control required"  id="confirm-2" name="confirm"  placeholder="confirm password">
      																</div>
      															</div>
      														</div>
      													</div>
      												</div>
      											</fieldset>

      											<h3><span class="number"><i class="icon-bag txt-black"></i></span><span class="head-font capitalize-font">shipping</span></h3>
      											<fieldset>
      												<div class="row">
      													<div class="col-sm-12">
      														<div class="form-wrap">
      															<div class="form-group">
      																<label class="control-label mb-10" for="exampleCountry">country:</label>
      																<select id="exampleCountry" class="form-control required" name="country">
      																	<option value="1">India</option>
      																	<option value="2">Australia</option>
      																	<option value="3">USA</option>
      																	<option value="4">Japan</option>
      																</select>
      															</div>
      															<div class="form-group">
      																<div class="row">
      																	<div class="col-md-6 col-xs-12">
      																		<label class="control-label mb-10" for="firstName">first name:</label>
      																		<input id="firstName" type="text" name="first_name" class="form-control required" value="" />
      																	</div>
      																	<div class="span1"></div>
      																	<div class="col-md-6 col-xs-12">
      																		<label class="control-label mb-10" for="lastName">last name:</label>
      																		<input id="lastName" type="text" name="last_name" class="form-control required" value="" />
      																	</div>
      																</div>
      															</div>
      															<div class="form-group">
      																<label class="control-label mb-10" for="addressDetail">Address:</label>
      																<input id="addressDetail"  type="text" name="address" class="form-control required" value="" />
      															</div>
      															<div class="form-group">
      																<label class="control-label mb-10" for="cityName">city:</label>
      																<select id="cityName" class="form-control required" name="country">
      																	<option value="">Banglore</option>
      																	<option value="">Pune</option>
      																</select>
      															</div>
      															<div class="form-group">
      																<label class="control-label mb-10" for="stateName">state:</label>
      																<select id="stateName" class="form-control required" name="country">
      																	<option value="">Karnataka</option>
      																	<option value="">Maharashtra</option>
      																</select>
      															</div>
      															<div class="form-group">
      																<label class="control-label mb-10" for="postalCode">zip/postal code:</label>
      																<input id="postalCode" type="text" name="zip_code"  data-mask="99999-9999" class="form-control required" value="" />
      															</div>
      															<div class="form-group">
      																<label class="control-label mb-10" for="phoneNumber">phone number:</label>
      																<input type="text" id="phoneNumber"  data-mask="+40 999 999 999" name="phone_number" class="form-control required" value="" />
      															</div>
      															<div class="form-group">
      																<label class="control-label mb-10" for="emailAddress">email address:</label>
      																<input id="emailAddress" type="text" name="email_address" class="form-control required" value="" />
      															</div>
      															<div class="form-group mb-0">
      																<div class="checkbox checkbox-success">
      																	<input id="checkbox_1" type="checkbox">
      																	<label for="checkbox_1">Billing address is same as shipping address.</label>
      																</div>
      															</div>
      														</div>
      													</div>
      												</div>
      											</fieldset>

      											<h3><span class="number"><i class="icon-credit-card txt-black"></i></span><span class="head-font capitalize-font">payment</span></h3>
      												<fieldset>
      												<!--CREDIT CART PAYMENT-->
      												<div class="row">
      													<div class="col-sm-12">
      														<div class="form-group">
      															<label class="control-label mb-10" for="CreditCardType">card type:</label>
      															<select id="CreditCardType" name="CreditCardType" class="form-control required">
      																<option value="5">Visa</option>
      																<option value="6">MasterCard</option>
      																<option value="7">American Express</option>
      																<option value="8">Discover</option>
      															</select>
      														</div>
      														<div class="form-group">
      															<label class="control-label mb-10" for="cardNo">Credit Card Number:</label>
      															<input type="text" id="cardNo" data-mask="9999-9999-9999-9999" class="form-control required" name="car_number" value="" />
      														</div>
      														<div class="form-group">
      															<label class="control-label mb-10" for="cvv">card cvv:</label>
      															<input type="text" id="cvv" class="form-control  required" data-mask="999" name="car_code" value="" />
      														</div>
      														<div class="form-group">
      															<label class="control-label mb-10">expiration date:</label>
      															<div class="row">
      																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      																	<select class="form-control required" name="month">
      																		<option value="">Month</option>
      																		<option value="1">01</option>
      																		<option value="2">02</option>
      																		<option value="3">03</option>
      																		<option value="4">04</option>
      																		<option value="5">05</option>
      																		<option value="6">06</option>
      																	</select>
      																</div>
      																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      																	<select class="form-control required" name="year">
      																		<option value="1">Year</option>
      																		<option value="2">2001</option>
      																	</select>
      																</div>
      															</div>
      														</div>
      														<div class="form-group mb-0">
      															<div class="row">
      																<div class="col-md-12">
      																	<ul class="cards">
      																		<li class="visa hand"><img src="../img/1-s.png" alt="card"/></li>
      																		<li class="mastercard hand"><img src="../img/2-s.png" alt="card"/></li>
      																		<li class="amex hand"><img src="../img/3-s.png" alt="card"/></li>
      																		<li class="amex hand"><img src="../img/4-s.png" alt="card"/></li>
      																		</ul>
      																	<div class="clearfix"></div>
      																</div>
      															</div>
      														</div>

      													</div>
      												</div>
      												<!--CREDIT CART PAYMENT END-->
      											</fieldset>

      											<h3><span class="number"><i class="icon-basket-loaded txt-black"></i></span><span class="head-font capitalize-font">review cart</span></h3>
      											<fieldset>
      													<table class="table display product-overview" id="datable_1">
      														<thead>
      															<tr>
      																<th>Photo</th>
      																<th>Product</th>
      																<th>Quantity</th>
      																<th>price</th>
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
      																	<img src="../img/chair.jpg" alt="iMac" width="80">
      																</td>
      																<td>Rounded Chair</td>
      																<td>
      																<input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-default"   data-bts-button-up-class="btn btn-default" value="20" name="vertical-spin">
      																</td>
      																<td>$400</td>

      																<td><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
      															</tr>
      															<tr>
      																<td>
      																	<img src="../img/chair2.jpg" alt="iMac" width="80">
      																</td>
      																<td>Rounded Chair</td>
      																<td>
      																	<input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-default"   data-bts-button-up-class="btn btn-default" value="10" name="vertical-spin">
      																</td>
      																<td>$450</td>
      																<td><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
      															</tr>
      															<tr>
      																<td>
      																	<img src="../img/chair3.jpg" alt="iMac" width="80">
      																</td>
      																<td>Rounded Chair</td>
      																<td>
      																<input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-default"   data-bts-button-up-class="btn btn-default" value="15" name="vertical-spin">
      																</td>
      																<td>$470</td>

      																<td><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
      															</tr>
      														</tbody>
      													</table>
      											</fieldset>
      										</form>
      									</div>
      								</div>
      							</div>
      						</div>
      					</div>
      					<!-- /Row -->

                <!-- /wizard -->


								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<div class="row">
                        <div class="col-md-6">
                        </div>
												<div class="col-md-12 col-sm-12 col-xs-12 form-group">
													<input type="text" placeholder=".col-sm-12" class="form-control">
												</div>
												<div class="col-md-6 col-sm-12 col-xs-12 form-group">
													<input type="text" placeholder=".col-sm-6" class="form-control">
												</div>
												<div class="col-md-6 col-sm-12 col-xs-12 form-group">
													<input type="text" placeholder=".col-sm-6" class="form-control">
												</div>
												<div class="col-md-4 col-sm-12 col-xs-12 form-group">
													<input type="text" placeholder=".col-sm-4" class="form-control">
												</div>
												<div class="col-md-4 col-sm-12 col-xs-12 form-group">
													<input type="text" placeholder=".col-sm-4" class="form-control">
												</div>
												<div class="col-md-4 col-sm-12 col-xs-12 form-group">
													<input type="text" placeholder=".col-sm-4" class="form-control">
												</div>
												<div class="col-md-3 col-sm-12 col-xs-12 form-group">
													<input type="text" placeholder=".col-sm-3" class="form-control">
												</div>
												<div class="col-md-3 col-sm-12 col-xs-12 form-group">
													<input type="text" placeholder=".col-sm-3" class="form-control">
												</div>
												<div class="col-md-3 col-sm-12 col-xs-12 form-group">
													<input type="text" placeholder=".col-sm-3" class="form-control">
												</div>
												<div class="col-md-3 col-sm-12 col-xs-12 form-group">
													<input type="text" placeholder=".col-sm-3" class="form-control">
												</div>
												<div class="col-md-2 col-sm-12 col-xs-12 form-group">
													<input type="text" placeholder=".col-sm-2" class="form-control">
												</div>
												<div class="col-md-2 col-sm-12 col-xs-12 form-group">
													<input type="text" placeholder=".col-sm-2" class="form-control">
												</div>
												<div class="col-md-2 col-sm-12 col-xs-12 form-group">
													<input type="text" placeholder=".col-sm-2" class="form-control">
												</div>
												<div class="col-md-2 col-sm-12 col-xs-12 form-group">
													<input type="text" placeholder=".col-sm-2" class="form-control">
												</div>
												<div class="col-md-2 col-sm-12 col-xs-12 form-group">
													<input type="text" placeholder=".col-sm-2" class="form-control">
												</div>
												<div class="col-md-2 col-sm-12 col-xs-12 form-group">
													<input type="text" placeholder=".col-sm-2" class="form-control">
												</div>
												<div class="col-md-1 col-sm-12 col-xs-12 form-group mb-0">
													<input type="text" placeholder=".col-sm-1" class="form-control">
												</div>
												<div class="col-md-1 col-sm-12 col-xs-12 form-group mb-0">
													<input type="text" placeholder=".col-sm-1" class="form-control">
												</div>
												<div class="col-md-1 col-sm-12 col-xs-12 form-group mb-0">
													<input type="text" placeholder=".col-sm-1" class="form-control">
												</div>
												<div class="col-md-1 col-sm-12 col-xs-12 form-group mb-0">
													<input type="text" placeholder=".col-sm-1" class="form-control">
												</div>
												<div class="col-md-1 col-sm-12 col-xs-12 form-group mb-0">
													<input type="text" placeholder=".col-sm-1" class="form-control">
												</div>
												<div class="col-md-1 col-sm-12 col-xs-12 form-group mb-0">
													<input type="text" placeholder=".col-sm-1" class="form-control">
												</div>
												<div class="col-md-1 col-sm-12 col-xs-12 form-group mb-0">
													<input type="text" placeholder=".col-sm-1" class="form-control">
												</div>
												<div class="col-md-1 col-sm-12 col-xs-12 form-group mb-0">
													<input type="text" placeholder=".col-sm-1" class="form-control">
												</div>
												<div class="col-md-1 col-sm-12 col-xs-12 form-group mb-0">
													<input type="text" placeholder=".col-sm-1" class="form-control">
												</div>
												<div class="col-md-1 col-sm-12 col-xs-12 form-group mb-0">
													<input type="text" placeholder=".col-sm-1" class="form-control">
												</div>
												<div class="col-md-1 col-sm-12 col-xs-12 form-group mb-0">
													<input type="text" placeholder=".col-sm-1" class="form-control">
												</div>
												<div class="col-md-1 col-sm-12 col-xs-12 form-group mb-0">
													<input type="text" placeholder=".col-sm-1" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
					<!-- /Row -->
          <!-- /form -->



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
		<script src="vendors/bower_components/jquery.steps/build/jquery.steps.min.js"></script>
		<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>

		<!-- Form Wizard Data JavaScript -->
		<script src="assets/dist/js/form-wizard-data.js"></script>

    <!-- Starrr JavaScript -->
    <script src="assets/dist/js/starrr.js"></script>

    <!-- Bootstrap Touchspin JavaScript -->
		<script src="vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>

    <!-- Dropzone JavaScript -->
    <script src="vendors/bower_components/dropzone/dist/dropzone.js"></script>

    <!-- Dropzone Init JavaScript -->
    <script src="assets/dist/js/dropzone-data.js"></script>

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
