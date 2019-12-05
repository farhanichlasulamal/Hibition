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
	          <li class="nav-item"><a href="<?php echo site_url('Home');?>" class="nav-link">Home</a></li>
            <li class="nav-item active"><a href="<?php echo site_url('Category');?>" class="nav-link">Categories</a></li>
            <li class="nav-item"><a href="<?php echo site_url('About');?>" class="nav-link">About</a></li>
            <li class="nav-item"><a href="<?php echo site_url('Contact');?>" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url(<?php echo base_url('assets/images/'.$artikel->gambar_kategori)?>);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
          	<p class="breadcrumbs">
              <span class="mr-2"><a href="<?php echo site_url('Home');?>">Home <i class="ion-ios-arrow-forward"></i></a></span>
              <span class="mr-2"><a href="<?php echo site_url('Category');?>">Categories <i class="ion-ios-arrow-forward"></i></a></span>
            </p>
            <h1 class="mb-3 bread"><?php echo $artikel->nama_kategori ?></h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 order-md-last ftco-animate">

            <div class="d-flex">
              <div class="pr-2"><span class="icon icon-user"></span></div>
              <div class="px-2"><?php echo $artikel->nama ?></div>
              <div class="px-2">|</div>
              <div class="px-2"><span class="icon-calendar"></span></div>
              <div class="px-2">
                <?php
                  echo date('l, j F Y H:i', strtotime($artikel->tanggal_artikel." ".$artikel->waktu_artikel))." WIB"; 
                ?>
              </div>
            </div>

            <hr>

            <h2 class="mb-3"><?php echo $artikel->judul ?></h2>
            <p><?php echo $artikel->ringkasan_artikel ?></p>
            <p>
              <img src="<?php echo base_url('assets/images/'.$artikel->gambar_artikel)?>" alt="" class="img-fluid">
            </p>

            <div class="row justify-content-center my-5">
              <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Tutorial</span>
                <h2 class="mb-3">Step</h2>
              </div>
            </div>

            <?php foreach ($step as $key): ?>
            <div class="row no-gutters mb-5">
              <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url('assets/images/'.$key->gambar_step)?>);">
              </div>
              <div class="col-md-6 wrap-about py-md-5 ftco-animate">
                <div class="heading-section p-md-5">
                  <h2 class="mb-4"><?php echo $key->nomor_urut.'. '.$key->judul_step ?></h2>
                  <p><?php echo $key->isi_step ?></p>
                </div>
              </div>
              <!-- TIPS -->
              <?php
                $tips = $key->id_tips;
                if(isset($tips)){
                  echo '<div class="about-author w-100 d-flex p-4 bg-light ftco-animate">';
                  echo '<div class="bio d-flex align-items-center mr-4">';
                  echo '<img src="'.base_url('assets/images/idea.png').'" alt="Image placeholder" class="p-4" style="width:150px;">';
                  echo '</div>';
                  echo '<div class="desc">';
                  echo '<h3>For Your Information!</h3>';
                  echo '<p>'.$key->isi_tips.'</p>';
                  echo '<h6>'.$key->nama_pakar.' - '.$key->profesi_pakar.'</h6>';
                  echo '</div></div>';
                }
              ?>
            </div>
            <?php endforeach ?>

          </div>

          <!-- .col-md-8 -->
          <div class="col-md-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="<?php echo site_url('Home/search');?>" id="formSearch" method="POST" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" name="SearchBar" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>

            <!-- Categories -->
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Categories</h3>
                  <li><a href="<?php echo base_url('Category/show_categories_item_all')?>">All <span>(<?php echo $all_category; ?>)</span></a></li>
                <?php foreach ($category as $key): ?>
                  <li><a href="<?php echo base_url('Category/show_categories_item/'.$key->id_kategori)?>"><?php echo $key->nama_kategori?> <span>(<?php echo $key->jumlah?>)</span></a></li>
                <?php endforeach ?>
              </div>
            </div>

            <!-- Recent Article -->
            <div class="sidebar-box ftco-animate">
              <h3>Recent Article</h3>

              <?php foreach ($recent_artikel as $key): ?>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?php echo base_url('assets/images/'.$key->gambar_artikel)?>);"></a>
                <div class="text">
                  <h3 class="heading"><a href="<?php echo base_url('Article/show_article/'.$key->id_artikel);?>"><?php echo $key->judul?></a></h3>
                  <div class="meta">
                    <div><span class="icon-calendar"></span> <?php echo date('j F Y H:i', strtotime($key->tanggal_artikel.' '.$key->waktu_artikel)).' WIB'; ?></div>
                    <div><span class="icon-person"></span> <?php echo $key->nama ?></div>
                  </div>
                </div>
              </div>
              <?php endforeach ?>

            </div>

        </div>
      </div>
    </section> <!-- .section -->



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
    
  </body>
</html>