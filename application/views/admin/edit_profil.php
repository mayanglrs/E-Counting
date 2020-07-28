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
<div class="card">
<div class="container">
    <h1>Edit Profil</h1>
    <hr>
  <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="<?php echo base_url('assets/img/').$data_admin->foto ?>" class="avatar img-rounded" style="width:150px" alt="avatar">
           <h6>Upload foto yang berbeda...</h6>
          
          <input type="file" name="foto" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        
        <h3>Personal info</h3>
         <form action="<?=base_url('admin/update_profil/').$data_admin->id;?>" method="post" enctype="multipart/form-data"role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Nama Lengkap :</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $data_admin->nama_lengkap ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email :</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $data_admin->email ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">No. TPS:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $data_admin->no_tps ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Desa :</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $data_admin->desa ?>">
            </div>
          </div>
           <div class="form-group">
            <label class="col-lg-3 control-label">Kota :</label>
            <div class="col-lg-8">
              <select class="form-control select2" style="width: 100%;" name="lokasi_pm">
                <option value="<?php echo $data_admin->kota ?>" selected="selected"><?php echo $data_admin->kota ?></option>
                  <?php foreach($data_kota as $kota):?>
                    <option value="<?php echo $kota->id_kota ?>"><?php echo $kota->nama ?></option>
                  <?php endforeach;?>      
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Password</label>
            <div class="col-lg-8">
              <input class="form-control" type="Password" value="<?php echo $data_admin->password ?>">
            </div>
          </div>
          <input type="hidden" value="<?php echo $data_admin->foto ?>">
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
      </div>
    </form>
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
