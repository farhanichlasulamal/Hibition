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
            <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
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
        <div class="row no-gutters slider-text justify-content-center align-items-center">
          <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
          	<div class="text text-center">
	            <h1 class="mb-4">Discover <br>Who You Really Are</h1>
	            <p style="font-size: 18px;">Kami akan membantumu menemukan berbagai hal menarik yang belum pernah kamu dapatkan sebelumnya. Cari di bawah ini!</p>
	            <form action="<?php echo site_url('Home/search');?>" id="formSearch" method="POST" class="search-location mt-md-5">
		        		<div class="row justify-content-center">
		        			<div class="col-lg-10 align-items-end">
		        				<div class="form-group">
		          				<div class="form-field">
				                <input type="text" class="form-control" name="SearchBar" placeholder="Search Trends">
				                <button type="submit"><span class="ion-ios-search"></span></button>
				              </div>
			              </div>
		        			</div>
		        		</div>
		        	</form>
            </div>
          </div>
        </div>
      </div>
      <div class="mouse">
				<a href="#" class="mouse-icon">
					<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
				</a>
			</div>
    </div>

    <!-- fitur -->
    <section class="ftco-section ftco-no-pb">
      <div class="container">
      	<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">Our Services</span>
            <h2 class="mb-2">The Smartest Way Find New Things</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-think-1"></span></div>
              <div class="media-body py-md-4">
                <h3>Inspiring Things</h3>
                <p>HIBITION memberikan banyak hal menarik yang menginspirasi untuk kaum urban di Indonesia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-video-lecture"></span></div>
              <div class="media-body py-md-4">
                <h3>Tutorial Based</h3>
                <p>HIBITION menyajikan informasi dalam bentuk tutorial sehingga pembaca dapat mengetahui step-by-step dalam menekuni passion mereka.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-group"></span></div>
              <div class="media-body py-md-4">
                <h3>It's All Free</h3>
                <p>Semua konten HIBITION dapat diakses secara gratis tanpa perlu berlangganan.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-like"></span></div>
              <div class="media-body py-md-4">
                <h3>Expert Advice</h3>
                <p>Tersedia tips menarik dari para expert di bidangnya untuk menambah wawasan tentang hal yang anda cari.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <!-- ADS -->
    <section class="ftco-section ftco-no-pb">
      <div class="container">
        <a href="https://mcdonalds.co.id/">
          <img src="<?php echo base_url('assets/images/iklan_1.jpg');?>" width="100%" height="auto">
        </a>
      </div>
    </section>

    <!-- recent article -->
    <section class="ftco-section goto-here ftco-no-pb">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">Recent Article</span>
            <h2 class="mb-2">Exclusive Things For You</h2>
          </div>
        </div>
        <div class="row">

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

        </div>
        <div class="row justify-content-center align-items-center">
          <div class="text text-center">
            <a href="<?php echo site_url('Category/show_categories_item_all');?>">MORE <i class="ion-ios-arrow-forward"></i></a>
          </div>
        </div>
    	</div>
    </section>

    <!-- total fitur -->
    <section class="ftco-counter ftco-no-pb img" id="section-counter">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-4 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-4 mb-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="25">0</strong>
                <span>Total <br>Categories</span>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-4 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-4 mb-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="1090">0</strong>
                <span>Interesting <br>Article</span>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-4 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-4 mb-4">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="150">0</strong>
                <span>Expert <br>Involved</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ADS -->
    <section class="ftco-section ftco-no-pb">
      <div class="container">
        <a href="https://mcdonalds.co.id/">
          <img src="<?php echo base_url('assets/images/iklan_1.jpg');?>" width="100%" height="auto">
        </a>
      </div>
    </section>

    <!-- tips  -->
    <section class="ftco-section testimony-section ftco-no-pb">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Recent Tips</span>
            <h2 class="mb-3">Experience From Experts</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">

              <?php foreach ($tips as $key): ?>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4"><?php echo $key->isi_tips; ?></p>
                    <div class="align-items-center">
	                    <p class="name"><?php echo $key->nama_pakar; ?></p>
	                    <span class="position"><?php echo $key->profesi_pakar; ?></span>
	                  </div>
                  </div>
                </div>
              </div>
              <?php endforeach ?>

            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ADS -->
    <section class="ftco-section">
      <div class="container">
        <a href="https://mcdonalds.co.id/">
          <img src="<?php echo base_url('assets/images/iklan_3.jpg');?>" width="100%" height="auto">
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
              <h2 class="ftco-heading-2">Community</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Search Properties</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>For Agents</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Reviews</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>FAQs</a></li>
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
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
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