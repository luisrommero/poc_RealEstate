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
    <!-- Top Menu Items -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="nav-wrap">
        <div class="mobile-only-brand pull-left">
          <div class="nav-header pull-left">
            <div class="logo-wrap">
              <a href="#">
                <img class="brand-img" src="assets/img/logo.png" alt="brand" />
                <span class="brand-text"><img src="assets/img/brand.png" alt="brand" /></span>
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
                <button type="button" class="btn  btn-default" data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
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

                    <li class="col-md-6 col-xs-12 preview-carousel">
                      <a href="javascript:void(0);">
                        <div class="pull-left"><span class="right-nav-text">opportunities to invest</span></div>
                        <div class="clearfix"></div>
                      </a>
                      <hr class="light-grey-hr ma-0" />
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
                          <img src="assets/img/chair2.jpg" alt="chair">
                          <span>square chair</span>
                        </a>
                        <a href="#">
                          <img src="assets/img/chair2.jpg" alt="chair">
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
              <ul class="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
                <li>
                  <div class="notification-box-head-wrap">
                    <span class="notification-box-head pull-left inline-block">notifications</span>
                    <a class="txt-danger pull-right clear-notifications inline-block" href="javascript:void(0)"> clear all </a>
                    <div class="clearfix"></div>
                    <hr class="light-grey-hr ma-0" />
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
                            New property created
                          </span>
                          <span class="inline-block font-11  pull-right notifications-time">2pm</span>
                          <div class="clearfix"></div>
                          <p class="truncate">
                            Your customer subscribed for the basic plan. The customer will pay $25 per month.
                          </p>
                        </div>
                      </a>
                    </div>
                    <!--  -->
                    <hr class="light-grey-hr ma-0" />
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
                    <hr class="light-grey-hr ma-0" />
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
                    <hr class="light-grey-hr ma-0" />
                    <div class="sl-item">
                      <a href="javascript:void(0)">
                        <div class="sl-avatar">
                          <img class="img-responsive" src="assets/img/avatar.jpg" alt="avatar" />
                        </div>
                        <div class="sl-content">
                          <span class="inline-block capitalize-font  pull-left truncate head-notifications">Sandy Doe</span>
                          <span class="inline-block font-11  pull-right notifications-time">1pm</span>
                          <div class="clearfix"></div>
                          <p class="truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                        </div>
                      </a>
                    </div>
                    <hr class="light-grey-hr ma-0" />
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
                    <hr class="light-grey-hr ma-0" />
                    <a class="block text-center read-all" href="javascript:void(0)"> read all </a>
                    <div class="clearfix"></div>
                  </div>
                </li>
              </ul>
            </li>
            <!-- profile -->
            <li class="dropdown auth-drp">
              <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="assets/img/user1.png" alt="user_auth" class="user-auth-img img-circle" /><span class="user-online-status"></span></a>
              <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                <li>
                  <a href="profile.html"><i class="zmdi zmdi-account"></i><span>
                      <?php echo $_COOKIE['user'] ?></span></a>
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
              <a href="sumary.php">
                <div class="pull-left"><span>Resumen</span></div>
                <div class="pull-right"><span class="label label-success">New</span></div>
                <div class="clearfix"></div>
              </a>
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
              <a href="portfolio.php">Nuevo Portafolio</a>
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
          <div class="tab-struct custom-tab-1">
            <ul role="tablist" class="nav nav-tabs" id="right_sidebar_tab">
              <li class="active" role="presentation"><a aria-expanded="true" data-toggle="tab" role="tab" id="chat_tab_btn" href="#chat_tab">chat</a></li>
              <li role="presentation" class=""><a data-toggle="tab" id="messages_tab_btn" role="tab" href="#messages_tab" aria-expanded="false">messages</a></li>
              <li role="presentation" class=""><a data-toggle="tab" id="todo_tab_btn" role="tab" href="#todo_tab" aria-expanded="false">todo</a></li>
            </ul>
            <div class="tab-content" id="right_sidebar_content">
              <div id="chat_tab" class="tab-pane fade active in" role="tabpanel">
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
                                  <img class="user-img img-circle" src="assets/img/user4.png" alt="user" />
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
                          <a id="goto_back" href="javascript:void(0)" class="inline-block txt-grey">
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
                                  <img class="user-img img-circle block pull-left" src="assets/img/user.png" alt="user" />
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
                                  <div class="msg block pull-right"> How about you?
                                    <div class="msg-per-detail text-right">
                                      <span class="msg-time txt-light">2:31 pm</span>
                                    </div>
                                  </div>
                                  <div class="clearfix"></div>
                                </div>
                              </li>
                              <li class="friend">
                                <div class="friend-msg-wrap">
                                  <img class="user-img img-circle block pull-left" src="assets/img/user.png" alt="user" />
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
                                <button type="button" class="btn  btn-default  dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-mood"></i></button>
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
                            <img class="img-responsive img-circle" src="assets/img/user4.png" alt="avatar" />
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
                            <img class="img-responsive img-circle" src="assets/img/user.png" alt="avatar" />
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
              <div id="todo_tab" class="tab-pane fade" role="tabpanel">
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
                          <input type="checkbox" id="checkbox01" />
                          <label for="checkbox01">Record The First Episode</label>
                        </div>
                      </li>
                      <li>
                        <hr class="light-grey-hr" />
                      </li>
                      <li class="todo-item">
                        <div class="checkbox checkbox-pink">
                          <input type="checkbox" id="checkbox02" />
                          <label for="checkbox02">Prepare The Conference Schedule</label>
                        </div>
                      </li>
                      <li>
                        <hr class="light-grey-hr" />
                      </li>
                      <li class="todo-item">
                        <div class="checkbox checkbox-warning">
                          <input type="checkbox" id="checkbox03" checked />
                          <label for="checkbox03">Decide The Live Discussion Time</label>
                        </div>
                      </li>
                      <li>
                        <hr class="light-grey-hr" />
                      </li>
                      <li class="todo-item">
                        <div class="checkbox checkbox-success">
                          <input type="checkbox" id="checkbox04" checked />
                          <label for="checkbox04">Prepare For The Next Project</label>
                        </div>
                      </li>
                      <li>
                        <hr class="light-grey-hr" />
                      </li>
                      <li class="todo-item">
                        <div class="checkbox checkbox-danger">
                          <input type="checkbox" id="checkbox05" checked />
                          <label for="checkbox05">Finish Up AngularJs Tutorial</label>
                        </div>
                      </li>
                      <li>
                        <hr class="light-grey-hr" />
                      </li>
                      <li class="todo-item">
                        <div class="checkbox checkbox-purple">
                          <input type="checkbox" id="checkbox06" checked />
                          <label for="checkbox06">Finish Infinity Project</label>
                        </div>
                      </li>
                      <li>
                        <hr class="light-grey-hr" />
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
