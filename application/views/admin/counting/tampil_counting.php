<html lang="en">
<head>
  <?php $this->load->view("layouts/head.php") ?>
  <?php if (isset($_POST["navigasi"])) {
        $navigasi=$_POST["navigasi"];
        $nilai = $_POST["counter"];  
     }
  ?>
  
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
            <?php if ($this->session->flashdata('failed')): ?>
              <div class="alert alert-danger" role="alert">
                <?php echo $this->session->flashdata('failed'); ?>
              </div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('salah')): ?>
              <div class="alert alert-danger" role="alert">
                <?php echo $this->session->flashdata('salah'); ?>
              </div>
            <?php endif; ?>

            <div class="card">
            <div class="card-body">
              <div class="card card-primary">
                <h2 align="center">Scanning barcode hasil pemungutan</h2>
                <div class="container">
                <form class="form-horizontal" action="" method="post">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="nik">Kode</label>
                    <div class="col-sm-10">
                      <input type="text" name="kode" class="form-control">
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="control-label col-sm-10" for="nik" align="center">HASIL</label>
                    <div class="col-sm-10" align="center">
                      <h2><input type="text" name="counter" size="18px" style="text-align: center;" value=<?php 
   $nilai = @$_POST["counter"]; 
   if ($nilai==null) {
    echo "0";
   }
   if (isset($_POST["navigasi"])) {
    if ($navigasi=="prev") {
     echo --$nilai;
    }
    elseif ($navigasi=="next") {
     echo ++$nilai;
    }
   }
   ?>>&nbsp&nbsp<input type="text" name="counter" size="18px" style="text-align: center;" value="0"</h2>
                  </div>
                </div>
                  <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="navigasi" value="next" class="btn btn-success">Hitung</button>
                      <a href="<?php echo base_url('counting'); ?>" class="btn btn-default">Reset</a>
                    </div>
                  </div>
                  <hr/>
                  <!-- <?php if($counter > 0){ ?>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="nik">HASIL</label>
                    <div class="col-sm-10">
                  <h2><?php echo $counter; ?></h2>
                  </div>
                  <?php }else{ ?>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="nik">HASIL</label>
                    <div class="col-sm-10">
                  <h2><?php echo 0; } ?></h2>
                  </div> -->

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