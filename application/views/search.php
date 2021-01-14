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
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?php echo site_url('Home');?>">H I B I T I O N</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="<?php echo site_url('Home');?>" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="<?php echo site_url('Category');?>" class="nav-link">Category</a></li>
            <li class="nav-item"><a href="<?php echo site_url('About');?>" class="nav-link">About</a></li>
            <li class="nav-item"><a href="<?php echo site_url('Contact');?>" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap ftco-degree-bg" style="background-image: url(<?php echo base_url('assets/images/bg_1.jpg')?>);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate pb-3 text-center">
            <p class="breadcrumbs">
              <span class="mr-2"><a href="<?php echo site_url('Home');?>">Home <i class="ion-ios-arrow-forward"></i></a></span>
            </p>
            <h1 class="mb-3 bread">Search</h1>
            <form action="<?php echo site_url('Home/search');?>" id="formSearch" method="POST" class="search-location mt-md-5">
              <div class="row justify-content-center">
                <div class="col-lg-10 align-items-end">
                  <div class="form-group">
                    <div class="form-field">
                      <input type="text" class="form-control" name="SearchBar" value="<?php echo $word;?>" placeholder="Search Trends">
                      <button type="submit"><span class="ion-ios-search"></span></button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="mouse">
				<a href="#" class="mouse-icon">
					<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
				</a>
			</div>
    </div>

    <section class="ftco-section goto-here">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">Search</span>
            <h2 class="mb-2">Search results for "<?php echo $word;?>"</h2>
          </div>
        </div>
        <div class="row">

          <?php if ($artikel==NULL): ?>
            <p>Your search - <b><?php echo $word;?></b> - did not match any documents.</p>
          <?php else: ?>
          <?php foreach ($artikel as $key): ?>
          <div class="col-md-4">
            <div class="property-wrap ftco-animate">
              <a href="<?php echo site_url('Article/show_article/'.$key->id_artikel);?>" class="img" style="background-image: url(<?php echo base_url('assets/images/article/'.$key->gambar_artikel)?>);"></a>
              <div class="text">
                <ul class="property_list">
                  <li><small><span class="icon icon-user"></span><?php echo $key->nama ?></small></li>
                  <li><small><span class="icon-calendar"></span><?php echo date('j F Y H:i', strtotime($key->tanggal_artikel." ".$key->waktu_artikel))." WIB"; ?></small></li>
                </ul>
                <h3><a href="<?php echo site_url('Article/show_article/'.$key->id_artikel);?>"><?php echo $key->judul ?></a></h3>
                <span class="location"><?php echo $key->nama_kategori ?></span>
                <a href="<?php echo site_url('Article/show_article/'.$key->id_artikel);?>" class="d-flex align-items-center justify-content-center btn-custom">
                  <span class="ion-ios-link"></span>
                </a>
              </div>
            </div>
          </div>
          <?php endforeach ?>
          <?php endif; ?>

        </div>
    	</div>
    </section>

    <!-- ADS -->
    <section class="ftco-section">
      <div class="container">
        <a href="<?php echo $ads2->link_ads;?>">
          <img src="<?php echo base_url('assets/images/'.$ads2->gambar_ads);?>" width="100%" height="auto">
        </a>
      </div>
    </section>

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">H I B I T I O N</h2>
              <p>HIBITION adalah sebuah wadah untuk anak urban Indonesia menemukan hobi dan gaya hidup yang sedang tren saat ini.</p>
              <ul class="ftco-footer-social list-unstyled mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Our Story</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Meet the team</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Careers</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Company</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About Us</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Press</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Careers</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Jl. Ir. Sutami No.36 A, Pucangsawit, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+ 62 821 1382 3629</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope pr-4"></span><span class="text">contact@hibition.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
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