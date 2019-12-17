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
    <link rel="stylesheet" href="<?php echo base_url('vendor/datatables/dataTables.bootstrap4.css')?>">
    
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
            <li class="nav-item"><a href="" class="nav-link"><?php echo $this->session->nama?></a></li>
            <li class="nav-item">
              <a href="<?php echo base_url('Login/logout');?>" class="nav-link">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 order-md-last ftco-animate">
            <h2 class="mb-3">Category</h2>
            <hr>

            <?php
              $error = $this->session->flashdata('error'); 
              if(isset($error)){
                echo "<div class='alert alert-danger alert-dismissible fade show'><button type='button' class='close' data-dismiss='alert'>&times;</button>".$error."</div>";
              }
              $success = $this->session->flashdata('success');
              if(isset($success)){
                echo "<div class='alert alert-success alert-dismissible fade show'><button type='button' class='close' data-dismiss='alert'>&times;</button>".$success."</div>";
              }
            ?>

            <div class="table-responsive">
              <table class="table table-condensed table-striped table-hover table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th class="align-middle" style="max-width: 30px;">NO.</th>
                    <th class="align-middle">NAME</th>
                    <th class="align-middle">IMAGE</th>
                    <th class="align-middle" style="max-width: 50px;">ACTION</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($item as $row): ?>
                  <tr>
                    <td><?php echo $no."."?></td>
                    <td class="text-left"><?php echo $row->nama_kategori; ?></td>
                    <td><img src="<?php echo base_url('assets/images/category/'.$row->gambar_kategori);?>" alt="<?php echo $row->nama_kategori;?>" height="100" width="auto"></td>
                    <td>
                      <div class="d-flex justify-content-center">
                        <button class="btn btn-warning btn-sm text-white mx-1" id="modalUpdateTrigger" value="<?php echo $row->id_kategori?>" style="min-width: 20px;" title="Update"><i class="far fa-edit fa-fw"></i></button>
                        <button class="btn btn-danger btn-sm mx-1" id="modalDeleteTrigger" value="<?php echo $row->id_kategori?>" style="min-width: 20px;" title="Delete"><i class="fas fa-trash-alt fa-fw"></i></button>
                      </div>
                    </td>
                  </tr>
                  <?php $no++; 
                  endforeach ?>
                </tbody>
              </table>
            </div>
          </div>

          <!-- .col-md-8 -->
          <div class="col-md-4 sidebar ftco-animate">
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Directories</h3>
                <li><a href="<?php echo base_url('admin/dashboard')?>">Dashboard <span>></span></a></li>
                <li><a href="<?php echo base_url('admin/Admin_Account')?>">Account <span>></span></a></li>
                <li class="active"><a href="">Category <span>></span></a></li>
                <li><a href="<?php echo base_url('admin/Admin_Article')?>">Article <span>></span></a></li>
            </div>
          </div>
        </div>
      </div>
    </section> <!-- .section -->

    <!-- Modal Update -->
    <div class="modal fade" id="modalUpdate">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Update Data</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <!-- Modal body -->
          <div class="modal-body">
            <form action="<?php echo base_url('Admin_Category/updateCategory');?>" method="post" id="formUpdate">
              <div class="form-group">
                <label for="updateNama" class="control-label mr-3">Category Name :</label>
                <input type="text" class="form-control" id="updateNama" name="nama" required>
              </div>
              <div class="form-group">
                <label for="updateGambar" class="control-label mr-3">Category Image :</label>
                <input type="file" class="form-control" id="updateGambar" name="gambar" required>
              </div>
              <input type="text" id="updateId" name="id" style="display: none;">
            </form>
          </div>
          
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary" form="formUpdate">Save</button>
          </div>
          
        </div>
      </div>
    </div>


    <!-- Modal Delete -->
    <div class="modal fade" id="modalDelete">
      <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Delete Data</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <!-- Modal body -->
          <div class="modal-body">
            <p>Are you sure you want to delete this category?</p>
          </div>
          
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary" id="modalDeleteTriggerYes" style="min-width: 60px;">Yes</button>
          </div>
          
        </div>
      </div>
    </div>

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
  <script src="<?php echo base_url('assets/js/datatables-demo.js')?>"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      //modal update
      $(document).on('click', '#modalUpdateTrigger', function(){ 
        var id = $(this).val();
        $.ajax({
          url : "<?php echo base_url('admin/Admin_Category/getCategory');?>",
          method : "POST",
          data : {id: id},
          async : false,
          dataType : 'json',
          success: function(data){
            $('#updateNama').val(data['nama_kategori']);
            $('#updateGambar').val(data['gambar_kategori']);
            $('#updateId').val(data['id_kategori']);
            $('#modalUpdate').modal('show');
          },
          error: function(){
            alert('Process Failed');
          }
        });
      });

      //modal delete
      $(document).on('click', '#modalDeleteTrigger', function(){ 
        $('#modalDelete').modal('show');
        var id = $(this).val();
        $(document).on('click', '#modalDeleteTriggerYes', function(){ 
          $.ajax({
            url : "<?php echo base_url('Admin_Category/deleteCategory');?>",
            method : "POST",
            data : {id: id},
            async : false,
            dataType : 'json',
            success: function(data){
              $('#modalDelete').modal('hide');
              location.reload();     
            },
            error: function(){
              alert('Process Failed');
            }
          });
        });
      });

    });
  </script>

  </body>
</html>