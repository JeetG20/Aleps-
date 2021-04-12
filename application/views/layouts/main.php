<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Automated Land Encroachment Prevention System</title>
  <!-- Custom fonts for this template  <link href="<?php echo site_url('resources/css/bootstrap.min.css');?>" rel="stylesheet"> 
-->
  <link href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>" rel="stylesheet">
  
  <link href="<?php echo site_url('resources/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo site_url('resources/css/sb-admin-2.min.css');?>" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="<?php echo site_url('resources/css/style.css');?>" />
  
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

   <!-- Bootstrap core JavaScript-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>

  <script src="<?php echo site_url('resources/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo site_url('resources/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <!--<script src="<?php echo site_url('resources/vendor/datatables/jquery.dataTables.min.js');?>"></script>-->

  <!-- Core plugin JavaScript-->
  <script src="<?php echo site_url('resources/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo site_url('resources/js/sb-admin-2.min.js');?>"></script>
  
  
  <?PHP 
	if($this->router->fetch_class() != "dashboard") {
  ?> <script src="<?php echo site_url('resources/js/main.js');?>"></script>
  <?PHP  } ?>
  <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
  <?PHP 
	if($this->router->fetch_class() == "dashboard" && false) {
  ?>
  <!-- Page level plugins -->
  <script src="<?php echo site_url('resources/vendor/chart.js/Chart.min.js');?>"></script>
  <!-- Page level custom scripts -->
  <script src="<?php echo site_url('resources/js/demo/chart-area-demo.js');?>"></script>
  <script src="<?php echo site_url('resources/js/demo/chart-pie-demo.js');?>"></script> 
	<?PHP  } ?>
	
	<style>.input-group-addon{padding:7px 12px;font-size:14px;font-weight:400;line-height:1;color:#555;text-align:center;background-color:#eee;border:1px solid #ccc;border-radius:4px}.input-group-addon.input-sm{padding:5px 10px;font-size:12px;border-radius:3px}.label{border:1px solid #000}.table{border-collapse:collapse!important}.table td,.table th{background-color:#fff!important}.table-bordered td,.table-bordered th{border:1px solid #ddd!important}}@font-face{font-family:'Glyphicons Halflings';src:url(<?php echo site_url('resources/fonts');?>/glyphicons-halflings-regular.eot);src:url(<?php echo site_url('resources/fonts');?>/glyphicons-halflings-regular.eot?#iefix) format('embedded-opentype'),url(<?php echo site_url('resources/fonts');?>/glyphicons-halflings-regular.woff2) format('woff2'),url(<?php echo site_url('resources/fonts');?>/glyphicons-halflings-regular.woff) format('woff'),url(<?php echo site_url('resources/fonts');?>/glyphicons-halflings-regular.ttf) format('truetype'),url(<?php echo site_url('resources/fonts');?>/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format('svg')}@font-face{font-family:'Glyphicons Halflings';src:url(<?php echo site_url('resources/fonts');?>/glyphicons-halflings-regular.eot);src:url(<?php echo site_url('resources/fonts');?>/glyphicons-halflings-regular.eot?#iefix) format('embedded-opentype'),url(<?php echo site_url('resources/fonts');?>/glyphicons-halflings-regular.woff2) format('woff2'),url(<?php echo site_url('resources/fonts');?>/glyphicons-halflings-regular.woff) format('woff'),url(<?php echo site_url('resources/fonts');?>/glyphicons-halflings-regular.ttf) format('truetype'),url(<?php echo site_url('resources/fonts');?>/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format('svg')}.glyphicon{position:relative;top:1px;display:inline-block;font-family:'Glyphicons Halflings';font-style:normal;font-weight:400;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
  .glyphicon-calendar:before{content:"\e109"}.input-group-addon{color:#3c763d;background-color:#dff0d8;border-color:#3c763d}</style>
</head>    
<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center" href="/">
        <div class="sidebar-brand-icon">
          <img src="<?php echo site_url('resources/img/logo.jpg');?>" class="logo" />
        </div>
        <div class="sidebar-brand-text mx-3">ALEPS</div>
      </a>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('/');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('intrusiondetail/index');?>">
          <i class="fas fa-fw fa-cog"></i>
          <span>Incidents</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('usermaster/index');?>">
          <i class="fas fa-fw fa-user-tie"></i>
          <span>Members/Users</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('location/index');?>">
          <i class="fas fa-fw fa-map-marker-alt"></i>
          <span>Locations</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('device/index');?>">
          <i class="fas fa-fw fa-tablet-alt"></i>
          <span>Devices</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('intrusiondetail/index/R');?>">
          <i class="fas fa-fw fa-clipboard-check"></i>
          <span>Resolved Incidents</span>
        </a>
      </li>
	  <?PHP if($_SESSION['role'] == 'Admin'){ ?>
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('intrusiondetail/index/F');?>">
          <i class="fas fa-fw fa-exclamation-triangle"></i>
          <span>False Alerts</span>
        </a>
      </li>
	  <?PHP } ?>
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('usermaster/index');?>">
          <i class="fas fa-fw fa-clipboard-list"></i>
          <span>Report</span>
        </a>
      </li>
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <!-- Topbar Search -->
          <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
          Automated Land Encroachment Prevention System, Vadodara
          </div>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
			<?PHP if($_SESSION['role'] == 'Admin'){ ?>
            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    A new alert is generated!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Alert: Tent alert generated.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>
			<?PHP } ?>
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?PHP echo $_SESSION['user_name'];?></span>
                <i class="fas fa-user-tie fa-2x text-gray-300 img-profile rounded-circle"></i>

              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               <!-- <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>-->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo site_url('usermaster/logout');?>" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

       <!-- Main content -->
                <section class="content">
                    <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>                    
                </section>
                <!-- /.content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>DEV IT Pvt. Ltd. Powered by <a target="_blank" href="http://www.yotaka.co.in/">Yotaka Solutions</a></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo site_url('usermaster/logout');?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

 
</body>
</html>
