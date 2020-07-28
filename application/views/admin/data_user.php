<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view("layouts/head.php") ?>
</head>

  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
      <!-- Sidebar Menu -->
        <?php $this->load->view("layouts/navbar.php") ?>
        <!-- /.sidebar -->
        <!-- Sidebar Menu -->
        <?php $this->load->view("layouts/sidebar.php") ?>
        <!-- /.sidebar -->

      
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

          <!-- Main content -->
          <section class="content"><br/>
<div class="container">
    <h1>Profil mu <a href="<?php echo base_url('admin/edit_profil/').$data_admin->id ?>" class="btn btn-primary">Edit Profil</a></h1>
    <hr>
  <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="<?php echo base_url('assets/img/').$data_admin->foto ?>" class="avatar img-rounded" style="width:150px" alt="avatar">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        
        <h3>Personal info</h3>
        
          <div class="form-group">
            <label class="col-lg-3 control-label">Nama Lengkap :</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $data_admin->nama_lengkap ?>"  readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email :</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $data_admin->email ?>" readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">No. TPS:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $data_admin->no_tps ?>" readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Desa :</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $data_admin->desa ?>" readonly>
            </div>
          </div>
           <div class="form-group">
            <label class="col-lg-3 control-label">Kota :</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $data_admin->kota ?>" readonly>
            </div>
          </div>
          
      </div>
  </div>
</div>
<hr>
   </section>
          <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

    <!-- jQuery -->
    <?php $this->load->view("layouts/js.php") ?>
    <!-- ./jQuery -->

</div>

</body>
</html>
