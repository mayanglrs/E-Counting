<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view("layouts/head.php") ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php $this->load->view("layouts/navbar.php") ?>
  <!-- /.navbar -->


      <!-- Sidebar Menu -->
      <?php $this->load->view("layouts/sidebar.php") ?>
      <!-- /.sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <?php if ($this->session->flashdata('success')): ?>
          <div class="alert alert-info" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php endif; ?>
        <div class="card-body">
           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="<?php echo base_url('assets/img2/a2.png') ?>" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="<?php echo base_url('assets/img2/a3.jpg') ?>" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="<?php echo base_url('assets/img2/b-3.jpg') ?>" alt="Third slide">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
        </div>

    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  <?php $this->load->view("layouts/footer.php") ?>
  <!-- /Footer -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

    <!-- jQuery -->
    <?php $this->load->view("layouts/js.php") ?>
    <!-- ./jQuery -->


</body>
</html>
