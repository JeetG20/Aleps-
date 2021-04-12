<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Automated Land Encroachment Prevention System</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo site_url('resources/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo site_url('resources/css/sb-admin-2.min.css');?>" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo site_url('resources/css/style.css');?>" />
 </head>
  
<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back to ALEPS!</h1>
                  </div>
                 <?php echo form_open('usermaster/login'); ?>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" value="<?php echo set_value('username'); ?>" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter Username">
                      <?php echo form_error('username'); ?>
					</div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
					  <?php echo form_error('password'); ?>
                    </div>
                    
                     
					<button type="submit" align="right" class="btn btn-primary">Login</button>
					<br><span color="RED"><?php echo $this->session->flashdata('login_error'); ?></span> 
                    <hr>
                     <?php
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert alert-success">
                        '.$this->session->flashdata("message").'
                    </div>
                    ';
                }
                ?>  
                  <?php form_close(); ?>
                  
                  <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <img src="http://vadodarasmartcity.in/vscdl/assets/images/logo/Logo-Smart%20City.jpeg" width="100">
                      </div>
                    </div>
                  <hr>DEV IT Pvt. Ltd. Powered by Yotaka Solutions
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>


  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo site_url('resources/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo site_url('resources/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo site_url('resources/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo site_url('resources/js/sb-admin-2.min.js');?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo site_url('resources/vendor/chart.js/Chart.min.js');?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo site_url('resources/js/demo/chart-area-demo.js');?>"></script>
  <script src="<?php echo site_url('resources/js/demo/chart-pie-demo.js');?>"></script>
  <script src="<?php echo site_url('resources/js/main.js');?>"></script>
</body>
</html>
