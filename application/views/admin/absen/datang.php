<html lang="en">
<head>
  <?php $this->load->view("layouts/head.php") ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
      <!-- Navbar -->
      <?php $this->load->view("layouts/navbar.php") ?>
      <!-- /.navbar -->


        <!-- Sidebar Menu -->
        <?php $this->load->view("layouts/sidebar.php") ?>
        <!-- /.sidebar -->
      
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

         <br/><br/>

          <!-- Main content -->
          <section class="content">
            <div class="card">
            <div class="card-body">
              <div class="card card-primary">
              	<h1 align="center">Masukkan NIK</h1>
                <div class="container">
                <form class="form-horizontal" action="<?php echo base_url('absen/absen'); ?>" method="post">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="nik">NIK:</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" style="width: 100%;" name="nik">
                        <option selected="selected"></option>
                      <?php foreach($absen as $pm):?>
                        <option value="<?php echo $pm->nik ?>"><?php echo $pm->nama ?></option>
                      <?php endforeach;?>      
                      </select>
                    </div>
                  </div>
                  <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Masuk</button>
                      <a href="<?=base_url('admin')?>" class="btn btn-default" role="button">Kembali</a>
                    </div>
                  </div>
                </form>
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