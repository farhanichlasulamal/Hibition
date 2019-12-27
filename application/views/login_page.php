<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hibition - Discover Who You Really Are</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/open-iconic-bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css')?>">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/aos.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/ionicons.min.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datepicker.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.timepicker.css')?>">

    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/flaticon.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/icomoon.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style2.css')?>">
  </head>
  <body>

		<section class="ftco-section">
      <div class="container">
          <div class="col ftco-animate d-flex justify-content-center align-items-center">
            <div class="text text-center">
              <div class="card">
                <div class="card-header">
                  <h3 class="mb-0 p-2"><a href="<?php echo site_url();?>"><strong>H I B I T I O N</strong></a><small> admin</small></h3>
                </div>
                <div class="card-body bg-primary">
                  <?php
                      $error = $this->session->flashdata('error'); 
                      if(isset($error)){
                        echo "<div class='alert alert-danger alert-dismissible fade show'><button type='button' class='close' data-dismiss='alert'>&times;</button>".$error."</div>";
                      }
                  ?>
                  <form action="<?php echo site_url('Login/checkAccount');?>" id="formLogin" method="POST" class="search-location mt-md-4">
                    <div class="form-group mb-4">
                      <label for="inputID" class="text-white">ID Karyawan :</label>
                      <div class="form-field">
                        <input type="text" id="inputID" class="form-control border" name="IdKaryawan" placeholder="Type Here...">
                      </div>
                    </div>
                    <div class="form-group  mb-4">
                      <label for="inputPass" class="text-white">Password :</label>
                      <div class="form-field">
                        <input type="password" id="inputPass" class="form-control border" name="PasswordKaryawan" placeholder="Type Here...">
                      </div>
                    </div>
                  </form>
                  <div class="mt-4">
                    <button type="submit" form="formLogin" class="btn btn-info">Login</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p>
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
            </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery-migrate-3.0.1.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.easing.1.3.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.waypoints.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.stellar.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/owl.carousel.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/aos.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.timepicker.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/scrollax.min.js')?>"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url('assets/js/google-map.js')?>"></script>
  <script src="<?php echo base_url('assets/js/main.js')?>"></script>
  <script src="<?php echo base_url('vendor/datatables/jquery.dataTables.js')?>"></script>
  <script src="<?php echo base_url('vendor/datatables/dataTables.bootstrap4.js')?>"></script>
  <script src="<?php echo base_url('assets/js/datatables-demo')?>"></script>
  
  </body>
</html>