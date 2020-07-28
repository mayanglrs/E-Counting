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
    <!-- Content Header (Page header) -->
     <?php $this->load->view("layouts/breadcrumb.php") ?>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Note:</h5>
              For more info just send email to : mayanglrs@gmail.com
            </div>
          </div>
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
